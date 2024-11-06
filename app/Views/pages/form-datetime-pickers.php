
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- FlatPickr CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/flatpickr/flatpickr.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Date & Time Pickers</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Date & Time Pickers</h1>
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
                                        Basic Date picker
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="date" placeholder="Choose date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Date picker With Time
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="datetime" placeholder="Choose date with time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Human Friendly dates
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="humanfrienndlydate" placeholder="Human friendly dates">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Date range picker
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="daterange" placeholder="Date range picker">
                                        </div>
                                    </div>
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
                                        Inline Calendar
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group overflow-auto">
                                        <input type="text" class="form-control" id="inlinecalendar" placeholder="Choose date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Date Picker with week numbers
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group mb-0">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="text" class="form-control" id="weeknum" placeholder="Choose date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Inline Time Picker
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control" id="inlinetime" placeholder="Choose time">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Preloading time
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group mb-0">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-time-line"></i> </div>
                                                    <input type="text" class="form-control" id="pretime" placeholder="Preloading time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Basic Time picker
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control" id="timepikcr" placeholder="Choose time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Time picker with 24hr Format
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control" id="timepickr1" placeholder="Choose time in 24hr format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Time Picker with Limits
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control" id="limittime" placeholder="choose time min 16:00 to max 22:30">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        DateTimePicker with Limited Time Range
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control" id="limitdatetime" placeholder="date with time limit from 16:00 to 22:00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Date & Time Picker JS -->
        <script src="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/date&time-pickers.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>