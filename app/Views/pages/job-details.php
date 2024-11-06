
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <link rel="stylesheet" href="<?php echo base_url('assets/libs/swiper/swiper-bundle.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
        
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Jobs</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Job Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Job Details</h1>
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
                        <div class="col-xxl-9">
                            <div class="card bg-primary-transparent">
                                <div class="card-body">
                                    <div class="card custom-card overflow-hidden job-info-banner">
                                    </div>
                                    <div class="card custom-card job-info-data mb-2">
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap align-items-top justify-content-between gap-2">
                                                <div>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <div>
                                                            <span class="avatar avatar-lg border p-1">
                                                                <img src="<?php echo base_url('assets/images/media/jobs/2.png'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);" class="">Frontend Developer</a></h5>
                                                            <a href="javascript:void(0);" class="fs-12 text-muted"><i class="bi bi-building"></i> Spruko Technologies PRIVATE LIMITED</a>
                                                            <div class="d-flex mt-3">
                                                                <div>
                                                                    <p class="mb-1"><i class="bi bi-geo-alt me-1"></i>Bangalore, Karnataka</p>
                                                                    <p><i class="bi bi-briefcase me-1"></i>2 - 4 Yrs Exp.</p>
                                                                </div>
                                                                <div class="ms-4">
                                                                    <p class="mb-1"><i class="bi bi-coin me-1"></i><span class="fw-medium">25,000 - 35,000</span> / per month (+incentives)</p>
                                                                    <p><i class="bi bi-mortarboard  me-1"></i>Graduate and Above</p>
                                                                </div>
                                                            </div>
                                                            <div class="popular-tags">
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-info-transparent"><i class="bi bi-clock me-1"></i>Full Time</a>
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-primary2-transparent"><i class="bi bi-briefcase me-1"></i>8 Openings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Save" class="rounded-pill btn btn-icon btn-primary-light btn-wave btn-sm">
                                                        <i class="ri-bookmark-line"></i>
                                                    </a>
                                                    <p class="mb-0 mt-4 pt-3"><i class="bi bi-info-circle text-info" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="20 days left"></i> <span class="fw-medium">20 days left </span> to apply for this job</p>
                                                    <div class="btn-list mt-3">
                                                        <a href="javascript:void(0);" class="btn mb-0 btn-primary"> Apply Now</a>
                                                        <a href="javascript:void(0);" class="btn mb-0 btn-icon btn-primary1-light btn-wave">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn mb-0 btn-icon btn-primary2-light btn-wave me-0">
                                                            <i class="ri-share-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h6 class="fw-medium">Job Description</h6>
                                    <p class="op-9">We are seeking a skilled Frontend Developer to join our dynamic team. In this role, you will be responsible for implementing visual elements that users see and interact with in web applications. You will work closely with designers and backend developers to bridge the gap between graphical design and technical implementation, ensuring an optimized and responsive user experience.</p>
                                    <p class="mb-4 op-9">As a Frontend Developer, you will use your expertise in HTML, CSS, and JavaScript frameworks to translate UI/UX design wireframes into high-quality code. You will collaborate with cross-functional teams to deliver scalable and maintainable frontend solutions that meet business objectives and user needs.</p>
                                    
                                    <h6 class="fw-medium">Key Responsibilities</h6>
                                    <ol class="list-group border-0 list-unstyled list-group-numbered mb-3">
                                        <li class="list-group-item border-0 py-1">Develop responsive web pages and web applications based on provided designs and specifications.</li>
                                        <li class="list-group-item border-0 py-1">Collaborate with UX/UI designers and backend developers to deliver seamless user interfaces.</li>
                                        <li class="list-group-item border-0 py-1">Optimize application performance and ensure cross-browser compatibility.</li>
                                        <li class="list-group-item border-0 py-1">Implement front-end components and libraries using modern frameworks such as React, Angular, or Vue.js.</li>
                                        <li class="list-group-item border-0 py-1">Conduct thorough testing of user interfaces to identify and fix UI issues and bugs.</li>
                                    </ol>
                                    <h6 class="fw-medium">Requirements</h6>
                                    <ul class="list-group border-0 list-unstyled list-group-numbered mb-3">
                                        <li class="list-group-item border-0 py-1">Bachelor's degree in Computer Science, Engineering, or a related field, or equivalent practical experience.</li>
                                        <li class="list-group-item border-0 py-1">Proven experience as a Frontend Developer or similar role, with a strong portfolio demonstrating frontend development skills.</li>
                                        <li class="list-group-item border-0 py-1">Proficiency in HTML5, CSS3, JavaScript, and frontend frameworks/libraries (e.g., React, Angular, Vue.js).</li>
                                        <li class="list-group-item border-0 py-1">Experience with version control systems (e.g., Git) and modern development workflows.</li>
                                        <li class="list-group-item border-0 py-1">Understanding of responsive design principles and mobile-first approach.</li>
                                    </ul>
                                </div>  
                            </div>
                            <div class="card custom-card border shadow-none bg-primary-transparent border border-primary border-opacity-10">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <h5 class="fw-medium mb-3"><i class="ri-briefcase-line me-2 p-2 bg-primary text-fixed-white fs-15 lh-1 align-middle rounded-circle"></i>Explore Job Opportunities</h5>
                                            <span class="text-muted mb-0 fs-14">Find exciting job opportunities that match your skills and interests. Join us to make a difference!</span>
                                        </div>
                                        <div class="col-lg-6 text-end">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-lg" role="button">
                                                <i class="ri-share-line me-2 align-middle d-inline-block"></i>Sign up Now
                                            </a>
                                        </div>
                                    </div>
                                </div>                            
                            </div>  
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Job Highlights</div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3 fs-14 d-flex align-items-center">
                                        <span class="avatar avatar-sm border lh-1 avatar-rounded me-2 bg-info-transparent">
                                            <i class="ri-map-pin-line"></i>
                                        </span>
                                        <span class="text-muted">Work Location</span>
                                        <span class="ms-auto fw-medium">
                                            Bangalore
                                        </span>
                                    </div>
                                    <div class="mb-3 d-flex align-items-center">
                                        <span class="avatar avatar-sm border lh-1 avatar-rounded me-2 bg-danger-transparent">
                                            <i class="ri-time-line"></i>
                                        </span>
                                        <span class="text-muted">Flexible Hours</span>
                                        <span class="ms-auto fw-medium">
                                            9:00AM -6:00PM
                                        </span>
                                        
                                    </div>
                                    <div class="mb-3 d-flex align-items-center">
                                        <span class="avatar avatar-sm border lh-1 avatar-rounded me-2 bg-success-transparent">
                                            <i class="ri-cash-line"></i>
                                        </span>
                                        <span class="text-muted">Competitive Salary</span>
                                        <span class="ms-auto fw-medium">
                                            35,000 +
                                        </span>
                                        
                                    </div>
                                    <div class="mb-0 d-flex align-items-center">
                                        <span class="avatar avatar-sm border lh-1 avatar-rounded me-2 bg-primary2-transparent">
                                            <i class="ri-award-line"></i>
                                        </span>
                                        <span class="text-muted">Employee Benefits</span>
                                        <span class="ms-auto fw-medium">
                                            Award
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="mb-1">
                                <h6 class="fw-medium mb-3">Related Jobs</h6>
                                <div class="swiper swiper-vertical overflow-hidden swiper-related-jobs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="card custom-card featured-jobs shadow-none border">
                                                <div class="card-body">
                                                    <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                        <div>
                                                            <span class="avatar avatar-md border p-1">
                                                                <img src="<?php echo base_url('assets/images/media/jobs/2.png'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                            <h6 class="fw-medium mb-0 d-flex align-items-center text-truncate w-75"><a href="javascript:void(0);"> Frontend Developer</a></h6>
                                                            <a href="javascript:void(0);" class="fs-12 text-muted"><i class="bi bi-building"></i> InnovateZ Solutions</a>
                                                        </div>
                                                        <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-primary1-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><span><i class="bi bi-heart"></i></span></a>
                                                            <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-warning-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Featured Jobs" data-bs-original-title="Featured Jobs"><span><i class="bi bi-star-fill"></i></span></a>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="popular-tags mb-3 d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <a href="javascript:void(0);" class="badge rounded-pill bg-info-transparent"><i class="bi bi-geo-alt me-1"></i> San Francisco, CA</a>
                                                            <a href="javascript:void(0);" class="badge rounded-pill bg-primary2-transparent"><i class="bi bi-mortarboard me-1"></i> 2+ Yrs Exp.</a>
                                                        </div>
                                                        <h6 class="fw-medium mb-0">$50k - $80k</h6>
                                                    </div>
                                                    <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary d-grid text-nowrap">
                                                        Apply Now
                                                    </a>
                                                </div>                                                    
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card custom-card featured-jobs shadow-none border">
                                                <div class="card-body">
                                                    <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                        <div>
                                                            <span class="avatar avatar-md avatar-rounded bg-danger-transparent border">
                                                                <i class="bi bi-laptop"></i>
                                                            </span>
                                                        </div>
                                                        <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                            <h6 class="fw-medium mb-0 d-flex align-items-center text-truncate w-75"><a href="javascript:void(0);"> Backend Developer</a></h6>
                                                            <a href="javascript:void(0);" class="fs-12 text-muted"><i class="bi bi-building"></i> Tech Solutions Inc.</a>
                                                        </div>
                                                        <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-primary1-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><span><i class="bi bi-heart"></i></span></a>
                                                            <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-warning-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Featured Jobs" data-bs-original-title="Featured Jobs"><span><i class="bi bi-star-fill"></i></span></a>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="popular-tags mb-3 d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <a href="javascript:void(0);" class="badge rounded-pill bg-info-transparent"><i class="bi bi-geo-alt me-1"></i> New York, NY</a>
                                                            <a href="javascript:void(0);" class="badge rounded-pill bg-primary2-transparent"><i class="bi bi-mortarboard me-1"></i> 3+ Yrs Exp.</a>
                                                        </div>
                                                        <h6 class="fw-medium mb-0">$60k - $90k</h6>
                                                    </div>
                                                    <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary d-grid text-nowrap">
                                                        Apply Now
                                                    </a>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card custom-card featured-jobs shadow-none border">
                                                <div class="card-body">
                                                    <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                        <div>
                                                            <span class="avatar avatar-md avatar-rounded bg-warning-transparent border">
                                                                <i class="bi bi-laptop"></i>
                                                            </span>
                                                        </div>
                                                        <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                            <h6 class="fw-medium mb-0 d-flex align-items-center text-truncate w-75"><a href="javascript:void(0);"> UI/UX Designer</a></h6>
                                                            <a href="javascript:void(0);" class="fs-12 text-muted"><i class="bi bi-building"></i> Creative Designs Co.</a>
                                                        </div>
                                                        <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-primary1-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><span><i class="bi bi-heart"></i></span></a>
                                                            <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-warning-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Featured Jobs" data-bs-original-title="Featured Jobs"><span><i class="bi bi-star-fill"></i></span></a>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="popular-tags mb-3 d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <a href="javascript:void(0);" class="badge rounded-pill bg-info-transparent"><i class="bi bi-geo-alt me-1"></i> Seattle, WA</a>
                                                            <a href="javascript:void(0);" class="badge rounded-pill bg-primary2-transparent"><i class="bi bi-mortarboard me-1"></i> 3+ Yrs Exp.</a>
                                                        </div>
                                                        <h6 class="fw-medium mb-0">$70k - $100k</h6>
                                                    </div>
                                                    <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary d-grid text-nowrap">
                                                        Apply Now
                                                    </a>
                                                </div>                                                    
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card custom-card featured-jobs shadow-none border">
                                                <div class="card-body">
                                                    <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                        <div>
                                                            <span class="avatar avatar-md avatar-rounded bg-info-transparent border">
                                                                <i class="bi bi-laptop"></i>
                                                            </span>
                                                        </div>
                                                        <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                            <h6 class="fw-medium mb-0 d-flex align-items-center text-truncate w-75"><a href="javascript:void(0);"> Full Stack Developer</a></h6>
                                                            <a href="javascript:void(0);" class="fs-12 text-muted"><i class="bi bi-building"></i> TechGurus Ltd.</a>
                                                        </div>
                                                        <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-primary1-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><span><i class="bi bi-heart"></i></span></a>
                                                            <a href="javascript:void(0);" class="avatar avatar-sm avatar-rounded bg-warning-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Featured Jobs" data-bs-original-title="Featured Jobs"><span><i class="bi bi-star-fill"></i></span></a>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="popular-tags mb-3 d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <a href="javascript:void(0);" class="badge rounded-pill bg-info-transparent"><i class="bi bi-geo-alt me-1"></i> Los Angeles, CA</a>
                                                            <a href="javascript:void(0);" class="badge rounded-pill bg-primary2-transparent"><i class="bi bi-mortarboard me-1"></i> 5+ Yrs Exp.</a>
                                                        </div>
                                                        <h6 class="fw-medium mb-0">$80k - $120k</h6>
                                                    </div>
                                                    <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary d-grid text-nowrap">
                                                        Apply Now
                                                    </a>
                                                </div>                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h6 class="fw-medium mb-3">Subscribe to Job Alerts</h6>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Your Email Address" aria-label="job-email" aria-describedby="job-subscribe">
                                        <button class="btn btn-primary" type="button" id="job-subscribe">Subscribe</button>
                                    </div>
                                    <label class="form-check-label">
                                        By subscribing, you accept our <a href="javascript:void(0);" class="text-success"><u>privacy policy</u></a>.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Swiper JS -->
        <script src="<?php echo base_url('assets/libs/swiper/swiper-bundle.min.js'); ?>"></script>

        <!-- Swiper jobs JS -->
        <script src="<?php echo base_url('assets/js/job-details.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>