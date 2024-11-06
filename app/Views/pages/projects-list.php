
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Projects</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Projects List</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Projects List</h1>
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
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                        <div class="d-flex flex-wrap gap-1 project-list-main">
                                            <a href="<?php echo base_url('projects-create'); ?>" class="btn btn-primary me-2"><i class="ri-add-line me-1 fw-medium align-middle"></i>New Project</a>
                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                <option value="">Sort By</option>
                                                <option value="Newest">Newest</option>
                                                <option value="Date Added">Date Added</option>
                                                <option value="Type">Type</option>
                                                <option value="A - Z">A - Z</option>
                                            </select>
                                        </div>
                                        <div class="avatar-list-stacked">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="img">
                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                +8
                                            </a>
                                        </div>
                                        <div class="d-flex" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search Project" aria-label="Search">
                                            <button class="btn btn-light" type="submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Project Name</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Team</th>
                                                    <th scope="col">Assigned Date</th>
                                                    <th scope="col">Due Date</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Priority</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-rounded p-1 bg-info-transparent">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/1.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">Development of Enhanced Analytics Platform</a>
                                                                <span class="text-muted d-block fs-12">Total <span class="fw-medium text-default">18/22</span> tasks completed</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-muted mb-0 project-list-description">Build an advanced analytics dashboard integrating real-time data from multiple sources.</p>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                                +2
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        15,Jun 2024
                                                    </td>
                                                    <td>
                                                        30,Aug 2024
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 65%"></div>
                                                            </div>
                                                            <div class="mt-1"><span class="text-primary fw-medium">65%</span> Completed</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Medium</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-line align-middle me-1 d-inline-block"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line align-middle me-1 d-inline-block"></i>Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-rounded p-1 bg-warning-transparent">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/3.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">E-commerce Platform Optimization</a>
                                                                <span class="text-muted d-block fs-12">Total <span class="fw-medium text-default">10/20</span> tasks completed</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-muted mb-0 project-list-description">Enhance performance and user experience for a high-traffic e-commerce platform.</p>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                                +1
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        02,Jul 2024
                                                    </td>
                                                    <td>
                                                        15,Sep 2024
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 45%"></div>
                                                            </div>
                                                            <div class="mt-1"><span class="text-primary fw-medium">45%</span> Completed</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">High</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-line align-middle me-1 d-inline-block"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line align-middle me-1 d-inline-block"></i>Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-rounded p-1 bg-danger-transparent">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/7.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">Data Migration to Cloud</a>
                                                                <span class="text-muted d-block fs-12">Total <span class="fw-medium text-default">5/8</span> tasks completed</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-muted mb-0 project-list-description">Transfer legacy data systems to cloud infrastructure for scalability and accessibility.</p>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/21.jpg'); ?>" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                                +0
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        15,Oct 2024
                                                    </td>
                                                    <td>
                                                        30,Dec 2024
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 62%"></div>
                                                            </div>
                                                            <div class="mt-1"><span class="text-primary fw-medium">62%</span> Completed</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Low</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-line align-middle me-1 d-inline-block"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line align-middle me-1 d-inline-block"></i>Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-rounded p-1 bg-warning-transparent">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/8.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">Cybersecurity Audit and Enhancements</a>
                                                                <span class="text-muted d-block fs-12">Total <span class="fw-medium text-default">2/6</span> tasks completed</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-muted mb-0 project-list-description">Conduct a comprehensive audit and implement security measures to protect data and systems.</p>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                                +0
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        01,Nov 2024
                                                    </td>
                                                    <td>
                                                        15,Jan 2025
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 40%"></div>
                                                            </div>
                                                            <div class="mt-1"><span class="text-primary fw-medium">40%</span> Completed</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">High</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-line align-middle me-1 d-inline-block"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line align-middle me-1 d-inline-block"></i>Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-rounded p-1 bg-info-transparent">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/6.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">AI-Powered Customer Support System</a>
                                                                <span class="text-muted d-block fs-12">Total <span class="fw-medium text-default">3/10</span> tasks completed</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-muted mb-0 project-list-description">Implement a machine learning-driven system to automate customer support inquiries.</p>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                                +1
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        05,Sep 2024
                                                    </td>
                                                    <td>
                                                        25,Nov 2024
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                                                            </div>
                                                            <div class="mt-1"><span class="text-primary fw-medium">30%</span> Completed</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Medium</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-line align-middle me-1 d-inline-block"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line align-middle me-1 d-inline-block"></i>Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-rounded p-1 bg-success-transparent">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/4.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">Mobile App Launch</a>
                                                                <span class="text-muted d-block fs-12">Total <span class="fw-medium text-default">5/15</span> tasks completed</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-muted mb-0 project-list-description">Develop and release a new mobile application for iOS and Android platforms.</p>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                                +0
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        10,Aug 2024
                                                    </td>
                                                    <td>
                                                        30,Oct 2024
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 35%"></div>
                                                            </div>
                                                            <div class="mt-1"><span class="text-primary fw-medium">35%</span> Completed</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">Medium</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-line align-middle me-1 d-inline-block"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line align-middle me-1 d-inline-block"></i>Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-rounded p-1 bg-secondary-transparent">
                                                                    <img src="<?php echo base_url('assets/images/company-logos/5.png'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">IT Infrastructure Upgrade</a>
                                                                <span class="text-muted d-block fs-12">Total <span class="fw-medium text-default">2/12</span> tasks completed</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-muted mb-0 project-list-description">Modernize network and server infrastructure to improve reliability and security.</p>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                                +0
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        20,Jul 2024
                                                    </td>
                                                    <td>
                                                        30,Oct 2024
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 15%"></div>
                                                            </div>
                                                            <div class="mt-1"><span class="text-primary fw-medium">15%</span> Completed</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Low</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-line align-middle me-1 d-inline-block"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line align-middle me-1 d-inline-block"></i>Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->
                    <ul class="pagination justify-content-end">
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

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	


<?= $this->endSection('scripts'); ?>