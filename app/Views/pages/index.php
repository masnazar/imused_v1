
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- FlatPickr CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
        
                    <!-- Start::page-header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <ol class="breadcrumb mb-1">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0);">
                                        Dashboards
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Sales</li>
                            </ol>
                            <h1 class="page-title fw-medium fs-18 mb-0">Sales Dashboard</h1>
                        </div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-text bg-white border"> <i class="ri-calendar-line"></i> </div>
                                    <input type="text" class="form-control breadcrumb-input" id="daterange" placeholder="Search By Date Range">
                                </div>
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
                    </div>
                    <!-- End::page-header -->

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-xxl-3 col-xl-6">
                                    <div class="card custom-card overflow-hidden main-content-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start justify-content-between mb-2">
                                                <div>
                                                    <span class="text-muted d-block mb-1">Total Products</span>
                                                    <h4 class="fw-medium mb-0">854</h4>
                                                </div>
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-primary">
                                                        <i class="ti ti-shopping-cart fs-5"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13">Increased By <span class="text-success">2.56%<i class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6">
                                    <div class="card custom-card overflow-hidden main-content-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start justify-content-between mb-2">
                                                <div>
                                                    <span class="d-block text-muted mb-1">Total Users</span>
                                                    <h4 class="fw-medium mb-0">31,876</h4>
                                                </div>
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-primary1">
                                                        <i class="ti ti-users fs-5"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13">Increased By <span class="text-success">0.34%<i class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6">
                                    <div class="card custom-card overflow-hidden main-content-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start justify-content-between mb-2">
                                                <div>
                                                    <span class="text-muted d-block mb-1">Total Revenue</span>
                                                    <h4 class="fw-medium mb-0">$3,241</h4>
                                                </div>
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-primary2">
                                                        <i class="ti ti-currency-dollar fs-5"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13">Increased By <span class="text-success">7.66%<i class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6">
                                    <div class="card custom-card overflow-hidden main-content-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start justify-content-between mb-2">
                                                <div>
                                                    <span class="text-muted d-block mb-1">Total Sales</span>
                                                    <h4 class="fw-medium mb-0">1,76,586</h4>
                                                </div>
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md avatar-rounded bg-primary3">
                                                        <i class="ti ti-chart-bar fs-5"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13">Decreased By <span class="text-danger">0.74%<i class="ti ti-arrow-narrow-down fs-16"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-8 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Sales Overview
                                            </div>
                                            <div class="dropdown"> 
                                                <a href="javascript:void(0);" class="btn btn-sm btn-light text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true"> Sort By</a> 
                                                <ul class="dropdown-menu" role="menu" data-popper-placement="bottom-end"> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li> 
                                                </ul> 
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="sales-overview"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-header pb-0 justify-content-between">
                                            <div class="card-title">
                                                Order Statistics
                                            </div>
                                            <div class="dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                    <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body py-4 px-3">
                                            <div class="d-flex gap-3 mb-3">
                                                <div class="avatar avatar-md bg-primary-transparent">
                                                    <i class="ti ti-trending-up fs-5"></i>
                                                </div>
                                                <div class="flex-fill d-flex align-items-start justify-content-between">
                                                    <div>
                                                        <span class="fs-11 mb-1 d-block fw-medium">TOTAL ORDERS</span> 
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h4 class="mb-0 d-flex align-items-center">3,736<span class="text-success fs-12 ms-2 op-1"><i class="ti ti-trending-up align-middle me-1"></i>0.57%</span></h4>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-success fs-12 text-decoration-underline">Earnings ?</a>
                                                </div>
                                            </div>
                                            <div id="orders" class="my-2"></div>
                                        </div>
                                        <div class="card-footer border-top border-block-start-dashed">
                                            <div class="d-grid">
                                                <button class="btn btn-primary-ghost btn-wave fw-medium waves-effect waves-light table-icon">Complete Statistics<i class="ti ti-arrow-narrow-right ms-2 fs-16 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card main-dashboard-banner overflow-hidden">
                                        <div class="card-body p-4">
                                            <div class="row justify-content-between">
                                                <div class="col-xxl-7 col-xl-5 col-lg-5 col-md-5 col-sm-5">
                                                    <h4 class="mb-3 fw-medium text-fixed-white">Upgrade to get more</h4>
                                                    <p class="mb-4 text-fixed-white">Maximize sales insights. Optimize performance. Achieve success with pro.</p>
                                                    <a href="javascript:void(0);" class="fw-medium text-fixed-white text-decoration-underline">Upgrade To Pro<i class="ti ti-arrow-narrow-right align-middle d-inline-flex"></i></a>
                                                </div>
                                                <div class="col-xxl-4 col-xl-7 col-lg-7 col-md-7 col-sm-7 d-sm-block d-none text-end my-auto">
                                                    <img src="<?php echo base_url('assets/images/media/media-86.png'); ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Top Selling Categories
                                            </div>
                                            <div class="dropdown"> 
                                                <a href="javascript:void(0);" class="btn btn-sm btn-light text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true"> Sort By</a> 
                                                <ul class="dropdown-menu" role="menu" data-popper-placement="bottom-end"> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li> 
                                                </ul> 
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="p-3 pb-0">
                                                <div class="progress-stacked progress-sm mb-2 gap-1">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-primary1" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-primary2" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-primary3" role="progressbar" style="width: 25%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <div>Overall Sales</div>
                                                    <div class="h6 mb-0"><span class="text-success me-2 fs-11">2.74%<i class="ti ti-arrow-narrow-up"></i></span>1,25,875</div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table text-nowrap">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-medium top-category-name one">Clothing</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">31,245</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-muted fs-12">25% Gross</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <span class="badge bg-success">0.45% <i class="ti ti-trending-up"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-medium top-category-name two">Electronics</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">29,553</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-muted fs-12">16% Gross</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <span class="badge bg-warning">0.27% <i class="ti ti-trending-up"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-medium top-category-name three">Grocery</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">24,577</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-muted fs-12">22% Gross</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <span class="badge bg-secondary">0.63% <i class="ti ti-trending-up"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-medium top-category-name four">Automobiles</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">19,278</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-muted fs-12">18% Gross</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <span class="badge bg-primary1">1.14% <i class="ti ti-trending-down"></i></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-bottom-0">
                                                                <span class="fw-medium top-category-name five">others</span>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <span class="fw-medium">15,934</span>
                                                            </td>
                                                            <td class="text-center border-bottom-0">
                                                                <span class="text-muted fs-12">15% Gross</span>
                                                            </td>
                                                            <td class="text-end border-bottom-0">
                                                                <span class="badge bg-primary">3.87% <i class="ti ti-trending-up"></i></span>
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
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Latest Transactions
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-wave btn-sm text-muted">View All<i class="ti ti-arrow-narrow-right ms-1"></i></a>
                                </div>
                                <div class="card-body p-0 pb-1">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/jpg/4.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">SwiftBuds</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$39.99</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary">Success</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/jpg/6.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">CozyCloud Pillow</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$19.95</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary1">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/jpg/3.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">AquaGrip Bottle</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$9.99</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary2">Failed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/jpg/1.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">GlowLite Lamp</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$24.99</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary3">Success</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/jpg/2.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">Bitvitamin</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$26.45</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-secondary">Success</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border-bottom-0">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/jpg/5.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">FitTrack</div>
                                                        </div>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <span class="fw-medium">$49.95</span>
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <span class="badge bg-warning">Success</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Recent Activity
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled recent-activity-list">
                                        <li>
                                            <div>
                                                <div>
                                                    <div class="fw-medium fs-14">John Doe</div>
                                                    <span class="fs-12 activity-time">
                                                        12 Hrs
                                                    </span>
                                                </div>
                                                <span class="d-block text-muted">
                                                    Updated the product description for <span class="text-primary fw-medium">Widget X</span>.
                                            </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div>
                                                    <div class="fw-medium fs-14">Jane Smith</div>
                                                    <span class="fs-12 activity-time">
                                                        4:32pm
                                                    </span>
                                                </div>
                                                <span class="d-block text-muted">
                                                    added a <span class="fw-medium text-dark">new user</span> with username <span class="fw-medium text-primary1">janesmith89.</span>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div>
                                                    <div class="fw-medium fs-14">Michael Brown</div>
                                                    <span class="fs-12 activity-time">
                                                        11:45am
                                                    </span>
                                                </div>    
                                                <span class="d-block text-muted">
                                                    Changed the status of order <a href="javascript:void(0);" class="fw-medium text-dark text-decoration-underline">#12345</a> to <span class="fw-medium text-primary2">Shipped.</span>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div>
                                                    <div class="fw-medium fs-14">David Wilson</div>
                                                    <span class="fs-12 activity-time">
                                                        9:27am
                                                    </span>
                                                </div>    
                                                <span class="d-block text-muted">
                                                    added <span class="fw-medium text-primary3">John Smith</span> to academy group this day.
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div>
                                                    <div class="fw-medium fs-14">Robert Jackson</div>
                                                    <span class="fs-12 activity-time">
                                                        8:56pm
                                                    </span>
                                                </div>   
                                                <span class="d-block text-muted">
                                                    added a comment to the task <span class="fw-medium text-secondary">Update website layout.</span>
                                                </span> 
                                            </div>
                                        </li>
                                    </ul>                 
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Sales Statistics
                                    </div>
                                    <div class="dropdown"> 
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true"> Sort By</a> 
                                        <ul class="dropdown-menu" role="menu" data-popper-placement="bottom-end"> 
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li> 
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li> 
                                        </ul> 
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-wrap gap-2 justify-content-between flex-fill pb-3">
                                        <div class="py-3 px-4 rounded border border-dashed bg-light">
                                            <span>Total Sales</span>
                                            <p class="fw-medium fs-14 mb-0">$3.478B</p>
                                        </div>
                                        <div class="py-3 px-4 rounded border border-dashed bg-light">
                                            <span>This Year</span>
                                            <p class="text-success fw-medium fs-14 mb-0">4,25,349</p>
                                        </div>
                                        <div class="py-3 px-4 rounded border border-dashed bg-light">
                                            <span>Last Year</span>
                                            <p class="text-danger fw-medium fs-14 mb-0">3,41,622</p>
                                        </div>
                                    </div>
                                    <div id="sales-statistics"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header pb-0 justify-content-between">
                                    <div class="card-title">
                                        Overall Statistics
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group activity-feed">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="lh-1">
                                                    <p class="mb-2 fs-13 text-muted">Total Expenses</p>
                                                    <h6 class="fw-medium mb-0">$134,032<span class="fs-12 text-success ms-2 fw-normal d-inline-block">0.45%<i class="ti ti-trending-up ms-1"></i></span></h6>
                                                </div>
                                                <div class="text-end">
                                                    <div id="line-graph1"></div>
                                                    <a href="javascript:void(0);" class="fs-12">
                                                        <span>See more</span>
                                                        <span class="table-icon"><i class="ms-1 d-inline-block ri-arrow-right-line"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="lh-1">
                                                    <p class="mb-2 fs-13 text-muted">General Leads</p>
                                                    <h6 class="fw-medium mb-0">74,354<span class="fs-12 text-danger ms-2 fw-normal d-inline-block">3.84%<i class="ti ti-trending-down ms-1"></i></span></h6>
                                                </div>
                                                <div class="text-end">
                                                    <div id="line-graph2"></div>
                                                    <a href="javascript:void(0);" class="fs-12">
                                                        <span>See more</span>
                                                        <span class="table-icon"><i class="ms-1 d-inline-block ri-arrow-right-line"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="lh-1">
                                                    <p class="mb-2 fs-13 text-muted">Churn Rate</p>
                                                    <h6 class="fw-medium mb-0">6.02%<span class="fs-12 text-success ms-2 fw-normal d-inline-block">0.72%<i class="ti ti-trending-up ms-1"></i></span></h6>
                                                </div>
                                                <div class="text-end">
                                                    <div id="line-graph3"></div>
                                                    <a href="javascript:void(0);" class="fs-12">
                                                        <span>See more</span>
                                                        <span class="table-icon"><i class="ms-1 d-inline-block ri-arrow-right-line"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="lh-1">
                                                    <p class="mb-2 fs-13 text-muted">New Users</p>
                                                    <h6 class="fw-medium mb-0">7,893<span class="fs-12 text-success ms-2 fw-normal d-inline-block">11.05%<i class="ti ti-trending-up ms-1"></i></span></h6>
                                                </div>
                                                <div class="text-end">
                                                    <div id="line-graph4"></div>
                                                    <a href="javascript:void(0);" class="fs-12">
                                                        <span>See more</span>
                                                        <span class="table-icon"><i class="ms-1 d-inline-block ri-arrow-right-line"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="lh-1">
                                                    <p class="mb-2 fs-13 text-muted">Returning Users</p>
                                                    <h6 class="fw-medium mb-0">3,258<span class="fs-12 text-success ms-2 fw-normal d-inline-block">1.69%<i class="ti ti-trending-up ms-1"></i></span></h6>
                                                </div>
                                                <div class="text-end">
                                                    <div id="line-graph5"></div>
                                                    <a href="javascript:void(0);" class="fs-12">
                                                        <span>See more</span>
                                                        <span class="table-icon"><i class="ms-1 d-inline-block ri-arrow-right-line"></i></span>
                                                    </a>
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
                        <div class="col-xl-9">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Recent Orders
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                                    </th>
                                                    <th>Customer</th>
                                                    <th>Product</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th class="text-center">Amount</th>
                                                    <th>Status</th>
                                                    <th>Date Ordered</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel02" value="" aria-label="..." checked>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Elena smith</span>
                                                                <span class="d-block fs-11 text-muted">elenasmith387@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        All-Purpose Cleaner
                                                    </td>
                                                    <td class="text-center">
                                                        3
                                                    </td>
                                                    <td class="text-center">
                                                        $9.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">In Progress</span>
                                                    </td>
                                                    <td>
                                                        03,Sep 2024
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <button class="btn btn-sm btn-icon btn-success-light"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel12" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Nelson Gold</span>
                                                                <span class="d-block fs-11 text-muted">noahrussell556@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Kitchen Knife Set
                                                    </td>
                                                    <td class="text-center">
                                                        4
                                                    </td>
                                                    <td class="text-center">
                                                        $49.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary1-transparent">Pending</span>
                                                    </td>
                                                    <td>
                                                        26,Jul 2024
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <button class="btn btn-sm btn-icon btn-success-light"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel42" value="" aria-label="..." checked>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Grace Mitchell</span>
                                                                <span class="d-block fs-11 text-muted">gracemitchell79@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Velvet Throw Blanket
                                                    </td>
                                                    <td class="text-center">
                                                        2
                                                    </td>
                                                    <td class="text-center">
                                                        $29.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary2-transparent">Success</span>
                                                    </td>
                                                    <td>
                                                        12,May 2024
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <button class="btn btn-sm btn-icon btn-success-light"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel32" value="" aria-label="..." checked>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Spencer Robin</span>
                                                                <span class="d-block fs-11 text-muted">leophillips124@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Aromatherapy Diffuser
                                                    </td>
                                                    <td class="text-center">
                                                        4
                                                    </td>
                                                    <td class="text-center">
                                                        $19.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary2-transparent">Success</span>
                                                    </td>
                                                    <td>
                                                        15,Aug 2024
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <button class="btn btn-sm btn-icon btn-success-light"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Chloe Lewis</span>
                                                                <span class="d-block fs-11 text-muted">chloelewis67@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Insulated Water Bottle
                                                    </td>
                                                    <td class="text-center">
                                                        2
                                                    </td>
                                                    <td class="text-center">
                                                        $14.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary3-transparent">Pending</span>
                                                    </td>
                                                    <td>
                                                        11,Oct 2024
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <button class="btn btn-sm btn-icon btn-success-light"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Sales By Country
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All</a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled sales-country-list">
                                        <li>
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm p-1 bg-light border">
                                                        <img src="<?php echo base_url('assets/images/flags/us_flag.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="d-block fw-medium mb-2 lh-1">United States</span>
                                                        <span class="fs-14 fw-medium d-block lh-1">31,672</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                            style="width: 90%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm p-1 bg-light border">
                                                        <img src="<?php echo base_url('assets/images/flags/italy_flag.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="d-block fw-medium mb-2 lh-1">Italy</span>
                                                        <span class="fs-14 fw-medium d-block lh-1">29,557</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-primary1 progress-bar-striped progress-bar-animated"
                                                            style="width: 85%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm p-1 bg-light border">
                                                        <img src="<?php echo base_url('assets/images/flags/spain_flag.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="d-block fw-medium mb-2 lh-1">Spain</span>
                                                        <span class="fs-14 fw-medium d-block lh-1">24,562</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-primary2 progress-bar-striped progress-bar-animated"
                                                            style="width: 80%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm p-1 bg-light border">
                                                        <img src="<?php echo base_url('assets/images/flags/uae_flag.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="d-block fw-medium mb-2 lh-1">Uae</span>
                                                        <span class="fs-14 fw-medium d-block lh-1">21,532</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-primary3 progress-bar-striped progress-bar-animated"
                                                            style="width: 75%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm p-1 bg-light border">
                                                        <img src="<?php echo base_url('assets/images/flags/argentina_flag.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="d-block fw-medium mb-2 lh-1">Argentina</span>
                                                        <span class="fs-14 fw-medium d-block lh-1">18,753</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated"
                                                            style="width: 70%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm p-1 bg-light border">
                                                        <img src="<?php echo base_url('assets/images/flags/china_flag.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="d-block fw-medium mb-2 lh-1">China</span>
                                                        <span class="fs-14 fw-medium d-block lh-1">12,342</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                                                            style="width: 65%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm p-1 bg-light border">
                                                        <img src="<?php echo base_url('assets/images/flags/french_flag.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="d-block fw-medium mb-2 lh-1">French</span>
                                                        <span class="fs-14 fw-medium d-block lh-1">15,533</span>
                                                    </div>
                                                    <div class="progress progress-md p-1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated"
                                                            style="width: 60%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- Sales Dashboard --> 
        <script src="<?php echo base_url('assets/js/sales-dashboard.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
