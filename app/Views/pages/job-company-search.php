
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>



<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Jobs</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Company Search</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Company Search</h1>
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

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xxl-3 col-lg-5">
                            <div class="card custom-card products-navigation-card">
                                <div class="card-body p-0">
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Industry Type</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-1" checked>
                                                <label class="form-check-label" for="c-1">
                                                    Research & Developement
                                                </label>
                                                <span class="badge bg-light text-default  float-end">2,712</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-2">
                                                <label class="form-check-label" for="c-2">
                                                    Accounting 
                                                </label>
                                                <span class="badge bg-light text-default  float-end">536</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-3" checked>
                                                <label class="form-check-label" for="c-3">
                                                    Business Process
                                                </label>
                                                <span class="badge bg-light text-default  float-end">18,289</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-4" checked>
                                                <label class="form-check-label" for="c-4">
                                                    Consulting
                                                </label>
                                                <span class="badge bg-light text-default  float-end">3,453</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-5">
                                                <label class="form-check-label" for="c-5">
                                                    Administrative Support
                                                </label>
                                                <span class="badge bg-light text-default  float-end">7,165</span>
                                            </div>
                                            <div class="collapse" id="category-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="cc-6">
                                                    <label class="form-check-label" for="cc-6">
                                                        Human Resources
                                                    </label>
                                                    <span class="badge bg-light text-default  float-end">5,964</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="cc-7">
                                                    <label class="form-check-label" for="cc-7">
                                                        Marketing
                                                    </label>
                                                    <span class="badge bg-light text-default  float-end">2,123</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link" data-bs-toggle="collapse" href="#category-more" role="button" aria-expanded="false" aria-controls="category-more">MORE</a>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Location</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-1" checked>
                                                <label class="form-check-label" for="available-1">
                                                    Hyderabad
                                                </label>
                                                <span class="badge bg-light text-default  float-end">512</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-2">
                                                <label class="form-check-label" for="available-2">
                                                    Banglore
                                                </label>
                                                <span class="badge bg-light text-default  float-end">2,186</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-3">
                                                <label class="form-check-label" for="available-3">
                                                    Chennai
                                                </label>
                                                <span class="badge bg-light text-default  float-end">734</span>
                                            </div>
                                            <div class="collapse" id="location-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c-6">
                                                    <label class="form-check-label" for="c-6">
                                                        Pune
                                                    </label>
                                                    <span class="badge bg-light text-default  float-end">5,964</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c-7">
                                                    <label class="form-check-label" for="c-7">
                                                        USA
                                                    </label>
                                                    <span class="badge bg-light text-default  float-end">2,123</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link" data-bs-toggle="collapse" href="#location-more" role="button" aria-expanded="false" aria-controls="location-more">MORE</a>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Recruiter Type</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Recruiter-1" checked>
                                                <label class="form-check-label" for="Recruiter-1">
                                                    Direct Company
                                                </label>
                                                <span class="badge bg-light text-default  float-end">13</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Recruiter-2">
                                                <label class="form-check-label" for="Recruiter-2">
                                                    Agency
                                                </label>
                                                <span class="badge bg-light text-default  float-end">67</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Job Vacancies</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="vacancies-1" checked>
                                                <label class="form-check-label" for="vacancies-1">
                                                    0 -10
                                                </label>
                                                <span class="badge bg-light text-default  float-end">13</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="vacancies-3">
                                                <label class="form-check-label" for="vacancies-3">
                                                    20 +above 
                                                </label>
                                                <span class="badge bg-light text-default  float-end">67</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Type of Employement</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-1" checked>
                                                <label class="form-check-label" for="j-1">
                                                    Full Time
                                                </label>
                                                <span class="badge bg-light text-default  float-end">512</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-2">
                                                <label class="form-check-label" for="j-2">
                                                    Part Time
                                                </label>
                                                <span class="badge bg-light text-default  float-end">2,186</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-lg-7">
                            <div class="row align-items-center mb-4">
                                <div class="col-lg-12">
                                    <div class="input-group companies-search-input">
                                        <input type="text" class="form-control form-control-lg flex-fill" aria-label="Text input with segmented dropdown button" placeholder="Enter your keyword here">
                                        <input type="text" class="form-control form-control-lg flex-fill" aria-label="Text input with segmented dropdown button" placeholder="Search by location">
                                        <select class="form-select form-select-lg rounded-0" name="choices-single-default" id="choices-single-default" data-trigger>
                                            <option value="">All Categories</option>
                                            <option value="Choice 1">Software Dveloper</option>
                                            <option value="Choice 2">Web Developer</option>
                                            <option value="Choice 3">Software Architect</option>
                                            <option value="Choice 4">IT Hardware</option>
                                            <option value="Choice 5">Network Engineer</option>
                                            <option value="Choice 6">Angular Developer</option>
                                            <option value="Choice 7">React Developer</option>
                                        </select>
                                        <button type="button" class="btn btn-primary"><i class="ri-search-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <h5 class="fw-medium mb-0 flex-grow-1">5473 <span class="fw-normal fs-18">Companies match for your search</span> </h5>
                                                <div class="btn-group">
                                                    <button class="btn btn-outline-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Sort By
                                                    </button>
                                                    <ul class="dropdown-menu">
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
                                                <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary-transparent avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="bi bi-heart"></i></span></a>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary border-opacity-10 p-3 avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/company-logos/1.png'); ?>" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);">TechGurus Ltd. <i class="ri-verified-badge-fill text-secondary fs-13" data-bs-toggle="tooltip" title="Verified company"></i></a></h6>
                                                    <div class="d-flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> Los Angeles, CA, </a>
                                                        <p class="mb-0 text-muted">Establishment year - 2015</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted">
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
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="flex-grow-1">
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-primary1-transparent me-1" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 345</a>
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-info-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 50</a>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-sm btn btn-wave btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary-transparent avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="bi bi-heart"></i></span></a>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary border-opacity-10 p-3 avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/company-logos/2.png'); ?>" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);">XYZ Solutions Ltd. <i class="ri-verified-badge-fill text-secondary fs-13" data-bs-toggle="tooltip" title="Verified company"></i></a></h6>
                                                    <div class="d-flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> New York, NY, </a>
                                                        <p class="mb-0 text-muted">Establishment year - 2010</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(318)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="flex-grow-1">
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-primary1-transparent me-1" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 146</a>
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-info-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 40</a>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-sm btn btn-wave btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary-transparent avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="bi bi-heart"></i></span></a>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary border-opacity-10 p-3 avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/company-logos/3.png'); ?>" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);">Innovate Labs Inc. <i class="ri-verified-badge-fill text-secondary fs-13" data-bs-toggle="tooltip" title="Verified company"></i></a></h6>
                                                    <div class="d-flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> San Francisco, CA, </a>
                                                        <p class="mb-0 text-muted">Establishment year - 2013</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(198)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="flex-grow-1">
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-primary1-transparent me-1" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 56</a>
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-info-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 35</a>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-sm btn btn-wave btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary-transparent avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="bi bi-heart"></i></span></a>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary border-opacity-10 p-3 avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/company-logos/7.png'); ?>" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);">GlobalTech Innovations <i class="ri-verified-badge-fill text-secondary fs-13" data-bs-toggle="tooltip" title="Verified company"></i></a></h6>
                                                    <div class="d-flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> London, UK, </a>
                                                        <p class="mb-0 text-muted">Establishment year - 2011</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(367)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="flex-grow-1">
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-primary1-transparent me-1" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 120</a>
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-info-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 10</a>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-sm btn btn-wave btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary-transparent avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><span><i class="bi bi-heart"></i></span></a>
                                                <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary-transparent avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Share this company"><span><i class="bi bi-share"></i></span></a>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary border-opacity-10 p-3 avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/company-logos/5.png'); ?>" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);">Innovision Software Solutions <i class="ri-verified-badge-fill text-secondary fs-13" data-bs-toggle="tooltip" title="Verified company"></i></a></h6>
                                                    <div class="d-flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> Sydney, Australia, </a>
                                                        <p class="mb-0 text-muted">Establishment year - 2005</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(276)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="flex-grow-1">
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-primary1-transparent me-1" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 120</a>
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-info-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 10</a>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-sm btn btn-wave btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary-transparent avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><span><i class="bi bi-heart"></i></span></a>
                                                <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary-transparent avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Share this company"><span><i class="bi bi-share"></i></span></a>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary border-opacity-10 p-3 avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/company-logos/6.png'); ?>" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);">Digital Nexus Solutions <i class="ri-verified-badge-fill text-secondary fs-13" data-bs-toggle="tooltip" title="Verified company"></i></a></h6>
                                                    <div class="d-flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> Chicago, IL, </a>
                                                        <p class="mb-0 text-muted">Establishment year - 2012</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(389)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="flex-grow-1">
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-primary1-transparent me-1" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 120</a>
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-info-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 10</a>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-sm btn btn-wave btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary-transparent avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="bi bi-heart"></i></span></a>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary border-opacity-10 p-3 avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/company-logos/10.png'); ?>" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);">Innovate IT Solutions <i class="ri-verified-badge-fill text-secondary fs-13" data-bs-toggle="tooltip" title="Verified company"></i></a></h6>
                                                    <div class="d-flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> Mumbai, India, </a>
                                                        <p class="mb-0 text-muted">Establishment year - 2009</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(312)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="flex-grow-1">
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-primary1-transparent me-1" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 345</a>
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-info-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 50</a>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-sm btn btn-wave btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="avatar avatar-rounded bg-primary-transparent avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="bi bi-heart"></i></span></a>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-light shadow-sm border border-primary border-opacity-10 p-3 avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/company-logos/9.png'); ?>" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);">CloudSoft Technologies <i class="ri-verified-badge-fill text-secondary fs-13" data-bs-toggle="tooltip" title="Verified company"></i></a></h6>
                                                    <div class="d-flex gap-2 mb-2">
                                                        <a href="javascript:void(0);"><i class="ri-map-pin-2-line text-info"></i> Seattle, WA, </a>
                                                        <p class="mb-0 text-muted">Establishment year - 2014</p>
                                                    </div> 
                                                    <div class="d-flex align-items-center fs-12 text-muted">
                                                        <p class="fs-12 mb-0">Ratings : </p>
                                                        <div class="min-w-fit-content ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                            <span>(424)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="flex-grow-1">
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-primary1-transparent me-1" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 146</a>
                                                    <a href="javascript:void(0);" class="badge badge-md fs-11 rounded-pill bg-info-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 40</a>
                                                </div>
                                                <a href="javascript:void(0);" class="btn-sm btn btn-wave btn-primary">
                                                    View Profile <i class="ri-arrow-right-line align-middle"></i>
                                                </a>
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
                    <!-- End:: row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	


<?= $this->endSection('scripts'); ?>
