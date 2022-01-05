@extends('landing.layouts.app')
@section('content')
    @include('landing.layouts.top-menu-light')
    <!-- content begin -->
    <div class="align-items-center" style="padding-top: 180px"  id="content">

        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <form name="contactForm" class="form-border" method="post" action="{{ route('login') }}">
                            @csrf
                            <h3>Login to your account</h3>

                            <div class="field-set">
                                <label>Email</label>
                                <input type='email' name='email' id='email' class="form-control" placeholder="">
                            </div>


                            <div class="field-set">
                                <label>Password</label>
                                <input type='password' name='password' id='password' class="form-control" @error('password') is-invalid @enderror" placeholder="" required autocomplete="current-password">
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">
                                {{ __('Login') }}
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection
