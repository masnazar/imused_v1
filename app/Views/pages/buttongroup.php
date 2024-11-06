
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
                                    <li class="breadcrumb-item active" aria-current="page">Buttongroup</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Buttongroup</h1>
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

                    <!--ROW-START-->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Basic example
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-info btn-wave"><i class="bi bi-skip-backward"></i></button>
                                        <button type="button" class="btn btn-info btn-wave"><i class="bi bi-pause"></i></button>
                                        <button type="button" class="btn btn-info btn-wave"><i class="bi bi-skip-forward"></i></button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic example"&gt;
        &lt;button type="button" class="btn btn-info btn-wave"&gt;&lt;i class="bi bi-skip-backward"&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button type="button" class="btn btn-info btn-wave"&gt;&lt;i class="bi bi-pause"&gt;&lt;/i&gt;&lt;/button&gt;
        &lt;button type="button" class="btn btn-info btn-wave"&gt;&lt;i class="bi bi-skip-forward"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Checkbox button groups
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body checkbox-button-group">
                                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                        <input type="checkbox" class="btn-check" id="btncheck1">
                                        <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>

                                        <input type="checkbox" class="btn-check" id="btncheck2">
                                        <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>

                                        <input type="checkbox" class="btn-check" id="btncheck3">
                                        <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic checkbox toggle button group"&gt;
        &lt;input type="checkbox" class="btn-check" id="btncheck1"&gt;
        &lt;label class="btn btn-outline-primary" for="btncheck1"&gt;Checkbox 1&lt;/label&gt;

        &lt;input type="checkbox" class="btn-check" id="btncheck2"&gt;
        &lt;label class="btn btn-outline-primary" for="btncheck2"&gt;Checkbox 2&lt;/label&gt;

        &lt;input type="checkbox" class="btn-check" id="btncheck3"&gt;
        &lt;label class="btn btn-outline-primary" for="btncheck3"&gt;Checkbox 3&lt;/label&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Navigation
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group">
                                        <a href="javascript:void(0);" class="btn btn-primary active btn-wave" aria-current="page">Active
                                            link</a>
                                        <a href="javascript:void(0);" class="btn btn-primary">Link</a>
                                        <a href="javascript:void(0);" class="btn btn-primary">Link</a>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-group"&gt;
        &lt;a href="javascript:void(0);" class="btn btn-primary active btn-wave" aria-current="page"&gt;Active
            link&lt;/a&gt;
        &lt;a href="javascript:void(0);" class="btn btn-primary"&gt;Link&lt;/a&gt;
        &lt;a href="javascript:void(0);" class="btn btn-primary"&gt;Link&lt;/a&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Outline styled
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <button type="button" class="btn btn-outline-primary btn-wave">Left</button>
                                        <button type="button" class="btn btn-outline-primary btn-wave">Middle</button>
                                        <button type="button" class="btn btn-outline-primary btn-wave">Right</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic outlined example"&gt;
        &lt;button type="button" class="btn btn-outline-primary btn-wave"&gt;Left&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-primary btn-wave"&gt;Middle&lt;/button&gt;
        &lt;button type="button" class="btn btn-outline-primary btn-wave"&gt;Right&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Radio button groups
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body radio-button-group">
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                            checked>
                                        <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                        >
                                        <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3"
                                        >
                                        <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic radio toggle button group"&gt;
        &lt;input type="radio" class="btn-check" name="btnradio" id="btnradio1"
            checked&gt;
        &lt;label class="btn btn-outline-primary" for="btnradio1"&gt;Radio 1&lt;/label&gt;

        &lt;input type="radio" class="btn-check" name="btnradio" id="btnradio2"
        &gt;
        &lt;label class="btn btn-outline-primary" for="btnradio2"&gt;Radio 2&lt;/label&gt;

        &lt;input type="radio" class="btn-check" name="btnradio" id="btnradio3"
        &gt;
        &lt;label class="btn btn-outline-primary" for="btnradio3"&gt;Radio 3&lt;/label&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Mixed style
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" class="btn btn-danger btn-wave">Left</button>
                                        <button type="button" class="btn btn-warning btn-wave">Middle</button>
                                        <button type="button" class="btn btn-success btn-wave">Right</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic mixed styles example"&gt;
        &lt;button type="button" class="btn btn-danger btn-wave"&gt;Left&lt;/button&gt;
        &lt;button type="button" class="btn btn-warning btn-wave"&gt;Middle&lt;/button&gt;
        &lt;button type="button" class="btn btn-success btn-wave"&gt;Right&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Vertical variation
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row gap-2">
                                        <div class="col-sm-3">
                                            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                <button type="button" class="btn btn-primary">Button</button>
                                                <button type="button" class="btn btn-primary">Button</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop1" type="button"
                                                        class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Dropdown link</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                                <button type="button" class="btn btn-primary">Button</button>
                                                <button type="button" class="btn btn-primary">Button</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop2" type="button"
                                                        class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Dropdown link</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop3" type="button"
                                                        class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Dropdown link</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop4" type="button"
                                                        class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Dropdown link</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                <button type="button" class="btn btn-info">Button</button>
                                                <button type="button" class="btn btn-info">Button</button>
                                                <button type="button" class="btn btn-info">Button</button>
                                                <button type="button" class="btn btn-info">Button</button>
                                                <button type="button" class="btn btn-info">Button</button>
                                                <button type="button" class="btn btn-info">Button</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="btn-group-vertical" role="group"
                                                aria-label="Vertical radio toggle button group">
                                                <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1"
                                                    checked="">
                                                <label class="btn btn-outline-primary3" for="vbtn-radio1">Radio 1</label>
                                                <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2"
                                                >
                                                <label class="btn btn-outline-primary3" for="vbtn-radio2">Radio 2</label>
                                                <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3"
                                                >
                                                <label class="btn btn-outline-primary3" for="vbtn-radio3">Radio 3</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="row gap-2"&gt;
    &lt;div class="col-sm-3"&gt;
    &lt;div class="btn-group-vertical" role="group" aria-label="Vertical button group"&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
        &lt;div class="btn-group" role="group"&gt;
            &lt;button id="btnGroupVerticalDrop1" type="button"
                class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false"&gt;
                Dropdown
            &lt;/button&gt;
            &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1"&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
        &lt;div class="btn-group" role="group"&gt;
            &lt;button id="btnGroupVerticalDrop2" type="button"
                class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false"&gt;
                Dropdown
            &lt;/button&gt;
            &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2"&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        &lt;div class="btn-group" role="group"&gt;
            &lt;button id="btnGroupVerticalDrop3" type="button"
                class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false"&gt;
                Dropdown
            &lt;/button&gt;
            &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3"&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        &lt;div class="btn-group" role="group"&gt;
            &lt;button id="btnGroupVerticalDrop4" type="button"
                class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false"&gt;
                Dropdown
            &lt;/button&gt;
            &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4"&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-3"&gt;
    &lt;div class="btn-group-vertical" role="group" aria-label="Vertical button group"&gt;
        &lt;button type="button" class="btn btn-info"&gt;Button&lt;/button&gt;
        &lt;button type="button" class="btn btn-info"&gt;Button&lt;/button&gt;
        &lt;button type="button" class="btn btn-info"&gt;Button&lt;/button&gt;
        &lt;button type="button" class="btn btn-info"&gt;Button&lt;/button&gt;
        &lt;button type="button" class="btn btn-info"&gt;Button&lt;/button&gt;
        &lt;button type="button" class="btn btn-info"&gt;Button&lt;/button&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-3"&gt;
    &lt;div class="btn-group-vertical" role="group"
        aria-label="Vertical radio toggle button group"&gt;
        &lt;input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1"
            checked=""&gt;
        &lt;label class="btn btn-outline-primary3" for="vbtn-radio1"&gt;Radio 1&lt;/label&gt;
        &lt;input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2"
        &gt;
        &lt;label class="btn btn-outline-primary3" for="vbtn-radio2"&gt;Radio 2&lt;/label&gt;
        &lt;input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3"
        &gt;
        &lt;label class="btn btn-outline-primary3" for="vbtn-radio3"&gt;Radio 3&lt;/label&gt;
    &lt;/div&gt;
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
                                        Button toolbar
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-toolbar mb-4" role="toolbar"
                                        aria-label="Toolbar with button groups">
                                        <div class="btn-group me-2 my-1" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-primary">1</button>
                                            <button type="button" class="btn btn-primary">2</button>
                                            <button type="button" class="btn btn-primary">3</button>
                                            <button type="button" class="btn btn-primary">4</button>
                                        </div>
                                        <div class="btn-group me-2 my-1" role="group" aria-label="Second group">
                                            <button type="button" class="btn btn-secondary">5</button>
                                            <button type="button" class="btn btn-secondary">6</button>
                                            <button type="button" class="btn btn-secondary">7</button>
                                        </div>
                                        <div class="btn-group my-1" role="group" aria-label="Third group">
                                            <button type="button" class="btn btn-info">8</button>
                                        </div>
                                    </div>
                                    <div class="btn-toolbar mb-3" role="toolbar"
                                        aria-label="Toolbar with button groups">
                                        <div class="btn-group me-2 my-1" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-outline-secondary">1</button>
                                            <button type="button" class="btn btn-outline-secondary">2</button>
                                            <button type="button" class="btn btn-outline-secondary">3</button>
                                            <button type="button" class="btn btn-outline-secondary">4</button>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-text" id="btnGroupAddon">@</div>
                                            <input type="text" class="form-control"
                                                placeholder="Input group example"
                                                aria-label="Input group example"
                                                aria-describedby="btnGroupAddon">
                                        </div>
                                    </div>
                                    <div class="btn-toolbar justify-content-between d-sm-flex d-block" role="toolbar"
                                        aria-label="Toolbar with button groups">
                                        <div class="btn-group my-1" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-outline-secondary">1</button>
                                            <button type="button" class="btn btn-outline-secondary">2</button>
                                            <button type="button" class="btn btn-outline-secondary">3</button>
                                            <button type="button" class="btn btn-outline-secondary">4</button>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-text" id="btnGroupAddon2">@</div>
                                            <input type="text" class="form-control"
                                                placeholder="Input group example"
                                                aria-label="Input group example"
                                                aria-describedby="btnGroupAddon2">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-toolbar mb-4" role="toolbar"
    aria-label="Toolbar with button groups"&gt;
    &lt;div class="btn-group me-2 my-1" role="group" aria-label="First group"&gt;
    &lt;button type="button" class="btn btn-primary"&gt;1&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary"&gt;2&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary"&gt;3&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary"&gt;4&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="btn-group me-2 my-1" role="group" aria-label="Second group"&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;5&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;6&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;7&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="btn-group my-1" role="group" aria-label="Third group"&gt;
    &lt;button type="button" class="btn btn-info"&gt;8&lt;/button&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="btn-toolbar mb-3" role="toolbar"
    aria-label="Toolbar with button groups"&gt;
    &lt;div class="btn-group me-2 my-1" role="group" aria-label="First group"&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;1&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;2&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;3&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;4&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="input-group"&gt;
    &lt;div class="input-group-text" id="btnGroupAddon"&gt;@&lt;/div&gt;
    &lt;input type="text" class="form-control"
        placeholder="Input group example"
        aria-label="Input group example"
        aria-describedby="btnGroupAddon"&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="btn-toolbar justify-content-between d-sm-flex d-block" role="toolbar"
    aria-label="Toolbar with button groups"&gt;
    &lt;div class="btn-group my-1" role="group" aria-label="First group"&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;1&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;2&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;3&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;4&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="input-group"&gt;
    &lt;div class="input-group-text" id="btnGroupAddon2"&gt;@&lt;/div&gt;
    &lt;input type="text" class="form-control"
        placeholder="Input group example"
        aria-label="Input group example"
        aria-describedby="btnGroupAddon2"&gt;
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
                                        Nesting
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group" role="group"
                                        aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-primary">1</button>
                                        <button type="button" class="btn btn-primary">2</button>

                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button"
                                                class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Dropdown link</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group"
    aria-label="Button group with nested dropdown"&gt;
    &lt;button type="button" class="btn btn-primary"&gt;1&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary"&gt;2&lt;/button&gt;

    &lt;div class="btn-group" role="group"&gt;
    &lt;button id="btnGroupDrop1" type="button"
        class="btn btn-primary dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Dropdown
    &lt;/button&gt;
    &lt;ul class="dropdown-menu" aria-labelledby="btnGroupDrop1"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Social Group Buttons</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button class="btn btn-icon btn-facebook btn-wave">
                                            <i class="ri-facebook-line"></i>
                                        </button>
                                        <button class="btn btn-icon btn-twitter btn-wave">
                                            <i class="ri-twitter-x-line"></i>
                                        </button>
                                        <button class="btn btn-icon btn-instagram btn-wave">
                                            <i class="ri-instagram-line"></i>
                                        </button>
                                        <button class="btn btn-icon btn-github btn-wave">
                                            <i class="ri-github-line"></i>
                                        </button>
                                        <button class="btn btn-icon btn-youtube btn-wave">
                                            <i class="ri-youtube-line"></i>
                                        </button>
                                        <button class="btn btn-icon btn-google btn-wave">
                                            <i class="ri-google-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic example"&gt;
    &lt;button class="btn btn-icon btn-facebook btn-wave"&gt;
    &lt;i class="ri-facebook-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;button class="btn btn-icon btn-twitter btn-wave"&gt;
    &lt;i class="ri-twitter-x-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;button class="btn btn-icon btn-instagram btn-wave"&gt;
    &lt;i class="ri-instagram-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;button class="btn btn-icon btn-github btn-wave"&gt;
    &lt;i class="ri-github-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;button class="btn btn-icon btn-youtube btn-wave"&gt;
    &lt;i class="ri-youtube-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;button class="btn btn-icon btn-google btn-wave"&gt;
    &lt;i class="ri-google-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Sizing
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group btn-group-lg my-1 me-5" role="group" aria-label="Large button group">
                                        <button type="button" class="btn btn-outline-success">Left</button>
                                        <button type="button" class="btn btn-outline-success">Middle</button>
                                        <button type="button" class="btn btn-outline-success">Right</button>
                                    </div>
                                    <div class="btn-group my-1 me-5" role="group" aria-label="Default button group">
                                        <button type="button" class="btn btn-outline-success">Left</button>
                                        <button type="button" class="btn btn-outline-success">Middle</button>
                                        <button type="button" class="btn btn-outline-success">Right</button>
                                    </div>
                                    <div class="btn-group btn-group-sm my-1 me-5" role="group" aria-label="Small button group">
                                        <button type="button" class="btn btn-outline-success">Left</button>
                                        <button type="button" class="btn btn-outline-success">Middle</button>
                                        <button type="button" class="btn btn-outline-success">Right</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="btn-group btn-group-lg my-1" role="group" aria-label="Large button group"&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Middle&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Right&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="btn-group my-1" role="group" aria-label="Default button group"&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Middle&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Right&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="btn-group btn-group-sm my-1" role="group" aria-label="Small button group"&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Middle&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-success"&gt;Right&lt;/button&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--ROW-END-->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
