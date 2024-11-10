<?php

namespace App\Models;

use CodeIgniter\Model;

class BrandModel extends Model
{
    protected $table = 'brands';
    protected $primaryKey = 'id';
    protected $allowedFields = ['brand_name', 'brand_code', 'supplier_id'];
    protected $useTimestamps = true;

    // Menghitung total data tanpa filter
    public function countAllData()
    {
        return $this->countAllResults();
    }

    // Menghitung data setelah filter pencarian
    public function countFilteredData($search = '')
    {
        $builder = $this->table($this->table)
                        ->join('suppliers', 'brands.supplier_id = suppliers.id', 'left');

        if ($search) {
            $builder->like('brand_name', $search)
                    ->orLike('brand_code', $search)
                    ->orLike('suppliers.supplier_name', $search);
        }
        return $builder->countAllResults();
    }

    // Mendapatkan data sesuai parameter DataTables
    public function getDataTables($search = '', $start = 0, $length = 10, $orderColumn = 'brand_name', $orderDir = 'asc')
    {
        $builder = $this->table($this->table)
                        ->select('brands.*, suppliers.supplier_name')
                        ->join('suppliers', 'brands.supplier_id = suppliers.id', 'left');

        if ($search) {
            $builder->like('brand_name', $search)
                    ->orLike('brand_code', $search)
                    ->orLike('suppliers.supplier_name', $search);
        }

        $builder->orderBy($orderColumn, $orderDir)
                ->limit($length, $start);

        return $builder->get()->getResultArray();
    }
}
