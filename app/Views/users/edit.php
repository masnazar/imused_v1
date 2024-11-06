<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Edit Pengguna
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">User Management</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('users') ?>">Pengguna</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Pengguna</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Edit Pengguna</h1>
    </div>
</div>

<div class="card custom-card">
    <div class="card-body">
        <form action="<?= base_url('users/update/' . $user['id']) ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="fullName" class="form-label">Nama Lengkap</label>
                <input type="text" name="full_name" class="form-control" id="fullName" value="<?= $user['full_name'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" value="<?= $user['username'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="<?= $user['email'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
                <input type="text" name="whatsapp_number" class="form-control" id="whatsapp" value="<?= $user['whatsapp_number'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Posisi</label>
                <select name="position_id" class="form-select" id="position" required>
                    <option value="">Pilih Posisi</option>
                    <?php foreach ($positions as $position): ?>
                        <option value="<?= $position['id'] ?>" <?= $user['position_id'] == $position['id'] ? 'selected' : '' ?>>
                            <?= $position['position_name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password (Opsional)</label>
                <input type="password" name="password" class="form-control" id="password">
                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password.</small>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('users') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
