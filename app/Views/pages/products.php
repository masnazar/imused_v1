
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- noioslider CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/nouislider/nouislider.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
        
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Products</h1>
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
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-body p-3">
                                    <div class="row align-items-center gy-2">
                                        <div class="col-sm-8">
                                            <div class="d-flex">
                                                <h6 class="mb-0">
                                                    Total <span class="fw-semibold text-primary1">6678 Items</span>
                                                    Available</h6> 
                                            </div>
                                        </div>
                                        <div class="col-sm-4 text-sm-end text-start">
                                            <div class="btn-group">
                                                <button class="btn btn-outline-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-sort-descending-2 me-1"></i> Sort By
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Date Published</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Most Relevant</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Price Low to High</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Price High to Low</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-9">                             
                            <div class="row">
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
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
                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/28.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent  rounded"> 
                                                </div>
                                                <a href="<?php echo base_url('cart'); ?>" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
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
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
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
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
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
                                                        <span class="fs-13 ms-2 text-muted text-decoration-line-through">$214</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
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
                                                        <img src="<?php echo base_url('assets/images/ecommerce/png/14.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent  rounded"> 
                                                    </a>
                                                </div>
                                                <a href="<?php echo base_url('cart'); ?>" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
                                                    <i class="bx bxs-cart-add fs-18"></i>
                                                </a>
                                            </div>
                                            <div class="p-3">
                                                <h6 class="mb-1 fw-semibold fs-16"><a href="<?php echo base_url('product-details'); ?>">Elegant Flower Pot</a></h6>
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
                                                        <a href="javascript:void(0);" class="text-primary1 fs-13 fw-semibold">Serene Garden</a>
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
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
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
                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/11.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent  rounded"> 
                                                </div>
                                                <a href="<?php echo base_url('cart'); ?>" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
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
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
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
                                                        <img src="<?php echo base_url('assets/images/ecommerce/png/13.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent  rounded"> 
                                                    </a>
                                                </div>
                                                <a href="<?php echo base_url('cart'); ?>" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
                                                    <i class="bx bxs-cart-add fs-18"></i>
                                                </a>
                                            </div>
                                            <div class="p-3">
                                                <h6 class="mb-1 fw-semibold fs-16"><a href="<?php echo base_url('product-details'); ?>">Sleek Modern Chair</a></h6>
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
                                                        <a href="javascript:void(0);" class="text-primary1 fs-13 fw-semibold">Artisanal Comfort</a>
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
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
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
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-danger">50% Off</span>
                                            </div>
                                            <div class="card-img-top border-bottom border-block-end-dashed">
                                                <div class="btns-container-1 align-items-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary  rounded-circle" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="<?php echo base_url('wishlist'); ?>" class="btn btn-icon btn-primary1 rounded-circle" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-info  rounded-circle" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2 p-2">
                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/10.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent  rounded"> 
                                                </div>
                                                <a href="<?php echo base_url('cart'); ?>" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
                                                    <i class="bx bxs-cart-add fs-18"></i>
                                                </a>
                                            </div>
                                            <div class="p-3">
                                                <h6 class="mb-1 fw-semibold fs-16"><a href="<?php echo base_url('product-details'); ?>">Classic T-Shirt </a></h6>
                                                <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-baseline fs-11">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <p class="mb-1 ms-1 text-muted">
                                                            <span>(142)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                    <a href="javascript:void(0);" class="text-primary1 fs-13 fw-semibold">Casual Everyday</a>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <h5 class="fw-semibold text-primary mb-0">$251</h5>
                                                    <span class="fs-13 ms-2 op-6 text-muted text-decoration-line-through">$399</span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
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
                                                        <img src="<?php echo base_url('assets/images/ecommerce/png/9.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent  rounded"> 
                                                    </a>
                                                </div>
                                                <a href="<?php echo base_url('cart'); ?>" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
                                                    <i class="bx bxs-cart-add fs-18"></i>
                                                </a>
                                            </div>
                                            <div class="p-3">
                                                <h6 class="mb-1 fw-semibold fs-16"><a href="<?php echo base_url('product-details'); ?>"> Versatile Hoodie</a></h6>
                                                <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-baseline fs-11">
                                                            <div class="min-w-fit-content">
                                                                <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                            </div>
                                                            <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                                <span>(142)</span>
                                                                <span>Ratings</span>
                                                            </p>
                                                        </div>
                                                        <a href="javascript:void(0);" class="text-primary1 fs-13 fw-semibold">Urban Flex</a>
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
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
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
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
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
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
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
                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/11.png'); ?>" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent  rounded"> 
                                                </div>
                                                <a href="<?php echo base_url('cart'); ?>" class="btn btn-primary rounded-circle btn-style-1 btn-icon"  data-bs-toggle="tooltip" title="Add to Cart">
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
                                <div class="col-md-12">
                                    <!-- Start::pagination -->
                                    <nav aria-label="Page navigation" class="pagination-style-4 mt-3">
                                        <ul class="pagination text-center justify-content-center gap-1">
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
                                    <!-- End::pagination -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card products-navigation-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Filter
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="text-decoration-underline fw-medium text-primary2">Clear All</a>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-semibold mb-0">Categories</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-1" checked>
                                                <label class="form-check-label text-wrap pe-3" for="c-1">
                                                    Electronics <span class="fs-11 fw-normal text-muted">(2,712)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-2">
                                                <label class="form-check-label text-wrap pe-3" for="c-2">
                                                    Clothing & Apparel <span class="fs-11 fw-normal text-muted">(536)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-3" checked>
                                                <label class="form-check-label text-wrap pe-3" for="c-3">
                                                    Kitchen <span class="fs-11 fw-normal text-muted">(18,289)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-4" checked>
                                                <label class="form-check-label text-wrap pe-3" for="c-4">
                                                    Health & Beauty <span class="fs-11 fw-normal text-muted">(3,453)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-5">
                                                <label class="form-check-label text-wrap pe-3" for="c-5">
                                                    Sports <span class="fs-11 fw-normal text-muted">(7,165)</span>
                                                </label>
                                            </div>
                                            <div class="collapse" id="category-more">
                                                <div class="form-check mb-2 p-0">
                                                    <input class="form-check-input float-end" type="checkbox" value="" id="c-6">
                                                    <label class="form-check-label text-wrap pe-3" for="c-6">
                                                        Games <span class="fs-11 fw-normal text-muted">(5,964)</span>
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2 p-0">
                                                    <input class="form-check-input float-end" type="checkbox" value="" id="c-7">
                                                    <label class="form-check-label text-wrap pe-3" for="c-7">
                                                        Food & Grocery <span class="fs-11 fw-normal text-muted">(2,123)</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link mt-3" data-bs-toggle="collapse" href="#category-more" role="button" aria-expanded="false" aria-controls="category-more">MORE</a>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-semibold mb-0">Price Range</h6>
                                        <div class="py-3 pb-0">
                                            <div id="nonlinear"></div>
                                            <div class="d-flex mt-4">
                                                <div class="fw-semibold h6">$<span id="lower-value"></span></div>
                                                &nbsp; -- &nbsp; 
                                                <div class="fw-semibold h6">$<span id="upper-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-semibold mb-0">Discount</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-1">
                                                <label class="form-check-label text-wrap pe-3" for="q-1">
                                                    0% - 20%  <span class="fs-11 fw-normal text-muted">(245)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-2" checked>
                                                <label class="form-check-label text-wrap pe-3" for="q-2">
                                                    20% - 40% <span class="fs-11 fw-normal text-muted">(987)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-3">
                                                <label class="form-check-label text-wrap pe-3" for="q-3">
                                                    40% - 60% <span class="fs-11 fw-normal text-muted">(123)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-4" checked>
                                                <label class="form-check-label text-wrap pe-3" for="q-4">
                                                    60% - 80% <span class="fs-11 fw-normal text-muted">(987)</span>
                                                </label>
                                            </div>
                                            <div class="form-check p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-5">
                                                <label class="form-check-label text-wrap pe-3" for="q-5">
                                                    80% - 90% <span class="fs-11 fw-normal text-muted">(5,222)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-semibold mb-0">Brand</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-1" checked>
                                                <label class="form-check-label text-wrap pe-3" for="j-1">
                                                    Ruby <span class="fs-11 fw-normal text-muted">(663)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-2" checked>
                                                <label class="form-check-label text-wrap pe-3" for="j-2">
                                                    Hadlirams <span class="fs-11 fw-normal text-muted">(2,514)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-3" checked>
                                                <label class="form-check-label text-wrap pe-3" for="j-3">
                                                    Xioami <span class="fs-11 fw-normal text-muted">(781)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-4">
                                                <label class="form-check-label text-wrap pe-3" for="j-4">
                                                    Samsnug <span class="fs-11 fw-normal text-muted">(20)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-0 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-5">
                                                <label class="form-check-label text-wrap pe-3" for="j-5">
                                                    Tommy & Hilfigure <span class="fs-11 fw-normal text-muted">(1,112)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <h6 class="fw-semibold mb-0">Sizes</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="e-1" checked>
                                                <label class="form-check-label text-wrap pe-3" for="e-1">
                                                    Extra Small (XS) <span class="fs-11 fw-normal text-muted">(574)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="e-2">
                                                <label class="form-check-label text-wrap pe-3" for="e-2">
                                                    Small (SM) <span class="fs-11 fw-normal text-muted">(1,474)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="e-3" checked>
                                                <label class="form-check-label text-wrap pe-3" for="e-3">
                                                    Medium (MD) <span class="fs-11 fw-normal text-muted">(12,245)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="e-4" checked>
                                                <label class="form-check-label text-wrap pe-3" for="e-4">
                                                    Large (L) <span class="fs-11 fw-normal text-muted">(877)</span>
                                                </label>
                                            </div>
                                            <div class="collapse" id="sizes-more">
                                                <div class="form-check mb-2 p-0">
                                                    <input class="form-check-input float-end" type="checkbox" value="" id="s-5">
                                                    <label class="form-check-label text-wrap pe-3" for="s-5">
                                                        Extra Large (XL) <span class="fs-11 fw-normal text-muted">(954)</span>
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2 p-0">
                                                    <input class="form-check-input float-end" type="checkbox" value="" id="s-6">
                                                    <label class="form-check-label text-wrap pe-3" for="s-6">
                                                        XXL <span class="fs-11 fw-normal text-muted">(147)</span>
                                                    </label>
                                                </div>
                                                <div class="form-check mb-0 p-0">
                                                    <input class="form-check-input float-end" type="checkbox" value="" id="s-7">
                                                    <label class="form-check-label text-wrap pe-3" for="s-7">
                                                        XXXL <span class="fs-11 fw-normal text-muted">(324)</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link mt-3" data-bs-toggle="collapse" href="#sizes-more" role="button" aria-expanded="false" aria-controls="sizes-more">MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- End:: Row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- noUiSlider JS -->
        <script src="<?php echo base_url('assets/libs/nouislider/nouislider.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/wnumb/wNumb.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/ecommerce-price-range.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
