
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <link rel="stylesheet" href="<?php echo base_url('assets/libs/filepond/filepond.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css'); ?>">

        <link rel="stylesheet" href="<?php echo base_url('assets/libs/dragula/dragula.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Task</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kanban Board</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Kanban Board</h1>
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

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                        <div class="d-flex align-items-center flex-wrap gap-2 flex-xxl-nowrap" role="search">
                                            <span class="fw-medium fs-15 text-nowrap flex-nowrap me-2">WorkSpace :</span>
                                            <input class="form-control me-1" type="search" placeholder="Search Tasks" aria-label="Search">
                                            <button class="btn btn-secondary-light" type="submit">Search</button>
                                        </div>
                                        <div class="ms-auto d-flex gap-4 align-items-center flex-wrap">
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
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                                </span>
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="img">
                                                </span>
                                                <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                    +8
                                                </a>
                                            </div>
                                            <div class="d-flex gap-2 kanban-board">
                                                <button class="btn btn-primary btn-w-lg" data-bs-toggle="modal" data-bs-target="#add-board"><i class="ri-add-line me-1 fw-medium align-middle"></i>New Board</button>
                                                <div class="flex-fill">
                                                    <select class="form-control kanban-sortby" data-trigger name="choices-single-default" id="choices-single-default">
                                                        <option value="">Sort By</option>
                                                        <option value="Newest">Newest</option>
                                                        <option value="Date Added">Date Added</option>
                                                        <option value="Type">Type</option>
                                                        <option value="A - Z">A - Z</option>
                                                    </select>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start::row-2 -->
                    <div class="TASK-kanban-board">
                        <div class="kanban-tasks-type new">
                            <div class="pe-3 mb-3">
                                <div class="d-flex justify-content-between align-items-center px-3 py-2 bg-primary text-fixed-white rounded">
                                    <span class="d-block fw-medium fs-15">NEW </span>
                                    <div>
                                    <span class="badge badge-task text-fixed-white">18</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-tasks" id="new-tasks">
                                <div id="new-tasks-draggable" data-view-btn="new-tasks">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="task-badges">
                                                <span class="badge bg-primary1-transparent">#SHG - 01</span>
                                                <span class="badge bg-info-transparent">Development</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-medium mb-1 fs-15">Update Website Content</h6>
                                            <p class="kanban-task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <div class="kanban-card-footer">
                                                <span class="badge bg-primary">High Priority</span>
                                                <span class="badge bg-success">In Progress</span>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-secondary">
                                                        <span class="me-1"><i class="ri-thumb-up-fill align-middle fw-normal"></i></span><span class="fw-medium fs-12">11</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info">
                                                        <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">02</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="task-badges">
                                                <span class="badge bg-primary1-transparent">#SHG - 02</span>
                                                <span class="badge bg-info-transparent">Development</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton01" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton01">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-medium mb-1 fs-15">Implement new feature for Karban app.</h6>
                                            <p class="kanban-task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <div class="kanban-card-footer">
                                                <span class="badge bg-warning">Low</span>
                                                <span class="badge bg-success">In Progress</span>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-secondary">
                                                        <span class="me-1"><i class="ri-thumb-up-fill align-middle fw-normal"></i></span><span class="fw-medium fs-12">15</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info">
                                                        <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">03</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="task-badges">
                                                <span class="badge bg-primary1-transparent">#SHG - 03</span>
                                                <span class="badge bg-primary3-transparent">Development</span>
                                                <span class="bg-primary2-transparent">UI/UX</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton02" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton02">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-medium mb-1 fs-15">Develop new feature for Karban app</h6>
                                            <p class="kanban-task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <div class="kanban-card-footer">
                                                <span class="badge bg-warning">Low</span>
                                                <span class="badge bg-success">In Progress</span>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-secondary">
                                                        <span class="me-1"><i class="ri-thumb-up-fill align-middle fw-normal"></i></span><span class="fw-medium fs-12">25</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info">
                                                        <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">05</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="task-badges">
                                                <span class="badge bg-primary1-transparent">#SHG - 04</span>
                                                <span class="badge bg-info-transparent">Development</span>
                                                <span class="badge bg-primary3-transparent">Designing</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton03" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton03">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-medium mb-1 fs-15">Design multi-usage landing page.</h6>
                                            <p class="kanban-task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <div class="kanban-card-footer">
                                                <span class="badge bg-warning">Low</span>
                                                <span class="badge bg-success">In Progress</span>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-secondary">
                                                        <span class="me-1"><i class="ri-thumb-up-fill align-middle fw-normal"></i></span><span class="fw-medium fs-12">25</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info">
                                                        <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">05</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex view-more-button mt-3 gap-2 align-items-center">
                                <a href="javascript:void(0);" class="btn btn-primary-light btn-wave flex-fill">View More</a>
                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-secondary-light border btn-wave flex-fill" data-bs-toggle="modal" data-bs-target="#add-task">
                                    <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                                </a>
                            </div>
                        </div>
                        <div class="kanban-tasks-type todo">
                            <div class="pe-3 mb-3">
                                <div class="d-flex justify-content-between align-items-center px-3 py-2 bg-primary1 text-fixed-white rounded">
                                    <span class="d-block fw-medium fs-15">TODO </span>
                                    <div>
                                    <span class="badge badge-task text-fixed-white">12</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-tasks" id="todo-tasks">
                                <div id="todo-tasks-draggable" data-view-btn="todo-tasks">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="task-badges">
                                                <span class="badge bg-info-transparent">#SHG - 05</span>
                                                <span class="badge bg-primary2-transparent">Authentication</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton04" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton04">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-medium mb-1 fs-15">Adding Authentication Pages.</h6>
                                            <p class="kanban-task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <div class="kanban-card-footer">
                                                <span class="badge bg-warning">Low</span>
                                                <span class="badge bg-success">In Progress</span>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-secondary">
                                                        <span class="me-1"><i class="ri-thumb-up-fill align-middle fw-normal"></i></span><span class="fw-medium fs-12">08</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info">
                                                        <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">04</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="task-badges">
                                                <span class="badge bg-info-transparent">#SHG - 06</span>
                                                <span class="badge bg-primary3-transparent">Marketing</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton05">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-medium mb-1 fs-15">New Marketing Campaign Strategy</h6>
                                            <p class="kanban-task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <div class="kanban-card-footer">
                                                <span class="badge bg-primary">High</span>
                                                <span class="badge bg-success">In Progress</span>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-secondary">
                                                        <span class="me-1"><i class="ri-thumb-up-fill align-middle fw-normal"></i></span><span class="fw-medium fs-12">23</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info">
                                                        <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">12</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex view-more-button mt-3 gap-2 align-items-center">
                                <a href="javascript:void(0);" class="btn btn-primary-light btn-wave flex-fill">View More</a>
                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-secondary-light border btn-wave flex-fill" data-bs-toggle="modal" data-bs-target="#add-task">
                                    <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                                </a>
                            </div>
                        </div>
                        <div class="kanban-tasks-type in-progress">
                            <div class="pe-3 mb-3">
                                <div class="d-flex justify-content-between align-items-center px-3 py-2 bg-primary2 text-fixed-white rounded">
                                    <span class="d-block fw-medium fs-15">ON GOING </span>
                                    <div>
                                    <span class="badge badge-task text-fixed-white">26</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-tasks" id="inprogress-tasks">
                                <div id="inprogress-tasks-draggable" data-view-btn="inprogress-tasks">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="task-badges">
                                                <span class="badge bg-primary1-transparent">#SHG - 07</span>
                                                <span class="badge bg-primary-transparent">UI Design</span>
                                                <span class="badge bg-primary3-transparent">Development</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton06" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton06">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-medium mb-1 fs-15">Developing Calendar & Mail pages.</h6>
                                            <p class="kanban-task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <div class="kanban-card-footer">
                                                <span class="badge bg-info">Medium</span>
                                                <span class="badge bg-success">In Progress</span>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-secondary">
                                                        <span class="me-1"><i class="ri-thumb-up-fill align-middle fw-normal"></i></span><span class="fw-medium fs-12">10</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info">
                                                        <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">18</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="task-badges">
                                                <span class="badge bg-primary1-transparent">#SHG - 08</span>
                                                <span class="badge bg-primary3-transparent">Design</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton07" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton07">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-medium mb-1 fs-15">Project Design in Figma and Sketch</h6>
                                            <p class="kanban-task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <div class="kanban-card-footer">
                                                <span class="badge bg-info">Medium</span>
                                                <span class="badge bg-success">In Progress</span>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-secondary">
                                                        <span class="me-1"><i class="ri-thumb-up-fill align-middle fw-normal"></i></span><span class="fw-medium fs-12">05</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info">
                                                        <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">02</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex view-more-button mt-3 gap-2 align-items-center">
                                <a href="javascript:void(0);" class="btn btn-primary-light btn-wave flex-fill">View More</a>
                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-secondary-light border btn-wave flex-fill" data-bs-toggle="modal" data-bs-target="#add-task">
                                    <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                                </a>
                            </div>
                        </div>
                        <div class="kanban-tasks-type inreview">
                            <div class="pe-3 mb-3">
                                <div class="d-flex justify-content-between align-items-center px-3 py-2 bg-primary3 text-fixed-white rounded">
                                    <span class="d-block fw-medium fs-15">IN REVIEW </span>
                                    <div>
                                    <span class="badge badge-task text-fixed-white">30</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-tasks" id="inreview-tasks">
                                <div id="inreview-tasks-draggable" data-view-btn="inreview-tasks">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="task-badges">
                                                <span class="badge bg-primary1-transparent">#SHG - 10</span>
                                                <span class="badge bg-primary3-transparent">Review</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton08" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton08">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-medium mb-1 fs-15">Design Architecture Strategy</h6>
                                            <p class="kanban-task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <div class="kanban-card-footer">
                                                <span class="badge bg-info">Medium</span>
                                                <span class="badge bg-success">In Progress</span>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-secondary">
                                                        <span class="me-1"><i class="ri-thumb-up-fill align-middle fw-normal"></i></span><span class="fw-medium fs-12">09</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info">
                                                        <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">35</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex view-more-button mt-3 gap-2 align-items-center">
                                <a href="javascript:void(0);" class="btn btn-primary-light btn-wave flex-fill">View More</a>
                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-secondary-light border btn-wave flex-fill" data-bs-toggle="modal" data-bs-target="#add-task">
                                    <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                                </a>
                            </div>
                        </div>
                        <div class="kanban-tasks-type completed">
                            <div class="pe-3 mb-3">
                                <div class="d-flex justify-content-between align-items-center px-3 py-2 bg-secondary text-fixed-white rounded">
                                    <span class="d-block fw-medium fs-15">COMPLETED </span>
                                    <div>
                                    <span class="badge badge-task text-fixed-white">36</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-tasks" id="completed-tasks">
                                <div id="completed-tasks-draggable" data-view-btn="completed-tasks">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="task-badges">
                                                <span class="badge bg-primary1-transparent">#SHG - 11</span>
                                                <span class="badge bg-primary3-transparent">Review</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton09" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton09">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-medium mb-1 fs-15">New Project Update</h6>
                                            <p class="kanban-task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <div class="kanban-card-footer">
                                                <span class="badge bg-primary">High</span>
                                                <span class="badge bg-success">Completed</span>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-secondary">
                                                        <span class="me-1"><i class="ri-thumb-up-fill align-middle fw-normal"></i></span><span class="fw-medium fs-12">09</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info">
                                                        <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">35</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="task-badges">
                                                <span class="badge bg-primary1-transparent">#SHG - 12</span>
                                                <span class="badge bg-primary3-transparent">Development</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-medium mb-1 fs-15">React JS New Version Update</h6>
                                            <p class="kanban-task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <div class="kanban-card-footer">
                                                <span class="badge bg-primary">High</span>
                                                <span class="badge bg-success">Completed</span>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-secondary">
                                                        <span class="me-1"><i class="ri-thumb-up-fill align-middle fw-normal"></i></span><span class="fw-medium fs-12">22</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info">
                                                        <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">12</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="task-badges">
                                                <span class="badge bg-primary1-transparent">#SHG - 13</span>
                                                <span class="badge bg-primary3-transparent">Discussion</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-medium mb-1 fs-15">Project Discussion with Client</h6>
                                            <p class="kanban-task-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <div class="kanban-card-footer">
                                                <span class="badge bg-primary">High</span>
                                                <span class="badge bg-success">Completed</span>
                                            </div>
                                        </div>
                                        <div class="p-3 border-top border-block-start-dashed">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="me-2 text-secondary">
                                                        <span class="me-1"><i class="ri-thumb-up-fill align-middle fw-normal"></i></span><span class="fw-medium fs-12">11</span>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-info">
                                                        <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">12</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex view-more-button mt-3 gap-2 align-items-center">
                                <a href="javascript:void(0);" class="btn btn-primary-light btn-wave flex-fill">View More</a>
                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-secondary-light border btn-wave flex-fill" data-bs-toggle="modal" data-bs-target="#add-task">
                                    <i class="ri-add-line align-middle me-1 fw-medium"></i>Add Task
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->

                    <!-- Start::add board modal -->
                    <div class="modal fade" id="add-board" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Add Board</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <label for="board-title" class="form-label">Task Board Title</label>
                                            <input type="text" class="form-control" id="board-title" placeholder="Board Title">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Add Board</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::add board modal -->

                    <!-- Start::add task modal -->
                    <div class="modal fade" id="add-task" tabindex="-1" aria-hidden="true">
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
                                        <div class="col-xl-12">
                                            <label for="text-area" class="form-label">Task Description</label>
                                            <textarea class="form-control" id="text-area" rows="2" placeholder="Write Description"></textarea>
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="text-area" class="form-label">Task Images</label>
                                            <input type="file" class="multiple-filepond" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
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
                                        <div class="col-xl-6">
                                            <label class="form-label">Target Date</label>
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
                                                <option value="UI/UX">UI/UX</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Designing">Designing</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Authentication">Authentication</option>
                                                <option value="Product">Product</option>
                                                <option value="Development">Development</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn m-0 me-2 btn-primary1-light"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn m-0 btn-primary">Add Task</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::add task modal -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Filepond JS -->
        <script src="<?php echo base_url('assets/libs/filepond/filepond.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js'); ?>"></script>

        <!-- Flat Picker JS -->
        <script src="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.js'); ?>"></script>

        <!-- Dragula JS -->
        <script src="<?php echo base_url('assets/libs/dragula/dragula.min.js'); ?>"></script>

        <!-- Internal Task  JS -->
        <script src="<?php echo base_url('assets/js/task-kanban-board.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>