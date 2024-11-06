
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <link rel="stylesheet" href="<?php echo base_url('assets/libs/glightbox/css/glightbox.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Profile</h1>
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
                        <div class="col-xl-12">
                            <div class="card custom-card profile-card">
                                <div class="profile-banner-img">
                                    <img src="<?php echo base_url('assets/images/media/media-3.jpg'); ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body pb-0 position-relative">
                                    <div class="row profile-content">
                                        <div class="col-xl-3">
                                            <div class="card custom-card overflow-hidden border">
                                                <div class="card-body border-bottom border-block-end-dashed">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xxl avatar-rounded online mb-3">
                                                            <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                        </span>
                                                        <h5 class="fw-semibold mb-1">Spencer Robin</h5>
                                                        <span class="d-block fw-medium text-muted mb-2">Software Development Manager</span>
                                                        <p class="fs-12 mb-0 text-muted"> <span class="me-3"><i class="ri-building-line me-1 align-middle"></i>Hamburg</span> <span><i class="ri-map-pin-line me-1 align-middle"></i>Germany</span> </p>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-0 flex-wrap gap-3 p-3 border-bottom border-block-end-dashed"> 
                                                    <div class="border-dashed rounded text-center flex-fill"> 
                                                        <div class="main-card-icon mb-2 primary1">
                                                            <div class="avatar avatar-sm bg-primary1">
                                                                <i class="fs-15 ti ti-user-check"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2 justify-content-center align-items-end">
                                                            <p class="fw-semibold fs-20 mb-0">15k</p>
                                                            <p class="mb-1 text-muted">Followers</p>
                                                        </div>
                                                    </div> 
                                                    <div class="border-dashed rounded text-center flex-fill"> 
                                                        <div class="main-card-icon mb-2 secondary">
                                                            <div class="avatar avatar-sm bg-secondary">
                                                                <i class="fs-15 ti ti-user-plus"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2 justify-content-center align-items-end">
                                                            <p class="fw-semibold fs-20 mb-0">241</p>
                                                            <p class="mb-1 text-muted">Following</p>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="p-3 pb-1 d-flex flex-wrap justify-content-between">
                                                    <div class="fw-medium fs-15 text-primary1">
                                                        Basic Info :
                                                    </div>
                                                </div>
                                                <div class="card-body border-bottom border-block-end-dashed p-0">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item pt-2 border-0">
                                                            <div><span class="fw-medium me-2">Name :</span><span class="text-muted">Spencer Robin</span></div>
                                                        </li>
                                                        <li class="list-group-item pt-2 border-0">
                                                            <div><span class="fw-medium me-2">Designation :</span><span class="text-muted">Software Development Manager</span></div>
                                                        </li>
                                                        <li class="list-group-item pt-2 border-0">
                                                            <div><span class="fw-medium me-2">Email :</span><span class="text-muted">spencer.robin22@example.com</span></div>
                                                        </li>
                                                        <li class="list-group-item pt-2 border-0">
                                                            <div><span class="fw-medium me-2">Phone :</span><span class="text-muted">+1 (222) 111 - 57840</span></div>
                                                        </li>
                                                        <li class="list-group-item pt-2 border-0">
                                                            <div><span class="fw-medium me-2">Experience :</span><span class="text-muted">10 Years</span></div>
                                                        </li>
                                                        <li class="list-group-item pt-2 border-0">
                                                            <div><span class="fw-medium me-2">Age :</span><span class="text-muted">28</span></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="p-3 pb-1 d-flex flex-wrap justify-content-between">
                                                    <div class="fw-medium fs-15 text-primary1">
                                                        Followers :
                                                    </div>
                                                    <a href="javascript:void(0);" class="fs-12 text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                                </div>
                                                <div class="card-body p-0">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item border-0 py-2">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <span class="fw-medium">Iliana Lilly</span>
                                                                </div>
                                                                <div> 
                                                                    <button class="btn btn-sm btn-icon btn-primary-light"> <i class="ri-add-line lh-1 align-middle"></i> </button> 
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item border-0 py-2">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <span class="fw-medium">Charlie Edson</span>
                                                                </div>
                                                                <div> 
                                                                    <button class="btn btn-sm btn-icon btn-primary-light"> <i class="ri-add-line lh-1 align-middle"></i> </button> 
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item border-0 py-2">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <span class="fw-medium">Aurora Reed</span>
                                                                </div>
                                                                <div> 
                                                                    <button class="btn btn-sm btn-icon btn-primary-light"> <i class="ri-add-line lh-1 align-middle"></i> </button> 
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item border-0 py-2">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <span class="fw-medium">Spencer Robin</span>
                                                                </div>
                                                                <div> 
                                                                    <button class="btn btn-sm btn-icon btn-primary-light"> <i class="ri-add-line lh-1 align-middle"></i> </button> 
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="card custom-card overflow-hidden border">
                                                <div class="card-body">
                                                    <ul class="nav nav-tabs tab-style-6 mb-3 p-0" id="myTab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link w-100 text-start active" id="profile-about-tab" data-bs-toggle="tab"
                                                                data-bs-target="#profile-about-tab-pane" type="button" role="tab"
                                                                aria-controls="profile-about-tab-pane" aria-selected="true">About</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link w-100 text-start" id="edit-profile-tab" data-bs-toggle="tab"
                                                                data-bs-target="#edit-profile-tab-pane" type="button" role="tab"
                                                                aria-controls="edit-profile-tab-pane" aria-selected="true">Edit Profile</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link w-100 text-start" id="timeline-tab" data-bs-toggle="tab"
                                                                data-bs-target="#timeline-tab-pane" type="button" role="tab"
                                                                aria-controls="timeline-tab-pane" aria-selected="false">Timeline</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link w-100 text-start" id="gallery-tab" data-bs-toggle="tab"
                                                                data-bs-target="#gallery-tab-pane" type="button" role="tab"
                                                                aria-controls="gallery-tab-pane" aria-selected="false">Gallery</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link w-100 text-start" id="friends-tab" data-bs-toggle="tab"
                                                                data-bs-target="#friends-tab-pane" type="button" role="tab"
                                                                aria-controls="friends-tab-pane" aria-selected="false">Friends</button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="profile-tabs">
                                                        <div class="tab-pane show active p-0 border-0" id="profile-about-tab-pane" role="tabpanel" aria-labelledby="profile-about-tab" tabindex="0">
                                                            <ul class="list-group list-group-flush border rounded-3">
                                                                <li class="list-group-item p-3">
                                                                    <span class="fw-medium fs-15 d-block mb-3"><span class="me-1">&#10024;</span>About Info :</span>
                                                                    <p class="text-muted mb-2">
                                                                        Hello, I'm [Your Name], a dedicated [Your Profession/Interest] based in [Your Location]. I have a genuine passion for [Your Hobbies/Interests] and enjoy delving into the nuances of [Your Industry/Field]. 
                                                                    </p>
                                                                    <p class="text-muted mb-0">
                                                                        Specializing in [Your Specialization/Area of Expertise], I strive to infuse innovation into every project I undertake. With a track record of [Key Achievements] and valuable experiences, I'm committed to continual growth and eagerly anticipate the opportunities that lie ahead.
                                                                    </p>
                                                                </li>
                                                                <li class="list-group-item p-3">
                                                                    <span class="fw-medium fs-15 d-block mb-3">Contact Info :</span>
                                                                    <div class="text-muted">
                                                                        <p class="mb-3">
                                                                            <span class="avatar avatar-sm avatar-rounded text-primary p-1 bg-primary-transparent me-2">
                                                                                <i class="ri-mail-line align-middle fs-15"></i>
                                                                            </span>
                                                                            <span class="fw-medium text-default">Email : </span> spencer.robin22@example.com
                                                                        </p>
                                                                        <p class="mb-3">
                                                                            <span class="avatar avatar-sm avatar-rounded text-primary1 p-1 bg-primary1-transparent me-2">
                                                                                <i class="ri-map-pin-line align-middle fs-15"></i>
                                                                            </span>
                                                                            <span class="fw-medium text-default">Website : </span> www.yourwebsite.com
                                                                        </p>
                                                                        <p class="mb-3">
                                                                            <span class="avatar avatar-sm avatar-rounded text-primary2 p-1 bg-primary2-transparent me-2">
                                                                                <i class="ri-building-line align-middle fs-15"></i>
                                                                            </span>
                                                                            <span class="fw-medium text-default">Location : </span> City, Country
                                                                        </p>
                                                                        <p class="mb-0">
                                                                            <span class="avatar avatar-sm avatar-rounded text-primary3 p-1 bg-primary3-transparent me-2">
                                                                                <i class="ri-phone-line align-middle fs-15"></i>
                                                                            </span>
                                                                            <span class="fw-medium text-default">Phone : </span> +1 (222) 111 - 57840
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item p-3">
                                                                    <span class="fw-medium fs-15 d-block mb-3">Skills :</span>
                                                                    <div class="w-75">
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-muted m-1 border">Leadership</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-muted m-1 border">Project Management</span>
                                                                        </a>    
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-muted m-1 border">Technical Proficiency</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-muted m-1 border">Communication</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-muted m-1 border">Team Building</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-muted m-1 border">Problem-Solving</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-muted m-1 border">Strategic Thinking</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-muted m-1 border">Decision Making</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-muted m-1 border">Adaptability</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-muted m-1 border">Stakeholder Management</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-muted m-1 border">Conflict Resolution</span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="badge bg-light text-muted m-1 border">Continuous Improvement</span>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item p-3">
                                                                    <span class="fw-medium fs-15 d-block mb-3">Social Media :</span>
                                                                    <div class="d-flex align-items-center gap-5 flex-wrap">
                                                                        <div class="d-flex align-items-center gap-3 me-2">
                                                                            <div>
                                                                                <span class="avatar avatar-md bg-primary"><i class="ri-github-line fs-16"></i></span>
                                                                            </div>
                                                                            <div>
                                                                                <span class="d-block fw-medium text-primay">Github</span>
                                                                                <span class="text-muted fw-medium">github.com/spruko</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex align-items-center gap-3 me-2">
                                                                            <div>
                                                                                <span class="avatar avatar-md bg-primary1"><i class="ri-twitter-x-line fs-16"></i></span>
                                                                            </div>
                                                                            <div>
                                                                                <span class="d-block fw-medium text-primay1">Twitter</span>
                                                                                <span class="text-muted fw-medium">twitter.com/spruko.me</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex align-items-center gap-3 me-2">
                                                                            <div>
                                                                                <span class="avatar avatar-md bg-primary2"><i class="ri-linkedin-line fs-16"></i></span>
                                                                            </div>
                                                                            <div>
                                                                                <span class="d-block fw-medium text-primay2">Linkedin</span>
                                                                                <span class="text-muted fw-medium">linkedin.com/in/spruko</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex align-items-center gap-3">
                                                                            <div>
                                                                                <span class="avatar avatar-md bg-primary3"><i class="ri-briefcase-line fs-16"></i></span>
                                                                            </div>
                                                                            <div>
                                                                                <span class="d-block fw-medium text-primay3">My Portfolio</span>
                                                                                <span class="text-muted fw-medium">spruko.com/</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane p-0 border-0" id="edit-profile-tab-pane" role="tabpanel"
                                                        aria-labelledby="edit-profile-tab" tabindex="0">
                                                            <ul class="list-group list-group-flush border rounded-3">
                                                                <li class="list-group-item p-3">
                                                                    <span class="fw-medium fs-15 d-block mb-3">Personal Info :</span>
                                                                    <div class="row gy-3 align-items-center">
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">User Name :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="Spencer Robin">
                                                                        </div>
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">First Name :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="Spencer">
                                                                        </div>
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">Last Name :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="Robin">
                                                                        </div>
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">Designation :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="Software Development Manager">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item p-3">
                                                                    <span class="fw-medium fs-15 d-block mb-3">Contact Info :</span>
                                                                    <div class="row gy-3 align-items-center">
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">Email :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9">
                                                                            <input type="email" class="form-control" placeholder="Placeholder" value="spencer.robin22@example.com">
                                                                        </div>
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">Phone :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="+1 (222) 111 - 57840">
                                                                        </div>
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">Website :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="www.yourwebsite.com">
                                                                        </div>
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">Location :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="City, Country">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item p-3">
                                                                    <span class="fw-medium fs-15 d-block mb-3">Social Info :</span>
                                                                    <div class="row gy-3 align-items-center">
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">Github :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="github.com/spruko">
                                                                        </div>
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">Twitter :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="twitter.com/spruko.me">
                                                                        </div>
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">Linkedin :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="linkedin.com/in/spruko">
                                                                        </div>
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">Portfolio :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9">
                                                                            <input type="text" class="form-control" placeholder="Placeholder" value="spruko.com/">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item p-3">
                                                                    <span class="fw-medium fs-15 d-block mb-3">About Info :</span>
                                                                    <div class="row gy-3 align-items-center">
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">Biographical Info :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9">
                                                                            <textarea class="form-control" id="text-area" rows="4">Hello, I'm [Your Name], a dedicated [Your Profession/Interest] based in [Your Location]. I have a genuine passion for [Your Hobbies/Interests] and enjoy delving into the nuances of [Your Industry/Field].

                                                                                Specializing in [Your Specialization/Area of Expertise], I strive to infuse innovation into every project I undertake. With a track record of [Key Achievements] and valuable experiences, I'm committed to continual growth and eagerly anticipate the opportunities that lie ahead.
                                                                            </textarea>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item p-3">
                                                                    <span class="fw-medium fs-15 d-block mb-3">SKILLS :</span>
                                                                    <div class="row gy-3 align-items-center">
                                                                        <div class="col-xl-3">
                                                                            <div class="lh-1">
                                                                                <span class="fw-medium">skills :</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-9 pb-4">
                                                                            <input class="form-control" id="choices-text-preset-values" type="text" value="Leadership, Project Management, Technical Proficiency, Communication, Team Building, Problem-Solving, Strategic Thinking, Decision Making, Adaptability, Stakeholder Management, Conflict Resolution, Continuous Improvement" placeholder="This is a placeholder">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane" id="timeline-tab-pane" role="tabpanel" 
                                                            aria-labelledby="timeline-tab" tabindex="0">
                                                            <ul class="list-unstyled profile-timeline">
                                                                <li>
                                                                    <div>
                                                                        <span class="avatar avatar-sm bg-primary-transparent avatar-rounded profile-timeline-avatar">
                                                                            <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="">
                                                                        </span>
                                                                        <div class="d-flex gap-2 flex-wrap mb-2">
                                                                            <p class="mb-0">
                                                                                <span class="fw-semibold">Photos </span>from their recent vacation and writes a caption describing their experience..
                                                                            </p>
                                                                            <span class="text-end ms-auto fs-11 text-muted">15,May 2024 - 18:47</span>
                                                                        </div>
                                                                        <p class="profile-activity-media mb-0">
                                                                            <a href="javascript:void(0);">
                                                                                <img src="<?php echo base_url('assets/images/media/media-17.jpg'); ?>" alt="">
                                                                            </a>    
                                                                            <a href="javascript:void(0);">
                                                                                <img src="<?php echo base_url('assets/images/media/media-18.jpg'); ?>" alt="">
                                                                            </a>    
                                                                            <a href="javascript:void(0);">
                                                                                <img src="<?php echo base_url('assets/images/media/media-19.jpg'); ?>" alt="">
                                                                            </a>    
                                                                        </p>
                                                                        <div class="d-flex align-items-end justify-content-between gap-2 flex-wrap">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-muted m-1 border">#Leadership</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-muted m-1 border">#Solving</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="btn-list text-end">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 4</button>
                                                                                <button class="btn btn-sm btn-primary1-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 2</button>
                                                                                <button class="btn btn-sm btn-primary2-light btn-wave waves-effect waves-light"><i class="ri-heart-line"></i> 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                            <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                                        </span>
                                                                        <div class="d-flex gap-2 flex-wrap mb-2">
                                                                            <p class="mb-0">
                                                                                Friend comments on the post, expressing admiration for the picturesque location a. <span class="text-primary fw-medium text-decoration-underline">#Trip-photos</span>.
                                                                            </p>
                                                                            <span class="text-end ms-auto fs-11 text-muted">18,Dec 2024 - 12:16</span>
                                                                        </div>
                                                                        <p class="text-muted mb-0">
                                                                            Asking about the user's favorite part of the trip. emporibus inventore ullam tempora eligendi libero sequi dignissimos cumque, et a sint tenetur consequatur omnis!
                                                                        </p>
                                                                        <div class="d-flex align-items-end justify-content-between gap-2 flex-wrap">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-muted m-1 border">#Leadership</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-muted m-1 border">#Solving</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="btn-list text-end">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 4</button>
                                                                                <button class="btn btn-sm btn-primary1-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 2</button>
                                                                                <button class="btn btn-sm btn-primary2-light btn-wave waves-effect waves-light"><i class="ri-heart-line"></i> 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                            <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="">
                                                                        </span>
                                                                        <div class="d-flex gap-2 flex-wrap mb-2">
                                                                            <p class="text-muted mb-0">
                                                                                <span class="text-default"><span class="text-primary1 fw-medium">Varun Sonu </span> asking for recommendations on places to visit in the vacation destination</span>.
                                                                            </p>
                                                                            <span class="text-end ms-auto fs-11 text-muted">26,May 2024 - 12:45</span>
                                                                        </div>
                                                                        <p class="profile-activity-media mb-0">
                                                                            <a href="javascript:void(0);">
                                                                                <img src="<?php echo base_url('assets/images/media/file-manager/3.png'); ?>" alt="">
                                                                            </a>  
                                                                            <span class="fs-11 text-muted">432.87KB</span>
                                                                        </p>
                                                                        <div class="d-flex align-items-end justify-content-between gap-2 flex-wrap">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-muted m-1 border">#Leadership</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-muted m-1 border">#Solving</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="btn-list text-end">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 4</button>
                                                                                <button class="btn btn-sm btn-primary1-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 2</button>
                                                                                <button class="btn btn-sm btn-primary2-light btn-wave waves-effect waves-light"><i class="ri-heart-line"></i> 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <span class="avatar avatar-sm bg-success avatar-rounded profile-timeline-avatar">
                                                                            K
                                                                        </span>
                                                                        <div class="d-flex gap-2 flex-wrap mb-2">
                                                                            <p class="text-muted mb-0">
                                                                                <span class="text-default">On a trending news topic, offering their perspective and engaging with other group members' <span class="text-primary2 fw-medium text-decoration-underline">#viewpoints</span></span>.
                                                                            </p>
                                                                            <span class="text-end ms-auto fs-11 text-muted">28,May 2024 - 22:09</span>
                                                                        </div>
                                                                        <p class="profile-activity-media mb-2">
                                                                            <a href="javascript:void(0);">
                                                                                <img src="<?php echo base_url('assets/images/media/media-75.jpg'); ?>" alt="">
                                                                            </a>   
                                                                        </p>
                                                                        <div class="d-flex align-items-end justify-content-between gap-2 flex-wrap">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-muted m-1 border">#Leadership</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-muted m-1 border">#Solving</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="btn-list text-end">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 4</button>
                                                                                <button class="btn btn-sm btn-primary1-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 2</button>
                                                                                <button class="btn btn-sm btn-primary2-light btn-wave waves-effect waves-light"><i class="ri-heart-line"></i> 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                            <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="">
                                                                        </span>
                                                                        <div class="d-flex gap-2 flex-wrap mb-1">
                                                                            <p class="text-muted mb-0">
                                                                                <span class="text-default">Reminiscing about a memorable trip they took together and suggesting planning another adventure soon. <span class="fw-semibold text-primary3 text-decoration-underline">#Europe</span> trip was a landmark in our lifes!</span>.
                                                                            </p>
                                                                            <span class="text-end ms-auto fs-11 text-muted">29,May 2024 - 16:42</span>
                                                                        </div>
                                                                        <p class="text-muted">"Every time, our Europe trip still lies vividly before our eyes."</p>
                                                                        <p class="profile-activity-media mb-0">
                                                                            <a href="javascript:void(0);">
                                                                                <img src="<?php echo base_url('assets/images/media/media-59.jpg'); ?>" class="m-1" alt="">
                                                                            </a>  
                                                                            <a href="javascript:void(0);">
                                                                                <img src="<?php echo base_url('assets/images/media/media-60.jpg'); ?>" class="m-1" alt="">
                                                                            </a>  
                                                                            <a href="javascript:void(0);">
                                                                                <img src="<?php echo base_url('assets/images/media/media-61.jpg'); ?>" class="m-1" alt="">
                                                                            </a>  
                                                                        </p>
                                                                        <div class="d-flex align-items-end justify-content-between gap-2 flex-wrap">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-muted m-1 border">#Leadership</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-muted m-1 border">#Solving</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="btn-list text-end">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 4</button>
                                                                                <button class="btn btn-sm btn-primary1-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 2</button>
                                                                                <button class="btn btn-sm btn-primary2-light btn-wave waves-effect waves-light"><i class="ri-heart-line"></i> 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div>
                                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                            <img src="<?php echo base_url('assets/images/media/media-39.jpg'); ?>" alt="">
                                                                        </span>
                                                                        <div class="d-flex gap-2 flex-wrap mb-1">
                                                                            <p class="mb-1">
                                                                                <span class="fw-semibold text-primary2">Invitation</span> to a virtual networking event from a professional connection, expressing interest and RSVPing for attendance.
                                                                            </p>
                                                                            <span class="text-end ms-auto fs-11 text-muted">06,Jun 2024 - 08:40</span>
                                                                        </div>
                                                                        <p class="profile-activity-media mb-0">
                                                                            <a href="javascript:void(0);">
                                                                                <img src="<?php echo base_url('assets/images/media/media-26.jpg'); ?>" alt="">
                                                                            </a>    
                                                                            <a href="javascript:void(0);">
                                                                                <img src="<?php echo base_url('assets/images/media/media-29.jpg'); ?>" alt="">
                                                                            </a>    
                                                                        </p>
                                                                        <div class="d-flex align-items-end justify-content-between gap-2 flex-wrap">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-muted m-1 border">#Leadership</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <span class="badge bg-light text-muted m-1 border">#Solving</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="btn-list text-end">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light"><i class="ri-message-3-line"></i> 4</button>
                                                                                <button class="btn btn-sm btn-primary1-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i> 2</button>
                                                                                <button class="btn btn-sm btn-primary2-light btn-wave waves-effect waves-light"><i class="ri-heart-line"></i> 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane p-0 border-0" id="gallery-tab-pane" role="tabpanel"
                                                            aria-labelledby="gallery-tab" tabindex="0">
                                                            <div class="row">
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-40.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-40.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-41.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-41.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-42.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-42.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-43.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-43.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-44.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-44.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-45.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-45.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-46.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-46.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-60.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-60.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-26.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-26.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-32.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-32.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-30.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-30.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-31.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-31.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-46.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-46.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-59.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-59.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-61.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-61.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                    <a href="<?php echo base_url('assets/images/media/media-42.jpg'); ?>" class="glightbox card" data-gallery="gallery1">
                                                                        <img src="<?php echo base_url('assets/images/media/media-42.jpg'); ?>" alt="image" >
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane p-0 border-0" id="friends-tab-pane" role="tabpanel"
                                                            aria-labelledby="friends-tab" tabindex="0">
                                                            <div class="row">
                                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="card custom-card shadow-none border">
                                                                        <div class="card-body">
                                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="">
                                                                                </span>
                                                                                <div class="text-truncate">
                                                                                    <a href="javascript:void(0);" class="mb-0 fw-semibold">Della Jasmine</a>
                                                                                    <p class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">dellajasmine117@gmail.com</p>
                                                                                    <span class="badge bg-info-transparent">Product Designer</span>
                                                                                </div>
                                                                                <div class="dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="btn btn-secondary-light btn-icon btn-sm btn-wave" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu"> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-footer text-center p-3">
                                                                            <div class="d-flex gap-2 flex-wrap justify-content-center">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave me-0">View Profile</button>
                                                                                <button class="btn btn-sm btn-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="card custom-card shadow-none border">
                                                                        <div class="card-body">
                                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                                                </span>
                                                                                <div class="text-truncate">
                                                                                    <p class="mb-0 fw-semibold">Danny Raj</p>
                                                                                    <p class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">dannyraj658@gmail.com</p>
                                                                                    <span class="badge bg-success-transparent">UI Designer</span>
                                                                                </div>
                                                                                <div class="dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="btn btn-secondary-light btn-icon btn-sm btn-wave" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu"> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-footer text-center p-3">
                                                                            <div class="d-flex gap-2 flex-wrap justify-content-center">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave me-0">View Profile</button>
                                                                                <button class="btn btn-sm btn-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="card custom-card shadow-none border">
                                                                        <div class="card-body">
                                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="">
                                                                                </span>
                                                                                <div class="text-truncate">
                                                                                    <p class="mb-0 fw-semibold">Catalina Keira</p>
                                                                                    <p class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">catalinakeira023@gmail.com</p>
                                                                                    <span class="badge bg-info-transparent">Product Designer</span>
                                                                                </div>
                                                                                <div class="dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="btn btn-secondary-light btn-icon btn-sm btn-wave" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu"> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-footer text-center p-3">
                                                                            <div class="d-flex gap-2 flex-wrap justify-content-center">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave me-0">View Profile</button>
                                                                                <button class="btn btn-sm btn-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="card custom-card shadow-none border">
                                                                        <div class="card-body">
                                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                                                </span>
                                                                                <div class="text-truncate">
                                                                                    <p class="mb-0 fw-semibold">Priceton Gray</p>
                                                                                    <p class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">pricetongray451@gmail.com</p>
                                                                                    <span class="badge bg-warning-transparent">Team Manager</span>
                                                                                </div>
                                                                                <div class="dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="btn btn-secondary-light btn-icon btn-sm btn-wave" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu"> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-footer text-center p-3">
                                                                            <div class="d-flex gap-2 flex-wrap justify-content-center">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave me-0">View Profile</button>
                                                                                <button class="btn btn-sm btn-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="card custom-card shadow-none border">
                                                                        <div class="card-body">
                                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="">
                                                                                </span>
                                                                                <div class="text-truncate">
                                                                                    <p class="mb-0 fw-semibold">Sarah Ruth</p>
                                                                                    <p class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">sarahruth45@gmail.com</p>
                                                                                    <span class="badge bg-info-transparent">Product Designer</span>
                                                                                </div>
                                                                                <div class="dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="btn btn-secondary-light btn-icon btn-sm btn-wave" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu"> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-footer text-center p-3">
                                                                            <div class="d-flex gap-2 flex-wrap justify-content-center">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave me-0">View Profile</button>
                                                                                <button class="btn btn-sm btn-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="card custom-card shadow-none border">
                                                                        <div class="card-body">
                                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                                                </span>
                                                                                <div class="text-truncate">
                                                                                    <p class="mb-0 fw-semibold">Mahira Hose</p>
                                                                                    <p class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">mahirahose9456@gmail.com</p>
                                                                                    <span class="badge bg-info-transparent">Product Designer</span>
                                                                                </div>
                                                                                <div class="dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="btn btn-secondary-light btn-icon btn-sm btn-wave" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu"> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-footer text-center p-3">
                                                                            <div class="d-flex gap-2 flex-wrap justify-content-center">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave me-0">View Profile</button>
                                                                                <button class="btn btn-sm btn-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="card custom-card shadow-none border">
                                                                        <div class="card-body">
                                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                                                </span>
                                                                                <div class="text-truncate">
                                                                                    <p class="mb-0 fw-semibold">Victoria Gracie</p>
                                                                                    <p class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">victoriagracie@gmail.com</p>
                                                                                    <span class="badge bg-info-transparent">Product Designer</span>
                                                                                </div>
                                                                                <div class="dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="btn btn-secondary-light btn-icon btn-sm btn-wave" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu"> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-footer text-center p-3">
                                                                            <div class="d-flex gap-2 flex-wrap justify-content-center">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave me-0">View Profile</button>
                                                                                <button class="btn btn-sm btn-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="card custom-card shadow-none border">
                                                                        <div class="card-body">
                                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="">
                                                                                </span>
                                                                                <div class="text-truncate">
                                                                                    <p class="mb-0 fw-semibold">Amith Gray</p>
                                                                                    <p class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">amithgray132@gmail.com</p>
                                                                                    <span class="badge bg-info-transparent">Product Designer</span>
                                                                                </div>
                                                                                <div class="dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="btn btn-secondary-light btn-icon btn-sm btn-wave" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu"> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-footer text-center p-3">
                                                                            <div class="d-flex gap-2 flex-wrap justify-content-center">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave me-0">View Profile</button>
                                                                                <button class="btn btn-sm btn-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="card custom-card shadow-none border">
                                                                        <div class="card-body">
                                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                                <span class="avatar avatar-xl avatar-rounded flex-shrink-0">
                                                                                    <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                                                </span>
                                                                                <div class="text-truncate">
                                                                                    <p class="mb-0 fw-semibold">Isha Bella</p>
                                                                                    <p class="w-75 text-truncate fs-12 op-7 mb-1 text-muted">ishabella255@gmail.com</p>
                                                                                    <span class="badge bg-info-transparent">Product Designer</span>
                                                                                </div>
                                                                                <div class="dropdown ms-auto">
                                                                                    <a aria-label="anchor" class="btn btn-secondary-light btn-icon btn-sm btn-wave" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                                                        <i class="ri-more-2-fill"></i>
                                                                                    </a> 
                                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu"> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Message</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Block</a></li> 
                                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Remove</a></li> 
                                                                                    </ul> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-footer text-center p-3">
                                                                            <div class="d-flex gap-2 flex-wrap justify-content-center">
                                                                                <button class="btn btn-sm btn-primary-light btn-wave me-0">View Profile</button>
                                                                                <button class="btn btn-sm btn-light btn-wave me-0">Unfollow</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12">
                                                                    <div class="text-center">
                                                                        <button class="btn btn-primary-light btn-wave">Show All</button>
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
                    </div>
                    <!-- End:: row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Gallery JS -->
        <script src="<?php echo base_url('assets/libs/glightbox/js/glightbox.min.js'); ?>"></script>

        <!-- Internal Profile JS -->
        <script src="<?php echo base_url('assets/js/profile.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>