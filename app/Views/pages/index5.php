
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
                                    <li class="breadcrumb-item active" aria-current="page">HRM</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">HRM</h1>
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

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="m-3 bg-light rounded-1 border">
                                    <div class="card-body pb-4 mb-2">
                                        <div class="d-flex align-items-center w-100 justify-content-between gap-1">
                                            <div>
                                                <p class="mb-1 text-muted fw-medium">Total Employees</p>
                                                <h4 class="mb-0 fw-medium">12,116</h4>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <span class="badge bg-success rounded-pill align-items-center fs-11"><i class="ri-arrow-left-up-line fs-11"></i> 2.5%</span>
                                                <div class="text-muted fs-12 mt-1">Increased from last year</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="employees"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="m-3 bg-light rounded-1 border">
                                    <div class="card-body pb-4 mb-2">
                                        <div class="d-flex align-items-center w-100 justify-content-between gap-1">
                                            <div>
                                                <p class="mb-1 text-muted fw-medium">Total Job Applied</p>
                                                <h4 class="mb-0 fw-medium">15,784</h4>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <span class="badge bg-danger rounded-pill align-items-center fs-11"><i class="ri-arrow-left-down-line fs-11"></i> 1.5%</span>
                                                <div class="text-muted fs-12 mt-1">Decreased from last year</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="job-applied"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="m-3 bg-light rounded-1 border">
                                    <div class="card-body pb-4 mb-2">
                                        <div class="d-flex align-items-center w-100 justify-content-between gap-1">
                                            <div>
                                                <p class="mb-1 text-muted fw-medium">Total Compensation</p>
                                                <h4 class="mb-0 fw-medium">$56,784</h4>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <span class="badge bg-success rounded-pill align-items-center fs-11"><i class="ri-arrow-left-up-line fs-11"></i> 6.0%</span>
                                                <div class="text-muted fs-12 mt-1">Increased from last year</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="total-payouts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="m-3 bg-light rounded-1 border">
                                    <div class="card-body pb-4 mb-2">
                                        <div class="d-flex align-items-center w-100 justify-content-between gap-1">
                                            <div>
                                                <p class="mb-1 text-muted fw-medium">Annual Compensation </p>
                                                <h4 class="mb-0 fw-medium">$6.8k</h4>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <span class="badge bg-success rounded-pill align-items-center fs-11"><i class="ri-arrow-left-up-line fs-11"></i> 6.0%</span>
                                                <div class="text-muted fs-12 mt-1">Increased from last year</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="gross-salary"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xxl-8">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Project Analysis</div>
                                    <div class="d-flex gap-2">
                                        <div class="btn btn-sm btn-outline-light">Today</div>
                                        <div class="btn btn-sm btn-outline-light">Weakly</div>
                                        <div class="btn btn-sm btn-light">Yearly</div>
                                    </div>
                                </div>
                                <div class="card-body pb-1">
                                    <ul class="d-flex flex-wrap mb-0 list-unstyled gap-5 justify-content-around p-3 border rounded border-dashed">
                                        <li>
                                            <div class="d-flex align-items-start justify-content-between gap-2">
                                                <div class="lh-1 me-1">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary-transparent">
                                                        <i class="ri-stack-line fs-5"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block mb-1 fw-medium text-muted">New</span>
                                                    <h4 class="fw-medium mb-0">64,241</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="d-flex align-items-start justify-content-between gap-2">
                                                <div class="lh-1 me-1">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary1-transparent">
                                                        <i class="ri-rocket-line fs-5"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block mb-1 fw-medium text-muted">Inprogress</span>
                                                    <h4 class="fw-medium mb-0">1,543</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="d-flex align-items-start justify-content-between gap-2">
                                                <div class="lh-1 me-1">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary2-transparent">
                                                        <i class="ri-check-line fs-5"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block mb-1 fw-medium text-muted">Completed</span>
                                                    <h4 class="fw-medium mb-0">3,848</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="d-flex align-items-start justify-content-between gap-2">
                                                <div class="lh-1 me-1">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary3-transparent">
                                                        <i class="ri-time-line fs-5"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block mb-1 fw-medium text-muted">Onhold</span>
                                                    <h4 class="fw-medium mb-0">938</h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div id="project-analysis"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Upcoming Events</div>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-primary-light">
                                        View All
                                    </a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled timeline-widget1 mb-0">
                                        <li class="timeline-widget-list">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="avatar avatar-xl bg-primary-transparent me-2 flex-shrink-0"> 
                                                    <div class="text-center">
                                                        <div class=" fw-medium lh-1 mb-1">02</div>
                                                        <div class="fs-12 text-default fw-medium lh-1">Mon</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between flex-xl-nowrap">
                                                    <div class="events-width">
                                                        <p class="mb-1 timeline-widget-content">You have an announcement - Ipsum Est Diam Eirmod</p>
                                                        <p class="mb-0 fs-12 lh-1 text-muted">10:00AM<span class="badge bg-primary-transparent ms-2">Announcement</span></p>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="avatar avatar-xl bg-primary1-transparent me-2 flex-shrink-0"> 
                                                    <div class="text-center">
                                                        <div class=" fw-medium lh-1 mb-1">08</div>
                                                        <div class="fs-12 text-default fw-medium lh-1">Tue</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between flex-xl-nowrap">
                                                    <div class="events-width">
                                                        <p class="mb-1 timeline-widget-content ">National holiday - Vero Jayanti</p>
                                                        <p class="mb-0 fs-12 lh-1 text-muted"><span class="badge bg-warning-transparent">Holiday</span></p>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="avatar avatar-xl bg-primary2-transparent me-2 flex-shrink-0"> 
                                                    <div class="text-center">
                                                        <div class=" fw-medium lh-1 mb-1">12</div>
                                                        <div class="fs-12 text-default fw-medium lh-1">Wed</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between flex-xl-nowrap">
                                                    <div class="events-width">
                                                        <p class="mb-1 timeline-widget-content">John pup birthday - Team Member</p>
                                                        <p class="mb-2 fs-12 lh-1 text-muted">09:00AM<span class="badge bg-success-transparent ms-2">Birthday</span></p>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="avatar avatar-xl bg-primary3-transparent me-2 flex-shrink-0"> 
                                                    <div class="text-center">
                                                        <div class=" fw-medium lh-1 mb-1">20</div>
                                                        <div class="fs-12 text-default fw-medium lh-1">Thu</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between flex-xl-nowrap">
                                                    <div class="events-width">
                                                        <p class="mb-1 timeline-widget-content">National Holiday - Dolore Ipsum</p>
                                                        <p class="mb-0 fs-12 lh-1 text-muted"><span class="badge bg-warning-transparent">Holiday</span></p>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="avatar avatar-xl bg-warning-transparent me-2 flex-shrink-0"> 
                                                    <div class="text-center">
                                                        <div class=" fw-medium lh-1 mb-1">12</div>
                                                        <div class="fs-12 text-default fw-medium lh-1">Wed</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between flex-xl-nowrap">
                                                    <div class="events-width">
                                                        <p class="mb-1 timeline-widget-content ">Amet sed no dolor kasd - Et Dolores Tempor Erat</p>
                                                        <p class="mb-0 fs-12 lh-1 text-muted">04:00PM<span class="badge bg-primary-transparent ms-2">Announcement</span></p>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="avatar avatar-xl bg-secondary-transparent me-2 flex-shrink-0"> 
                                                    <div class="text-center">
                                                        <div class=" fw-medium lh-1 mb-1">21</div>
                                                        <div class="fs-12 text-default fw-medium lh-1">Fri</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap flex-fill align-items-top justify-content-between flex-xl-nowrap">
                                                    <div class="events-width">
                                                        <p class="mb-1 timeline-widget-content">John pup birthday - Team Member</p>
                                                        <p class="mb-2 fs-12 lh-1 text-muted">09:00AM<span class="badge bg-success-transparent ms-2">Birthday</span></p>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xxl-5">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Employee's Leave</div>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light">View All</a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Employee</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Days</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Start Date</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 fs-12 fw-medium">Socrates Itumay</p>
                                                                <a href="javascript:void(0);" class="fs-11 text-muted">Team Lead</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Sick</span>
                                                    </td>
                                                    <td>
                                                        <span class="">2 Days</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Approved</span>
                                                    </td>
                                                    <td>
                                                        <span class="fs-12">30-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm">
                                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 fs-12 fw-medium">Samantha Paul</p>
                                                                <a href="javascript:void(0);" class="fs-11 text-muted">Sr.UI Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Casual</span>
                                                    </td>
                                                    <td>
                                                        <span class="">1 Day</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Pending</span>
                                                    </td>
                                                    <td>
                                                        <span class="fs-12">29-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm">
                                                                <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 fs-12 fw-medium">Gray Noal</p>
                                                                <a href="javascript:void(0);" class="fs-11 text-muted">Java Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Paternity</span>
                                                    </td>
                                                    <td>
                                                        <span class="">5 Days</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Approved</span>
                                                    </td>
                                                    <td>
                                                        <span class="fs-12">28-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm">
                                                                <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 fs-12 fw-medium">Gray Noal</p>
                                                                <a href="javascript:void(0);" class="fs-11 text-muted">React Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Personal</span>
                                                    </td>
                                                    <td>
                                                        <span class="">2 Days</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">Rejected</span>
                                                    </td>
                                                    <td>
                                                        <span class="fs-12">27-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 fs-12 fw-medium">Emiley Jackson</p>
                                                                <a href="javascript:void(0);" class="fs-11 text-muted">Full Stack Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Maternity</span>
                                                    </td>
                                                    <td>
                                                        <span class="">2 Days</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Approved
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="fs-12">26-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm">
                                                                <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 fs-12 fw-medium">Pope Johnson</p>
                                                                <a href="javascript:void(0);" class="fs-11 text-muted">Jr.Java Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Gifted</span>
                                                    </td>
                                                    <td>
                                                        <span class="">2 Days</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Pending
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="fs-12">25-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                    Today's Interviews 
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm">View All</a>
                                    </div>
                                </div>
                                <div class="card-body py-3">
                                    <ul class="list-unstyled mb-0 schedule-list">
                                        <li>
                                            <div class="d-flex align-items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-danger-transparent">
                                                        <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill ms-2">
                                                    <p class="fw-medium mb-0">Anurag Batiya</p>
                                                    <p class="fs-11 text-muted mb-0 text-nowrap text-truncate w-75"><i class="ri-time-line me-1"></i>03 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="btn btn-primary btn-sm text-nowrap">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-primary1-transparent">
                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill ms-2">
                                                    <p class="fw-medium mb-0">Project Meeting</p>
                                                    <p class="fs-11 text-muted mb-0 text-nowrap text-truncate w-75"><i class="ri-time-line me-1"></i>04 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="btn btn-primary btn-sm text-nowrap">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-primary2-transparent">
                                                        <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill ms-2">
                                                    <p class="fw-medium mb-0">Team Meeting</p>
                                                    <p class="fs-11 text-muted mb-0 text-nowrap text-truncate w-75"><i class="ri-time-line me-1"></i>05 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="btn btn-primary btn-sm text-nowrap">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-primary3-transparent">
                                                        <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill ms-2">
                                                    <p class="fw-medium mb-0">Client Meeting</p>
                                                    <p class="fs-11 text-muted mb-0 text-nowrap text-truncate w-75"><i class="ri-time-line me-1"></i>06 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="btn btn-primary btn-sm text-nowrap">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-secondary-transparent">
                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill ms-2">
                                                    <p class="fw-medium mb-0">Client Meeting</p>
                                                    <p class="fs-11 text-muted mb-0 text-nowrap text-truncate w-75"><i class="ri-time-line me-1"></i>06 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="btn btn-primary btn-sm text-nowrap">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-success-transparent">
                                                        <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill ms-2">
                                                    <p class="fw-medium mb-0">Team Meeting</p>
                                                    <p class="fs-11 text-muted mb-0 text-nowrap text-truncate w-75"><i class="ri-time-line me-1"></i>05 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="btn btn-primary btn-sm text-nowrap">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center flex-wrap flex-xl-nowrap gap-1">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md avatar-rounded p-1 bg-info-transparent">
                                                        <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill ms-2">
                                                    <p class="fw-medium mb-0">Project Meeting</p>
                                                    <p class="fs-11 text-muted mb-0 text-nowrap text-truncate w-75"><i class="ri-time-line me-1"></i>04 May(9.00am-10.00am)</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <button type="button" class="btn btn-primary btn-sm text-nowrap">Call Now</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Gender Distribution
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm">View All</a>
                                    </div>
                                </div>
                                <div class="card-body text-center mx-auto">
                                    <div id="gender-chart"></div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <ul class="d-flex flex-wrap mb-0 list-unstyled justify-content-around text-center gap-2">
                                        <li>
                                            <div>
                                                <div class="lh-1 me-1 mb-2">
                                                    <span class="avatar avatar-md bg-primary-transparent border border-primary border-3 border-opacity-25 avatar-rounded">
                                                        <i class="ri-stack-line fs-17 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block mb-0 text-muted fs-12">Attendance</span>
                                                    <h5 class="fw-medium mb-0">4,241</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="lh-1 me-1 mb-2">
                                                    <span class="avatar avatar-md bg-primary1-transparent border border-primary1 border-3 border-opacity-25 avatar-rounded">
                                                        <i class="ri-calendar-todo-line fs-17 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block mb-0 text-muted fs-12">Absent</span>
                                                    <h5 class="fw-medium mb-0">485</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="lh-1 me-1 mb-2">
                                                    <span class="avatar avatar-md bg-primary2-transparent border border-primary2 border-3 border-opacity-25 avatar-rounded">
                                                        <i class="ri-time-line fs-17 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block mb-0 text-muted fs-12">Late</span>
                                                    <h5 class="fw-medium mb-0">08</h5>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Employee Directory
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="me-3 my-1">
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=" example">
                                        </div>
                                        <div class="dropdown my-1">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1"></i>
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
                                        <table class="table table-hover text-nowrap table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center">S.No</th>
                                                    <th scope="col">Employee Id</th>
                                                    <th scope="col">Employee Name</th>
                                                    <th scope="col">Position</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Contact</th>
                                                    <th scope="col">Salary</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">
                                                        01
                                                    </td>
                                                    <td>
                                                    <span class="text-primary fs-14">#emp23520</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="fs-13 fw-medium">Richard Dom</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Team Leader</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Backend</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">richard116@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Active</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+0987654321</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$15,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="g-2">
                                                            <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                <span class="ri-pencil-line fs-14"></span>
                                                            </a>
                                                            <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                <span class="ri-delete-bin-7-line fs-14"></span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        02
                                                    </td>
                                                    <td>
                                                    <span class="text-primary fs-14">#emp23521</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="fs-13 fw-medium">Kakashra Sri</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Web Developer</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Front End</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">Kakashra987@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Active</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+0986548761</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$20,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="g-2">
                                                            <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                <span class="ri-pencil-line fs-14"></span>
                                                            </a>
                                                            <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                <span class="ri-delete-bin-7-line fs-14"></span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        03
                                                    </td>
                                                    <td>
                                                    <span class="text-primary fs-14">#emp23522</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="fs-13 fw-medium">Nikki Jey</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Project Manager</span>
                                                    </td>
                                                    <td>
                                                        <span class="">HR</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">Nikki654@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">On Leave</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+0986548787</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$25,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="g-2">
                                                            <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                <span class="ri-pencil-line fs-14"></span>
                                                            </a>
                                                            <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                <span class="ri-delete-bin-7-line fs-14"></span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        04
                                                    </td>
                                                    <td>
                                                    <span class="text-primary fs-14">#emp23523</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="fs-13 fw-medium">Sasukey Ahuhi</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Project Manager</span>
                                                    </td>
                                                    <td>
                                                        <span class="">HR</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">Sasukey986@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Active</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+0986548788</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$30,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="g-2">
                                                            <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                <span class="ri-pencil-line fs-14"></span>
                                                            </a>
                                                            <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                <span class="ri-delete-bin-7-line fs-14"></span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        05
                                                    </td>
                                                    <td>
                                                    <span class="text-primary fs-14">#emp23524</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="fs-13 fw-medium">Xiong Yu</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">UI Developer</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Engineering</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">Xiongu987@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Active</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+0986548988</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$35,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="g-2">
                                                            <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                <span class="ri-pencil-line fs-14"></span>
                                                            </a>
                                                            <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                <span class="ri-delete-bin-7-line fs-14"></span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        06
                                                    </td>
                                                    <td>
                                                    <span class="text-primary fs-14">#emp23525</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="fs-13 fw-medium">Arifa Zed</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Team Member</span>
                                                    </td>
                                                    <td>
                                                        <span class="">IT</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">Arifa432@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">Resigned</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+0986548985</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$40,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="g-2">
                                                            <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                <span class="ri-pencil-line fs-14"></span>
                                                            </a>
                                                            <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                <span class="ri-delete-bin-7-line fs-14"></span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        07
                                                    </td>
                                                    <td>
                                                    <span class="text-primary fs-14">#emp23526</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" class="avatar avatar-sm" alt="">
                                                            <div class="flex-1 flex-between pos-relative ms-2">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="fs-13 fw-medium">Jennifer Tab</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">Project Manager</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Front End</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">Jennifer543@demo.com</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Active</span>
                                                    </td>
                                                    <td>
                                                        <span class="">+09865489987</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$45,000</span>
                                                    </td>
                                                    <td>
                                                        <div class="g-2">
                                                            <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                <span class="ri-pencil-line fs-14"></span>
                                                            </a>
                                                            <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                <span class="ri-delete-bin-7-line fs-14"></span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-medium align-middle"></i>
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
                    </div>
                    <!-- End:: row-4 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- HRM Dashboard --> 
        <script src="<?php echo base_url('assets/js/hrm-dashboard.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
