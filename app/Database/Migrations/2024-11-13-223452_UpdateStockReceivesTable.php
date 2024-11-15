<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateStockReceivesTable extends Migration
{
    public function up()
    {
        // Pengecekan apakah kolom sudah ada sebelum menambahkannya
        if (!$this->db->fieldExists('type', 'stock_receives')) {
            $this->forge->addColumn('stock_receives', [
                'type' => [
                    'type' => 'ENUM',
                    'constraint' => ['vendor', 'internal', 'return', 'adjustment', 'donation'],
                    'default' => 'vendor',
                    'after' => 'quantity'
                ],
            ]);
        }

        if (!$this->db->fieldExists('source_id', 'stock_receives')) {
            $this->forge->addColumn('stock_receives', [
                'source_id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'null' => true,
                    'after' => 'type'
                ],
            ]);
        }

        if (!$this->db->fieldExists('status', 'stock_receives')) {
            $this->forge->addColumn('stock_receives', [
                'status' => [
                    'type' => 'ENUM',
                    'constraint' => ['pending', 'completed', 'canceled'],
                    'default' => 'pending',
                    'after' => 'source_id'
                ],
            ]);
        }

        if (!$this->db->fieldExists('received_by', 'stock_receives')) {
            $this->forge->addColumn('stock_receives', [
                'received_by' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'null' => true,
                    'after' => 'status'
                ],
            ]);
        }
    }

    public function down()
    {
        // Drop kolom hanya jika ada
        if ($this->db->fieldExists('type', 'stock_receives')) {
            $this->forge->dropColumn('stock_receives', 'type');
        }

        if ($this->db->fieldExists('source_id', 'stock_receives')) {
            $this->forge->dropColumn('stock_receives', 'source_id');
        }

        if ($this->db->fieldExists('status', 'stock_receives')) {
            $this->forge->dropColumn('stock_receives', 'status');
        }

        if ($this->db->fieldExists('received_by', 'stock_receives')) {
            $this->forge->dropColumn('stock_receives', 'received_by');
        }
    }
}
