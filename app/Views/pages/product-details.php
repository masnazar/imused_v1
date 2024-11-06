
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- glightbox Css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/glightbox/css/glightbox.min.css'); ?>">
        
        <!-- Swiper Css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/swiper/swiper-bundle.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Products Details</h1>
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

                    <!-- Start:: Row-1 -->
                    <div class="row">
                        <div class="col-xxl-5">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <a href="<?php echo base_url('assets/images/ecommerce/png/1.png'); ?>" class="glightbox card border-0 mb-0" data-gallery="gallery1" data-title="Compact Laptop (1/5)" data-type="image" data-draggable="true"> 
                                        <div class="ecommerce-gallery d-block text-center">
                                            <span class="badge bg-primary2 tag-badge">Featured</span>
                                            <img src="<?php echo base_url('assets/images/ecommerce/png/1.png'); ?>" alt="image" class="">
                                            <span class="p-3 py-2 rounded text-fixed-white view-lightbox ">View More Images</span>
                                        </div>
                                    </a>    
                                    <div class="row ad-gallery">
                                        <div class="col-xl-3">
                                            <a href="<?php echo base_url('assets/images/ecommerce/png/2.png'); ?>" class="glightbox card" data-gallery="gallery1" data-title="Grey Laptop (2/5)" data-type="image" data-draggable="true">
                                                <img src="<?php echo base_url('assets/images/ecommerce/png/2.png'); ?>" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-xl-3">
                                            <a href="<?php echo base_url('assets/images/ecommerce/png/3.png'); ?>" class="glightbox card" data-gallery="gallery1" data-title="Litson's Laptop (3/5)" data-type="image" data-draggable="true">
                                                <img src="<?php echo base_url('assets/images/ecommerce/png/3.png'); ?>" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-xl-3">
                                            <a href="<?php echo base_url('assets/images/ecommerce/png/4.png'); ?>" class="glightbox card" data-gallery="gallery1" data-title="Prism Laptop (4/5)" data-type="image" data-draggable="true">
                                                <img src="<?php echo base_url('assets/images/ecommerce/png/4.png'); ?>" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-xl-3">
                                            <a href="<?php echo base_url('assets/images/ecommerce/png/5.png'); ?>" class="glightbox card" data-gallery="gallery1" data-title="Trends Laptop (5/5)" data-type="image" data-draggable="true">
                                                <img src="<?php echo base_url('assets/images/ecommerce/png/5.png'); ?>" alt="image" >
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center d-flex gap-2 flex-wrap justify-content-center">
                                    <a href="<?php echo base_url('checkout'); ?>" class="btn btn-primary btn-w-lg me-2"><i class="bx bx-credit-card fs-16 align-middle"></i> Buy Now</a>
                                    <a href="<?php echo base_url('cart'); ?>" class="btn btn-primary1 btn-w-lg"><i class="bx bx-cart-add fs-16 align-middle"></i> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <p class="fs-20 fw-semibold mb-3">TechPro X15 Elite - 2024 Edition 15.6" 4K UHD Touchscreen Laptop with Intel i7, 16GB RAM, 1TB SSD, GTX 1650 Ti, Windows 10 Home</p>
                                        <p class="fs-16 mb-3">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star-half text-warning"></i>
                                            <span class="fw-medium ms-1 fs-13">4.6<a class="text-muted ms-2" href="javascript:void(0);">(3.1k Reviews)</a></span>
                                        </p>
                                        <div class="d-flex gap-3 align-items-center mb-3">
                                            <p class="mb-1"><span class="h2 fw-semibold">$1,899</span></p>
                                            <div class="mb-0 text-muted fs-12">
                                                <p class="mb-0"> <s> $2,599</s></p>
                                                <p class="mb-0 text-info fw-medium fs-15">Don't Miss Out! Save Up to 42% OFF!</p>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <p class="fs-15 fw-semibold mb-1">Description :</p>
                                            <p class="text-muted mb-0 fs-13">
                                                Experience unrivaled performance with the TechPro X15 Elite - 2024 Edition laptop. Featuring a stunning 4K UHD touchscreen display, powerful Intel Core i7 processor, 16GB RAM, and 1TB SSD storage.
                                            </p>
                                        </div>
                                        <div class="d-flex gap-4 align-items-center mb-3 justify-content-between flex-wrap">
                                            <div class="d-flex gap-3 align-items-center">
                                                <p class="fs-15 fw-semibold mb-1">RAM :</p>
                                                <div class="btn btn-light">8GB</div>
                                                <div class="btn btn-light">16GB</div>
                                            </div>
                                            <div class="d-flex gap-3 align-items-center">
                                                <p class="fs-15 fw-semibold mb-1">SSD Storage :</p>
                                                <div class="btn btn-light">256GB</div>
                                                <div class="btn btn-light">1TB</div>
                                            </div>
                                            <div class="d-flex gap-3 align-items-center">
                                                <a href="javascript:void(0);" class="mb-0 text-primary3 fw-medium text-decoration-underline"><i class="ri-coupon-2-line me-1 align-middle d-inline-block"></i>Get a Coupon</a>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2 align-items-center mb-3">
                                            <p class="mb-1 text-success py-1 px-2 bg-success-transparent rounded-pill fs-12"><i class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> Instock</p>
                                            <p class="mb-1 text-success py-1 px-2 bg-success-transparent rounded-pill fs-12"><i class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> Free Shipping</p>
                                            <p class="mb-1 text-success py-1 px-2 bg-success-transparent rounded-pill fs-12"><i class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> Easy Return</p>
                                        </div>
                                        <div class="d-flex gap-5 align-items-center mb-4">
                                            <div class="d-flex gap-4 align-items-center">
                                                <p class="fs-15 fw-semibold mb-1">Quantity :</p>
                                                <div class="product-quantity-container ecommerce-page-quantity">
                                                    <div class="input-group rounded flex-nowrap gap-1">
                                                        <button class="btn btn-icon btn-wave btn-sm border rounded-pill btn-primary-light border product-quantity-minus border-end-0 waves-effect waves-light"><i class="ri-subtract-line m-0 fs-16 quantity-icon lh-1"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center w-100 rounded-pill" aria-label="quantity" id="product-quantity" value="1">
                                                        <button class="btn btn-icon btn-wave btn-sm border rounded-pill btn-primary-light border product-quantity-plus border-end-0 waves-effect waves-light"><i class="ri-add-line m-0 fs-16 quantity-icon lh-1"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div class="d-flex gap-3 align-items-center flex-shrink-0">
                                                <p class="fs-15 fw-semibold mb-0">Colors :</p>
                                                <p class="mb-0 d-flex align-items-center">
                                                    <a class="color-1 product-colors flex-shrink-0 selected" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                    <a class="color-2 product-colors flex-shrink-0" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                    <a class="color-3 product-colors flex-shrink-0" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                    <a class="color-4 product-colors flex-shrink-0" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                    <a class="color-5 product-colors flex-shrink-0" href="javascript:void(0)">
                                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="ms-auto d-flex gap-2">
                                                <a href="javascript:void(0);" class="btn-primary-light btn">
                                                    <i class="bx bx-adjust fs-16 align-middle"></i> Compare
                                                </a>
                                                <a href="<?php echo base_url('wishlist'); ?>" class="btn-primary btn">
                                                    <i class="bx bx-credit-card fs-15 align-middle"></i> Add to Wishlist
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-8">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs tab-style-8 scaleX profile-settings-tab gap-2" id="myTab4" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link bg-primary-transparent px-4" id="product-details" data-bs-toggle="tab" data-bs-target="#product-details-pane" type="button" role="tab" aria-controls="product-details-pane" aria-selected="true">Product Details</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link bg-primary-transparent px-4 active" id="key-features-tab" data-bs-toggle="tab" data-bs-target="#key-features-tab-pane" type="button" role="tab" aria-controls="key-features-tab-pane" aria-selected="false" tabindex="-1">Key Features</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link bg-primary-transparent px-4" id="add-features-tab" data-bs-toggle="tab" data-bs-target="#add-features-tab-pane" type="button" role="tab" aria-controls="add-features-tab-pane" aria-selected="false" tabindex="-1">Additional Features</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body tab-content">
                                    <div class="tab-pane overflow-hidden p-0 border-0" id="product-details-pane" role="tabpanel" aria-labelledby="product-details" tabindex="0">
                                        <div class="table-responsive">
                                            <table class="table text-nowrap table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="fw-semibold">
                                                            Brand
                                                        </th>
                                                        <td>TechPro</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="fw-semibold">
                                                            Model Name
                                                        </th>
                                                        <td>
                                                            X15 Elite - 2024 Edition
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="fw-semibold">
                                                            Display
                                                        </th>
                                                        <td>
                                                            15.6" 4K UHD Touchscreen
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="fw-semibold">
                                                            Processor
                                                        </th>
                                                        <td>
                                                            Intel Core i7
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="fw-semibold">
                                                            Operating System
                                                        </th>
                                                        <td>
                                                            Windows 10 Home
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane show active overflow-hidden p-0 border-0" id="key-features-tab-pane" role="tabpanel" aria-labelledby="key-features-tab" tabindex="1">
                                        <ul class="mb-0 ps-0">
                                            <li class="mb-3"><span class="fw-semibold">Display:</span> Stunning 4K UHD resolution with touchscreen capability for immersive visuals and easy navigation.</li>
                                            <li class="mb-3"><span class="fw-semibold">Processor:</span> High-performance Intel Core i7 processor for seamless multitasking and powerful computing.</li>
                                            <li class="mb-3"><span class="fw-semibold">Memory:</span> 16GB DDR4 RAM ensures smooth performance even with multiple applications running simultaneously.</li>
                                            <li class="mb-3"><span class="fw-semibold">Storage:</span> Ample 1TB SSD storage for fast boot-up times, quick file access, and plenty of space for your files and applications.</li>
                                            <li class="mb-3"><span class="fw-semibold">Graphics:</span> NVIDIA GeForce GTX 1650 Ti graphics card delivers smooth gaming performance and supports creative applications.</li>
                                            <li class="mb-0"><span class="fw-semibold">Operating System:</span> Pre-installed with Windows 10 Home for a familiar and user-friendly computing experience.</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane overflow-hidden p-0 border-0" id="add-features-tab-pane" role="tabpanel" aria-labelledby="add-features-tab" tabindex="2">
                                        <ul class="mb-0 ps-0">
                                            <li class="mb-3"><span class="fw-semibold">Connectivity:</span> Wi-Fi, Bluetooth, USB ports, HDMI output, and more for easy connectivity to peripherals and accessories.</li>
                                            <li class="mb-3"><span class="fw-semibold">Design:</span> Sleek and stylish design with premium materials for durability and aesthetics.</li>
                                            <li class="mb-3"><span class="fw-semibold">Battery Life:</span> Long-lasting battery to keep you productive on the go.</li>
                                            <li class="mb-3"><span class="fw-semibold">Audio:</span> High-quality audio for immersive entertainment and clear communication.</li>
                                            <li class="mb-3"><span class="fw-semibold">Security:</span> Built-in security features to protect your data and privacy.</li>
                                            <li class=""><span class="fw-semibold">Warranty:</span> Backed by TechPro's warranty for peace of mind.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Reviews & Ratings
                                    </div>
                                    <a href="javascript:void(0);" class="fs-14 text-center d-block text-primary fw-medium text-decoration-underline ms-auto">
                                        View More Reviews
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center mx-0">
                                        <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center bg-light rounded p-3 pt-2">
                                            <div class="fs-2">
                                            4.2 
                                            </div>
                                            <div class="badge bg-secondary rounded-pill align-middle mb-3"> Very Good</div>
                                            <p class="mb-1">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star-half text-warning"></i>
                                            </p>
                                            <div class="fw-medium mb-3"><a class="text-muted" href="javascript:void(0);">Based on (23,435) ratings</a></div>
                                            <a class="btn btn-primary w-100" href="javascript:void(0);">Leave Us a Review</a>
                                        </div>
                                        <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-3 pe-0">
                                            <div class="swiper swiper-reviews">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="card custom-card border shadow-none mb-0">
                                                            <div class="card-body">
                                                                <div class="d-sm-flex d-block align-items-center mb-3">
                                                                    <div class="d-flex flex-fill align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded me-2">
                                                                            <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                                        </span>
                                                                        <p class="mb-0 fs-14 lh-1 fw-semibold">Phillip John
                                                                            <span class="mb-0 fs-12 fw-normal ms-1">
                                                                                <i class="ri-star-s-fill text-warning align-middle lh-1 fs-10 me-1 fw-normal align-middle"></i> 4.3
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                                        <span class="badge bg-success">Verified Purchase</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <p class="fw-semibold mb-1">Powerful Performance, Stunning Display!</p>
                                                                    <p class="mb-0 fs-11">The TechPro X15 Elite - 2024 Edition is a powerhouse! The 4K UHD touchscreen display is stunning.vgwrggerrb grgrgerg </p>
                                                                </div>
                                                                <div class="product-images ps-0">
                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <div class="products-review-images d-flex">
                                                                                <a href="javascript:void(0);">
                                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/34.png'); ?>" alt="">
                                                                                </a>
                                                                                <a href="javascript:void(0);">
                                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/33.png'); ?>" alt="">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6 d-flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                                            <button class="btn btn-sm btn-light me-2">Report abuse</button>
                                                                            <button class="btn btn-sm btn-icon btn-primary-light me-2">
                                                                                <i class="ri-thumb-up-line"></i>
                                                                            </button>
                                                                            <button class="btn btn-sm btn-icon btn-primary-light">
                                                                                <i class="ri-thumb-down-line"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card custom-card border shadow-none mb-0">
                                                            <div class="card-body">
                                                                <div class="d-sm-flex d-block align-items-center mb-3">
                                                                    <div class="d-flex flex-fill align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded me-2">
                                                                            <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                                        </span>
                                                                        <p class="mb-0 fs-14 lh-1 fw-semibold">Henry Milo
                                                                            <span class="mb-0 fs-12 fw-normal ms-1">
                                                                                <i class="ri-star-s-fill text-warning align-middle lh-1 fs-10 me-1 fw-normal align-middle"></i> 4.3
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                                        <span class="badge bg-success">Verified Purchase</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <p class="fw-semibold mb-1">Sleek Design, Fast Delivery, Hassle-Free Returns!</p>
                                                                    <p class="mb-0 fs-11">The TechPro X15 Elite - 2024 Edition impresses with its sleek design and fast delivery. vgwrggerrb grgrgerg. vgwrggerrb grgrgerg</p>
                                                                </div>
                                                                <div class="product-images ps-0">
                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <div class="products-review-images d-flex">
                                                                                <a href="javascript:void(0);">
                                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/33.png'); ?>" alt="">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6 d-flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                                            <button class="btn btn-sm btn-light me-2">Report abuse</button>
                                                                            <button class="btn btn-sm btn-icon btn-primary-light me-2">
                                                                                <i class="ri-thumb-up-line"></i>
                                                                            </button>
                                                                            <button class="btn btn-sm btn-icon btn-primary-light">
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
                        <div class="col-xxl-4">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Featured Products 
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary-light">View All</a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="similar-products-image me-2">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/29.png'); ?>" alt="" class>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-1 fs-14 fw-semibold similar-product-name text-truncate">Ladies' Slim Bag </p>
                                                                    <p class="mb-2">
                                                                        <span>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                            4.3
                                                                        </span>
                                                                        <span class="text-muted ms-1 fs-12">(16K)</span>
                                                                    </p>
                                                                    <div class="d-flex gap-2 align-items-center">
                                                                        <p class="mb-0 fs-18 fw-semibold">
                                                                            $1,099
                                                                        </p>
                                                                        <p class="mb-0 text-muted fw-normal">
                                                                            <s>$1,759</s>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto align-self-center">
                                                                    <div class="btn btn-primary">Add To Cart</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="similar-products-image me-2">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/30.png'); ?>" alt="" class>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-1 fs-14 fw-semibold similar-product-name text-truncate">Wireless Headphones</p>
                                                                    <p class="mb-2">
                                                                        <span>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-s-fill  text-warning"></i>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                            4.3
                                                                        </span>
                                                                        <span class="text-muted ms-1 fs-12">(5k)</span>
                                                                    </p>
                                                                    <div class="d-flex gap-2 align-items-center">
                                                                        <p class="mb-0 fs-18 fw-semibold">
                                                                            $7,99
                                                                        </p>
                                                                        <p class="mb-0 text-muted fw-normal">
                                                                            <s>$1,299</s>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto align-self-center">
                                                                    <div class="btn btn-primary">Add To Cart</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="similar-products-image me-2">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/31.png'); ?>" alt="" class>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-1 fw-semibold similar-product-name text-truncate">Wireless Earbuds</p>
                                                                    <p class="mb-2">
                                                                        <span>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-s-fill  text-warning"></i>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                            4.3
                                                                        </span>
                                                                        <span class="text-muted ms-1 fs-12">(2k)</span>
                                                                    </p>
                                                                    <div class="d-flex gap-2 align-items-center">
                                                                        <p class="mb-0 fs-18 fw-semibold">
                                                                            $1,499
                                                                        </p>
                                                                        <p class="mb-0 text-muted fw-normal">
                                                                            <s>$2,599</s>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto align-self-center">
                                                                    <div class="btn btn-primary">Add To Cart</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="similar-products-image me-2">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/32.png'); ?>" alt="" class>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-1 fw-semibold similar-product-name text-truncate">Voluptatem Alarm Clock </p>
                                                                    <p class="mb-2">
                                                                        <span>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-s-fill  text-warning"></i>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                            4.3
                                                                        </span>
                                                                        <span class="text-muted ms-1 fs-12">(12k)</span>
                                                                    </p>
                                                                    <div class="d-flex gap-2 align-items-center">
                                                                        <p class="mb-0 fs-18 fw-semibold">
                                                                            $2,299
                                                                        </p>
                                                                        <p class="mb-0 text-muted fw-normal">
                                                                            <s>$3,299</s>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto align-self-center">
                                                                    <div class="btn btn-primary">Add To Cart</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border-bottom-0">
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="similar-products-image me-2">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/28.png'); ?>" alt="" class>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-1 fw-semibold similar-product-name text-truncate">Lightweight Sneakers</p>
                                                                    <p class="mb-2">
                                                                        <span>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-s-fill  text-warning"></i>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-s-fill lh-1 fs-14 text-warning"></i>
                                                                            <i class="ri-star-half-s-fill me-1 text-warning"></i>
                                                                            4.3
                                                                        </span>
                                                                        <span class="text-muted ms-1 fs-12">(12k)</span>
                                                                    </p>
                                                                    <div class="d-flex gap-2 align-items-center">
                                                                        <p class="mb-0 fs-18 fw-semibold">
                                                                            $8,99
                                                                        </p>
                                                                        <p class="mb-0 text-muted fw-normal">
                                                                            <s>$1,299</s>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto align-self-center">
                                                                    <div class="btn btn-primary">Add To Cart</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Row-1 -->

                    <!-- Start:: Row-2 -->
                    <h5>Related Products</h5>
                    <p class="">Explore more products similar to this one, dolore magna aliqua.</p>
                    <div class="swiper swiper-related-products">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <div class="badge bg-info d-inline-flex gap-1 lh-1 align-items-center text-fixed-white mb-1">
                                                <div class="badge-icon"><i class="ti ti-bolt"></i></div>
                                                <div class="badge-text">Trending</div>
                                            </div>
                                            <div class="badge bg-primary3 d-inline-block">12% Off</div>
                                        </div>
                                        <div class="card-img-top border-bottom border-block-end-dashed">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-primary  rounded-circle" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                <a href="<?php echo base_url('wishlist'); ?>" class="btn btn-icon btn-primary1 rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2 p-2">
                                                <img src="<?php echo base_url('assets/images/ecommerce/png/28.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent rounded"> 
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
                                                <i class="bx bxs-cart-add fs-18"></i>
                                            </a>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="mb-1 fw-semibold fs-16"><a href="<?php echo base_url('product-details'); ?>">Lightweight Sneakers</a></h6>
                                            <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-baseline fs-11">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                            <span>(874)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primary1 fs-13 fw-semibold">Stealth Series</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="fw-semibold text-primary mb-0">$771</h5>
                                                    <span class="fs-13 ms-2 text-muted text-decoration-line-through">$880</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-primary2">10% Off</span>
                                        </div>
                                        <div class="card-img-top border-bottom border-block-end-dashed">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-primary  rounded-circle" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                <a href="<?php echo base_url('wishlist'); ?>" class="btn btn-icon btn-primary1 rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2 p-2">
                                                <img src="<?php echo base_url('assets/images/ecommerce/png/11.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent rounded"> 
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
                                                <i class="bx bxs-cart-add fs-18"></i>
                                            </a>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="mb-1 fw-semibold fs-16"><a href="<?php echo base_url('product-details'); ?>">Trendy Sunglasses</a></h6>
                                            <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-baseline fs-11">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                            <span>(514)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primary1 fs-13 fw-semibold">Crystal Clear</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="fw-semibold text-primary mb-0">$251</h5>
                                                    <span class="fs-13 ms-2 text-muted text-decoration-line-through">$399</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-primary1">21% Off</span>
                                        </div>
                                        <div class="card-img-top border-bottom border-block-end-dashed">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-primary  rounded-circle" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                <a href="<?php echo base_url('wishlist'); ?>" class="btn btn-icon btn-primary1 rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2 p-2">
                                                <a href="<?php echo base_url('product-details'); ?>">
                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/30.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent  rounded"> 
                                                </a>
                                            </div>
                                            <a href="<?php echo base_url('cart'); ?>" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
                                                <i class="bx bxs-cart-add fs-18"></i>
                                            </a>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="mb-1 fw-semibold fs-16"><a href="<?php echo base_url('product-details'); ?>">Wireless Headphones</a></h6>
                                            <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-baseline fs-11">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                            <span>(142)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primary1 fs-13 fw-semibold">SoundWave</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="fw-semibold text-primary mb-0">$251</h5>
                                                    <span class="fs-13 ms-2 text-muted text-decoration-line-through">$399</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-success">60% Off</span>
                                        </div>
                                        <div class="card-img-top border-bottom border-block-end-dashed">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-primary  rounded-circle" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                <a href="<?php echo base_url('wishlist'); ?>" class="btn btn-icon btn-primary1 rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2 p-2">
                                                <a href="<?php echo base_url('product-details'); ?>">
                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/31.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent  rounded"> 
                                                </a>
                                            </div>
                                            <a href="<?php echo base_url('cart'); ?>" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
                                                <i class="bx bxs-cart-add fs-18"></i>
                                            </a>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="mb-1 fw-semibold fs-16"><a href="<?php echo base_url('product-details'); ?>"> Wireless Earbuds</a></h6>
                                            <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-baseline fs-11">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                            <span>(211)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primary1 fs-13 fw-semibold">AirPods Max</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="fw-semibold text-primary mb-0">$314</h5>
                                                    <span class="fs-13 ms-2 text-muted text-decoration-line-through">$547</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-info">15% Off</span>
                                        </div>
                                        <div class="card-img-top border-bottom border-block-end-dashed">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-primary  rounded-circle" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                <a href="<?php echo base_url('wishlist'); ?>" class="btn btn-icon btn-primary1 rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2 p-2">
                                                <a href="<?php echo base_url('product-details'); ?>">
                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/12.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent  rounded"> 
                                                </a>
                                            </div>
                                            <a href="<?php echo base_url('cart'); ?>" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
                                                <i class="bx bxs-cart-add fs-18"></i>
                                            </a>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="mb-1 fw-semibold fs-16"><a href="<?php echo base_url('product-details'); ?>"> Kids' Party Wear Frock</a></h6>
                                            <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-baseline fs-11">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                            <span>(231)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primary1 fs-13 fw-semibold">Twinkle Twirl</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="fw-semibold text-primary mb-0">$236</h5>
                                                    <span class="fs-13 ms-2 text-muted text-decoration-line-through">$267</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <span class="badge bg-primary1">24% Off</span>
                                        </div>
                                        <div class="card-img-top border-bottom border-block-end-dashed">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-primary  rounded-circle" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                <a href="<?php echo base_url('wishlist'); ?>" class="btn btn-icon btn-primary1 rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2 p-2">
                                                <a href="<?php echo base_url('product-details'); ?>">
                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/29.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent  rounded"> 
                                                </a>
                                            </div>
                                            <a href="<?php echo base_url('cart'); ?>" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
                                                <i class="bx bxs-cart-add fs-18"></i>
                                            </a>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="mb-1 fw-semibold fs-16"><a href="<?php echo base_url('product-details'); ?>">Ladies' Slim Bag</a></h6>
                                            <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-baseline fs-11">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                            <span>(110)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primary1 fs-13 fw-semibold">Sleek Elegance</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="fw-semibold text-primary mb-0">$124</h5>
                                                    <span class="fs-13 ms-2 text-muted text-decoration-line-through">$105</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card custom-card card-style-2">
                                    <div class="card-body p-0">
                                        <div class="top-left-badge">
                                            <div class="badge bg-danger d-inline-flex lh-1 align-items-center text-fixed-white mb-1">
                                                <div class="badge-icon"><i class="bx bxs-bolt"></i></div>
                                                <div class="badge-text">Trending</div>
                                            </div>
                                            <span class="badge bg-warning">15% Off</span>
                                        </div>
                                        <div class="card-img-top border-bottom border-block-end-dashed">
                                            <div class="btns-container-1 align-items-center gap-1">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-primary  rounded-circle" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                <a href="<?php echo base_url('wishlist'); ?>" class="btn btn-icon btn-primary1 rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                            </div>
                                            <div class="img-box-2 p-2">
                                                <a href="<?php echo base_url('product-details'); ?>">
                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/23.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent  rounded"> 
                                                </a>
                                            </div>
                                            <a href="<?php echo base_url('cart'); ?>" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
                                                <i class="bx bxs-cart-add fs-18"></i>
                                            </a>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="mb-1 fw-semibold fs-16"><a href="<?php echo base_url('product-details'); ?>"> Advanced Smartwatch</a></h6>
                                            <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-baseline fs-11">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                            <span>(225)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primary1 fs-13 fw-semibold">SmartSync 2024</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="fw-semibold text-primary mb-0">$354</h5>
                                                    <span class="fs-13 ms-2 text-muted text-decoration-line-through">$455</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- End:: Row-2 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Swiper JS -->
        <script src="<?php echo base_url('assets/libs/swiper/swiper-bundle.min.js'); ?>"></script>

        <!-- Gallery JS -->
        <script src="<?php echo base_url('assets/libs/glightbox/js/glightbox.min.js'); ?>"></script>

        <!-- Internal Ecommerce Product Details -->
        <script src="<?php echo base_url('assets/js/ecommerce-product-details.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>