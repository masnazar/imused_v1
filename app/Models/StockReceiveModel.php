<?php

namespace App\Models;

use CodeIgniter\Model;

class StockReceiveModel extends Model
{
    protected $table = 'stock_receives';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'product_id', 'warehouse_id', 'quantity', 'type', 'source_id', 
        'status', 'stock_transfer_id', 'received_by', 'remarks', 
        'received_at', 'created_at', 'updated_at'
    ];
    protected $useTimestamps = true;
}
