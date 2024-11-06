
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Task</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Task List View</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Task List View</h1>
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
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden main-content-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between mb-2">
                                        <div>
                                            <span class="text-muted d-block mb-1">New Tasks</span>
                                            <h4 class="fw-medium mb-0">45,478</h4>
                                        </div>
                                        <div class="lh-1">
                                            <span class="avatar avatar-md avatar-rounded bg-primary">
                                                <i class="ri-task-line fs-5"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-muted fs-13">Increased By <span class="text-success">2.56%<i class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden main-content-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between mb-2">
                                        <div>
                                            <span class="text-muted d-block mb-1">Completed Tasks</span>
                                            <h4 class="fw-medium mb-0">2,345</h4>
                                        </div>
                                        <div class="lh-1">
                                            <span class="avatar avatar-md avatar-rounded bg-primary1">
                                                <i class="ri-check-line fs-5"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-muted fs-13">Decreased By <span class="text-danger">3.05%<i class="ti ti-arrow-narrow-down fs-16"></i></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden main-content-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between mb-2">
                                        <div>
                                            <span class="text-muted d-block mb-1">Pending Tasks</span>
                                            <h4 class="fw-medium mb-0">1245</h4>
                                        </div>
                                        <div class="lh-1">
                                            <span class="avatar avatar-md avatar-rounded bg-primary2">
                                                <i class="ri-time-line fs-5"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-muted fs-13">Increased By <span class="text-success">2.16%<i class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden main-content-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between mb-2">
                                        <div>
                                            <span class="text-muted d-block mb-1">Inprogress Tasks</span>
                                            <h4 class="fw-medium mb-0">658</h4>
                                        </div>
                                        <div class="lh-1">
                                            <span class="avatar avatar-md avatar-rounded bg-primary3">
                                                <i class="ri-loader-line fs-5"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-muted fs-13">Increased By <span class="text-success">2.1%<i class="ti ti-arrow-narrow-up fs-16"></i></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Total Tasks
                                    </div>
                                    <div class="d-flex">
                                        <button class="btn btn-sm btn-primary btn-wave waves-light" data-bs-toggle="modal" data-bs-target="#create-task"><i class="ri-add-line fw-medium align-middle me-1"></i> Create Task</button>
                                        <!-- Start::add task modal -->
                                        <div class="modal fade" id="create-task" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">Add Task</h6>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row gy-2">
                                                            <div class="col-xl-6">
                                                                <label for="task-name" class="form-label">Task Name</label>
                                                                <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label for="task-id" class="form-label">Task ID</label>
                                                                <input type="text" class="form-control" id="task-id" placeholder="Task ID">
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label class="form-label">Assigned Date</label>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                                        <input type="text" class="form-control" id="assignedDate" placeholder="Choose date and time">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label class="form-label">Due Date</label>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                                        <input type="text" class="form-control" id="dueDate" placeholder="Choose date and time">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label class="form-label">Status</label>
                                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                                    <option value="New">New</option>
                                                                    <option value="Completed">Completed</option>
                                                                    <option value="Inprogress">Inprogress</option>
                                                                    <option value="Pending">Pending</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label class="form-label">Priority</label>
                                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default1">
                                                                    <option value="High">High</option>
                                                                    <option value="Medium">Medium</option>
                                                                    <option value="Low">Low</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <label class="form-label">Assigned To</label>
                                                                <select class="form-control" name="choices-multiple-remove-button1" id="choices-multiple-remove-button1" multiple>
                                                                    <option value="Choice 1">Angelina May</option>
                                                                    <option value="Choice 2">Sarah Ruth</option>
                                                                    <option value="Choice 3">Hercules Jhon</option>
                                                                    <option value="Choice 4">Mayor Kim</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="button" class="btn btn-primary">Add Task</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End::add task modal -->
                                        <div class="dropdown ms-2">
                                            <button class="btn btn-icon btn-secondary-light btn-sm btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">New Tasks</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Pending Tasks</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Completed Tasks</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Inprogress Tasks</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <input class="form-check-input check-all" type="checkbox" id="all-tasks" value="" aria-label="...">
                                                    </th>
                                                    <th scope="col">Task</th>
                                                    <th scope="col">Task ID</th>
                                                    <th scope="col">Assigned Date</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Due Date</th>
                                                    <th scope="col">Priority</th>
                                                    <th scope="col">Assigned To</th>
                                                    <th scope="col">Action</th>
                                                    <th scope="col">Status Update</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="task-list">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Design New Landing Page</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">SPK - 01</span>
                                                    </td>
                                                    <td>
                                                        02-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium text-primary">New</span>
                                                    </td>
                                                    <td>
                                                        10-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-secondary-transparent">Medium</span>
                                                    </td>
                                                    <td>
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
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                                +2
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                                <i class="ri-delete-bin-5-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">In Review</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="..." checked>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">New Project Buleprint</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">SPK - 04</span>
                                                    </td>
                                                    <td>
                                                        05-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium text-secondary">Inprogress</span>
                                                    </td>
                                                    <td>
                                                        15-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">High</span>
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
                                                                +4
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                                <i class="ri-delete-bin-5-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">On Hold</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Server Side Validation</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">SPK - 11</span>
                                                    </td>
                                                    <td>
                                                        12-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        16-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Low</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                                +5
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                                <i class="ri-delete-bin-5-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">In Review</span>
                                                    </td>
                                                </tr>
                                                
                                                <tr class="task-list">
                                                    <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..." checked></td>
                                                    <td>
                                                        <span class="fw-medium">New Project Buleprint</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">SPK - 04</span>
                                                    </td>
                                                    <td>
                                                        05-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium text-secondary">Inprogress</span>
                                                    </td>
                                                    <td>
                                                        15-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">High</span>
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
                                                                +4
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">In Review</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list">
                                                    <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                    <td>
                                                        <span class="fw-medium">Server Side Validation</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">SPK - 11</span>
                                                    </td>
                                                    <td>
                                                        12-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        16-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Low</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                                +5
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="ri-edit-line"></i></button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn"><i class="ri-delete-bin-5-line"></i></button>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">In Review</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="..." checked>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">New Plugin Development</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">SPK - 24</span>
                                                    </td>
                                                    <td>
                                                        08-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium text-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        17-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Low</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white">+2</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                                <i class="ri-delete-bin-5-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">On Hold</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Designing New Authentication Page</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">SPK - 16</span>
                                                    </td>
                                                    <td>
                                                        03-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium text-secondary">Inprogress</span>
                                                    </td>
                                                    <td>
                                                        08-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-secondary-transparent">Medium</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white">+3</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <button class="btn btn-primary-light btn-icon btn-sm">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                                <i class="ri-delete-bin-5-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">In Review</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">New Plugin Development</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">SPK - 24</span>
                                                    </td>
                                                    <td>
                                                        08-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium text-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        17-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Low</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white">+2</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm ms-1">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                            <i class="ri-delete-bin-5-line"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">In Review</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Designing New Authentication Page</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">SPK - 16</span>
                                                    </td>
                                                    <td>
                                                        03-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium text-secondary">Inprogress</span>
                                                    </td>
                                                    <td>
                                                        08-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-secondary-transparent">Medium</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white">+3</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm ms-1">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                            <i class="ri-delete-bin-5-line"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">In Review</span>
                                                    </td>
                                                </tr>
                                                <tr class="task-list">
                                                    <td class="task-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Documentation For New Template</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">SPK - 07</span>
                                                    </td>
                                                    <td>
                                                        12-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium text-primary">New</span>
                                                    </td>
                                                    <td>
                                                        25-06-2024
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">High</span>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary-light btn-icon btn-sm ms-1">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                        <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                            <i class="ri-delete-bin-5-line"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">On Hold</span>
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
                    <!--End::row-2 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Flat Picker JS -->
        <script src="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.js'); ?>"></script>

        <!-- Internal Invoice List JS -->
        <script src="<?php echo base_url('assets/js/task-list.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
