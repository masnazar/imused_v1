
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
                                    <li class="breadcrumb-item active" aria-current="page">Search Candidate</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Search Candidate</h1>
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
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-1" checked>
                                                <label class="form-check-label" for="c-1">
                                                    Software Development
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">3,200</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-2">
                                                <label class="form-check-label" for="c-2">
                                                    Finance
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">780</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-3" checked>
                                                <label class="form-check-label" for="c-3">
                                                    Marketing
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">15,500</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-4" checked>
                                                <label class="form-check-label" for="c-4">
                                                    Customer Service
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">2,950</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-5">
                                                <label class="form-check-label" for="c-5">
                                                    Operations
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">6,800</span>
                                            </div>
                                            <div class="collapse" id="category-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c-6">
                                                    <label class="form-check-label" for="c-6">
                                                        Human Resources
                                                    </label>
                                                    <span class="badge bg-light text-default fw-500 float-end">4,500</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c-7">
                                                    <label class="form-check-label" for="c-7">
                                                        Business Development
                                                    </label>
                                                    <span class="badge bg-light text-default fw-500 float-end">1,600</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link" data-bs-toggle="collapse" href="#category-more" role="button" aria-expanded="false" aria-controls="category-more">MORE</a>
                                        </div>                                    
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Availability</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-1" checked>
                                                <label class="form-check-label" for="available-1">
                                                    Available Now
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">620</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-2">
                                                <label class="form-check-label" for="available-2">
                                                    30 Days Notice
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">1,850</span>
                                            </div>
                                        </div>
                                    </div>                                
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Bond Agreement</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="bond-1" checked>
                                                <label class="form-check-label" for="bond-1">
                                                    1 Year
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">760</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="bond-2">
                                                <label class="form-check-label" for="bond-2">
                                                    2 yrs
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">480</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="bond-3">
                                                <label class="form-check-label" for="bond-3">
                                                    3 yrs
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">240</span>
                                            </div>
                                        </div>
                                    </div>                                
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Languages</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="languages-1" checked>
                                                <label class="form-check-label" for="languages-1">
                                                    English
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">1,250</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="languages-2">
                                                <label class="form-check-label" for="languages-2">
                                                    Hindi
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">350</span>
                                            </div>
                                        </div>
                                    </div>                                
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Job Type</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-1" checked>
                                                <label class="form-check-label" for="j-1">
                                                    Full Time
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">1,920</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-2" checked>
                                                <label class="form-check-label" for="j-2">
                                                    Part Time
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">3,100</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-3" checked>
                                                <label class="form-check-label" for="j-3">
                                                    Internship
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">860</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-4">
                                                <label class="form-check-label" for="j-4">
                                                    Freelancer
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">75</span>
                                            </div>
                                        </div>
                                    </div>                                                                
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Salary Range</h6>
                                        <div class="py-3 pb-0">
                                            <div id="nonlinear"></div>
                                            <div class="d-flex mt-3 justify-content-center">
                                                <div class="fw-medium h6 mb-0">$<span id="lower-value"></span></div>
                                                &nbsp; -- &nbsp; 
                                                <div class="fw-medium h6 mb-0">$<span id="upper-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Qualification</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="q-1">
                                                <label class="form-check-label" for="q-1">
                                                    All Education Levels
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">22,457</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="q-2" checked>
                                                <label class="form-check-label" for="q-2">
                                                    10th Pass and Above
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">12,562</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="q-4" checked>
                                                <label class="form-check-label" for="q-4">
                                                    Diploma and Graduate
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">5,767</span>
                                            </div>
                                        </div>
                                    </div>                                
                                    <div class="p-3">
                                        <h6 class="fw-medium mb-0">Skills</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="s-1" checked>
                                                <label class="form-check-label" for="s-1">
                                                    HTML5
                                                </label>
                                                <span class="badge bg-light text-default fw-500 float-end">23,156</span>
                                            </div>
                                            <div class="collapse" id="sizes-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="s-4">
                                                    <label class="form-check-label" for="s-4">
                                                        CSS3
                                                    </label>
                                                    <span class="badge bg-light text-default fw-500 float-end">7,154</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="s-5">
                                                    <label class="form-check-label" for="s-5">
                                                        Bootstrap
                                                    </label>
                                                    <span class="badge bg-light text-default fw-500 float-end">5,946</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="s-6">
                                                    <label class="form-check-label" for="s-6">
                                                        Angular
                                                    </label>
                                                    <span class="badge bg-light text-default fw-500 float-end">3,267</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="s-7">
                                                    <label class="form-check-label" for="s-7">
                                                        React
                                                    </label>
                                                    <span class="badge bg-light text-default fw-500 float-end">578</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link" data-bs-toggle="collapse" href="#sizes-more" role="button" aria-expanded="false" aria-controls="sizes-more">MORE</a>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-xl-8">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="card custom-card">
                                        <div class="card-body p-md-0">
                                            <div class="input-group companies-search-input companies-search-input1 flex-lg-nowrap">
                                                <input type="text" class="form-control form-control-lg w-25" aria-label="Text input with segmented dropdown button" placeholder="Enter your keyword here">
                                                <select class="form-select form-select-lg rounded-0" data-trigger>
                                                    <option value="">All Categories</option>
                                                    <option value="Choice 1">Software Dveloper</option>
                                                    <option value="Choice 2">Web Developer</option>
                                                    <option value="Choice 3">Software Architect</option>
                                                    <option value="Choice 4">IT Hardware</option>
                                                    <option value="Choice 5">Network Engineer</option>
                                                    <option value="Choice 6">Angular Developer</option>
                                                    <option value="Choice 7">React Developer</option>
                                                </select>
                                                <input type="text" class="form-control form-control-lg w-25" aria-label="Text input with segmented dropdown button" placeholder="Search by location">
                                                <select class="form-select form-select-lg rounded-0" data-trigger>
                                                    <option value="Choice 1">Fresher's</option>
                                                    <option value="Choice 2">1 Year Exp</option>
                                                    <option value="Choice 3">2 Year Exp</option>
                                                    <option value="Choice 4">3 Year Exp</option>
                                                    <option value="Choice 5">4 Year Exp</option>
                                                    <option value="Choice 6">5 yrs Exp</option>
                                                </select>
                                                <button type="button" class="btn btn-lg btn-primary"><i class="ri-search-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap gap-2 align-items-center">
                                                <h5 class="fw-medium mb-0 flex-grow-1">2468 <span class="fw-normal fs-18">Candidates match your job search</span> </h5>
                                                <div class="btn-group">
                                                    <button class="btn btn-outline-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Sort By
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Premium</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Most Relevant</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Fresher</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Experienced</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Bond Agreement</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Flexible Shift</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Day Shift</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-info-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download CV" title="Download CV"><span><i class="ri-download-cloud-line fs-14"></i></span></a>
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-danger-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-line fs-14"></i></span></a>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="Profile Picture">
                                                    </span>
                                                </div>    
                                                <div>
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center"><a href="<?php echo base_url('job-candidate-details'); ?>"> Samantha <i class="ri-verified-badge-fill text-primary fs-14" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                                    <div class="d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">UI/UX Designer</a>
                                                        <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> Silicon Valley, CA</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted flex-wrap">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(245)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Master's Degree</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-time-line me-1"></i> UI Designer (2+ yrs)</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary2 border-opacity-10 text-primary2"><i class="ri-time-fill me-1"></i> Full Time</a>
                                            </div>                                        
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div>
                                                    <p class="mb-1 flex-grow-1"><span class="text-muted">Annual Pay :</span> <span class="fw-medium"> $55,000</span> - <span class="fw-medium"> $80,000</span> </p>
                                                    <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, Spanish</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="btn btn-primary">View Profile <i class="ri-arrow-right-line"></i></div>
                                                </div>
                                            </div>
                                        </div>                                
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-danger-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download CV" title="Download CV"><span><i class="ri-download-cloud-line fs-14"></i></span></a>
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-info-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-line fs-14"></i></span></a>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="Profile Picture">
                                                    </span>
                                                </div>    
                                                <div>
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center"><a href="<?php echo base_url('job-candidate-details'); ?>"> Michael <i class="ri-verified-badge-fill text-primary fs-14" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                                    <div class="d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Frontend Developer</a>
                                                        <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> New York City, NY</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted flex-wrap">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(189)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-time-line me-1"></i> Frontend Developer (4+ yrs)</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary2 border-opacity-10 text-primary2"><i class="ri-time-fill me-1"></i> Full Time</a>
                                            </div>                                        
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div>
                                                    <p class="mb-1 flex-grow-1"><span class="text-muted">Annual Pay :</span> <span class="fw-medium"> $65,000</span> - <span class="fw-medium"> $90,000</span> </p>
                                                    <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, French</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="btn btn-primary">View Profile <i class="ri-arrow-right-line"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-info-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download CV" title="Download CV"><span><i class="ri-download-cloud-line fs-14"></i></span></a>
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-danger-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-line fs-14"></i></span></a>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="Profile Picture">
                                                    </span>
                                                </div>    
                                                <div>
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center"><a href="<?php echo base_url('job-candidate-details'); ?>"> Emily <i class="ri-verified-badge-fill text-primary fs-14" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                                    <div class="d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Graphic Designer</a>
                                                        <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> Los Angeles, CA</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted flex-wrap">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(201)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Master's Degree</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-time-line me-1"></i> Graphic Designer (3+ yrs)</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary2 border-opacity-10 text-primary2"><i class="ri-time-fill me-1"></i> Part Time</a>
                                            </div>                                        
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div>
                                                    <p class="mb-1 flex-grow-1"><span class="text-muted">Annual Pay :</span> <span class="fw-medium"> $50,000</span> - <span class="fw-medium"> $70,000</span> </p>
                                                    <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, German</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="btn btn-primary">View Profile <i class="ri-arrow-right-line"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-info-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download CV" title="Download CV"><span><i class="ri-download-cloud-line fs-14"></i></span></a>
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-danger-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-line fs-14"></i></span></a>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="Profile Picture">
                                                    </span>
                                                </div>    
                                                <div>
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center"><a href="<?php echo base_url('job-candidate-details'); ?>"> James <i class="ri-verified-badge-fill text-primary fs-14" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                                    <div class="d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Software Engineer</a>
                                                        <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> Seattle, WA</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted flex-wrap">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(172)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> On-site Work</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-time-line me-1"></i> Software Engineer (5+ yrs)</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary2 border-opacity-10 text-primary2"><i class="ri-time-fill me-1"></i> Contract</a>
                                            </div>                                        
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div>
                                                    <p class="mb-1 flex-grow-1"><span class="text-muted">Annual Pay :</span> <span class="fw-medium"> $80,000</span> - <span class="fw-medium"> $110,000</span> </p>
                                                    <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, Mandarin</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="btn btn-primary">View Profile <i class="ri-arrow-right-line"></i></a>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-info-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download CV" title="Download CV"><span><i class="ri-download-cloud-line fs-14"></i></span></a>
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-danger-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-line fs-14"></i></span></a>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="Profile Picture">
                                                    </span>
                                                </div>    
                                                <div>
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center"><a href="<?php echo base_url('job-candidate-details'); ?>"> Alexander <i class="ri-verified-badge-fill text-primary fs-14" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                                    <div class="d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Digital Marketing Specialist</a>
                                                        <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> Toronto, Canada</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted flex-wrap">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                            <span class="text-muted"><i class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(156)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> On-site Work</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-time-line me-1"></i> Digital Marketing (3+ yrs)</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary2 border-opacity-10 text-primary2"><i class="ri-time-fill me-1"></i> Full Time</a>
                                            </div>                                        
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div>
                                                    <p class="mb-1 flex-grow-1"><span class="text-muted">Annual Pay :</span> <span class="fw-medium"> $60,000</span> - <span class="fw-medium"> $85,000</span> </p>
                                                    <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, French</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="btn btn-primary">View Profile <i class="ri-arrow-right-line"></i></a>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-info-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download CV" title="Download CV"><span><i class="ri-download-cloud-line fs-14"></i></span></a>
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-danger-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-line fs-14"></i></span></a>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="Profile Picture">
                                                    </span>
                                                </div>    
                                                <div>
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center"><a href="<?php echo base_url('job-candidate-details'); ?>"> Sophia <i class="ri-verified-badge-fill text-primary fs-14" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                                    <div class="d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Data Analyst</a>
                                                        <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> London, UK</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted flex-wrap">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-muted"><i class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(178)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Master's Degree</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-time-line me-1"></i> Data Analyst (4+ yrs)</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary2 border-opacity-10 text-primary2"><i class="ri-time-fill me-1"></i> Part Time</a>
                                            </div>                                        
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div>
                                                    <p class="mb-1 flex-grow-1"><span class="text-muted">Annual Pay :</span> <span class="fw-medium"> $70,000</span> - <span class="fw-medium"> $95,000</span> </p>
                                                    <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, Spanish</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="btn btn-primary">View Profile <i class="ri-arrow-right-line"></i></a>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-info-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download CV" title="Download CV"><span><i class="ri-download-cloud-line fs-14"></i></span></a>
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-danger-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-line fs-14"></i></span></a>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="Profile Picture">
                                                    </span>
                                                </div>    
                                                <div>
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center"><a href="<?php echo base_url('job-candidate-details'); ?>"> Marcus <i class="ri-verified-badge-fill text-primary fs-14" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                                    <div class="d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Software Engineer</a>
                                                        <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> New York City, NY</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted flex-wrap">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-muted"><i class="bi bi-star"></i></span>
                                                            <span class="text-muted"><i class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(120)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> On-site Work</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-time-line me-1"></i> Software Engineer (5+ yrs)</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary2 border-opacity-10 text-primary2"><i class="ri-time-fill me-1"></i> Full Time</a>
                                            </div>                                        
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div>
                                                    <p class="mb-1 flex-grow-1"><span class="text-muted">Annual Pay :</span> <span class="fw-medium"> $85,000</span> - <span class="fw-medium"> $110,000</span> </p>
                                                    <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="btn btn-primary">View Profile <i class="ri-arrow-right-line"></i></a>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-info-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download CV" title="Download CV"><span><i class="ri-download-cloud-line fs-14"></i></span></a>
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-danger-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-line fs-14"></i></span></a>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="Profile Picture">
                                                    </span>
                                                </div>    
                                                <div>
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center"><a href="<?php echo base_url('job-candidate-details'); ?>"> Emily <i class="ri-verified-badge-fill text-primary fs-14" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                                    <div class="d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Graphic Designer</a>
                                                        <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> Los Angeles, CA</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted flex-wrap">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-muted"><i class="bi bi-star"></i></span>
                                                            <span class="text-muted"><i class="bi bi-star"></i></span>
                                                            <span class="text-muted"><i class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(90)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-time-line me-1"></i> Graphic Designer (3+ yrs)</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary2 border-opacity-10 text-primary2"><i class="ri-time-fill me-1"></i> Part Time</a>
                                            </div>                                        
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div>
                                                    <p class="mb-1 flex-grow-1"><span class="text-muted">Annual Pay :</span> <span class="fw-medium"> $70,000</span> - <span class="fw-medium"> $90,000</span> </p>
                                                    <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, Spanish</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="btn btn-primary">View Profile <i class="ri-arrow-right-line"></i></a>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-info-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download CV" title="Download CV"><span><i class="ri-download-cloud-line fs-14"></i></span></a>
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-danger-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-line fs-14"></i></span></a>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="Profile Picture">
                                                    </span>
                                                </div>    
                                                <div>
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center"><a href="<?php echo base_url('job-candidate-details'); ?>"> Sophia <i class="ri-verified-badge-fill text-primary fs-14" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                                    <div class="d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Digital Marketer</a>
                                                        <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> London, UK</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted flex-wrap">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-muted"><i class="bi bi-star"></i></span>
                                                            <span class="text-muted"><i class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(180)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> Remote Work</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-time-line me-1"></i> Digital Marketer (4+ yrs)</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary2 border-opacity-10 text-primary2"><i class="ri-time-fill me-1"></i> Full Time</a>
                                            </div>                                        
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div>
                                                    <p class="mb-1 flex-grow-1"><span class="text-muted">Annual Pay :</span> <span class="fw-medium"> £45,000</span> - <span class="fw-medium"> £65,000</span> </p>
                                                    <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English, French</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="btn btn-primary">View Profile <i class="ri-arrow-right-line"></i></a>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-info-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download CV" title="Download CV"><span><i class="ri-download-cloud-line fs-14"></i></span></a>
                                                <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-danger-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-line fs-14"></i></span></a>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                <div>
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="Profile Picture">
                                                    </span>
                                                </div>    
                                                <div>
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center"><a href="<?php echo base_url('job-candidate-details'); ?>"> Lucas <i class="ri-verified-badge-fill text-primary fs-14" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                                    <div class="d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);">Data Analyst</a>
                                                        <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> Toronto, Canada</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted flex-wrap">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-muted"><i class="bi bi-star"></i></span>
                                                            <span class="text-muted"><i class="bi bi-star"></i></span>
                                                            <span class="text-muted"><i class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(110)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-3 d-flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Master's Degree</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> On-site Work</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-info border-opacity-10 text-info"><i class="ri-time-line me-1"></i> Data Analyst (3+ yrs)</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary2 border-opacity-10 text-primary2"><i class="ri-time-fill me-1"></i> Part Time</a>
                                            </div>                                        
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div>
                                                    <p class="mb-1 flex-grow-1"><span class="text-muted">Annual Pay :</span> <span class="fw-medium"> CAD 65,000</span> - <span class="fw-medium"> CAD 85,000</span> </p>
                                                    <p class="mb-0"><span class="text-muted"> Languages :</span> <span class="fw-medium"> English</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="btn btn-primary">View Profile <i class="ri-arrow-right-line"></i></a>
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
                    <!--End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- noUiSlider JS -->
        <script src="<?php echo base_url('assets/libs/nouislider/nouislider.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/wnumb/wNumb.min.js'); ?>"></script>

        <!-- Search Candidate JS -->
        <script src="<?php echo base_url('assets/js/job-search-candidate.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>