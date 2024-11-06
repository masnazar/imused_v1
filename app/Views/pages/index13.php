
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
                                    <li class="breadcrumb-item active" aria-current="page">POS System</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">POS System</h1>
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

                    <!-- Start Row-1 -->
                    <div class="row">
                        <div class="col-xxl-9">
                            <div class="d-flex align-Items-center justify-content-between mb-3">
                                <h6 class="fw-medium mb-0">Categories</h6>
                                <div class="d-flex gap-2 align-items-center">
                                    <a class="categories-arrow left">
                                        <i class="ri-arrow-left-s-line"></i>
                                    </a>
                                    <a class="categories-arrow right">
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row pos-category" id="filter">
                                <div class="col-xxl col-xl-4 col-md-6">
                                    <div class="card custom-card active">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);" class="stretched-link categories" data-filter="*">
                                                <div class="d-flex gap-2 categories-content">
                                                    <span class="avatar avatar-md">
                                                        <img src="<?php echo base_url('assets/images/pos-system/1.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="fw-medium">All Menu</span>
                                                        <span class="d-block op-7 fs-12">43 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl col-xl-4 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);" class="stretched-link categories" data-filter=".pizza">
                                                <div class="d-flex gap-2 categories-content">
                                                    <span class="avatar avatar-md menu-icon">
                                                        <img src="<?php echo base_url('assets/images/pos-system/2.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="fw-medium">Pizza</span>
                                                        <span class="d-block op-7 fs-12">80 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl col-xl-4 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);" class="stretched-link categories" data-filter=".burger">
                                                <div class="d-flex gap-2 categories-content">
                                                    <span class="avatar avatar-md menu-icon">
                                                        <img src="<?php echo base_url('assets/images/pos-system/3.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="fw-medium">Burger</span>
                                                        <span class="d-block op-7 fs-12">36 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl col-xl-3 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);" class="stretched-link categories" data-filter=".waffle">
                                                <div class="d-flex gap-2 categories-content">
                                                    <span class="avatar avatar-md menu-icon">
                                                        <img src="<?php echo base_url('assets/images/pos-system/4.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="fw-medium">Waffle</span>
                                                        <span class="d-block op-7 fs-12">25 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl col-xl-3 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);" class="stretched-link categories" data-filter=".icecream">
                                                <div class="d-flex gap-2 categories-content">
                                                    <span class="avatar avatar-md menu-icon">
                                                        <img src="<?php echo base_url('assets/images/pos-system/5.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="fw-medium">Ice Cream</span>
                                                        <span class="d-block op-7 fs-12">58 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl col-xl-3 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);" class="stretched-link categories" data-filter=".coffee">
                                                <div class="d-flex gap-2 categories-content">
                                                    <span class="avatar avatar-md menu-icon">
                                                        <img src="<?php echo base_url('assets/images/pos-system/6.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="fw-medium">Coffee</span>
                                                        <span class="d-block op-7 fs-12">38 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl col-xl-3">
                                    <div class="card custom-card">
                                        <div class="card-body p-3">
                                            <a href="javascript:void(0);" class="stretched-link categories" data-filter=".cupcakes">
                                                <div class="d-flex gap-2 categories-content">
                                                    <span class="avatar avatar-md menu-icon">
                                                        <img src="<?php echo base_url('assets/images/pos-system/7.png'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <span class="fw-medium">CupCakes</span>
                                                        <span class="d-block op-7 fs-12">38 Items</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h6 class="fw-medium mb-0">Items List</h6>
                                        <a href="#viewcart" class="btn btn-primary" data-bs-toggle="offcanvas" aria-controls="viewcart"> View Cart<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                    </div>
                                    <div class="row list-wrapper">
                                        <div class="col-xxl-3 col-xl-4 col-md-6 card-item burger" data-category="burger">
                                            <div class="card custom-card p-3 p-3">
                                                <img src="<?php echo base_url('assets/images/pos-system/9.jpg'); ?>" class="card-img-top" alt="...">
                                                <div class="card-body bg-secondary-transparent rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="fw-medium fs-16">Classic Cheeseburger</a>
                                                        <span class="fs-12 text-muted d-block">Classic Burgers</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                        <h5 class="fw-medium mb-0">$78.99</h5>
                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-md-6 card-item icecream" data-category="icecream">
                                            <div class="card custom-card p-3 out-of-stock">
                                                <img src="<?php echo base_url('assets/images/pos-system/18.jpg'); ?>" class="card-img-top" alt="...">
                                                <div class="card-body bg-secondary-transparent rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="fw-medium fs-16">Coconut Almond Fudge</a>
                                                        <span class="fs-12 text-muted d-block">Specialty Flavors</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                        <h5 class="fw-medium mb-0">$29.99</h5>
                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-md-6 card-item coffee" data-category="coffee">
                                            <div class="card custom-card p-3">
                                                <img src="<?php echo base_url('assets/images/pos-system/17.jpg'); ?>" class="card-img-top" alt="...">
                                                <div class="card-body bg-secondary-transparent rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="fw-medium fs-16">Cappuccino</a>
                                                        <span class="fs-12 text-muted d-block">Espresso Beverages</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                        <h5 class="fw-medium mb-0">$7.99</h5>
                                                        <div>
                                                            <button type="button" class="btn btn-primary disabled btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-md-6 card-item cupcakes" data-category="cupcakes">
                                            <div class="card custom-card p-3">
                                                <img src="<?php echo base_url('assets/images/pos-system/11.jpg'); ?>" class="card-img-top" alt="...">
                                                <div class="card-body bg-secondary-transparent rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="fw-medium fs-16">Frosting Choices</a>
                                                        <span class="fs-12 text-muted d-block">Cupcake Creations</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                        <h5 class="fw-medium mb-0">$19.99</h5>
                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-md-6 card-item cupcakes" data-category="cupcakes">
                                            <div class="card custom-card p-3">
                                                <img src="<?php echo base_url('assets/images/pos-system/12.jpg'); ?>" class="card-img-top" alt="...">
                                                <div class="card-body bg-secondary-transparent rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="fw-medium fs-16">Nutella Cupcake</a>
                                                        <span class="fs-12 text-muted d-block">Specialty Cupcakes</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                        <h5 class="fw-medium mb-0">$123.99</h5>
                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-md-6 card-item pizza" data-category="pizza">
                                            <div class="card custom-card p-3">
                                                <img src="<?php echo base_url('assets/images/pos-system/16.jpg'); ?>" class="card-img-top" alt="...">
                                                <div class="card-body bg-secondary-transparent rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="fw-medium fs-16">Mediterranean</a>
                                                        <span class="fs-12 text-muted d-block">Specialty Pizzas</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                        <h5 class="fw-medium mb-0">$2.79</h5>
                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-md-6 card-item coffee" data-category="coffee">
                                            <div class="card custom-card p-3">
                                                <img src="<?php echo base_url('assets/images/pos-system/14.jpg'); ?>" class="card-img-top" alt="...">
                                                <div class="card-body bg-secondary-transparent rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="fw-medium fs-16">Cold Brew Concentrate</a>
                                                        <span class="fs-12 text-muted d-block">Cold Brews</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                        <h5 class="fw-medium mb-0">$1.29</h5>
                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-md-6 card-item burger" data-category="burger">
                                            <div class="card custom-card p-3">
                                                <img src="<?php echo base_url('assets/images/pos-system/15.jpg'); ?>" class="card-img-top" alt="...">
                                                <div class="card-body bg-secondary-transparent rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="fw-medium fs-16">Blue Cheese Burger</a>
                                                        <span class="fs-12 text-muted d-block">Gourmet Burgers</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                        <h5 class="fw-medium mb-0">$24.99</h5>
                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-md-6 card-item waffle" data-category="waffle">
                                            <div class="card custom-card p-3">
                                                <img src="<?php echo base_url('assets/images/pos-system/19.jpg'); ?>" class="card-img-top" alt="...">
                                                <div class="card-body bg-secondary-transparent rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="fw-medium fs-16">Apple Cinnamon Waffle</a>
                                                        <span class="fs-12 text-muted d-block">Specialty Waffles</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                        <h5 class="fw-medium mb-0">$24.99</h5>
                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-md-6 card-item pizza" data-category="pizza">
                                            <div class="card custom-card p-3">
                                                <img src="<?php echo base_url('assets/images/pos-system/10.jpg'); ?>" class="card-img-top" alt="...">
                                                <div class="card-body bg-secondary-transparent rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="fw-medium fs-16">Pesto Delight</a>
                                                        <span class="fs-12 text-muted d-block">Specialty Pizzas</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                        <h5 class="fw-medium mb-0">$24.99</h5>
                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-md-6 card-item icecream" data-category="icecream">
                                            <div class="card custom-card p-3">
                                                <img src="<?php echo base_url('assets/images/pos-system/8.jpg'); ?>" class="card-img-top" alt="...">
                                                <div class="card-body bg-secondary-transparent rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="fw-medium fs-16">Cookie Dough Sundae</a>
                                                        <span class="fs-12 text-muted d-block">Sundae Creations</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                        <h5 class="fw-medium mb-0">$24.99</h5>
                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-md-6 card-item coffee" data-category="coffee">
                                            <div class="card custom-card p-3">
                                                <img src="<?php echo base_url('assets/images/pos-system/13.jpg'); ?>" class="card-img-top" alt="...">
                                                <div class="card-body bg-secondary-transparent rounded-bottom">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="fw-medium fs-16">Americano</a>
                                                        <span class="fs-12 text-muted d-block">Espresso Beverages</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                                        <h5 class="fw-medium mb-0">$24.99</h5>
                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#viewcart"><i class="ri-add-fill me-1"></i>Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination mb-0 float-end mb-4">
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
                        <div class="col-xxl-3">
                            <div class="card custom-card active">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Orders List
                                    </div>
                                    <span class="badge bg-primary2-transparent rounded-pill">
                                        27 Items
                                    </span>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group mb-0 border-0 rounded-0">
                                        <li class="list-group-item border-top-0 border-start-0 border-end-0">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-md bg-light">
                                                        <img src="<?php echo base_url('assets/images/pos-system/17.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">Cappuccino</p>
                                                    <p class="mb-0 text-muted fs-12">Quantity : 1  <span class="badge bg-success-transparent ms-3">30% Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line fs-16 text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 fw-medium">$3.99</h6>
                                                </div>
                                            </div>
                                        </li><li class="list-group-item border-top-0 border-start-0 border-end-0">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-md bg-light">
                                                        <img src="<?php echo base_url('assets/images/pos-system/19.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">Apple Cinnamon Waffle</p>
                                                    <p class="mb-0 text-muted fs-12">Quantity : 1  <span class="badge bg-success-transparent ms-3">30% Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line fs-16 text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 fw-medium">$1.99</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item  border-bottom border-block-end-dashed border-start-0 border-end-0">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="<?php echo base_url('assets/images/pos-system/15.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">Classic Cheeseburger</p>
                                                    <p class="mb-0 text-muted fs-12">Quantity : 2  <span class="badge bg-success-transparent ms-3">10% Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line fs-16 text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 fw-medium">$2.79</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item  border-bottom border-block-end-dashed border-start-0 border-end-0">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="<?php echo base_url('assets/images/pos-system/12.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">Nutella Cupcakes</p>
                                                    <p class="mb-0 text-muted fs-12">Quantity : 1  <span class="badge bg-success-transparent ms-3">10% Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line fs-16 text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 fw-medium">$123.99</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item  border-bottom border-block-end-dashed border-start-0 border-end-0">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="<?php echo base_url('assets/images/pos-system/11.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">Strawberry Cupcakes</p>
                                                    <p class="mb-0 text-muted fs-12">Quantity : 1  <span class="badge bg-success-transparent ms-3">10% Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line fs-16 text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 fw-medium">$123.99</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item  border-bottom border-block-end-dashed border-start-0 border-end-0">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="<?php echo base_url('assets/images/pos-system/14.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">Cold Coffee</p>
                                                    <p class="mb-0 text-muted fs-12">Quantity : 1  <span class="badge bg-success-transparent ms-3">10% Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line fs-16 text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 fw-medium">$546.99</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item  border-bottom border-block-end-dashed border-start-0 border-end-0">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="<?php echo base_url('assets/images/pos-system/16.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">Cheese Burst Pizza</p>
                                                    <p class="mb-0 text-muted fs-12">Quantity : 2  <span class="badge bg-success-transparent ms-3">10% Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line fs-16 text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 fw-medium">$4.99</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item  border-bottom border-block-end-dashed border-start-0 border-end-0">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-lg bg-light">
                                                        <img src="<?php echo base_url('assets/images/pos-system/13.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">Americano</p>
                                                    <p class="mb-0 text-muted fs-12">Quantity : 1  <span class="badge bg-success-transparent ms-3">10% Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                            <i class="ri-close-line fs-16 text-danger"></i>
                                                        </a>
                                                    </p>
                                                    <h6 class="mb-0 fw-medium">$1.29</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer border-top-0">
                                    <a href="javascript:void(0);" class="btn btn-primary-light d-grid">
                                        View All
                                    </a>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between align-items-center">
                                    <div class="card-title">Top Selling Items </div>
                                    <a href="javascript:void(0);" class="btn btn-primary-light border d-flex align-items-center btn-sm">
                                    View All
                                    </a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0" id="product-list">
                                        <li class="">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-lg bg-gray-200 avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/pos-system/17.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class=" flex-fill">
                                                    <span class="d-block mb-0 fw-medium">Cappuccino</span>
                                                    <span class="text-muted fs-12">Espresso Beverages</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 fs-14 fw-medium text-primary">$517</p>
                                                    <p class="mb-0 text-muted">2.7K Orders</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-lg bg-gray-200 avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/pos-system/15.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block mb-0 fw-medium">Cheese Burger<span class="badge bg-info-transparent ms-1 fs-9">15% Off</span></span>
                                                    <span class="text-muted fs-12">Gourmet Burgers</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 fs-14 fw-medium text-primary">$564</p>
                                                    <p class="mb-0 text-muted">1,758 Orders</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-lg bg-gray-200 avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/pos-system/19.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block mb-0 fw-medium">Cinnamon Waffle</span>
                                                    <span class="text-muted fs-12">Specialty Waffles</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 fs-14 fw-medium text-primary">$24.89</p>
                                                    <p class="mb-0 text-muted">894 Orders</p>
                                                </div>
                                            </div>
                                        </li>   
                                        <li class="mt-4">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-lg bg-gray-200 avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/pos-system/16.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block mb-0 fw-medium">Mediterranean<span class="badge bg-primary1-transparent ms-1 fs-9">10% Off</span></span>
                                                    <span class="text-muted fs-12">Special Pizza</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 fs-14 fw-medium text-primary">$2.7</p>
                                                    <p class="mb-0 text-muted">865 Orders</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-lg bg-gray-200 avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/pos-system/9.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block mb-0 fw-medium">Classic Burger<span class="badge bg-primary3-transparent ms-1 fs-9">10% Off</span></span>
                                                    <span class="text-muted fs-12">Gourmet Burgers</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 fs-14 fw-medium text-primary">$564</p>
                                                    <p class="mb-0 text-muted">1,758 Orders</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-4">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-3 lh-1">
                                                    <span class="avatar avatar-lg bg-gray-200 avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/pos-system/18.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block mb-0 fw-medium">Almond Fudge<span class="badge bg-success-transparent ms-1 fs-9">30% Off</span></span>
                                                    <span class="text-muted fs-12">Icecream</span>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 fs-14 fw-medium text-primary">$89</p>
                                                    <p class="mb-0 text-muted">789 Orders</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card custom-card p-3">
                                <div class="text-center d-flex flex-row align-items-center flex-wrap bg-primary-transparent p-3 justify-content-between rounded gap-1">
                                    <div class="pos-card-image ps-1">
                                        <img src="<?php echo base_url('assets/images/pos-system/20.png'); ?>" class="" alt="...">
                                    </div>
                                    <button type="button" class="btn btn-primary text-nowrap btn-w-md me-2 ms-auto">Go Premium</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-1 -->

                    <!-- Start::offcanvas viewcart -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="viewcart" aria-labelledby="viewcartLabel">
                        <div class="offcanvas-header border-bottom">
                            <h6 class="offcanvas-title" id="viewcartLabel">Cart <span class="badge bg-primary2-transparent rounded-pill fs-10">06 items</span></h6>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body p-0">
                            <ul class="list-group mb-0 border-0 rounded-0">
                                <li class="list-group-item border-top-0 border-start-0 border-end-0">
                                    <div class="d-flex align-items-start flex-wrap">
                                        <div class="me-2 lh-1">
                                            <span class="avatar avatar-xl bg-light">
                                                <img src="<?php echo base_url('assets/images/pos-system/17.jpg'); ?>" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="mb-1 fw-medium">Cappuccino<span class="fs-11 text-muted"> Coffee</span></p>
                                            
                                            <div class="product-quantity-container order-summ">
                                                <div class="input-group flex-nowrap gap-1 border rounded-pill p-1">
                                                    <button type="button" aria-label="button" class="btn btn-icon btn-sm border btn-wave rounded-pill btn-primary-light border product-quantity-minus border-end-0"><i class="ri-subtract-line"></i></button>
                                                    <input type="text" class="form-control form-control-sm border-0 text-center p-0" aria-label="quantity" value="2">
                                                    <button type="button" aria-label="button" class="btn btn-icon btn-sm border btn-wave rounded-pill btn-primary-light border product-quantity-plus border-start-0"><i class="ri-add-line"></i></button>
                                                </div>
                                            </div> 
                                        </div>
                                        <div>
                                            <p class="text-end">
                                                <a aria-label="anchor" href="javascript:void(0)">
                                                    <i class="ri-close-line fs-16 text-danger"></i>
                                                </a>
                                            </p>
                                            <h6 class="mb-0 fw-medium mt-auto"><span class="badge bg-success-transparent ms-3 fs-9">30% Off</span> $3.99</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-top-0 border-start-0 border-end-0">
                                    <div class="d-flex align-items-start flex-wrap">
                                        <div class="me-2 lh-1">
                                            <span class="avatar avatar-xl bg-light">
                                                <img src="<?php echo base_url('assets/images/pos-system/11.jpg'); ?>" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="mb-1 fw-medium">Frosting<span class="fs-11 text-muted "> Cupcakes</span></p>
                                            <div class="product-quantity-container order-summ">
                                                <div class="input-group flex-nowrap gap-1 border rounded-pill p-1">
                                                    <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm border rounded-pill btn-primary-light border product-quantity-minus border-end-0"><i class="ri-subtract-line"></i></button>
                                                    <input type="text" class="form-control form-control-sm border-0 text-center p-0" aria-label="quantity" value="2">
                                                    <button type="button" aria-label="button" class="btn btn-icon btn-wave btn-sm border rounded-pill btn-primary-light border product-quantity-plus border-start-0"><i class="ri-add-line"></i></button>
                                                </div>
                                            </div> 
                                        </div>
                                        <div>
                                            <p class="text-end">
                                                <a aria-label="anchor" href="javascript:void(0)">
                                                    <i class="ri-close-line fs-16 text-danger"></i>
                                                </a>
                                            </p>
                                            <h6 class="mb-0 fw-medium mt-auto"><span class="badge bg-success-transparent ms-3 fs-9">30% Off</span> $3.99</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-top-0 border-start-0 border-end-0">
                                    <div class="d-flex align-items-start flex-wrap">
                                        <div class="me-2 lh-1">
                                            <span class="avatar avatar-xl bg-light">
                                                <img src="<?php echo base_url('assets/images/pos-system/9.jpg'); ?>" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="mb-1 fw-medium">Cheeseburger<span class="fs-11 text-muted"> Burger</span></p>
                                            <div class="product-quantity-container order-summ">
                                                <div class="input-group flex-nowrap gap-1 border rounded-pill p-1">
                                                    <button type="button" aria-label="button" class="btn btn-icon btn-sm border btn-wave rounded-pill btn-primary-light border product-quantity-minus border-end-0"><i class="ri-subtract-line"></i></button>
                                                    <input type="text" class="form-control form-control-sm border-0 text-center p-0" aria-label="quantity" value="2">
                                                    <button type="button" aria-label="button" class="btn btn-icon btn-sm border btn-wave rounded-pill btn-primary-light border product-quantity-plus border-start-0"><i class="ri-add-line"></i></button>
                                                </div>
                                            </div> 
                                        </div>
                                        <div>
                                            <p class="text-end">
                                                <a aria-label="anchor" href="javascript:void(0)">
                                                    <i class="ri-close-line fs-16 text-danger"></i>
                                                </a>
                                            </p>
                                            <h6 class="mb-0 fw-medium mt-auto"><span class="badge bg-success-transparent ms-3 fs-9">30% Off</span> $3.99</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-top-0 border-start-0 border-end-0">
                                    <div class="d-flex align-items-start flex-wrap">
                                        <div class="me-2 lh-1">
                                            <span class="avatar avatar-xl bg-light">
                                                <img src="<?php echo base_url('assets/images/pos-system/16.jpg'); ?>" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="mb-1 fw-medium">Cheese Pizza<span class="fs-11 text-muted"> Pizza</span></p>
                                            <div class="product-quantity-container order-summ">
                                                <div class="input-group flex-nowrap gap-1 border rounded-pill p-1">
                                                    <button type="button" aria-label="button" class="btn btn-icon btn-sm border btn-wave rounded-pill btn-primary-light border product-quantity-minus border-end-0"><i class="ri-subtract-line"></i></button>
                                                    <input type="text" class="form-control form-control-sm border-0 text-center p-0" aria-label="quantity" value="2">
                                                    <button type="button" aria-label="button" class="btn btn-icon btn-sm border btn-wave rounded-pill btn-primary-light border product-quantity-plus border-start-0"><i class="ri-add-line"></i></button>
                                                </div>
                                            </div> 
                                        </div>
                                        <div>
                                            <p class="text-end">
                                                <a aria-label="anchor" href="javascript:void(0)">
                                                    <i class="ri-close-line fs-16 text-danger"></i>
                                                </a>
                                            </p>
                                            <h6 class="mb-0 fw-medium mt-auto"><span class="badge bg-success-transparent ms-3 fs-9">30% Off</span> $3.99</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-top-0 border-start-0 border-end-0">
                                    <div class="d-flex align-items-start flex-wrap">
                                        <div class="me-2 lh-1">
                                            <span class="avatar avatar-xl bg-light">
                                                <img src="<?php echo base_url('assets/images/pos-system/10.jpg'); ?>" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="mb-1 fw-medium">Normal Pizza<span class="fs-11 text-muted"> Pizza</span></p>
                                            <div class="product-quantity-container order-summ">
                                                <div class="input-group flex-nowrap gap-1 border rounded-pill p-1">
                                                    <button type="button" aria-label="button" class="btn btn-icon btn-sm border btn-wave rounded-pill btn-primary-light border product-quantity-minus border-end-0"><i class="ri-subtract-line"></i></button>
                                                    <input type="text" class="form-control form-control-sm border-0 text-center p-0" aria-label="quantity" value="2">
                                                    <button type="button" aria-label="button" class="btn btn-icon btn-sm border btn-wave rounded-pill btn-primary-light border product-quantity-plus border-start-0"><i class="ri-add-line"></i></button>
                                                </div>
                                            </div> 
                                        </div>
                                        <div>
                                            <p class="text-end">
                                                <a aria-label="anchor" href="javascript:void(0)">
                                                    <i class="ri-close-line fs-16 text-danger"></i>
                                                </a>
                                            </p>
                                            <h6 class="mb-0 fw-medium mt-auto"><span class="badge bg-success-transparent ms-3 fs-9">30% Off</span> $3.99</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            
                            <div class="p-3 border-bottom border-block-end-dashed">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="fs-12 fw-medium bg-primary-transparent p-1 px-2 rounded">SPRUKO1325</div>
                                    <div class="text-success">COUPON APPLIED</div>
                                </div>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="text-muted">Sub Total</div>
                                    <div class="fw-medium fs-14">$318.00</div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="text-muted">Discount</div>
                                    <div class="fw-medium fs-14">10% - $31.08</div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="text-muted">Delivery Charges</div>
                                    <div class="fw-medium fs-14">- $29.00</div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="text-muted">GST (10%)</div>
                                    <div class="fw-medium fs-14">+ $2.00</div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="text-muted">Service Tax (18%)</div>
                                    <div class="fw-medium fs-14">- $45.29</div>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="fs-15">Total :</div>
                                    <div class="fw-semibold fs-16 text-dark"> $1,387.00</div>
                                </div>
                                <div class="d-flex gap-3 mt-4">
                                    <a href="javascript:void(0);" class="btn btn-primary1-light btn-wave flex-fill waves-effect waves-light">Save For Later</a>
                                    <a href="<?php echo base_url('checkout'); ?>" class="btn btn-primary btn-wave flex-fill waves-effect waves-light">Pay Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::offcanvas viewcart -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- Isotope-layout JS -->
        <script src="<?php echo base_url('assets/libs/isotope-layout/isotope.pkgd.min.js'); ?>"></script>

        <!-- Internal POS-Dashboard JS -->
        <script src="<?php echo base_url('assets/js/pos-dashboard.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
