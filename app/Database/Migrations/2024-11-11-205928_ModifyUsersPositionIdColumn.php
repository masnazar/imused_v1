<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyUsersPositionIdColumn extends Migration
{
    public function up()
    {
        // Step 1: Drop foreign key sementara
        $this->db->query('ALTER TABLE `users` DROP FOREIGN KEY `users_position_id_foreign`;');
        
        // Step 2: Modify kolom `position_id` jadi `UNSIGNED`
        $this->forge->modifyColumn('users', [
            'position_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
            'id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'auto_increment' => true,
            ],
        ]);

        // Step 3: Tambahkan kembali foreign key
        $this->forge->addForeignKey('position_id', 'positions', 'id', 'SET NULL', 'CASCADE');
    }

    public function down()
    {
        // Step 1: Drop foreign key lagi
        $this->db->query('ALTER TABLE `users` DROP FOREIGN KEY `users_position_id_foreign`;');
        
        // Step 2: Kembalikan tipe kolom `position_id` ke sebelumnya tanpa unsigned
        $this->forge->modifyColumn('users', [
            'position_id' => [
                'type' => 'INT',
                'null' => true,
            ],
            'id' => [
                'type'       => 'INT',
                'auto_increment' => true,
            ],
        ]);

        // Step 3: Tambahkan kembali foreign key ke posisi awal
        $this->forge->addForeignKey('position_id', 'positions', 'id', 'SET NULL', 'CASCADE');
    }
}
