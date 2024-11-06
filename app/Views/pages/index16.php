
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
                                    <li class="breadcrumb-item active" aria-current="page">Social Media</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Social Media</h1>
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

                    <!-- Start::Row-1 -->
                    <div class="row">
                        <div class="col-xxl-8">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card custom-card social-cards insta">
                                        <div class="card-body flex-fill">
                                            <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                <div>
                                                    <p class="flex-fill fs-15 fw-medium mb-1 text-primary2">Instagram</p>
                                                    <p class="mb-2 fs-24 fw-medium">457K</p>
                                                    <div class="flex-between">
                                                        <span class="text-muted fs-12">Followers</span>
                                                        <span class="text-danger d-inline-block"><i class="bi bi-arrow-down-right me-1 fs-10"></i>1.5%</span>
                                                    </div>
                                                </div>
                                                <div class="align-self-center ms-auto">
                                                    <!-- <span class="avatar avatar-md bg-transparent text-primary2"><i class="ri-instagram-line fs-25 lh-1"></i></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card social-cards linkedin">
                                        <div class="card-body flex-fill">
                                            <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                <div>
                                                    <p class="flex-fill fs-15 fw-medium mb-1 text-info">Linked In</p>
                                                    <p class="mb-2 fs-24 fw-medium">457K</p>
                                                    <div class="flex-between">
                                                        <span class="text-muted fs-12">Followers</span>
                                                        <span class="text-danger d-inline-block"><i class="bi bi-arrow-down-right me-1 fs-10"></i>1.5%</span>
                                                    </div>
                                                </div>
                                                <div class="align-self-center ms-auto">
                                                    <!-- <span class="avatar avatar-md bg-transparent text-info"><i class="ri-linkedin-line fs-25 lh-1"></i></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card social-cards fb">
                                        <div class="card-body flex-fill">
                                            <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                <div>
                                                    <p class="flex-fill fs-15 fw-medium mb-1 text-primary">Facebook</p>
                                                    <p class="mb-2 fs-24 fw-medium">2.1K</p>
                                                    <div class="flex-between">
                                                        <span class="text-muted fs-12">1 hr ago</span>
                                                        <span class="text-danger d-inline-block"><i class="bi bi-arrow-down-right me-1 fs-10"></i>1.9%</span>
                                                    </div>
                                                </div>
                                                <div class="align-self-center ms-auto">
                                                    <!-- <span class="avatar avatar-md bg-transparent text-primary"><i class="ri-facebook-line fs-25 lh-1"></i></span> -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card social-cards twit">
                                        <div class="card-body flex-fill">
                                            <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                <div>
                                                    <p class="flex-fill fs-15 fw-medium mb-1 text-dark">Twitter</p>
                                                    <p class="mb-2 fs-24 fw-medium">2.1K</p>
                                                    <div class="flex-between">
                                                        <span class="text-muted fs-12">1 week ago</span>
                                                        <span class="text-success d-inline-block"><i class="bi bi-arrow-up-right me-1 fs-10"></i>1.9%</span>
                                                    </div>
                                                </div>
                                                <div class="align-self-center ms-auto">
                                                    <!-- <span class="avatar avatar-md bg-transparent text-dark"><i class="ri-twitter-x-line fs-25 lh-1"></i></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card social-cards youtube">
                                        <div class="card-body flex-fill">
                                            <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                <div>
                                                    <p class="flex-fill fs-15 fw-medium mb-1 text-danger">Youtube</p>
                                                    <p class="mb-2 fs-24 fw-medium">1.1M</p>
                                                    <div class="flex-between">
                                                        <span class="text-muted fs-12">1 day ago</span>
                                                        <span class="text-success d-inline-block"><i class="bi bi-arrow-up-right me-1 fs-10"></i>1.9%</span>
                                                    </div>
                                                </div>
                                                <div class="align-self-center ms-auto">
                                                    <!-- <span class="avatar avatar-md bg-transparent text-danger"><i class="ri-youtube-line fs-25 lh-1"></i></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card social-cards msgr">
                                        <div class="card-body flex-fill">
                                            <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                <div>
                                                    <p class="flex-fill fs-15 fw-medium mb-1 text-secondary">Messenger</p>
                                                    <p class="mb-2 fs-24 fw-medium">1.1M</p>
                                                    <div class="flex-between">
                                                        <span class="text-muted fs-12">1 day ago</span>
                                                        <span class="text-success d-inline-block"><i class="bi bi-arrow-up-right me-1 fs-10"></i>1.9%</span>
                                                    </div>
                                                </div>
                                                <div class="align-self-center ms-auto">
                                                    <!-- <span class="avatar avatar-md bg-transparent text-secondary"><i class="ri-messenger-line fs-25 lh-1"></i></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title"> 
                                        Follow On Device
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted">
                                        View All
                                    </a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="row p-3">
                                        <div class="col-xl-5 px-0">
                                            <div id="follow-on-device"></div>
                                        </div>
                                        <div class="col-xl-7">
                                            <ul class="list-group list-group-flush border border-top mt-3">
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-start justify-content-between">
                                                        <div class="session-type lh-1 mobile">
                                                            <div class="fw-medium mb-1">Mobile</div>
                                                            <span class="fs-12 text-muted">Increased By<span class="text-success fs-12 ms-1 fw-medium d-inline-block">1.67%</span></span>
                                                        </div>
                                                        <div class="lh-1 text-end">
                                                            <span class="d-block fs-12 text-muted mb-1">Total</span>
                                                            <span class="d-block fw-semibold mb-0">1,754</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-start justify-content-between">
                                                        <div class="session-type lh-1 tablet">
                                                            <div class="fw-medium mb-1">Tablet</div>
                                                            <span class="fs-12 text-muted">Increased By<span class="text-success fs-12 ms-1 fw-medium d-inline-block">0.46%</span></span>
                                                        </div>
                                                        <div class="lh-1 text-end">
                                                            <span class="d-block fs-12 text-muted mb-1">Total</span>
                                                            <span class="d-block fw-semibold mb-0">1,234</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-start justify-content-between">
                                                        <div class="session-type desktop lh-1">
                                                            <div class="fw-medium mb-1">Desktop</div>
                                                            <span class="fs-12 text-muted">Decresed By<span class="text-danger fs-12 ms-1 fw-medium d-inline-block">3.43%</span></span>
                                                        </div>
                                                        <div class="lh-1 text-end">
                                                            <span class="d-block fs-12 text-muted mb-1">Total</span>
                                                            <span class="d-block fw-semibold mb-0">878</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-1 -->

                    <!-- Start::Row-2 -->
                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Suggestions
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted">
                                        View All
                                    </a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled personal-favourite mb-0">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium d-block mb-0">Socrates Itumay</span>
                                                    <span class="text-muted d-block fs-12">3 Mutual Friends</span>
                                                </div>
                                                <div>
                                                    <button aria-label="buton" type="button" class="btn btn-sm btn-icon btn-primary"><i class="ri-user-add-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium d-block mb-0">Ryan Gercia</span>
                                                    <span class="text-muted d-block fs-12">3 Mutual Friends</span>
                                                </div>
                                                <div>
                                                    <button aria-label="buton" type="button" class="btn btn-sm btn-icon btn-primary"><i class="ri-user-add-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium d-block mb-0">Prax Bhav</span>
                                                    <span class="text-muted d-block fs-12">3 Mutual Friends</span>
                                                </div>
                                                <div>
                                                    <button aria-label="buton" type="button" class="btn btn-sm btn-icon btn-primary"><i class="ri-user-add-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium d-block mb-0">Jackie Chen</span>
                                                    <span class="text-muted d-block fs-12">3 Mutual Friends</span>
                                                </div>
                                                <div>
                                                    <button aria-label="buton" type="button" class="btn btn-sm btn-icon btn-primary"><i class="ri-user-add-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium d-block mb-0">Samantha Sam</span>
                                                    <span class="text-muted d-block fs-12">3 Mutual Friends</span>
                                                </div>
                                                <div>
                                                    <button aria-label="buton" type="button" class="btn btn-sm btn-icon btn-primary"><i class="ri-user-add-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium d-block mb-0">Robert Lewis</span>
                                                    <span class="text-muted d-block fs-12">3 Mutual Friends</span>
                                                </div>
                                                <div>
                                                    <button aria-label="buton" type="button" class="btn btn-sm btn-icon btn-primary"><i class="ri-user-add-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between flex-wrap">
                                    <div class="card-title">
                                        Audience Statistics
                                    </div>
                                    <div class="d-flex gap-2">
                                        <div class="btn btn-outline-light border btn-full btn-sm">Today</div>
                                        <div class="btn btn-outline-light border btn-full btn-sm">Weakly</div>
                                        <div class="btn btn-light border btn-full btn-sm">Yearly</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="audience" class=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Requests
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted">
                                        View All
                                    </a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled personal-favourite mb-0">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill text-truncate">
                                                    <span class="fw-medium d-block mb-0">Socrates Itumay</span>
                                                    <span class="text-muted d-block fs-12 w-75 text-truncate">want's to add you as a friend </span>
                                                </div>
                                                <div class="btn-list text-nowrap">
                                                    <button aria-label="buton" type="button" class="btn btn-icon btn-sm btn-success-light">
                                                        <i class="ri-check-line"></i>
                                                    </button>
                                                    <button aria-label="buton" type="button" class="btn btn-icon btn-sm btn-danger-light me-0">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill text-truncate">
                                                    <span class="fw-medium d-block mb-0">Ryan Gercia</span>
                                                    <span class="text-muted d-block fs-12 w-75 text-truncate">want's to add you as a friend </span>
                                                </div>
                                                <div class="btn-list text-nowrap">
                                                    <button aria-label="buton" type="button" class="btn btn-icon btn-sm btn-success-light">
                                                        <i class="ri-check-line"></i>
                                                    </button>
                                                    <button aria-label="buton" type="button" class="btn btn-icon btn-sm btn-danger-light me-0">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill text-truncate">
                                                    <span class="fw-medium d-block mb-0">Prax Bhav</span>
                                                    <span class="text-muted d-block fs-12 w-75 text-truncate">want's to add you as a friend </span>
                                                </div>
                                                <div class="btn-list text-nowrap">
                                                    <button aria-label="buton" type="button" class="btn btn-icon btn-sm btn-success-light">
                                                        <i class="ri-check-line"></i>
                                                    </button>
                                                    <button aria-label="buton" type="button" class="btn btn-icon btn-sm btn-danger-light me-0">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill text-truncate">
                                                    <span class="fw-medium d-block mb-0">Jackie Chen</span>
                                                    <span class="text-muted d-block fs-12 w-75 text-truncate">want's to add you as a friend </span>
                                                </div>
                                                <div class="btn-list text-nowrap">
                                                    <button aria-label="buton" type="button" class="btn btn-icon btn-sm btn-success-light">
                                                        <i class="ri-check-line"></i>
                                                    </button>
                                                    <button aria-label="buton" type="button" class="btn btn-icon btn-sm btn-danger-light me-0">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill text-truncate">
                                                    <span class="fw-medium d-block mb-0">Samantha Sam</span>
                                                    <span class="text-muted d-block fs-12 w-75 text-truncate">want's to add you as a friend </span>
                                                </div>
                                                <div class="btn-list text-nowrap">
                                                    <button aria-label="buton" type="button" class="btn btn-icon btn-sm btn-success-light">
                                                        <i class="ri-check-line"></i>
                                                    </button>
                                                    <button aria-label="buton" type="button" class="btn btn-icon btn-sm btn-danger-light me-0">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill text-truncate">
                                                    <span class="fw-medium d-block mb-0">Robert Lewis</span>
                                                    <span class="text-muted d-block fs-12 w-75 text-truncate">want's to add you as a friend </span>
                                                </div>
                                                <div class="btn-list text-nowrap">
                                                    <button aria-label="buton" type="button" class="btn btn-icon btn-sm btn-success-light">
                                                        <i class="ri-check-line"></i>
                                                    </button>
                                                    <button aria-label="buton" type="button" class="btn btn-icon btn-sm btn-danger-light me-0">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-2 -->

                    <!-- Start::Row-3 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Social Media Performance
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here">
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
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Platform</th>
                                                    <th scope="col">Likes</th>
                                                    <th scope="col">Comments</th>
                                                    <th scope="col">Shares</th>
                                                    <th scope="col">Impressions</th>
                                                    <th scope="col">Engaged (%)</th>
                                                    <th scope="col">Followers</th>
                                                    <th scope="col">Following</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        2024-02-15
                                                    </td>
                                                    <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-sm bg-danger-transparent">
                                                                <i class="ri-youtube-fill fs-16"></i>
                                                            </span>
                                                            <span class="fw-medium">Youtube</span>
                                                    </div>
                                                    </td>
                                                    <td>
                                                        150
                                                    </td>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td>
                                                        50
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">10,000</span>
                                                    </td>
                                                    <td>
                                                        3.5%
                                                    </td>
                                                    <td>
                                                        458
                                                    </td>
                                                    <td>
                                                        256
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2024-02-14
                                                    </td>
                                                    <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-sm bg-dark-transparent">
                                                                <i class="ri-twitter-x-fill fs-16"></i>
                                                            </span>
                                                            <span class="fw-medium">Twitter</span>
                                                    </div>
                                                    </td>
                                                    <td>
                                                        200
                                                    </td>
                                                    <td>
                                                        30
                                                    </td>
                                                    <td>
                                                        70
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-secondary-transparent">15,000</span>
                                                    </td>
                                                    <td>
                                                        4.2%
                                                    </td>
                                                    <td>
                                                        565
                                                    </td>
                                                    <td>
                                                        355
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2024-02-13
                                                    </td>
                                                    <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-sm bg-info-transparent">
                                                                <i class="ri-messenger-fill fs-16"></i>
                                                            </span>
                                                            <span class="fw-medium">Facebook</span>
                                                    </div>
                                                    </td>
                                                    <td>
                                                        300
                                                    </td>
                                                    <td>
                                                        40
                                                    </td>
                                                    <td>
                                                        90
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">20,000</span>
                                                    </td>
                                                    <td>
                                                        5.0%
                                                    </td>
                                                    <td>
                                                        458
                                                    </td>
                                                    <td>
                                                        956
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2024-02-12
                                                    </td>
                                                    <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-sm bg-secondary-transparent">
                                                                <i class="ri-instagram-fill fs-16"></i>
                                                            </span>
                                                            <span class="fw-medium">Instagram</span>
                                                    </div>
                                                    </td>
                                                    <td>
                                                        100
                                                    </td>
                                                    <td>
                                                        20
                                                    </td>
                                                    <td>
                                                        30
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-orange-transparent">8,000</span>
                                                    </td>
                                                    <td>
                                                        2.1%
                                                    </td>
                                                    <td>
                                                        458
                                                    </td>
                                                    <td>
                                                        256
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2024-02-11
                                                    </td>
                                                    <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-sm bg-dark-transparent">
                                                                <i class="ri-twitter-x-fill fs-16"></i>
                                                            </span>
                                                            <span class="fw-medium">Twitter</span>
                                                    </div>
                                                    </td>
                                                    <td>
                                                        120
                                                    </td>
                                                    <td>
                                                        15
                                                    </td>
                                                    <td>
                                                        40
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">12,000</span>
                                                    </td>
                                                    <td>
                                                        3.0%
                                                    </td>
                                                    <td>
                                                        856
                                                    </td>
                                                    <td>
                                                        295
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
                    <!-- End::Row-3 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- Social Dashboard JS -->
        <script src="<?php echo base_url('assets/js/social-dashboard.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
