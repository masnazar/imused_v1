
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
                                    <li class="breadcrumb-item active" aria-current="page">Currency Exchange</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Currency Exchange</h1>
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
                        <div class="col-xl-12">
                            <div class="card custom-card currency-exchange-card">
                                <div class="card-body p-5 d-flex align-items-center justify-content-center z-1">
                                    <div class="container">
                                        <h3 class="text-fixed-white text-center">Buy and Sell Coins without additional fees</h3>
                                        <span class="d-block fs-16 text-fixed-white text-center op-8 mb-4">
                                            Buy now and get +50% extra bonus Minimum pre-sale amount 100 Crypto Coin. We accept BTC crypto-currency..
                                        </span>
                                        <div class="p-3 mb-4 rounded currency-exchange-area">
                                            <div class="row gy-3">
                                                <div class="col-xxl-3 col-12">
                                                    <input type="text" class="form-control" value="0.0453" placeholder="Enter Amount">
                                                </div>
                                                <div class="col-xxl-2 col-12">
                                                    <div>
                                                        <select class="form-control" data-trigger name="Vacancies">
                                                            <option value="Choice 1">Bitcoin</option> 
                                                            <option value="Choice 2">Etherium</option> 
                                                            <option value="Choice 3">Litecoin</option>
                                                            <option value="Choice 4">Ripple</option>
                                                            <option value="Choice 5">Cardano</option>
                                                            <option value="Choice 6">Neo</option>
                                                            <option value="Choice 7">Stellar</option>
                                                            <option value="Choice 8">EOS</option>
                                                            <option value="Choice 9">NEM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-2 col-12 text-center">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-primary1 btn-icon btn-sm my-2 rounded-pill"><i class="ti ti-arrows-exchange fs-19 align-middle"></i></a>
                                                </div>
                                                <div class="col-xxl-3 col-12">
                                                    <input type="text" class="form-control" value="1350.93" placeholder="Exchange Amount">
                                                </div>
                                                <div class="col-xxl-2 col-12">
                                                    <select class="form-control" data-trigger name="Vacancies">
                                                        <option value="Choice 1">USD</option> 
                                                        <option value="Choice 2">Pound</option> 
                                                        <option value="Choice 3">Rupee</option>
                                                        <option value="Choice 4">Euro</option>
                                                        <option value="Choice 5">Won</option>
                                                        <option value="Choice 6">Dinar</option>
                                                        <option value="Choice 7">Rial</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-success btn-wave">Exchange Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row justify-content-center">
                        <div class="col-xxl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-end justify-content-between flex-wrap">
                                        <div>
                                            <div class="d-flex align-items-center gap-2 mb-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Bitcoin.svg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-medium mb-0">Bitcoin</h6>
                                                    <span class="text-muted"> - BTC</span>
                                                </div>
                                            </div>
                                            <div class="fs-24 d-block d-flex align-items-center fw-medium">
                                                24.3% 
                                                <span class="fs-12 text-primary1 op-7 fw-normal ms-1">+0.59
                                                    <i class="ti ti-arrow-big-up-line ms-1 d-inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success fs-10 ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="fs-15 text-primary">0.00434</span>
                                                <span class="text-success ms-1">$30.29</span>
                                            </div>
                                            <div id="btc-currency-chart" class="mt-4 w-100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-end justify-content-between flex-wrap">
                                        <div>
                                            <div class="d-flex align-items-center gap-2 mb-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Ethereum.svg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-medium mb-0">Ethereum</h6>
                                                    <span class="text-muted"> - ETH</span>
                                                </div>
                                            </div>
                                            <div class="fs-24 d-block d-flex align-items-center fw-medium">
                                                18.7% 
                                                <span class="fs-12 text-primary1 op-7 fw-normal ms-1">+0.92
                                                    <i class="ti ti-arrow-big-up-line ms-1 d-inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success fs-10 ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="fs-15 text-primary">0.01758</span>
                                                <span class="text-success ms-1">$2564.89</span>
                                            </div>
                                            <div id="eth-currency-chart" class="mt-4 w-100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-end justify-content-between flex-wrap">
                                        <div>
                                            <div class="d-flex align-items-center gap-2 mb-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Dash.svg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-medium mb-0">Dash</h6>
                                                    <span class="text-muted"> - DASH</span>
                                                </div>
                                            </div>
                                            <div class="fs-24 d-block d-flex align-items-center fw-medium">
                                                12.5% 
                                                <span class="fs-12 text-primary1 op-7 fw-normal ms-1">-0.30
                                                    <i class="ti ti-arrow-big-down-line ms-1 d-inline-flex"></i>
                                                </span>
                                                <span class="badge bg-danger fs-10 ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="fs-15 text-primary">0.00487</span>
                                                <span class="text-success ms-1">$116.78</span>
                                            </div>
                                            <div id="dash-currency-chart" class="mt-4 w-100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-end justify-content-between flex-wrap">
                                        <div>
                                            <div class="d-flex align-items-center gap-2 mb-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Litecoin.svg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-medium mb-0">Litecoin</h6>
                                                    <span class="text-muted"> - LTC</span>
                                                </div>
                                            </div>
                                            <div class="fs-24 d-block d-flex align-items-center fw-medium">
                                                8.2% 
                                                <span class="fs-12 text-primary1 op-7 fw-normal ms-1">+0.15
                                                    <i class="ti ti-arrow-big-up-line ms-1 d-inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success fs-10 ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="fs-15 text-primary">0.00789</span>
                                                <span class="text-success ms-1">$158.42</span>
                                            </div>
                                            <div id="ltc-currency-chart" class="mt-4 w-100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-end justify-content-between flex-wrap">
                                        <div>
                                            <div class="d-flex align-items-center gap-2 mb-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Ripple.svg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-medium mb-0">Ripple</h6>
                                                    <span class="text-muted"> - XRP</span>
                                                </div>
                                            </div>
                                            <div class="fs-24 d-block d-flex align-items-center fw-medium">
                                                6.5% 
                                                <span class="fs-12 text-primary1 op-7 fw-normal ms-1">+0.10
                                                    <i class="ti ti-arrow-big-up-line ms-1 d-inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success fs-10 ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="fs-15 text-primary">0.00123</span>
                                                <span class="text-success ms-1">$0.79</span>
                                            </div>
                                            <div id="xrs-currency-chart" class="mt-4 w-100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-end justify-content-between flex-wrap">
                                        <div>
                                            <div class="d-flex align-items-center gap-2 mb-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Golem.svg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-medium mb-0">Golem</h6>
                                                    <span class="text-muted"> - GNT</span>
                                                </div>
                                            </div>
                                            <div class="fs-24 d-block d-flex align-items-center fw-medium">
                                                4.8% 
                                                <span class="fs-12 text-primary1 op-7 fw-normal ms-1">-0.02
                                                    <i class="ti ti-arrow-big-down-line ms-1 d-inline-flex"></i>
                                                </span>
                                                <span class="badge bg-danger fs-10 ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="fs-15 text-primary">0.000045</span>
                                                <span class="text-success ms-1">$1.23</span>
                                            </div>
                                            <div id="glm-currency-chart" class="mt-4 w-100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-end justify-content-between flex-wrap">
                                        <div>
                                            <div class="d-flex align-items-center gap-2 mb-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Monero.svg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-medium mb-0">Monero</h6>
                                                    <span class="text-muted"> - XMR</span>
                                                </div>
                                            </div>
                                            <div class="fs-24 d-block d-flex align-items-center fw-medium">
                                                3.2% 
                                                <span class="fs-12 text-primary1 op-7 fw-normal ms-1">+0.08
                                                    <i class="ti ti-arrow-big-up-line ms-1 d-inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success fs-10 ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="fs-15 text-primary">0.00456</span>
                                                <span class="text-success ms-1">$182.34</span>
                                            </div>
                                            <div id="monero-currency-chart" class="mt-4 w-100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-end justify-content-between flex-wrap">
                                        <div>
                                            <div class="d-flex align-items-center gap-2 mb-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/EOS.svg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-medium mb-0">EOS</h6>
                                                    <span class="text-muted"> - EOS</span>
                                                </div>
                                            </div>
                                            <div class="fs-24 d-block d-flex align-items-center fw-medium">
                                                5.7% 
                                                <span class="fs-12 text-primary1 op-7 fw-normal ms-1">+0.23
                                                    <i class="ti ti-arrow-big-up-line ms-1 d-inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success fs-10 ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="fs-15 text-primary">0.00234</span>
                                                <span class="text-success ms-1">$4.78</span>
                                            </div>
                                            <div id="eos-currency-chart" class="mt-4 w-100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-end justify-content-between flex-wrap">
                                        <div>
                                            <div class="d-flex align-items-center gap-2 mb-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-md">
                                                        <img src="<?php echo base_url('assets/images/crypto-currencies/square-color/Stratis.svg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-medium mb-0">Stratis</h6>
                                                    <span class="text-muted"> - STRAX</span>
                                                </div>
                                            </div>
                                            <div class="fs-24 d-block d-flex align-items-center fw-medium">
                                                2.1% 
                                                <span class="fs-12 text-primary1 op-7 fw-normal ms-1">+0.04
                                                    <i class="ti ti-arrow-big-up-line ms-1 d-inline-flex"></i>
                                                </span>
                                                <span class="badge bg-success fs-10 ms-2">24H</span>
                                            </div>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <div class="">
                                                <span class="fs-15 text-primary">0.001234</span>
                                                <span class="text-success ms-1">$2.34</span>
                                            </div>
                                            <div id="strax-currency-chart" class="mt-4 w-100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-xl-12">
                            <div class="text-center my-4">
                                <button class="btn btn-primary-light" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm align-middle" role="status"
                                        aria-hidden="true"></span>
                                    Loading...
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- Crypto Currency Exchange JS -->
        <script src="<?php echo base_url('assets/js/crypto-currency-exchange.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>