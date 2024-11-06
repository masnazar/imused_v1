
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
                                    <li class="breadcrumb-item active" aria-current="page">Accordions</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Accordions</h1>
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
                                        Basic Accordion
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use
                                                    to
                                                    style each element. These classes control the overall appearance, as
                                                    well as
                                                    the
                                                    showing and hiding via CSS transitions. You can modify any of this with
                                                    custom
                                                    CSS or overriding our default variables. It's also worth noting that
                                                    just
                                                    about
                                                    any HTML can go within the <code>.accordion-body</code>, though the
                                                    transition
                                                    does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the second item's accordion body.</strong> It is hidden
                                                    by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use
                                                    to
                                                    style each element. These classes control the overall appearance, as
                                                    well as
                                                    the
                                                    showing and hiding via CSS transitions. You can modify any of this with
                                                    custom
                                                    CSS or overriding our default variables. It's also worth noting that
                                                    just
                                                    about
                                                    any HTML can go within the <code>.accordion-body</code>, though the
                                                    transition
                                                    does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden
                                                    by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use
                                                    to
                                                    style each element. These classes control the overall appearance, as
                                                    well as
                                                    the
                                                    showing and hiding via CSS transitions. You can modify any of this with
                                                    custom
                                                    CSS or overriding our default variables. It's also worth noting that
                                                    just
                                                    about
                                                    any HTML can go within the <code>.accordion-body</code>, though the
                                                    transition
                                                    does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="accordion" id="accordionExample"&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingOne"&gt;
                &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne"&gt;
                    Accordion Item #1
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="headingOne" data-bs-parent="#accordionExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use
                    to
                    style each element. These classes control the overall appearance, as
                    well as
                    the
                    showing and hiding via CSS transitions. You can modify any of this with
                    custom
                    CSS or overriding our default variables. It's also worth noting that
                    just
                    about
                    any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
                    transition
                    does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingTwo"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo"&gt;
                    Accordion Item #2
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="headingTwo" data-bs-parent="#accordionExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden
                    by
                    default, until the collapse plugin adds the appropriate classes that we
                    use
                    to
                    style each element. These classes control the overall appearance, as
                    well as
                    the
                    showing and hiding via CSS transitions. You can modify any of this with
                    custom
                    CSS or overriding our default variables. It's also worth noting that
                    just
                    about
                    any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
                    transition
                    does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingThree"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree"&gt;
                    Accordion Item #3
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapseThree" class="accordion-collapse collapse"
                aria-labelledby="headingThree" data-bs-parent="#accordionExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden
                    by
                    default, until the collapse plugin adds the appropriate classes that we
                    use
                    to
                    style each element. These classes control the overall appearance, as
                    well as
                    the
                    showing and hiding via CSS transitions. You can modify any of this with
                    custom
                    CSS or overriding our default variables. It's also worth noting that
                    just
                    about
                    any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the
                    transition
                    does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
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
                                        Always Open Accordion
                                        <p class="text-muted subtitle fs-12 fw-normal">Omit the <code>data-bs-parent</code>
                                            attribute on each
                                            <code>.accordion-collapse</code>
                                            to make accordion items stay open when another item is opened.
                                        </p>
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapseOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="panelsStayOpen-headingOne">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use
                                                    to style each element. These classes control the overall appearance, as
                                                    well
                                                    as the showing and hiding via CSS transitions. It's also worth
                                                    noting
                                                    that just about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-headingTwo">
                                                <div class="accordion-body">
                                                    <strong>This is the second item's accordion body.</strong> It is hidden
                                                    by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use
                                                    to style each element. These classes control the overall appearance, as
                                                    well
                                                    as the showing and hiding via CSS transitions. You can modify any of
                                                    this
                                                    with custom CSS or overriding our default variables. It's also worth
                                                    noting
                                                    that just about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-headingThree">
                                                <div class="accordion-body">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden
                                                    by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use
                                                    to style each element. These classes control the overall appearance, as
                                                    well
                                                    as the showing and hiding via CSS transitions. You can modify any of
                                                    this
                                                    with custom CSS or overriding our default variables. It's also worth
                                                    noting
                                                    that just about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="accordion" id="accordionPanelsStayOpenExample"&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="panelsStayOpen-headingOne"&gt;
                &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne"&gt;
                    Accordion Item #1
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingOne"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use
                    to style each element. These classes control the overall appearance, as
                    well
                    as the showing and hiding via CSS transitions. It's also worth
                    noting
                    that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;,
                    though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="panelsStayOpen-headingTwo"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                    aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo"&gt;
                    Accordion Item #2
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingTwo"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden
                    by
                    default, until the collapse plugin adds the appropriate classes that we
                    use
                    to style each element. These classes control the overall appearance, as
                    well
                    as the showing and hiding via CSS transitions. You can modify any of
                    this
                    with custom CSS or overriding our default variables. It's also worth
                    noting
                    that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;,
                    though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="panelsStayOpen-headingThree"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree"&gt;
                    Accordion Item #3
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden
                    by
                    default, until the collapse plugin adds the appropriate classes that we
                    use
                    to style each element. These classes control the overall appearance, as
                    well
                    as the showing and hiding via CSS transitions. You can modify any of
                    this
                    with custom CSS or overriding our default variables. It's also worth
                    noting
                    that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;,
                    though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Flush Accordion
                                        <p class="subtitle text-muted fs-12 fw-normal">
                                            Add <code>.accordion-flush</code> to remove the default
                                            <code>background-color</code>,
                                            some borders, and some rounded corners to render accordions edge-to-edge with
                                            their
                                            parent container.
                                        </p>
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Placeholder content for this accordion,
                                                    which is
                                                    intended to demonstrate the <code>.accordion-flush</code> class.
                                                    This is
                                                    the
                                                    first item's accordion body.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Placeholder content for this accordion,
                                                    which is
                                                    intended to demonstrate the <code>.accordion-flush</code> class.
                                                    This is
                                                    the
                                                    second item's accordion body. Let's imagine this being filled
                                                    with
                                                    some
                                                    actual content.</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingThree"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Placeholder content for this accordion,
                                                    which is
                                                    intended to demonstrate the <code>.accordion-flush</code> class.
                                                    This is
                                                    the
                                                    third item's accordion body. Nothing more exciting happening
                                                    here in
                                                    terms
                                                    of content, but just filling up the space to make it look, at
                                                    least
                                                    at
                                                    first
                                                    glance, a bit more representative of how this would look in a
                                                    real-world
                                                    application.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-flush" id="accordionFlushExample"&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="flush-headingOne"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                    aria-expanded="false" aria-controls="flush-collapseOne"&gt;
                    Accordion Item #1
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="flush-collapseOne" class="accordion-collapse collapse"
                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample"&gt;
                &lt;div class="accordion-body"&gt;Placeholder content for this accordion,
                    which is
                    intended to demonstrate the &lt;code&gt;.accordion-flush&lt;/code&gt; class.
                    This is
                    the
                    first item's accordion body.&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="flush-headingTwo"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                    aria-expanded="false" aria-controls="flush-collapseTwo"&gt;
                    Accordion Item #2
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="flush-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample"&gt;
                &lt;div class="accordion-body"&gt;Placeholder content for this accordion,
                    which is
                    intended to demonstrate the &lt;code&gt;.accordion-flush&lt;/code&gt; class.
                    This is
                    the
                    second item's accordion body. Let's imagine this being filled
                    with
                    some
                    actual content.&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="flush-headingThree"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                    aria-expanded="false" aria-controls="flush-collapseThree"&gt;
                    Accordion Item #3
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="flush-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample"&gt;
                &lt;div class="accordion-body"&gt;Placeholder content for this accordion,
                    which is
                    intended to demonstrate the &lt;code&gt;.accordion-flush&lt;/code&gt; class.
                    This is
                    the
                    third item's accordion body. Nothing more exciting happening
                    here in
                    terms
                    of content, but just filling up the space to make it look, at
                    least
                    at
                    first
                    glance, a bit more representative of how this would look in a
                    real-world
                    application.&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <h6 class="mb-3">Light Colors:</h6>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Primary
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="accordion accordion-primary" id="accordionPrimaryExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingPrimaryOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsePrimaryOne" aria-expanded="true"
                                                    aria-controls="collapsePrimaryOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="collapsePrimaryOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingPrimaryOne"
                                                data-bs-parent="#accordionPrimaryExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingPrimaryTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsePrimaryTwo"
                                                    aria-expanded="false" aria-controls="collapsePrimaryTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="collapsePrimaryTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingPrimaryTwo"
                                                data-bs-parent="#accordionPrimaryExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingPrimaryThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsePrimaryThree"
                                                    aria-expanded="false" aria-controls="collapsePrimaryThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="collapsePrimaryThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingPrimaryThree"
                                                data-bs-parent="#accordionPrimaryExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-primary" id="accordionPrimaryExample"&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingPrimaryOne"&gt;
                &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsePrimaryOne" aria-expanded="true"
                    aria-controls="collapsePrimaryOne"&gt;
                    Accordion Item #1
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapsePrimaryOne" class="accordion-collapse collapse show"
                aria-labelledby="headingPrimaryOne"
                data-bs-parent="#accordionPrimaryExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingPrimaryTwo"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapsePrimaryTwo"
                    aria-expanded="false" aria-controls="collapsePrimaryTwo"&gt;
                    Accordion Item #2
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapsePrimaryTwo" class="accordion-collapse collapse"
                aria-labelledby="headingPrimaryTwo"
                data-bs-parent="#accordionPrimaryExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingPrimaryThree"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapsePrimaryThree"
                    aria-expanded="false" aria-controls="collapsePrimaryThree"&gt;
                    Accordion Item #3
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapsePrimaryThree" class="accordion-collapse collapse"
                aria-labelledby="headingPrimaryThree"
                data-bs-parent="#accordionPrimaryExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
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
                                        Secondary
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="accordion accordion-secondary" id="accordionSecondaryExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSecondaryOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSecondaryOne" aria-expanded="true"
                                                    aria-controls="collapseSecondaryOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="collapseSecondaryOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingSecondaryOne"
                                                data-bs-parent="#accordionSecondaryExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSecondaryTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSecondaryTwo"
                                                    aria-expanded="false" aria-controls="collapseSecondaryTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="collapseSecondaryTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingSecondaryTwo"
                                                data-bs-parent="#accordionSecondaryExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSecondaryThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSecondaryThree"
                                                    aria-expanded="false" aria-controls="collapseSecondaryThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="collapseSecondaryThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingSecondaryThree"
                                                data-bs-parent="#accordionSecondaryExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-secondary" id="accordionSecondaryExample"&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingSecondaryOne"&gt;
                &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSecondaryOne" aria-expanded="true"
                    aria-controls="collapseSecondaryOne"&gt;
                    Accordion Item #1
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapseSecondaryOne" class="accordion-collapse collapse show"
                aria-labelledby="headingSecondaryOne"
                data-bs-parent="#accordionSecondaryExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingSecondaryTwo"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseSecondaryTwo"
                    aria-expanded="false" aria-controls="collapseSecondaryTwo"&gt;
                    Accordion Item #2
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapseSecondaryTwo" class="accordion-collapse collapse"
                aria-labelledby="headingSecondaryTwo"
                data-bs-parent="#accordionSecondaryExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingSecondaryThree"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseSecondaryThree"
                    aria-expanded="false" aria-controls="collapseSecondaryThree"&gt;
                    Accordion Item #3
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapseSecondaryThree" class="accordion-collapse collapse"
                aria-labelledby="headingSecondaryThree"
                data-bs-parent="#accordionSecondaryExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <h6 class="mb-3">Colored Borders:</h6>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Primary
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="accordion accordion-border-primary accordions-items-seperate"
                                        id="accordionprimaryborderExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingborderprimaryOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#primaryBorderOne" aria-expanded="true"
                                                    aria-controls="primaryBorderOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="primaryBorderOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingborderprimaryOne"
                                                data-bs-parent="#accordionprimaryborderExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingborderprimaryTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderTwo"
                                                    aria-expanded="false" aria-controls="primaryBorderTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="primaryBorderTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingborderprimaryTwo"
                                                data-bs-parent="#accordionprimaryborderExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingborderprimaryThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderThree"
                                                    aria-expanded="false" aria-controls="primaryBorderThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="primaryBorderThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingborderprimaryThree"
                                                data-bs-parent="#accordionprimaryborderExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-border-primary accordions-items-seperate"
        id="accordionprimaryborderExample"&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingborderprimaryOne"&gt;
                &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#primaryBorderOne" aria-expanded="true"
                    aria-controls="primaryBorderOne"&gt;
                    Accordion Item #1
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="primaryBorderOne" class="accordion-collapse collapse show"
                aria-labelledby="headingborderprimaryOne"
                data-bs-parent="#accordionprimaryborderExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingborderprimaryTwo"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#primaryBorderTwo"
                    aria-expanded="false" aria-controls="primaryBorderTwo"&gt;
                    Accordion Item #2
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="primaryBorderTwo" class="accordion-collapse collapse"
                aria-labelledby="headingborderprimaryTwo"
                data-bs-parent="#accordionprimaryborderExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingborderprimaryThree"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#primaryBorderThree"
                    aria-expanded="false" aria-controls="primaryBorderThree"&gt;
                    Accordion Item #3
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="primaryBorderThree" class="accordion-collapse collapse"
                aria-labelledby="headingborderprimaryThree"
                data-bs-parent="#accordionprimaryborderExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
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
                                        Success
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="accordion accordion-border-success accordions-items-seperate"
                                        id="accordionsuccessborderExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingbordersuccessOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#successBorderOne" aria-expanded="true"
                                                    aria-controls="successBorderOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="successBorderOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingbordersuccessOne"
                                                data-bs-parent="#accordionsuccessborderExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingbordersuccessTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#successBorderTwo"
                                                    aria-expanded="false" aria-controls="successBorderTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="successBorderTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingbordersuccessTwo"
                                                data-bs-parent="#accordionsuccessborderExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingbordersuccessThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#successBorderThree"
                                                    aria-expanded="false" aria-controls="successBorderThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="successBorderThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingbordersuccessThree"
                                                data-bs-parent="#accordionsuccessborderExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-border-success accordions-items-seperate"
        id="accordionsuccessborderExample"&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingbordersuccessOne"&gt;
                &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#successBorderOne" aria-expanded="true"
                    aria-controls="successBorderOne"&gt;
                    Accordion Item #1
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="successBorderOne" class="accordion-collapse collapse show"
                aria-labelledby="headingbordersuccessOne"
                data-bs-parent="#accordionsuccessborderExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingbordersuccessTwo"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#successBorderTwo"
                    aria-expanded="false" aria-controls="successBorderTwo"&gt;
                    Accordion Item #2
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="successBorderTwo" class="accordion-collapse collapse"
                aria-labelledby="headingbordersuccessTwo"
                data-bs-parent="#accordionsuccessborderExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingbordersuccessThree"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#successBorderThree"
                    aria-expanded="false" aria-controls="successBorderThree"&gt;
                    Accordion Item #3
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="successBorderThree" class="accordion-collapse collapse"
                aria-labelledby="headingbordersuccessThree"
                data-bs-parent="#accordionsuccessborderExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <h6 class="mb-3">Solid Colors:</h6>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Primary
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="accordion accordion-solid-primary" id="accordionPrimarySolidExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingPrimarySolidOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsePrimarySolidOne" aria-expanded="true"
                                                    aria-controls="collapsePrimarySolidOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="collapsePrimarySolidOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingPrimarySolidOne"
                                                data-bs-parent="#accordionPrimarySolidExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingPrimarySolidTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsePrimarySolidTwo"
                                                    aria-expanded="false" aria-controls="collapsePrimarySolidTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="collapsePrimarySolidTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingPrimarySolidTwo"
                                                data-bs-parent="#accordionPrimarySolidExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingPrimarySolidThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsePrimarySolidThree"
                                                    aria-expanded="false" aria-controls="collapsePrimarySolidThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="collapsePrimarySolidThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingPrimarySolidThree"
                                                data-bs-parent="#accordionPrimarySolidExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-solid-primary" id="accordionPrimarySolidExample"&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingPrimarySolidOne"&gt;
                &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsePrimarySolidOne" aria-expanded="true"
                    aria-controls="collapsePrimarySolidOne"&gt;
                    Accordion Item #1
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapsePrimarySolidOne" class="accordion-collapse collapse show"
                aria-labelledby="headingPrimarySolidOne"
                data-bs-parent="#accordionPrimarySolidExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingPrimarySolidTwo"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapsePrimarySolidTwo"
                    aria-expanded="false" aria-controls="collapsePrimarySolidTwo"&gt;
                    Accordion Item #2
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapsePrimarySolidTwo" class="accordion-collapse collapse"
                aria-labelledby="headingPrimarySolidTwo"
                data-bs-parent="#accordionPrimarySolidExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingPrimarySolidThree"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapsePrimarySolidThree"
                    aria-expanded="false" aria-controls="collapsePrimarySolidThree"&gt;
                    Accordion Item #3
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapsePrimarySolidThree" class="accordion-collapse collapse"
                aria-labelledby="headingPrimarySolidThree"
                data-bs-parent="#accordionPrimarySolidExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
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
                                        Secondary
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="accordion accordion-solid-secondary" id="accordionSecondarySolidExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSecondarySolidOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSecondarySolidOne" aria-expanded="true"
                                                    aria-controls="collapseSecondarySolidOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="collapseSecondarySolidOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingSecondarySolidOne"
                                                data-bs-parent="#accordionSecondarySolidExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSecondarySolidTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSecondarySolidTwo"
                                                    aria-expanded="false" aria-controls="collapseSecondarySolidTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="collapseSecondarySolidTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingSecondarySolidTwo"
                                                data-bs-parent="#accordionSecondarySolidExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSecondarySolidThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSecondarySolidThree"
                                                    aria-expanded="false" aria-controls="collapseSecondarySolidThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="collapseSecondarySolidThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingSecondarySolidThree"
                                                data-bs-parent="#accordionSecondarySolidExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-solid-secondary" id="accordionSecondarySolidExample"&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingSecondarySolidOne"&gt;
                &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSecondarySolidOne" aria-expanded="true"
                    aria-controls="collapseSecondarySolidOne"&gt;
                    Accordion Item #1
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapseSecondarySolidOne" class="accordion-collapse collapse show"
                aria-labelledby="headingSecondarySolidOne"
                data-bs-parent="#accordionSecondarySolidExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingSecondarySolidTwo"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseSecondarySolidTwo"
                    aria-expanded="false" aria-controls="collapseSecondarySolidTwo"&gt;
                    Accordion Item #2
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapseSecondarySolidTwo" class="accordion-collapse collapse"
                aria-labelledby="headingSecondarySolidTwo"
                data-bs-parent="#accordionSecondarySolidExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingSecondarySolidThree"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseSecondarySolidThree"
                    aria-expanded="false" aria-controls="collapseSecondarySolidThree"&gt;
                    Accordion Item #3
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapseSecondarySolidThree" class="accordion-collapse collapse"
                aria-labelledby="headingSecondarySolidThree"
                data-bs-parent="#accordionSecondarySolidExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

                    <!-- Start:: row-6 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Custom Accordion
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="accordion customized-accordion accordions-items-seperate" id="customizedAccordion">
                                        <div class="accordion-item custom-accordion-primary">
                                            <h2 class="accordion-header" id="customizedAccordionOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#customized-AccordionOne" aria-expanded="true"
                                                    aria-controls="customized-AccordionOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="customized-AccordionOne" class="accordion-collapse collapse show"
                                                aria-labelledby="customizedAccordionOne" data-bs-parent="#customizedAccordion">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item custom-accordion-secondary">
                                            <h2 class="accordion-header" id="customizedAccordionTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#customized-AccordionTwo" aria-expanded="false"
                                                    aria-controls="customized-AccordionTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="customized-AccordionTwo" class="accordion-collapse collapse"
                                                aria-labelledby="customizedAccordionTwo" data-bs-parent="#customizedAccordion">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item custom-accordion-danger">
                                            <h2 class="accordion-header" id="customizedAccordionThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#customized-AccordionThree" aria-expanded="false"
                                                    aria-controls="customized-AccordionThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="customized-AccordionThree" class="accordion-collapse collapse"
                                                aria-labelledby="customizedAccordionThree" data-bs-parent="#customizedAccordion">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="accordion customized-accordion accordions-items-seperate" id="customizedAccordion"&gt;
        &lt;div class="accordion-item custom-accordion-primary"&gt;
            &lt;h2 class="accordion-header" id="customizedAccordionOne"&gt;
                &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#customized-AccordionOne" aria-expanded="true"
                    aria-controls="customized-AccordionOne"&gt;
                    Accordion Item #1
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="customized-AccordionOne" class="accordion-collapse collapse show"
                aria-labelledby="customizedAccordionOne" data-bs-parent="#customizedAccordion"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item custom-accordion-secondary"&gt;
            &lt;h2 class="accordion-header" id="customizedAccordionTwo"&gt;
                &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#customized-AccordionTwo" aria-expanded="false"
                    aria-controls="customized-AccordionTwo"&gt;
                    Accordion Item #2
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="customized-AccordionTwo" class="accordion-collapse collapse"
                aria-labelledby="customizedAccordionTwo" data-bs-parent="#customizedAccordion"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item custom-accordion-danger"&gt;
            &lt;h2 class="accordion-header" id="customizedAccordionThree"&gt;
                &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#customized-AccordionThree" aria-expanded="false"
                    aria-controls="customized-AccordionThree"&gt;
                    Accordion Item #3
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="customized-AccordionThree" class="accordion-collapse collapse"
                aria-labelledby="customizedAccordionThree" data-bs-parent="#customizedAccordion"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
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
                                        Custom Icon Accordion
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="accordion accordion-customicon1 accordions-items-seperate" id="accordioncustomicon1Example">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1One">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsecustomicon1One" aria-expanded="true"
                                                    aria-controls="collapsecustomicon1One">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1One" class="accordion-collapse collapse show"
                                                aria-labelledby="headingcustomicon1One"
                                                data-bs-parent="#accordioncustomicon1Example">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1Two">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two"
                                                    aria-expanded="false" aria-controls="collapsecustomicon1Two">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Two" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Two"
                                                data-bs-parent="#accordioncustomicon1Example">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1Three">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three"
                                                    aria-expanded="false" aria-controls="collapsecustomicon1Three">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Three" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Three"
                                                data-bs-parent="#accordioncustomicon1Example">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="accordion accordion-customicon1 accordions-items-seperate" id="accordioncustomicon1Example">
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingcustomicon1One"&gt;
                &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsecustomicon1One" aria-expanded="true"
                    aria-controls="collapsecustomicon1One"&gt;
                    Accordion Item #1
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapsecustomicon1One" class="accordion-collapse collapse show"
                aria-labelledby="headingcustomicon1One"
                data-bs-parent="#accordioncustomicon1Example"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingcustomicon1Two"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two"
                    aria-expanded="false" aria-controls="collapsecustomicon1Two"&gt;
                    Accordion Item #2
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapsecustomicon1Two" class="accordion-collapse collapse"
                aria-labelledby="headingcustomicon1Two"
                data-bs-parent="#accordioncustomicon1Example"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingcustomicon1Three"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three"
                    aria-expanded="false" aria-controls="collapsecustomicon1Three"&gt;
                    Accordion Item #3
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapsecustomicon1Three" class="accordion-collapse collapse"
                aria-labelledby="headingcustomicon1Three"
                data-bs-parent="#accordioncustomicon1Example"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-6 -->

                    <!-- Start:: row-8 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Without Icon
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="accordion accordionicon-none accordions-items-seperate"
                                        id="accordioniconnoIconExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingnoIconOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsenoIconOne" aria-expanded="true"
                                                    aria-controls="collapsenoIconOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="collapsenoIconOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingnoIconOne"
                                                data-bs-parent="#accordioniconnoIconExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingnoIconTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsenoIconTwo"
                                                    aria-expanded="false" aria-controls="collapsenoIconTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="collapsenoIconTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingnoIconTwo"
                                                data-bs-parent="#accordioniconnoIconExample">
                                                <div class="accordion-body">
                                                    <strong>This is the second item's accordion body.</strong> It is hidden
                                                    by default, until the collapse plugin adds the appropriate classes that
                                                    we use to style each element. These classes control the overall
                                                    appearance, as well as the showing and hiding via CSS transitions. You
                                                    can modify any of this with custom CSS or overriding our default
                                                    variables. It's also worth noting that just about any HTML can go within
                                                    the <code>.accordion-body</code>, though the transition does limit
                                                    overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingnoIconThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsenoIconThree"
                                                    aria-expanded="false" aria-controls="collapsenoIconThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="collapsenoIconThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingnoIconThree"
                                                data-bs-parent="#accordioniconnoIconExample">
                                                <div class="accordion-body">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden
                                                    by default, until the collapse plugin adds the appropriate classes that
                                                    we use to style each element. These classes control the overall
                                                    appearance, as well as the showing and hiding via CSS transitions. You
                                                    can modify any of this with custom CSS or overriding our default
                                                    variables. It's also worth noting that just about any HTML can go within
                                                    the <code>.accordion-body</code>, though the transition does limit
                                                    overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="accordion accordionicon-none accordions-items-seperate"
        id="accordioniconnoIconExample"&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingnoIconOne"&gt;
                &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsenoIconOne" aria-expanded="true"
                    aria-controls="collapsenoIconOne"&gt;
                    Accordion Item #1
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapsenoIconOne" class="accordion-collapse collapse show"
                aria-labelledby="headingnoIconOne"
                data-bs-parent="#accordioniconnoIconExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingnoIconTwo"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapsenoIconTwo"
                    aria-expanded="false" aria-controls="collapsenoIconTwo"&gt;
                    Accordion Item #2
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapsenoIconTwo" class="accordion-collapse collapse"
                aria-labelledby="headingnoIconTwo"
                data-bs-parent="#accordioniconnoIconExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden
                    by default, until the collapse plugin adds the appropriate classes that
                    we use to style each element. These classes control the overall
                    appearance, as well as the showing and hiding via CSS transitions. You
                    can modify any of this with custom CSS or overriding our default
                    variables. It's also worth noting that just about any HTML can go within
                    the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit
                    overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingnoIconThree"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapsenoIconThree"
                    aria-expanded="false" aria-controls="collapsenoIconThree"&gt;
                    Accordion Item #3
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapsenoIconThree" class="accordion-collapse collapse"
                aria-labelledby="headingnoIconThree"
                data-bs-parent="#accordioniconnoIconExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden
                    by default, until the collapse plugin adds the appropriate classes that
                    we use to style each element. These classes control the overall
                    appearance, as well as the showing and hiding via CSS transitions. You
                    can modify any of this with custom CSS or overriding our default
                    variables. It's also worth noting that just about any HTML can go within
                    the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit
                    overflow.
                &lt;/div&gt;
            &lt;/div&gt;
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
                                        Left Aligned Icons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="accordion accordionicon-left accordions-items-seperate"
                                        id="accordioniconLeftExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingleftOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseleftOne" aria-expanded="true"
                                                    aria-controls="collapseleftOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="collapseleftOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingleftOne" data-bs-parent="#accordioniconLeftExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingleftTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseLeftTwo"
                                                    aria-expanded="false" aria-controls="collapseLeftTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="collapseLeftTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingleftTwo" data-bs-parent="#accordioniconLeftExample">
                                                <div class="accordion-body">
                                                    <strong>This is the second item's accordion body.</strong> It is hidden
                                                    by default, until the collapse plugin adds the appropriate classes that
                                                    we use to style each element. These classes control the overall
                                                    appearance, as well as the showing and hiding via CSS transitions. You
                                                    can modify any of this with custom CSS or overriding our default
                                                    variables. It's also worth noting that just about any HTML can go within
                                                    the <code>.accordion-body</code>, though the transition does limit
                                                    overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingleftThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseLeftThree"
                                                    aria-expanded="false" aria-controls="collapseLeftThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="collapseLeftThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingleftThree"
                                                data-bs-parent="#accordioniconLeftExample">
                                                <div class="accordion-body">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden
                                                    by default, until the collapse plugin adds the appropriate classes that
                                                    we use to style each element. These classes control the overall
                                                    appearance, as well as the showing and hiding via CSS transitions. You
                                                    can modify any of this with custom CSS or overriding our default
                                                    variables. It's also worth noting that just about any HTML can go within
                                                    the <code>.accordion-body</code>, though the transition does limit
                                                    overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="accordion accordionicon-left accordions-items-seperate"
        id="accordioniconLeftExample"&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingleftOne"&gt;
                &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseleftOne" aria-expanded="true"
                    aria-controls="collapseleftOne"&gt;
                    Accordion Item #1
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapseleftOne" class="accordion-collapse collapse show"
                aria-labelledby="headingleftOne" data-bs-parent="#accordioniconLeftExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by
                    default, until the collapse plugin adds the appropriate classes that we
                    use to style each element. These classes control the overall appearance,
                    as well as the showing and hiding via CSS transitions. You can modify
                    any of this with custom CSS or overriding our default variables. It's
                    also worth noting that just about any HTML can go within the
                    &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingleftTwo"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseLeftTwo"
                    aria-expanded="false" aria-controls="collapseLeftTwo"&gt;
                    Accordion Item #2
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapseLeftTwo" class="accordion-collapse collapse"
                aria-labelledby="headingleftTwo" data-bs-parent="#accordioniconLeftExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden
                    by default, until the collapse plugin adds the appropriate classes that
                    we use to style each element. These classes control the overall
                    appearance, as well as the showing and hiding via CSS transitions. You
                    can modify any of this with custom CSS or overriding our default
                    variables. It's also worth noting that just about any HTML can go within
                    the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit
                    overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
            &lt;h2 class="accordion-header" id="headingleftThree"&gt;
                &lt;button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseLeftThree"
                    aria-expanded="false" aria-controls="collapseLeftThree"&gt;
                    Accordion Item #3
                &lt;/button&gt;
            &lt;/h2&gt;
            &lt;div id="collapseLeftThree" class="accordion-collapse collapse"
                aria-labelledby="headingleftThree"
                data-bs-parent="#accordioniconLeftExample"&gt;
                &lt;div class="accordion-body"&gt;
                    &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden
                    by default, until the collapse plugin adds the appropriate classes that
                    we use to style each element. These classes control the overall
                    appearance, as well as the showing and hiding via CSS transitions. You
                    can modify any of this with custom CSS or overriding our default
                    variables. It's also worth noting that just about any HTML can go within
                    the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit
                    overflow.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-8 -->

                    <!-- Start:: row-9 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Horizontal Collapse</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseWidthExample" aria-expanded="false"
                                            aria-controls="collapseWidthExample">
                                            Toggle width collapse
                                        </button>
                                    </p>
                                    <div style="min-height: 120px;">
                                        <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                            <div class="card card-body" style="width: 230px;">
                                                This is some placeholder content for a horizontal collapse. It's
                                                hidden
                                                by default and shown when triggered.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;p&gt;
        &lt;button class="btn btn-primary" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseWidthExample" aria-expanded="false"
            aria-controls="collapseWidthExample"&gt;
            Toggle width collapse
        &lt;/button&gt;
    &lt;/p&gt;
    &lt;div style="min-height: 120px;"&gt;
        &lt;div class="collapse collapse-horizontal" id="collapseWidthExample"&gt;
            &lt;div class="card card-body" style="width: 230px;"&gt;
                This is some placeholder content for a horizontal collapse. It's
                hidden
                by default and shown when triggered.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-9 -->

                    <!-- Start:: row-10 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Targets Collapse
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">
                                        <a class="btn btn-primary mb-2" data-bs-toggle="collapse"
                                            href="#multiCollapseExample1" role="button" aria-expanded="false"
                                            aria-controls="multiCollapseExample1">Toggle first element</a>
                                        <button class="btn btn-success mb-2" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#multiCollapseExample2" aria-expanded="false"
                                            aria-controls="multiCollapseExample2">Toggle second
                                            element</button>
                                        <button class="btn btn-danger mb-2" type="button" data-bs-toggle="collapse"
                                            data-bs-target=".multi-collapse" aria-expanded="false"
                                            aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle
                                            both elements</button>
                                    </p>
                                    <div class="row">
                                        <div class="col m-1">
                                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                <div class="card card-body mb-0">
                                                    Some placeholder content for the first collapse
                                                    component of
                                                    this multi-collapse example. This panel is hidden by
                                                    default
                                                    but revealed when the user activates the relevant
                                                    trigger.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col m-1">
                                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                                <div class="card card-body mb-0">
                                                    Some placeholder content for the second collapse
                                                    component
                                                    of this multi-collapse example. This panel is hidden by
                                                    default but revealed when the user activates the
                                                    relevant
                                                    trigger.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;p class="mb-0"&gt;
        &lt;a class="btn btn-primary mb-2" data-bs-toggle="collapse"
            href="#multiCollapseExample1" role="button" aria-expanded="false"
            aria-controls="multiCollapseExample1"&gt;Toggle first element&lt;/a&gt;
        &lt;button class="btn btn-success mb-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#multiCollapseExample2" aria-expanded="false"
            aria-controls="multiCollapseExample2"&gt;Toggle second
            element&lt;/button&gt;
        &lt;button class="btn btn-danger mb-2" type="button" data-bs-toggle="collapse"
            data-bs-target=".multi-collapse" aria-expanded="false"
            aria-controls="multiCollapseExample1 multiCollapseExample2"&gt;Toggle
            both elements&lt;/button&gt;
    &lt;/p&gt;
    &lt;div class="row"&gt;
        &lt;div class="col m-1"&gt;
            &lt;div class="collapse multi-collapse" id="multiCollapseExample1"&gt;
                &lt;div class="card card-body mb-0"&gt;
                    Some placeholder content for the first collapse
                    component of
                    this multi-collapse example. This panel is hidden by
                    default
                    but revealed when the user activates the relevant
                    trigger.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col m-1"&gt;
            &lt;div class="collapse multi-collapse" id="multiCollapseExample2"&gt;
                &lt;div class="card card-body mb-0"&gt;
                    Some placeholder content for the second collapse
                    component
                    of this multi-collapse example. This panel is hidden by
                    default but revealed when the user activates the
                    relevant
                    trigger.
                &lt;/div&gt;
            &lt;/div&gt;
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
                                        Example
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">
                                        <a class="btn btn-primary collapsed mb-2" data-bs-toggle="collapse"
                                            href="#collapseExample" role="button" aria-expanded="false"
                                            aria-controls="collapseExample">
                                            Link with href
                                        </a>
                                        <button class="btn btn-secondary collapsed mb-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                            aria-expanded="false" aria-controls="collapseExample">
                                            Button with data-bs-target
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body mb-0">
                                            Some placeholder content for the collapse component. This panel
                                            is
                                            hidden by default but revealed when the user activates the
                                            relevant
                                            trigger.
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;p class="mb-0"&gt;
        &lt;a class="btn btn-primary collapsed mb-2" data-bs-toggle="collapse"
            href="#collapseExample" role="button" aria-expanded="false"
            aria-controls="collapseExample"&gt;
            Link with href
        &lt;/a&gt;
        &lt;button class="btn btn-secondary collapsed mb-2" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample"&gt;
            Button with data-bs-target
        &lt;/button&gt;
    &lt;/p&gt;
    &lt;div class="collapse" id="collapseExample"&gt;
        &lt;div class="card card-body mb-0"&gt;
            Some placeholder content for the collapse component. This panel
            is
            hidden by default but revealed when the user activates the
            relevant
            trigger.
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-10 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
