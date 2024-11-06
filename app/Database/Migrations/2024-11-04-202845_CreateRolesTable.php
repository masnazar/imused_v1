<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRolesTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type'           => 'INT',
            'unsigned'       => true,
            'auto_increment' => true
        ],
        'role_name' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
        'description' => [
            'type'       => 'TEXT',
            'null'       => true,
        ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('roles');
}

public function down()
{
    $this->forge->dropTable('roles');
}

}
