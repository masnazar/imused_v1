<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStokAwalToProducts extends Migration
{
    public function up()
{
    $this->forge->addColumn('products', [
        'stok_awal' => [
            'type'       => 'INT',
            'constraint' => 11,
            'default'    => 0,
            'null'       => false,
            'after'      => 'hpp' // Sesuaikan dengan urutan kolom yang diinginkan
        ],
    ]);
}

public function down()
{
    $this->forge->dropColumn('products', 'stok_awal');
}

}
