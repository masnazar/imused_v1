
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
                                    <li class="breadcrumb-item active" aria-current="page">Faq's</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Faq's</h1>
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

                    <!-- Start:: row-2 -->
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="row justify-content-center border-bottom border-block-end-dashed mb-4">
                                        <div class="col-xl-7">
                                            <div class="py-2">
                                                <div class="text-center">
                                                    <h3 class="text-primary1 mb-3">FAQs</h3>
                                                    <h5 class="d-block">Require assistance? Here are some of our commonly asked questions!</h5>
                                                    <p class="text-muted mb-2 px-4">Discover answers to common queries and find solutions to your concerns with our comprehensive list of frequently asked questions.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs nav-tabs-header mb-4 d-flex justify-content-center faq-nav gap-2" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#general-settings" aria-selected="false" tabindex="-1"><i class="ti ti-settings me-1 d-inline-block"></i>General Settings</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#theme-customization" aria-selected="true"><i class="ti ti-palette me-1 d-inline-block"></i>Theme Customization</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#user-management" aria-selected="false" tabindex="-1"><i class="ti ti-user-cog me-1 d-inline-block"></i>User Management</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#security-authentication" aria-selected="false" tabindex="-1"><i class="ti ti-shield-lock me-1 d-inline-block"></i>Security and Authentication</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#troubleshooting" aria-selected="false" tabindex="-1"><i class="ti ti-headset me-1 d-inline-block"></i>Troubleshooting and Support</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mb-4">
                                        <div class="tab-pane border-0 p-0" id="general-settings"
                                            role="tabpanel">
                                            <div class="accordion accordion-customicon1 faq-accordion accordion-primary accordions-items-seperate" id="accordionFAQ5">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2TwentyOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapsecustomicon2TwentyOne" aria-expanded="true"
                                                            aria-controls="collapsecustomicon2TwentyOne">
                                                            1. Can I customize the admin template?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2TwentyOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingcustomicon2TwentyOne"
                                                        data-bs-parent="#accordionFAQ5">
                                                        <div class="accordion-body">
                                                            Yes, the admin template is fully customizable. You can modify the layout, color scheme, typography, and more to match your branding or design preferences.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2TwentyTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyTwo"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2TwentyTwo">
                                                            2. How do I install the admin template?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2TwentyTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2TwentyTwo"
                                                        data-bs-parent="#accordionFAQ5">
                                                        <div class="accordion-body">
                                                            Installing the admin template is straightforward. Simply download the template files and follow the included installation instructions provided in the documentation.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2TwentyThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyThree"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2TwentyThree">
                                                            3. Is there a demo version available?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2TwentyThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2TwentyThree"
                                                        data-bs-parent="#accordionFAQ5">
                                                        <div class="accordion-body">
                                                            Yes, a demo version of the admin template is available for testing purposes. You can access the demo on our website and explore its features before making a purchase.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2TwentyFour">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyFour"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2TwentyFour">
                                                            4. How do I integrate the admin template with my existing project?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2TwentyFour" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2TwentyFour"
                                                        data-bs-parent="#accordionFAQ5">
                                                        <div class="accordion-body">
                                                            Integrating the admin template with your existing project is simple. You can either copy the template files into your project directory or use package managers like npm or yarn for easy integration.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2TwentyFive">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyFive"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2TwentyFive">
                                                            5. Does the admin template support responsive design?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2TwentyFive" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2TwentyFive"
                                                        data-bs-parent="#accordionFAQ5">
                                                        <div class="accordion-body">
                                                            Yes, the admin template is built with responsive design in mind. It is fully compatible with desktop, tablet, and mobile devices, ensuring a seamless user experience across all screen sizes.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane show active border-0 p-0" id="theme-customization"
                                            role="tabpanel">
                                            <div class="accordion accordion-customicon1 faq-accordion accordion-primary accordions-items-seperate" id="accordionFAQ1">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2One">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapsecustomicon2One" aria-expanded="true"
                                                            aria-controls="collapsecustomicon2One">
                                                            1. How do I change the primary color of the theme?

                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2One" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingcustomicon2One"
                                                        data-bs-parent="#accordionFAQ1">
                                                        <div class="accordion-body">
                                                            Navigate to the "Theme Settings" page, where you'll find options to choose a primary color and accent color. Select your desired colors and save the changes.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Two">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Two"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2Two">
                                                            2.  Can I customize the accent color of the theme?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Two" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2Two"
                                                        data-bs-parent="#accordionFAQ1">
                                                        <div class="accordion-body">
                                                            Yes, you can customize the accent color of the theme to complement the primary color. Access the theme customization options and find the setting for "Accent Color.".
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Three">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Three"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2Three">
                                                            3. Is it possible to set a background color for the theme?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Three" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2Three"
                                                        data-bs-parent="#accordionFAQ1">
                                                        <div class="accordion-body">
                                                            Absolutely! You can set a background color for the theme by accessing the background settings in the customization panel. Select your desired color or upload a custom background image for a personalized touch.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Four">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Four"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2Four">
                                                            4. How do I adjust the text color for different elements in the theme?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Four" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2Four"
                                                        data-bs-parent="#accordionFAQ1">
                                                        <div class="accordion-body">
                                                            To adjust text color, navigate to the typography or text settings in the customization panel. You can set different text colors for headings, body text, links, and other text elements to ensure readability and visual consistency.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Five">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Five"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2Five">
                                                            5. Are there options to customize hover and active states for links and buttons?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Five" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2Five"
                                                        data-bs-parent="#accordionFAQ1">
                                                        <div class="accordion-body">
                                                            Yes, you can customize hover and active states for links and buttons to provide visual feedback to users.Look for settings related to link and button states in the customization
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane border-0 p-0" id="user-management"
                                            role="tabpanel">
                                            <div class="accordion accordion-customicon1 faq-accordion accordion-primary accordions-items-seperate" id="accordionFAQ2">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Six">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapsecustomicon2Six" aria-expanded="true"
                                                            aria-controls="collapsecustomicon2Six">
                                                            1.  How do I add new users to the system?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Six" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingcustomicon2Six"
                                                        data-bs-parent="#accordionFAQ2">
                                                        <div class="accordion-body">
                                                            Adding new users to the system is simple. As an admin, you can navigate to the user management section and select the option to add a new user. 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Seven">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Seven"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2Seven">
                                                            2. Can I customize user roles and permissions?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Seven" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2Seven"
                                                        data-bs-parent="#accordionFAQ2">
                                                        <div class="accordion-body">
                                                            Yes, you can customize user roles and permissions to control access to different parts of the system. As an admin, you can create custom roles with specific permissions and assign them to users as needed.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Eight">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Eight"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2Eight">
                                                            3.  How do I deactivate or delete a user account?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Eight" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2Eight"
                                                        data-bs-parent="#accordionFAQ2">
                                                        <div class="accordion-body">
                                                            To deactivate or delete a user account, navigate to the user management section and select the option to edit the user account. From there, you can choose to deactivate or delete the account permanently.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Nine">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Nine"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2Nine">
                                                            4. Is there a way to import user data from an external source?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Nine" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2Nine"
                                                        data-bs-parent="#accordionFAQ2">
                                                        <div class="accordion-body">
                                                            Yes, you can import user data from an external source such as a CSV file. There is usually an option available in the user management section to upload a CSV file
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Ten">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Ten"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2Ten">
                                                            5. Can users reset their own passwords?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Ten" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2Ten"
                                                        data-bs-parent="#accordionFAQ2">
                                                        <div class="accordion-body">
                                                            Yes, users can typically reset their own passwords using a "forgot password" feature. They will receive an email with instructions on how to reset their password securely.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane border-0 p-0" id="security-authentication"
                                            role="tabpanel">
                                            <div class="accordion accordion-customicon1 faq-accordion accordion-primary accordions-items-seperate" id="accordionFAQ4">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Sixteen">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapsecustomicon2Sixteen" aria-expanded="true"
                                                            aria-controls="collapsecustomicon2Sixteen">
                                                            1.  How do I set up secure authentication for my application?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Sixteen" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingcustomicon2Sixteen"
                                                        data-bs-parent="#accordionFAQ4">
                                                        <div class="accordion-body">
                                                            Setting up secure authentication involves implementing encryption, strong password policies, and secure authentication methods like OAuth or JWT. Our documentation provides step-by-step instructions.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Seventeen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Seventeen"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2Seventeen">
                                                            2. What are the best practices for securing user passwords?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Seventeen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2Seventeen"
                                                        data-bs-parent="#accordionFAQ4">
                                                        <div class="accordion-body">
                                                            Best practices for securing user passwords include using strong encryption algorithms (such as bcrypt), enforcing password complexity requirements, and regularly hashing and salting passwords. 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Eighteen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Eighteen"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2Eighteen">
                                                            3. Can I enable two-factor authentication (2FA) for added security?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Eighteen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2Eighteen"
                                                        data-bs-parent="#accordionFAQ4">
                                                        <div class="accordion-body">
                                                            Yes, our admin template supports two-factor authentication (2FA) as an additional layer of security. You can enable 2FA for user accounts to require users to provide a second form of verification, such as a code sent to their mobile device.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Nineteen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Nineteen"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2Nineteen">
                                                            4.  session management handled securely in the admin template?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Nineteen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2Nineteen"
                                                        data-bs-parent="#accordionFAQ4">
                                                        <div class="accordion-body">
                                                            Yes, session management in the admin template is handled securely to prevent session hijacking and fixation attacks. We use secure cookies, session timeouts, and random session IDs to protect.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Twenty">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Twenty"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2Twenty">
                                                            5. Can I restrict access to certain parts of the application based on user roles and permissions?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Twenty" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2Twenty"
                                                        data-bs-parent="#accordionFAQ4">
                                                        <div class="accordion-body">
                                                            Yes, our admin template includes role-based access control (RBAC) functionality that allows you to define user roles and permissions and restrict access to certain features or data based on these roles. 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane border-0 p-0" id="troubleshooting"
                                            role="tabpanel">
                                            <div class="accordion accordion-customicon1 faq-accordion accordion-primary accordions-items-seperate" id="accordionFAQ6">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2TwentySix">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapsecustomicon2TwentySix" aria-expanded="true"
                                                            aria-controls="collapsecustomicon2TwentySix">
                                                            1. Can I get help with customizing the admin template to fit my specific requirements?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2TwentySix" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingcustomicon2TwentySix"
                                                        data-bs-parent="#accordionFAQ6">
                                                        <div class="accordion-body">
                                                            Yes, our support team is available to assist with customizing the admin template to meet your specific needs. Contact us with details of your customization requirements, and we'll provide guidance and assistance as needed.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2TwentySeven">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentySeven"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2TwentySeven">
                                                            2. What should I do if I encounter an error while using the admin template?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2TwentySeven" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2TwentySeven"
                                                        data-bs-parent="#accordionFAQ6">
                                                        <div class="accordion-body">
                                                            If you encounter an error, first check the documentation for any troubleshooting tips or known issues. If the problem persists, please contact our support team for assistance.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2TwentyEight">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyEight"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2TwentyEight">
                                                            3. How can I report a bug or issue with the admin template?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2TwentyEight" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2TwentyEight"
                                                        data-bs-parent="#accordionFAQ6">
                                                        <div class="accordion-body">
                                                            To report a bug or issue, please submit a detailed description of the problem along with any relevant screenshots or error messages to our support team. We'll investigate the issue and provide a resolution.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2TwentyNine">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyNine"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2TwentyNine">
                                                            4.  I'm having trouble integrating the admin template with my project. What should I do?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2TwentyNine" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2TwentyNine"
                                                        data-bs-parent="#accordionFAQ6">
                                                        <div class="accordion-body">
                                                            If you're experiencing difficulties integrating the admin template with your project, refer to the documentation for step-by-step integration instructions. If you still need assistance, don't hesitate to reach out to our support team for help.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingcustomicon2Thirty">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Thirty"
                                                            aria-expanded="false" aria-controls="collapsecustomicon2Thirty">
                                                            5. How do I troubleshoot performance issues with the admin template?
                                                        </button>
                                                    </h2>
                                                    <div id="collapsecustomicon2Thirty" class="accordion-collapse collapse"
                                                        aria-labelledby="headingcustomicon2Thirty"
                                                        data-bs-parent="#accordionFAQ6">
                                                        <div class="accordion-body">
                                                            Performance issues may arise due to factors such as heavy resource usage, inefficient code, or server configuration issues. Check the documentation for optimization tips or contact our support team for assistance in diagnosing and resolving performance issues.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bg-light mx-0 justify-content-between align-items-center rounded">
                                        <div class="col-sm-3 d-md-block d-none px-0">
                                            <img src="<?php echo base_url('assets/images/media/media-65.png'); ?>" alt="" class="img-fluid ps-3">
                                        </div>
                                        <div class="col-md-8 px-0">
                                            <div class="p-3">
                                                <div>
                                                    <h5 class="fw-semibold mb-2">Still Have Questions? We're Here to Help!</h5>
                                                    <span class="d-block fs-12 text-muted">
                                                        Contact our support team for personalized assistance. Your satisfaction is our priority!
                                                        Write your question below and we'll get back to you shortly.
                                                    </span>
                                                    <div class="row gy-3 mt-3"> 
                                                        <div class="col-xl-6"> 
                                                            <label for="user-name" class="form-label">Your Name</label> 
                                                            <input type="text" class="form-control" id="user-name" placeholder="Enter Your Name"> 
                                                        </div> 
                                                        <div class="col-xl-6"> 
                                                            <label for="user-email" class="form-label">Email Id</label> 
                                                            <input type="text" class="form-control" id="user-email" placeholder="Enter Email"> 
                                                        </div> 
                                                        <div class="col-xl-12"> 
                                                            <label for="text-area" class="form-label">Textarea</label>
                                                            <textarea class="form-control" placeholder="Enter your query here" id="text-area" rows="6"></textarea>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <button class="btn btn-primary btn-wave waves-effect waves-light" type="button" id="send">Send your question</button>
                                                        </div> 
                                                    </div>
                                                </div>
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
	


<?= $this->endSection('scripts'); ?>