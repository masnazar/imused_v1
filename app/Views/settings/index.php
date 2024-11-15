<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>
<!-- Tambahkan link CSS jika ada -->
<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
    <div>
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Pengaturan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pengaturan Bisnis</li>
            </ol>
        </nav>
        <h1 class="page-title fw-medium fs-18 mb-0">Pengaturan Bisnis</h1>
    </div>
    <div class="btn-list">
        <button class="btn btn-white btn-wave">
            <i class="ri-filter-3-line align-middle me-1 lh-1"></i> Filter
        </button>
        <button class="btn btn-primary btn-wave me-0">
            <i class="ri-share-forward-line me-1"></i> Share
        </button>
    </div>
</div>
<!-- Page Header Close -->

<!-- Start::row-1 -->
<div class="row gap-3 justify-content-center">
    <div class="col-xl-9">
        <div class="card custom-card">
            <ul class="nav nav-tabs tab-style-8 scaleX rounded m-3 profile-settings-tab gap-2" role="tablist">
                <li class="nav-item me-1" role="presentation">
                    <a class="nav-link px-4 bg-primary-transparent active" href="<?= base_url('settings/business') ?>">Pengaturan Bisnis</a>
                </li>
                <li class="nav-item me-1" role="presentation">
                    <a class="nav-link px-4 bg-primary-transparent" href="<?= base_url('settings/system') ?>">Pengaturan Sistem</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link px-4 bg-primary-transparent" href="<?= base_url('settings/notification') ?>">Pengaturan Notifikasi</a>
                </li>
            </ul>
            <div class="p-3 border-bottom border-top border-block-end-dashed">
                <!-- Form Pengaturan Bisnis -->
                <form action="<?= base_url('settings/update/business') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="row gy-3">
                        <!-- Logo Perusahaan -->
                        <div class="col-xl-12">
                            <div class="d-flex align-items-start flex-wrap gap-3">
                                <div>
                                    <span class="avatar avatar-xxl">
                                    <img src="<?= $company_logo; ?>" alt="Logo Perusahaan" style="max-width: 100px;">
                                    </span>
                                </div>
                                <div>
                                    <span class="fw-medium d-block mb-2">Logo Perusahaan</span>
                                    <div class="btn-list mb-1">
                                        <input type="file" name="logo" id="logo" class="form-control" style="display: none;" onchange="document.getElementById('changeImageLabel').textContent = this.files[0].name;">
                                        <button type="button" class="btn btn-sm btn-primary btn-wave" onclick="document.getElementById('logo').click();"><i class="ri-upload-2-line me-1"></i><span id="changeImageLabel">Ganti Gambar</span></button>
                                    </div>
                                    <span class="d-block fs-12 text-muted">Gunakan JPEG, PNG, atau GIF. Ukuran terbaik: 200x200 piksel. Maksimal 5MB.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Nama Perusahaan -->
                        <div class="col-xl-12">
                            <label for="company_name" class="form-label">Nama Perusahaan</label>
                            <input type="text" name="company_name" id="company_name" class="form-control" value="<?= esc($company_name) ?>">
                        </div>

                        <!-- Alamat Perusahaan -->
                        <div class="col-xl-12">
                            <label for="company_address" class="form-label">Alamat Perusahaan</label>
                            <textarea name="company_address" id="company_address" class="form-control"><?= esc($company_address) ?></textarea>
                        </div>

                        <!-- Kontak Perusahaan -->
                        <div class="col-xl-12">
                            <label for="company_contact" class="form-label">Kontak Perusahaan</label>
                            <input type="text" name="company_contact" id="company_contact" class="form-control" value="<?= esc($company_contact) ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End::row-1 -->

<script>
    function removeLogo() {
        document.getElementById('logo').value = '';
        document.getElementById('changeImageLabel').textContent = 'Ganti Gambar';
    }
</script>

<?= $this->endSection('content'); ?>

<?= $this->section('scripts') ?>
<script>
    <?php if (session()->has('swal_success')) : ?>
        Swal.fire({
            icon: 'success',
            title: '<?= session('swal_success') ?>',
            showConfirmButton: false,
            timer: 2000
        });
    <?php endif; ?>
    <?php if (session()->has('swal_error')) : ?>
        Swal.fire({
            icon: 'error',
            title: '<?= session('swal_error') ?>',
            showConfirmButton: true
        });
    <?php endif; ?>
</script>
<?= $this->endSection() ?>
