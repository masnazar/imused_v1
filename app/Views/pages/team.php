
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>



<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Team</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Team</h1>
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
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-bg-shape primary"></div>
                                <div class="card-body">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-primary">
                                            <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 fs-11 badge bg-primary fw-medium">Director</p>
                                        <h6 class="mb-3 fw-semibold">Hadley Kylin</h6>
                                        <p class="text-muted fs-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary1-light btn-wave btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary2-light btn-wave btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary3-light btn-wave btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-bg-shape secondary"></div>
                                <div class="card-body">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-secondary">
                                            <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <span class="mb-2 fs-11 badge bg-primary1 fw-medium">Manager</span>
                                        <h6 class="mb-3 fw-semibold">Ethan Mitchell</h6>
                                        <p class="text-muted fs-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary1-light btn-wave btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary2-light btn-wave btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary3-light btn-wave btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-bg-shape success"></div>
                                <div class="card-body">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-success">
                                            <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 fs-11 badge bg-primary2 fw-medium">Creative Director</p>
                                        <h6 class="mb-3 fw-semibold">Iliana Lilly</h6>
                                        <p class="text-muted fs-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary1-light btn-wave btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary2-light btn-wave btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary3-light btn-wave btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-bg-shape orange"></div>
                                <div class="card-body">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-orange">
                                            <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 fs-11 badge bg-primary3 fw-medium">Board Director</p>
                                        <h6 class="mb-3 fw-semibold">Jasmine Della</h6>
                                        <p class="text-muted fs-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary1-light btn-wave btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary2-light btn-wave btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary3-light btn-wave btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-bg-shape info"></div>
                                <div class="card-body">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-info">
                                            <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 fs-11 badge bg-secondary fw-medium">Board Director</p>
                                        <h6 class="mb-3 fw-semibold">Aurora Reed</h6>
                                        <p class="text-muted fs-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary1-light btn-wave btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary2-light btn-wave btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary3-light btn-wave btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-bg-shape warning"></div>
                                <div class="card-body">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-warning">
                                            <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 fs-11 badge bg-success fw-medium">Board Director</p>
                                        <h6 class="mb-3 fw-semibold">Ava Taylor</h6>
                                        <p class="text-muted fs-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary1-light btn-wave btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary2-light btn-wave btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary3-light btn-wave btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-bg-shape danger"></div>
                                <div class="card-body">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-danger">
                                            <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 fs-11 badge bg-primary fw-medium">Board Director</p>
                                        <h6 class="mb-3 fw-semibold">Spencer Robin</h6>
                                        <p class="text-muted fs-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary1-light btn-wave btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary2-light btn-wave btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary3-light btn-wave btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-bg-shape teal"></div>
                                <div class="card-body">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-teal">
                                            <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" class="card-img" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <p class="mb-2 fs-11 badge bg-primary1 fw-medium">Board Director</p>
                                        <h6 class="mb-3 fw-semibold">Owen Foster</h6>
                                        <p class="text-muted fs-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary1-light btn-wave btn-sm ms-2"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary2-light btn-wave btn-sm ms-2"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary3-light btn-wave btn-sm ms-2"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: add-members modals -->

                        <!-- Start:: team ui modal -->
                        <div class="modal fade" id="create-teamui-mem" tabindex="-1" aria-labelledby="create-teamuiLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="create-teamuiLabel">Add Member</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <label for="team-name3" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="team-name3" placeholder="Enter Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-sm btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- End:: team ui modal -->

                        <!-- Start:: team react modal -->
                        <div class="modal fade" id="create-teamreact-mem" tabindex="-1" aria-labelledby="create-teamreactLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="create-teamreactLabel">Add Member</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <label for="team-name1" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="team-name1" placeholder="Enter Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-sm btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- End:: team react modal -->

                        <!-- Start:: team testing modal -->
                        <div class="modal fade" id="create-teamtesting-mem" tabindex="-1" aria-labelledby="create-teamtestingLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="create-teamtestingLabel">Add Member</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <label for="team-name2" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="team-name2" placeholder="Enter Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-sm btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- End:: team testing modal -->

                    <!-- End:: add-members modals -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	


<?= $this->endSection('scripts'); ?>