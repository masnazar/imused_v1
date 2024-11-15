<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyStockReceivesTable extends Migration
{
    public function up()
    {
        // Cek dan tambahkan kolom jika belum ada
        if (!$this->db->fieldExists('product_id', 'stock_receives')) {
            $this->forge->addColumn('stock_receives', [
                'product_id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'null' => true,
                    'after' => 'id',
                ]
            ]);
        }

        if (!$this->db->fieldExists('warehouse_id', 'stock_receives')) {
            $this->forge->addColumn('stock_receives', [
                'warehouse_id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'null' => true,
                    'after' => 'product_id',
                ]
            ]);
        }

        if (!$this->db->fieldExists('quantity', 'stock_receives')) {
            $this->forge->addColumn('stock_receives', [
                'quantity' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'null' => true,
                    'after' => 'warehouse_id',
                ]
            ]);
        }

        if (!$this->db->fieldExists('type', 'stock_receives')) {
            $this->forge->addColumn('stock_receives', [
                'type' => [
                    'type' => 'ENUM',
                    'constraint' => ['vendor', 'internal', 'return'],
                    'default' => 'vendor',
                    'after' => 'quantity',
                ]
            ]);
        }

        if (!$this->db->fieldExists('source_id', 'stock_receives')) {
            $this->forge->addColumn('stock_receives', [
                'source_id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'null' => true,
                    'after' => 'type',
                ]
            ]);
        }

        if (!$this->db->fieldExists('status', 'stock_receives')) {
            $this->forge->addColumn('stock_receives', [
                'status' => [
                    'type' => 'ENUM',
                    'constraint' => ['completed', 'pending', 'rejected'],
                    'default' => 'pending',
                    'after' => 'source_id',
                ]
            ]);
        }

        if (!$this->db->fieldExists('received_at', 'stock_receives')) {
            $this->forge->addColumn('stock_receives', [
                'received_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                    'after' => 'status',
                ]
            ]);
        }

        // Menambahkan foreign key jika diperlukan
        if (!$this->db->fieldExists('product_id', 'stock_receives')) {
            $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
        }
        if (!$this->db->fieldExists('warehouse_id', 'stock_receives')) {
            $this->forge->addForeignKey('warehouse_id', 'warehouses', 'id', 'CASCADE', 'CASCADE');
        }
    }

    public function down()
    {
        // Hapus kolom yang telah ditambahkan
        if ($this->db->fieldExists('product_id', 'stock_receives')) {
            $this->forge->dropColumn('stock_receives', 'product_id');
        }
        if ($this->db->fieldExists('warehouse_id', 'stock_receives')) {
            $this->forge->dropColumn('stock_receives', 'warehouse_id');
        }
        if ($this->db->fieldExists('quantity', 'stock_receives')) {
            $this->forge->dropColumn('stock_receives', 'quantity');
        }
        if ($this->db->fieldExists('type', 'stock_receives')) {
            $this->forge->dropColumn('stock_receives', 'type');
        }
        if ($this->db->fieldExists('source_id', 'stock_receives')) {
            $this->forge->dropColumn('stock_receives', 'source_id');
        }
        if ($this->db->fieldExists('status', 'stock_receives')) {
            $this->forge->dropColumn('stock_receives', 'status');
        }
        if ($this->db->fieldExists('received_at', 'stock_receives')) {
            $this->forge->dropColumn('stock_receives', 'received_at');
        }
    }
}
