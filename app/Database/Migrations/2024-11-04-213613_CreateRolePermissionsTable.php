<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRolePermissionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'role_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'permission_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ]
        ]);

        $this->forge->addKey('id', true); // Primary key
        $this->forge->addForeignKey('role_id', 'roles', 'id', 'CASCADE', 'CASCADE'); // Foreign key ke tabel roles
        $this->forge->addForeignKey('permission_id', 'permissions', 'id', 'CASCADE', 'CASCADE'); // Foreign key ke tabel permissions

        $this->forge->createTable('role_permissions');
    }

    public function down()
    {
        $this->forge->dropTable('role_permissions');
    }
}
