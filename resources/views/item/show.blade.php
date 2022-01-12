@extends('layouts.app')
@section('content')
    <main>

        <!-- =======================
        Page content START -->
        <section class="pt-3 pt-xl-5">
            <div class="container" data-sticky-container>
                <div class="row g-4">
                    <!-- Main content START -->
                    <div class="col-md-6">

                        <div class="row g-4">


                            <!-- Image and video -->
                            <div class="col-12 position-relative">
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
                                <div class="mt-1">
                                    <div hidden>{{ $i = 0 }}</div>
                                    @if($item->image != null)
                                        <img src="{{ $item->image }}" width="100" class="img-thumbnail mt-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                                    @else
                                    @endif

                                    @if(isset($item->img->image_2) && $item->img->image_2 != null)
                                        <img src="{{ $item->img->image_2 }}" width="100" class="img-thumbnail mt-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                                    @else
                                    @endif

                                    @if(isset($item->img->image_3) && $item->img->image_3 != null)
                                        <img src="{{ $item->img->image_3 }}" width="100" class="img-thumbnail mt-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                                    @else
                                    @endif

                                    @if(isset($item->img->image_4) && $item->img->image_4 != null)
                                        <img src="{{ $item->img->image_4 }}" width="100" class="img-thumbnail mt-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                                    @else
                                    @endif

                                    @if(isset($item->img->image_5) && $item->img->image_5 != null)
                                        <img src="{{ $item->img->image_5 }}" width="100" class="img-thumbnail mt-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                                    @else
                                    @endif

                                    @if(isset($item->img->image_6) && $item->img->image_6 != null)
                                        <img src="{{ $item->img->image_6 }}" width="100" class="img-thumbnail mt-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                                    @else
                                    @endif

                                    @if(isset($item->img->image_7) && $item->img->image_7 != null)
                                        <img src="{{ $item->img->image_7 }}" width="100" class="img-thumbnail mt-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                                    @else
                                    @endif

                                    @if(isset($item->img->image_8) && $item->img->image_8 != null)
                                        <img src="{{ $item->img->image_8 }}" width="100" class="img-thumbnail mt-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                                    @else
                                    @endif

                                    @if(isset($item->img->image_9) && $item->img->image_9 != null)
                                        <img src="{{ $item->img->image_9 }}" width="100" class="img-thumbnail mt-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                                    @else
                                    @endif

                                    @if(isset($item->img->image_10) && $item->img->image_10 != null)
                                        <img src="{{ $item->img->image_10 }}" width="100" class="img-thumbnail mt-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i++ }}">
                                    @else
                                    @endif

                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- Main content END -->
                    <!-- Right sidebar START -->
                    <div class="col-md-6 ps-lg-5">
                        <div data-sticky data-margin-top="80" data-sticky-for="768">
                            <div class="row g-4">
                                <div class="col-md-6 col-md-12">
                                    <!-- Item info START -->
                                    <div class="card card-body p-0">
                                        <!-- Price and share button -->
                                        <div class="d-flex justify-content-between align-items-start">
                                            <!-- Price -->
                                            <h3 class="fw-bold mb-0 me-2">{{ $item->title }}</h3>
                                            <!-- Share button with dropdown -->
{{--                                            <div class="dropdown">--}}
{{--                                                <a href="#" class="btn btn-sm btn-link text-muted rounded mb-0 small" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                                    <i class="fas fa-ellipsis-h"></i>--}}
{{--                                                </a>--}}
{{--                                                <!-- dropdown button -->--}}
{{--                                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">--}}
{{--                                                    <li><a  class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Поскаржетись</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="mt-2">
                                            <ul class="list-inline mb-0">
                                                @if($item->city_id > 0 || $item->country_id > 0)<li class="list-inline-item fw-light h6 mb-0 mb-sm-0 text-secondary"><i class="fas fa-map-marker-alt text-primary"></i></li>@endif
                                                @if($item->country_id > 0) <li class="list-inline-item fw-light h6 mb-1 mb-sm-0 text-primary me-3">{{ __('country.' . $item->country->slug )}}</li>@endif
                                                @if($item->city_id > 0)<li class="list-inline-item fw-light h6 mb-1 mb-sm-0 text-primary me-5">{{ __('city.' . $item->city->slug )}} </li>@endif
                                                <li class="list-inline-item fw-light h6 mb-1 mb-sm-0 text-secondary"><i class="far fa-calendar-alt text-secondary me-2"></i>09-09-2021</li>
                                            </ul>
                                        </div>

                                        <hr class="mt-1">

                                        <div class="d-flex justify-content-between align-items-center mb-5 mt-3">
                                            <!-- Price -->
                                            <h3 class="fw-bold mb-0 me-2">{{ $item->price +0 }}<span class="h5"> {{ __('item.' . $item->currency )}} </span></h3>
                                        </div>

                                        <h5 class="mb-2">{{ __('item.delivery_and_payment')}}</h5>
                                        <hr class="mt-0">
                                        <ul class="list-group list-group-borderless border-0">
                                            @if ($item->crypto_pay == '1')
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="fab fa-btc text-primary opacity-8"></i>{{ __('item.buy_for_cryptocurrency')}}</span>
                                                <span><i class="fas fa-fw fa-check text-success"></i></span>
                                            </li>
                                            @endif
                                            @if ($item->prepayment == '1')
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="far fa-credit-card text-primary opacity-8"></i>{{ __('item.prepayment')}}</span>
                                                <span><i class="fas fa-fw fa-check text-success"></i></span>
                                            </li>
                                            @endif
                                            @if ($item->cash_on_delivery == '1')
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="far fa-money-bill-alt text-primary opacity-8"></i>{{ __('item.cash_on_delivery')}}</span>
                                                <span><i class="fas fa-fw fa-check text-success"></i></span>
                                            </li>
                                            @endif
                                            @if ($item->self_pickup == '1')
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="fas fa-car-side text-primary opacity-8"></i>{{ __('item.self_pickup')}}</span>
                                                <span><i class="fas fa-fw fa-check text-success"></i></span>
                                            </li>
                                            @endif
                                            @if ($item->city_delivery == '1' && $item->city_id > 0)
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="far fa-building text-primary opacity-8"></i>{{ __('item.city_delivery')}}</span>
                                                <span>{{ __('city.' . $item->city->slug )}}</span>
                                            </li>
                                            @endif
                                            @if ($item->country_delivery == '1' && $item->country_id > 0)
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="fas fa-truck-moving text-primary opacity-8"></i>{{ __('item.country_delivery')}}</span>
                                                <span>{{ __('country.' . $item->country->slug )}}</span>
                                            </li>
                                            @endif
                                            @if ($item->int_delivery == '1')
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0"><i class="fas fa-globe-americas text-primary opacity-8"></i>{{ __('item.int_delivery')}}</span>
                                                <span><i class="fas fa-fw fa-check text-success"></i></span>
                                            </li>
                                            @endif
                                        </ul>

                                    </div>
                                    <!-- Item info END -->
                                    <!-- Store info START -->
                                    <div class="card card-body border p-4 mt-3 bg-light shadow-sm">

                                        <!-- Instructor info -->
                                        <div class="d-sm-flex align-items-center">
                                            <!-- Avatar image -->
                                            <div class="avatar avatar-xl">
                                                <img class="avatar-img rounded-circle" src="{{ $item->user->image }}" alt="avatar">
                                            </div>
                                            <div class="ms-sm-3 mt-2 mt-sm-0">
                                                <h5 class="mb-0">
                                                    <a href="/item/store/{{ $item->user->slug }}">{{ $item->user->name }}
                                                        @if ($item->user->verified == 1)<small><i class="fas fa-check-circle text-success"></i></small>@endif
                                                    </a>
                                                </h5>
                                                <p class="mb-0 mt-2"><span class="badge bg-white text-dark shadow-sm"><i class="fa fa-mobile-alt text-dark me-2"></i><b> {{ $item->user->phone }}</b></span></p>
                                            </div>


                                        </div>
                                        <hr>
                                        <!-- Rating and follow -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-start mt-0 mt-sm-2">
                                            <!-- Rating star -->
                                            <ul class="list-inline mb-0 mt-0 me-2">
                                                @if($item->user->site != null)
                                                <li class="list-inline-item"> <a class="btn px-2 btn-sm bg-linkedin" href="{{ $item->user->site }}" target="_blank"><i class="fa fa-fw fa-globe"></i></a> </li>
                                                @endif
                                                @if($item->user->instagram != null)
                                                <li class="list-inline-item"> <a class="btn px-2 btn-sm bg-instagram-gradient" href="https://instagram.com/{{ $item->user->instagram }}" target="_blank"><i class="fab fa-fw fa-instagram"></i></a> </li>
                                                @endif
                                                @if($item->user->twitter != null)
                                                <li class="list-inline-item"> <a class="btn px-2 btn-sm bg-twitter" href="https://twitter.com/{{ $item->user->twitter }}" target="_blank"><i class="fab fa-fw fa-twitter"></i></a></li>
                                                @endif
                                                @if($item->user->facebook != null)
                                                <li class="list-inline-item"> <a class="btn px-2 btn-sm bg-facebook" href="https://facebook.com/{{ $item->user->facebook }}" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
                                                @endif
                                            </ul>

                                            <!-- button -->
                                            <a href="/item/store/{{ $item->user->slug }}" class="btn btn-sm btn-primary mb-0 mt-2 mt-sm-0">{{ __('item.all_items')}}</a>
                                        </div>


                                    </div>
                                    <!-- Store info END -->
                                </div>

                            </div><!-- Row End -->
                        </div>
                    </div>
                    <!-- Right sidebar END -->

                    <div class="col-md-9">
                        <div class="row col-12">
                            <h3>{{ __('item.description')}}</h3>
                            <hr>
                            <p>{!!   $item->description !!}</p>
                        </div>
                    </div>

                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
        Page content END -->

    </main>
@endsection
