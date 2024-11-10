<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Tambah Brand
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- SweetAlert for Flash Messages -->
<?php if (session()->getFlashdata('swal_success')): ?>
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '<?= session()->getFlashdata('swal_success') ?>',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
<?php elseif (session()->getFlashdata('swal_error')): ?>
    <script>
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: '<?= session()->getFlashdata('swal_error') ?>',
            showConfirmButton: true
        });
    </script>
<?php endif; ?>

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inventory & Warehouse</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('brands') ?>">Daftar Brand</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Brand</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Tambah Brand</h1>
    </div>
</div>
<!-- Page Header Close -->

<!-- Card Layout untuk Form -->
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Form Tambah Brand</div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('brands/store') ?>" method="post">
                    <?= csrf_field() ?>
                    
                    <!-- Nama Brand -->
                    <div class="mb-3">
                        <label for="brandName" class="form-label">Nama Brand</label>
                        <div class="input-group">
                            <input type="text" name="brand_name" class="form-control" id="brandName" required>
                            <div class="input-group-text">
                                <i class="ri-flag-line"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Kode Brand -->
                    <div class="mb-3">
                        <label for="brandCode" class="form-label">Kode Brand</label>
                        <div class="input-group">
                            <input type="text" name="brand_code" class="form-control" id="brandCode" required>
                            <div class="input-group-text">
                                <i class="ri-barcode-line"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Supplier -->
                    <div class="mb-3">
                        <label for="supplier_id" class="form-label">Supplier</label>
                        <select name="supplier_id" id="supplier_id" class="form-select" required>
                            <option value="">Pilih Supplier</option>
                            <?php foreach ($suppliers as $supplier): ?>
                                <option value="<?= $supplier['id'] ?>"><?= $supplier['supplier_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
