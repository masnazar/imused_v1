
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>



<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Start::page-header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">
                                            Dashboards
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Podcast</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Podcast</h1>
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
                    <!-- End::page-header -->

                    <!-- Start Row-1 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card overflow-hidden podcast-banner">
                                <div class="card-body p-5">
                                    <div class="row">
                                        <div class="col-xl-8 my-auto">
                                            <h5 class="fw-semibold text-fixed-white">
                                                Mastering Music Distribution for Your Podcast
                                            </h5>
                                            <span class="d-block text-fixed-white op-8 fw-meidum mb-4 pb-1">Unlock the potential of various music distribution channels to amplify your podcast’s sound. Embrace new possibilities.</span>
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-primary"><i class="ri-headphone-line me-2"></i> Listen Now</button>
                                                <button type="button" class="btn btn-primary1"><i class="ri-headphone-line me-2"></i> 18.5k Playlist</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Popular Artists
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="button">View All</button>
                                </div>
                                <div class="card-body">
                                    <div class="list-unstyled podcast-recently-played-list row">
                                        <div class="col-xxl-3 col-xl-6 col-sm-6 mb-3 mb-xl-0">
                                            <div class="bg-light align-items-center gap-2 p-3 text-center rounded">
                                                <div class="lh-1 mb-3">
                                                    <span class="avatar avatar-xxl avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/podcast/1.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="fw-semibold">Technos Talk</a>
                                                    <span class="d-block fs-13 text-muted">John Samitrin</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-sm-6">
                                            <div class="bg-light align-items-center gap-2 p-3 text-center rounded">
                                                <div class="lh-1 mb-3">
                                                    <span class="avatar avatar-xxl avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/podcast/2.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="fw-semibold">Science Explorers</a>
                                                    <span class="d-block fs-13 text-muted">Emily Johnson</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-sm-6 mb-3 mb-xl-0">
                                            <div class="bg-light align-items-center gap-2 p-3 text-center rounded">
                                                <div class="lh-1 mb-3">
                                                    <span class="avatar avatar-xxl avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/podcast/3.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="fw-semibold">Business Insights</a>
                                                    <span class="d-block fs-13 text-muted">David Williams</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-sm-6">
                                            <div class="bg-light align-items-center gap-2 p-3 text-center rounded">
                                                <div class="lh-1 mb-3">
                                                    <span class="avatar avatar-xxl avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/podcast/4.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="fw-semibold">Entertainment</a>
                                                    <span class="d-block fs-13 text-muted">Michael Brown</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-1 -->

                    <!-- Start::Row-2 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Categories
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="button">View All</button>
                                </div>
                                <div class="card-body">
                                    <div class="row personal-favourite-contacts mb-0 gap-2">
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-primary-transparent p-2">
                                                        <i class="ri-macbook-line fs-18 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-semibold d-block mb-0">Technology</span>
                                                    <span class="text-muted d-block fs-12 mb-0">250</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-primary1-transparent p-2">
                                                        <i class="ri-briefcase-2-line fs-18 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-semibold d-block mb-0">Business</span>
                                                    <span class="text-muted d-block fs-12 mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-primary2-transparent p-2">
                                                        <i class="ri-heart-pulse-line fs-18 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-semibold d-block mb-0">Health</span>
                                                    <span class="text-muted d-block fs-12 mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-primary3-transparent p-2">
                                                        <i class="ri-football-line fs-18 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-semibold d-block mb-0">Sports</span>
                                                    <span class="text-muted d-block fs-12 mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-secondary-transparent p-2">
                                                        <i class="ri-flask-line fs-18 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-semibold d-block mb-0">Science</span>
                                                    <span class="text-muted d-block fs-12 mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-warning-transparent p-2">
                                                        <i class="ri-book-line fs-18 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-semibold d-block mb-0">Education</span>
                                                    <span class="text-muted d-block fs-12 mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-info-transparent p-2">
                                                        <i class="ri-disc-line fs-18 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-semibold d-block mb-0">Music</span>
                                                    <span class="text-muted d-block fs-12 mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg bg-danger-transparent p-2">
                                                        <i class="ri-tv-line fs-18 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-semibold d-block mb-0">Entertainment</span>
                                                    <span class="text-muted d-block fs-12 mb-0">236</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-2 -->

                    <!-- Start::Row-3 -->
                    <div class="row">
                        <div class="col-xxl-9">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Most Popular 
                                    </div>
                                    <button class="btn btn-light btn-sm" type="button">View All</button>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-xl-4">
                                            <div class="d-flex align-items-center p-3 bg-light flex-wrap gap-2 flex-sm-nowrap">
                                                <img src="<?php echo base_url('assets/images/podcast/6.jpg'); ?>" alt="img" class="avatar avatar-xxl me-2">
                                                <div class="w-100">
                                                    <div class="d-flex align-items-start justify-content-between mb-4">
                                                        <div>
                                                            <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Foodie Adventures</h6></a>
                                                            <span class="text-muted fs-12">By Chef Mia Johnson</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-light btn-sm btn-icon">
                                                                <i class="ri-more-2-fill text-muted"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between gap-2">
                                                        <button aria-label="button" type="button" class="btn btn-primary btn-sm">
                                                            <i class="ri-play-fill me-1"></i> Listen Now
                                                        </button>
                                                        <div class="d-flex align-items-center gap-3 lh-1">
                                                            <span class="d-block d-flex align-items-center gap-2 text-muted fw-medium lh-1"><i class="ri-volume-up-line lh-1 align-middle fs-14"></i>75.3k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="d-flex align-items-center p-3 bg-light flex-wrap gap-2 flex-sm-nowrap">
                                                <img src="<?php echo base_url('assets/images/podcast/7.jpg'); ?>" alt="img" class="avatar avatar-xxl me-2">
                                                <div class="w-100">
                                                    <div class="d-flex align-items-start justify-content-between mb-4 flex-wrap">
                                                        <div>
                                                            <a href="javascript:void(0);"><h6 class="fw-semibold mb-0"> Environmental Insights</h6></a>
                                                            <span class="text-muted fs-12">By Dr. David Green</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-light btn-sm btn-icon">
                                                                <i class="ri-more-2-fill text-muted"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between gap-2">
                                                        <button aria-label="button" type="button" class="btn btn-primary btn-sm">
                                                            <i class="ri-play-fill me-1"></i> Listen Now
                                                        </button>
                                                        <div class="d-flex align-items-center gap-3 lh-1">
                                                            <span class="d-block d-flex align-items-center gap-2 text-muted fw-medium lh-1"><i class="ri-volume-up-line lh-1 align-middle fs-14"></i>75.3k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-4">
                                            <div class="d-flex align-items-center p-3 bg-light flex-wrap gap-2 flex-sm-nowrap">
                                                <img src="<?php echo base_url('assets/images/podcast/7.jpg'); ?>" alt="img" class="avatar avatar-xxl me-2">
                                                <div class="w-100">
                                                    <div class="d-flex align-items-start justify-content-between mb-4">
                                                        <div>
                                                            <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Travel Tales</h6></a>
                                                            <span class="text-muted fs-12">By Wanderlost Explorers</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-light btn-sm btn-icon">
                                                                <i class="ri-more-2-fill text-muted"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between gap-2">
                                                        <button aria-label="button" type="button" class="btn btn-primary btn-sm">
                                                            <i class="ri-play-fill me-1"></i> Listen Now
                                                        </button>
                                                        <div class="d-flex align-items-center gap-3 lh-1">
                                                            <span class="d-block d-flex align-items-center gap-2 text-muted fw-medium lh-1"><i class="ri-volume-up-line lh-1 align-middle fs-14"></i>75.3k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-xl-4">
                                            <div class="d-flex align-items-center p-3 bg-light flex-wrap gap-2 flex-sm-nowrap">
                                                <img src="<?php echo base_url('assets/images/podcast/9.jpg'); ?>" alt="img" class="avatar avatar-xxl me-2">
                                                <div class="w-100">
                                                    <div class="d-flex align-items-start justify-content-between mb-4">
                                                        <div>
                                                            <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">True Crime Files</h6></a>
                                                            <span class="text-muted fs-12">By Detective John Smith</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-light btn-sm btn-icon">
                                                                <i class="ri-more-2-fill text-muted"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between gap-2">
                                                        <button aria-label="button" type="button" class="btn btn-primary btn-sm">
                                                            <i class="ri-play-fill me-1"></i> Listen Now
                                                        </button>
                                                        <div class="d-flex align-items-center gap-3 lh-1">
                                                            <span class="d-block d-flex align-items-center gap-2 text-muted fw-medium lh-1"><i class="ri-volume-up-line lh-1 align-middle fs-14"></i>75.3k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="d-flex align-items-center p-3 bg-light flex-wrap gap-2 flex-sm-nowrap">
                                                <img src="<?php echo base_url('assets/images/podcast/8.jpg'); ?>" alt="img" class="avatar avatar-xxl me-2">
                                                <div class="w-100">
                                                    <div class="d-flex align-items-start justify-content-between mb-4">
                                                        <div>
                                                            <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Science Explained</h6></a>
                                                            <span class="text-muted fs-12">Dr. Michael Lee</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-light btn-sm btn-icon">
                                                                <i class="ri-more-2-fill text-muted"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between gap-2">
                                                        <button aria-label="button" type="button" class="btn btn-primary btn-sm">
                                                            <i class="ri-play-fill me-1"></i> Listen Now
                                                        </button>
                                                        <div class="d-flex align-items-center gap-3 lh-1">
                                                            <span class="d-block d-flex align-items-center gap-2 text-muted fw-medium lh-1"><i class="ri-volume-up-line lh-1 align-middle fs-14"></i>75.3k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="d-flex align-items-center p-3 bg-light flex-wrap gap-2 flex-sm-nowrap">
                                                <img src="<?php echo base_url('assets/images/podcast/8.jpg'); ?>" alt="img" class="avatar avatar-xxl me-2">
                                                <div class="w-100">
                                                    <div class="d-flex align-items-start justify-content-between mb-4">
                                                        <div>
                                                            <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Business Buzz</h6></a>
                                                            <span class="text-muted fs-12">By  Emily Davis</span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-light btn-sm btn-icon">
                                                                <i class="ri-more-2-fill text-muted"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between gap-2">
                                                        <button aria-label="button" type="button" class="btn btn-primary btn-sm">
                                                            <i class="ri-play-fill me-1"></i> Listen Now
                                                        </button>
                                                        <div class="d-flex align-items-center gap-3 lh-1">
                                                            <span class="d-block d-flex align-items-center gap-2 text-muted fw-medium lh-1"><i class="ri-volume-up-line lh-1 align-middle fs-14"></i>75.3k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden bg-playing-image">
                                <div class="card-body p-4">
                                    <div class="text-center mb-4">
                                        <span class="mb-3 podcast-playing-now">
                                            <img src="<?php echo base_url('assets/images/podcast/1.jpg'); ?>" alt="" class="w-100 rounded-circle shadow-sm">
                                        </span>
                                        <a href="javascript:void(0);"><h6 class="fw-semibold mb-1 text-fixed-white">Mindful Living</h6></a>
                                        <span class="text-fixed-white op-8 fs-12">By Wanderlost Explorers</span>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center mb-4 pb-4">
                                        <div class="fs-12 text-fixed-white">12.25</div>
                                        <div class="progress progress-xs progress-custom progress-animate podcast-playing-progress" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 50%">
                                            </div>
                                        </div>
                                        <div class="fs-12 text-fixed-white">23.45</div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 lh-1 px-4 py-3 bg-black-transparent rounded-pill">
                                        <a aria-label="anchor" href="javascript:void(0);">
                                            <i class="ri-repeat-2-line fs-5 text-fixed-white"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);">
                                            <i class="ri-skip-back-line fs-5 text-fixed-white"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);">
                                            <i class="ri-pause-line fs-5 text-fixed-white"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);">
                                            <i class="ri-skip-forward-line fs-5 text-fixed-white"></i>
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);">
                                            <i class="ri-shuffle-line fs-5 text-fixed-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-3 -->

                    <!-- Start::Row-4 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Recently Played
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Podcast Name</th>
                                                    <th scope="col">duration</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Latest Episode</th>
                                                    <th scope="col">Average Duration</th>
                                                    <th scope="col">Favourites</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar avatar-md"><img src="<?php echo base_url('assets/images/podcast/6.jpg'); ?>" class="" alt="..."></span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">Whimsical Wonders</a>
                                                                <span class="fs-12 d-block text-muted">Emily Watson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        150s
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-secondary-transparent">Comedy</span>
                                                    </td>
                                                    <td>
                                                        #156: Silly Stories
                                                    </td>
                                                    <td>
                                                        45 mins
                                                    </td>
                                                    <td>
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <i class="ri-heart-fill fs-16 lh-1 text-danger me-2"></i>Added
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar avatar-md"><img src="<?php echo base_url('assets/images/podcast/7.jpg'); ?>" class="" alt="..."></span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">Mindful Meditations</a>
                                                                <span class="fs-12 d-block text-muted">Sarah Johnson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        1 min
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Culture</span>
                                                    </td>
                                                    <td>
                                                        #82: Deep Nonsense
                                                    </td>
                                                    <td>
                                                        30 mins
                                                    </td>
                                                    <td>
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <i class="ri-heart-fill fs-16 op-2 lh-1 text-muted me-2"></i>Add Now
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar avatar-md"><img src="<?php echo base_url('assets/images/podcast/8.jpg'); ?>" class="" alt="..."></span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">Deep Dive Dialogues</a>
                                                                <span class="fs-12 d-block text-muted">John Doe</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        2 min
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">Personal Journal</span>
                                                    </td>
                                                    <td>
                                                        #30: Life's Random Moments
                                                    </td>
                                                    <td>
                                                        60 mins
                                                    </td>
                                                    <td>
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <i class="ri-heart-fill fs-16 lh-1 text-danger me-2"></i>Added
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar avatar-md"><img src="<?php echo base_url('assets/images/podcast/9.jpg'); ?>" class="" alt="..."></span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">Random Revelations</a>
                                                                <span class="fs-12 d-block text-muted">Sophia Brown</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        3 min
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">News and Politics</span>
                                                    </td>
                                                    <td>
                                                        #300: Current Affairs
                                                    </td>
                                                    <td>
                                                        20 mins
                                                    </td>
                                                    <td>
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <i class="ri-heart-fill fs-16 op-2 lh-1 text-muted me-2"></i>Add Now
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar avatar-md"><img src="<?php echo base_url('assets/images/media/media-60.jpg'); ?>" class="" alt="..."></span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">Bite-sized Banter</a>
                                                                <span class="fs-12 d-block text-muted">Michael Smith</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        4 min
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Food and Drink</span>
                                                    </td>
                                                    <td>
                                                        #45: Culinary Capers
                                                    </td>
                                                    <td>
                                                        50 mins
                                                    </td>
                                                    <td>
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <i class="ri-heart-fill fs-16 lh-1 text-danger me-2"></i>Added
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer border-top-0">
                                    <div class="d-flex align-items-center">
                                        <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold align-middle"></i> </div>
                                        <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-4 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
