@extends('layouts.app')
@section('content')
@include('layouts.top-menu-light')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="section-hero" aria-label="section" class="no-top no-bottom" data-bgimage="url({{url('/images/background/13.jpg')}}) left bottom">
        <div class="v-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h6 class="wow fadeInUp" style="padding-top: 150px" data-wow-delay=".5s"><span class="text-uppercase id-color-2">Gigaland Market</span></h6>
                        <div class="spacer-10"></div>
                        <h1 class="fadeInUp" data-wow-delay=".75s">Обмінюй криптовалюту на продукти з реального світу</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="spacer-60"></div>
                            <div class="spacer-60"></div>
                            <div class="row align-bottom">
                                <div class="col-lg-2 col-sm-4 col-6 mb30">
                                    <a class="box-url style-2" href="login.html">
                                        <img src="images/misc/cat-7.png" alt="" width="80" class="mb20">
                                        <h4>Доставка Їжі</h4>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-sm-4 col-6 mb30">
                                    <a class="box-url style-2" href="login.html">
                                        <img src="images/misc/cat-2.png" width="80" alt="" class="mb20">
                                        <h4>Посулги</h4>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-sm-4 col-6 mb30">
                                    <a class="box-url style-2" href="login.html">
                                        <img src="images/misc/cat-3.png"  width="80" alt="" class="mb20">
                                        <h4>Техніка</h4>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-sm-4 col-6 mb30">
                                    <a class="box-url style-2" href="login.html">
                                        <img src="images/misc/cat-4.png" width="80" alt="" class="mb20">
                                        <h4>Одяг</h4>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-sm-4 col-6 mb30">
                                    <a class="box-url style-2" href="login.html">
                                        <img src="images/misc/cat-5.png" width="80" alt="" class="mb20">
                                        <h4>Меблі</h4>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-sm-4 col-6 mb30">
                                    <a class="box-url style-2" href="login.html">
                                        <img src="images/misc/cat-6.png" width="80" alt="" class="mb20">
                                        <h4>Відпочинок</h4>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="mb-sm-30"></div>
                    </div>
                </div>
            </div>


        </div>

    </section>

</div>
<section id="section-collections" class="pt30">
    <div class="container">

        <div class="spacer-single"></div>

        <div class="row wow fadeIn">
            <div class="col-lg-12">
                <h2 class="style-2">New Items</h2>
            </div>

            @forelse ($items as $item)
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item style-2 shadow">
                        <div class="author_list_pp">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Store: {{ $item->user->name }}">
                                <img class="lazy" src="{{ $item->user->image }}" alt="">
                                @if ($item->user->verified == 1)
                                <i class="fa fa-check"></i>
                                @else

                                @endif
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button disabled>{{ $item->user->phone }}</button>
                                </div>
                            </div>
                            <a href="/item/{{ $item->slug }}">
                                <img src="{{ $item->image }}" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="/item/{{ $item->slug }}">
                                <h4>{{ $item->title }}</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                <span class="ms-0 text-primary ">{{ $item->price + 0 }} {{ $item->currency }}</span>
                            </div>
                                <div class="nft__item_action">
                                    <p class="text-dark"><a href="/item/country/{{ $item->country->slug }}" class="text-dark">{{ __('country.' . $item->country->slug )}} </a><span class="ps-2 pt-5"><a href="/item/city/{{ $item->city->slug }}" class="text-secondary">{{ __('city.' . $item->city->slug )}}</a></span></p>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-eye"></i><span>{{ $item->views }}</span>
                                </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>

    </div>
</section>
@endsection
