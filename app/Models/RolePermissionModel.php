<?php

namespace App\Models;

use CodeIgniter\Model;

class RolePermissionModel extends Model
{
    protected $table = 'role_permissions';           // Nama tabel
    protected $primaryKey = 'id';                    // Primary key
    protected $allowedFields = ['role_id', 'permission_id']; // Field yang bisa diisi

    // Menambahkan timestamps (opsional, jika Anda ingin menggunakan created_at dan updated_at)
    protected $useTimestamps = false;

    /**
     * Mendapatkan daftar permission berdasarkan role_id
     * 
     * @param int $roleId
     * @return array
     */
    public function getPermissionsByRole($roleId)
    {
        return $this->where('role_id', $roleId)->findAll();
    }

    /**
     * Mendapatkan daftar role berdasarkan permission_id
     * 
     * @param int $permissionId
     * @return array
     */
    public function getRolesByPermission($permissionId)
    {
        return $this->where('permission_id', $permissionId)->findAll();
    }
}
