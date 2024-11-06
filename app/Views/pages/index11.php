
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <link rel="stylesheet" href="<?php echo base_url('assets/libs/swiper/swiper-bundle.min.css'); ?>">

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
                                    <li class="breadcrumb-item active" aria-current="page">Stocks</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Stocks</h1>
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
                        <div class="col-xl-12">
                            <div class="swiper swiper-basic swiper-initialized swiper-horizontal swiper-backface-hidden">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="d-flex gap-2 flex-wrap align-items-start justify-content-between">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-dark-transparent p-2 avatar-sm">
                                                                <i class="bi bi-apple text-dark"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="d-block text-default fs-14">Apple</span>
                                                        </div>
                                                    </div>
                                                    <div class="fs-12 text-end">
                                                        <span class="d-block text-success">+0.14%</span>
                                                        <span class="d-block fw-medium fs-14">AAPL</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-fill align-items-end gap-2 justify-content-between">
                                                    <div>
                                                        <span class="d-block text-muted">Current Value:</span>
                                                        <span class="d-block ms-auto fs-15 fw-medium">$1,780.80<i class="ri-arrow-up-s-fill text-success lh-1 align-middle fs-20 ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-1" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="d-flex gap-2 flex-wrap align-items-start justify-content-between">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-warning-transparent p-2 avatar-sm">
                                                                <i class="bi bi-currency-bitcoin text-warning"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="d-block text-default fs-14">Bitcoin</span>
                                                        </div>
                                                    </div>
                                                    <div class="fs-12 text-end">
                                                        <span class="d-block text-danger">-2.14%</span>
                                                        <span class="d-block fw-medium fs-14">BTC</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-fill align-items-end gap-2 justify-content-between">
                                                    <div>
                                                        <span class="d-block text-muted">Current Value:</span>
                                                        <span class="d-block ms-auto fs-15 fw-medium">$58,151.02<i class="ri-arrow-down-s-fill text-danger lh-1 align-middle fs-20 ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-2" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="d-flex gap-2 flex-wrap align-items-start justify-content-between">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-primary1-transparent p-2 avatar-sm">
                                                                <i class="bi bi-card-list text-primary1"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="d-block text-default fs-14">Tesla</span>
                                                        </div>
                                                    </div>
                                                    <div class="fs-12 text-end">
                                                        <span class="d-block text-success">+4.02%</span>
                                                        <span class="d-block fw-medium fs-14">TSLA</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-fill align-items-end gap-2 justify-content-between">
                                                    <div>
                                                        <span class="d-block text-muted">Current Value:</span>
                                                        <span class="d-block ms-auto fs-15 fw-medium">$4,125.63<i class="ri-arrow-up-s-fill text-success lh-1 align-middle fs-20 ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-3" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="d-flex gap-2 flex-wrap align-items-start justify-content-between">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-primary2-transparent p-2 avatar-sm">
                                                                <i class="bi bi-gift text-primary2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="d-block text-default fs-14">Amazon</span>
                                                        </div>
                                                    </div>
                                                    <div class="fs-12 text-end">
                                                        <span class="d-block text-danger">-5.14%</span>
                                                        <span class="d-block fw-medium fs-14">AMZN</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-fill align-items-end gap-2 justify-content-between">
                                                    <div>
                                                        <span class="d-block text-muted">Current Value:</span>
                                                        <span class="d-block ms-auto fs-15 fw-medium">$63,251.11<i class="ri-arrow-down-s-fill text-danger lh-1 align-middle fs-20 ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-4" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="d-flex gap-2 flex-wrap align-items-start justify-content-between">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-primary3-transparent p-2 avatar-sm">
                                                                <i class="bi bi-truck text-primary3"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="d-block text-default fs-14">Aliexpress</span>
                                                        </div>
                                                    </div>
                                                    <div class="fs-12 text-end">
                                                        <span class="d-block text-success">+1.14%</span>
                                                        <span class="d-block fw-medium fs-14">AE </span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-fill align-items-end gap-2 justify-content-between">
                                                    <div>
                                                        <span class="d-block text-muted">Current Value:</span>
                                                        <span class="d-block ms-auto fs-15 fw-medium">$5,401.50<i class="ri-arrow-up-s-fill text-success lh-1 align-middle fs-20 ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-5" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="d-flex gap-2 flex-wrap align-items-start justify-content-between">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-secondary-transparent p-2 avatar-sm">
                                                                <i class="bi bi-phone text-secondary"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="d-block text-default fs-14">Samsung</span>
                                                        </div>
                                                    </div>
                                                    <div class="fs-12 text-end">
                                                        <span class="d-block text-success">+2.14%</span>
                                                        <span class="d-block fw-medium fs-14">SSNLF</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-fill align-items-end gap-2 justify-content-between">
                                                    <div>
                                                        <span class="d-block text-muted">Current Value:</span>
                                                        <span class="d-block ms-auto fs-15 fw-medium">$10,732.12<i class="ri-arrow-up-s-fill text-success lh-1 align-middle fs-20 ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-6" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="d-flex gap-2 flex-wrap align-items-start justify-content-between">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded bg-info-transparent p-2 avatar-sm">
                                                                <i class="bi bi-nvidia text-info"></i>
                                                            </span>
                                                        </div>
                                                        <div class="">
                                                            <span class="d-block text-default fs-14">Nvidia</span>
                                                        </div>
                                                    </div>
                                                    <div class="fs-12 text-end">
                                                        <span class="d-block text-danger">-2.13%</span>
                                                        <span class="d-block fw-medium fs-14">NVDA</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-fill align-items-end gap-2 justify-content-between">
                                                    <div>
                                                        <span class="d-block text-muted">Current Value:</span>
                                                        <span class="d-block ms-auto fs-15 fw-medium">$23,235.25<i class="ri-arrow-down-s-fill text-danger lh-1 align-middle fs-20 ms-1"></i></span>
                                                    </div>
                                                    <div id="stock-7" class="stock-sparkline-charts"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Stock Market Value</div>
                                    <div class="d-flex gap-2">
                                        <div class="btn btn-outline-light border btn-full btn-sm">Today</div>
                                        <div class="btn btn-outline-light border btn-full btn-sm">Weakly</div>
                                        <div class="btn btn-light border btn-full btn-sm">Yearly</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-sm-flex align-items-end  p-3 bg-light gap-5 flex-wrap">
                                        <div class="min-w-fit-content me-3">
                                            <p class="mb-1">Total Investment</p>
                                            <h4 class="fw-medium mb-0">$15,874.50<span class="badge bg-success ms-2 fs-9"><i class="ti ti-trending-up me-1"></i>0.32%</span></h4>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <p class="mb-1">Market Cap</p>
                                            <h4 class="fw-medium mb-0">$124,784.23<span class="badge bg-danger ms-2 fs-9"><i class="ti ti-trending-down me-1"></i>0.12%</span></h4>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <p class="mb-1 fs-12 text-muted">
                                                <span class="text-success">+124.25</span>
                                                <i class="mdi mdi-circle-small"></i>
                                                <span>Yesterday</span>
                                            </p>
                                            <p class="mb-0 fs-11 text-muted">
                                                <span>Jun 16, 2022</span>
                                                <i class="mdi mdi-circle-small"></i>
                                                <span>10:45 AM</span>
                                                <i class="mdi mdi-circle-small"></i>
                                                <span>UTC +5:30</span>
                                            </p>
                                        </div>
                                        <div class="flex-1 text-sm-end mt-2 mt-sm-0 ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-w-lg btn-primary1-light"><i class="ti ti-plus me-1"></i>Compare</a>
                                        </div>
                                    </div>
                                    <div id="stockCap-area">
                                    </div>
                                    <div id="stockCap">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        My Watchlist
                                    </div>
                                    <button type="button" class="btn btn-sm btn-light"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-primary1 border-opacity-10 bg-dark-transparent">
                                                                <img src="<?php echo base_url('assets/images/media/apps/apple.png'); ?>" alt="" class="invert-1">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-medium">Apple</a>
                                                                <span class="d-block text-muted fs-12">AAPL</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-fill">
                                                                <div id="apple-change"></div>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0"> $150.20</p>
                                                                <p class="text-success mb-0">+1.50%</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-1">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-primary2 border-opacity-10 bg-primary2-transparent">
                                                                <img src="<?php echo base_url('assets/images/media/apps/google.png'); ?>" alt="">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-medium">Google</a>
                                                                <span class="d-block text-muted fs-12">GOOG</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-fill">
                                                                <div id="google-change"></div>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0">$2,500.5</p>
                                                                <span class="text-danger">-5.25%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-primary3 border-opacity-10 bg-primary3-transparent">
                                                                <img src="<?php echo base_url('assets/images/media/apps/microsoft.png'); ?>" alt="">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-medium">Microsoft</a>
                                                                <span class="d-block text-muted fs-12">MSFT</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-fill">
                                                                <div id="microsoft-change"></div>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0"> $300.75</p>
                                                                <span class="text-success">+2.30%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-secondary border-opacity-10 bg-secondary-transparent">
                                                                <img src="<?php echo base_url('assets/images/media/apps/amazon.png'); ?>" alt="">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-medium">Amazon</a>
                                                                <span class="d-block text-muted fs-12">AMZN</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-fill">
                                                                <div id="amazon-change"></div>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0">$3,000.00</p>
                                                                <span class="text-danger">-10.50%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-warning border-opacity-10 bg-warning-transparent">
                                                                <img src="<?php echo base_url('assets/images/media/apps/tesla.png'); ?>" alt="" class="invert-1">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-medium">Tesla</a>
                                                                <span class="d-block text-muted fs-12">TSLA</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-fill">
                                                                <div id="tesla-change"></div>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0">$700.80</p>
                                                                <span class="text-success">+8.00%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-info border-opacity-10 bg-info-transparent">
                                                                <img src="<?php echo base_url('assets/images/media/apps/facebook.png'); ?>" alt="">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-medium">Facebook</a>
                                                                <span class="d-block text-muted fs-12">FB</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-fill">
                                                                <div id="facebook-change"></div>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0">$350.40</p>
                                                                <span class="text-danger">-3.20%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-md p-2 avatar-rounded border border-success border-opacity-10 bg-success-transparent">
                                                                <img src="<?php echo base_url('assets/images/media/apps/nvidia.png'); ?>" alt="">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-medium">Nvidia</a>
                                                                <span class="d-block text-muted fs-12">NVDA</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-fill">
                                                                <div id="nvidia-change"></div>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0">$800.60</p>
                                                                <span class="text-success">+5.75%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <h6 class="card-title">Statistics</h6>
                                    <button type="button" class="btn btn-sm btn-light"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                                </div>
                                <div class="card-body">
                                    <div id="portfolio" class=""></div>
                                </div>
                                <div class="card-footer p-3 my-2">
                                    <div class="row row-cols-12">
                                        <div class="col p-0">
                                            <div class="text-center"> 
                                                <i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-primary-transparent text-primary"></i>
                                                <span class="text-muted fs-12 mb-1 rounded-dot dot-primary d-inline-block ms-2">Stocks
                                                </span>
                                                <div><span class="fs-16 fw-medium">1,624</span> </div>
                                            </div>
                                        </div>
                                        <div class="col p-0">
                                            <div class="text-center"> 
                                                <i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-primary1-transparent text-primary1"></i>
                                                <span class="text-muted fs-12 mb-1 rounded-dot dot-secondary d-inline-block ms-2">Funds
                                                </span>
                                                <div><span class="fs-16 fw-medium">1,267</span></div>
                                            </div>
                                        </div>
                                        <div class="col p-0">
                                            <div class="text-center"> 
                                                <i class="ri-circle-fill p-1 lh-1 fs-7 rounded-2 bg-primary2-transparent text-primary2"></i>
                                                <span class="text-muted fs-12 mb-1 rounded-dot dot-success d-inline-block ms-2">Bond
                                                </span>
                                                <div><span class="fs-16 fw-medium">1,153</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header  justify-content-between">
                                    <div class="card-title">My Stocks</div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                            All Stocks<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);"> All Stocks</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Wishlist</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Stocks</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Crypto</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">ETFs</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Bonds</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Stock</th>
                                                    <th>Quantity</th>
                                                    <th>Stock Price</th>
                                                    <th>Change</th>
                                                    <th>Total Value</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar rounded-circle avatar-sm bg-primary-transparent svg-primary">
                                                                <i class="ri-github-fill fs-16"></i>
                                                            </span>
                                                            <div class="flex-fill">
                                                                <div>Gituhb, Demo Inc</div>
                                                                <div class="text-muted">GTHB</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>100</td>
                                                    <td class="fw-medium">$145.20</td>
                                                    <td><span class="text-success">+$1,230.00</span></td>
                                                    <td>$14,520.00</td>
                                                    <td class="btn-list">
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light">Buy</a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary1-light">Sell</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar rounded-circle avatar-sm bg-primary1-transparent svg-primary1">
                                                                <i class="ri-amazon-fill fs-16"></i>
                                                            </span>
                                                            <div class="flex-fill">
                                                                <div>Amazon.com Inc.</div>
                                                                <div class="text-muted">AMZN</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>50</td>
                                                    <td class="fw-medium">$3,500.00</td>
                                                    <td><span class="text-danger">-$5,500.00</span></td>
                                                    <td>$175,000.00</td>
                                                    <td class="btn-list">
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light">Buy</a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary1-light">Sell</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar rounded-circle avatar-sm bg-primary2-transparent svg-primary2">
                                                                <i class="ri-microsoft-fill fs-16"></i>
                                                            </span>
                                                            <div class="flex-fill">
                                                                <div>Microsoft Corporation</div>
                                                                <div class="text-muted">MSFT</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>75</td>
                                                    <td class="fw-medium">$265.75</td>
                                                    <td><span class="text-success">+$876.25</span></td>
                                                    <td>$19,931.25</td>
                                                    <td class="btn-list">
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light">Buy</a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary1-light">Sell</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar rounded-circle avatar-sm bg-primary3-transparent svg-primary3">
                                                                <i class="ri-google-fill fs-16"></i>
                                                            </span>
                                                            <div class="flex-fill">
                                                                <div>Alphabet Inc. (Google)</div>
                                                                <div class="text-muted">GOOGL</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>30</td>
                                                    <td class="fw-medium">$2,550.00</td>
                                                    <td><span class="text-success">+$1,800.00</span></td>
                                                    <td>$76,500.00</td>
                                                    <td class="btn-list">
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light">Buy</a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary1-light">Sell</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar rounded-circle avatar-sm bg-info-transparent svg-info">
                                                                <i class="ri-facebook-circle-fill fs-16"></i>
                                                            </span>
                                                            <div class="flex-fill">
                                                                <div>Facebook, Inc.</div>
                                                                <div class="text-muted">FB</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>60</td>
                                                    <td class="fw-medium">$325.60</td>
                                                    <td><span class="text-danger">-$364.00</span></td>
                                                    <td>$19,536.00</td>
                                                    <td class="btn-list">
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light">Buy</a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary1-light">Sell</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <h6 class="card-title">Growth Analysis</h6>
                                    <button type="button" class="btn btn-sm btn-light"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                                </div>
                                <div class="card-body pb-1">
                                    <div class="p-3 bg-light text-default rounded border border-dashed d-flex justify-content-between gap-2 align-items-end">
                                        <div>
                                            <span class="d-block mb-1">Tesla, Inc (TSLA)</span>
                                            <h5 class="fw-semibold lh-1 mb-0">$ 17,782.00</h5>
                                        </div>
                                        <span class="badge bg-success fw-semibold ms-2">0.64%<i class="ri-arrow-up-s-line ms-1"></i></span>
                                    </div>
                                    <div id="visitors-report"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Transaction History
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                            All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Buy</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Sell</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Stock</th>
                                                    <th>Shares</th>
                                                    <th>Type</th>
                                                    <th>Price</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>12 Apr, 2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-sm p-1 avatar-rounded border border-primary1 border-opacity-10 bg-dark-transparent">
                                                                <img src="<?php echo base_url('assets/images/media/apps/apple.png'); ?>" alt="" class="invert-1">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-medium">APPL - Apple Inc.</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>50</td>
                                                    <td><span class="badge bg-primary-transparent">Buy</span></td>
                                                    <td>
                                                        <div class="fw-medium">$150.00</div>
                                                        <div class="text-muted">Value: $7,500.00</div>
                                                    </td>
                                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +2%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>14 Apr, 2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-sm p-1 avatar-rounded border border-primary2 border-opacity-10 bg-primary2-transparent">
                                                                <img src="<?php echo base_url('assets/images/media/apps/google.png'); ?>" alt="" class="invert-1">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-medium">GOOGL-Alphabet Inc..</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>20</td>
                                                    <td> <span class="badge bg-primary1-transparent">Sell</span></td>
                                                    <td>
                                                        <div class="fw-medium">$2,400.00</div>
                                                        <div class="text-muted">Value: $48,000.00</div>
                                                    </td>
                                                    <td><span class="text-danger"><i class="fas fa-arrow-down"></i> -1.5%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>18 Apr, 2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-sm p-1 avatar-rounded border border-warning border-opacity-10 bg-warning-transparent">
                                                                <img src="<?php echo base_url('assets/images/media/apps/tesla.png'); ?>" alt="" class="invert-1">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-medium">TSLA - Tesla Inc.</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>15</td>
                                                    <td><span class="badge bg-primary-transparent">Buy</span></td>
                                                    <td>
                                                        <div class="fw-medium">$650.00</div>
                                                        <div class="text-muted">Value: $9,750.00</div>
                                                    </td>
                                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +1.2%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>20 Apr, 2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-sm p-1 avatar-rounded border border-primary3 border-opacity-10 bg-primary3-transparent">
                                                                <img src="<?php echo base_url('assets/images/media/apps/microsoft.png'); ?>" alt="" class="invert-1">
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-medium"> MSFT - Microsoft Corp.</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>30</td>
                                                    <td> <span class="badge bg-primary1-transparent">Sell</span></td>
                                                    <td>
                                                        <div class="fw-medium">$280.00</div>
                                                        <div class="text-muted">Value: $8,400.00</div>
                                                    </td>
                                                    <td><span class="text-danger"><i class="fas fa-arrow-down"></i> -0.8%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>22 Apr, 2024</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="avatar avatar-sm p-1 avatar-rounded border border-danger border-opacity-10 bg-danger-transparent">
                                                                <i class="ri-netflix-line"></i>
                                                            </span>
                                                            <div>
                                                                <a href="javascript:void(0);" class="fw-medium">NFLX - Netflix Inc.</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>25</td>
                                                    <td><span class="badge bg-primary-transparent">Buy</span></td>
                                                    <td>
                                                        <div class="fw-medium">$500.00</div>
                                                        <div class="text-muted">Value: $12,500.00</div>
                                                    </td>
                                                    <td><span class="text-success"><i class="fas fa-arrow-up"></i> +0.5%</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Market Movers
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                            All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Buy</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Sell</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Symbol</th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col">Change</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">% Change</th>
                                                    <th scope="col">Volume</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>AAPL</td>
                                                    <td>Apple Inc.</td>
                                                    <td><span class="text-success">$5.00</span></td>
                                                    <td class="fw-medium fs-14">$150.00</td>
                                                    <td><span class="text-success">+3.45%</span></td>
                                                    <td>1,000,000</td>
                                                </tr>
                                                <tr>
                                                    <td>GOOGL</td>
                                                    <td>Alphabet Inc.</td>
                                                    <td><span class="text-danger">-$10.00</span></td>
                                                    <td class="fw-medium fs-14">$2,500.00</td>
                                                    <td><span class="text-danger">-0.40%</span></td>
                                                    <td>500,000</td>
                                                </tr>
                                                <tr>
                                                    <td>MSFT</td>
                                                    <td>Microsoft Corporation</td>
                                                    <td><span class="text-success">$3.00</span></td>
                                                    <td class="fw-medium fs-14">$300.00</td>
                                                    <td><span class="text-success">+1.01%</span></td>
                                                    <td>800,000</td>
                                                </tr>
                                                <tr>
                                                    <td>TSLA</td>
                                                    <td>Tesla, Inc.</td>
                                                    <td><span class="text-success">$20.00</span></td>
                                                    <td class="fw-medium fs-14">$700.00</td>
                                                    <td><span class="text-success">+2.94%</span></td>
                                                    <td>1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td>NFLX</td>
                                                    <td>Netflix, Inc.</td>
                                                    <td><span class="text-danger">-$5.00</span></td>
                                                    <td class="fw-medium fs-14">$400.00</td>
                                                    <td><span class="text-danger">-1.23%</span></td>
                                                    <td>600,000</td>
                                                </tr>
                                                <tr>
                                                    <td>AMZN</td>
                                                    <td>Amazon.com, Inc.</td>
                                                    <td><span class="text-success">$50.00</span></td>
                                                    <td class="fw-medium fs-14">$3,000.00</td>
                                                    <td><span class="text-success">+1.69%</span></td>
                                                    <td>1,500,000</td>
                                                </tr>
                                                <tr>
                                                    <td>FB</td>
                                                    <td>Facebook.com, Inc.</td>
                                                    <td><span class="text-success">$24.00</span></td>
                                                    <td class="fw-medium fs-14">$6,000.00</td>
                                                    <td><span class="text-success">+2.08%</span></td>
                                                    <td>2,258,450</td>
                                                </tr>
                                            </tbody>
                                        </table>
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

        <!-- Swiper JS -->
        <script src="<?php echo base_url('assets/libs/swiper/swiper-bundle.min.js'); ?>"></script>

        <!-- Stocks Dashboard --> 
        <script src="<?php echo base_url('assets/js/stocks-dashboard.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>