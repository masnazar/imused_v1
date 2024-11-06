<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Edit Posisi
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">User Management</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('positions') ?>">Posisi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Posisi</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Edit Posisi</h1>
    </div>
</div>

<div class="card custom-card">
    <div class="card-body">
        <form action="<?= base_url('positions/update/' . $position['id']) ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="positionName" class="form-label">Nama Posisi</label>
                <input type="text" name="position_name" class="form-control" id="positionName" value="<?= $position['position_name'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="positionCode" class="form-label">Kode Posisi</label>
                <input type="text" name="position_code" class="form-control" id="positionCode" value="<?= $position['position_code'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('positions') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
