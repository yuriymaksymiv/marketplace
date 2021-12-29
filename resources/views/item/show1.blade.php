@extends('layouts.app')
@section('content')
@include('layouts.top-menu-light')
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>


    <section aria-label="section" class="mt90 sm-mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="{{ $item->image }}" class="img-fluid img-rounded mb-sm-30" alt="">
                </div>
                <div class="col-md-6">
                    <div class="item_info">

                        <span class="badge bg-light text-secondary"><a href="/item/category/{{ $item->category_slug }}" class="text-dark">{{ $item->category_slug }}</a></span>
                        <h2 style="margin-bottom: 0">{{ $item->title }}</h2>
                        <div class="spacer-10"></div>
                        <div class="item_info_counts">
                            @if($item->user->site != null)
                                <div class="bg-light shadow"><a href="#" class="text-secondary"><i class="fa fa-globe"></i>Сайт</a></div>
                            @else
                            @endif

                            @if($item->user->instagram != null)
                                <div class="bg-light shadow"><a href="https://instagram.com/{{ $item->user->instagram }}" target="_blank" class="text-secondary"><i class="fa fa-instagram"></i>{{ $item->user->instagram }}</a></div>
                            @else
                            @endif

                            @if($item->user->telegram != null)
                                <div class="bg-light shadow"><a href="https://t.me/{{ $item->user->telegram }}" target="_blank" class="text-secondary"><i class="fa fa-telegram"></i>{{ $item->user->telegram }}</a></div>
                            @else
                            @endif


                        </div>
                        <div class="item_info_counts">
                            <div class="bg-primary text-white shadow"><i class="fa fa-phone text-white"></i>{{ $item->user->phone }}</div>
                        </div>
                        <div class="spacer-10"></div>



                        <div class="row">
                            <div class="col-6 pt-3">
                                <div class="d-flex flex-row" style="background-size: cover;">
                                    <div class="mr40" style="background-size: cover;">
                                            <div class="nft-item-price d-flex" style="background-size: cover;"> <span class="item-price ps-1">{{ $item->price + 0 }}</span>UAH</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div style="background-size: cover;" >
                                    <div class="item_author" style="background-size: cover;">
                                        <div class="author_list_pp" style="background-size: cover;">
                                            <a href="/item/store/{{ $item->user->slug }}">
                                                <img class="lazy" src="{{ $item->user->image }}" alt="">
                                                <i class="fa fa-check bg-primary"></i>
                                            </a>
                                        </div>
                                        <div class="author_list_info" style="background-size: cover;">
                                            <a href="/item/store/{{ $item->user->slug }}" class="text-dark">{{ $item->user->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="spacer-40"></div>
                        <div class="bd-callout bd-callout-info">
                            <h4 class="alert-heading text-dark">Доставка та оплата</h4>
                            <div class="text-dark"><i class="fa fa-check-square text-success pe-2"></i>Даний товар можна обміняти на критовалюту <img src="/images/misc/usdt.png" width="20"  alt=""> (UAH Binance)</div>
                            <div class="text-dark"><i class="fa fa-check-square text-success pe-2"></i>Самовивіз</div>
                            <div class="text-dark"><i class="fa fa-check-square text-success pe-2"></i>Доставка по Україні</div>
                            <div class="d-flex mt-2 mb-2 border-top me-3 pt-2">
                                <div class="text-primary">{{ $item->country }}</div>
                                <div class="text-primary ms-2">{{ $item->city }}</div>
                            </div>
                        </div>

                        <div class="spacer-10"></div>

                        <div class="text-dark">
                            <b>Опис</b>
                        </div>

                        <hr style="margin-top: 10px; margin-bottom: 10px;">
                        <div>{!! $item->description !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
<!-- content close -->
@endsection
