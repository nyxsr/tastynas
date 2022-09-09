<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Tastynas - Inovator Cemilan Sehat dari Nanas</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Panda - Ultimate eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">
    <!-- Preload Font -->

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <script>
        WebFontConfig = {
            google: { families: ['Lato:300,400,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
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
        <main class="main">
            <div class="page-content">
                <section class="intro-section">
                    <video playsinline autoplay muted loop class="videoHeader" id="bgvid">
                        <source src="{{ asset('assets/header2.mp4') }}" type="video/mp4">
                      </video>
                </section>
                <section class="best-section container mb-10 pb-10 appear-animate">

                </section>
                <section class="banner-section appear-animate" style="background: #f8f8f8;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <h3 class="banner-subtitle text-capitalize mb-3">Organic Store</h3>
                                <h2 class="title title-underline"><span>We believe in working with
                                        accredited farmers</span></h2>
                                <p class="banner-desc mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor ut labore et dolore magna aliqua. Venenatis tellus in metus
                                    vulputate eu sceleris Nunc id cursus metus aliquam.</p>
                                <div class="row mb-6">
                                    <div class="col-6">
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon mr-lg-5">
                                                <i class="p-icon-fruit"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title mb-2">Why Organic?</h4>
                                                <p>Lorem ipsum dolor sit amet cursus metus aliquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon mr-lg-5">
                                                <i class="p-icon-hand-leaf"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title mb-2">Special Products</h4>
                                                <p>Lorem ipsum dolor sit amet cursus metus aliquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="shop.html" class="btn btn-secondary">View Store<i
                                        class="p-icon-arrow-long-right"></i></a>
                            </div>
                            <div class="col-lg-6">
                                <figure class="banner-media">
                                    <img src="images/demos/demo8/banner/banner5-2.png" width="648" height="621"
                                        alt="banner" />
                                    <div class="floating d-xxl-show" data-floating-depth="1">
                                        <img class="layer" src="images/demos/demo8/banner/banner5-leaf.png" width="118"
                                            height="138" alt="leaf img" />
                                    </div>
                                </figure>
                                <img class="act-img skrollr d-xs-show"
                                    data-options='{"data-bottom-top":"transform: translate(0, 0) scale(.6); transform-origin: center;", "data-center":"transform: translate(0, 0) scale(1);"}'
                                    src="images/demos/demo8/banner/banner5-1.png" width="241" height="241"
                                    alt="banner" />
                            </div>
                        </div>
                    </div>
                </section>
                <section class="newsletter-section text-center appear-animate"
                    style="background: url(images/demos/demo8/newsletter.jpg); background-size: cover; background-repeat: no-repeat;">
                    <h2 class="title title-underline underline-center text-white mb-5">
                        <span class="pb-4">Subscribe to Our Newsletter</span>
                    </h2>
                    <p class="text-uppercase text-white mb-7">Get Updates For new Products</p>
                    <form action="#" class="inline-form mx-auto mb-10">
                        <input type="email" name="email" id="email" placeholder="Your email address..." required="">
                        <button class="btn btn-primary ml-2" type="submit">sign up</button>
                    </form>
                    <div class="social-links">
                        <a href="#" title="Facebook" class="social-link fab fa-facebook-f"></a>
                        <a href="#" title="Twitter" class="social-link fab fa-twitter"></a>
                        <a href="#" title="Pinterest" class="social-link fab fa-pinterest"></a>
                        <a href="#" title="Linkedin" class="social-link fab fa-linkedin-in"></a>
                    </div>
                </section>
                <section class="product-section container pt-10 mt-10 pb-10 mb-10 appear-animate">
                    <h3 class="subtitle text-center">EXCLUSIVE SELECTION
                    </h3>
                    <h2 class="title title-underline underline-center with-double mt-4 mb-10">
                        <span class="pb-8">Featured Products</span>
                        <label class="title-duplex">Featured Product</label>
                    </h2>
                    <div class="row cols-md-3 cols-2 gutter-lg" id="products-row">
                        <div class="product-wrap">
                            <div class="product product-slideup-content text-center">
                                <figure class="product-media shadow-media">
                                    <a href="product-simple.html">
                                        <img src="images/products/393x491.jpg" alt="product" width="393" height="491">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                            <i class="p-icon-compare-solid"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h5 class="product-name">
                                        <a href="product-simple.html">
                                            Low-Fat Peanut Oil
                                        </a>
                                    </h5>
                                    <span class="product-price">
                                        <span class="price">$12.00</span>
                                    </span>
                                </div>
                                <div class="product-hide-details">
                                    <div class="product-action">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="p-icon-heart-solid"></i></a>
                                        <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="p-icon-cart-solid"></i><span>Add to cart</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                                class="p-icon-search-solid"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .product -->
                        </div>
                        <div class="product-wrap">
                            <div class="product product-slideup-content text-center">
                                <figure class="product-media shadow-media">
                                    <a href="product-simple.html">
                                        <img src="images/products/393x491.jpg" alt="product" width="393" height="491">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                            <i class="p-icon-compare-solid"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h5 class="product-name">
                                        <a href="product-simple.html">
                                            Greenhouse Broccoli
                                        </a>
                                    </h5>
                                    <span class="product-price">
                                        <span class="price">$12.00</span>
                                    </span>
                                </div>
                                <div class="product-hide-details">
                                    <div class="product-action">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="p-icon-heart-solid"></i></a>
                                        <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="p-icon-cart-solid"></i><span>Add to cart</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                                class="p-icon-search-solid"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .product -->
                        </div>
                        <div class="product-wrap">
                            <div class="product product-slideup-content text-center">
                                <figure class="product-media shadow-media">
                                    <a href="product-simple.html">
                                        <img src="images/products/393x491.jpg" alt="product" width="393" height="491">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                            <i class="p-icon-compare-solid"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h5 class="product-name">
                                        <a href="product-simple.html">
                                            Walnut
                                        </a>
                                    </h5>
                                    <span class="product-price">
                                        <span class="price">$12.00</span>
                                    </span>
                                </div>
                                <div class="product-hide-details">
                                    <div class="product-action">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="p-icon-heart-solid"></i></a>
                                        <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="p-icon-cart-solid"></i><span>Add to cart</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                                class="p-icon-search-solid"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .product -->
                        </div>
                        <div class="product-wrap">
                            <div class="product product-slideup-content text-center">
                                <figure class="product-media shadow-media">
                                    <a href="product-simple.html">
                                        <img src="images/products/393x491.jpg" alt="product" width="393" height="491">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                            <i class="p-icon-compare-solid"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h5 class="product-name">
                                        <a href="product-simple.html">
                                            Milky Choco Cake
                                        </a>
                                    </h5>
                                    <span class="product-price">
                                        <span class="price">$12.00</span>
                                    </span>
                                </div>
                                <div class="product-hide-details">
                                    <div class="product-action">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="p-icon-heart-solid"></i></a>
                                        <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="p-icon-cart-solid"></i><span>Add to cart</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                                class="p-icon-search-solid"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .product -->
                        </div>
                        <div class="product-wrap">
                            <div class="product product-slideup-content text-center">
                                <figure class="product-media shadow-media">
                                    <a href="product-simple.html">
                                        <img src="images/products/393x491.jpg" alt="product" width="393" height="491">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                            <i class="p-icon-compare-solid"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h5 class="product-name">
                                        <a href="product-simple.html">
                                            Crown Daisy
                                        </a>
                                    </h5>
                                    <span class="product-price">
                                        <span class="price">$12.00</span>
                                    </span>
                                </div>
                                <div class="product-hide-details">
                                    <div class="product-action">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="p-icon-heart-solid"></i></a>
                                        <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="p-icon-cart-solid"></i><span>Add to cart</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                                class="p-icon-search-solid"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .product -->
                        </div>
                        <div class="product-wrap">
                            <div class="product product-slideup-content text-center">
                                <figure class="product-media shadow-media">
                                    <a href="product-simple.html">
                                        <img src="images/products/393x491.jpg" alt="product" width="393" height="491">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                            <i class="p-icon-compare-solid"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h5 class="product-name">
                                        <a href="product-simple.html">
                                            Nutri-Grain
                                        </a>
                                    </h5>
                                    <span class="product-price">
                                        <span class="price">$12.00</span>
                                    </span>
                                </div>
                                <div class="product-hide-details">
                                    <div class="product-action">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="p-icon-heart-solid"></i></a>
                                        <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="p-icon-cart-solid"></i><span>Add to cart</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                                class="p-icon-search-solid"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .product -->
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-secondary btn-load" href="ajax/ajax-products-demo8.html"
                            data-load-to="#products-row">View
                            all</a>
                    </div>
                </section>
                <div class="brand-section appear-animate" style="background: url(images/demos/demo8/brand-back.jpg);">
                    <div class="container">
                        <div class="owl-carousel owl-theme owl-nav-outer slider-brand row cols-lg-5 cols-md-3 cols-2"
                            data-owl-options="{
                                                            'nav': false,
                                                            'dots': false,
                                                            'margin': 20,
                                                            'loop': true,
                                                            'autoplay': true,
                                                            'responsive': {
                                                                '0': {
                                                                    'items': 2
                                                                },
                                                                '768': {
                                                                    'items': 3
                                                                },
                                                                '992': {
                                                                    'items': 5
                                                                }
                                                            }
                                                        }">
                            <figure class="">
                                <img src="images/elements/slider/brand/brand1.png" alt="user" width="163" height="47" />
                            </figure>
                            <figure class="">
                                <img src="images/elements/slider/brand/brand2.png" alt="user" width="121" height="51" />
                            </figure>
                            <figure class="">
                                <img src="images/elements/slider/brand/brand3.png" alt="user" width="154" height="39" />
                            </figure>

                            <figure class="">
                                <img src="images/elements/slider/brand/brand4.png" alt="user" width="144" height="37" />
                            </figure>
                            <figure class="">
                                <img src="images/elements/slider/brand/brand5.png" alt="user" width="138" height="42" />
                            </figure>
                            <figure class="">
                                <img src="images/elements/slider/brand/brand3.png" alt="user" width="154" height="39" />
                            </figure>

                        </div>
                    </div>
                </div>
                <div class="gallery-section appear-animate">
                    <div class="owl-carousel owl-theme owl-nav-outer row cols-lg-5 cols-md-3 cols-2" data-owl-options="{
                                        'nav': false,
                                        'dots': false,
                                        'loop': true,
                                        'autoplay': true,
                                        'autoplayTimeout': 7000,
                                        'responsive': {
                                            '0': {
                                                'items': 2
                                            },
                                            '576': {
                                                'items': 4
                                            },
                                            '992': {
                                                'items': 6
                                            }
                                        }
                                    }">
                        <figure class="instagram">
                            <a href="#">
                                <img src="images/demos/demo8/gallery/img1.jpg" alt="Instagram" width="320" height="320"
                                    style="background-color: #585f29;">
                            </a>
                        </figure>
                        <figure class="instagram">
                            <a href="#">
                                <img src="images/demos/demo8/gallery/img2.jpg" alt="Instagram" width="320" height="320"
                                    style="background-color: #E9E9EB;">
                            </a>
                        </figure>
                        <figure class="instagram">
                            <a href="#">
                                <img src="images/demos/demo8/gallery/img3.jpg" alt="Instagram" width="320" height="320"
                                    style="background-color: #515254;">
                            </a>
                        </figure>
                        <figure class="instagram">
                            <a href="#">
                                <img src="images/demos/demo8/gallery/img4.jpg" alt="Instagram" width="320" height="320"
                                    style="background-color: #DAA362;">
                            </a>
                        </figure>
                        <figure class="instagram">
                            <a href="#">
                                <img src="images/demos/demo8/gallery/img5.jpg" alt="Instagram" width="320" height="320"
                                    style="background-color: #3E3733;">
                            </a>
                        </figure>
                        <figure class="instagram">
                            <a href="#">
                                <img src="images/demos/demo8/gallery/img6.jpg" alt="Instagram" width="320" height="320"
                                    style="background-color: #DCDDE1;">
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </main>
        <!-- End Main -->
        <footer class="footer">
            <div class="container">
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 mb-6 mb-lg-0">
                            <div class="widget widget-about">
                                <a href="demo8.html" class="logo-footer mb-5">
                                    <img src="images/demos/demo8/logo-footer.png" alt="logo-footer" width="171"
                                        height="41" />
                                </a>
                                <div class="widget-body pt-0">
                                    <p class="mb-5">Fringilla urna porttitor rhoncus dolor purus
                                        luctus venenatis lectus magna fringilla diam
                                        maecenas ultricies mi eget mauris.
                                    </p>
                                    <a href="mailto:mail@panda.com">panda@example.com</a>
                                </div>
                            </div>
                            <!-- End of Widget -->
                        </div>
                        <div class="col-lg-8col1 col-sm-6 mb-6 mb-lg-0">
                            <div class="widget">
                                <h4 class="widget-title">About us</h4>
                                <ul class="widget-body">
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="#">Order history</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">custom service</a></li>
                                    <li><a href="#">Terms & condition</a></li>
                                </ul>
                            </div>
                            <!-- End of Widget -->
                        </div>
                        <div class="col-lg-8col1 col-sm-6 mb-6 mb-lg-0">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="widget-body">
                                    <li><a href="login.html">sign in</a></li>
                                    <li><a href="cart.html">view cart</a></li>
                                    <li><a href="wishlist.html">my wishlist</a></li>
                                    <li><a href="#">track my order</a></li>
                                    <li><a href="#">help</a></li>
                                </ul>
                            </div>
                            <!-- End of Widget -->
                        </div>
                        <div class="col-lg-8col1 col-sm-6 mb-6 mb-lg-0">
                            <div class="widget">
                                <h4 class="widget-title">Contact info</h4>
                                <ul class="widget-body footer-icon-boxes">
                                    <li>
                                        <a href="tel:#" class="footer-icon-box">
                                            <i class="p-icon-phone-solid"></i>
                                            <span>+456 789 000</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="">
                                            <i class="p-icon-map"></i>
                                            <span>25 West 21th STREET, Miami FL, USA</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:mail@panda.com" class="">
                                            <i class="p-icon-message"></i>
                                            <span>info@panda.com</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="">
                                            <i class="p-icon-clock"></i>
                                            <span>Mon-Fri: 10:00 - 18:00</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End of Widget -->
                        </div>
                    </div>
                </div>
                <!-- End FooterMiddle -->
                <div class="footer-bottom">
                    <div class="footer-left">
                        <p class="copyright">Panda eCommerce © 2022. All Rights Reserved</p>
                    </div>
                    <div class="footer-right">
                        <div class="social-links text-grey">
                            <a href="#" title="facebook" class="social-link fab fa-facebook-f"></a>
                            <a href="#" title="twitter" class="social-link fab fa-twitter"></a>
                            <a href="#" title="pinterest" class="social-link fab fa-pinterest"></a>
                            <a href="#" title="linkedin" class="social-link fab fa-linkedin-in mr-0"></a>
                        </div>
                    </div>
                </div>
                <!-- End FooterBottom -->
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo8.html" class="sticky-link">
            <i class="p-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="shop.html" class="sticky-link">
            <i class="p-icon-category"></i>
            <span>Categories</span>
        </a>
        <a href="wishlist.html" class="sticky-link">
            <i class="p-icon-heart-solid"></i>
            <span>Wishlist</span>
        </a>
        <a href="account.html" class="sticky-link">
            <i class="p-icon-user-solid"></i>
            <span>Account</span>
        </a>
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="p-icon-search-solid"></i>
                <span>Search</span>
            </a>
            <form action="#" class="form-simple">
                <input type="text" name="search" autocomplete="off" placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="p-icon-search-solid"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="p-icon-arrow-up"></i>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 108.881, 400;"></circle>
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
            <form action="#" class="inline-form">
                <input type="search" name="search" autocomplete="off" placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="p-icon-search-solid"></i>
                </button>
            </form>
            <!-- End Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="demo8.html">Home</a>
                </li>
                <li>
                    <a href="shop.html">Shop</a>
                    <ul>
                        <li>
                            <a href="#">
                                Shop Layouts
                            </a>
                            <ul>
                                <li><a href="shop-list.html">Shop list</a></li>
                                <li><a href="shop-3-cols.html">3 Columns mode</a>
                                </li>
                                <li><a href="shop-4-cols.html">4 Columns mode</a></li>
                                <li><a href="shop-5-cols.html">5 Columns mode</a>
                                </li>
                                <li><a href="shop-6-cols.html">6 Columns mode</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Shop Variations
                            </a>
                            <ul>
                                <li><a href="shop-left-sidebar.html">With left sidebar</a>
                                </li>
                                <li><a href="shop-full-width.html">Full width</a>
                                </li>
                                <li><a href="shop-horizontal-filter.html">Horizontal filter</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Product Details
                            </a>
                            <ul>
                                <li><a href="product-simple.html">Default</a></li>
                                <li><a href="product-gallery.html">Gallery</a></li>
                                <li><a href="product-sticky.html">Sticky info</a></li>
                                <li><a href="product-full.html">Full width</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Woo Subpages
                            </a>
                            <ul>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="account.html">My account</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Elements</a>
                    <ul>
                        <li>
                            <a href="#">Elements 1</a>
                            <ul>
                                <li><a href="element-accordions.html">Accordion</a></li>
                                <li><a href="element-alerts.html">Alert & Notification</a></li>
                                <li><a href="element-banner.html">Banner
                                    </a></li>
                                <li><a href="element-banner-effect.html">Banner Effect
                                    </a></li>
                                <li><a href="element-blog.html">Blog</a></li>
                                <li><a href="element-button.html">Button</a></li>
                                <li><a href="element-columns.html">Columns
                                    </a></li>
                                <li><a href="element-countdown.html">Countdown</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 2</a>
                            <ul>
                                <li><a href="element-creative-grid.html">Creative Grid</a></li>
                                <li><a href="element-counter.html">Counter
                                    </a></li>
                                <li><a href="element-entrance-effect.html">Entrance Effect
                                    </a></li>
                                <li><a href="element-mouse-tracking.html">Mouse Tracking Effect
                                    </a></li>
                                <li><a href="element-hotspot.html">Hotspot
                                    </a></li>
                                <li><a href="element-icon-box.html">Icon Box</a></li>
                                <li><a href="element-icons.html">Icon Library</a></li>
                                <li><a href="element-image-box.html">Image box
                                    </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 3</a>
                            <ul>
                                <li><a href="element-image-gallery.html">Image Gallery</a></li>
                                <li><a href="element-categories.html">Category</a></li>
                                <li><a href="element-products.html">Products
                                    </a></li>
                                <li><a href="element-product-banner.html">Products + Banner
                                    </a></li>
                                <li><a href="element-product-tabs.html">Product Tab
                                    </a>
                                </li>
                                <li><a href="element-section.html">Section Divider

                                    </a></li>
                                <li><a href="element-slider.html">Slider
                                    </a></li>
                                <li><a href="element-social.html">Social Icons
                                    </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 4</a>
                            <ul>
                                <li><a href="element-tabs.html">Tabs
                                    </a></li>
                                <li><a href="element-testimonial.html">Testimonial

                                    </a></li>
                                <li><a href="element-title.html">Title</a></li>
                                <li><a href="element-typography.html">Typography
                                    </a></li>
                                <li><a href="element-video.html">Video</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="blog.html">Classic</a></li>
                        <li><a href="blog-single.html">Single Post</a></li>
                        <li><a href="blog-2-grid.html">Grid 2 Columns</a></li>
                        <li><a href="blog-3-grid.html">Grid 3 Columns</a></li>
                        <li><a href="blog-4-grid.html">Grid 4 Columns</a></li>
                        <li><a href="blog-sidebar.html">Grid Sidebar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="account.html">My Account</a></li>
                        <li><a href="faq.html">Faqs</a></li>
                        <li><a href="error.html">Error 404</a></li>
                        <li><a href="coming.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li><a href="https://d-themes.com/buynow/pandahtml/">Buy Panda!</a></li>
            </ul>
            <!-- End MobileMenu -->
        </div>
    </div>
    <div class="newsletter-popup mfp-hide" id="newsletter-popup">
        <figure>
            <img src="images/newsletter-popup.jpg" width="500" height="269" alt="newsletter">
        </figure>
        <div class="newsletter-content">
            <h3>Join Our Mailing List</h3>
            <p>Stay informed! Monthly tips and discount.</p>
            <form action="#" method="get" class="inline-form mx-auto">
                <input type="email" name="email" id="email2" placeholder="Email address here..." required="">
                <button class="btn btn-dark" type="submit">SUBMIT</button>
            </form>
            <div class="form-checkbox">
                <input type="checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup" required="">
                <label for="hide-newsletter-popup">Don't show this popup again</label>
            </div>
            <div class="social-links">
                <a href="#" title="facebook" class="social-link fab fa-facebook-f"></a>
                <a href="#" title="twitter" class="social-link fab fa-twitter"></a>
                <a href="#" title="pinterest" class="social-link fab fa-pinterest"></a>
                <a href="#" title="linkedin" class="social-link fab fa-linkedin-in"></a>
            </div>
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
