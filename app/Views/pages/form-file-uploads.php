
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>

        <!-- Prism CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/prismjs/themes/prism-coy.min.css'); ?>">

        <link rel="stylesheet" href="<?php echo base_url('assets/libs/filepond/filepond.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/libs/dropzone/dropzone.css'); ?>">

<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">File Uploads</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">File Uploads</h1>
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
                                        Bootstrap File Input
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Default file input example</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFileMultiple" class="form-label">Multiple files input
                                            example</label>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFileDisabled" class="form-label">Disabled file input
                                            example</label>
                                        <input class="form-control" type="file" id="formFileDisabled" disabled="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFileSm" class="form-label">Small file input example</label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                                    </div>
                                    <div>
                                        <label for="formFileLg" class="form-label">Large file input example</label>
                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="mb-3"&gt;
        &lt;label for="formFile" class="form-label"&gt;Default file input example&lt;/label&gt;
        &lt;input class="form-control" type="file" id="formFile"&gt;
    &lt;/div&gt;
    &lt;div class="mb-3"&gt;
        &lt;label for="formFileMultiple" class="form-label"&gt;Multiple files input
            example&lt;/label&gt;
        &lt;input class="form-control" type="file" id="formFileMultiple" multiple=""&gt;
    &lt;/div&gt;
    &lt;div class="mb-3"&gt;
        &lt;label for="formFileDisabled" class="form-label"&gt;Disabled file input
            example&lt;/label&gt;
        &lt;input class="form-control" type="file" id="formFileDisabled" disabled=""&gt;
    &lt;/div&gt;
    &lt;div class="mb-3"&gt;
        &lt;label for="formFileSm" class="form-label"&gt;Small file input example&lt;/label&gt;
        &lt;input class="form-control form-control-sm" id="formFileSm" type="file"&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for="formFileLg" class="form-label"&gt;Large file input example&lt;/label&gt;
        &lt;input class="form-control form-control-lg" id="formFileLg" type="file"&gt;
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
                                <div class="card-header">
                                    <div class="card-title">
                                        Dropzone
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form data-single="true" method="post" action="https://httpbin.org/post" class="dropzone"></form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <h6 class="mb-3">Filepond:</h6>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Multiple Upload
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="multiple-filepond" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Single Upload
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="single-fileupload" name="filepond" accept="image/png, image/jpeg, image/gif">
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

        <!-- Filepond JS -->
        <script src="<?php echo base_url('assets/libs/filepond/filepond.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js'); ?>"></script>

        <!-- Dropzone JS -->
        <script src="<?php echo base_url('assets/libs/dropzone/dropzone-min.js'); ?>"></script>

        <!-- Fileupload JS -->
        <script src="<?php echo base_url('assets/js/fileupload.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
