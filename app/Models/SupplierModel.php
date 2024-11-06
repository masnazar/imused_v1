<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table = 'suppliers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['supplier_name', 'supplier_code', 'address', 'pic_name', 'pic_whatsapp'];
    protected $useTimestamps = true;

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
            $builder->like('supplier_name', $search)
                    ->orLike('supplier_code', $search)
                    ->orLike('address', $search)
                    ->orLike('pic_name', $search)
                    ->orLike('pic_whatsapp', $search);
        }
        return $builder->countAllResults();
    }

    // Mendapatkan data sesuai parameter DataTables
    public function getDataTables($search = '', $start = 0, $length = 10, $orderColumn = 'id', $orderDir = 'asc')
    {
        $builder = $this->table($this->table);

        if ($search) {
            $builder->like('supplier_name', $search)
                    ->orLike('supplier_code', $search)
                    ->orLike('address', $search)
                    ->orLike('pic_name', $search)
                    ->orLike('pic_whatsapp', $search);
        }

        $builder->orderBy($orderColumn, $orderDir)
                ->limit($length, $start);

        return $builder->get()->getResultArray();
    }
}