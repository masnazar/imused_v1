<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Tambah Gudang
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inventory & Warehouse</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('warehouses') ?>">Daftar Gudang</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Gudang</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Tambah Gudang</h1>
    </div>
</div>
<!-- Page Header Close -->

<!-- Form Create Warehouse -->
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Form Tambah Gudang</div>
            </div>
            <div class="card-body">
                <!-- Form untuk menambah gudang baru -->
                <form action="<?= base_url('warehouses/store') ?>" method="post">
                    <?= csrf_field() ?>

                    <!-- Nama Gudang -->
                    <div class="mb-3">
                        <label for="warehouseName" class="form-label">Nama Gudang</label>
                        <input type="text" name="name" class="form-control" id="warehouseName" required>
                    </div>

                    <!-- Lokasi Gudang -->
                    <div class="mb-3">
                        <label for="location" class="form-label">Lokasi</label>
                        <input type="text" name="location" class="form-control" id="location" required>
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