
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <link rel="stylesheet" href="<?php echo base_url('assets/libs/dragula/dragula.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Draggable Cards</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Draggable Cards</h1>
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
                        <div class="col-xl-6" id="draggable-left">
                            <div class="card custom-card card-bg-primary">
                                <a href="javascript:void(0);" class="card-anchor"></a>
                                <div class="card-body">
                                <blockquote class="blockquote mb-0 text-center">
                                    <h6 class="text-fixed-white">The best and most beautiful things in the world cannot be seen or even touched — they must be felt with the heart..</h6>
                                    <footer class="blockquote-footer mt-3 fs-14 text-fixed-white op-7">Someone famous as <cite title="Source Title">-Helen Keller</cite></footer>
                                </blockquote>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Card With Close Button
                                    </div>
                                    <a href="javascript:void(0);" data-bs-toggle="card-remove">
                                        <i class="ri-close-line fs-18"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-text fw-medium">Closed Card</h6>
                                    <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                            </div>
                            <div class="card custom-card border border-info">
                                <a href="javascript:void(0);" class="card-anchor"></a>
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <span class="avatar avatar-xl">
                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div>
                                            <p class="card-text text-info mb-1 fs-14 fw-medium">Jessica Sams.</p>
                                            <div class="card-title fs-12 mb-1">Department Of Computers</div>
                                            <div class="card-title text-muted fs-11 mb-0">23 Years, Female</div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card overlay-card text-fixed-white">
                                <img src="<?php echo base_url('assets/images/media/media-35.jpg'); ?>" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0">
                                    <div class="card-header text-fixed-white">
                                        <div class="card-title">
                                            Image Overlays Are Awesome!
                                        </div>
                                    </div>
                                    <div class="card-body overflow-auto text-fixed-white">
                                        <div class="card-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                        <div class="card-text">Last updated 3 mins ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <a href="javascript:void(0);" class="card-anchor"></a>
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <span class="avatar avatar-md">
                                                <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div>
                                            <p class="card-text mb-0 fs-14 fw-medium">Atharva Simon.</p>
                                            <div class="card-title text-muted fs-12 mb-0">Correspondent Professor</div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6" id="draggable-right">
                            <div class="card custom-card overlay-card">
                                <img src="<?php echo base_url('assets/images/media/media-36.jpg'); ?>" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom top-0">
                                    <div class="card-body overflow-auto text-fixed-white">
                                        <div class="card-text">
                                            Image Overlays Are Awesome!
                                        </div>
                                        <div class="card-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                    </div>
                                    <div class="card-footer text-fixed-white">Last updated 3 mins ago</div>
                                </div>
                            </div>
                            <div class="card custom-card card-bg-primary2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Sonia Agarwal</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">In leave for 1 month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header border-bottom-0 justify-content-between">
                                    <div class="card-title">
                                        Card With Collapse Button
                                    </div>
                                    <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="ri-arrow-down-s-line fs-18 collapse-open"></i>
                                        <i class="ri-arrow-up-s-line collapse-close fs-18"></i>
                                    </a>
                                </div>
                                <div class="collapse show border-top" id="collapseExample">
                                    <div class="card-body">
                                        <h6 class="card-text fw-medium">Collapsible Card</h6>
                                        <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Card With Fullscreen Button
                                    </div>
                                    <a href="javascript:void(0);" data-bs-toggle="card-fullscreen">
                                        <i class="ri-fullscreen-line"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-text fw-medium">FullScreen Card</h6>
                                    <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Dragula JS -->
        <script src="<?php echo base_url('assets/libs/dragula/dragula.min.js'); ?>"></script>

        <!-- Internal Dragula JS -->
        <script src="<?php echo base_url('assets/js/draggable-cards.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
