<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddApprovalFieldsToStockTransfers extends Migration
{
    public function up()
    {
        $this->forge->addColumn('stock_transfers', [
            'approved_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'rejected_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'approved_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'rejected_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('stock_transfers', 'approved_at');
        $this->forge->dropColumn('stock_transfers', 'rejected_at');
        $this->forge->dropColumn('stock_transfers', 'approved_by');
        $this->forge->dropColumn('stock_transfers', 'rejected_by');
    }
}
