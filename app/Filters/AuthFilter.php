<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('isLoggedIn')) {
            // Redirect ke halaman login jika belum login
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Jika user sudah login, cegah akses login/registrasi
        $currentPath = $request->getUri()->getPath();
        if (session()->get('isLoggedIn') && in_array($currentPath, ['login', 'register'])) {
            return redirect()->to('/dashboard');
        }
    }
}
