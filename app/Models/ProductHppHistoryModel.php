<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductHppHistoryModel extends Model
{
    protected $table = 'product_hpp_history';
    protected $primaryKey = 'id';
    protected $allowedFields = ['product_id', 'hpp', 'updated_at'];
    protected $useTimestamps = false;
}
