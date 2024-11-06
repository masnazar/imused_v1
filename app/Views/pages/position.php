
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>



<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Position</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Position</h1>
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
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Positions
                                    </div>
                                </div>
                                <div class="card-body bd-example-position-utils">
                                    <div class="position-relative">
                                        <div class="position-absolute top-0 start-0"></div>
                                        <div class="position-absolute top-0 end-0"></div>
                                        <div class="position-absolute top-50 start-50"></div>
                                        <div class="position-absolute bottom-50 end-50"></div>
                                        <div class="position-absolute bottom-0 start-0"></div>
                                        <div class="position-absolute bottom-0 end-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Centering Elements With Positions
                                    </div>
                                </div>
                                <div class="card-body bd-example-position-utils">
                                    <div class="position-relative">
                                        <div class="position-absolute top-0 start-0 translate-middle"></div>
                                        <div class="position-absolute top-0 start-50 translate-middle"></div>
                                        <div class="position-absolute top-0 start-100 translate-middle"></div>
                                        <div class="position-absolute top-50 start-0 translate-middle"></div>
                                        <div class="position-absolute top-50 start-50 translate-middle"></div>
                                        <div class="position-absolute top-50 start-100 translate-middle"></div>
                                        <div class="position-absolute top-100 start-0 translate-middle"></div>
                                        <div class="position-absolute top-100 start-50 translate-middle"></div>
                                        <div class="position-absolute top-100 start-100 translate-middle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        By adding .translate-middle-x or .translate-middle-y classes
                                    </div>
                                </div>
                                <div class="card-body bd-example-position-utils">
                                    <div class="position-relative">
                                        <div class="position-absolute top-0 start-0"></div>
                                        <div class="position-absolute top-0 start-50 translate-middle-x"></div>
                                        <div class="position-absolute top-0 end-0"></div>
                                        <div class="position-absolute top-50 start-0 translate-middle-y"></div>
                                        <div class="position-absolute top-50 start-50 translate-middle"></div>
                                        <div class="position-absolute top-50 end-0 translate-middle-y"></div>
                                        <div class="position-absolute bottom-0 start-0"></div>
                                        <div class="position-absolute bottom-0 start-50 translate-middle-x"></div>
                                        <div class="position-absolute bottom-0 end-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Example With Buttons
                                            </div>
                                        </div>
                                        <div class="card-body bd-example-position-examples">
                                            <div class="position-relative m-4">
                                                <div class="progress" style="height: 1px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <button type="button"
                                                    class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
                                                    style="width: 2rem; height:2rem;">1</button>
                                                <button type="button"
                                                    class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill"
                                                    style="width: 2rem; height:2rem;">2</button>
                                                <button type="button"
                                                    class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"
                                                    style="width: 2rem; height:2rem;">3</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Examples:
                                            </div>
                                        </div>
                                        <div
                                            class="card-body bd-example-position-examples d-flex justify-content-around">
                                            <button type="button" class="btn btn-primary position-relative">
                                                Mails <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+99
                                                    <span class="visually-hidden">unread messages</span></span>
                                            </button>

                                            <button type="button" class="btn btn-dark position-relative about text-white">
                                                Marker <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="position-absolute top-100 start-50 translate-middle mt-1 svg-white"
                                                    fill="#212529" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <button type="button" class="btn btn-primary position-relative">
                                                Alerts <span
                                                    class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span
                                                        class="visually-hidden">unread messages</span></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <!-- End:: row-2 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	


<?= $this->endSection('scripts'); ?>
