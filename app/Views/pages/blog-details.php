
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/glightbox/css/glightbox.min.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
        
                    <!-- Start::page-header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Blog Details</h1>
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

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <a href="javascript:void(0);" class="p-3">
                                            <img src="<?php echo base_url('assets/images/media/blog/18.jpg'); ?>" class="card-img rounded-3 blog-details-img" alt="...">
                                        </a>
                                        <div class="card-body p-4">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <p class="h5 fw-semibold mb-0">Music for the Soul: Enhancing Your Life Through Sound</p>
                                                <span class="badge bg-secondary">Music</span>
                                            </div>
                                            <div class="d-sm-flex align-items-center mb-3">
                                                <div class="d-flex align-items-center flex-fill">
                                                    <span class="avatar avatar-sm avatar-rounded me-3">
                                                        <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 fw-medium">Herbert Paul</p>
                                                        <div class="fs-12 text-muted fw-normal"><i class="ri-calendar-fill me-2 align-middle lh-1 text-primary1"></i>12 Jan 2024 - 06:56</div>
                                                    </div>
                                                </div>
                                                <div class="btn-list mt-sm-0 mt-2">
                                                    <button class="btn btn-sm btn-primary2-light btn-wave"><i class="ri-thumb-up-line"></i> Like</button>
                                                    <button class="btn btn-sm btn-primary3-light btn-wave"><i class="ri-share-line"></i> Share</button>
                                                    <button class="btn btn-sm btn-info-light btn-wave"><i class="ri-message-square-line"></i> Comment</button>
                                                </div>
                                            </div>
                                            <p class="mb-4">
                                                Soul-stirring journey to discover the transformative power of music in our lives. This blog is a sanctuary for those seeking solace, inspiration, and healing through the timeless melodies that resonate within us all.
                                            </p>
                                            <p class="mb-4">
                                                From the therapeutic rhythms of drumming circles to the transcendent harmonies of choral singing, <span class="fs-14 fw-medium"> "Music for the Soul" </span> celebrates the diverse ways in which music enriches our lives and nourishes our innermost being.. Whether you're seeking refuge from the stresses of daily life, seeking inspiration for your artistic pursuits, or simply yearning to connect with something greater than yourself.
                                            </p>
                                            
                                            <p class="mb-4">Let the melodies of music be your guiding light on the path to self-discovery and spiritual awakening. Enhancing Your Life Through Sound" invites you to explore the profound impact of music on our emotional well-being, spiritual growth, and everyday existence. The transformative power of music to heal, uplift, and inspire us in ways both subtle and profound.</p>
                                            <blockquote class="blockquote custom-blockquote primary mb-4 text-center">
                                                <h6 class="lh-base">"Music for the Soul" offers a gentle reminder of the healing power that resides within every note, every chord, and every melody. </h6>
                                                <footer class="blockquote-footer mt-3 text-primary1 mb-0">Someone famous as <cite title="Source Title">- Ayyan Abhi</cite></footer>
                                                <span class="quote-icon"><i class="ri-double-quotes-l"></i></span>
                                            </blockquote>
                                            <p class="mb-0">
                                                Through captivating stories, insightful reflections, and practical tips, we delve into the myriad ways in which music enriches our lives, from its ability to evoke cherished memories to its capacity to elevate our consciousness and connect us to something greater than ourselves. Whether you're seeking solace in times of sorrow, seeking inspiration in moments of doubt, or simply yearning to deepen your connection to the world around you, "Music for the Soul" offers a gentle reminder
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-header">
                                            <div class="card-title">
                                                COMMENTS
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush" id="blog-details-comment-list">
                                                <li class="list-group-item border-0 border-bottom">
                                                    <div class="d-flex align-items-start gap-3 flex-wrap">
                                                        <div>
                                                            <span class="avatar avatar-lg avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill w-50">
                                                            <span class="fw-medium d-block mb-1">Mary Cateline</span>
                                                            <span class="d-block mb-3">This blog captures the essence of why music is such a powerful force in our lives. It's not just about the sounds. Thank you for reminding us of the beauty and magic of music</span>
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-primary-light btn-wave">Reply<i class="ri-reply-line ms-1"></i></button>
                                                                <button class="btn btn-sm btn-primary1-light btn-wave">Report<i class="ri-error-warning-line ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button class="btn btn-icon btn-sm btn-primary2-light btn-wave"><i class="ri-thumb-up-line"></i></button>
                                                            <button class="btn btn-icon btn-sm btn-primary3-light btn-wave"><i class="ri-thumb-down-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-0 border-bottom">
                                                    <div class="d-flex align-items-start gap-3 flex-wrap">
                                                        <div>
                                                            <span class="avatar avatar-lg avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill w-50">
                                                            <span class="fw-medium d-block mb-1">Monte vin</span>
                                                            <span class="d-block mb-3">Reading your blog is like taking a journey into the heart of music itself. Your passion for the subject shines through in every word!</span>
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-primary-light btn-wave">Reply<i class="ri-reply-line ms-1"></i></button>
                                                                <button class="btn btn-sm btn-primary1-light btn-wave">Report<i class="ri-error-warning-line ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button class="btn btn-icon btn-sm btn-primary2-light btn-wave"><i class="ri-thumb-up-line"></i></button>
                                                            <button class="btn btn-icon btn-sm btn-primary3-light btn-wave"><i class="ri-thumb-down-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-0">
                                                    <div class="d-flex align-items-start gap-3 flex-wrap">
                                                        <div>
                                                            <span class="avatar avatar-lg avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill w-50">
                                                            <span class="fw-medium d-block mb-1">Master Sets</span>
                                                            <span class="d-block mb-3">The importance of carving out moments of stillness in our busy lives to simply listen and be present with the music. It's a powerful reminder that sometimes .</span>
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-primary-light btn-wave">Reply<i class="ri-reply-line ms-1"></i></button>
                                                                <button class="btn btn-sm btn-primary1-light btn-wave">Report<i class="ri-error-warning-line ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button class="btn btn-icon btn-sm btn-primary2-light btn-wave"><i class="ri-thumb-up-line"></i></button>
                                                            <button class="btn btn-icon btn-sm btn-primary3-light btn-wave"><i class="ri-thumb-down-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Leave a Comment
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row gy-3">
                                                <div class="col-xl-6">
                                                    <label for="blog-first-name" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="blog-first-name" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xl-6"> 
                                                    <label for="blog-email" class="form-label">Email ID</label>
                                                    <input type="text" class="form-control" id="blog-email" placeholder="Enter Email">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="blog-comment" class="form-label">Write Comment</label>
                                                    <textarea class="form-control" id="blog-comment" rows="4" placeholder="Write Here......."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-end">
                                                <button class="btn btn-primary">Post Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Related Topics  
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <i class="ri-brush-fill fs-14 p-1 rounded-2 d-inline-block align-middle lh-1 bg-primary-transparent text-primary"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="fw-medium ms-2">Desiging</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-primary">13</span>
                                                            </div>
                                                        </div>    
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <i class="ri-pencil-fill fs-14 p-1 rounded-2 d-inline-block align-middle lh-1 bg-primary1-transparent text-primary1"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="fw-medium ms-2">Modern</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-primary1">36</span>
                                                            </div>
                                                        </div>    
                                                    </a>                                           
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <i class="ri-microscope-fill fs-14 p-1 rounded-2 d-inline-block align-middle lh-1 bg-primary2-transparent text-primary2"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="fw-medium ms-2">Science</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-primary2">15</span>
                                                            </div>
                                                        </div>    
                                                    </a>       
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <i class="ri-flight-takeoff-fill fs-14 p-1 rounded-2 d-inline-block align-middle lh-1 bg-primary3-transparent text-primary3"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="fw-medium ms-2">Trips</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-primary3">17</span>
                                                            </div>
                                                        </div>    
                                                    </a>      
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <i class="ri-magic-fill fs-14 p-1 rounded-2 d-inline-block align-middle lh-1 bg-secondary-transparent text-secondary"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="fw-medium ms-2">Beauty</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-secondary">66</span>
                                                            </div>
                                                        </div>    
                                                    </a>      
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <i class="ri-shirt-fill fs-14 p-1 rounded-2 d-inline-block align-middle lh-1 bg-success-transparent text-success"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="fw-medium ms-2">Styling</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-warning">33</span>
                                                            </div>
                                                        </div>    
                                                    </a>      
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Recent Posts
                                            </div>
                                            <a href="javascript:void(0);" class="fs-12 text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="d-flex gap-3 flex-wrap align-items-center">
                                                        <span class="avatar avatar-xl">
                                                            <img src="<?php echo base_url('assets/images/media/blog/14.jpg'); ?>" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <a href="javascript:void(0);" class="fs-14 mb-0 text-primary">Nature</a>
                                                            <p class="mb-1 popular-blog-content text-truncate fw-medium">
                                                                The Wonders of Nature
                                                            </p>
                                                            <span class="text-muted fs-12">18 Jan 2024, 15:46</span>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex gap-3 flex-wrap align-items-center">
                                                        <span class="avatar avatar-xl">
                                                            <img src="<?php echo base_url('assets/images/media/blog/15.jpg'); ?>" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <a href="javascript:void(0);" class="fs-14 mb-0 text-primary1">Tourism</a>
                                                            <p class="mb-1 popular-blog-content text-truncate fw-medium">
                                                                Embarking on a Tourism Journey
                                                            </p>
                                                            <span class="text-muted fs-12">20 Feb 2024, 03:03</span>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex gap-3 flex-wrap align-items-center">
                                                        <span class="avatar avatar-xl">
                                                            <img src="<?php echo base_url('assets/images/media/blog/16.jpg'); ?>" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <a href="javascript:void(0);" class="fs-14 mb-0 text-primary2">Technology</a>
                                                            <p class="mb-1 popular-blog-content text-truncate fw-medium">
                                                                Navigating the Digital Frontier
                                                            </p>
                                                            <span class="text-muted fs-12">05 Feb 2024, 16:23</span>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex gap-3 flex-wrap align-items-center">
                                                        <span class="avatar avatar-xl">
                                                            <img src="<?php echo base_url('assets/images/media/blog/17.jpg'); ?>" class="img-fluid" alt="...">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <a href="javascript:void(0);" class="fs-14 mb-0 text-primary3">Networking</a>
                                                            <p class="mb-1 popular-blog-content text-truncate fw-medium">
                                                                More Designing on websites
                                                            </p>
                                                            <span class="text-muted fs-12">13 Mar 2024, 20:14</span>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Gallery
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row gy-3">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <a href="<?php echo base_url('assets/images/media/media-48.jpg'); ?>" class="glightbox card mb-0" data-gallery="gallery1">
                                                        <img src="<?php echo base_url('assets/images/media/media-48.jpg'); ?>" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <a href="<?php echo base_url('assets/images/media/media-49.jpg'); ?>" class="glightbox card mb-0" data-gallery="gallery1">
                                                        <img src="<?php echo base_url('assets/images/media/media-49.jpg'); ?>" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <a href="<?php echo base_url('assets/images/media/media-50.jpg'); ?>" class="glightbox card mb-0" data-gallery="gallery1">
                                                        <img src="<?php echo base_url('assets/images/media/media-50.jpg'); ?>" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <a href="<?php echo base_url('assets/images/media/media-51.jpg'); ?>" class="glightbox card mb-0" data-gallery="gallery1">
                                                        <img src="<?php echo base_url('assets/images/media/media-51.jpg'); ?>" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <a href="<?php echo base_url('assets/images/media/media-52.jpg'); ?>" class="glightbox card mb-0" data-gallery="gallery1">
                                                        <img src="<?php echo base_url('assets/images/media/media-52.jpg'); ?>" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <a href="<?php echo base_url('assets/images/media/media-53.jpg'); ?>" class="glightbox card mb-0" data-gallery="gallery1">
                                                        <img src="<?php echo base_url('assets/images/media/media-53.jpg'); ?>" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <a href="<?php echo base_url('assets/images/media/media-54.jpg'); ?>" class="glightbox card mb-0" data-gallery="gallery1">
                                                        <img src="<?php echo base_url('assets/images/media/media-54.jpg'); ?>" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <a href="<?php echo base_url('assets/images/media/media-55.jpg'); ?>" class="glightbox card mb-0" data-gallery="gallery1">
                                                        <img src="<?php echo base_url('assets/images/media/media-55.jpg'); ?>" alt="image" >
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <a href="<?php echo base_url('assets/images/media/media-56.jpg'); ?>" class="glightbox card mb-0" data-gallery="gallery1">
                                                        <img src="<?php echo base_url('assets/images/media/media-56.jpg'); ?>" alt="image" >
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card bg-primary-transparent border-0 shadow-none">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Our News Letter
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label class="form-check-label mb-3">
                                                Subscribe for Updates on the Latest News & Posts
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control border-0 shadow-none" placeholder="Email Here" aria-label="blog-email" aria-describedby="blog-subscribe">
                                                <button class="btn btn-primary btn-wave" type="button" id="blog-subscribe">Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Popular Tags
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="blog-popular-tags">
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#artist</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#musician</span>
                                                </a>    
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#monology</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#promting</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#critisium</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#mentor</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#adventure</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#capturing</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#navigator</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#mountain</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#popsinger</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#lyrists</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#musicnotes</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#multiplecovers</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#facesact</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#language</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted">#fluency</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Gallery JS -->
        <script src="<?php echo base_url('assets/libs/glightbox/js/glightbox.min.js'); ?>"></script>

        <!-- Blog Details JS -->
        <script src="<?php echo base_url('assets/js/blog-details.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
