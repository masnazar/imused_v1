<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $allowedFields = ['role_name', 'description'];
    protected $useTimestamps = false;

    // Mengambil jumlah total data tanpa filter
    public function countAllData()
    {
        return $this->countAllResults();
    }

    // Mengambil jumlah data setelah filter pencarian
    public function countFilteredData($search = '')
    {
        $builder = $this->table($this->table);
        if ($search) {
            $builder->like('role_name', $search)
                    ->orLike('description', $search);
        }
        return $builder->countAllResults();
    }

    // Mendapatkan data sesuai parameter DataTables
    public function getDataTables($search = '', $start = 0, $length = 10, $orderColumn = 'id', $orderDir = 'asc')
    {
        $builder = $this->table($this->table);

        if ($search) {
            $builder->like('role_name', $search)
                    ->orLike('description', $search);
        }

        $builder->orderBy($orderColumn, $orderDir)
                ->limit($length, $start);

        return $builder->get()->getResultArray();
    }
}