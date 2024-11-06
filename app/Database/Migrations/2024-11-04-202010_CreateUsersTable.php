<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type'           => 'INT',
            'unsigned'       => true,
            'auto_increment' => true
        ],
        'full_name' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
        'username' => [
            'type'       => 'VARCHAR',
            'constraint' => '50',
            'unique'      => true,
        ],
        'email' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
            'unique'      => true,
        ],
        'whatsapp_number' => [
            'type'       => 'VARCHAR',
            'constraint' => '20',
        ],
        'position_id' => [
            'type'       => 'INT',
            'unsigned'   => true,
            'null'       => true,
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
    $this->forge->addForeignKey('position_id', 'positions', 'id', 'SET NULL', 'CASCADE');
    $this->forge->createTable('users');
}

public function down()
{
    $this->forge->dropTable('users');
}

}
