
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
                                    <li class="breadcrumb-item active" aria-current="page">NFT</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">NFT</h1>
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
                        <div class="col-xxl-7">
                            <div class="card custom-card nft-banner-card overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="row align-items-center mx-0">
                                        <div class="col-xl-7">
                                            <h4 class="fw-semibold text-fixed-white">
                                                Your Gateway to the World of NFTs: Explore, Buy, and Sell
                                            </h4>
                                            <p class="text-fixed-white op-8 mb-4">Dive into the limitless possibilities of NFTs. Explore, invest, and showcase your unique digital assets.</p>
                                            <button class="btn btn-primary btn-wave me-1 waves-effect waves-light">Explore Now</button>
                                            <button class="btn btn-primary1 btn-wave waves-effect waves-light">Learn More</button>
                                        </div>
                                        <div class="col-xl-5 text-end">
                                            <img src="<?php echo base_url('assets/images/nft-images/1.jpg'); ?>" class="img-fluid nft-main-banner-image shadow p-3 me-2" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <div class="card custom-card flex-row">
                                <div class="card-body bg-light m-2 rounded-1">
                                    <div class="d-flex flex-wrap align-items-center gap-3 flex-xl-nowrap"> 
                                        <div> 
                                            <span class="avatar avatar-md bg-primary svg-white"> 
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21 7.28V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-2.28c.59-.35 1-.98 1-1.72V9c0-.74-.41-1.37-1-1.72zM20 9v6h-7V9h7zM5 19V5h14v2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6v2H5z"></path><circle cx="16" cy="12" r="1.5"></circle>
                                                </svg> 
                                            </span> 
                                        </div>
                                        <div> 
                                            <p class="mb-0 ">Your Balance</p>
                                            <h5 class="fw-semibold mb-0">$28,546.96<span class="text-muted fs-12 fw-normal ms-1"> Increased By <span class="text-success align-center fs-11 ms-1 fw-medium">0.14% <i class="ti ti-arrow-narrow-up fs-14"></i></span></span> </h5> 
                                        </div> 
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary-gradient">View Transactions</a>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <div class="icon lh-1 mb-2">
                                                    <span class="avatar avatar-md shadow-sm bg-primary-transparent border border-primary border-2 border-opacity-25 avatar-rounded">
                                                        <i class="ri-vidicon-line fs-17 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div class="pt-1">
                                                    <h5 class="mb-0">256</h5>
                                                    <p class="text-muted mb-0">Assets</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <div class="icon lh-1 mb-2">
                                                    <span class="avatar avatar-md shadow-sm bg-primary1-transparent border border-primary1 border-2 border-opacity-25 avatar-rounded">
                                                        <i class="bi bi-people fs-17 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div class="pt-1">
                                                    <h5 class="mb-0">1,543</h5>
                                                    <p class="text-muted mb-0">Followers</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <div class="icon lh-1 mb-2">
                                                    <span class="avatar avatar-md shadow-sm bg-primary2-transparent border border-primary2 border-2 border-opacity-25 avatar-rounded">
                                                        <i class="bi bi-heart fs-17 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div class="pt-1">
                                                    <h5 class="mb-0">12,345</h5>
                                                    <p class="text-muted mb-0">Likes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <div class="icon lh-1 mb-2">
                                                    <span class="avatar avatar-md shadow-sm bg-primary3-transparent border border-primary3 border-2 border-opacity-25 avatar-rounded">
                                                        <i class="bi bi-currency-dollar fs-17 lh-1"></i>
                                                    </span>
                                                </div>
                                                <div class="pt-1">
                                                    <h5 class="mb-0">$2.5k</h5>
                                                    <p class="text-muted mb-0">Bidding</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <h6 class="mb-0">&#128293; Hot Bids :</h6>
                        <div>
                            <button type="button" class="btn btn-sm btn-primary-light ">View All</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-2 col-xl-4 col-md-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="mb-0 text-fixed-white bg-primary2 nft-auction-time">
                                    07hrs : 33m : 45s
                                </div>
                                <div class="position-relative">
                                    <img src="<?php echo base_url('assets/images/nft-images/10.jpg'); ?>" class="card-img-top nft-img1" alt="...">
                                    <span class="badge nft-like-badge text-fixed-white"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                </div>
                                <div class="card-body nft-body">
                                    <p class="fs-15 mb-2 fw-semibold">Vibrant Spec Cat NFT</p>
                                    <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-rounded avatar-xs">
                                                <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="mb-0 fs-12 fw-medium">Kelinnies NFT </p>
                                            <p class="fs-11 op-8 mb-0 lh-1">- @kelinnies05</p>
                                            
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <p class="mb-0">Current Bid :</p>
                                        <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                <g fill="none" fill-rule="evenodd">
                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                    <g transform="translate(227 93)"><g>
                                                    <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                    <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                    <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                    <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                    <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                </g>
                                            </svg>
                                            0.045ETH
                                        </h6>
                                    </div>
                                    <div class="d-grid">
                                        <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-4 col-md-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="mb-0 text-fixed-white bg-primary2 nft-auction-time">
                                    07hrs : 33m : 45s
                                </div>
                                <div class="position-relative">
                                <img src="<?php echo base_url('assets/images/nft-images/11.jpg'); ?>" class="card-img-top nft-img1" alt="...">
                                    <span class="badge nft-like-badge text-fixed-white"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                </div>
                                <div class="card-body nft-body">
                                    <p class="fs-15 mb-2 fw-semibold">Abstract Digital Art</p>
                                    <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-rounded avatar-xs">
                                                <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="mb-0 fs-12 fw-medium">Manistics NFT </p>
                                            <p class="fs-11 op-8 mb-0 lh-1">- @manistics454</p>
                                            
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <p class="mb-0">Current Bid :</p>
                                        <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                <g fill="none" fill-rule="evenodd">
                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                    <g transform="translate(227 93)"><g>
                                                    <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                    <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                    <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                    <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                    <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                </g>
                                            </svg>
                                            0.015ETH
                                        </h6>
                                    </div>
                                    <div class="d-grid">
                                        <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-4 col-md-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="mb-0 text-fixed-white bg-primary2 nft-auction-time">
                                    07hrs : 33m : 45s
                                </div>
                                <div class="position-relative">
                                <img src="<?php echo base_url('assets/images/nft-images/9.jpg'); ?>" class="card-img-top nft-img1" alt="...">
                                    <span class="badge nft-like-badge text-fixed-white"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                </div>
                                <div class="card-body nft-body">
                                    <p class="fs-15 mb-2 fw-semibold">Majestic Alpha Wolf</p>
                                    <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-rounded avatar-xs">
                                                <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="mb-0 fs-12 fw-medium">Haridar NFT </p>
                                            <p class="fs-11 op-8 mb-0 lh-1">- @haridar687</p>
                                            
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <p class="mb-0">Current Bid :</p>
                                        <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                <g fill="none" fill-rule="evenodd">
                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                    <g transform="translate(227 93)"><g>
                                                    <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                    <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                    <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                    <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                    <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                </g>
                                            </svg>
                                            0.045ETH
                                        </h6>
                                    </div>
                                    <div class="d-grid">
                                        <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-4 col-md-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="mb-0 text-fixed-white bg-primary2 nft-auction-time">
                                    07hrs : 33m : 45s
                                </div>
                                <div class="position-relative">
                                    <img src="<?php echo base_url('assets/images/nft-images/4.jpg'); ?>" class="card-img-top nft-img1" alt="...">
                                    <span class="badge nft-like-badge text-fixed-white"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                </div>
                                <div class="card-body nft-body">
                                    <p class="fs-15 mb-2 fw-semibold">Radiant Blossom NFT</p>
                                    <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-rounded avatar-xs">
                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="mb-0 fs-12 fw-medium">Mostee NFT </p>
                                            <p class="fs-11 op-8 mb-0 lh-1">- @mostee897</p>
                                            
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <p class="mb-0">Current Bid :</p>
                                        <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                <g fill="none" fill-rule="evenodd">
                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                    <g transform="translate(227 93)"><g>
                                                    <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                    <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                    <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                    <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                    <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                </g>
                                            </svg>
                                            0.03ETH
                                        </h6>
                                    </div>
                                    <div class="d-grid">
                                        <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-4 col-md-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="mb-0 text-fixed-white bg-primary2 nft-auction-time">
                                    07hrs : 33m : 45s
                                </div>
                                <div class="position-relative">
                                <img src="<?php echo base_url('assets/images/nft-images/5.jpg'); ?>" class="card-img-top nft-img1" alt="...">
                                    <span class="badge nft-like-badge text-fixed-white"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                </div>
                                <div class="card-body nft-body">
                                    <p class="fs-15 mb-2 fw-semibold">Vibrant Tropical Fishes</p>
                                    <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-rounded avatar-xs">
                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="mb-0 fs-12 fw-medium">Cheston NFT </p>
                                            <p class="fs-11 op-8 mb-0 lh-1">- @cheston541</p>
                                            
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <p class="mb-0">Current Bid :</p>
                                        <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                <g fill="none" fill-rule="evenodd">
                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                    <g transform="translate(227 93)"><g>
                                                    <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                    <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                    <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                    <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                    <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                </g>
                                            </svg>
                                            0.012ETH
                                        </h6>
                                    </div>
                                    <div class="d-grid">
                                        <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-4 col-md-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="mb-0 text-fixed-white bg-primary2 nft-auction-time">
                                    07hrs : 33m : 45s
                                </div>
                                <div class="position-relative">
                                    <img src="<?php echo base_url('assets/images/nft-images/6.jpg'); ?>" class="card-img-top nft-img1" alt="...">
                                    <span class="badge nft-like-badge text-fixed-white"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                </div>
                                <div class="card-body nft-body">
                                    <p class="fs-15 mb-2 fw-semibold">Ethereal Elegance NFT</p>
                                    <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                        <div class="lh-1">
                                            <span class="avatar avatar-rounded avatar-xs">
                                                <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="mb-0 fs-12 fw-medium">Cornaote NFT </p>
                                            <p class="fs-11 op-8 mb-0 lh-1">- @Cornaote245</p>
                                            
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <p class="mb-0">Current Bid :</p>
                                        <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                <g fill="none" fill-rule="evenodd">
                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                    <g transform="translate(227 93)"><g>
                                                    <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                    <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                    <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                    <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                    <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                </g>
                                            </svg>
                                            0.025ETH
                                        </h6>
                                    </div>
                                    <div class="d-grid">
                                        <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Featured Creators
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn-light btn btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                            View All<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush mb-0">
                                        <li class="list-group-item d-flex gap-1">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Meesthi Si</p>
                                                            <span class="text-muted fs-12">@meesthi05</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="ms-auto my-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 lh-1">
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm bg-primary1-transparent border border-primary1 border-opacity-10 avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/nft-images/3.jpg'); ?>" alt="" class="p-1 rounded-circle">
                                                            </span>
                                                            <span class="avatar avatar-sm bg-primary3 avatar-rounded border border-primary1 border-opacity-10">
                                                                +2
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-primary-light btn-sm "><i class="ri-add-line align-middle me-1"></i>Follow</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex gap-1">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Oorichimaru lo</p>
                                                            <span class="text-muted fs-12">@ooro001</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="ms-auto my-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 lh-1">
                                                        <span class="avatar avatar-sm bg-primary3-transparent border border-primary1 border-opacity-10 avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/11.jpg'); ?>" alt="" class="p-1 rounded-circle">
                                                        </span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-primary-light btn-sm "><i class="ri-add-line align-middle me-1"></i>Follow</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex gap-1">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Moniket Ms</p>
                                                            <span class="text-muted fs-12">@moniket98</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="ms-auto my-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 lh-1">
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm bg-primary1-transparent border border-primary1 border-opacity-10 avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/nft-images/5.jpg'); ?>" alt="" class="p-1 rounded-circle">
                                                            </span>
                                                            <span class="avatar avatar-sm bg-primary1 avatar-rounded border border-primary1 border-opacity-10">
                                                                +1
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-primary-light btn-sm "><i class="ri-add-line align-middle me-1"></i>Follow</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex gap-1">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">SakuraYM</p>
                                                            <span class="text-muted fs-12">@sakura903</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="ms-auto my-auto">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 lh-1">
                                                        <span class="avatar avatar-sm bg-primary1-transparent border border-primary1 border-opacity-10 avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/8.jpg'); ?>" alt="" class="p-1 rounded-circle">
                                                        </span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-primary-light btn-sm "><i class="ri-add-line align-middle me-1"></i>Follow</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex gap-1">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Sasuke Uchiha</p>
                                                            <span class="text-muted fs-12">@sasuke777</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="ms-auto my-auto">
                                                <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <div class="avatar-list-stacked">
                                                                <span class="avatar avatar-sm bg-primary1-transparent border border-primary1 border-opacity-10 avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/5.jpg'); ?>" alt="" class="p-1 rounded-circle">
                                                                </span>
                                                                <span class="avatar avatar-sm bg-primary2 avatar-rounded border border-primary1 border-opacity-10">
                                                                    +3
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-primary-light btn-sm "><i class="ri-add-line align-middle me-1"></i>Follow</a>
                                                    </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex gap-1">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Tomarko Ki</p>
                                                            <span class="text-muted fs-12">@tomarko98</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="ms-auto my-auto">
                                                <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-sm bg-primary1-transparent border border-primary1 border-opacity-10 avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/nft-images/4.jpg'); ?>" alt="" class="p-1 rounded-circle">
                                                            </span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-primary-light btn-sm "><i class="ri-add-line align-middle me-1"></i>Follow</a>
                                                    </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between flex-wrap">
                                    <div class="card-title">
                                        Total Statistics
                                    </div>
                                    <div class="dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Month</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="d-sm-flex flex-wrap justify-content-evenly flex-fill gap-4 p-3 border-bottom border-block-end-dashed bg-light">
                                        <div class="m-1 d-flex gap-3 justify-content-between align-items-end">
                                            <div>
                                                <div>Growth <span class="badge bg-success">0.14%</span></div>
                                                <p class="mb-0 text-muted fs-12">NFTs sold</p>
                                            </div>
                                            <h6 class="mb-0">$500K</h6>
                                        </div>
                                        <div class="m-1 d-flex gap-3 justify-content-between align-items-end">
                                            <div>
                                                <div>Market <span class="badge bg-success">0.14%</span></div>
                                                <p class="mb-0 text-muted fs-12">NFT marketplaces</p>
                                            </div>
                                            <h6 class="mb-0">$100k</h6>
                                        </div>
                                        <div class="m-1 d-flex gap-3 justify-content-between align-items-end">
                                            <div>
                                                <div>Bid <span class="badge bg-danger">0.14%</span></div>
                                                <p class="mb-0 text-muted fs-12">Highest bid</p>
                                            </div>
                                            <h6 class="mb-0">$5,000</h6>
                                        </div>
                                    </div>
                                    <div id="nft-statistics" class="p-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Recent Activities
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn-light btn btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                            View All<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush mb-0">
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between flex-xl-nowrap">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/nft-images/2.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Auction started For <span class="text-primary">Luminous Petal</span></p>
                                                            <span class="text-muted fs-12">Monisteris (@monisteris547)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted fs-12 mt-1 ms-1">5 mins ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between flex-xl-nowrap">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/nft-images/3.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Bid placed on <span class="text-primary">Radium Radiance</span><span class="text-muted"> #isther457</span></p>
                                                            <span class="text-muted fs-12">Isther (@isther457)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted fs-12 mt-1 ms-1">2 Days ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between flex-xl-nowrap">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/nft-images/4.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Artwork sold to <span class="text-primary">@Lanisis</span></p>
                                                            <span class="text-muted fs-12">Rokonis (@rokonis658)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted fs-12 mt-1 ms-1">3 Days ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between flex-xl-nowrap">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/nft-images/7.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">New Arrivals form New one <span class="text-primary1">@kanith</span></p>
                                                            <span class="text-muted fs-12">Kanith (@kanith6589)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted fs-12 mt-1 ms-1">3 Days ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between flex-xl-nowrap">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/nft-images/5.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">New artwork uploaded <span class="text-primary">@fister124</span></p>
                                                            <span class="text-muted fs-12">Simon(@simon145)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted fs-12 mt-1 ms-1">5 Days ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between flex-xl-nowrap">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/nft-images/6.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">New collection created.
                                                            </p>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <span class="text-muted fs-12 align-middle">Joviskin (@joviskin124)</span>
                                                                <span class="avatar avatar-xs bg-primary1-transparent border border-primary1 border-opacity-10">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/11.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-muted fs-12 mt-1 ms-1">5 Days ago</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-4 -->
                    <div class="row">
                        <div class="col-xxl-8 col-xl-8">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Top Collections:
                                    </div>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
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
                                        <table class="table table-hover table-bordered text-nowrap nft-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Rank</th>
                                                    <th scope="col">Collection</th>
                                                    <th scope="col">Volume</th>
                                                    <th scope="col">24h %</th>
                                                    <th scope="col">Owners</th>
                                                    <th scope="col">7d %</th>
                                                    <th scope="col">Floor Price</th>
                                                    <th scope="col">Items</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="fw-medium text-primary">#1</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/9.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">Starter Sense NFT</a></p>
                                                                <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@irukasensei229</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">2.56ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-success"><i class="ti ti-trending-up me-1 align-middle d-inline-block"></i>15.2%</span>
                                                    </td>
                                                    <td>99.4K</td>
                                                    <td><span class="text-success"><i class="ti ti-trending-up me-1 align-middle d-inline-block"></i>3.1%</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">2.31ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>12.4K</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium text-primary">#2</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/10.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">Lorem Kekkei</a></p>
                                                                <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@clansound209</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">1.25ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-success"><i class="ti ti-trending-up me-1 align-middle d-inline-block"></i>3.7%</span>
                                                    </td>
                                                    <td>22.1K</td>
                                                    <td><span class="text-danger"><i class="ti ti-trending-down me-1 align-middle d-inline-block"></i>0.5%</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">0.25ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>10.1K</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium text-primary">#3</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/11.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">NFT Uchiha</a></p>
                                                                <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@sasukeuhi990</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">2,092ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-danger"><i class="ti ti-trending-down me-1 align-middle d-inline-block"></i>23.1%</span></td>
                                                    <td>55.3K</td>
                                                    <td>
                                                        <span class="text-success"><i class="ti ti-trending-up me-1 align-middle d-inline-block"></i>9.12%</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name"> 2,000ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>52.7K</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium text-primary">#4</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/12.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">
                                                                    Lorem Ipsum Uch</a></p>
                                                                <a href="javascript:void(0);" class="fs-12 text-muted fw-normal" title="creator_name">@kakashi092</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name"> 36.25ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-danger"><i class="ti ti-trending-down me-1 align-middle d-inline-block"></i>5.2%</span></td>
                                                    <td>66.3K</td>
                                                    <td>
                                                        <span class="text-danger"><i class="ti ti-trending-down me-1 align-middle d-inline-block"></i>4.1%</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold"><a href="javascript:void(0);" title="nft_name">30.12ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>31.4K</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
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
                        <div class="col-xxl-4 col-xl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        <i class="ri-star-fill text-warning me-2"></i>Best Seller
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted">
                                            View All
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="<?php echo base_url('assets/images/nft-images/14.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Meesthi Si</p>
                                                            <span class="text-muted fs-12 d-inline-flex">@meesthi03
                                                                <span class="text-primary lh-1 fs-16 ms-1 d-inline-flex">
                                                                    <i class="ti ti-discount-check-filled "></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="fs-12 text-muted">99.9k Bidders</span>
                                                        <p class="fw-semibold mb-0 bid-amt align-middle fs-14">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                <g fill="none" fill-rule="evenodd">
                                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                    <g transform="translate(227 93)"><g>
                                                                    <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                    <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                    <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                    <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                    <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                </g>
                                                            </svg>
                                                            0.05ETH <span class="fs-11 text-muted fw-normal ms-1 d-inline-flex">: Price</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between flex-xl-nowrap">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="<?php echo base_url('assets/images/nft-images/15.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Tomarko Parizi</p>
                                                            <span class="text-muted fs-12 d-inline-flex">@tomarko98
                                                                <span class="text-primary lh-1 fs-16 ms-1 d-inline-flex">
                                                                    <i class="ti ti-discount-check-filled "></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="fs-12 text-muted">99.9k Bidders</span>
                                                        <p class="fw-semibold mb-0 bid-amt align-middle fs-14">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                <g fill="none" fill-rule="evenodd">
                                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                    <g transform="translate(227 93)"><g>
                                                                    <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                    <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                    <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                    <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                    <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                </g>
                                                            </svg>
                                                            0.05ETH <span class="fs-11 text-muted fw-normal ms-1 d-inline-flex">: Price</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between flex-xl-nowrap">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="<?php echo base_url('assets/images/nft-images/16.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Kazimo Aruke</p>
                                                            <span class="text-muted fs-12 d-inline-flex">@kazimo900
                                                                <span class="text-primary lh-1 fs-16 ms-1 d-inline-flex">
                                                                    <i class="ti ti-discount-check-filled "></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="fs-12 text-muted">99.9k Bidders</span>
                                                        <p class="fw-semibold mb-0 bid-amt align-middle fs-14">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                <g fill="none" fill-rule="evenodd">
                                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                    <g transform="translate(227 93)"><g>
                                                                    <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                    <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                    <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                    <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                    <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                </g>
                                                            </svg>
                                                            0.05ETH <span class="fs-11 text-muted fw-normal ms-1 d-inline-flex">: Price</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between flex-xl-nowrap">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="<?php echo base_url('assets/images/nft-images/17.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Oorichimaru lo</p>
                                                            <span class="text-muted fs-12 d-inline-flex">@ooro001
                                                                <span class="text-primary lh-1 fs-16 ms-1 d-inline-flex">
                                                                    <i class="ti ti-discount-check-filled "></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="fs-12 text-muted">99.9k Bidders</span>
                                                        <p class="fw-semibold mb-0 bid-amt align-middle fs-14">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                <g fill="none" fill-rule="evenodd">
                                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                    <g transform="translate(227 93)"><g>
                                                                    <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                    <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                    <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                    <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                    <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                </g>
                                                            </svg>
                                                            0.05ETH <span class="fs-11 text-muted fw-normal ms-1 d-inline-flex">: Price</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between flex-xl-nowrap">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="<?php echo base_url('assets/images/nft-images/18.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Sasuke Uchiha</p>
                                                            <span class="text-muted fs-12 d-inline-flex">@sasuke777
                                                                <span class="text-primary lh-1 fs-16 ms-1 d-inline-flex">
                                                                    <i class="ti ti-discount-check-filled "></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="fs-12 text-muted">99.9k Bidders</span>
                                                        <p class="fw-semibold mb-0 bid-amt align-middle fs-14">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                <g fill="none" fill-rule="evenodd">
                                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                    <g transform="translate(227 93)"><g>
                                                                    <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                    <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                    <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                    <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                    <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                </g>
                                                            </svg>
                                                            0.05ETH <span class="fs-11 text-muted fw-normal ms-1 d-inline-flex">: Price</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between flex-xl-nowrap">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span class="avatar avatar-md">
                                                                <img src="<?php echo base_url('assets/images/nft-images/3.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fw-medium mb-0">Nagiro Ohinavo</p>
                                                            <span class="text-muted fs-12 d-inline-flex">@nagiro096
                                                                <span class="text-primary lh-1 fs-16 ms-1 d-inline-flex">
                                                                    <i class="ti ti-discount-check-filled "></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="fs-12 text-muted">99.9k Bidders</span>
                                                        <p class="fw-semibold mb-0 bid-amt align-middle fs-14">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="65" viewBox="0 0 40 65">
                                                                <g fill="none" fill-rule="evenodd">
                                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                    <g transform="translate(227 93)"><g>
                                                                    <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                    <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                    <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                    <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                    <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                                </g>
                                                            </svg>
                                                            0.05ETH <span class="fs-11 text-muted fw-normal ms-1 d-inline-flex">: Price</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-4 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- NFT Dashboard --> 
        <script src="<?php echo base_url('assets/js/nft-dashboard.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
