@extends('marketplace.layouts.account_app')
@section('content')
    <div class="col-xl-9">
        <!-- Edit profile START -->
        <div class="card bg-transparent border rounded-3">
            <!-- Card header -->
            <div class="card-header bg-transparent border-bottom">
                <h3 class="card-header-title mb-0">{{ __('item.edit_item')}}</h3>
            </div>
            <!-- Card body START -->
            <div class="card-body">

                <!-- Item Images -->
                <div>
                    <label class="form-label">Profile picture</label>
                </div>
                <div class="row">
                    <div class="col-2 col-md-1 mt-1 justify-content-center align-items-center">
                        <form action="{{route('image.destroy', $item )}}" method="post">
                            @csrf
                            <label class="position-relative" for="uploadfile-1" title="Replace this pic">
                                <!-- Avatar place holder -->
                                <span class="avatar avatar-lg">
                                                <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ $item->image }}" alt="">
                                            </span>
                            </label>
                            <!-- Upload button -->
                        </form>
                    </div>
                    @if(isset($item->img->image_2) && $item->img->image_2 != null)
                    <div class="col-2 col-md-1 mt-1 justify-content-center align-items-center">
                        <form action="{{route('image.destroy', $item )}}" method="post">
                            @csrf
                            <label class="position-relative" for="uploadfile-1" title="Replace this pic">
                                <!-- Avatar place holder -->
                                <span class="avatar avatar-lg">
                                                <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ $item->img->image_2 }}" alt="">
                                            </span>
                                <!-- Remove btn -->
                                <input hidden name="image_field" value="image_2">
                                <button type="submit" class="uploadremove"><i class="bi bi-x text-white"></i></button>
                            </label>
                            <!-- Upload button -->
                        </form>
                    </div>
                    @else
                    @endif
                    @if(isset($item->img->image_3) && $item->img->image_3 != null)
                        <div class="col-2 col-md-1 mt-1 justify-content-center align-items-center">
                            <form action="{{route('image.destroy', $item )}}" method="post">
                                @csrf
                                <label class="position-relative" for="uploadfile-1" title="Replace this pic">
                                    <!-- Avatar place holder -->
                                    <span class="avatar avatar-lg">
                                                <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ $item->img->image_3 }}" alt="">
                                            </span>
                                    <!-- Remove btn -->
                                    <input hidden name="image_field" value="image_3">
                                    <button type="submit" class="uploadremove"><i class="bi bi-x text-white"></i></button>
                                </label>
                                <!-- Upload button -->
                            </form>
                        </div>
                    @else
                    @endif
                    @if(isset($item->img->image_4) && $item->img->image_4 != null)
                        <div class="col-2 col-md-1 mt-1 justify-content-center align-items-center">
                            <form action="{{route('image.destroy', $item )}}" method="post">
                                @csrf
                                <label class="position-relative" for="uploadfile-1" title="Replace this pic">
                                    <!-- Avatar place holder -->
                                    <span class="avatar avatar-lg">
                                                <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ $item->img->image_4}}" alt="">
                                            </span>
                                    <!-- Remove btn -->
                                    <input hidden name="image_field" value="image_4">
                                    <button type="submit" class="uploadremove"><i class="bi bi-x text-white"></i></button>
                                </label>
                                <!-- Upload button -->
                            </form>
                        </div>
                    @else
                    @endif
                    @if(isset($item->img->image_5) && $item->img->image_5 != null)
                        <div class="col-2 col-md-1 mt-1 justify-content-center align-items-center">
                            <form action="{{route('image.destroy', $item )}}" method="post">
                                @csrf
                                <label class="position-relative" for="uploadfile-1" title="Replace this pic">
                                    <!-- Avatar place holder -->
                                    <span class="avatar avatar-lg">
                                                <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ $item->img->image_5 }}" alt="">
                                            </span>
                                    <!-- Remove btn -->
                                    <input hidden name="image_field" value="image_5">
                                    <button type="submit" class="uploadremove"><i class="bi bi-x text-white"></i></button>
                                </label>
                                <!-- Upload button -->
                            </form>
                        </div>
                    @else
                    @endif
                    @if(isset($item->img->image_6) && $item->img->image_6 != null)
                        <div class="col-2 col-md-1 mt-1 justify-content-center align-items-center">
                            <form action="{{route('image.destroy', $item )}}" method="post">
                                @csrf
                                <label class="position-relative" for="uploadfile-1" title="Replace this pic">
                                    <!-- Avatar place holder -->
                                    <span class="avatar avatar-lg">
                                                <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ $item->img->image_6 }}" alt="">
                                            </span>
                                    <!-- Remove btn -->
                                    <input hidden name="image_field" value="image_6">
                                    <button type="submit" class="uploadremove"><i class="bi bi-x text-white"></i></button>
                                </label>
                                <!-- Upload button -->
                            </form>
                        </div>
                    @else
                    @endif
                    @if(isset($item->img->image_7) && $item->img->image_7 != null)
                        <div class="col-2 col-md-1 mt-1 justify-content-center align-items-center">
                            <form action="{{route('image.destroy', $item )}}" method="post">
                                @csrf
                                <label class="position-relative" for="uploadfile-1" title="Replace this pic">
                                    <!-- Avatar place holder -->
                                    <span class="avatar avatar-lg">
                                                <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ $item->img->image_7 }}" alt="">
                                            </span>
                                    <!-- Remove btn -->
                                    <input hidden name="image_field" value="image_7">
                                    <button type="submit" class="uploadremove"><i class="bi bi-x text-white"></i></button>
                                </label>
                                <!-- Upload button -->
                            </form>
                        </div>
                    @else
                    @endif
                    @if(isset($item->img->image_8) && $item->img->image_8 != null)
                        <div class="col-2 col-md-1 mt-1 justify-content-center align-items-center">
                            <form action="{{route('image.destroy', $item )}}" method="post">
                                @csrf
                                <label class="position-relative" for="uploadfile-1" title="Replace this pic">
                                    <!-- Avatar place holder -->
                                    <span class="avatar avatar-lg">
                                                <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ $item->img->image_8 }}" alt="">
                                            </span>
                                    <!-- Remove btn -->
                                    <input hidden name="image_field" value="image_8">
                                    <button type="submit" class="uploadremove"><i class="bi bi-x text-white"></i></button>
                                </label>
                                <!-- Upload button -->
                            </form>
                        </div>
                    @else
                    @endif
                    @if(isset($item->img->image_9) && $item->img->image_9 != null)
                        <div class="col-2 col-md-1 mt-1 justify-content-center align-items-center">
                            <form action="{{route('image.destroy', $item )}}" method="post">
                                @csrf
                                <label class="position-relative" for="uploadfile-1" title="Replace this pic">
                                    <!-- Avatar place holder -->
                                    <span class="avatar avatar-lg">
                                                <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ $item->img->image_9 }}" alt="">
                                            </span>
                                    <!-- Remove btn -->
                                    <input hidden name="image_field" value="image_9">
                                    <button type="submit" class="uploadremove"><i class="bi bi-x text-white"></i></button>
                                </label>
                                <!-- Upload button -->
                            </form>
                        </div>
                    @else
                    @endif

                    @if(isset($item->img->image_10) && $item->img->image_10 != null)
                        <div class="col-2 col-md-1 mt-1 justify-content-center align-items-center">
                            <form action="{{route('image.destroy', $item )}}" method="post">
                                @csrf
                                <label class="position-relative" for="uploadfile-1" title="Replace this pic">
                                    <!-- Avatar place holder -->
                                    <span class="avatar avatar-lg">
                                                <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ $item->img->image_10 }}" alt="">
                                            </span>
                                    <!-- Remove btn -->
                                    <input hidden name="image_field" value="image_10">
                                    <button type="submit" class="uploadremove"><i class="bi bi-x text-white"></i></button>
                                </label>
                                <!-- Upload button -->
                            </form>
                        </div>
                    @else
                    @endif
                </div>
                <!-- END Item Images -->

                <!-- Form -->
                <form class="row g-4 mt-2" method="post" action="{{route('item.update', compact('item'))}}" enctype="multipart/form-data">
                @csrf
                @method('Patch')



                <!-- Title -->
                    <div class="col-md-12">
                        <label class="form-label">{{ __('item.title')}}<span class="text-danger"> *</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="title" value="{{ $item->title }}" required>
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="col-md-3">
                        <label class="form-label">{{ __('item.category')}}<span class="text-danger"> *</span></label>
                        <select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" name="category_id" required>
                            @if ($item->category_id == 0)
                                <option value="0">{{ __('item.choose_category')}}</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ __('category.' . $category->slug )}}</option>
                                @endforeach
                            @else()
                                <option value="0">{{ __('item.choose_category')}}</option>
                                @foreach($categories as $category)
                                    <option value="{{ $item->category_id }}"
                                            @if ($category->id == $item->category->id)
                                            selected="selected"
                                        @endif>
                                        {{ __('category.' .$category->slug) }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <!-- Type -->
                    <div class="col-md-3">
                        <label class="form-label">{{ __('item.type')}}<span class="text-danger"> *</span></label>
                        <select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" name="type" >
                            <option value="product">{{ __('item.product')}}</option>
                            <option value="service">{{ __('item.service')}}</option>
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="col-md-3">
                        <label class="form-label">{{ __('item.price')}}<span class="text-danger"> *</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control text-end" name="price" onkeypress="return checkInput(this)" value="{{ $item->price + 0 }}" required>
                        </div>
                    </div>

                    <!-- Currency -->
                    <div class="col-md-3">
                        <label class="form-label">{{ __('item.currency')}}<span class="text-danger"> *</span></label>
                        <select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" name="currency">
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

                    <!-- Description -->
                    <div class="col-12">
                        <label class="form-label">{{ __('item.description')}}<span class="text-danger"> *</span></label>
                        <!-- Editor toolbar -->
                        <div class="bg-light border border-bottom-0 rounded-top py-2" id="quilltoolbar">

                        </div>

                        <!-- Main toolbar -->
                        <div class="bg-body border rounded-bottom h-300px overflow-hidden" id="quilleditor">
                            {!!  $item->description !!}
                        </div>


                        <input type="hidden" id="quill_html" name="description"/>
                    </div>



                    <!-- Country -->
                    <div class="col-md-4">
                        <label class="form-label">{{ __('item.country')}}<span class="text-danger"> *</span></label>
                        <select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" name="country_id">
                            @if ($item->country_id == 0)
                                <option value="0">{{ __('item.choose_country')}}</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ __('country.' . $country->slug )}}</option>
                                @endforeach
                            @else()
                                <option value="0">{{ __('item.choose_country')}}</option>
                                @foreach($countries as $country)
                                    <option value="{{ $item->country_id }}"
                                            @if ($country->id == $item->country->id)
                                            selected="selected"
                                        @endif>
                                        {{ __('country.' .$country->slug) }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <!-- Region -->
                    <div class="col-md-4">
                        <label class="form-label">{{ __('item.region')}}<span class="text-danger"> *</span></label>
                        <select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" name="region_id">
                            @if ($item->region_id == 0)
                                <option value="0">{{ __('item.choose_region')}}</option>
                                @foreach($regions as $region)
                                    <option value="{{ $region->id }}">{{ __('region.' . $region->slug )}}</option>
                                @endforeach
                            @else()
                                <option value="0">{{ __('item.choose_region')}}</option>
                                @foreach($regions as $region)
                                    <option value="{{ $item->region_id }}"
                                            @if ($region->id == $item->region->id)
                                            selected="selected"
                                        @endif>
                                        {{ __('region.' .$region->slug) }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <!-- City -->
                    <div class="col-md-4">
                        <label class="form-label">{{ __('item.city')}}<span class="text-danger"> *</span></label>
                        <select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" name="city_id">
                            @if ($item->city_id == 0)
                                <option value="0">{{ __('item.choose_city')}}</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ __('city.' . $city->slug )}}</option>
                                @endforeach
                            @else()
                                <option value="0">{{ __('item.choose_city')}}</option>
                                @foreach($cities as $city)
                                    <option value="{{ $item->city_id }}"
                                            @if ($city->id == $item->city->id)
                                            selected="selected"
                                        @endif>
                                        {{ __('city.' .$city->slug) }}
                                    </option>
                                @endforeach
                            @endif

                        </select>
                    </div>

                    <div class="row col-md-12 d-flex mt-5">
                        <div class="col-md-6">
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="prepayment" @if($item->prepayment === 1) checked="checked" @endif>
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.prepayment')}}</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="cash_on_delivery" @if($item->cash_on_delivery === 1) checked="checked" @endif>
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.cash_on_delivery')}}</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="self_pickup" @if($item->self_pickup === 1) checked="checked" @endif>
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.self_pickup')}}</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="city_delivery" @if($item->city_delivery === 1) checked="checked" @endif>
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.city_delivery')}}</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="country_delivery" @if($item->country_delivery === 1) checked="checked" @endif>
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.country_delivery')}}</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="int_delivery" @if($item->int_delivery === 1) checked="checked" @endif>
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.int_delivery')}}</label>
                            </div>
                        </div>
                    </div>

                    <!-- Profile picture -->
                    <div class="col-12 justify-content-center align-items-center">
                        <label class="form-label">{{ __('item.main_image')}}</label>
                        <div class="d-flex align-items-center">
                            <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                                <!-- Avatar place holder -->
                                <span class="avatar avatar-xl">
											<img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ $item->image }}" alt="">
										</span>
                            </label>
                            <!-- Upload button -->
                            <input class="form-control" type="file" id="formFile" name="image">
                        </div>
                    </div>


                    <div class="mt-5">

                        <!-- Edit lecture START -->
                        <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                            <!-- Item START -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-1">
                                    <button class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                        {{ __('item.add_more_images')}}
                                    </button>
                                </h6>

                                <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                                    <!-- Topic START -->
                                    <div class="accordion-body mt-3">
                                        <!-- Video item START -->
                                        <div class="row col-12 d-flex justify-content-between align-items-center">
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
                                        <!-- Add topic -->
                                    </div>
                                    <!-- Topic END -->
                                </div>
                            </div>
                            <!-- Item END -->

                        </div>
                        <!-- Edit lecture END -->

                    </div>

                    <!-- Save button -->
                    <div class="d-sm-flex justify-content-end">
                        <a href="/account/item" type="button" class="btn btn-light mb-0 me-2">{{ __('general.close')}}</a>
                        <button type="submit" class="btn btn-primary mb-0">{{ __('general.save')}}</button>
                    </div>
                </form>
            </div>
            <!-- Card body END -->
        </div>
        <!-- Edit profile END -->
    </div>
@endsection

@section('scripts')

    <script>

        var quill = new Quill('#quilleditor', {
            theme: 'snow',
            modules: {
                'toolbar': [
                    [ 'bold', 'italic', 'underline', 'strike' ],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'list': 'ordered' }, { 'list': 'bullet'}, { 'indent': '-1' }, { 'indent': '+1' }],
                    [ 'clean' ]
                ]
            }
        });
        quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById("quill_html").value = quill.root.innerHTML;
        });
    </script>
    <script>
        function checkInput (elementRef) {

            var keyCodeEntered = (event.which) ? event.which : (window.event.keyCode) ? window.event.keyCode : -1;

            if ((keyCodeEntered >= 48) && (keyCodeEntered <= 57)) {
                return true;

            } else if (keyCodeEntered == 46) {

                if ((elementRef.value) && (elementRef.value.indexOf('.') >= 0)) {
                    return false;
                } else {
                    return true;
                }
            }
            return false;
        }
    </script>
@endsection
