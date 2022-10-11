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
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icons/tastynas-favicon.png') }}">
    <!-- Preload Font -->

    <link rel="preload" href="{{ asset('assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2') }}" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preload" href="{{ asset('assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2') }}"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/leaflet.css') }}">

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


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.min.css') }}">

    <!-- Plugin CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo8.min.css') }}">
</head>

<body class="home">
    <div class="page-wrapper">
        @include('partials.navbar')
        <!-- End Header -->
        <main class="main">
            <div class="page-content">
                @yield('main')
            </div>
        </main>
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
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="p-icon-arrow-up"></i>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35"
                cy="35" r="34" style="stroke-dasharray: 108.881, 400;"></circle>
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
                <img src="{{ asset('assets/images/second-logo.jpg') }}" alt="logo" width="171" height="41">
            </a>
            <!-- End Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ url('our') }}">Our Story</a>
                </li>
                <li>
                    <a href="{{ url('where') }}">Where To Buy ?</a>
                </li>
                <li>
                    <a href="{{ url('faq') }}">FAQ</a>
                </li>
                <li>
                    <a href="#">News</a>
                    <ul>
                        <li><a href="{{ url('news/tastynas') }}">About Tastynas</a></li>
                        <li><a href="{{ url('news/subang') }}">About Subang</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
            <!-- End MobileMenu -->
        </div>
    </div>
    @if ($active == 'home')
        @if ($event)
            @foreach ($event as $item)
                <div class="newsletter-popup mfp-hide" id="newsletter-popup">
                    <figure>
                        <a href="{{ $item->link_event }}">
                            <img src="{{ asset('storage/' . $item->poster) }}" width="500" height="269"
                                alt="newsletter">
                        </a>
                    </figure>
                    <div class="newsletter-content">
                        <div class="form-checkbox">
                            <input style="display: none" type="checkbox" id="hide-newsletter-popup"
                                name="hide-newsletter-popup" required="">
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    @endif
    <!-- Plugins JS File -->
    {{-- <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.floating/jquery.floating.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/elevatezoom/jquery.elevatezoom.min.js') }}"></script>
    <script src="{{ asset('assets/js/leaflet.js') }}"></script>
    <script src="{{ asset('assets/js/maps.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
</body>

</html>
