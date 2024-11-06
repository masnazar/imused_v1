
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
                                    <li class="breadcrumb-item active" aria-current="page">Task Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Task Details</h1>
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
                        <div class="col-xl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header">
                                    <div class="card-title">
                                        Task Information
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="p-3 d-flex gap-4 border-bottom bg-light">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="assign" id="assign1" checked="">
                                            <label class="form-check-label" for="assign1">
                                                Assign Lead
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="assign" id="assign2">
                                            <label class="form-check-label" for="assign2">
                                                Assign Member
                                            </label>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td><span class="fw-medium">Task ID :</span></td>
                                                    <td>SPK - 456</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">Task Tags :</span></td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">Marketing</span>
                                                        <span class="badge bg-primary3-transparent">Campaign</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">Project Name :</span></td>
                                                    <td>
                                                        New Product Launch Strategy
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">Assigned By :</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                                </span>
                                                            </div>
                                                            <span class="d-block fs-14 fw-medium">Emily Watson</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">Progress :</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-sm progress-animate flex-fill me-2" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width: 45%"></div>
                                                            </div>
                                                            <div class="text-muted fs-11">45%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">Project Status :</span></td>
                                                    <td>
                                                        <span class="fw-medium text-secondary">Inprogress</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">Project Priority :</span></td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent"><i class="ri-circle-fill fs-8"></i> High</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">Start Date :</span></td>
                                                    <td>
                                                        13, June 2024
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">End Date :</span></td>
                                                    <td>
                                                        31, Dec 2024
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">Assigned To :</span></td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-original-title="Simon">
                                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="Simon">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-original-title="Sasha">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="Sasha">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-original-title="Anagha">
                                                                <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="Anagha">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-original-title="Hishen">
                                                                <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="Hishen">
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">Last Updated Date :</span></td>
                                                    <td>
                                                        <span class="text-primary1 fw-medium">18, June 2024</span>
                                                        <span class="text-primary1 fw-medium">10:30</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                            
                            </div>
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header">
                                    <div class="card-title">
                                        Attachments list
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-primary-light ms-auto btn-sm mt-1"> View More</a>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded p-2 bg-light">
                                                        <img src="<?php echo base_url('assets/images/media/file-manager/1.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);"><span class="d-block fw-medium">Full Project</span></a>
                                                    <span class="d-block text-muted fs-12 fw-normal">0.45MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-info-light btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-danger-light btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded bg-light">
                                                        <img src="<?php echo base_url('assets/images/media/file-manager/3.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);"><span class="d-block fw-medium">assets.zip</span></a>
                                                    <span class="d-block text-muted fs-12 fw-normal">0.99MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-info-light btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded p-2 bg-light">
                                                        <img src="<?php echo base_url('assets/images/media/file-manager/1.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);"><span class="d-block fw-medium">image-1.png</span></a>
                                                    <span class="d-block text-muted fs-12 fw-normal">245KB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-info-light btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded bg-light">
                                                        <img src="<?php echo base_url('assets/images/media/file-manager/3.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);"><span class="d-block fw-medium">documentation.zip</span></a>
                                                    <span class="d-block text-muted fs-12 fw-normal">2MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-info-light btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-danger-light btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded bg-light">
                                                        <img src="<?php echo base_url('assets/images/media/file-manager/3.png'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);"><span class="d-block fw-medium">landing.zip</span></a>
                                                    <span class="d-block text-muted fs-12 fw-normal">3.46MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-info-light btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between align-items-center">
                                    <div class="card-title">Task Details</div>
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-primary btn-sm btn-wave me-0"><i class="ri-edit-line me-1 align-middle"></i>Edit Task</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex gap-2 mb-4 align-items-center">
                                        <div class="fs-15 fw-medium">Task Title :</div>
                                        <h5 class="fw-medium mb-0">
                                            Develop New Website Features <span class="badge bg-primary1-transparent fs-10 fw-medium"># created on 12 June, 2024</span>
                                        </h5>
                                    </div>
                                    <div class="fs-15 fw-medium mb-2">Task Description :</div>
                                    <p class="text-muted mb-4">Enhance existing website features to improve user engagement and streamline user experience. Implement new functionalities to support business growth and adaptability.</p>
                                    <div class="row mb-4">
                                        <div class="col-xl-6">
                                            <div class="fs-15 fw-medium mb-2">Key tasks :</div>
                                            <ul class="task-details-key-tasks mb-0">
                                                <li>Review current website features and identify areas for improvement.</li>
                                                <li>Brainstorm and develop ideas for new website functionalities.</li>
                                                <li>Design wireframes and prototypes for new features.</li>
                                                <li>Implement front-end and back-end development for new functionalities.</li>
                                                <li>Perform comprehensive testing and debugging.</li>
                                                <li>Launch and monitor performance of new website features.</li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <div class="fs-15 fw-medium">Sub Tasks :</div>
                                                <a href="javascript:void(0);" class="btn btn-info-light btn-wave btn-sm waves-effect waves-light">See More</a>
                                            </div>
                                            <ul class="list-group mb-0">
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"><i class="ri-link fs-15 text-secondary lh-1 p-1 bg-secondary-transparent rounded-circle"></i></div>
                                                        <div class="fw-medium">Research latest web development trends.</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"><i class="ri-link fs-15 text-secondary lh-1 p-1 bg-secondary-transparent rounded-circle"></i></div>
                                                        <div class="fw-medium">Create technical specifications document.</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"><i class="ri-link fs-15 text-secondary lh-1 p-1 bg-secondary-transparent rounded-circle"></i></div>
                                                        <div class="fw-medium">Optimize website for mobile responsiveness.</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="fs-15 fw-medium mb-2">Uploads :</div>
                                    <div class="d-flex gap-2 mb-0 flex-wrap">
                                        <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                            <img src="<?php echo base_url('assets/images/media/media-37.jpg'); ?>" alt="File 1">
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                            <img src="<?php echo base_url('assets/images/media/media-38.jpg'); ?>" alt="File 2">
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                            <img src="<?php echo base_url('assets/images/media/media-39.jpg'); ?>" alt="File 3">
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                            <img src="<?php echo base_url('assets/images/media/media-40.jpg'); ?>" alt="File 4">
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                            <img src="<?php echo base_url('assets/images/media/media-41.jpg'); ?>" alt="File 5">
                                        </a>
                                        <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl bg-primary text-fixed-white">
                                            +2
                                        </a>
                                    </div>
                                </div>                            
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <ul class="nav nav-tabs tab-style-8 scaleX profile-settings-tab" id="myTab4" role="tablist">
                                        <li class="nav-item flex-fill" role="presentation">
                                            <button class="nav-link bg-primary-transparent px-3 active" id="task-activity" data-bs-toggle="tab" data-bs-target="#task-activity-pane" type="button" role="tab" aria-controls="task-activity-pane" aria-selected="true">Task Activity</button>
                                        </li>
                                        <li class="nav-item flex-fill" role="presentation">
                                            <button class="nav-link bg-primary-transparent px-3" id="task-comments-tab" data-bs-toggle="tab" data-bs-target="#task-comments-tab-pane" type="button" role="tab" aria-controls="task-comments-tab-pane" aria-selected="false" tabindex="-1">Comments</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body tab-content">
                                    <div class="tab-pane show active overflow-hidden p-0 border-0" id="task-activity-pane" role="tabpanel" aria-labelledby="task-activity" tabindex="0">
                                        <ul class="list-unstyled profile-timeline mb-3">
                                            <li>
                                                <div>
                                                    <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                        <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="Oliver">
                                                    </span>
                                                    <p class="text-muted mb-2">
                                                        <span class="text-default">
                                                            <span class="fw-medium">Oliver</span> shared a document with
                                                            <span class="fw-medium">you</span>.
                                                        </span>
                                                        <span class="float-end fs-11 badge bg-light text-muted">14, June 2024 - 10:45</span>
                                                    </p>
                                                    <p class="text-muted mb-2 fs-12">
                                                        "We've finalized the project specifications and the client has approved the initial designs. Moving forward with the development phase."
                                                    </p>
                                                    <p class="profile-activity-media mb-0">
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <img src="<?php echo base_url('assets/images/media/file-manager/3.png'); ?>" alt="Document">
                                                        </a>
                                                        <span class="fs-11 text-muted">512.34KB</span>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="avatar avatar-sm bg-primary2 avatar-rounded profile-timeline-avatar">
                                                        S
                                                    </span>
                                                    <p class="text-muted mb-2">
                                                        <span class="text-default">
                                                            <span class="fw-medium">You</span> shared a post with 6 people, including
                                                            <span class="fw-medium">Ava, Sophia, Mia, Lucas</span>.
                                                        </span>
                                                        <span class="float-end fs-11 badge bg-light text-muted">10, June 2024 - 14:23</span>
                                                    </p>
                                                    <p class="profile-activity-media mb-2">
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <img src="<?php echo base_url('assets/images/media/media-19.jpg'); ?>" alt="Post Image">
                                                        </a>
                                                    </p>
                                                    <div>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="User 1">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="User 2">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="User 3">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="User 4">
                                                            </span>
                                                            4 People reacted
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                        <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="Liam">
                                                    </span>
                                                    <p class="text-muted mb-2">
                                                        <span class="text-default">
                                                            <span class="fw-medium">Liam</span> commented on your post.
                                                        </span>
                                                        <span class="float-end fs-11 badge bg-light text-muted">12, June 2024 - 09:15</span>
                                                    </p>
                                                    <p class="text-muted mb-0 fs-12">
                                                        "The updates to the project plan look great. I'll review the milestones and get back to you by end of day."
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="p-3 mt-2 bg-light rounded">
                                            <div class="d-sm-flex align-items-center lh-1">
                                                <div class="me-sm-3 mb-2 mb-sm-0">
                                                    <span class="avatar avatar-md avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill me-sm-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control shadow-none border" placeholder="Post Anything" aria-label="Recipient's username with two button addons">
                                                        <button type="button" aria-label="button" class="btn btn-outline-light border btn-wave"><i class="bi bi-emoji-smile"></i></button>
                                                        <button type="button" aria-label="button" class="btn btn-outline-light border btn-wave"><i class="bi bi-paperclip"></i></button>
                                                        <button type="button" aria-label="button" class="btn btn-outline-light border btn-wave"><i class="bi bi-camera"></i></button>
                                                        <button class="btn btn-primary btn-wave" type="button">Post</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane overflow-hidden p-0 border-0" id="task-comments-tab-pane" role="tabpanel" aria-labelledby="task-comments-tab" tabindex="0">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-start gap-3 flex-wrap">
                                                    <div>
                                                        <span class="avatar avatar-lg avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill w-50">
                                                        <span class="fw-medium d-block mb-1">Mary Cateline</span>
                                                        <span class="d-block mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</span>
                                                        <div class="btn-list">
                                                            <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light">Reply<i class="ri-reply-line ms-1"></i></button>
                                                            <button class="btn btn-sm btn-primary1-light btn-wave waves-effect waves-light">View Details<i class="ri-eye-line ms-1"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="btn-list">
                                                        <button class="btn btn-icon btn-sm btn-primary2-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i></button>
                                                        <button class="btn btn-icon btn-sm btn-primary3-light btn-wave waves-effect waves-light"><i class="ri-thumb-down-line"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-start gap-3 flex-wrap">
                                                    <div>
                                                        <span class="avatar avatar-lg avatar-rounded">
                                                            <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill w-50">
                                                        <span class="fw-medium d-block mb-1">Monte vin</span>
                                                        <span class="d-block mb-3">Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam</span>
                                                        <div class="btn-list">
                                                            <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light">Reply<i class="ri-reply-line ms-1"></i></button>
                                                            <button class="btn btn-sm btn-primary1-light btn-wave waves-effect waves-light">View Details<i class="ri-eye-line ms-1"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="btn-list">
                                                        <button class="btn btn-icon btn-sm btn-primary2-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i></button>
                                                        <button class="btn btn-icon btn-sm btn-primary3-light btn-wave waves-effect waves-light"><i class="ri-thumb-down-line"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	


<?= $this->endSection('scripts'); ?>