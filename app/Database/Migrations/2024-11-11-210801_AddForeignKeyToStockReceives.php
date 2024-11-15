<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddForeignKeyToStockReceives extends Migration
{
    public function up()
    {
        // Tambahin foreign key 'received_by' yang merujuk ke 'id' di tabel 'users'
        $this->db->query("
            ALTER TABLE stock_receives
            ADD CONSTRAINT fk_stock_receives_received_by
            FOREIGN KEY (received_by) REFERENCES users(id)
            ON DELETE CASCADE
            ON UPDATE CASCADE
        ");
    }

    public function down()
    {
        // Hapus foreign key 'received_by' jika rollback
        $this->db->query("
            ALTER TABLE stock_receives
            DROP FOREIGN KEY fk_stock_receives_received_by
        ");
    }
}
