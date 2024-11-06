
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
                                    <li class="breadcrumb-item active" aria-current="page">Buttons</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Buttons</h1>
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

                    <!--ROW-START-->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Light Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-primary-light btn-wave">Primary</button>
                                        <button type="button" class="btn btn-primary1-light btn-wave">Primary1</button>
                                        <button type="button" class="btn btn-primary2-light btn-wave">Primary2</button>
                                        <button type="button" class="btn btn-primary3-light btn-wave">Primary3</button>
                                        <button type="button" class="btn btn-secondary-light btn-wave">Secondary</button>
                                        <button type="button" class="btn btn-success-light btn-wave">Success</button>
                                        <button type="button" class="btn btn-danger-light btn-wave">Danger</button>
                                        <button type="button" class="btn btn-warning-light btn-wave">Warning</button>
                                        <button type="button" class="btn btn-info-light btn-wave">Info</button>
                                        <button type="button" class="btn btn-purple-light btn-wave">purple</button>
                                        <button type="button" class="btn btn-teal-light btn-wave">teal</button>
                                        <button type="button" class="btn btn-orange-light btn-wave">orange</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button type="button" class="btn btn-primary-light btn-wave"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary1-light btn-wave"&gt;Primary1&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary2-light btn-wave"&gt;Primary2&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary3-light btn-wave"&gt;Primary3&lt;/button&gt;
        &lt;button type="button" class="btn btn-secondary-light btn-wave"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="btn btn-success-light btn-wave"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="btn btn-danger-light btn-wave"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="btn btn-warning-light btn-wave"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="btn btn-info-light btn-wave"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="btn btn-purple-light btn-wave"&gt;purple&lt;/button&gt;
        &lt;button type="button" class="btn btn-teal-light btn-wave"&gt;teal&lt;/button&gt;
        &lt;button type="button" class="btn btn-orange-light btn-wave"&gt;orange&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Default Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-primary btn-wave">Primary</button>
                                        <button type="button" class="btn btn-primary1 btn-wave">Primary1</button>
                                        <button type="button" class="btn btn-primary2 btn-wave">Primary2</button>
                                        <button type="button" class="btn btn-primary3 btn-wave">Primary3</button>
                                        <button type="button" class="btn btn-secondary btn-wave">Secondary</button>
                                        <button type="button" class="btn btn-success btn-wave">Success</button>
                                        <button type="button" class="btn btn-danger btn-wave">Danger</button>
                                        <button type="button" class="btn btn-warning btn-wave">Warning</button>
                                        <button type="button" class="btn btn-info btn-wave">Info</button>
                                        <button type="button" class="btn btn-light btn-wave">Light</button>
                                        <button type="button" class="btn btn-dark btn-wave text-white">Dark</button>
                                        <button type="button" class="btn btn-link btn-wave">Link</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button type="button" class="btn btn-primary btn-wave"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary1 btn-wave"&gt;Primary1&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary2 btn-wave"&gt;Primary2&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary3 btn-wave"&gt;Primary3&lt;/button&gt;
        &lt;button type="button" class="btn btn-secondary btn-wave"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="btn btn-success btn-wave"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="btn btn-danger btn-wave"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="btn btn-warning btn-wave"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="btn btn-info btn-wave"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="btn btn-light btn-wave"&gt;Light&lt;/button&gt;
        &lt;button type="button" class="btn btn-dark btn-wave text-white"&gt;Dark&lt;/button&gt;
        &lt;button type="button" class="btn btn-link btn-wave"&gt;Link&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Light Rounded Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-primary-light rounded-pill btn-wave">Primary</button>
                                        <button type="button" class="btn btn-primary1-light rounded-pill btn-wave">Primary1</button>
                                        <button type="button" class="btn btn-primary2-light rounded-pill btn-wave">Primary2</button>
                                        <button type="button" class="btn btn-primary3-light rounded-pill btn-wave">Primary3</button>
                                        <button type="button" class="btn btn-secondary-light rounded-pill btn-wave">Secondary</button>
                                        <button type="button" class="btn btn-success-light rounded-pill btn-wave">Success</button>
                                        <button type="button" class="btn btn-danger-light rounded-pill btn-wave">Danger</button>
                                        <button type="button" class="btn btn-warning-light rounded-pill btn-wave">Warning</button>
                                        <button type="button" class="btn btn-info-light rounded-pill btn-wave">Info</button>
                                        <button type="button" class="btn btn-purple-light rounded-pill btn-wave">purple</button>
                                        <button type="button" class="btn btn-teal-light rounded-pill btn-wave">teal</button>
                                        <button type="button" class="btn btn-orange-light rounded-pill btn-wave">orange</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button type="button" class="btn btn-primary-light rounded-pill btn-wave"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary1-light rounded-pill btn-wave"&gt;Primary1&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary2-light rounded-pill btn-wave"&gt;Primary2&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary3-light rounded-pill btn-wave"&gt;Primary3&lt;/button&gt;
        &lt;button type="button" class="btn btn-secondary-light rounded-pill btn-wave"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="btn btn-success-light rounded-pill btn-wave"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="btn btn-danger-light rounded-pill btn-wave"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="btn btn-warning-light rounded-pill btn-wave"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="btn btn-info-light rounded-pill btn-wave"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="btn btn-purple-light rounded-pill btn-wave"&gt;purple&lt;/button&gt;
        &lt;button type="button" class="btn btn-teal-light rounded-pill btn-wave"&gt;teal&lt;/button&gt;
        &lt;button type="button" class="btn btn-orange-light rounded-pill btn-wave"&gt;orange&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Rounded Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-primary rounded-pill btn-wave">Primary</button>
                                        <button type="button" class="btn btn-primary1 rounded-pill btn-wave">Primary1</button>
                                        <button type="button" class="btn btn-primary2 rounded-pill btn-wave">Primary2</button>
                                        <button type="button" class="btn btn-primary3 rounded-pill btn-wave">Primary3</button>
                                        <button type="button" class="btn btn-secondary rounded-pill btn-wave">Secondary</button>
                                        <button type="button" class="btn btn-success rounded-pill btn-wave">Success</button>
                                        <button type="button" class="btn btn-danger rounded-pill btn-wave">Danger</button>
                                        <button type="button" class="btn btn-warning rounded-pill btn-wave">Warning</button>
                                        <button type="button" class="btn btn-info rounded-pill btn-wave">Info</button>
                                        <button type="button" class="btn btn-light rounded-pill btn-wave">Light</button>
                                        <button type="button" class="btn btn-dark rounded-pill btn-wave text-white">Dark</button>
                                        <button type="button" class="btn btn-link rounded-pill btn-wave">Link</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button type="button" class="btn btn-primary rounded-pill btn-wave"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary1 rounded-pill btn-wave"&gt;Primary1&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary2 rounded-pill btn-wave"&gt;Primary2&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary3 rounded-pill btn-wave"&gt;Primary3&lt;/button&gt;
        &lt;button type="button" class="btn btn-secondary rounded-pill btn-wave"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="btn btn-success rounded-pill btn-wave"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="btn btn-danger rounded-pill btn-wave"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="btn btn-warning rounded-pill btn-wave"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="btn btn-info rounded-pill btn-wave"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="btn btn-light rounded-pill btn-wave"&gt;Light&lt;/button&gt;
        &lt;button type="button" class="btn btn-dark rounded-pill btn-wave text-white"&gt;Dark&lt;/button&gt;
        &lt;button type="button" class="btn btn-link rounded-pill btn-wave"&gt;Link&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Outline Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-outline-primary btn-wave">Primary</button>
                                        <button type="button" class="btn btn-outline-primary1 btn-wave">Primary1</button>
                                        <button type="button" class="btn btn-outline-primary2 btn-wave">Primary2</button>
                                        <button type="button" class="btn btn-outline-primary3 btn-wave">Primary3</button>
                                        <button type="button" class="btn btn-outline-secondary btn-wave">Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-wave">Success</button>
                                        <button type="button" class="btn btn-outline-danger btn-wave">Danger</button>
                                        <button type="button" class="btn btn-outline-warning btn-wave">Warning</button>
                                        <button type="button" class="btn btn-outline-info btn-wave">Info</button>
                                        <button type="button" class="btn btn-outline-light btn-wave">Light</button>
                                        <button type="button" class="btn btn-outline-dark btn-wave">Dark</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button type="button" class="btn btn-outline-primary btn-wave"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-primary1 btn-wave"&gt;Primary1&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-primary2 btn-wave"&gt;Primary2&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-primary3 btn-wave"&gt;Primary3&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-secondary btn-wave"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-success btn-wave"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-danger btn-wave"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-warning btn-wave"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-info btn-wave"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-light btn-wave"&gt;Light&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-dark btn-wave"&gt;Dark&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Rounded Outline Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-outline-primary rounded-pill btn-wave">Primary</button>
                                        <button type="button" class="btn btn-outline-primary1 rounded-pill btn-wave">Primary1</button>
                                        <button type="button" class="btn btn-outline-primary2 rounded-pill btn-wave">Primary2</button>
                                        <button type="button" class="btn btn-outline-primary3 rounded-pill btn-wave">Primary3</button>
                                        <button type="button" class="btn btn-outline-secondary rounded-pill btn-wave">Secondary</button>
                                        <button type="button" class="btn btn-outline-success rounded-pill btn-wave">Success</button>
                                        <button type="button" class="btn btn-outline-danger rounded-pill btn-wave">Danger</button>
                                        <button type="button" class="btn btn-outline-warning rounded-pill btn-wave">Warning</button>
                                        <button type="button" class="btn btn-outline-info rounded-pill btn-wave">Info</button>
                                        <button type="button" class="btn btn-outline-light rounded-pill btn-wave">Light</button>
                                        <button type="button" class="btn btn-outline-dark rounded-pill btn-wave">Dark</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button type="button" class="btn btn-outline-primary rounded-pill btn-wave"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-primary1 rounded-pill btn-wave"&gt;Primary1&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-primary2 rounded-pill btn-wave"&gt;Primary2&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-primary3 rounded-pill btn-wave"&gt;Primary3&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-secondary rounded-pill btn-wave"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-success rounded-pill btn-wave"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-danger rounded-pill btn-wave"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-warning rounded-pill btn-wave"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-info rounded-pill btn-wave"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-light rounded-pill btn-wave"&gt;Light&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-dark rounded-pill btn-wave"&gt;Dark&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Gradient Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-primary-gradient btn-wave">Primary</button>
                                        <button type="button" class="btn btn-primary1-gradient btn-wave">Primary1</button>
                                        <button type="button" class="btn btn-primary2-gradient btn-wave">Primary2</button>
                                        <button type="button" class="btn btn-primary3-gradient btn-wave">Primary3</button>
                                        <button type="button" class="btn btn-secondary-gradient btn-wave">Secondary</button>
                                        <button type="button" class="btn btn-success-gradient btn-wave">Success</button>
                                        <button type="button" class="btn btn-danger-gradient btn-wave">Danger</button>
                                        <button type="button" class="btn btn-warning-gradient btn-wave">Warning</button>
                                        <button type="button" class="btn btn-info-gradient btn-wave">Info</button>
                                        <button type="button" class="btn btn-orange-gradient btn-wave">Orange</button>
                                        <button type="button" class="btn btn-purple-gradient btn-wave">Purple</button>
                                        <button type="button" class="btn btn-teal-gradient btn-wave">Teal</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button type="button" class="btn btn-primary-gradient btn-wave"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary1-gradient btn-wave"&gt;Primary1&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary2-gradient btn-wave"&gt;Primary2&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary3-gradient btn-wave"&gt;Primary3&lt;/button&gt;
        &lt;button type="button" class="btn btn-secondary-gradient btn-wave"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="btn btn-success-gradient btn-wave"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="btn btn-danger-gradient btn-wave"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="btn btn-warning-gradient btn-wave"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="btn btn-info-gradient btn-wave"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="btn btn-orange-gradient btn-wave"&gt;Orange&lt;/button&gt;
        &lt;button type="button" class="btn btn-purple-gradient btn-wave"&gt;Purple&lt;/button&gt;
        &lt;button type="button" class="btn btn-teal-gradient btn-wave"&gt;Teal&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Rounded Gradient Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-primary-gradient rounded-pill btn-wave">Primary</button>
                                        <button type="button" class="btn btn-primary1-gradient rounded-pill btn-wave">Primary1</button>
                                        <button type="button" class="btn btn-primary2-gradient rounded-pill btn-wave">Primary2</button>
                                        <button type="button" class="btn btn-primary3-gradient rounded-pill btn-wave">Primary3</button>
                                        <button type="button" class="btn btn-secondary-gradient rounded-pill btn-wave">Secondary</button>
                                        <button type="button" class="btn btn-success-gradient rounded-pill btn-wave">Success</button>
                                        <button type="button" class="btn btn-danger-gradient rounded-pill btn-wave">Danger</button>
                                        <button type="button" class="btn btn-warning-gradient rounded-pill btn-wave">Warning</button>
                                        <button type="button" class="btn btn-info-gradient rounded-pill btn-wave">Info</button>
                                        <button type="button" class="btn btn-orange-gradient rounded-pill btn-wave">Orange</button>
                                        <button type="button" class="btn btn-purple-gradient rounded-pill btn-wave">Purple</button>
                                        <button type="button" class="btn btn-teal-gradient rounded-pill btn-wave">Teal</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button type="button" class="btn btn-primary-gradient rounded-pill btn-wave"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary1-gradient rounded-pill btn-wave"&gt;Primary1&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary2-gradient rounded-pill btn-wave"&gt;Primary2&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary3-gradient rounded-pill btn-wave"&gt;Primary3&lt;/button&gt;
        &lt;button type="button" class="btn btn-secondary-gradient rounded-pill btn-wave"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="btn btn-success-gradient rounded-pill btn-wave"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="btn btn-danger-gradient rounded-pill btn-wave"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="btn btn-warning-gradient rounded-pill btn-wave"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="btn btn-info-gradient rounded-pill btn-wave"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="btn btn-orange-gradient rounded-pill btn-wave"&gt;Orange&lt;/button&gt;
        &lt;button type="button" class="btn btn-purple-gradient rounded-pill btn-wave"&gt;Purple&lt;/button&gt;
        &lt;button type="button" class="btn btn-teal-gradient rounded-pill btn-wave"&gt;Teal&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Ghost Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-primary-ghost btn-wave">Primary</button>
                                        <button type="button" class="btn btn-primary1-ghost btn-wave">Primary1</button>
                                        <button type="button" class="btn btn-primary2-ghost btn-wave">Primary2</button>
                                        <button type="button" class="btn btn-primary3-ghost btn-wave">Primary3</button>
                                        <button type="button" class="btn btn-secondary-ghost btn-wave">Secondary</button>
                                        <button type="button" class="btn btn-success-ghost btn-wave">Success</button>
                                        <button type="button" class="btn btn-danger-ghost btn-wave">Danger</button>
                                        <button type="button" class="btn btn-warning-ghost btn-wave">Warning</button>
                                        <button type="button" class="btn btn-info-ghost btn-wave">Info</button>
                                        <button type="button" class="btn btn-orange-ghost btn-wave">Orange</button>
                                        <button type="button" class="btn btn-purple-ghost btn-wave">Purple</button>
                                        <button type="button" class="btn btn-teal-ghost btn-wave">Teal</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button type="button" class="btn btn-primary-ghost btn-wave"&gt;Primary&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary1-ghost btn-wave"&gt;Primary1&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary2-ghost btn-wave"&gt;Primary2&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary3-ghost btn-wave"&gt;Primary3&lt;/button&gt;
        &lt;button type="button" class="btn btn-secondary-ghost btn-wave"&gt;Secondary&lt;/button&gt;
        &lt;button type="button" class="btn btn-success-ghost btn-wave"&gt;Success&lt;/button&gt;
        &lt;button type="button" class="btn btn-danger-ghost btn-wave"&gt;Danger&lt;/button&gt;
        &lt;button type="button" class="btn btn-warning-ghost btn-wave"&gt;Warning&lt;/button&gt;
        &lt;button type="button" class="btn btn-info-ghost btn-wave"&gt;Info&lt;/button&gt;
        &lt;button type="button" class="btn btn-orange-ghost btn-wave"&gt;Orange&lt;/button&gt;
        &lt;button type="button" class="btn btn-purple-ghost btn-wave"&gt;Purple&lt;/button&gt;
        &lt;button type="button" class="btn btn-teal-ghost btn-wave"&gt;Teal&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Button tags
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <a class="btn btn-primary btn-wave" href="javascript:void(0);" role="button">Link</a>
                                        <button class="btn btn-secondary btn-wave" type="submit">Button</button>
                                        <input class="btn btn-info" type="button" value="Input">
                                        <input class="btn btn-warning" type="submit" value="Submit">
                                        <input class="btn btn-success" type="reset" value="Reset">
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;a class="btn btn-primary btn-wave" href="javascript:void(0);" role="button"&gt;Link&lt;/a&gt;
        &lt;button class="btn btn-secondary btn-wave" type="submit"&gt;Button&lt;/button&gt;
        &lt;input class="btn btn-info" type="button" value="Input"&gt;
        &lt;input class="btn btn-warning" type="submit" value="Submit"&gt;
        &lt;input class="btn btn-success" type="reset" value="Reset"&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        disabled state with anchor tags
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <div class="mb-4">
                                            <button type="button" class="btn btn-primary" disabled="">Primary
                                                button</button>
                                            <button type="button" class="btn btn-secondary" disabled="">Button</button>
                                            <button type="button" class="btn btn-outline-primary" disabled="">Primary
                                                button</button>
                                            <button type="button" class="btn btn-outline-secondary" disabled="">Button</button>
                                        </div>

                                        <div>
                                            <a class="btn btn-primary disabled" role="button" aria-disabled="true">Primary
                                                link</a>
                                            <a class="btn btn-secondary disabled" role="button" aria-disabled="true">Link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;div class="mb-4"&gt;
            &lt;button type="button" class="btn btn-primary" disabled=""&gt;Primary
                button&lt;/button&gt;
            &lt;button type="button" class="btn btn-secondary" disabled=""&gt;Button&lt;/button&gt;
            &lt;button type="button" class="btn btn-outline-primary" disabled=""&gt;Primary
                button&lt;/button&gt;
            &lt;button type="button" class="btn btn-outline-secondary" disabled=""&gt;Button&lt;/button&gt;
        &lt;/div&gt;

        &lt;div&gt;
            &lt;a class="btn btn-primary disabled" role="button" aria-disabled="true"&gt;Primary
                link&lt;/a&gt;
            &lt;a class="btn btn-secondary disabled" role="button" aria-disabled="true"&gt;Link&lt;/a&gt;
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
                                        button plugin toggle states
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <div class="mb-4">
                                            <button type="button" class="btn btn-primary btn-wave" data-bs-toggle="button"
                                                >Toggle button</button>
                                            <button type="button" class="btn btn-secondary active btn-wave" data-bs-toggle="button"
                                                aria-pressed="true">Active toggle button</button>
                                            <button type="button" class="btn btn-teal btn-wave" disabled data-bs-toggle="button"
                                                >Disabled toggle
                                                button</button>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-wave" role="button" data-bs-toggle="button">Toggle
                                                link</a>
                                            <a href="javascript:void(0);" class="btn btn-secondary active btn-wave" role="button" data-bs-toggle="button"
                                                aria-pressed="true">Active toggle link</a>
                                            <a class="btn btn-teal disabled btn-wave" aria-disabled="true" role="button"
                                                data-bs-toggle="button">Disabled toggle link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;div class="mb-4"&gt;
            &lt;button type="button" class="btn btn-primary btn-wave" data-bs-toggle="button"
                &gt;Toggle button&lt;/button&gt;
            &lt;button type="button" class="btn btn-secondary active btn-wave" data-bs-toggle="button"
                aria-pressed="true"&gt;Active toggle button&lt;/button&gt;
            &lt;button type="button" class="btn btn-teal btn-wave" disabled data-bs-toggle="button"
                &gt;Disabled toggle
                button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;a href="javascript:void(0);" class="btn btn-primary btn-wave" role="button" data-bs-toggle="button"&gt;Toggle
                link&lt;/a&gt;
            &lt;a href="javascript:void(0);" class="btn btn-secondary active btn-wave" role="button" data-bs-toggle="button"
                aria-pressed="true"&gt;Active toggle link&lt;/a&gt;
            &lt;a class="btn btn-teal disabled btn-wave" aria-disabled="true" role="button"
                data-bs-toggle="button"&gt;Disabled toggle link&lt;/a&gt;
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
                                        Link functionally caveat
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <a class="btn btn-primary disabled" tabindex="-1" role="button"
                                            aria-disabled="true">Primary link</a>
                                        <a class="btn btn-secondary disabled" tabindex="-1" role="button"
                                            aria-disabled="true">Link</a>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;a class="btn btn-primary disabled" tabindex="-1" role="button"
            aria-disabled="true"&gt;Primary link&lt;/a&gt;
        &lt;a class="btn btn-secondary disabled" tabindex="-1" role="button"
            aria-disabled="true"&gt;Link&lt;/a&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Loading Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list d-md-flex flex-wrap">
                                        <button class="btn btn-primary btn-loader">
                                            <span class="me-2">Loading</span>
                                            <span class="loading"><i class="ri-loader-2-fill fs-16"></i></span>
                                        </button>
                                        <button class="btn btn-outline-secondary btn-loader">
                                            <span class="me-2">Loading</span>
                                            <span class="loading"><i class="ri-loader-2-fill fs-16"></i></span>
                                        </button>
                                        <button class="btn btn-info-light btn-loader">
                                            <span class="me-2">Loading</span>
                                            <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                        </button>
                                        <button class="btn btn-warning-light btn-loader">
                                            <span class="me-2">Loading</span>
                                            <span class="loading"><i class="ri-loader-5-line fs-16"></i></span>
                                        </button>
                                        <button class="btn btn-success btn-loader disabled">
                                            <span class="me-2">Disabled</span>
                                            <span class="loading"><i class="ri-refresh-line fs-16"></i></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list d-md-flex flex-wrap"&gt;
        &lt;button class="btn btn-primary btn-loader"&gt;
            &lt;span class="me-2"&gt;Loading&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-loader-2-fill fs-16"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;button class="btn btn-outline-secondary btn-loader"&gt;
            &lt;span class="me-2"&gt;Loading&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-loader-2-fill fs-16"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;button class="btn btn-info-light btn-loader"&gt;
            &lt;span class="me-2"&gt;Loading&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-loader-4-line fs-16"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;button class="btn btn-warning-light btn-loader"&gt;
            &lt;span class="me-2"&gt;Loading&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-loader-5-line fs-16"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;button class="btn btn-success btn-loader disabled"&gt;
            &lt;span class="me-2"&gt;Disabled&lt;/span&gt;
            &lt;span class="loading"&gt;&lt;i class="ri-refresh-line fs-16"&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Icon Buttons</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list d-md-flex d-block">
                                        <div class="mb-md-0 mb-2">
                                            <button class="btn btn-icon btn-primary btn-wave">
                                                <i class="ri-bank-fill"></i>
                                            </button>
                                            <button class="btn btn-icon btn-info btn-wave">
                                                <i class="ri-medal-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-danger btn-wave">
                                                <i class="ri-archive-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-warning btn-wave me-5">
                                                <i class="ri-calendar-2-line"></i>
                                            </button>
                                        </div>
                                        <div class="mb-md-0 mb-2">
                                            <button class="btn btn-icon btn-primary-light rounded-pill btn-wave">
                                                <i class="ri-home-smile-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-secondary-light rounded-pill btn-wave">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-success-light rounded-pill btn-wave">
                                                <i class="ri-notification-3-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-danger-light rounded-pill btn-wave me-5">
                                                <i class="ri-chat-settings-line"></i>
                                            </button>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-icon btn-outline-primary rounded-pill btn-wave">
                                                <i class="ri-phone-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-outline-teal rounded-pill btn-wave">
                                                <i class="ri-customer-service-2-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-outline-success rounded-pill btn-wave">
                                                <i class="ri-live-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-outline-secondary rounded-pill btn-wave">
                                                <i class="ri-save-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list d-md-flex d-block"&gt;
        &lt;div class="mb-md-0 mb-2"&gt;
            &lt;button class="btn btn-icon btn-primary btn-wave"&gt;
                &lt;i class="ri-bank-fill"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-info btn-wave"&gt;
                &lt;i class="ri-medal-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-danger btn-wave"&gt;
                &lt;i class="ri-archive-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-warning btn-wave me-5"&gt;
                &lt;i class="ri-calendar-2-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="mb-md-0 mb-2"&gt;
            &lt;button class="btn btn-icon btn-primary-light rounded-pill btn-wave"&gt;
                &lt;i class="ri-home-smile-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-secondary-light rounded-pill btn-wave"&gt;
                &lt;i class="ri-delete-bin-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-success-light rounded-pill btn-wave"&gt;
                &lt;i class="ri-notification-3-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-danger-light rounded-pill btn-wave me-5"&gt;
                &lt;i class="ri-chat-settings-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=""&gt;
            &lt;button class="btn btn-icon btn-outline-primary rounded-pill btn-wave"&gt;
                &lt;i class="ri-phone-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-outline-teal rounded-pill btn-wave"&gt;
                &lt;i class="ri-customer-service-2-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-outline-success rounded-pill btn-wave"&gt;
                &lt;i class="ri-live-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-outline-secondary rounded-pill btn-wave"&gt;
                &lt;i class="ri-save-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt; </code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Icon Button Sizes</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list d-md-flex d-block gap-5">
                                        <div class="mb-md-0 mb-2">
                                            <button class="btn btn-sm btn-icon btn-primary btn-wave">
                                                <i class="ri-bank-fill"></i>
                                            </button>
                                            <button class="btn btn-icon btn-info btn-wave">
                                                <i class="ri-medal-line"></i>
                                            </button>
                                            <button class="btn btn-lg btn-icon btn-danger btn-wave">
                                                <i class="ri-archive-line"></i>
                                            </button>
                                        </div>
                                        <div class="mb-md-0 mb-2">
                                            <button class="btn btn-sm btn-icon btn-primary-light rounded-pill btn-wave">
                                                <i class="ri-home-smile-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-secondary-light rounded-pill btn-wave">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <button class="btn btn-lg btn-icon btn-success-light rounded-pill btn-wave">
                                                <i class="ri-notification-3-line"></i>
                                            </button>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-sm btn-icon btn-outline-primary rounded-pill btn-wave">
                                                <i class="ri-phone-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-outline-teal rounded-pill btn-wave">
                                                <i class="ri-customer-service-2-line"></i>
                                            </button>
                                            <button class="btn btn-lg btn-icon btn-outline-success rounded-pill btn-wave">
                                                <i class="ri-live-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list d-md-flex d-block"&gt;
        &lt;div class="mb-md-0 mb-2"&gt;
            &lt;button class="btn btn-icon btn-primary btn-wave"&gt;
                &lt;i class="ri-bank-fill"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-info btn-wave"&gt;
                &lt;i class="ri-medal-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-danger btn-wave"&gt;
                &lt;i class="ri-archive-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="mb-md-0 mb-2"&gt;
            &lt;button class="btn btn-icon btn-primary-light rounded-pill btn-wave"&gt;
                &lt;i class="ri-home-smile-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-secondary-light rounded-pill btn-wave"&gt;
                &lt;i class="ri-delete-bin-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-success-light rounded-pill btn-wave"&gt;
                &lt;i class="ri-notification-3-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=""&gt;
            &lt;button class="btn btn-icon btn-outline-primary rounded-pill btn-wave"&gt;
                &lt;i class="ri-phone-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-outline-teal rounded-pill btn-wave"&gt;
                &lt;i class="ri-customer-service-2-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;button class="btn btn-icon btn-outline-success rounded-pill btn-wave"&gt;
                &lt;i class="ri-live-line"&gt;&lt;/i&gt;
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt; </code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Social Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button class="btn btn-icon btn-facebook btn-wave">
                                            <i class="ri-facebook-line"></i>
                                        </button>
                                        <button class="btn btn-icon btn-twitter btn-wave">
                                            <i class="ri-twitter-x-line"></i>
                                        </button>
                                        <button class="btn btn-icon btn-instagram btn-wave">
                                            <i class="ri-instagram-line"></i>
                                        </button>
                                        <button class="btn btn-icon btn-github btn-wave">
                                            <i class="ri-github-line"></i>
                                        </button>
                                        <button class="btn btn-icon btn-youtube btn-wave">
                                            <i class="ri-youtube-line"></i>
                                        </button>
                                        <button class="btn btn-icon btn-google btn-wave">
                                            <i class="ri-google-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button class="btn btn-icon btn-facebook btn-wave"&gt;
            &lt;i class="ri-facebook-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button class="btn btn-icon btn-twitter btn-wave"&gt;
            &lt;i class="ri-twitter-x-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button class="btn btn-icon btn-instagram btn-wave"&gt;
            &lt;i class="ri-instagram-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button class="btn btn-icon btn-github btn-wave"&gt;
            &lt;i class="ri-github-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button class="btn btn-icon btn-youtube btn-wave"&gt;
            &lt;i class="ri-youtube-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button class="btn btn-icon btn-google btn-wave"&gt;
            &lt;i class="ri-google-line"&gt;&lt;/i&gt;
        &lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Sizes
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-primary btn-sm btn-wave">Small
                                                    button</button>
                                                <button type="button" class="btn btn-secondary btn-wave">Default
                                                    button</button>
                                                <button type="button" class="btn btn-success btn-lg btn-wave">Large
                                                    button</button>
                                            </div>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button type="button" class="btn btn-primary btn-sm btn-wave"&gt;Small
            button&lt;/button&gt;
        &lt;button type="button" class="btn btn-secondary btn-wave"&gt;Default
            button&lt;/button&gt;
        &lt;button type="button" class="btn btn-success btn-lg btn-wave"&gt;Large
            button&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Button Widths
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-primary btn-w-xs btn-wave">XS</button>
                                                <button type="button" class="btn btn-secondary btn-w-sm btn-wave">SM</button>
                                                <button type="button" class="btn btn-warning btn-w-md btn-wave">MD</button>
                                                <button type="button" class="btn btn-info btn-w-lg btn-wave">LG</button>
                                            </div>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button type="button" class="btn btn-primary btn-w-xs btn-wave"&gt;XS&lt;/button&gt;
        &lt;button type="button" class="btn btn-secondary btn-w-sm btn-wave"&gt;SM&lt;/button&gt;
        &lt;button type="button" class="btn btn-warning btn-w-md btn-wave"&gt;MD&lt;/button&gt;
        &lt;button type="button" class="btn btn-info btn-w-lg btn-wave"&gt;LG&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Buttons With Different Shadows
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list d-flex">
                                        <div class="me-5">
                                            <button class="btn btn-primary shadow-sm btn-wave">Button</button>
                                            <button class="btn btn-primary shadow btn-wave">Button</button>
                                            <button class="btn btn-primary shadow-lg btn-wave">Button</button>
                                        </div>
                                        <div>
                                            <button class="btn btn-secondary btn-sm shadow-sm btn-wave">Button</button>
                                            <button class="btn btn-info shadow btn-wave">Button</button>
                                            <button class="btn btn-lg btn-success shadow-lg btn-wave">Button</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list d-flex"&gt;
        &lt;div class="me-5"&gt;
            &lt;button class="btn btn-primary shadow-sm btn-wave"&gt;Button&lt;/button&gt;
            &lt;button class="btn btn-primary shadow btn-wave"&gt;Button&lt;/button&gt;
            &lt;button class="btn btn-primary shadow-lg btn-wave"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;button class="btn btn-secondary btn-sm shadow-sm btn-wave"&gt;Button&lt;/button&gt;
            &lt;button class="btn btn-info shadow btn-wave"&gt;Button&lt;/button&gt;
            &lt;button class="btn btn-lg btn-success shadow-lg btn-wave"&gt;Button&lt;/button&gt;
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
                                        Different Colored Buttons With Shadows
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button class="btn btn-primary shadow-primary btn-wave">Button</button>
                                        <button class="btn btn-primary1 shadow-primary1 btn-wave">Button</button>
                                        <button class="btn btn-primary2 shadow-primary2 btn-wave">Button</button>
                                        <button class="btn btn-primary3 shadow-primary3 btn-wave">Button</button>
                                        <button class="btn btn-secondary shadow-secondary btn-wave">Button</button>
                                        <button class="btn btn-success shadow-success btn-wave">Button</button>
                                        <button class="btn btn-info shadow-info btn-wave">Button</button>
                                        <button class="btn btn-warning shadow-warning btn-wave">Button</button>
                                        <button class="btn btn-danger shadow-danger btn-wave">Button</button>
                                        <button class="btn btn-purple shadow-purple btn-wave">Button</button>
                                        <button class="btn btn-orange shadow-orange btn-wave">Button</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button class="btn btn-primary shadow-primary btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-primary1 shadow-primary1 btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-primary2 shadow-primary2 btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-primary3 shadow-primary3 btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-secondary shadow-secondary btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-success shadow-success btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-info shadow-info btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-warning shadow-warning btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-danger shadow-danger btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-purple shadow-purple btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-orange shadow-orange btn-wave"&gt;Button&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Raised Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button class="btn btn-primary btn-raised-shadow btn-wave">Button</button>
                                        <button class="btn btn-primary1 btn-raised-shadow btn-wave">Button</button>
                                        <button class="btn btn-primary2 btn-raised-shadow btn-wave">Button</button>
                                        <button class="btn btn-primary3 btn-raised-shadow btn-wave">Button</button>
                                        <button class="btn btn-secondary btn-raised-shadow btn-wave">Button</button>
                                        <button class="btn btn-success btn-raised-shadow btn-wave">Button</button>
                                        <button class="btn btn-info btn-raised-shadow btn-wave">Button</button>
                                        <button class="btn btn-warning btn-raised-shadow btn-wave">Button</button>
                                        <button class="btn btn-danger btn-raised-shadow btn-wave">Button</button>
                                        <button class="btn btn-purple btn-raised-shadow btn-wave">Button</button>
                                        <button class="btn btn-orange btn-raised-shadow btn-wave">Button</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button class="btn btn-primary btn-raised-shadow btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-primary1 btn-raised-shadow btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-primary2 btn-raised-shadow btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-primary3 btn-raised-shadow btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-secondary btn-raised-shadow btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-success btn-raised-shadow btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-info btn-raised-shadow btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-warning btn-raised-shadow btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-danger btn-raised-shadow btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-purple btn-raised-shadow btn-wave"&gt;Button&lt;/button&gt;
        &lt;button class="btn btn-orange btn-raised-shadow btn-wave"&gt;Button&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Label Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button class="btn btn-primary label-btn">
                                            <i class="ri-chat-smile-line label-btn-icon me-2"></i>
                                            Primary
                                        </button>
                                        <button class="btn btn-secondary label-btn">
                                            <i class="ri-settings-4-line label-btn-icon me-2"></i>
                                            Secondary
                                        </button>
                                        <button class="btn btn-warning label-btn rounded-pill">
                                            <i class="ri-spam-2-line label-btn-icon me-2 rounded-pill"></i>
                                            Warning
                                        </button>
                                        <button class="btn btn-info label-btn rounded-pill">
                                            <i class="ri-phone-line label-btn-icon me-2 rounded-pill"></i>
                                            Info
                                        </button>
                                        <button class="btn btn-success label-btn label-end">
                                            Success
                                            <i class="ri-thumb-up-line label-btn-icon ms-2"></i>
                                        </button>
                                        <button class="btn btn-danger label-btn label-end rounded-pill">
                                            Cancel
                                            <i class="ri-close-line label-btn-icon ms-2 rounded-pill"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button class="btn btn-primary label-btn"&gt;
            &lt;i class="ri-chat-smile-line label-btn-icon me-2"&gt;&lt;/i&gt;
            Primary
        &lt;/button&gt;
        &lt;button class="btn btn-secondary label-btn"&gt;
            &lt;i class="ri-settings-4-line label-btn-icon me-2"&gt;&lt;/i&gt;
            Secondary
        &lt;/button&gt;
        &lt;button class="btn btn-warning label-btn rounded-pill"&gt;
            &lt;i class="ri-spam-2-line label-btn-icon me-2 rounded-pill"&gt;&lt;/i&gt;
            Warning
        &lt;/button&gt;
        &lt;button class="btn btn-info label-btn rounded-pill"&gt;
            &lt;i class="ri-phone-line label-btn-icon me-2 rounded-pill"&gt;&lt;/i&gt;
            Info
        &lt;/button&gt;
        &lt;button class="btn btn-success label-btn label-end"&gt;
            Success
            &lt;i class="ri-thumb-up-line label-btn-icon ms-2"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button class="btn btn-danger label-btn label-end rounded-pill"&gt;
            Cancel
            &lt;i class="ri-close-line label-btn-icon ms-2 rounded-pill"&gt;&lt;/i&gt;
        &lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Custom Buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button class="btn btn-info custom-button rounded-pill">
                                            <span class="custom-btn-icons"><i class="ri-twitter-x-line text-info"></i></span>
                                            Twitter
                                        </button>
                                        <button class="btn btn-teal-light btn-border-down">Border</button>
                                        <button class="btn btn-secondary-light btn-border-start">Border</button>
                                        <button class="btn btn-purple-light btn-border-end">Border</button>
                                        <button class="btn btn-warning-light btn-border-top">Border</button>
                                        <button class="btn btn-secondary btn-glare"><span>Glare Button</span></button>
                                        <button class="btn btn-danger btn-hover btn-hover-animate">Like</button>
                                        <button class="btn btn-success btn-darken-hover">Hover</button>
                                        <button class="btn btn-orange btn-custom-border">Hover</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;button class="btn btn-info custom-button rounded-pill"&gt;
            &lt;span class="custom-btn-icons"&gt;&lt;i class="ri-twitter-x-line text-info"&gt;&lt;/i&gt;&lt;/span&gt;
            Twitter
        &lt;/button&gt;
        &lt;button class="btn btn-teal-light btn-border-down"&gt;Border&lt;/button&gt;
        &lt;button class="btn btn-secondary-light btn-border-start"&gt;Border&lt;/button&gt;
        &lt;button class="btn btn-purple-light btn-border-end"&gt;Border&lt;/button&gt;
        &lt;button class="btn btn-warning-light btn-border-top"&gt;Border&lt;/button&gt;
        &lt;button class="btn btn-secondary btn-glare"&gt;&lt;span&gt;Glare Button&lt;/span&gt;&lt;/button&gt;
        &lt;button class="btn btn-danger btn-hover btn-hover-animate"&gt;Like&lt;/button&gt;
        &lt;button class="btn btn-success btn-darken-hover"&gt;Hover&lt;/button&gt;
        &lt;button class="btn btn-orange btn-custom-border"&gt;Hover&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Block buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <div class="d-grid gap-2 mb-4">
                                            <button class="btn btn-primary btn-wave" type="button">Button</button>
                                            <button class="btn btn-secondary btn-wave" type="button">Button</button>
                                        </div>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-info btn-wave" type="button">Button</button>
                                            <button class="btn btn-success btn-wave" type="button">Button</button>
                                        </div>
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button class="btn btn-danger btn-wave" type="button">Button</button>
                                            <button class="btn btn-warning btn-wave" type="button">Button</button>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-teal me-md-2 btn-wave" type="button">Button</button>
                                            <button class="btn btn-purple btn-wave" type="button">Button</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-list"&gt;
        &lt;div class="d-grid gap-2 mb-4"&gt;
            &lt;button class="btn btn-primary btn-wave" type="button"&gt;Button&lt;/button&gt;
            &lt;button class="btn btn-secondary btn-wave" type="button"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="d-grid gap-2 d-md-block"&gt;
            &lt;button class="btn btn-info btn-wave" type="button"&gt;Button&lt;/button&gt;
            &lt;button class="btn btn-success btn-wave" type="button"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="d-grid gap-2 col-6 mx-auto"&gt;
            &lt;button class="btn btn-danger btn-wave" type="button"&gt;Button&lt;/button&gt;
            &lt;button class="btn btn-warning btn-wave" type="button"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="d-grid gap-2 d-md-flex justify-content-md-end"&gt;
            &lt;button class="btn btn-teal me-md-2 btn-wave" type="button"&gt;Button&lt;/button&gt;
            &lt;button class="btn btn-purple btn-wave" type="button"&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--ROW-END-->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
        
        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
