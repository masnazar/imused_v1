<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddHppPenjualanToProducts extends Migration
{
    public function up()
{
    $this->forge->addColumn('products', [
        'hpp_penjualan' => [
            'type'       => 'DECIMAL',
            'constraint' => '10,2',
            'null'       => false,
            'default'    => 0,
        ],
    ]);
}

public function down()
{
    $this->forge->dropColumn('products', 'hpp_penjualan');
}


}
