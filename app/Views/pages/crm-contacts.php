
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
                                    <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Contacts</h1>
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
                                <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <div class="card-title">
                                        Contacts<span class="badge bg-primary rounded ms-2 fs-12 align-middle">28</span>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create-contact"><i class="ri-add-line me-1 fw-medium align-middle"></i>Create Contact</button>
                                        <button class="btn btn-success-light btn-sm">Export As CSV</button>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
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
                                        <table class="table text-nowrap table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <input class="form-check-input check-all" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                                    </th>
                                                    <th scope="col">Contact Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Company</th>
                                                    <th scope="col">Lead Score</th>
                                                    <th scope="col">Priority</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Tags</th>
                                                    <th scope="col">Lead Source</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">John Doe</span></a>
                                                                <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jun, 15 2024 - 10:30 AM</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>john.doe@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/2.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Example Corp</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        380
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">High Priority</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>123-456-7890</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">VIP Client</span>
                                                    </td>
                                                    <td>
                                                        Referral
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">Alice Smith</span></a>
                                                                <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jun, 14 2024 - 3:15 PM</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>alice.smith@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/3.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Smith & Co</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        425
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Medium Priority</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>987-654-3210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Regular Client</span>
                                                    </td>
                                                    <td>
                                                        LinkedIn
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">Michael Johnson</span></a>
                                                                <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jun, 13 2024 - 9:00 AM</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>michael.johnson@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/4.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Johnson Enterprises</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        300
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Low Priority</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>555-123-4567</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Potential Client</span>
                                                    </td>
                                                    <td>
                                                        Website
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">Sophia Martinez</span></a>
                                                                <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jun, 12 2024 - 2:00 PM</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>sophia.martinez@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/5.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Martinez Enterprises</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        500
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Medium Priority</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>234-567-8901</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Potential Lead</span>
                                                    </td>
                                                    <td>
                                                        Cold Call
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel6" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">David Wilson</span></a>
                                                                <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jun, 11 2024 - 11:45 AM</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>david.wilson@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/6.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Wilson & Sons</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        320
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Low Priority</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>345-678-9012</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Regular Client</span>
                                                    </td>
                                                    <td>
                                                        Email Campaign
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel7" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">Emma Brown</span></a>
                                                                <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jun, 10 2024 - 1:30 PM</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>emma.brown@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/7.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Brown Solutions</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        280
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">High Priority</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>456-789-0123</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">VIP Client</span>
                                                    </td>
                                                    <td>
                                                        Trade Show
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel9" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">Olivia Davis</span></a>
                                                                <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jun, 9 2024 - 9:15 AM</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>olivia.davis@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/8.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Davis Consulting</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        280
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Medium Priority</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>567-890-1234</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Regular Client</span>
                                                    </td>
                                                    <td>
                                                        Webinar
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel10" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><span class="d-block fw-medium">William Clark</span></a>
                                                                <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted"><i class="ri-account-circle-line me-1 fs-13 align-middle"></i>Jun, 8 2024 - 4:30 PM</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>william.clark@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/9.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Clark Solutions</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        350
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">High Priority</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>678-901-2345</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">VIP Client</span>
                                                    </td>
                                                    <td>
                                                        Advertisement
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
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
                                            Showing 8 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i>
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

                    <!-- Start:: Contact Details Offcanvas -->
                    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExample">
                        <div class="offcanvas-body p-0">
                            <div class="d-sm-flex align-items-top p-3 border-bottom border-block-end-dashed main-profile-cover">
                                <span class="avatar avatar-xxl avatar-rounded me-3">
                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
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
                                            ethanthompson@example.com <span class="text-muted lh-1 rounded-circle ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Copy"><i class="ri-file-copy-fill"></i></span>
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
                                <p class="fs-14 mb-0 me-4 fw-medium">Tags :</p>
                                <div>
                                    <span class="badge bg-primary-transparent">New Lead</span>
                                    <span class="badge bg-primary-transparent">Others</span>
                                </div>
                            </div>
                            <div class="p-3">
                                <p class="fs-14 mb-2 fw-medium">Relationship Manager :
                                    <a class="bg-primary1-transparent fs-12 p-1 pe-2 rounded mb-0 float-end" href="javascript:void(0);"><i class="ri-add-line me-1 align-middle"></i>Add Manager</a>
                                </p>
                                <div class="avatar-list-stacked">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="img">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Contact Details Offcanvas -->

                    <!-- Start:: Create Contact -->
                    <div class="modal fade" id="create-contact" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Create Contact</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row gy-3">
                                        <div class="col-xl-12">
                                            <div class="mb-0 text-center">
                                                <span class="avatar avatar-xxl avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="" id="profile-img">
                                                    <span class="badge rounded-pill bg-primary avatar-badge">
                                                        <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                                        <i class="fe fe-camera"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="deal-title" class="form-label">Deal Title</label>
                                            <input type="text" class="form-control" id="deal-title" placeholder="Deal Title">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="contact-lead-score" class="form-label">Lead Score</label>
                                            <input type="number" class="form-control" id="contact-lead-score" placeholder="Lead Score">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="contact-mail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="contact-mail" placeholder="Enter Email">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="contact-phone" class="form-label">Phone No</label>
                                            <input type="tel" class="form-control" id="contact-phone" placeholder="Enter Phone Number">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="company-name" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="company-name" placeholder="Company Name">
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label">Lead Source</label>
                                            <select class="form-control" name="choices-multiple-remove-button1" id="choices-multiple-remove-button1">
                                                <option value="Choice 1">Social Media</option>
                                                <option value="Choice 2">Direct mail</option>
                                                <option value="Choice 3">Blog Articles</option>
                                                <option value="Choice 4">Affiliates</option>
                                                <option value="Choice 5">Organic search</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="form-label">Last Contacted</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="text" class="form-control" id="targetDate" placeholder="Choose date and time">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="form-label">Tags</label>
                                            <select class="form-control" name="choices-multiple-remove-button2" id="choices-multiple-remove-button2" multiple>
                                                <option value="">Select Tag</option>
                                                <option value="Choice 1">New Lead</option>
                                                <option value="Choice 2">Prospect</option>
                                                <option value="Choice 3">Customer</option>
                                                <option value="Choice 4">Hot Lead</option>
                                                <option value="Choice 5">Partner</option>
                                                <option value="Choice 6">LostCustomer</option>
                                                <option value="Choice 7">Influencer</option>
                                                <option value="Choice 8">Subscriber</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn m-0 btn-primary1-light me-2"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn m-0 btn-primary">Create Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Create Contact -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Flat Picker JS -->
        <script src="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.js'); ?>"></script>

        <!-- CRM Contacts JS -->
        <script src="<?php echo base_url('assets/js/crm-contacts.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>