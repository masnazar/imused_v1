<?php

namespace App\Models;

use CodeIgniter\Model;

class StockTransferModel extends Model
{
    protected $table = 'stock_transfers';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'product_id', 'from_warehouse_id', 'to_warehouse_id', 'quantity', 
        'status', 'remarks', 'approved_by', 'rejected_by', 
        'created_at', 'updated_at', 'approved_at', 'rejected_at'
    ];

    public function getTransfersWithDetails($start = 0, $length = 10, $filter = [])
    {
        $builder = $this->select('stock_transfers.*, products.product_name, 
                w_from.name as from_warehouse, w_to.name as to_warehouse')
            ->join('products', 'products.id = stock_transfers.product_id')
            ->join('warehouses as w_from', 'w_from.id = stock_transfers.from_warehouse_id')
            ->join('warehouses as w_to', 'w_to.id = stock_transfers.to_warehouse_id');

        if (!empty($filter['status'])) {
            $builder->where('stock_transfers.status', $filter['status']);
        }
        
        return $builder->limit($length, $start)->get()->getResultArray();
    }

    public function countAllTransfers()
    {
        return $this->countAllResults();
    }

    public function countFilteredTransfers($filter = [])
    {
        $builder = $this;

        if (!empty($filter['status'])) {
            $builder = $builder->where('status', $filter['status']);
        }

        return $builder->countAllResults();
    }
}