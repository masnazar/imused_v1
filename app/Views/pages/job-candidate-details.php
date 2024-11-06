
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
                                    <li class="breadcrumb-item active" aria-current="page">Candidate Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Candidate Details</h1>
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
                        <div class="col-xxl-8">
                            <div class="card custom-card job-candidate-details">
                                <div class="candidate-bg-shape primary"></div>
                                <div class="card-body pt-5">
                                    <div class="mb-3 lh-1 mt-4">
                                        <span class="avatar avatar-xxl avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" class="rounded-circle img-fluid shadow" alt="">
                                        </span>
                                    </div>
                                    <div class="d-flex gap-2 flex-wrap mb-3">
                                        <div class="flex-fill">
                                            <h6 class="mb-1 fw-semibold"><a href="javascript:void(0);"> Samantha <i class="ri-check-line text-success fs-16" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                            <p class="mb-0 text-muted">UI/UX Designer</p>
                                            <div class="d-flex flex-wrap gap-2 align-items-center fs-12 text-muted">
                                                <p class="mb-0">Ratings : </p>
                                                <div class="min-w-fit-content ms-2">
                                                    <span class="text-warning"><i class="ri-star-fill"></i></span>
                                                    <span class="text-warning"><i class="ri-star-fill"></i></span>
                                                    <span class="text-warning"><i class="ri-star-fill"></i></span>
                                                    <span class="text-warning"><i class="ri-star-fill"></i></span>
                                                    <span class="text-warning"><i class="ri-star-half-fill"></i></span>
                                                </div>
                                                <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                    <span>(245)</span>
                                                    <span>Ratings</span>
                                                </a>
                                            </div>
                                            <div class="d-flex fs-14 mt-3 gap-2 flex-wrap">
                                                <div>
                                                    <p class="mb-1"><i class="ri-map-pin-line me-2 text-muted"></i>Silicon Valley, CA</p>
                                                    <p class="mb-0"><i class="ri-briefcase-line me-2 text-muted"></i>3 Years Experience</p>
                                                </div>
                                                <div class="ms-0 ms-sm-3">
                                                    <p class="mb-1"><i class="ri-currency-line me-2 text-muted"></i>Annual Pay : <span class="fw-medium">$55,000</span> - <span class="fw-medium">$80,000</span></p>
                                                    <p class="mb-0"><i class="ri-graduation-cap-line me-2 text-muted"></i>Graduate</p>
                                                </div>
                                                <div class="ms-0 ms-sm-3">
                                                    <p class="mb-1"><i class="ri-mail-line me-2 text-muted"></i>Mail : <span class="fw-medium">samantha@mail.com</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-list ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary rounded-pill btn-wave waves-effect"><i class="ri-download-cloud-line me-1"></i> Download CV</a>
                                            <a href="javascript:void(0);" class="btn btn-primary1-light rounded-pill btn-wave waves-effect waves-light align-middle">
                                                <i class="ri-heart-line lh-1 my-auto align-middle"></i> Add to wishlist
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-icon btn-secondary-light rounded-pill btn-wave waves-effect waves-light align-middle me-0">
                                                <i class="ri-share-line fs-18 mb-1 lh-1 my-auto align-middle"></i>
                                            </a>
                                        </div>
                                    </div>   
                                    <div class="d-flex gap-3 align-items-center flex-wrap">
                                        <h6 class="mb-0">Availability:</h6>
                                        <div class="popular-tags d-flex gap-2 flex-wrap">
                                            <a href="javascript:void(0);" class="badge rounded-pill fs-11 bg-info-transparent"><i class="ri-remote-control-line me-1"></i>Full Time</a>
                                            <a href="javascript:void(0);" class="badge rounded-pill fs-11 bg-danger-transparent"><i class="ri-time-line me-1"></i>Immediate Joinee</a>
                                            <a href="javascript:void(0);" class="badge rounded-pill fs-11 bg-primary-transparent"><i class="ri-calendar-line me-1"></i>Flexible Schedule</a>
                                        </div>
                                        <a href="javascript:void(0);" class="ms-auto text-secondary px-2 py-1 rounded-pill fs-12 bg-secondary-transparent"><i class="ri-chat-1-line me-1"></i> Message Now</a>
                                    </div>                             
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Skills
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="popular-tags d-flex gap-2 flex-wrap">
                                                <a href="javascript:void(0);" class="badge rounded-pill bg-primary2-transparent">HTML</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill bg-primary-transparent">CSS</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill bg-info-transparent">Javascript</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill bg-secondary-transparent">Angular</a>
                                                <a href="javascript:void(0);" class="badge rounded-pill bg-success-transparent">React</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Languages
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-0 fs-14"><span class="fw-medium me-2">Known : </span>Hindi(Fluent), English, Spanish(Intermediate), Telugu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Candidate Profile Information
                                    </div>
                                </div>
                                <div class="card-body p-0 candidate-edu-timeline">
                                    <div class="p-3 border-bottom">
                                        <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-primary avatar-sm"><i class="ri-briefcase-4-line fs-13"></i></span> Career Objective :</h5>
                                        <div class="ms-4 ps-3">
                                            <p class="op-9">Passionate and creative UI/UX designer with a strong portfolio and proven track record in designing intuitive user interfaces. Committed to delivering high-quality user experiences through user-centric design principles.</p>
                                            <p class="mb-0 op-9">Seeking a challenging role in a dynamic company where I can contribute my skills in UI/UX design to create innovative and user-friendly digital products.</p>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-primary avatar-sm"><i class="ri-graduation-cap-line fs-13"></i></span> Education :</h5>
                                                <div class="ms-4 ps-3">
                                                    <p class="fw-medium fs-14 mb-0">Bachelor of Science in Computer Science</p>
                                                    <div class="d-flex gap-2 mb-1">
                                                        <p class="mb-0">Dwayne University</p>
                                                        <p class="mb-0 text-muted"><i class="ri-map-pin-line fs-12"></i> Nellore</p>
                                                    </div>
                                                    <p class="mb-3 text-muted"> (2020 Mar - 2024 Apr)</p>
                                                    <p class="fw-medium fs-14 mb-0">Intermediate (MPC)</p>
                                                    <div class="d-flex gap-2 mb-1">
                                                        <p class="mb-0">Sprect College</p>
                                                        <p class="mb-0 text-muted"><i class="ri-map-pin-line fs-12"></i> Warangal</p>
                                                    </div>
                                                    <p class="mb-0 text-muted"> (2017 Mar - 2020 Apr)</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-primary avatar-sm"><i class="ri-graduation-cap-line fs-13"></i></span> Certifications :</h5>
                                                <div class="ms-4 ps-3">
                                                    <p class="fw-medium fs-14 mb-0">Web Development (3 Months)</p>
                                                    <p class="mb-4">EMC Solutions Pvt Ltd</p>
                                                    <p class="fw-medium fs-14 mb-0">Python Development (6 Months)</p>
                                                    <p class="mb-0">Dabre Services Pvt Ltd</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-primary avatar-sm"><i class="ri-article-line fs-13"></i></span> Publications :</h5>
                                                <div class="ms-3">
                                                    <ol class="list-group border-0 list-bullets">
                                                        <li class="border-0 py-1"><span class="fw-medium">“The Evolution of User Experience Design,”</span> UX Design Journal, March 2023</li>
                                                        <li class="border-0 py-1"><span class="fw-medium">“Designing for Accessibility in Web Applications,”</span> A11y Matters, June 2023</li>
                                                        <li class="border-0 py-1"><span class="fw-medium">“Innovations in Mobile UI Design,”</span> Mobile Design Magazine, December 2023</li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-primary avatar-sm"><i class="ri-movie-2-line fs-13"></i></span> Activities and Interests :</h5>
                                                <div class="ms-3">
                                                    <ol class="list-group border-0 list-bullets">
                                                        <li class="border-0 py-1">Active participant in local UI/UX design meetups</li>
                                                        <li class="border-0 py-1">Volunteer at community-driven design workshops</li>
                                                        <li class="border-0 py-1">Passionate about exploring new design trends</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-primary avatar-sm"><i class="ri-user-location-line fs-13"></i></span> References :</h5>
                                        <div class="row ms-4">
                                            <div class="col-xl-7">
                                                <p><span class="fw-medium">Name : </span> Nicole Chiu</p>
                                                <p><span class="fw-medium">Designation : </span> Software Developer</p>
                                                <p class="mb-0"><span class="fw-medium mb-0">Company Name : </span> InnovateZ Solutions</p>
                                            </div>
                                            <div class="col-xl-5">
                                                <p><span class="fw-medium">Mobile : </span> +91 7865443679</p>
                                                <p><span class="fw-medium">Email : </span> nchiu@email.com</p>
                                                <p class="mb-0"><span class="fw-medium">Location : </span> Hyderabad</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Experience Overview                                     
                                    </div>
                                </div>
                                <div class="card-body p-0 candidate-edu-timeline">
                                    <div class="p-3">
                                        <h5 class="fw-medium fs-17 d-flex align-items-center gap-2 mb-3"><span class="avatar avatar-rounded bg-primary avatar-sm"><i class="ri-briefcase-4-line fs-13"></i></span> Experience :</h5>
                                        <div class="ms-4 ps-3">
                                            <p class="fw-medium fs-14 mb-0">UI/UX Designer (2019 Mar - Present)</p>
                                            <div class="d-flex gap-2">
                                                <p>InnovateZ Solutions</p>
                                                <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-12"></i> Kondapur, Hyderabad</p>
                                            </div>
                                            <p class="fw-medium mb-2">Responsibilities :</p>
                                            <ol class="list-group border-0 list-bullets">
                                                <li class="border-0 py-1">Lead the design efforts for innovative and user-friendly interfaces across multiple projects.</li>
                                                <li class="border-0 py-1">Collaborate with cross-functional teams to translate business requirements into intuitive designs.</li> 
                                                <li class="border-0 py-1">Conduct user research, usability testing, and gather feedback to iterate designs.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-xxl-4"> 
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header">
                                    <div class="card-title">
                                        Tools Used
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-2">
                                    <span class="avatar me-2 avatar-rounded bg-primary-transparent shadow-sm border border-primary border-opacity-25 shadow-sm border p-2">
                                        <img src="<?php echo base_url('assets/images/company-logos/1.png'); ?>" alt="">
                                    </span>
                                    <span class="avatar me-2 avatar-rounded bg-primary-transparent shadow-sm border border-primary border-opacity-25 shadow-sm border p-2">
                                        <img src="<?php echo base_url('assets/images/company-logos/2.png'); ?>" alt="">
                                    </span>
                                    <span class="avatar me-2 avatar-rounded bg-primary-transparent shadow-sm border border-primary border-opacity-25 shadow-sm border p-2">
                                        <img src="<?php echo base_url('assets/images/company-logos/3.png'); ?>" alt="">
                                    </span>
                                    <span class="avatar me-2 avatar-rounded bg-primary-transparent shadow-sm border border-primary border-opacity-25 shadow-sm border p-2">
                                        <img src="<?php echo base_url('assets/images/company-logos/4.png'); ?>" alt="">
                                    </span>
                                    <span class="avatar me-2 avatar-rounded bg-primary-transparent shadow-sm border border-primary border-opacity-25 shadow-sm border p-2">
                                        <img src="<?php echo base_url('assets/images/company-logos/5.png'); ?>" alt="">
                                    </span>
                                    <span class="avatar avatar-rounded bg-primary-transparent shadow-sm border border-primary border-opacity-25 shadow-sm border p-2">
                                        <img src="<?php echo base_url('assets/images/company-logos/6.png'); ?>" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h6 class="fw-medium mb-3">Related Profiles</h6>
                                <div class="swiper swiper-vertical overflow-hidden swiper-related-profiles">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="card custom-card shadow-none border">
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
                                                                <a href="javascript:void(0);">UX Designer</a>
                                                                <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> Canada</p>
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
                                                                    <span>(24)</span>
                                                                    <span>Ratings</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="popular-tags mb-4 d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Master's Degree</a>
                                                        <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> Remote Work</a>
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
                                        <div class="swiper-slide">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body">
                                                    <div class="float-end">
                                                        <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-danger-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download CV" title="Download CV"><span><i class="ri-download-cloud-line fs-14"></i></span></a>
                                                        <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-info-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-line fs-14"></i></span></a>
                                                    </div>
                                                    <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                        <div>
                                                            <span class="avatar avatar-lg avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="Profile Picture">
                                                            </span>
                                                        </div>    
                                                        <div>
                                                            <h6 class="fw-medium mb-1 d-flex align-items-center"><a href="<?php echo base_url('job-candidate-details'); ?>"> Michael <i class="ri-verified-badge-fill text-primary fs-14" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                                            <div class="d-flex gap-2 flex-wrap">
                                                                <a href="javascript:void(0);">UI Developer</a>
                                                                <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> New York</p>
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
                                                    <div class="popular-tags mb-4 d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                        <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> Remote Work</a>
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
                                        <div class="swiper-slide">
                                            <div class="card custom-card shadow-none border">
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
                                                                <a href="javascript:void(0);">Web Designer</a>
                                                                <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> LosAngeles,CA</p>
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
                                                                    <span>(20)</span>
                                                                    <span>Ratings</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="popular-tags mb-4 d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Master's Degree</a>
                                                        <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> Remote Work</a>
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
                                        <div class="swiper-slide">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body">
                                                    <div class="float-end">
                                                        <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-danger-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Download CV" title="Download CV"><span><i class="ri-download-cloud-line fs-14"></i></span></a>
                                                        <a href="javascript:void(0);" class="avatar avatar-rounded avatar-sm bg-info-transparent" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-line fs-14"></i></span></a>
                                                    </div>
                                                    <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                        <div>
                                                            <span class="avatar avatar-lg avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="Profile Picture">
                                                            </span>
                                                        </div>    
                                                        <div>
                                                            <h6 class="fw-medium mb-1 d-flex align-items-center"><a href="<?php echo base_url('job-candidate-details'); ?>"> Joseph <i class="ri-verified-badge-fill text-primary fs-14" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                                            <div class="d-flex gap-2 flex-wrap">
                                                                <a href="javascript:void(0);">React Developer</a>
                                                                <p class="mb-0 fs-12 text-muted"><i class="ri-map-pin-line fs-11"></i> New York,NY</p>
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
                                                                    <span>(35)</span>
                                                                    <span>Ratings</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="popular-tags mb-4 d-flex gap-2 flex-wrap">
                                                        <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary border-opacity-10 text-primary"><i class="ri-file-text-line me-1"></i> Bachelor's Degree</a>
                                                        <a href="javascript:void(0);" class="badge rounded-pill fs-11 border border-primary1 border-opacity-10 text-primary1"><i class="ri-remote-control-line me-1"></i> Remote Work</a>

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
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header">
                                    <div class="card-title">
                                        Personal Information
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-responsive">
                                            <tbody>
                                                <tr>
                                                    <td class="w-50">
                                                        <span class="fw-medium">Full Name</span> 
                                                    </td>
                                                    <td>: Iliana Lilly</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50">
                                                        <span class="fw-medium">Email</span> 
                                                    </td>
                                                    <td>: brendra@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50">
                                                        <span class="fw-medium">D.O.B</span> 
                                                    </td>
                                                    <td>: 13 Jan 2008</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50">
                                                        <span class="fw-medium">Gender</span> 
                                                    </td>
                                                    <td>: Female</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50">
                                                        <span class="fw-medium">Age</span> 
                                                    </td>
                                                    <td>: 35</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50">
                                                        <span class="fw-medium">Mobile </span> 
                                                    </td>
                                                    <td>: +91 7865343874</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50">
                                                        <span class="fw-medium">Marital Status </span> 
                                                    </td>
                                                    <td>: Unmarried</td>
                                                </tr>
                                                <tr>
                                                    <td class="w-50">
                                                        <span class="fw-medium">Address </span> 
                                                    </td>
                                                    <td>: Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer border-top-0">
                                    <div class="d-flex align-items-center">
                                        <p class="fs-15 mb-0 me-4 fw-medium">Social :</p>
                                        <div class="btn-list mb-0">
                                            <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-xxl-0">
                                                <i class="ri-facebook-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light mb-xxl-0">
                                                <i class="ri-twitter-x-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light mb-xxl-0">
                                                <i class="ri-instagram-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light mb-xxl-0">
                                                <i class="ri-github-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light mb-xxl-0">
                                                <i class="ri-youtube-line"></i>
                                            </button>
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

        <!-- Candidate Details JS -->
        <script src="<?php echo base_url('assets/js/job-candidate-details.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
