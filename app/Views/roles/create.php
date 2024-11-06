<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Tambah Role
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <h1 class="page-title fw-medium fs-18 mb-0">Tambah Role</h1>
    </div>
</div>

<div class="card custom-card">
    <div class="card-body">
        <form action="<?= base_url('roles/store') ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="role_name" class="form-label">Nama Role</label>
                <input type="text" name="role_name" class="form-control" id="role_name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('roles') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

<?= $this->endSection() ?>