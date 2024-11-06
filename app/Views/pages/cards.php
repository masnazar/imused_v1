
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>



<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ui Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cards</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Cards</h1>
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
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <img src="<?php echo base_url('assets/images/media/media-22.jpg'); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium">Card title</h6>
                                    <p class="card-text text-muted">As the wind whistled through the dense foliage, scattering leaves like whispered secrets, a lone sapling stood resilient, its roots anchored deep in the earth.</p>
                                    <a href="javascript:void(0);" class="btn btn-primary">Read More</a>
                                </div>
                                <div class="card-footer">
                                    <span class="card-text">Last updated 3 mins ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <img src="<?php echo base_url('assets/images/media/media-24.jpg'); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium">Card title</h6>
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                </ul>
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="card-link text-primary">Card link</a>
                                    <a href="javascript:void(0);" class="card-link text-secondary d-inline-block">Another link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Featured</div>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title fw-medium">Special title treatment</h6>
                                    <p class="card-text">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                                    <a href="javascript:void(0);" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium mb-2">Card title</h6>
                                    <p class="card-subtitle mb-3 text-muted">Card subtitle</p>
                                    <p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration many variations of passages of Lorem Ipsum available there are so many ways to solve but the majority.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0);" class="card-link text-danger m-1">Buy Now</a>
                                    <a href="javascript:void(0);" class="card-link text-success m-1"><u>Review</u></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <img src="<?php echo base_url('assets/images/media/media-23.jpg'); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <h6 class="mb-3">Only Card Body:</h6>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <p class="">It is a long established fact that a reader will be distracted by the readable content.</p>
                                    <p class="">It is a long established fact that a reader will be distracted by the readable content.</p>
                                    <a href="javascript:void(0);" class="btn btn-primary1">Read More</a>
                                    <a href="javascript:void(0);" class="btn btn-primary2">Get Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-3-->
                    <h6 class="mb-3">Card Header & Footer:</h6>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card text-center">
                                <div class="card-header border-bottom-0 pb-0">
                                    <span class="ms-auto shadow-lg fs-17"><i class="ri-heart-fill text-danger"></i></span>
                                </div>
                                <div class="card-body pt-1">
                                    <span class="avatar avatar-xl avatar-rounded me-2 mb-2">
                                        <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img">
                                    </span>
                                    <div class="fw-medium fs-16">Iliana Lilly</div>
                                    <p class="mb-4 text-muted fs-11">Web Developer</p>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card border border-primary">
                                <div class="card-body">
                                    <svg class="footer-card-icon my-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#C6CDD1" d="M19 21H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2z"/><path fill="#C6CDD1" d="M11 1H3a2 2 0 0 0-2 2v8h10V1z"/><path fill="#A1ABB2" d="M21 11V3a2 2 0 0 0-2-2h-8v10h10z"/><path fill="#878A8F" d="M1 11v8a2 2 0 0 0 2 2h8V11H1z"/><path fill="#797D82" d="M11 11v10h8a2 2 0 0 0 2-2v-8H11z"/><path fill="#FFF" d="M14 6h5v1h-5z"/><path d="M19 20.75H3a2 2 0 0 1-2-2V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-.25a2 2 0 0 1-2 2z" opacity=".1"/><circle cx="16" cy="16" r="7" fill="#136ad0"/><path d="M16 22.75c-3.08 0-5.704-1.97-6.696-4.713C10.18 20.907 12.85 23 16 23s5.82-2.094 6.696-4.963C21.704 20.781 19.08 22.75 16 22.75z" opacity=".1"/><path fill="#FFF" d="M16 9.25c3.08 0 5.704 1.97 6.696 4.713C21.82 11.093 19.15 9 16 9s-5.82 2.094-6.696 4.963C10.296 11.219 12.92 9.25 16 9.25z" opacity=".2"/><path fill="#FFF" d="M4 6h5v1H4z"/><path fill="#FFF" d="M6 4h1v5H6zM13 14h6v1h-6zM13 17h6v1h-6zM4.379 15.086l.707-.707 3.535 3.535-.707.707z"/><path fill="#FFF" d="m4.379 17.914 3.535-3.535.707.707-3.535 3.535z"/><path fill="#FFF" d="M19 1H3a2 2 0 0 0-2 2v.25a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2V3a2 2 0 0 0-2-2z" opacity=".2"/><linearGradient id="a" x1="14.367" x2="19.862" y1="14.367" y2="19.862" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#3E2723" stop-opacity=".2"/><stop offset="1" stop-color="#3E2723" stop-opacity=".02"/></linearGradient><path fill="url(#a)" d="M19 14v1h-6l2 2h4v1h-6l4.766 4.766a7.014 7.014 0 0 0 5-5L19 14z"/><linearGradient id="b" x1="-.448" x2="23.366" y1="5.662" y2="16.766" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#FFF" stop-opacity=".2"/><stop offset="1" stop-color="#FFF" stop-opacity="0"/></linearGradient><path fill="url(#b)" d="M21 11.11V3a2 2 0 0 0-2-2H3a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8.11A6.974 6.974 0 0 0 16 23c3.86 0 7-3.14 7-7a6.974 6.974 0 0 0-2-4.89z"/></svg>
                                    <p class="mb-0 mt-3 fs-20 fw-medium lh-1">
                                        Calculations
                                    </p>
                                </div>
                                <div class="card-footer">
                                    Lorem Ipsum is therefore always free from repetition, injected humour.
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Gatin Leo</div>
                                            <p class="mb-0 text-muted fs-11">28 Years, Male</p>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    If you are going to use, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators.
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between flex-wrap gap-2">
                                        <div class="fs-semibold fs-14">28,Mar 2024</div>
                                        <div class="fw-medium text-success">Assistant Professor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header border-bottom-0 pb-0">
                                    <div>
                                        <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                        <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                        <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                        <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                        <span class="text-black op-1"><i class="bi bi-star-fill"></i></span>
                                        <p class="d-block text-muted mb-0 fs-12 fw-medium">1 year ago</p>
                                    </div>    
                                </div>
                                <div class="card-body pt-3">
                                    <div class="fw-medium fs-15 mb-2">Very Great!</div>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-sm avatar-rounded me-2">
                                            <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                        </span>
                                        <div class="fw-medium fs-14">Corey Anderson</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between border-bottom-0">
                                    <div class="card-title">
                                        Card With Collapse Button
                                    </div>
                                    <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="ri-arrow-down-s-line fs-18 collapse-open"></i>
                                        <i class="ri-arrow-up-s-line collapse-close fs-18"></i>
                                    </a>
                                </div>
                                <div class="collapse show border-top" id="collapseExample">
                                    <div class="card-body">
                                        <h6 class="card-text fw-medium">Collapsible Card</h6>
                                        <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Card With Close Button
                                    </div>
                                    <a href="javascript:void(0);" data-bs-toggle="card-remove">
                                        <i class="ri-close-line fs-18"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-text fw-medium">Closed Card</h6>
                                    <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Card With Fullscreen Button
                                    </div>
                                    <a href="javascript:void(0);" data-bs-toggle="card-fullscreen">
                                        <i class="ri-fullscreen-line"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-text fw-medium">FullScreen Card</h6>
                                    <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3-->
                    
                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-xl-2">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <img src="<?php echo base_url('assets/images/media/media-4.jpg'); ?>" class="card-img mb-3" alt="...">
                                    <h6 class="card-title fw-medium mb-3">Mountains<span class="badge bg-primary float-end fs-10">New</span></h6>
                                    <p class="card-text">With supporting text below as a natural
                                        lead-in.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <img src="<?php echo base_url('assets/images/media/media-9.jpg'); ?>" class="card-img mb-3" alt="...">
                                    <h6 class="card-title fw-medium mb-3">Hills<span class="badge bg-secondary float-end fs-10">Hot</span></h6>
                                    <p class="card-text">With supporting text below as a natural
                                        lead-in.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <img src="<?php echo base_url('assets/images/media/media-15.jpg'); ?>" class="card-img mb-3" alt="...">
                                    <h6 class="card-title fw-medium mb-3">Nature<span class="badge bg-light text-dark float-end fs-10">Offer</span></h6>
                                    <p class="card-text">With supporting text below as a natural
                                        lead-in.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card text-center">
                                <div class="card-header">
                                    <div class="card-title">Featured</div>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title fw-medium mb-2">Breaking News !</h6>
                                    <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <a href="javascript:void(0);" class="btn btn-primary mt-2">Read More</a>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary mt-2">Close</a>
                                </div>
                                <div class="card-footer text-muted">
                                    11.32pm
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="d-flex w-100">
                                        <div class="me-4">
                                            <span class="avatar avatar-lg avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between w-100 flex-wrap">
                                            <div class="me-3">
                                                <p class="text-muted mb-0">Posts</p>
                                                <p class="fw-medium fs-16 mb-0">25</p>
                                            </div>
                                            <div class="me-3">
                                                <p class="text-muted mb-0">Followers</p>
                                                <p class="fw-medium fs-16 mb-0">1253</p>
                                            </div>
                                            <div class="me-3">
                                                <p class="text-muted mb-0">Following</p>
                                                <p class="fw-medium fs-16 mb-0">367</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="fw-medium fs-16">Angelina Caprio</div>
                                    <div class="text-muted fs-11 mb-4">Angular Developer</div>
                                    <p class="fs-14 fw-medium mb-1">About:</p>
                                    <p class="mb-0 card-text">Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-12">
                            <div class="row">
                                <h6 class="mb-3">Quote:</h6>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                          <blockquote class="blockquote mb-0 text-center">
                                            <h6>Goodness isn't about avoiding falls, but about the courage to rise, stronger and kinder, with every stumble.</h6>
                                            <footer class="blockquote-footer mt-2 fs-14">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                          </blockquote>
                                        </div>
                                      </div>
                                    <div class="card custom-card bg-primary3">
                                        <div class="card-body text-fixed-white">
                                          <blockquote class="blockquote mb-0 text-center">
                                            <h6 class="text-fixed-white">Goodness isn't about avoiding falls, but about the courage to rise, stronger and kinder, with every stumble.</h6>
                                            <footer class="blockquote-footer mt-2 fs-14 text-fixed-white op-7">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                          </blockquote>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-xl-12">
                                    <h6 class="mb-3">List Group:</h6>
                                    <div class="row">
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="card custom-card overflow-hidden">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">An item</li>
                                                    <li class="list-group-item">A second item</li>
                                                    <li class="list-group-item">A third item</li>
                                                    <li class="list-group-item">A fourth item</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="card custom-card overflow-hidden">
                                                <div class="card-header">
                                                    Featured
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">An item</li>
                                                    <li class="list-group-item">A second item</li>
                                                    <li class="list-group-item">A third item</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="card custom-card overflow-hidden">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">An item</li>
                                                    <li class="list-group-item">A second item</li>
                                                    <li class="list-group-item">A third item</li>
                                                </ul>
                                                <div class="card-footer border-top-0">
                                                    Card footer
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-12">
                            <h6 class="mb-3">Using Grid Markups:</h6>
                            <div class="row row-cols-12">
                                <div class="col">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <img src="<?php echo base_url('assets/images/media/media-26.jpg'); ?>" class="card-img mb-3" alt="...">
                                            <h6 class="card-title fw-medium">Product B</h6>
                                            <p class="card-text">With supporting text below as a natural
                                                lead-in to additional content.</p>
                                            <a href="javascript:void(0);" class="btn btn-secondary">Purchase</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <img src="<?php echo base_url('assets/images/media/media-27.jpg'); ?>" class="card-img mb-3" alt="...">
                                            <h6 class="card-title fw-medium">Product-C</h6>
                                            <p class="card-text">With supporting text below as a natural
                                                lead-in to additional content.</p>
                                            <a href="javascript:void(0);" class="btn btn-light">Purchase</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-4 -->
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="row">
                                <h6 class="mb-3">Mixins utilities:</h6>
                                <div class="col-xl-12">
                                    <div class="card border border-success mb-3">
                                        <div class="card-header bg-transparent border-bottom border-success">Header</div>
                                        <div class="card-body text-success">
                                            <h6 class="card-title fw-medium">Looking For Success?</h6>
                                            <p class="card-text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-top border-success">Footer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <h6 class="mb-3">Text Alignment:</h6>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="mb-2">
                                                <span class="avatar avatar-md">
                                                    <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img">
                                                </span>
                                            </div>
                                            <h6 class="card-title fw-medium">Where it come from</h6>
                                            <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                                            <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card text-end custom-card">
                                        <div class="card-body">
                                            <div class="mb-2">
                                                <span class="avatar avatar-md">
                                                    <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                                </span>
                                            </div>
                                            <h6 class="card-title fw-medium">What is special?</h6>
                                            <p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                            <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card text-center custom-card">
                                        <div class="card-body">
                                            <div class="mb-2">
                                                <span class="avatar avatar-md">
                                                    <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="img">
                                                </span>
                                            </div>
                                            <h6 class="card-title fw-medium">Why do we use it?</h6>
                                            <p class="card-text">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                                            <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-4 -->

                    <!-- Start::row-5 -->
                    <div class="row">
                        <div class="col-xxl-6 col-xl-12">
                            <h6 class="mb-3">Using Utilities:</h6>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card w-75">
                                        <div class="card-header">
                                            <div class="card-title">Using Width 75%</div>
                                        </div> 
                                        <div class="card-body">
                                            <div class="card-text">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nostrum omnis excepturi consequatur molestiae 
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="javascript:void(0);" class="btn btn-primary d-grid">Button</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card w-50">
                                        <div class="card-header">
                                            <div class="card-title">Using Width 50%</div>
                                        </div> 
                                        <div class="card-body">
                                            <div class="card-text">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="javascript:void(0);" class="btn btn-primary d-grid">Button</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-12">
                            <h6 class="mb-3">Navigation:</h6>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-header p-4 pt-3 ps-2">
                                            <ul class="nav nav-tabs card-header-tabs ms-1">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="true" href="javascript:void(0);">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="javascript:void(0);">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Special title treatment</h6>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card text-center custom-card">
                                        <div class="card-header">
                                            <ul class="nav nav-pills card-header-pills ms-1">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="javascript:void(0);">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="javascript:void(0);">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Special title treatment</h6>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-5 -->

                    <!-- Start::row-6 -->
                    <h6 class="mb-3">Image Caps:</h6>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <img src="<?php echo base_url('assets/images/media/media-29.jpg'); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium">Image caps are widely used in Blog's</h6>
                                    <p class="card-text mb-3 text-muted">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium">Image caps are widely used in Blog's</h6>
                                    <p class="card-text mb-3 text-muted">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound.</p>
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <img src="<?php echo base_url('assets/images/media/media-28.jpg'); ?>" class="card-img-bottom" alt="...">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Image caps are widely used in Blog's</div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text mb-1 text-muted">This is a wider card with supporting text below
                                        as
                                        a natural lead-in to additional content. This content is a
                                        little
                                        bit longer.</p>
                                </div>
                                <img src="<?php echo base_url('assets/images/media/media-31.jpg'); ?>" class="card-img rounded-0" alt="...">
                                <div class="card-footer">
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <img src="<?php echo base_url('assets/images/media/media-32.jpg'); ?>" class="card-img-top" alt="...">
                                <div class="card-header">
                                    <div class="card-title">Image caps are widely used in Blog's</div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text mb-1 text-muted">This is a wider card with supporting text below
                                        as
                                        a natural lead-in to additional content. This content is a
                                        little
                                        bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium mb-1">Image caps are widely used in Blog's</h6>
                                    <p class="card-text mb-1 text-muted">This is a wider card with supporting text below
                                        as
                                        a natural lead-in to additional content. This content is a
                                        little
                                        bit longer.</p>
                                </div>
                                <img src="<?php echo base_url('assets/images/media/media-30.jpg'); ?>" class="card-img rounded-0" alt="...">
                                <div class="card-body">
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Image caps are widely used in Blog's</div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text mb-1 text-muted">This is a wider card with supporting text below
                                        as
                                        a natural lead-in to additional content. This content is a
                                        little
                                        bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <img src="<?php echo base_url('assets/images/media/media-33.jpg'); ?>" class="card-img-bottom" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- End::row-6 -->

                    <!-- Start::row-7 -->
                    <h6 class="mb-3">Image Overlays:</h6>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card custom-card overlay-card">
                                <img src="<?php echo base_url('assets/images/media/media-35.jpg'); ?>" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0">
                                    <div class="card-header">
                                        <div class="card-title text-fixed-white">
                                            Image Overlays Are Awesome!
                                        </div>
                                    </div>
                                    <div class="card-body text-fixed-white">
                                        <div class="card-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                        <div class="card-text">Last updated 3 mins ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card overlay-card">
                                <img src="<?php echo base_url('assets/images/media/media-36.jpg'); ?>" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                    <div class="card-body text-fixed-white">
                                        <div class="card-text text-fixed-white">
                                            Image Overlays Are Awesome!
                                        </div>
                                        <div class="card-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                        <div class="card-text">Last updated 3 mins ago</div>
                                    </div>
                                    <div class="card-footer text-fixed-white">Last updated 3 mins ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card overlay-card">
                                <img src="<?php echo base_url('assets/images/media/media-34.jpg'); ?>" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-0">
                                    <div class="card-header">
                                        <div class="card-title text-fixed-white">
                                            Image Overlays Are Awesome!
                                        </div>
                                    </div>
                                    <div class="card-body text-fixed-white">
                                        <div class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                    </div>
                                    <div class="card-footer text-fixed-white">Last updated 3 mins ago</div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <!-- End::row-7 -->

                    <!-- Start::row-8 -->
                    <h6 class="mb-3">Horizontal Cards:</h6>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="<?php echo base_url('assets/images/media/media-37.jpg'); ?>" class="img-fluid rounded-start h-100 w-100" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-header">
                                            <div class="card-title">Horizontal Cards</div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Horizontal cards are awesome!</h6>
                                            <p class="card-text">This is a wider card with supporting text below as a natural .</p>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-header">
                                            <div class="card-title">Horizontal Cards</div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Horizontal cards are awesome!</h6>
                                            <p class="card-text mb-3">This is a wider card with suppo    rting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="<?php echo base_url('assets/images/media/media-38.jpg'); ?>" class="img-fluid rounded-end h-100 w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium mb-2">Horizontal Cards</h6>
                                            <div class="card-title mb-3">Horizontal cards are awesome!</div>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="<?php echo base_url('assets/images/media/media-39.jpg'); ?>" class="img-fluid rounded-end h-100 w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-8 -->

                    <!-- Start::row-9 -->
                    <h6 class="mb-3">Background Colored Cards:</h6>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-primary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Gatin Leo</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">Finished by today</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-primary1">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Gatin Leo</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">Finished by today</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-primary2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Gatin Leo</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">Finished by today</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-primary3">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Gatin Leo</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">Finished by today</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-secondary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Elisha Corner</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">Completed 24 days back</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-warning">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Sarah Alina</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">Completed today</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-info">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Monica Karen</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">Pending from 4 days</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-success">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Samantha sid</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">In leave for 1 month</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-danger">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Sebastien steyn</div>
                                            <p class="mb-0 text-fixed-white op-7 fs-12">Completed by Tomorrow</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-light">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/13.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium">Jacob Smith</div>
                                            <p class="mb-0 text-muted op-7 fs-12">Finished by 24,Nov</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-default"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card card-bg-dark">
                                <div class="card-body">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="fs-15 fw-medium text-white">Pope Adam</div>
                                            <p class="mb-0 op-7 fs-12 text-white">Completed on 24,may</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="text-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-9 -->

                    <!-- Start::row-10 -->
                    <h6 class="mb-3">Colored Border Cards:</h6>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card border border-primary custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">Home Page Design
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-primary fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-primary-transparent">Framework</span>
                                        <span class="badge bg-secondary-transparent">Angular</span>
                                        <span class="badge bg-info-transparent">Php</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/2.jpg'); ?>" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-primary1 custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">Home Page Design
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-primary1 fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-primary1-transparent">Framework</span>
                                        <span class="badge bg-secondary-transparent">Angular</span>
                                        <span class="badge bg-info-transparent">Php</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-primary2 custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">Home Page Design
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-primary2 fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-primary2-transparent">Framework</span>
                                        <span class="badge bg-secondary-transparent">Angular</span>
                                        <span class="badge bg-info-transparent">Php</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-primary3 custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">Home Page Design
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-primary1 fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-primary1-transparent">Framework</span>
                                        <span class="badge bg-warning-transparent">Angular</span>
                                        <span class="badge bg-info-transparent">Php</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-secondary custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">Landing Page Design
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-secondary fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-danger-transparent">Laravel</span>
                                        <span class="badge bg-teal-transparent">Codeignitor</span>
                                        <span class="badge bg-success-transparent">Php</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/4.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-warning custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">Update New Project
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-warning fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-warning-transparent">Html</span>
                                        <span class="badge bg-secondary-transparent">Bootstrap</span>
                                        <span class="badge bg-info-transparent">React</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/10.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/16.jpg'); ?>" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-info custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">New Project Discussion
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-info fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-info-transparent">React</span>
                                        <span class="badge bg-primary-transparent">Typescript</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/3.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-danger custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">Recent Projects Testing
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-danger fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-primary-transparent">Ui</span>
                                        <span class="badge bg-secondary-transparent">Angular</span>
                                        <span class="badge bg-info-transparent">Java</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-success custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">About Us Page redesign
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-success fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-danger-transparent">Html</span>
                                        <span class="badge bg-warning-transparent">Symphony</span>
                                        <span class="badge bg-success-transparent">Php</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-light custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">New Employees
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-default fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-warning-transparent">Html</span>
                                        <span class="badge bg-info-transparent">Cake Php</span>
                                        <span class="badge bg-success-transparent">React</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/5.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/7.jpg'); ?>" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card border border-dark custom-card">
                                <div class="card-body">
                                    <p class="fs-14 fw-medium mb-2 lh-1">Terminated Employees
                                        <a href="javascript:void(0);"><i class="bi bi-plus-square float-end text-dark fs-18"></i></a>
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-primary-transparent">Angular</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/9.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/11.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-10 -->

                    <!-- Start::row-11 -->
                    <h6 class="mb-3">Card Groups With Footer:</h6>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card-group">
                                <div class="card custom-card">
                                    <img src="<?php echo base_url('assets/images/media/media-42.jpg'); ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title fw-medium">Writing is an art.</h6>
                                        <p class="card-text">This is a wider card with supporting text below as
                                            a
                                            natural lead-in to additional content. This card has even longer
                                            content
                                            than the first to show that equal height action.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <img src="<?php echo base_url('assets/images/media/media-40.jpg'); ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title fw-medium">Delecious food is a blessing!</h6>
                                        <p class="card-text">This is a wider card with supporting text below as
                                            a
                                            natural lead-in to additional content. This content is a little bit
                                            longer.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <img src="<?php echo base_url('assets/images/media/media-41.jpg'); ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title fw-medium">Is office the best place to earn knowledge?</h6>
                                        <p class="card-text">This card has supporting text below as a natural
                                            lead-in to additional content.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-11 -->

                    <!-- Start::row-12 -->
                    <h6 class="mb-3">Grid Cards:</h6>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                <div class="col">
                                    <div class="card custom-card">
                                        <img src="<?php echo base_url('assets/images/media/media-43.jpg'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Research improves ability & agility !</h6>
                                            <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-card">
                                        <img src="<?php echo base_url('assets/images/media/media-44.jpg'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Morphology of a typical fruit.</h6>
                                            <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-card">
                                        <img src="<?php echo base_url('assets/images/media/media-45.jpg'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Most tropical areas are suitable</h6>
                                            <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card custom-card">
                                        <img src="<?php echo base_url('assets/images/media/media-46.jpg'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title fw-medium">Are They seasonal fruits ?</h6>
                                            <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <!-- End::row-12 -->

                    <!-- Start::row-13 -->
                    <h6 class="mb-3">Cards With Link:</h6>
                    <div class="row">
                        <div class="col-xxl-3 col-xl-12">
                            <div class="card custom-card">
                                <a href="javascript:void(0);" class="card-anchor"></a>
                                <img src="<?php echo base_url('assets/images/media/media-23.jpg'); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium mb-0">Forests are Awesome.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6">
                            <div class="row">
                                <div class="col-xxl-12 col-xl-12">
                                    <div class="card custom-card card-bg-primary">
                                        <a href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="card-body">
                                          <blockquote class="blockquote mb-0 text-center">
                                            <h6 class="text-fixed-white">The best and most beautiful things in the world cannot be seen or even touched — they must be felt with the heart..</h6>
                                            <footer class="blockquote-footer mt-3 fs-14 text-fixed-white op-7">Someone famous as <cite title="Source Title">-Helen Keller</cite></footer>
                                          </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-5 col-xl-12">
                                    <div class="card custom-card">
                                        <a href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <span class="avatar avatar-md">
                                                        <img src="<?php echo base_url('assets/images/faces/15.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="card-text mb-0 fs-14 fw-medium">Atharva Simon.</p>
                                                    <div class="card-title text-muted fs-12 mb-0">Correspondent Professor</div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card border border-info">
                                        <a href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <span class="avatar avatar-xl">
                                                        <img src="<?php echo base_url('assets/images/faces/8.jpg'); ?>" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="card-text text-info mb-1 fs-14 fw-medium">Alicia Keys.</p>
                                                    <div class="card-title fs-12 mb-1">Department Of Commerce</div>
                                                    <div class="card-title text-muted fs-11 mb-0">24 Years, Female</div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-7 col-xl-12">
                                    <div class="card custom-card">
                                        <a href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="row g-0">
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h6 class="card-title mb-2 fw-medium">Fox is Beautiful ?</h6>
                                                    <p class="card-text mb-0">This is a wild animal with supporting tactics and are very efficient at kill,they are very Dangerous.</p>
                                                    <p class="mb-0 card-text">
                                                        Fox lives mainly in forests and are well known for their hunting skills.
                                                    </p>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="<?php echo base_url('assets/images/media/media-39.jpg'); ?>" class="img-fluid rounded-sm-end rounded-bottom h-100 w-100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <a href="javascript:void(0);" class="card-anchor"></a>
                                <img src="<?php echo base_url('assets/images/media/media-47.jpg'); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title fw-medium">Most tropical areas are suitable</h6>
                                    <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-13 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	


<?= $this->endSection('scripts'); ?>
