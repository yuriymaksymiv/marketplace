@extends('landing.layouts.app')
@section('content')
    @include('landing.layouts.top-menu-light')

    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light" data-bgimage="url(images/background/subheader.jpg) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 text-center mt-5">
                            <h1 class="text-dark">{{ __('item.create_new_item')}}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 offset-lg-1">
                        <form id="form-create-item" class="form-border" method="post" action="{{route('item.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="Title" class="form-label text-dark">{{ __('item.title')}}<span class="text-danger"> *</span></label>
                                    <input type="text" name="title" class="form-control" id="title" aria-describedby="title" required>
                                </div>
                            </div>
                            <div class="d-flex row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-dark">{{ __('item.category')}}<span class="text-danger"> *</span></label>
                                        <select class="form-select bg-light" aria-label="Default select example" name="category_id">
                                            <option selected>{{ __('item.choose_category')}}</option>
                                            @forelse($categories as $category)
                                            <option value="{{ $category->id }}">{{ __('category.' . $category->slug )}}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-dark">{{ __('item.type')}}<span class="text-danger"> *</span></label>
                                        <select class="form-select bg-light" aria-label="Default select example" name="type">
                                            <option selected>{{ __('item.choose_type')}}</option>
                                            <option value="product">{{ __('item.product')}}</option>
                                            <option value="service">{{ __('item.service')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="price" class="form-label text-dark">{{ __('item.price')}}<span class="text-danger"> *</span></label>
                                        <input type="price" class="form-control" id="exampleInputEmail1" aria-describedby="price" name="price">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label for="currency" class="form-label text-dark">{{ __('item.currency')}}<span class="text-danger"> *</span></label>
                                        <select class="form-select bg-light " aria-label="Default select example" name="currency">
                                            <optgroup label="Валюта">
                                                <option value="uah">{{ __('item.uah')}}</option>
                                                <option value="usd">{{ __('item.usd')}}</option>
                                            </optgroup>
                                            <optgroup label="Криптовалюта">
                                                <option value="usdt">{{ __('item.usdt')}}</option>
                                                <option value="btc">{{ __('item.btc')}}</option>
                                                <option value="bnb">{{ __('item.bnb')}}</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label text-dark">{{ __('item.description')}}<span class="text-danger"> *</span></label>
                                    <textarea class="form-control summernote" name="description" id="description" aria-describedby="description"></textarea>
                                </div>
                            </div>

                            <div class="d-flex row">
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label for="country" class="form-label text-dark">{{ __('item.country')}}</label>
                                        <select class="form-select bg-light" aria-label="Default select example" name="country_id" id="countries">
                                            <option>{{ __('item.choose_country')}}</option>
                                            @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ __('country.' . $country->slug )}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="region" class="form-label text-dark">{{ __('item.region')}}</label>
                                        <select class="form-select bg-light" aria-label="Default select example" name="region_id" >
                                            <option>{{ __('item.choose_region')}}</option>
                                            @foreach($regions as $region)
                                                <option value="{{ $region->id }}">{{ __('region.' . $region->slug )}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="city" class="form-label text-dark">{{ __('item.city')}}</label>
                                        <select class="form-select bg-light" aria-label="Default select example" name="city_id" id="city">
                                            <option>{{ __('item.choose_city')}}</option>
                                            @foreach($cities as $city)
                                            <option value="{{ $city->id }}">{{ __('city.' . $city->slug )}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex bd-callout bd-callout-info pb-3">
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.prepayment_for_goods')}}</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.cash_on_delivery')}}</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.self_pickup')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.city_delivery')}}</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.country_delivery')}}</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.int_delivery')}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">{{ __('item.main_image')}}</label>
                                    <input class="form-control" type="file" id="formFile" name="image">
                                </div>
                            </div>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            {{ __('item.add_more_images')}}
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="col-md-12 row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">{{ __('item.image')}} 2</label>
                                                        <input class="form-control" type="file" id="formFile" name="image_2">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">{{ __('item.image')}} 3</label>
                                                        <input class="form-control" type="file" id="formFile" name="image_3">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">{{ __('item.image')}} 4</label>
                                                        <input class="form-control" type="file" id="formFile" name="image_4">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">{{ __('item.image')}} 5</label>
                                                        <input class="form-control" type="file" id="formFile" name="image_5">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">{{ __('item.image')}} 6</label>
                                                        <input class="form-control" type="file" id="formFile" name="image_6">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">{{ __('item.image')}} 7</label>
                                                        <input class="form-control" type="file" id="formFile" name="image_7">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">{{ __('item.image')}} 8</label>
                                                        <input class="form-control" type="file" id="formFile" name="image_8">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">{{ __('item.image')}} 9</label>
                                                        <input class="form-control" type="file" id="formFile" name="image_9">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">{{ __('item.image')}} 10</label>
                                                        <input class="form-control" type="file" id="formFile" name="image_10">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="mb-3 mt-5">
                                <input type="button" class="btn btn-light" onclick="history.back();" value="{{ __('general.back')}}">
                                <button type="submit" class="btn btn-primary">{{ __('general.save')}}</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <h5>{{ __('item.example')}}</h5>
                        <div class="nft__item">
                            <div class="de_countdown" data-year="2023" data-month="11" data-day="16" data-hour="8"></div>
                            <div class="author_list_pp">
                                <a href="#">
                                    <img class="lazy" src="images/author/author-1.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="nft__item_wrap">
                                <a href="#">
                                    <img src="images/collections/coll-item-3.jpg" id="get_file_2" class="lazy nft__item_preview" alt="">
                                </a>
                            </div>
                            <div class="nft__item_info">
                                <a href="#">
                                    <h4>Pinky Ocean</h4>
                                </a>
                                <div class="nft__item_click">
                                    <span></span>
                                </div>
                                <div class="nft__item_price">
                                    0.08 ETH<span>1/20</span>
                                </div>
                                <div class="nft__item_action">
                                    <a href="#">Place a bid</a>
                                </div>
                                <div class="nft__item_like">
                                    <i class="fa fa-heart"></i><span>50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content close -->

@endsection
