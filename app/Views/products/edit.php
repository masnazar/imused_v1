<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Edit Produk
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inventory & Warehouse</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('products') ?>">Daftar Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Produk</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Edit Produk</h1>
    </div>
</div>
<!-- Page Header Close -->

<!-- Form Edit Produk -->
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Form Edit Produk</div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('products/update/' . $product['id']) ?>" method="post">
                    <?= csrf_field() ?>

                    <!-- Nama Produk -->
                    <div class="mb-3">
                        <label for="productName" class="form-label">Nama Produk</label>
                        <input type="text" name="product_name" class="form-control" id="productName" value="<?= esc($product['product_name']) ?>" required>
                    </div>

                    <!-- Kode Produk (Read-only) -->
                    <div class="mb-3">
                        <label for="productCode" class="form-label">Kode Produk</label>
                        <input type="text" name="product_code" class="form-control" id="productCode" value="<?= esc($product['product_code']) ?>" readonly>
                    </div>

                    <!-- SKU Produk -->
                    <div class="mb-3">
                        <label for="productSKU" class="form-label">SKU Produk</label>
                        <input type="text" name="product_sku" class="form-control" id="productSKU" value="<?= esc($product['product_sku']) ?>" required>
                    </div>

                    <!-- Harga Pokok Produksi (HPP) -->
                    <div class="mb-3">
                        <label for="hpp" class="form-label">HPP</label>
                        <input type="number" name="hpp" class="form-control" id="hpp" value="<?= esc($product['hpp']) ?>" required>
                    </div>

                    <!-- HPP Penjualan -->
                    <div class="mb-3">
                        <label for="hppPenjualan" class="form-label">HPP Penjualan</label>
                        <input type="number" name="hpp_penjualan" class="form-control" id="hppPenjualan" value="<?= esc($product['hpp_penjualan']) ?>" required>
                    </div>

                    <!-- Stok (Read-only) -->
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" name="stok" class="form-control" id="stok" value="<?= esc($product['stok']) ?>" readonly>
                    </div>

                    <!-- Brand -->
                    <div class="mb-3">
                        <label for="brand_id" class="form-label">Brand</label>
                        <select name="brand_id" id="brand_id" class="form-select" required>
                            <?php foreach ($brands as $brand) : ?>
                                <option value="<?= $brand['id'] ?>" <?= $brand['id'] == $product['brand_id'] ? 'selected' : '' ?>>
                                    <?= $brand['brand_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Supplier -->
                    <div class="mb-3">
                        <label for="supplier_id" class="form-label">Supplier</label>
                        <select name="supplier_id" id="supplier_id" class="form-select" required>
                            <?php foreach ($suppliers as $supplier) : ?>
                                <option value="<?= $supplier['id'] ?>" <?= $supplier['id'] == $product['supplier_id'] ? 'selected' : '' ?>>
                                    <?= $supplier['supplier_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Nomor BPOM -->
                    <div class="mb-3">
                        <label for="bpomNumber" class="form-label">Nomor BPOM</label>
                        <input type="text" name="bpom_number" class="form-control" id="bpomNumber" value="<?= esc($product['bpom_number']) ?>">
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // SweetAlert untuk Flash Messages
    <?php if (session()->has('swal_success')) : ?>
        Swal.fire({
            icon: 'success',
            title: '<?= session('swal_success') ?>',
            showConfirmButton: false,
            timer: 2000,
            position: 'center'
        });
    <?php elseif (session()->has('swal_error')) : ?>
        Swal.fire({
            icon: 'error',
            title: '<?= session('swal_error') ?>',
            showConfirmButton: false,
            timer: 2000,
            position: 'center'
        });
    <?php endif; ?>
</script>
<?= $this->endSection() ?>
