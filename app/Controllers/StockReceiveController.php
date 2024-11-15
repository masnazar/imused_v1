<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\WarehouseModel;
use App\Models\StockReceiveModel;
use App\Models\StockModel;
use App\Models\UserModel;
use App\Models\SupplierModel;

class StockReceiveController extends BaseController
{
    protected $productModel;
    protected $warehouseModel;
    protected $stockReceiveModel;
    protected $stockModel;
    protected $userModel;
    protected $supplierModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->warehouseModel = new WarehouseModel();
        $this->stockReceiveModel = new StockReceiveModel();
        $this->stockModel = new StockModel();
        $this->userModel = new UserModel();
        $this->supplierModel = new SupplierModel();
    }

    // Menampilkan formulir penerimaan barang
    public function index()
    {
        $data['products'] = $this->productModel->findAll();
        $data['warehouses'] = $this->warehouseModel->findAll();

        $userId = session()->get('user_id');
        $user = $this->userModel->find($userId);
        $data['current_user'] = $user ? $user['full_name'] : 'N/A';

        return view('stock_receive/form', $data);
    }

    // Menyimpan data penerimaan barang
    public function store()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'warehouse_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|greater_than[0]',
            'type' => 'required|in_list[vendor,internal,return,adjustment,donation]',
            'received_at' => 'required|valid_date',
            'source_id' => 'permit_empty|integer',
            'status' => 'required|in_list[pending,completed,canceled]',
            'po_number' => 'required_if_type_vendor', // Custom rule for PO Number
            'remarks' => 'permit_empty|string'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors())
                            ->with('swal_error', 'Gagal menyimpan data. Silakan periksa input Anda.');
        }

        $userId = session()->get('user_id');
        if (!$userId) {
            return redirect()->back()->with('swal_error', 'Session user tidak ditemukan, harap login ulang.');
        }

        $transactionId = 'TRX-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3)));

        $data = [
            'transaction_id' => $transactionId,
            'warehouse_id' => $this->request->getPost('warehouse_id'),
            'product_id' => $this->request->getPost('product_id'),
            'quantity' => $this->request->getPost('quantity'),
            'type' => $this->request->getPost('type'),
            'received_at' => $this->request->getPost('received_at'),
            'source_id' => $this->request->getPost('source_id'),
            'status' => $this->request->getPost('status'),
            'po_number' => $this->request->getPost('po_number'),
            'remarks' => $this->request->getPost('remarks'),
            'received_by' => $userId
        ];

        $this->stockReceiveModel->insert($data);
        $this->updateWarehouseStock($data['product_id'], $data['warehouse_id'], $data['quantity']);

        return redirect()->to(base_url('stock-receive'))->with('swal_success', 'Data stok masuk berhasil disimpan dan stok diperbarui.');
    }

    private function updateWarehouseStock($productId, $warehouseId, $quantity)
    {
        $existingStock = $this->stockModel
            ->where('product_id', $productId)
            ->where('warehouse_id', $warehouseId)
            ->first();

        if ($existingStock) {
            $newQuantity = $existingStock['quantity'] + $quantity;
            $this->stockModel->update($existingStock['id'], ['quantity' => $newQuantity]);
        } else {
            $this->stockModel->insert([
                'product_id' => $productId,
                'warehouse_id' => $warehouseId,
                'quantity' => $quantity
            ]);
        }
    }

    public function getSuppliersByProduct($productId)
    {
        $suppliers = $this->productModel->getSuppliersByProduct($productId);

        if (empty($suppliers)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Tidak ada supplier terkait']);
        }

        return $this->response->setJSON(['status' => 'success', 'data' => $suppliers]);
    }
}
