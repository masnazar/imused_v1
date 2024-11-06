
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- FlatPickr CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.css'); ?>">

        <link rel="stylesheet" href="<?php echo base_url('assets/libs/dragula/dragula.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Start::page-header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Deals</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Deals</h1>
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

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <span class="fw-medium fs-16 me-2">Deals</span><span class="badge bg-primary align-middle">26</span>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2">
                                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create-contact"><i class="ri-add-line me-1 fw-medium align-middle"></i>New Deal</button>
                                            <button class="btn btn-success-light btn-sm">Export As CSV</button>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Date Added</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">A - Z</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-xxl-2 col-md-4">
                            <div class="card custom-card border border-primary border-opacity-50">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-top flex-wrap justify-content-between">
                                        <div>
                                            <h6 class="fw-medium lead-discovered"><i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-primary-transparent text-primary me-2 align-middle"></i>Leads Discovered</h6>
                                        </div>
                                        <div class="ms-auto text-center">
                                            <span class=" badge bg-primary">24</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-md-4">
                            <div class="card custom-card border border-primary1 border-opacity-50">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-top flex-wrap justify-content-between">
                                        <div>
                                            <h6 class="fw-medium lead-qualified"><i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-primary1-transparent text-primary1 me-2 align-middle"></i>Qualified Leads</h6>
                                        </div>
                                        <div>
                                            <span class=" badge bg-primary1 text-fixed-white">17</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-md-4">
                            <div class="card custom-card border border-primary2 border-opacity-50">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-top flex-wrap justify-content-between">
                                        <div>
                                            <h6 class="fw-medium contact-initiated"><i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-primary2-transparent text-primary2 me-2 align-middle"></i>Contact Initiated</h6>
                                        </div>
                                        <div>
                                            <span class=" badge bg-primary2 text-fixed-white">5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-md-4">
                            <div class="card custom-card border border-primary3 border-opacity-50">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-top flex-wrap justify-content-between">
                                        <div>
                                            <h6 class="fw-medium need-identified"><i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-primary3-transparent text-primary3 me-2 align-middle"></i>Needs Identified</h6>
                                        </div>
                                        <div>
                                            <span class=" badge bg-primary3 text-fixed-white">43</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-md-4">
                            <div class="card custom-card border border-secondary border-opacity-50">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-top flex-wrap justify-content-between">
                                        <div>
                                            <h6 class="fw-medium negotiation"><i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-secondary-transparent text-secondary me-2 align-middle"></i>Negotiation</h6>
                                        </div>
                                        <div>
                                            <span class=" badge bg-secondary text-fixed-white">15</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-md-4">
                            <div class="card custom-card border border-success border-opacity-50">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-top flex-wrap justify-content-between">
                                        <div>
                                            <h6 class="fw-medium deal-finalized"><i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-success-transparent text-success me-2 align-middle"></i>Deal Finalized</h6>
                                        </div>
                                        <div>
                                            <span class=" badge bg-success text-fixed-white">127 Deals</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="row">
                        <div class="col-xxl-2" id="leads-discovered">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">John Doe</div>
                                                <div class="text-muted fs-10">21,May 2024 - 10:25AM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">Beta Innovations</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Amount:</span> $50,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Initech Info</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Jane Smith</div>
                                                <div class="text-muted fs-10">15, April 2024 - 02:15PM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">Alpha Solutions</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Amount:</span> $75,000</p>
                                    <div class="deal-description">
                                        <a href="javascript:void(0);" class="company-name">TechCorp</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Michael Johnson</div>
                                                <div class="text-muted fs-10">05, March 2024 - 11:30AM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">Gamma Enterprises</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Amount:</span> $100,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">NextGen Inc</a>
                                        </div>
                                    </div>
                                </div>                            
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Emma Wilson</div>
                                                <div class="text-muted fs-10">10, February 2024 - 09:45AM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">Delta Dynamics</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Amount:</span> $120,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">InnovateX</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2" id="leads-qualified">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Daniel Brown</div>
                                                <div class="text-muted fs-10">18, January 2024 - 03:20PM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">Omega Solutions</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Amount:</span> $95,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">SkyTech</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Emily Brown</div>
                                                <div class="text-muted fs-10">18, June 2024 - 11:15AM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">Delta Innovations</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Amount:</span> $65,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Tech Dynamics</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">James Wilson</div>
                                                <div class="text-muted fs-10">12, June 2024 - 09:30AM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">Gamma Enterprises</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Amount:</span> $80,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Tech Solutions Inc.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Liam Smith</div>
                                                <div class="text-muted fs-10">30, June 2024 - 01:45PM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">Zeta Corporation</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Agreed Amount:</span> $105,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">TechVision Ltd.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2" id="contact-initiated">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Sarah Martinez</div>
                                                <div class="text-muted fs-10">05, June 2024 - 10:45AM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">AlphaTech Solutions</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Amount:</span> $75,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">InnovateX</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Robert Lee</div>
                                                <div class="text-muted fs-10">30, May 2024 - 02:00PM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">Omega Ventures</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Amount:</span> $90,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">NextGen Tech</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2" id="needs-identified">                        
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">David Wilson</div>
                                                <div class="text-muted fs-10">08, June 2024 - 09:45AM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">Alpha Solutions</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Amount:</span> $70,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Tech Innovations</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Emma Clark</div>
                                                <div class="text-muted fs-10">20, May 2024 - 03:30PM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">Zeta Dynamics</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Amount:</span> $85,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">TechStar Solutions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">David Wilson</div>
                                                <div class="text-muted fs-10">07, June 2024 - 09:45AM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14"> AlphaTech Solutions</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Budget:</span> $100,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Tech Innovations</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Sophie Adams</div>
                                                <div class="text-muted fs-10">14, June 2024 - 11:30AM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14"> GammaTech Solutions</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Estimated Revenue:</span> $120,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">InnovateX</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2" id="negotiation">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Olivia Moore</div>
                                                <div class="text-muted fs-10">25, May 2024 - 02:15PM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14"> Delta Dynamics</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Expected Investment:</span> $90,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">TechStar Solutions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Michael Johnson</div>
                                                <div class="text-muted fs-10">15, June 2024 - 11:00AM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">AlphaTech Solutions</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Proposed Amount:</span> $120,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Tech Innovations</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Emily Davis</div>
                                                <div class="text-muted fs-10">10, June 2024 - 09:30AM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">BetaTech Innovations</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Estimated Budget:</span> $150,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">Tech Solutions Ltd.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2" id="deal-finalized">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Emma Thompson</div>
                                                <div class="text-muted fs-10">25, June 2024 - 03:45PM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">Delta Dynamics</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Amount:</span> $120,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">TechStar Innovations</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3"> 
                                        <div class="d-flex align-items-center gap-1 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <div class="">Sophia Garcia</div>
                                                <div class="text-muted fs-10">18, June 2024 - 09:30AM</div>
                                            </div>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fw-medium mb-1 fs-14">Completed Gamma Technologies</p>
                                    <p class="fw-medium"><span class="text-muted fw-normal">Investment:</span> $85,000</p>
                                    <div class="deal-description">
                                        <div class="">
                                            <a href="javascript:void(0);" class="company-name">TechSolutions Inc.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start:: New Deal -->
                    <div class="modal fade" id="create-contact" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">New Deal</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row gy-3">
                                        <div class="col-xl-12">
                                            <div class="mb-0 text-center">
                                                <span class="avatar avatar-xxl avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="" id="profile-img">
                                                    <span class="badge rounded-pill bg-primary avatar-badge">
                                                        <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                                        <i class="fe fe-camera"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="deal-name" class="form-label">Contact Name</label>
                                            <input type="text" class="form-control" id="deal-name" placeholder="Contact Name">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="deal-lead-score" class="form-label">Deal Value</label>
                                            <input type="number" class="form-control" id="deal-lead-score" placeholder="Deal Value">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="company-name" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="company-name" placeholder="Company Name">
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label">Last Contacted</label>
                                            <div class="input-group">
                                                <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                <input type="text" class="form-control" id="targetDate" placeholder="Choose date and time">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Create Deal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: New Deal -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Dragula JS -->
        <script src="<?php echo base_url('assets/libs/dragula/dragula.min.js'); ?>"></script>

        <!-- Flat Picker JS -->
        <script src="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.js'); ?>"></script>

        <!-- CRM Deals JS -->
        <script src="<?php echo base_url('assets/js/crm-deals.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>