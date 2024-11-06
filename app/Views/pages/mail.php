
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <link rel="stylesheet" href="<?php echo base_url('assets/libs/quill/quill.snow.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/quill/quill.bubble.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Start::page-header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">
                                            Pages
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Email</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mail</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Mail</h1>
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
                    <!-- End::page-header -->

                    <div class="main-mail-container mb-2 gap-2 d-flex">
                        <div class="mail-navigation border">
                            <div class="d-grid align-items-top p-3 border-bottom border-block-end-dashed">
                                <button class="btn btn-primary d-flex align-items-center justify-content-center" data-bs-toggle="modal"
                                data-bs-target="#mail-Compose">
                                    <i class="ri-add-circle-line fs-16 align-middle me-1"></i>Compose Mail
                                </button>
                                <div class="modal modal-lg fade" id="mail-Compose" tabindex="-1" aria-labelledby="mail-ComposeLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="mail-ComposeLabel">Compose Mail</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xl-6 mb-2">
                                                        <label for="fromMail" class="form-label">From<sup><i class="ri-star-s-fill text-success fs-8"></i></sup></label>
                                                        <input type="email" class="form-control" id="fromMail" value="henrymilo2345@gmail.com">
                                                    </div>
                                                    <div class="col-xl-6 mb-2">
                                                        <label for="toMail" class="form-label">To<sup><i class="ri-star-s-fill text-success fs-8"></i></sup></label>
                                                        <select class="form-control" name="toMail" id="toMail" multiple>
                                                            <option value="Choice 1" selected>jay@gmail.com</option>
                                                            <option value="Choice 2">kia@gmail.com</option>
                                                            <option value="Choice 3">don@gmail.com</option>
                                                            <option value="Choice 4">kimo@gmail.com</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-6 mb-2">
                                                        <label for="mailCC" class="form-label text-dark fw-medium">Cc</label>
                                                        <input type="email" class="form-control" id="mailCC">
                                                    </div>
                                                    <div class="col-xl-6 mb-2">
                                                        <label for="mailBcc" class="form-label text-dark fw-medium">Bcc</label>
                                                        <input type="email" class="form-control" id="mailBcc">
                                                    </div>
                                                    <div class="col-xl-12 mb-2">
                                                        <label for="Subject" class="form-label">Subject</label>
                                                        <input type="text" class="form-control" id="Subject" placeholder="Subject">
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <label class="col-form-label">Content :</label>
                                                        <div class="mail-compose">
                                                            <div id="mail-compose-editor"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <ul class="list-unstyled mail-main-nav" id="mail-main-nav">
                                    <li class="px-0 pt-0">
                                        <span class="fs-11 text-muted op-7 fw-medium">MAILS</span>
                                    </li>
                                    <li class="active mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ti ti-mail align-middle fs-16"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    All Mails
                                                </span>
                                                <span class="badge bg-primary1 rounded-pill">2,142</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ti ti-inbox align-middle fs-16"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    Inbox
                                                </span>
                                                <span class="badge bg-primary2 rounded-pill">12</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ti ti-send align-middle fs-16"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    Sent
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ti ti-notes align-middle fs-16"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    Drafts
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ti ti-alert-circle align-middle fs-16"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    Spam
                                                </span>
                                                <span class="badge bg-primary3 rounded-pill">6</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ti ti-archive align-middle fs-16"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    Archive
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ti ti-bookmark align-middle fs-16"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    Important
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ti ti-trash align-middle fs-16"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    Trash
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mail-type">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ti ti-star align-middle fs-16"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    Starred
                                                </span>
                                                <span class="badge bg-warning rounded-pill">05</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-0">
                                        <span class="fs-11 text-muted op-7 fw-medium">LABELS</span>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ri-circle-fill align-middle fs-10 fw-medium text-primary1"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    Mail
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ri-circle-fill align-middle fs-10 fw-medium text-primary2"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    Home
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ri-circle-fill align-middle fs-10 fw-medium text-primary3"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    Work
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ri-circle-fill align-middle fs-10 fw-medium text-warning"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    Friends
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-0">
                                        <span class="fs-11 text-muted op-7 fw-medium">ONLINE USERS</span>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-top lh-1">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm online avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="text-default fw-medium mb-1">Angelica</p>
                                                    <p class="fs-12 text-muted mb-0 fw-normal">Can please send me the file.</p>
                                                </div>
                                            </div>
                                        </a>    
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-top lh-1">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm online avatar-rounded">
                                                        <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="text-default fw-medium mb-1">Rexha</p>
                                                    <p class="fs-12 text-muted mb-0 fw-normal">Waiting for response &#128077;.</p>
                                                </div>
                                            </div>
                                        </a>    
                                    </li>
                                    <li class="px-0">
                                        <span class="fs-11 text-muted op-7 fw-medium">SETTINGS</span>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('mail-settings'); ?>">
                                            <div class="d-flex align-items-center">
                                                <span class="me-2 lh-1">
                                                    <i class="ti ti-settings align-middle fs-14"></i>
                                                </span>
                                                <span class="flex-fill text-nowrap">
                                                    Settings
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="total-mails border">
                            <div class="p-3 d-flex align-items-center border-bottom border-block-end-dashed flex-wrap gap-2">
                                <div class="input-group">
                                    <input type="text" class="form-control shadow-none" placeholder="Search Email" aria-describedby="button-addon">
                                    <button class="btn btn-primary" type="button" id="button-addon"><i class="ri-search-line me-1"></i> Search</button>
                                </div>
                            </div>
                            <div class="px-3 p-2 d-flex align-items-center border-bottom flex-wrap gap-2">
                                <div class="me-3">
                                    <input class="form-check-input check-all" type="checkbox" id="checkAll" value="" aria-label="...">
                                </div>
                                <div class="flex-fill">
                                    <h6 class="fw-medium mb-0">All Mails</h6>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-icon btn-light me-1 d-lg-none d-block total-mails-close">
                                        <i class="ri-close-line"></i>
                                    </button>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-primary1-light btn-wave" type="button" aria-expanded="false">
                                            <i class="ri-inbox-archive-line me-1"></i> Archive
                                        </button>
                                        <button class="btn btn-sm btn-primary2-light btn-wave" type="button" aria-expanded="false">
                                            <i class="ri-error-warning-line me-1"></i> Spam
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-primary3-light btn-wave" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Recent</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Unread</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Mark All Read</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete All</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mail-messages" id="mail-messages">
                                <ul class="list-unstyled mb-0 mail-messages-container">
                                    <li>
                                        <div class="d-sm-flex align-items-top">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                            </div>
                                            <div class="me-1 lh-1">
                                                <span
                                                    class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                    <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <p class="mb-1 fs-12 fw-medium">
                                                        Iliana Lilly <span
                                                            class="float-end text-muted fw-normal fs-11"><span class="me-2"><i class="ri-attachment-2 align-middle fs-12"></i></span>12:12AM</span>
                                                    </p>
                                                </a>    
                                                <div class="mail-msg mb-0">
                                                    <span class="d-block mb-0 fw-medium text-truncate w-75">Meeting Agenda</span>
                                                    <div
                                                        class="fs-12 text-muted text-wrap text-truncate mail-msg-content">Reviewing the agenda for tomorrow's meeting. We'll be discussing the project timeline and budget allocation.
                                                        <button class="btn p-0 lh-1 mail-starred true border-0 float-end">
                                                            <i class="ri-star-fill fs-14"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="active">
                                        <div class="d-sm-flex align-items-top">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="..." checked>
                                            </div>
                                            <div class="me-1 lh-1">
                                                <span
                                                    class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                    <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">      
                                                    <p class="mb-1 fs-12 fw-medium">
                                                        Priceton Gray <span
                                                            class="float-end text-muted fw-normal fs-11">03:18PM</span>
                                                    </p>
                                                </a>    
                                                <div class="mail-msg mb-0">
                                                    <span class="d-block mb-0 fw-medium text-truncate w-75">Exclusive Offers Inside!</span>
                                                    <div
                                                        class="fs-12 text-muted text-wrap text-truncate mail-msg-content">Unlock exclusive deals and discounts inside! Don't miss out on this limited-time opportunity to save big on your favorite products and services.
                                                        <button class="btn p-0 lh-1 mail-starred border-0 float-end">
                                                            <i class="ri-star-fill fs-14"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-sm-flex align-items-top">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
                                            </div>
                                            <div class="me-1 lh-1">
                                                <span
                                                    class="avatar avatar-md me-2 avatar-rounded bg-primary mail-msg-avatar">
                                                    CH
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <p class="mb-1 fs-12 fw-medium">
                                                        Charlie Edson <span class="badge bg-warning ms-2">Promotion</span><span
                                                            class="float-end text-muted fw-normal fs-11">Yesterday, 06:45AM</span>
                                                    </p>
                                                </a>    
                                                <div class="mail-msg mb-0">
                                                    <span class="d-block mb-0 fw-medium text-truncate w-75"> Limited-Time Offer: Save on Your Next Trip!</span>
                                                    <div
                                                        class="fs-12 text-muted text-wrap text-truncate mail-msg-content">Unlock exclusive deals and discounts inside! Don't miss out on this limited-time opportunity to save big on your favorite products and services.
                                                        <button class="btn p-0 lh-1 mail-starred border-0 float-end">
                                                            <i class="ri-star-fill fs-14"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-sm-flex align-items-top">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel54" value="" aria-label="..." checked>
                                            </div>
                                            <div class="me-1 lh-1">
                                                <span
                                                    class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                    <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <p class="mb-1 fs-12 fw-medium">
                                                        Isha Bella <span class="badge bg-primary1 ms-2">Social</span><span
                                                            class="float-end text-muted fw-normal fs-11">May 15 2024, 08:16PM</span>
                                                    </p>
                                                </a>    
                                                <div class="mail-msg mb-0">
                                                    <span class="d-block mb-0 fw-medium text-truncate w-75"> You Have New Notifications</span>
                                                    <div
                                                        class="fs-12 text-muted text-wrap text-truncate mail-msg-content">Stay connected with your friends and family. See who's commented on your latest post and catch up on messages from loved ones.
                                                        <button class="btn p-0 lh-1 mail-starred border-0 float-end">
                                                            <i class="ri-star-fill fs-14"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-sm-flex align-items-top">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel14" value="" aria-label="...">
                                            </div>
                                            <div class="me-1 lh-1">
                                                <span
                                                    class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                    <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <p class="mb-1 fs-12 fw-medium">
                                                        Danny Raj <span
                                                            class="float-end text-muted fw-normal fs-11">May 13 2024, 11:24AM</span>
                                                    </p>
                                                </a>    
                                                <div class="mail-msg mb-0">
                                                    <span class="d-block mb-0 fw-medium text-truncate w-75">New Connection Request</span>
                                                    <div
                                                        class="fs-12 text-muted text-wrap text-truncate mail-msg-content">Expand your professional network with a new connection. Accept the request to connect and start networking today to explore new opportunities.
                                                        <button class="btn p-0 lh-1 mail-starred true border-0 float-end">
                                                            <i class="ri-star-fill fs-14"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-sm-flex align-items-top">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel24" value="" aria-label="...">
                                            </div>
                                            <div class="me-1 lh-1">
                                                <span
                                                    class="avatar avatar-md me-2 avatar-rounded bg-primary2 mail-msg-avatar">
                                                    SR
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <p class="mb-1 fs-12 fw-medium">
                                                        Spencer Robin <span class="badge bg-primary3 ms-2">Personal</span><span
                                                            class="float-end text-muted fw-normal fs-11">May 18 2024, 11:15PM</span>
                                                    </p>
                                                </a>    
                                                <p class="fs-12 mb-0">
                                                <div class="mail-msg mb-0">
                                                    <span class="d-block mb-0 fw-medium text-truncate w-75">Invitation By Summer Soiree Under the Stars!</span>
                                                    <div
                                                        class="fs-12 text-muted text-wrap text-truncate mail-msg-content">Hello, You are cordially invited to join us for an unforgettable evening of summer magic at our Summer Soiree Under the Stars!
                                                        <button class="btn p-0 lh-1 mail-starred true border-0 float-end">
                                                            <i class="ri-star-fill fs-14"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-sm-flex align-items-top">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel34" value="" aria-label="...">
                                            </div>
                                            <div class="me-1 lh-1">
                                                <span
                                                    class="avatar avatar-md me-2 avatar-rounded bg-warning mail-msg-avatar">
                                                    HJ
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <p class="mb-1 fs-12 fw-medium">
                                                        Harry Justin <span
                                                            class="float-end text-muted fw-normal fs-11">April 05 2024, 08:12AM</span>
                                                    </p>
                                                </a>    
                                                <p class="fs-12 mb-0">
                                                <div class="mail-msg mb-0">
                                                    <span class="d-block mb-0 fw-medium text-truncate w-75">New Connection Request</span>
                                                    <div
                                                        class="fs-12 text-muted text-wrap text-truncate mail-msg-content">Expand your professional network with a new connection. Accept the request to connect and start networking today to explore new opportunities.
                                                        <button class="btn p-0 lh-1 mail-starred border-0 float-end">
                                                            <i class="ri-star-fill fs-14"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-sm-flex align-items-top">
                                            <div class="me-3 mt-1">
                                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel44" value="" aria-label="...">
                                            </div>
                                            <div class="me-1 lh-1">
                                                <span
                                                    class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar">
                                                    <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <p class="mb-1 fs-12 fw-medium">
                                                        Nicolas Noor <span
                                                            class="float-end text-muted fw-normal fs-11">March 20, 08:30PM</span>
                                                    </p>
                                                </a>    
                                                <p class="fs-12 mb-0">
                                                <div class="mail-msg mb-0">
                                                    <span class="d-block mb-0 fw-medium text-truncate w-75">Claim Your Prize Now!</span>
                                                    <div
                                                        class="fs-12 text-muted text-wrap text-truncate mail-msg-content">Congratulations! You've won a prize! Click here to claim your reward before it's too late and enjoy your well-deserved prize.
                                                        <button class="btn p-0 lh-1 mail-starred border-0 float-end">
                                                            <i class="ri-star-fill fs-14"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mail-recepients border">
                            <div class="p-3 border-bottom">
                                <button class="btn btn-primary1-light btn-icon rounded-pill" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Add Recepient"><i class="ri-add-line"></i></button>
                            </div>
                            <div class="p-3 d-flex flex-column align-items-center total-mail-recepients" id="mail-recepients">
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <span class="avatar online avatar-rounded">
                                        <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Hadley Kylin">
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <span class="avatar online avatar-rounded">
                                        <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Iliana Lilly">
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <span class="avatar offline avatar-rounded">
                                        <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Jasmine Della">
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <span class="avatar offline online avatar-rounded">
                                        <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Emanuel Rush">
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <span class="avatar offline avatar-rounded">
                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Nyra Tiyana">
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <span class="avatar offline avatar-rounded">
                                        <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Maria Violet">
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <span class="avatar online avatar-rounded">
                                        <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Priceton Gray">
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <span class="avatar offline avatar-rounded">
                                        <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Charlie Edson">
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="mail-recepeint-person">
                                    <span class="avatar offline avatar-rounded">
                                        <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Spencer Robin">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Start::mail information offcanvas -->
                    <div class="offcanvas offcanvas-end mail-info-offcanvas" tabindex="-1" id="offcanvasRight"
                        > 
                        <div class="offcanvas-body p-0">
                            <div class="mails-information">
                                    <div class="mail-info-header d-flex flex-wrap gap-2 align-items-center">
                                        <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar me-1">
                                            <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                        </span>
                                        <div class="flex-fill">
                                            <h6 class="mb-0 fw-medium">Raiden stevie</h6>
                                            <span class="text-muted fs-11">raidenstevie777@gmail.com</span>
                                        </div>
                                        <div class="mail-action-icons">
                                            <button class="btn btn-icon btn-outline-light border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Starred">
                                                <i class="ri-star-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-outline-light border ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Archive">
                                                <i class="ri-inbox-archive-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-outline-light border ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Report spam">
                                                <i class="ri-spam-2-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-outline-light border ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-outline-light border ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reply">
                                                <i class="ri-reply-line"></i>
                                            </button>
                                            <button type="button" class="btn-close btn btn-sm btn-icon border" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="responsive-mail-action-icons">
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-light btn-wave waves-light waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-star-line me-1 align-middle d-inline-block"></i>Starred</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-inbox-archive-line me-1 align-middle d-inline-block"></i>Archive</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-spam-2-line me-1 align-middle d-inline-block"></i>Report Spam</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-reply-line me-1 align-middle d-inline-block"></i>Reply</a></li>
                                                </ul>
                                            </div>
                                            <button class="btn btn-icon btn-light ms-1 close-button" data-bs-dismiss="offcanvas" aria-label="Close">
                                                <i class="ri-close-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mail-info-body p-3" id="mail-info-body">
                                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
                                            <div>
                                                <p class="fs-20 fw-medium mb-0">Strategic Insights Webinar: Navigating Future Trends.</p>
                                            </div>
                                            <div class="float-end">
                                                <span class="fs-12 text-muted">Oct-22-2024,03:05PM</span>
                                            </div>
                                        </div>
                                        <div class="main-mail-content mb-3">
                                            <p class="fs-14 fw-medium mb-3">Greetings Mr Jack &#128400;,</p>
                                            <p class="mb-2 text-muted">We're excited to invite you to our upcoming webinar, "Navigating Future Trends," where industry experts will share strategic insights to help you stay ahead in an ever-evolving landscape. Join us on [Date] at [Time] for an engaging session that promises to provide actionable knowledge and valuable perspectives.</p>
                                            <span class="d-block text-muted fw-meidum">Key Highlights :</span>
                                            <ul class="text-muted my-3">
                                                <li class="mb-2">Expert analysis of emerging trends</li>
                                                <li class="mb-2">Practical strategies for staying competitive</li>
                                                <li class="mb-2">Q&A session for personalized insights</li>
                                            </ul>
                                            <p class="mb-2 text-muted">Earth has a diameter of roughly 8,000 miles (13,000 kilometers) and is mostly round because gravity generally pulls matter into a ball. But the spin of our home planet causes it to be squashed at its poles and swollen at the equator, making the true shape of the Earth an "oblate spheroid.".</p>
                                            <p class="mb-0 mt-4">
                                                <span class="d-block">Best Regards,</span>
                                                <span class="d-block">Raiden stevie</span>
                                            </p>
                                        </div>
                                        <div class="mail-attachments mb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="mb-2"> 
                                                    <span class="fs-14 fw-medium"><i class="ri-attachment-2 me-1 align-middle"></i>Attachments (5.8KB):</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button class="btn btn-sm btn-primary-light">Download All</button>
                                                </div>
                                            </div>    
                                            <div class="mt-2 d-flex flex-wrap gap-3">
                                                <div class="d-flex align-items-center flex-wrap gap-3 border p-2 rounded-2">
                                                    <div class="me-1 lh-1">
                                                        <span class="avatar avatar-md bg-primary">
                                                            <i class="ri-file-pdf-2-line fs-18"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <a href="javascript:void(0);">
                                                            <p class="mb-1 fs-12 fw-medium">
                                                                Instructions_file.pdf
                                                            </p>
                                                        </a>
                                                        <div class="fs-12 text-muted text-wrap">2.1KB</div>  
                                                    </div>
                                                    <div class="ms-auto btn btn-sm btn-primary1-light rounded-circle btn-icon">
                                                        <i class="ri-download-line"></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center flex-wrap gap-3 border p-2 rounded-2">
                                                    <div class="me-1 lh-1">
                                                        <span class="avatar avatar-md bg-primary">
                                                            <i class="ri-file-pdf-line fs-18"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <a href="javascript:void(0);">
                                                            <p class="mb-1 fs-12 fw-medium">
                                                                Complete_Folder.doc
                                                            </p>
                                                        </a>
                                                        <div class="fs-12 text-muted text-wrap">1.5KB</div>  
                                                    </div>
                                                    <div class="ms-auto btn btn-sm btn-primary1-light rounded-circle btn-icon">
                                                        <i class="ri-download-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-images mb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="mb-2"> 
                                                    <span class="fs-14 fw-medium"><i class="ri-image-line me-1 align-middle"></i>Images:</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button class="btn btn-sm btn-primary-light">Download All</button>
                                                </div>
                                            </div>    
                                            <div class="mt-2 d-flex flex-wrap gap-3">
                                                <a href="javascript:void(0)">
                                                    <span class="avatar avatar-lg shadow-sm">
                                                        <img src="<?php echo base_url('assets/images/media/media-74.jpg'); ?>" alt="">
                                                    </span>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <span class="avatar avatar-lg shadow-sm">
                                                        <img src="<?php echo base_url('assets/images/media/media-75.jpg'); ?>" alt="">
                                                    </span>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <span class="avatar avatar-lg shadow-sm">
                                                        <img src="<?php echo base_url('assets/images/media/media-77.jpg'); ?>" alt="">
                                                    </span>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <span class="avatar avatar-lg bg-primary-transparent">
                                                        5+
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mb-3"> 
                                            <span class="fs-14 fw-medium"><i class="ri-reply-all-line me-1 align-middle d-inline-block"></i>Reply:</span>
                                        </div>
                                        <div class="mail-reply">
                                            <div id="mail-reply-editor"></div>
                                        </div>
                                    </div>
                                    <div class="mail-info-footer d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                        <div>
                                            <button class="btn btn-icon btn-primary-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print">
                                                <i class="ri-printer-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-secondary-light ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Mark as read">
                                                <i class="ri-mail-open-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-success-light ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload">
                                                <i class="ri-refresh-line"></i>
                                            </button>
                                        </div>
                                        <div>
                                            <button class="btn btn-secondary">
                                                <i class="ri-share-forward-line me-1 d-inline-block align-middle"></i>Forward
                                            </button>
                                            <button class="btn btn-danger ms-1">
                                                <i class="ri-reply-all-line me-1 d-inline-block align-middle"></i>Reply
                                            </button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::mail information offcanvas -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Quill Editor JS -->
        <script src="<?php echo base_url('assets/libs/quill/quill.js'); ?>"></script>

        <!-- Mail JS -->
        <script src="<?php echo base_url('assets/js/mail.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
