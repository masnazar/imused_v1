<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RenameStokAwalToStokInProducts extends Migration
{
    public function up()
    {
        $fields = [
            'stok_awal' => [
                'name' => 'stok',
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
        ];

        $this->forge->modifyColumn('products', $fields);
    }

    public function down()
    {
        $fields = [
            'stok' => [
                'name' => 'stok_awal',
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
        ];

        $this->forge->modifyColumn('products', $fields);
    }
}
