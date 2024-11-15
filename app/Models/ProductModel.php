<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'product_name', 'product_code', 'product_sku', 'hpp', 'hpp_penjualan', 'stok', 
        'brand_id', 'supplier_id', 'bpom_number', 'created_at', 'updated_at'
    ];
    protected $useTimestamps = true;

    // Menghitung semua data produk tanpa filter
    public function countAllData()
    {
        return $this->countAllResults();
    }

    // Menghitung data dengan filter pencarian
    public function countFilteredData($search = '')
    {
        $builder = $this->table($this->table);
        if ($search) {
            $builder->like('product_name', $search)
                    ->orLike('product_sku', $search)
                    ->orLike('bpom_number', $search)
                    ->orLike('hpp', $search)
                    ->orLike('hpp_penjualan', $search);
        }
        return $builder->countAllResults();
    }

    // Mengambil data untuk DataTables dengan total stok
    public function getDataTables($search = '', $start = 0, $length = 10, $orderColumn = 'id', $orderDir = 'asc')
    {
        $builder = $this->table($this->table)
                        ->select('products.*, brands.brand_name, suppliers.supplier_name, COALESCE(SUM(stocks.quantity), 0) as total_stock')
                        ->join('brands', 'products.brand_id = brands.id', 'left')
                        ->join('suppliers', 'products.supplier_id = suppliers.id', 'left')
                        ->join('stocks', 'stocks.product_id = products.id', 'left') // Join dengan tabel stocks
                        ->groupBy('products.id'); // Group by untuk menghitung total stok

        if ($search) {
            $builder->like('product_name', $search)
                    ->orLike('product_sku', $search)
                    ->orLike('bpom_number', $search)
                    ->orLike('hpp', $search)
                    ->orLike('hpp_penjualan', $search);
        }

        $builder->orderBy($orderColumn, $orderDir)
                ->limit($length, $start);

        return $builder->get()->getResultArray();
    }

    public function getSuppliersByProduct($productId)
    {
        return $this->select('suppliers.*')
                    ->join('brands', 'brands.id = products.brand_id')
                    ->join('suppliers', 'suppliers.id = brands.supplier_id')
                    ->where('products.id', $productId)
                    ->findAll();
    }
}
