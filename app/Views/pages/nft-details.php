
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">NFT</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">NFT Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">NFT Details</h1>
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
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xxl-4 col-xl-12">
                                    <div class="swiper swiper-preview-details bg-light product-details-page">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" id="img-container">
                                                <img class="img-fluid" src="<?php echo base_url('assets/images/nft-images/2.jpg'); ?>" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="<?php echo base_url('assets/images/nft-images/3.jpg'); ?>" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="<?php echo base_url('assets/images/nft-images/4.jpg'); ?>" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="<?php echo base_url('assets/images/nft-images/5.jpg'); ?>" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <div class="swiper swiper-view-details mt-2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="<?php echo base_url('assets/images/nft-images/2.jpg'); ?>" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="<?php echo base_url('assets/images/nft-images/3.jpg'); ?>" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="<?php echo base_url('assets/images/nft-images/4.jpg'); ?>" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="<?php echo base_url('assets/images/nft-images/5.jpg'); ?>" alt="img">
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-8 col-xl-12">
                                    <div class="card custom-card shadow-none border mb-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-12 mt-xxl-0 mt-3">
                                                    <div class="d-flex gap-2 align-items-center justify-content-between mb-3">
                                                        <div>
                                                            <p class="fs-18 fw-medium mb-0">Vibrant Symphony - NFT Digital Art</p>
                                                            <span class="mb-0 fw-medium fs-15">Digital Art NFT <i class="ri-checkbox-circle-fill text-primary" data-bs-toggle="tooltip" title="Verified"></i></span> 
                                                        </div>
                                                        <p class="fs-18 text-end ms-auto mb-0">
                                                            <i class="ri-heart-3-fill text-danger align-middle"></i>
                                                            <span class="fw-medium text-muted"><a class="text-info fs-14" href="javascript:void(0);">(2.4k Likes)</a></span>
                                                        </p>
                                                    </div>
                                                    <div class="mb-3">
                                                        <p class="fs-15 fw-medium mb-1">Description :</p>
                                                        <p class="text-muted mb-0">
                                                            "Vibrant Symphony" is a mesmerizing NFT artwork created by a renowned digital artist. This unique piece takes viewers on a journey through a vivid and ethereal world, where vibrant colors blend seamlessly with abstract forms. The artwork is a digital representation of the artist's imagination, combining elements of surrealism and futuristic aesthetics.
                                                        </p>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class="col-xxl-12">
                                                            <div class="ecommerce-assurance bg-light">
                                                                <div class="d-flex justify-content-between gap-2 align-items-center flex-wrap">
                                                                    <div>
                                                                        <p class="fs-14 fw-medium mb-2">Highest Bid :</p>
                                                                        <div class="avatar avatar-sm avatar-rounded p-1 bg-primary-transparent me-2 border border-primary border-opacity-10">
                                                                            <img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt="">
                                                                        </div>
                                                                        <h4 class="mb-2 d-inline-block text-success">  2.9ETH</h4>
                                                                        <p class="text-muted mb-0 fs-12"> Highest Bid By <span class="text-primary fw-medium">@abstract65</span></p>
                                                                    </div>
                                                                    <div>
                                                                        <p class="fs-14 fw-medium mb-2">Blockchain :</p>
                                                                        <div class="d-flex gap-1 align-items-center">
                                                                            <div class="avatar avatar-sm avatar-rounded p-1 bg-primary-transparent me-2 border border-primary border-opacity-10">
                                                                                <img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt="">
                                                                            </div>
                                                                            <h6 class="mb-0">  Ethereum</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <p class="fs-14 fw-medium mb-2">Sales Ends in :</p>
                                                                        <p class="nft-details-auction-time bg-primary2 px-3 py-1 text-fixed-white rounded-pill mb-0 shadow-sm"><i class="ri-time-line"></i> 07hrs : 33m : 45s</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-xxl-0 mt-3">
                                                            <p class="mb-2 fs-15 fw-medium">Collection:</p>
                                                            <div class="d-flex align-items-center fw-medium">
                                                                <span class="avatar avatar-sm avatar-rounded lh-1 me-1"><img src="<?php echo base_url('assets/images/nft-images/2.jpg'); ?>" alt=""></span>
                                                                Digital Art NFT
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-2 col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-xxl-0 mt-3">
                                                            <p class="mb-2 fs-15 fw-medium">Owned By:</p>
                                                            <div class="d-flex align-items-center fw-medium">
                                                                <span class="avatar avatar-sm avatar-rounded lh-1 me-1"><img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt=""></span>
                                                                Henry Milo
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-xxl-0 mt-3">
                                                            <p class="mb-2 fs-15 fw-medium">Published :</p>
                                                            <span class="d-block fw-medium">24, Jul 2024 - 12:45PM</span>
                                                        </div>
                                                        <div class="col-xxl-4 col-xl-12">
                                                            <p class="mb-2 fs-15 fw-medium">Price:
                                                                <span class="ms-3 badge bg-primary1-transparent">30% Off</span>
                                                            </p>
                                                            <p class="mb-0">
                                                                <span class="h3">
                                                                    <span class="avatar avatar-sm avatar-rounded p-1 bg-primary-transparent me-2 border border-primary border-opacity-10">
                                                                        <img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt=""></span>2.299<sup class="fs-14">.00</sup></span>
                                                                    <span class="mb-0 text-muted fs-12"><s>ETH2,599.00</s>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4 align-items-end justify-content-between">
                                                        <div class="col-xl-6">
                                                            <div class="d-flex gap-1 mb-2 mb-xl-0">
                                                                <button class="btn btn-primary mb-0 btn-wave flex-fill btn-lg me-1">Place a bid</button>
                                                                <button class="btn btn-secondary-light mb-0 btn-wave flex-fill btn-lg">Buy Now</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <div class="d-flex gap-2 justify-content-end">
                                                                <p class="fs-12 bg-primary-transparent badge rounded-pill text-end mb-0">
                                                                    <i class="ri-eye-line text-primary me-2 align-middle"></i>
                                                                    <span class="fw-medium"><a href="javascript:void(0);"></a>3.5k Views</span>
                                                                </p>
                                                                <p class="fs-12 bg-primary-transparent badge rounded-pill text-end mb-0">
                                                                    <i class="ri-share-line text-primary me-2 align-middle"></i>
                                                                    <span class="fw-medium"><a href="javascript:void(0);"></a>Share</span>
                                                                </p>
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
                    </div>
                    <!--End::row-1 -->

                    <!--Start::row-2 -->
                    <div class="row">
                        <div class="col-xxl-4 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Product Details :</div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted ms-auto">
                                        View More
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="fw-medium">
                                                        Artist Name
                                                    </th>
                                                    <td>Henry Milo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="fw-medium">
                                                        Royalty
                                                    </th>
                                                    <td>
                                                        10% royalty paid to the artist on secondary sales
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="fw-medium">
                                                        Total Bids
                                                    </th>
                                                    <td>
                                                        32
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="fw-medium">
                                                        Current Owner
                                                    </th>
                                                    <td>
                                                        Nikki Jones
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="fw-medium">
                                                        NFT Type
                                                    </th>
                                                    <td>
                                                        Digital art work
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Key Features :
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted ms-auto">
                                        View More
                                    </a>
                                </div>
                                <div class="card-body">
                                    <ul class="mb-0 list-unstyled">
                                        <li class="mb-3">
                                            <span class="fw-medium">NFT Title:</span> "Vibrant Symphony"
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-medium">Edition:</span> Limited edition of 25
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-medium">Tags:</span> #digitalart, #sunset, #mystical, #dreamscape
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-medium">Creation Date:</span> July 1, 2024
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-medium">Average Rating:</span> 4.8/5
                                        </li>
                                        <li class="mb-3">
                                            <span class="fw-medium">Dimensions:</span> 3000x2000 pixels
                                        </li>
                                        <li class="mb-1">
                                            <span class="fw-medium">Exhibition History:</span> Digital Art Expo 2024 - Gallery XYZ, New York City
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Reviews & Ratings
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted ms-auto">
                                        View All
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="me-2 lh-1">
                                                    <i class="ri-star-fill fs-26 text-warning"></i>
                                                </div>
                                                <div class="lh-1">
                                                    <p class="mb-0 fw-medium">4.5 out of 5<span class="mb-0 text-muted fs-11 fw-normal"> Based on (2.1k) ratings</span></p>
                                                </div>
                                            </div>
                                            <div class="swiper crypto-swiper swiper-basic">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="border rounded p-3">
                                                            <div class="d-sm-flex d-block align-items-top mb-3">
                                                                <div class="d-flex flex-fill">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="lh-1 me-2">
                                                                        <p class="mb-1 fw-medium fs-14">Christopher <span class="text-success"></span></p>
                                                                        <div class="mb-1">
                                                                            <span class="fs-11 text-muted">
                                                                                24 Nov, 2024 - 10:54PM
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-1 ms-auto text-end">
                                                                    <i class="ri-star-fill align-middle text-warning align-middle"></i>
                                                                    <i class="ri-star-fill align-middle text-warning align-middle"></i>
                                                                    <i class="ri-star-fill align-middle text-warning align-middle"></i>
                                                                    <i class="ri-star-fill align-middle text-warning align-middle"></i>
                                                                    <i class="ri-star-half-fill align-middle text-warning align-middle fs-12"></i>
                                                                    <span class="align-middle">4.1</span>
                                                                </div>
                                                            </div>
                                                            <div class="ps-sm-4 ps-0 mb-3">
                                                                <p class="fw-medium mb-1 ps-2">Vibrant Symphony &#128525;</p>
                                                                <p class="mb-0 fs-12 text-muted ps-2">Vibrant Symphony is an extraordinary NFT that immerses you in a world of vivid colors and imaginative landscapes.</p>
                                                            </div>                                            
                                                            <div class="product-images ps-sm-4 ps-0">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <div class="">
                                                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                                                <img src="<?php echo base_url('assets/images/nft-images/13.jpg'); ?>" alt="">
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                                                <img src="<?php echo base_url('assets/images/nft-images/15.jpg'); ?>" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 d-flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                                        <button class="btn btn-sm btn-primary-light me-2">Report abuse</button>
                                                                        <button class="btn btn-sm btn-icon btn-primary2-light me-2">
                                                                            <i class="ri-thumb-up-line"></i>
                                                                        </button>
                                                                        <button class="btn btn-sm btn-icon btn-primary3-light">
                                                                            <i class="ri-thumb-down-line"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="border rounded p-3">
                                                            <div class="d-sm-flex d-block align-items-top mb-3">
                                                                <div class="d-flex flex-fill">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="lh-1 me-2">
                                                                        <p class="mb-1 fw-medium fs-14">Sarah Johnson <span class="text-success"></span></p>
                                                                        <div class="mb-1">
                                                                            <span class="fs-11 text-muted">
                                                                                30 Apr, 2024 - 03:22PM
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-1 ms-auto text-end">
                                                                    <i class="ri-star-fill align-middle text-warning align-middle"></i>
                                                                    <i class="ri-star-fill align-middle text-warning align-middle"></i>
                                                                    <i class="ri-star-fill align-middle text-warning align-middle"></i>
                                                                    <i class="ri-star-half-fill align-middle text-warning align-middle fs-12"></i>
                                                                    <i class="ri-star-line align-middle text-warning align-middle fs-12"></i>
                                                                    <span class="align-middle">3.7</span>
                                                                </div>
                                                            </div>
                                                            <div class="ps-sm-4 ps-0 mb-3">
                                                                <p class="fw-medium mb-1 ps-2">Enchanting Dreamscape</p>
                                                                <p class="mb-0 fs-12 text-muted ps-2">Enchanting Dreamscape offers a surreal journey through dream-like imagery and subtle symbolism.</p>
                                                            </div>                                            
                                                            <div class="product-images ps-sm-4 ps-0">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <div class="">
                                                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                                                <img src="<?php echo base_url('assets/images/nft-images/6.jpg'); ?>" alt="">
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                                                <img src="<?php echo base_url('assets/images/nft-images/7.jpg'); ?>" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 d-flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                                        <button class="btn btn-sm btn-primary-light me-2">Report abuse</button>
                                                                        <button class="btn btn-sm btn-icon btn-primary2-light me-2">
                                                                            <i class="ri-thumb-up-line"></i>
                                                                        </button>
                                                                        <button class="btn btn-sm btn-icon btn-primary3-light">
                                                                            <i class="ri-thumb-down-line"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                                    
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="border rounded p-3">
                                                            <div class="d-sm-flex d-block align-items-top mb-3">
                                                                <div class="d-flex flex-fill">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="lh-1 me-2">
                                                                        <p class="mb-1 fw-medium fs-14">Emily Brown <span class="text-success"></span></p>
                                                                        <div class="mb-1">
                                                                            <span class="fs-11 text-muted">
                                                                                15 May, 2024 - 09:15AM
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-1 ms-auto text-end">
                                                                    <i class="ri-star-fill align-middle text-warning align-middle"></i>
                                                                    <i class="ri-star-fill align-middle text-warning align-middle"></i>
                                                                    <i class="ri-star-fill align-middle text-warning align-middle"></i>
                                                                    <i class="ri-star-half-fill align-middle text-warning align-middle fs-12"></i>
                                                                    <i class="ri-star-line align-middle text-warning align-middle fs-12"></i>
                                                                    <span class="align-middle">3.8</span>
                                                                </div>
                                                            </div>
                                                            <div class="ps-sm-4 ps-0 mb-3">
                                                                <p class="fw-medium mb-1 ps-2">Oceanic Serenity &#127754;</p>
                                                                <p class="mb-0 fs-12 text-muted ps-2">Oceanic Serenity captivates with its tranquil underwater scenes and ethereal marine life.</p>
                                                            </div>                                            
                                                            <div class="product-images ps-sm-4 ps-0">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <div class="">
                                                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                                                <img src="<?php echo base_url('assets/images/nft-images/6.jpg'); ?>" alt="">
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                                                                <img src="<?php echo base_url('assets/images/nft-images/3.jpg'); ?>" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 d-flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                                        <button class="btn btn-sm btn-primary-light me-2">Report abuse</button>
                                                                        <button class="btn btn-sm btn-icon btn-primary2-light me-2">
                                                                            <i class="ri-thumb-up-line"></i>
                                                                        </button>
                                                                        <button class="btn btn-sm btn-icon btn-primary3-light">
                                                                            <i class="ri-thumb-down-line"></i>
                                                                        </button>
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
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->

                    <!--Start::row-3 -->
                    <div class="row">
                        <div class="col-xxl-3 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Popular NFT's :
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="avatar me-2">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/16.jpg'); ?>" alt="">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-1 fs-14 fw-medium similar-product-name text-truncate">Digital Dreamscapes</p>
                                                                    <p class="mb-0">
                                                                        <span class="badge bg-success">18.5k<i class="ri-heart-3-fill align-middle ms-1"></i></span>
                                                                        <span class="text-muted ms-1">(18,512)</span>
                                                                    </p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <p class="mb-0 fs-16 fw-medium">
                                                                        <span class="avatar avatar-xs avatar-rounded p-1"><img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt=""></span>2.299 ETH
                                                                    </p>
                                                                    <p class="mb-0 text-muted">
                                                                        <s><span class="avatar avatar-xs avatar-rounded p-1"><img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt=""></span>3.299 ETH</s>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="avatar me-2">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/18.jpg'); ?>" alt="">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-1 fs-14 fw-medium similar-product-name text-truncate">Galactic Gardens</p>
                                                                    <p class="mb-0">
                                                                        <span class="badge bg-success">4.2k<i class="ri-heart-3-fill align-middle ms-1"></i></span>
                                                                        <span class="text-muted ms-1">(4,356)</span>
                                                                    </p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <p class="mb-0 fs-16 fw-medium">
                                                                        <span class="avatar avatar-xs avatar-rounded p-1"><img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt=""></span>1.899 ETH
                                                                    </p>
                                                                    <p class="mb-0 text-muted">
                                                                        <s><span class="avatar avatar-xs avatar-rounded p-1"><img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt=""></span>2.799 ETH</s>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="avatar me-2">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/10.jpg'); ?>" alt="">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-1 fs-14 fw-medium similar-product-name text-truncate">Pixelated Paradise</p>
                                                                    <p class="mb-0">
                                                                        <span class="badge bg-success">9.1k<i class="ri-heart-3-fill align-middle ms-1"></i></span>
                                                                        <span class="text-muted ms-1">(9,153)</span>
                                                                    </p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <p class="mb-0 fs-16 fw-medium">
                                                                        <span class="avatar avatar-xs avatar-rounded p-1"><img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt=""></span>3.599 ETH
                                                                    </p>
                                                                    <p class="mb-0 text-muted">
                                                                        <s><span class="avatar avatar-xs avatar-rounded p-1"><img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt=""></span>5.499 ETH</s>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="avatar me-2">
                                                                    <img src="<?php echo base_url('assets/images/nft-images/11.jpg'); ?>" alt="">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-1 fs-14 fw-medium similar-product-name text-truncate">Vibrant Voyages</p>
                                                                    <p class="mb-0">
                                                                        <span class="badge bg-success">15.7k<i class="ri-heart-3-fill align-middle ms-1"></i></span>
                                                                        <span class="text-muted ms-1">(15,789)</span>
                                                                    </p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <p class="mb-0 fs-16 fw-medium">
                                                                        <span class="avatar avatar-xs avatar-rounded p-1"><img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt=""></span>6.499 ETH
                                                                    </p>
                                                                    <p class="mb-0 text-muted">
                                                                        <s><span class="avatar avatar-xs avatar-rounded p-1"><img src="<?php echo base_url('assets/images/crypto-currencies/regular/Ethereum.svg'); ?>" alt=""></span>9.999 ETH</s>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-grid">
                                                        <button class="btn btn-secondary-light">View All NFT's</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9">
                            <div class="d-flex gap-1 align-items-center justify-content-between mb-3">
                                <h6 class="fw-medium mb-0">Explore More NFT's:</h6>
                                <a href="javascript:void(0);" class="btn btn-primary-light btn-sm ms-auto">
                                    View More
                                </a>
                            </div>
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
                                                        <span class="badge bg-primary2-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-rounded avatar-xs">
                                                            <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-12 fw-medium">Manistics NFT </p>
                                                        <p class="fs-11 text-muted mb-0 lh-1">- @manistics454</p>
                                                        
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
                                                        <span class="badge bg-primary2-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-rounded avatar-xs">
                                                            <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-12 fw-medium">Manistics NFT </p>
                                                        <p class="fs-11 text-muted mb-0 lh-1">- @manistics454</p>
                                                        
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
                                                    <p class="fs-15 mb-2 fw-semibold">CyberCreations</p>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-primary2-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>1.43k</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-rounded avatar-xs">
                                                            <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fs-12 fw-medium">CyberArt NFT </p>
                                                        <p class="fs-11 text-muted mb-0 lh-1">- @cyberartworks154</p>
                                                        
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
                                                        <p class="fs-15 mb-2 fw-semibold">Dreamscapes</p>
                                                        <div class="ms-auto">
                                                            <span class="badge bg-primary2-transparent"><i class="ri-heart-fill me-1 text-danger align-middle d-inline-block"></i>2.9k</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-3 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-xs">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fs-12 fw-medium">GeoNFT NFT </p>
                                                            <p class="fs-11 text-muted mb-0 lh-1">- @geonft_designs47</p>
                                                            
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
                    <!--End::row-3 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Swiper JS -->
        <script src="<?php echo base_url('assets/libs/swiper/swiper-bundle.min.js'); ?>"></script>

        <!-- Internal NFT-Details JS -->
        <script src="<?php echo base_url('assets/js/nft-details.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
