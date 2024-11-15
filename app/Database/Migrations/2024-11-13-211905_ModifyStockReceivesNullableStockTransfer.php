<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyStockReceivesNullableStockTransfer extends Migration
{
    public function up()
    {
        // Drop the foreign key first to modify the column
        $this->forge->dropForeignKey('stock_receives', 'fk_stock_receives_stock_transfer_id');

        // Modify the column `stock_transfer_id` to allow NULL values
        $this->forge->modifyColumn('stock_receives', [
            'stock_transfer_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
        ]);

        // Recreate the foreign key constraint with the updated column
        $this->forge->addForeignKey('stock_transfer_id', 'stock_transfers', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        // Reverse the foreign key and column modification to restore the original state

        // Drop the modified foreign key
        $this->forge->dropForeignKey('stock_receives', 'fk_stock_receives_stock_transfer_id');

        // Modify the column `stock_transfer_id` back to NOT NULL
        $this->forge->modifyColumn('stock_receives', [
            'stock_transfer_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
        ]);

        // Recreate the original foreign key constraint
        $this->forge->addForeignKey('stock_transfer_id', 'stock_transfers', 'id', 'CASCADE', 'CASCADE');
    }
}
