
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <link rel="stylesheet" href="<?php echo base_url('assets/libs/nouislider/nouislider.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Jobs</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Job Search</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Job Search</h1>
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
                        <div class="col-xxl-3 col-xl-4">
                            <div class="card custom-card products-navigation-card">
                                <div class="card-body p-0">
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Categories</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="c-1" checked>
                                                <label class="form-check-label" for="c-1">
                                                    R & D
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">2,712</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="c-2">
                                                <label class="form-check-label" for="c-2">
                                                    Accounting 
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">536</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="c-3" checked>
                                                <label class="form-check-label" for="c-3">
                                                    Business Process
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">18,289</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="c-4" checked>
                                                <label class="form-check-label" for="c-4">
                                                    Consulting
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">3,453</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="c-5">
                                                <label class="form-check-label" for="c-5">
                                                    Administrative Support
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">7,165</span>
                                            </div>
                                            <div class="collapse" id="category-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="c-6">
                                                    <label class="form-check-label" for="c-6">
                                                        Human Resources
                                                    </label>
                                                    <span class="badge bg-light text-default fw-500 float-end">5,964</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="c-7">
                                                    <label class="form-check-label" for="c-7">
                                                        Marketing
                                                    </label>
                                                    <span class="badge bg-light text-default fw-500 float-end">2,123</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link mt-3" data-bs-toggle="collapse" href="#category-more" role="button" aria-expanded="false" aria-controls="category-more">MORE</a>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Job Type</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="j-1" checked>
                                                <label class="form-check-label" for="j-1">
                                                    Full Time
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">512</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="j-2" checked>
                                                <label class="form-check-label" for="j-2">
                                                    Part Time
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">2,186</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="j-3" checked>
                                                <label class="form-check-label" for="j-3">
                                                    Internship
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">734</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="j-4">
                                                <label class="form-check-label" for="j-4">
                                                    Freelancer
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">16</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="j-5">
                                                <label class="form-check-label" for="j-5">
                                                    Remote Job
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">1,432</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Qualification</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="q-1">
                                                <label class="form-check-label" for="q-1">
                                                    All Education Levels
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">22,457</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="q-2" checked>
                                                <label class="form-check-label" for="q-2">
                                                    10th Pass and Above
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">12,562</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="q-3">
                                                <label class="form-check-label" for="q-3">
                                                    12th Pass and Above
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">7,155</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="q-4" checked>
                                                <label class="form-check-label" for="q-4">
                                                    Diploma and Graduate
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">5,767</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="q-5">
                                                <label class="form-check-label" for="q-5">
                                                    Post Graduate
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">3,651</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Experience</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="e-1" checked>
                                                <label class="form-check-label" for="e-1">
                                                    Fresher
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">23,156</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="e-2">
                                                <label class="form-check-label" for="e-2">
                                                    Less than 1 year
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">15,632</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="e-3" checked>
                                                <label class="form-check-label" for="e-3">
                                                    Less than 2 year
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">15,032</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="e-4" checked>
                                                <label class="form-check-label" for="e-4">
                                                    More than 3 years
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">7,154</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Salary Range</h6>
                                        <div class="py-3 pb-0">
                                            <div id="nonlinear"></div>
                                            <div class="d-flex mt-4">
                                                <div class="fw-medium h6 mb-0">$<span id="lower-value"></span></div>
                                                &nbsp; -- &nbsp; 
                                                <div class="fw-medium h6 mb-0">$<span id="upper-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <h6 class="fw-medium mb-0">Skills</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="s-1" checked>
                                                <label class="form-check-label" for="s-1">
                                                    HTML5
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">23,156</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="s-2" checked>
                                                <label class="form-check-label" for="s-2">
                                                    Javascript
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">15,632</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="s-3">
                                                <label class="form-check-label" for="s-3">
                                                    PHP
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">15,032</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="s-4" checked>
                                                <label class="form-check-label" for="s-4">
                                                    CSS3
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">7,154</span>
                                            </div>
                                            <div class="collapse" id="sizes-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="s-5">
                                                    <label class="form-check-label" for="s-5">
                                                        Bootstrap
                                                    </label>
                                                    <span class="badge bg-light text-default fw-500 float-end">5,946</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="s-6">
                                                    <label class="form-check-label" for="s-6">
                                                        Angular
                                                    </label>
                                                    <span class="badge bg-light text-default fw-500 float-end">3,267</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="s-7">
                                                    <label class="form-check-label" for="s-7">
                                                        React
                                                    </label>
                                                    <span class="badge bg-light text-default fw-500 float-end">578</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link mt-3" data-bs-toggle="collapse" href="#sizes-more" role="button" aria-expanded="false" aria-controls="sizes-more">MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-xl-8">
                            <div class="card custom-card p-3">
                                <div class="row align-items-center p-3 bg-primary-transparent rounded mx-0 mb-3">
                                    <div class="col-sm-7">
                                        <div class="d-flex">
                                            <h5 class="fw-medium mb-0"><span class="fw-normal">Showing</span> 6678 Jobs</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-sm-end mt-3 mt-sm-0">
                                        <div class="btn-group">
                                            <button class="btn btn-primary border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Featured</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Most Relevant</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Best Rated</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card custom-card featured-jobs shadow-none border">
                                            <div class="card-body">
                                                <div class="float-end dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-white btn-icon btn-sm text-muted rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex mb-3 flex-wrap gap-2 align-items-center">
                                                    <span class="avatar avatar-md border p-1">
                                                        <img src="<?php echo base_url('assets/images/media/jobs/2.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);">Frontend Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-muted">Tech Solutions Inc.</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary3 border-opacity-10 text-primary3"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-secondary border-opacity-10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="fw-medium mb-0">$45,000 - $60,000</h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm d-inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card featured-jobs shadow-none border">
                                            <div class="card-body">
                                                <div class="float-end dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-white btn-icon btn-sm text-muted rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex mb-3 flex-wrap gap-2 align-items-center">
                                                    <span class="avatar avatar-md border p-1">
                                                        <img src="<?php echo base_url('assets/images/media/jobs/1.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> React Lead Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-muted">Infratech PVT LTD</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary3 border-opacity-10 text-primary3"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-secondary border-opacity-10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="fw-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm d-inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card featured-jobs shadow-none border">
                                            <div class="card-body">
                                                <div class="float-end dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-white btn-icon btn-sm text-muted rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex mb-3 flex-wrap gap-2 align-items-center">
                                                    <span class="avatar avatar-md border p-1">
                                                        <img src="<?php echo base_url('assets/images/media/jobs/3.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Vuejs Frontend Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-muted">G Technical Solutions</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary3 border-opacity-10 text-primary3"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-secondary border-opacity-10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="fw-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm d-inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card featured-jobs shadow-none border">
                                            <div class="card-body">
                                                <div class="float-end dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-white btn-icon btn-sm text-muted rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex mb-3 flex-wrap gap-2 align-items-center">
                                                    <span class="avatar avatar-md border p-1">
                                                        <img src="<?php echo base_url('assets/images/media/jobs/4.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Wordpress Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-muted">Hardware Private Solutions</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary3 border-opacity-10 text-primary3"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-secondary border-opacity-10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="fw-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm d-inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card featured-jobs shadow-none border">
                                            <div class="card-body">
                                                <div class="float-end dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-white btn-icon btn-sm text-muted rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex mb-3 flex-wrap gap-2 align-items-center">
                                                    
                                                    <span class="avatar avatar-md border p-1">
                                                        <img src="<?php echo base_url('assets/images/media/jobs/2.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> HTML Developer - Fresher</a></h5>
                                                        <a href="javascript:void(0);" class="text-muted">InnovateZ Solutions</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary3 border-opacity-10 text-primary3"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-secondary border-opacity-10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="fw-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm d-inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card featured-jobs shadow-none border">
                                            <div class="card-body">
                                                <div class="float-end dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-white btn-icon btn-sm text-muted rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex mb-3 flex-wrap gap-2 align-items-center">
                                                    <span class="avatar avatar-md border p-1">
                                                        <img src="<?php echo base_url('assets/images/media/jobs/1.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> React Lead Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-muted">Infratech PVT LTD</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary3 border-opacity-10 text-primary3"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-secondary border-opacity-10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="fw-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm d-inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card featured-jobs shadow-none border">
                                            <div class="card-body">
                                                <div class="float-end dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-white btn-icon btn-sm text-muted rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex mb-3 flex-wrap gap-2 align-items-center">
                                                    <span class="avatar avatar-md border p-1">
                                                        <img src="<?php echo base_url('assets/images/media/jobs/3.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Vuejs Frontend Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-muted">G Technical Solutions</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary3 border-opacity-10 text-primary3"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-secondary border-opacity-10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="fw-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm d-inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card featured-jobs shadow-none border">
                                            <div class="card-body">
                                                <div class="float-end dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-white btn-icon btn-sm text-muted rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex mb-3 flex-wrap gap-2 align-items-center">
                                                    
                                                    <span class="avatar avatar-md border p-1">
                                                        <img src="<?php echo base_url('assets/images/media/jobs/2.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> HTML Developer - Remote</a></h5>
                                                        <a href="javascript:void(0);" class="text-muted">InnovateZ Solutions</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary3 border-opacity-10 text-primary3"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-secondary border-opacity-10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="fw-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm d-inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card featured-jobs shadow-none border">
                                            <div class="card-body">
                                                <div class="float-end dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-white btn-icon btn-sm text-muted rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex mb-3 flex-wrap gap-2 align-items-center">
                                                    <span class="avatar avatar-md border p-1">
                                                        <img src="<?php echo base_url('assets/images/media/jobs/1.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> React Lead Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-muted">Infratech PVT LTD</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary3 border-opacity-10 text-primary3"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-secondary border-opacity-10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="fw-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm d-inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card featured-jobs shadow-none border">
                                            <div class="card-body">
                                                <div class="float-end dropdown ms-auto">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-white btn-icon btn-sm text-muted rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fe fe-more-vertical align-middle"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Add To Favourite</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Save</a></li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex mb-3 flex-wrap gap-2 align-items-center">
                                                    <span class="avatar avatar-md border p-1">
                                                        <img src="<?php echo base_url('assets/images/media/jobs/3.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Vuejs Frontend Developer</a></h5>
                                                        <a href="javascript:void(0);" class="text-muted">G Technical Solutions</a>
                                                    </div>
                                                </div> 
                                                <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-map-pin-line me-1"></i> San Francisco</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-briefcase-line me-1"></i> 5 Openings</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-graduation-cap-line me-1"></i> Graduate</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary3 border-opacity-10 text-primary3"><i class="ri-time-line me-1"></i> Min - 1 Year</a>
                                                    <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-secondary border-opacity-10 text-secondary"><i class="ri-sun-line me-1"></i> Full-time</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="fw-medium mb-0">$18,000 - $43,000</h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm d-inline-flex">
                                                        Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card shadow-none bg-primary-transparent mb-0">
                                            <div class="card-body">
                                                <div class="">
                                                    <h5 class="fw-medium mb-3">Subscribe to Latest Job Alerts</h5>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter your email" aria-label="job-email" aria-describedby="job-subscribe">
                                                        <button class="btn btn-primary" type="button" id="job-subscribe">Subscribe</button>
                                                    </div>
                                                    <label class="form-check-label">
                                                        By subscribing, you accept our <a href="javascript:void(0);" class="text-success"><u>privacy policy</u></a>.
                                                    </label>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination mb-4 justify-content-end">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0);">
                                        Prev
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item">
                                    <a class="page-link text-primary" href="javascript:void(0);">
                                        next
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- noUiSlider JS -->
        <script src="<?php echo base_url('assets/libs/nouislider/nouislider.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/wnumb/wNumb.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/job-search.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>