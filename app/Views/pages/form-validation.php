
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
                                    <li class="breadcrumb-item active" aria-current="page">Validation</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Validation</h1>
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
                                        Browser Default Validation
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="row g-3">
                                        <div class="col-md-4">
                                            <label for="validationDefault01" class="form-label">First name</label>
                                            <input type="text" class="form-control" id="validationDefault01"
                                                value="Mark" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationDefault02" class="form-label">Last name</label>
                                            <input type="text" class="form-control" id="validationDefault02"
                                                value="Otto" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationDefaultUsername" class="form-label">Username</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                                <input type="text" class="form-control" id="validationDefaultUsername"
                                                    aria-describedby="inputGroupPrepend2" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationDefault03" class="form-label">City</label>
                                            <input type="text" class="form-control" id="validationDefault03" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationDefault04" class="form-label">State</label>
                                            <select class="form-select" id="validationDefault04" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationDefault05" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="validationDefault05" required>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="invalidCheck2" required>
                                                <label class="form-check-label" for="invalidCheck2">
                                                    Agree to terms and conditions
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;form class="row g-3"&gt;
    &lt;div class="col-md-4"&gt;
        &lt;label for="validationDefault01" class="form-label"&gt;First name&lt;/label&gt;
        &lt;input type="text" class="form-control" id="validationDefault01"
            value="Mark" required&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        &lt;label for="validationDefault02" class="form-label"&gt;Last name&lt;/label&gt;
        &lt;input type="text" class="form-control" id="validationDefault02"
            value="Otto" required&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        &lt;label for="validationDefaultUsername" class="form-label"&gt;Username&lt;/label&gt;
        &lt;div class="input-group"&gt;
            &lt;span class="input-group-text" id="inputGroupPrepend2"&gt;@&lt;/span&gt;
            &lt;input type="text" class="form-control" id="validationDefaultUsername"
                aria-describedby="inputGroupPrepend2" required&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6"&gt;
        &lt;label for="validationDefault03" class="form-label"&gt;City&lt;/label&gt;
        &lt;input type="text" class="form-control" id="validationDefault03" required&gt;
    &lt;/div&gt;
    &lt;div class="col-md-3"&gt;
        &lt;label for="validationDefault04" class="form-label"&gt;State&lt;/label&gt;
        &lt;select class="form-select" id="validationDefault04" required&gt;
            &lt;option selected disabled value=""&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class="col-md-3"&gt;
        &lt;label for="validationDefault05" class="form-label"&gt;Zip&lt;/label&gt;
        &lt;input type="text" class="form-control" id="validationDefault05" required&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;div class="form-check"&gt;
            &lt;input class="form-check-input" type="checkbox" value=""
                id="invalidCheck2" required&gt;
            &lt;label class="form-check-label" for="invalidCheck2"&gt;
                Agree to terms and conditions
            &lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;button class="btn btn-primary" type="submit"&gt;Submit form&lt;/button&gt;
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
                                        Custom Validation
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="row g-3 needs-validation" novalidate>
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">First name</label>
                                            <input type="text" class="form-control" id="validationCustom01" value="Mark"
                                                required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Last name</label>
                                            <input type="text" class="form-control" id="validationCustom02" value="Otto"
                                                required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustomUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control" id="validationCustomUsername"
                                                    aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom03" class="form-label">City</label>
                                            <input type="text" class="form-control" id="validationCustom03" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">State</label>
                                            <select class="form-select" id="validationCustom04" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationCustom05" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="validationCustom05" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                    Agree to terms and conditions
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;form class="row g-3 needs-validation" novalidate&gt;
    &lt;div class="col-md-4"&gt;
        &lt;label for="validationCustom01" class="form-label"&gt;First name&lt;/label&gt;
        &lt;input type="text" class="form-control" id="validationCustom01" value="Mark"
            required&gt;
        &lt;div class="valid-feedback"&gt;
            Looks good!
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        &lt;label for="validationCustom02" class="form-label"&gt;Last name&lt;/label&gt;
        &lt;input type="text" class="form-control" id="validationCustom02" value="Otto"
            required&gt;
        &lt;div class="valid-feedback"&gt;
            Looks good!
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        &lt;label for="validationCustomUsername" class="form-label"&gt;Username&lt;/label&gt;
        &lt;div class="input-group has-validation"&gt;
            &lt;span class="input-group-text" id="inputGroupPrepend"&gt;@&lt;/span&gt;
            &lt;input type="text" class="form-control" id="validationCustomUsername"
                aria-describedby="inputGroupPrepend" required&gt;
            &lt;div class="invalid-feedback"&gt;
                Please choose a username.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6"&gt;
        &lt;label for="validationCustom03" class="form-label"&gt;City&lt;/label&gt;
        &lt;input type="text" class="form-control" id="validationCustom03" required&gt;
        &lt;div class="invalid-feedback"&gt;
            Please provide a valid city.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-3"&gt;
        &lt;label for="validationCustom04" class="form-label"&gt;State&lt;/label&gt;
        &lt;select class="form-select" id="validationCustom04" required&gt;
            &lt;option selected disabled value=""&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class="invalid-feedback"&gt;
            Please select a valid state.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-3"&gt;
        &lt;label for="validationCustom05" class="form-label"&gt;Zip&lt;/label&gt;
        &lt;input type="text" class="form-control" id="validationCustom05" required&gt;
        &lt;div class="invalid-feedback"&gt;
            Please provide a valid zip.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;div class="form-check"&gt;
            &lt;input class="form-check-input" type="checkbox" value=""
                id="invalidCheck" required&gt;
            &lt;label class="form-check-label" for="invalidCheck"&gt;
                Agree to terms and conditions
            &lt;/label&gt;
            &lt;div class="invalid-feedback"&gt;
                You must agree before submitting.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;button class="btn btn-primary" type="submit"&gt;Submit form&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
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
                                        Supported elements
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="was-validated">
                                        <div class="mb-3">
                                            <label for="validationTextarea" class="form-label">Textarea</label>
                                            <textarea class="form-control is-invalid" id="validationTextarea"
                                                placeholder="Required example textarea" required=""></textarea>
                                            <div class="invalid-feedback">
                                                Please enter a message in the textarea.
                                            </div>
                                        </div>

                                        <div class="form-check mb-3">
                                            <input type="checkbox" class="form-check-input" id="validationFormCheck1"
                                                required="">
                                            <label class="form-check-label" for="validationFormCheck1">Check this
                                                checkbox</label>
                                            <div class="invalid-feedback">Example invalid feedback text</div>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="validationFormCheck2"
                                                name="radio-stacked" required="">
                                            <label class="form-check-label" for="validationFormCheck2">Toggle this
                                                radio</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input type="radio" class="form-check-input" id="validationFormCheck3"
                                                name="radio-stacked" required="">
                                            <label class="form-check-label" for="validationFormCheck3">Or toggle
                                                this
                                                other radio</label>
                                            <div class="invalid-feedback">More example invalid feedback text</div>
                                        </div>

                                        <div class="mb-3">
                                            <select class="form-select" required="" aria-label="select example">
                                                <option value="">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <div class="invalid-feedback">Example invalid select feedback</div>
                                        </div>

                                        <div class="mb-3">
                                            <input type="file" class="form-control" aria-label="file example"
                                                required="">
                                            <div class="invalid-feedback">Example invalid form file feedback</div>
                                        </div>

                                        <div class="mb-3">
                                            <button class="btn btn-primary" type="submit" disabled="">Submit
                                                form</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;form class="was-validated"&gt;
    &lt;div class="mb-3"&gt;
        &lt;label for="validationTextarea" class="form-label"&gt;Textarea&lt;/label&gt;
        &lt;textarea class="form-control is-invalid" id="validationTextarea"
            placeholder="Required example textarea" required=""&gt;&lt;/textarea&gt;
        &lt;div class="invalid-feedback"&gt;
            Please enter a message in the textarea.
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="form-check mb-3"&gt;
        &lt;input type="checkbox" class="form-check-input" id="validationFormCheck1"
            required=""&gt;
        &lt;label class="form-check-label" for="validationFormCheck1"&gt;Check this
            checkbox&lt;/label&gt;
        &lt;div class="invalid-feedback"&gt;Example invalid feedback text&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="form-check"&gt;
        &lt;input type="radio" class="form-check-input" id="validationFormCheck2"
            name="radio-stacked" required=""&gt;
        &lt;label class="form-check-label" for="validationFormCheck2"&gt;Toggle this
            radio&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="form-check mb-3"&gt;
        &lt;input type="radio" class="form-check-input" id="validationFormCheck3"
            name="radio-stacked" required=""&gt;
        &lt;label class="form-check-label" for="validationFormCheck3"&gt;Or toggle
            this
            other radio&lt;/label&gt;
        &lt;div class="invalid-feedback"&gt;More example invalid feedback text&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="mb-3"&gt;
        &lt;select class="form-select" required="" aria-label="select example"&gt;
            &lt;option value=""&gt;Open this select menu&lt;/option&gt;
            &lt;option value="1"&gt;One&lt;/option&gt;
            &lt;option value="2"&gt;Two&lt;/option&gt;
            &lt;option value="3"&gt;Three&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class="invalid-feedback"&gt;Example invalid select feedback&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="mb-3"&gt;
        &lt;input type="file" class="form-control" aria-label="file example"
            required=""&gt;
        &lt;div class="invalid-feedback"&gt;Example invalid form file feedback&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="mb-3"&gt;
        &lt;button class="btn btn-primary" type="submit" disabled=""&gt;Submit
            form&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Server side Validation
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form class="row g-3">
                                                <div class="col-md-4">
                                                    <label for="validationServer01" class="form-label">First
                                                        name</label>
                                                    <input type="text" class="form-control is-valid"
                                                        id="validationServer01" value="Mark" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationServer02" class="form-label">Last
                                                        name</label>
                                                    <input type="text" class="form-control is-valid"
                                                        id="validationServer02" value="Otto" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationServerUsername"
                                                        class="form-label">Username</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                                        <input type="text" class="form-control is-invalid"
                                                            id="validationServerUsername"
                                                            aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"
                                                            required>
                                                        <div id="validationServerUsernameFeedback"
                                                            class="invalid-feedback">
                                                            Please choose a username.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="validationServer03" class="form-label">City</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        id="validationServer03"
                                                        aria-describedby="validationServer03Feedback" required>
                                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="validationServer04" class="form-label">State</label>
                                                    <select class="form-select is-invalid" id="validationServer04"
                                                        aria-describedby="validationServer04Feedback" required>
                                                        <option selected disabled value="">Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                                        Please select a valid state.
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="validationServer05" class="form-label">Zip</label>
                                                    <input type="text" class="form-control is-invalid"
                                                        id="validationServer05"
                                                        aria-describedby="validationServer05Feedback" required>
                                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                                        Please provide a valid zip.
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input is-invalid" type="checkbox"
                                                            value="" id="invalidCheck3"
                                                            aria-describedby="invalidCheck3Feedback" required>
                                                        <label class="form-check-label" for="invalidCheck3">
                                                            Agree to terms and conditions
                                                        </label>
                                                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary" type="submit">Submit
                                                        form</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;form class="row g-3"&gt;
    &lt;div class="col-md-4"&gt;
        &lt;label for="validationServer01" class="form-label"&gt;First
            name&lt;/label&gt;
        &lt;input type="text" class="form-control is-valid"
            id="validationServer01" value="Mark" required&gt;
        &lt;div class="valid-feedback"&gt;
            Looks good!
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        &lt;label for="validationServer02" class="form-label"&gt;Last
            name&lt;/label&gt;
        &lt;input type="text" class="form-control is-valid"
            id="validationServer02" value="Otto" required&gt;
        &lt;div class="valid-feedback"&gt;
            Looks good!
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        &lt;label for="validationServerUsername"
            class="form-label"&gt;Username&lt;/label&gt;
        &lt;div class="input-group has-validation"&gt;
            &lt;span class="input-group-text" id="inputGroupPrepend3"&gt;@&lt;/span&gt;
            &lt;input type="text" class="form-control is-invalid"
                id="validationServerUsername"
                aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"
                required&gt;
            &lt;div id="validationServerUsernameFeedback"
                class="invalid-feedback"&gt;
                Please choose a username.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6"&gt;
        &lt;label for="validationServer03" class="form-label"&gt;City&lt;/label&gt;
        &lt;input type="text" class="form-control is-invalid"
            id="validationServer03"
            aria-describedby="validationServer03Feedback" required&gt;
        &lt;div id="validationServer03Feedback" class="invalid-feedback"&gt;
            Please provide a valid city.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-3"&gt;
        &lt;label for="validationServer04" class="form-label"&gt;State&lt;/label&gt;
        &lt;select class="form-select is-invalid" id="validationServer04"
            aria-describedby="validationServer04Feedback" required&gt;
            &lt;option selected disabled value=""&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
        &lt;/select&gt;
        &lt;div id="validationServer04Feedback" class="invalid-feedback"&gt;
            Please select a valid state.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-3"&gt;
        &lt;label for="validationServer05" class="form-label"&gt;Zip&lt;/label&gt;
        &lt;input type="text" class="form-control is-invalid"
            id="validationServer05"
            aria-describedby="validationServer05Feedback" required&gt;
        &lt;div id="validationServer05Feedback" class="invalid-feedback"&gt;
            Please provide a valid zip.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;div class="form-check"&gt;
            &lt;input class="form-check-input is-invalid" type="checkbox"
                value="" id="invalidCheck3"
                aria-describedby="invalidCheck3Feedback" required&gt;
            &lt;label class="form-check-label" for="invalidCheck3"&gt;
                Agree to terms and conditions
            &lt;/label&gt;
            &lt;div id="invalidCheck3Feedback" class="invalid-feedback"&gt;
                You must agree before submitting.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;button class="btn btn-primary" type="submit"&gt;Submit
            form&lt;/button&gt;
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
                                                Tooltips
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form class="row g-3 needs-validation" novalidate>
                                                <div class="col-md-4 position-relative">
                                                    <label for="validationTooltip01" class="form-label">First
                                                        name</label>
                                                    <input type="text" class="form-control" id="validationTooltip01"
                                                        value="Mark" required>
                                                    <div class="valid-tooltip">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4 position-relative">
                                                    <label for="validationTooltip02" class="form-label">Last
                                                        name</label>
                                                    <input type="text" class="form-control" id="validationTooltip02"
                                                        value="Otto" required>
                                                    <div class="valid-tooltip">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4 position-relative">
                                                    <label for="validationTooltipUsername"
                                                        class="form-label">Username</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text"
                                                            id="validationTooltipUsernamePrepend">@</span>
                                                        <input type="text" class="form-control"
                                                            id="validationTooltipUsername"
                                                            aria-describedby="validationTooltipUsernamePrepend"
                                                            required>
                                                        <div class="invalid-tooltip">
                                                            Please choose a unique and valid username.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 position-relative">
                                                    <label for="validationTooltip03" class="form-label">City</label>
                                                    <input type="text" class="form-control" id="validationTooltip03"
                                                        required>
                                                    <div class="invalid-tooltip">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
                                                <div class="col-md-3 position-relative">
                                                    <label for="validationTooltip04" class="form-label">State</label>
                                                    <select class="form-select" id="validationTooltip04" required>
                                                        <option selected disabled value="">Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                    <div class="invalid-tooltip">
                                                        Please select a valid state.
                                                    </div>
                                                </div>
                                                <div class="col-md-3 position-relative">
                                                    <label for="validationTooltip05" class="form-label">Zip</label>
                                                    <input type="text" class="form-control" id="validationTooltip05"
                                                        required>
                                                    <div class="invalid-tooltip">
                                                        Please provide a valid zip.
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary" type="submit">Submit
                                                        form</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;form class="row g-3 needs-validation" novalidate&gt;
    &lt;div class="col-md-4 position-relative"&gt;
        &lt;label for="validationTooltip01" class="form-label"&gt;First
            name&lt;/label&gt;
        &lt;input type="text" class="form-control" id="validationTooltip01"
            value="Mark" required&gt;
        &lt;div class="valid-tooltip"&gt;
            Looks good!
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4 position-relative"&gt;
        &lt;label for="validationTooltip02" class="form-label"&gt;Last
            name&lt;/label&gt;
        &lt;input type="text" class="form-control" id="validationTooltip02"
            value="Otto" required&gt;
        &lt;div class="valid-tooltip"&gt;
            Looks good!
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4 position-relative"&gt;
        &lt;label for="validationTooltipUsername"
            class="form-label"&gt;Username&lt;/label&gt;
        &lt;div class="input-group has-validation"&gt;
            &lt;span class="input-group-text"
                id="validationTooltipUsernamePrepend"&gt;@&lt;/span&gt;
            &lt;input type="text" class="form-control"
                id="validationTooltipUsername"
                aria-describedby="validationTooltipUsernamePrepend"
                required&gt;
            &lt;div class="invalid-tooltip"&gt;
                Please choose a unique and valid username.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6 position-relative"&gt;
        &lt;label for="validationTooltip03" class="form-label"&gt;City&lt;/label&gt;
        &lt;input type="text" class="form-control" id="validationTooltip03"
            required&gt;
        &lt;div class="invalid-tooltip"&gt;
            Please provide a valid city.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-3 position-relative"&gt;
        &lt;label for="validationTooltip04" class="form-label"&gt;State&lt;/label&gt;
        &lt;select class="form-select" id="validationTooltip04" required&gt;
            &lt;option selected disabled value=""&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class="invalid-tooltip"&gt;
            Please select a valid state.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-3 position-relative"&gt;
        &lt;label for="validationTooltip05" class="form-label"&gt;Zip&lt;/label&gt;
        &lt;input type="text" class="form-control" id="validationTooltip05"
            required&gt;
        &lt;div class="invalid-tooltip"&gt;
            Please provide a valid zip.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-12"&gt;
        &lt;button class="btn btn-primary" type="submit"&gt;Submit
            form&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

        <!-- Form Validation JS -->
        <script src="<?php echo base_url('assets/js/validation.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
