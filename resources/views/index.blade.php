<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Tastynas - Inovator Cemilan Sehat dari Nanas</title>

    <meta name="keywords" content="Delipel-Tastynas" />
    <meta name="description" content="Delipel - Tastynas Subang , Inovator Makanan Sehat dari Olahan Nanas">
    <meta name="author" content="Tastynas">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">
    <!-- Preload Font -->

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <script>
        WebFontConfig = {
            google: {
                families: ['Lato:300,400,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>


    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">

    <!-- Plugin CSS File -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo8.min.css">
</head>

<body class="home">
    <div class="page-wrapper">
        @include('partials.navbar')
        <!-- End Header -->
        @yield('main')
        <!-- End Main -->
        @include('partials.footer')
        <!-- End Footer -->
    </div>
    <!-- Sticky Footer -->
    {{-- <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo8.html" class="sticky-link">
            <i class="p-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="account.html" class="sticky-link">
            <i class="p-icon-user-solid"></i>
            <span>Account</span>
        </a>
    </div> --}}
    <!-- Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i
            class="p-icon-arrow-up"></i>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10"
                cx="35" cy="35" r="34" style="stroke-dasharray: 108.881, 400;"></circle>
        </svg>
    </a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End Overlay -->
        <a class="mobile-menu-close" href="#"><i class="p-icon-times"></i></a>
        <!-- End CloseButton -->
        <div class="mobile-menu-container scrollable">
            <a href="demo8.html" class="logo">
                <img src="assets/images/second-logo.jpg" alt="logo" width="171" height="41">
            </a>
            <!-- End Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="demo8.html">Home</a>
                </li>
                <li>
                    <a href="demo8.html">Our Story</a>
                </li>
                <li>
                    <a href="#">Where To Buy ?</a>
                </li>
                <li>
                    <a href="blog.html">FAQ</a>
                </li>
                <li>
                    <a href="#">News</a>
                    <ul>
                        <li><a href="about.html">About Tastynas</a></li>
                        <li><a href="contact.html">About Subang</a></li>
                    </ul>
                </li>
            </ul>
            <!-- End MobileMenu -->
        </div>
    </div>
    <!-- Plugins JS File -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets/vendor/jquery.floating/jquery.floating.min.js') }}"></script>
    <script src="assets/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
</body>

</html>
