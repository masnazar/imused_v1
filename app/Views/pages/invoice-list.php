
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
                                            Pages
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Invoice</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Invoice List</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Invoice List</h1>
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
                            <div class="row">
                                <div class="col-xxl-7 col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Invoice Statistics
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div id="invoice-list-stats"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-5 col-xl-12">
                                    <div class="row">
                                        <div class="col-xxl-6">
                                            <div class="card custom-card overflow-hidden main-content-card">
                                                <div class="card-body p-4">
                                                    <div class="d-flex align-items-start gap-3">
                                                        <div class="flex-fill">
                                                            <h6 class="mb-2 fs-12">Total Amount</h6> 
                                                            <div class="pb-0 mt-0"> 
                                                                <div> 
                                                                    <h4 class="fw-medium mb-1">$<span class="count-up" data-count="385">385</span>k </h4> 
                                                                    <span class="badge bg-primary">12,895</span>
                                                                    <div class="text-muted fs-13 mt-2">Increased By <span class="text-success">2.13%<i class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                        <div class="main-card-icon primary border-3 border border-primary border-opacity-50 rounded-circle">
                                                            <div class="avatar avatar-md bg-primary border border-primary border-opacity-10 avatar-rounded">
                                                                <div class="avatar avatar-sm svg-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--primary-color)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                        <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="card custom-card overflow-hidden main-content-card">
                                                <div class="card-body p-4">
                                                    <div class="d-flex align-items-start gap-3">
                                                        <div class="flex-fill">
                                                            <h6 class="mb-2 fs-12">Total Paid</h6> 
                                                            <div> 
                                                                <h4 class="fw-medium mb-1">$<span class="count-up" data-count="126">126</span>k</h4> 
                                                                <span class="badge bg-primary1">3,457</span>
                                                                <div class="text-muted fs-13 mt-2">Decreased By <span class="text-danger">1.05%<i class="ti ti-arrow-narrow-down fs-16"></i></span></div>
                                                            </div> 
                                                        </div>
                                                        <div class="main-card-icon primary1 border-3 border border-primary1 border-opacity-50 rounded-circle">
                                                            <div class="avatar avatar-md bg-primary1 border border-primary1 border-opacity-10 avatar-rounded">
                                                                <div class="avatar avatar-sm svg-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--primary-tint1-color)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                        <path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" />
                                                                        <path d="M9 12l2 2l4 -4" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="card custom-card overflow-hidden main-content-card">
                                                <div class="card-body p-4">
                                                    <div class="d-flex align-items-start gap-3">
                                                        <div class="flex-fill">
                                                            <h6 class="mb-2 fs-12">Pending Invoices</h6> 
                                                            <div> 
                                                                <h4 class="fw-medium mb-1"><span class="count-up" data-count="56">56</span></h4> 
                                                                <span class="badge bg-success">5,447</span>
                                                                <div class="text-muted fs-13 mt-2">Decreased By <span class="text-danger">2.06%<i class="ti ti-arrow-narrow-down fs-16"></i></span></div>
                                                            </div> 
                                                        </div>
                                                        <div class="main-card-icon primary2 border-3 border border-primary2 border-opacity-50 rounded-circle">
                                                            <div class="avatar avatar-md bg-primary2 border border-primary2 border-opacity-10 avatar-rounded">
                                                                <div class="avatar avatar-sm svg-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help-octagon" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--primary-tint2-color)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                        <path d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0z" />
                                                                        <path d="M12 16v.01" />
                                                                        <path d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="card custom-card overflow-hidden main-content-card">
                                                <div class="card-body p-4">
                                                    <div class="d-flex align-items-start gap-3">
                                                        <div class="flex-fill">
                                                            <h6 class="mb-2 fs-12">Overdue Invoices</h6> 
                                                            <div> 
                                                                <h4 class="fw-medium mb-1"><span class="count-up" data-count="47">47</span>K</h4> 
                                                                <span class="badge bg-primary3 border">2,145</span>
                                                                <div class="text-muted fs-13 mt-2">Increased By <span class="text-success">1.3%<i class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                                                            </div> 
                                                        </div>
                                                        <div class="main-card-icon primary3 border-3 border border-primary3 border-opacity-50 rounded-circle">
                                                            <div class="avatar avatar-md bg-primary3 border border-primary3 border-opacity-10 avatar-rounded">
                                                                <div class="avatar avatar-sm svg-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hourglass" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--primary-tint3-color)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                        <path d="M6.5 7h11" />
                                                                        <path d="M6.5 17h11" />
                                                                        <path d="M6 20v-2a6 6 0 1 1 12 0v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z" />
                                                                        <path d="M6 4v2a6 6 0 1 0 12 0v-2a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1z" />
                                                                    </svg>
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
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Manage Invoices
                                    </div>
                                    <div class="d-flex">
                                        <a href="<?php echo base_url('invoice-create'); ?>" class="btn btn-sm btn-primary btn-wave waves-light"><i class="ri-add-line fw-medium align-middle me-1"></i> Create Invoice</a>
                                        <div class="dropdown ms-2">
                                            <button class="btn btn-icon btn-secondary-light btn-sm btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">All Invoices</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Paid Invoices</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Pending Invoices</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Overdue Invoices</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Client</th>
                                                    <th scope="col">Invoice ID</th>
                                                    <th scope="col">Issued Date</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Due Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="invoice-list">
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-medium">Henry Milo</p>
                                                                <p class="mb-0 fs-11 text-muted">henrymilo2416@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="fw-medium text-primary">
                                                            #SHG20241323
                                                        </a>
                                                    </td>
                                                    <td>
                                                        13,Mar 2024
                                                    </td>
                                                    <td>
                                                        $898.12
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Paid</span>
                                                    </td>
                                                    <td>
                                                        25,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list">
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-medium">Priya Riva</p>
                                                                <p class="mb-0 fs-11 text-muted">priyariva3214@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="fw-medium text-primary">
                                                            #SHG20244578
                                                        </a>
                                                    </td>
                                                    <td>
                                                        26,Apr 2024
                                                    </td>
                                                    <td>
                                                        $235.52
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Pending</span>
                                                    </td>
                                                    <td>
                                                        13,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list">
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-medium">Calvin James</p>
                                                                <p class="mb-0 fs-11 text-muted">calvinjames143@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="fw-medium text-primary">
                                                            #SHG20240012
                                                        </a>
                                                    </td>
                                                    <td>
                                                        30,Mar 2024
                                                    </td>
                                                    <td>
                                                        $4872.41
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">Overdue</span>
                                                    </td>
                                                    <td>
                                                        30,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list">
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-medium">Sebastian Leo</p>
                                                                <p class="mb-0 fs-11 text-muted">Sebastian Leo@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="fw-medium text-primary">
                                                            #SHG20246631
                                                        </a>
                                                    </td>
                                                    <td>
                                                        18,Mar 2024
                                                    </td>
                                                    <td>
                                                        $457.56
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Paid</span>
                                                    </td>
                                                    <td>
                                                        18,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list">
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-medium">Anna Angel</p>
                                                                <p class="mb-0 fs-11 text-muted">annaangel114@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="fw-medium text-primary">
                                                            #SHG20249897
                                                        </a>
                                                    </td>
                                                    <td>
                                                        18,Mar 2024
                                                    </td>
                                                    <td>
                                                        $2,568.66
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Due By 1 Day</span>
                                                    </td>
                                                    <td>
                                                        18,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list">
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-medium">Rani Advitha</p>
                                                                <p class="mb-0 fs-11 text-muted">raniadvitha87@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="fw-medium text-primary">
                                                            #SHG20245757
                                                        </a>
                                                    </td>
                                                    <td>
                                                        02,Mar 2024
                                                    </td>
                                                    <td>
                                                        $7896.36
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Paid</span>
                                                    </td>
                                                    <td>
                                                        18,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list">
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-medium">Helma Finlee</p>
                                                                <p class="mb-0 fs-11 text-muted">helmafinlee@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="fw-medium text-primary">
                                                            #SHG20246301
                                                        </a>
                                                    </td>
                                                    <td>
                                                        15,Mar 2024
                                                    </td>
                                                    <td>
                                                        $1,999.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Paid</span>
                                                    </td>
                                                    <td>
                                                        15,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list">
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-medium">Robert Max</p>
                                                                <p class="mb-0 fs-11 text-muted">robertmax@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="fw-medium text-primary">
                                                            #SHG20241603
                                                        </a>
                                                    </td>
                                                    <td>
                                                        21,Mar 2024
                                                    </td>
                                                    <td>
                                                        $2,985.33
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Pending</span>
                                                    </td>
                                                    <td>
                                                        21,May 2024
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                                <tr class="invoice-list">
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-medium">Alisa Juliet</p>
                                                                <p class="mb-0 fs-11 text-muted">alisajuliet555@gmail.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="fw-medium text-primary">
                                                            #SHG20242434
                                                        </a>
                                                    </td>
                                                    <td>
                                                        08,Jul 2024
                                                    </td>
                                                    <td>
                                                        $1,841.60
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Paid</span>
                                                    </td>
                                                    <td>
                                                        15,Mar 2024
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-printer-line"></i></button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer border-top-0">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination mb-0 float-end">
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
                    </div>
                    <!--End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- Internal Invoice List JS -->
        <script src="<?php echo base_url('assets/js/invoice-list.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
