
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
                                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Projects</h1>
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
                        <div class="col-xxl-5">
                            <div class="card custom-card main-dashboard-banner project-dashboard-banner overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="row justify-content-between">
                                        <div class="col-xxl-8 col-xl-5 col-lg-5 col-md-5 col-sm-5">
                                            <h4 class="mb-1 fw-medium text-fixed-white">Manage Projects</h4>
                                            <p class="mb-3 text-fixed-white op-7">Manage projects effortlessly with our one-click solution, streamlining your workflow.</p>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-primary1">Manage Now<i class="ti ti-arrow-narrow-right align-middle"></i></a>
                                        </div>
                                        <div class="col-xxl-4 col-xl-7 col-lg-7 col-md-7 col-sm-7 d-sm-block d-none text-end my-auto">
                                            <img src="<?php echo base_url('assets/images/media/media-85.png'); ?>" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Team 
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light">View All</a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Works</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Tasks</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="top-selling">
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <span class="d-block fw-semibold">Richard Dom</span>
                                                                <a href="javascript:void(0);" class="text-muted fs-12">Team Leader</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">457</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Online</span>
                                                    </td>
                                                    <td>
                                                        <span class="">564/ <span class="text-muted">1145</span></span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Assign" class="btn btn-icon btn-sm rounded-pill mb-0 btn-primary-light"><i class="ti ti-user-plus align-middle"></i></a>
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Mail" class="btn btn-icon btn-sm rounded-pill mb-0 btn-info-light"><i class="ti ti-at align-middle"></i></a>
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill mb-0 btn-primary2-light"><i class="ti ti-eye align-middle"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <span class="d-block fw-semibold">Jennifer Tab</span>
                                                                <a href="javascript:void(0);" class="text-muted fs-12">Project Manager</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">965</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Online</span>
                                                    </td>
                                                    <td>
                                                        <span class="">1,754/ <span class="text-muted">2145</span></span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Assign" class="btn btn-icon btn-sm rounded-pill mb-0 btn-primary-light"><i class="ti ti-user-plus align-middle"></i></a>
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Mail" class="btn btn-icon btn-sm rounded-pill mb-0 btn-info-light"><i class="ti ti-at align-middle"></i></a>
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill mb-0 btn-primary2-light"><i class="ti ti-eye align-middle"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <span class="d-block fw-semibold">Nikki Jey</span>
                                                                <a href="javascript:void(0);" class="text-muted fs-12">UI Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">647</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">Offline</span>
                                                    </td>
                                                    <td>
                                                        <span class="">631/ <span class="text-muted">1145</span></span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Assign" class="btn btn-icon btn-sm rounded-pill mb-0 btn-primary-light"><i class="ti ti-user-plus align-middle"></i></a>
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Mail" class="btn btn-icon btn-sm rounded-pill mb-0 btn-info-light"><i class="ti ti-at align-middle"></i></a>
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill mb-0 btn-primary2-light"><i class="ti ti-eye align-middle"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/21.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <span class="d-block fw-semibold">Arifa Zed</span>
                                                                <a href="javascript:void(0);" class="text-muted fs-12">Web Developer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">983</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Online</span>
                                                    </td>
                                                    <td>
                                                        <span class="">502/ <span class="text-muted">1236</span></span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Assign" class="btn btn-icon btn-sm rounded-pill mb-0 btn-primary-light"><i class="ti ti-user-plus align-middle"></i></a>
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Mail" class="btn btn-icon btn-sm rounded-pill mb-0 btn-info-light"><i class="ti ti-at align-middle"></i></a>
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill mb-0 btn-primary2-light"><i class="ti ti-eye align-middle"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <span class="d-block fw-semibold">Xiong Yu</span>
                                                                <a href="javascript:void(0);" class="text-muted fs-12">Team Member</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">631</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Online</span>
                                                    </td>
                                                    <td>
                                                        <span class="">360/ <span class="text-muted">457</span></span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Assign" class="btn btn-icon btn-sm rounded-pill mb-0 btn-primary-light"><i class="ti ti-user-plus align-middle"></i></a>
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Mail" class="btn btn-icon btn-sm rounded-pill mb-0 btn-info-light"><i class="ti ti-at align-middle"></i></a>
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill mb-0 btn-primary2-light"><i class="ti ti-eye align-middle"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border-bottom-0">
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <span class="d-block fw-semibold">Emanuel Gen</span>
                                                                <a href="javascript:void(0);" class="text-muted fs-12">Project Manager</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <span class="fw-medium">478</span>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <span class="badge bg-danger-transparent">Offline</span>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <span class="">558/ <span class="text-muted">698</span></span>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Assign" class="btn btn-icon btn-sm rounded-pill mb-0 btn-primary-light"><i class="ti ti-user-plus align-middle"></i></a>
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Mail" class="btn btn-icon btn-sm rounded-pill mb-0 btn-info-light"><i class="ti ti-at align-middle"></i></a>
                                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill mb-0 btn-primary2-light"><i class="ti ti-eye align-middle"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <div class="row">
                                <div class="col-xxl-3 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="mb-3 d-flex align-items-start justify-content-between">
                                                <span class="avatar avatar-sm bg-primary svg-white">
                                                    <i class="ri-pages-line fs-16"></i>
                                                </span>
                                                <span class="badge bg-danger-transparent">-5.20%</span>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                <div class="flex-shrink-0">
                                                    <div class="text-muted mb-1">New Projects</div>
                                                    <h4 class="mb-0 fs-20 fw-medium">432</h4>
                                                </div>
                                                <div id="Projects-2" class="flex-shrink-0 text-end ms-auto"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="mb-3 d-flex align-items-start justify-content-between">
                                                <span class="avatar avatar-sm bg-primary1 svg-white">
                                                    <i class="ri-check-double-line fs-16"></i>
                                                </span>
                                                <span class="badge bg-success-transparent">+7.20%</span>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                <div class="flex-shrink-0">
                                                    <div class="text-muted mb-1">Completed</div>
                                                    <h4 class="mb-0 fs-20 fw-medium">122</h4>
                                                </div>
                                                <div id="Projects-1" class="flex-shrink-0 text-end ms-auto"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="mb-3 d-flex align-items-start justify-content-between">
                                                <span class="avatar avatar-sm bg-primary2 svg-white">
                                                    <i class="ri-loop-left-fill fs-16"></i>
                                                </span>
                                                <span class="badge bg-danger-transparent">-5.20%</span>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                <div class="flex-shrink-0">
                                                    <div class="text-muted mb-1">Ongoing Projects</div>
                                                    <h4 class="mb-0 fs-20 fw-medium">1,265</h4>
                                                </div>
                                                <div id="Projects-3" class="flex-shrink-0 text-end ms-auto"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="mb-3 d-flex align-items-start justify-content-between">
                                                <span class="avatar avatar-sm bg-primary3 svg-white">
                                                    <i class="ri-time-line fs-16"></i>
                                                </span>
                                                <span class="badge bg-success-transparent">+5.20%</span>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                <div class="flex-shrink-0">
                                                    <div class="text-muted mb-1">Pending Projects</div>
                                                    <h4 class="mb-0 fs-20 fw-medium">1,265</h4>
                                                </div>
                                                <div id="Projects-4" class="flex-shrink-0 text-end ms-auto"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Project Statistics</div>
                                    <div class="dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            Last Week <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Month</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex gap-5 align-items-center p-3 justify-content-around bg-light mx-2 flex-wrap flex-xl-nowrap">
                                        <div class="d-flex gap-3 align-items-center flex-wrap">
                                            <div class="avatar avatar-lg flex-shrink-0 bg-primary-transparent avatar-rounded svg-primary shadow-sm border border-primary border-opacity-25">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M184,89.57V84c0-25.08-37.83-44-88-44S8,58.92,8,84v40c0,20.89,26.25,37.49,64,42.46V172c0,25.08,37.83,44,88,44s88-18.92,88-44V132C248,111.3,222.58,94.68,184,89.57ZM232,132c0,13.22-30.79,28-72,28-3.73,0-7.43-.13-11.08-.37C170.49,151.77,184,139,184,124V105.74C213.87,110.19,232,122.27,232,132ZM72,150.25V126.46A183.74,183.74,0,0,0,96,128a183.74,183.74,0,0,0,24-1.54v23.79A163,163,0,0,1,96,152,163,163,0,0,1,72,150.25Zm96-40.32V124c0,8.39-12.41,17.4-32,22.87V123.5C148.91,120.37,159.84,115.71,168,109.93ZM96,56c41.21,0,72,14.78,72,28s-30.79,28-72,28S24,97.22,24,84,54.79,56,96,56ZM24,124V109.93c8.16,5.78,19.09,10.44,32,13.57v23.37C36.41,141.4,24,132.39,24,124Zm64,48v-4.17c2.63.1,5.29.17,8,.17,3.88,0,7.67-.13,11.39-.35A121.92,121.92,0,0,0,120,171.41v23.46C100.41,189.4,88,180.39,88,172Zm48,26.25V174.4a179.48,179.48,0,0,0,24,1.6,183.74,183.74,0,0,0,24-1.54v23.79a165.45,165.45,0,0,1-48,0Zm64-3.38V171.5c12.91-3.13,23.84-7.79,32-13.57V172C232,180.39,219.59,189.4,200,194.87Z"></path></svg>
                                            </div>
                                            <div>
                                                <span class="mb-1 d-block">Total Revenue</span> 
                                                <div class="d-flex align-items-end gap-2">
                                                    <h4 class="mb-0">$475,896</h4> 
                                                    <div class="fs-13"> 
                                                        <span class="op-7"> Increased By </span>  
                                                        <span class="badge bg-success align-middle op-9">5.6%<i class="ti ti-trending-up"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3 align-items-center flex-wrap">
                                            <div class="avatar avatar-lg flex-shrink-0 bg-primary1-transparent avatar-rounded svg-primary1 shadow-sm border border-primary1 border-opacity-25">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M230.91,172A8,8,0,0,1,228,182.91l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,36,169.09l92,53.65,92-53.65A8,8,0,0,1,230.91,172ZM220,121.09l-92,53.65L36,121.09A8,8,0,0,0,28,134.91l96,56a8,8,0,0,0,8.06,0l96-56A8,8,0,1,0,220,121.09ZM24,80a8,8,0,0,1,4-6.91l96-56a8,8,0,0,1,8.06,0l96,56a8,8,0,0,1,0,13.82l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,24,80Zm23.88,0L128,126.74,208.12,80,128,33.26Z"></path></svg>
                                            </div>
                                            <div>
                                                <span class="mb-1 d-block">Total Projects</span> 
                                                <div class="d-flex align-items-end gap-2">
                                                    <h4 class="mb-0">75,896</h4> 
                                                    <div class="fs-13"> 
                                                        <span class="op-7"> Increased By </span>  
                                                        <span class="badge bg-danger align-middle op-9">1.6%<i class="ti ti-trending-down"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="project-statistics"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xxl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Running Projects List
                                    </div>
                                    <button type="button" class="btn btn-sm btn-primary-light ">View All</button>
                                </div>
                                <div class="p-3 pb-2">
                                    <div class="d-flex align-items-start gap-3 mb-3">
                                        <div class="flex-grow-1">
                                            <p class="fw-medium mb-1 fs-14">Web application design <a href="javascript:void(0);" class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Get Info"><i class="ri-information-2-line fs-13 op-7 lh-1 align-middle"></i></a></p>
                                            <p class="text-muted mb-1 fw-normal fs-12">At vero eos et accusamus et iusto odio.</p>
                                            <div>Status: <span class="text-success fw-normal fs-12">75% completed</span></div>
                                        </div>
                                        <div class="flex-shrink-0 text-end">
                                            <p class="mb-3 fs-11 text-muted"><i class="ri-time-line  text-muted fs-11 align-middle lh-1 me-1 d-inline-block"></i>2mins ago</p>
                                            <div class="avatar-list-stacked">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="progress progress-lg rounded-pill p-1 ms-auto bg-primary-transparent" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated rounded-pill" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 pb-2">
                                    <div class="d-flex align-items-start gap-3 mb-3">
                                        <div class="flex-grow-1">
                                            <p class="fw-medium mb-1 fs-14">Designing New Template <a href="javascript:void(0);" class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Get Info"><i class="ri-information-2-line fs-13 op-7 lh-1 align-middle"></i></a></p>
                                            <p class="text-muted mb-1 fw-normal fs-12">At vero eos et accusamus et iusto odio.</p>
                                            <div>Status: <span class="text-warning fw-medium fs-12">45% completed</span></div>
                                        </div>
                                        <div class="flex-shrink-0 text-end">
                                            <p class="mb-3 fs-11 text-muted"><i class="ri-time-line  text-muted fs-11 align-middle lh-1 me-1 d-inline-block"></i>15mins ago</p>
                                            <div class="avatar-list-stacked">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="progress progress-lg rounded-pill p-1 ms-auto flex-fill bg-primary1-transparent" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary1 progress-bar-striped progress-bar-animated rounded-pill" style="width: 45%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="d-flex align-items-start gap-3 mb-3">
                                        <div class="flex-grow-1">
                                            <p class="fw-medium mb-1 fs-14">Web application design <a href="javascript:void(0);" class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Get Info"><i class="ri-information-2-line fs-13 op-7 lh-1 align-middle"></i></a></p>
                                            <p class="text-muted mb-1 fs-12">At vero eos et accusamus et iusto odio.</p>
                                            <div>Status: <span class="text-success fw-medium fs-12">65% completed</span></div>
                                        </div>
                                        <div class="flex-shrink-0 text-end">
                                            <p class="mb-3 fs-11 text-muted"><i class="ri-time-line  text-muted fs-11 align-middle lh-1 me-1 d-inline-block"></i>20mins ago</p>
                                            <div class="avatar-list-stacked">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="img">
                                                    </span>
                                                    <a class="avatar avatar-sm bg-primary border border-2  avatar-rounded text-fixed-white" href="javascript:void(0);"> 2+ </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="progress progress-lg rounded-pill p-1 ms-auto flex-fill bg-primary2-transparent" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary2 progress-bar-striped progress-bar-animated rounded-pill" style="width: 65%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Monthly Targets</div>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light">View All</a>
                                </div>
                                <div class="card-body">
                                    <div id="monthly-target">
                                    </div>
                                    <div class="d-flex gap-3 align-items-center justify-content-between text-center p-3 bg-light">
                                        <div>
                                            <span class="mb-1 d-block"><i class="ri-circle-fill fs-8 align-middle lh-1 text-primary"></i> New Projects</span> 
                                            <h6 class="mb-1">4,896</h6> 
                                            <span class="text-success fw-medium"><i class="ri-arrow-up-s-fill"></i> 3.5%</span>
                                        </div>
                                        <div>
                                            <span class="mb-1 d-block"><i class="ri-circle-fill fs-8 align-middle lh-1 text-primary1"></i> Completed</span> 
                                            <h6 class="mb-1">2,475</h6> 
                                            <span class="text-danger fw-medium"><i class="ri-arrow-down-s-fill"></i> 1.5%</span>
                                        </div>
                                        <div>
                                            <span class="mb-1 d-block"><i class="ri-circle-fill fs-8 align-middle lh-1 text-primary2"></i> Pending</span> 
                                            <h6 class="mb-1">456</h6> 
                                            <span class="text-success fw-medium"><i class="ri-arrow-up-s-fill"></i> 0.1%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Daily Tasks
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush list-unstyled">
                                        <li class="list-group-item border-bottom-0 d-flex gap-3 p-0 align-items-start mb-1">
                                            <div class="flex-shrink-0 daily-tasks-time">
                                                <span class="text-muted ms-auto fs-11 flex-shrink-0 flex-fill">09:15 AM</span>
                                            </div>
                                            <div class="card border border-primary border-opacity-25 shadow-none custom-card mb-0 bg-primary-transparent">
                                                <div class="card-body">
                                                    <p class="fw-medium mb-2 lh-1 d-flex align-items-center gap-2 justify-content-between">Home Page Design
                                                        <a aria-label="anchor" href="javascript:void(0);" class="float-end fs-16 text-primary " data-bs-title="View Details" data-bs-placement="top" data-bs-toggle="tooltip"><i class="ri-add-circle-fill"></i></a>
                                                    </p>
                                                    <div class="d-flex flex-wrap gap-2 align-items-center">
                                                        <span class="badge bg-primary-transparent">Framework</span>
                                                        <span class="badge bg-secondary-transparent">Angular</span>
                                                        <span class="badge bg-info-transparent">Php</span>
                                                        <div class="avatar-list-stacked ms-auto">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-bottom-0 d-flex gap-3 p-0 align-items-start pt-1 mb-1">
                                            <div class="flex-shrink-0 daily-tasks-time">
                                                <span class="text-muted ms-auto fs-11 flex-shrink-0 flex-fill">10:15 AM</span>
                                            </div>
                                            <div class="card border border-primary1 border-opacity-25 shadow-none custom-card mb-0 bg-primary1-transparent">
                                                <div class="card-body">
                                                    <p class="fw-medium mb-2 lh-1 d-flex align-items-center gap-2 justify-content-between">Meeting Hour
                                                        <a aria-label="anchor" href="javascript:void(0);" class="float-end fs-16 text-primary1 " data-bs-title="View Details" data-bs-placement="top" data-bs-toggle="tooltip"><i class="ri-add-circle-fill"></i></a>
                                                    </p>
                                                    <div class="d-flex flex-wrap gap-2 align-items-center">
                                                        <span class="badge bg-primary-transparent">Framework</span>
                                                        <span class="badge bg-secondary-transparent">Angular</span>
                                                        <span class="badge bg-info-transparent">Php</span>
                                                        <span class="badge bg-danger-transparent">Html</span>
                                                        <span class="badge bg-success-transparent">Laravel</span>
                                                        <div class="avatar-list-stacked ms-auto">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>  
                                        <li class="list-group-item border-bottom-0 d-flex gap-3 p-0 align-items-start pt-1 mb-1">
                                            <div class="flex-shrink-0 daily-tasks-time">
                                                <span class="text-muted ms-auto fs-11 flex-shrink-0 flex-fill">04:30 AM</span>
                                            </div>
                                            <div class="card border border-primary2 border-opacity-25 shadow-none custom-card mb-0 bg-primary2-transparent">
                                                <div class="card-body">
                                                    <p class="fw-medium mb-2 lh-1 d-flex align-items-center gap-2 justify-content-between">Projects Work Progress
                                                        <a aria-label="anchor" href="javascript:void(0);" class="float-end fs-16 text-primary2 " data-bs-title="View Details" data-bs-placement="top" data-bs-toggle="tooltip"><i class="ri-add-circle-fill"></i></a>
                                                    </p>
                                                    <div class="d-flex flex-wrap gap-2 align-items-center">
                                                        <span class="badge bg-info-transparent">Php</span>
                                                        <span class="badge bg-danger-transparent">Html</span>
                                                        <span class="badge bg-primary-transparent">Framework</span>
                                                        <div class="avatar-list-stacked ms-auto">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-bottom-0 d-flex gap-3 p-0 align-items-start pt-1 mb-0">
                                            <div class="flex-shrink-0 daily-tasks-time">
                                                <span class="text-muted ms-auto fs-11 flex-shrink-0 flex-fill">05:45 PM</span>
                                            </div>
                                            <div class="card border border-primary3 border-opacity-25 shadow-none custom-card mb-0 bg-primary3-transparent">
                                                <div class="card-body">
                                                    <p class="fw-medium mb-2 lh-1 d-flex align-items-center gap-2 justify-content-between">Status Updation by Team Leads
                                                        <a aria-label="anchor" href="javascript:void(0);" class="float-end fs-16 text-primary3 " data-bs-title="View Details" data-bs-placement="top" data-bs-toggle="tooltip"><i class="ri-add-circle-fill"></i></a>
                                                    </p>
                                                    <div class="d-flex flex-wrap gap-2 align-items-center">
                                                        <span class="badge bg-primary-transparent">Framework</span>
                                                        <span class="badge bg-secondary-transparent">Angular</span>
                                                        <span class="badge bg-info-transparent">Php</span>
                                                        <div class="avatar-list-stacked ms-auto">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                            </span>
                                                        </div>
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
                        <div class="col-xxl-9">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Projects Summary
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="me-3 my-1">
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown my-1">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
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
                                        <table class="table table-hover text-nowrap table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Poject Title</th>
                                                    <th scope="col">Tasks</th>
                                                    <th scope="col">Progress</th>
                                                    <th scope="col">Assigned Team</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Due Date</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium"> Home Page</span>
                                                    </td>
                                                    <td>210 <span class="op-7">/234</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-sm w-100" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar  bg-primary" style="width: 35%"></div>
                                                            </div>
                                                            <div class="ms-2">35%</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="img">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">In Progress</span>
                                                    </td>
                                                    <td>
                                                        14-05-2024
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-sm btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-sm btn-secondary-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill btn-sm  btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium"> Landing Design </span>
                                                    </td>
                                                    <td>162  <span class="op-8">/185</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-sm w-100" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar  bg-primary" style="width: 80%"></div>
                                                            </div>
                                                            <div class="ms-2">80%</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">In Progress</span>
                                                    </td>
                                                    <td>
                                                        20-05-2024
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-sm btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-sm btn-secondary-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill btn-sm  btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">  New Template Design</span>
                                                    </td>
                                                    <td> 10  <span class="op-7">/100</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-animate progress-sm w-100" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 10%"></div>
                                                            </div>
                                                            <div class="ms-2">10%</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" alt="img">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Pending</span>
                                                    </td>
                                                    <td>
                                                        29-05-2023
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-sm btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-sm btn-secondary-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill btn-sm  btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        4
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium"> HR Management Design </span>
                                                    </td>
                                                    <td>48 <span class="op-7">/52</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-animate progress-sm w-100" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 63%"></div>
                                                            </div>
                                                            <div class="ms-2">63%</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-xs bg-light text-default border border-2 avatar-rounded" href="javascript:void(0);">
                                                                +2
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">In Progress</span>
                                                    </td>
                                                    <td>
                                                        18-05-2024
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-sm btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-sm btn-secondary-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill btn-sm  btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        5
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">   Designing New Template</span>
                                                    </td>
                                                    <td>185 <span class="op-7">/192</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-animate progress-sm w-100" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 95%"></div>
                                                            </div>
                                                            <div class="ms-2">100%</div>
                                                        </div>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-xs bg-light text-default border border-2 avatar-rounded" href="javascript:void(0);">
                                                                +2
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Completed</span>
                                                    </td>
                                                    <td>
                                                        11-05-2024
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-sm btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-sm btn-secondary-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill btn-sm  btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        6
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">  Documentation Project </span>
                                                    </td>
                                                    <td>25 <span class="op-7">/72</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-animate progress-sm w-100" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 45%"></div>
                                                            </div>
                                                            <div class="ms-2">50%</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/21.jpg'); ?>" alt="img">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">In Progress</span>
                                                    </td>
                                                    <td>
                                                        18-05-2024
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-sm btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-sm btn-secondary-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill btn-sm  btn-danger-light"><i class="ti ti-trash"></i></a>
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
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                    Task Summary
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light">View All</a>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex gap-3 align-items-center justify-content-between p-3 bg-light mb-4">
                                        <div>
                                            <h6 class="mb-1">Tasks Completed Rate</h6>
                                            <p class="mb-0 text-muted">Within the Deadline</p>
                                        </div>
                                        <div>
                                            <h5 class="mb-0">85%<span class="badge bg-success text-fixed-white fw-medium fs-8 ms-2"><i class="ri-arrow-up-s-fill"></i> 1.5%</span></h5> 
                                        </div>
                                    </div>
                                    <div id="tasks-report">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- Projects Dashboard --> 
        <script src="<?php echo base_url('assets/js/projects-dashboard.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>