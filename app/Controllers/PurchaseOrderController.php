<?php

namespace App\Controllers;

use App\Models\PurchaseOrderModel;
use App\Models\SupplierModel;
use App\Models\BrandModel;

class PurchaseOrderController extends BaseController
{
    protected $purchaseOrderModel;
    protected $supplierModel;
    protected $brandModel;

    public function __construct()
    {
        $this->purchaseOrderModel = new PurchaseOrderModel();
        $this->supplierModel = new SupplierModel();
        $this->brandModel = new BrandModel();
    }

    public function index()
    {
        $data['purchase_orders'] = $this->purchaseOrderModel
            ->select('purchase_orders.*, suppliers.supplier_name as supplier_name, brands.brand_name as brand_name') // Gunakan brand_name
            ->join('suppliers', 'purchase_orders.supplier_id = suppliers.id', 'left')
            ->join('brands', 'purchase_orders.brand_id = brands.id', 'left')
            ->findAll();
    
        return view('purchase_orders/index', $data);
    }
    
    public function create()
    {
        $data['suppliers'] = $this->supplierModel->findAll();
        return view('purchase_orders/create', $data);
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'po_date' => 'required|valid_date',
            'supplier_id' => 'required|integer',
            'brand_id' => 'required|integer',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Generate PO Number
        $poNumber = 'PO-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3)));

        $data = [
            'po_date' => $this->request->getPost('po_date'),
            'po_number' => $poNumber,
            'supplier_id' => $this->request->getPost('supplier_id'),
            'brand_id' => $this->request->getPost('brand_id'),
            'status' => 'pending',
        ];

        $this->purchaseOrderModel->insert($data);

        return redirect()->to('/purchase-orders')->with('swal_success', 'Purchase Order berhasil dibuat!');
    }

    public function getBrandsBySupplier($supplierId)
{
    // Pastikan menggunakan model brand dengan relasi supplier
    $brands = $this->brandModel
        ->where('supplier_id', $supplierId) // Relasi supplier_id
        ->findAll();

    // Jika tidak ada brand terkait, beri pesan error
    if (empty($brands)) {
        return $this->response->setJSON(['status' => 'error', 'message' => 'Tidak ada brand terkait']);
    }

    // Kirimkan data brand yang ditemukan
    return $this->response->setJSON(['status' => 'success', 'data' => $brands]);
}

}
