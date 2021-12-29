@extends('layouts.app')
@section('content')
@include('layouts.top-menu')

    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="pt20 pb20 vh-100" style="background-image:url({{url('/images/background/8.jpg')}})">
            <div id="particles-js"></div>
            <div class="v-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="spacer-single"></div>
                            <h6 class="fadeInUp" data-wow-delay=".5s"><span class="text-uppercase" style="color: #6A4FBF">Crypto Marketplace + Inspiga VR Tower <span style="font-size: 10px">(coming soon)</span></span></h6>
                            <div class="spacer-10"></div>
                            <h1 class="fadeInUp text-white" data-wow-delay=".75s">Virtual store for your business in Inspiga VR Tower</h1>
                            <p class="fadeInUp lead text-warning" data-wow-delay="1s">
                                Exchange cryptocurrency for real products on Inspiga Marketplace</p>
                            <div class="spacer-10"></div>
                            <a href="/marketplace" class="btn btn-warning" data-wow-delay="1.25s">Marketplace</a>
                            <div class="row">
                                <div class="spacer-single"></div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-4 fadeInRight mb30" data-wow-delay="1.1s">
                                        <div class="de_count text-left">
                                            <h3><span class="id-color-2">1</span></h3>
                                            <h5 class="text-white">Goods</h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-4 fadeInRight mb30" data-wow-delay="1.4s">
                                        <div class="de_count text-left">
                                            <h3><span class="id-color-2">1</span></h3>
                                            <h5 class="text-white">Stores</h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-4 fadeInRight mb30" data-wow-delay="1.7s">
                                        <div class="de_count text-left">
                                            <h3><span class="id-color-2">1</span></h3>
                                            <h5 class="text-white">Countries</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 xs-hide">
                            <img src="images/misc/women-with-vr-5.png" class="img-fluid fadeInUp" data-wow-delay=".75s" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
