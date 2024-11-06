
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
                                    <li class="breadcrumb-item active" aria-current="page">Live Auction</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Live Auction</h1>
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
                        <div class="col-xxl-2 col-xl-4">
                            <div class="card custom-card products-navigation-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Filter
                                    </div>
                                    <button class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">Clear All</button>
                                </div>
                                <div class="card-body p-0">
                                    <div class="p-3 border-bottom">
                                        <div class="fw-medium mb-0">Creator Verification</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Verified-Creator" checked="">
                                                <label class="form-check-label" for="Verified-Creator">
                                                    Verified
                                                </label>
                                                <span class="badge bg-light text-default float-end">13</span>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Non-Verified-Creator">
                                                <label class="form-check-label" for="Non-Verified-Creator">
                                                    Non-Verified
                                                </label>
                                                <span class="badge bg-light text-default float-end">67</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="fw-medium mb-0">NFT Type</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="NFT-Art" checked="">
                                                <label class="form-check-label" for="NFT-Art">
                                                    Art
                                                </label>
                                                <span class="badge bg-light text-default float-end">45</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="NFT-Graphic">
                                                <label class="form-check-label" for="NFT-Graphic">
                                                    Graphic
                                                </label>
                                                <span class="badge bg-light text-default float-end">30</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="NFT-Music">
                                                <label class="form-check-label" for="NFT-Music">
                                                    Music
                                                </label>
                                                <span class="badge bg-light text-default float-end">15</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="NFT-Fashion">
                                                <label class="form-check-label" for="NFT-Fashion">
                                                    Fashion
                                                </label>
                                                <span class="badge bg-light text-default float-end">19</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="NFT-Trending">
                                                <label class="form-check-label" for="NFT-Trending">
                                                    Trending
                                                </label>
                                                <span class="badge bg-light text-default float-end">19</span>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="NFT-Games">
                                                <label class="form-check-label" for="NFT-Games">
                                                    Games
                                                </label>
                                                <span class="badge bg-light text-default float-end">45</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="fw-medium mb-0">Price Range</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-Under-1ETH" checked>
                                                <label class="form-check-label" for="Price-Under-1ETH">
                                                    Under 1 ETH
                                                </label>
                                                <span class="badge bg-light text-default float-end">55</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-1-3ETH">
                                                <label class="form-check-label" for="Price-1-3ETH">
                                                    1 - 3 ETH
                                                </label>
                                                <span class="badge bg-light text-default float-end">34</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-3-5ETH">
                                                <label class="form-check-label" for="Price-3-5ETH">
                                                    3 - 5 ETH
                                                </label>
                                                <span class="badge bg-light text-default float-end">34</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-5-7ETH">
                                                <label class="form-check-label" for="Price-5-7ETH">
                                                    5 - 7 ETH
                                                </label>
                                                <span class="badge bg-light text-default float-end">12</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-7-8ETH">
                                                <label class="form-check-label" for="Price-7-8ETH">
                                                    7 - 8 ETH
                                                </label>
                                                <span class="badge bg-light text-default float-end">12</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-10-15ETH">
                                                <label class="form-check-label" for="Price-10-15ETH">
                                                    10 - 15 ETH
                                                </label>
                                                <span class="badge bg-light text-default float-end">12</span>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-Above-15ETH">
                                                <label class="form-check-label" for="Price-Above-15ETH">
                                                    Above 15 ETH
                                                </label>
                                                <span class="badge bg-light text-default float-end">7</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="fw-medium mb-0">Token Standard</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="ERC-721">
                                                <label class="form-check-label" for="ERC-721">
                                                    ERC-721
                                                </label>
                                                <span class="badge bg-light text-default float-end">50</span>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="ERC-1155">
                                                <label class="form-check-label" for="ERC-1155">
                                                    ERC-1155
                                                </label>
                                                <span class="badge bg-light text-default float-end">25</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="fw-medium mb-0">Auction Status</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Status-Active" checked="">
                                                <label class="form-check-label" for="Status-Active">
                                                    Active
                                                </label>
                                                <span class="badge bg-light text-default float-end">89</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Status-OnHold">
                                                <label class="form-check-label" for="Status-OnHold">
                                                    On Hold
                                                </label>
                                                <span class="badge bg-light text-default float-end">05</span>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Status-Ended">
                                                <label class="form-check-label" for="Status-Ended">
                                                    Ended
                                                </label>
                                                <span class="badge bg-light text-default float-end">25</span>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="p-3 border-bottom">
                                        <div class="fw-medium mb-0">Ownership Status</div>
                                        <div class="px-0 py-3 pb-1">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Owned">
                                                <label class="form-check-label" for="Owned">
                                                    Owned
                                                </label>
                                                <span class="badge bg-light text-default float-end">40</span>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Not-Owned">
                                                <label class="form-check-label" for="Not-Owned">
                                                    Not Owned
                                                </label>
                                                <span class="badge bg-light text-default float-end">60</span>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-8">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-Items-center justify-content-between mb-3">
                                        <h6 class="fw-medium mb-0">Categories</h6>
                                        <div class="d-flex gap-2 align-items-center">
                                            <a class="categories-arrow left bg-primary-transparent">
                                                <i class="ri-arrow-left-s-line text-primary"></i>
                                            </a>
                                            <a class="categories-arrow right bg-primary text-fixed-white">
                                                <i class="ri-arrow-right-s-line text-fixed-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
                                        <div class="nft-tag nft-tag-primary active">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <span class="nft-tag-icon"><i class="ri-earth-line fs-18 align-middle"></i></span>
                                            <span class="nft-tag-text">All Items</span>
                                        </div>
                                        <div class="nft-tag nft-tag-primary1">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <span class="nft-tag-icon"><i class="ri-fire-line fs-18 align-middle"></i></span>
                                            <span class="nft-tag-text">New Trends</span>
                                        </div>
                                        <div class="nft-tag nft-tag-primary2">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <span class="nft-tag-icon"><i class="ri-robot-2-line fs-18 align-middle"></i></span>
                                            <span class="nft-tag-text">Virtual</span>
                                        </div>
                                        <div class="nft-tag nft-tag-primary3">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <span class="nft-tag-icon"><i class="ri-camera-line fs-18 align-middle"></i></span>
                                            <span class="nft-tag-text">Photography</span>
                                        </div>
                                        <div class="nft-tag nft-tag-secondary">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <span class="nft-tag-icon"><i class="ri-palette-line fs-18 align-middle"></i></span>
                                            <span class="nft-tag-text">Art Work</span>
                                        </div>
                                        <div class="nft-tag nft-tag-success">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <span class="nft-tag-icon"><i class="ri-gift-line fs-18 align-middle"></i></span>
                                            <span class="nft-tag-text">Others</span>
                                        </div>                            
                                    </div>
                                    <div class="row">
                                        <h6 class="fw-medium mb-3">Live Auction:</h6>
                                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="<?php echo base_url('assets/images/nft-images/2.jpg'); ?>" class="card-img mb-3" alt="...">
                                                        <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 04hrs : 24m : 38s </p>
                                                    </div>
                                                    <div>
                                                        <div class="d-flex align-items-start gap-2 flex-wrap">
                                                            <p class="fs-15 mb-2 fw-semibold">Abstract Digital Art</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-medium">Manistics NFT </p>
                                                                <p class="fs-11 text-muted mb-0">- @manistics454</p>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                                            <p class="mb-0 fw-medium">Current Bid :</p>
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
                                        </div>
                                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/3.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 03hrs : 12m : 45s </p>
                                                        </div>
                                                    
                                                    <div>
                                                        <div class="d-flex align-items-start gap-2 flex-wrap">
                                                            <p class="fs-15 mb-2 fw-semibold">Abstract Digital Art</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-medium">Manistics NFT </p>
                                                                <p class="fs-11 text-muted mb-0">- @manistics454</p>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                                            <p class="mb-0 fw-medium">Current Bid :</p>
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
                                        </div>
                                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/4.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 05hrs : 03m : 20s </p>
                                                        </div>
                                                    <div>
                                                        <div class="d-flex align-items-start gap-2 flex-wrap">
                                                            <p class="fs-15 mb-2 fw-semibold">CyberCreations</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-medium">CyberArt NFT </p>
                                                                <p class="fs-11 text-muted mb-0">- @cyberartworks154</p>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                                            <p class="mb-0 fw-medium">Current Bid :</p>
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
                                                                0.014ETH
                                                            </h6>
                                                        </div>
                                                        <div class="d-grid">
                                                            <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/5.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 02hrs : 50m : 55s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2 flex-wrap">
                                                                <p class="fs-15 mb-2 fw-semibold">Dreamscapes</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>2.9k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-sm">
                                                                        <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0 fw-medium">GeoNFT NFT </p>
                                                                    <p class="fs-11 text-muted mb-0">- @geonft_designs47</p>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                                <p class="mb-0 fw-medium">Current Bid :</p>
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
                                                                    0.016ETH
                                                                </h6>
                                                            </div>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/6.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 06hrs : 15m : 10s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2 flex-wrap">
                                                                <p class="fs-15 mb-2 fw-semibold">Vibrant Pixel Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>2.5k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-sm">
                                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0 fw-medium">PixelPerfect </p>
                                                                    <p class="fs-11 text-muted mb-0">- @pixelperfectnft74</p>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                                <p class="mb-0 fw-medium">Current Bid :</p>
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
                                                                    0.017ETH
                                                                </h6>
                                                            </div>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/7.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 01hrs : 58m : 23s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2 flex-wrap">
                                                                <p class="fs-15 mb-2 fw-semibold">Surreal Fantasy Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.8k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-sm">
                                                                        <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0 fw-medium">Fantasia NFT </p>
                                                                    <p class="fs-11 text-muted mb-0">- @fantasianft13</p>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                                <p class="mb-0 fw-medium">Current Bid :</p>
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
                                                                    0.018ETH
                                                                </h6>
                                                            </div>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination text-center justify-content-end mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">16</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">17</a></li>
                                                <li class="page-item">
                                                    <a class="page-link text-primary" href="javascript:void(0)">
                                                        next
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-12">
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Top NFT Creators
                                            </div>
                                            <div>
                                                <button class="btn btn-primary-light btn-sm btn-wave">View All</button>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/2.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="align-items-center">
                                                                <p class="mb-0 fw-medium">Emily Watson<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                                                <span class="fs-12 text-muted">@emilywatson</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="d-block fw-medium text-success">+21.10ETH</span>
                                                            <span class="d-block text-muted fs-11">25 NFT's</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/18.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="align-items-center">
                                                                <p class="mb-0 fw-medium">Daniel Green<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                                                <span class="fs-12 text-muted">@danielgreen</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="d-block fw-medium text-success">+18.75ETH</span>
                                                            <span class="d-block text-muted fs-11">20 NFT's</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/8.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="align-items-center">
                                                                <p class="mb-0 fw-medium">Sophia Cruz<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                                                <span class="fs-12 text-muted">@sophiacruz</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="d-block fw-medium text-success">+15.90ETH</span>
                                                            <span class="d-block text-muted fs-11">18 NFT's</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/11.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="align-items-center">
                                                                <p class="mb-0 fw-medium">Oliver Bennett<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                                                <span class="fs-12 text-muted">@oliverbennett</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="d-block fw-medium text-success">+14.25ETH</span>
                                                            <span class="d-block text-muted fs-11">16 NFT's</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/17.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="align-items-center">
                                                                <p class="mb-0 fw-medium">Isabella Par<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                                                <span class="fs-12 text-muted">@isabella</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="d-block fw-medium text-success">+12.80ETH</span>
                                                            <span class="d-block text-muted fs-11">14 NFT's</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/31.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="align-items-center">
                                                                <p class="mb-0 fw-medium">Liam Cooper<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                                                <span class="fs-12 text-muted">@liamcooper</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="d-block fw-medium text-success">+10.55ETH</span>
                                                            <span class="d-block text-muted fs-11">12 NFT's</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-xxl-12">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Latest NFT Transactions
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Today<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
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
                                                    <div class="d-flex gap-3 align-items-center flex-wrap flex-xxl-nowrap">
                                                        <span class="avatar avatar-lg lh-1">
                                                            <img src="<?php echo base_url('assets/images/nft-images/31.png'); ?>" alt="">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <div class="mb-1 d-flex align-Items-center gap-2 justify-content-between"><a href="javascript:void(0);" class="fw-medium">Galactic Treasures</a><span class="fs-10 text-muted ms-2 d-inline-block ms-auto">24 mins ago</span></div>
                                                            <div class="fs-12">Sold to <a class="text-decoration-underline" href="javascript:void(0);">Mitchell</a> for <span class="text-success fw-medium fs-12">0.57ETH</span>.</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex gap-3 align-items-center flex-wrap flex-xxl-nowrap">
                                                        <span class="avatar avatar-lg lh-1">
                                                            <img src="<?php echo base_url('assets/images/nft-images/25.png'); ?>" alt="">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <div class="mb-1 d-flex align-Items-center gap-2 justify-content-between"><span class="fw-medium">Galactic Treasures</span><span class="fs-10 text-muted ms-2 d-inline-block ms-auto">16 mins ago</span></div>
                                                            <div class="fs-12">Started following <span class="fw-medium">Mark Zuckerberg</span>.</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex gap-3 align-items-center flex-wrap flex-xxl-nowrap">
                                                        <span class="avatar avatar-lg lh-1">
                                                            <img src="<?php echo base_url('assets/images/nft-images/21.png'); ?>" alt="">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <div class="mb-1 d-flex align-Items-center gap-2 justify-content-between"><span class="fw-medium">Digital Cosmos</span><span class="fs-10 text-muted ms-2 d-inline-block ms-auto">5 mins ago</span></div>
                                                            <div class="fs-12">Showed interest in purchasing <a href="javascript:void(0);" class="fs-12 text-warning fw-medium">Digital Cosmos</a>.</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex gap-3 align-items-center flex-wrap flex-xxl-nowrap">
                                                        <span class="avatar avatar-lg lh-1">
                                                            <img src="<?php echo base_url('assets/images/nft-images/26.png'); ?>" alt="">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <div class="mb-1 d-flex align-Items-center gap-2 justify-content-between"><span class="fw-medium">Digital Cosmos</span><span class="fs-10 text-muted ms-2 d-inline-block ms-auto">16 mins ago</span></div>
                                                            <div class="fs-12">Purchased from <a href="javascript:void(0);" class="text-decoration-underline">CyberCanvas</a> for <span class="fw-medium fs-12 text-pink">1.345ETH</span>.</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex gap-3 align-items-center flex-wrap flex-xxl-nowrap">
                                                        <span class="avatar avatar-lg lh-1">
                                                            <img src="<?php echo base_url('assets/images/nft-images/21.png'); ?>" alt="">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <div class="mb-1 d-flex align-Items-center gap-2 justify-content-between"><a href="javascript:void(0);" class="fw-medium">Cosmic Odyssey</a><span class="fs-10 text-muted ms-2 d-inline-block ms-auto">30 mins ago</span></div>
                                                            <div class="fs-12">Listed <span class="fw-medium">Cosmic Odyssey</span> for auction.</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex gap-3 align-items-center flex-wrap flex-xxl-nowrap">
                                                        <span class="avatar avatar-lg lh-1">
                                                            <img src="<?php echo base_url('assets/images/nft-images/31.png'); ?>" alt="">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <div class="mb-1 d-flex align-Items-center gap-2 justify-content-between"><span class="fw-medium">Galactic Treasures</span><span class="fs-10 text-muted ms-2 d-inline-block ms-auto">1 hour ago</span></div>
                                                            <div class="fs-12">Gifted to <a href="javascript:void(0);" class="text-decoration-underline">Alice</a> as a token of appreciation.</div>
                                                        </div>
                                                    </div>
                                                </li>                                       
                                            </ul>
                                            <div class="p-3 pt-2 text-center">
                                                <a href="javascript:void(0);" class="text-center text-primary text-decoration-underline">View All NFT Transactions</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	


<?= $this->endSection('scripts'); ?>