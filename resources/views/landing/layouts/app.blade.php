<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inspiga</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Account" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{ asset('theme_1/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{ asset('theme_1/css/bootstrap-grid.min.css')}}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="{{ asset('theme_1/css/bootstrap-reboot.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme_1/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme_1/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme_1/css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme_1/css/owl.transitions.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme_1/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme_1/css/jquery.countdown.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme_1/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme_1/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme_1/vendor/summernote/summernote-bs4.css')}}" rel="stylesheet" type="text/css" />

    <!-- color scheme -->
    <link id="colors" href="{{ asset('theme_1/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme_1/css/coloring.css')}}" rel="stylesheet" type="text/css" />

    {!! htmlScriptTagJsApi() !!}
</head>

<body>
<div id="wrapper">

@yield('content')
<!-- ========== END MAIN CONTENT ========== -->

</div>
<!-- Javascript Files
================================================== -->
<script src="{{asset('theme_1/js/jquery.min.js')}}"></script>
<script src="{{asset('theme_1/js/bootstrap.min.js')}}"></script>
<script src="{{asset('theme_1/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('theme_1/js/wow.min.js')}}"></script>
<script src="{{asset('theme_1/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('theme_1/js/easing.js')}}"></script>
<script src="{{asset('theme_1/js/owl.carousel.js')}}"></script>
<script src="{{asset('theme_1/js/validation.js')}}"></script>
<script src="{{asset('theme_1/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('theme_1/js/enquire.min.js')}}"></script>
<script src="{{asset('theme_1/js/jquery.plugin.js')}}"></script>
<script src="{{asset('theme_1/js/jquery.countTo.js')}}"></script>
<script src="{{asset('theme_1/js/jquery.countdown.js')}}"></script>
<script src="{{asset('theme_1/js/jquery.lazy.min.js')}}"></script>
<script src="{{asset('theme_1/js/jquery.lazy.plugins.min.js')}}"></script>
<script src="{{asset('theme_1/js/designesia.js')}}"></script>
<script src="{{asset('theme_1/js/particles.js')}}"></script>
<script src="{{asset('theme_1/js/particles-settings.js')}}"></script>
<script src="{{asset('theme_1/js/summernote.js')}}"></script>
<script src="{{asset('theme_1/js/summernote.js')}}"></script>
<script src="{{asset('theme_1/vendor/summernote/summernote-bs4.js')}}"></script>

<!-- COOKIES NOTICE  -->
<script src="{{asset('theme_1/js/cookit.js')}}"></script>
<script>
    $(document).ready(function() {
        $.cookit({
            backgroundColor: '#EEEEEE',
            messageColor: '#333333',
            linkColor: '#403f83',
            buttonColor: '#403f83',
            messageText: "This website uses cookies to ensure you get the best experience on our website.",
            linkText: "Learn more",
            linkUrl: "index.html",
            buttonText: "I accept",
        });

    });


</script>

</body>

</html>
