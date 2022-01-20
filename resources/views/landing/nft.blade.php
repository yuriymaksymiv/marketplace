@extends('landing.layouts.app')
@section('content')
    @include('landing.layouts.top-menu-light')

    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="no-top no-bottom" data-bgimage="url({{url('/images/background/13.jpg')}}) left bottom">
            <div class="v-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center">
                            <h6 class="wow fadeInUp" data-wow-delay=".5s"><span class="text-uppercase id-color-2">Inspiga MarketPlace</span></h6>
                            <div class="spacer-10"></div>
                            <h1 class="fadeInUp" data-wow-delay=".75s">NFT</h1>
                            <h1 class="fadeInUp" data-wow-delay=".75s">Coming soon</h1>
                        </div>
                    </div>
                </div>


            </div>

        </section>

    </div>
@endsection
