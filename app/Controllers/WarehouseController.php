<?php

namespace App\Controllers;

use App\Models\WarehouseModel;

class WarehouseController extends BaseController
{
    protected $warehouseModel;

    public function __construct()
    {
        $this->warehouseModel = new WarehouseModel();
    }

    // Menampilkan halaman utama daftar gudang
    public function index()
    {
        return view('warehouses/index');
    }

    // Mengambil data gudang untuk DataTables dengan server-side processing
    public function getWarehouses()
    {
        $request = service('request');
        $limit = $request->getVar('length');
        $offset = $request->getVar('start');
        $search = $request->getVar('search')['value'];
        $order = $request->getVar('order')[0];
        $orderColumnIndex = $order['column'];
        $orderDirection = $order['dir'];

        // Mapping column index to column name
        $columns = ['name', 'location'];
        $orderColumn = $columns[$orderColumnIndex] ?? 'name';

        $warehouses = $this->warehouseModel->getDatatables($limit, $offset, $search, [
            'column' => $orderColumn,
            'direction' => $orderDirection,
        ]);

        $totalFiltered = $this->warehouseModel->getTotalFiltered($search);
        $totalAll = $this->warehouseModel->getTotalAll();

        // Mengembalikan data dalam format DataTables
        $data = [];
        foreach ($warehouses as $warehouse) {
            $data[] = [
                'name' => $warehouse->name,
                'location' => $warehouse->location,
                'actions' => '
                    <div class="dropdown">
                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="' . base_url('warehouses/edit/' . $warehouse->id) . '">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="javascript:void(0);" onclick="deleteWarehouse(' . $warehouse->id . ')">Hapus</a></li>
                        </ul>
                    </div>'
            ];
        }

        return $this->response->setJSON([
            'draw' => intval($request->getVar('draw')),
            'recordsTotal' => $totalAll,
            'recordsFiltered' => $totalFiltered,
            'data' => $data
        ]);
    }

    // Menampilkan halaman form tambah gudang
    public function create()
    {
        return view('warehouses/create');
    }

    // Menyimpan data gudang baru
    public function store()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'location' => $this->request->getPost('location'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $this->warehouseModel->insert($data);

        return redirect()->to(base_url('warehouses'))->with('swal_success', 'Gudang berhasil ditambahkan.');
    }

    // Menampilkan halaman form edit gudang
    public function edit($id)
    {
        $warehouse = $this->warehouseModel->find($id);
        return view('warehouses/edit', ['warehouse' => $warehouse]);
    }

    // Mengupdate data gudang
    public function update($id)
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'location' => $this->request->getPost('location'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $this->warehouseModel->update($id, $data);

        return redirect()->to(base_url('warehouses'))->with('swal_success', 'Gudang berhasil diupdate.');
    }

    // Menghapus data gudang
    public function delete($id)
    {
        $this->warehouseModel->delete($id);
        return redirect()->to(base_url('warehouses'))->with('swal_success', 'Gudang berhasil dihapus.');
    }
}