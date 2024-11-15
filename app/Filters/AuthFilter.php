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
            return redirect()->to('auth/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Dapatkan path saat ini
        $currentPath = $request->getUri()->getPath();

        // Cek jika user sudah login, cegah akses ke login atau register
        if (session()->get('isLoggedIn') && (strpos($currentPath, 'auth/login') !== false || strpos($currentPath, 'auth/register') !== false)) {
            return redirect()->to('/dashboard'); // Atau halaman utama ente
        }
    }
}
