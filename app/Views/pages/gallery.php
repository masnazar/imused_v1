
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/glightbox/css/glightbox.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Gallery</h1>
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
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo base_url('assets/images/media/media-40.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo base_url('assets/images/media/media-40.jpg'); ?>" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo base_url('assets/images/media/media-41.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo base_url('assets/images/media/media-41.jpg'); ?>" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo base_url('assets/images/media/media-42.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo base_url('assets/images/media/media-42.jpg'); ?>" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo base_url('assets/images/media/media-43.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo base_url('assets/images/media/media-43.jpg'); ?>" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo base_url('assets/images/media/media-44.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo base_url('assets/images/media/media-44.jpg'); ?>" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo base_url('assets/images/media/media-45.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo base_url('assets/images/media/media-45.jpg'); ?>" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo base_url('assets/images/media/media-46.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo base_url('assets/images/media/media-46.jpg'); ?>" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo base_url('assets/images/media/media-60.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo base_url('assets/images/media/media-60.jpg'); ?>" alt="image" >
                            </a>
                        </div>
                    </div>
                    <!--End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Gallery JS -->
        <script src="<?php echo base_url('assets/libs/glightbox/js/glightbox.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/gallery.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
