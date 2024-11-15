<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Tambah Transfer Stok
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inventory & Warehouse</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('stock_transfers') ?>">Daftar Transfer Stok</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Transfer Stok</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Tambah Transfer Stok</h1>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Form Tambah Transfer Stok</div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('stock_transfers/store') ?>" method="post">
                    <?= csrf_field() ?>
                    
                    <!-- Pilihan Produk -->
                    <div class="mb-3">
                        <label for="product_id" class="form-label">Nama Produk</label>
                        <select name="product_id" id="product_id" class="form-select" required>
                            <option value="">Pilih Produk</option>
                            <?php foreach ($products as $product): ?>
                                <option value="<?= $product['id'] ?>"><?= $product['product_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Gudang Asal -->
                    <div class="mb-3">
                        <label for="from_warehouse_id" class="form-label">Gudang Asal</label>
                        <select name="from_warehouse_id" id="from_warehouse_id" class="form-select" required>
                            <option value="">Pilih Gudang Asal</option>
                            <?php foreach ($warehouses as $warehouse): ?>
                                <option value="<?= $warehouse['id'] ?>"><?= $warehouse['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Gudang Tujuan -->
                    <div class="mb-3">
                        <label for="to_warehouse_id" class="form-label">Gudang Tujuan</label>
                        <select name="to_warehouse_id" id="to_warehouse_id" class="form-select" required>
                            <option value="">Pilih Gudang Tujuan</option>
                            <?php foreach ($warehouses as $warehouse): ?>
                                <option value="<?= $warehouse['id'] ?>"><?= $warehouse['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Jumlah Transfer -->
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Jumlah</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" min="1" required>
                    </div>

                    <!-- Remarks atau Catatan -->
                    <div class="mb-3">
                        <label for="remarks" class="form-label">Remarks</label>
                        <textarea name="remarks" class="form-control" id="remarks" rows="3"></textarea>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Ajukan Transfer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
