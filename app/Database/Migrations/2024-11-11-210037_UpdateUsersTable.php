<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateUsersTable extends Migration
{
    public function up()
    {
        // Ubah kolom id menjadi unsigned
        $this->forge->modifyColumn('users', [
            'id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'auto_increment' => true,
            ],
            'position_id' => [
                'type'       => 'INT',
                'unsigned'   => true, // Tambahkan unsigned
                'null'       => true,
            ],
        ]);
    }

    public function down()
    {
        // Revert perubahan jika diperlukan
        $this->forge->modifyColumn('users', [
            'id' => [
                'type'       => 'INT',
                'auto_increment' => true,
            ],
            'position_id' => [
                'type'       => 'INT',
                'null'       => true,
            ],
        ]);
    }
}
