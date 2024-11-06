
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Order Details</h1>
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
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="card-title">
                                                Order No - <span class="text-primary">#SPK-7832</span>
                                            </div>
                                            <div>
                                                <span class="badge bg-primary-transparent">
                                                    Estimated delivery : 30,Nov 2023
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Item</th>
                                                            <th scope="col">Tracking ID</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Total Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-xl bg-primary-transparent">
                                                                            <img src="<?php echo base_url('assets/images/ecommerce/png/28.png'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 fs-14 fw-medium">
                                                                            <a href="javascript:void(0);">Lightweight Sneakers</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 d-inline-block">Size:</span><span class="text-muted">Men's 10</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 d-inline-block">Color:</span><span class="text-muted">Light Pink</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK1218153635</a></td>
                                                            <td>
                                                                <span class="fs-15 fw-semibold">$1,249</span>
                                                            </td>
                                                            <td>1</td>
                                                            <td>$1,249</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-xl bg-primary-transparent">
                                                                            <img src="<?php echo base_url('assets/images/ecommerce/png/12.png'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 fs-14 fw-medium">
                                                                            <a href="javascript:void(0);">Kids' Party Wear Frock</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 d-inline-block">Size:</span><span class="text-muted">6-7 Years</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 d-inline-block">Color:</span><span class="text-muted">Gold<span class="badge bg-success ms-3">In Offer</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK3789423789</a></td>
                                                            <td>
                                                                <span class="fs-15 fw-semibold">$499</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>$998</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-xl bg-primary-transparent">
                                                                            <img src="<?php echo base_url('assets/images/ecommerce/png/29.png'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 fs-14 fw-medium">
                                                                            <a href="javascript:void(0);">
                                                                                Ladies' Slim Bag</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 d-inline-block">Size:</span><span class="text-muted">Small</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 d-inline-block">Color:</span><span class="text-muted">Red<span class="badge bg-primary ms-3">32% Off</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK1120324532</a></td>
                                                            <td>
                                                                <span class="fs-15 fw-semibold">$799</span>
                                                            </td>
                                                            <td>1</td>
                                                            <td>$799</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-xl bg-primary-transparent">
                                                                            <img src="<?php echo base_url('assets/images/ecommerce/png/14.png'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 fs-14 fw-medium">
                                                                            <a href="javascript:void(0);">Elegant Flower Pot</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 d-inline-block">Size:</span><span class="text-muted">33mm</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 d-inline-block">Color:</span><span class="text-muted">Brown</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK1218153635</a></td>
                                                            <td>
                                                                <span class="fs-15 fw-semibold">$1,249</span>
                                                            </td>
                                                            <td>1</td>
                                                            <td>$1,249</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-xl bg-primary-transparent">
                                                                            <img src="<?php echo base_url('assets/images/ecommerce/png/11.png'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 fs-14 fw-medium">
                                                                            <a href="javascript:void(0);">Trendy Sunglasses</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 d-inline-block">Size:</span><span class="text-muted">9</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 d-inline-block">Color:</span><span class="text-muted">Light Gray<span class="badge bg-success ms-3">In Offer</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK3789423789</a></td>
                                                            <td>
                                                                <span class="fs-15 fw-semibold">$499</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>$998</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-xl bg-primary-transparent">
                                                                            <img src="<?php echo base_url('assets/images/ecommerce/png/13.png'); ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 fs-14 fw-medium">
                                                                            <a href="javascript:void(0);">
                                                                                Sleek Modern Chair</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 d-inline-block">Size:</span><span class="text-muted">Small</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1 d-inline-block">Color:</span><span class="text-muted">Yellow<span class="badge bg-primary ms-3">32% Off</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK1120324532</a></td>
                                                            <td>
                                                                <span class="fs-15 fw-semibold">$799</span>
                                                            </td>
                                                            <td>1</td>
                                                            <td>$799</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer border-top-0 d-flex align-items-center justify-content-between gap-2">
                                            <button class="btn btn-primary-light btn-wave   " onclick="javascript:window.print();"><i class="ri-printer-line me-1 align-middle d-inline-block"></i>Print</button>
                                            <button class="btn btn-primary btn-wave "><i class="ri-share-forward-line me-1 align-middle d-inline-block"></i>Share Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Order tracking
                                    </div>
                                    <div>
                                        ID : <a href="javascript:void(0);" class="text-primary fw-semibold">#245879</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-form-group mb-3">
                                        <input type="text" class="form-control form-control-md" placeholder="Enter your order ID" aria-label="Order ID">
                                        <button class="btn btn-primary btn-sm border-0 custom-form-btn" type="button">Track Order</button>
                                    </div>
                                    <p class="mb-4">
                                        <span class="fw-medium me-2 fs-14">Status :</span>
                                        <span class="bg-success-transparent fs-11 badge">Shipping</span>
                                    </p>
                                    <div class="order-track mt-1">
                                        <div class="accordion" id="basicAccordion">
                                            <div class="accordion-item border-0 bg-transparent mb-3">
                                                <div class="accordion-header" id="headingOne">
                                                    <a class="px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" data-bs-target="#basicOne" aria-expanded="true" aria-controls="basicOne">
                                                        <div class="d-flex mb-0 lh-1">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-primary border-opacity-10 bg-primary-transparent">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/18.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill d-flex align-items-center justify-content-between">
                                                                <p class="fw-medium mb-0 fs-14">Order Placed</p>
                                                                <span class=" text-secondary">May 15</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="basicOne" class="accordion-collapse collapse show border-top-0" aria-labelledby="headingOne" data-bs-parent="#basicAccordion">
                                                    <div class="accordion-body pt-0 ps-5 mb-0 pb-0">
                                                        <div class="">
                                                            <p class="mb-0">Order successfully placed by <a href="javascript:void(0);" class="font-weight-semibold text-primary">Austin Ninus</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" id="basicAccordion1">
                                            <div class="accordion-item border-0 bg-transparent mb-3">
                                                <div class="accordion-header" id="headingTwo">
                                                    <a class="px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" data-bs-target="#basicTwo" aria-expanded="true" aria-controls="basicTwo">
                                                        <div class="d-flex mb-0 lh-1">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-primary1 border-opacity-10 bg-primary1-transparent">
                                                                        <img src="<?php echo base_url('assets/images/ecommerce/png/8.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill d-flex align-items-center justify-content-between">
                                                                <p class="fw-medium mb-0 fs-14">Picked</p>
                                                                <span class="fs-12">May 15, 21:08</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="basicTwo" class="accordion-collapse show collapse border-top-0" aria-labelledby="headingTwo" data-bs-parent="#basicAccordion1">
                                                    <div class="accordion-body pt-0 ps-5 mb-0 pb-0">
                                                        <div class="">
                                                            <p class="mb-0">Your order has been collected by <span class="font-weight-semibold">Suguna Enterprises.</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" id="basicAccordion2">
                                            <div class="accordion-item border-0 bg-transparent mb-3">
                                                <div class="accordion-header" id="headingThree">
                                                    <a class="px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" data-bs-target="#basicThree" aria-expanded="true" aria-controls="basicThree">
                                                        <div class="d-flex mb-0 lh-1">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-info border-opacity-10 bg-info-transparent">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/19.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill d-flex align-items-center justify-content-between">
                                                                <p class="fw-medium mb-0 fs-14">Shipping</p>
                                                                <span class="fs-12">May 15, 21:08</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="basicThree" class="accordion-collapse show collapse border-top-0" aria-labelledby="headingThree" data-bs-parent="#basicAccordion2">
                                                    <div class="accordion-body pt-0 ps-5 mb-0 pb-0">
                                                        <div class="">
                                                            <p class="mb-0">Order<span class="font-weight-semibold"> picked </span> and en route to location.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" id="basicAccordion3">
                                            <div class="accordion-item border-0 bg-transparent next-step mb-3">
                                                <div class="accordion-header" id="headingFour">
                                                    <a class="collapsed px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" data-bs-target="#basicFour" aria-expanded="false" aria-controls="basicFour">
                                                        <div class="d-flex mb-0 lh-1">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-secondary border-opacity-10 bg-secondary-transparent">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/25.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill d-flex align-items-center justify-content-between flex-wrap">
                                                                <p class="fw-medium mb-0 fs-14">Out For Delivery</p>
                                                                <span class="text-muted fs-12">May 15, 21:08 (expected)</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="basicFour" class="accordion-collapse collapse border-top-0" aria-labelledby="headingFour" data-bs-parent="#basicAccordion3">
                                                    <div class="accordion-body pt-0 ps-5 mb-0 pb-0">
                                                        <div class="mb-1">
                                                            <p class="mb-0">Your order is out for delivery</p>
                                                            <span class="text-muted fs-12">May 15, 2022, 15:36</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" id="basicAccordion4">
                                            <div class="accordion-item border-0 bg-transparent next-step">
                                                <div class="accordion-header" id="headingFive">
                                                <a class="collapsed px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" aria-expanded="false" >
                                                        <div class="d-flex mb-0 lh-1">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-sm avatar-rounded track-order-icon backdrop-blur border border-primary2 border-opacity-10 bg-primary2-transparent">
                                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/20.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill d-flex align-items-center justify-content-between">
                                                                <p class="fw-medium mb-0 fs-14">Delivered</p>
                                                                <span class="fs-12 text-muted">May 15, 22:12</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Order Summary
                                    </div>
                                    <div>
                                        ID : <a href="javascript:void(0);" class="text-primary fw-semibold">#245879</a>
                                    </div>
                                </div>
                                <div class="card-body p-0 table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">Total Items :</div>
                                                </td>
                                                <td>
                                                    06
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">Applied Coupon :</div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">SP0578A</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">Delivery Fees :</div>
                                                </td>
                                                <td>
                                                    <span class="text-danger">+$29</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">Sub Total :</div>
                                                </td>
                                                <td>
                                                    <span class="fs-14 fw-medium">$3,799</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="fw-semibold">Total Price :</div>
                                                </td>
                                                <td>
                                                    <span class="fs-20 fw-semibold">$3,129</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	


<?= $this->endSection('scripts'); ?>