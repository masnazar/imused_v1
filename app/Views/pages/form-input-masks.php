
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>



<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Input Masks</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Input Masks</h1>
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
                                        Date Format-1
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control date-format" placeholder="DD-MM-YYYY">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Date Format-2
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control date-format-1" placeholder="MM-DD-YYYY">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Date Format-3
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control date-format-2" placeholder="MM-YY">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Time Format-1
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control time-format-1" placeholder="hh:mm:ss">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Time Format-2
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control time-format-2" placeholder="hh:mm">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Prefix
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control prefix-element" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Delimiter
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control delimiter" placeholder="ABC.DEF.GHi">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Delimiters
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control delimiters" placeholder="ABC/DEF/GHi-JK">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Phone Number Formatting
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control phone-number"  placeholder="US(+1)">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Number Formatting
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control number-format" placeholder="Number Here">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Formatting Into Blocks
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control formatting-blocks" placeholder="ABCD EFG HIJ KLMN">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>

        <!-- Cleave.js -->
        <script src="<?php echo base_url('assets/libs/cleave.js/cleave.min.js'); ?>"></script>

        <!-- Internal form-input-mask JS -->
        <script src="<?php echo base_url('assets/js/form-input-mask.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
