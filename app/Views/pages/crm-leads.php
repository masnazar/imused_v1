
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
                                    <li class="breadcrumb-item active" aria-current="page">Leads</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Leads</h1>
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
                                        Leads<span class="badge bg-primary rounded ms-2 fs-12 align-middle">28</span>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create-contact"><i class="ri-add-line me-1 fw-medium align-middle"></i>Create Lead</button>
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
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <input class="form-check-input check-all" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                                    </th>
                                                    <th scope="col">Contact Name</th>
                                                    <th scope="col">Company</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Lead Status</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Lead Source</th>
                                                    <th scope="col">Owner</th>
                                                    <th scope="col">Last Contracted</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel01" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Catalina</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/1.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Spruko Technologies</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>Catalina2981@gmail.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary1-transparent">New Lead</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>1678-28993-223</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Social Media
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Jane Smith</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-06-15
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
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
                                                                <span class="d-block fw-medium">David Johnson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/2.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Global Solutions Ltd.</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>david.johnson@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Prospect</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>+1-987-654-3210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Email Campaign
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Michael Brown</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-06-14
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
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
                                                                <span class="d-block fw-medium">Sophia Adams</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/3.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Beta Innovations</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>sophia.adams@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary1-transparent">Lead</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>9876-543-210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Website
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Emma Wilson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-06-13
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Sophie Turner</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/5.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Delta Enterprises</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>sophie.turner@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Prospect</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>+61-9876-543-210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Cold Call
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Olivia Moore</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-06-11
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel6" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Emma Garcia</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/6.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Gamma Solutions</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>emma.garcia@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary1-transparent">Lead</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>+55-1234-5678</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Referral
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Daniel Harris</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-06-10 
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel7" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Sophia Lee</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/7.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Omega Solutions</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>sophia.lee@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary1-transparent">Lead</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>+91-987-654-3210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Website
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Sophie Turner</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-06-09
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel8" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Lucas Martin</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/8.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Phoenix Innovations</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>lucas.martin@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Prospect</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>+1-234-567-8901</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Cold Call
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Olivia Moore</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-06-08
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
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
                                                                <span class="d-block fw-medium">Catalina</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/1.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Spruko Technologies</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>Catalina2981@gmail.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary1-transparent">New Lead</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>1678-28993-223</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Social Media
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Jane Smith</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-06-15
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-info-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-primary2-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel9" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Isabella Adams</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm p-1 bg-light avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/9.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Gamma Technologies</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-muted d-inline-block"></i>isabella.adams@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary1-transparent">Lead</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>+7-987-654-3210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Advertisement
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Sophia Lee</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-06-07 
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
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

                    <!-- Start:: Create Contact -->
                    <div class="modal fade" id="create-contact" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Create Lead</h6>
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
                                        <div class="col-xl-12">
                                            <label for="contact-name" class="form-label">Contact Name</label>
                                            <input type="text" class="form-control" id="contact-name" placeholder="Contact Name">
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
                                            <label class="form-label">Lead Status</label>
                                            <select class="form-control" name="choices-multiple-remove-button3" id="choices-multiple-remove-button3">
                                                <option value="">Select Status</option>
                                                <option value="Choice 1">New</option>
                                                <option value="Choice 2">Follow-up</option>
                                                <option value="Choice 3">Closed</option>
                                                <option value="Choice 4">Contacted</option>
                                                <option value="Choice 5">Disqualified</option>
                                                <option value="Choice 6">Qualified</option>
                                            </select>
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
                                        <div class="col-xl-12">
                                            <label class="form-label">Tags</label>
                                            <select class="form-control" name="choices-multiple-remove-button2" id="choices-multiple-remove-button2" multiple>
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
        <script src="<?php echo base_url('assets/js/crm-leads.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>