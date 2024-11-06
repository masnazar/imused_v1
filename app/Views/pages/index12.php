
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
                                    <li class="breadcrumb-item active" aria-current="page">Medical</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Medical</h1>
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

                    <!-- Start::Row-1 -->
                    <div class="row">
                        <div class="col-xxl-7">
                            <div class="card med-banner-card d-flex align-items-center justify-content-between flex-row">
                                <div class="card-body p-4">
                                    <div class="row mx-0">
                                        <div class="col-md-8">
                                            <h4 class="fw-semibold text-fixed-white">Welcome to your Medical Dashboard!</h4>
                                            <span class="d-block text-fixed-white op-7 mt-2 pt-1">Simplify medical practice management with streamlined patient profiles, appointment scheduling, and comprehensive record-keeping—all in one platform.</span> 
                                            <div class="mt-3"> 
                                                <button class="btn btn-primary1 btn-wave waves-effect waves-light btn-lg">Get Started <i class="ti ti-arrow-narrow-right ms-1 align-middle d-inline-flex"></i></button> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="<?php echo base_url('assets/images/media/media-71.png'); ?>" alt="" class="img-fluid med-banner-img">
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card custom-card position-relative rounded-md overflow-hidden">
                                        <div class="card-body">
                                            <h5 class="mb-1ld">12,457</h5>
                                            <div class="fw-medium op-7">Total Patients
                                                <span class="fw-normal ms-1 badge bg-danger-transparent fs-9"> - 0.02% 
                                                    <i class="ri-arrow-down-s-fill"></i>
                                                </span>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="svg-icon-med position-absolute end-0 bottom-0 opacity-1 text-primary" fill="currentColor" viewBox="0 0 256 256"><path d="M136,108A52,52,0,1,1,84,56,52,52,0,0,1,136,108Z" opacity="0.2"></path><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card custom-card position-relative rounded-md overflow-hidden">
                                        <div class="card-body">
                                            <h5 class="mb-1ld">2,987</h5>
                                            <div class="fw-medium op-7">Total Doctors
                                                <span class="fw-normal ms-1 badge bg-danger-transparent fs-9"> - 0.02% 
                                                    <i class="ri-arrow-down-s-fill"></i>
                                                </span>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="svg-icon-med position-absolute end-0 bottom-0 text-primary1 opacity-1" fill="currentColor" viewBox="0 0 256 256"><path d="M240,160a32,32,0,1,1-32-32A32,32,0,0,1,240,160Z" opacity="0.2"></path><path d="M220,160a12,12,0,1,1-12-12A12,12,0,0,1,220,160Zm-4.55,39.29A48.08,48.08,0,0,1,168,240H144a48.05,48.05,0,0,1-48-48V151.49A64,64,0,0,1,40,88V40a8,8,0,0,1,8-8H72a8,8,0,0,1,0,16H56V88a48,48,0,0,0,48.64,48c26.11-.34,47.36-22.25,47.36-48.83V48H136a8,8,0,0,1,0-16h24a8,8,0,0,1,8,8V87.17c0,32.84-24.53,60.29-56,64.31V192a32,32,0,0,0,32,32h24a32.06,32.06,0,0,0,31.22-25,40,40,0,1,1,16.23.27ZM232,160a24,24,0,1,0-24,24A24,24,0,0,0,232,160Z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card custom-card position-relative rounded-md overflow-hidden">
                                        <div class="card-body">
                                            <h5 class="mb-1ld">35,324</h5>
                                            <div class="fw-medium op-7">Total Appointments
                                                <span class="fw-normal ms-1 badge bg-success-transparent fs-9"> - 2.15% 
                                                    <i class="ri-arrow-down-s-fill"></i>
                                                </span>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="svg-icon-med position-absolute end-0 bottom-0 opacity-1 text-primary2" fill="currentColor" viewBox="0 0 256 256"><path d="M216,48V88H40V48a8,8,0,0,1,8-8H208A8,8,0,0,1,216,48Z" opacity="0.2"></path><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-48-56a8,8,0,0,1-8,8H136v16a8,8,0,0,1-16,0V160H104a8,8,0,0,1,0-16h16V128a8,8,0,0,1,16,0v16h16A8,8,0,0,1,160,152Z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card custom-card position-relative rounded-md overflow-hidden">
                                        <div class="card-body">
                                            <h5 class="mb-1ld">5,478</h5>
                                            <div class="fw-medium op-7">Total Staff
                                                <span class="fw-normal ms-1 badge bg-success-transparent fs-9">+ 1.05% 
                                                    <i class="ri-arrow-up-s-fill"></i>
                                                </span>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="svg-icon-med position-absolute end-0 bottom-0 text-primary3 opacity-1" fill="currentColor" viewBox="0 0 256 256"><path d="M168,144a40,40,0,1,1-40-40A40,40,0,0,1,168,144ZM64,56A32,32,0,1,0,96,88,32,32,0,0,0,64,56Zm128,0a32,32,0,1,0,32,32A32,32,0,0,0,192,56Z" opacity="0.2"></path><path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1,0-16,24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.85,8,57,57,0,0,0-98.15,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-1 -->

                    <!-- Start::Row-2 -->
                    <div class="row">
                        <div class="col-xxl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Patients Survey</div>
                                    <div class="d-flex gap-2">
                                        <div class="btn btn-outline-light border btn-full btn-sm">Today</div>
                                        <div class="btn btn-outline-light border btn-full btn-sm">Weakly</div>
                                        <div class="btn btn-light border btn-full btn-sm">Yearly</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="statistics"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Doctors List
                                    </div>
                                    <button type="button" class="btn btn-sm btn-light"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Doctor</th>
                                                    <th scope="col">Qualification</th>
                                                    <th scope="col">Experience</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="<?php echo base_url('assets/images/faces/doctors/1.jpg'); ?>" alt="" class="avatar avatar-sm avatar-rounded">
                                                            <div class="">
                                                                <span class="d-block fw-medium lh-1">
                                                                    Dr. Smith
                                                                </span>
                                                                <span class="text-muted fs-12">Cardiology</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>MBBS, Ph.D</td>
                                                    <td>4 yrs Exp</td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="<?php echo base_url('assets/images/faces/doctors/2.jpg'); ?>" alt="" class="avatar avatar-sm avatar-rounded">
                                                            <div class="">
                                                                <span class="d-block fw-medium lh-1">
                                                                    Dr. Johnson
                                                                </span>
                                                                <span class="text-muted fs-12">Orthopedics</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>MBBS, MD, DM</td>
                                                    <td>6 yrs Exp</td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="<?php echo base_url('assets/images/faces/doctors/3.jpg'); ?>" alt="" class="avatar avatar-sm avatar-rounded">
                                                            <div class="">
                                                                <span class="d-block fw-medium lh-1">
                                                                    Dr.L.Rickie Smtih
                                                                </span>
                                                                <span class="text-muted fs-12">Orthopedics</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>MBBS, MD, DM</td>
                                                    <td>6 yrs Exp</td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="<?php echo base_url('assets/images/faces/doctors/4.jpg'); ?>" alt="" class="avatar avatar-sm avatar-rounded">
                                                            <div class="">
                                                                <span class="d-block fw-medium lh-1">
                                                                    Dr.M.Angle
                                                                </span>
                                                                <span class="text-muted fs-12">Gynecologist</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>MBBS, MD, Ph.D</td>
                                                    <td>10 yrs Exp</td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="<?php echo base_url('assets/images/faces/doctors/5.jpg'); ?>" alt="" class="avatar avatar-sm avatar-rounded">
                                                            <div class="">
                                                                <span class="d-block fw-medium lh-1">
                                                                    Dr.S.Mary
                                                                </span>
                                                                <span class="text-muted fs-12">Neurosurgeon</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>MBBS, MD, Ph.D</td>
                                                    <td>3 yrs Exp</td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="<?php echo base_url('assets/images/faces/doctors/6.jpg'); ?>" alt="" class="avatar avatar-sm avatar-rounded">
                                                            <div class="">
                                                                <span class="d-block fw-medium lh-1">
                                                                    Dr.T.Laytoya Thoma
                                                                </span>
                                                                <span class="text-muted fs-12">Dermatologists</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>MBBS, MD, Ph.D</td>
                                                    <td>5 yrs Exp</td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm rounded-pill btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm rounded-pill btn-secondary-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm rounded-pill btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title"> Revenue Statistics</div>
                                    <button type="button" class="btn btn-sm btn-light"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                                </div>
                                <div class="card-body">
                                    <div id="revenue-stats" class="mx-auto text-center py-4"></div>
                                    <div class="p-3 bg-light d-flex gap-2 rounded align-items-center flex-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="flex-shrink-0 text-primary bg-primary-transparent rounded-circle" viewBox="0 0 256 256"><path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-68a28,28,0,0,1-28,28h-4v8a8,8,0,0,1-16,0v-8H104a8,8,0,0,1,0-16h36a12,12,0,0,0,0-24H116a28,28,0,0,1,0-56h4V72a8,8,0,0,1,16,0v8h16a8,8,0,0,1,0,16H116a12,12,0,0,0,0,24h24A28,28,0,0,1,168,148Z"></path></svg>
                                        <div>
                                            <h5 class="mb-0ld">$87,847.00</h5>
                                            <div class="fw-medium text-muted">Total Revenue
                                            </div>
                                        </div>
                                        <span class="fw-normal ms-1 badge bg-success ms-auto"> + 5.03% 
                                            <i class="ri-arrow-up-s-fill"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-2 -->

                    <!-- Start::Row-3 -->
                    <div class="row">
                        <div class="col-xxl-3 col-xl-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Patients Overview
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                            This Week<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body border-bottom border-top py-0">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 border-end p-3">
                                            <div class="d-flex justify-content-center">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded p-2 bg-primary-transparent">
                                                        <i class="ri-men-line fs-17"></i>
                                                    </span>
                                                </div>
                                                <div  class="ms-2">
                                                    <h6 class="mb-1 fw-medium">Male</h6>
                                                    <p class="mb-0 text-muted mb-0">567
                                                        <span class="fw-normal badge bg-success-transparent"> - 2.15% 
                                                            <i class="ri-arrow-up-s-fill"></i>
                                                        </span>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 p-3">
                                            <div class="d-flex justify-content-center">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded p-2 bg-secondary-transparent">
                                                        <i class="ri-women-line fs-17"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 fw-medium">Female</h6>
                                                    <p class="mb-0 text-muted mb-0">208
                                                        <span class="fw-normal badge bg-danger-transparent"> - 2.15% 
                                                            <i class="ri-arrow-down-s-fill"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="patients-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Upcoming Appointments</div>
                                    <div class="dropdown">
                                        <div class="btn btn-light border btn-full btn-sm" data-bs-toggle="dropdown">Vew All<i class="ti ti-chevron-down ms-1"></i>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Download</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="upcoming-shedule">
                                        <ul class="nav nav-pills mb-2 justify-content-between" role="tablist">
                                            <li class="nav-item fw-medium mb-3" role="presentation">
                                                <a href="#sun_tab" class="nav-link sh-link text-center b" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                                    <p class="sh-dt mb-0">24</p>
                                                    <span class="sh-day">Sun</span>
                                                </a>
                                            </li>
                                            <li class="nav-item fw-medium mb-3" role="presentation">
                                                <a href="#mon_tab" class="nav-link sh-link text-center b" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                                    <p class="sh-dt mb-0">25</p>
                                                    <span class="sh-day">Mon</span>
                                                </a>
                                            </li>
                                            <li class="nav-item fw-medium mb-3" role="presentation">
                                                <a href="#tue_tab" class="nav-link sh-link text-center b" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                                    <p class="sh-dt mb-0">26</p>
                                                    <span class="sh-day">Tue</span>
                                                </a>
                                            </li>
                                            <li class="nav-item fw-medium mb-3" role="presentation">
                                                <a href="#wed_tab" class="nav-link sh-link text-center b" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                                    <p class="sh-dt mb-0">27</p>
                                                    <span class="sh-day">Wed</span>
                                                </a>
                                            </li>
                                            <li class="nav-item fw-medium mb-3" role="presentation">
                                                <a href="#thu_tab" class="nav-link sh-link text-center b" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                                    <p class="sh-dt mb-0">28</p>
                                                    <span class="sh-day">Thu</span>
                                                </a>
                                            </li>
                                            <li class="nav-item fw-medium mb-3" role="presentation">
                                                <a href="#fri_tab" class="nav-link sh-link text-center b active" data-bs-toggle="tab" aria-selected="true" role="tab">
                                                    <p class="sh-dt mb-0">29</p>
                                                    <span class="sh-day">Fri</span>
                                                </a>
                                            </li>
                                            <li class="nav-item fw-medium" role="presentation">
                                                <a href="#sat_tab" class="nav-link sh-link text-center b" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                                    <p class="sh-dt mb-0">30</p>
                                                    <span class="sh-day">Sat</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane p-0 border-0" id="sun_tab" role="tabpanel">
                                                <ul class="list-unstyled mb-0 sh-shedule-container">
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Meeting with Doctors</p>
                                                                <span class="text-muted">video conference</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>09:00</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>12:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Lunch with team members</p>
                                                                <span class="text-muted">Dolores Ait Labore Sit</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>12:00</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>13:20</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Meeting With Doctors <a href="javascript:void(0);" class="tx-primary">Yuhan Sev</a></p>
                                                                <span class="text-muted">Golden Park</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>16:00</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>17:20</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Appointment with Dr. Smith</p>
                                                                <span class="text-muted">Follow-up for annual physical examination</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>18:15</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>19:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane p-0 border-0" id="mon_tab" role="tabpanel">
                                                <ul class="list-unstyled mb-0 sh-shedule-container">
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Assigning Medicens distribution To Patients</p>
                                                                <span class="text-muted">Task Basic</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>09:35</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>10:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Lunch With <a href="javscript:void(0);" class="tx-primary">John Abu</a></p>
                                                                <span class="text-muted">Silver Valley</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>12:20</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>13:20</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Checking Upcoming Projects &amp; Shedules</p>
                                                                <span class="text-muted">Vlarhar Dhi Ionk Si</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>15:40</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>16:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Uploading New Projects In Terminal</p>
                                                                <span class="text-muted">WPN Project</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>16:45</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>17:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane p-0 border-0" id="tue_tab" role="tabpanel">
                                                <ul class="list-unstyled mb-0 sh-shedule-container">
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Meeting With <a href="javascript:void(0);" class="tx-primary">Abu Siddik</a></p>
                                                                <span class="text-muted">Zoom Meeting</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>10:00</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>11:30</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Lunch with team members</p>
                                                                <span class="text-muted">Amet Dolor Clita</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>13:45</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>14:45</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Uploading New Dashboard</p>
                                                                <span class="text-muted">Iox Ui</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>16:10</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>16:30</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Meeting With Doctors <a href="javascript:void(0);" class="tx-primary">Ion Habbu</a></p>
                                                                <span class="text-muted">Backend</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>16:55</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>18:55</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane p-0 border-0" id="wed_tab" role="tabpanel">
                                                <ul class="list-unstyled mb-0 sh-shedule-container">
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Developing Backend For Login Page</p>
                                                                <span class="text-muted">Backend</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>10:00</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>12:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Catch Lunch At <a href="javascript:void(0);" class="tx-primary">Sed Lorem</a></p>
                                                                <span class="text-muted">Lorem Ipsum</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>13:15</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>14:10</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Join Doctors Meeting</p>
                                                                <span class="text-muted">SpaceY</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>15:30</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>16:20</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Planning New Technology With Members</p>
                                                                <span class="text-muted">Rio</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>17:30</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>18:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane p-0 border-0" id="thu_tab" role="tabpanel">
                                                <ul class="list-unstyled mb-0 sh-shedule-container">
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Meeting with <a href="javascript:void(0);" class="tx-primary">Xion Shan</a></p>
                                                                <span class="text-muted">G - Meets</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>09:00</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>11:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Updating UI Of Dashboard</p>
                                                                <span class="text-muted">Dashboard Xin</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>12:50</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>13:20</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Assigning Tasks To Members</p>
                                                                <span class="text-muted">Task MWU</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>15:45</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>16:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Dinner with team members</p>
                                                                <span class="text-muted">Amet Dolor Clita</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>19:55</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>20:30</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane p-0 border-0 active show" id="fri_tab" role="tabpanel">
                                                <ul class="list-unstyled mb-0 sh-shedule-container">
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Meeting with Doctors</p>
                                                                <span class="text-muted">video conference</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>09:00</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>12:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Lunch with team members</p>
                                                                <span class="text-muted">Dolores Ait Labore Sit</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>12:00</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>13:20</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Meeting With Doctors <a href="javascript:void(0);" class="tx-primary">Yuhan Sev</a></p>
                                                                <span class="text-muted">Golden Park</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>16:00</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>17:20</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Appointment with Dr. Smith</p>
                                                                <span class="text-muted">Follow-up for annual physical examination</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>18:15</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>19:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane p-0 border-0" id="sat_tab" role="tabpanel">
                                                <ul class="list-unstyled mb-0 sh-shedule-container">
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Assigning Tasks To Employees</p>
                                                                <span class="text-muted">Task Basic</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>09:35</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>10:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Lunch With <a href="javscript:void(0);" class="tx-primary">John Abu</a></p>
                                                                <span class="text-muted">Silver Valley</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>12:20</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>13:20</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Checking Upcoming Projects &amp; Shedules</p>
                                                                <span class="text-muted">Vlarhar Dhi Ionk Si</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>15:40</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>16:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="sh-shedule d-sm-flex align-items-start gap-2">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary1-transparent">
                                                                <i class="ri-stethoscope-line fs-16"></i>
                                                            </span>
                                                            <div class="ms-sm-2 mb-1 mb-sm-0">
                                                                <p class="mb-sm-1 mb-0 fw-medium">Uploading New Projects In Terminal</p>
                                                                <span class="text-muted">WPN Project</span>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-center text-muted ms-auto">
                                                                <span><i class="fe fe-clock me-1 fs-13"></i></span>
                                                                <span>16:45</span>
                                                                <span class="mx-2 text-muted">-</span>
                                                                <span>17:00</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-lg-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Staff Attendance</div>
                                    <div class="dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light text-muted" data-bs-toggle="dropdown" aria-expanded="false">This week<i class="ri-arrow-down-s-line align-middle ms-1 fs-14 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Today </a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">This week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <div id="staff-work"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-3 -->

                    <!-- Start::Row-4 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Patients List
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <div>
                                            <input class="form-control" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="row" class="text-center">S.No</th>
                                                    <th scope="col">Patient ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Gender</th>
                                                    <th scope="col">Age</th>
                                                    <th scope="col">Assgined Doctor</th>
                                                    <th scope="col">Disease</th>
                                                    <th scope="col">Contact Number</th>
                                                    <th scope="col">Appointmented Date</th>
                                                    <th scope="col">Room No</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">01</td>
                                                    <td>PAC-9ABC</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded"><img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" class="" alt="..."></span>
                                                            <div>
                                                                <span class="fw-medium mb-0 d-flex align-items-center">Jhon Doe</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Male
                                                    </td>
                                                    <td>25</td>
                                                    <td>Dr.M.Smith</td>
                                                    <td>
                                                    <span class="badge bg-primary-transparent">Hypertension</span>
                                                    </td>
                                                    <td>123-456-7890</td>
                                                    <td>
                                                        2023-10-20
                                                    </td>
                                                    <td>101</td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary1-light">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">02</td>
                                                    <td>PAC-3SFW</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded"><img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" class="" alt="..."></span>
                                                            <div>
                                                                <span class="fw-medium mb-0 d-flex align-items-center">Jane smith</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Female
                                                    </td>
                                                    <td>35</td>
                                                    <td>Dr. Johnson</td>
                                                    <td>
                                                    <span class="badge bg-secondary-transparent">Diabetes</span>
                                                    </td>
                                                    <td>987-654-3210</td>
                                                    <td>
                                                        2023-09-15
                                                    </td>
                                                    <td>102</td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary1-light">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">03</td>
                                                    <td>PAC-6SKF</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded"><img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" class="" alt="..."></span>
                                                            <div>
                                                                <span class="fw-medium mb-0 d-flex align-items-center">Robert Jhonson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Male
                                                    </td>
                                                    <td>45</td>
                                                    <td>Dr.M.Angle</td>
                                                    <td>
                                                    <span class="badge bg-success-transparent">Asthma</span>
                                                    </td>
                                                    <td>456-789-0123</td>
                                                    <td>
                                                        2023-11-05
                                                    </td>
                                                    <td>103</td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary1-light">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">04</td>
                                                    <td>PAC-3ESD</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded"><img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" class="" alt="..."></span>
                                                            <div>
                                                                <span class="fw-medium mb-0 d-flex align-items-center">Emiley Davis</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Female
                                                    </td>
                                                    <td>28</td>
                                                    <td>Dr.S.Mary</td>
                                                    <td>
                                                    <span class="badge bg-orange-transparent">Allergies</span>
                                                    </td>
                                                    <td>789-012-3456</td>
                                                    <td>
                                                        2023-08-12
                                                    </td>
                                                    <td>104</td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary1-light">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">05</td>
                                                    <td>PAC-3KSE</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded"><img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" class="" alt="..."></span>
                                                            <div>
                                                                <span class="fw-medium mb-0 d-flex align-items-center">William Martinez</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Male
                                                    </td>
                                                    <td>38</td>
                                                    <td>Dr.S.Mary</td>
                                                    <td>
                                                    <span class="badge bg-info-transparent">General</span>
                                                    </td>
                                                    <td>234-567-8901</td>
                                                    <td>
                                                        2023-12-08
                                                    </td>
                                                    <td>105</td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary1-light">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">06</td>
                                                    <td>PAC-4DFS</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <span class="avatar avatar-xs avatar-rounded"><img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" class="" alt="..."></span>
                                                            <div>
                                                                <span class="fw-medium mb-0 d-flex align-items-center">Sarah Wilson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Female
                                                    </td>
                                                    <td>28</td>
                                                    <td>Dr.T.Laytoya Thoma</td>
                                                    <td>
                                                    <span class="badge bg-warning-transparent">High Cholesterol</span>
                                                    </td>
                                                    <td>567-890-1234</td>
                                                    <td>
                                                        2023-07-25
                                                    </td>
                                                    <td>106</td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary1-light">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer border-top-0">
                                    <div class="d-flex align-items-center">
                                        <div> Showing 6 Entries <i class="bi bi-arrow-right ms-2ld align-middle"></i> </div>
                                        <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Row-4 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- Medical Dashboard --> 
        <script src="<?php echo base_url('assets/js/medical-dashboard.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>