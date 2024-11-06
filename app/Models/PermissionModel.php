<?php

namespace App\Models;

use CodeIgniter\Model;

class PermissionModel extends Model
{
    protected $table = 'permissions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['permission_name', 'display_name']; // Tambahkan display_name
    protected $useTimestamps = false;
}
