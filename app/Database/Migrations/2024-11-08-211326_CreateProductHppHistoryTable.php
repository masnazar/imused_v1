<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductHppHistoryTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'hpp' => [
                'type'       => 'DECIMAL',
                'constraint' => '15,2',
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('product_hpp_history');
    }

    public function down()
    {
        $this->forge->dropTable('product_hpp_history');
    }
}
