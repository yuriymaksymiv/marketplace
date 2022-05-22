@extends('marketplace.layouts.auth')
@section('content')

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

            <div class="container-fluid">
                <div class="row">
                    <!-- left -->
                    <div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                        <div class="p-3 p-lg-5">
                            <!-- Title -->
                            <div class="text-center">
                                <h2 class="fw-bold">Welcome to INSPIGA</h2>
                                <p class="mb-0 h5 fw-light">Crypto Marketplace</p>
                            </div>
                            <!-- SVG Image -->
                            <img src="/images/background/15.png" class="mt-5" alt="">
                            <!-- Info -->
                            <div class="d-sm-flex mt-5 align-items-center justify-content-center">
                                <ul class="avatar-group mb-2 mb-sm-0">

                                </ul>
                                <!-- Content -->
                                <p class="mb-0 h6 fw-light ms-0 ms-sm-3">Отримуйте INS токени безкоштовно за кожний розміщений товар на Inspiga MarketPlace</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="col-12 col-lg-6 m-auto">
                        <div class="row my-5">
                            <div class="col-sm-10 col-xl-8 m-auto">
                                <!-- Title -->
                                {{--                                <img src="assets/images/element/03.svg" class="h-40px mb-2" alt="">--}}
                                <h2>Вхід</h2>
                                <p class="lead mb-4">Приємно вас бачити! Будь ласка, увійдіть у свій обліковий запис.</p>

                                <!-- Form START -->
                                <form method="post" action="{{ route('login') }}">
                                    @csrf
                                    <!-- Email -->
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label">Email address *</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
                                            <input type="email" name='email' class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="mb-4">
                                        <label for="inputPassword5" class="form-label">Password *</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                                            <input type="password" name='password'  class="form-control border-0 bg-light rounded-end ps-1 @error('password') is-invalid @enderror" placeholder="password" id="inputPassword5">
                                        </div>
                                        <div id="passwordHelpBlock" class="form-text">
                                            Your password must be 8 characters at least
                                        </div>
                                    </div>
                                    <!-- Check box -->
{{--                                    <div class="mb-4 d-flex justify-content-between mb-4">--}}
{{--                                        <div class="form-check">--}}
{{--                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="text-primary-hover">--}}
{{--                                            <a href="forgot-password.html" class="text-secondary">--}}
{{--                                                <u>Forgot password?</u>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="mb-4 mt-4">
                                        <div class="col-md-6"> {!! htmlFormSnippet() !!}
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span class="help-block small text-danger">{{ $errors->first('g-recaptcha-response') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="align-items-center mt-0">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary mb-0">{{ __('Login') }}</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form END -->


                                <!-- Sign up link -->
                                <div class="mt-4 text-center">
                                    <span>Already have an account?<a href="/register"> Sign in here</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
