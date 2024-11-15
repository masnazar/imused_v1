<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StockTransferModel;
use App\Models\ProductModel;
use App\Models\WarehouseModel;

class StockTransferController extends BaseController
{
    protected $stockTransferModel;
    protected $productModel;
    protected $warehouseModel;

    public function __construct()
    {
        $this->stockTransferModel = new StockTransferModel();
        $this->productModel = new ProductModel();
        $this->warehouseModel = new WarehouseModel();
    }

    public function index()
    {
        return view('stock_transfers/index');
    }

    public function getTransfers()
    {
        $request = service('request');
        $draw = intval($request->getGet('draw'));
        $start = intval($request->getGet('start'));
        $length = intval($request->getGet('length'));

        $transfers = $this->stockTransferModel->getTransfersWithDetails($start, $length);
        $totalRecords = $this->stockTransferModel->countAllTransfers();
        $filteredRecords = $this->stockTransferModel->countFilteredTransfers();

        $data = [
            "draw" => $draw,
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $filteredRecords,
            "data" => $transfers
        ];

        return $this->response->setJSON($data);
    }

    public function create()
    {
        $products = $this->productModel->findAll();
        $warehouses = $this->warehouseModel->findAll();
        return view('stock_transfers/create', compact('products', 'warehouses'));
    }

    public function store()
    {
        $data = [
            'product_id' => $this->request->getPost('product_id'),
            'from_warehouse_id' => $this->request->getPost('from_warehouse_id'),
            'to_warehouse_id' => $this->request->getPost('to_warehouse_id'),
            'quantity' => $this->request->getPost('quantity'),
            'status' => 'Pending',
            'remarks' => $this->request->getPost('remarks')
        ];

        $this->stockTransferModel->insert($data);
        return redirect()->to(base_url('stock_transfers'))->with('swal_success', 'Pengajuan transfer stok berhasil disimpan.');
    }

    public function approveTransfer($id)
{
    log_message('info', 'approveTransfer method called with ID: ' . $id);

    if ($this->request->getMethod() === 'post') {
        // Log data yang masuk
        log_message('info', 'Data POST: ' . json_encode($this->request->getPost()));

        if ($updated) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Transfer stok berhasil disetujui.']);
        } else {
            return $this->response->setStatusCode(500)->setJSON(['status' => 'error', 'message' => 'Gagal menyetujui transfer stok.']);
        }
    } else {
        throw new \CodeIgniter\Exceptions\PageNotFoundException();
    }
}

    public function rejectTransfer($id)
    {
        if ($this->request->getMethod() === 'post') {
            $updated = $this->stockTransferModel->update($id, [
                'status' => 'Rejected',
                'rejected_by' => session()->get('user_id'),
                'rejected_at' => date('Y-m-d H:i:s')
            ]);
            
            if ($updated) {
                return $this->response->setJSON(['status' => 'success', 'message' => 'Transfer stok berhasil ditolak.']);
            } else {
                return $this->response->setStatusCode(500)->setJSON(['status' => 'error', 'message' => 'Gagal menolak transfer stok.']);
            }
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }
    }

    public function show($id)
    {
        $transfer = $this->stockTransferModel->getTransfersWithDetails()->find($id);
        if (!$transfer) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Transfer stok tidak ditemukan.");
        }
        return view('stock_transfers/show', compact('transfer'));
    }
}