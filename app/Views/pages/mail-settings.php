
<?= $this->extend('layouts/main'); ?>

<?= $this->section('styles'); ?>



<?= $this->endSection('styles'); ?>

<?= $this->section('content'); ?>
	
                    <!-- Start::page-header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">
                                            Pages
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Email</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mail Settings</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Mail Settings</h1>
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
                    <!-- End::page-header -->

                    <!-- Start::row-1 -->
                    <div class="row mb-5">
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs flex-column nav-tabs-header mb-0 mail-settings-tab" role="tablist">
                                        <li class="nav-item me-0">
                                            <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#email-settings" aria-selected="true"><i class="ri-mail-line me-2 align-middle fs-14 lh-1 text-primary"></i>Email</a>
                                        </li>
                                        <li class="nav-item me-0">
                                            <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#security" aria-selected="true"><i class="ri-lock-star-line me-2 align-middle fs-14 lh-1 text-primary"></i>Security</a>
                                        </li>
                                        <li class="nav-item me-0">
                                            <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#notification-settings" aria-selected="true"><i class="ri-notification-3-line me-2 align-middle fs-14 lh-1 text-primary"></i>Notifications</a>
                                        </li>
                                        <li class="nav-item me-0">
                                            <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#account-settings" aria-selected="true"><i class="ri-shield-user-line me-2 align-middle fs-14 lh-1 text-primary"></i>Account Settings</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Social Links</div>
                                </div>
                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-xl-12"> <label for="facebook" class="form-label">Facebook :</label>
                                            <input type="text" class="form-control bg-light" id="facebook" placeholder="https://" value="https://www.facebook.com"> </div>
                                        <div class="col-xl-12"> <label for="Twitter" class="form-label">Twitter :</label>
                                            <input type="text" class="form-control bg-light" id="Twitter" placeholder="https://" value="https://twitter.com"> </div>
                                        <div class="col-xl-12"> <label for="Pinterest" class="form-label">Pinterest:</label>
                                            <input type="text" class="form-control bg-light" id="Pinterest" placeholder="https://" value="https://in.pinterest.com"> </div>
                                        <div class="col-xl-12"> <label for="Linkedin" class="form-label">Linkedin :</label>
                                            <input type="text" class="form-control bg-light" id="Linkedin" placeholder="https://" value="https://www.linkedin.com"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="card custom-card">
                                <div class="card-body p-0">
                                    <div class="tab-content border-0">
                                        <div class="tab-pane active show p-0" id="email-settings"
                                            role="tabpanel">
                                            <ul class="list-group list-group-flush rounded">
                                                <li class="list-group-item">
                                                    <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                        <div class="col-xl-3">
                                                            <span class="fs-14 fw-medium mb-0">Keyboard Shortcuts :</span>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="keyboard-enable" id="keyboard-enable1">
                                                                <label class="form-check-label" for="keyboard-enable1">
                                                                    Keyboard Shortcuts Enable
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="keyboard-enable" id="keyboard-disable2" checked="">
                                                                <label class="form-check-label" for="keyboard-disable2">
                                                                    Keyboard Shortcuts Disable
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="toggle toggle-success mb-0 float-sm-end" id="keyboard-shortcuts">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                                            <span class="fs-14 fw-medium mb-0">Menu View :</span>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Default View
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="">
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Advanced View
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="toggle toggle-success on mb-0 float-sm-end" id="menu-view">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                        <div class="col-xl-3">
                                                            <span class="fs-14 fw-medium mb-0">Images :</span>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="images-open" id="images-open1">
                                                                <label class="form-check-label" for="images-open1">
                                                                    Always Open Images
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="images-open" id="images-hide2" checked="">
                                                                <label class="form-check-label" for="images-hide2">
                                                                    Ask For Permission
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="toggle toggle-success mb-0 float-sm-end" id="mails-images">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                        <div class="col-xl-3">
                                                            <span class="fs-14 fw-medium mb-0">Mail Send Action :</span>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="on-keyboard" checked="">
                                                                <label class="form-check-label" for="on-keyboard">
                                                                    On Keyboard Action
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="on-buttonclick">
                                                                <label class="form-check-label" for="on-buttonclick">
                                                                    On Button Click
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="float-sm-end">
                                                                <a href="javascript:void(0)" class="btn btn-success-ghost btn-sm">Learn-more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row gy-3 d-sm-flex align-items-center justify-content-between">
                                                        <div class="col-xl-3">
                                                            <span class="fs-14 fw-medium mb-0">Maximum Mails Per Page :</span>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <select class="form-control" data-trigger name="mail-per-page" id="mail-per-page">
                                                            <option value="Choice 1" selected>10</option>
                                                            <option value="Choice 2">50</option>
                                                            <option value="Choice 3">100</option>
                                                            <option value="Choice 3">120</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="toggle toggle-success mb-0 float-sm-end" id="mails-per-page">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                        <div class="col-xl-3">
                                                            <span class="fs-14 fw-medium mb-0">Mail Composer :</span>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="d-flex gap-4 align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="mail-composer" id="mail-composeron1">
                                                                    <label class="form-check-label" for="mail-composeron1">
                                                                        Mail Composer On
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="mail-composer" id="mail-composeroff2" checked="">
                                                                    <label class="form-check-label" for="mail-composeroff2">
                                                                        Mail Composer Off
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="toggle toggle-success mb-0 float-sm-end" id="mail-composer">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row gy-3 d-sm-flex align-items-center justify-content-between">
                                                        <div class="col-xl-3">
                                                            <span class="fs-14 fw-medium mb-0">Language :</span>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <label for="mail-language" class="form-label">Languages :</label>
                                                            <select class="form-control" name="mail-language" id="mail-language" multiple>
                                                            <option value="Choice 1" selected>English</option>
                                                            <option value="Choice 2">French</option>
                                                            <option value="Choice 3">Arabic</option>
                                                            <option value="Choice 4">Hindi</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="toggle toggle-success mb-0 float-sm-end" id="mail-languages">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                        <div class="col-xl-3">
                                                            <span class="fs-14 fw-medium mb-0">Auto Correct :</span>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="d-flex gap-4 align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="auto-correct" id="auto-correcton1">
                                                                    <label class="form-check-label" for="auto-correcton1">
                                                                        Auto Correct On
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="auto-correct" id="auto-correctoff2" checked="">
                                                                    <label class="form-check-label" for="auto-correctoff2">
                                                                        Auto Correct Off
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="toggle toggle-success mb-0 float-sm-end" id="auto-correct">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane p-0" id="security"
                                            role="tabpanel">
                                            <ul class="list-group list-group-flush list-unstyled rounded">
                                                <li class="list-group-item">
                                                    <div class="row gx-5 gy-3">
                                                        <div class="col-xl-4">
                                                            <p class="fs-16 mb-1 fw-medium">Logging In</p>
                                                            <p class="fs-12 mb-0 text-muted">Security settings related to logging into our email account and taking down account if any mischevious action happended.</p>
                                                        </div>
                                                        <div class="col-xl-8">
                                                            <div class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3">
                                                                <div class="mail-security-settings">
                                                                    <p class="fs-14 mb-1 fw-medium">Max Limit for login attempts</p>
                                                                    <p class="fs-12 mb-0 text-muted mb-sm-0 mb-2">Account will freeze for 24hrs while attempt to login with wrong credentials for selected number of times</p>
                                                                </div>
                                                                <div>
                                                                    <select class="form-control" data-trigger name="max-login-attempts" id="max-login-attempts">
                                                                    <option value="Choice 1" selected>3 Attempts</option>
                                                                    <option value="Choice 2">5 Attempts</option>
                                                                    <option value="Choice 3">10 Attempts</option>
                                                                    <option value="Choice 3">20 Attempts</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                <div>
                                                                    <p class="fs-14 mb-1 fw-medium">Account Freeze time management</p>
                                                                    <p class="fs-12 mb-0 text-muted mb-sm-0 mb-2">You can change the time for the account freeze when attempts for </p>
                                                                </div>
                                                                <div>
                                                                    <select class="form-control" data-trigger name="account-freeze-time-format" id="account-freeze-time-format">
                                                                    <option value="Choice 1" selected>1 Day</option>
                                                                    <option value="Choice 2">1 Hour</option>
                                                                    <option value="Choice 3">1 Month</option>
                                                                    <option value="Choice 3">1 Year</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row gx-5 gy-3">
                                                        <div class="col-xl-4">
                                                            <p class="fs-16 mb-1 fw-medium">Password Requirements</p>
                                                            <p class="fs-12 mb-0 text-muted">Security settings related to password strength.</p>
                                                        </div>
                                                        <div class="col-xl-8">
                                                            <div class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3 gap-3">
                                                                <div class="mail-security-settings">
                                                                    <p class="fs-14 mb-1 fw-medium">Minimum number of characters in the password</p>
                                                                    <p class="fs-12 mb-0 text-muted">There should be a minimum number of characters for a password to be validated that shouls be set here.</p>
                                                                </div>
                                                                <div>
                                                                    <input type="text" class="form-control" value="8">
                                                                </div>
                                                            </div>
                                                            <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                <div>
                                                                    <p class="fs-14 mb-1 fw-medium">Contain A Number</p>
                                                                    <p class="fs-12 mb-0 text-muted">Password should contain a number.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 float-sm-end" id="password-number">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                <div>
                                                                    <p class="fs-14 mb-1 fw-medium">Contain A Special Character</p>
                                                                    <p class="fs-12 mb-0 text-muted">Password should contain a special Character.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 float-sm-end" id="password-special-character">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                <div>
                                                                    <p class="fs-14 mb-1 fw-medium">Atleast One Capital Letter</p>
                                                                    <p class="fs-12 mb-0 text-muted">Password should contain atleast one capital letter.</p>
                                                                </div>
                                                                <div class="toggle toggle-success mb-0 float-sm-end" id="password-capital">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                <div>
                                                                    <p class="fs-14 mb-1 fw-medium">Maximum Password Length</p>
                                                                    <p class="fs-12 mb-0 text-muted">Maximum password lenth should be selected here.</p>
                                                                </div>
                                                                <div>
                                                                    <input type="text" class="form-control" value="16">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row gx-5 gy-3">
                                                        <div class="col-xl-4">
                                                            <p class="fs-16 mb-1 fw-medium">Unknown Chats</p>
                                                            <p class="fs-12 mb-0 text-muted">Security settings related to unknown chats.</p>
                                                        </div>
                                                        <div class="col-xl-8">
                                                            <div class="btn-group float-sm-end" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="btnunknownchats" id="unknown-chats-show" checked="">
                                                                <label class="btn btn-outline-light" for="unknown-chats-show">Show</label>
                                                                <input type="radio" class="btn-check" name="btnunknownchats" id="unknown-chats-hide">
                                                                <label class="btn btn-outline-light" for="unknown-chats-hide">Hide</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>    
                                        </div>
                                        <div class="tab-pane p-0" id="notification-settings"
                                            role="tabpanel">
                                            <ul class="list-group list-group-flush list-unstyled rounded">
                                                <li class="list-group-item">
                                                    <div class="row gx-5 gy-3">
                                                        <div class="col-xl-5">
                                                            <p class="fs-16 mb-1 fw-medium">Email Notifications</p>
                                                            <p class="fs-12 mb-0 text-muted">Email notifications are the notifications you will receeive when you are offline, you can customize them by enabling or disabling them.</p>
                                                        </div>
                                                        <div class="col-xl-7">
                                                            <div class="d-flex align-items-top justify-content-between mt-sm-0 mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="fs-14 mb-1 fw-medium">Updates & Features</p>
                                                                    <p class="fs-12 mb-0 text-muted">Notifications about new updates and their features.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 float-sm-end" id="update-features">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-top justify-content-between mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="fs-14 mb-1 fw-medium">Early Access</p>
                                                                    <p class="fs-12 mb-0 text-muted">Users are selected for beta testing of new update,notifications relating or participate in any of paid product promotion.</p>
                                                                </div>
                                                                <div class="toggle toggle-success mb-0 float-sm-end" id="early-access">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-top justify-content-between mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="fs-14 mb-1 fw-medium">Email Shortcuts</p>
                                                                    <p class="fs-12 mb-0 text-muted">Shortcut notifications for email.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 float-sm-end" id="email-shortcut">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-top justify-content-between mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="fs-14 mb-1 fw-medium">New Mails</p>
                                                                    <p class="fs-12 mb-0 text-muted">Notifications related to new mails received.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 float-sm-end" id="new-mails">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-top justify-content-between mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="fs-14 mb-1 fw-medium">Mail Chat Messages</p>
                                                                    <p class="fs-12 mb-0 text-muted">Any of new messages are received will be updated through notifications.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 float-sm-end" id="mail-chat-messages">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row gx-5 gy-3">
                                                        <div class="col-xl-5">
                                                            <p class="fs-16 mb-1 fw-medium">Push Notifications</p>
                                                            <p class="fs-12 mb-0 text-muted">Push notifications are recieved when you are online, you can customize them by enabling or disabling them.</p>
                                                        </div>
                                                        <div class="col-xl-7">
                                                            <div class="d-flex align-items-top justify-content-between mt-sm-0 mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="fs-14 mb-1 fw-medium">New Mails</p>
                                                                    <p class="fs-12 mb-0 text-muted">Notifications related to new mails received.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 float-sm-end" id="push-new-mails">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-top justify-content-between mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="fs-14 mb-1 fw-medium">Mail Chat Messages</p>
                                                                    <p class="fs-12 mb-0 text-muted">Any of new messages are received will be updated through notifications.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 float-sm-end" id="push-mail-chat-messages">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-top justify-content-between mt-3">
                                                                <div class="mail-notification-settings">
                                                                    <p class="fs-14 mb-1 fw-medium">Mail Extensions</p>
                                                                    <p class="fs-12 mb-0 text-muted">Notifications related to the extensions received by new emails and thier propertied also been displayed.</p>
                                                                </div>
                                                                <div class="toggle toggle-success mb-0 float-sm-end" id="mail-extensions">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane p-0" id="account-settings"
                                            role="tabpanel">
                                            <div class="row gy-3">
                                                <div class="col-xxl-7">
                                                    <div class="card custom-card shadow-none mb-0">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                <div class="w-75">
                                                                    <p class="fs-14 mb-1 fw-medium">Two Step Verification</p>
                                                                    <p class="fs-12 text-muted mb-0">Two-step verification provides enhanced security measures and helps prevent unauthorized access and fraudulent activities.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0" id="two-step-verification">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                <div class="mb-sm-0 mb-2 w-75">
                                                                    <p class="fs-14 mb-2 fw-medium">Authentication</p>
                                                                    <div class="mb-0 authentication-btn-group">
                                                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked="">
                                                                            <label class="btn btn-outline-light" for="btnradio1"><i class="ri-lock-unlock-line me-1 align-middle d-inline-block"></i>Pin</label>
                                                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                                                            <label class="btn btn-outline-light" for="btnradio2"><i class="ri-lock-password-line me-1 align-middle d-inline-block"></i>Password</label>
                                                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                                                            <label class="btn btn-outline-light" for="btnradio3"><i class="ri-fingerprint-line me-1 align-middle d-inline-block"></i>Finger Print</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 ms-0 mt-sm-0 mt-2" id="authentication">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                <div class="w-75">
                                                                    <p class="fs-14 mb-1 fw-medium">Recovery Mail</p>
                                                                    <p class="fs-12 text-muted mb-0">In case of forgetting passwords, emails are sent to aana14@gmail.com.</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 ms-0 mt-sm-0 mt-2" id="recovery-mail">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                <div>
                                                                    <p class="fs-14 mb-1 fw-medium">SMS Recovery</p>
                                                                    <p class="fs-12 text-muted mb-0">In case of recovery, SMS messages are sent to 9876543xx</p>
                                                                </div>
                                                                <div class="toggle toggle-success on mb-0 ms-0 mt-sm-0 mt-2" id="sms-recovery">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-top justify-content-between">
                                                                <div>
                                                                    <p class="fs-14 mb-1 fw-medium">Reset Password</p>
                                                                    <p class="fs-12 text-muted">Password should be min of <b class="text-success">8 digits<sup>*</sup></b>,atleast <b class="text-success">One Capital letter<sup>*</sup></b> and <b class="text-success">One Special Character<sup>*</sup></b> included.</p>
                                                                    <div class="mb-2">
                                                                        <label for="current-password" class="form-label">Current Password</label>
                                                                        <input type="text" class="form-control" id="current-password" placeholder="Current Password">
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <label for="new-password" class="form-label">New Password</label>
                                                                        <input type="text" class="form-control" id="new-password" placeholder="New Password">
                                                                    </div>
                                                                    <div class="mb-0">
                                                                        <label for="confirm-password" class="form-label">Confirm Password</label>
                                                                        <input type="text" class="form-control" id="confirm-password" placeholder="Confirm Password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-5">
                                                    <div class="card custom-card shadow-none mb-0">
                                                        <div class="card-header justify-content-between d-sm-flex d-block">
                                                            <div class="card-title">Registered Devices</div>
                                                            <div class="mt-sm-0 mt-2">
                                                                <button class="btn btn-sm btn-primary">Signout from all devices</button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <div class="d-sm-flex d-block align-items-top">
                                                                        <div class="lh-1 mb-sm-0 mb-2"><i class="bi bi-phone me-2 fs-16 align-middle text-muted"></i></div>
                                                                        <div class="lh-1 flex-fill">
                                                                            <p class="mb-1">
                                                                                <span class="fw-medium">Mobile-LG-1023</span>
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <span class="text-muted fs-11">Manchester, UK-Nov 30, 04:45PM</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="dropdown mt-sm-0 mt-2">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fe fe-more-vertical"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="d-sm-flex d-block align-items-top">
                                                                        <div class="lh-1 mb-sm-0 mb-2"><i class="bi bi-laptop me-2 fs-16 align-middle text-muted"></i></div>
                                                                        <div class="lh-1 flex-fill">
                                                                            <p class="mb-1">
                                                                                <span class="fw-medium">Lenovo-1291203</span>
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <span class="text-muted fs-11">England, UK-Aug 12, 12:25PM</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="dropdown mt-sm-0 mt-2">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fe fe-more-vertical"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="d-sm-flex d-block align-items-top">
                                                                        <div class="lh-1 mb-sm-0 mb-2"><i class="bi bi-laptop me-2 fs-16 align-middle text-muted"></i></div>
                                                                        <div class="lh-1 flex-fill">
                                                                            <p class="mb-1">
                                                                                <span class="fw-medium">Macbook-Suzika</span>
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <span class="text-muted fs-11">Brightoon, UK-Jul 18, 8:34AM</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="dropdown mt-sm-0 mt-2">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fe fe-more-vertical"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="d-sm-flex d-block align-items-top">
                                                                        <div class="lh-1 mb-sm-0 mb-2"><i class="bi bi-pc-display-horizontal me-2 fs-16 align-middle text-muted"></i></div>
                                                                        <div class="lh-1 flex-fill">
                                                                            <p class="mb-1">
                                                                                <span class="fw-medium">Apple-Desktop</span>
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <span class="text-muted fs-11">Darlington, UK-Jan 14, 11:14AM</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="dropdown mt-sm-0 mt-2">
                                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fe fe-more-vertical"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-top-0 d-flex justify-content-between gap-2 flex-wrap">
                                    <button class="btn btn-primary1-light">
                                        Restore Defaults
                                    </button>
                                    <div class="ms-auto">
                                        <button class="btn btn-primary">
                                            Save Changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

<?= $this->endSection('content'); ?>

<?= $this->section('scripts'); ?>
	
        <!-- Mail Settings -->
        <script src="<?php echo base_url('assets/js/mail-settings.js'); ?>"></script>

<?= $this->endSection('scripts'); ?>
