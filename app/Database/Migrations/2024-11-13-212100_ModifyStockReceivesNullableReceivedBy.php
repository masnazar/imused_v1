<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyStockReceivesNullableReceivedBy extends Migration
{
    public function up()
    {
        // Drop foreign key sebelum memodifikasi kolom
        $this->forge->dropForeignKey('stock_receives', 'fk_stock_receives_received_by');

        // Ubah kolom `received_by` agar bisa NULL
        $this->forge->modifyColumn('stock_receives', [
            'received_by' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
        ]);

        // Tambahkan kembali foreign key dengan pengaturan baru
        $this->forge->addForeignKey('received_by', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        // Hapus foreign key terlebih dahulu
        $this->forge->dropForeignKey('stock_receives', 'fk_stock_receives_received_by');

        // Kembalikan kolom `received_by` ke pengaturan awal
        $this->forge->modifyColumn('stock_receives', [
            'received_by' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
        ]);

        // Tambahkan kembali foreign key sesuai pengaturan awal
        $this->forge->addForeignKey('received_by', 'users', 'id', 'CASCADE', 'CASCADE');
    }
}
