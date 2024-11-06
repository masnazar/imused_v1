
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>



<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Pricing</h1>
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
                    <div class="row justify-content-center">
                        <div class="col-xl-9" id="convertable-pricing">
                            <div class="p-3 pt-0">
                                <div class="text-center">
                                    <h3 class="text-primary1">Pricing</h3>
                                    <h5 class="d-block">Plans that flex with your needs.</h5>
                                    <p class="text-muted mb-4">Stay agile with plans that seamlessly adjust to your changing requirements, ensuring you always have the flexibility you need.</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <div class="switcher-box">
                                    <span class="pricing-time-span">Monthly</span>
                                    <div class="switcher-pricing text-center">
                                      <input type="checkbox" class="pricing-toggle">
                                    </div>
                                    <span class="pricing-time-span">Annually <span class="badge bg-primary2 ms-1 rounded-pill">20% off</span></span>
                                </div>
                            </div>
                            <div class="tab-content show" id="monthly1">
                                <div class="row d-flex align-items-center justify-content-center mb-5">
                                    <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                                        <div class="card custom-card pricing-card hover bg-primary">
                                            <div class="pricing-table-item-icon">
                                                <i class="fe fe-zap me-2"></i> Popular
                                            </div>
                                            <div class="card-body p-3 border-bottom border-block-end-dashed border-white-1">
                                                <h6 class="fw-medium mb-1 text-fixed-white">Premium</h6>
                                                <h2 class="mb-3 fw-semibold d-block text-fixed-white">$22.89<span class="fs-12 fw-medium ms-1 op-8"> / Month</span></h2>
                                                <span class="op-7 d-block text-fixed-white fs-11">Unlock powerful tools tailored for seasoned users, designed to take your skills to the next level.</span>
                                            </div>
                                            <div class="card-body p-3 text-fixed-white">
                                                <ul class="list-unstyled pricing-body">
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Unlimited users
                                                            </span>
                                                            <span class="badge bg-success rounded-pill">Unlimited</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Advanced analytics
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Customizable dashboards
                                                            </span>
                                                            <span class="bg-white-transparent op-8 p-1 lh-1 rounded-pill" data-bs-toggle="tooltip" data-bs-title="Provide essential insights and data analysis to help you track the performance.">
                                                                <i class="ri-information-2-line"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Phone support
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Dedicated account manager
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                SLA guarantees
                                                            </span>
                                                            <span class="op-5 fs-12 fw-medium">30 Days</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                On-site training for teams
                                                            </span>
                                                            <span class="op-5 fs-12 fw-medium">120 Days</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer border-top border-block-start-dashed border-white-1 p-3">
                                                <button type="button" class="btn btn-lg btn-white d-grid w-100 btn-wave">
                                                    <span class="ms-4 me-4">Get Started!</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                                        <div class="card custom-card pricing-card">
                                            <div class="card-body p-3 border-bottom border-block-end-dashed">
                                                <h6 class="fw-medium mb-1">Basic</h6>
                                                <h2 class="mb-3 fw-semibold d-block">$8.5<span class="fs-12 fw-medium ms-1"> / Month</span></h2>
                                                <span class="mb-1 text-muted d-block fs-11">Discover the vital features that create an enchanting foundation for a magical beginning.</span>
                                            </div>
                                            <div class="card-body p-3">
                                                <ul class="list-unstyled pricing-body">
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Up to 10 users
                                                            </span>
                                                            <span class="badge bg-primary2-transparent rounded-pill">New</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Community access
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Basic reporting
                                                            </span>
                                                            <span class="bg-info-transparent p-1 lh-1 rounded-pill" data-bs-toggle="tooltip" data-bs-title="Provide essential insights and data analysis to help you track the performance.">
                                                                <i class="ri-information-2-line"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Email support
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Community access
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Access to essential features
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">12 Days</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Mobile app access
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">45 Days</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer p-3">
                                                <button type="button" class="btn btn-lg btn-primary d-grid w-100 btn-wave">
                                                    <span class="ms-4 me-4">Get Started!</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                                        <div class="card custom-card pricing-card">
                                            <div class="card-body p-3 border-bottom border-block-end-dashed">
                                                <h6 class="fw-medium mb-1">Standard</h6>
                                                <h2 class="mb-3 fw-semibold d-block">$29.99<span class="fs-12 fw-medium ms-1"> / Month</span></h2>
                                                <span class="fs-11 text-muted d-block">Elevate to the highest standards with unparalleled excellence and exclusive top-tier support.</span>
                                            </div>
                                            <div class="card-body p-3">
                                                <ul class="list-unstyled pricing-body">
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Up to 50 users
                                                            </span>
                                                            <span class="badge bg-primary2-transparent rounded-pill">New</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Access to webinars
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Advanced reporting
                                                            </span>
                                                            <span class="bg-info-transparent p-1 lh-1 rounded-pill" data-bs-toggle="tooltip" data-bs-title="Provide essential insights and data analysis to help you track the performance.">
                                                                <i class="ri-information-2-line"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Priority email support
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                24/7 chat support
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                All Standard features
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">52 Days</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Team collaboration tools
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">60 Days</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer p-3">
                                                <button type="button" class="btn btn-lg btn-primary d-grid w-100 btn-wave">
                                                    <span class="ms-4 me-4">Get Started!</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="yearly1">
                                <div class="row d-flex align-items-center justify-content-center mb-5">
                                    <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                                        <div class="card custom-card pricing-card hover bg-primary">
                                            <div class="pricing-table-item-icon">
                                                <i class="fe fe-zap me-2"></i> Popular
                                            </div>
                                            <div class="card-body p-3 border-bottom border-block-end-dashed border-white-1">
                                                <h6 class="fw-medium mb-1 text-fixed-white">Premium</h6>
                                                <h2 class="mb-3 fw-semibold d-block text-fixed-white">$1,999.89<span class="fs-12 fw-medium ms-1 op-8"> / Annum</span></h2>
                                                <span class="op-7 d-block text-fixed-white fs-11">Unlock powerful tools tailored for seasoned users, designed to take your skills to the next level.</span>
                                            </div>
                                            <div class="card-body p-3 text-fixed-white">
                                                <ul class="list-unstyled pricing-body">
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Unlimited users
                                                            </span>
                                                            <span class="badge bg-success rounded-pill">Unlimited</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Advanced analytics
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Customizable dashboards
                                                            </span>
                                                            <span class="bg-white-transparent op-8 p-1 lh-1 rounded-pill" data-bs-toggle="tooltip" data-bs-title="Provide essential insights and data analysis to help you track the performance.">
                                                                <i class="ri-information-2-line"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Phone support
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Dedicated account manager
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                SLA guarantees
                                                            </span>
                                                            <span class="op-5 fs-12 fw-medium">90 Days</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                On-site training for teams
                                                            </span>
                                                            <span class="op-5 fs-12 fw-medium">300 Days</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer border-top border-block-start-dashed border-white-1 p-3">
                                                <button type="button" class="btn btn-lg btn-white d-grid w-100 btn-wave">
                                                    <span class="ms-4 me-4">Get Started!</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                                        <div class="card custom-card pricing-card">
                                            <div class="card-body p-3 border-bottom border-block-end-dashed">
                                                <h6 class="fw-medium mb-1">Basic</h6>
                                                <h2 class="mb-3 fw-semibold d-block">$899.96<span class="fs-12 fw-medium ms-1"> / Annum</span></h2>
                                                <span class="mb-1 text-muted d-block fs-11">Discover the vital features that create an enchanting foundation for a magical beginning.</span>
                                            </div>
                                            <div class="card-body p-3">
                                                <ul class="list-unstyled pricing-body">
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Up to 10 users
                                                            </span>
                                                            <span class="badge bg-primary2-transparent rounded-pill">New</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Community access
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Basic reporting
                                                            </span>
                                                            <span class="bg-info-transparent p-1 lh-1 rounded-pill" data-bs-toggle="tooltip" data-bs-title="Provide essential insights and data analysis to help you track the performance.">
                                                                <i class="ri-information-2-line"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Email support
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Community access
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Access to essential features
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">40 Days</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Mobile app access
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">180 Days</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer p-3">
                                                <button type="button" class="btn btn-lg btn-primary d-grid w-100 btn-wave">
                                                    <span class="ms-4 me-4">Get Started!</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                                        <div class="card custom-card pricing-card">
                                            <div class="card-body p-3 border-bottom border-block-end-dashed">
                                                <h6 class="fw-medium mb-1">Standard</h6>
                                                <h2 class="mb-3 fw-semibold d-block">$589.99<span class="fs-12 fw-medium ms-1"> / Annum</span></h2>
                                                <span class="fs-11 text-muted d-block">Elevate to the highest standards with unparalleled excellence and exclusive top-tier support.</span>
                                            </div>
                                            <div class="card-body p-3">
                                                <ul class="list-unstyled pricing-body">
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Up to 50 users
                                                            </span>
                                                            <span class="badge bg-primary2-transparent rounded-pill">New</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Access to webinars
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Advanced reporting
                                                            </span>
                                                            <span class="bg-info-transparent p-1 lh-1 rounded-pill" data-bs-toggle="tooltip" data-bs-title="Provide essential insights and data analysis to help you track the performance.">
                                                                <i class="ri-information-2-line"></i>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Priority email support
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                24/7 chat support
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                All Standard features
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">250 Days</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Team collaboration tools
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">320 Days</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer p-3">
                                                <button type="button" class="btn btn-lg btn-primary d-grid w-100 btn-wave">
                                                    <span class="ms-4 me-4">Get Started!</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row justify-content-center">
                        <div class="col-xl-9">
                            <div class="text-center mb-5 mt-4">
                                <div class="tab-style-1 border p-1 bg-white shadow-sm rounded-pill d-inline-block">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <button type="button" class="nav-link rounded-pill active fw-medium" data-bs-toggle="pill" data-bs-target="#pills-monthly">Monthly</button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="nav-link rounded-pill fw-medium" data-bs-toggle="pill" data-bs-target="#pills-yearly">Annually <span class="badge bg-primary2 ms-1 rounded-pill">Save 10%</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane show active p-0 border-0" id="pills-monthly">
                                    <div class="card shadow-none overflow-hidden border-0">
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-bordered pricing-table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="row" class="">
                                                                <div class="flex-grow-1 text-start">
                                                                    <div class="mb-0 fw-medium fs-16">Plans with tailored features.</div>
                                                                    <span class="op-8 fs-11">Unlock personalized features within your plans, designed specifically to suit your needs.</span>
                                                                </div>
                                                            </th>
                                                            <th scope="row" class="">
                                                                <div class="mb-0 fw-medium fs-16">Basic</div>
                                                                <div class="mb-4 fs-28 fw-medium">$3<span class="fs-13 op-5 ms-1">/ month</span></div>
                                                                <button type="button" class="btn btn-primary3-light d-grid w-100 btn-wave waves-effect waves-light">
                                                                    <span class="ms-4 me-4">Sign Up</span>
                                                                </button>
                                                            </th>
                                                            <th scope="row" class="">
                                                                <div class="mb-0 fw-medium fs-16">Growth</div>
                                                                <div class="mb-4 fs-28 fw-medium">$19<span class="fs-13 op-5 ms-1">/ month</span></div>
                                                                <button type="button" class="btn btn-primary3-light d-grid w-100 btn-wave waves-effect waves-light">
                                                                    <span class="ms-4 me-4">Sign Up</span>
                                                                </button>
                                                            </th>
                                                            <th scope="row" class="position-relative bg-primary-transparent">
                                                                <p class="badge badge-lg bg-primary1 rounded fw-semibold position-absolute end-0 me-2 mb-0">Popular</p>
                                                                <div class="mb-0 fw-medium fs-16">Pro</div>
                                                                <div class="mb-4 fs-28 fw-medium">$25<span class="fs-13 op-5 ms-1">/ month</span></div>
                                                                <button type="button" class="btn btn-primary d-grid w-100 btn-wave waves-effect waves-light">
                                                                    <span class="ms-4 me-4">Sign Up</span>
                                                                </button>
                                                            </th>
                                                            <th scope="row" class="">
                                                                <div class="mb-0 fw-medium fs-16">Professional</div>
                                                                <div class="mb-4 fs-28 fw-medium">$39<span class="fs-13 op-5 ms-1">/ month</span></div>
                                                                <button type="button" class="btn btn-primary3-light d-grid w-100 btn-wave waves-effect waves-light">
                                                                    <span class="ms-4 me-4">Sign Up</span>
                                                                </button>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border">
                                                            <td colspan="5" class="pricing-feature fw-semibold text-primary2">Offered Features :</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Storage Space</td>
                                                            <td>5 GB</td>
                                                            <td>20 GB</td>
                                                            <td class="bg-primary-transparent">Unlimited</td>
                                                            <td>30GB</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Number of Users</td>
                                                            <td>Up to 5</td>
                                                            <td>Up to 5</td>
                                                            <td class="bg-primary-transparent">Unlimited</td>
                                                            <td>Customizable</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Customer Support</td>
                                                            <td>Email Support</td>
                                                            <td>Email and Phone Support</td>
                                                            <td class="bg-primary-transparent">Priority Email, Phone, and On-site Support</td>
                                                            <td>Email and Phone Support</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Advanced Analytics</td>
                                                            <td>Basic Analytics</td>
                                                            <td>Enhanced Analytics</td>
                                                            <td class="bg-primary-transparent">Custom Analytics Solutions</td>
                                                            <td>Enhanced Analytics</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Integrations</td>
                                                            <td>Limited Integrations</td>
                                                            <td>Custom Integrations</td>
                                                            <td class="bg-primary-transparent">More Integrations</td>
                                                            <td>None</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Security Features</td>
                                                            <td>Basic Security Measures	</td>
                                                            <td>Enterprise-level Security Measures</td>
                                                            <td class="bg-primary-transparent">Advanced Security Features</td>
                                                            <td>Enterprise-level Security Measures</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Customization</td>
                                                            <td>Limited Customization Options</td>
                                                            <td>Limited Customization Options</td>
                                                            <td class="bg-primary-transparent">More Customization Options</td>
                                                            <td>Tailored Solutions</td>
                                                        </tr>
                                                        <tr class="border">
                                                            <td colspan="5" class="pricing-feature fw-semibold text-primary2">Functionality :</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">User Management</td>
                                                            <td>Basic User Management</td>
                                                            <td>Comprehensive User Management</td>
                                                            <td class="bg-primary-transparent">Advanced User Management</td>
                                                            <td>Comprehensive User Management</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Reporting Tools</td>
                                                            <td>Standard Reporting Tools</td>
                                                            <td>-</td>
                                                            <td class="bg-primary-transparent">Advanced Reporting Tools</td>
                                                            <td>Customized Reporting Solutions</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">API Access/td>
                                                            <td>Limited API Access</td>
                                                            <td>Limited API Access</td>
                                                            <td class="bg-primary-transparent">Full API Access</td>
                                                            <td>Extended API Access</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="pills-yearly">
                                    <div class="card shadow-none border-0 reveal">
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-bordered pricing-table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="row" class="">
                                                                <div class="flex-grow-1 text-start">
                                                                    <div class="mb-0 fw-medium fs-16">Plans with tailored features.</div>
                                                                    <span class="op-8 fs-11">Unlock personalized features within your plans, designed specifically to suit your needs.</span>
                                                                </div>
                                                            </th>
                                                            <th scope="row" class="">
                                                                <div class="mb-0 fw-medium fs-16">Basic</div>
                                                                <div class="mb-4 fs-28 fw-medium">$50<span class="fs-13 op-5 ms-1">/ Annum</span></div>
                                                                <button type="button" class="btn btn-primary3-light d-grid w-100 btn-wave waves-effect waves-light">
                                                                    <span class="ms-4 me-4">Sign Up</span>
                                                                </button>
                                                            </th>
                                                            <th scope="row" class="">
                                                                <div class="mb-0 fw-medium fs-16">Growth</div>
                                                                <div class="mb-4 fs-28 fw-medium">$239<span class="fs-13 op-5 ms-1">/ Annum</span></div>
                                                                <button type="button" class="btn btn-primary3-light d-grid w-100 btn-wave waves-effect waves-light">
                                                                    <span class="ms-4 me-4">Sign Up</span>
                                                                </button>
                                                            </th>
                                                            <th scope="row" class="position-relative bg-primary-transparent">
                                                                <p class="badge badge-lg bg-primary1 rounded fw-semibold position-absolute end-0 me-2 mb-0">Popular</p>
                                                                <div class="mb-0 fw-medium fs-16">Pro</div>
                                                                <div class="mb-4 fs-28 fw-medium">$899<span class="fs-13 op-5 ms-1">/ Annum</span></div>
                                                                <button type="button" class="btn btn-primary d-grid w-100 btn-wave waves-effect waves-light">
                                                                    <span class="ms-4 me-4">Sign Up</span>
                                                                </button>
                                                            </th>
                                                            <th scope="row" class="">
                                                                <div class="mb-0 fw-medium fs-16">Professional</div>
                                                                <div class="mb-4 fs-28 fw-medium">$799<span class="fs-13 op-5 ms-1">/ Annum</span></div>
                                                                <button type="button" class="btn btn-primary3-light d-grid w-100 btn-wave waves-effect waves-light">
                                                                    <span class="ms-4 me-4">Sign Up</span>
                                                                </button>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border">
                                                            <td colspan="5" class="pricing-feature fw-semibold text-primary2">Offered Features :</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Storage Space</td>
                                                            <td>15 GB</td>
                                                            <td>30 GB</td>
                                                            <td class="bg-primary-transparent">Unlimited</td>
                                                            <td>50GB</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Number of Users</td>
                                                            <td>Up to 10</td>
                                                            <td>Up to 10</td>
                                                            <td class="bg-primary-transparent">Unlimited</td>
                                                            <td>Unlimited</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Customer Support</td>
                                                            <td>Email Support</td>
                                                            <td>Email and Phone Support</td>
                                                            <td class="bg-primary-transparent">Priority Email, Phone, and On-site Support</td>
                                                            <td>Email and Phone Support</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Advanced Analytics</td>
                                                            <td>Basic Analytics</td>
                                                            <td>Enhanced Analytics</td>
                                                            <td class="bg-primary-transparent">Custom Analytics Solutions</td>
                                                            <td>Enhanced Analytics</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Integrations</td>
                                                            <td>Limited Integrations</td>
                                                            <td>-</td>
                                                            <td class="bg-primary-transparent">More Integrations</td>
                                                            <td>More Integrations</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Security Features</td>
                                                            <td>Basic Security Measures	</td>
                                                            <td>Enterprise-level Security Measures</td>
                                                            <td class="bg-primary-transparent">Advanced Security Features</td>
                                                            <td>Enterprise-level Security Measures</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Customization</td>
                                                            <td>Unlimited Customization Options</td>
                                                            <td>Unlimited Customization Options</td>
                                                            <td class="bg-primary-transparent">More Customization Options</td>
                                                            <td>Tailored Solutions</td>
                                                        </tr>
                                                        <tr class="border">
                                                            <td colspan="5" class="pricing-feature fw-semibold text-primary2">Functionality :</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">User Management</td>
                                                            <td>Basic User Management</td>
                                                            <td>Comprehensive User Management</td>
                                                            <td class="bg-primary-transparent">Advanced User Management</td>
                                                            <td>Comprehensive User Management</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">Reporting Tools</td>
                                                            <td>Standard Reporting Tools</td>
                                                            <td>-</td>
                                                            <td class="bg-primary-transparent">Advanced Reporting Tools</td>
                                                            <td>Customized Reporting Solutions</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pricing-feature fw-semibold">API Access/td>
                                                            <td>Limited API Access</td>
                                                            <td>Limited API Access</td>
                                                            <td class="bg-primary-transparent">Full API Access</td>
                                                            <td>Extended API Access</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Pricing JS -->
        <script src="<?php echo base_url('assets/js/pricing.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>