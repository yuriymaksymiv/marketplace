@extends('doc.layouts.app')
@section('content')
    <!-- =======================
Popular course START -->
    <section>
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-lg-12 mx-auto text-center">
                    <h2 class="fs-1">How to Register on Binance</h2>
                    <p class="mb-0 mt-4">Binance is today one of the most popular crypto exchanges in the world.</p>
                    <p class="mb-0">Consider two ways to register on the binance exchange. The first way is through a web interface using a browser.
                        The second - installing a mobile application on a smartphone.</p>
                </div>
            </div>

            <!-- Tabs START -->
            <ul class="nav nav-pills nav-pills-bg-soft justify-content-sm-center mb-4 px-3" id="course-pills-tab" role="tablist">
                <!-- Tab item -->
                <li class="nav-item me-2 me-sm-5">
                    <button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-1" type="button" role="tab" aria-controls="course-pills-tabs-1" aria-selected="false">Browser</button>
                </li>
                <!-- Tab item -->
                <li class="nav-item me-2 me-sm-5">
                    <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-2" type="button" role="tab" aria-controls="course-pills-tabs-2"	aria-selected="false">Mobile App</button>
                </li>
            </ul>
            <!-- Tabs END -->

            <!-- Tabs content START -->
            <div class="tab-content mt-5" id="course-pills-tabContent">
                <!-- Content START -->
                <div class="tab-pane fade show active" id="course-pills-tabs-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                    <div class="row g-4">

                    <h3>Register on Binance by Email</h3>
                        <p>1. Go to <a href="https://accounts.binance.me/ru/register?ref=D4LZP2S0"><strong>Binance.com</strong></a> and click <strong>"Register"</strong>.</p>
                        <div class="">
                            <img src="/images/misc/docs/binance-1en.jpg" style="width: 800px" class="shadow">
                        </div>
                        <p>2. On the registration page, select <strong>"Create personal account"</strong>, in the form that appears, enter your details, then click <strong>"Next"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-2en.jpg" class="shadow">
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-3en.jpg" class="shadow">
                            </div>
                        </div>
                        <p>3. Press the button <strong>"Get code"</strong>. Enter the code sent to the email in this field and press the button<strong>"Submit"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-4en.jpg" class="shadow">
                            </div>
                        </div>
                        <p>4. Repeat the same for the phone number. Enter the phone number in the form. In the next window, click the button <strong>"Get code"</strong> and enter the code. Click <strong>"Submit"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-5en.jpg" class="shadow">
                            </div>
                        </div>

                        <p>5. <strong>Congratulations! You have successfully registered for Binance.</strong></p>

                    </div> <!-- Row END -->
                </div>
                <!-- Content END -->

                <!-- Content START -->
                <div class="tab-pane fade" id="course-pills-tabs-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
                    <div class="row g-4">
                        <h3>Register on Binance by smartphone</h3>
                        <p>1. Download and install the Binance app from the App Store or Google Play</p>
                        <div class="d-flex mt-1">
                            <div>
                                <a href="https://apps.apple.com/hk/app/binance/id1436799971?l=en" rel="nofollow" target="_blank"><img src="/images/misc/app-store.jpg" width="120" class="pe-3"></a>
                            </div>
                            <div>
                                <a href="https://play.google.com/store/apps/details?id=com.binance.dev" rel="nofollow" target="_blank"><img src="/images/misc/google-play.jpg" width="120" class="pe-3"></a>
                            </div>
                        </div>
                        <p>2. Click <strong>"Sign Up / Log In"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-1m-en.jpg" class="shadow">
                            </div>
                        </div>
                        <p>3. In the upper right corner, click the <strong>"Register"</strong> button.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-2m-en.jpg" class="shadow">
                            </div>
                        </div>
                        <p>4. Enter your details, then click <strong>"->"</strong> and confirm the captcha.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-3m-en.jpg" class="shadow">
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-4m-en.jpg" class="shadow">
                            </div>
                        </div>
                        <p>5. Click <strong>"Send Code</strong>" button and enter the code  in this field. Click <strong>"Submit"</strong>.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-5m-en.jpg" class="shadow">
                            </div>
                        </div>

                        <p><strong>5. Congratulations! You have successfully registered for Binance.</strong></p>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <img src="/images/misc/docs/binance-6m-en.jpg" class="shadow">
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Content END -->

            </div>
            <!-- Tabs content END -->
        </div>
    </section>
    <!-- =======================
    Popular course END -->
@endsection
