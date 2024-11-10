<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Edit Brand
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
                <li class="breadcrumb-item"><a href="<?= base_url('brands') ?>">Brand</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Brand</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Edit Brand</h1>
    </div>
    <div class="btn-list">
        <a href="<?= base_url('brands') ?>" class="btn btn-white btn-wave">
            <i class="ri-close-line align-middle me-1 lh-1"></i> Batal
        </a>
    </div>
</div>
<!-- Page Header Close -->

<!-- Card Layout for Edit Form -->
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Form Edit Brand</div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('brands/update/' . $brand['id']) ?>" method="post">
                    <?= csrf_field() ?>

                    <!-- Nama Brand -->
                    <div class="mb-3">
                        <label for="brand_name" class="form-label">Nama Brand</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="brand_name" name="brand_name" value="<?= esc($brand['brand_name']) ?>" required>
                            <div class="input-group-text"><i class="ri-flag-line"></i></div>
                        </div>
                    </div>

                    <!-- Kode Brand -->
                    <div class="mb-3">
                        <label for="brand_code" class="form-label">Kode Brand</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="brand_code" name="brand_code" value="<?= esc($brand['brand_code']) ?>" required>
                            <div class="input-group-text"><i class="ri-barcode-line"></i></div>
                        </div>
                    </div>

                    <!-- Supplier -->
                    <div class="mb-3">
                        <label for="supplier_id" class="form-label">Supplier</label>
                        <select class="form-select" id="supplier_id" name="supplier_id" required>
                            <option value="">Pilih Supplier</option>
                            <?php foreach ($suppliers as $supplier): ?>
                                <option value="<?= $supplier['id'] ?>" <?= $supplier['id'] == $brand['supplier_id'] ? 'selected' : '' ?>>
                                    <?= esc($supplier['supplier_name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
