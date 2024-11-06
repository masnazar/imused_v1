
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>



<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Start::page-header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">NFT</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Wallet Integration</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Wallet Integration</h1>
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
                    <div class="row justify-content-center">
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden bg-primary-gradient nft-wallet-card">
                                <div class="card-body text-center">
                                    <div class="fw-medium mb-2 text-fixed-white op-7">
                                        Wallet Balance
                                    </div>
                                    <h5 class="fw-bold text-fixed-white">$25,680</h5>
                                    <p class="text-muted mb-0 text-fixed-white op-7">Available Balance</p>
                                </div>
                            </div>
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Wallet Transactions
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="p-2 py-2 bg-light fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                            Last 24 Hours <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last 24 Hours</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last 30 Days</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex gap-3 align-items-center flex-wrap">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-xl bg-primary1-transparent">
                                                        <i class="ri-exchange-line fs-25"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="mb-1 d-flex justify-content-between gap-1"><span class="fw-medium">ETH Received</span><span class="fs-12 text-muted ms-auto d-inline-block">24 mins ago</span></div>
                                                    <div class="fs-13">From: <span class="text-primary fw-medium">@user123</span></div>
                                                    <div class="fs-13">Amount: <span class="text-success fw-medium">2.1 ETH</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex gap-3 align-items-center flex-wrap">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-xl bg-success-transparent">
                                                        <i class="ri-arrow-right-line fs-25"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="mb-1 d-flex justify-content-between gap-1"><span class="fw-medium">ETH Sent</span><span class="fs-12 text-muted ms-auto d-inline-block">16 mins ago</span></div>
                                                    <div class="fs-13">To: <span class="text-primary fw-medium">@recipient456</span></div>
                                                    <div class="fs-13">Amount: <span class="text-danger fw-medium">1.5 ETH</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex gap-3 align-items-center flex-wrap">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-xl bg-info-transparent">
                                                        <i class="ri-coin-line fs-25"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="mb-1 d-flex justify-content-between gap-1"><span class="fw-medium">NFT Purchase</span><span class="fs-12 text-muted ms-auto d-inline-block">5 mins ago</span></div>
                                                    <div class="fs-13">From: <span class="text-primary fw-medium">@creator789</span></div>
                                                    <div class="fs-13">Price: <span class="fw-medium">$350</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-bottom">
                                            <div class="d-flex gap-3 align-items-center flex-wrap">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-xl bg-primary3-transparent">
                                                        <i class="ri-arrow-left-line fs-25"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="mb-1 d-flex justify-content-between gap-1"><span class="fw-medium">ETH Withdrawal</span><span class="fs-12 text-muted ms-auto d-inline-block">2 hours ago</span></div>
                                                    <div class="fs-13">To: <span class="text-primary fw-medium">0x34F7Bc...</span></div>
                                                    <div class="fs-13">Amount: <span class="text-danger fw-medium">5.0 ETH</span></div>
                                                </div>
                                            </div>
                                        </li>                                            
                                    </ul>
                                    <div class="p-3 text-center">
                                        <a href="javascript:void(0);" class="text-center text-primary text-decoration-underline">View All Transactions</a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="col-xxl-9">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header">
                                    <div class="card-title">
                                        Choose Network
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush nft-list d-flex align-items-center gap-4 flex-row p-3 bg-light flex-wrap">
                                        <li class="list-group-item border-bottom-0 active">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="<?php echo base_url('assets/images/nft-images/34.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Etherium</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-bottom-0">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="<?php echo base_url('assets/images/nft-images/33.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Binance</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-bottom-0">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="<?php echo base_url('assets/images/nft-images/32.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Solana</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-bottom-0">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="<?php echo base_url('assets/images/nft-images/28.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Tezos</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-bottom-0">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="<?php echo base_url('assets/images/nft-images/30.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Avalanche</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-bottom-0">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="<?php echo base_url('assets/images/nft-images/29.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Cardano</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-bottom-0">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="<?php echo base_url('assets/images/nft-images/36.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Monero</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Connect Wallet
                                    </div>
                                    <div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-6">
                                            <div class="card custom-card nft-wallet active">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded p-2 bg-light">
                                                                <img src="<?php echo base_url('assets/images/nft-images/22.png'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">MetaMask</h6>  
                                                        </div>
                                                        <a href="javascript:void(0);" class="text-primary text-decoration-underline ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="card custom-card nft-wallet">
                                                <div class="card-body p-3">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded p-2 bg-light">
                                                                <img src="<?php echo base_url('assets/images/nft-images/23.png'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Enjin Wallet</h6>
                                                        </div>
                                                        <a href="javascript:void(0);" class="text-primary text-decoration-underline ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="card custom-card nft-wallet">
                                                <div class="card-body p-3">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded bg-light">
                                                                <img src="<?php echo base_url('assets/images/nft-images/20.png'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Trust Wallet</h6>  
                                                        </div>
                                                        <a href="javascript:void(0);" class="text-primary text-decoration-underline ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="card custom-card nft-wallet">
                                                <div class="card-body p-3">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded bg-light p-2">
                                                                <img src="<?php echo base_url('assets/images/nft-images/24.png'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Coinbase Wallet</h6>  
                                                        </div>
                                                        <a href="javascript:void(0);" class="text-primary text-decoration-underline ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="card custom-card nft-wallet mb-xxl-0">
                                                <div class="card-body p-3">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded bg-light p-2">
                                                                <img src="<?php echo base_url('assets/images/nft-images/19.png'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Lido</h6>  
                                                        </div>
                                                        <a href="javascript:void(0);" class="text-primary text-decoration-underline ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="card custom-card nft-wallet mb-xxl-0">
                                                <div class="card-body p-3">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded bg-light">
                                                                <img src="<?php echo base_url('assets/images/nft-images/27.png'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Huobi Wallet</h6>  
                                                        </div>
                                                        <a href="javascript:void(0);" class="text-primary text-decoration-underline ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-between gap-2">
                                    <button class="btn btn-primary-light btn-wave btn-lg">Import More</button>
                                    <button class="btn btn-primary btn-wave btn-lg">Add New Wallet</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	


<?= $this->endSection('scripts'); ?>
