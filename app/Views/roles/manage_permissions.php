<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Pengaturan Hak Akses
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<!-- Page Header dengan Breadcrumbs -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="<?= base_url('roles') ?>">Manajemen Role</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pengaturan Hak Akses</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Pengaturan Hak Akses untuk Role: <?= $roleName ?></h1>
    </div>
</div>

<!-- Form Pengaturan Permissions dengan Custom Toggle Switch -->
<div class="card custom-card">
    <div class="card-header">
        <h5 class="card-title mb-0">Tetapkan Hak Akses</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('roles/assignPermissionToRole/' . $roleId) ?>" method="post">
            <?= csrf_field() ?>
            <div class="row gy-3">
                <?php foreach ($permissions as $index => $permission): ?>
                    <?php 
                        $inputId = 'permissionToggle' . $index; // ID unik untuk setiap input
                    ?>
                    <div class="col-md-6 col-lg-4 px-2">
                        <div class="custom-toggle-switch d-flex align-items-center mb-3">
                            <input id="<?= $inputId ?>" name="permissions[]" type="checkbox" value="<?= $permission['id'] ?>"
                                   <?= in_array($permission['id'], $assignedPermissions) ? 'checked' : '' ?>>
                            <label for="<?= $inputId ?>" class="label-primary"></label>
                            <span class="ms-3"><?= $permission['display_name'] ?: $permission['permission_name'] ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Simpan Hak Akses</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
