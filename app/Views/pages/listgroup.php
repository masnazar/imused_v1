
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
                                    <li class="breadcrumb-item active" aria-current="page">List Group</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">List Group</h1>
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
                                        Basic List
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img">
                                                </span>
                                                <div class="ms-2 fw-medium">
                                                    Isha Bella
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="img">
                                                </span>
                                                <div class="ms-2 fw-medium">
                                                    Elsa Urena
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img">
                                                </span>
                                                <div class="ms-2 fw-medium">
                                                    Flora Mary
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img">
                                                </span>
                                                <div class="ms-2 fw-medium">
                                                    Gatin Leo
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="img">
                                                </span>
                                                <div class="ms-2 fw-medium">
                                                    Raja Ryder
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-medium"&gt;
                Isha Bella
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-medium"&gt;
                Elsa Urena
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-medium"&gt;
                Flora Mary
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-medium"&gt;
                Gatin Leo
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-medium"&gt;
                Raja Ryder
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Disabled items
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item disabled" aria-disabled="true">A disabled item meant to be disabled
                                        </li>
                                        <li class="list-group-item">Simply dummy text of the printing</li>
                                        <li class="list-group-item">There are many variations of passages</li>
                                        <li class="list-group-item">All the Lorem Ipsum generators</li>
                                        <li class="list-group-item">Written in 45 BC. This book is a treatise on the theory</li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item disabled" aria-disabled="true"&gt;A disabled item meant to be disabled
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;Simply dummy text of the printing&lt;/li&gt;
    &lt;li class="list-group-item"&gt;There are many variations of passages&lt;/li&gt;
    &lt;li class="list-group-item"&gt;All the Lorem Ipsum generators&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Written in 45 BC. This book is a treatise on the theory&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Flush
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item fw-medium"><i class="ri-home-2-line fs-15 lh-1 align-center me-2 text-muted"></i>Asish Trivedhi<span class="ms-1 text-muted fw-normal d-inline-block">(+1023-84534)</span></li>
                                        <li class="list-group-item fw-medium"><i class="ri-cloud-line fs-15 lh-1 align-center me-2 text-muted"></i>Alezander Russo<span class="ms-1 text-muted fw-normal d-inline-block">(+7546-12342)</span></li>
                                        <li class="list-group-item fw-medium"><i class="ri-global-line fs-15 lh-1 align-center me-2 text-muted"></i>Karem Smith<span class="ms-1 text-muted fw-normal d-inline-block">(+9944-56632)</span></li>
                                        <li class="list-group-item fw-medium"><i class="ri-stack-line fs-15 lh-1 align-center me-2 text-muted"></i>Melissa Brien<span class="ms-1 text-muted fw-normal d-inline-block">(+1023-34323)</span></li>
                                        <li class="list-group-item fw-medium"><i class="ri-gift-2-line fs-15 lh-1 align-center me-2 text-muted"></i>Kamala Harris<span class="ms-1 text-muted fw-normal d-inline-block">(+91-63421)</span></li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group list-group-flush"&gt;
    &lt;li class="list-group-item fw-medium"&gt;&lt;i class="ri-home-2-line fs-15 lh-1 align-center me-2 text-muted"&gt;&lt;/i&gt;Asish Trivedhi&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+1023-84534)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="list-group-item fw-medium"&gt;&lt;i class="ri-cloud-line fs-15 lh-1 align-center me-2 text-muted"&gt;&lt;/i&gt;Alezander Russo&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+7546-12342)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="list-group-item fw-medium"&gt;&lt;i class="ri-global-line fs-15 lh-1 align-center me-2 text-muted"&gt;&lt;/i&gt;Karem Smith&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+9944-56632)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="list-group-item fw-medium"&gt;&lt;i class="ri-stack-line fs-15 lh-1 align-center me-2 text-muted"&gt;&lt;/i&gt;Melissa Brien&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+1023-34323)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="list-group-item fw-medium"&gt;&lt;i class="ri-gift-2-line fs-15 lh-1 align-center me-2 text-muted"&gt;&lt;/i&gt;Kamala Harris&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+91-63421)&lt;/span&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Active items
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item active" aria-current="true">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="fs-15">
                                                        <i class="ri-home-2-line"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Home
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="fs-15">
                                                        <i class="ri-notification-3-line"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Notifications
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="fs-15">
                                                        <i class="ri-chat-1-line"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Sent Messages
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="fs-15">
                                                        <i class="ri-user-add-line"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    New Requests
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="fs-15">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Deleted Messages
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item active" aria-current="true"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="fs-15"&gt;
                    &lt;i class="bi bi-house-door"&gt;&lt;/i&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                Home
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="fs-15"&gt;
                    &lt;i class="bi bi-bell"&gt;&lt;/i&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                Notifications
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="fs-15"&gt;
                    &lt;i class="bi bi-gift"&gt;&lt;/i&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                Sent Messages
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="fs-15"&gt;
                    &lt;i class="bi bi-person"&gt;&lt;/i&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                New Requests
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="fs-15"&gt;
                    &lt;i class="bi bi-trash3"&gt;&lt;/i&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                Deleted Messages
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <button type="button" class="list-group-item list-group-item-action active" aria-current="true">Simply dummy text of the printing<span class="badge float-end bg-primary">243</span></button>
                                        <button type="button" class="list-group-item list-group-item-action">There are many variations of passages<span class="badge float-end bg-secondary-transparent">35</span></button>
                                        <button type="button" class="list-group-item list-group-item-action">All the Lorem Ipsum generators<span class="badge float-end bg-info-transparent">132</span></button>
                                        <button type="button" class="list-group-item list-group-item-action">All the Lorem Ipsum generators<span class="badge float-end bg-success-transparent">2525</span></button>
                                        <button type="button" class="list-group-item list-group-item-action" disabled>A disabled item meant to be disabled<span class="badge float-end bg-danger-transparent">21</span></button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;button type="button" class="list-group-item list-group-item-action active" aria-current="true"&gt;Simply dummy text of the printing&lt;span class="badge float-end bg-primary"&gt;243&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="list-group-item list-group-item-action"&gt;There are many variations of passages&lt;span class="badge float-end bg-secondary-transparent"&gt;35&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="list-group-item list-group-item-action"&gt;All the Lorem Ipsum generators&lt;span class="badge float-end bg-info-transparent"&gt;132&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="list-group-item list-group-item-action"&gt;All the Lorem Ipsum generators&lt;span class="badge float-end bg-success-transparent"&gt;2525&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="list-group-item list-group-item-action" disabled&gt;A disabled item meant to be disabled&lt;span class="badge float-end bg-danger-transparent"&gt;21&lt;/span&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Links
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action active"
                                            aria-current="true">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xs bg-white text-default avatar-rounded">
                                                        C
                                                    </span>
                                                </div>
                                                <div class="ms-2">California</div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xs bg-secondary avatar-rounded">
                                                        N
                                                    </span>
                                                </div>
                                                <div class="ms-2">New Jersey</div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xs bg-info avatar-rounded">
                                                        L
                                                    </span>
                                                </div>
                                                <div class="ms-2">Los Angeles</div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xs bg-warning avatar-rounded">
                                                        M
                                                    </span>
                                                </div>
                                                <div class="ms-2">Miami Florida</div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action disabled">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xs bg-success avatar-rounded">
                                                        W
                                                    </span>
                                                </div>
                                                <div class="ms-2">Washington D.C</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action active"
        aria-current="true"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-white text-default avatar-rounded"&gt;
                    C
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;California&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-secondary avatar-rounded"&gt;
                    N
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;New Jersey&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-info avatar-rounded"&gt;
                    L
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;Los Angeles&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-warning avatar-rounded"&gt;
                    M
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;Miami Florida&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a class="list-group-item list-group-item-action disabled"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-success avatar-rounded"&gt;
                    W
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;Washington D.C&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Sub headings
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item d-sm-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto text-muted">
                                                <div class="fw-medium fs-14 text-default">What Happened?</div>
                                                Many experts have recently suggested may exist.
                                            </div>
                                            <span class="badge bg-primary-transparent">32 Views</span>
                                        </li>
                                        <li class="list-group-item d-sm-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto text-muted">
                                                <div class="fw-medium fs-14 text-default">It Was Amazing!</div>
                                                His idea involved taking red.
                                            </div>
                                            <span class="badge bg-secondary-transparent">52 Views</span>
                                        </li>
                                        <li class="list-group-item d-sm-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto text-muted">
                                                <div class="fw-medium fs-14 text-default">News Is A Great Weapon.</div>
                                                News can influence in many ways.
                                            </div>
                                            <span class="badge bg-success-transparent">1,204 Views</span>
                                        </li>
                                        <li class="list-group-item d-sm-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto text-muted">
                                                <div class="fw-medium fs-14 text-default">majority have suffered.</div>
                                                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.
                                            </div>
                                            <span class="badge bg-danger-transparent">14 Views</span>
                                        </li>
                                    </ol>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ol class="list-group list-group-numbered"&gt;
    &lt;li class="list-group-item d-sm-flex justify-content-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-muted"&gt;
            &lt;div class="fw-medium fs-14 text-default"&gt;What Happened?&lt;/div&gt;
            Many experts have recently suggested may exist.
        &lt;/div&gt;
        &lt;span class="badge bg-primary-transparent"&gt;32 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item d-sm-flex justify-content-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-muted"&gt;
            &lt;div class="fw-medium fs-14 text-default"&gt;It Was Amazing!&lt;/div&gt;
            His idea involved taking red.
        &lt;/div&gt;
        &lt;span class="badge bg-secondary-transparent"&gt;52 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item d-sm-flex justify-content-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-muted"&gt;
            &lt;div class="fw-medium fs-14 text-default"&gt;News Is A Great Weapon.&lt;/div&gt;
            News can influence in many ways.
        &lt;/div&gt;
        &lt;span class="badge bg-success-transparent"&gt;1,204 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item d-sm-flex justify-content-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-muted"&gt;
            &lt;div class="fw-medium fs-14 text-default"&gt;majority have suffered.&lt;/div&gt;
            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.
        &lt;/div&gt;
        &lt;span class="badge bg-danger-transparent"&gt;14 Views&lt;/span&gt;
    &lt;/li&gt;
&lt;/ol&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Numbered Lists
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item">Simply dummy text of the printing.</li>
                                        <li class="list-group-item">There are many variations of passages.</li>
                                        <li class="list-group-item">All the Lorem Ipsum generators.</li>
                                        <li class="list-group-item">Written in 45 BC. This book is a treatise on the theory.</li>
                                        <li class="list-group-item">Randomised words which don't look.</li>
                                        <li class="list-group-item">Always free from repetition, injected humour.</li>
                                    </ol>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ol class="list-group list-group-numbered"&gt;
    &lt;li class="list-group-item"&gt;Simply dummy text of the printing.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;There are many variations of passages.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;All the Lorem Ipsum generators.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Written in 45 BC. This book is a treatise on the theory.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Randomised words which don't look.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Always free from repetition, injected humour.&lt;/li&gt;
&lt;/ol&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        List With Checkboxes
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 fw-medium" type="checkbox" value=""
                                                aria-label="..." checked>
                                                Accurate information at any given point.
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 fw-medium" type="checkbox" value=""
                                                aria-label="...">
                                                Hearing the information and responding.
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 fw-medium" type="checkbox" value=""
                                                aria-label="..." checked>
                                                Setting up and customizing your own sales.
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 fw-medium" type="checkbox" value=""
                                                aria-label="..." checked>
                                                New Admin Launched.
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 fw-medium" type="checkbox" value=""
                                                aria-label="...">
                                                To maximize profits and improve productivity.
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 fw-medium" type="checkbox" value=""
                                                aria-label="...">
                                                To have a complete 360° overview of sales information, having.
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-medium" type="checkbox" value=""
            aria-label="..." checked&gt;
            Accurate information at any given point.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-medium" type="checkbox" value=""
            aria-label="..."&gt;
            Hearing the information and responding.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-medium" type="checkbox" value=""
            aria-label="..." checked&gt;
            Setting up and customizing your own sales.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-medium" type="checkbox" value=""
            aria-label="..." checked&gt;
            New Admin Launched.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-medium" type="checkbox" value=""
            aria-label="..."&gt;
            To maximize profits and improve productivity.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-medium" type="checkbox" value=""
            aria-label="..."&gt;
            To have a complete 360° overview of sales information, having.
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        List With Radios
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio" checked>
                                                Accurate information at any given point.
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio" checked>
                                                Hearing the information and responding.
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio" checked>
                                                Setting up and customizing your own sales.
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio">
                                                New Admin Launched.
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio">
                                                To maximize profits and improve productivity.
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio">
                                                To have a complete 360° overview of sales information, having.
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio" checked&gt;
            Accurate information at any given point.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio" checked&gt;
            Hearing the information and responding.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio" checked&gt;
            Setting up and customizing your own sales.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio"&gt;
            New Admin Launched.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio"&gt;
            To maximize profits and improve productivity.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio"&gt;
            To have a complete 360° overview of sales information, having.
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        List With badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-medium">
                                            Groceries
                                            <span class="badge bg-primary">Available</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-medium">
                                            Furniture
                                            <span class="badge bg-secondary">Buy</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-medium">
                                            Beauty
                                            <span class="badge bg-primary1 rounded-pill">32</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-medium">
                                            Books
                                            <span class="badge bg-light text-default">New</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-medium">
                                            Toys
                                            <span class="badge bg-info-gradient">Out of Stock</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-medium">
                                            Electronic Gadgets
                                            <span class="badge bg-danger-transparent">&#128293; Hot</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-medium">
                                            Mobiles
                                            <span class="badge bg-primary2">Sold Out</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-medium"&gt;
        Grocies
        &lt;span class="badge bg-primary"&gt;Available&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-medium"&gt;
        Furniture
        &lt;span class="badge bg-secondary"&gt;Buy&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-medium"&gt;
        Beauty
        &lt;span class="badge bg-primary1 rounded-pill"&gt;32&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-medium"&gt;
        Books
        &lt;span class="badge bg-light text-default"&gt;New&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-medium"&gt;
        Toys
        &lt;span class="badge bg-info-gradient"&gt;Hot&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-medium"&gt;
        Mobiles
        &lt;span class="badge bg-primary2"&gt;Sold Out&lt;/span&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Horizontal
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="mb-2 list-group list-group-horizontal">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <ul class="mb-2 list-group list-group-horizontal-sm">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <ul class="mb-2 list-group list-group-horizontal-md">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <ul class="mb-2 list-group list-group-horizontal-lg">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <ul class="mb-2 list-group list-group-horizontal-xl">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <ul class="mb-0 list-group list-group-horizontal-xxl">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="mb-2 list-group list-group-horizontal"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="mb-2 list-group list-group-horizontal-sm"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="mb-2 list-group list-group-horizontal-md"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="mb-2 list-group list-group-horizontal-lg"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="mb-2 list-group list-group-horizontal-xl"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="mb-0 list-group list-group-horizontal-xxl"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;</code></pre>
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
                                        Custom content
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action active"
                                            aria-current="true">
                                            <div class="d-sm-flex w-100 justify-content-between">
                                                <h6 class="mb-1 fw-medium text-fixed-white">Web page editors now use Lorem Ipsum?</h6>
                                                <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            <small>24,Mar 2024.</small>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <div class="d-sm-flex w-100 justify-content-between">
                                                <h6 class="mb-1 fw-medium">Richard McClintock, a Latin professor?</h6>
                                                <small class="text-muted">4 hrs ago</small>
                                            </div>
                                            <p class="mb-1">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                                            <small class="text-muted">30,Mar 2024.</small>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <div class="d-sm-flex w-100 justify-content-between">
                                                <h6 class="mb-1 fw-medium">It uses a dictionary of over 200 Latin words?</h6>
                                                <small class="text-muted">15 hrs ago</small>
                                            </div>
                                            <p class="mb-1">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            <small class="text-muted">4,Mar 2024.</small>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <div class="d-sm-flex w-100 justify-content-between">
                                                <h6 class="mb-1 fw-medium">The standard Lorem Ipsum used since the 1500s?</h6>
                                                <small class="text-muted">45 mins ago</small>
                                            </div>
                                            <p class="mb-1">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                            <small class="text-muted">28,Jul 2024.</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action active"
        aria-current="true"&gt;
        &lt;div class="d-flex w-100 justify-content-between"&gt;
            &lt;h6 class="mb-1 fw-medium"&gt;Web page editors now use Lorem Ipsum?&lt;/h6&gt;
            &lt;small&gt;3 days ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.&lt;/p&gt;
        &lt;small&gt;24,Mar 2024.&lt;/small&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex w-100 justify-content-between"&gt;
            &lt;h6 class="mb-1 fw-medium"&gt;Richard McClintock, a Latin professor?&lt;/h6&gt;
            &lt;small class="text-muted"&gt;4 hrs ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.&lt;/p&gt;
        &lt;small class="text-muted"&gt;30,Mar 2024.&lt;/small&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex w-100 justify-content-between"&gt;
            &lt;h6 class="mb-1 fw-medium"&gt;It uses a dictionary of over 200 Latin words?&lt;/h6&gt;
            &lt;small class="text-muted"&gt;15 hrs ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.&lt;/p&gt;
        &lt;small class="text-muted"&gt;4,Mar 2024.&lt;/small&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex w-100 justify-content-between"&gt;
            &lt;h6 class="mb-1 fw-medium"&gt;The standard Lorem Ipsum used since the 1500s?&lt;/h6&gt;
            &lt;small class="text-muted"&gt;45 mins ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.&lt;/p&gt;
        &lt;small class="text-muted"&gt;28,Jul 2024.&lt;/small&gt;
    &lt;/a&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Solid Colored Lists
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">A simple default list group item</li>

                                        <li class="list-group-item list-item-solid-primary">A simple primary list group
                                            group
                                            item</li>
                                        <li class="list-group-item list-item-solid-primary1">A simple primary1 list group
                                            list
                                            group item</li>
                                        <li class="list-group-item list-item-solid-primary2">A simple primary2 list group
                                            group
                                            item</li>
                                        <li class="list-group-item list-item-solid-primary3">A simple primary3 list group
                                            group
                                            item</li>
                                        <li class="list-group-item list-item-solid-secondary">A simple secondary list group
                                            group
                                            item</li>
                                        <li class="list-group-item list-item-solid-info">A simple info list group
                                            group
                                            item</li>
                                        <li class="list-group-item list-item-solid-success">A simple success list group
                                            group
                                            item</li>
                                        <li class="list-group-item list-item-solid-danger">A simple danger list group
                                            group
                                            item</li>
                                        <li class="list-group-item list-item-solid-warning">A simple warning list group
                                            item
                                        </li>
                                        <li class="list-group-item list-item-solid-light">A simple light list group
                                            item
                                        </li>
                                        <li class="list-group-item list-item-solid-dark text-white">A simple dark list group
                                            item
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item"&gt;A simple default list group item&lt;/li&gt;

    &lt;li class="list-group-item list-item-solid-primary"&gt;A simple primary list group
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-priamry1"&gt;A simple primary1 list group
        list
        group item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-primary2"&gt;A simple primary2 list group
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-primary3"&gt;A simple primary3 list group
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-secondary"&gt;A simple secondary list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-info"&gt;A simple info list group
        item
    &lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-success"&gt;A simple success list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-danger"&gt;A simple danger list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-warning"&gt;A simple warning list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-light"&gt;A simple light list group
        item
    &lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-dark text-white"&gt;A simple dark list group
        item
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Contextual classes with hover styles
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">A simple default
                                            list
                                            group item</a>

                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-primary">A
                                            simple primary list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-primary1">A
                                            simple primary1 list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-primary2">A
                                            simple primary2 list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-primary3">A
                                            simple primary3 list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-secondary">A
                                            simple secondary list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-success">A
                                            simple success list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-danger">A
                                            simple danger list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-warning">A
                                            simple warning list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-info">A
                                            simple
                                            info list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-light">A
                                            simple light list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-dark">A
                                            simple
                                            dark list group item</a>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;A simple default
        list
        group item&lt;/a&gt;

    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-primary"&gt;A
        simple primary list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-primary1"&gt;A
        simple primary1 list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-primary2"&gt;A
        simple primary2 list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-primary3"&gt;A
        simple primary3 list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-secondary"&gt;A
        simple secondary list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-success"&gt;A
        simple success list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-danger"&gt;A
        simple danger list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-warning"&gt;A
        simple warning list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-info"&gt;A
        simple
        info list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-light"&gt;A
        simple light list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-dark"&gt;A
        simple
        dark list group item&lt;/a&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Contextual classes
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">A simple default list group item</li>

                                        <li class="list-group-item list-group-item-primary">A simple primary list
                                            group
                                            item</li>
                                        <li class="list-group-item list-group-item-primary1">A simple primary1 list
                                            group
                                            item</li>
                                        <li class="list-group-item list-group-item-primary2">A simple primary2 list
                                            group
                                            item</li>
                                        <li class="list-group-item list-group-item-primary3">A simple primary3 list
                                            group
                                            item</li>
                                        <li class="list-group-item list-group-item-secondary">A simple secondary
                                            list
                                            group item</li>
                                        <li class="list-group-item list-group-item-success">A simple success list
                                            group
                                            item</li>
                                        <li class="list-group-item list-group-item-danger">A simple danger list
                                            group
                                            item</li>
                                        <li class="list-group-item list-group-item-warning">A simple warning list
                                            group
                                            item</li>
                                        <li class="list-group-item list-group-item-info">A simple info list group
                                            item
                                        </li>
                                        <li class="list-group-item list-group-item-light">A simple light list group
                                            item
                                        </li>
                                        <li class="list-group-item list-group-item-dark">A simple dark list group
                                            item
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item"&gt;A simple default list group item&lt;/li&gt;

    &lt;li class="list-group-item list-group-item-primary"&gt;A simple primary list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-primary1"&gt;A simple primary1 list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-primary2"&gt;A simple primary2 list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-primary3"&gt;A simple primary3 list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-secondary"&gt;A simple secondary
        list
        group item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-success"&gt;A simple success list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-danger"&gt;A simple danger list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-warning"&gt;A simple warning list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-info"&gt;A simple info list group
        item
    &lt;/li&gt;
    &lt;li class="list-group-item list-group-item-light"&gt;A simple light list group
        item
    &lt;/li&gt;
    &lt;li class="list-group-item list-group-item-dark"&gt;A simple dark list group
        item
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
