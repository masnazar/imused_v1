
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

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
                                    <li class="breadcrumb-item active" aria-current="page">Progress</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Progress</h1>
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
                                        Basic Progress
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 0%"></div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 25%"></div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 75%"></div>
                                    </div>
                                    <div class="progress mb-0" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar" style="width: 0%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar" style="width: 25%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar" style="width: 50%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar" style="width: 75%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-0" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar" style="width: 100%"&gt;&lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Striped Progress
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped" style="width: 10%">
                                        </div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped bg-secondary" style="width: 25%">
                                        </div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped bg-success" style="width: 50%">
                                        </div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped bg-info" style="width: 75%">
                                        </div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped bg-warning" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress mb-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar progress-bar-striped" style="width: 10%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar progress-bar-striped bg-secondary" style="width: 25%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar progress-bar-striped bg-success" style="width: 50%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-3" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar progress-bar-striped bg-info" style="width: 75%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress" role="progressbar" aria-valuenow="100" aria-valuemin="0"
aria-valuemax="100"&gt;
    &lt;div class="progress-bar progress-bar-striped bg-warning" style="width: 100%"&gt;&lt;/div&gt;
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
                                        Progress With Labels
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress mb-3" role="progressbar"
                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 10%;">10%</div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary" style="width: 20%;">20%</div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 40%;">40%</div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info" style="width: 60%;">60%</div>
                                    </div>
                                    <div class="progress mb-0" role="progressbar"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning" style="width: 80%;">80%</div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress mb-3" role="progressbar"
    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar" style="width: 10%;"&gt;10%&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-3" role="progressbar"
            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar bg-secondary" style="width: 20%;"&gt;20%&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-3" role="progressbar"
    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar bg-success" style="width: 40%;"&gt;40%&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-3" role="progressbar"
    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar bg-info" style="width: 60%;"&gt;60%&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-0" role="progressbar"
    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar bg-warning" style="width: 80%;"&gt;80%&lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Multiple bars With Sizes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress-stacked progress-xs mb-3">
                                        <div class="progress-bar" role="progressbar" style="width: 5%"
                                            aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 10%"
                                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 15%"
                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress-stacked progress-sm mb-3">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 10%"
                                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 15%"
                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress-stacked mb-3">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 15%"
                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress-stacked progress-lg mb-3">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-teal" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-orange" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress-stacked progress-xl mb-0">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 35%"
                                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress-stacked progress-xs mb-3"&gt;
    &lt;div class="progress-bar" role="progressbar" style="width: 5%"
        aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 10%"
        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar bg-success" role="progressbar" style="width: 15%"
        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-stacked progress-sm mb-3"&gt;
    &lt;div class="progress-bar bg-warning" role="progressbar" style="width: 10%"
        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar bg-info" role="progressbar" style="width: 15%"
        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-stacked mb-3"&gt;
    &lt;div class="progress-bar bg-info" role="progressbar" style="width: 15%"
        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar bg-success" role="progressbar" style="width: 20%"
        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar" role="progressbar" style="width: 25%"
        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-stacked progress-lg mb-3"&gt;
    &lt;div class="progress-bar bg-purple" role="progressbar" style="width: 20%"
        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar bg-teal" role="progressbar" style="width: 25%"
        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar bg-orange" role="progressbar" style="width: 30%"
        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress-stacked progress-xl mb-0"&gt;
    &lt;div class="progress-bar bg-success" role="progressbar" style="width: 25%"
        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar bg-danger" role="progressbar" style="width: 30%"
        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
    &lt;div class="progress-bar bg-warning" role="progressbar" style="width: 35%"
        aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Progress Height
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress progress-xs mb-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary" style="width: 10%">
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mb-3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary" style="width: 25%">
                                        </div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary" style="width: 50%">
                                        </div>
                                    </div>
                                    <div class="progress progress-lg mb-3" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary" style="width: 75%">
                                        </div>
                                    </div>
                                    <div class="progress progress-xl" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100">
                                        <div class="progress-bar bg-primary" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress progress-xs mb-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary" style="width: 10%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm mb-3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary" style="width: 25%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary" style="width: 50%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-lg mb-3" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary" style="width: 75%"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl" role="progressbar" aria-valuenow="100" aria-valuemin="0"
        aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary" style="width: 100%"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Different Colored Progress
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                    aria-valuemax="100">
                                        <div class="progress-bar bg-secondary" style="width: 20%"></div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning" style="width: 40%"></div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info" style="width: 60%"></div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 80%"></div>
                                    </div>
                                    <div class="progress" role="progressbar"
                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-danger" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress mb-3" role="progressbar" aria-valuenow="20" aria-valuemin="0"
    aria-valuemax="100"&gt;
        &lt;div class="progress-bar bg-secondary" style="width: 20%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-3" role="progressbar"
    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar bg-warning" style="width: 40%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-3" role="progressbar"
    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar bg-info" style="width: 60%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress mb-3" role="progressbar"
    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar bg-success" style="width: 80%"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress" role="progressbar"
    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-bar bg-danger" style="width: 100%"&gt;&lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
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
                                        Custom Progress-1
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress progress-sm progress-custom mb-5 progress-animate" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <h6 class="progress-bar-title">Mobiles</h6>
                                        <div class="progress-bar" style="width: 50%">
                                            <div class="progress-bar-value">50%</div>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm progress-custom mb-5 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <h6 class="progress-bar-title bg-secondary">Watches</h6>
                                        <div class="progress-bar bg-secondary" style="width: 60%">
                                            <div class="progress-bar-value bg-secondary">60%</div>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm progress-custom progress-animate" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <h6 class="progress-bar-title bg-success">Shirts</h6>
                                        <div class="progress-bar bg-success" style="width: 70%">
                                            <div class="progress-bar-value bg-success">70%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress progress-sm progress-custom mb-5 progress-animate" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;h6 class="progress-bar-title"&gt;Mobiles&lt;/h6&gt;
    &lt;div class="progress-bar" style="width: 50%"&gt;
        &lt;div class="progress-bar-value"&gt;50%&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm progress-custom mb-5 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;h6 class="progress-bar-title bg-secondary"&gt;Watches&lt;/h6&gt;
    &lt;div class="progress-bar bg-secondary" style="width: 60%"&gt;
        &lt;div class="progress-bar-value bg-secondary"&gt;60%&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm progress-custom progress-animate" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;h6 class="progress-bar-title bg-success"&gt;Shirts&lt;/h6&gt;
    &lt;div class="progress-bar bg-success" style="width: 70%"&gt;
        &lt;div class="progress-bar-value bg-success"&gt;70%&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Custom Progress-2
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-item-1 bg-primary"></div><div class="progress-item-2"></div><div class="progress-item-3"></div>
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-item-1 bg-secondary"></div><div class="progress-item-2 bg-secondary"></div><div class="progress-item-3"></div>
                                        <div class="progress-bar bg-secondary" style="width: 60%"></div>
                                    </div>
                                    <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-item-1 bg-success"></div><div class="progress-item-2 bg-success"></div><div class="progress-item-3"></div>
                                        <div class="progress-bar bg-success" style="width: 70%"></div>
                                    </div>
                                    <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-item-1 bg-info"></div><div class="progress-item-2 bg-info"></div><div class="progress-item-3 bg-info"></div>
                                        <div class="progress-bar bg-info" style="width: 80%"></div>
                                    </div>
                                    <div class="progress progress-sm" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-item-1 bg-warning"></div><div class="progress-item-2 bg-warning"></div><div class="progress-item-3 bg-warning"></div>
                                        <div class="progress-bar bg-warning" style="width: 90%"></div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-item-1 bg-primary"&gt;&lt;/div&gt;&lt;div class="progress-item-2"&gt;&lt;/div&gt;&lt;div class="progress-item-3"&gt;&lt;/div&gt;
    &lt;div class="progress-bar" style="width: 50%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-item-1 bg-secondary"&gt;&lt;/div&gt;&lt;div class="progress-item-2 bg-secondary"&gt;&lt;/div&gt;&lt;div class="progress-item-3"&gt;&lt;/div&gt;
    &lt;div class="progress-bar bg-secondary" style="width: 60%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-item-1 bg-success"&gt;&lt;/div&gt;&lt;div class="progress-item-2 bg-success"&gt;&lt;/div&gt;&lt;div class="progress-item-3"&gt;&lt;/div&gt;
    &lt;div class="progress-bar bg-success" style="width: 70%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-item-1 bg-info"&gt;&lt;/div&gt;&lt;div class="progress-item-2 bg-info"&gt;&lt;/div&gt;&lt;div class="progress-item-3 bg-info"&gt;&lt;/div&gt;
    &lt;div class="progress-bar bg-info" style="width: 80%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-sm" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-item-1 bg-warning"&gt;&lt;/div&gt;&lt;div class="progress-item-2 bg-warning"&gt;&lt;/div&gt;&lt;div class="progress-item-3 bg-warning"&gt;&lt;/div&gt;
    &lt;div class="progress-bar bg-warning" style="width: 90%"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Custom Progress-3
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress progress-lg mb-5 custom-progress-3 progress-animate" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%">
                                            <div class="progress-bar-value">50%</div>
                                        </div>
                                    </div>
                                    <div class="progress progress-lg mb-5 custom-progress-3 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary" style="width: 60%">
                                            <div class="progress-bar-value secondary">60%</div>
                                        </div>
                                    </div>
                                    <div class="progress progress-lg custom-progress-3 progress-animate" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 70%">
                                            <div class="progress-bar-value success">70%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress progress-lg mb-5 custom-progress-3 progress-animate" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar" style="width: 50%"&gt;
        &lt;div class="progress-bar-value"&gt;50%&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-lg mb-5 custom-progress-3 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-secondary" style="width: 60%"&gt;
        &lt;div class="progress-bar-value secondary"&gt;60%&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-lg custom-progress-3 progress-animate" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-success" style="width: 70%"&gt;
        &lt;div class="progress-bar-value success"&gt;70%&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

                    <!-- Start:: row-6 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Custom Progress-4
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress progress-xl mb-3 progress-animate custom-progress-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary-gradient" style="width: 10%"></div>
                                        <div class="progress-bar-label">10%</div>
                                    </div>
                                    <div class="progress progress-xl mb-3 progress-animate custom-progress-4 secondary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary-gradient" style="width: 20%"></div>
                                            <div class="progress-bar-label">20%</div>
                                    </div>
                                    <div class="progress progress-xl mb-3 progress-animate custom-progress-4 success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success-gradient" style="width: 40%"></div>
                                            <div class="progress-bar-label">40%</div>
                                    </div>
                                    <div class="progress progress-xl mb-3 progress-animate custom-progress-4 info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info-gradient" style="width: 60%"></div>
                                            <div class="progress-bar-label">60%</div>
                                    </div>
                                    <div class="progress progress-xl mb-3 progress-animate custom-progress-4 warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning-gradient" style="width: 80%"></div>
                                            <div class="progress-bar-label">80%</div>
                                    </div>
                                    <div class="progress progress-xl progress-animate custom-progress-4 danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-danger-gradient" style="width: 90%"></div>
                                            <div class="progress-bar-label">90%</div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress progress-xl mb-3 progress-animate custom-progress-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary-gradient" style="width: 10%"&gt;&lt;/div&gt;
    &lt;div class="progress-bar-label"&gt;10%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl mb-3 progress-animate custom-progress-4 secondary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-secondary-gradient" style="width: 20%"&gt;&lt;/div&gt;
        &lt;div class="progress-bar-label"&gt;20%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl mb-3 progress-animate custom-progress-4 success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-success-gradient" style="width: 40%"&gt;&lt;/div&gt;
        &lt;div class="progress-bar-label"&gt;40%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl mb-3 progress-animate custom-progress-4 info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-info-gradient" style="width: 60%"&gt;&lt;/div&gt;
        &lt;div class="progress-bar-label"&gt;60%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl mb-3 progress-animate custom-progress-4 warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-warning-gradient" style="width: 80%"&gt;&lt;/div&gt;
        &lt;div class="progress-bar-label"&gt;80%&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-xl progress-animate custom-progress-4 danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-danger-gradient" style="width: 90%"&gt;&lt;/div&gt;
        &lt;div class="progress-bar-label"&gt;90%&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Custom Progress-5
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="fw-medium mb-2">Project Dependencies</h6>
                                    <div class="progress-stacked progress-xl mb-5">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 35%"
                                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-xl-5">
                                            <div class="border p-3">
                                                <p class="fs-12 fw-medium mb-0 text-muted">Html<span class="float-end fs-10 fw-normal">25%</span></p>
                                                <div class="progress progress-xs mb-4 progress-animate" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 25%">
                                                    </div>
                                                </div>
                                                <p class="fs-12 fw-medium mb-0 text-muted">Css<span class="float-end fs-10 fw-normal">35%</span></p>
                                                <div class="progress progress-xs mb-4 progress-animate" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-secondary" style="width: 35%">
                                                    </div>
                                                </div>
                                                <p class="fs-12 fw-medium mb-0 text-muted">Js<span class="float-end fs-10 fw-normal">40%</span></p>
                                                <div class="progress progress-xs mb-0 progress-animate" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-danger" style="width: 40%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;h6 class="fw-medium mb-2">Project Dependencies&lt;/h6&gt;
    &lt;div class="progress-stacked progress-xl mb-5"&gt;
        &lt;div class="progress-bar" role="progressbar" style="width: 25%"
            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;25%&lt;/div&gt;
        &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 35%"
            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"&gt;35%&lt;/div&gt;
        &lt;div class="progress-bar bg-danger" role="progressbar" style="width: 40%"
            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;40%&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row justify-content-center"&gt;
        &lt;div class="col-xl-5"&gt;
            &lt;div class="border p-3"&gt;
                &lt;p class="fs-12 fw-medium mb-0 text-muted"&gt;Html&lt;span class="float-end fs-10 fw-normal"&gt;25%&lt;/span&gt;&lt;/p&gt;
                &lt;div class="progress progress-xs mb-4 progress-animate" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;
                    &lt;div class="progress-bar bg-primary" style="width: 25%"&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;p class="fs-12 fw-medium mb-0 text-muted"&gt;Css&lt;span class="float-end fs-10 fw-normal"&gt;35%&lt;/span&gt;&lt;/p&gt;
                &lt;div class="progress progress-xs mb-4 progress-animate" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"&gt;
                    &lt;div class="progress-bar bg-secondary" style="width: 35%"&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;p class="fs-12 fw-medium mb-0 text-muted"&gt;Js&lt;span class="float-end fs-10 fw-normal"&gt;40%&lt;/span&gt;&lt;/p&gt;
                &lt;div class="progress progress-xs mb-0 progress-animate" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
                    &lt;div class="progress-bar bg-danger" style="width: 40%"&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-6 -->

                    <!-- Start:: row-7 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Gradient Progress
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary-gradient" style="width: 10%"></div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary-gradient" style="width: 20%"></div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success-gradient" style="width: 40%"></div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info-gradient" style="width: 60%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning-gradient" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress mb-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary-gradient" style="width: 10%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-3" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-secondary-gradient" style="width: 20%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-success-gradient" style="width: 40%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-info-gradient" style="width: 60%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-warning-gradient" style="width: 80%"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Animated Stripped Progress
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            style="width: 10%"></div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated" style="width: 20%"></div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 40%"></div>
                                    </div>
                                    <div class="progress mb-3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width: 60%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress mb-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar progress-bar-striped progress-bar-animated"
        style="width: 10%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-3" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated" style="width: 20%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 40%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width: 60%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width: 80%"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Custom Animated Progress
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="progress mb-3 progress-animate" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary-gradient" style="width: 10%"></div>
                                    </div>
                                    <div class="progress mb-3 progress-animate" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary-gradient" style="width: 20%"></div>
                                    </div>
                                    <div class="progress mb-3 progress-animate" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success-gradient" style="width: 40%"></div>
                                    </div>
                                    <div class="progress mb-3 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info-gradient" style="width: 60%"></div>
                                    </div>
                                    <div class="progress progress-animate" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning-gradient" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="progress mb-3 progress-animate" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-primary-gradient" style="width: 10%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-3 progress-animate" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-secondary-gradient" style="width: 20%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-3 progress-animate" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-success-gradient" style="width: 40%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress mb-3 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-info-gradient" style="width: 60%"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress progress-animate" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"&gt;
    &lt;div class="progress-bar bg-warning-gradient" style="width: 80%"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-7 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
