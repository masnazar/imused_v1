
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
                                    <li class="breadcrumb-item active" aria-current="page">Badge</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Badge</h1>
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
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Buttons With Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-primary my-1 me-2">
                                        Notifications <span class="badge ms-2 bg-primary1">4</span>
                                    </button>
                                    <button type="button" class="btn btn-primary1 my-1 me-2">
                                        Notifications <span class="badge ms-2 bg-primary">4</span>
                                    </button>
                                    <button type="button" class="btn btn-primary2 my-1 me-2">
                                        Notifications <span class="badge ms-2 bg-warning">4</span>
                                    </button>
                                    <button type="button" class="btn btn-primary3 my-1 me-2">
                                        Notifications <span class="badge ms-2 bg-primary1">4</span>
                                    </button>
                                    <button type="button" class="btn btn-secondary my-1 me-2">
                                        Notifications <span class="badge ms-2 bg-primary">7</span>
                                    </button>
                                    <button type="button" class="btn btn-success my-1 me-2">
                                        Notifications <span class="badge ms-2 bg-danger">12</span>
                                    </button>
                                    <button type="button" class="btn btn-info my-1 me-2">
                                        Notifications <span class="badge ms-2 bg-warning">32</span>
                                    </button>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2 bg-primary1"&gt;4&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-primary1 my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2 bg-primary"&gt;7&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-primary2 my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2 bg-warning"&gt;7&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-primary3 my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2 bg-primary1"&gt;7&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2 bg-primary"&gt;7&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-success my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2 bg-danger"&gt;12&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-info my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2 bg-warning"&gt;32&lt;/span&gt;
    &lt;/button&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Outline Button Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-outline-primary my-1 me-2">
                                        Notifications <span class="badge ms-2">4</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary1 my-1 me-2">
                                        Notifications <span class="badge ms-2">4</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary2 my-1 me-2">
                                        Notifications <span class="badge ms-2">4</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary3 my-1 me-2">
                                        Notifications <span class="badge ms-2">4</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary my-1 me-2">
                                        Notifications <span class="badge ms-2">7</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-success my-1 me-2">
                                        Notifications <span class="badge ms-2">12</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-info my-1 me-2">
                                        Notifications <span class="badge ms-2">32</span>
                                    </button>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-outline-primary my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2"&gt;4&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary1 my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2"&gt;7&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary2 my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2"&gt;7&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-primary3 my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2"&gt;7&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2"&gt;7&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2"&gt;12&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-info my-1 me-2"&gt;
        Notifications &lt;span class="badge ms-2"&gt;32&lt;/span&gt;
    &lt;/button&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Light Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-2">
                                    <span class="badge bg-primary-transparent">Primary</span>
                                    <span class="badge bg-primary1-transparent">Primary1</span>
                                    <span class="badge bg-primary2-transparent">Primary2</span>
                                    <span class="badge bg-primary3-transparent">Primary3</span>
                                    <span class="badge bg-secondary-transparent">Secondary</span>
                                    <span class="badge bg-success-transparent">Success</span>
                                    <span class="badge bg-danger-transparent">Danger</span>
                                    <span class="badge bg-warning-transparent">Warning</span>
                                    <span class="badge bg-info-transparent">Info</span>
                                    <span class="badge bg-light-transparent text-dark">Light</span>
                                    <span class="badge bg-dark-transparent">Dark</span>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="badge bg-primary-transparent">Primary&lt;/span&gt;
    &lt;span class="badge bg-primary1-transparent"&gt;Primary1&lt;/span&gt;
    &lt;span class="badge bg-primary2-transparent"&gt;Primary2&lt;/span&gt;
    &lt;span class="badge bg-primary3-transparent"&gt;Primary3&lt;/span&gt;
    &lt;span class="badge bg-secondary-transparent"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge bg-success-transparent"&gt;Success&lt;/span&gt;
    &lt;span class="badge bg-danger-transparent"&gt;Danger&lt;/span&gt;
    &lt;span class="badge bg-warning-transparent"&gt;Warning&lt;/span&gt;
    &lt;span class="badge bg-info-transparent"&gt;Info&lt;/span&gt;
    &lt;span class="badge bg-light-transparent text-dark"&gt;Light&lt;/span&gt;
    &lt;span class="badge bg-dark-transparent"&gt;Dark&lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-2">
                                    <span class="badge bg-primary">Primary</span>
                                    <span class="badge bg-primary1">Primary1</span>
                                    <span class="badge bg-primary2">Primary2</span>
                                    <span class="badge bg-primary3">Primary3</span>
                                    <span class="badge bg-secondary">Secondary</span>
                                    <span class="badge bg-success">Success</span>
                                    <span class="badge bg-danger">Danger</span>
                                    <span class="badge bg-warning">Warning</span>
                                    <span class="badge bg-info">Info</span>
                                    <span class="badge bg-light text-dark">Light</span>
                                    <span class="badge bg-dark text-white">Dark</span>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="badge bg-primary">Primary&lt;/span&gt;
    &lt;span class="badge bg-primary1"&gt;Primary1&lt;/span&gt;
    &lt;span class="badge bg-primary2"&gt;Primary2&lt;/span&gt;
    &lt;span class="badge bg-primary3"&gt;Primary3&lt;/span&gt;
    &lt;span class="badge bg-secondary"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge bg-success"&gt;Success&lt;/span&gt;
    &lt;span class="badge bg-danger"&gt;Danger&lt;/span&gt;
    &lt;span class="badge bg-warning"&gt;Warning&lt;/span&gt;
    &lt;span class="badge bg-info"&gt;Info&lt;/span&gt;
    &lt;span class="badge bg-light text-dark"&gt;Light&lt;/span&gt;
    &lt;span class="badge bg-dark text-white"&gt;Dark&lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-6 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">Positioned Badges</div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-wrap gap-4">
                                            <button type="button" class="btn btn-primary position-relative">
                                                Inbox
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    99+
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-secondary position-relative">
                                                Profile
                                                <span
                                                    class="position-absolute top-80 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </button>
                                            <span class="avatar">
                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                                <span
                                                class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img">
                                                <span class="position-absolute top-80 start-100 translate-middle p-1 bg-success border border-light              rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="img">
                                                <span class="position-absolute top-0 start-100 translate-middle badge bg-secondary rounded-pill shadow-lg">1000+
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary position-relative"&gt;
        Inbox
        &lt;span
            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"&gt;
            99+
            &lt;span class="visually-hidden"&gt;unread messages&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary position-relative"&gt;
        Profile
        &lt;span
            class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle"&gt;
            &lt;span class="visually-hidden"&gt;New alerts&lt;/span&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;span class="avatar"&gt;
        &lt;img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img"&gt;
        &lt;span
        class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle"&gt;
        &lt;span class="visually-hidden"&gt;New alerts&lt;/span&gt;
        &lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img"&gt;
        &lt;span class="position-absolute top-80 start-100 translate-middle p-1 bg-success border border-light              rounded-circle"&gt;
            &lt;span class="visually-hidden"&gt;New alerts&lt;/span&gt;
        &lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="img"&gt;
        &lt;span class="position-absolute top-0 start-100 translate-middle badge bg-secondary rounded-pill shadow-lg"&gt;1000+
            &lt;span class="visually-hidden"&gt;New alerts&lt;/span&gt;
        &lt;/span&gt;
    &lt;/span&gt;  </code></pre>
    <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">Custom Badges</div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-5 flex-wrap">
                                                <div>
                                                    <span class="badge bg-outline-secondary custom-badge fs-15 d-inline-flex align-items-center"><i class="ti ti-flame me-1"></i>Hot</span>
                                                </div>
                                                <div>
                                                    <span class="icon-badge">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"/></svg>
                                                        <span class="badge rounded-pill bg-success">14</span>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="badge border bg-light text-default custom-badge"><i class="fe fe-eye me-2 d-inline-block"></i>13.2k</span>
                                                </div>
                                                <div>
                                                    <span class="text-badge">
                                                        <span class="text fs-18">Inbox</span>
                                                        <span class="badge rounded-pill bg-success">32</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="badge bg-outline-secondary custom-badge fs-15 d-inline-flex align-items-center"&gt;&lt;i class="ti ti-flame me-1"&gt;&lt;/i&gt;Hot&lt;/span&gt;
    &lt;span class="icon-badge"&gt;
        &lt;svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"&gt;&lt;path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"/&gt;&lt;/svg&gt;
        &lt;span class="badge rounded-pill bg-success"&gt;14&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="badge border bg-light text-default custom-badge"&gt;&lt;i class="fe fe-eye me-2 d-inline-block"&gt;&lt;/i&gt;13.2k&lt;/span&gt;
    &lt;span class="text-badge"&gt;
        &lt;span class="text fs-18"&gt;Inbox&lt;/span&gt;
        &lt;span class="badge rounded-pill bg-success"&gt;32&lt;/span&gt;
    &lt;/span&gt;</code></pre>
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
                                        Headings
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h1>Example heading <span class="badge bg-primary">New</span></h1>
                                    <h2>Example heading <span class="badge bg-primary">New</span></h2>
                                    <h3>Example heading <span class="badge bg-primary">New</span></h3>
                                    <h4>Example heading <span class="badge bg-primary">New</span></h4>
                                    <h5>Example heading <span class="badge bg-primary">New</span></h5>
                                    <h6>Example heading <span class="badge bg-primary">New</span></h6>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;h1&gt;Example heading &lt;span class="badge bg-primary"&gt;New&lt;/span&gt;&lt;/h1&gt;
    &lt;h2&gt;Example heading &lt;span class="badge bg-primary"&gt;New&lt;/span&gt;&lt;/h2&gt;
    &lt;h3&gt;Example heading &lt;span class="badge bg-primary"&gt;New&lt;/span&gt;&lt;/h3&gt;
    &lt;h4&gt;Example heading &lt;span class="badge bg-primary"&gt;New&lt;/span&gt;&lt;/h4&gt;
    &lt;h5&gt;Example heading &lt;span class="badge bg-primary"&gt;New&lt;/span&gt;&lt;/h5&gt;
    &lt;h6&gt;Example heading &lt;span class="badge bg-primary"&gt;New&lt;/span&gt;&lt;/h6&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-6 -->

                    <!-- Start::row-3 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Gradient Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-2">
                                    <span class="badge bg-primary-gradient">Primary</span>
                                    <span class="badge bg-secondary-gradient">Secondary</span>
                                    <span class="badge bg-success-gradient">Success</span>
                                    <span class="badge bg-danger-gradient">Danger</span>
                                    <span class="badge bg-warning-gradient">Warning</span>
                                    <span class="badge bg-info-gradient">Info</span>
                                    <span class="badge bg-orange-gradient">orange</span>
                                    <span class="badge bg-purple-gradient">purple</span>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="badge bg-primary-gradient"&gt;Primary&lt;/span&gt;
    &lt;span class="badge bg-secondary-gradient"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge bg-success-gradient"&gt;Success&lt;/span&gt;
    &lt;span class="badge bg-danger-gradient"&gt;Danger&lt;/span&gt;
    &lt;span class="badge bg-warning-gradient"&gt;Warning&lt;/span&gt;
    &lt;span class="badge bg-info-gradient"&gt;Info&lt;/span&gt;
    &lt;span class="badge bg-orange-gradient"&gt;orange&lt;/span&gt;
    &lt;span class="badge bg-purple-gradient"&gt;purple&lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Gradient Pill Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-2">
                                    <span class="badge rounded-pill bg-primary-gradient">Primary</span>
                                    <span class="badge rounded-pill bg-secondary-gradient">Secondary</span>
                                    <span class="badge rounded-pill bg-success-gradient">Success</span>
                                    <span class="badge rounded-pill bg-danger-gradient">Danger</span>
                                    <span class="badge rounded-pill bg-warning-gradient">Warning</span>
                                    <span class="badge rounded-pill bg-info-gradient">Info</span>
                                    <span class="badge rounded-pill bg-orange-gradient">orange</span>
                                    <span class="badge rounded-pill bg-purple-gradient">purple</span>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="badge bg-primary-gradient"&gt;Primary&lt;/span&gt;
    &lt;span class="badge bg-secondary-gradient"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge bg-success-gradient"&gt;Success&lt;/span&gt;
    &lt;span class="badge bg-danger-gradient"&gt;Danger&lt;/span&gt;
    &lt;span class="badge bg-warning-gradient"&gt;Warning&lt;/span&gt;
    &lt;span class="badge bg-info-gradient"&gt;Info&lt;/span&gt;
    &lt;span class="badge bg-orange-gradient"&gt;orange&lt;/span&gt;
    &lt;span class="badge bg-purple-gradient"&gt;purple&lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-4 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Outline Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-2">
                                    <span class="badge bg-outline-primary">Primary</span>
                                    <span class="badge bg-outline-primary1">Primary1</span>
                                    <span class="badge bg-outline-primary2">Primary2</span>
                                    <span class="badge bg-outline-primary3">Primary3</span>
                                    <span class="badge bg-outline-secondary">Secondary</span>
                                    <span class="badge bg-outline-success">Success</span>
                                    <span class="badge bg-outline-danger">Danger</span>
                                    <span class="badge bg-outline-warning">Warning</span>
                                    <span class="badge bg-outline-info">Info</span>
                                    <span class="badge bg-outline-light text-dark">Light</span>
                                    <span class="badge bg-outline-dark">Dark</span>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="badge bg-outline-primary">Primary&lt;/span&gt;
    &lt;span class="badge bg-outline-primary1">Primary1&lt;/span&gt;
    &lt;span class="badge bg-outline-primary2">Primary2&lt;/span&gt;
    &lt;span class="badge bg-outline-primary3">Primary3&lt;/span&gt;
    &lt;span class="badge bg-outline-secondary"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge bg-outline-success"&gt;Success&lt;/span&gt;
    &lt;span class="badge bg-outline-danger"&gt;Danger&lt;/span&gt;
    &lt;span class="badge bg-outline-warning"&gt;Warning&lt;/span&gt;
    &lt;span class="badge bg-outline-info"&gt;Info&lt;/span&gt;
    &lt;span class="badge bg-outline-light text-dark"&gt;Light&lt;/span&gt;
    &lt;span class="badge bg-outline-dark"&gt;Dark&lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Outline Pill Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-2">
                                    <span class="badge rounded-pill bg-outline-primary">Primary</span>
                                    <span class="badge rounded-pill bg-outline-primary1">Primary1</span>
                                    <span class="badge rounded-pill bg-outline-primary2">Primary2</span>
                                    <span class="badge rounded-pill bg-outline-primary3">Primary3</span>
                                    <span class="badge rounded-pill bg-outline-secondary">Secondary</span>
                                    <span class="badge rounded-pill bg-outline-success">Success</span>
                                    <span class="badge rounded-pill bg-outline-danger">Danger</span>
                                    <span class="badge rounded-pill bg-outline-warning">Warning</span>
                                    <span class="badge rounded-pill bg-outline-info">Info</span>
                                    <span class="badge rounded-pill bg-outline-light text-dark">Light</span>
                                    <span class="badge rounded-pill bg-outline-dark">Dark</span>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="badge rounded-pill bg-outline-primary"&gt;Primary&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-outline-primary1"&gt;Primary1&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-outline-primary2"&gt;Primary2&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-outline-primary3"&gt;Primary3&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-outline-secondary"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-outline-success"&gt;Success&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-outline-danger"&gt;Danger&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-outline-warning"&gt;Warning&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-outline-info"&gt;Info&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-outline-light text-dark"&gt;Light&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-outline-dark"&gt;Dark&lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-4 -->

                    <!-- Start::row-5 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Pill badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-2">
                                    <span class="badge rounded-pill bg-primary">Primary</span>
                                    <span class="badge rounded-pill bg-primary1">Primary1</span>
                                    <span class="badge rounded-pill bg-primary2">Primary2</span>
                                    <span class="badge rounded-pill bg-primary3">Primary3</span>
                                    <span class="badge rounded-pill bg-secondary">Secondary</span>
                                    <span class="badge rounded-pill bg-success">Success</span>
                                    <span class="badge rounded-pill bg-danger">Danger</span>
                                    <span class="badge rounded-pill bg-warning">Warning</span>
                                    <span class="badge rounded-pill bg-info">Info</span>
                                    <span class="badge rounded-pill bg-light text-dark">Light</span>
                                    <span class="badge rounded-pill bg-dark text-white">Dark</span>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="badge rounded-pill bg-primary">Primary&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-primary1">Primary1&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-primary2">Primary2&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-primary3">Primary3&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-secondary"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-success"&gt;Success&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-danger"&gt;Danger&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-warning"&gt;Warning&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-info"&gt;Info&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-light text-dark"&gt;Light&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-dark text-white"&gt;Dark&lt;/span&gt; </code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Light Pill Badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap gap-2">
                                    <span class="badge rounded-pill bg-primary-transparent">Primary</span>
                                    <span class="badge rounded-pill bg-primary1-transparent">Primary1</span>
                                    <span class="badge rounded-pill bg-primary2-transparent">Primary2</span>
                                    <span class="badge rounded-pill bg-primary3-transparent">Primary3</span>
                                    <span class="badge rounded-pill bg-secondary-transparent">Secondary</span>
                                    <span class="badge rounded-pill bg-success-transparent">Success</span>
                                    <span class="badge rounded-pill bg-danger-transparent">Danger</span>
                                    <span class="badge rounded-pill bg-warning-transparent">Warning</span>
                                    <span class="badge rounded-pill bg-info-transparent">Info</span>
                                    <span class="badge rounded-pill bg-light-transparent text-dark">Light</span>
                                    <span class="badge rounded-pill bg-dark-transparent">Dark</span>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;span class="badge rounded-pill bg-primary-transparent"&gt;Primary&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-primary1-transparent"&gt;Primary1&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-primary2-transparent"&gt;Primary2&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-primary3-transparent"&gt;Primary3&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-secondary-transparent"&gt;Secondary&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-success-transparent"&gt;Success&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-danger-transparent"&gt;Danger&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-warning-transparent"&gt;Warning&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-info-transparent"&gt;Info&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-light-transparent text-dark"&gt;Light&lt;/span&gt;
    &lt;span class="badge rounded-pill bg-dark-transparent"&gt;Dark&lt;/span&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-5 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
