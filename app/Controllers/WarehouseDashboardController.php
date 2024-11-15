<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\WarehouseModel;
use App\Models\StockModel;

class WarehouseDashboardController extends BaseController
{
    protected $productModel;
    protected $warehouseModel;
    protected $stockModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->warehouseModel = new WarehouseModel();
        $this->stockModel = new StockModel();
    }

    public function index()
    {
        // Mengambil total produk
        $totalProducts = $this->productModel->countAll();

        // Mengambil total gudang
        $totalWarehouses = $this->warehouseModel->countAll();

        // Mengambil data stok per produk per gudang
        $stockData = $this->stockModel
            ->select('products.product_name, warehouses.name as warehouse_name, stocks.quantity, stocks.updated_at')
            ->join('products', 'stocks.product_id = products.id', 'left')
            ->join('warehouses', 'stocks.warehouse_id = warehouses.id', 'left')
            ->orderBy('products.product_name', 'ASC')
            ->findAll();

        // Menyiapkan data untuk chart
        $chartCategories = [];
        $stockSeries = [];

        foreach ($stockData as $data) {
            $chartCategories[] = $data['product_name'] . ' - ' . $data['warehouse_name'];
            $stockSeries[] = (int)$data['quantity'];
        }

        $chartSeries[] = [
            'name' => 'Jumlah Stok',
            'data' => $stockSeries
        ];

        // Mengirim data ke view
        $data = [
            'totalProducts' => $totalProducts,
            'totalWarehouses' => $totalWarehouses,
            'chartData' => [
                'categories' => $chartCategories,
                'series' => $chartSeries
            ],
            'stockData' => $stockData
        ];

        return view('dashboard/warehouse_dashboard', $data);
    }
}
