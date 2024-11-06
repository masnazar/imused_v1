
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>



<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crypto</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Marketcap</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Marketcap</h1>
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
                        <div class="col-xxl-4 col-xl-6 col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Bitcoin.svg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">
                                                            Bitcoin
                                                        </h6>
                                                        <span class="text-muted "> BTC - Rank 1</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="mb-1">
                                                        <span class="fs-20 fw-medium lh-1 text-primary mb-1">$1.04</span> 
                                                        <span class="mb-0 text-muted ms-2"><span class="text-muted">Vol:</span><span class="text-success fw-medium"> (+2.33%)</span></span>
                                                    </div>
                                                    <p class="fw-medium mb-0">$35,876.29 <span class="mb-1 fw-normal fs-13 text-muted">(BTC / USD)</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <div class="mb-4">
                                                <p class="tx-14 mb-1 fw-semibold text-dark">Market Cap:</p>
                                                <p class="mb-0 fs-14">$1.054B<span class="text-success mb-0 font-weight-normal tx-13">
                                                        +280.30<span class="text-success numberfont">(0.96%)</span>
                                                    </span>
                                                </p>
                                            </div>
                                            <div>
                                                <div id="bitcoin-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Dash.svg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">
                                                            Dash
                                                        </h6>
                                                        <span class="text-muted"> DASH - Rank 50</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="mb-1">
                                                        <span class="fs-20 fw-medium lh-1 text-primary mb-1">$112.45</span> 
                                                        <span class="mb-0 text-muted ms-2"><span class="text-muted">Vol:</span><span class="text-success fw-medium"> (+1.25%)</span></span>
                                                    </div>
                                                    <p class="fw-medium mb-0">$112.34 <span class="mb-1 fw-normal fs-13 text-muted">(DASH / USD)</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <div class="mb-4">
                                                <p class="tx-14 mb-1 fw-semibold text-dark">Market Cap:</p>
                                                <p class="mb-0 fs-14">$1.21B<span class="text-success mb-0 font-weight-normal tx-13">
                                                        -0.05<span class="text-danger numberfont">(-0.02%)</span>
                                                    </span>
                                                </p>
                                            </div>
                                            <div>
                                                <div id="dashcoin-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Ethereum.svg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">
                                                            Ethereum
                                                        </h6>
                                                        <span class="text-muted"> ETH - Rank 2</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="mb-1">
                                                        <span class="fs-20 fw-medium lh-1 text-primary mb-1">$2.15K</span> 
                                                        <span class="mb-0 text-muted ms-2"><span class="text-muted">Vol:</span><span class="text-success fw-medium"> (+3.12%)</span></span>
                                                    </div>
                                                    <p class="fw-medium mb-0">$2,135.67 <span class="mb-1 fw-normal fs-13 text-muted">(ETH / USD)</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <div class="mb-4">
                                                <p class="tx-14 mb-1 fw-semibold text-dark">Market Cap:</p>
                                                <p class="mb-0 fs-14">$250.87B<span class="text-success mb-0 font-weight-normal tx-13">
                                                        +5.42<span class="text-success numberfont">(2.21%)</span>
                                                    </span>
                                                </p>
                                            </div>
                                            <div>
                                                <div id="etherium-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2  -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Crypto MarketCap
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Market Cap</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Price</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Trading Volume</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Price Change (24h)</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Rank</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">A - Z</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">All-Time High (ATH)</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <button class="btn btn-secondary btn-sm btn-wave waves-effect waves-light">View All</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col" class="fw-medium">#</th>
                                                    <th scope="col">Crypto Name</th>
                                                    <th scope="col">MarketCap</th>
                                                    <th scope="col">last 1Week</th>
                                                    <th scope="col">1h Change</th>
                                                    <th scope="col">Price<span class="text-muted ms-1">(USD)</span></th>
                                                    <th scope="col">24h Change</th>
                                                    <th scope="col">Volume (24h)</th>
                                                    <th scope="col">Circulating Supply</th>
                                                    <th scope="col">Trade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a>
                                                    </td>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Bitcoin.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium"><a href="javascript:void(0);">Bitcoin (BTC)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$582.23B</span>
                                                    </td>
                                                    <td>
                                                        <div id="btc-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>0.483%</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">
                                                            <a href="javascript:void(0);">$29,948.80</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.239%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$11.79B USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="fw-medium d-block mb-2">
                                                                19.43M of (21M)
                                                            </span>
                                                            <div class="progress-stacked progress-xs w-75">
                                                                <div class="progress-bar bg-success op-5" role="progressbar" style="width: 88%"
                                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                                <div class="progress-bar bg-danger op-5" role="progressbar" style="width: 12%"
                                                                    aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a>
                                                    </td>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Ethereum.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium"><a href="javascript:void(0);">Etherium (ETH)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$226.91B</span>
                                                    </td>
                                                    <td>
                                                        <div id="eth-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>0.87%</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">
                                                            <a href="javascript:void(0);">$1,895.96</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>0.29%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$2.83B USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="fw-medium d-block">
                                                                120M
                                                            </span>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a></td>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Golem.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium"><a href="javascript:void(0);">Golem (GLM)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$202.07M</span>
                                                    </td>
                                                    <td>
                                                        <div id="glm-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.61%</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">
                                                            <a href="javascript:void(0);">$1.201472</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>34.96%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$2,112,645 USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="fw-medium d-block mb-2">
                                                                1,000M
                                                            </span>
                                                            <div class="progress-stacked progress-xs w-75">
                                                                <div class="progress-bar bg-success op-5" role="progressbar" style="width: 100%"
                                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a></td>
                                                    <td>4</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Dash.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium"><a href="javascript:void(0);">Dash (DASH)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$365.877M</span>
                                                    </td>
                                                    <td>
                                                        <div id="dash-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.59%</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">
                                                            <a href="javascript:void(0);">$32.13</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>1.24%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$3.61M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="fw-medium d-block mb-2">
                                                                11.37M of (18.92M)
                                                            </span>
                                                            <div class="progress-stacked progress-xs w-75">
                                                                <div class="progress-bar bg-success op-5" role="progressbar" style="width:56%"
                                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                                <div class="progress-bar bg-danger op-5" role="progressbar" style="width: 44%"
                                                                    aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a></td>
                                                    <td>5</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Litecoin.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium"><a href="javascript:void(0);">Litecoin (LTC)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$6.80B</span>
                                                    </td>
                                                    <td>
                                                        <div id="lite-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.90%</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">
                                                            <a href="javascript:void(0);">$92.98</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>2.22%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$11.46B USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="fw-medium d-block mb-2">
                                                                73.40M
                                                            </span>
                                                            <div class="progress-stacked progress-xs w-75">
                                                                <div class="progress-bar bg-success op-5" role="progressbar" style="width:100%"
                                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a></td>
                                                    <td>6</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Ripple.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium"><a href="javascript:void(0);">Ripple (XRP)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$42.48B</span>
                                                    </td>
                                                    <td>
                                                        <div id="ripple-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.01%</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">
                                                            <a href="javascript:void(0);">$1.83</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>0.91%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$2.99B USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="fw-medium d-block mb-2">
                                                                52.54B of (100B)
                                                            </span>
                                                            <div class="progress-stacked progress-xs w-75">
                                                                <div class="progress-bar bg-success op-5" role="progressbar" style="width:52%"
                                                                    aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                                                <div class="progress-bar bg-danger op-5" role="progressbar" style="width: 48%"
                                                                    aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a></td>
                                                    <td>7</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/EOS.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium"><a href="javascript:void(0);">EOS</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$85.2M</span>
                                                    </td>
                                                    <td>
                                                        <div id="eos-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.61%</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">
                                                            <a href="javascript:void(0);">$1.765957</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>20.65%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$116.91M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="fw-medium d-block mb-2">
                                                                10.1B of (105B)
                                                            </span>
                                                            <div class="progress-stacked progress-xs w-75">
                                                                <div class="progress-bar bg-success op-5" role="progressbar" style="width:10%"
                                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                                <div class="progress-bar bg-danger op-5" role="progressbar" style="width: 90%"
                                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a></td>
                                                    <td>8</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Bytecoin.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium"><a href="javascript:void(0);">Bytecoin (BCN)</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$6.2M</span>
                                                    </td>
                                                    <td>
                                                        <div id="bytecoin-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>25.24%</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">
                                                            <a href="javascript:void(0);">$1.00039</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>27.12%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$6,184 USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="fw-medium d-block mb-2">
                                                                184.02B of (184.07B)
                                                            </span>
                                                            <div class="progress-stacked progress-xs w-75">
                                                                <div class="progress-bar bg-success op-5" role="progressbar" style="width:99%"
                                                                    aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                                                                <div class="progress-bar bg-danger op-5" role="progressbar" style="width: 1%"
                                                                    aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a></td>
                                                    <td>9</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/IOTA.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium"><a href="javascript:void(0);">IOTA</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$510.429M</span>
                                                    </td>
                                                    <td>
                                                        <div id="iota-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>1.08%</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">
                                                            <a href="javascript:void(0);">$1.184992</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>1.41%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$7.50M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="fw-medium d-block">
                                                                2.78B
                                                            </span>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a></td>
                                                    <td>10</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Monero.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium"><a href="javascript:void(0);">Monero</a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$3.062B</span>
                                                    </td>
                                                    <td>
                                                        <div id="monero-chart"></div>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>3.22%</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">
                                                            <a href="javascript:void(0);">$165.76</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>3.48%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$105.8M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <span class="fw-medium d-block">
                                                                18.15M
                                                            </span>
                                                        </a>    
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer border-top-0">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination mb-0 float-end">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2  -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- Crypto MarketCap JS -->
        <script src="<?php echo base_url('assets/js/crypto-marketcap.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
