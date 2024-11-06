<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuppliersTable extends Migration
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
            'supplier_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'supplier_code' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'address' => [
                'type'       => 'TEXT',
            ],
            'pic_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pic_whatsapp' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
                'null'       => false,
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('suppliers');
    }

    public function down()
    {
        $this->forge->dropTable('suppliers');
    }
}