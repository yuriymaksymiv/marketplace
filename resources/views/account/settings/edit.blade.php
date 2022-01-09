@extends('layouts.account_app')
@section('content')

    <div class="col-xl-9">
        @if (session('status') == "password-updated")
            <div class="alert alert-success alert-dismissible fade show">
                {{ __('message.password_updated')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('status') == "profile-information-updated")
            <div class="alert alert-success alert-dismissible fade show">
                {{ __('message.data_updated')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('msg') == "image-updated")
            <div class="alert alert-success alert-dismissible fade show">
                {{ __('message.image_updated')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('msg') == "data-updated")
            <div class="alert alert-success alert-dismissible fade show">
                {{ __('message.data_updated')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Edit profile START -->
        <div class="card bg-transparent border rounded-3">
            <!-- Card header -->
            <div class="card-header bg-transparent border-bottom">
                <h3 class="card-header-title mb-0">{{ __('profile.settings')}}</h3>
            </div>
            <!-- Card body START -->
            <div class="card-body">
                <!-- Form -->
                <form class="row g-4" method="post" action="{{route('user-profile-information.update')}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Title -->
                    <div class="col-md-5">
                        <label class="form-label">{{ __('profile.name')}}<span class="text-danger"> *</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autocomplete="name" autofocus>
                        </div>
                    </div>
                <!-- End Title -->
                <!-- Phone -->
                <div class="col-md-3">
                    <label class="form-label">{{ __('profile.phone')}}<span class="text-danger"> *</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="phone" value="{{ old('phone') ?? auth()->user()->phone }}" required autocomplete="phone" autofocus>
                    </div>
                </div>
                <!-- End Phone -->
                <!-- Email -->
                <div class="col-md-4">
                    <label class="form-label">E-mail<span class="text-danger"> *</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autocomplete="email" autofocus>
                    </div>
                </div>
                <!-- End Phone -->


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

        <!-- Edit profile IMAGE -->
        <div class="card bg-transparent border rounded-3 mt-4">
                <!-- Card body START -->
                <div class="card-body">
                    <!-- Form -->
                    <form class="row g-4" method="post" action="{{route('profile-image.update')}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                        <!-- Profile picture -->
                        <div class="col-12 justify-content-center align-items-center d-flex justify-content-between">
                            <div class="col-md-12">
                                <label class="form-label">{{ __('profile.image')}}</label>
                                    <div class="d-flex align-items-center">
                                        <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                                            <!-- Avatar place holder -->
                                            <span class="avatar avatar-xl">
                                                    <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ Auth::user()->image }}" alt="">
                                            </span>
                                </label>
                                    <!-- Upload button -->
                                <input class="form-control" type="file" id="formFile" name="image" autocomplete="image" required autofocus>
                                </div>
                            </div>
                        </div>
                        <!-- Save button -->
                        <div class="d-sm-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary mb-0">{{ __('general.save')}}</button>
                        </div>


                    </form>
                </div>
                <!-- Card body END -->
            </div>
        <!-- Edit profile IMAGE -->

        <div class="row g-4 mt-1">
            <!-- Social media profile START -->
            <div class="col-lg-6">
                <form class="g-4" method="post" action="{{route('social-media.update')}}">
                @csrf
                @method('PUT')
                <div class="card bg-transparent border rounded-3">
                    <!-- Card header -->
                    <div class="card-header bg-transparent border-bottom">
                        <h5 class="card-header-title mb-0">Social media profile</h5>
                    </div>
                    <!-- Card body START -->
                    <div class="card-body">

                        <!-- Site username -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-globe text-dark me-2"></i>{{ __('profile.enter_site') }}</label>
                            <input class="form-control" type="text" name="site" value="{{ old('site') ?? auth()->user()->site }}" autocomplete="site" autofocus>
                        </div>

                        <!-- Instagram username -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fab fa-instagram text-instagram-gradient me-2"></i>{{ __('profile.enter_instagram_username') }}</label>
                            <input class="form-control" type="text" name="instagram" value="{{ old('instagram') ?? auth()->user()->instagram }}" autocomplete="instagram" autofocus>
                        </div>

                        <!-- Telegram username -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fab fa-telegram text-twitter me-2"></i>{{ __('profile.enter_telegram_username') }}</label>
                            <input class="form-control" type="text" name="telegram" value="{{ old('telegram') ?? auth()->user()->telegram }}" autocomplete="telegram" autofocus>
                        </div>

                        <!-- Facebook username -->
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-facebook text-facebook me-2"></i>{{ __('profile.enter_facebook_username') }}</label>
                            <input class="form-control" type="text" name="facebook" value="{{ old('facebook') ?? auth()->user()->facebook }}" autocomplete="facebook" autofocus>
                        </div>

                        <!-- Twitter username -->
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-twitter text-twitter me-2"></i>{{ __('profile.enter_twitter_username') }}</label>
                            <input class="form-control" type="text" name="twitter" value="{{ old('twitter') ?? auth()->user()->twitter }}" autocomplete="twitter" autofocus>
                        </div>




                        <!-- Button -->
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary mb-0">{{ __('general.save')}}</button>
                        </div>
                    </div>
                    <!-- Card body END -->
                </div>
                </form>
            </div>

            <!-- Social media profile END -->


            <!-- Password change START -->
            <div class="col-lg-6">
                <form method="POST" action="{{ route('user-password.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="card border bg-transparent rounded-3">
                    <!-- Card header -->
                    <div class="card-header bg-transparent border-bottom">
                        <h5 class="card-header-title mb-0">Update password</h5>
                    </div>
                    <!-- Card body START -->
                    <div class="card-body">
                        <!-- Current password -->
                        <div class="mb-3">
                            <label class="form-label">Current password</label>
                            <input class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" type="password" name="current_password" required autofocus placeholder="Enter current password">
                            @error('current_password', 'updatePassword')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!-- New password -->
                        <div class="mb-3">
                            <label class="form-label"> Enter new password</label>
                            <div class="input-group">
                                <input class="form-control @error('password', 'updatePassword') is-invalid @enderror" type="password" name="password" placeholder="Enter new password">
                                @error('password', 'updatePassword')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="rounded mt-1" id="psw-strength"></div>
                        </div>
                        <!-- Confirm password -->
                        <div>
                            <label class="form-label">Confirm new password</label>
                            <input class="form-control" type="password" name="password_confirmation" placeholder="Enter new password">
                        </div>
                        <!-- Button -->
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary mb-0">{{ __('general.change_password')}}</button>
                        </div>
                    </div>
                    <!-- Card body END -->
                </div>
                </form>
            </div>
            <!-- Password change end -->
        </div>
    </div>
@endsection
