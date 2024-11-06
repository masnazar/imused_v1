
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Links & Interactions</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Links & Interactions</h1>
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
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                LINK HOVER OPACITY
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p><a class="link-opacity-10-hover" href="javascript:void(0)">Link hover opacity 10</a></p>
                                            <p><a class="link-opacity-25-hover" href="javascript:void(0)">Link hover opacity 25</a></p>
                                            <p><a class="link-opacity-50-hover" href="javascript:void(0)">Link hover opacity 50</a></p>
                                            <p><a class="link-opacity-75-hover" href="javascript:void(0)">Link hover opacity 75</a></p>
                                            <p class="mb-0"><a class="link-opacity-100-hover" href="javascript:void(0)">Link hover opacity 100</a></p>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
        <!-- Prism Code -->
        <pre class="language-html"><code class="language-html"> &lt;p&gt;&lt;a class="link-opacity-10-hover" href="javascript:void(0)"&gt;Link hover opacity 10&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a class="link-opacity-25-hover" href="javascript:void(0)"&gt;Link hover opacity 25&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a class="link-opacity-50-hover" href="javascript:void(0)"&gt;Link hover opacity 50&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a class="link-opacity-75-hover" href="javascript:void(0)"&gt;Link hover opacity 75&lt;/a&gt;&lt;/p&gt;
            &lt;p class="mb-0"&gt;&lt;a class="link-opacity-100-hover" href="javascript:void(0)"&gt;Link hover opacity 100&lt;/a&gt;&lt;/p&gt;</code></pre>
        <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">LINK UNDERLINE OFFSET</div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p><a href="javascript:void(0)" class="text-decoration-underline">Default link</a></p>
                                            <p><a class="link-offset-1 text-decoration-underline" href="javascript:void(0)">Offset 1 link</a></p>
                                            <p><a class="link-offset-2 text-decoration-underline" href="javascript:void(0)">Offset 2 link</a></p>
                                            <p class="mb-0"><a class="link-offset-3 text-decoration-underline" href="javascript:void(0)">Offset 3 link</a></p>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
        <!-- Prism Code -->
        <pre class="language-html"><code class="language-html"> &lt;p&gt;&lt;a href="javascript:void(0)" class="text-decoration-underline"&gt;Default link&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a class="link-offset-1 text-decoration-underline" href="javascript:void(0)"&gt;Offset 1 link&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a class="link-offset-2 text-decoration-underline" href="javascript:void(0)"&gt;Offset 2 link&lt;/a&gt;&lt;/p&gt;
            &lt;p class="mb-0"&gt;&lt;a class="link-offset-3 text-decoration-underline" href="javascript:void(0)"&gt;Offset 3 link&lt;/a&gt;&lt;/p&gt;</code></pre>
        <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                LINK UNDERLINE OPACITY
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p><a class="text-decoration-underline link-offset-2 link-underline link-underline-opacity-0" href="javascript:void(0)">Underline opacity 0</a></p>
                                            <p><a class="text-decoration-underline link-offset-2 link-underline link-underline-opacity-10" href="javascript:void(0)">Underline opacity 10</a></p>
                                            <p><a class="text-decoration-underline link-offset-2 link-underline link-underline-opacity-25" href="javascript:void(0)">Underline opacity 25</a></p>
                                            <p><a class="text-decoration-underline link-offset-2 link-underline link-underline-opacity-50" href="javascript:void(0)">Underline opacity 50</a></p>
                                            <p><a class="text-decoration-underline link-offset-2 link-underline link-underline-opacity-75" href="javascript:void(0)">Underline opacity 75</a></p>
                                            <p><a class="text-decoration-underline link-offset-2 link-underline link-underline-opacity-100" href="javascript:void(0)">Underline opacity 100</a></p>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
        <!-- Prism Code -->
        <pre class="language-html"><code class="language-html"> &lt;p&gt;&lt;a class="text-decoration-underline link-offset-2 link-underline link-underline-opacity-0" href="javascript:void(0)"&gt;Underline opacity 0&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a class="text-decoration-underline link-offset-2 link-underline link-underline-opacity-10" href="javascript:void(0)"&gt;Underline opacity 10&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a class="text-decoration-underline link-offset-2 link-underline link-underline-opacity-25" href="javascript:void(0)"&gt;Underline opacity 25&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a class="text-decoration-underline link-offset-2 link-underline link-underline-opacity-50" href="javascript:void(0)"&gt;Underline opacity 50&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a class="text-decoration-underline link-offset-2 link-underline link-underline-opacity-75" href="javascript:void(0)"&gt;Underline opacity 75&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a class="text-decoration-underline link-offset-2 link-underline link-underline-opacity-100" href="javascript:void(0)"&gt;Underline opacity 100&lt;/a&gt;&lt;/p&gt;</code></pre>
        <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                COLORED LINKS
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p><a href="javascript:void(0)" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Primary link</a></p>
                                            <p><a href="javascript:void(0)" class="link-primary1 link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Primary1 link</a></p>
                                            <p><a href="javascript:void(0)" class="link-primary2 link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Primary2 link</a></p>
                                            <p><a href="javascript:void(0)" class="link-primary3 link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Primary3 link</a></p>
                                            <p><a href="javascript:void(0)" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Secondary link</a></p>
                                            <p><a href="javascript:void(0)" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Success link</a></p>
                                            <p><a href="javascript:void(0)" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Danger link</a></p>
                                            <p><a href="javascript:void(0)" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Warning link</a></p>
                                            <p><a href="javascript:void(0)" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Info link</a></p>
                                            <p><a href="javascript:void(0)" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Light link</a></p>
                                            <p><a href="javascript:void(0)" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline">Dark link</a></p>
                                            <p><a href="javascript:void(0)" class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover text-decoration-underline">Emphasis link</a></p>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
        <!-- Prism Code -->
        <pre class="language-html"><code class="language-html"> &lt;p&gt;&lt;a href="javascript:void(0)" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline"&gt;Primary link&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-primary1 link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline"&gt;Primary1 link&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-primary2 link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline"&gt;Primary2 link&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-primary3 link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline"&gt;Primary3 link&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline"&gt;Secondary link&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline"&gt;Success link&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline"&gt;Danger link&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline"&gt;Warning link&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline"&gt;Info link&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline"&gt;Light link&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-underline"&gt;Dark link&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover text-decoration-underline"&gt;Emphasis link&lt;/a&gt;&lt;/p&gt;</code></pre>
        <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">POINTER EVENTS</div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p><a href="javascript:void(0)" class="pe-none text-primary fw-medium text-decoration-underline" tabindex="-1">This link</a> can not be clicked.</p>
                                            <p><a href="javascript:void(0)" class="pe-auto text-primary fw-medium text-decoration-underline">This link</a> can be clicked (this is default behavior).</p>
                                            <p class="pe-none mb-0"><a href="javascript:void(0)" tabindex="-1" class="text-primary fw-medium text-decoration-underline">This link</a> can not be clicked because the <code>pointer-events</code> property is inherited from its parent. However, <a href="javascript:void(0)" class="pe-auto">this link</a> has a <code>pe-auto</code> class and can be clicked.</p>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
        <!-- Prism Code -->
        <pre class="language-html"><code class="language-html"> &lt;p&gt;&lt;a href="javascript:void(0)" class="pe-none text-primary fw-medium text-decoration-underline" tabindex="-1"&gt;This link&lt;/a&gt; can not be clicked.&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="pe-auto text-primary fw-medium text-decoration-underline"&gt;This link&lt;/a&gt; can be clicked (this is default behavior).&lt;/p&gt;
            &lt;p class="pe-none mb-0"&gt;&lt;a href="javascript:void(0)" tabindex="-1" class="text-primary fw-medium text-decoration-underline"&gt;This link&lt;/a&gt; can not be clicked because the &lt;code&gt;pointer-events&lt;/code&gt; property is inherited from its parent. However, &lt;a href="javascript:void(0)" class="pe-auto"&gt;this link&lt;/a&gt; has a &lt;code&gt;pe-auto&lt;/code&gt; class and can be clicked.&lt;/p&gt;</code></pre>
        <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                TEXT SELECTION
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="user-select-all">This paragraph will be entirely selected when clicked by the user.</p>
                                            <p class="user-select-auto">This paragraph has default select behavior.</p>
                                            <p class="user-select-none mb-0">This paragraph will not be selectable when clicked by the user.</p>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
        <!-- Prism Code -->
        <pre class="language-html"><code class="language-html">&lt;p class="user-select-all"&gt;This paragraph will be entirely selected when clicked by the user.&lt;/p&gt;
            &lt;p class="user-select-auto"&gt;This paragraph has default select behavior.&lt;/p&gt;
            &lt;p class="user-select-none mb-0"&gt;This paragraph will not be selectable when clicked by the user.&lt;/p&gt;</code></pre>
        <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                LINK HOVER VARIANT
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-decoration-underline" href="javascript:void(0)">
                                                Underline opacity 0
                                            </a>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
        <!-- Prism Code -->
        <pre class="language-html"><code class="language-html"> &lt;a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-decoration-underline" href="javascript:void(0)"&gt;
            Underline opacity 0
        &lt;/a&gt;</code></pre>
        <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                LINK OPACITY
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p><a class="link-opacity-10" href="javascript:void(0)">Link opacity 10</a></p>
                                            <p><a class="link-opacity-25" href="javascript:void(0)">Link opacity 25</a></p>
                                            <p><a class="link-opacity-50" href="javascript:void(0)">Link opacity 50</a></p>
                                            <p><a class="link-opacity-75" href="javascript:void(0)">Link opacity 75</a></p>
                                            <p class="mb-0"><a class="link-opacity-100" href="javascript:void(0)">Link opacity 100</a></p>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
        <!-- Prism Code -->
        <pre class="language-html"><code class="language-html"> &lt;p&gt;&lt;a class="link-opacity-10" href="javascript:void(0)"&gt;Link opacity 10&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a class="link-opacity-25" href="javascript:void(0)"&gt;Link opacity 25&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a class="link-opacity-50" href="javascript:void(0)"&gt;Link opacity 50&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a class="link-opacity-75" href="javascript:void(0)"&gt;Link opacity 75&lt;/a&gt;&lt;/p&gt;
            &lt;p class="mb-0"&gt;&lt;a class="link-opacity-100" href="javascript:void(0)"&gt;Link opacity 100&lt;/a&gt;&lt;/p&gt;</code></pre>
        <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                LINK UNDERLINE COLORS
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p><a href="javascript:void(0)" class="link-underline-primary text-decoration-underline">Primary underline</a></p>
                                            <p><a href="javascript:void(0)" class="link-underline-primary1 text-decoration-underline">Primary1 underline</a></p>
                                            <p><a href="javascript:void(0)" class="link-underline-primary2 text-decoration-underline">Primary2 underline</a></p>
                                            <p><a href="javascript:void(0)" class="link-underline-primary3 text-decoration-underline">Primary3 underline</a></p>
                                            <p><a href="javascript:void(0)" class="link-underline-secondary text-decoration-underline">Secondary underline</a></p>
                                            <p><a href="javascript:void(0)" class="link-underline-success text-decoration-underline">Success underline</a></p>
                                            <p><a href="javascript:void(0)" class="link-underline-danger text-decoration-underline">Danger underline</a></p>
                                            <p><a href="javascript:void(0)" class="link-underline-warning text-decoration-underline">Warning underline</a></p>
                                            <p><a href="javascript:void(0)" class="link-underline-info text-decoration-underline">Info underline</a></p>
                                            <p><a href="javascript:void(0)" class="link-underline-light text-decoration-underline">Light underline</a></p>
                                            <p class="mb-0"><a href="javascript:void(0)" class="link-underline-dark text-decoration-underline">Dark underline</a></p>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
        <!-- Prism Code -->
        <pre class="language-html"><code class="language-html"> &lt;p&gt;&lt;a href="javascript:void(0)" class="link-underline-primary text-decoration-underline"&gt;Primary underline&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-underline-primary1 text-decoration-underline"&gt;Primary1 underline&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-underline-primary2 text-decoration-underline"&gt;Primary2 underline&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-underline-primary3 text-decoration-underline"&gt;Primary3 underline&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-underline-secondary text-decoration-underline"&gt;Secondary underline&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-underline-success text-decoration-underline"&gt;Success underline&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-underline-danger text-decoration-underline"&gt;Danger underline&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-underline-warning text-decoration-underline"&gt;Warning underline&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-underline-info text-decoration-underline"&gt;Info underline&lt;/a&gt;&lt;/p&gt;
            &lt;p&gt;&lt;a href="javascript:void(0)" class="link-underline-light text-decoration-underline"&gt;Light underline&lt;/a&gt;&lt;/p&gt;
            &lt;p class="mb-0"&gt;&lt;a href="javascript:void(0)" class="link-underline-dark text-decoration-underline"&gt;Dark underline&lt;/a&gt;&lt;/p&gt;</code></pre>
        <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>