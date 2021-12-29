<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inspiga</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Gigaland - NFT Marketplace Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{ asset('css/bootstrap-grid.min.css')}}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="{{ asset('css/bootstrap-reboot.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.transitions.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/jquery.countdown.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/custom.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/summernote/summernote-bs4.css')}}" rel="stylesheet" type="text/css" />

    <!-- color scheme -->
    <link id="colors" href="{{ asset('css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/coloring.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">

@yield('content')
<!-- ========== END MAIN CONTENT ========== -->

</div>
<!-- Javascript Files
================================================== -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/easing.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/validation.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/enquire.min.js')}}"></script>
<script src="{{asset('js/jquery.plugin.js')}}"></script>
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<script src="{{asset('js/jquery.countdown.js')}}"></script>
<script src="{{asset('js/jquery.lazy.min.js')}}"></script>
<script src="{{asset('js/jquery.lazy.plugins.min.js')}}"></script>
<script src="{{asset('js/designesia.js')}}"></script>
<script src="{{asset('js/particles.js')}}"></script>
<script src="{{asset('js/particles-settings.js')}}"></script>
<script src="{{asset('js/summernote.js')}}"></script>
<script src="{{asset('js/summernote.js')}}"></script>
<script src="{{asset('vendor/summernote/summernote-bs4.js')}}"></script>

<!-- COOKIES NOTICE  -->
<script src="{{asset('js/cookit.js')}}"></script>
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
