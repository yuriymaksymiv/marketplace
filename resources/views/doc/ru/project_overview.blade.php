@extends('doc.layouts.app')
@section('content')
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <!-- Page title -->
                <div class="my-5">
                    <h1>Introduction</h1>
                    <p class="lead">Get started with Eduport by following this guide, It will help you to get the most out of our Bootstrap Theme quickly with easy understanding.</p>
                    <hr class="my-5">
                </div>

                <!-- Page content -->
                <p class="lead">Thank you for purchasing Eduport theme! Before proceeding with the theme installation, It is recommended that you follow the steps listed in this guide. We have covered all kinds of necessary information, and provide you with all the guidelines and details that you will need to use Eduport theme. If you can't find the answer you’re looking for, We encourage you to reach to us through our support portal. We'll be glad to help you out with your queries. Please generate ticket through our <a href="https://support.webestica.com" target="_blank">support portal</a> and you shall hear back very soon. </p>

                <!-- Directory structure -->
                <h3 id="directory" class="pt-5">Directory structure</h3>
                <p>Once you have downloaded the package after theme extracting, you will see the following files & folder structure:</p>
                <ul class="list-unstyled">
                    <!-- template folder -->
                    <li>
                        <dl>
                            <dt><i class="fas fa-folder-open text-warning me-1"></i> template </dt>
                            <dd> Includes all assets and template files, used in theme</dd>
                        </dl>
                        <ul class="list-unstyled ms-4">
                            <dl>
                                <dt> <i class="fas fa-folder-open text-warning me-1"></i> docs </dt>
                                <dd>Includes theme's documentation files (on theme editing and setup).</dd>
                            </dl>
                            <ul class="list-unstyled ms-4">
                                <dl>
                                    <dt> <i class="fas fa-file text-warning me-1"></i> index.html </dt>
                                    <dd>Main documentation file. You are reading it at the moment.</dd>
                                </dl>
                            </ul>
                            <dl>
                                <dt><i class="fas fa-folder-open text-warning me-1"></i> assets </dt>
                                <dd> Includes all assets files, like CSS, Images, JS, SCSS and plugins used in theme</dd>
                            </dl>
                            <ul class="list-unstyled ms-4">
                                <dl>
                                    <dt><i class="fas fa-folder text-warning me-1"></i> css </dt>
                                    <dd> Includes .css file, used in theme</dd>
                                </dl>
                                <li>
                                    <dl>
                                        <dt><i class="fas fa-folder text-warning me-1"></i> images</dt>
                                        <dd> Includes all images, used in .html files.</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt><i class="fas fa-folder text-warning me-1"></i> js</dt>
                                        <dd> Includes plugin's initialization file</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt><i class="fas fa-folder text-warning me-1"></i> scss</dt>
                                        <dd> Includes all of raw source files that are used to create the final CSS that is included in theme</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt><i class="fas fa-folder text-warning me-1"></i> vendor</dt>
                                        <dd> Includes all plugins files.</dd>
                                    </dl>
                                </li>
                            </ul>
                            <li>
                                <dl>
                                    <dt><i class="fas fa-file text-warning me-1"></i> index.html</dt>
                                    <dd> You will find here all .html files used in theme</dd>
                                </dl>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <dl>
                            <dt> <i class="fas fa-file text-warning me-1"></i> gulpfile.js </dt>
                            <dd>All the build commands</dd>
                        </dl>
                        <dl>
                            <dt> <i class="fas fa-file text-warning me-1"></i> package.json </dt>
                            <dd>List of dependencies and npm information</dd>
                        </dl>
                        <dl>
                            <dt> <i class="fas fa-file text-warning me-1"></i> package-lock.json </dt>
                            <dd>Lock dependencies to a specific version number to avoid possible version mismatch.</dd>
                        </dl>
                        <dl>
                            <dt> <i class="fas fa-file text-warning me-1"></i> README.MD</dt>
                            <dd></dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="col-12 mt-5">
                <h3 class="mb-4">What to do after purchase?</h3>
                <h6>1. Check theme inside out</h6>
                <p>After extracting .zip file, check every file and folder to know more about theme inside out. Confused with any file/folder usage? Check <a href="#directory" class="text-dark"><u>above directory</u></a> structure to clear your doubts. We recommended reading the whole documentation for better understanding of theme. Yes, it will take up to 30 mins but it will be worth reading.</p>

                <h6>2. Install local environment for customization (Optional but highly recommended)</h6>
                <p>Go to <a href="gulp.html">Gulp section</a> and follow the steps. You can skip this step if you prefer to work with Eduport as a static source without Gulp and Sass.</p>

                <h6>3. Branding</h6>
                <p>After installation and running gulp, change your brand colors buy following <a href="color-scheme.html">Color scheme section</a> instructions. Change your brand logo by following <a href="logo-settings.html">Logo settings section</a></p>

                <h6>4. Customization</h6>
                <p>Now you can start customizing your website as per your need. </p>

                <h6>5. Delete unnecessary file and folder to upload on live server</h6>
                <p>After completing your website, you must need to delete unnecessary file and folder to reduce website size. Please check below folders/files usage to run your website:</p>
                <ul>
                    <li class="mb-1"><b>assets/css:</b> You must need style.css (or style-rtl.css for RTL version). If you have not used color.css file then you can remove it.</li>
                    <li class="mb-1"><b>assets/images:</b> You can remove all unnecessary files from this folder.</li>
                    <li class="mb-1"><b>assets/js:</b> Don't delete this folder/file.</li>
                    <li class="mb-1"><b>assets/scss:</b> If you don't want sourcemap you can remove SCSS folder. You must remove source map comment from the end of the style.css (or style-rtl.css for RTL version) file to avoid warning on console log.</li>
                    <li class="mb-1"><b>assets/vendor:</b> Keep only those vendor folders that you have used in your website.</li>
                    <li class="mb-1"><b>node_modules:</b> You only need this folder for local server. Don't upload it to live server.</li>
                    <li class="mb-1"><b>docs:</b> You don't need docs folder for your live website.</li>
                </ul>

            </div>
        </div>
    </div>
@endsection
