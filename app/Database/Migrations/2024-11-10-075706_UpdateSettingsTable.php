<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateSettingsTable extends Migration
{
    public function up()
    {
        $fields = [
            'logo' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'company_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'company_address' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'company_contact' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'default_language' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'timezone' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
        ];

        $this->forge->addColumn('settings', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('settings', ['logo', 'company_name', 'company_address', 'company_contact', 'default_language', 'timezone']);
    }
}
