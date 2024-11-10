<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PositionModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna untuk ditampilkan di halaman daftar pengguna
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();

        return view('users/index', $data);
    }

    public function create()
    {
        // Ambil data posisi untuk dropdown pilihan posisi
        $positionModel = new PositionModel();
        $data['positions'] = $positionModel->findAll();

        return view('users/create', $data);
    }

    public function store()
    {
        // Validasi input untuk proses penyimpanan data user baru
        $validation = \Config\Services::validation();
        $validation->setRules([
            'full_name'       => 'required|min_length[3]|max_length[50]',
            'username'        => 'required|alpha_numeric|min_length[3]|max_length[20]|is_unique[users.username]',
            'email'           => 'required|valid_email|is_unique[users.email]',
            'whatsapp_number' => 'required|regex_match[/^62[0-9]{9,13}$/]',
            'position_id'     => 'required|integer',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan data user ke database
        $userModel = new UserModel();
        $userModel->save([
            'full_name'       => $this->request->getPost('full_name'),
            'username'        => $this->request->getPost('username'),
            'email'           => $this->request->getPost('email'),
            'whatsapp_number' => $this->request->getPost('whatsapp_number'),
            'position_id'     => $this->request->getPost('position_id'),
        ]);

        return redirect()->to('/users')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Ambil data pengguna dan posisi untuk edit
        $userModel = new UserModel();
        $positionModel = new PositionModel();

        $data['user'] = $userModel->find($id);
        $data['positions'] = $positionModel->findAll();

        return view('users/edit', $data);
    }

    public function update($id)
    {
        // Validasi input untuk proses update data user
        $validation = \Config\Services::validation();
        $validation->setRules([
            'full_name'       => 'required|min_length[3]|max_length[50]',
            'username'        => "required|alpha_numeric|min_length[3]|max_length[20]|is_unique[users.username,id,{$id}]",
            'email'           => "required|valid_email|is_unique[users.email,id,{$id}]",
            'whatsapp_number' => 'required|regex_match[/^62[0-9]{9,13}$/]',
            'position_id'     => 'required|integer',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Update data user di database
        $userModel = new UserModel();
        $userModel->update($id, [
            'full_name'       => $this->request->getPost('full_name'),
            'username'        => $this->request->getPost('username'),
            'email'           => $this->request->getPost('email'),
            'whatsapp_number' => $this->request->getPost('whatsapp_number'),
            'position_id'     => $this->request->getPost('position_id'),
        ]);

        return redirect()->to('/users')->with('success', 'Pengguna berhasil diperbarui.');
    }

    public function delete($id)
    {
        // Hapus data user berdasarkan ID
        $userModel = new UserModel();
        $userModel->delete($id);

        return redirect()->to('/users')->with('success', 'Pengguna berhasil dihapus.');
    }
}
