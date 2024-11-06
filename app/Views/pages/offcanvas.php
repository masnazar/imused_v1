
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Offcanvas</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Offcanvas</h1>
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
                                        Static backdrop
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                                            Toggle static offcanvas
                                    </button>
                                    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1"
                                        id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                                        <div class="offcanvas-header border-bottom border-block-end-dashed">
                                            <h5 class="offcanvas-title" id="staticBackdropLabel">Notifications</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body p-0">
                                            <div>
                                                <ul class="list-group list-group-flush mb-0">
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-primary avatar-rounded">
                                                                  NW
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">New Website Created<span class="badge bg-light text-muted float-end">20 Mar 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>30 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-danger avatar-rounded">
                                                                  CH
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for the new project<span class="badge bg-light text-muted float-end">3 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>2 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info avatar-rounded">
                                                                  S
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Decide the live discussion<span class="badge bg-light text-muted float-end">17 Feb 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Meeting at 3:00 pm<span class="badge bg-light text-muted float-end">29 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-success avatar-rounded">
                                                                  RC
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for presentation<span class="badge bg-light text-muted float-end">31 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Brenda New product launching<span class="badge bg-light text-muted float-end">1 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>7 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-secondary avatar-rounded">
                                                                  M
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Medeleine Hey! there i'm available<span class="badge bg-light text-muted float-end">5 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info avatar-rounded">
                                                                  OL
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Olivia New schedule release<span class="badge bg-light text-muted float-end">6 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>45 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-warning avatar-rounded">
                                                                  A
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Kamala Preparing for new admin launch<span class="badge bg-light text-muted float-end">7 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>28 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-light text-muted float-end">10 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>14 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-danger avatar-rounded">
                                                                  CH
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for the new project<span class="badge bg-light text-muted float-end">3 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>2 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info avatar-rounded">
                                                                  S
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Decide the live discussion<span class="badge bg-light text-muted float-end">17 Feb 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Meeting at 3:00 pm<span class="badge bg-light text-muted float-end">29 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-success avatar-rounded">
                                                                  RC
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for presentation<span class="badge bg-light text-muted float-end">31 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                </ul>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
    data-bs-target="#staticBackdrop" aria-controls="staticBackdrop"&gt;
    Toggle static offcanvas
&lt;/button&gt;
&lt;div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1"
id="staticBackdrop" aria-labelledby="staticBackdropLabel"&gt;
&lt;div class="offcanvas-header border-bottom border-block-end-dashed"&gt;
    &lt;h5 class="offcanvas-title" id="staticBackdropLabel"&gt;Notifications&lt;/h5&gt;
    &lt;button type="button" class="btn-close" data-bs-dismiss="offcanvas"
        aria-label="Close"&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class="offcanvas-body p-0"&gt;
    --------
&lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Live demo
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-primary mb-1" data-bs-toggle="offcanvas" href="#offcanvasExample"
                                        role="button" aria-controls="offcanvasExample">
                                        Link with href
                                    </a>
                                    <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                        Button with data-bs-target
                                    </button>
                                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                                        aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header border-bottom border-block-end-dashed">
                                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Notifications</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body p-0">
                                            <div>
                                              <ul class="list-group list-group-flush mb-0">
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md bg-primary avatar-rounded">
                                                                NW
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">New Website Created<span class="badge bg-light text-muted float-end">20 Mar 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>30 mins ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md bg-danger avatar-rounded">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">Prepare for the new project<span class="badge bg-light text-muted float-end">3 Jan 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md bg-info avatar-rounded">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">Decide the live discussion<span class="badge bg-light text-muted float-end">17 Feb 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">Meeting at 3:00 pm<span class="badge bg-light text-muted float-end">29 May 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md bg-success avatar-rounded">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">Prepare for presentation<span class="badge bg-light text-muted float-end">31 May 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">Brenda New product launching<span class="badge bg-light text-muted float-end">1 Jan 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>7 hrs ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md bg-secondary avatar-rounded">
                                                                M
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">Medeleine Hey! there i'm available<span class="badge bg-light text-muted float-end">5 Jan 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md bg-info avatar-rounded">
                                                                OL
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">Olivia New schedule release<span class="badge bg-light text-muted float-end">6 Jan 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>45 mins ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md bg-warning avatar-rounded">
                                                                A
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">Kamala Preparing for new admin launch<span class="badge bg-light text-muted float-end">7 Jan 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>28 mins ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-light text-muted float-end">10 Jan 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>14 hrs ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md bg-danger avatar-rounded">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">Prepare for the new project<span class="badge bg-light text-muted float-end">3 Jan 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md bg-info avatar-rounded">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">Decide the live discussion<span class="badge bg-light text-muted float-end">17 Feb 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">Meeting at 3:00 pm<span class="badge bg-light text-muted float-end">29 May 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md bg-success avatar-rounded">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-medium mb-0">Prepare for presentation<span class="badge bg-light text-muted float-end">31 May 2024</span></p>
                                                            <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                  </li>
                                              </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;a class="btn btn-primary mb-1" data-bs-toggle="offcanvas" href="#offcanvasExample"
    role="button" aria-controls="offcanvasExample"&gt;
    Link with href
&lt;/a&gt;
&lt;button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas"
    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"&gt;
    Button with data-bs-target
&lt;/button&gt;
&lt;div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel"&gt;
    &lt;div class="offcanvas-header border-bottom border-block-end-dashed"&gt;
        &lt;h5 class="offcanvas-title" id="offcanvasExampleLabel"&gt;Notifications&lt;/h5&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="offcanvas"
            aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="offcanvas-body p-0"&gt;
        -------
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Body scrolling
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable
                                    body scrolling
                                    </button>
                                    <div class="offcanvas offcanvas-start" data-bs-scroll="true"
                                        data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
                                        aria-labelledby="offcanvasScrollingLabel">
                                        <div class="offcanvas-header border-bottom border-block-end-dashed">
                                            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Notifications</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body p-0">
                                            <div>
                                                <ul class="list-group list-group-flush mb-0">
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-primary avatar-rounded">
                                                                  NW
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">New Website Created<span class="badge bg-light text-muted float-end">20 Mar 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>30 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-danger avatar-rounded">
                                                                  CH
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for the new project<span class="badge bg-light text-muted float-end">3 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>2 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info avatar-rounded">
                                                                  S
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Decide the live discussion<span class="badge bg-light text-muted float-end">17 Feb 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Meeting at 3:00 pm<span class="badge bg-light text-muted float-end">29 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-success avatar-rounded">
                                                                  RC
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for presentation<span class="badge bg-light text-muted float-end">31 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Brenda New product launching<span class="badge bg-light text-muted float-end">1 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>7 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-secondary avatar-rounded">
                                                                  M
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Medeleine Hey! there i'm available<span class="badge bg-light text-muted float-end">5 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info avatar-rounded">
                                                                  OL
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Olivia New schedule release<span class="badge bg-light text-muted float-end">6 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>45 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-warning avatar-rounded">
                                                                  A
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Kamala Preparing for new admin launch<span class="badge bg-light text-muted float-end">7 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>28 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-light text-muted float-end">10 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>14 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-danger avatar-rounded">
                                                                  CH
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for the new project<span class="badge bg-light text-muted float-end">3 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>2 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info avatar-rounded">
                                                                  S
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Decide the live discussion<span class="badge bg-light text-muted float-end">17 Feb 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Meeting at 3:00 pm<span class="badge bg-light text-muted float-end">29 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-success avatar-rounded">
                                                                  RC
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for presentation<span class="badge bg-light text-muted float-end">31 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                </ul>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable
    body scrolling
    &lt;/button&gt;
    &lt;div class="offcanvas offcanvas-start" data-bs-scroll="true"
        data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
        aria-labelledby="offcanvasScrollingLabel"&gt;
        &lt;div class="offcanvas-header border-bottom border-block-end-dashed"&gt;
            &lt;h5 class="offcanvas-title" id="offcanvasScrollingLabel"&gt;Notifications&lt;/h5&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="offcanvas-body p-0"&gt;
            -----
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Body scrolling and backdrop
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasWithBothOptions"
                                        aria-controls="offcanvasWithBothOptions">Enable both scrolling &amp;
                                        backdrop</button>
                                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                                        id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                        <div class="offcanvas-header border-bottom border-block-end-dashed">
                                            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Notifications</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body p-0">
                                            <div>
                                                <ul class="list-group list-group-flush mb-0">
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-primary avatar-rounded">
                                                                  NW
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">New Website Created<span class="badge bg-light text-muted float-end">20 Mar 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>30 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-danger avatar-rounded">
                                                                  CH
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for the new project<span class="badge bg-light text-muted float-end">3 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>2 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info avatar-rounded">
                                                                  S
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Decide the live discussion<span class="badge bg-light text-muted float-end">17 Feb 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Meeting at 3:00 pm<span class="badge bg-light text-muted float-end">29 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-success avatar-rounded">
                                                                  RC
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for presentation<span class="badge bg-light text-muted float-end">31 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Brenda New product launching<span class="badge bg-light text-muted float-end">1 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>7 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-secondary avatar-rounded">
                                                                  M
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Medeleine Hey! there i'm available<span class="badge bg-light text-muted float-end">5 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info avatar-rounded">
                                                                  OL
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Olivia New schedule release<span class="badge bg-light text-muted float-end">6 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>45 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-warning avatar-rounded">
                                                                  A
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Kamala Preparing for new admin launch<span class="badge bg-light text-muted float-end">7 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>28 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-light text-muted float-end">10 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>14 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-danger avatar-rounded">
                                                                  CH
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for the new project<span class="badge bg-light text-muted float-end">3 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>2 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info avatar-rounded">
                                                                  S
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Decide the live discussion<span class="badge bg-light text-muted float-end">17 Feb 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Meeting at 3:00 pm<span class="badge bg-light text-muted float-end">29 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-success avatar-rounded">
                                                                  RC
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for presentation<span class="badge bg-light text-muted float-end">31 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                </ul>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
    data-bs-target="#offcanvasWithBothOptions"
    aria-controls="offcanvasWithBothOptions">Enable both scrolling &amp;
    backdrop&lt;/button&gt;
&lt;div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
    id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel"&gt;
    &lt;div class="offcanvas-header border-bottom border-block-end-dashed"&gt;
        &lt;h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"&gt;Notifications&lt;/h5&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="offcanvas"
            aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="offcanvas-body p-0"&gt;
        -------
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
                                        Placement
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle top
                                        offcanvas</button>
                                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop"
                                        aria-labelledby="offcanvasTopLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasTopLabel">Offcanvas top</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>
                                    <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right
                                        offcanvas</button>
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                        aria-labelledby="offcanvasRightLabel1">
                                        <div class="offcanvas-header border-bottom border-block-end-dashed">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel1">Notifications
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body p-0">
                                            <div>
                                                <ul class="list-group list-group-flush mb-0">
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-primary avatar-rounded">
                                                                  NW
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">New Website Created<span class="badge bg-light text-muted float-end">20 Mar 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>30 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-danger avatar-rounded">
                                                                  CH
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for the new project<span class="badge bg-light text-muted float-end">3 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>2 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info avatar-rounded">
                                                                  S
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Decide the live discussion<span class="badge bg-light text-muted float-end">17 Feb 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/12.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Meeting at 3:00 pm<span class="badge bg-light text-muted float-end">29 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-success avatar-rounded">
                                                                  RC
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for presentation<span class="badge bg-light text-muted float-end">31 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/1.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Brenda New product launching<span class="badge bg-light text-muted float-end">1 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>7 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-secondary avatar-rounded">
                                                                  M
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Medeleine Hey! there i'm available<span class="badge bg-light text-muted float-end">5 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info avatar-rounded">
                                                                  OL
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Olivia New schedule release<span class="badge bg-light text-muted float-end">6 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>45 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-warning avatar-rounded">
                                                                  A
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Kamala Preparing for new admin launch<span class="badge bg-light text-muted float-end">7 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>28 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/6.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-light text-muted float-end">10 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>14 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-danger avatar-rounded">
                                                                  CH
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for the new project<span class="badge bg-light text-muted float-end">3 Jan 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>2 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info avatar-rounded">
                                                                  S
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Decide the live discussion<span class="badge bg-light text-muted float-end">17 Feb 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md avatar-rounded">
                                                                  <img src="<?php echo base_url('assets/images/faces/14.jpg'); ?>" alt="">
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Meeting at 3:00 pm<span class="badge bg-light text-muted float-end">29 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="d-flex align-items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-success avatar-rounded">
                                                                  RC
                                                              </span>
                                                          </div>
                                                          <div class="flex-fill">
                                                              <p class="fw-medium mb-0">Prepare for presentation<span class="badge bg-light text-muted float-end">31 May 2024</span></p>
                                                              <span class="fs-12 text-muted"><i class="ri-time-line align-middle me-1 d-inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                </ul>
                                              </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle
                                        bottom
                                        offcanvas</button>
                                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
                                        aria-labelledby="offcanvasBottomLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body small">
                                            ...
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas"
    data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"&gt;Toggle top
    offcanvas&lt;/button&gt;
&lt;div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop"
    aria-labelledby="offcanvasTopLabel"&gt;
    &lt;div class="offcanvas-header"&gt;
        &lt;h5 class="offcanvas-title" id="offcanvasTopLabel"&gt;Offcanvas top&lt;/h5&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="offcanvas"
            aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="offcanvas-body"&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas"
    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"&gt;Toggle right
    offcanvas&lt;/button&gt;
&lt;div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
    aria-labelledby="offcanvasRightLabel1"&gt;
    &lt;div class="offcanvas-header border-bottom border-block-end-dashed"&gt;
        &lt;h5 class="offcanvas-title" id="offcanvasRightLabel1"&gt;Notifications
        &lt;/h5&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="offcanvas"
            aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="offcanvas-body p-0"&gt;
        ----------
    &lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas"
    data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"&gt;Toggle
    bottom
    offcanvas&lt;/button&gt;
&lt;div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
    aria-labelledby="offcanvasBottomLabel"&gt;
    &lt;div class="offcanvas-header"&gt;
        &lt;h5 class="offcanvas-title" id="offcanvasBottomLabel"&gt;Offcanvas bottom
        &lt;/h5&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="offcanvas"
            aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="offcanvas-body small"&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>