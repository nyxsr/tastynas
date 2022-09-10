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
        <main class="main">
            <div class="page-content">
                <section class="intro-section">
                    <video playsinline autoplay muted loop class="videoHeader" id="bgvid">
                        <source src="{{ asset('assets/header2.mp4') }}" type="video/mp4">
                    </video>
                </section>
                <section class="best-section container appear-animate">
                    <div class="gridder">
                        <img src="{{ asset('assets/images/Untitled.png') }}" alt="bigLogo Tastynas" class="bigLogoTop">
                        <img src="{{ asset('assets/images/Untitled.png') }}" alt="bigLogo Tastynas" class="bigLogoSide">
                        <div class="bigTitle">
                            <h2 class="title with-double mt-4 mb-10">
                                <span class="pb-8">Apa itu <span class="bold-tastynas">Delipel-Tastynas</span>?</span>
                            </h2>
                        </div>
                        <div class="content">
                            <p class=""><span style="font-weight:600">Delipel-Tastynas</span> merupakan salah satu
                                inovasi produk homemade kuliner olahan buah nanas Subang dalam bidang bakery serta
                                olahan makanan minuman lainnya, yang diproduksi setiap hari dengan menggunakan
                                bahan-bahan berkualitas sehingga menghadirkan ragam produk kuliner yang dapat dijadikan
                                camilan sehat, lezat, dan kaya akan serat buah nanas serta dikemas dengan desain modern
                                dan elegan, sehingga sangat cocok juga dijadikan sebagai "Oleh-oleh Khas kota Subang,
                                bercitarasa homemade dengan nuansa modern"</p>
                            <div class="sub-content">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" fill="#fabf01" style="enable-background:new 0 0 512 512;width:10rem" xml:space="preserve">
                                    <g>
                                      <g>
                                        <path d="M226.932,399.948c-19.96,18.445-47.567,22.576-72.053,10.786c-8.852-4.263-16.322-10.149-22.17-17.199l-33.341,73.744
                                              c-1.517,3.355,0.177,5.884,0.975,6.815c0.798,0.93,3.039,2.989,6.585,2.003l24.272-6.756c2.766-0.769,5.562-1.14,8.319-1.14
                                              c11.631,0,22.578,6.583,27.849,17.492l10.962,22.685c1.601,3.315,4.604,3.646,5.854,3.621c1.226-0.016,4.242-0.414,5.758-3.769
                                              l53.033-117.304C237.148,392.603,231.63,395.606,226.932,399.948z"/>
                                      </g>
                                    </g>
                                    <g>
                                      <g>
                                        <path d="M412.631,467.279l-33.341-73.744c-5.848,7.051-13.318,12.937-22.17,17.199c-24.487,11.79-52.093,7.659-72.053-10.786
                                              c-4.698-4.342-10.216-7.345-16.045-9.022l53.033,117.304c1.517,3.356,4.533,3.753,5.758,3.769c1.25,0.025,4.253-0.306,5.854-3.621
                                              l10.962-22.685c5.27-10.909,16.218-17.492,27.849-17.492c2.757,0,5.554,0.371,8.319,1.14l24.272,6.756
                                              c3.546,0.987,5.788-1.072,6.585-2.003C412.454,473.162,414.148,470.633,412.631,467.279z"/>
                                      </g>
                                    </g>
                                    <g>
                                      <g>
                                        <path d="M438.821,207.791c-27.69-18.96-36.282-56.605-19.56-85.702c10.051-17.491,4.82-34.775-3.427-45.118
                                              c-8.248-10.34-23.936-19.285-43.223-13.38c-32.084,9.827-66.877-6.925-79.201-38.141C286.002,6.686,269.227,0,256,0
                                              c-13.227,0-30.002,6.686-37.41,25.451c-12.324,31.217-47.114,47.967-79.201,38.141c-19.289-5.904-34.974,3.039-43.223,13.38
                                              c-8.247,10.343-13.478,27.625-3.427,45.118c16.722,29.096,8.13,66.742-19.56,85.702c-16.646,11.399-19.431,29.24-16.489,42.136
                                              c2.942,12.896,13.194,27.761,33.137,30.808c33.174,5.068,57.248,35.256,54.809,68.727c-1.468,20.121,10.745,33.423,22.662,39.163
                                              c11.918,5.739,29.932,6.995,44.748-6.698c12.322-11.387,28.141-17.083,43.953-17.083c15.818,0,31.628,5.693,43.952,17.083
                                              c14.818,13.694,32.833,12.438,44.75,6.698c11.917-5.739,24.129-19.041,22.662-39.162c-2.439-33.471,21.635-63.659,54.809-68.728
                                              c19.943-3.047,30.193-17.913,33.137-30.808C458.252,237.03,455.465,219.189,438.821,207.791z M256,335.923
                                              c-72.575,0-131.619-59.044-131.619-131.619S183.424,72.684,256,72.684c72.576,0,131.619,59.044,131.619,131.619
                                              C387.618,276.878,328.575,335.923,256,335.923z"/>
                                      </g>
                                    </g>
                                    <g>
                                      <g>
                                        <path d="M255.999,97.225c-59.044,0-107.079,48.036-107.079,107.079c0,59.043,48.034,107.079,107.079,107.079
                                              s107.079-48.036,107.079-107.079S315.043,97.225,255.999,97.225z M310.874,193.922l-66.642,48.675
                                              c-2.115,1.545-4.653,2.362-7.237,2.362c-0.666,0-1.335-0.054-2.001-0.164c-3.249-0.537-6.147-2.358-8.041-5.054l-19.934-28.382
                                              c-3.895-5.547-2.556-13.2,2.989-17.095c5.546-3.895,13.198-2.557,17.094,2.989l12.75,18.154l56.548-41.302
                                              c5.473-3.995,13.15-2.803,17.146,2.671C317.543,182.248,316.346,189.924,310.874,193.922z"/>
                                      </g>
                                    </g>
                                  </svg>
                                <p>Upaya kami dalam menjaga mutu pangan : Penggunaan bahan baku yang berkualitas, konsisten dalam memperpanjang halal setiap habis masa berlaku, serta menjaga higienitas sarana & prasarana produksi & sanitasi tempat di lingkungan sekitar.</p>
                            </div>
                            <div class="sub-content mt-5">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 360 360" style="enable-background:new 0 0 512 512; width:10rem" fill="#fabf01" xml:space="preserve">
                                    <g id="XMLID_232_">
                                      <g id="XMLID_233_">
                                        <circle id="XMLID_235_" cx="164.999" cy="120.012" r="45"/>
                                      </g>
                                      <g id="XMLID_236_">
                                        <path id="XMLID_237_" d="M165,165.013c-38.659,0-70,31.337-70,70h139.999C234.999,196.35,203.658,165.013,165,165.013z"/>
                                      </g>
                                      <g id="XMLID_238_">
                                        <path id="XMLID_239_" d="M355.606,334.381l-63.854-63.855C315.619,241.903,330,205.107,330,165.013c0-90.981-74.019-165-165-165
                                              S0,74.031,0,165.013s74.019,165,165,165c40.107,0,76.914-14.391,105.541-38.271l63.853,63.853
                                              c2.929,2.929,6.768,4.393,10.606,4.393s7.678-1.464,10.606-4.393C361.465,349.736,361.465,340.239,355.606,334.381z M30,165.013
                                              c0-74.439,60.561-135,135-135s135,60.561,135,135c0,74.439-60.561,135-135,135S30,239.452,30,165.013z"/>
                                      </g>
                                    </g>
                                  </svg>
                                <p>Untuk sistem perekrutan SDM, kami memberdayakan muda-mudi / ibu2 berusia produktif yang tidak terserap oleh pabrik / kantoran dikarenakan jenjang pendidikan / keterbatasan tertentu (kaum difable)</p>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- <section class="banner-section appear-animate" style="background: #f8f8f8;">
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
                                        <img class="layer" src="images/demos/demo8/banner/banner5-leaf.png"
                                            width="118" height="138" alt="leaf img" />
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
                        <input type="email" name="email" id="email" placeholder="Your email address..."
                            required="">
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
                                        <img src="images/products/393x491.jpg" alt="product" width="393"
                                            height="491">
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
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                            title="Add to wishlist"><i class="p-icon-heart-solid"></i></a>
                                        <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="p-icon-cart-solid"></i><span>Add to cart</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview"
                                            title="Quick View"><i class="p-icon-search-solid"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .product -->
                        </div>
                        <div class="product-wrap">
                            <div class="product product-slideup-content text-center">
                                <figure class="product-media shadow-media">
                                    <a href="product-simple.html">
                                        <img src="images/products/393x491.jpg" alt="product" width="393"
                                            height="491">
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
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                            title="Add to wishlist"><i class="p-icon-heart-solid"></i></a>
                                        <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="p-icon-cart-solid"></i><span>Add to cart</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview"
                                            title="Quick View"><i class="p-icon-search-solid"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .product -->
                        </div>
                        <div class="product-wrap">
                            <div class="product product-slideup-content text-center">
                                <figure class="product-media shadow-media">
                                    <a href="product-simple.html">
                                        <img src="images/products/393x491.jpg" alt="product" width="393"
                                            height="491">
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
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                            title="Add to wishlist"><i class="p-icon-heart-solid"></i></a>
                                        <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="p-icon-cart-solid"></i><span>Add to cart</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview"
                                            title="Quick View"><i class="p-icon-search-solid"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .product -->
                        </div>
                        <div class="product-wrap">
                            <div class="product product-slideup-content text-center">
                                <figure class="product-media shadow-media">
                                    <a href="product-simple.html">
                                        <img src="images/products/393x491.jpg" alt="product" width="393"
                                            height="491">
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
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                            title="Add to wishlist"><i class="p-icon-heart-solid"></i></a>
                                        <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="p-icon-cart-solid"></i><span>Add to cart</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview"
                                            title="Quick View"><i class="p-icon-search-solid"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .product -->
                        </div>
                        <div class="product-wrap">
                            <div class="product product-slideup-content text-center">
                                <figure class="product-media shadow-media">
                                    <a href="product-simple.html">
                                        <img src="images/products/393x491.jpg" alt="product" width="393"
                                            height="491">
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
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                            title="Add to wishlist"><i class="p-icon-heart-solid"></i></a>
                                        <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="p-icon-cart-solid"></i><span>Add to cart</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview"
                                            title="Quick View"><i class="p-icon-search-solid"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .product -->
                        </div>
                        <div class="product-wrap">
                            <div class="product product-slideup-content text-center">
                                <figure class="product-media shadow-media">
                                    <a href="product-simple.html">
                                        <img src="images/products/393x491.jpg" alt="product" width="393"
                                            height="491">
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
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                            title="Add to wishlist"><i class="p-icon-heart-solid"></i></a>
                                        <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="p-icon-cart-solid"></i><span>Add to cart</span></a>
                                        <a href="#" class="btn-product-icon btn-quickview"
                                            title="Quick View"><i class="p-icon-search-solid"></i></a>
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
                                <img src="images/elements/slider/brand/brand1.png" alt="user" width="163"
                                    height="47" />
                            </figure>
                            <figure class="">
                                <img src="images/elements/slider/brand/brand2.png" alt="user" width="121"
                                    height="51" />
                            </figure>
                            <figure class="">
                                <img src="images/elements/slider/brand/brand3.png" alt="user" width="154"
                                    height="39" />
                            </figure>

                            <figure class="">
                                <img src="images/elements/slider/brand/brand4.png" alt="user" width="144"
                                    height="37" />
                            </figure>
                            <figure class="">
                                <img src="images/elements/slider/brand/brand5.png" alt="user" width="138"
                                    height="42" />
                            </figure>
                            <figure class="">
                                <img src="images/elements/slider/brand/brand3.png" alt="user" width="154"
                                    height="39" />
                            </figure>

                        </div>
                    </div>
                </div>
                <div class="gallery-section appear-animate">
                    <div class="owl-carousel owl-theme owl-nav-outer row cols-lg-5 cols-md-3 cols-2"
                        data-owl-options="{
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
                                <img src="images/demos/demo8/gallery/img1.jpg" alt="Instagram" width="320"
                                    height="320" style="background-color: #585f29;">
                            </a>
                        </figure>
                        <figure class="instagram">
                            <a href="#">
                                <img src="images/demos/demo8/gallery/img2.jpg" alt="Instagram" width="320"
                                    height="320" style="background-color: #E9E9EB;">
                            </a>
                        </figure>
                        <figure class="instagram">
                            <a href="#">
                                <img src="images/demos/demo8/gallery/img3.jpg" alt="Instagram" width="320"
                                    height="320" style="background-color: #515254;">
                            </a>
                        </figure>
                        <figure class="instagram">
                            <a href="#">
                                <img src="images/demos/demo8/gallery/img4.jpg" alt="Instagram" width="320"
                                    height="320" style="background-color: #DAA362;">
                            </a>
                        </figure>
                        <figure class="instagram">
                            <a href="#">
                                <img src="images/demos/demo8/gallery/img5.jpg" alt="Instagram" width="320"
                                    height="320" style="background-color: #3E3733;">
                            </a>
                        </figure>
                        <figure class="instagram">
                            <a href="#">
                                <img src="images/demos/demo8/gallery/img6.jpg" alt="Instagram" width="320"
                                    height="320" style="background-color: #DCDDE1;">
                            </a>
                        </figure>
                    </div>
                </div> --}}
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
            <form action="#" class="inline-form">
                <input type="search" name="search" autocomplete="off" placeholder="Search your keyword..."
                    required />
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
                <input type="email" name="email" id="email2" placeholder="Email address here..."
                    required="">
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
