@extends('marketplace.layouts.app')
@section('content')
    <main>
        <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

            <div class="container-fluid">
                <div class="row">
                    <!-- left -->

                    <!-- Right -->
                    <div class="col-12 col-lg-6 m-auto">
                        <div class="row my-5">
                            <div class="col-sm-10 col-xl-8 m-auto">
                                <!-- Title -->
                                <span class="mb-0 fs-1">👋</span>
                                <h1 class="fs-2">Login into INSPIGA!</h1>
                                <p class="lead mb-4">Nice to see you! Please log in with your account.</p>

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
                                            <input type="password" name='password' class="form-control border-0 bg-light rounded-end ps-1 @error('password') is-invalid @enderror" placeholder="password" id="inputPassword5">
                                        </div>
                                        <div id="passwordHelpBlock" class="form-text">
                                            Your password must be 8 characters at least
                                        </div>
                                    </div>

                                    <div class="mb-4 mt-4">
                                        <div class="col-md-6"> {!! htmlFormSnippet() !!}
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span class="help-block small text-danger">{{ $errors->first('g-recaptcha-response') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Check box -->
                                    <div class="mb-4 d-flex justify-content-between mb-4">
{{--                                        <div class="form-check">--}}
{{--                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="text-primary-hover">--}}
{{--                                            <a href="forgot-password.html" class="text-secondary">--}}
{{--                                                <u>Forgot password?</u>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
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
{{--                                <div class="mt-4 text-center">--}}
{{--                                    <span>Don't have an account? <a href="sign-up.html">Signup here</a></span>--}}
{{--                                </div>--}}
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
    </main>
@endsection
