<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddForeignKeyToUsersPosition extends Migration
{
    public function up()
    {
        $this->forge->addForeignKey('position_id', 'positions', 'id', 'SET NULL', 'CASCADE');
    }

    public function down()
    {
        $this->forge->dropForeignKey('users', 'users_position_id_foreign');
    }
}
