@extends('landing.layouts.app')
@section('content')
    @include('landing.layouts.top-menu-light')
    <!-- content begin -->
    <div class="align-items-center" style="padding-top: 180px"  id="content">

        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="mb-4">
                            <p class="fs-4 mb-0">You must verify your email address</p>
                            <p class="fs-4">Please check your email for a verification link</p>
                        </div>
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">Resend link</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
@endsection
