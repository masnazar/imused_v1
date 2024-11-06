
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>



<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Start::page-header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Blog</h1>
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

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body p-0">
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                        <a href="<?php echo base_url('blog-details'); ?>" class="stretched-link"></a>
                                        <div class="carousel-inner rounded-0">
                                            <div class="carousel-item active">
                                                <img src="<?php echo base_url('assets/images/media/blog/1.jpg'); ?>" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="<?php echo base_url('assets/images/media/blog/3.jpg'); ?>" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="<?php echo base_url('assets/images/media/blog/2.jpg'); ?>" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="fw-semibold"><a href="<?php echo base_url('blog-details'); ?>">Melodic Mastery: A Deep Dive into Music Notes</a></h5>
                                        <p class="mb-3">Exploring the intricate symbols and structures that form the foundation of every melody.</p>
                                        <p class="mb-3">As musicologist Charles Seeger notes, “Music is a system of communication involving structured sounds produced by members of a community that communicate with other members”</p>
                                        <p class="mb-3">“Music” is one of the most difficult terms to define, partially because beliefs about music have changed dramatically over time just in Western culture alone.<a href="javascript:void(0);" class="fw-medium text-primary ms-2 align-middle fs-12 text-Augoration-underline d-inline-block">Read More</a></p>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-md avatar-rounded me-2">
                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-medium">Justin Roy</p>
                                                    <p class="text-muted fs-12 mb-0">26,Mar 2024 - 15:37</p>
                                                </div>
                                            </div>
                                            <div class="avatar avatar-sm bg-danger-transparent avatar-rounded">
                                                <i class="ri-heart-line text-danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="row">
                                <div class="col-xxl-7">
                                    <div class="card custom-card">
                                        <div class="row g-0">
                                            <div class="col-xxl-8 col-md-10 col-sm-10">
                                                <div class="card-body">
                                                    <h5 class="fw-semibold">
                                                        <a href="javascript:void(0);">Listening: Finding Happiness in Music</a>
                                                    </h5>
                                                    <span class="d-block mb-3">
                                                        Different genres and melodies can evoke joy, reduce stress, and create lasting memories. <a href="javascript:void(0);" class="fw-medium text-primary ms-2 align-middle fs-12 text-Augoration-underline d-inline-block">
                                                            Read More
                                                        </a>
                                                    </span>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-start">
                                                            <div class="avatar avatar-md avatar-rounded me-2">
                                                                <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="">
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-medium">Nicolas Noor</p>
                                                                <div class="text-muted fs-12 mb-0">20,Aug 2024 - 16:32</div>
                                                            </div>
                                                        </div>
                                                        <div class="avatar avatar-sm bg-danger-transparent avatar-rounded">
                                                            <i class="ri-heart-line text-danger"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-md-2 col-sm-2">
                                                <img src="<?php echo base_url('assets/images/media/blog/4.jpg'); ?>" class="img-fluid rounded-end h-100 w-100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="row g-0 justify-content-center">
                                            <div class="col-sm-12">
                                                <div class="card-body">
                                                    <h5 class="fw-semibold">
                                                        <a href="javascript:void(0);">Music for the Soul: Enhancing Your Life Through Sound</a>
                                                    </h5>
                                                    <span class="d-block mb-3">
                                                        Learn how to create sacred spaces for musical reflection, find solace in times of hardship, and cultivate mindfulness through. <a href="javascript:void(0);" class="fw-medium text-primary ms-2 align-middle fs-12 text-Augoration-underline d-inline-block">
                                                            Read More
                                                        </a>
                                                    </span>
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-md avatar-rounded me-2">
                                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="">
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-medium">Sissera William</p>
                                                                <div class="text-muted fs-12 mb-0">25,Aug 2024 - 04:25</div>
                                                            </div>
                                                        </div>
                                                        <div class="avatar avatar-sm bg-danger-transparent avatar-rounded ms-auto">
                                                            <i class="ri-heart-fill text-danger"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-center">
                                                <div class="card-body pt-1">
                                                    <img src="<?php echo base_url('assets/images/media/blog/9.jpg'); ?>" class="img-fluid rounded w-100" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-5">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Categories :
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">All<i class="ti ti-arrow-narrow-right ms-1"></i></a>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush list-style">
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="fw-medium"><i class="ri-leaf-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-primary-transparent text-primary"></i>Nature Life</span>
                                                        <span class="badge bg-primary-transparent">12</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="fw-medium"><i class="ri-flight-takeoff-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-primary1-transparent text-primary1"></i>Tourism & Trips </span>
                                                        <span class="badge bg-primary-transparent">36</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="fw-medium"><i class="ri-global-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-primary2-transparent text-primary2"></i>Technology</span>
                                                        <span class="badge bg-primary-transparent">45</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="fw-medium"><i class="ri-cloud-fill p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-primary3-transparent text-primary3"></i>Data Networking</span>
                                                        <span class="badge bg-primary-transparent">124</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="fw-medium"><i class="ri-home-wifi-fill p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-info-transparent text-info"></i>Modern Living</span>
                                                        <span class="badge bg-primary-transparent">16</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <div class="card-title">
                                                Related Blogs:
                                            </div>
                                            <div>
                                                <span class="badge bg-primary-transparent rounded-pill">15</span>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item border-bottom-0">
                                                    <div class="d-flex flew-wrap text-truncate align-items-center gap-2">
                                                        <span class="avatar avatar-xl flex-shrink-0 me-1">
                                                            <img src="<?php echo base_url('assets/images/media/blog/5.jpg'); ?>" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-fill text-wrap">
                                                            <a href="javascript:void(0);" class="fs-14 fw-medium mb-0">Jack Diamond</a>
                                                            <p class="mb-1 popular-blog-content text-truncate text-muted">
                                                                To generate....
                                                            </p>
                                                            <span class="text-muted fs-10">25,Mar 2024 - 22:30</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-bottom-0">
                                                    <div class="d-flex flew-wrap text-truncate align-items-center gap-2">
                                                        <span class="avatar avatar-xl flex-shrink-0 me-1">
                                                            <img src="<?php echo base_url('assets/images/media/blog/6.jpg'); ?>" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-fill text-wrap">
                                                            <a href="javascript:void(0);" class="fs-14 fw-medium mb-0">Jack Diamond</a>
                                                            <p class="mb-1 popular-blog-content text-truncate text-muted">
                                                                To generate....
                                                            </p>
                                                            <span class="text-muted fs-10">25,Mar 2024 - 22:30</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-bottom-0">
                                                    <div class="d-flex flew-wrap text-truncate align-items-center gap-2">
                                                        <span class="avatar avatar-xl flex-shrink-0 me-1">
                                                            <img src="<?php echo base_url('assets/images/media/blog/8.jpg'); ?>" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-fill text-wrap">
                                                            <a href="javascript:void(0);" class="fs-14 fw-medium mb-0">Jack Diamond</a>
                                                            <p class="mb-1 popular-blog-content text-truncate text-muted">
                                                                To generate....
                                                            </p>
                                                            <span class="text-muted fs-10">25,Mar 2024 - 22:30</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-bottom-0">
                                                    <div class="d-flex flew-wrap text-truncate align-items-center gap-2">
                                                        <span class="avatar avatar-xl flex-shrink-0 me-1">
                                                            <img src="<?php echo base_url('assets/images/media/blog/9.jpg'); ?>" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-fill text-wrap">
                                                            <a href="javascript:void(0);" class="fs-14 fw-medium mb-0">Jack Diamond</a>
                                                            <p class="mb-1 popular-blog-content text-truncate text-muted">
                                                                To generate....
                                                            </p>
                                                            <span class="text-muted fs-10">25,Mar 2024 - 22:30</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="p-3 pt-2 mt-1">
                                                <button class="btn mx-auto btn-primary btn-loader text-center justify-content-center w-100">
                                                    <span class="me-2">Load More</span>
                                                    <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-xxl-4 col-lg-12 col-md-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div class="card-title">
                                        Featured Blogs
                                    </div>
                                    <div>
                                        <span class="badge bg-primary-transparent">23 Blogs</span>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex flex-wrap align-items-center gap-3">
                                                <span class="avatar avatar-lg">
                                                    <img src="<?php echo base_url('assets/images/media/blog/14.jpg'); ?>" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fs-14 fw-medium mb-1">Jack Diamond</a>
                                                    <p class="mb-0 mt-1 popular-blog-content text-truncate">
                                                        To generate Lorem Ipsum which looks reasonable
                                                    </p>
                                                    
                                                </div>
                                                <div>
                                                    <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex flex-wrap align-items-center gap-3">
                                                <span class="avatar avatar-lg">
                                                    <img src="<?php echo base_url('assets/images/media/blog/15.jpg'); ?>" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fs-14 fw-medium mb-0">Dhruva Gen</a>
                                                    <p class="mb-0 mt-1 popular-blog-content text-truncate">
                                                        All the Lorem Ipsum generators on the Internet
                                                    </p>
                                                    
                                                </div>
                                                <div>
                                                    <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex flex-wrap align-items-center gap-3">
                                                <span class="avatar avatar-lg">
                                                    <img src="<?php echo base_url('assets/images/media/blog/16.jpg'); ?>" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fs-14 fw-medium mb-0">Henry Milo</a>
                                                    <p class="mb-0 mt-1 popular-blog-content text-truncate">
                                                        Lorem Ipsum is therefore always free from repetition, injected humour
                                                    </p>
                                                    
                                                </div>
                                                <div>
                                                    <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex flex-wrap align-items-center gap-3">
                                                <span class="avatar avatar-lg">
                                                    <img src="<?php echo base_url('assets/images/media/blog/17.jpg'); ?>" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fs-14 fw-medium mb-0">Peter Paul</a>
                                                    <p class="mb-0 mt-1 popular-blog-content text-truncate">
                                                        orem Ipsum is not simply random text. It has roots in a piece of classical
                                                    </p>
                                                    
                                                </div>
                                                <div>
                                                    <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-bottom-0">
                                            <div class="d-flex flex-wrap align-items-center gap-3">
                                                <span class="avatar avatar-lg">
                                                    <img src="<?php echo base_url('assets/images/media/blog/7.jpg'); ?>" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fs-14 fw-medium mb-0">Fahad Rafi</a>
                                                    <p class="mb-0 mt-1 popular-blog-content text-truncate">
                                                        Electronic typesetting, remaining essentially unchanged.
                                                    </p>
                                                    
                                                </div>
                                                <div>
                                                    <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="p-3 pt-2">
                                        <button class="btn mx-auto btn-primary-light btn-loader text-center justify-content-center w-100 btn-sm">
                                            <span class="me-2">Load More</span>
                                            <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-8 col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card">
                                            <a href="javascript:void(0);" class="p-3 pb-0 rounded-5">
                                                <img src="<?php echo base_url('assets/images/media/blog/15.jpg'); ?>" class="rounded-3 card-img-top" alt="...">
                                            </a>
                                        <div class="card-body">
                                            <a href="<?php echo base_url('blog-details'); ?>" class="h5 fw-semibold mb-2 d-block lh-base">Beats to Bliss</a>
                                            <p class="mb-3">Experiencing the Euphoria of Music<a href="javascript:void(0);" class="fw-medium text-primary ms-2 align-middle fs-12 text-Augoration-underline d-inline-block">Read More ?</a></p>
                                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md avatar-rounded me-2">
                                                        <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 fw-medium">Tilly</p>
                                                        <span class="text-muted fs-12 mb-0">19,Apr 2024 - 15:45</span>
                                                    </div>
                                                </div>
                                                <div class="avatar avatar-sm bg-danger-transparent avatar-rounded">
                                                    <i class="ri-heart-line text-danger"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card">
                                            <a href="javascript:void(0);" class="p-3 pb-0 rounded-5">
                                                <img src="<?php echo base_url('assets/images/media/blog/8.jpg'); ?>" class="rounded-3 card-img-top" alt="...">
                                            </a>
                                        <div class="card-body">
                                            <a href="<?php echo base_url('blog-details'); ?>" class="h5 fw-semibold mb-2 d-block lh-base">The Pleasure of Harmony: Unlocking the Joy of Music</a>
                                            <p class="mb-3">Exploring the world of 3D images doesn't have to be limited to consumption – you can also become a creator! With accessible.<a href="javascript:void(0);" class="fw-medium text-primary ms-2 align-middle fs-12 text-Augoration-underline d-inline-block">Read More ?</a></p>
                                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md avatar-rounded me-2">
                                                        <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 fw-medium">Tilly</p>
                                                        <span class="text-muted fs-12 mb-0">19,Apr 2024 - 15:45</span>
                                                    </div>
                                                </div>
                                                <div class="avatar avatar-sm bg-danger-transparent avatar-rounded">
                                                    <i class="ri-heart-line text-danger"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <a href="<?php echo base_url('blog-details'); ?>" class="h5 fw-semibold mb-2 d-block lh-base">Tuning into Happiness: How Music Lifts Our Spirits</a>
                                            <p class="mb-3">Explore the remarkable ability of music to evoke joy, uplift our moods, and nourish our souls. This blog delves into the science behind. <a href="javascript:void(0);" class="fw-medium text-primary1 ms-2 align-middle fs-12 text-Augoration-underline">Read More ?</a></p>
                                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md avatar-rounded me-2">
                                                        <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" alt="">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 fw-medium">Henry Milo</p>
                                                        <span class="text-muted fs-12 mb-0">31,Mar 2024 - 20:13</span>
                                                    </div>
                                                </div>
                                                <div class="avatar avatar-sm bg-danger-transparent avatar-rounded">
                                                    <i class="ri-heart-line text-danger"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="p-3 pt-0 rounded-5">
                                            <img src="<?php echo base_url('assets/images/media/blog/9.jpg'); ?>" class="rounded-3 card-img-bottom" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->
                    
                    <!--Start::row-3 -->
                    <div class="row">
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card overflow-hidden">
                                <a href="javascript:void(0);">
                                    <img src="<?php echo base_url('assets/images/media/blog/12.jpg'); ?>" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <a href="<?php echo base_url('blog-details'); ?>" class="h5 fw-semibold mb-2 d-block lh-base">Understanding Music Notes</a>
                                    <p class="mb-3">Through detailed explanations, visual aids, and practical examples reduce stress, and create lasting memories...<a href="javascript:void(0);" class="fw-medium text-primary ms-2 align-middle fs-12 text-Augoration-underline d-inline-block">Read More ?</a></p>
                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md avatar-rounded me-2">
                                                <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="">
                                            </div>
                                            <div>
                                                <p class="mb-0 fw-medium">Rosalie </p>
                                                <span class="text-muted fs-12 mb-0">26,Mar 2024 - 15:37</span>
                                            </div>
                                        </div>
                                        <div class="avatar avatar-sm bg-danger-transparent avatar-rounded">
                                            <i class="ri-heart-line text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card overflow-hidden">
                                <a href="javascript:void(0);">
                                    <img src="<?php echo base_url('assets/images/media/blog/10.jpg'); ?>" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <a href="<?php echo base_url('blog-details'); ?>" class="h5 fw-semibold mb-2 d-block">Enhancing Your Life Through Sound</a>
                                    <p class="mb-3">Join us on a journey of discovery as we unravel the mysteries of music note..<a href="javascript:void(0);" class="fw-medium text-primary2 ms-2 align-middle fs-12 text-Augoration-underline d-inline-block">Read More ?</a></p>
                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md avatar-rounded me-2">
                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                            </div>
                                            <div>
                                                <p class="mb-0 fw-medium">Emanuel </p>
                                                <span class="text-muted fs-12 mb-0">26,Mar 2024 - 15:37</span>
                                            </div>
                                        </div>
                                        <div class="avatar avatar-sm bg-danger-transparent avatar-rounded">
                                            <i class="ri-heart-line text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <a href="<?php echo base_url('blog-details'); ?>" class="fw-semibold h5 mb-2 d-block lh-base">Mastering the Art of Music Notation</a>
                                    <p class="mb-3">Discover how these seemingly simple marks on a page translate into the beautiful sounds.<a href="javascript:void(0);" class="fw-medium text-primary3 ms-2 align-middle fs-12 text-Augoration-underline d-inline-block">Read More ?</a></p>
                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm avatar-rounded me-2">
                                                <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="">
                                            </div>
                                            <div>
                                                <p class="mb-0 fw-medium">Jacob 
                                                    <span class="text-muted fs-12 mb-0 ms-1 fw-normal">- 06,Mar 2024 - 15:37</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="avatar avatar-sm bg-danger-transparent avatar-rounded">
                                            <i class="ri-heart-line text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);">
                                    <img src="<?php echo base_url('assets/images/media/blog/13.jpg'); ?>" class="card-img-bottom" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <a href="<?php echo base_url('blog-details'); ?>" class="fw-semibold h5 mb-2 d-block lh-base">How to Truly Enjoy Your Favorite Tunes?</a>
                                    <p class="mb-3">Through insightful articles, personal anecdotes, and expert advice, "Music for the Soul"..<a href="javascript:void(0);" class="fw-medium text-primary2 ms-2 align-middle fs-12 text-Augoration-underline d-inline-block">Read More ?</a></p>
                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm avatar-rounded me-2">
                                                <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                            </div>
                                            <div>
                                                <p class="mb-0 fw-medium">Flora 
                                                    <span class="text-muted fs-12 mb-0 fw-normal">- 26,Mar 2024 - 15:37</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="avatar avatar-sm bg-danger-transparent avatar-rounded">
                                            <i class="ri-heart-line text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);">
                                    <img src="<?php echo base_url('assets/images/media/blog/11.jpg'); ?>" class="card-img-bottom" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End::row-3 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	


<?= $this->endSection('scripts'); ?>
