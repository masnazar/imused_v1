
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- Shepherd Css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/shepherd.js/css/shepherd.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tour</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Tour</h1>
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
                                <div class="card-header">
                                    <div class="card-title">
                                        SHEPHERD JS
                                    </div>
                                </div>
                                <div class="card-body p-5 text-center">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-7 mb-5 pb-3">
                                            <span class="avatar avatar-xl">
                                                <img src="<?php echo base_url('assets/images/company-logos/7.png'); ?>" alt="" id="step-1">
                                            </span>
                                            <h5 class="fw-medium">Welcome to Tour App</h5>
                                            <span class="text-muted">Embark on a journey of discovery with our exclusive tour experiences. Whether you're a solo adventurer, a couple seeking romance, or a group of friends ready for excitement, we've curated the perfect tours for you. Create memories that last a lifetime.</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center gap-3">
                                        <div class="col-xl-3">
                                            <div class="card custom-card shadow-none bg-primary-transparent text-start">
                                                <div class="card-body">
                                                    <div class="d-flex gap-3 align-items-start">
                                                        <span class="avatar avatar-xl bg-primary svg-white flex-shrink-0" id="step-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72" id="destination"><path d="M64.5 25.9c0-.1-.1-.2-.2-.3-.3-.2-.6-.1-.8.1-.1.1-.1.2-.2.2l-2.5 7.3c-.1.4 0 .8.3 1.1 1.4 1.3 2.2 2.7 2.2 4 0 3.5-5.3 7.3-13.9 9.4-.6.1-1.1-.3-1-.9.2-1.5.3-3.1.4-4.6 0-.3-.1-.5-.3-.7-.2-.2-.5-.3-.7-.6l-2.6-2.6c0 3.5-.2 6.8-.7 9.8-.1.4-.3.7-.7.7-3 .4-6.3.7-9.8.7-3.5 0-6.8-.2-9.8-.7-.4-.1-.7-.3-.7-.7-.4-3-.7-6.3-.7-9.8 0-3.5.2-6.8.7-9.8.1-.4.3-.7.7-.7 3-.4 6.3-.7 9.8-.7l-2.6-2.6c-.2-.2-.4-.4-.6-.7-.2-.2-.4-.4-.7-.3-1.6.1-3.1.2-4.6.4-.6.1-1.1-.5-.9-1C26.7 14.3 30.5 9 34 9c1.4 0 2.8.8 4.1 2.3.2.2.5.3.8.2L46 8.8c.1 0 .2-.1.3-.2.2-.2.3-.6.1-.8l-.3-.3c-3.8-1.5-8-2.4-12.4-2.4C15.4 5.1.5 20 .5 38.3c0 18.3 14.9 33.2 33.2 33.2 18.3 0 33.2-14.9 33.2-33.2 0-4.4-.9-8.6-2.4-12.4zM6.1 28c3-8 9.3-14.3 17.3-17.3.7-.3 1.4.5 1 1.2-1.8 3.2-3.3 7.3-4.3 12.1-.1.3-.3.6-.7.7-4.8 1-9 2.4-12.1 4.3-.7.4-1.5-.3-1.2-1zm12.1.9c.6-.1 1.1.3 1 .9-.3 2.7-.5 5.5-.5 8.5s.2 5.8.5 8.5c.1.6-.5 1.1-1 .9-8.6-2.1-13.9-5.9-13.9-9.4-.1-3.5 5.3-7.3 13.9-9.4zm5.2 37c-8-3-14.3-9.3-17.3-17.3-.3-.7.5-1.4 1.2-1 3.2 1.8 7.3 3.3 12.1 4.3.3.1.6.3.7.7 1 4.8 2.4 9 4.3 12.1.4.7-.3 1.5-1 1.2zm10.3 1.9c-3.5 0-7.3-5.3-9.4-13.9-.1-.6.3-1.1.9-1 2.7.3 5.5.5 8.5.5s5.8-.2 8.5-.5c.6-.1 1.1.5.9 1-2.1 8.5-5.9 13.9-9.4 13.9zm27.6-19.2c-3 8-9.3 14.3-17.3 17.3-.7.3-1.4-.5-1-1.2 1.8-3.2 3.3-7.3 4.3-12.1.1-.3.3-.6.7-.7 4.8-1 9-2.4 12.1-4.3.6-.4 1.4.3 1.2 1z"></path><path d="m68.2 22.1 2.9-2.9c.5-.5.5-1.4 0-1.9L54.7.9c-.5-.5-1.4-.5-1.9 0l-2.9 2.9c-.5.5-.5 1.4 0 1.9l1.5 1.5c.5.5.5 1.4 0 1.9L48.6 12c-.1.1-.3.3-.5.3l-10 3.4c-.2.1-.4.2-.5.3L34 19.6c-.5.5-.5 1.4 0 1.9l5.6 5.6c.5.5.5 1.4 0 1.9l-11 11c-.1.1-.2.3-.3.4l-.9 2.5c-.3.9.6 1.9 1.5 1.5l2.5-.9c.2-.1.3-.2.4-.3l11-11c.5-.5 1.4-.5 1.9 0l5.6 5.6c.5.5 1.4.5 1.9 0l3.6-3.6c.1-.1.3-.3.3-.5l3.4-10c.1-.2.2-.4.3-.5l2.8-2.8c.5-.5 1.4-.5 1.9 0l1.5 1.5c.8.8 1.7.8 2.2.2z"></path></svg>
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-meidum mb-2">Pick a place.</h6>
                                                            <span class="fs-12 text-muted">Selecting a destination can be exciting! share your preferences or interests.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card shadow-none text-start bg-primary1-transparent">
                                                <div class="card-body">
                                                    <div class="d-flex gap-3 align-items-start">
                                                        <span class="avatar avatar-xl bg-primary1 svg-white flex-shrink-0" id="step-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="payment"><g><path d="M11,31.06a8,8,0,0,1-7.4-4.94,1,1,0,0,1,.69-1.34h0a1,1,0,0,1,1.16.59A6,6,0,0,0,11,29.06l.36,0a6,6,0,0,0,.06-12l-.42,0a6,6,0,0,0-5.45,3.48,1,1,0,0,1-1.19.54h0a1,1,0,0,1-.64-1.36A8.06,8.06,0,0,1,11,15.06a4.84,4.84,0,0,1,.61,0A8,8,0,0,1,11.59,31,4.32,4.32,0,0,1,11,31.06Z"></path><path d="M13.78 24.74a2.66 2.66 0 0 1-.68 1.85 2.24 2.24 0 0 1-1.29.67v.67a.91.91 0 0 1-.91.91h0a.91.91 0 0 1-.91-.91v-.73a2.5 2.5 0 0 1-1.69-2 .71.71 0 0 1 .6-.88.69.69 0 0 1 .75.47 1.76 1.76 0 0 0 .34.63 1.3 1.3 0 0 0 1 .44 1.55 1.55 0 0 0 .78-.18 1.12 1.12 0 0 0 .21-.15 1 1 0 0 0 .36-.68 1 1 0 0 0-.12-.63.93.93 0 0 0-.38-.33l-.07 0c-.2-.09-.6-.22-1.19-.4L10 23.27a2.9 2.9 0 0 1-.67-.36 2.24 2.24 0 0 1-.66-.83A2.59 2.59 0 0 1 8.43 21a2.44 2.44 0 0 1 .31-1.24 2 2 0 0 1 .87-.83 2.22 2.22 0 0 1 .39-.16v-.54a.91.91 0 0 1 .91-.91h0a.91.91 0 0 1 .91.91v.51a2.28 2.28 0 0 1 1.05.56 2.26 2.26 0 0 1 .6 1 .71.71 0 0 1-.64.88h0a.68.68 0 0 1-.7-.46 1.08 1.08 0 0 0-.26-.44l0 0a1.27 1.27 0 0 0-.87-.27 1.4 1.4 0 0 0-.87.23l-.07.06a.68.68 0 0 0-.24.53.74.74 0 0 0 .24.54l0 0a3.9 3.9 0 0 0 1.27.51l.51.16a3.89 3.89 0 0 1 1 .48 2.16 2.16 0 0 1 .72.87A3.05 3.05 0 0 1 13.78 24.74zM18.38 16.06a4.65 4.65 0 0 1-.73-.06 2.52 2.52 0 0 1-2.13-2.49 2.5 2.5 0 0 1 .27-1.13.58.58 0 0 0 0-.56.57.57 0 0 0-.49-.27l-.14 0-11 3.58a2.06 2.06 0 0 1-.81.15A2.47 2.47 0 0 1 1 13.59a2.47 2.47 0 0 1 .65-2.78L4 8.79a1 1 0 0 1 1.41.12h0a1 1 0 0 1-.12 1.41l-2.39 2a.54.54 0 0 0-.06.57c.08.22.27.48.5.38L14.5 9.67a2.41 2.41 0 0 1 .76-.12 2.59 2.59 0 0 1 2.33 3.72A.52.52 0 0 0 18 14a2.54 2.54 0 0 0 1.74-.36 2.41 2.41 0 0 0 .35-.27l2.68-3.18a1.87 1.87 0 0 1 1.43-.67h1.35V4.81H12.42a1.64 1.64 0 0 0-1 .38L9.17 7.05a1 1 0 0 1-1.41-.12h0a1 1 0 0 1 .12-1.41l2.21-1.87a3.65 3.65 0 0 1 2.33-.85H27.53v8.75H24.19l-2.72 3.27a4.51 4.51 0 0 1-3.09 1.24z"></path><path d="M29.65,12.94H27.41a1.88,1.88,0,0,1-1.88-1.88V2.81A1.88,1.88,0,0,1,27.41.94h2.24a1.88,1.88,0,0,1,1.88,1.88v8.24A1.88,1.88,0,0,1,29.65,12.94Zm-2.12-2h2v-8h-2Z"></path></g></svg>
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-meidum mb-2">Travel Budget</h6>
                                                            <span class="fs-12">Tips for Saving, Spending, and Making the Most of Every Dollar.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card shadow-none text-start bg-primary2-transparent">
                                                <div class="card-body">
                                                    <div class="d-flex gap-3 align-items-start">
                                                        <span class="avatar avatar-xl bg-primary2 svg-white flex-shrink-0" id="step-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="airplane"><path d="M51,3.5H13A9.51081,9.51081,0,0,0,3.5,13V51A9.51081,9.51081,0,0,0,13,60.5H51A9.51081,9.51081,0,0,0,60.5,51V13A9.51081,9.51081,0,0,0,51,3.5ZM57.5,51A6.50753,6.50753,0,0,1,51,57.5H13A6.50753,6.50753,0,0,1,6.5,51V13A6.50753,6.50753,0,0,1,13,6.5H51A6.50753,6.50753,0,0,1,57.5,13Z"></path><path d="M43.26807,13.09082l-5.27735,5.26856-19.31836-.70313c-3.50258-.37537-5.61284,4.49172-3.03209,6.80767a3.96987,3.96987,0,0,0,1.52379.954l10.19678,3.57031-6.79,6.79a2.40286,2.40286,0,0,1-1.56543.7041l-5.16748.291a2.48356,2.48356,0,0,0-1.59854,4.208l10.78946,10.789A2.48336,2.48336,0,0,0,27.24655,50.164l.29056-5.165a2.38063,2.38063,0,0,1,.70264-1.55859l6.7832-6.79,3.57373,10.18848c1.39062,4.29,8.00623,3.052,7.77-1.45423l-.71578-19.36413c.0041-.01191,5.13876-5.1237,5.14494-5.13666C55.82608,15.63457,48.67578,8.1598,43.26807,13.09082ZM48.64746,18.79l-5.5791,5.57031a1.49894,1.49894,0,0,0-.43945,1.11719L43.36865,45.499a.9978.9978,0,0,1-1.93505.36528L37.064,33.40527a1.51068,1.51068,0,0,0-2.47657-.56343l-8.46923,8.47847c-1.96906,1.68447-1.59669,5.2046-1.80024,7.49712l-9.11626-9.11626c2.30035-.19631,5.84418.14989,7.498-1.80966l8.46978-8.46963a1.5,1.5,0,0,0-.56494-2.47657L18.145,22.583a1.02142,1.02142,0,0,1,.32471-1.96969,7.74245,7.74245,0,0,0,.90576.0693l19.1582.69824a1.44,1.44,0,0,0,1.11426-.4375l5.69873-5.69043A2.4225,2.4225,0,1,1,48.64746,18.79Z"></path></svg>
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-meidum mb-2">Your Travel Options</h6>
                                                            <span class="fs-12">Your comprehensive Guide to Smooth Travel Planning</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card shadow-none text-start bg-primary3-transparent">
                                                <div class="card-body">
                                                    <div class="d-flex gap-3 align-items-start">
                                                        <span class="avatar avatar-xl bg-primary3 svg-white flex-shrink-0" id="step-5">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill-rule="evenodd"><path d="M7.95 20h13.06c1.092 0 1.99-.892 1.99-1.992V6.992A1.992 1.992 0 0 0 21.01 5H4.99C3.899 5 3 5.892 3 6.992v8.059a3.51 3.51 0 0 1 1-.714V6.992C4 6.447 4.448 6 4.99 6h16.02c.546 0 .99.445.99.992v11.016a.996.996 0 0 1-.99.992H8.662a3.51 3.51 0 0 1-.714 1Z"></path><path d="M23 10h-4.49A2.498 2.498 0 0 0 16 12.5c0 1.39 1.123 2.5 2.51 2.5H23v-1h-4.49c-.839 0-1.51-.667-1.51-1.5 0-.832.668-1.5 1.51-1.5H23v-1ZM18.747 2.465c.716-.183 1.248.234 1.246.975l-.008 2.012-.002.5 1 .004.002-.5.008-2.012c.005-1.394-1.142-2.294-2.494-1.948L4.53 5.073l-.698 1.211 14.914-3.819ZM5.5 22a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm0-1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"></path><path d="m3 17.328.707-.707 1.414 1.415 2.122-2.122.707.707L5.12 19.45z"></path></g></svg>
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-meidum mb-2">Payment Methods</h6>
                                                            <span class="fs-12">Various payment options available to make your transactions secure.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card shadow-none text-start bg-secondary-transparent">
                                                <div class="card-body">
                                                    <div class="d-flex gap-3 align-items-start">
                                                        <span class="avatar avatar-xl bg-secondary svg-white flex-shrink-0" id="step-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="approve"><path d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"></path></svg>
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-meidum mb-2">Confirm Booking</h6>
                                                            <span class="fs-12">Verifying every detail and securing reservations for a stress-free trip ahead.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-sm-flex justify-content-end">
                                        <button class="btn btn-primary-light m-1">Cancel Journey</button>
                                        <button class="btn btn-success-light m-1" id="step-7">Start Your Journey</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Shepherd JS -->
        <script src="<?php echo base_url('assets/libs/shepherd.js/js/shepherd.min.js'); ?>"></script>

        <!-- Internal Tour JS -->
        <script src="<?php echo base_url('assets/js/tour.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
