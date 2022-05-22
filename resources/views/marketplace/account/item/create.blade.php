@extends('marketplace.layouts.account_app')
@section('content')
    <div class="col-xl-9">
        <!-- Edit profile START -->
        <div class="card bg-transparent border rounded-3">
            <!-- Card header -->
            <div class="card-header bg-transparent border-bottom">
                <h3 class="card-header-title mb-0">{{ __('item.create_new_item')}}</h3>
            </div>
            <!-- Card body START -->
            <div class="card-body">
                <!-- Form -->
                <form class="row g-4" method="post" action="{{route('item.store')}}" enctype="multipart/form-data">
                @csrf
                    <!-- Title -->
                    <div class="col-md-12">
                        <label class="form-label">{{ __('item.title')}}<span class="text-danger"> *</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="title" required>
                        </div>
                    </div>

                    <!-- Categoty -->
                    <div class="col-md-3">
                        <label class="form-label">{{ __('item.category')}}<span class="text-danger"> *</span></label>
                        <select class="form-select" aria-label=".form-select-sm" name="category_id" required>
                            @forelse($categories as $category)
                                <option value="{{ $category->id }}">{{ __('category.' . $category->slug )}}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>

                    <!-- Type -->
                    <div class="col-md-3">
                        <label class="form-label">{{ __('item.type')}}<span class="text-danger"> *</span></label>
                        <select class="form-select" aria-label=".form-select-sm" name="type" >
                            <option value="product">{{ __('item.product')}}</option>
                            <option value="service">{{ __('item.service')}}</option>
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="col-md-3">
                        <label class="form-label">{{ __('item.crypto_price')}}<span class="text-danger"> *</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="crypto_price" onkeypress="return checkInput(this)" required>
                        </div>
                    </div>

                    <!-- Currency -->
                    <div class="col-md-3">
                        <label class="form-label">{{ __('item.crypto_currency')}}<span class="text-danger"> *</span></label>
                        <select class="form-select" aria-label=".form-select-sm" name="crypto_currency">
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
                        </div>


                        <input type="hidden" id="quill_html" name="description"/>
                    </div>



                    <!-- Country -->
                    <div class="col-md-4">
                        <label class="form-label">{{ __('item.country')}}</label>
                        <select class="form-select z-index-9 bg-transparent" aria-label=".form-select-sm" name="country" id="country">
                            <option value="0">{{ __('item.choose_country')}}</option>
                            @foreach($countries as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- State -->
                    <div class="col-md-4">
                        <label class="form-label">{{ __('item.state')}}</label>
                        <select class="form-select" aria-label=".form-select-sm" name="state" id="country">
                            <option value="0">{{ __('item.choose_state')}}</option>
                        </select>
                    </div>

                    <!-- City -->
                    <div class="col-md-4">
                        <label class="form-label">{{ __('item.city')}}</label>
                        <select class="form-select" aria-label=".form-select-sm" name="city" id="state">
                            <option value="0">{{ __('item.choose_city')}}</option>
                        </select>
                    </div>

                    <div class="row col-md-12 d-flex mt-5">
                        <div class="col-md-6">
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="prepayment">
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.prepayment')}}</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="cash_on_delivery">
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.cash_on_delivery')}}</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="self_pickup">
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.self_pickup')}}</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="city_delivery">
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.city_delivery')}}</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="country_delivery">
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('item.country_delivery')}}</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="int_delivery">
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
											<img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="/images/misc/no-photo-3.jpg" alt="">
										</span>
                            </label>
                            <!-- Upload button -->
                            <input class="form-control" type="file" id="formFile" name="image" required>
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
                        <input type="button" class="btn btn-light mb-0 me-2" onclick="history.back();" value="{{ __('general.back')}}">
                        <button type="submit" class="btn btn-primary mb-0">{{ __('general.save')}}</button>
                    </div>
                </form>
            </div>
            <!-- Card body END -->
        </div>
        <!-- Edit profile END -->
    </div>
@endsection

@push('scripts')

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
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('select[name="country"]').on('change',function(){
                var country_id= $(this).val();
                if (country_id) {
                    $.ajax({
                        url: "{{url('/getStates/')}}/"+country_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data){
                            console.log(data);
                            $('select[name="state"]').empty();
                            $.each(data,function(key,value){
                                $('select[name="state"]').append('<option value="'+key+'">'+value+'</option>');
                            });
                        }
                    });
                }else {
                    $('select[name="state"]').empty();
                }
            });
            $('select[name="state"]').on('change',function(){
                var state_id= $(this).val();
                if (state_id) {
                    $.ajax({
                        url: "{{url('/getCities/')}}/"+state_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data){
                            console.log(data);
                            $('select[name="city"]').empty();
                            $.each(data,function(key,value){
                                $('select[name="city"]').append('<option value="'+key+'">'+value+'</option>');
                            });
                        }
                    });
                }else {
                    $('select[name="city"]').empty();
                }
            });
        });
    </script>


@endpush
