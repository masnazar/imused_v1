<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Permissions untuk Pengguna
            ['permission_name' => 'view_user', 'display_name' => 'Lihat Pengguna'],
            ['permission_name' => 'create_user', 'display_name' => 'Tambah Pengguna'],
            ['permission_name' => 'edit_user', 'display_name' => 'Edit Pengguna'],
            ['permission_name' => 'delete_user', 'display_name' => 'Hapus Pengguna'],

            // Permissions untuk Role Management
            ['permission_name' => 'view_role', 'display_name' => 'Lihat Role'],
            ['permission_name' => 'create_role', 'display_name' => 'Tambah Role'],
            ['permission_name' => 'edit_role', 'display_name' => 'Edit Role'],
            ['permission_name' => 'delete_role', 'display_name' => 'Hapus Role'],

            // Permissions untuk Permissions Management
            ['permission_name' => 'manage_permissions', 'display_name' => 'Kelola Hak Akses'],

            // Permissions tambahan lain (Contoh)
            ['permission_name' => 'view_reports', 'display_name' => 'Lihat Laporan'],
            ['permission_name' => 'export_reports', 'display_name' => 'Ekspor Laporan'],
            ['permission_name' => 'manage_inventory', 'display_name' => 'Kelola Inventaris'],
            ['permission_name' => 'manage_sales', 'display_name' => 'Kelola Penjualan'],
            // Tambahkan lebih banyak permissions sesuai kebutuhan sistem Anda
        ];

        // Masukkan data ke dalam tabel permissions
        $this->db->table('permissions')->insertBatch($data);
    }
}
