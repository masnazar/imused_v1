
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Input Group</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Input Group</h1>
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
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Custom select
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <select class="form-select" id="inputGroupSelect03"
                                            aria-label="Example select with button addon">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect04"
                                            aria-label="Example select with button addon">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <button class="btn btn-primary" type="button">Button</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
&lt;label class="input-group-text" for="inputGroupSelect01"&gt;Options&lt;/label&gt;
&lt;select class="form-select" id="inputGroupSelect01"&gt;
&lt;option selected&gt;Choose...&lt;/option&gt;
&lt;option value="1"&gt;One&lt;/option&gt;
&lt;option value="2"&gt;Two&lt;/option&gt;
&lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
&lt;select class="form-select" id="inputGroupSelect02"&gt;
&lt;option selected&gt;Choose...&lt;/option&gt;
&lt;option value="1"&gt;One&lt;/option&gt;
&lt;option value="2"&gt;Two&lt;/option&gt;
&lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;
&lt;label class="input-group-text" for="inputGroupSelect02"&gt;Options&lt;/label&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;select class="form-select" id="inputGroupSelect03"
aria-label="Example select with button addon"&gt;
&lt;option selected&gt;Choose...&lt;/option&gt;
&lt;option value="1"&gt;One&lt;/option&gt;
&lt;option value="2"&gt;Two&lt;/option&gt;
&lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
&lt;select class="form-select" id="inputGroupSelect04"
aria-label="Example select with button addon"&gt;
&lt;option selected&gt;Choose...&lt;/option&gt;
&lt;option value="1"&gt;One&lt;/option&gt;
&lt;option value="2"&gt;Two&lt;/option&gt;
&lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Input Groups
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control" placeholder="Username"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Recipient's username"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                                    </div>
                                    <label for="basic-url" class="form-label">Your vanity URL</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"
                                            id="basic-addon3">https://example.com/users/</span>
                                        <input type="text" class="form-control" id="basic-url"
                                            aria-describedby="basic-addon3">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control"
                                            aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Username"
                                            aria-label="Username">
                                        <span class="input-group-text">@</span>
                                        <input type="text" class="form-control" placeholder="Server"
                                            aria-label="Server">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">With textarea</span>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
    &lt;span class="input-group-text" id="basic-addon1"&gt;@&lt;/span&gt;
    &lt;input type="text" class="form-control" placeholder="Username"
        aria-label="Username" aria-describedby="basic-addon1"&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;input type="text" class="form-control" placeholder="Recipient's username"
        aria-label="Recipient's username" aria-describedby="basic-addon2"&gt;
    &lt;span class="input-group-text" id="basic-addon2"&gt;@example.com&lt;/span&gt;
&lt;/div&gt;
&lt;label for="basic-url" class="form-label"&gt;Your vanity URL&lt;/label&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;span class="input-group-text"
        id="basic-addon3"&gt;https://example.com/users/&lt;/span&gt;
    &lt;input type="text" class="form-control" id="basic-url"
        aria-describedby="basic-addon3"&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;span class="input-group-text"&gt;$&lt;/span&gt;
    &lt;input type="text" class="form-control"
        aria-label="Amount (to the nearest dollar)"&gt;
    &lt;span class="input-group-text"&gt;.00&lt;/span&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
    &lt;input type="text" class="form-control" placeholder="Username"
        aria-label="Username"&gt;
    &lt;span class="input-group-text"&gt;@&lt;/span&gt;
    &lt;input type="text" class="form-control" placeholder="Server"
        aria-label="Server"&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
    &lt;span class="input-group-text"&gt;With textarea&lt;/span&gt;
    &lt;textarea class="form-control" aria-label="With textarea"&gt;&lt;/textarea&gt;
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
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Multiple inputs
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group">
                                                <span class="input-group-text">First and last name</span>
                                                <input type="text" aria-label="First name" class="form-control">
                                                <input type="text" aria-label="Last name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="input-group"&gt;
    &lt;span class="input-group-text"&gt;First and last name&lt;/span&gt;
    &lt;input type="text" aria-label="First name" class="form-control"&gt;
    &lt;input type="text" aria-label="Last name" class="form-control"&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Checkboxes and radios
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" type="checkbox" value=""
                                                        aria-label="Checkbox for following text input">
                                                </div>
                                                <input type="text" class="form-control"
                                                    aria-label="Text input with checkbox">
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" type="radio" value=""
                                                        aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control"
                                                    aria-label="Text input with radio button">
                                            </div>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
    &lt;div class="input-group-text"&gt;
        &lt;input class="form-check-input mt-0" type="checkbox" value=""
            aria-label="Checkbox for following text input"&gt;
    &lt;/div&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with checkbox"&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
    &lt;div class="input-group-text"&gt;
        &lt;input class="form-check-input mt-0" type="radio" value=""
            aria-label="Radio button for following text input"&gt;
    &lt;/div&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with radio button"&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Multiple addons
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" type="checkbox" value=""
                                                        aria-label="Checkbox for following text input">
                                                </div>
                                                <input type="text" class="form-control"
                                                    aria-label="Text input with checkbox">
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" type="radio" value=""
                                                        aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control"
                                                    aria-label="Text input with radio button">
                                            </div>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
    &lt;div class="input-group-text"&gt;
        &lt;input class="form-check-input mt-0" type="checkbox" value=""
            aria-label="Checkbox for following text input"&gt;
    &lt;/div&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with checkbox"&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
    &lt;div class="input-group-text"&gt;
        &lt;input class="form-check-input mt-0" type="radio" value=""
            aria-label="Radio button for following text input"&gt;
    &lt;/div&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with radio button"&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Segmented buttons
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group mb-3">
                                                <button type="button" class="btn btn-primary">Action</button>
                                                <button type="button"
                                                    class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                                </ul>
                                                <input type="text" class="form-control"
                                                    aria-label="Text input with segmented dropdown button">
                                            </div>
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                    aria-label="Text input with segmented dropdown button">
                                                <button type="button" class="btn btn-primary">Action</button>
                                                <button type="button"
                                                    class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
    &lt;button type="button" class="btn btn-primary"&gt;Action&lt;/button&gt;
    &lt;button type="button"
        class="btn btn-primary dropdown-toggle dropdown-toggle-split"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with segmented dropdown button"&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
    &lt;input type="text" class="form-control"
        aria-label="Text input with segmented dropdown button"&gt;
    &lt;button type="button" class="btn btn-primary"&gt;Action&lt;/button&gt;
    &lt;button type="button"
        class="btn btn-primary dropdown-toggle dropdown-toggle-split"
        data-bs-toggle="dropdown" aria-expanded="false"&gt;
        &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Warpping
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping">@</span>
                                                <input type="text" class="form-control" placeholder="Username"
                                                    aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
        <!-- Prism Code -->
        <pre class="language-html"><code class="language-html">&lt;div class="input-group flex-nowrap"&gt;
            &lt;span class="input-group-text" id="addon-wrapping"&gt;@&lt;/span&gt;
            &lt;input type="text" class="form-control" placeholder="Username"
                aria-label="Username" aria-describedby="addon-wrapping"&gt;
        &lt;/div&gt;</code></pre>
        <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Buttons addons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <button class="btn btn-primary" type="button"
                                            id="button-addon1">Button</button>
                                        <input type="text" class="form-control" placeholder=""
                                            aria-label="Example text with button addon"
                                            aria-describedby="button-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <button class="btn btn-primary" type="button"
                                            id="button-addon">Button</button>
                                        <input type="text" class="form-control" placeholder="Recipient's username"
                                            aria-label="Recipient's username" aria-describedby="button-addon">
                                        
                                    </div>
                                    <div class="input-group mb-3">
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <input type="text" class="form-control" placeholder=""
                                            aria-label="Example text with two button addons">
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Recipient's username"
                                            aria-label="Recipient's username with two button addons">
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <button class="btn btn-primary" type="button">Button</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
&lt;button class="btn btn-primary" type="button"
id="button-addon1"&gt;Button&lt;/button&gt;
&lt;input type="text" class="form-control" placeholder=""
aria-label="Example text with button addon"
aria-describedby="button-addon1"&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
&lt;button class="btn btn-primary" type="button"
id="button-addon"&gt;Button&lt;/button&gt;
&lt;input type="text" class="form-control" placeholder="Recipient's username"
aria-label="Recipient's username" aria-describedby="button-addon"&gt;

&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;input type="text" class="form-control" placeholder=""
aria-label="Example text with two button addons"&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
&lt;input type="text" class="form-control" placeholder="Recipient's username"
aria-label="Recipient's username with two button addons"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
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
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                        <input type="text" class="form-control"
                                            aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"
                                            id="inputGroup-sizing-default">Default</span>
                                        <input type="text" class="form-control"
                                            aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                        <input type="text" class="form-control"
                                            aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-lg">
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="input-group input-group-sm mb-3"&gt;
&lt;span class="input-group-text" id="inputGroup-sizing-sm"&gt;Small&lt;/span&gt;
&lt;input type="text" class="form-control"
aria-label="Sizing example input"
aria-describedby="inputGroup-sizing-sm"&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
&lt;span class="input-group-text"
id="inputGroup-sizing-default"&gt;Default&lt;/span&gt;
&lt;input type="text" class="form-control"
aria-label="Sizing example input"
aria-describedby="inputGroup-sizing-default"&gt;
&lt;/div&gt;
&lt;div class="input-group input-group-lg"&gt;
&lt;span class="input-group-text" id="inputGroup-sizing-lg"&gt;Large&lt;/span&gt;
&lt;input type="text" class="form-control"
aria-label="Sizing example input"
aria-describedby="inputGroup-sizing-lg"&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Buttons with dropdowns
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li> <hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                    </div>
                                    <div class="input-group input-btn-outline mb-3">
                                        <input type="text" class="form-control"
                                            aria-label="Text input with dropdown button">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="input-group flex-nowrap">
                                        <button class="btn btn-primary-transparent dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action before</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action before</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with 2 dropdown buttons">
                                        <button class="btn btn-primary-transparent dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
&lt;button class="btn btn-primary dropdown-toggle" type="button"
data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
&lt;ul class="dropdown-menu"&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;
    &lt;hr class="dropdown-divider"&gt;
&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;input type="text" class="form-control"
aria-label="Text input with dropdown button"&gt;
&lt;/div&gt;
&lt;div class="input-group mb-3"&gt;
&lt;input type="text" class="form-control"
aria-label="Text input with dropdown button"&gt;
&lt;button class="btn btn-outline-primary dropdown-toggle" type="button"
data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
&lt;ul class="dropdown-menu dropdown-menu-end"&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;
    &lt;hr class="dropdown-divider"&gt;
&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
&lt;button class="btn btn-primary-transparent dropdown-toggle" type="button"
data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
&lt;ul class="dropdown-menu"&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action before&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action before&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;
    &lt;hr class="dropdown-divider"&gt;
&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;input type="text" class="form-control"
aria-label="Text input with 2 dropdown buttons"&gt;
&lt;button class="btn btn-primary-transparent dropdown-toggle" type="button"
data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
&lt;ul class="dropdown-menu dropdown-menu-end"&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;
    &lt;hr class="dropdown-divider"&gt;
&lt;/li&gt;
&lt;li&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Custom file input
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <button class="btn btn-primary" type="button"
                                            id="inputGroupFileAddon03">Button</button>
                                        <input type="file" class="form-control" id="inputGroupFile03"
                                            aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                    </div>

                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04"
                                            aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                        <button class="btn btn-primary" type="button"
                                            id="inputGroupFileAddon04">Button</button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="input-group mb-3"&gt;
&lt;label class="input-group-text" for="inputGroupFile01"&gt;Upload&lt;/label&gt;
&lt;input type="file" class="form-control" id="inputGroupFile01"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
&lt;input type="file" class="form-control" id="inputGroupFile02"&gt;
&lt;label class="input-group-text" for="inputGroupFile02"&gt;Upload&lt;/label&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
&lt;button class="btn btn-primary" type="button"
id="inputGroupFileAddon03"&gt;Button&lt;/button&gt;
&lt;input type="file" class="form-control" id="inputGroupFile03"
aria-describedby="inputGroupFileAddon03" aria-label="Upload"&gt;
&lt;/div&gt;

&lt;div class="input-group"&gt;
&lt;input type="file" class="form-control" id="inputGroupFile04"
aria-describedby="inputGroupFileAddon04" aria-label="Upload"&gt;
&lt;button class="btn btn-primary" type="button"
id="inputGroupFileAddon04"&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
