@extends('landing.layouts.app')
@section('content')
@include('landing.layouts.top-menu-light')
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>


    <section aria-label="section" class="mt90 sm-mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @if($item->image != null)
                            <div class="carousel-item active">
                                <img src="{{ $item->image }}" class="d-block w-100" alt="...">
                            </div>
                            @else
                            @endif

                                @if(isset($item->img->image_2) && $item->img->image_2 != null)
                                    <div class="carousel-item">
                                        <img src="{{ $item->img->image_2 }}" class="d-block w-100" alt="...">
                                    </div>
                                @else
                                @endif

                                @if(isset($item->img->image_3) && $item->img->image_3 != null)
                                    <div class="carousel-item">
                                        <img src="{{ $item->img->image_3 }}" class="d-block w-100" alt="...">
                                    </div>
                                @else
                                @endif

                                @if(isset($item->img->image_4) && $item->img->image_4 != null)
                                    <div class="carousel-item">
                                        <img src="{{ $item->img->image_4 }}" class="d-block w-100" alt="...">
                                    </div>
                                @else
                                @endif

                                @if(isset($item->img->image_5) && $item->img->image_5 != null)
                                    <div class="carousel-item">
                                        <img src="{{ $item->img->image_5 }}" class="d-block w-100" alt="...">
                                    </div>
                                @else
                                @endif

                                @if(isset($item->img->image_6) && $item->img->image_6 != null)
                                    <div class="carousel-item">
                                        <img src="{{ $item->img->image_6 }}" class="d-block w-100" alt="...">
                                    </div>
                                @else
                                @endif

                                @if(isset($item->img->image_7) && $item->img->image_7 != null)
                                    <div class="carousel-item">
                                        <img src="{{ $item->img->image_7 }}" class="d-block w-100" alt="...">
                                    </div>
                                @else
                                @endif

                                @if(isset($item->img->image_8) && $item->img->image_8 != null)
                                    <div class="carousel-item">
                                        <img src="{{ $item->img->image_8 }}" class="d-block w-100" alt="...">
                                    </div>
                                @else
                                @endif

                                @if(isset($item->img->image_9) && $item->img->image_9 != null)
                                    <div class="carousel-item">
                                        <img src="{{ $item->img->image_9 }}" class="d-block w-100" alt="...">
                                    </div>
                                @else
                                @endif

                                @if(isset($item->img->image_10) && $item->img->image_10 != null)
                                    <div class="carousel-item">
                                        <img src="{{ $item->img->image_10 }}" class="d-block w-100" alt="...">
                                    </div>
                                @else
                                @endif
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="pt-2">
                        <div hidden>{{ $i = 0 }}</div>
                        @if($item->image != null)
                            <img src="{{ $item->image }}" width="100" class="img-thumbnail" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                        @else
                        @endif

                        @if(isset($item->img->image_2) && $item->img->image_2 != null)
                            <img src="{{ $item->img->image_2 }}" width="100" class="img-thumbnail" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                        @else
                        @endif

                        @if(isset($item->img->image_3) && $item->img->image_3 != null)
                            <img src="{{ $item->img->image_3 }}" width="100" class="img-thumbnail" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                        @else
                        @endif

                        @if(isset($item->img->image_4) && $item->img->image_4 != null)
                            <img src="{{ $item->img->image_4 }}" width="100" class="img-thumbnail" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                        @else
                        @endif

                        @if(isset($item->img->image_5) && $item->img->image_5 != null)
                            <img src="{{ $item->img->image_5 }}" width="100" class="img-thumbnail" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                        @else
                        @endif

                        @if(isset($item->img->image_6) && $item->img->image_6 != null)
                            <img src="{{ $item->img->image_6 }}" width="100" class="img-thumbnail" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                        @else
                        @endif

                        @if(isset($item->img->image_7) && $item->img->image_7 != null)
                            <img src="{{ $item->img->image_7 }}" width="100" class="img-thumbnail" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                        @else
                        @endif

                        @if(isset($item->img->image_8) && $item->img->image_8 != null)
                            <img src="{{ $item->img->image_8 }}" width="100" class="img-thumbnail" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                        @else
                        @endif

                        @if(isset($item->img->image_9) && $item->img->image_9 != null)
                            <img src="{{ $item->img->image_9 }}" width="100" class="img-thumbnail" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                        @else
                        @endif

                        @if(isset($item->img->image_10) && $item->img->image_10 != null)
                            <img src="{{ $item->img->image_10 }}" width="100" class="img-thumbnail" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                        @else
                        @endif

                    </div>


                </div>
                <div class="col-md-6">
                    <div class="item_info">

                        <span class="badge bg-light text-secondary"><a href="/item/category/{{ $item->category_slug }}" class="text-dark">{{ $item->category_slug }}</a></span>
                        <h2 style="margin-bottom: 0">{{ $item->title }}</h2>
                        <div class="spacer-10"></div>
                        <div class="item_info_counts">
                            @if($item->user->site != null)
                                <div class="bg-light shadow"><a href="http://{{ $item->user->site }}" class="text-secondary"><i class="fa fa-globe"></i>{{ $item->user->site }}</a></div>
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
                                            <div class="nft-item-price d-flex" style="background-size: cover;"> <span class="item-price ps-1">{{ $item->price + 0 }}</span>{{ __('item.' . $item->currency )}}</div>
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
                            <h4 class="alert-heading text-dark">{{ __('item.delivery_and_payment')}}</h4>
                            <div class="text-dark"><i class="fa fa-check-square text-success pe-2"></i>{{ __('item.buy_for_cryptocurrency')}}<img src="/images/misc/usdt.png" width="20"  alt=""> (UAH Binance)</div>
                            <div class="text-dark"><i class="fa fa-check-square text-success pe-2"></i>{{ __('item.prepayment_for_goods')}}</div>
                            <div class="text-dark"><i class="fa fa-check-square text-success pe-2"></i>{{ __('item.cash_on_delivery')}}</div>
                            <div class="text-dark"><i class="fa fa-check-square text-success pe-2"></i>{{ __('item.self_pickup')}}</div>
                            <div class="text-dark"><i class="fa fa-check-square text-success pe-2"></i>{{ __('item.city_delivery')}}</div>
                            <div class="text-dark"><i class="fa fa-check-square text-success pe-2"></i>{{ __('item.country_delivery')}}</div>
                            <div class="text-dark"><i class="fa fa-check-square text-success pe-2"></i>{{ __('item.int_delivery')}}</div>
                            <div class="d-flex mt-2 mb-2 border-top me-3 pt-2">
                                <div class="text-primary">{{ __('country.' . $item->country->slug )}}</div>
                                <div class="text-primary ms-2">{{ __('city.' . $item->city->slug )}}</div>
                            </div>
                        </div>

                        <div class="spacer-10"></div>

                        <div class="text-dark">
                            <b>{{ __('item.description')}}</b>
                        </div>

                        <hr style="margin-top: 10px; margin-bottom: 10px;">
                        <div class="text-dark">{!! $item->description !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
<!-- content close -->
@endsection
