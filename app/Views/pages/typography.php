
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
                                    <li class="breadcrumb-item active" aria-current="page">Typography</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Typography</h1>
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
                                        Font Sizes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="fs-1 mb-2">.fs-1 text</p>
                                    <p class="fs-2 mb-2">.fs-2 text</p>
                                    <p class="fs-3 mb-2">.fs-3 text</p>
                                    <p class="fs-4 mb-2">.fs-4 text</p>
                                    <p class="fs-5 mb-2">.fs-5 text</p>
                                    <p class="fs-6 mb-0">.fs-6 text</p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="fs-1 mb-2"&gt;.fs-1 text&lt;/p&gt;
    &lt;p class="fs-2 mb-2"&gt;.fs-2 text&lt;/p&gt;
    &lt;p class="fs-3 mb-2"&gt;.fs-3 text&lt;/p&gt;
    &lt;p class="fs-4 mb-2"&gt;.fs-4 text&lt;/p&gt;
    &lt;p class="fs-5 mb-2"&gt;.fs-5 text&lt;/p&gt;
    &lt;p class="fs-6 mb-0"&gt;.fs-6 text&lt;/p&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Inline text elements
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                    <p><del>This line of text is meant to be treated as deleted text.</del>
                                    </p>
                                    <p><s>This line of text is meant to be treated as no longer
                                            accurate.</s>
                                    </p>
                                    <p><ins>This line of text is meant to be treated as an addition to the
                                            document.</ins></p>
                                    <p><u>This line of text will render as underlined.</u></p>
                                    <p><small>This line of text is meant to be treated as fine
                                            print.</small>
                                    </p>
                                    <p><strong>This line rendered as bold text.</strong></p>
                                    <p class="mb-0"><em>This line rendered as italicized text.</em></p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p>You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;
    &lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;
    &lt;/p&gt;
    &lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer
            accurate.&lt;/s&gt;
    &lt;/p&gt;
    &lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the
            document.&lt;/ins&gt;&lt;/p&gt;
    &lt;p&gt;&lt;u&gt;This line of text will render as underlined.&lt;/u&gt;&lt;/p&gt;
    &lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine
            print.&lt;/small&gt;
    &lt;/p&gt;
    &lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;
    &lt;p class="mb-0"&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;</code></pre>
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
                                        Display headings
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h1 class="display-1">Display 1</h1>
                                    <h1 class="display-2">Display 2</h1>
                                    <h1 class="display-3">Display 3</h1>
                                    <h1 class="display-4">Display 4</h1>
                                    <h1 class="display-5">Display 5</h1>
                                    <h1 class="display-6">Display 6</h1>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;h1 class="display-1"&gt;Display 1&lt;/h1&gt;
    &lt;h1 class="display-2"&gt;Display 2&lt;/h1&gt;
    &lt;h1 class="display-3"&gt;Display 3&lt;/h1&gt;
    &lt;h1 class="display-4"&gt;Display 4&lt;/h1&gt;
    &lt;h1 class="display-5"&gt;Display 5&lt;/h1&gt;
    &lt;h1 class="display-6"&gt;Display 6&lt;/h1&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Customizing headings
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3>
                                        Fancy display heading
                                        <small class="text-muted">With faded secondary text</small>
                                    </h3>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;h3&gt;
    Fancy display heading
    &lt;small class="text-muted"&gt;With faded secondary text&lt;/small&gt;
&lt;/h3&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Headings H tags
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h1 class="mb-3">h1. Bootstrap heading</h1>
                                    <h2 class="mb-3">h2. Bootstrap heading</h2>
                                    <h3 class="mb-3">h3. Bootstrap heading</h3>
                                    <h4 class="mb-3">h4. Bootstrap heading</h4>
                                    <h5 class="mb-3">h5. Bootstrap heading</h5>
                                    <h6 class="mb-0">h6. Bootstrap heading</h6>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;h1 class="mb-3">h1. Bootstrap heading&lt;/h1&gt;
    &lt;h2 class="mb-3"&gt;h2. Bootstrap heading&lt;/h2&gt;
    &lt;h3 class="mb-3"&gt;h3. Bootstrap heading&lt;/h3&gt;
    &lt;h4 class="mb-3"&gt;h4. Bootstrap heading&lt;/h4&gt;
    &lt;h5 class="mb-3"&gt;h5. Bootstrap heading&lt;/h5&gt;
    &lt;h6 class="mb-0"&gt;h6. Bootstrap heading&lt;/h6&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Heading Class Names
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="h1 mb-3">h1. Bootstrap heading</p>
                                    <p class="h2 mb-3">h2. Bootstrap heading</p>
                                    <p class="h3 mb-3">h3. Bootstrap heading</p>
                                    <p class="h4 mb-3">h4. Bootstrap heading</p>
                                    <p class="h5 mb-3">h5. Bootstrap heading</p>
                                    <p class="h6 mb-0">h6. Bootstrap heading</p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="h1 mb-3">h1. Bootstrap heading&lt;/p&gt;
    &lt;p class="h2 mb-3"&gt;h2. Bootstrap heading&lt;/p&gt;
    &lt;p class="h3 mb-3"&gt;h3. Bootstrap heading&lt;/p&gt;
    &lt;p class="h4 mb-3"&gt;h4. Bootstrap heading&lt;/p&gt;
    &lt;p class="h5 mb-3"&gt;h5. Bootstrap heading&lt;/p&gt;
    &lt;p class="h6 mb-0"&gt;h6. Bootstrap heading&lt;/p&gt;</code></pre>
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
                                        Lead Paragraph
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="lead mb-0">
                                        <b>This is a lead paragraph. It stands out from regular paragraphs</b>.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="lead mb-0"&gt;
    &lt;b&gt;This is a lead paragraph. It stands out from regular paragraphs&lt;/b&gt;.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
&lt;/p&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <h6 class="mb-3">Blockquotes</h6>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Left Aligned
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <figure class="blockquote-container">
                                        <blockquote class="blockquote mb-2">
                                            <h6>Goodness isn't about avoiding falls, but about the courage to rise, stronger and kinder, with every stumble.</h6>
                                        </blockquote>
                                        <figcaption class="blockquote-footer mt-0 mb-0 text-muted op-7"><cite title="Source Title">Nelson Mandela</cite>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;figure class="blockquote-container"&gt;
    &lt;blockquote class="blockquote mb-2"&gt;
        &lt;h6&gt;Goodness isn't about avoiding falls, but about the courage to rise, stronger and kinder, with every stumble.&lt;/h6&gt;
    &lt;/blockquote&gt;
    &lt;figcaption class="blockquote-footer mt-0 mb-0 text-muted op-7"&gt;&lt;cite title="Source Title"&gt;Nelson Mandela&lt;/cite&gt;
    &lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Right Aligned
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <figure class="blockquote-container text-end">
                                        <blockquote class="blockquote mb-2">
                                            <h6>Goodness isn't about avoiding falls, but about the courage to rise, stronger and kinder, with every stumble.</h6>
                                        </blockquote>
                                        <figcaption class="blockquote-footer mt-0 mb-0 text-muted op-7"><cite title="Source Title">Nelson Mandela</cite>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;figure class="blockquote-container text-end"&gt;
    &lt;blockquote class="blockquote mb-2"&gt;
        &lt;h6&gt;Goodness isn't about avoiding falls, but about the courage to rise, stronger and kinder, with every stumble.&lt;/h6&gt;
    &lt;/blockquote&gt;
    &lt;figcaption class="blockquote-footer mt-0 mb-0 text-muted op-7"&gt;&lt;cite title="Source Title"&gt;Nelson Mandela&lt;/cite&gt;
    &lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <h6 class="mb-3">Custom Blockquotes</h6>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                       Primary Blockquote
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote custom-blockquote primary mb-0 text-center">
                                        <h6>The future belongs to those who believe in the beauty of their dreams..</h6>
                                        <footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
                                        <span class="quote-icon"><i class="ri-information-line"></i></span>
                                    </blockquote>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;blockquote class="blockquote custom-blockquote primary mb-0 text-center"&gt;
    &lt;h6&gt;The future belongs to those who believe in the beauty of their dreams..&lt;/h6&gt;
    &lt;footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0"&gt;Someone famous as &lt;cite title="Source Title"&gt;-Eleanor Roosevelt&lt;/cite&gt;&lt;/footer&gt;
    &lt;span class="quote-icon"&gt;&lt;i class="ri-information-line"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/blockquote&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                       Secondary Blockquote
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote custom-blockquote secondary mb-0 text-center">
                                        <h6>The future belongs to those who believe in the beauty of their dreams..</h6>
                                        <footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
                                        <span class="quote-icon"><i class="ri-information-line"></i></span>
                                    </blockquote>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;blockquote class="blockquote custom-blockquote secondary mb-0 text-center"&gt;
    &lt;h6&gt;The future belongs to those who believe in the beauty of their dreams..&lt;/h6&gt;
    &lt;footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0"&gt;Someone famous as &lt;cite title="Source Title"&gt;-Eleanor Roosevelt&lt;/cite&gt;&lt;/footer&gt;
    &lt;span class="quote-icon"&gt;&lt;i class="ri-information-line"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/blockquote&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                       Warning Blockquote
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote custom-blockquote warning mb-0 text-center">
                                        <h6>The future belongs to those who believe in the beauty of their dreams..</h6>
                                        <footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
                                        <span class="quote-icon"><i class="ri-information-line"></i></span>
                                    </blockquote>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;blockquote class="blockquote custom-blockquote warning mb-0 text-center"&gt;
    &lt;h6&gt;The future belongs to those who believe in the beauty of their dreams..&lt;/h6&gt;
    &lt;footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0"&gt;Someone famous as &lt;cite title="Source Title"&gt;-Eleanor Roosevelt&lt;/cite&gt;&lt;/footer&gt;
    &lt;span class="quote-icon"&gt;&lt;i class="ri-information-line"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/blockquote&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                       Success Blockquote
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote custom-blockquote success mb-0 text-center">
                                        <h6>The future belongs to those who believe in the beauty of their dreams..</h6>
                                        <footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
                                        <span class="quote-icon"><i class="ri-information-line"></i></span>
                                    </blockquote>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;blockquote class="blockquote custom-blockquote success mb-0 text-center"&gt;
    &lt;h6&gt;The future belongs to those who believe in the beauty of their dreams..&lt;/h6&gt;
    &lt;footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0"&gt;Someone famous as &lt;cite title="Source Title"&gt;-Eleanor Roosevelt&lt;/cite&gt;&lt;/footer&gt;
    &lt;span class="quote-icon"&gt;&lt;i class="ri-information-line"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/blockquote&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                       Info Blockquote
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote custom-blockquote info mb-0 text-center">
                                        <h6>The future belongs to those who believe in the beauty of their dreams..</h6>
                                        <footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
                                        <span class="quote-icon"><i class="ri-information-line"></i></span>
                                    </blockquote>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;blockquote class="blockquote custom-blockquote info mb-0 text-center"&gt;
    &lt;h6&gt;The future belongs to those who believe in the beauty of their dreams..&lt;/h6&gt;
    &lt;footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0"&gt;Someone famous as &lt;cite title="Source Title"&gt;-Eleanor Roosevelt&lt;/cite&gt;&lt;/footer&gt;
    &lt;span class="quote-icon"&gt;&lt;i class="ri-information-line"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/blockquote&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                       Danger Blockquote
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote custom-blockquote danger mb-0 text-center">
                                        <h6>The future belongs to those who believe in the beauty of their dreams..</h6>
                                        <footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
                                        <span class="quote-icon"><i class="ri-information-line"></i></span>
                                    </blockquote>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;blockquote class="blockquote custom-blockquote danger mb-0 text-center"&gt;
    &lt;h6&gt;The future belongs to those who believe in the beauty of their dreams..&lt;/h6&gt;
    &lt;footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0"&gt;Someone famous as &lt;cite title="Source Title"&gt;-Eleanor Roosevelt&lt;/cite&gt;&lt;/footer&gt;
    &lt;span class="quote-icon"&gt;&lt;i class="ri-information-line"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/blockquote&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

                    <!-- Start:: row-6 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Description list alignment
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-3">Description lists</dt>
                                        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                                        <dt class="col-sm-3">Term</dt>
                                        <dd class="col-sm-9">
                                            <p>Definition for the term.</p>
                                            <p>And some more placeholder definition text.</p>
                                        </dd>

                                        <dt class="col-sm-3">Another term</dt>
                                        <dd class="col-sm-9">This definition is short, so no extra paragraphs or
                                            anything.</dd>

                                        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                        <dd class="col-sm-9">This can be useful when space is tight. Adds an
                                            ellipsis at
                                            the end.</dd>

                                        <dt class="col-sm-3">Nesting</dt>
                                        <dd class="col-sm-9 mb-0">
                                            <dl class="row mb-0">
                                                <dt class="col-sm-4">Nested definition list</dt>
                                                <dd class="col-sm-8 mb-0">I heard you like definition lists. Let me put a
                                                    definition list inside your definition list.</dd>
                                            </dl>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;dl class="row mb-0"&gt;
    &lt;dt class="col-sm-3"&gt;Description lists&lt;/dt&gt;
    &lt;dd class="col-sm-9"&gt;A description list is perfect for defining terms.&lt;/dd&gt;

    &lt;dt class="col-sm-3"&gt;Term&lt;/dt&gt;
    &lt;dd class="col-sm-9"&gt;
        &lt;p&gt;Definition for the term.&lt;/p&gt;
        &lt;p&gt;And some more placeholder definition text.&lt;/p&gt;
    &lt;/dd&gt;

    &lt;dt class="col-sm-3"&gt;Another term&lt;/dt&gt;
    &lt;dd class="col-sm-9"&gt;This definition is short, so no extra paragraphs or
        anything.&lt;/dd&gt;

    &lt;dt class="col-sm-3 text-truncate"&gt;Truncated term is truncated&lt;/dt&gt;
    &lt;dd class="col-sm-9"&gt;This can be useful when space is tight. Adds an
        ellipsis at
        the end.&lt;/dd&gt;

    &lt;dt class="col-sm-3"&gt;Nesting&lt;/dt&gt;
    &lt;dd class="col-sm-9 mb-0"&gt;
        &lt;dl class="row mb-0"&gt;
            &lt;dt class="col-sm-4"&gt;Nested definition list&lt;/dt&gt;
            &lt;dd class="col-sm-8 mb-0"&gt;I heard you like definition lists. Let me put a
                definition list inside your definition list.&lt;/dd&gt;
        &lt;/dl&gt;
    &lt;/dd&gt;
&lt;/dl&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        List Unstyled
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li>This is a list.</li>
                                        <li>It appears completely unstyled.</li>
                                        <li>Structurally, it's still a list.</li>
                                        <li>However, this style only applies to immediate child elements.</li>
                                        <li class="mb-2">Nested lists:
                                            <ul>
                                                <li>are unaffected by this style</li>
                                                <li>will still show a bullet</li>
                                                <li>and have appropriate left margin</li>
                                            </ul>
                                        </li>
                                        <li>This may still come in handy in some situations.</li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-unstyled"&gt;
    &lt;li&gt;This is a list.&lt;/li&gt;
    &lt;li&gt;It appears completely unstyled.&lt;/li&gt;
    &lt;li&gt;Structurally, it's still a list.&lt;/li&gt;
    &lt;li&gt;However, this style only applies to immediate child elements.&lt;/li&gt;
    &lt;li class="mb-2"&gt;Nested lists:
        &lt;ul&gt;
            &lt;li&gt;are unaffected by this style&lt;/li&gt;
            &lt;li&gt;will still show a bullet&lt;/li&gt;
            &lt;li&gt;and have appropriate left margin&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;This may still come in handy in some situations.&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-6 -->

                    <!-- Start:: row-7 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Horizontal rules
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolorem fuga iste obcaecati natus eos officiis adipisci voluptatibus ipsum, architecto veniam delectus vel dolor magni a vero sunt ut harum.</p>
                                    <div class="text-success">
                                        <hr>
                                    </div>
                                    <p class=" mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto perspiciatis, magni numquam quos perferendis nulla magnam odit amet excepturi quisquam provident.</p>

                                    <hr class="text-danger border-2 opacity-50">
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus aliquid consequatur aut doloremque assumenda voluptatem, id qui vero adipisci! Nostrum ipsam praesentium!</p>
                                    <hr class="border-primary border-3 opacity-75">
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="mb-1"&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolorem fuga iste obcaecati natus eos officiis adipisci voluptatibus ipsum, architecto veniam delectus vel dolor magni a vero sunt ut harum.&lt;/p&gt;
    &lt;div class="text-success"&gt;
        &lt;hr&gt;
    &lt;/div&gt;
    &lt;p class=" mb-1"&gt;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto perspiciatis, magni numquam quos perferendis nulla magnam odit amet excepturi quisquam provident.&lt;/p&gt;

    &lt;hr class="text-danger border-2 opacity-50"&gt;
    &lt;p class="mb-0"&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus aliquid consequatur aut doloremque assumenda voluptatem, id qui vero adipisci! Nostrum ipsam praesentium!&lt;/p&gt;
    &lt;hr class="border-primary border-3 opacity-75"&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Abbreviations
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p><abbr title="attribute">attr</abbr></p>
                                    <p class="mb-0"><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p&gt;&lt;abbr title="attribute"&gt;attr&lt;/abbr&gt;&lt;/p&gt;
    &lt;p class="mb-0"&gt;&lt;abbr title="HyperText Markup Language" class="initialism"&gt;HTML&lt;/abbr&gt;&lt;/p&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        List inline
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">This is a list item.</li>
                                        <li class="list-inline-item">And another one.</li>
                                        <li class="list-inline-item">But they're displayed inline.</li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-inline mb-0"&gt;
    &lt;li class="list-inline-item"&gt;This is a list item.&lt;/li&gt;
    &lt;li class="list-inline-item"&gt;And another one.&lt;/li&gt;
    &lt;li class="list-inline-item"&gt;But they're displayed inline.&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-7 -->

                    <!-- Start:: row-8 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Text decoration
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-decoration-underline">This text has a line underneath it.
                                    </p>
                                    <p class="text-decoration-line-through">This text has a line going
                                        through
                                        it.
                                    </p>
                                    <a href="javascript:void(0);" class="text-decoration-none">This link has its text
                                        decoration
                                        removed
                                    </a>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="text-decoration-underline"&gt;This text has a line underneath it.
&lt;/p&gt;
&lt;p class="text-decoration-line-through"&gt;This text has a line going
    through
    it.
&lt;/p&gt;
&lt;a href="javascript:void(0);" class="text-decoration-none"&gt;This link has its text
    decoration
    removed
&lt;/a&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Text transform
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-lowercase">Lowercased text.</p>
                                    <p class="text-uppercase">Uppercased text.</p>
                                    <p class="text-capitalize mb-0">CapiTaliZed text.</p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="text-lowercase"&gt;Lowercased text.&lt;/p&gt;
    &lt;p class="text-uppercase"&gt;Uppercased text.&lt;/p&gt;
    &lt;p class="text-capitalize mb-0"&gt;CapiTaliZed text.&lt;/p&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-8 -->

                    <!-- Start:: row-9 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Monospace
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="font-monospace mb-0">This is in monospace</p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="font-monospace mb-0"&gt;This is in monospace&lt;/p&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Reset color
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted mb-0">
                                        Muted text with a <a href="javascript:void(0);" class="text-reset text-decoration-underline text-dark">reset link</a>.
                                    </p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="text-muted mb-0"&gt;
    Muted text with a &lt;a href="javascript:void(0);" class="text-reset text-decoration-underline text-dark"&gt;reset link&lt;/a&gt;.
&lt;/p&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Visible text
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="visible mb-0">This is visible text</p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="visible mb-0"&gt;This is visible text&lt;/p&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Invisible text
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="invisible mb-0">This is invisible text</p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="invisible mb-0"&gt;This is invisible text&lt;/p&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-9 -->

                    <!-- Start:: row-10 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Text alignment
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-start">Start aligned text on all viewport sizes.</p>
                                    <p class="text-center">Center aligned text on all viewport sizes.</p>
                                    <p class="text-end">End aligned text on all viewport sizes.</p>

                                    <p class="text-sm-start">Start aligned text on viewports sized SM (small) or
                                        wider.
                                    </p>
                                    <p class="text-md-start">Start aligned text on viewports sized MD (medium) or
                                        wider.
                                    </p>
                                    <p class="text-lg-start">Start aligned text on viewports sized LG (large) or
                                        wider.
                                    </p>
                                    <p class="text-xl-start">Start aligned text on viewports sized XL (extra-large)
                                        or
                                        wider.</p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="text-start"&gt;Start aligned text on all viewport sizes.&lt;/p&gt;
    &lt;p class="text-center"&gt;Center aligned text on all viewport sizes.&lt;/p&gt;
    &lt;p class="text-end"&gt;End aligned text on all viewport sizes.&lt;/p&gt;

    &lt;p class="text-sm-start"&gt;Start aligned text on viewports sized SM (small) or
        wider.
    &lt;/p&gt;
    &lt;p class="text-md-start"&gt;Start aligned text on viewports sized MD (medium) or
        wider.
    &lt;/p&gt;
    &lt;p class="text-lg-start"&gt;Start aligned text on viewports sized LG (large) or
        wider.
    &lt;/p&gt;
    &lt;p class="text-xl-start"&gt;Start aligned text on viewports sized XL (extra-large)
        or
        wider.&lt;/p&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Text wrapping and overflow
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="badge bg-primary text-wrap mb-3" style="width: 6rem;">
                                        This text should wrap.
                                    </div>
                                    <p class="text-muted mb-2"> use class <code>.text-nowrap</code> to prevent text from wrapping</p>
                                    <div class="text-nowrap bg-light border" style="width: 8rem;">
                                        This text should overflow the parent.
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="badge bg-primary text-wrap mb-3" style="width: 6rem;"&gt;
    This text should wrap.
&lt;/div&gt;
&lt;p class="text-muted mb-2"&gt; use class &lt;code&gt;.text-nowrap&lt;/code&gt; to prevent text from wrapping&lt;/p&gt;
&lt;div class="text-nowrap bg-light border" style="width: 8rem;"&gt;
    This text should overflow the parent.
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Word break
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-break mb-0">
                                        mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
                                    </p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="text-break mb-0"&gt;
    mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
&lt;/p&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-10 -->

                    <!-- Start:: row-11 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Font weight and italics
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="fw-bold">Bold text.</p>
                                    <p class="fw-bolder">Bolder weight text (relative to the parent element).</p>
                                    <p class="fw-medium">Semibold weight text.</p>
                                    <p class="fw-normal">Normal weight text.</p>
                                    <p class="fw-light">Light weight text.</p>
                                    <p class="fw-lighter">Lighter weight text (relative to the parent element).</p>
                                    <p class="fst-italic">Italic text.</p>
                                    <p class="fst-normal mb-0">Text with normal font style</p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="fw-bold"&gt;Bold text.&lt;/p&gt;
    &lt;p class="fw-bolder"&gt;Bolder weight text (relative to the parent element).&lt;/p&gt;
    &lt;p class="fw-medium"&gt;Semibold weight text.&lt;/p&gt;
    &lt;p class="fw-normal"&gt;Normal weight text.&lt;/p&gt;
    &lt;p class="fw-light"&gt;Light weight text.&lt;/p&gt;
    &lt;p class="fw-lighter"&gt;Lighter weight text (relative to the parent element).&lt;/p&gt;
    &lt;p class="fst-italic"&gt;Italic text.&lt;/p&gt;
    &lt;p class="fst-normal mb-0"&gt;Text with normal font style&lt;/p&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Line height
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="lh-1">This is a long paragraph written to show how the line-height of
                                        an
                                        element is affected by our utilities. Classes are applied to the element
                                        itself
                                        or sometimes the parent element. These classes can be customized as needed
                                        with
                                        our utility API.
                                    </p>
                                    <p class="lh-sm">This is a long paragraph written to show how the line-height of
                                        an
                                        element is affected by our utilities. Classes are applied to the element
                                        itself
                                        or sometimes the parent element. These classes can be customized as needed
                                        with
                                        our utility API.
                                    </p>
                                    <p class="lh-base">This is a long paragraph written to show how the line-height
                                        of
                                        an element is affected by our utilities. Classes are applied to the element
                                        itself or sometimes the parent element. These classes can be customized as
                                        needed with our utility API.
                                    </p>
                                    <p class="lh-lg mb-0">This is a long paragraph written to show how the
                                        line-height
                                        of an
                                        element is affected by our utilities. Classes are applied to the element
                                        itself
                                        or sometimes the parent element. These classes can be customized as needed
                                        with
                                        our utility API.
                                    </p>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;p class="lh-1"&gt;This is a long paragraph written to show how the line-height of
    an
    element is affected by our utilities. Classes are applied to the element
    itself
    or sometimes the parent element. These classes can be customized as needed
    with
    our utility API.
&lt;/p&gt;
&lt;p class="lh-sm"&gt;This is a long paragraph written to show how the line-height of
    an
    element is affected by our utilities. Classes are applied to the element
    itself
    or sometimes the parent element. These classes can be customized as needed
    with
    our utility API.
&lt;/p&gt;
&lt;p class="lh-base"&gt;This is a long paragraph written to show how the line-height
    of
    an element is affected by our utilities. Classes are applied to the element
    itself or sometimes the parent element. These classes can be customized as
    needed with our utility API.
&lt;/p&gt;
&lt;p class="lh-lg mb-0"&gt;This is a long paragraph written to show how the
    line-height
    of an
    element is affected by our utilities. Classes are applied to the element
    itself
    or sometimes the parent element. These classes can be customized as needed
    with
    our utility API.
&lt;/p&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-11 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Prism JS -->
        <script src="<?php echo base_url('assets/libs/prismjs/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism-custom.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
