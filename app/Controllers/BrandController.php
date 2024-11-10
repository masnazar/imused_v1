<?php

namespace App\Controllers;

use App\Models\BrandModel;
use App\Models\SupplierModel;
use CodeIgniter\Controller;

class BrandController extends Controller
{
    // Menampilkan halaman daftar brand
    public function index()
    {
        return view('brands/index');
    }

    // Menampilkan form untuk menambahkan brand baru
    public function create()
    {
        $supplierModel = new SupplierModel();
        $data['suppliers'] = $supplierModel->findAll();

        return view('brands/create', $data);
    }

    // Menyimpan data brand baru
    public function store()
    {
        $model = new BrandModel();
        $validation = \Config\Services::validation();

        $validation->setRules([
            'brand_name' => 'required',
            'brand_code' => 'required|alpha_numeric|min_length[2]|max_length[10]',
            'supplier_id' => 'required|integer'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors())
                            ->with('swal_error', 'Gagal menambahkan brand. Silakan periksa input Anda.');
        }

        $model->save([
            'brand_name' => $this->request->getPost('brand_name'),
            'brand_code' => $this->request->getPost('brand_code'),
            'supplier_id' => $this->request->getPost('supplier_id'),
        ]);

        return redirect()->to('/brands')->with('swal_success', 'Brand berhasil ditambahkan.');
    }

    // Menampilkan form edit dengan data brand yang dipilih
    public function edit($id)
    {
        $model = new BrandModel();
        $supplierModel = new SupplierModel();

        $data['brand'] = $model->find($id);
        $data['suppliers'] = $supplierModel->findAll();

        if (!$data['brand']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Brand tidak ditemukan");
        }

        return view('brands/edit', $data);
    }

    // Memperbarui data brand yang sudah ada
    public function update($id)
    {
        $model = new BrandModel();
        $validation = \Config\Services::validation();

        $validation->setRules([
            'brand_name' => 'required',
            'brand_code' => 'required|alpha_numeric|min_length[2]|max_length[10]',
            'supplier_id' => 'required|integer'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors())
                            ->with('swal_error', 'Gagal memperbarui brand. Silakan periksa input Anda.');
        }

        $model->update($id, [
            'brand_name' => $this->request->getPost('brand_name'),
            'brand_code' => $this->request->getPost('brand_code'),
            'supplier_id' => $this->request->getPost('supplier_id'),
        ]);

        return redirect()->to('/brands')->with('swal_success', 'Brand berhasil diperbarui.');
    }

    // Menghapus data brand berdasarkan ID
    public function delete($id)
    {
        $model = new BrandModel();
        $model->delete($id);

        return redirect()->to('/brands')->with('swal_success', 'Brand berhasil dihapus.');
    }

    // Server-side processing untuk data brand di DataTables
    public function getBrands()
    {
        $model = new BrandModel();
        $request = service('request');

        $search = $request->getVar('search')['value'] ?? '';
        $start = (int)($request->getVar('start') ?? 0);
        $length = (int)($request->getVar('length') ?? 10);
        $orderColumnIndex = $request->getVar('order')[0]['column'] ?? 0;
        $orderDir = $request->getVar('order')[0]['dir'] ?? 'asc';
        $columns = ['brand_name', 'brand_code', 'supplier_name'];
        $orderColumn = $columns[$orderColumnIndex] ?? 'brand_name';

        $totalData = $model->countAllData();
        $totalFiltered = $model->countFilteredData($search);
        $data = $model->getDataTables($search, $start, $length, $orderColumn, $orderDir);

        foreach ($data as &$row) {
            $row['actions'] = '
                <div class="dropdown">
                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-more-2-fill"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="' . base_url('brands/edit/' . $row['id']) . '">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="' . base_url('brands/delete/' . $row['id']) . '" onclick="return confirm(\'Yakin ingin menghapus brand ini?\')">Hapus</a></li>
                    </ul>
                </div>';
        }

        $result = [
            "draw" => intval($request->getVar('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        ];

        return $this->response->setJSON($result);
    }
}
