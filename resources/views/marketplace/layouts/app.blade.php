<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inspiga Crypto Marketplace</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="inspiga.com">
    <meta name="description" content="Exchange cryptocurrency for real world products">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

    <!-- Plugins CSS -->
    <link href="{{ asset('assets/vendor/font-awesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/choices/css/choices.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/css/quill.snow.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8H3WRRPMWY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-8H3WRRPMWY');
    </script>
    {!! htmlScriptTagJsApi() !!}
</head>

<body>
@include('marketplace.layouts.header')
@yield('content')


<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

{{--<!-- Vendors -->--}}
<script src="{{asset('assets/vendor/tiny-slider/tiny-slider.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.js')}}"></script>
<script src="{{asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/choices/js/choices.min.js')}}"></script>
<script src="{{asset('assets/vendor/quill/js/quill.min.js')}}"></script>

{{--<!-- Template Functions -->--}}
<script src="{{asset('assets/js/functions.js')}}"></script>

</body>
</html>
