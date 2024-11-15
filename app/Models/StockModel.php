<?php

namespace App\Models;

use CodeIgniter\Model;

class StockModel extends Model
{
    protected $table = 'stocks'; // Nama tabel
    protected $primaryKey = 'id';

    // Kolom-kolom yang boleh diisi secara massal
    protected $allowedFields = [
        'product_id',
        'warehouse_id',
        'quantity',
        'created_at',
        'updated_at'
    ];

    // Jika ingin menggunakan timestamps otomatis
    protected $useTimestamps = true;

    /**
     * Mengambil stok berdasarkan produk dan gudang
     * @param int $productId
     * @param int $warehouseId
     * @return array|null
     */
    public function getStockByProductAndWarehouse($productId, $warehouseId)
    {
        return $this->where('product_id', $productId)
                    ->where('warehouse_id', $warehouseId)
                    ->first();
    }

    /**
     * Menambahkan atau memperbarui stok
     * @param int $productId
     * @param int $warehouseId
     * @param int $quantity
     * @return bool
     */
    public function updateOrInsertStock($productId, $warehouseId, $quantity)
    {
        $existingStock = $this->getStockByProductAndWarehouse($productId, $warehouseId);

        if ($existingStock) {
            // Update stok jika sudah ada
            $newQuantity = $existingStock['quantity'] + $quantity;
            return $this->update($existingStock['id'], ['quantity' => $newQuantity]);
        } else {
            // Insert stok baru jika belum ada
            return $this->insert([
                'product_id' => $productId,
                'warehouse_id' => $warehouseId,
                'quantity' => $quantity
            ]);
        }
    }
}
