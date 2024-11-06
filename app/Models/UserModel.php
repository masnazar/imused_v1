<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['full_name', 'username', 'email', 'whatsapp_number', 'position_id', 'password'];
    protected $useTimestamps = false;

    /**
     * Override metode save untuk memastikan password di-hash sebelum disimpan.
     *
     * @param array $data Data yang akan disimpan ke database
     * @return bool True jika berhasil, false jika gagal
     */
    public function save($data): bool
    {
        // Jika password ada di data, lakukan hashing sebelum menyimpannya
        if (isset($data['password']) && !empty($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        return parent::save($data);
    }

    /**
     * Override metode update untuk memastikan password di-hash jika diperbarui.
     *
     * @param mixed $id ID atau array kondisi
     * @param array $data Data yang akan diperbarui
     * @return bool True jika berhasil, false jika gagal
     */
    public function update($id = null, $data = null): bool
    {
        // Jika password ada di data dan tidak kosong, lakukan hashing sebelum menyimpannya
        if (isset($data['password']) && !empty($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        return parent::update($id, $data);
    }

    /**
     * Menghitung total data tanpa filter
     *
     * @return int Total data di tabel
     */
    public function countAllData()
    {
        return $this->countAllResults();
    }

    /**
     * Menghitung jumlah data yang difilter berdasarkan pencarian
     *
     * @param string $search Keyword pencarian
     * @return int Jumlah data yang difilter
     */
    public function countFilteredData($search = '')
    {
        $builder = $this->table($this->table);
        if ($search) {
            $builder->like('full_name', $search)
                    ->orLike('username', $search)
                    ->orLike('email', $search);
        }
        return $builder->countAllResults();
    }

    /**
     * Mendapatkan data untuk DataTables dengan pagination dan pencarian
     *
     * @param string $search Keyword pencarian
     * @param int $start Offset data
     * @param int $length Jumlah data per halaman
     * @param string $orderColumn Kolom yang diurutkan
     * @param string $orderDir Arah pengurutan (asc atau desc)
     * @return array Data untuk DataTables
     */
    public function getDataTables($search = '', $start = 0, $length = 10, $orderColumn = 'id', $orderDir = 'asc')
    {
        $builder = $this->table($this->table);

        if ($search) {
            $builder->like('full_name', $search)
                    ->orLike('username', $search)
                    ->orLike('email', $search);
        }

        $builder->orderBy($orderColumn, $orderDir)
                ->limit($length, $start);

        return $builder->get()->getResultArray();
    }
}