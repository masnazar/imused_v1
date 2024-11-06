
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">NFT</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Market Place</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Market Place</h1>
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
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                        <div>
                                            <ul class="nav nav-tabs nav-tabs-header mb-0" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-all" aria-selected="true">All</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-art" aria-selected="false" tabindex="-1">Art</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-gaming" aria-selected="false" tabindex="-1">Gaming</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-domain" aria-selected="false" tabindex="-1">Domain</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-music" aria-selected="false" tabindex="-1">Music</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-realestate" aria-selected="false" tabindex="-1">Real Estate</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-sports" aria-selected="false" tabindex="-1">Sports</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-fashion" aria-selected="false" tabindex="-1">Fashion</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-avatars" aria-selected="false" tabindex="-1">Avatars</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-memes" aria-selected="false" tabindex="-1">Memes</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <button type="button" class="btn btn-sm btn-secondary btn-wave">Filters</button>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-wave btn-primary waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">New Collection</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">High - Low</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Low - High</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tab-content">
                                <div class="tab-pane show active p-0 border-0" id="nft-all" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="<?php echo base_url('assets/images/nft-images/2.jpg'); ?>" class="card-img mb-3" alt="...">
                                                        <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 04hrs : 24m : 38s </p>
                                                    </div>
                                                    <div>
                                                        <div class="d-flex align-items-start gap-2">
                                                            <p class="fs-15 mb-2 fw-semibold">Abstract Digital Art</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0  fw-medium">Manistics NFT </p>
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
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/3.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 03hrs : 12m : 45s </p>
                                                        </div>
                                                    
                                                    <div>
                                                        <div class="d-flex align-items-start gap-2">
                                                            <p class="fs-15 mb-2 fw-semibold">Abstract Digital Art</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0  fw-medium">Manistics NFT </p>
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
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/4.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 05hrs : 03m : 20s </p>
                                                        </div>
                                                    <div>
                                                        <div class="d-flex align-items-start gap-2">
                                                            <p class="fs-15 mb-2 fw-semibold">Cyberpunk Creations</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0  fw-medium">CyberArt NFT </p>
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
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/5.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 02hrs : 50m : 55s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Geometric Dreamscapes</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>2.9k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">GeoNFT NFT </p>
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
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/6.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 06hrs : 15m : 10s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Vibrant Pixel Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>2.5k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">PixelPerfect  </p>
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
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/7.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 01hrs : 58m : 23s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Surreal Fantasy Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.8k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">Fantasia NFT  </p>
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
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/8.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 03hrs : 45m : 50s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Celestial Digital Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>5.1k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">Celestial NFT  </p>
                                                                    <p class="fs-11 text-muted mb-0">- @celestial_nft55</p>
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
                                                                    0.055ETH
                                                                </h6>
                                                            </div>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/9.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Prismatic Universe</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.64k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">Prisma NFT  </p>
                                                                    <p class="fs-11 text-muted mb-0">- @prisma_universe77</p>
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
                                                                    0.035ETH
                                                                </h6>
                                                            </div>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination justify-content-end mb-4">
                                                <li class="page-item disabled">
                                                    <a class="page-link">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0);">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-art" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/10.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 02hrs : 50m : 55s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Prismatic Universe</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.64k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">Prisma NFT  </p>
                                                                    <p class="fs-11 text-muted mb-0">- @prisma_universe77</p>
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
                                                                    0.035ETH
                                                                </h6>
                                                            </div>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="<?php echo base_url('assets/images/nft-images/11.jpg'); ?>" class="card-img mb-3" alt="...">
                                                        <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 02hrs : 50m : 55s </p>
                                                    </div>
                                                    <div>
                                                        <div class="d-flex align-items-start gap-2">
                                                            <p class="fs-15 mb-2 fw-semibold">Celestial Digital Art</p>
                                                            <div class="ms-auto">
                                                                <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>5.1k</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0  fw-medium">Prisma NFT  </p>
                                                                <p class="fs-11 text-muted mb-0">- @prisma_universe77</p>
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
                                                                0.055ETH
                                                            </h6>
                                                        </div>
                                                        <div class="d-grid">
                                                            <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/12.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 01hrs : 58m : 23s </p>
                                                        </div>
                                                        
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Ethereal Dreams</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>0.37k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">Ethereal NFT  </p>
                                                                    <p class="fs-11 text-muted mb-0">- @ethereal_dreams</p>
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
                                                                    0.08ETH
                                                                </h6>
                                                            </div>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-gaming" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/13.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 03hrs : 12m : 45s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Geometric Dreamscapes</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>2.9k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">GeoNFT NFT  </p>
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
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/14.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 05hrs : 03m : 20s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Celestial Digital Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>5.1k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">Celestial NFT  </p>
                                                                    <p class="fs-11 text-muted mb-0">- @celestial_nft55</p>
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
                                                                    0.055ETH
                                                                </h6>
                                                            </div>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-primary mb-md-0 mb-4">Place Bid</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-domain" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/15.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Surreal Fantasy Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.8k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">Fantasia NFT  </p>
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
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-music" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/16.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Vibrant Pixel Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>2.5k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">PixelPerfect NFT  </p>
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
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-realestate" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/17.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Geometric Dreamscapes</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>2.9k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">GeoNFT NFT  </p>
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
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-sports" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/18.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Vibrant Pixel Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>2.5k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">PixelPerfect NFT  </p>
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
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-fashion" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/5.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Geometric Dreamscapes</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>2.9k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">GeoNFT NFT  </p>
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
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-avatars" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/7.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Vibrant Pixel Art</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>2.5k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">PixelPerfect NFT  </p>
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
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-memes" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="position-relative overflow-hidden rounded">
                                                            <img src="<?php echo base_url('assets/images/nft-images/11.jpg'); ?>" class="card-img mb-3" alt="...">
                                                            <p class="mb-0 text-fixed-white bg-primary2 nft-auction-time"> 07hrs : 06m : 15s </p>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex align-items-start gap-2">
                                                                <p class="fs-15 mb-2 fw-semibold">Geometric Dreamscapes</p>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-danger-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>2.9k</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-rounded avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0  fw-medium">GeoNFT NFT  </p>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	


<?= $this->endSection('scripts'); ?>
