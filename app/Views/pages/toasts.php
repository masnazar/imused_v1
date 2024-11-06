
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- Toastify CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/toastify-js/src/toastify.css'); ?>">

        <!-- Prism CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/prismjs/themes/prism-coy.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ui Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Toasts</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Toasts</h1>
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
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Basic example
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header text-default">
                                            <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-logo.png'); ?>" alt="...">

                                            <strong class="me-auto">Xintra</strong>
                                            <small>11 mins ago</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="toast-header text-default"&gt;
        &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-logo.png'); ?>" alt="..."&gt;

        &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
        &lt;small&gt;11 mins ago&lt;/small&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
            aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="toast-body"&gt;
        Hello, world! This is a toast message.
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Live example
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-wave" id="liveToastBtn">Show live
                                        toast</button>
                                    <div class="toast-container position-fixed top-0 end-0 p-3">
                                        <div id="liveToast" class="toast" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header text-default">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-logo.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <small>11 mins ago</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary btn-wave" id="liveToastBtn"&gt;Show live
    toast&lt;/button&gt;
&lt;div class="toast-container position-fixed top-0 end-0 p-3"&gt;
    &lt;div id="liveToast" class="toast" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header text-default"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-logo.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;small&gt;11 mins ago&lt;/small&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Hello, world! This is a toast message.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Stacking
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="toast-container position-static">
                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header text-default">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-logo.png'); ?>" alt="...">

                                                <strong class="me-auto">Xintra</strong>
                                                <small class="text-muted">just now</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                See? Just like this.
                                            </div>
                                        </div>
                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header text-default">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-logo.png'); ?>" alt="...">

                                                <strong class="me-auto">Xintra</strong>
                                                <small class="text-muted">2 seconds ago</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Heads up, toasts will stack automatically
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="toast-container position-static"&gt;
    &lt;div class="toast fade show" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header text-default"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-logo.png'); ?>" alt="..."&gt;

            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;small class="text-muted"&gt;just now&lt;/small&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            See? Just like this.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="toast fade show" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header text-default"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-logo.png'); ?>" alt="..."&gt;

            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;small class="text-muted"&gt;2 seconds ago&lt;/small&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Heads up, toasts will stack automatically
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Color schemes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="toast align-items-center text-bg-primary border-0 fade show mb-4"
                                        role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                Hello, world! This is the Primary toast message.
                                            </div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="toast align-items-center text-bg-secondary border-0 fade show mb-4"
                                        role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                Hello, world! This is the Secondary toast.
                                            </div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="toast align-items-center text-bg-warning border-0 fade show mb-4"
                                        role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                Hello, world! This is the Warning toast message.
                                            </div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="toast align-items-center text-bg-info border-0 fade show"
                                        role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                Hello, world! This is the info toast message.
                                            </div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="toast align-items-center text-bg-primary border-0 fade show mb-4"
    role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="d-flex"&gt;
        &lt;div class="toast-body"&gt;
            Hello, world! This is the Primary toast message.
        &lt;/div&gt;
        &lt;button type="button" class="btn-close btn-close-white me-2 m-auto"
            data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast align-items-center text-bg-secondary border-0 fade show mb-4"
    role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="d-flex"&gt;
        &lt;div class="toast-body"&gt;
            Hello, world! This is the Secondary toast.
        &lt;/div&gt;
        &lt;button type="button" class="btn-close btn-close-white me-2 m-auto"
            data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast align-items-center text-bg-success border-0 fade show mb-4"
    role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="d-flex"&gt;
        &lt;div class="toast-body"&gt;
            Hello, world! This is the Success toast message.
        &lt;/div&gt;
        &lt;button type="button" class="btn-close btn-close-white me-2 m-auto"
            data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast align-items-center text-bg-info border-0 fade show"
    role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="d-flex"&gt;
        &lt;div class="toast-body"&gt;
            Hello, world! This is the info toast message.
        &lt;/div&gt;
        &lt;button type="button" class="btn-close btn-close-white me-2 m-auto"
            data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Solid Background Toasts
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-primary me-2 btn-wave" id="solidprimaryToastBtn">Primary</button>
                                        <button type="button" class="btn btn-primary1 me-2 btn-wave" id="solidprimary1ToastBtn">Primary1</button>
                                        <button type="button" class="btn btn-primary2 me-2 btn-wave" id="solidprimary2ToastBtn">Primary2</button>
                                        <button type="button" class="btn btn-primary3 me-2 btn-wave" id="solidprimary3ToastBtn">Primary3</button>
                                        <button type="button" class="btn btn-secondary me-2 btn-wave" id="solidsecondaryToastBtn">secondary</button>
                                        <button type="button" class="btn btn-warning me-2 btn-wave" id="solidwarningToastBtn">warning</button>
                                        <button type="button" class="btn btn-info me-2 btn-wave" id="solidinfoToastBtn">info</button>
                                        <button type="button" class="btn btn-success me-2 btn-wave" id="solidsuccessToastBtn">success</button>
                                        <button type="button" class="btn btn-danger me-2 btn-wave" id="soliddangerToastBtn">danger</button>
                                    </div>
                                    <div class="toast-container position-fixed top-0 end-0 p-3">
                                        <div id="solid-primaryToast" class="toast colored-toast bg-primary text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="solid-primary1Toast" class="toast colored-toast bg-primary1 text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary1 text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="solid-primary2Toast" class="toast colored-toast bg-primary2 text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary2 text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="solid-primary3Toast" class="toast colored-toast bg-primary3 text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary3 text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="solid-secondaryToast" class="toast colored-toast bg-secondary text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-secondary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="solid-warningToast" class="toast colored-toast bg-warning text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-warning text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="solid-infoToast" class="toast colored-toast bg-info text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-info text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="solid-successToast" class="toast colored-toast bg-success text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-success text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="solid-dangerToast" class="toast colored-toast bg-danger text-fixed-white" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-danger text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;button type="button" class="btn btn-primary me-2 btn-wave" id="solidprimaryToastBtn"&gt;Primary&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary1 me-2 btn-wave" id="solidprimary1ToastBtn"&gt;Primary1&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary2 me-2 btn-wave" id="solidprimary2ToastBtn"&gt;Primary2&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary3 me-2 btn-wave" id="solidprimary3ToastBtn"&gt;Primary3&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary me-2 btn-wave" id="solidsecondaryToastBtn"&gt;secondary&lt;/button&gt;
    &lt;button type="button" class="btn btn-warning me-2 btn-wave" id="solidwarningToastBtn"&gt;warning&lt;/button&gt;
    &lt;button type="button" class="btn btn-info me-2 btn-wave" id="solidinfoToastBtn"&gt;info&lt;/button&gt;
    &lt;button type="button" class="btn btn-success me-2 btn-wave" id="solidsuccessToastBtn"&gt;success&lt;/button&gt;
    &lt;button type="button" class="btn btn-danger me-2 btn-wave" id="soliddangerToastBtn"&gt;danger&lt;/button&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-0 end-0 p-3"&gt;
    &lt;div id="solid-primaryToast" class="toast colored-toast bg-primary text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="solid-primary1Toast" class="toast colored-toast bg-primary1 text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary1 text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="solid-primary2Toast" class="toast colored-toast bg-primary2 text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary2 text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="solid-primary3Toast" class="toast colored-toast bg-primary3 text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary3 text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="solid-secondaryToast" class="toast colored-toast bg-secondary text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-secondary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="solid-warningToast" class="toast colored-toast bg-warning text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-warning text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="solid-infoToast" class="toast colored-toast bg-info text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-info text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="solid-successToast" class="toast colored-toast bg-success text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-success text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="solid-dangerToast" class="toast colored-toast bg-danger text-fixed-white" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-danger text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Color Variants Live
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-primary-light me-2 btn-wave" id="primaryToastBtn">Primary</button>
                                        <button type="button" class="btn btn-primary1-light me-2 btn-wave" id="primary1ToastBtn">Primary1</button>
                                        <button type="button" class="btn btn-primary2-light me-2 btn-wave" id="primary2ToastBtn">Primary2</button>
                                        <button type="button" class="btn btn-primary3-light me-2 btn-wave" id="primary3ToastBtn">Primary3</button>
                                        <button type="button" class="btn btn-secondary-light me-2 btn-wave" id="secondaryToastBtn">secondary</button>
                                        <button type="button" class="btn btn-warning-light me-2 btn-wave" id="warningToastBtn">warning</button>
                                        <button type="button" class="btn btn-info-light me-2 btn-wave" id="infoToastBtn">info</button>
                                        <button type="button" class="btn btn-success-light me-2 btn-wave" id="successToastBtn">success</button>
                                        <button type="button" class="btn btn-danger-light me-2 btn-wave" id="dangerToastBtn">danger</button>
                                    </div>
                                    <div class="toast-container position-fixed top-0 end-0 p-3">
                                        <div id="primaryToast" class="toast colored-toast bg-primary-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="primary1Toast" class="toast colored-toast bg-primary1-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary1 text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="primary2Toast" class="toast colored-toast bg-primary2-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary2 text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="primary3Toast" class="toast colored-toast bg-primary3-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary3 text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="secondaryToast" class="toast colored-toast bg-secondary-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-secondary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="warningToast" class="toast colored-toast bg-warning-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-warning text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="infoToast" class="toast colored-toast bg-info-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-info text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="successToast" class="toast colored-toast bg-success-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-success text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                        <div id="dangerToast" class="toast colored-toast bg-danger-transparent" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-danger text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;button type="button" class="btn btn-primary-light me-2 btn-wave" id="primaryToastBtn"&gt;Primary&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary1-light me-2 btn-wave" id="primary1ToastBtn"&gt;Primary1&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary2-light me-2 btn-wave" id="primary2ToastBtn"&gt;Primary2&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary3-light me-2 btn-wave" id="primary3ToastBtn"&gt;Primary3&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary-light me-2 btn-wave" id="secondaryToastBtn"&gt;secondary&lt;/button&gt;
    &lt;button type="button" class="btn btn-warning-light me-2 btn-wave" id="warningToastBtn"&gt;warning&lt;/button&gt;
    &lt;button type="button" class="btn btn-info-light me-2 btn-wave" id="infoToastBtn"&gt;info&lt;/button&gt;
    &lt;button type="button" class="btn btn-success-light me-2 btn-wave" id="successToastBtn"&gt;success&lt;/button&gt;
    &lt;button type="button" class="btn btn-danger-light me-2 btn-wave" id="dangerToastBtn"&gt;danger&lt;/button&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-0 end-0 p-3"&gt;
    &lt;div id="primaryToast" class="toast colored-toast bg-primary-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="primary1Toast" class="toast colored-toast bg-primary1-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary1 text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="primary2Toast" class="toast colored-toast bg-primary2-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary2 text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="primary3Toast" class="toast colored-toast bg-primary3-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary3 text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="secondaryToast" class="toast colored-toast bg-secondary-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-secondary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="warningToast" class="toast colored-toast bg-warning-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-warning text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="infoToast" class="toast colored-toast bg-info-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-info text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="successToast" class="toast colored-toast bg-success-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-success text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="dangerToast" class="toast colored-toast bg-danger-transparent" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-danger text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Translucent
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header text-default">
                                            <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-logo.png'); ?>" alt="...">

                                            <strong class="me-auto">Xintra</strong>
                                            <small class="text-muted">11 mins ago</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="toast-header text-default"&gt;
        &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-logo.png'); ?>" alt="..."&gt;

        &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
        &lt;small class="text-muted"&gt;11 mins ago&lt;/small&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
            aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="toast-body"&gt;
        Hello, world! This is a toast message.
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Custom content
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="toast align-items-center fade show mb-3" role="alert"
                                        aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="my-4 text-muted">
                                            Alternatively, you can also add additional controls and components to
                                            toasts.
                                        </span>
                                    </div>
                                    <div class="toast fade show mt-2" role="alert" aria-live="assertive"
                                        aria-atomic="true">
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                            <div class="mt-2 pt-2 border-top">
                                                <button type="button" class="btn btn-primary btn-sm btn-wave">Take
                                                    action</button>
                                                <button type="button" class="btn btn-secondary btn-sm btn-wave"
                                                    data-bs-dismiss="toast">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="toast align-items-center fade show mb-3" role="alert"
    aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="d-flex"&gt;
        &lt;div class="toast-body"&gt;
            Hello, world! This is a toast message.
        &lt;/div&gt;
        &lt;button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
            aria-label="Close"&gt;
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div&gt;
    &lt;span class="my-4 text-muted"&gt;
        Alternatively, you can also add additional controls and components to
        toasts.
    &lt;/span&gt;
&lt;/div&gt;
&lt;div class="toast fade show mt-2" role="alert" aria-live="assertive"
    aria-atomic="true"&gt;
    &lt;div class="toast-body"&gt;
        Hello, world! This is a toast message.
        &lt;div class="mt-2 pt-2 border-top"&gt;
            &lt;button type="button" class="btn btn-primary btn-sm btn-wave"&gt;Take
                action&lt;/button&gt;
            &lt;button type="button" class="btn btn-secondary btn-sm btn-wave"
                data-bs-dismiss="toast"&gt;Close&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Aligning Toast Using Flexbox
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="bd-example bg-light bd-example-toasts d-flex p-0">
                                        <div aria-live="polite" aria-atomic="true"
                                            class="d-flex justify-content-center align-items-center w-100">
                                            <div class="toast fade show shadow-lg" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header text-default">
                                                    <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-logo.png'); ?>" alt="...">
                                                    <strong class="me-auto">Xintra</strong>
                                                    <small>11 mins ago</small>
                                                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="bd-example bg-light bd-example-toasts d-flex p-0"&gt;
    &lt;div aria-live="polite" aria-atomic="true"
        class="d-flex justify-content-center align-items-center w-100"&gt;
        &lt;div class="toast fade show shadow-lg" role="alert" aria-live="assertive"
            aria-atomic="true"&gt;
            &lt;div class="toast-header text-default"&gt;
                &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-logo.png'); ?>" alt="..."&gt;
                &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
                &lt;small&gt;11 mins ago&lt;/small&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="toast-body"&gt;
                Hello, world! This is a toast message.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        TOASTIFY JS
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-primary-gradient btn-wave" id="toast-button">Click For Live Toast</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Toast Placements
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="topleftToastBtn">Top Left</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="topcenterToastBtn">Top Center</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="toprightToastBtn">Top Right</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="middleleftToastBtn">Middle Left</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="middlecenterToastBtn">Middle Center</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="middlerightToastBtn">Middle Right</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="bottomleftToastBtn">Bottom Left</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="bottomcenterToastBtn">Bottom Center</button>
                                        <button type="button" class="btn btn-outline-primary me-2 btn-wave" id="bottomrightToastBtn">Bottom Right</button>
                                    </div>
                                    <div class="toast-container position-fixed top-0 start-0 p-3">
                                        <div id="topleft-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
                                        <div id="topcenter-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed top-0 end-0 p-3">
                                        <div id="topright-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed top-50 start-0 translate-middle-y p-3">
                                        <div id="middleleft-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed top-50 start-50 translate-middle">
                                        <div id="middlecenter-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed top-50 end-0 translate-middle-y p-3">
                                        <div id="middleright-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed bottom-0 start-0 p-3">
                                        <div id="bottomleft-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed bottom-0 start-50 translate-middle-x p-3">
                                        <div id="bottomcenter-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                        <div id="bottomright-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
                                            aria-atomic="true">
                                            <div class="toast-header bg-primary text-fixed-white">
                                                <img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="...">
                                                <strong class="me-auto">Xintra</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your,toast message here.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="topleftToastBtn"&gt;Top Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="topcenterToastBtn"&gt;Top Center&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="toprightToastBtn"&gt;Top Right&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="middleleftToastBtn"&gt;Middle Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="middlecenterToastBtn"&gt;Middle Center&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="middlerightToastBtn"&gt;Middle Right&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="bottomleftToastBtn"&gt;Bottom Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="bottomcenterToastBtn"&gt;Bottom Center&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary me-2 btn-wave" id="bottomrightToastBtn"&gt;Bottom Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-0 start-0 p-3"&gt;
    &lt;div id="topleft-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3"&gt;
    &lt;div id="topcenter-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-0 end-0 p-3"&gt;
    &lt;div id="topright-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-50 start-0 translate-middle-y p-3"&gt;
    &lt;div id="middleleft-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-50 start-50 translate-middle"&gt;
    &lt;div id="middlecenter-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed top-50 end-0 translate-middle-y p-3"&gt;
    &lt;div id="middleright-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed bottom-0 start-0 p-3"&gt;
    &lt;div id="bottomleft-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed bottom-0 start-50 translate-middle-x p-3"&gt;
    &lt;div id="bottomcenter-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="toast-container position-fixed bottom-0 end-0 p-3"&gt;
    &lt;div id="bottomright-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive"
        aria-atomic="true"&gt;
        &lt;div class="toast-header bg-primary text-fixed-white"&gt;
            &lt;img class="bd-placeholder-img rounded me-1" src="<?php echo base_url('assets/images/brand-logos/toggle-dark.png'); ?>" alt="..."&gt;
            &lt;strong class="me-auto"&gt;Xintra&lt;/strong&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="toast"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Your,toast message here.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Toastify JS -->
        <script src="<?php echo base_url('assets/libs/toastify-js/src/toastify.js'); ?>"></script>

        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

        <!-- Toast JS -->
        <script src="<?php echo base_url('assets/js/toasts.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
