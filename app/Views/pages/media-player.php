
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- Plyr CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/plyr/plyr.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Media Player</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Media Player</h1>
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
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        VIDEO PLAYER
                                    </div>
                                </div>
                                <div class="card-body">
                                    <video id="player" playsinline controls data-poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" >
                                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" >
                                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" >
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header">
                                    <div class="card-title">YOUTUBE VIDEO</div>
                                </div>
                                <div class="card-body">
                                    <div class="plyr__video-embed" id="player1">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-lDlbQ7DiCI?si=EerYCepJFDTb5xOl" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        AUDIO PLAYER
                                    </div>
                                </div>
                                <div class="card-body audio-control px-sm-3 px-0">
                                    <audio id="player2" controls>
                                        <source src="<?php echo base_url('assets/audio/perfect-beauty.mp3'); ?>" type="audio/mp3" >
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Plyr JS -->
        <script src="<?php echo base_url('assets/libs/plyr/plyr.min.js'); ?>"></script>

        <!-- Internal Plyr JS -->
        <script src="<?php echo base_url('assets/js/media-player.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>