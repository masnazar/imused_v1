
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
                                    <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Form Layouts</h1>
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
                                        Vertical Forms
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="form-text" class="form-label fs-14 text-dark">Enter name</label>
                                        <input type="text" class="form-control" id="form-text" placeholder="full name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="form-password" class="form-label fs-14 text-dark">Enter
                                            Password</label>
                                        <input type="password" class="form-control" id="form-password" placeholder="password">
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                            required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Accept Policy
                                        </label>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="mb-3"&gt;
    &lt;label for="form-text" class="form-label fs-14 text-dark"&gt;Enter name&lt;/label&gt;
    &lt;input type="text" class="form-control" id="form-text" placeholder=""&gt;
&lt;/div&gt;
&lt;div class="mb-3"&gt;
    &lt;label for="form-password" class="form-label fs-14 text-dark"&gt;Enter
        Password&lt;/label&gt;
    &lt;input type="password" class="form-control" id="form-password" placeholder=""&gt;
&lt;/div&gt;
&lt;div class="form-check mb-3"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" id="invalidCheck"
        required=""&gt;
    &lt;label class="form-check-label" for="invalidCheck"&gt;
        Accept Policy
    &lt;/label&gt;
&lt;/div&gt;
&lt;button class="btn btn-primary" type="submit"&gt;Submit&lt;/button&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Horizontal form
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputEmail3"
                                                class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail3">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3"
                                                class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3">
                                            </div>
                                        </div>
                                        <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Qualified</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="gridRadios" id="gridRadios1" value="option1"
                                                        checked>
                                                    <label class="form-check-label" for="gridRadios1">
                                                        Prelims
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio"
                                                        name="gridRadios" id="gridRadios2" value="option3"
                                                        disabled>
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Mains
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="gridCheck1">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Certified
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;form&gt;
    &lt;div class="row mb-3"&gt;
        &lt;label for="inputEmail3"
            class="col-sm-2 col-form-label"&gt;Email&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="email" class="form-control" id="inputEmail3"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row mb-3"&gt;
        &lt;label for="inputPassword3"
            class="col-sm-2 col-form-label"&gt;Password&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="password" class="form-control" id="inputPassword3"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;fieldset class="row mb-3"&gt;
        &lt;legend class="col-form-label col-sm-2 pt-0"&gt;Qualified&lt;/legend&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;div class="form-check"&gt;
                &lt;input class="form-check-input" type="radio"
                    name="gridRadios" id="gridRadios1" value="option1"
                    checked&gt;
                &lt;label class="form-check-label" for="gridRadios1"&gt;
                    Prelims
                &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class="form-check disabled"&gt;
                &lt;input class="form-check-input" type="radio"
                    name="gridRadios" id="gridRadios2" value="option3"
                    disabled&gt;
                &lt;label class="form-check-label" for="gridRadios2"&gt;
                    Mains
                &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class="form-check"&gt;
                &lt;input class="form-check-input" type="checkbox"
                    id="gridCheck1"&gt;
                &lt;label class="form-check-label" for="gridCheck1"&gt;
                    Certified
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/fieldset&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;Sign in&lt;/button&gt;
&lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Vertical Forms with icon
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="form-text1" class="form-label fs-14 text-dark">Enter name</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ri-user-line"></i></div>
                                            <input type="text" class="form-control" id="form-text1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="form-password1" class="form-label fs-14 text-dark">Enter
                                            Password</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ri-lock-line"></i></div>
                                            <input type="password" class="form-control" id="form-password1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck1"
                                            required="">
                                        <label class="form-check-label" for="invalidCheck1">
                                            Accept Policy
                                        </label>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="mb-3"&gt;
    &lt;label for="form-text1" class="form-label fs-14 text-dark"&gt;Enter name&lt;/label&gt;
    &lt;div class="input-group"&gt;
        &lt;div class="input-group-text"&gt;&lt;i class="ri-user-line"&gt;&lt;/i&gt;&lt;/div&gt;
        &lt;input type="text" class="form-control" id="form-text1" placeholder=""&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="mb-3"&gt;
    &lt;label for="form-password1" class="form-label fs-14 text-dark"&gt;Enter
        Password&lt;/label&gt;
    &lt;div class="input-group"&gt;
        &lt;div class="input-group-text"&gt;&lt;i class="ri-lock-line"&gt;&lt;/i&gt;&lt;/div&gt;
        &lt;input type="password" class="form-control" id="form-password1" placeholder=""&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-check mb-3"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" id="invalidCheck1"
        required=""&gt;
    &lt;label class="form-check-label" for="invalidCheck1"&gt;
        Accept Policy
    &lt;/label&gt;
&lt;/div&gt;
&lt;button class="btn btn-primary" type="submit"&gt;Submit&lt;/button&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Horizontal form With Icons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputEmail1"
                                                class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <input type="email" class="form-control" id="inputEmail1">
                                                    <div class="input-group-text">
                                                        <i class="ri-mail-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword1"
                                                class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <input type="password" class="form-control" id="inputPassword1">
                                                    <div class="input-group-text">
                                                        <i class="ri-lock-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Qualified</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="gridRadios" id="gridRadios4" value="option1"
                                                        checked>
                                                    <label class="form-check-label" for="gridRadios4">
                                                        Prelims
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio"
                                                        name="gridRadios" id="gridRadios3" value="option3"
                                                        disabled>
                                                    <label class="form-check-label" for="gridRadios3">
                                                        Mains
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="gridCheck2">
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Certified
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;form&gt;
    &lt;div class="row mb-3"&gt;
        &lt;label for="inputEmail1"
            class="col-sm-2 col-form-label"&gt;Email&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;div class="input-group"&gt;
                &lt;input type="email" class="form-control" id="inputEmail1"&gt;
                &lt;div class="input-group-text"&gt;
                    &lt;i class="ri-mail-line"&gt;&lt;/i&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row mb-3"&gt;
        &lt;label for="inputPassword1"
            class="col-sm-2 col-form-label"&gt;Password&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;div class="input-group"&gt;
                &lt;input type="password" class="form-control" id="inputPassword1"&gt;
                &lt;div class="input-group-text"&gt;
                    &lt;i class="ri-lock-line"&gt;&lt;/i&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;fieldset class="row mb-3"&gt;
        &lt;legend class="col-form-label col-sm-2 pt-0"&gt;Qualified&lt;/legend&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;div class="form-check"&gt;
                &lt;input class="form-check-input" type="radio"
                    name="gridRadios" id="gridRadios4" value="option1"
                    checked&gt;
                &lt;label class="form-check-label" for="gridRadios4"&gt;
                    Prelims
                &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class="form-check disabled"&gt;
                &lt;input class="form-check-input" type="radio"
                    name="gridRadios" id="gridRadios3" value="option3"
                    disabled&gt;
                &lt;label class="form-check-label" for="gridRadios3"&gt;
                    Mains
                &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class="form-check"&gt;
                &lt;input class="form-check-input" type="checkbox"
                    id="gridCheck2"&gt;
                &lt;label class="form-check-label" for="gridCheck2"&gt;
                    Certified
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/fieldset&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;Sign in&lt;/button&gt;
&lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Inline forms
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="row row-cols-lg-auto g-3 align-items-center">
                                        <div class="col-12">
                                            <label class="visually-hidden"
                                                for="inlineFormInputGroupUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control"
                                                    id="inlineFormInputGroupUsername" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="visually-hidden"
                                                for="inlineFormSelectPref">Preference</label>
                                            <select class="form-select" id="inlineFormSelectPref">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="inlineFormCheck">
                                                <label class="form-check-label" for="inlineFormCheck">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;form class="row row-cols-lg-auto g-3 align-items-center"&gt;
    &lt;div class="col-12"&gt;
        &lt;label class="visually-hidden"
            for="inlineFormInputGroupUsername"&gt;Username&lt;/label&gt;
        &lt;div class="input-group"&gt;
            &lt;div class="input-group-text"&gt;@&lt;/div&gt;
            &lt;input type="text" class="form-control"
                id="inlineFormInputGroupUsername" placeholder="Username"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;label class="visually-hidden"
            for="inlineFormSelectPref"&gt;Preference&lt;/label&gt;
        &lt;select class="form-select" id="inlineFormSelectPref"&gt;
            &lt;option selected&gt;Choose...&lt;/option&gt;
            &lt;option value="1"&gt;One&lt;/option&gt;
            &lt;option value="2"&gt;Two&lt;/option&gt;
            &lt;option value="3"&gt;Three&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;div class="form-check"&gt;
            &lt;input class="form-check-input" type="checkbox"
                id="inlineFormCheck"&gt;
            &lt;label class="form-check-label" for="inlineFormCheck"&gt;
                Remember me
            &lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="col-12"&gt;
        &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Column sizing
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" placeholder="City"
                                                aria-label="City">
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" class="form-control" placeholder="State"
                                                aria-label="State">
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" class="form-control" placeholder="Zip"
                                                aria-label="Zip">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="row g-3"&gt;
    &lt;div class="col-sm-7"&gt;
        &lt;input type="text" class="form-control" placeholder="City"
            aria-label="City"&gt;
    &lt;/div&gt;
    &lt;div class="col-sm"&gt;
        &lt;input type="text" class="form-control" placeholder="State"
            aria-label="State"&gt;
    &lt;/div&gt;
    &lt;div class="col-sm"&gt;
        &lt;input type="text" class="form-control" placeholder="Zip"
            aria-label="Zip"&gt;
    &lt;/div&gt;
&lt;/div&gt; </code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-5 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Auto sizing
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="row gy-2 gx-3 align-items-center mb-4">
                                        <div class="col-auto">
                                            <label class="visually-hidden" for="autoSizingInput">Name</label>
                                            <input type="text" class="form-control" id="autoSizingInput"
                                                placeholder="Jane Doe">
                                        </div>
                                        <div class="col-auto">
                                            <label class="visually-hidden"
                                                for="autoSizingInputGroup">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control"
                                                    id="autoSizingInputGroup" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <label class="visually-hidden"
                                                for="autoSizingSelect">Preference</label>
                                            <select class="form-select" id="autoSizingSelect">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="autoSizingCheck">
                                                <label class="form-check-label" for="autoSizingCheck">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    <span class="fw-medium mb-1 text-muted">You can then remix that once again with size-specific column
                                        classes.</span>
                                    <form class="row gx-3 gy-2 align-items-center mt-0">
                                        <div class="col-sm-3">
                                            <label class="visually-hidden"
                                                for="specificSizeInputName">Name</label>
                                            <input type="text" class="form-control" id="specificSizeInputName"
                                                placeholder="Jane Doe">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="visually-hidden"
                                                for="specificSizeInputGroupUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control"
                                                    id="specificSizeInputGroupUsername" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="visually-hidden"
                                                for="specificSizeSelect">Preference</label>
                                            <select class="form-select" id="specificSizeSelect">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="autoSizingCheck2">
                                                <label class="form-check-label" for="autoSizingCheck2">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;form class="row gy-2 gx-3 align-items-center mb-4"&gt;
    &lt;div class="col-auto"&gt;
        &lt;label class="visually-hidden" for="autoSizingInput"&gt;Name&lt;/label&gt;
        &lt;input type="text" class="form-control" id="autoSizingInput"
            placeholder="Jane Doe"&gt;
    &lt;/div&gt;
    &lt;div class="col-auto"&gt;
        &lt;label class="visually-hidden"
            for="autoSizingInputGroup"&gt;Username&lt;/label&gt;
        &lt;div class="input-group"&gt;
            &lt;div class="input-group-text"&gt;@&lt;/div&gt;
            &lt;input type="text" class="form-control"
                id="autoSizingInputGroup" placeholder="Username"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-auto"&gt;
        &lt;label class="visually-hidden"
            for="autoSizingSelect"&gt;Preference&lt;/label&gt;
        &lt;select class="form-select" id="autoSizingSelect"&gt;
            &lt;option selected&gt;Choose...&lt;/option&gt;
            &lt;option value="1"&gt;One&lt;/option&gt;
            &lt;option value="2"&gt;Two&lt;/option&gt;
            &lt;option value="3"&gt;Three&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class="col-auto"&gt;
        &lt;div class="form-check"&gt;
            &lt;input class="form-check-input" type="checkbox"
                id="autoSizingCheck"&gt;
            &lt;label class="form-check-label" for="autoSizingCheck"&gt;
                Remember me
            &lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-auto"&gt;
        &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
&lt;span class="fw-medium mb-1 text-muted"&gt;You can then remix that once again with size-specific column
    classes.&lt;/span&gt;
&lt;form class="row gx-3 gy-2 align-items-center mt-0"&gt;
    &lt;div class="col-sm-3"&gt;
        &lt;label class="visually-hidden"
            for="specificSizeInputName"&gt;Name&lt;/label&gt;
        &lt;input type="text" class="form-control" id="specificSizeInputName"
            placeholder="Jane Doe"&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-3"&gt;
        &lt;label class="visually-hidden"
            for="specificSizeInputGroupUsername"&gt;Username&lt;/label&gt;
        &lt;div class="input-group"&gt;
            &lt;div class="input-group-text"&gt;@&lt;/div&gt;
            &lt;input type="text" class="form-control"
                id="specificSizeInputGroupUsername" placeholder="Username"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-3"&gt;
        &lt;label class="visually-hidden"
            for="specificSizeSelect"&gt;Preference&lt;/label&gt;
        &lt;select class="form-select" id="specificSizeSelect"&gt;
            &lt;option selected&gt;Choose...&lt;/option&gt;
            &lt;option value="1"&gt;One&lt;/option&gt;
            &lt;option value="2"&gt;Two&lt;/option&gt;
            &lt;option value="3"&gt;Three&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class="col-auto"&gt;
        &lt;div class="form-check"&gt;
            &lt;input class="form-check-input" type="checkbox"
                id="autoSizingCheck2"&gt;
            &lt;label class="form-check-label" for="autoSizingCheck2"&gt;
                Remember me
            &lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-auto"&gt;
        &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

                    <!-- Start:: row-4 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Utilities
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Example label</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">
                                    </div>
                                    <div class="mb-1">
                                        <label for="formGroupExampleInput2" class="form-label">Another label</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Another input placeholder">
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="mb-3"&gt;
    &lt;label for="formGroupExampleInput" class="form-label"&gt;Example label&lt;/label&gt;
    &lt;input type="text" class="form-control" id="formGroupExampleInput"
        placeholder="Example input placeholder"&gt;
&lt;/div&gt;
&lt;div class="mb-1"&gt;
    &lt;label for="formGroupExampleInput2" class="form-label"&gt;Another label&lt;/label&gt;
    &lt;input type="text" class="form-control" id="formGroupExampleInput2"
        placeholder="Another input placeholder"&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Horizontal form label sizing
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="colFormLabelSm"
                                            class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control form-control-sm"
                                                id="colFormLabelSm" placeholder="col-form-label-sm">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="colFormLabel"
                                                placeholder="col-form-label">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="colFormLabelLg"
                                            class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control form-control-lg"
                                                id="colFormLabelLg" placeholder="col-form-label-lg">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="row mb-3"&gt;
    &lt;label for="colFormLabelSm"
        class="col-sm-2 col-form-label col-form-label-sm"&gt;Email&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
        &lt;input type="email" class="form-control form-control-sm"
            id="colFormLabelSm" placeholder="col-form-label-sm"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="row mb-3"&gt;
    &lt;label for="colFormLabel" class="col-sm-2 col-form-label"&gt;Email&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
        &lt;input type="email" class="form-control" id="colFormLabel"
            placeholder="col-form-label"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;label for="colFormLabelLg"
        class="col-sm-2 col-form-label col-form-label-lg"&gt;Email&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
        &lt;input type="email" class="form-control form-control-lg"
            id="colFormLabelLg" placeholder="col-form-label-lg"&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-6 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Gutters
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="row g-3 mt-0">
                                        <div class="col-md-6">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="First name"
                                                aria-label="First name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last name"
                                                aria-label="Last name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email id">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="1234 Main St">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress2" class="form-label">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2"
                                                placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputState" class="form-label">State</label>
                                            <select id="inputState" class="form-select form-select-lg">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="inputZip" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck3">
                                                <label class="form-check-label" for="gridCheck3">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;form class="row g-3 mt-0"&gt;
    &lt;div class="col-md-6"&gt;
        &lt;label class="form-label"&gt;First Name&lt;/label&gt;
        &lt;input type="text" class="form-control" placeholder="First name"
            aria-label="First name"&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6"&gt;
        &lt;label class="form-label"&gt;Last Name&lt;/label&gt;
        &lt;input type="text" class="form-control" placeholder="Last name"
            aria-label="Last name"&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6"&gt;
        &lt;label for="inputEmail4" class="form-label"&gt;Email&lt;/label&gt;
        &lt;input type="email" class="form-control" id="inputEmail4"&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6"&gt;
        &lt;label for="inputPassword4" class="form-label"&gt;Password&lt;/label&gt;
        &lt;input type="password" class="form-control" id="inputPassword4"&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;label for="inputAddress" class="form-label"&gt;Address&lt;/label&gt;
        &lt;input type="text" class="form-control" id="inputAddress"
            placeholder="1234 Main St"&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;label for="inputAddress2" class="form-label"&gt;Address 2&lt;/label&gt;
        &lt;input type="text" class="form-control" id="inputAddress2"
            placeholder="Apartment, studio, or floor"&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6"&gt;
        &lt;label for="inputCity" class="form-label"&gt;City&lt;/label&gt;
        &lt;input type="text" class="form-control" id="inputCity"&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        &lt;label for="inputState" class="form-label"&gt;State&lt;/label&gt;
        &lt;select id="inputState" class="form-select"&gt;
            &lt;option selected&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class="col-md-2"&gt;
        &lt;label for="inputZip" class="form-label"&gt;Zip&lt;/label&gt;
        &lt;input type="text" class="form-control" id="inputZip"&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;div class="form-check"&gt;
            &lt;input class="form-check-input" type="checkbox" id="gridCheck3"&gt;
            &lt;label class="form-check-label" for="gridCheck3"&gt;
                Check me out
            &lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;button type="submit" class="btn btn-primary"&gt;Sign in&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Form grid
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="First name"
                                                aria-label="First name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last name"
                                                aria-label="Last name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Address</label>
                                            <div class="row">
                                                <div class="col-xl-12 mb-3">
                                                    <input type="text" class="form-control" placeholder="Street"
                                                    aria-label="Street">
                                                </div>
                                                <div class="col-xl-12 mb-3">
                                                    <input type="text" class="form-control" placeholder="Landmark"
                                                    aria-label="Landmark">
                                                </div>
                                                <div class="col-xxl-6 col-xl-12 mb-3">
                                                    <input type="text" class="form-control" placeholder="City"
                                                    aria-label="City">
                                                </div>
                                                <div class="col-xxl-6 col-xl-12 mb-3">
                                                    <select id="inputState1" class="form-select">
                                                        <option selected>State</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="col-xxl-6 col-xl-12 mb-3">
                                                    <input type="text" class="form-control" placeholder="Postal/Zip code"
                                                    aria-label="Postal/Zip code">
                                                </div>
                                                <div class="col-xxl-6 col-xl-12 mb-3">
                                                    <select id="inputCountry" class="form-select">
                                                        <option selected>Country</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="row">
                                                <div class="col-xl-12 mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email"
                                                    aria-label="email">
                                                </div>
                                                <div class="col-xl-12 mb-3">
                                                    <label class="form-label">D.O.B</label>
                                                    <input type="date" class="form-control"
                                                    aria-label="dateofbirth">
                                                </div>
                                                <div class="col-xl-12 mb-3">
                                                    <div class="row">
                                                        <label class="form-label mb-1">Maritial Status</label>
                                                        <div class="col-xl-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                   Married
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Single
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Contact Number</label>
                                            <input type="number" class="form-control" placeholder="Phone number"
                                                aria-label="Phone number">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Alternative Contact</label>
                                            <input type="number" class="form-control" placeholder="Phone number"
                                                aria-label="Phone number">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="row"&gt;
    &lt;div class="col-md-6 mb-3"&gt;
        &lt;label class="form-label"&gt;First Name&lt;/label&gt;
        &lt;input type="text" class="form-control" placeholder="First name"
            aria-label="First name"&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6 mb-3"&gt;
        &lt;label class="form-label"&gt;Last Name&lt;/label&gt;
        &lt;input type="text" class="form-control" placeholder="Last name"
            aria-label="Last name"&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6 mb-3"&gt;
        &lt;label class="form-label"&gt;Address&lt;/label&gt;
        &lt;div class="row"&gt;
            &lt;div class="col-xl-12 mb-3"&gt;
                &lt;input type="text" class="form-control" placeholder="Street"
                aria-label="Street"&gt;
            &lt;/div&gt;
            &lt;div class="col-xl-12 mb-3"&gt;
                &lt;input type="text" class="form-control" placeholder="Landmark"
                aria-label="Landmark"&gt;
            &lt;/div&gt;
            &lt;div class="col-xl-6 mb-3"&gt;
                &lt;input type="text" class="form-control" placeholder="City"
                aria-label="City"&gt;
            &lt;/div&gt;
            &lt;div class="col-xl-6 mb-3"&gt;
                &lt;select id="inputState1" class="form-select"&gt;
                    &lt;option selected&gt;State/Province&lt;/option&gt;
                    &lt;option&gt;...&lt;/option&gt;
                &lt;/select&gt;
            &lt;/div&gt;
            &lt;div class="col-xl-6 mb-3"&gt;
                &lt;input type="text" class="form-control" placeholder="Postal/Zip code"
                aria-label="Postal/Zip code"&gt;
            &lt;/div&gt;
            &lt;div class="col-xl-6 mb-3"&gt;
                &lt;select id="inputCountry" class="form-select"&gt;
                    &lt;option selected&gt;Country&lt;/option&gt;
                    &lt;option&gt;...&lt;/option&gt;
                &lt;/select&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6 mb-3"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col-xl-12 mb-3"&gt;
                &lt;label class="form-label"&gt;Email&lt;/label&gt;
                &lt;input type="email" class="form-control" placeholder="Email"
                aria-label="email"&gt;
            &lt;/div&gt;
            &lt;div class="col-xl-12 mb-3"&gt;
                &lt;label class="form-label"&gt;D.O.B&lt;/label&gt;
                &lt;input type="date" class="form-control"
                aria-label="dateofbirth"&gt;
            &lt;/div&gt;
            &lt;div class="col-xl-12 mb-3"&gt;
                &lt;div class="row"&gt;
                    &lt;label class="form-label mb-1"&gt;Maritial Status&lt;/label&gt;
                    &lt;div class="col-xl-6"&gt;
                        &lt;div class="form-check"&gt;
                            &lt;input class="form-check-input" type="checkbox" value="" id="status-married" required=""&gt;
                            &lt;label class="form-check-label" for="status-married"&gt;
                                Married
                            &lt;/label&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="col-xl-6"&gt;
                        &lt;div class="form-check"&gt;
                            &lt;input class="form-check-input" type="checkbox" value="" id="status-unmarried" required=""&gt;
                            &lt;label class="form-check-label" for="status-unmarried"&gt;
                                Single
                            &lt;/label&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="col-xl-12"&gt;

            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6 mb-3"&gt;
        &lt;label class="form-label"&gt;Contact Number&lt;/label&gt;
        &lt;input type="number" class="form-control" placeholder="Phone number"
            aria-label="Phone number"&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6 mb-3"&gt;
        &lt;label class="form-label"&gt;Alternative Contact&lt;/label&gt;
        &lt;input type="number" class="form-control" placeholder="Phone number"
            aria-label="Phone number"&gt;
    &lt;/div&gt;
    &lt;div class="col-md-12"&gt;
        &lt;div class="form-check mb-3"&gt;
            &lt;input class="form-check-input" type="checkbox" id="gridCheck"&gt;
            &lt;label class="form-check-label" for="gridCheck"&gt;
                Check me out
            &lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-12"&gt;
        &lt;button type="submit" class="btn btn-primary"&gt;Sign in&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt; </code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-6 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
