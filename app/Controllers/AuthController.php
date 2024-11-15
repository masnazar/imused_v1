<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;

class AuthController extends BaseController
{
    // Menampilkan halaman login
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/'); // Arahkan ke dashboard jika sudah login
        }
        return view('auth/login');
    }

    // Proses autentikasi pengguna saat login
    // Proses autentikasi pengguna saat login
public function authenticate()
{
    $session = session();
    $userModel = new UserModel();
    
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $rememberMe = $this->request->getPost('remember'); // Checkbox "Ingat Saya"

    // Ambil user dengan nama posisi
    $user = $userModel->getUserWithPosition($username);

    if ($user && password_verify($password, $user['password'])) {
        $sessionData = [
            'isLoggedIn' => true,
            'user_id'    => $user['id'],
            'username'   => $user['username'],
            'email'      => $user['email'],
            'full_name'  => $user['full_name'],
            'position'   => $user['position_name'] // Simpan nama posisi di session
        ];

        // Mengatur sesi dan cookie "Ingat Saya"
        if ($rememberMe) {
            $session->set($sessionData);
            // Set cookie untuk durasi 60 hari
            setcookie("rememberMe", json_encode($sessionData), time() + 60 * 24 * 60 * 60, "/");
        } else {
            $session->set($sessionData);
            // Set waktu sesi 10 jam
            $session->setTempdata('isLoggedIn', true, 60 * 60 * 10);
        }

        return redirect()->to('/')->with('swal_success', 'Login berhasil! Selamat datang kembali.');
    } else {
        return redirect()->back()->withInput()->with('swal_error', 'Username atau password salah');
    }
}


    // Menampilkan halaman registrasi
    public function register()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/'); // Arahkan ke dashboard jika sudah login
        }
        
        $positionModel = new \App\Models\PositionModel();
        $data['positions'] = $positionModel->findAll();

        return view('auth/register', $data);
    }

    // Menyimpan data registrasi pengguna ke database
    public function storeRegistration()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'full_name'         => 'required|min_length[3]',
            'username'          => 'required|is_unique[users.username]',
            'email'             => 'required|valid_email|is_unique[users.email]',
            'whatsapp'          => 'required|regex_match[/^62[0-9]{9,12}$/]',
            'position'          => 'required',
            'password'          => 'required|min_length[8]|max_length[16]',
            'confirm_password'  => 'required|matches[password]'
        ]);

        if (!$this->validate($validation->getRules())) {
            session()->setFlashdata('swal_error', 'Validasi gagal. Periksa input Anda.');
            return redirect()->back()->withInput();
        }

        $userModel = new UserModel();
        $hashedPassword = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        $userData = [
            'full_name'       => $this->request->getPost('full_name'),
            'username'        => $this->request->getPost('username'),
            'email'           => $this->request->getPost('email'),
            'whatsapp_number' => $this->request->getPost('whatsapp'),
            'position_id'     => $this->request->getPost('position'),
            'password'        => $hashedPassword,
            'created_at'      => Time::now(),
            'updated_at'      => Time::now(),
        ];

        if ($userModel->insert($userData)) {
            session()->setFlashdata('swal_success', 'Registrasi berhasil! Silakan login.');
            return redirect()->to('login');
        } else {
            session()->setFlashdata('swal_error', 'Terjadi kesalahan saat menyimpan data.');
            return redirect()->back()->withInput();
        }
    }

    // Logout pengguna
public function logout()
{
    session()->destroy();
    // Hapus cookie "Ingat Saya" saat logout
    if (isset($_COOKIE['rememberMe'])) {
        setcookie("rememberMe", "", time() - 3600, "/");
    }
    return redirect()->to('login')->with('swal_success', 'Anda telah logout.');
}
}