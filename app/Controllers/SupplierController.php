<?php

namespace App\Controllers;

use App\Models\SupplierModel;
use CodeIgniter\Controller;

class SupplierController extends Controller
{
    // Menampilkan halaman daftar supplier
    public function index()
    {
        return view('inventory/suppliers/index');
    }

    // Menampilkan form untuk menambahkan supplier baru
    public function create()
    {
        return view('inventory/suppliers/create');
    }

    // Menyimpan data supplier baru
    public function store()
    {
        $model = new SupplierModel();

        // Validasi input data
        $validation = \Config\Services::validation();
        $validation->setRules([
            'supplier_name' => 'required',
            'supplier_code' => 'required|alpha|min_length[2]|max_length[10]',
            'address'       => 'required',
            'pic_name'      => 'required',
            'pic_whatsapp'  => 'required|regex_match[/^62[0-9]{9,13}$/]'
        ]);

        // Jika validasi gagal, kembali ke form dengan error
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors())
                            ->with('swal_error', 'Gagal menambahkan supplier. Silakan periksa input Anda.');
        }

        // Simpan data supplier
        $model->save([
            'supplier_name' => $this->request->getPost('supplier_name'),
            'supplier_code' => $this->request->getPost('supplier_code'),
            'address'       => $this->request->getPost('address'),
            'pic_name'      => $this->request->getPost('pic_name'),
            'pic_whatsapp'  => $this->request->getPost('pic_whatsapp'),
        ]);

        return redirect()->to('/suppliers')->with('swal_success', 'Supplier berhasil ditambahkan.');
    }

    // Menampilkan form edit dengan data supplier yang dipilih
    public function edit($id)
    {
        $model = new SupplierModel();
        $data['supplier'] = $model->find($id);

        if (!$data['supplier']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Supplier tidak ditemukan");
        }

        return view('inventory/suppliers/edit', $data);
    }

    // Memperbarui data supplier yang sudah ada
    public function update($id)
    {
        $model = new SupplierModel();

        $validation = \Config\Services::validation();
        $validation->setRules([
            'supplier_name' => 'required',
            'supplier_code' => 'required|alpha|min_length[2]|max_length[10]',
            'address'       => 'required',
            'pic_name'      => 'required',
            'pic_whatsapp'  => 'required|regex_match[/^62[0-9]{9,13}$/]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors())
                            ->with('swal_error', 'Gagal memperbarui supplier. Silakan periksa input Anda.');
        }

        // Update data supplier
        $model->update($id, [
            'supplier_name' => $this->request->getPost('supplier_name'),
            'supplier_code' => $this->request->getPost('supplier_code'),
            'address'       => $this->request->getPost('address'),
            'pic_name'      => $this->request->getPost('pic_name'),
            'pic_whatsapp'  => $this->request->getPost('pic_whatsapp'),
        ]);

        return redirect()->to('/suppliers')->with('swal_success', 'Supplier berhasil diperbarui.');
    }

    // Menghapus data supplier berdasarkan ID
    public function delete($id)
    {
        $model = new SupplierModel();
        $model->delete($id);

        return redirect()->to('/suppliers')->with('swal_success', 'Supplier berhasil dihapus.');
    }

    // Server-side processing untuk data supplier di DataTables
    public function getSuppliers()
    {
        $model = new SupplierModel();

        // Ambil parameter dari DataTables
        $request = service('request');
        $search = $request->getVar('search')['value'] ?? '';
        $start = (int)($request->getVar('start') ?? 0);
        $length = (int)($request->getVar('length') ?? 10);
        $orderColumnIndex = $request->getVar('order')[0]['column'] ?? 0;
        $orderDir = $request->getVar('order')[0]['dir'] ?? 'asc';
        $columns = ['supplier_name', 'supplier_code', 'address', 'pic_name', 'pic_whatsapp'];
        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        // Ambil data dari model
        $totalData = $model->countAllData();
        $totalFiltered = $model->countFilteredData($search);
        $data = $model->getDataTables($search, $start, $length, $orderColumn, $orderDir);

        // Tambahkan dropdown tiga titik vertikal untuk setiap data
        foreach ($data as &$row) {
            $row['actions'] = '
                <div class="dropdown">
                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-more-2-fill"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="' . base_url('suppliers/edit/' . $row['id']) . '">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="' . base_url('suppliers/delete/' . $row['id']) . '" onclick="return confirm(\'Yakin ingin menghapus supplier ini?\')">Hapus</a></li>
                    </ul>
                </div>';
        }

        // Format data untuk DataTables
        $result = [
            "draw" => intval($request->getVar('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        ];

        return $this->response->setJSON($result);
    }
}
