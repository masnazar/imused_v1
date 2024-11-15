<?php

namespace App\Models;

use CodeIgniter\Model;

class StockSummaryModel extends Model
{
    protected $table = 'stocks';
    protected $primaryKey = 'id';

    // Method untuk mendapatkan stok berdasarkan ID gudang
    public function getStockByWarehouseId($warehouseId, $start = 0, $length = 10, $searchValue = '')
    {
        // Pastikan tabel `products` memiliki kolom `name`
        $query = $this->db->table('stocks')
                  ->select('products.name as product_name, stocks.quantity')
                  ->join('products', 'products.id = stocks.product_id')
                  ->where('stocks.warehouse_id', $warehouseId)
                  ->limit($length, $start);

        // Pencarian berdasarkan nama produk jika ada nilai pencarian
        if (!empty($searchValue)) {
            $query->like('products.name', $searchValue);
        }

        return $query->get()->getResultArray();
    }

    public function countAllStocks($warehouseId)
    {
        return $this->where('warehouse_id', $warehouseId)->countAllResults();
    }

    public function countFilteredStocks($warehouseId, $searchValue = '')
    {
        $query = $this->db->table('stocks')
                  ->join('products', 'products.id = stocks.product_id')
                  ->where('stocks.warehouse_id', $warehouseId);

        if (!empty($searchValue)) {
            $query->like('products.name', $searchValue);
        }

        return $query->countAllResults();
    }
}
