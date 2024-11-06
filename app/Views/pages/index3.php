
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
                                    <li class="breadcrumb-item active" aria-current="page">Ecommerce</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Ecommerce</h1>
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

                    <!-- Start: row-1 -->
                    <div class="row">
                        <div class="col-xxl-9">
                            <div class="row">
                                <div class="col-xl-3">
                                    <div class="card custom-card overflow-hidden main-content-card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <div class="flex-fill fs-13 text-muted">Total Sales</div>
                                                    <div class="fs-23 fw-medium mb-0">15,432</div>
                                                    <div class="text-muted fs-13">Increased By <span class="text-success">5.1%<i class="ti ti-trending-up fs-16"></i></span></div>
                                                </div>
                                                <div class="avatar avatar-md bg-primary svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card overflow-hidden main-content-card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <div class="flex-fill fs-13 text-muted">Revenue</div>
                                                    <div class="fs-23 fw-medium mb-0">$245,147</div>
                                                    <div class="text-muted fs-13">Increased By <span class="text-success">0.6%<i class="ti ti-trending-up fs-16"></i></span></div>
                                                </div>
                                                <div class="avatar avatar-md bg-primary1 svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M168,56a8,8,0,0,1,8-8h16V32a8,8,0,0,1,16,0V48h16a8,8,0,0,1,0,16H208V80a8,8,0,0,1-16,0V64H176A8,8,0,0,1,168,56Zm62.56,54.68a103.92,103.92,0,1,1-85.24-85.24,8,8,0,0,1-2.64,15.78A88.07,88.07,0,0,0,40,128a87.62,87.62,0,0,0,22.24,58.41A79.66,79.66,0,0,1,98.3,157.66a48,48,0,1,1,59.4,0,79.66,79.66,0,0,1,36.06,28.75A87.62,87.62,0,0,0,216,128a88.85,88.85,0,0,0-1.22-14.68,8,8,0,1,1,15.78-2.64ZM128,152a32,32,0,1,0-32-32A32,32,0,0,0,128,152Zm0,64a87.57,87.57,0,0,0,53.92-18.5,64,64,0,0,0-107.84,0A87.57,87.57,0,0,0,128,216Z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card overflow-hidden main-content-card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <div class="flex-fill fs-13 text-muted">Average Order Value</div>
                                                    <div class="fs-23 fw-medium mb-0">$120</div>
                                                    <div class="text-muted fs-13">Decreased By <span class="text-danger">1.08%<i class="ti ti-trending-down fs-16"></i></span></div>
                                                </div>
                                                <div class="avatar avatar-md bg-primary2 svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card overflow-hidden main-content-card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <div class="flex-fill fs-13 text-muted">Total Orders</div>
                                                    <div class="fs-23 fw-medium mb-0">1,25,032</div>
                                                    <div class="text-muted fs-13">Increased By <span class="text-success">2.3%<i class="ti ti-trending-up fs-16"></i></span></div>
                                                </div>
                                                <div class="avatar avatar-md bg-primary3 svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">Sales Report</div>
                                            <div class="d-flex gap-2">
                                                <div class="btn btn-sm btn-outline-light">Today</div>
                                                <div class="btn btn-sm btn-outline-light">Weakly</div>
                                                <div class="btn btn-sm btn-light">Yearly</div>
                                            </div>
                                        </div>
                                        <div class="card-body pb-2">
                                            <div id="sales-report"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-8 col-xl-7">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">Recent Orders</div>
                                            <a href="javascript:void(0);" class="btn btn-outline-light border d-flex align-items-center text-muted btn-sm">
                                                View All
                                            </a>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Customer</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="javascript:void(0);" class="text-primary">#SPK781</a></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0)" class="fs-14 fw-medium">Priceton Gray</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="d-block text-muted">Mar 18,2024</span>
                                                            </td>
                                                            <td>
                                                                <span class="d-block mb-1">$2,145.90</span>
                                                            </td>
                                                            <td><span class="badge bg-success-transparent">Paid</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);" class="text-primary">#SPK782</a></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0)" class="fs-14 fw-medium">Elsa Urena</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="d-block text-muted">Mar 20,2024</span>
                                                            </td>
                                                            <td>
                                                                <span class="d-block mb-1">$2,145.90</span>
                                                            </td>
                                                            <td><span class="badge bg-danger-transparent">Unpaid</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);" class="text-primary">#SPK783</a></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0)" class="fs-14 fw-medium">Gloria</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="d-block text-muted">Mar 24,2024</span>
                                                            </td>
                                                            <td>
                                                                <span class="d-block mb-1">$2,145.90</span>
                                                            </td>
                                                            <td><span class="badge bg-success-transparent">Paid</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);" class="text-primary">#SPK784</a></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0)" class="fs-14 fw-medium">Priya</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="d-block text-muted">Mar 25,2024</span>
                                                            </td>
                                                            <td>
                                                                <span class="d-block mb-1">$2,145.90</span>
                                                            </td>
                                                            <td><span class="badge bg-warning-transparent">Pending</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);" class="text-primary">#SPK785</a></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0)" class="fs-14 fw-medium">Adam Smith</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="d-block text-muted">Mar 18,2024</span>
                                                            </td>
                                                            <td>
                                                                <span class="d-block mb-1">$2,145.90</span>
                                                            </td>
                                                            <td><span class="badge bg-danger-transparent">UnPaid</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-5">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">Total Orders
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-outline-light btn-sm border d-flex align-items-center text-muted dropdown-toggle"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    View All
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Monthly
                                                        </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Weakly</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center text-center bg-light p-3 rounded-1 order-content">
                                                <div>
                                                    <p class="mb-1">Total Orders</p>
                                                    <h4 class="text-primary mb-0">12,500</h4>
                                                </div>
                                                <div>
                                                    <p class="mb-1 text-center">Overall Growth from Last Year</p>
                                                    <h5 class="text-success mb-0 text-center">+15%</h5>
                                                </div>
                                            </div>
                                            <div id="total-orders"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-5 ">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between flex-wrap pb-0">
                                            <div class="card-title">
                                                New Visitors
                                            </div>
                                            <div class="dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-outline-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                    <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row align-items-end mx-0">
                                                <div class="col-5">
                                                    <h3 class="fw-medium mb-0">5,642</h3>
                                                    <div><i class="ri-checkbox-blank-circle-fill text-primary lh-1 align-middle fs-10"></i> Total New Visitors</div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="fw-medium">Percentage of New Visitors</div>
                                                    <div class="text-muted fs-12">Last 30 Days: Increased By <span class="text-success fw-medium">42.5%<i class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div id="websitedesign"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Payment Methods
                                            </div>
                                            <div class="dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-outline-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                    <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                    <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <i class="ri-bank-card-line p-1 bg-primary3-transparent lh-1 me-2 fs-22 rounded-1"></i>
                                                        Credit Card
                                                    </div>
                                                    <span class="badge bg-primary rounded-pill">25%</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <i class="ri-paypal-line p-1 bg-primary2-transparent lh-1 me-2 fs-22 rounded-1"></i>
                                                        PayPal
                                                    </div>
                                                    <span class="badge bg-primary rounded-pill">20%</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <i class="ri-visa-line p-1 bg-primary1-transparent lh-1 me-2 fs-22 rounded-1"></i>
                                                        VISA
                                                    </div>
                                                    <span class="badge bg-primary rounded-pill">15%</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <i class="ri-apple-line p-1 bg-info-transparent lh-1 me-2 fs-22 rounded-1"></i>
                                                        Apple Pay
                                                    </div>
                                                    <span class="badge bg-primary rounded-pill">10%</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <i class="ri-google-line p-1 bg-secondary-transparent lh-1 me-2 fs-22 rounded-1"></i>
                                                        Google Pay
                                                    </div>
                                                    <span class="badge bg-primary rounded-pill">10%</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-header justify-content-between pb-3">
                                            <div class="card-title">
                                                Traffic Sources
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted" data-bs-toggle="dropdown">
                                                    View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Browser</th>
                                                            <th scope="col">Traffic</th>
                                                            <th scope="col">Sessions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar  avatar-sm p-2 bg-primary3-transparent me-2">
                                                                        <i class="ri-chrome-line fs-18"></i>
                                                                    </span>
                                                                    <div class="fw-medium">Chrome</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary3" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span>15,248<i class="ri-arrow-up-s-fill ms-1 text-success align-middle fs-18"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar avatar-sm p-2 bg-primary2-transparent me-2">
                                                                        <i class="ri-safari-line fs-18"></i>
                                                                    </span>
                                                                    <div class="fw-medium">Safari</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary2" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span>22,945<i class="ri-arrow-up-s-fill ms-1 text-success align-middle fs-18"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar avatar-sm p-2 bg-primary1-transparent me-2">
                                                                        <i class="ri-opera-line fs-18"></i>
                                                                    </span>
                                                                    <div class="fw-medium">Opera</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary1" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span>32,453<i class="ri-arrow-down-s-fill ms-1 text-danger align-middle fs-18"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar  avatar-sm p-2 bg-primary-transparent me-2">
                                                                        <i class="ri-edge-fill fs-18"></i>
                                                                    </span>
                                                                    <div class="fw-medium">Edge</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span>9,886<i class="ri-arrow-up-s-fill ms-1 text-success align-middle fs-18"></i></span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card offer-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-end gap-2">
                                        <div class="offer-card-details">
                                            <div class="offer-item">
                                                <img src="<?php echo base_url('assets/images/media/media-90.png'); ?>" alt="Product Image" class="img-fluid offer-item-img">
                                                <div class="avatar avatar-xl mb-3">
                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/17.png'); ?>" alt="Product Image" class="img-fluid">
                                                </div>
                                                <div class="product-info">
                                                    <h4 class="mb-2 fw-medium text-fixed-white">Today's Sale</h4>
                                                    <span class="mb-1 text-success fw-semibold fs-12">Up to 20% Off on</span>
                                                    <span class="mb-3 text-fixed-white h6">HeadPhones</span>
                                                </div>
                                                <span class="text-fixed-white">Price: $9.99</span>
                                                <span class="text-fixed-white ps-2">Discount: 20%</span>
                                            </div>
                                            <button class="btn btn-primary1 mt-4 shadow">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Top-Selling Products</div>
                                    <a href="javascript:void(0);" class="btn btn-outline-light border d-flex align-items-center text-muted btn-sm">
                                    View All
                                    </a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0" id="product-list">
                                        <li class="">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-lg bg-gray-200">
                                                        <img src="<?php echo base_url('assets/images/ecommerce/png/6.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class=" flex-fill">
                                                    <span class="fs-14 d-block mb-0 fw-medium">Chair with Cushion</span>
                                                    <span class="text-muted fs-12">Furniture</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 fs-14 fw-medium">$124</p>
                                                    <p class="mb-0 text-muted fs-14">260 Sales</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-lg bg-gray-200">
                                                        <img src="<?php echo base_url('assets/images/ecommerce/png/7.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fs-14 d-block mb-0 fw-medium">Hand Bag</span>
                                                    <span class="text-muted fs-12">Accessories</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 fs-14 fw-medium">$564</p>
                                                    <p class="mb-0 text-muted fs-14">181 Sales</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-lg bg-gray-200">
                                                        <img src="<?php echo base_url('assets/images/ecommerce/png/28.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fs-14 d-block mb-0 fw-medium">Sneakers</span>
                                                    <span class="text-muted fs-12">Sports</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 fs-14 fw-medium">$964</p>
                                                    <p class="mb-0 text-muted fs-14">134 Sales</p>
                                                </div>
                                            </div>
                                        </li>   
                                        <li class="mt-4">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-lg bg-gray-200">
                                                        <img src="<?php echo base_url('assets/images/ecommerce/png/11.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fs-14 d-block mb-0 fw-medium">Ron Hoodie</span>
                                                    <span class="text-muted fs-12">Fashion</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 fs-14 fw-medium">$769</p>
                                                    <p class="mb-0 text-muted fs-14">127 Sales</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-lg bg-gray-200">
                                                        <img src="<?php echo base_url('assets/images/ecommerce/png/23.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fs-14 d-block mb-0 fw-medium">Smart Watch</span>
                                                    <span class="text-muted fs-12">Electronics</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 fs-14 fw-medium">$999</p>
                                                    <p class="mb-0 text-muted fs-14">108 Sales</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between pb-0">
                                    <div class="card-title"> Recent Activity </div>
                                    <div class="dropdown"> 
                                        <a href="javascript:void(0);" class="fs-12 text-muted bg-light rounded btn btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false"> View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0 ecommerce-recent-activity">
                                        <li class="ecommerce-recent-activity-content">
                                            <div class="d-flex align-items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-primary avatar-rounded">
                                                        <i class="ri-shopping-cart-line"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="d-block fw-medium">New Order - #12345</span>
                                                    <span class="d-block fs-12 text-muted">2 items purchased by John Doe</span>
                                                </div>
                                                <div class="flex-fill text-end">
                                                    <span class="d-block text-muted fs-11 op-7">3 hrs ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ecommerce-recent-activity-content">
                                            <div class="d-flex align-items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-success avatar-rounded">
                                                        <i class="ri-checkbox-circle-line fs-14"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="d-block fw-medium">Order Shipped - #12345</span>
                                                    <span class="d-block fs-12 text-muted">Shipped via FedEx</span>
                                                </div>
                                                <div class="flex-fill text-end">
                                                    <span class="d-block text-muted fs-11 op-7">1 day ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ecommerce-recent-activity-content">
                                            <div class="d-flex align-items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-primary1 avatar-rounded">
                                                        <i class="ri-add-circle-line fs-14"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="d-block fw-medium"> Added New Products</span>
                                                    <span class="d-block fs-12 text-muted pb-2">New items added in Fashions</span>
                                                    <a href="javascript:void(0);" class="avatar avatar-sm bg-gray-200">
                                                        <img src="<?php echo base_url('assets/images/ecommerce/png/7.png'); ?>" alt="">
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar avatar-sm bg-gray-200">
                                                        <img src="<?php echo base_url('assets/images/ecommerce/png/12.png'); ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="flex-fill text-end">
                                                    <span class="d-block text-muted fs-11 op-7">12 days ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ecommerce-recent-activity-content">
                                            <div class="d-flex align-items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-danger avatar-rounded">
                                                        <i class="ri-heart-3-line fs-14"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="d-block fw-medium">Product Favorited - iPhone 12 Pro</span>
                                                    <span class="d-block fs-12 text-muted">Added to favorites by Jane Smith</span>
                                                </div>
                                                <div class="flex-fill text-end">
                                                    <span class="d-block text-muted fs-11 op-7">2 days ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ecommerce-recent-activity-content">
                                            <div class="d-flex align-items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-warning avatar-rounded">
                                                        <i class="ri-star-line fs-14"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="d-block fw-medium">Product Rated - Samsung Galaxy S21</span>
                                                    <span class="d-block fs-12 text-muted">Rated 4.5 stars by John Doe</span>
                                                </div>
                                                <div class="flex-fill text-end">
                                                    <span class="d-block text-muted fs-11 op-7">3 days ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ecommerce-recent-activity-content">
                                            <div class="d-flex align-items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-info avatar-rounded">
                                                        <i class="ri-price-tag-3-line fs-14"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="d-block fw-medium">Product Discount - Nike Air Max</span>
                                                    <span class="d-block fs-12 text-muted">Discounted price applied</span>
                                                </div>
                                                <div class="flex-fill text-end">
                                                    <span class="d-block text-muted fs-11 op-7">4 days ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ecommerce-recent-activity-content pb-0">
                                            <div class="d-flex align-items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-sm bg-secondary avatar-rounded">
                                                        <i class="ri-chat-1-line fs-14"></i>
                                                    </span>
                                                </div>
                                                <div class="activity-content">
                                                    <span class="d-block fw-medium">Customer Inquiry - Order ID: #12346</span>
                                                    <span class="d-block fs-12 text-muted">Inquiry received from customer</span>
                                                </div>
                                                <div class="flex-fill text-end">
                                                    <span class="d-block text-muted fs-11 op-7">5 days ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Newly Added Products
                                    </div>
                                    <div class="d-sm-flex">
                                        <div class="me-3 mb-3 mb-sm-0">
                                            <input class="form-control form-control-sm" type="text" placeholder="Search" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown">
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
                                        <table class="table text-nowrap table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Product Id</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">% Discount</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Added Date</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">#1547988</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/12.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fs-14">Sweater Coat</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Women's wear</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary">40%</span>
                                                    </td>
                                                    <td>
                                                        $241.08
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Published</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">15-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon btn-secondary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">#1415023</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/6.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fs-14">Cushion Chair</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Furniture</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary">30%</span>
                                                    </td>
                                                    <td>
                                                        $1,489.00
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Pending</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">20-05-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon btn-secondary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">#4578162</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/23.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fs-14">Smart Watch</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Gadgets</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary">10%</span>
                                                    </td>
                                                    <td>
                                                        $2,457.08
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">Saved as Draft</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">06-02-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon btn-secondary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">#4578954</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/32.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fs-14">Alarm Clock</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Home Decor</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary">20%</span>
                                                    </td>
                                                    <td>
                                                        $359.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Published</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">26-01-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon btn-secondary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon  btn-primary2-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">#8745814</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/28.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fs-14">Running Shoes</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Athletic Footwear</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary">0%</span>
                                                    </td>
                                                    <td>
                                                        $568.87
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Published</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">24-03-2024</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon btn-secondary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon btn-info-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon  btn-primary2-light"><i class="ti ti-trash"></i></a>
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
                                            Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-medium align-middle"></i>
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
                    <!-- End:: row-2 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- Echarts JS -->
        <script src="<?php echo base_url('assets/libs/echarts/echarts.min.js'); ?>"></script>

        <!-- Ecommerce Dashboard --> 
        <script src="<?php echo base_url('assets/js/ecommerce-dashboard.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>