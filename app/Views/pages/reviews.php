
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- Swiper CSS-->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/swiper/swiper-bundle.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Reviews</h1>
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
                            <h6 class="mb-3">Reviews Style 1 :</h6>
                            <div class="swiper testimonialSwiperService1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between gap-2 align-items-center mb-3">
                                                    <span class="avatar rounded-circle">
                                                        <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </span>
                                                    <div class="text-end">
                                                        <span class="text-info d-block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </span>
                                                        <span class="op-8 d-block fs-12 fw-medium">65 views </span>
                                                    </div>
                                                </div>
                                                <p class="fs-14">
                                                    This
                                                    Product is amazing! It has made my daily tasks so much easier and is
                                                    very user-friendly. -- 
                                                    <a href="javascript:void(0);"
                                                        class="fw-semibold fs-11" data-bs-toggle="tooltip"
                                                        data-bs-custom-class="tooltip-primary" data-bs-placement="top"
                                                        data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                        More
                                                    </a>
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between gap-3">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fw-bold fs-14 text-primary">Hadley Kylin</p>
                                                        <p class="mb-0 fs-11 fw-normal op-8">UX Guru</p>
                                                    </div>
                                                    <div class="ms-auto fs-12 fw-semibold op-8 text-end">
                                                        <div class="btn btn-sm btn-icon btn-primary1-light"><i class="ri-thumb-up-line"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between gap-2 align-items-center mb-3">
                                                    <span class="avatar rounded-circle">
                                                        <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </span>
                                                    <div class="text-end">
                                                        <span class="text-info d-block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </span>
                                                        <span class="op-8 d-block fs-12 fw-medium">87 views </span>
                                                    </div>
                                                </div>
                                                <p class="fs-14">
                                                    Helping
                                                    me plan for my future. Their expertise and personalized approach have given me great.-- 
                                                    <a href="javascript:void(0);"
                                                        class="fw-semibold fs-11" data-bs-toggle="tooltip"
                                                        data-bs-custom-class="tooltip-primary" data-bs-placement="top"
                                                        data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                        More
                                                    </a>
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between gap-3">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fw-bold fs-14 text-primary">Spencer Robin</p>
                                                        <p class="mb-0 fs-11 fw-normal op-8">Support Engineer</p>
                                                    </div>
                                                    <div class="ms-auto fs-12 fw-semibold op-8 text-end">
                                                        <div class="btn btn-sm btn-icon btn-primary1-light"><i class="ri-thumb-up-line"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between gap-2 align-items-center mb-3">
                                                    <span class="avatar rounded-circle">
                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </span>
                                                    <div class="text-end">
                                                        <span class="text-info d-block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </span>
                                                        <span class="op-8 d-block fs-12 fw-medium">47 views </span>
                                                    </div>
                                                </div>
                                                <p class="fs-14">
                                                    A game-changer for our business. Their insights and
                                                strategic advice helped us streamline. -- 
                                                    <a href="javascript:void(0);"
                                                        class="fw-semibold fs-11" data-bs-toggle="tooltip"
                                                        data-bs-custom-class="tooltip-primary" data-bs-placement="top"
                                                        data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                        More
                                                    </a>
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between gap-3">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fw-bold fs-14 text-primary">Iliana Lilly</p>
                                                        <p class="mb-0 fs-11 fw-normal op-8">Optima Works</p>
                                                    </div>
                                                    <div class="ms-auto fs-12 fw-semibold op-8 text-end">
                                                        <div class="btn btn-sm btn-icon btn-primary1-light"><i class="ri-thumb-up-line"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between gap-2 align-items-center mb-3">
                                                    <span class="avatar rounded-circle">
                                                        <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </span>
                                                    <div class="text-end">
                                                        <span class="text-info d-block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </span>
                                                        <span class="op-8 d-block fs-12 fw-medium">87 views </span>
                                                    </div>
                                                </div>
                                                <p class="fs-14">
                                                    Incredibly
                                                    knowledgeable and supportive throughout the entire process. They
                                                    provided clear. -- 
                                                    <a href="javascript:void(0);"
                                                        class="fw-semibold fs-11" data-bs-toggle="tooltip"
                                                        data-bs-custom-class="tooltip-primary" data-bs-placement="top"
                                                        data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                        More
                                                    </a>
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between gap-3">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fw-bold fs-14 text-primary">Tommy Rosen</p>
                                                        <p class="mb-0 fs-11 fw-normal op-8">Freelance Dev</p>
                                                    </div>
                                                    <div class="ms-auto fs-12 fw-semibold op-8 text-end">
                                                        <div class="btn btn-sm btn-icon btn-primary1-light"><i class="ri-thumb-up-line"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between gap-2 align-items-center mb-3">
                                                    <span class="avatar rounded-circle">
                                                        <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </span>
                                                    <div class="text-end">
                                                        <span class="text-info d-block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </span>
                                                        <span class="op-8 d-block fs-12 fw-medium">87 views </span>
                                                    </div>
                                                </div>
                                                <p class="fs-14">
                                                    This
                                                    blender a month ago, and it has exceeded my expectations. It’s powerful,
                                                    easy to clean, and makes perfect --
                                                    <a href="javascript:void(0);"
                                                        class="fw-semibold fs-11" data-bs-toggle="tooltip"
                                                        data-bs-custom-class="tooltip-primary" data-bs-placement="top"
                                                        data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                        More
                                                    </a>
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between gap-3">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fw-bold fs-14 text-primary">Jasmine Della</p>
                                                        <p class="mb-0 fs-11 fw-normal op-8">Web oneness</p>
                                                    </div>
                                                    <div class="ms-auto fs-12 fw-semibold op-8 text-end">
                                                        <div class="btn btn-sm btn-icon btn-primary1-light"><i class="ri-thumb-up-line"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between gap-2 align-items-center mb-3">
                                                    <span class="avatar rounded-circle">
                                                        <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </span>
                                                    <div class="text-end">
                                                        <span class="text-info d-block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </span>
                                                        <span class="op-8 d-block fs-12 fw-medium">87 views </span>
                                                    </div>
                                                </div>
                                                <p class="fs-14">
                                                    Cloud
                                                    architect designed a scalable and efficient cloud infrastructure for us.
                                                    Their expertise has greatly. -- 
                                                    <a href="javascript:void(0);"
                                                        class="fw-semibold fs-11" data-bs-toggle="tooltip"
                                                        data-bs-custom-class="tooltip-primary" data-bs-placement="top"
                                                        data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                        More
                                                    </a>
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between gap-3">
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fw-bold fs-14 text-primary">Samson Thomas</p>
                                                        <p class="mb-0 fs-11 fw-normal op-8">Cloud architect</p>
                                                    </div>
                                                    <div class="ms-auto fs-12 fw-semibold op-8 text-end">
                                                        <div class="btn btn-sm btn-icon btn-primary1-light"><i class="ri-thumb-up-line"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Reviews Style 2 :
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="swiper testimonialSwiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden">
                                                    <div class="p-3 text-center align-items-center justify-content-start gap-2 border-bottom border-block-end-dashed bg-secondary-transparent">
                                                        <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img" class="mb-2 mx-auto text-center avatar avatar-xl rounded-circle shadow-sm">
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold h6">Flora Mary</p>
                                                            <span class="fw-normal text-muted fs-12">Systems
                                                                Analyst</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-0">
                                                            "Technical issues quickly and efficiently resloved. Their
                                                            expertise and promptservice have been critical in keeping our
                                                            operations running smoothly".<i class="op-4 fs-11 fw-medium">--- Flora Mary</i>
                                                        </div>
                                                        <div class="badge bg-primary2 rounded-pill float-end">4.5
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-alt-right review-quote secondary"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden">
                                                    <div
                                                        class="p-3 text-center align-items-center justify-content-start gap-2 border-bottom border-block-end-dashed bg-primary-transparent">
                                                        <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img" class="mb-2 mx-auto text-center avatar avatar-xl rounded-circle shadow-sm">
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold h6">Maria Violet</p>
                                                            <span class="fw-normal text-muted fs-12">Web Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-0">
                                                            "Web developer did an outstanding job creating our new website. It's user-friendly, visually appealing, and has all the functionality we need".<i class="op-4 fs-11 fw-medium">--- Maria Violet</i>
                                                        </div>
                                                        <div class=" badge bg-primary3 rounded-pill float-end">4.5
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-alt-right review-quote primary"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden">
                                                    <div
                                                        class="p-3 text-center align-items-center justify-content-start gap-2 border-bottom border-block-end-dashed bg-primary1-transparent">
                                                        <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="img" class="mb-2 mx-auto text-center avatar avatar-xl rounded-circle shadow-sm">
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold h6">John smith</p>
                                                            <span class="fw-normal text-muted fs-12">Systems Analyst</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-0">
                                                            "Freelance writer delivered high-quality content that perfectly
                                                            captured our brand voice. They were professional, met all deadlines to work".<i class="op-4 fs-11 fw-medium">--- John smith</i>
                                                        </div>
                                                        <div class=" badge bg-primary rounded-pill float-end">4.3
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-alt-right review-quote primary1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden">
                                                    <div
                                                        class="p-3 text-center align-items-center justify-content-start gap-2 border-bottom border-block-end-dashed bg-primary3-transparent">
                                                        <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="img" class="mb-2 mx-auto text-center avatar avatar-xl rounded-circle shadow-sm">
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold h6">Uma Renata</p>
                                                            <span class="fw-normal text-muted fs-12">Systems Analyst</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-0">
                                                            "Template has an excellent theme and functionality. The quality is great, and I
                                                            love that I can download content to make customization!!"<i class="op-4 fs-11 fw-medium">--- Uma Renata</i>
                                                        </div>
                                                        <div class=" badge bg-danger rounded-pill float-end">4.3
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-alt-right review-quote primary3"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden">
                                                    <div
                                                        class="p-3 text-center align-items-center justify-content-start gap-2 border-bottom border-block-end-dashed bg-success-transparent">
                                                        <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img" class="mb-2 mx-auto text-center avatar avatar-xl rounded-circle shadow-sm">
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold h6">Arjun Richel</p>
                                                            <span class="fw-normal text-muted fs-12">Systems Analyst</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-0">
                                                            "This Product is amazing! It has made my daily tasks so much
                                                            easier and is very user-friendly. The product life is impressive too..."<i class="op-4 fs-11 fw-medium">--- Arjun Richel</i>
                                                        </div>
                                                        <div class=" badge bg-secondary rounded-pill float-end">4.1
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-alt-right review-quote success"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card custom-card overflow-hidden">
                                                    <div
                                                        class="p-3 text-center align-items-center justify-content-start gap-2 border-bottom border-block-end-dashed bg-warning-transparent">
                                                        <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img" class="mb-2 mx-auto text-center avatar avatar-xl rounded-circle shadow-sm">
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold h6">Flora Mary</p>
                                                            <span class="fw-normal text-muted fs-12">Data Analyst</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-0">
                                                            "The checkout process was smooth, and my order arrived on time
                                                            and well-packaged. Very satisfied with my purchase...."<i class="op-4 fs-11 fw-medium">--- Arjun Richel</i>
                                                        </div>
                                                        <div class=" badge bg-primary1 rounded-pill float-end">3.8
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-alt-right review-quote warning"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <h6 class="mb-3">Reviews Style 3 :</h6>
                            <div class="review-style-2 mb-3">
                                <div class="swiper pagination-dynamic testimonialSwiperService">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="card custom-card border mb-0">
                                                <div class="card-body">
                                                    <div>
                                                        <span class=""><sup><i class="bi bi-quote fs-1 me-1 text-primary"></i></sup> Customer service at this company is
                                                            outstanding. They were quick to respond to my inquiry and
                                                            resolved my issue within hours. -- 
                                                            <a href="javascript:void(0);" class="fw-semibold fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                                More
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex align-items-center text-end  justify-content-end">
                                                        <div class="text-warning d-block me-1 fs-10">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </div>
                                                        <span>4.3</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar rounded-circle me-2">
                                                            <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="" class="img-fluid rounded-circle border border-primary border-2">
                                                        </span>
                                                        <div>
                                                            <p class="mb-0 fw-semibold">Elsa Teresa</p>
                                                            <p class="mb-0 fs-11 fw-normal op-8">elsateresa@gmail.com</p>
                                                        </div>
                                                        <div class="ms-auto fs-12 fw-semibold op-8 text-end">
                                                            <div class="btn btn-sm btn-icon rounded-circle btn-primary-light"><i class="ri-twitter-x-line"></i></div>
                                                            <div class="btn btn-sm btn-icon rounded-circle btn-primary1-light"><i class="ri-share-line"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card custom-card border mb-0">
                                                <div class="card-body">
                                                    <div>
                                                        <span class=""><sup><i class="bi bi-quote fs-1 me-1 text-primary"></i></sup> Customer service at this company is
                                                            outstanding. They were quick to respond to my inquiry and
                                                            resolved my issue within hours. -- 
                                                            <a href="javascript:void(0);" class="fw-semibold fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                                More
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex align-items-center text-end  justify-content-end">
                                                        <div class="text-warning d-block me-1 fs-10">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </div>
                                                        <span>4.3</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar rounded-circle me-2">
                                                            <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="" class="img-fluid rounded-circle border border-primary border-2">
                                                        </span>
                                                        <div>
                                                            <p class="mb-0 fw-semibold">Henry Milo</p>
                                                            <p class="mb-0 fs-11 fw-normal op-8">henrymilo@gmail.com</p>
                                                        </div>
                                                        <div class="ms-auto fs-12 fw-semibold op-8 text-end">
                                                            <div class="btn btn-sm btn-icon rounded-circle btn-primary-light"><i class="ri-twitter-x-line"></i></div>
                                                            <div class="btn btn-sm btn-icon rounded-circle btn-primary1-light"><i class="ri-share-line"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card custom-card border mb-0">
                                                <div class="card-body">
                                                    <div>
                                                        <span class=""><sup><i class="bi bi-quote fs-1 me-1 text-primary"></i></sup> Customer service at this company is
                                                            outstanding. They were quick to respond to my inquiry and
                                                            resolved my issue within hours. -- 
                                                            <a href="javascript:void(0);" class="fw-semibold fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                                More
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex align-items-center text-end  justify-content-end">
                                                        <div class="text-warning d-block me-1 fs-10">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </div>
                                                        <span>4.3</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar rounded-circle me-2">
                                                            <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="" class="img-fluid rounded-circle border border-primary border-2">
                                                        </span>
                                                        <div>
                                                            <p class="mb-0 fw-semibold">Katherin Oslo</p>
                                                            <p class="mb-0 fs-11 fw-normal op-8">katherinoslo212@gmail.com</p>
                                                        </div>
                                                        <div class="ms-auto fs-12 fw-semibold op-8 text-end">
                                                            <div class="btn btn-sm btn-icon rounded-circle btn-primary-light"><i class="ri-twitter-x-line"></i></div>
                                                            <div class="btn btn-sm btn-icon rounded-circle btn-primary1-light"><i class="ri-share-line"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card custom-card border mb-0">
                                                <div class="card-body">
                                                    <div>
                                                        <span class=""><sup><i class="bi bi-quote fs-1 me-1 text-primary"></i></sup> Customer service at this company is
                                                            outstanding. They were quick to respond to my inquiry and
                                                            resolved my issue within hours. -- 
                                                            <a href="javascript:void(0);" class="fw-semibold fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                                More
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex align-items-center text-end  justify-content-end">
                                                        <div class="text-warning d-block me-1 fs-10">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </div>
                                                        <span>4.3</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar rounded-circle me-2">
                                                            <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="" class="img-fluid rounded-circle border border-primary border-2">
                                                        </span>
                                                        <div>
                                                            <p class="mb-0 fw-semibold">Jestin Calm</p>
                                                            <p class="mb-0 fs-11 fw-normal op-8">jestincalm1999@gmail.com</p>
                                                        </div>
                                                        <div class="ms-auto fs-12 fw-semibold op-8 text-end">
                                                            <div class="btn btn-sm btn-icon rounded-circle btn-primary-light"><i class="ri-twitter-x-line"></i></div>
                                                            <div class="btn btn-sm btn-icon rounded-circle btn-primary1-light"><i class="ri-share-line"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card custom-card border mb-0">
                                                <div class="card-body">
                                                    <div>
                                                        <span class=""><sup><i class="bi bi-quote fs-1 me-1 text-primary"></i></sup> Customer service at this company is
                                                            outstanding. They were quick to respond to my inquiry and
                                                            resolved my issue within hours. -- 
                                                            <a href="javascript:void(0);" class="fw-semibold fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                                More
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex align-items-center text-end  justify-content-end">
                                                        <div class="text-warning d-block me-1 fs-10">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </div>
                                                        <span>4.3</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar rounded-circle me-2">
                                                            <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="" class="img-fluid rounded-circle border border-primary border-2">
                                                        </span>
                                                        <div>
                                                            <p class="mb-0 fw-semibold">Harin ford</p>
                                                            <p class="mb-0 fs-11 fw-normal op-8">harinford345@gmail.com</p>
                                                        </div>
                                                        <div class="ms-auto fs-12 fw-semibold op-8 text-end">
                                                            <div class="btn btn-sm btn-icon rounded-circle btn-primary-light"><i class="ri-twitter-x-line"></i></div>
                                                            <div class="btn btn-sm btn-icon rounded-circle btn-primary1-light"><i class="ri-share-line"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card custom-card border mb-0">
                                                <div class="card-body">
                                                    <div>
                                                        <span class=""><sup><i class="bi bi-quote fs-1 me-1 text-primary"></i></sup> Customer service at this company is
                                                            outstanding. They were quick to respond to my inquiry and
                                                            resolved my issue within hours. -- 
                                                            <a href="javascript:void(0);" class="fw-semibold fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read
                                                                More
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex align-items-center text-end  justify-content-end">
                                                        <div class="text-warning d-block me-1 fs-10">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-line"></i>
                                                        </div>
                                                        <span>4.3</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar rounded-circle me-2">
                                                            <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="" class="img-fluid rounded-circle border border-primary border-2">
                                                        </span>
                                                        <div>
                                                            <p class="mb-0 fw-semibold">Phillip John</p>
                                                            <p class="mb-0 fs-11 fw-normal op-8">phillipjohn21@gmail.com</p>
                                                        </div>
                                                        <div class="ms-auto fs-12 fw-semibold op-8 text-end">
                                                            <div class="btn btn-sm btn-icon rounded-circle btn-primary-light"><i class="ri-twitter-x-line"></i></div>
                                                            <div class="btn btn-sm btn-icon rounded-circle btn-primary1-light"><i class="ri-share-line"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <h6 class="mb-3">Reviews Style 4 :</h6>
                            <div class="swiper testimonialSwiper1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card custom-card border position-relative">
                                            <div class="card-body text-center">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img" class="mx-auto text-center avatar avatar-xl rounded-circle border-3 border border-white-1 mb-2 bg-primary">
                                                    </div>
                                                    <div class="">
                                                        <div class="mb-0 fw-semibold fs-14">Victoria Red</div>
                                                        <div class="mb-2 text-warning fs-11">
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-half-line"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-right fs-2 me-1 text-primary"></i>
                                                        <p class="fs-14 mt-2 mb-1 px-3">
                                                            "Project to success with excellent planning and
                                                            coordination. Their leadership and communication kept
                                                            everything on track and within budget."
                                                        </p>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card border position-relative">
                                            <div class="card-body text-center">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img" class="mx-auto text-center avatar avatar-xl rounded-circle border-3 border border-white-1 mb-2 bg-primary">
                                                    </div>
                                                    <div class="">
                                                        <div class="mb-0 fw-semibold fs-14">Nicolas Noor</div>
                                                        <div class="mb-2 text-warning fs-11">
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-half-line"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-right fs-2 me-1 text-primary"></i>
                                                        <p class="fs-14 mt-2 mb-1 px-3">
                                                            "Cybersecurity specialist has been crucial in protecting
                                                            our data. Their proactive measures and quick response to
                                                            threats give us great peace of mind.."
                                                        </p>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card border position-relative">
                                            <div class="card-body text-center">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="img" class="mx-auto text-center avatar avatar-xl rounded-circle border-3 border border-white-1 mb-2 bg-primary">
                                                    </div>
                                                    <div class="">
                                                        <div class="mb-0 fw-semibold fs-14">Remi Gloria</div>
                                                        <div class="mb-2 text-warning fs-11">
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-half-line"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-right fs-2 me-1 text-primary"></i>
                                                        <p class="fs-14 mt-2 mb-1 px-3">
                                                            "Marketing consultant provided us with a clear,
                                                            actionable strategy that boosted our online presence and
                                                            increased our customer engagement."
                                                        </p>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card border position-relative">
                                            <div class="card-body text-center">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="img" class="mx-auto text-center avatar avatar-xl rounded-circle border-3 border border-white-1 mb-2 bg-primary">
                                                    </div>
                                                    <div class="">
                                                        <div class="mb-0 fw-semibold fs-14">Danny Raj</div>
                                                        <div class="mb-2 text-warning fs-11">
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-half-line"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-right fs-2 me-1 text-primary"></i>
                                                        <p class="fs-14 mt-2 mb-1 px-3">
                                                            "The cloud architect designed a scalable and efficient
                                                            cloud infrastructure for us. Their expertise has greatly
                                                            improved our data accessibility."
                                                        </p>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card border position-relative">
                                            <div class="card-body text-center">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img" class="mx-auto text-center avatar avatar-xl rounded-circle border-3 border border-white-1 mb-2 bg-primary">
                                                    </div>
                                                    <div class="">
                                                        <div class="mb-0 fw-semibold fs-14">Sissera William</div>
                                                        <div class="mb-2 text-warning fs-11">
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-half-line"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-right fs-2 me-1 text-primary"></i>
                                                        <p class="fs-14 mt-2 mb-1 px-3">
                                                            "Cybersecurity specialist has been crucial in protecting
                                                            our data. Their proactive measures and quick response to
                                                            threats give us great peace of mind."
                                                        </p>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card border position-relative">
                                            <div class="card-body text-center">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img" class="mx-auto text-center avatar avatar-xl rounded-circle border-3 border border-white-1 mb-2 bg-primary">
                                                    </div>
                                                    <div class="">
                                                        <div class="mb-0 fw-semibold fs-14">Audie Yose</div>
                                                        <div class="mb-2 text-warning fs-11">
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-fill"></i>
                                                            <i class="lh-1 ri-star-half-line"></i>
                                                        </div>
                                                        <i class="bx bxs-quote-right fs-2 me-1 text-primary"></i>
                                                        <p class="fs-14 mt-2 mb-1 px-3">
                                                            "Graphic designer created beautiful and impactful
                                                            designs for our campaign. Their creativity and attention
                                                            to detail were evident in every piece they delivered."
                                                        </p>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <h6 class="mb-3">Reviews Style 5 :</h6>
                            <div class="swiper testimonialSwiper01 pagination-dynamic">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card custom-card mb-2 overflow-hidden">
                                            <div class="card-body">
                                                <p class="fs-16">
                                                    <i class="ri-double-quotes-l fs-1 lh-1 me-3"></i> The network
                                                    administrator has ensured our systems run smoothly and
                                                    securely,always quick to resolve any issues and keep our network
                                                    optimized."
                                                </p>
                                                <div class="d-flex justify-content-end flex-wrap gap-3">
                                                    <div class="d-flex">
                                                        <div class="me-2 my-auto mb-0">
                                                            <div class="mb-0 lh-1 fs-12 fw-semibold">Vinny Rose
                                                                <span class="fs-11 fw-normal ms-2"><i
                                                                        class="ri-star-fill text-warning fs-9 mb-1 align-middle"></i>
                                                                    4.5</span></div>
                                                            <p class="fs-12 mb-0 op-7">Systems Analyst</p>
                                                        </div>
                                                        <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img"
                                                            class="avatar avatar-md avatar-rounded border border-3 border-primary2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card mb-2 overflow-hidden">
                                            <div class="card-body">
                                                <p class="fs-16">
                                                    <i class="ri-double-quotes-l fs-1 lh-1 me-3"></i> Always
                                                    reliable and efficient. They resolve technical problems quickly
                                                    and provide clear, helpful guidance to our staff.."
                                                </p>
                                                <div class="d-flex justify-content-end flex-wrap gap-3">
                                                    <div class="d-flex">
                                                        <div class="me-2 my-auto mb-0">
                                                            <div class="mb-0 lh-1 fs-12 fw-semibold">Amaya Usha
                                                                <span class="fs-11 fw-normal ms-2"><i
                                                                        class="ri-star-fill text-warning fs-9 mb-1 align-middle"></i>
                                                                    4.5</span></div>
                                                            <p class="fs-12 mb-0 op-7">Web Developer</p>
                                                        </div>
                                                        <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img"
                                                            class="avatar avatar-md avatar-rounded border border-3 border-primary2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card mb-2 overflow-hidden">
                                            <div class="card-body">
                                                <p class="fs-16">
                                                    <i class="ri-double-quotes-l fs-1 lh-1 me-3"></i>Created a
                                                    website that exceeded our expectations. It’s visually appealing,
                                                    user-friendly, and has enhanced our online presence
                                                    significantly.."
                                                </p>
                                                <div class="d-flex justify-content-end flex-wrap gap-3 text-end">
                                                    <div class="d-flex">
                                                        <div class="me-2 my-auto mb-0">
                                                            <div class="mb-0 lh-1 fs-12 fw-semibold">Sophia Ben
                                                                <span class="fs-11 fw-normal ms-2"><i
                                                                        class="ri-star-fill text-warning fs-9 mb-1 align-middle"></i>
                                                                    4.5</span></div>
                                                            <p class="fs-11 mb-0 op-7">Systems Analyst</p>
                                                        </div>
                                                        <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="img"
                                                            class="avatar avatar-md avatar-rounded border border-3 border-primary2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card mb-2 overflow-hidden">
                                            <div class="card-body">
                                                <p class="fs-16">
                                                    <i class="ri-double-quotes-l fs-1 lh-1 me-3"></i>The network
                                                    administrator has ensured our systems run smoothly and
                                                    securely,always quick to resolve any issues and keep our network
                                                    optimized."
                                                </p>
                                                <div class="d-flex justify-content-end text-end flex-wrap gap-3">
                                                    <div class="d-flex">
                                                        <div class="me-2 my-auto mb-0">
                                                            <div class="mb-0 lh-1 fs-12 fw-semibold">Sissera William
                                                                <span class="fs-11 fw-normal ms-2"><i
                                                                        class="ri-star-fill text-warning fs-9 mb-1 align-middle"></i>
                                                                    4.5</span></div>
                                                            <p class="fs-12 mb-0 op-7">Systems Analyst</p>
                                                        </div>
                                                        <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img"
                                                            class="avatar avatar-md avatar-rounded border border-3 border-primary2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card mb-2 overflow-hidden">
                                            <div class="card-body">
                                                <p class="fs-16">
                                                    <i class="ri-double-quotes-l fs-1 lh-1 me-3"></i>The network
                                                    administrator has ensured our systems run smoothly and
                                                    securely,Always quick to resolve any issues and keep our network
                                                    optimized."
                                                </p>
                                                <div class="d-flex justify-content-end text-end flex-wrap gap-3">
                                                    <div class="d-flex">
                                                        <div class="me-2 my-auto mb-0">
                                                            <div class="mb-0 lh-1 fs-12 fw-semibold">Georgia Kate
                                                                <span class="fs-11 fw-normal ms-2"><i
                                                                        class="ri-star-fill text-warning fs-9 mb-1 align-middle"></i>
                                                                    4.5</span></div>
                                                            <p class="fs-12 mb-0 op-7">Systems Analyst</p>
                                                        </div>
                                                        <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img"
                                                            class="avatar avatar-md avatar-rounded border border-3 border-primary2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-custom">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Swiper JS -->
        <script src="<?php echo base_url('assets/libs/swiper/swiper-bundle.min.js'); ?>"></script>

        <!-- Reviews JS -->
        <script src="<?php echo base_url('assets/js/reviews.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
