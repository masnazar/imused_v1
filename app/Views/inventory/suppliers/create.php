<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Tambah Supplier
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
<!-- SweetAlert End -->

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inventory & Warehouse</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('suppliers') ?>">Daftar Supplier</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Supplier</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Tambah Supplier</h1>
    </div>
</div>
<!-- Page Header Close -->

<!-- Card Layout untuk Form -->
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Form Tambah Supplier</div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('suppliers/store') ?>" method="post">
                    <?= csrf_field() ?>
                    
                    <!-- Nama Supplier -->
                    <div class="mb-3">
                        <label for="supplierName" class="form-label">Nama Supplier</label>
                        <div class="input-group">
                            <input type="text" name="supplier_name" class="form-control" id="supplierName" required>
                            <div class="input-group-text">
                                <i class="ri-user-line"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Kode Supplier -->
                    <div class="mb-3">
                        <label for="supplierCode" class="form-label">Kode Supplier</label>
                        <div class="input-group">
                            <input type="text" name="supplier_code" class="form-control" id="supplierCode" minlength="2" maxlength="10" required>
                            <div class="input-group-text">
                                <i class="ri-barcode-line"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Alamat Supplier -->
                    <div class="mb-3">
                        <label for="supplierAddress" class="form-label">Alamat Supplier</label>
                        <div class="input-group">
                            <textarea name="address" class="form-control" id="supplierAddress" required></textarea>
                            <div class="input-group-text">
                                <i class="ri-map-pin-line"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Nama PIC -->
                    <div class="mb-3">
                        <label for="picName" class="form-label">Nama PIC</label>
                        <div class="input-group">
                            <input type="text" name="pic_name" class="form-control" id="picName" required>
                            <div class="input-group-text">
                                <i class="ri-user-3-line"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Nomor WhatsApp PIC -->
                    <div class="mb-3">
                        <label for="picWhatsapp" class="form-label">Nomor WhatsApp PIC</label>
                        <div class="input-group">
                            <input type="text" name="pic_whatsapp" class="form-control" id="picWhatsapp" placeholder="62xxxxxxxxx" required>
                            <div class="input-group-text">
                                <i class="ri-whatsapp-line"></i>
                            </div>
                        </div>
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
