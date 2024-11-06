
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
                                    <li class="breadcrumb-item active" aria-current="page">CRM</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">CRM</h1>
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
                        <div class="col-md-6 col-lg-4 col-xl">
                            <div class="card custom-card crm-card">
                                <div class="card-body">
                                    <div class="">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="p-2 border border-primary border-opacity-10 bg-primary-transparent rounded-pill">
                                                <span class="avatar avatar-md avatar-rounded bg-primary svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path></svg>
                                                </span>
                                            </div>
                                        </div>
                                        <p class="flex-fill text-muted fs-14 mb-0">Total Leads</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h4 class="mb-0 d-flex align-items-center">1,1125</h4>
                                        <span class="text-success badge bg-success-transparent rounded-pill d-flex align-items-center fs-11 me-0 ms-2 mb-0"><i class="ri-arrow-left-up-line fs-11"></i>+2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl">
                            <div class="card custom-card crm-card">
                                <div class="card-body">
                                    <div class="">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="p-2 border border-primary1 border-opacity-10 bg-primary1-transparent rounded-circle">
                                                <span class="avatar avatar-rounded avatar-md bg-primary1 svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M205.66,61.64l-144,144a8,8,0,0,1-11.32-11.32l144-144a8,8,0,0,1,11.32,11.31ZM50.54,101.44a36,36,0,0,1,50.92-50.91h0a36,36,0,0,1-50.92,50.91ZM56,76A20,20,0,1,0,90.14,61.84h0A20,20,0,0,0,56,76ZM216,180a36,36,0,1,1-10.54-25.46h0A35.76,35.76,0,0,1,216,180Zm-16,0a20,20,0,1,0-5.86,14.14A19.87,19.87,0,0,0,200,180Z"></path></svg>
                                                </span>
                                            </div>
                                        </div>
                                        <p class="flex-fill text-muted fs-14 mb-0">Conversion Rate</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h4 class="mb-0 d-flex align-items-center">15.8% </h4>
                                        <span class="text-danger badge bg-danger-transparent rounded-pill d-flex align-items-center fs-11 me-0 ms-2 mb-0"><i class="ri-arrow-left-down-line fs-11"></i>-2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl">
                            <div class="card custom-card crm-card">
                                <div class="card-body">
                                    <div class="">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="p-2 border border-primary2 border-opacity-10 bg-primary2-transparent rounded-circle">
                                                <span class="avatar avatar-rounded avatar-md bg-primary2 svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
                                                </span>
                                            </div>
                                        </div>
                                        <p class="flex-fill text-muted fs-14 mb-0">Tasks Pending</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h4 class="mb-0 d-flex align-items-center">$3,132 </h4>
                                        <span class="text-success badge bg-success-transparent rounded-pill d-flex align-items-center fs-11 me-0 ms-2 mb-0"><i class="ri-arrow-left-up-line fs-11"></i>+2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl">
                            <div class="card custom-card crm-card">
                                <div class="card-body">
                                    <div class="">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="p-2 border border-primary3 border-opacity-10 bg-primary3-transparent rounded-circle">
                                                <span class="avatar avatar-rounded avatar-md bg-primary3 svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M232,208a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V48a8,8,0,0,1,16,0V156.69l50.34-50.35a8,8,0,0,1,11.32,0L128,132.69,180.69,80H160a8,8,0,0,1,0-16h40a8,8,0,0,1,8,8v40a8,8,0,0,1-16,0V91.31l-58.34,58.35a8,8,0,0,1-11.32,0L96,123.31l-56,56V200H224A8,8,0,0,1,232,208Z"></path></svg>
                                                </span>
                                            </div>
                                        </div>
                                        <p class="flex-fill text-muted fs-14 mb-0">Sales Pipeline</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="fs-22 fw-medium mb-0 d-flex align-items-center">$3,132 </div>
                                        <span class="text-success badge bg-success-transparent rounded-pill d-flex align-items-center fs-11 me-0 ms-2 mb-0"><i class="ri-arrow-left-up-line fs-11"></i>+2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl">
                            <div class="card custom-card crm-card">
                                <div class="card-body">
                                    <div class="">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="p-2 border border-secondary border-opacity-10 bg-secondary-transparent rounded-circle">
                                                <span class="avatar avatar-rounded avatar-md bg-secondary svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M256,136a8,8,0,0,1-8,8H232v16a8,8,0,0,1-16,0V144H200a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,256,136Zm-57.87,58.85a8,8,0,0,1-12.26,10.3C165.75,181.19,138.09,168,108,168s-57.75,13.19-77.87,37.15a8,8,0,0,1-12.25-10.3c14.94-17.78,33.52-30.41,54.17-37.17a68,68,0,1,1,71.9,0C164.6,164.44,183.18,177.07,198.13,194.85ZM108,152a52,52,0,1,0-52-52A52.06,52.06,0,0,0,108,152Z"></path></svg>
                                                </span>
                                            </div>
                                        </div>
                                        <p class="flex-fill text-muted fs-14 mb-0">New Contacts</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h4 class="mb-0 d-flex align-items-center">968</h4>
                                        <span class="text-danger badge bg-danger-transparent rounded-pill d-flex align-items-center fs-11 me-0 ms-2 mb-0"><i class="ri-arrow-left-down-line fs-11"></i>-2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->
                    
                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-md-12 col-xxl-3">
                            <div class="card custom-card overflow-hidden earnings-card card-bg-primary shadow-sm">
                                <div class="card-body p-0 text-fixed-white">
                                    <div class="p-3 position-absolute total-earnings-content w-100">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div>
                                                <span class="mb-1 d-block">Total Revenue</span> 
                                                <h4 class="mb-1 text-fixed-white">$578,784</h4> 
                                                <div class="text-fixed-white fs-13"> 
                                                    <span class="op-7"> Increased By </span>  
                                                    <span class="badge bg-primary1 align-middle op-9">7.66%<i class="ti ti-arrow-narrow-up"></i></span>
                                                </div>
                                            </div><div class="avatar avatar-lg bg-white-transparent svg-white ms-auto shadow-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M184,89.57V84c0-25.08-37.83-44-88-44S8,58.92,8,84v40c0,20.89,26.25,37.49,64,42.46V172c0,25.08,37.83,44,88,44s88-18.92,88-44V132C248,111.3,222.58,94.68,184,89.57ZM232,132c0,13.22-30.79,28-72,28-3.73,0-7.43-.13-11.08-.37C170.49,151.77,184,139,184,124V105.74C213.87,110.19,232,122.27,232,132ZM72,150.25V126.46A183.74,183.74,0,0,0,96,128a183.74,183.74,0,0,0,24-1.54v23.79A163,163,0,0,1,96,152,163,163,0,0,1,72,150.25Zm96-40.32V124c0,8.39-12.41,17.4-32,22.87V123.5C148.91,120.37,159.84,115.71,168,109.93ZM96,56c41.21,0,72,14.78,72,28s-30.79,28-72,28S24,97.22,24,84,54.79,56,96,56ZM24,124V109.93c8.16,5.78,19.09,10.44,32,13.57v23.37C36.41,141.4,24,132.39,24,124Zm64,48v-4.17c2.63.1,5.29.17,8,.17,3.88,0,7.67-.13,11.39-.35A121.92,121.92,0,0,0,120,171.41v23.46C100.41,189.4,88,180.39,88,172Zm48,26.25V174.4a179.48,179.48,0,0,0,24,1.6,183.74,183.74,0,0,0,24-1.54v23.79a165.45,165.45,0,0,1-48,0Zm64-3.38V171.5c12.91-3.13,23.84-7.79,32-13.57V172C232,180.39,219.59,189.4,200,194.87Z"></path></svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="profit-report"></div>
                                    <div id="revenue-report"></div>
                                </div>
                            </div>
                            <div class="card border border-primary2 border-opacity-25 custom-card">
                                <div class="card-body">
                                    <div class="d-flex gap-2 align-items-center my-1">
                                        <div>
                                            <span class="mb-1 d-block">Total Profit</span> 
                                            <h4 class="mb-1">$37,566</h4> 
                                            <div class="text-muted fs-13"> 
                                                <span class=""> Increased By </span>  
                                                <span class="badge bg-primary3 align-middle">5.66%<i class="ti ti-arrow-narrow-up"></i></span>
                                            </div>
                                        </div>
                                        <div class="avatar avatar-lg bg-primary2-transparent svg-primary2 ms-auto shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M230.33,141.06a24.43,24.43,0,0,0-21.24-4.23l-41.84,9.62A28,28,0,0,0,140,112H89.94a31.82,31.82,0,0,0-22.63,9.37L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56ZM16,160H40v40H16Zm203.43,8.21-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9ZM164,96a36,36,0,0,0,5.9-.48,36,36,0,1,0,28.22-47A36,36,0,1,0,164,96Zm60-12a20,20,0,1,1-20-20A20,20,0,0,1,224,84ZM164,40a20,20,0,0,1,19.25,14.61,36,36,0,0,0-15,24.93A20.42,20.42,0,0,1,164,80a20,20,0,0,1,0-40Z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xxl-6">
                            <div class="card custom-card ">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Sales Overview</div>
                                    <div class="d-flex gap-2">
                                        <div class="btn btn-sm btn-outline-light">Today</div>
                                        <div class="btn btn-sm btn-outline-light">Weakly</div>
                                        <div class="btn btn-sm btn-light">Yearly</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="sales-overview-crm"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Profit By Sale</div>
                                    <div class="dropdown"> 
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light text-muted dropdown-toggle" data-bs-toggle="dropdown"> Sort By</a> 
                                        <ul class="dropdown-menu"> 
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li> 
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li> 
                                        </ul> 
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-group-item border-0 p-0 mb-4">
                                            <div class="d-flex justify-content-between align-items-top">
                                                <div class="d-flex">
                                                    <span class="avatar avatar-rounded avatar-md bg-primary-transparent"><i
                                                            class='bx bx-wallet-alt fs-18'></i></span>
                                                    <div class="d-flex flex-column ms-2">
                                                        <p class="fw-medium mb-0">Total Sales</p>
                                                        <p class="fs-12 text-muted mb-0">10% Increases</p>
                                                    </div>
                                                </div>
                                                <h6 class="fw-medium mb-0">$12,345</h6>
                                            </div>
                                            <div class="progress progress-xs mt-2 mb-0" role="progressbar" aria-label="Basic example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 p-0 mb-4">
                                            <div class="d-flex justify-content-between align-items-top">
                                                <div class="d-flex">
                                                    <span
                                                        class="avatar avatar-md avatar-rounded bg-secondary-transparent"><i
                                                            class='bx bx-money-withdraw fs-18'></i></span>
                                                    <div class="d-flex flex-column ms-2">
                                                        <p class="fw-medium mb-0">Total Profit</p>
                                                        <p class="fs-12 text-muted mb-0">12% Increases</p>
                                                    </div>
                                                </div>
                                                <h6 class="fw-medium mb-0">$9,345</h6>
                                            </div>
                                            <div class="progress progress-xs mt-2 mb-0" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 75%"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 p-0 mb-4">
                                            <div class="d-flex justify-content-between align-items-top">
                                                <div class="d-flex">
                                                    <span class="avatar avatar-md avatar-rounded bg-primary1-transparent"><i
                                                            class='bx bx-money-withdraw fs-18'></i></span>
                                                    <div class="d-flex flex-column ms-2">
                                                        <p class="fw-medium mb-0">Total Revenue</p>
                                                        <p class="fs-12 text-muted mb-0">11% Decrease</p>
                                                    </div>
                                                </div>
                                                <h6 class="fw-medium mb-0">$9,345</h6>
                                            </div>
                                            <div class="progress progress-xs mt-2 mb-0" role="progressbar" aria-label="Basic example" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary1" style="width: 78%"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 p-0 mb-2">
                                            <div class="d-flex justify-content-between align-items-top">
                                                <div class="d-flex">
                                                    <span class="avatar avatar-md avatar-rounded bg-primary2-transparent"><i
                                                            class='bx bx-money-withdraw fs-18'></i></span>
                                                    <div class="d-flex flex-column ms-2">
                                                        <p class="fw-medium mb-0">Total loss</p>
                                                        <p class="fs-12 text-muted mb-0">11% Decrease</p>
                                                    </div>
                                                </div>
                                                <h6 class="fw-medium mb-0">$11,345</h6>
                                            </div>
                                            <div class="progress progress-xs mt-2 mb-0" role="progressbar" aria-label="Basic example" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary2" style="width: 68%"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="row">
                        <div class="col-xxl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Tasks List
                                    </div>
                                    <div>
                                        <ul class="nav nav-tabs justify-content-end nav-tabs-header card-headertabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#today" aria-selected="true">Today</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#Upcoming" aria-selected="false" tabindex="-1">Upcoming</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body todo-tab p-0">
                                    <div class="tab-content">
                                        <div class="tab-pane border-0 active show" id="today" role="tabpanel">
                                            <ul class="list-unstyled task-list-tab mb-0">
                                                <li>
                                                    <div class="todolist d-flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-fill w-100">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <span class="d-block fw-medium">Review Marketing Campaign Strategy
                                                                        <i class="ri-hourglass-line bg-primary-transparent p-1 align-middle fs-10 lh-1 rounded-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Progress"></i>
                                                                    </span>
                                                                    <p class="text-muted mb-0 fs-12">Nemo enim ipsam voluptatem</p>
                                                                </div>
                                                                <div class="d-flex gap-1">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="ti ti-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist d-flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input" checked="">
                                                        </div>
                                                        <div class="flex-fill w-100">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <span class="d-block fw-medium">Update Client Database
                                                                        <i class="ri-check-fill bg-success-transparent p-1 align-middle fs-10 lh-1 rounded-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Completed"></i>
                                                                    </span>
                                                                    <p class="text-muted mb-0 fs-12">Eos dolor ea</p>
                                                                </div>
                                                                <div class="d-flex gap-1">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="ti ti-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist d-flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-fill w-100">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <span class="d-block fw-medium">Prepare Monthly Sales Report
                                                                        <i class="ri-error-warning-line bg-primary1-transparent p-1 align-middle fs-11 lh-1 rounded-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Pending"></i>
                                                                    </span>
                                                                    <p class="text-muted mb-0 fs-12">Nonumy erat ipsum ut ipsum</p>
                                                                </div>
                                                                <div class="d-flex gap-1">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="ti ti-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist d-flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input" checked>
                                                        </div>
                                                        <div class="flex-fill w-100">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <span class="d-block fw-medium">Schedule Team Meeting
                                                                        <i class="ri-check-fill bg-success-transparent p-1 align-middle fs-10 lh-1 rounded-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Completed"></i>
                                                                    </span>
                                                                    <p class="text-muted mb-0 fs-12">Nemo enim ipsam voluptatem</p>
                                                                </div>
                                                                <div class="d-flex gap-1">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="ti ti-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist d-flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-fill w-100">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <span class="d-block fw-medium">Update User Database
                                                                        <i class="ri-hourglass-line bg-primary-transparent p-1 align-middle fs-10 lh-1 rounded-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Progress"></i>
                                                                    </span>
                                                                    <p class="text-muted mb-0 fs-12">Eos dolor ea</p>
                                                                </div>
                                                                <div class="d-flex gap-1">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="ti ti-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist d-flex">
                                                        <div class="mb-3 form-check me-2">
                                                            <input type="checkbox" class="form-check-input" checked="">
                                                        </div>
                                                        <div class="flex-fill w-100">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <span class="d-block fw-medium">Respond to Customer Inquiries
                                                                        <i class="ri-check-fill bg-success-transparent p-1 align-middle fs-10 lh-1 rounded-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Completed"></i>
                                                                    </span>
                                                                    <p class="text-muted mb-0 fs-12">Sed labore ut sed</p>
                                                                </div>
                                                                <div class="d-flex gap-1">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="ti ti-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane border-0" id="Upcoming" role="tabpanel">
                                            <ul class="list-unstyled task-list-tab mb-0">
                                                <li>
                                                    <div class="todolist d-flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-fill w-100">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <span class="d-block fw-medium">Conduct Product Demo Sessions
                                                                        <i class="ri-time-line bg-primary3-transparent p-1 align-middle fs-10 lh-1 rounded-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Not Started"></i>
                                                                    </span>
                                                                    <p class="text-muted mb-0 fs-12">Nonumy erat ipsum ut ipsum</p>
                                                                </div>
                                                                <div class="d-flex gap-1">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="ti ti-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist d-flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-fill w-100">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <span class="d-block fw-medium">Organize Training Session
                                                                        <i class="ri-time-line bg-primary3-transparent p-1 align-middle fs-10 lh-1 rounded-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Not Started"></i>
                                                                    </span>
                                                                    <p class="text-muted mb-0 fs-12">Consetetur et amet dolor</p>
                                                                </div>
                                                                <div class="d-flex gap-1">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="ti ti-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist d-flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-fill w-100">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <span class="d-block fw-medium">Analyze Market Trends
                                                                        <i class="ri-time-line bg-primary3-transparent p-1 align-middle fs-10 lh-1 rounded-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Not Started"></i>
                                                                    </span>
                                                                    <p class="text-muted mb-0 fs-12">Nonumy erat ipsum ut ipsum</p>
                                                                </div>
                                                                <div class="d-flex gap-1">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="ti ti-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist d-flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-fill w-100">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <span class="d-block fw-medium">Coordinate with Logistics Department
                                                                        <i class="ri-time-line bg-primary3-transparent p-1 align-middle fs-10 lh-1 rounded-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Not Started"></i>
                                                                    </span>
                                                                    <p class="text-muted mb-0 fs-12">Nonumy erat ipsum ut ipsum</p>
                                                                </div>
                                                                <div class="d-flex gap-1">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="ti ti-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist d-flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-fill w-100">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <span class="d-block fw-medium">Meeting On Updation
                                                                        <i class="ri-time-line bg-primary3-transparent p-1 align-middle fs-10 lh-1 rounded-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Not Started"></i>
                                                                    </span>
                                                                    <p class="text-muted mb-0 fs-12">Nonumy erat ipsum ut ipsum</p>
                                                                </div>
                                                                <div class="d-flex gap-1">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="ti ti-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="todolist  d-flex">
                                                        <div class="mb-3 form-check  me-2">
                                                            <input type="checkbox" class="form-check-input">
                                                        </div>
                                                        <div class="flex-fill w-100">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <span class="d-block fw-medium">Plan Social Media Content Calendar
                                                                        <i class="ri-time-line bg-primary3-transparent p-1 align-middle fs-10 lh-1 rounded-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Completed"></i>
                                                                    </span>
                                                                    <p class="text-muted mb-0 fs-12">Accusam aliquyam ea sea</p>
                                                                </div>
                                                                <div class="d-flex gap-1">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="ti ti-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light btn-icon" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="ti ti-trash"></i></a>
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
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Leads Overview
                                    </div>
                                    <div class="dropdown">
                                        <div class="btn btn-light border btn-full btn-sm" data-bs-toggle="dropdown">Yearly<i class="ti ti-chevron-down ms-1"></i>
                                        </div>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Yearly</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Weekly</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Monthly</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <div id="Leads-overview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xxl-5">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Sales Performance</div>
                                    
                                    <div class="dropdown">
                                        <div class="btn btn-light border btn-full btn-sm" data-bs-toggle="dropdown">Today<i class="ti ti-chevron-down ms-1"></i>
                                        </div>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Weekly</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Monthly</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No.</th>
                                                    <th scope="col">Representative</th>
                                                    <th scope="col">Deals Closed</th>
                                                    <th scope="col">Leads</th>
                                                    <th scope="col">Rate (%)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0)" class="fw-medium">John Joe</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>15</td>
                                                    <td>100</td>
                                                    <td>15.0<i class="ri-arrow-up-s-fill ms-1 text-success align-middle fs-18"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0)" class="fw-medium">Jane Smith</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>20</td>
                                                    <td>120</td>
                                                    <td>16.7<i class="ri-arrow-down-s-fill ms-1 text-danger align-middle fs-18"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0)" class="fw-medium">Michael Johnson</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>18</td>
                                                    <td>110</td>
                                                    <td>16.4<i class="ri-arrow-up-s-fill ms-1 text-success align-middle fs-18"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0)" class="fw-medium">Emily Davis</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>22</td>
                                                    <td>130</td>
                                                    <td>16.9<i class="ri-arrow-up-s-fill ms-1 text-success align-middle fs-18"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0)" class="fw-medium">Anna Garcia</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>17</td>
                                                    <td>105</td>
                                                    <td>16.2<i class="ri-arrow-down-s-fill ms-1 text-danger align-middle fs-18"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0)" class="fw-medium">Kiara Nousin</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>20</td>
                                                    <td>35</td>
                                                    <td>57%<i class="ri-arrow-up-s-fill ms-1 text-success align-middle fs-18"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-4 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Leads Report
                                    </div>
                                    <div class="dropdown">
                                        <div class="btn btn-light border btn-full btn-sm" data-bs-toggle="dropdown">View All<i class="ti ti-chevron-down ms-1"></i>
                                        </div>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Download</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body active-tab">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.NO</th>
                                                    <th scope="col">Lead</th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="">01</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-sm">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 fs-14">Sophia Sara</p>
                                                                <a href="javascript:void(0);" class="text-muted fs-12">sophiasara@gmail.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">+1(222) 547 6897</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Nova Solutions</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Won Lead</span>
                                                    </td>
                                                    <td>
                                                        <span><i class="ri-map-pin-fill text-muted me-1"></i>Italy</span>
                                                    </td>
                                                    <td>
                                                        <span>10-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <span>$2457</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="">02</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-sm">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 fs-14"> Simon Leo</p>
                                                                <a href="javascript:void(0);" class="text-muted fs-12">simonleo@gmail.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">+1(222) 987 9874</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Global Innovations Ltd.</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">New Lead</span>
                                                    </td>
                                                    <td>
                                                        <span><i class="ri-map-pin-fill text-muted me-1"></i>Paris</span>
                                                    </td>
                                                    <td>
                                                        <span>12-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <span>$14009</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="">03</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-sm">
                                                                <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 fs-14">Hadley Kylin</p>
                                                                <a href="javascript:void(0);" class="text-muted fs-12">hadleykylin@gmail.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">+1(222) 654 6541</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Blue Enterprises</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">New Lead</span>
                                                    </td>
                                                    <td>
                                                        <span><i class="ri-map-pin-fill text-muted me-1"></i>Japan</span>
                                                    </td>
                                                    <td>
                                                        <span>14-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <span>$20000</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="">04</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-sm">
                                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 fs-14">Isha Bella</p>
                                                                <a href="javascript:void(0);" class="text-muted fs-12">ishabella@gmail.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">+1(222) 321 1232</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Silver Techns.</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">Lost Lead</span>
                                                    </td>
                                                    <td>
                                                        <span><i class="ri-map-pin-fill text-muted me-1"></i>Califonia</span>
                                                    </td>
                                                    <td>
                                                        <span>20-06-2024</span>
                                                    </td>
                                                    <td>
                                                        <span>$24000</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="">05</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-sm">
                                                                <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" class="" alt="">
                                                            </span>
                                                            <div class="flex-1 ms-2">
                                                                <p class="mb-0 fs-14">Red Siddique</p>
                                                                <a href="javascript:void(0);" class="text-muted fs-12">redsiddique@gmail.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="">+1(222) 658 3256</span>
                                                    </td>
                                                    <td>
                                                        <span class="">Omega Systems Ltd.</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">New Lead</span>
                                                    </td>
                                                    <td>
                                                        <span><i class="ri-map-pin-fill text-muted me-1"></i>Brazil</span>
                                                    </td>
                                                    <td>
                                                        <span>03-06-2024</span>
                                                    </td>
                                                    <td>
                                                        <span>$35789</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <div>Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold align-middle"></i></div>
                                        <div class="ms-auto">
                                            <nav aria-label="Page navigation" class="pagination-style-4">
                                                <ul class="pagination mb-0">
                                                    <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Prev</a></li>
                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    <li class="page-item"><a class="page-link text-primary" href="javascript:void(0);">Next</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-4 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- CRM Dashboard --> 
        <script src="<?php echo base_url('assets/js/crm-dashboard.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>