
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
                                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Checkout</h1>
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
                        <div class="col-xxl-9">
                            <div class="card custom-card">
                                <div class="card-body product-checkout">
                                    <ul class="nav nav-tabs tab-style-8 scaleX d-sm-flex d-block justify-content-around border border-dashed border-bottom-0 bg-light rounded-top" id="myTab1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link p-3 active" id="order-tab" data-bs-toggle="tab"
                                                data-bs-target="#order-tab-pane" type="button" role="tab"
                                                aria-controls="order-tab" aria-selected="true"><i
                                                    class="ri-truck-line me-2 align-middle"></i>Shipping</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link p-3" id="confirmed-tab" data-bs-toggle="tab"
                                                data-bs-target="#confirm-tab-pane" type="button" role="tab"
                                                aria-controls="confirmed-tab" aria-selected="false"><i
                                                    class="ri-user-3-line me-2 align-middle"></i>Personal Details</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link p-3" id="shipped-tab" data-bs-toggle="tab"
                                                data-bs-target="#shipped-tab-pane" type="button" role="tab"
                                                aria-controls="shipped-tab" aria-selected="false"><i
                                                    class="ri-bank-card-line me-2 align-middle"></i>Payment</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link p-3" id="delivered-tab" data-bs-toggle="tab"
                                                data-bs-target="#delivery-tab-pane" type="button" role="tab"
                                                aria-controls="delivered-tab" aria-selected="false"><i
                                                    class="ri-checkbox-circle-line me-2 align-middle"></i>Complete Order</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content border border-dashed" id="myTabContent">
                                        <div class="tab-pane fade show active border-0 p-0" id="order-tab-pane" role="tabpanel"
                                            aria-labelledby="order-tab-pane" tabindex="0">
                                            <div class="p-3">
                                                <p class="mb-1 fw-semibold text-muted op-5 fs-20">01</p>
                                                <div class="row gy-3 mb-4">
                                                    <p class="fs-15 fw-semibold mb-1">Shipping Methods :</p>
                                                    <div class="col-xl-6">
                                                        <div class="form-check shipping-method-container mb-0">
                                                            <input id="shipping-method1" name="shipping-methods" type="radio" class="form-check-input" checked="">
                                                            <div class="form-check-label">
                                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/ecommerce/png/21.png'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="shipping-partner-details me-sm-5 me-0">
                                                                    <p class="mb-0 fw-semibold">UPS</p>
                                                                    <p class="text-muted fs-11 mb-0">Delivered By 11,May 2024</p>
                                                                </div>
                                                                <div class="fw-semibold me-sm-5 me-0">
                                                                    $9.99
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-check shipping-method-container mb-0">
                                                            <input id="shipping-method2" name="shipping-methods" type="radio" class="form-check-input">
                                                            <div class="form-check-label">
                                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-md">
                                                                        <img src="<?php echo base_url('assets/images/ecommerce/png/22.png'); ?>" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="shipping-partner-details me-sm-5 me-0">
                                                                    <p class="mb-0 fw-semibold">USPS</p>
                                                                    <p class="text-muted fs-11 mb-0">Delivered By 22,Nov 2022</p>
                                                                </div>
                                                                <div class="fw-semibold me-sm-5 me-0">
                                                                    $10.49
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                    <div>Shipping Address :</div>
                                                    <div class="mt-sm-0 mt-2">
                                                        <button class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#modal-new-address"><i class="ri-add-line me-1 align-middle fs-14 fw-semibold"></i>Add New Address</button>
                                                        <div class="modal fade"  id="modal-new-address" tabindex="-1" aria-labelledby="modal-new-address" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title" id="staticBackdropLabel">New Address
                                                                        </h6>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row gy-3">
                                                                            <div class="col-xl-6">
                                                                                <label for="fullname-new" class="form-label">Full Name</label>
                                                                                <input type="text" class="form-control" id="fullname-new" placeholder="Full Name">
                                                                            </div>
                                                                            <div class="col-xl-6">
                                                                                <label for="email-new" class="form-label">Email</label>
                                                                                <input type="email" class="form-control" id="email-new" placeholder="email">
                                                                            </div>
                                                                            <div class="col-xl-6">
                                                                                <label for="phonenumber-new" class="form-label">Phone Number</label>
                                                                                <input type="number" class="form-control" id="phonenumber-new" placeholder="Phone">
                                                                            </div>
                                                                            <div class="col-xl-6">
                                                                                <label for="address-new" class="form-label">Address</label>
                                                                                <input type="text" class="form-control" id="address-new" placeholder="Address">
                                                                            </div>
                                                                            <div class="col-xl-12">
                                                                                <div class="row">
                                                                                    <div class="col-xl-3">
                                                                                        <label for="pincode-new" class="form-label">Pincode</label>
                                                                                        <input type="number" class="form-control" id="pincode-new" placeholder="Pincode">
                                                                                    </div>
                                                                                    <div class="col-xl-3">
                                                                                        <label for="city-new" class="form-label">City</label>
                                                                                        <input type="text" class="form-control" id="city-new" placeholder="City">
                                                                                    </div>
                                                                                    <div class="col-xl-3">
                                                                                        <label for="state-new" class="form-label">State</label>
                                                                                        <input type="text" class="form-control" id="state-new" placeholder="State">
                                                                                    </div>
                                                                                    <div class="col-xl-3">
                                                                                        <label for="country-new" class="form-label">Country</label>
                                                                                        <input type="text" class="form-control" id="country-new" placeholder="Country">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-success">Save
                                                                            Address</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="card custom-card card-style-6 border shadow-none mb-xl-0">
                                                            <div class="card-body p-3">
                                                                <div class="d-flex gap-2">
                                                                    <input class="form-check-input" type="radio" id="address1" name="default-address" checked="">
                                                                    <label class="form-check-label cursor-pointer" for="address1">Set as Default</label>
                                                                </div>
                                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="fs-16 mb-0 fw-semibold">My Home Address</h6>
                                                                    </div>
                                                                    <a class="btn btn-primary btn-sm"><i class="ri-edit-2-line"></i> Change</a>
                                                                </div>
                                                                <h6 class="mb-1">Victoria Gracie</h6>
                                                                <p class="mb-1 fw-500 fs-13">victoriagracie@jinno.mail</p>
                                                                <p class="mb-2 fw-500 fs-13">+05-554-874113</p>
                                                                <p class="mb-0">
                                                                    H.No: 48A-1B/C451, Smart Avenue,Coolin Street,
                                                                    Opp. NG Super Mart, 57016, Canada
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="card custom-card card-style-6 border shadow-none mb-0">
                                                            <div class="card-body p-3">
                                                                <div class="d-flex gap-2">
                                                                    <input class="form-check-input" type="radio" id="address2" name="default-address">
                                                                    <label class="form-check-label cursor-pointer" for="address2">Set as Default</label>
                                                                </div>
                                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                                    <div class="flex-grow-1">
                                                                        <div class="d-flex align-items-center gap-2 card-style-6-avatar">
                                                                            <h6 class="fs-16 mb-0 fw-semibold">Work Place Address</h6>
                                                                        </div>
                                                                    </div>
                                                                    <a class="btn btn-primary btn-sm"><i class="ri-edit-2-line"></i> Change</a>
                                                                </div>
                                                                <h6 class="mb-1">Victoria Gracie</h6>
                                                                <p class="mb-1 fw-500 fs-13">victoriagracie@jinno.mail</p>
                                                                <p class="mb-2 fw-500 fs-13">+05-554-874113</p>
                                                                <p class="mb-0">
                                                                    Sunset Plaza, 5th Floor, Suite No: 502, Ocean Avenue,, Seaview Heights, Sunnydale, CA 90210, United States
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                                <button class="btn btn-primary1-light" id="personal-details-trigger">Personal Details<i class="ri-user-3-line ms-2 align-middle d-inline-block"></i></button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade border-0 p-0" id="confirm-tab-pane"
                                            role="tabpanel" aria-labelledby="confirm-tab-pane" tabindex="0">
                                            <div class="p-3">
                                                <p class="mb-1 fw-semibold text-muted op-5 fs-20">02</p>
                                                <div class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                    <div>Personal Details :</div>
                                                </div>
                                                <div class="row gy-3">
                                                    <div class="col-xl-6">
                                                        <label for="firstname-personal" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstname-personal" placeholder="First Name" value="Victoria ">
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label for="lastname-personal" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastname-personal" placeholder="Last Name" value="Gracie">
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <label for="email-personal" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email-personal" placeholder="victoriagracie@jinno.mail" value="">
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <label for="phoneno-personal" class="form-label">Phone no</label>
                                                        <input type="text" class="form-control" id="phoneno-personal" placeholder="554-874113" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                                <button class="btn btn-primary-light" id="back-shipping-trigger"><i class="ri-truck-line me-2 align-middle d-inline-block"></i>Back To Shipping</button>
                                                <button class="btn btn-primary1-light mt-sm-0 mt-2" id="payment-trigger">Continue To Payment<i class="bi bi-credit-card-2-front align-middle ms-2 d-inline-block"></i></button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade border-0 p-0" id="shipped-tab-pane" role="tabpanel"
                                            aria-labelledby="shipped-tab-pane" tabindex="0">
                                            <div class="p-3">
                                                <p class="mb-1 fw-semibold text-muted op-5 fs-20">03</p>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                            <div>Payment Details :</div>
                                                        </div>
                                                        <div class="mb-3 d-sm-flex d-block gap-3" role="group" aria-label="Basic radio toggle button group">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="Paymentoptions" id="Paymentoptions3" value="Paymentoptions3" checked="checked">
                                                                <label class="form-check-label" for="Paymentoptions3">Credit/Debit Card</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="Paymentoptions" id="Paymentoptions1" value="Paymentoptions1">
                                                                <label class="form-check-label" for="Paymentoptions1">C.O.D (Cash on delivery)</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="Paymentoptions" id="Paymentoptions2" value="Paymentoptions2">
                                                                <label class="form-check-label" for="Paymentoptions2">UPI Payment</label>
                                                            </div>                                                        
                                                        </div>
                                                        <div class="row gy-3 mb-3">
                                                            <div class="col-xl-12">
                                                                <label for="payment-card-number" class="form-label">Card Number</label>
                                                                <input type="text" class="form-control" id="payment-card-number" placeholder="Card Number" value="1245 - 5447 - 8934 - XXXX">
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <label for="payment-card-name" class="form-label">Name On Card</label>
                                                                <input type="text" class="form-control" id="payment-card-name" placeholder="Name On Card" value="JSON TAYLOR">
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <label for="payment-cardexpiry-date" class="form-label">Expiration Date</label>
                                                                <input type="text" class="form-control" id="payment-cardexpiry-date" placeholder="MM/YY" value="08/2024">
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <label for="payment-cvv" class="form-label">CVV</label>
                                                                <input type="text" class="form-control" id="payment-cvv" placeholder="XXX" value="341">
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <label for="payment-security" class="form-label">O.T.P</label>
                                                                <input type="text" class="form-control" id="payment-security" placeholder="XXXXXX" value="183467">
                                                                <label for="payment-security" class="form-label mt-1 mb-0 text-danger fs-11"><sup><i class="ri-star-s-fill"></i></sup>Do not share O.T.P with anyone</label>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input form-checked-success" type="checkbox" value="" id="payment-card-save" checked="">
                                                                    <label class="form-check-label" for="payment-card-save">
                                                                        Save this card
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                            <div>Saved Cards :</div>
                                                        </div>
                                                        <div class="row gy-3">
                                                            <div class="col-xl-6">
                                                                <div class="form-check payment-card-container mb-0">
                                                                    <input id="payment-card1" name="payment-cards" type="radio" class="form-check-input" checked="">
                                                                    <div class="form-check-label">
                                                                    <div class="d-sm-flex d-block align-items-center justify-content-between">
                                                                        <div class="me-2 lh-1">
                                                                            <span class="avatar avatar-md">
                                                                                <img src="<?php echo base_url('assets/images/ecommerce/png/26.png'); ?>" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="saved-card-details">
                                                                            <p class="mb-0 fw-semibold">XXXX - XXXX - XXXX - 7646</p>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-check payment-card-container mb-0">
                                                                    <input id="payment-card2" name="payment-cards" type="radio" class="form-check-input">
                                                                    <div class="form-check-label">
                                                                    <div class="d-sm-flex d-block align-items-center justify-content-between">
                                                                        <div class="me-2 lh-1">
                                                                            <span class="avatar avatar-md">
                                                                                <img src="<?php echo base_url('assets/images/ecommerce/png/27.png'); ?>" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="saved-card-details">
                                                                            <p class="mb-0 fw-semibold">XXXX - XXXX - XXXX - 9556</p>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                                <button class="btn btn-primary-light" id="back-personal-trigger"><i class="ri-user-3-line me-2 align-middle d-inline-block"></i>Back To Personal Info</button>
                                                <button class="btn btn-primary1-light mt-sm-0 mt-2" id="continue-payment-trigger">Continue Payment<i class="bi bi-credit-card-2-front align-middle ms-2 d-inline-block"></i></button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade border-0 p-0" id="delivery-tab-pane" role="tabpanel"
                                            aria-labelledby="delivery-tab-pane" tabindex="0">
                                            <div class="p-3 checkout-payment-success my-3">
                                                <div class="mb-4">
                                                    <h5 class="text-success fw-semibold">Payment Successful...</h5>
                                                </div>
                                                <div class="mb-4">
                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/24.png'); ?>" alt="">
                                                </div>
                                                <div class="mb-4">
                                                    <p class="mb-1 fs-14">You can track your order with Order Id <b>SPK#1FR</b> from <a class="link-primary1" href="javascript:void(0);"><u>Track Order</u></a></p>
                                                    <p class="text-muted">Thankyou for shopping with us.</p>
                                                </div>
                                                <a href="<?php echo base_url('products'); ?>" class="btn btn-primary">Continue Shopping<i class="bi bi-cart ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title me-1">Order Summary</div><span class="badge bg-primary-transparent rounded-pill">02</span>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group mb-0 border-0 rounded-0">
                                        <li class="list-group-item p-3 border-top-0">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="avatar avatar-lg bg-light me-2">
                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/9.png'); ?>" alt="">
                                                </span>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-semibold">Versatile Hoodie</p>
                                                    <p class="mb-0 text-muted fs-12">Quantity : 2  <span class="badge bg-success-transparent ms-3">30% Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-close-line fs-16 text-muted"></i>
                                                        </a>
                                                    </p>
                                                    <p class="mb-0 fs-14 fw-semibold">$189<span class="ms-1 text-muted fs-11 d-inline-block fw-normal"><s>$329</s></span></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item p-3  border-bottom border-block-end-dashed">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span class="avatar avatar-lg bg-light me-2">
                                                    <img src="<?php echo base_url('assets/images/ecommerce/png/7.png'); ?>" alt="">
                                                </span>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-semibold">Leather Hand Bag</p>
                                                    <p class="mb-0 text-muted fs-12">Quantity : 1  <span class="badge bg-success-transparent ms-3">10% Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end">
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-close-line fs-16 text-muted"></i>
                                                        </a>
                                                    </p>
                                                    <p class="mb-0 fs-14 fw-semibold">$187<span class="ms-1 text-muted fs-11 d-inline-block fw-normal"><s>$139</s></span></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="p-3 border-bottom border-block-end-dashed">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="fs-12 fw-semibold bg-primary-transparent badge badge-md rounded">SPRUKO25</div>
                                            <div class="text-success">COUPON APPLIED</div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom border-block-end-dashed">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="text-muted">Sub Total</div>
                                            <div class="fw-semibold fs-14">$318</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="text-muted">Discount</div>
                                            <div class="fw-semibold fs-14 text-success">10% - $31.8</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="text-muted">Delivery Charges</div>
                                            <div class="fw-semibold fs-14 text-danger">- $29</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="text-muted">Service Tax (18%)</div>
                                            <div class="fw-semibold fs-14">- $45.29</div>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="fs-15">Total :</div>
                                            <div class="fw-semibold fs-16 text-dark"> $1,387</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Internal Checkout JS -->
        <script src="<?php echo base_url('assets/js/checkout.js'); ?>"></script>
        
<?= $this->endSection('scripts'); ?>
