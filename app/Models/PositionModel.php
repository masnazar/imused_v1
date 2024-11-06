<?php

namespace App\Models;

use CodeIgniter\Model;

class PositionModel extends Model
{
    protected $table = 'positions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['position_name', 'position_code'];
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
            $builder->like('position_name', $search)
                    ->orLike('position_code', $search);
        }
        return $builder->countAllResults();
    }

    // Mendapatkan data sesuai parameter DataTables
    public function getDataTables($search = '', $start = 0, $length = 10, $orderColumn = 'id', $orderDir = 'asc')
    {
        $builder = $this->table($this->table);

        if ($search) {
            $builder->like('position_name', $search)
                    ->orLike('position_code', $search);
        }

        $builder->orderBy($orderColumn, $orderDir)
                ->limit($length, $start);

        return $builder->get()->getResultArray();
    }
}
