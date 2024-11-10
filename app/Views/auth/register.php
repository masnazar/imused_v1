<?= $this->extend('layouts/custom-main2'); ?>

<?= $this->section('styles'); ?>
 <!-- Sweetalerts CSS -->
 <link rel="stylesheet" href="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.css'); ?>">
<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
            <div class="card custom-card my-4">
                <div class="card-body p-5">
                    <div class="mb-3 d-flex justify-content-center">
                        <a href="<?= base_url('index'); ?>">
                            <img src="<?= base_url('assets/images/brand-logos/desktop-logo.png'); ?>" alt="logo" class="desktop-logo">
                            <img src="<?= base_url('assets/images/brand-logos/desktop-white.png'); ?>" alt="logo" class="desktop-white">
                        </a>
                    </div>
                    <p class="h5 mb-2 text-center">Registrasi Akun</p>
                    <p class="mb-4 text-muted op-7 fw-normal text-center">Selamat datang! Mulailah dengan membuat akun Anda.</p>

                    <!-- Form Register -->
                    <form action="<?= base_url('auth/storeRegistration') ?>" method="POST">
                        <?= csrf_field() ?>
                        
                        <div class="row gy-3">
                            <div class="col-xl-12">
                                <label for="full_name" class="form-label text-default">Nama Lengkap<sup class="fs-12 text-danger">*</sup></label>
                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="col-xl-12">
                                <label for="username" class="form-label text-default">Username<sup class="fs-12 text-danger">*</sup></label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            </div>
                            <div class="col-xl-12">
                                <label for="email" class="form-label text-default">Email<sup class="fs-12 text-danger">*</sup></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-xl-12">
                                <label for="whatsapp" class="form-label text-default">Nomor WhatsApp<sup class="fs-12 text-danger">*</sup></label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Nomor WhatsApp (Format: 62...)" required>
                            </div>
                            <div class="col-xl-12">
                                <label for="position" class="form-label text-default">Posisi/Jabatan<sup class="fs-12 text-danger">*</sup></label>
                                <select class="form-select" id="position" name="position" required>
                                    <option value="">Pilih Posisi</option>
                                    <?php foreach ($positions as $position): ?>
                                        <option value="<?= $position['id']; ?>"><?= $position['position_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-xl-12">
                                <label for="password" class="form-label text-default">Kata Sandi<sup class="fs-12 text-danger">*</sup></label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
                                    <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <label for="confirm_password" class="form-label text-default">Konfirmasi Kata Sandi<sup class="fs-12 text-danger">*</sup></label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Kata Sandi" required>
                                    <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('confirm_password',this)" id="button-addon21"><i class="ri-eye-off-line align-middle"></i></a>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Buat Akun</button>
                            </div>
                            <div class="text-center mt-3">
                                <p class="text-muted mb-0">Sudah punya akun? <a href="<?= base_url('auth/login') ?>" class="text-primary">Masuk</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Debugging tambahan untuk memastikan flash data tersedia -->
<?php if (session()->has('swal_success') || session()->has('swal_error')) : ?>
    <script>console.log('SweetAlert flash data ditemukan');</script>
<?php else : ?>
    <script>console.log('SweetAlert flash data TIDAK ditemukan');</script>
<?php endif; ?>

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
<script src="<?= base_url('assets/js/show-password.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.js'); ?>"></script>
<script>
    <?php if (session()->getFlashdata('swal_success')) : ?>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '<?= session()->getFlashdata('swal_success'); ?>',
            showConfirmButton: false,
            timer: 1500
        });
    <?php endif; ?>

    <?php if (session()->getFlashdata('swal_error')) : ?>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '<?= session()->getFlashdata('swal_error'); ?>'
        });
    <?php endif; ?>
</script>
<?= $this->endSection('scripts'); ?>
