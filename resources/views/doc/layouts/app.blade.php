<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') == 'en' }}">
<head>
    <title>White paper - Inspiga</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="{{ asset('assets/vendor/font-awesome/css/all.min.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('doc/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('doc/assets/css/style-custom.css')}}" rel="stylesheet">
    <link href="{{ asset('doc/assets/css/doc.css')}}" rel="stylesheet">
    <link href="{{ asset('doc/assets/css/prism.css')}}" rel="stylesheet">
    <link href="{{ asset('doc/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
    <!-- Navbar top START -->
    <div class="navbar-top bg-dark px-3 px-sm-4 px-md-5">
        <div class="d-flex justify-content-between align-items-center">
            <!-- Logo START -->
            <a class="navbar-brand py-3" href="/docs">
                <img class="navbar-brand-item h-30px" src="/images/misc/logo-white.png" alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Navbar right -->
            <div>
                <ul class="text-end list-inline m-0">
                    <li class="list-inline-item me-2 me-md-4"> <a class="text-white" href="/marketplace">{{ __('general.marketplace') }}</a> </li>
                    <li class="list-inline-item dropdown me-4">
                        @if ( Config::get('app.locale') == 'en')
                            <a class="nav-link text-white dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</a>
                        @elseif ( Config::get('app.locale') == 'ru' )
                            <a class="nav-link text-white dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RU</a>
                        @elseif ( Config::get('app.locale') == 'uk' )
                            <a class="nav-link text-white dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UA</a>
                        @endif
                        <ul class="dropdown-menu" aria-labelledby="accounntMenu">

                            <li> <a class="dropdown-item" href="{{ route('locale', ['locale' => 'en']) }}"><img src="/images/language/en.png" width="22"><span class="ms-2 text-dark">English</span></a></li>
                            <li> <hr class="dropdown-divider"></li>
                            <li> <a class="dropdown-item" href="{{ route('locale', ['locale' => 'ru']) }}"><img src="/images/language/ru.png" width="22"><span class="ms-2 text-dark">Русский</span></a></li>
                            <li> <hr class="dropdown-divider"></li>
                            <li> <a class="dropdown-item" href="{{ route('locale', ['locale' => 'uk']) }}"><img src="/images/language/ua.png" width="22"><span class="ms-2 text-dark">Українська</span></a></li>
                        </ul>

                    </li>
                    <li class="list-inline-item text-white"> <span class="badge bg-danger text-white">v1.0.0 Beta</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Navbar top END -->

    <div class="container-fluid px-0">
        <div class="page-wrapper">
            <!-- Left sidebar START -->
            <nav class="navbar navbar-expand-sm navbar-light bg-light px-3">
                <a class="navbar-brand py-2 d-sm-none" href="#">Doc nav</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#docNav" aria-controls="docNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="docNav">
                    <div class="left-sidebar bg-light">
                        <div class="content h-100vh">
                            <div class="list-group list-group-borderless ms-4 p-3 p-md-4">
                                <a class="list-group-item" href="/docs">{{ __('doc.project_overview') }}</a>
                                <a class="list-group-item" href="/docs/roadmap">{{ __('doc.roadmap') }}</a>
                                <b class="text-dark text-uppercase mt-3 mb-2">{{ __('doc.education_hub') }}</b>
                                <a class="list-group-item" href="/docs/binance">{{ __('doc.how_to_register_on_binance') }}</a>


                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Left sidebar END -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-9 col-sm-12">

            <!-- Main content START -->
                @yield('content')
            <!-- Main content END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- =======================
JavaScripts -->

<!-- Bootstrap JS -->
<script src="{{asset('doc/assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('doc/assets/js/simple-scrollbar.min.js')}}"></script>
<script src="{{asset('doc/assets/js/prism.js')}}"></script>
<script src="{{asset('doc/assets/js/clipboard.min.js')}}"></script>

<!-- Template Functions -->
<script src="{{asset('doc/assets/js/functions.js')}}"></script>

</body>
</html>
