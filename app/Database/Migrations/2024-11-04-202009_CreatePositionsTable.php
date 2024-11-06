<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePositionsTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type'           => 'INT',
            'unsigned'       => true,
            'auto_increment' => true
        ],
        'position_name' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
        'position_code' => [
            'type'       => 'VARCHAR',
            'constraint' => '10',
            'unique'      => true,
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'updated_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('positions');
}

public function down()
{
    $this->forge->dropTable('positions');
}

}
