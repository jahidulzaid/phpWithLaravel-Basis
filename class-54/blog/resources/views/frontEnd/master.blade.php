<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.codevibrant.com/html/kavya/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 13:13:10 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="48x48" href="{{asset('frontEndAsset')}}/assets
/images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets
/css/bootstrap.min.css" />

    <!-- Fontawesome CSS-->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets
/css/all.css" />

    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets
/css/slick.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets
/css/slick-theme.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets
/css/preloader.css" />
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets
/css/style.css" />
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets
/css/responsive.css" />
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets
/css/dark.css" />

    <title>
        @yield('title')
    </title>

</head>

<body>
<!-- Preloader -->
<div class="preloader-wrapper">
    <div class="preloader">
        <div class="preloader-circle" id="status">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- Preloader end -->
<main class="kavya-home-3">
    @include('frontEnd.include.header')
    <!-- header end -->

    <!-- Banner section -->
    @yield('content')

    <!-- Footer section -->
    @include('frontEnd.include.footer')
    <!-- Footer section end -->
</main>

<!-- Scroll to top -->
<div id="stop" class="scroll-to-top">
    <span><a href="#"><i class="fas fa-arrow-up"></i></a></span>
</div>
<!--  Scroll to top end -->

<!-- Javascript -->
<script src="{{asset('frontEndAsset')}}/assets
/js/jquery-3.4.1.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets
/js/bootstrap.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets
/js/slick.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets
/js/jquery.sticky.js"></script>
<script src="{{asset('frontEndAsset')}}/assets
/js/ResizeSensor.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets
/js/theia-sticky-sidebar.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets
/js/main.js"></script>
</body>


<!-- Mirrored from demo.codevibrant.com/html/kavya/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 13:13:11 GMT -->
</html>
