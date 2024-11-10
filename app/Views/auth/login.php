<?= $this->extend('layouts/custom-main3'); ?>

<?= $this->section('styles'); ?>
<!-- Sweetalerts CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.css'); ?>">
<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>

<div class="row authentication authentication-cover-main mx-0">
    <div class="col-xxl-6 col-xl-7">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-xxl-7 col-xl-9 col-lg-6 col-md-6 col-sm-8 col-12">
                <div class="card custom-card my-auto border">
                    <div class="card-body p-5">
                        <p class="h5 mb-2 text-center">Masuk</p>
                        <p class="mb-4 text-muted op-7 fw-normal text-center">Selamat datang kembali, Laey!</p>

                        <!-- Form Login -->
                        <form action="<?= base_url('auth/authenticate') ?>" method="POST">
                            <?= csrf_field() ?>
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="signin-username" class="form-label text-default">Username</label>
                                    <input type="text" class="form-control" id="signin-username" name="username" placeholder="Username" required>
                                </div>
                                <div class="col-xl-12 mb-2">
                                    <label for="signin-password" class="form-label text-default d-block">
                                        Password
                                        <a href="<?= base_url('auth/forgotPassword') ?>" class="float-end fw-normal text-muted">Lupa kata sandi?</a>
                                    </label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="signin-password" name="password" placeholder="Password" required>
                                        <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('signin-password', this)" id="button-addon2">
                                            <i class="ri-eye-off-line align-middle"></i>
                                        </a>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="defaultCheck1">
                                            <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                                Ingat saya
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Masuk</button>
                            </div>
                            <div class="text-center mt-3">
                                <p class="text-muted mb-0">Belum punya akun? <a href="<?= base_url('auth/register') ?>" class="text-primary">Daftar Sekarang</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian Kiri (Desain Tambahan) -->
    <div class="col-xxl-6 col-xl-5 col-lg-12 d-xl-block d-none px-0">
        <div class="authentication-cover overflow-hidden">
            <div class="authentication-cover-logo"> 
                <a href="<?= base_url('index'); ?>"> 
                    <img src="<?= base_url('assets/images/brand-logos/desktop-white.png'); ?>" alt="" class="authentication-brand desktop-white"> 
                </a> 
            </div>
            <div class="aunthentication-cover-content d-flex align-items-center justify-content-center">
                <div>
                    <h3 class="text-fixed-white mb-1 fw-medium">Selamat datang, Laey!</h3>
                    <h6 class="text-fixed-white mb-3 fw-medium">Masuk ke Akun Anda</h6>
                    <p class="text-fixed-white mb-1 op-6">Selamat datang di Dashboard Admin. Silakan masuk untuk mengelola alat administrasi dengan aman dan mengawasi aktivitas platform Anda. Kredensial Anda memastikan integritas dan fungsionalitas sistem.</p>
                </div>
            </div>
        </div>
    </div>
</div>

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
