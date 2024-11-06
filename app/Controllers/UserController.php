<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PositionModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        // Menampilkan halaman daftar pengguna
        return view('users/index');
    }

    public function getUsers()
    {
        $model = new UserModel();
        $request = service('request');

        // Ambil parameter dari request untuk server-side processing
        $search = $request->getVar('search')['value'] ?? '';
        $start = (int)($request->getVar('start') ?? 0);
        $length = (int)($request->getVar('length') ?? 10);
        $orderColumnIndex = $request->getVar('order')[0]['column'] ?? 0;
        $orderDir = $request->getVar('order')[0]['dir'] ?? 'asc';

        // Kolom yang diurutkan, sesuai urutan pada DataTables
        $columns = ['full_name', 'username', 'email'];
        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        // Mengambil data dengan metode dari model
        $totalData = $model->countAllData();
        $totalFiltered = $model->countFilteredData($search);
        $data = $model->getDataTables($search, $start, $length, $orderColumn, $orderDir);

        // Format data untuk DataTables
        $result = [
            "draw" => intval($request->getVar('draw')),
            "recordsTotal" => $totalData,
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];

        return $this->response->setJSON($result);
    }

    public function create()
    {
        $positionModel = new PositionModel();
        $data['positions'] = $positionModel->findAll(); // Mengambil daftar posisi untuk dropdown
        return view('users/create', $data);
    }

    public function store()
    {
        $model = new UserModel();
        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'whatsapp_number' => $this->request->getPost('whatsapp_number'),
            'position_id' => $this->request->getPost('position_id'),
            'password' => $this->request->getPost('password') // Tambahkan password
        ];

        if ($model->save($data)) {
            return redirect()->to('/users')->with('success', 'Pengguna berhasil ditambahkan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan pengguna.')->withInput();
        }
    }

    public function edit($id)
    {
        $model = new UserModel();
        $positionModel = new PositionModel();
        $data['user'] = $model->find($id);
        $data['positions'] = $positionModel->findAll(); // Mengambil daftar posisi untuk dropdown

        if (!$data['user']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Pengguna dengan ID $id tidak ditemukan");
        }

        return view('users/edit', $data);
    }

    public function update($id)
    {
        $model = new UserModel();
        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'whatsapp_number' => $this->request->getPost('whatsapp_number'),
            'position_id' => $this->request->getPost('position_id')
        ];

        // Periksa apakah password diisi, hanya update jika ada input baru
        if ($this->request->getPost('password')) {
            $data['password'] = $this->request->getPost('password');
        }

        if ($model->update($id, $data)) {
            return redirect()->to('/users')->with('success', 'Pengguna berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui pengguna.')->withInput();
        }
    }

    public function delete($id)
    {
        $model = new UserModel();

        if ($model->delete($id)) {
            return redirect()->to('/users')->with('success', 'Pengguna berhasil dihapus.');
        } else {
            return redirect()->to('/users')->with('error', 'Gagal menghapus pengguna.');
        }
    }
}