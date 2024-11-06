
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/swiper/swiper-bundle.min.css'); ?>">

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
                                    <li class="breadcrumb-item active" aria-current="page">Courses</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Courses</h1>
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
                        <div class="col-xxl-7">
                            <div class="row">
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body text-center">
                                            <span class="avatar avatar-md bg-primary svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M152,120H136V56h8a32,32,0,0,1,32,32,8,8,0,0,0,16,0,48.05,48.05,0,0,0-48-48h-8V24a8,8,0,0,0-16,0V40h-8a48,48,0,0,0,0,96h8v64H104a32,32,0,0,1-32-32,8,8,0,0,0-16,0,48.05,48.05,0,0,0,48,48h16v16a8,8,0,0,0,16,0V216h16a48,48,0,0,0,0-96Zm-40,0a32,32,0,0,1,0-64h8v64Zm40,80H136V136h16a32,32,0,0,1,0,64Z"></path></svg>
                                            </span>
                                            <p class="mb-1 mt-3 fw-medium">Total Revenue</p>
                                            <h4 class="fw-semibold">$25,378 </h4>
                                            <div class="text-muted fs-13">Increased By 
                                                <span class="mb-0 badge bg-success-transparent rounded-pill">
                                                        +5.35%
                                                    <i class="ri-arrow-up-line fs-10 align-middle ms-1"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body text-center">
                                            <span class="avatar avatar-md bg-primary1 svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M226.53,56.41l-96-32a8,8,0,0,0-5.06,0l-96,32A8,8,0,0,0,24,64v80a8,8,0,0,0,16,0V75.1L73.59,86.29a64,64,0,0,0,20.65,88.05c-18,7.06-33.56,19.83-44.94,37.29a8,8,0,1,0,13.4,8.74C77.77,197.25,101.57,184,128,184s50.23,13.25,65.3,36.37a8,8,0,0,0,13.4-8.74c-11.38-17.46-27-30.23-44.94-37.29a64,64,0,0,0,20.65-88l44.12-14.7a8,8,0,0,0,0-15.18ZM176,120A48,48,0,1,1,89.35,91.55l36.12,12a8,8,0,0,0,5.06,0l36.12-12A47.89,47.89,0,0,1,176,120ZM128,87.57,57.3,64,128,40.43,198.7,64Z"></path></svg>
                                            </span>
                                            <p class="mb-1 mt-3 fw-medium">Total Students</p>
                                            <h4 class="fw-semibold">78,565 </h4>
                                            <div class="text-muted fs-13">Increased By 
                                                <span class="mb-0 badge bg-success-transparent rounded-pill">
                                                        +12.1%
                                                    <i class="ri-arrow-up-line fs-10 align-middle ms-1"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body text-center">
                                            <span class="avatar avatar-md bg-primary2 svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>
                                            </span>
                                            <p class="mb-1 mt-3 fw-medium">Total Instructors</p>
                                            <h4 class="fw-semibold">6,247 </h4>
                                            <div class="text-muted fs-13">Decreased By 
                                                <span class="mb-0 badge bg-danger-transparent rounded-pill">
                                                        +10.21%
                                                    <i class="ri-arrow-down-line fs-10 align-middle ms-1"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body text-center">
                                            <span class="avatar avatar-md bg-primary3 svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z"></path></svg>
                                            </span>
                                            <p class="mb-1 mt-3 fw-medium">Total Courses</p>
                                            <h4 class="fw-semibold">2,467 </h4>
                                            <div class="text-muted fs-13">Increased By 
                                                <span class="mb-0 badge bg-success-transparent rounded-pill">
                                                        +16.1%
                                                    <i class="ri-arrow-up-line fs-10 align-middle ms-1"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <div class="card custom-card course-main overflow-hidden cover-image bg-cover bg-primary">
                                <div class="card-body p-4">
                                    <div class="row justify-content-between">
                                        <div class="col-xl-8 col-md-8">
                                            <h5 class="fw-medium mb-2 text-fixed-white">Welcome Back, Henry &#128075; </h5>
                                            <span class="text-fixed-white d-block mb-2 op-7">You've reached 90% of your goal this month! Keep going and boost your skills with courses.</span>
                                            <button type="button" class="btn btn-primary1 btn-w-md mt-2">View Courses</button>
                                        </div>
                                        <div class="col-xl-3 col-md-4 text-end">
                                            <img src="<?php echo base_url('assets/images/media/media-81.png'); ?>" alt="" class="img-fluid banner10-img">
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
                                        Upcoming Tasks
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-sm btn-light">View All</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0 Upcoming-courses-schedule">
                                        <li class="list-item">
                                            <div class="d-sm-flex align-items-center justify-content-between flex-wrap">
                                                <div class="ms-3 mb-1 mb-sm-0 ps-1 course-schedule">
                                                    <p class="fw-medium mb-sm-1 mb-0">Web Design</p>
                                                    <span class="text-muted">10-06-2023</span>
                                                </div>
                                                <div class="min-w-fit-content d-flex align-items-center text-muted fs-12">
                                                    <span><i class="fe fe-clock me-1 fs-12"></i></span>
                                                    <span>09:00am</span>
                                                    <span class="mx-2 text-muted">-</span>
                                                    <span>12:00pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="d-sm-flex align-items-center justify-content-between flex-wrap">
                                                <div class="ms-3 mb-1 mb-sm-0 ps-1 course-schedule">
                                                    <p class="fw-medium mb-sm-1 mb-0">Java Programming</p>
                                                    <span class="text-muted">15-06-2023</span>
                                                </div>
                                                <div class="min-w-fit-content d-flex align-items-center text-muted fs-12">
                                                    <span><i class="fe fe-clock me-1 fs-12"></i></span>
                                                    <span>12:00pm</span>
                                                    <span class="mx-2 text-muted">-</span>
                                                    <span>13:20pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="d-sm-flex align-items-center justify-content-between flex-wrap">
                                                <div class="ms-3 mb-1 mb-sm-0 ps-1 course-schedule">
                                                    <p class="fw-medium mb-sm-1 mb-0">Meeting <a href="javascript:void(0);" class="tx-primary">Yuhan Sev</a></p>
                                                    <span class="text-muted">15-06-2023</span>
                                                </div>
                                                <div class="min-w-fit-content d-flex align-items-center text-muted fs-12">
                                                    <span><i class="fe fe-clock me-1 fs-12"></i></span>
                                                    <span>16:00pm</span>
                                                    <span class="mx-2 text-muted">-</span>
                                                    <span>17:20pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="d-sm-flex align-items-center justify-content-between flex-wrap">
                                                <div class="ms-3 mb-1 mb-sm-0 ps-1 course-schedule">
                                                    <p class="fw-medium mb-sm-1 mb-0">UX/UI</p>
                                                    <span class="text-muted">20-06-2023</span>
                                                </div>
                                                <div class="min-w-fit-content d-flex align-items-center text-muted fs-12">
                                                    <span><i class="fe fe-clock me-1 fs-12"></i></span>
                                                    <span>18:15pm</span>
                                                    <span class="mx-2 text-muted">-</span>
                                                    <span>19:00pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="d-sm-flex align-items-center justify-content-between flex-wrap">
                                                <div class="ms-3 mb-1 mb-sm-0 ps-1 course-schedule">
                                                    <p class="fw-medium mb-sm-1 mb-0">React js</p>
                                                    <span class="text-muted">20-06-2023</span>
                                                </div>
                                                <div class="min-w-fit-content d-flex align-items-center text-muted fs-12">
                                                    <span><i class="fe fe-clock me-1 fs-12"></i></span>
                                                    <span>18:15pm</span>
                                                    <span class="mx-2 text-muted">-</span>
                                                    <span>19:00pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="d-sm-flex align-items-center justify-content-between flex-wrap">
                                                <div class="ms-3 mb-1 mb-sm-0 ps-1 course-schedule">
                                                    <p class="fw-medium mb-sm-1 mb-0">Java Programming</p>
                                                    <span class="text-muted">15-06-2023</span>
                                                </div>
                                                <div class="min-w-fit-content d-flex align-items-center text-muted fs-12">
                                                    <span><i class="fe fe-clock me-1 fs-12"></i></span>
                                                    <span>12:00pm</span>
                                                    <span class="mx-2 text-muted">-</span>
                                                    <span>13:20pm</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Revenue Statistics</div>
                                    <div class="d-flex gap-2">
                                        <div class="btn btn-outline-light border btn-full btn-sm">Today</div>
                                        <div class="btn btn-outline-light border btn-full btn-sm">Weakly</div>
                                        <div class="btn btn-light border btn-full btn-sm">Yearly</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="earning"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Top Categories
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-sm btn-light">View All</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="d-flex flex-column list-group">
                                        <li class="p-0 mb-4 list-group-item border-0 text-default">
                                            <a href="javascript:void(0);" class="w-100">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar rounded-sm avatar-md bg-primary-transparent p-3"><i class="ri-dashboard-line fs-20 leading-none"></i></span>
                                                    <div class="flex-auto ms-3">
                                                        <p class="fs-14 fw-medium mb-0">UI / UX Design</p>
                                                        <p class="fs-12 text-muted mb-0">10,000 + Courses</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="fs-14 text-default fw-medium">$199.99</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="p-0 mb-4 list-group-item border-0 text-default">
                                            <a href="javascript:void(0);" class="w-100">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar rounded-sm avatar-md bg-primary1-transparent p-3"><i class="ri-advertisement-line fs-20 leading-none"></i></span>
                                                    <div class="flex-auto ms-3">
                                                        <p class="fs-14 fw-medium mb-0">Digital Marketing</p>
                                                        <p class="fs-12 text-muted mb-0">90 + Courses</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="fs-14 text-default fw-medium">$599.99</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="p-0 mb-4 list-group-item border-0 text-default">
                                            <a href="javascript:void(0);" class="w-100">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar rounded-sm avatar-md bg-primary2-transparent p-3"><i class="ri-code-box-line fs-20 leading-none"></i></span>
                                                    <div class="flex-auto ms-3">
                                                        <p class="fs-14 fw-medium mb-0">Web Development</p>
                                                        <p class="fs-12 text-muted mb-0">250 + Courses</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="fs-14 text-default fw-medium">$299.99</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="p-0 mb-4 list-group-item border-0 text-default">
                                            <a href="javascript:void(0);" class="w-100">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar rounded-sm avatar-md  bg-primary3-transparent p-3"><i class="ri-bar-chart-2-line fs-20 leading-none"></i></span>
                                                    <div class="flex-auto ms-3">
                                                        <p class="fs-14 fw-medium mb-0">Stocks &amp; Trading</p>
                                                        <p class="fs-12 text-muted mb-0">100 + Courses</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="fs-14 text-default fw-medium">$999.99</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="p-0 mb-4 list-group-item border-0 text-default">
                                            <a href="javascript:void(0);" class="w-100">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar rounded-sm avatar-md bg-secondary-transparent p-3"><i class="ri-angularjs-line fs-20 leading-none"></i></span>
                                                    <div class="flex-auto ms-3">
                                                        <p class="fs-14 fw-medium mb-0">Angular Course</p>
                                                        <p class="fs-12 text-muted mb-0">300 + Courses</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="fs-14 text-default fw-medium">$399.99</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="p-0 mb-0 list-group-item border-0 text-default">
                                            <a href="javascript:void(0);" class="w-100">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar rounded-sm avatar-md bg-info-transparent p-3"><i class="ri-database-2-line fs-20 leading-none"></i></span>
                                                    <div class="flex-auto ms-3">
                                                        <p class="fs-14 fw-medium mb-0">Full Stack Course</p>
                                                        <p class="fs-12 text-muted mb-0">500 + Courses</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="fs-14 text-default fw-medium">$199.99</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-2 -->

                    <!-- Start::Row-3 -->
                    <div class="row">
                        <div class="col-xxl-5">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Top Courses
                                    </div>
                                    <div class="dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="d-flex flex-column list-unstyled mb-0 popular-course">
                                        <li class="text-muted mb-3">
                                            <div class="d-sm-flex align-items-start w-100">
                                                <a href="javascript:void(0);" class="pe-4 inline-block">
                                                <img src="<?php echo base_url('assets/images/media/media-13.jpg'); ?>" alt="img" class="avatar avatar-xl rounded-2">
                                                </a>
                                                <div class="flex-grow-1 fw-medium">
                                                    <div class="d-flex align-items-center" title="Instructor">
                                                        <a href="javascript:void(0);" class="pe-2">
                                                        <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img" class="avatar avatar-xs rounded-pill">
                                                        </a>
                                                        <a href="javascript:void(0);" class="flex-grow-1 text-default op-8">Natasha
                                                        Sil</a>
                                                        <a href="javascript:void(0);" class=" d-block mb-1 fw-normal badge bg-primary3-transparent" title="Category"><i class="ri-price-tag-3-line "></i> UI/UX</a>
                                                    </div>
                                                    <a href="javascript:void(0);" class=" d-block mb-2 fw-medium">
                                                    Mastering CSS Pseudo-classes: From Basics to Advanced Techniques.</a>
                                                    <div class="d-md-flex justify-content-between align-items-center">
                                                    <div class="min-w-fit fs-12 text-muted op-8 d-inline-flex">
                                                        <span class="me-2 my-auto">
                                                        <i class="ri-eye-line"></i> 
                                                            2,189 Views
                                                        </span> 
                                                    </div>
                                                    <div class="min-w-fit fs-11 text-default d-inline-flex">
                                                        <span>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-half-fill text-warning"></i>(4.2)
                                                        </span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" text-muted mb-3">
                                            <div class="d-sm-flex align-items-start w-100">
                                                <a href="javascript:void(0);" class="pe-4 inline-block">
                                                <img src="<?php echo base_url('assets/images/media/media-14.jpg'); ?>" alt="img" class="avatar avatar-xl rounded-2">
                                                </a>
                                                <div class="flex-grow-1 fw-medium">
                                                    <div class="d-flex align-items-center" title="Instructor">
                                                        <a href="javascript:void(0);" class="pe-2">
                                                        <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img" class="avatar avatar-xs rounded-pill">
                                                        </a>
                                                        <a href="javascript:void(0);" class="flex-grow-1 text-default op-8">Catalina Keira
                                                        </a>
                                                        <a href="javascript:void(0);" class=" d-block mb-1 fw-normal badge bg-primary2-transparent" title="Category"><i class="ri-price-tag-3-line "></i> Marketing</a>
                                                    </div>
                                                    <a href="javascript:void(0);" class=" d-block mb-2 fw-medium">
                                                        Marketing Essentials: Understanding its Role in Business Success.</a>
                                                    <div class="d-md-flex justify-content-between align-items-center">
                                                    <div class="min-w-fit fs-12 text-muted op-8 d-inline-flex">
                                                        <span class="me-2 my-auto">
                                                        <i class="ri-eye-line"></i> 
                                                        1,116 Views
                                                        </span> 
                                                    </div>
                                                    <div class="min-w-fit fs-11 text-default d-inline-flex">
                                                        <span>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-half-fill text-warning"></i>(4.3)
                                                        </span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" text-muted mb-1">
                                        <div class="d-sm-flex align-items-start w-100">
                                            <a href="javascript:void(0);" class="pe-4 inline-block">
                                            <img src="<?php echo base_url('assets/images/media/media-12.jpg'); ?>" alt="img" class="avatar avatar-xl rounded-2">
                                            </a>
                                            <div class="flex-grow-1 fw-medium">
                                                <div class="d-flex align-items-center" title="Instructor">
                                                    <a href="javascript:void(0);" class="pe-2">
                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img" class="avatar avatar-xs rounded-pill">
                                                    </a>
                                                    <a href="javascript:void(0);" class="flex-grow-1 text-default op-8">Telsko 
                                                        William</a>
                                                    <a href="javascript:void(0);" class=" d-block mb-1 fw-normal badge bg-primary1-transparent" title="Category"><i class="ri-price-tag-3-line "></i> Python</a>
                                                </div>
                                                <a href="javascript:void(0);" class=" d-block mb-2 fw-medium">
                                                    Python Mastery: Shallow Copy vs. Deep Copy and Practical Techniques.</a>
                                                <div class="d-md-flex justify-content-between align-items-center">
                                                <div class="min-w-fit fs-12 text-muted op-8 d-inline-flex">
                                                    <span class="me-2 my-auto">
                                                    <i class="ri-eye-line"></i> 
                                                    2,245 Views
                                                    </span> 
                                                </div>
                                                <div class="min-w-fit fs-11 text-default d-inline-flex">
                                                    <span>
                                                        <i class="ri-star-fill text-warning"></i>
                                                        <i class="ri-star-fill text-warning"></i>
                                                        <i class="ri-star-fill text-warning"></i>
                                                        <i class="ri-star-fill text-warning"></i>
                                                        <i class="ri-star-half-fill text-warning"></i>(4.2)
                                                    </span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    <div class="btn btn-primary-light mt-3 d-grid"> View All Courses</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Latest Courses
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-sm btn-light">View All</button>
                                    </div>
                                </div>
                                <div class="card-body pt-1">
                                    <div class="swiper crypto-swiper swiper-basic">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card custom-card mb-0 border shadow-none">
                                                    <div class="card-body p-0">
                                                        <div class="position-relative">
                                                            <img src="<?php echo base_url('assets/images/media/media-78.png'); ?>" alt="" class="img-fluid card-img-top">
                                                            <div class="p-3">
                                                                <div class="min-w-fit fs-11 text-default d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="d-flex gap-1 justify-content-between align-items-center">
                                                                    <div>
                                                                        <h6 class="fw-medium fs-14 mb-0">Coding Classes</h6>
                                                                        <a href="javascript:void(0)" class="text-primary fs-12">Read More</a>
                                                                    </div>
                                                                    <h6 class="fw-semibold mb-0">$644</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card mb-0 border shadow-none">
                                                    <div class="card-body p-0">
                                                        <div class="">
                                                            <img src="<?php echo base_url('assets/images/media/media-76.png'); ?>" alt="" class="img-fluid card-img-top bg-secondary-transparent">
                                                            <div class="p-3">
                                                                <div class="min-w-fit fs-11 text-default d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="d-flex gap-1 justify-content-between align-items-center">
                                                                    <div>
                                                                        <h6 class="fw-medium fs-14 mb-0">Data Science</h6>
                                                                        <a href="javascript:void(0)" class="text-primary fs-12">Read More</a>
                                                                    </div>
                                                                    <h6 class="fw-semibold mb-0">$657</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card mb-0 border shadow-none">
                                                    <div class="card-body p-0">
                                                        <div class="">
                                                            <img src="<?php echo base_url('assets/images/media/media-79.png'); ?>" alt="" class="img-fluid card-img-top">
                                                            <div class="p-3">
                                                                <div class="min-w-fit fs-11 text-default d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="d-flex gap-1 justify-content-between align-items-center">
                                                                    <div>
                                                                        <h6 class="fw-medium fs-14 mb-0">Marketing</h6>
                                                                        <a href="javascript:void(0)" class="text-primary fs-12">Read More</a>
                                                                    </div>
                                                                    <h6 class="fw-semibold mb-0">$457</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card mb-0 border shadow-none">
                                                    <div class="card-body p-0">
                                                        <div class="">
                                                            <img src="<?php echo base_url('assets/images/media/media-78.png'); ?>" alt="" class="img-fluid card-img-top">
                                                            <div class="p-3">
                                                                <div class="min-w-fit fs-11 text-default d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="d-flex gap-1 justify-content-between align-items-center">
                                                                    <div>
                                                                        <h6 class="fw-medium fs-14 mb-0">Java</h6>
                                                                        <a href="javascript:void(0)" class="text-primary fs-12">Read More</a>
                                                                    </div>
                                                                    <h6 class="fw-semibold mb-0">$778</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card mb-0 border shadow-none">
                                                    <div class="card-body p-0">
                                                        <div class="position-relative">
                                                            <img src="<?php echo base_url('assets/images/media/media-78.png'); ?>" alt="" class="img-fluid card-img-top">
                                                            <div class="p-3">
                                                                <div class="min-w-fit fs-11 text-default d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="d-flex gap-1 justify-content-between align-items-center">
                                                                    <div>
                                                                        <h6 class="fw-medium fs-14 mb-0">Coding Classes</h6>
                                                                        <a href="javascript:void(0)" class="text-primary fs-12">Read More</a>
                                                                    </div>
                                                                    <h6 class="fw-semibold mb-0">$644</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card mb-0 border shadow-none">
                                                    <div class="card-body p-0">
                                                        <div class="">
                                                            <img src="<?php echo base_url('assets/images/media/media-76.png'); ?>" alt="" class="img-fluid card-img-top bg-secondary-transparent">
                                                            <div class="p-3">
                                                                <div class="min-w-fit fs-11 text-default d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="d-flex gap-1 justify-content-between align-items-center">
                                                                    <div>
                                                                        <h6 class="fw-medium fs-14 mb-0">Data Science</h6>
                                                                        <a href="javascript:void(0)" class="text-primary fs-12">Read More</a>
                                                                    </div>
                                                                    <h6 class="fw-semibold mb-0">$657</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card mb-0 border shadow-none">
                                                    <div class="card-body p-0">
                                                        <div class="">
                                                            <img src="<?php echo base_url('assets/images/media/media-79.png'); ?>" alt="" class="img-fluid card-img-top">
                                                            <div class="p-3">
                                                                <div class="min-w-fit fs-11 text-default d-inline-flex">
                                                                    <span>
                                                                        <i class="ri-star-fill text-warning"></i> 4.2</span>
                                                                </div>
                                                                <div class="d-flex gap-1 justify-content-between align-items-center">
                                                                    <div>
                                                                        <h6 class="fw-medium fs-14 mb-0">Marketing</h6>
                                                                        <a href="javascript:void(0)" class="text-primary fs-12">Read More</a>
                                                                    </div>
                                                                    <h6 class="fw-semibold mb-0">$457</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-3 -->

                    <!-- Start::Row-4 -->
                    <div class="row">
                        <div class="col-xxl-9">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Course List
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="dropdown m-1">
                                            <a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                                View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
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
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Course</th>
                                                    <th scope="col">Classes</th>
                                                    <th scope="col">Last Updated</th>
                                                    <th scope="col">Instructor</th>
                                                    <th scope="col">Students</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center lh-1">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md">
                                                                    <img src="<?php echo base_url('assets/images/media/media-1.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="fs-14 fw-medium mb-1">CSS Zero to Hero Master Class</p>
                                                                <p class="fs-12 text-muted mb-0">UI/UX Designing</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        51
                                                    </td>
                                                    <td>
                                                        22-06-2023
                                                    </td>
                                                    <td>
                                                        Burak Oin
                                                    </td>
                                                    <td>
                                                        252
                                                    </td>
                                                    <td>
                                                        <div class="btn-list mb-0">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-sm rounded-pill btn-primary-light mb-0"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-sm rounded-pill btn-secondary-light mb-0"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-sm rounded-pill  btn-danger-light mb-0"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center lh-1">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md">
                                                                    <img src="<?php echo base_url('assets/images/media/media-4.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="fs-14 fw-medium mb-1">Digital Marketing Course From Scratch</p>
                                                                <p class="fs-12 text-muted mb-0">Marketing</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        115
                                                    </td>
                                                    <td>
                                                        21-06-2023
                                                    </td>
                                                    <td>
                                                        Stuart Little
                                                    </td>
                                                    <td>
                                                        1,189
                                                    </td>
                                                    <td>
                                                        <div class="btn-list mb-0">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-sm rounded-pill btn-primary-light mb-0"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-sm rounded-pill btn-secondary-light mb-0"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-sm rounded-pill  btn-danger-light mb-0"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center lh-1">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md">
                                                                    <img src="<?php echo base_url('assets/images/media/media-10.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="fs-14 fw-medium mb-1">Digital Marketing Course From Scratch</p>
                                                                <p class="fs-12 text-muted mb-0">Programming</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        30
                                                    </td>
                                                    <td>
                                                        15-06-2023
                                                    </td>
                                                    <td>
                                                        Boran Ray
                                                    </td>
                                                    <td>
                                                        3,365
                                                    </td>
                                                    <td>
                                                        <div class="btn-list mb-0">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-sm rounded-pill btn-primary-light mb-0"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-sm rounded-pill btn-secondary-light mb-0"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-sm rounded-pill  btn-danger-light mb-0"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        4
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center lh-1">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md">
                                                                    <img src="<?php echo base_url('assets/images/media/media-15.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="fs-14 fw-medium mb-1">Master Linear Algebra Medium Level</p>
                                                                <p class="fs-12 text-muted mb-0">Mathematics</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        90
                                                    </td>
                                                    <td>
                                                        11-06-2023
                                                    </td>
                                                    <td>
                                                        Arya Neo
                                                    </td>
                                                    <td>
                                                        773
                                                    </td>
                                                    <td>
                                                        <div class="btn-list mb-0">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-sm rounded-pill btn-primary-light mb-0"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-sm rounded-pill btn-secondary-light mb-0"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-sm rounded-pill  btn-danger-light mb-0"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        5
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center lh-1">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md">
                                                                    <img src="<?php echo base_url('assets/images/media/media-23.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="fs-14 fw-medium mb-1">Learn How to Trade &amp; Invest</p>
                                                                <p class="fs-12 text-muted mb-0">Stocks &amp; Trading</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        161
                                                    </td>
                                                    <td>
                                                        10-06-2023
                                                    </td>
                                                    <td>
                                                        Sia Niu
                                                    </td>
                                                    <td>
                                                        51
                                                    </td>
                                                    <td>
                                                        <div class="btn-list mb-0">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-sm rounded-pill btn-primary-light mb-0"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-sm rounded-pill btn-secondary-light mb-0"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-sm rounded-pill  btn-danger-light mb-0"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center mt-3">
                                        <div>
                                            Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-semibold align-middle"></i>
                                        </div>
                                        <div class="ms-auto">
                                            <nav aria-label="Page navigation" class="pagination-style-4">
                                                <ul class="pagination mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="javascript:void(0);">
                                                            Prev
                                                        </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link text-primary" href="javascript:void(0);">
                                                            next
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Top Professors
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-sm btn-light">View All</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled courses-instructors mb-0">
                                        <li>
                                            <div class="d-flex">
                                                <div class="d-flex flex-fill align-items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="d-block fw-medium">John Henry</span>
                                                        <span class="text-muted">M.Tech</span>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fw-medium">321 Classes</span>
                                                    <span class="text-muted">Digital Marketing</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="d-flex flex-fill align-items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="d-block fw-medium">Mortal Yun</span>
                                                        <span class="text-muted">P.H.D</span>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fw-medium">25 Classes</span>
                                                    <span class="text-muted">Stocks &amp; Trading</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="d-flex flex-fill align-items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="d-block fw-medium">Trex Con</span>
                                                        <span class="text-muted">MBBS</span>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fw-medium">39 Classes</span>
                                                    <span class="text-muted">Science</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="d-flex flex-fill align-items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="d-block fw-medium">Saiu Sarah</span>
                                                        <span class="text-muted">P.H.D</span>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fw-medium">11 Classes</span>
                                                    <span class="text-muted">Science</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="d-flex flex-fill align-items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="d-block fw-medium">Ion Hau</span>
                                                        <span class="text-muted">M.Tech</span>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fw-medium">124 Classes</span>
                                                    <span class="text-muted">Web Development</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="d-flex flex-fill align-items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="d-block fw-medium">Roman Killon</span>
                                                        <span class="text-muted">M.Tech</span>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fw-medium">1263 Classes</span>
                                                    <span class="text-muted">Ui / Ux Designing</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="d-flex flex-fill align-items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="d-block fw-medium">Suzika Stallone</span>
                                                        <span class="text-muted">Phd</span>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fw-medium">110 Classes</span>
                                                    <span class="text-muted">Machine Leadning</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="d-flex flex-fill align-items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="d-block fw-medium">Robert Lewis</span>
                                                        <span class="text-muted">Phd</span>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fw-medium">150 Classes</span>
                                                    <span class="text-muted">Java Development</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-4 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
        
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- Swiper JS -->
        <script src="<?php echo base_url('assets/libs/swiper/swiper-bundle.min.js'); ?>"></script>

        <!-- Courses Dashboard --> 
        <script src="<?php echo base_url('assets/js/courses-dashboard.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>