<?php

namespace App\Controllers;

use App\Models\PositionModel;
use CodeIgniter\Controller;

class PositionController extends Controller
{
    public function index()
    {
        // Menampilkan halaman daftar posisi
        return view('positions/index');
    }

    public function getPositions()
    {
        $model = new PositionModel();
        $request = service('request');

        // Ambil parameter dari request untuk server-side processing
        $search = $request->getVar('search')['value'] ?? '';
        $start = (int)($request->getVar('start') ?? 0);
        $length = (int)($request->getVar('length') ?? 10);
        $orderColumnIndex = $request->getVar('order')[0]['column'] ?? 0;
        $orderDir = $request->getVar('order')[0]['dir'] ?? 'asc';

        // Kolom yang diurutkan, sesuai urutan pada DataTables
        $columns = ['position_name', 'position_code'];
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
        // Menampilkan form tambah posisi baru
        return view('positions/create');
    }

    public function store()
    {
        $model = new PositionModel();
        $data = [
            'position_name' => $this->request->getPost('position_name'),
            'position_code' => $this->request->getPost('position_code')
        ];

        if ($model->save($data)) {
            return redirect()->to('/positions')->with('success', 'Posisi berhasil ditambahkan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan posisi.')->withInput();
        }
    }

    public function edit($id)
    {
        $model = new PositionModel();
        $data['position'] = $model->find($id);

        if (!$data['position']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Posisi dengan ID $id tidak ditemukan");
        }

        return view('positions/edit', $data);
    }

    public function update($id)
    {
        $model = new PositionModel();
        $data = [
            'position_name' => $this->request->getPost('position_name'),
            'position_code' => $this->request->getPost('position_code')
        ];

        if ($model->update($id, $data)) {
            return redirect()->to('/positions')->with('success', 'Posisi berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui posisi.')->withInput();
        }
    }

    public function delete($id)
    {
        $model = new PositionModel();

        if ($model->delete($id)) {
            return redirect()->to('/positions')->with('success', 'Posisi berhasil dihapus.');
        } else {
            return redirect()->to('/positions')->with('error', 'Gagal menghapus posisi.');
        }
    }
}