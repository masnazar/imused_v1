<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartmentModel extends Model
{
    protected $table      = 'departments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['department_name', 'department_code', 'department_head_id'];
    protected $useTimestamps = true;
}