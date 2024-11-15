<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Edit Gudang
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inventory & Warehouse</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('warehouses') ?>">Daftar Gudang</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Gudang</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Edit Gudang</h1>
    </div>
</div>
<!-- Page Header Close -->

<!-- Form Edit Warehouse -->
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Form Edit Gudang</div>
            </div>
            <div class="card-body">
                <!-- Form untuk edit gudang -->
                <form action="<?= base_url('warehouses/update/' . $warehouse['id']) ?>" method="post">
                    <?= csrf_field() ?>

                    <!-- Nama Gudang -->
                    <div class="mb-3">
                        <label for="warehouseName" class="form-label">Nama Gudang</label>
                        <input type="text" name="name" class="form-control" id="warehouseName" value="<?= esc($warehouse['name']) ?>" required>
                    </div>

                    <!-- Lokasi Gudang -->
                    <div class="mb-3">
                        <label for="location" class="form-label">Lokasi</label>
                        <input type="text" name="location" class="form-control" id="location" value="<?= esc($warehouse['location']) ?>" required>
                    </div>

                    <!-- Tombol Simpan Perubahan -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
