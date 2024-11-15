<?php

namespace App\Models;

use CodeIgniter\Model;

class WarehouseModel extends Model
{
    protected $table = 'warehouses';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'location', 'created_at', 'updated_at'];

    // Method untuk mengambil data dengan server-side processing untuk DataTables
    public function getDatatables($limit, $offset, $search, $order)
    {
        $query = $this->db->table($this->table);

        // Filtering berdasarkan pencarian
        if (!empty($search)) {
            $query->like('name', $search)
                  ->orLike('location', $search);
        }

        // Ordering data berdasarkan kolom yang dipilih
        if (!empty($order)) {
            $query->orderBy($order['column'], $order['direction']);
        }

        // Pagination data
        if ($limit != -1) {
            $query->limit($limit, $offset);
        }

        return $query->get()->getResult();
    }

    // Method untuk menghitung total data setelah filtering
    public function getTotalFiltered($search)
    {
        $query = $this->db->table($this->table);

        if (!empty($search)) {
            $query->like('name', $search)
                  ->orLike('location', $search);
        }

        return $query->countAllResults();
    }

    // Method untuk menghitung total semua data (tanpa filtering)
    public function getTotalAll()
    {
        return $this->countAll();
    }
}