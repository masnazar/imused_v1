<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDisplayNameToPermissions extends Migration
{
    public function up()
    {
        $this->forge->addColumn('permissions', [
            'display_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'after' => 'permission_name'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('permissions', 'display_name');
    }
}
