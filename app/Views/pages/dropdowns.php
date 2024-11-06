
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
                                    <li class="breadcrumb-item active" aria-current="page">Dropdowns</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Dropdowns</h1>
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

                    <!--Start:: row-1-->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Dropdowns
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list d-flex align-items-center flex-wrap">
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown button
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" href="javascript:void(0);" role="button"
                                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown link
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list d-flex align-items-center flex-wrap"&gt;
        &lt;div class="dropdown"&gt;
            &lt;button class="btn btn-primary dropdown-toggle" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                Dropdown button
            &lt;/button&gt;
            &lt;ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        &lt;div class="dropdown"&gt;
            &lt;a class="btn btn-secondary dropdown-toggle" href="javascript:void(0);" role="button"
                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                Dropdown link
            &lt;/a&gt;
            &lt;ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End:: row-1-->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Outline Button Dropdowns</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-primary1 dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-primary2 dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-primary3 dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-success dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-warning dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-danger dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-primary dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-primary1 dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-primary2 dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-primary3 dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-secondary dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-success dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-warning dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-danger dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Single dropdown buttons</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary1 dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary2 dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary3 dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary1 dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary2 dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary3 dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-secondary dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-success dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-warning dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-danger dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
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
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Rounded Outline Dropdowns</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-primary dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-primary1 dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-primary2 dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-primary3 dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-secondary dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-success dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-info dropdown-toggle rounded-pill" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-warning dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-danger dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-primary dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-primary1 dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-primary2 dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-primary3 dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-secondary dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-success dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-info dropdown-toggle rounded-pill" data-bs-toggle="dropdown"
            aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-warning dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-outline-danger dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Rounded Button Dropdowns</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary1 dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary2 dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary3 dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle rounded-pill" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle rounded-pill"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary1 dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary2 dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary3 dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-secondary dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-success dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-info dropdown-toggle rounded-pill" data-bs-toggle="dropdown"
            aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-warning dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-danger dropdown-toggle rounded-pill"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Action
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
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
                                    <div class="card-title">Split buttons</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Example split danger button -->
                                    <div class="btn-group my-1">
                                        <button type="button" class="btn btn-primary">Action</button>
                                        <button type="button"
                                            class="btn btn-primary dropdown-toggle dropdown-toggle-split me-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group my-1">
                                        <button type="button" class="btn btn-primary1">Action</button>
                                        <button type="button"
                                            class="btn btn-primary1 dropdown-toggle dropdown-toggle-split me-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group my-1">
                                        <button type="button" class="btn btn-primary2">Action</button>
                                        <button type="button"
                                            class="btn btn-primary2 dropdown-toggle dropdown-toggle-split me-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group my-1">
                                        <button type="button" class="btn btn-primary3">Action</button>
                                        <button type="button"
                                            class="btn btn-primary3 dropdown-toggle dropdown-toggle-split me-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group my-1">
                                        <button type="button" class="btn btn-secondary">Action</button>
                                        <button type="button"
                                            class="btn btn-secondary dropdown-toggle dropdown-toggle-split me-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group my-1">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button"
                                            class="btn btn-info dropdown-toggle dropdown-toggle-split me-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group my-1">
                                        <button type="button" class="btn btn-success">Action</button>
                                        <button type="button"
                                            class="btn btn-success dropdown-toggle dropdown-toggle-split me-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group my-1">
                                        <button type="button" class="btn btn-warning">Action</button>
                                        <button type="button"
                                            class="btn btn-warning dropdown-toggle dropdown-toggle-split me-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group my-1">
                                        <button type="button" class="btn btn-danger">Action</button>
                                        <button type="button"
                                            class="btn btn-danger dropdown-toggle dropdown-toggle-split me-2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-group my-1"&gt;
    &lt;button type="button" class="btn btn-primary"&gt;Action&lt;/button&gt;
    &lt;button type="button"
        class="btn btn-primary dropdown-toggle dropdown-toggle-split me-2"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group my-1"&gt;
    &lt;button type="button" class="btn btn-primary1"&gt;Action&lt;/button&gt;
    &lt;button type="button"
        class="btn btn-primary1 dropdown-toggle dropdown-toggle-split me-2"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group my-1"&gt;
    &lt;button type="button" class="btn btn-primary2"&gt;Action&lt;/button&gt;
    &lt;button type="button"
        class="btn btn-primary2 dropdown-toggle dropdown-toggle-split me-2"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group my-1"&gt;
    &lt;button type="button" class="btn btn-primary3"&gt;Action&lt;/button&gt;
    &lt;button type="button"
        class="btn btn-primary3 dropdown-toggle dropdown-toggle-split me-2"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group my-1"&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;Action&lt;/button&gt;
    &lt;button type="button"
        class="btn btn-secondary dropdown-toggle dropdown-toggle-split me-2"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group my-1"&gt;
    &lt;button type="button" class="btn btn-info"&gt;Action&lt;/button&gt;
    &lt;button type="button"
        class="btn btn-info dropdown-toggle dropdown-toggle-split me-2"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group my-1"&gt;
    &lt;button type="button" class="btn btn-success"&gt;Action&lt;/button&gt;
    &lt;button type="button"
        class="btn btn-success dropdown-toggle dropdown-toggle-split me-2"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group my-1"&gt;
    &lt;button type="button" class="btn btn-warning"&gt;Action&lt;/button&gt;
    &lt;button type="button"
        class="btn btn-warning dropdown-toggle dropdown-toggle-split me-2"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group my-1"&gt;
    &lt;button type="button" class="btn btn-danger"&gt;Action&lt;/button&gt;
    &lt;button type="button"
        class="btn btn-danger dropdown-toggle dropdown-toggle-split me-2"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Dropdown Sizing
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group my-1 me-2">
                                        <button class="btn btn-primary btn-lg dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Large button
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group my-1 me-2">
                                        <button class="btn btn-light btn-lg" type="button">
                                            Large split button
                                        </button>
                                        <button type="button"
                                            class="btn btn-lg btn-light dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <!-- samll button groups (default and split) -->
                                    <div class="btn-group my-1 me-2">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Small button
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group my-1">
                                        <button class="btn btn-light btn-sm" type="button">
                                            Small split button
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-group my-1 me-2"&gt;
    &lt;button class="btn btn-primary btn-lg dropdown-toggle" type="button"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Large button
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group my-1 me-2"&gt;
    &lt;button class="btn btn-light btn-lg" type="button"&gt;
        Large split button
    &lt;/button&gt;
    &lt;button type="button"
        class="btn btn-lg btn-light dropdown-toggle dropdown-toggle-split"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;!-- samll button groups (default and split) --&gt;
&lt;div class="btn-group my-1 me-2"&gt;
    &lt;button class="btn btn-primary btn-sm dropdown-toggle" type="button"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Small button
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group my-1"&gt;
    &lt;button class="btn btn-light btn-sm" type="button"&gt;
        Small split button
    &lt;/button&gt;
    &lt;button type="button"
        class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Disabled
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropstart
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Regular link</a></li>
                                        <li><a class="dropdown-item disabled" href="javascript:void(0);" aria-current="true">Active
                                                link</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another link</a></li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary dropdown-toggle"
    data-bs-toggle="dropdown" aria-expanded="false"&gt;
    Dropstart
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item disabled" href="javascript:void(0);" aria-current="true"&gt;Active
                link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Auto close behavior
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <div class="btn-group">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true"
                                                aria-expanded="false">
                                                Default dropdown
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuClickableOutside" data-bs-toggle="dropdown"
                                                data-bs-auto-close="inside" aria-expanded="false">
                                                Clickable outside
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-info dropdown-toggle" type="button"
                                                id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                                data-bs-auto-close="outside" aria-expanded="false">
                                                Clickable inside
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-warning dropdown-toggle" type="button"
                                                id="dropdownMenuClickable" data-bs-toggle="dropdown"
                                                data-bs-auto-close="false" aria-expanded="false">
                                                Manual close
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickable">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;div class="btn-group"&gt;
        &lt;button class="btn btn-primary dropdown-toggle" type="button"
            id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true"
            aria-expanded="false"&gt;
            Default dropdown
        &lt;/button&gt;
        &lt;ul class="dropdown-menu" aria-labelledby="defaultDropdown"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button class="btn btn-secondary dropdown-toggle" type="button"
            id="dropdownMenuClickableOutside" data-bs-toggle="dropdown"
            data-bs-auto-close="inside" aria-expanded="false"&gt;
            Clickable outside
        &lt;/button&gt;
        &lt;ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button class="btn btn-info dropdown-toggle" type="button"
            id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
            data-bs-auto-close="outside" aria-expanded="false"&gt;
            Clickable inside
        &lt;/button&gt;
        &lt;ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button class="btn btn-warning dropdown-toggle" type="button"
            id="dropdownMenuClickable" data-bs-toggle="dropdown"
            data-bs-auto-close="false" aria-expanded="false"&gt;
            Manual close
        &lt;/button&gt;
        &lt;ul class="dropdown-menu" aria-labelledby="dropdownMenuClickable"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        dropdowns with Forms
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <div class="dropdown-menu">
                                            <form class="px-4 py-3" novalidate>
                                                <div class="mb-3">
                                                    <label for="exampleDropdownFormEmail1" class="form-label">Email
                                                        address</label>
                                                    <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                                                        placeholder="email@example.com">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleDropdownFormPassword1"
                                                        class="form-label">Password</label>
                                                    <input type="password" class="form-control"
                                                        id="exampleDropdownFormPassword1" placeholder="Password">
                                                </div>
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                        <label class="form-check-label" for="dropdownCheck">
                                                            Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary">Sign in</button>
                                            </form>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">New around here? Sign up</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
    data-bs-toggle="dropdown" aria-expanded="false"&gt;
    Dropdown
&lt;/button&gt;
&lt;div class="dropdown-menu"&gt;
    &lt;form class="px-4 py-3"&gt;
        &lt;div class="mb-3"&gt;
            &lt;label for="exampleDropdownFormEmail1" class="form-label"&gt;Email
                address&lt;/label&gt;
            &lt;input type="email" class="form-control" id="exampleDropdownFormEmail1"
                placeholder="email@example.com"&gt;
        &lt;/div&gt;
        &lt;div class="mb-3"&gt;
            &lt;label for="exampleDropdownFormPassword1"
                class="form-label"&gt;Password&lt;/label&gt;
            &lt;input type="password" class="form-control"
                id="exampleDropdownFormPassword1" placeholder="Password"&gt;
        &lt;/div&gt;
        &lt;div class="mb-3"&gt;
            &lt;div class="form-check"&gt;
                &lt;input type="checkbox" class="form-check-input" id="dropdownCheck"&gt;
                &lt;label class="form-check-label" for="dropdownCheck"&gt;
                    Remember me
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;button class="btn btn-primary"&gt;Sign in&lt;/button&gt;
    &lt;/form&gt;
    &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
    &lt;a class="dropdown-item" href="javascript:void(0);"&gt;New around here? Sign up&lt;/a&gt;
    &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Forgot password?&lt;/a&gt;
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
                                        Dropdown menu centered
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title mb-3">Use <code>.dropdown-center</code> on the parent element.
                                    </p>
                                    <div class="dropdown-center">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownCenterBtn" data-bs-toggle="dropdown" aria-expanded="false">
                                            Centered dropdown
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action two</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action three</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="dropdown-center"&gt;
    &lt;button class="btn btn-primary dropdown-toggle" type="button"
        id="dropdownCenterBtn" data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Centered dropdown
    &lt;/button&gt;
    &lt;ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action two&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action three&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Dropup centered
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title mb-3">Use <code>.dropup-center</code>
                                        on the parent element.
                                    </p>
                                    <div class="dropup-center dropup">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropupCenterBtn" data-bs-toggle="dropdown" aria-expanded="false">
                                            Centered dropup
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropupCenterBtn">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action two</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action three</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="dropup-center dropup"&gt;
    &lt;button class="btn btn-secondary dropdown-toggle" type="button"
        id="dropupCenterBtn" data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Centered dropup
    &lt;/button&gt;
    &lt;ul class="dropdown-menu" aria-labelledby="dropupCenterBtn"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action two&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action three&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Menu items
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title mb-3">You can use <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> as
                                    dropdown items.</p>
                                    <div class="dropdown">
                                        <button class="btn btn-info dropdown-toggle" type="button"
                                            id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><button class="dropdown-item" type="button">Action</button></li>
                                            <li><button class="dropdown-item" type="button">Another action</button>
                                            </li>
                                            <li><button class="dropdown-item" type="button">Something else
                                                    here</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="dropdown"&gt;
    &lt;button class="btn btn-info dropdown-toggle" type="button"
        id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Dropdown
    &lt;/button&gt;
    &lt;ul class="dropdown-menu" aria-labelledby="dropdownMenu1"&gt;
        &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Action&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Another action&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Something else
                here&lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Dropdowns options
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title mb-3">Use <code>data-bs-offset</code> or <code>data-bs-reference</code> to change
                                    the location of the dropdown.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown me-1">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false"
                                                data-bs-offset="10,20">
                                                Offset
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Reference</button>
                                            <button type="button"
                                                class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                                id="dropdownMenuReference" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-reference="parent">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="d-flex align-items-center"&gt;
    &lt;div class="dropdown me-1"&gt;
        &lt;button type="button" class="btn btn-primary dropdown-toggle"
            id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false"
            data-bs-offset="10,20"&gt;
            Offset
        &lt;/button&gt;
        &lt;ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-info"&gt;Reference&lt;/button&gt;
        &lt;button type="button"
            class="btn btn-info dropdown-toggle dropdown-toggle-split"
            id="dropdownMenuReference" data-bs-toggle="dropdown"
            aria-expanded="false" data-bs-reference="parent"&gt;
            &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
        &lt;/button&gt;
        &lt;ul class="dropdown-menu" aria-labelledby="dropdownMenuReference"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
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
                                        Dropup
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group dropup my-1">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropup
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group dropup my-1">
                                        <button type="button" class="btn btn-info">
                                            Split dropup
                                        </button>
                                        <button type="button"
                                            class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-group dropup my-1"&gt;
    &lt;button type="button" class="btn btn-primary dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Dropup
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group dropup my-1"&gt;
    &lt;button type="button" class="btn btn-info"&gt;
        Split dropup
    &lt;/button&gt;
    &lt;button type="button"
        class="btn btn-info dropdown-toggle dropdown-toggle-split"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Dropup right
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group dropend my-1">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropright
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group dropend my-1">
                                        <button type="button" class="btn btn-info">
                                            Split dropend
                                        </button>
                                        <button type="button"
                                            class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropright</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-group dropend my-1"&gt;
    &lt;button type="button" class="btn btn-primary dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Dropright
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group dropend my-1"&gt;
    &lt;button type="button" class="btn btn-info"&gt;
        Split dropend
    &lt;/button&gt;
    &lt;button type="button"
        class="btn btn-info dropdown-toggle dropdown-toggle-split"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropright&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Active
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropstart
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Regular link</a></li>
                                        <li><a class="dropdown-item active" href="javascript:void(0);" aria-current="true">Active
                                                link</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another link</a></li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary dropdown-toggle"
    data-bs-toggle="dropdown" aria-expanded="false"&gt;
    Dropstart
&lt;/button&gt;
&lt;ul class="dropdown-menu"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item active" href="javascript:void(0);" aria-current="true"&gt;Active
            link&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Dropup left
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group dropstart my-1">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropleft
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <div class="btn-group dropstart my-1" role="group">
                                            <button type="button"
                                                class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropstart</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <button type="button" class="btn btn-info my-1">
                                            Split dropleft
                                        </button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-group dropstart my-1"&gt;
    &lt;button type="button" class="btn btn-primary dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Dropleft
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group"&gt;
    &lt;div class="btn-group dropstart my-1" role="group"&gt;
        &lt;button type="button"
            class="btn btn-info dropdown-toggle dropdown-toggle-split"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            &lt;span class="visually-hidden"&gt;Toggle Dropstart&lt;/span&gt;
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;button type="button" class="btn btn-info my-1"&gt;
        Split dropleft
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-7 -->

                    <!-- Start:: row-8 -->
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Alignment options
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <div class="btn-group">
                                            <button class="btn btn-primary dropdown-toggle mb-0" type="button"
                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle mb-0"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Right-aligned menu
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle mb-0"
                                                data-bs-toggle="dropdown" data-bs-display="static"
                                                aria-expanded="false">
                                                Left-aligned, right-aligned lg
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-lg-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle mb-0"
                                                data-bs-toggle="dropdown" data-bs-display="static"
                                                aria-expanded="false">
                                                Right-aligned, left-aligned lg
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropstart">
                                            <button type="button" class="btn btn-success dropdown-toggle mb-0"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropstart
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropend">
                                            <button type="button" class="btn btn-danger dropdown-toggle mb-0"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropend
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-teal dropdown-toggle mb-0"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropup
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;div class="btn-group"&gt;
        &lt;button class="btn btn-primary dropdown-toggle mb-0" type="button"
            id="dropdownMenuButton" data-bs-toggle="dropdown"
            aria-expanded="false"&gt;
            Dropdown
        &lt;/button&gt;
        &lt;ul class="dropdown-menu" aria-labelledby="dropdownMenuButton"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-secondary dropdown-toggle mb-0"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Right-aligned menu
        &lt;/button&gt;
        &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-info dropdown-toggle mb-0"
            data-bs-toggle="dropdown" data-bs-display="static"
            aria-expanded="false"&gt;
            Left-aligned, right-aligned lg
        &lt;/button&gt;
        &lt;ul class="dropdown-menu dropdown-menu-lg-end"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-warning dropdown-toggle mb-0"
            data-bs-toggle="dropdown" data-bs-display="static"
            aria-expanded="false"&gt;
            Right-aligned, left-aligned lg
        &lt;/button&gt;
        &lt;ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group dropstart"&gt;
        &lt;button type="button" class="btn btn-success dropdown-toggle mb-0"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Dropstart
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group dropend"&gt;
        &lt;button type="button" class="btn btn-danger dropdown-toggle mb-0"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Dropend
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group dropup"&gt;
        &lt;button type="button" class="btn btn-teal dropdown-toggle mb-0"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Dropup
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Dark Dropdowns
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="dropdown">
                                        <button class="btn btn-dark dropdown-toggle" type="button"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="dropdown"&gt;
    &lt;button class="btn btn-dark dropdown-toggle" type="button"
        id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Dropdown button
    &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-menu-dark"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-8 -->

                    <!-- Start:: row-9 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        non-interactive dropdown items
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title mb-3">Use <code>.dropdown-item-text.</code> to create non-interactive dropdown items.</p>
                                    <div class="bd-example">
                                        <ul class="dropdown-menu">
                                            <li><span class="dropdown-item-text">Dropdown item text</span>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="bd-example"&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;span class="dropdown-item-text"&gt;Dropdown item text&lt;/span&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Dropdown Headers
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-titlte mb-3">Add a <code>.dropdown-header</code> to label sections of actions in any dropdown menu.</p>
                                    <div class="bd-example">
                                        <ul class="dropdown-menu">
                                            <li>
                                                <h6 class="dropdown-header">Dropdown header</h6>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="bd-example"&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;
            &lt;h6 class="dropdown-header"&gt;Dropdown header&lt;/h6&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Dropdown Dividers
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="bd-example">
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-header" href="javascript:void(0);">Heading</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="bd-example"&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-header" href="javascript:void(0);"&gt;Heading&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Dropdown Menu Text
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="bd-example">
                                        <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;">
                                            <p>
                                                Some example text that's free-flowing within the dropdown menu.
                                            </p>
                                            <p class="mb-0">
                                                And this is more example text.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="bd-example"&gt;
    &lt;div class="dropdown-menu p-4 text-muted" style="max-width: 200px;"&gt;
        &lt;p&gt;
            Some example text that's free-flowing within the dropdown menu.
        &lt;/p&gt;
        &lt;p class="mb-0"&gt;
            And this is more example text.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-9 -->

                    <!-- Start:: row-10 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Menu alignment
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Right-aligned menu example
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><button class="dropdown-item" type="button">Action</button>
                                            </li>
                                            <li><button class="dropdown-item" type="button">Another
                                                    action</button></li>
                                            <li><button class="dropdown-item" type="button">Something else
                                                    here</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-group"&gt;
    &lt;button type="button" class="btn btn-primary dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Right-aligned menu example
    &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
        &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Action&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Another
                action&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Something else
                here&lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Responsive alignment end
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle text-wrap"
                                            data-bs-toggle="dropdown" data-bs-display="static"
                                            aria-expanded="false">
                                            Left-aligned but right aligned when large screen
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-lg-end">
                                            <li><button class="dropdown-item" type="button">Action</button>
                                            </li>
                                            <li><button class="dropdown-item" type="button">Another
                                                    action</button></li>
                                            <li><button class="dropdown-item" type="button">Something else
                                                    here</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-group"&gt;
    &lt;button type="button" class="btn btn-secondary dropdown-toggle text-wrap"
        data-bs-toggle="dropdown" data-bs-display="static"
        aria-expanded="false"&gt;
        Left-aligned but right aligned when large screen
    &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-menu-lg-end"&gt;
        &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Action&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Another
                action&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Something else
                here&lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Responsive alignment left
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle text-wrap"
                                            data-bs-toggle="dropdown" data-bs-display="static"
                                            aria-expanded="false">
                                            Left-aligned but right aligned when large screen
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-lg-start">
                                            <li><button class="dropdown-item" type="button">Action</button>
                                            </li>
                                            <li><button class="dropdown-item" type="button">Another
                                                    action</button></li>
                                            <li><button class="dropdown-item" type="button">Something else
                                                    here</button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-group"&gt;
    &lt;button type="button" class="btn btn-info dropdown-toggle text-wrap"
        data-bs-toggle="dropdown" data-bs-display="static"
        aria-expanded="false"&gt;
        Left-aligned but right aligned when large screen
    &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-menu-lg-start"&gt;
        &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Action&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Another
                action&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Something else
                here&lt;/button&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-10 -->

                    <!-- Start:: row-11 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Custom Dropdown Menu's
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <div class="btn-group">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Primary
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-primary">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                secondary
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-secondary">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                warning
                                            </button>
                                            <ul class="dropdown-menu dropmenu-item-warning">
                                                <li><a class="dropdown-item active" href="javascript:void(0);">Active</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                info
                                            </button>
                                            <ul class="dropdown-menu dropmenu-item-info">
                                                <li><a class="dropdown-item active" href="javascript:void(0);">Active</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-success-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                success
                                            </button>
                                            <ul class="dropdown-menu dropmenu-light-success">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item active" href="javascript:void(0);">Active</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-danger-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                danger
                                            </button>
                                            <ul class="dropdown-menu dropmenu-light-danger">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item active" href="javascript:void(0);">Active</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;div class="btn-group"&gt;
        &lt;button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Primary
        &lt;/button&gt;
        &lt;ul class="dropdown-menu dropdown-menu-primary"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
            secondary
        &lt;/button&gt;
        &lt;ul class="dropdown-menu dropdown-menu-secondary"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
            warning
        &lt;/button&gt;
        &lt;ul class="dropdown-menu dropmenu-item-warning"&gt;
            &lt;li&gt;&lt;a class="dropdown-item active" href="javascript:void(0);"&gt;Active&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
            info
        &lt;/button&gt;
        &lt;ul class="dropdown-menu dropmenu-item-info"&gt;
            &lt;li&gt;&lt;a class="dropdown-item active" href="javascript:void(0);"&gt;Active&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button class="btn btn-success-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
            success
        &lt;/button&gt;
        &lt;ul class="dropdown-menu dropmenu-light-success"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item active" href="javascript:void(0);"&gt;Active&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button class="btn btn-danger-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
            danger
        &lt;/button&gt;
        &lt;ul class="dropdown-menu dropmenu-light-danger"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item active" href="javascript:void(0);"&gt;Active&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
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
                                        Ghost Button Dropdowns
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary-ghost dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Primary
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary1-ghost dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Primary
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary2-ghost dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Primary
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary3-ghost dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Primary
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary-ghost dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Secondary
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success-ghost dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Success
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info-ghost dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Info
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning-ghost dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Warning
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger-ghost dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Danger
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary-ghost dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Primary
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary1-ghost dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Primary
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary2-ghost dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Primary
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary3-ghost dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Primary
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-secondary-ghost dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Secondary
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-success-ghost dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Success
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-info-ghost dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"&gt;
            Info
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-warning-ghost dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Warning
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-danger-ghost dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"&gt;
            Danger
        &lt;/button&gt;
        &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;
                &lt;hr class="dropdown-divider"&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-11 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
