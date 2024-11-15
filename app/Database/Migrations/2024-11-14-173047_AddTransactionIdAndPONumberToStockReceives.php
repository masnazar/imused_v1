<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTransactionIdAndPONumberToStockReceives extends Migration
{
    public function up()
    {
        $fields = [
            'transaction_id' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'unique' => true,
                'null' => false,
                'after' => 'id'
            ],
            'po_number' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
                'after' => 'source_id'
            ],
        ];
        $this->forge->addColumn('stock_receives', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('stock_receives', 'transaction_id');
        $this->forge->dropColumn('stock_receives', 'po_number');
    }
}
