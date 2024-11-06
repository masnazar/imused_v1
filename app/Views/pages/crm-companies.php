
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Companies</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Companies</h1>
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
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Companies <span class="badge bg-primary text-default rounded ms-2 fs-12 align-middle text-fixed-white">23</span>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button class="btn btn-primary btn-sm btn-wave" data-bs-toggle="modal" data-bs-target="#create-contact"><i class="ri-add-line me-1 fw-medium align-middle"></i>Add Company</button>
                                        <button class="btn btn-success-light btn-sm btn-wave">Export As CSV</button>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Date Added</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">A - Z</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <input class="form-check-input check-all" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                                    </th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Company Size</th>
                                                    <th scope="col">Industry</th>
                                                    <th scope="col">Key Contact</th>
                                                    <th scope="col">Total Deals</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/2.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                                role="button" aria-controls="offcanvasExample">Alpha Solutions</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>alpha.solutions@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>1234-567-890</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary1-transparent">Enterprise</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Software Development
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Michael</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        350
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                            role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel12" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/3.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                                role="button" aria-controls="offcanvasExample">Beta Innovations</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>contact@betainnovations.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>9876-543-210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary-transparent">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Biotechnology
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Sophia</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        420
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                            role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/4.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Gamma Solutions</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>info@gammasolutions.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>555-123-4567</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary1-transparent">Enterprise</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Consulting Services
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Oliver</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        390
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel4" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/5.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Delta Tech Solutions</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>contact@deltatech.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>678-987-6543</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary-transparent">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Technology Solutions
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Sophie</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        280
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/6.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Epsilon Innovations</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>info@epsiloninnovations.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>111-222-3333</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary-transparent">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Innovation Services
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Emma</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        320
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel7" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/8.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Theta Systems</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>info@thetasystems.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>456-789-0123</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary1-transparent">Enterprise</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Software Solutions
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Liam</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        410
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel8" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/9.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Iota Innovations</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>contact@iotainnovations.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>333-444-5555</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary-transparent">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Digital Marketing
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Ava</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        290
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/4.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                                role="button" aria-controls="offcanvasExample">Alpha Solutions</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>info@alphasolutions.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>1234-567-890</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary1-transparent">Enterprise</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Technology Services
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">John</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        570
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                            role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel13" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/5.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                                role="button" aria-controls="offcanvasExample">Gamma Industries</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>contact@gammatech.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted d-inline-block"></i>8765-432-109</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary-transparent">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Engineering
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Emily</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        320
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                            role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>                                                                                        
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer border-top-0">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            Showing 9 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i>
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
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: Company Details Offcanvas -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExample">
                        <div class="offcanvas-body p-0">
                            <div class="d-sm-flex align-items-top p-3 border-bottom border-block-end-dashed main-profile-cover">
                                <span class="avatar avatar-xxl avatar-rounded me-3 p-2 bg-primary-transparent">
                                    <img src="<?php echo base_url('assets/images/company-logos/1.png'); ?>" alt="">
                                </span>
                                <div class="flex-fill main-profile-info">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="fw-medium mb-1">Ethan Thompson
                                            <span class="badge bg-success-transparent fs-10"><i class="ri-circle-fill fs-8 text-success me-1 "></i> New Lead</span>
                                        </h6>
                                        <button type="button" class="btn-close crm-contact-close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <p class="mb-2 text-muted fs-12">Chief Financial Officer (CFO)</p>
                                    <div class="d-flex gap-2 fs-15 mt-1">
                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm rounded-pill btn-primary1-light"><i class="ri-phone-line"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm rounded-pill btn-primary2-light"><i class="ri-mail-line"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm rounded-pill btn-primary3-light"><i class="ri-message-line"></i></a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ri-more-fill"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Size </a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Deals</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3 gap-3 p-1 py-0 border-bottom border-block-end-dashed">
                                <div class="p-2 text-center flex-fill">
                                    <i class="ri-shake-hands-line p-2 fs-5 rounded-circle lh-1 text-fixed-white shadow-sm bg-primary"></i>
                                    <p class="fw-semibold fs-20 text-shadow mb-0 mt-2">253</p>
                                    <p class="mb-0 text-muted">Deals</p>
                                </div>
                                <div class="p-2 text-center flex-fill">
                                    <i class="ri-money-dollar-circle-line p-2 fs-5 rounded-circle lh-1 text-fixed-white shadow-sm bg-primary"></i>
                                    <p class="fw-semibold fs-20 text-shadow mb-0 mt-2">$12k</p>
                                    <p class="mb-0 text-muted">Contributions</p>
                                </div>
                                <div class="p-2 text-center flex-fill">
                                    <i class="ri-thumb-up-line p-2 fs-5 rounded-circle lh-1 text-fixed-white shadow-sm bg-primary"></i>
                                    <p class="fw-semibold fs-20 text-shadow mb-0 mt-2">$17k</p>
                                    <p class="mb-0 text-muted">Comitted</p>
                                </div>
                            </div>  
                            <div class="p-3 border-bottom border-block-end-dashed">
                                <div class="mb-0">
                                    <p class="fs-15 mb-2 fw-medium">Professional Bio :</p>
                                    <p class="text-muted mb-0">
                                        I am <b class="text-default">Ethan Thompson,</b> hereby declaring that I am the founder and managing director of the prestigious company named Thompson Enterprises, and I serve as the Chief Financial Officer (CFO) of the company.
                                    </p>                                
                                </div>   
                            </div>  
                            <div class="p-3 border-bottom border-block-end-dashed">
                                <p class="fs-14 mb-2 fw-medium">Contact Information :</p>
                                <div class="">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="me-2">
                                            <span class="avatar avatar-sm avatar-rounded bg-primary1-transparent">
                                                <i class="ri-mail-line align-middle fs-14"></i>
                                            </span>
                                        </div>
                                        <div>
                                            ethanthompson@example.com <span class="bg-light p-1 text-muted lh-1 rounded-circle ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Copy"><i class="ri-file-copy-line"></i></span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="me-2">
                                            <span class="avatar avatar-sm avatar-rounded bg-primary2-transparent">
                                                <i class="ri-phone-line align-middle fs-14"></i>
                                            </span>
                                        </div>
                                        <div>
                                            +(333) 555-1234
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-0">
                                        <div class="me-2">
                                            <span class="avatar avatar-sm avatar-rounded bg-primary3-transparent">
                                                <i class="ri-map-pin-line align-middle fs-14"></i>
                                            </span>
                                        </div>
                                        <div>
                                            1234 Elm Street, Apt 101, Springfield, IL, 62701, USA
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 fw-medium">Priority:</p>
                                <div class="badge bg-success-transparent"><i class="ri-circle-fill lh-1 align-middle fs-9 me-1"></i> Low Priority</div>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center gap-3">
                                <div class="fs-14 fw-medium">Company Size:</div>
                                <div>
                                    <span class="badge bg-primary-transparent">Corporate</span> - 250+ Employees
                                </div>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 fw-medium">Created Date:</p>
                                <div>25-May-2024</div>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 fw-medium">Lead Source:</p>
                                <div><i class="ri-instagram-line bg-danger-transparent p-1 lh-1 align-middle fs-15 me-1 rounded"></i> Instagram</div>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 fw-medium">Social Networks :</p>
                                <div class="btn-list mb-0">
                                    <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-facebook-line fw-medium"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-twitter-x-line fw-medium"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-primary2-light btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-instagram-line fw-medium"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-github-line fw-medium"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-youtube-line fw-medium"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 fw-medium">Tags :</p>
                                <div>
                                    <span class="badge bg-primary-transparent">New Lead</span>
                                    <span class="badge bg-primary-transparent">Others</span>
                                </div>
                            </div>
                            <div class="p-3 d-flex align-items-center gap-3">
                                <div class="fs-14 fw-medium">
                                    Key Contact :
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-rounded avatar-sm">
                                            <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                        </span>
                                    </div>    
                                    <div class="fw-medium">Linda Klusty</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Company Details Offcanvas -->

                    <!-- Start:: Add Company -->
                    <div class="modal fade" id="create-contact" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Add Company</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row gy-3">
                                        <div class="col-xl-12">
                                            <div class="mb-0 text-center">
                                                <span class="avatar avatar-xxl avatar-rounded p-2 bg-light">
                                                    <img src="<?php echo base_url('assets/images/company-logos/11.png'); ?>" alt="" id="profile-img">
                                                    <span class="badge rounded-pill bg-primary avatar-badge">
                                                        <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                                        <i class="fe fe-camera"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="company-name" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="company-name" placeholder="Contact Name">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="company-lead-score" class="form-label">Total Deals</label>
                                            <input type="number" class="form-control" id="company-lead-score" placeholder="Total Deals">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="company-mail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="company-mail" placeholder="Enter Email">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="company-phone" class="form-label">Phone No</label>
                                            <input type="tel" class="form-control" id="company-phone" placeholder="Enter Phone Number">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="key-contact" class="form-label">Key Contact</label>
                                            <input type="text" class="form-control" id="key-contact" placeholder="Contact Name">
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label">Industry</label>
                                            <select class="form-control" data-trigger id="choices-single-default1"  name="choices-multiple-remove-button2">
                                                <option value="">Select Insustry</option>
                                                <option value="Choice 1">Information Technology</option>
                                                <option value="Choice 2">Telecommunications</option>
                                                <option value="Choice 3">Logistics</option>
                                                <option value="Choice 4">Professional Services</option>
                                                <option value="Choice 5">Education</option>
                                                <option value="Choice 6">Education</option>
                                                <option value="Choice 7">Manufacturing</option>
                                                <option value="Choice 8">Healthcare</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label">Company Size</label>
                                            <select class="form-control" data-trigger id="choices-single-default2"  name="choices-multiple-remove-button3">
                                                <option value="">Company Size</option>
                                                <option value="Choice 1">Corporate</option>
                                                <option value="Choice 2">Small Business</option>
                                                <option value="Choice 3">Micro Business</option>
                                                <option value="Choice 4">Startup</option>
                                                <option value="Choice 5">Large Enterprise</option>
                                                <option value="Choice 6">Medium Size</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Create Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Add Company -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- CRM Contacts JS -->
        <script src="<?php echo base_url('assets/js/crm-companies.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
