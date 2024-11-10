<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Pengaturan Umum<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Pengaturan Umum</h1>
<form action="<?= base_url('settings/update') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    
    <div class="mb-3">
        <label for="company_name" class="form-label">Nama Perusahaan</label>
        <input type="text" name="company_name" id="company_name" class="form-control" value="<?= esc($company_name) ?>">
    </div>

    <div class="mb-3">
        <label for="company_address" class="form-label">Alamat Perusahaan</label>
        <textarea name="company_address" id="company_address" class="form-control"><?= esc($company_address) ?></textarea>
    </div>

    <div class="mb-3">
        <label for="company_contact" class="form-label">Kontak Perusahaan</label>
        <input type="text" name="company_contact" id="company_contact" class="form-control" value="<?= esc($company_contact) ?>">
    </div>

    <div class="mb-3">
        <label for="default_language" class="form-label">Bahasa Default</label>
        <input type="text" name="default_language" id="default_language" class="form-control" value="<?= esc($default_language) ?>">
    </div>

    <div class="mb-3">
        <label for="timezone" class="form-label">Zona Waktu</label>
        <input type="text" name="timezone" id="timezone" class="form-control" value="<?= esc($timezone) ?>">
    </div>

    <div class="mb-3">
        <label for="logo" class="form-label">Logo Perusahaan</label>
        <input type="file" name="logo" id="logo" class="form-control">
        <?php if ($logo): ?>
    <img src="<?= base_url(esc($logo)) ?>" alt="Logo Perusahaan" style="max-width: 150px; margin-top: 10px;">
<?php endif; ?>

    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>
