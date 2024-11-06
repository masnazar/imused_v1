
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- Dropzone Css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/dropzone/dropzone.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">File Manager</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">File Manager</h1>
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
                        <div class="col-xxl-3">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="d-flex p-3 flex-wrap gap-2 align-items-center justify-content-between border-bottom">
                                            <div class="flex-fill">
                                                <h6 class="fw-medium mb-0">File Manager</h6>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 p-3 border-bottom border-block-end-dashed">
                                            <span class="avatar avatar-xl online">
                                                <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="">
                                            </span>
                                            <div class="main-profile-info">
                                                <h6 class="fw-semibold mb-1">Daniel David </h6>
                                                <p class="text-muted fs-11 mb-2">Web Designer</p>
                                                <p class="mb-0">danieldavid@mail.com </p>
                                            </div>
                                        </div>
                                        <div class="card-body"> 
                                            <ul class="list-unstyled files-main-nav" id="files-main-nav">
                                                <li class="px-0 pt-0">
                                                    <span class="fs-12 text-muted">My Files</span>
                                                </li>
                                                <li class="active files-type">
                                                    <a href="javascript:void(0)">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <i class="ri-folder-2-line fs-16"></i>
                                                            </div>
                                                            <span class="flex-fill text-nowrap">
                                                                All Files
                                                            </span>
                                                            <span class="badge bg-primary">412</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="files-type">
                                                    <a href="javascript:void(0)">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <i class="ri-history-fill fs-16"></i>
                                                            </div>
                                                            <span class="flex-fill text-nowrap">
                                                                Recent Files
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="files-type">
                                                    <a href="javascript:void(0)">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <i class="ri-share-forward-line fs-16"></i>
                                                            </div>
                                                            <span class="flex-fill text-nowrap">
                                                                Shared Files
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="files-type">
                                                    <a href="javascript:void(0)">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <i class="ri-star-s-line fs-16"></i>
                                                            </div>
                                                            <span class="flex-fill text-nowrap">
                                                                favourites
                                                            </span>
                                                            <span class="badge bg-primary1">02</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="files-type">
                                                    <a href="javascript:void(0)">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <i class="ri-delete-bin-line fs-16"></i>
                                                            </div>
                                                            <span class="flex-fill text-nowrap">
                                                                Recycle Bin
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <i class="ri-settings-3-line fs-16"></i>
                                                            </div>
                                                            <span class="flex-fill text-nowrap">
                                                                Settings
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <i class="ri-questionnaire-line fs-16"></i>
                                                            </div>
                                                            <span class="flex-fill text-nowrap">
                                                                Help Center
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <i class="ri-folder-line fs-16"></i>
                                                            </div>
                                                            <span class="flex-fill text-nowrap">
                                                                Version
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <i class="ri-logout-box-line fs-16"></i>
                                                            </div>
                                                            <span class="flex-fill text-nowrap">
                                                                Log out
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="px-0 pt-0">
                                                    <span class="fs-12 text-muted">Most Recent</span>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="me-0">
                                                            <span class="avatar avatar-md bg-primary-transparent text-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M112,175.67V168a8,8,0,0,0-8-8H48a8,8,0,0,0-8,8v40a8,8,0,0,0,8,8h56a8,8,0,0,0,8-8v-8.82L144,216V160Z" opacity="0.2"/><polyline points="112 175.67 144 160 144 216 112 199.18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="40" y="160" width="72" height="56" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176,224h24a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">VID-14512223-AKP823.mp4</a>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <span class="fw-medium text-muted">1.2KB</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="me-0">
                                                            <span class="avatar avatar-md bg-primary1-transparent text-primary1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M112,175.67V168a8,8,0,0,0-8-8H48a8,8,0,0,0-8,8v40a8,8,0,0,0,8,8h56a8,8,0,0,0,8-8v-8.82L144,216V160Z" opacity="0.2"/><polyline points="112 175.67 144 160 144 216 112 199.18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="40" y="160" width="72" height="56" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176,224h24a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">AUD-14512223-AKP823.mp3</a>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <span class="fw-medium text-muted">25GB</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="me-0">
                                                            <span class="avatar avatar-md bg-primary2-transparent text-primary2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M112,175.67V168a8,8,0,0,0-8-8H48a8,8,0,0,0-8,8v40a8,8,0,0,0,8,8h56a8,8,0,0,0,8-8v-8.82L144,216V160Z" opacity="0.2"/><polyline points="112 175.67 144 160 144 216 112 199.18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="40" y="160" width="72" height="56" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176,224h24a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">VID-14211110-AKP823.mp4</a>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <span class="fw-medium text-muted">36GB</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="px-0 pt-3">
                                                    <span class="fs-12 text-muted">Upload File</span>
                                                </li>
                                                <li class="p-3 border border-dashed">
                                                    <label class="form-label">Drop File here :</label> 
                                                    <form data-single="true" method="post" action="https://httpbin.org/post" class="dropzone bg-light"></form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="file-manager-folders">
                                        <div class="d-flex p-3 flex-wrap gap-2 align-items-center justify-content-between border-bottom">
                                            <div class="flex-fill">
                                                <h6 class="fw-medium mb-0">All Folders</h6>
                                            </div>
                                            <div class="d-flex gap-2 flex-lg-nowrap flex-wrap justify-content-sm-end w-75">
                                                <div class="input-group">
                                                    <input type="text" class="form-control w-50" placeholder="Search File" aria-describedby="button-addon01">
                                                    <button class="btn btn-primary-light" type="button" id="button-addon01"><i class="ri-search-line"></i></button>
                                                </div>
                                                <button class="btn btn-primary btn-w-md d-flex align-items-center justify-content-center btn-wave waves-light text-nowrap"
                                                    data-bs-toggle="modal" data-bs-target="#create-folder">
                                                    <i class="ri-add-circle-line align-middle me-1"></i>Create Folder
                                                </button>
                                                <div class="modal fade" id="create-folder" tabindex="-1"
                                                                aria-labelledby="create-folder" data-bs-keyboard="false"
                                                                aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h6 class="modal-title" id="staticBackdropLabel">Create Folder
                                                                </h6>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label for="create-folder1" class="form-label">Folder Name</label>
                                                                <input type="text" class="form-control" id="create-folder1" placeholder="Folder Name">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-icon btn-light"
                                                                    data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                                                <button type="button" class="btn btn-sm btn-success">Create</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary1-light btn-w-md d-flex align-items-center justify-content-center btn-wave waves-light"
                                                    data-bs-toggle="modal" data-bs-target="#create-file">
                                                    <i class="ri-add-circle-line align-middle me-1"></i>Create File
                                                </button>
                                                <div class="modal fade" id="create-file" tabindex="-1"
                                                                aria-labelledby="create-file" data-bs-keyboard="false"
                                                                aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h6 class="modal-title" id="staticBackdropLabel1">Create File
                                                                </h6>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label for="create-file1" class="form-label">File Name</label>
                                                                <input type="text" class="form-control" id="create-file1" placeholder="File Name">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-icon btn-light"
                                                                    data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                                                <button type="button" class="btn btn-sm btn-success">Create</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 file-folders-container">
                                            <div class="d-flex mb-3 align-items-center justify-content-between">
                                                <p class="mb-0 fw-medium fs-14">Quick Access</p>
                                                <a href="javascript:void(0);" class="fs-12 text-muted fw-medium"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                                                <div class="main-card-icon primary">
                                                                    <div class="avatar avatar-md bg-primary-transparent border border-primary border-opacity-10">
                                                                        <div class="avatar avatar-sm text-primary">
                                                                            <i class="ti ti-photo fs-24"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="d-block fw-medium">Images</a>
                                                                    <span class="fs-12 text-muted">17% Used</span>
                                                                </div>
                                                                <div class="text-end">
                                                                    <span class="fw-medium">245 files</span>
                                                                    <span class="d-block fs-12 text-muted">26.14GB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                                                <div class="main-card-icon primary1">
                                                                    <div class="avatar avatar-md bg-primary1-transparent border border-primary1 border-opacity-10">
                                                                        <div class="avatar avatar-sm text-primary1">
                                                                            <i class="ti ti-video fs-24"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="d-block fw-medium">Videos</a>
                                                                    <span class="fs-12 text-muted">22% Used</span>
                                                                </div>
                                                                <div class="text-end">
                                                                    <span class="fw-medium">224 files</span>
                                                                    <span class="d-block fs-12 text-muted">24.32GB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                                                <div class="main-card-icon primary2">
                                                                    <div class="avatar avatar-md bg-primary2-transparent border border-primary2 border-opacity-10">
                                                                        <div class="avatar avatar-sm text-primary2">
                                                                            <i class="ti ti-headphones fs-24"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="d-block fw-medium">Audio</a>
                                                                    <span class="fs-12 text-muted">24% Used</span>
                                                                </div>
                                                                <div class="text-end">
                                                                    <span class="fw-medium">1354 files</span>
                                                                    <span class="d-block fs-12 fw-medium">29.45GB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                                                <div class="main-card-icon primary3">
                                                                    <div class="avatar avatar-md bg-primary3-transparent border border-primary3 border-opacity-10">
                                                                        <div class="avatar avatar-sm text-primary3">
                                                                            <i class="ti ti-layout-grid fs-24"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="d-block fw-medium">Apps</a>
                                                                    <span class="fs-12 text-muted">46% Used</span>
                                                                </div>
                                                                <div class="text-end">
                                                                    <span class="fw-medium">18 files</span>
                                                                    <span class="d-block fs-12 text-muted">54.14GB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                                                <div class="main-card-icon info">
                                                                    <div class="avatar avatar-md bg-info-transparent border border-info border-opacity-10">
                                                                        <div class="avatar avatar-sm text-info">
                                                                            <i class="ti ti-file-description fs-24"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="d-block fw-medium">Docs</a>
                                                                    <span class="fs-12 text-muted">18% Used</span>
                                                                </div>
                                                                <div class="text-end">
                                                                    <span class="fw-medium">102 files</span>
                                                                    <span class="d-block fs-12 text-muted">8.42GB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                                                <div class="main-card-icon secondary">
                                                                    <div class="avatar avatar-md bg-secondary-transparent border border-secondary border-opacity-10">
                                                                        <div class="avatar avatar-sm text-secondary">
                                                                            <i class="ti ti-download fs-24"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="d-block fw-medium">Downloads</a>
                                                                    <span class="fs-12 text-muted">16% Used</span>
                                                                </div>
                                                                <div class="text-end">
                                                                    <span class="fw-medium">16 files</span>
                                                                    <span class="d-block fs-12 text-muted">6.36GB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center justify-content-between">
                                                <p class="mb-0 fw-medium fs-14">Folders</p>
                                                <a href="javascript:void(0);" class="fs-12 text-muted fw-medium"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="mb-4 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                                <div class="avatar">
                                                                    <img src="<?php echo base_url('assets/images/media/file-manager/1.png'); ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <div>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-fill fw-semibold text-muted"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="fs-14 fw-medium mb-1 lh-1">
                                                                <a href="javascript:void(0);">Images</a>
                                                            </p>
                                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                <div>
                                                                    <span class="text-muted fs-12">
                                                                        345 Files
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-default fw-medium">
                                                                        124.16MB
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="mb-4 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                                <div class="avatar">
                                                                    <img src="<?php echo base_url('assets/images/media/file-manager/1.png'); ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <div>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-fill fw-semibold text-muted"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="fs-14 fw-medium mb-1 lh-1">
                                                                <a href="javascript:void(0);">Docs</a>
                                                            </p>
                                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                <div>
                                                                    <span class="text-muted fs-12">
                                                                        45 Files
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-default fw-medium">
                                                                        451.15KB
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="mb-4 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                                <div class="avatar">
                                                                    <img src="<?php echo base_url('assets/images/media/file-manager/1.png'); ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <div>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-fill fw-semibold text-muted"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="fs-14 fw-medium mb-1 lh-1">
                                                                <a href="javascript:void(0);">Downloads</a>
                                                            </p>
                                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                <div>
                                                                    <span class="text-muted fs-12">
                                                                        568 Files
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-default fw-medium">
                                                                        1.45GB
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="mb-4 folder-svg-container d-flex flex-wrap justify-content-between align-items-top">
                                                                <div class="avatar">
                                                                    <img src="<?php echo base_url('assets/images/media/file-manager/1.png'); ?>" alt="" class="img-fluid">
                                                                </div>
                                                                <div>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-fill fw-semibold text-muted"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="fs-14 fw-medium mb-1 lh-1">
                                                                <a href="javascript:void(0);">Apps</a>
                                                            </p>
                                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                <div>
                                                                    <span class="text-muted fs-12">
                                                                        247 Files
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-default fw-medium">
                                                                        15.88GB
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3 align-items-center justify-content-between">
                                                <p class="mb-0 fw-medium fs-14">Recent Files</p>
                                                <a href="javascript:void(0);" class="fs-12 text-muted fw-medium"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="table-responsive border border-bottom-0">
                                                        <table class="table text-nowrap table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">File Name</th>
                                                                    <th scope="col">Category</th>
                                                                    <th scope="col">Size</th>
                                                                    <th scope="col">Date Modified</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="files-list">
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-0">
                                                                                <span class="avatar avatar-md svg-primary text-primary">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M112,175.67V168a8,8,0,0,0-8-8H48a8,8,0,0,0-8,8v40a8,8,0,0,0,8,8h56a8,8,0,0,0,8-8v-8.82L144,216V160Z" opacity="0.2"/><polyline points="112 175.67 144 160 144 216 112 199.18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="40" y="160" width="72" height="56" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176,224h24a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                                </span>
                                                                            </div>
                                                                            <div>
                                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">VIDEO_88745_KKI451.mp4</a>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td>Videos</td>
                                                                    <td>89MB</td>
                                                                    <td>15,Aug 2024</td>
                                                                    <td>
                                                                        <div class="hstack gap-2 fs-15">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary2-light"><i class="ri-eye-line"></i></a>
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary3-light"><i class="ri-delete-bin-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-0">
                                                                                <span class="avatar avatar-md svg-primary1 text-primary1">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M112,175.67V168a8,8,0,0,0-8-8H48a8,8,0,0,0-8,8v40a8,8,0,0,0,8,8h56a8,8,0,0,0,8-8v-8.82L144,216V160Z" opacity="0.2"/><polyline points="112 175.67 144 160 144 216 112 199.18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="40" y="160" width="72" height="56" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176,224h24a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                                </span>
                                                                            </div>
                                                                            <div>
                                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">VID-14211110-AKP823.mp4</a>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td>Videos</td>
                                                                    <td>12MB</td>
                                                                    <td>18,May 2024</td>
                                                                    <td>
                                                                        <div class="hstack gap-2 fs-15">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary2-light"><i class="ri-eye-line"></i></a>
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary3-light"><i class="ri-delete-bin-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="table-active">
                                                                    <th scope="row">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-0">
                                                                                <span class="avatar avatar-md svg-primary2 text-primary2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M168,192h16a20,20,0,0,0,0-40H168v56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="152" x2="128" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="56 152 88 152 56 208 88 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><path d="M48,112V40a8,8,0,0,1,8-8h96l56,56v24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                                </span>
                                                                            </div>
                                                                            <div>
                                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">AC-20241.zip</a>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td>Archives</td>
                                                                    <td>564KB</td>
                                                                    <td>06,Mar 2024</td>
                                                                    <td>
                                                                        <div class="hstack gap-2 fs-15">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary2-light"><i class="ri-eye-line"></i></a>
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary3-light"><i class="ri-delete-bin-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-0">
                                                                                <span class="avatar avatar-md svg-primary3 text-primary3">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="48 200 48 160 72 160 96 136 96 224 72 200 48 200" opacity="0.2"/><polygon points="48 200 48 160 72 160 96 136 96 224 72 200 48 200" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,152a32.5,32.5,0,0,1,0,56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M168,224h32a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                                </span>
                                                                            </div>
                                                                            <div>
                                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">AUD__145_24152.mp3</a>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td>Archives</td>
                                                                    <td>264KB</td>
                                                                    <td>26,Apr 2024</td>
                                                                    <td>
                                                                        <div class="hstack gap-2 fs-15">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary2-light"><i class="ri-eye-line"></i></a>
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary3-light"><i class="ri-delete-bin-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-0">
                                                                                <span class="avatar avatar-md svg-secondary text-secondary">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><path d="M48,112V40a8,8,0,0,1,8-8h96l56,56v24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="216 152 184 152 184 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="208" y1="184" x2="184" y2="184" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M48,192H64a20,20,0,0,0,0-40H48v56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M112,152v56h16a28,28,0,0,0,0-56Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                                </span>
                                                                            </div>
                                                                            <div>
                                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Document-file.pdf</a>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td>Documents</td>
                                                                    <td>2.6MB</td>
                                                                    <td>07,Feb 2024</td>
                                                                    <td>
                                                                        <div class="hstack gap-2 fs-15">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary2-light"><i class="ri-eye-line"></i></a>
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary3-light"><i class="ri-delete-bin-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td colspan="5">
                                                                        <nav aria-label="Page navigation">
                                                                            <nav aria-label="Page navigation" class="pagination-style-4 float-end">
                                                                                <ul class="pagination mb-0">
                                                                                    <li class="page-item disabled">
                                                                                        <a class="page-link" href="javascript:void(0)">
                                                                                            Prev
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                                                    <li class="page-item">
                                                                                        <a class="page-link text-primary" href="javascript:void(0)">
                                                                                            next
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </nav>
                                                                        </nav>
                                                                    </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-start gap-3">
                                        <div>
                                            <span class="avatar avatar-md bg-secondary-transparent">
                                                <i class="ri-hard-drive-2-fill fs-16"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <div class=" mb-3"> All Folders
                                                <p class="mb-0"><span class="fw-bold fs-14">68.12GB</span> Used</p>
                                                <p class="fs-11 text-muted mb-0">21.35GB free space</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="file-manager-storage"></div>
                                </div>
                                <div class="card-footer p-0">
                                    <div class="m-3 mb-0">
                                        <span class="fs-12 text-muted">Storage Details</span>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="main-card-icon primary">
                                                    <div class="avatar avatar-lg bg-primary-transparent border border-primary border-opacity-10">
                                                        <div class="avatar avatar-sm text-primary">
                                                            <i class="ti ti-photo fs-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium">Media</span>
                                                    <span class="text-muted fs-12 d-block">3,145 files</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium text-primary mb-0 fs-14">45GB</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-md p-1 bg-primary-transparent mt-3" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="main-card-icon primary1">
                                                    <div class="avatar avatar-lg bg-primary1-transparent border border-primary1 border-opacity-10">
                                                        <div class="avatar avatar-sm text-primary1">
                                                            <i class="ti ti-download fs-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium">Downloads</span>
                                                    <span class="text-muted fs-12 d-block">568 files</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium text-primary1 mb-0 fs-14">66GB</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-md p-1 bg-primary1-transparent mt-3" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-primary1 progress-bar-animated" style="width: 86%"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="main-card-icon primary2">
                                                    <div class="avatar avatar-lg bg-primary2-transparent border border-primary2 border-opacity-10">
                                                        <div class="avatar avatar-sm text-primary2">
                                                            <i class="ti ti-layout-grid fs-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium">Apps</span>
                                                    <span class="text-muted fs-12 d-block">74 files</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium text-primary2 mb-0 fs-14">55GB</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-md p-1 bg-primary2-transparent mt-3" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-primary2 progress-bar-animated" style="width: 75%"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="main-card-icon primary3">
                                                    <div class="avatar avatar-lg bg-primary3-transparent border border-primary3 border-opacity-10">
                                                        <div class="avatar avatar-sm text-primary3">
                                                            <i class="ti ti-file-description fs-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="fw-medium">Documents</span>
                                                    <span class="text-muted fs-12 d-block">1,441 files</span>
                                                </div>
                                                <div>
                                                    <span class="fw-medium text-primary3 mb-0 fs-14">34GB </span>
                                                </div>
                                            </div>
                                            <div class="progress progress-md p-1 bg-primary3-transparent mt-3" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-primary3 progress-bar-animated" style="width: 80%"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="filemanager-upgrade-storage w-100 text-center"> 
                                        <span class="d-block mb-3 pb-1 bg-primary1-transparent rounded-2"> <img src="<?php echo base_url('assets/images/media/file-manager/2.png'); ?>" alt=""> </span>
                                        <span class="fs-16 fw-semibold text-default">Get more storage with Pro.</span>
                                        <span class="d-block text-muted mt-2">Upgrade now for increased storage space and enhanced functionality.</span> 
                                        <div class="mt-4 d-grid"> <button class="btn btn-lg btn-primary btn-wave waves-effect waves-light">Upgrade Now</button>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start::mail information offcanvas -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
                        <div class="offcanvas-body p-0">
                        <div class="selected-file-details">
                                <div class="d-flex p-3 align-items-center justify-content-between border-bottom">
                                    <div>
                                        <h6 class="fw-medium mb-0">File Details</h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown me-1">
                                            <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-light waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Share</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Copy</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Move</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Raname</a></li>
                                            </ul>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-icon btn-outline-light border" data-bs-dismiss="offcanvas"
                                            aria-label="Close"><i class="ri-close-line"></i></button>
                                    </div>
                                </div>
                                <div class="filemanager-file-details" id="filemanager-file-details">
                                    <div class="p-3 text-center border-bottom border-block-end-dashed">
                                        <div class="file-details mb-3">
                                            <img src="<?php echo base_url('assets/images/media/blog/9.jpg'); ?>" alt="">
                                        </div>
                                        <div>
                                            <p class="mb-0 fw-medium fs-16">IMG-09123878-SPK734.jpeg</p>
                                            <p class="mb-0 text-muted fs-10">422KB | 23,Nov 2024</p>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom border-block-end-dashed">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div>
                                                    <span class="fw-medium">File Format : </span><span class="fs-12 text-muted">jpeg</span>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div>
                                                    <p class="fw-medium mb-0">File Description : </p>
                                                    <span class="fs-12 text-muted">This file contains 3 folder Xintra.main & Xintra.premium & Xintra.featured and 42 images and layout styles are added in this update.</span>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <p class="fw-medium mb-0">File Location : </p>
                                                <span class="fs-12 text-muted">Device/Storage/Archives/IMG-09123878-SPK734.jpeg</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="p-3 border-bottom border-block-end-dashed">
                                        <p class="mb-1 fw-medium fs-14">Downloaded from :</p>
                                        <a class="text-primary fw-medium text-break" href="https://themeforest.net/user/spruko/portfolio" target="_blank">
                                            <u>https://themeforest.net/user/spruko/portfolio</u>
                                        </a>
                                    </div>
                                    <div class="p-3">
                                        <p class="mb-2 fw-medium fs-14">Shared With :</p>
                                        <a href="javascript:void(0);">
                                                <div class="d-flex align-items-center p-2 mb-1">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                </span>
                                                <span class="fw-medium flex-fill">Akira Susan</span>
                                                <span class="badge bg-success-transparent fw-normal">28,Nov 2024</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center p-2 mb-1">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="">
                                                </span>
                                                <span class="fw-medium flex-fill">Khalid Ahmad</span>
                                                <span class="badge bg-success-transparent fw-normal">16,Oct 2024</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center p-2 mb-1">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="">
                                                </span>
                                                <span class="fw-medium flex-fill">Jeremiah Jackson</span>
                                                <span class="badge bg-success-transparent fw-normal">05,Dec 2024</span>
                                            </div>
                                        </a>    
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center p-2">
                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                    <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="">
                                                </span>
                                                <span class="fw-medium flex-fill">Brigo Jhonson</span>
                                                <span class="badge bg-success-transparent fw-normal">26,Apr 2024</span>
                                            </div>
                                        </a>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::mail information offcanvas -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <!-- Dropzone JS -->
        <script src="<?php echo base_url('assets/libs/dropzone/dropzone-min.js'); ?>"></script>

        <!-- Internal File Manager JS -->
        <script src="<?php echo base_url('assets/js/file-manager.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>