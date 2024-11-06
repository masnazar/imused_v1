<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDepartmentsTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type'           => 'INT',
            'unsigned'       => true,
            'auto_increment' => true
        ],
        'department_name' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
        'department_code' => [
            'type'       => 'VARCHAR',
            'constraint' => '10',
            'unique'      => true,
        ],
        'department_head_id' => [
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
    $this->forge->addForeignKey('department_head_id', 'users', 'id', 'SET NULL', 'CASCADE');
    $this->forge->createTable('departments');
}

public function down()
{
    $this->forge->dropTable('departments');
}

}
