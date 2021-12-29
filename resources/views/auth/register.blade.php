@extends('layouts.app')
@section('content')
    @include('layouts.top-menu-light')
    <!-- content begin -->
    <div class="content" style="padding-top: 180px">
        <div id="top"></div>



        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>Don't have an account? Register now.</h3>

                        <div class="spacer-10"></div>

                        <form name="contactForm" class="form-border" method="post" action="{{ route('register') }}">
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Name:</label>
                                        <input type='text' name='name' id='name' class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Email Address:</label>
                                        <input type='email' name='email' id='email' class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>{{ __('Password') }}</label>
                                        <input type='password' name='password' id='password' class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>{{ __('Confirm Password') }}</label>
                                        <input type='password' name='password_confirmation' id='password-confirm' class="form-control">
                                    </div>
                                </div>


                                <div class="col-md-12">

                                    <button type="submit" class="btn btn-primary mt-4">
                                        {{ __('Register') }}
                                    </button>

                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- content close -->
@endsection
