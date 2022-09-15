@extends('index')
@section('main')
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
                    <img src="{{ asset('assets/images/logoSide.png') }}" alt="bigLogo Tastynas" class="bigLogoSide">
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
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512 512" fill="#fabf01" style="enable-background:new 0 0 512 512;width:10rem"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M226.932,399.948c-19.96,18.445-47.567,22.576-72.053,10.786c-8.852-4.263-16.322-10.149-22.17-17.199l-33.341,73.744
                                      c-1.517,3.355,0.177,5.884,0.975,6.815c0.798,0.93,3.039,2.989,6.585,2.003l24.272-6.756c2.766-0.769,5.562-1.14,8.319-1.14
                                      c11.631,0,22.578,6.583,27.849,17.492l10.962,22.685c1.601,3.315,4.604,3.646,5.854,3.621c1.226-0.016,4.242-0.414,5.758-3.769
                                      l53.033-117.304C237.148,392.603,231.63,395.606,226.932,399.948z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M412.631,467.279l-33.341-73.744c-5.848,7.051-13.318,12.937-22.17,17.199c-24.487,11.79-52.093,7.659-72.053-10.786
                                      c-4.698-4.342-10.216-7.345-16.045-9.022l53.033,117.304c1.517,3.356,4.533,3.753,5.758,3.769c1.25,0.025,4.253-0.306,5.854-3.621
                                      l10.962-22.685c5.27-10.909,16.218-17.492,27.849-17.492c2.757,0,5.554,0.371,8.319,1.14l24.272,6.756
                                      c3.546,0.987,5.788-1.072,6.585-2.003C412.454,473.162,414.148,470.633,412.631,467.279z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M438.821,207.791c-27.69-18.96-36.282-56.605-19.56-85.702c10.051-17.491,4.82-34.775-3.427-45.118
                                      c-8.248-10.34-23.936-19.285-43.223-13.38c-32.084,9.827-66.877-6.925-79.201-38.141C286.002,6.686,269.227,0,256,0
                                      c-13.227,0-30.002,6.686-37.41,25.451c-12.324,31.217-47.114,47.967-79.201,38.141c-19.289-5.904-34.974,3.039-43.223,13.38
                                      c-8.247,10.343-13.478,27.625-3.427,45.118c16.722,29.096,8.13,66.742-19.56,85.702c-16.646,11.399-19.431,29.24-16.489,42.136
                                      c2.942,12.896,13.194,27.761,33.137,30.808c33.174,5.068,57.248,35.256,54.809,68.727c-1.468,20.121,10.745,33.423,22.662,39.163
                                      c11.918,5.739,29.932,6.995,44.748-6.698c12.322-11.387,28.141-17.083,43.953-17.083c15.818,0,31.628,5.693,43.952,17.083
                                      c14.818,13.694,32.833,12.438,44.75,6.698c11.917-5.739,24.129-19.041,22.662-39.162c-2.439-33.471,21.635-63.659,54.809-68.728
                                      c19.943-3.047,30.193-17.913,33.137-30.808C458.252,237.03,455.465,219.189,438.821,207.791z M256,335.923
                                      c-72.575,0-131.619-59.044-131.619-131.619S183.424,72.684,256,72.684c72.576,0,131.619,59.044,131.619,131.619
                                      C387.618,276.878,328.575,335.923,256,335.923z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M255.999,97.225c-59.044,0-107.079,48.036-107.079,107.079c0,59.043,48.034,107.079,107.079,107.079
                                      s107.079-48.036,107.079-107.079S315.043,97.225,255.999,97.225z M310.874,193.922l-66.642,48.675
                                      c-2.115,1.545-4.653,2.362-7.237,2.362c-0.666,0-1.335-0.054-2.001-0.164c-3.249-0.537-6.147-2.358-8.041-5.054l-19.934-28.382
                                      c-3.895-5.547-2.556-13.2,2.989-17.095c5.546-3.895,13.198-2.557,17.094,2.989l12.75,18.154l56.548-41.302
                                      c5.473-3.995,13.15-2.803,17.146,2.671C317.543,182.248,316.346,189.924,310.874,193.922z" />
                                    </g>
                                </g>
                            </svg>
                            <p>Upaya kami dalam menjaga mutu pangan : Penggunaan bahan baku yang berkualitas, konsisten
                                dalam memperpanjang halal setiap habis masa berlaku, serta menjaga higienitas sarana &
                                prasarana produksi & sanitasi tempat di lingkungan sekitar.</p>
                        </div>
                        <div class="sub-content mt-5">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 360 360" style="enable-background:new 0 0 512 512; width:10rem" fill="#fabf01"
                                xml:space="preserve">
                                <g id="XMLID_232_">
                                    <g id="XMLID_233_">
                                        <circle id="XMLID_235_" cx="164.999" cy="120.012" r="45" />
                                    </g>
                                    <g id="XMLID_236_">
                                        <path id="XMLID_237_"
                                            d="M165,165.013c-38.659,0-70,31.337-70,70h139.999C234.999,196.35,203.658,165.013,165,165.013z" />
                                    </g>
                                    <g id="XMLID_238_">
                                        <path id="XMLID_239_"
                                            d="M355.606,334.381l-63.854-63.855C315.619,241.903,330,205.107,330,165.013c0-90.981-74.019-165-165-165
                                      S0,74.031,0,165.013s74.019,165,165,165c40.107,0,76.914-14.391,105.541-38.271l63.853,63.853
                                      c2.929,2.929,6.768,4.393,10.606,4.393s7.678-1.464,10.606-4.393C361.465,349.736,361.465,340.239,355.606,334.381z M30,165.013
                                      c0-74.439,60.561-135,135-135s135,60.561,135,135c0,74.439-60.561,135-135,135S30,239.452,30,165.013z" />
                                    </g>
                                </g>
                            </svg>
                            <p>Untuk sistem perekrutan SDM, kami memberdayakan muda-mudi / ibu2 berusia produktif yang tidak
                                terserap oleh pabrik / kantoran dikarenakan jenjang pendidikan / keterbatasan tertentu (kaum
                                difable)</p>
                        </div>
                        <div class="sertifikasi">
                            <h3>Sertifikasi Halal</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" fill="#fabf01"
                                xml:space="preserve" class="logoHalal">
                                <path
                                    d="M452.62 11.19C304.89 26.33 173.44 105.46 90.09 229.82 59.43 275.8 30.69 344.2 19.77 398.05 11.53 438.67 10 454.57 10 499.6c0 45.03 1.53 60.55 9.77 101.55 10.73 53.08 39.47 121.68 70.32 168.24 92.16 137.77 245.84 220.73 409.47 220.73 185.09 0 355.63-105.96 438.6-272.28 83.16-166.89 65.34-363.1-46.75-512.37C813.81 102 699.23 33.98 568.55 13.86c-23.96-3.63-91.41-5.36-115.93-2.67zm88.33 45.98c89.87 8.62 174.37 44.07 244.11 102.13 20.5 17.24 54.03 52.69 70.51 74.92 44.64 59.97 72.24 126.85 84.12 202.34 4.6 30.47 4.6 95.81-.19 126.27-11.5 75.11-39.85 142.94-84.31 202.92-19.54 26.06-63.42 69.94-89.48 89.48-59.97 44.45-127.8 72.81-202.92 84.31-30.47 4.79-95.81 4.79-126.27.19C313.31 920.57 208.5 856 136.07 754.83 76.3 671.09 46.98 561.3 57.14 458.21c8.05-84.12 37.75-159.42 90.63-229.74 14.75-19.74 60.93-65.91 80.67-80.67 58.82-44.07 117.07-70.51 184.9-83.92 43.88-8.62 85.84-10.92 127.61-6.71z" />
                                <path
                                    d="m317.92 301.86-13.6 14.95 4.6 18.2c4.79 18.01 4.79 18.01 4.79 126.08v108.26l-9.58 9.01c-13.03 12.84-29.7 18.01-57.48 18.01-17.25 0-21.65-.77-30.27-4.6-19.54-8.82-31.04-29.13-31.04-54.42 0-7.86 2.11-22.8 4.79-34.87 2.68-11.69 5.36-23.76 5.94-26.83l.96-5.75-4.41 5.37c-5.17 5.94-20.69 43.88-25.68 62.66-3.83 15.14-4.79 52.89-1.34 64.19 6.71 21.46 23.95 39.47 44.45 46.37 16.09 5.17 46.94 4.79 63.81-.96 33.15-11.5 62.66-41.01 72.43-72.81 3.64-11.5 3.83-18.01 3.83-108.07v-95.61l5.75-13.6c3.26-7.28 5.75-14.18 5.75-15.33 0-.96-2.49-5.37-5.56-9.77-6.71-9.77-16.1-28.55-19.16-38.32-1.34-3.83-3.07-7.09-4.02-7.09-.78-.02-7.68 6.69-14.96 14.93zm220.73 23.95c-9.2 14.37-9.58 15.52-8.24 23.95 2.88 18.39 4.03 83.73 1.92 105.96-3.83 40.81-14.75 73-33.34 97.91-4.41 5.94-8.24 10.54-8.62 10.16-.38-.38.38-7.47 1.72-15.71 1.34-8.24 2.49-27.97 2.3-43.69 0-33.53-3.45-49.82-15.9-74.92-20.12-41.2-66.11-89.48-77.99-82.01-5.36 3.26-11.5 15.71-15.14 30.08-5.36 21.84-1.53 35.26 15.33 54.23 8.05 9.2 9.58 10.16 21.65 12.26 22.99 4.22 26.83 6.9 39.28 25.68 13.41 20.69 19.93 53.46 17.44 88.14-1.34 19.54-1.15 19.35-25.1 35.06-19.74 13.03-42.15 23.38-69.94 32.57-11.69 3.83-22.23 7.47-22.99 8.24-3.07 2.68 24.91 6.52 47.52 6.32 37.17-.19 59.59-6.71 82.78-24.33 16.86-12.84 31.81-31.62 42.92-53.84 11.31-22.99 16.86-43.11 18.59-68.98l1.53-19.16 2.49 14.37c4.41 24.72 13.41 53.84 22.42 72.62 7.09 14.37 11.5 20.69 23.38 32.57 25.68 25.67 50.2 38.32 82.01 42.54 18.4 2.3 24.53 1.72 71.66-8.62 30.66-6.71 60.17-10.73 77.22-10.73h14.37l9.96-25.29c5.94-15.33 9.01-25.67 7.66-26.06-8.43-2.87-30.85-21.65-59.59-49.63-48.29-46.95-65.53-57.29-94.66-55.76-23.18 1.34-38.13 10.73-53.46 33.72-12.83 19.55-13.03 20.32-2.29 15.72 33.33-14.18 55.75-12.46 82 6.32 19.54 13.99 50.01 47.52 46.37 50.97-5.37 4.98-58.63 13.99-83.16 13.99-14.75.19-21.08-.77-33.53-4.98-8.43-2.87-18.39-7.09-22.04-9.39-31.62-18.97-57.1-52.31-68.79-90.06-8.43-27.78-19.35-89.1-25.67-144.09l-2.3-21.08-9.77 14.95z" />
                            </svg>
                            <ul>
                                <li>Sertifikat Halal Bakery <a
                                        href="{{ asset('assets/docs/Sertifikat Halal Bakery.pdf') }}">Lihat Disini</a></li>
                                <li>Sertifikat Halal Sambel Nanas <a
                                        href="{{ asset('assets/docs/Sertifikat Halal Sambel Nanas.pdf') }}">Lihat Disini</a>
                                </li>
                                <li>Sertifikat Halal Selai <a
                                        href="{{ asset('assets/docs/Sertifikat Halal Selai.pdf') }}">Lihat Disini</a></li>
                            </ul>
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
        </section> --}}
            <section class="product-section container pt-10 pb-10 mb-10 appear-animate" style="margin-top: 20rem">
                <h3 class="subtitle text-center">PILIHAN EKSLUSIF
                </h3>
                <h2 class="title title-underline underline-center with-double mt-4 mb-10">
                    <span class="pb-8">Best Seller Tastynas</span>
                    <label class="title-duplex">Best Seller Tastynas</label>
                </h2>
                <div class="row cols-md-3 cols-2 gutter-lg" id="products-row">
                    <div class="product-wrap">
                        <div class="product product-slideup-content text-center">
                            <figure class="product-media shadow-media">
                                <a href="product-simple.html">
                                    <img src="{{ asset('assets/images/product/cake/Cake Nanas Topping Mix/45.png') }}"
                                        alt="product" width="393" height="491">
                                    <img src="{{ asset('assets/images/product/cake/Cake Nanas Topping Mix/46.png') }}"
                                        alt="product" width="393" height="491">
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
                                        Cake Nanas Topping Mix
                                    </a>
                                </h5>
                                <span class="product-price">
                                    <span class="price">Rp.50.000</span>
                                </span>
                            </div>
                            <div class="product-hide-details">
                                <div class="product-action">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="p-icon-heart-solid"></i></a>
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><i
                                            class="p-icon-cart-solid"></i><span>Beli Sekarang</span></a>
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
                                    <img src="{{ asset('assets/images/product/pie/Pie Nanas Mini Original/24.png') }}"
                                        alt="product" width="393" height="491">
                                    <img src="{{ asset('assets/images/product/pie/Pie Nanas Mini Original/23.png') }}"
                                        alt="product" width="393" height="491">
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
                                        Pie Nanas Mini Original
                                    </a>
                                </h5>
                                <span class="product-price">
                                    <span class="price">Rp.30.000</span>
                                </span>
                            </div>
                            <div class="product-hide-details">
                                <div class="product-action">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="p-icon-heart-solid"></i></a>
                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="p-icon-cart-solid"></i><span>Beli Sekarang</span></a>
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
                                    <img src="{{ asset('assets/images/product/nastar-cookies/Nastar Tugu Nanas/19.png') }}"
                                        alt="product" width="393" height="491">
                                    <img src="{{ asset('assets/images/product/nastar-cookies/Nastar Tugu Nanas/20.png') }}"
                                        alt="product" width="393" height="491">
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
                                        Nastar Tugu Nanas
                                    </a>
                                </h5>
                                <span class="product-price">
                                    <span class="price">Rp25.000</span>
                                </span>
                            </div>
                            <div class="product-hide-details">
                                <div class="product-action">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="p-icon-heart-solid"></i></a>
                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="p-icon-cart-solid"></i><span>Beli Sekarang</span></a>
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
                                    <img src="{{ asset('assets/images/product/nastar-cookies/Nastar Klasik/17.png') }}"
                                        alt="product" width="393" height="491">
                                    <img src="{{ asset('assets/images/product/nastar-cookies/Nastar Black/15.png') }}"
                                        alt="product" width="393" height="491">
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
                                        Nastar Klasik & Black Nastar
                                    </a>
                                </h5>
                                <span class="product-price">
                                    <span class="price">Rp.32.000</span>
                                </span>
                            </div>
                            <div class="product-hide-details">
                                <div class="product-action">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="p-icon-heart-solid"></i></a>
                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="p-icon-cart-solid"></i><span>Beli Sekarang</span></a>
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
                                    <img src="{{ asset('assets/images/product/nastar-cookies/Feeva Cookies/14.png') }}"
                                        alt="product" width="393" height="491">
                                    <img src="{{ asset('assets/images/product/nastar-cookies/Feeva Cookies/13.png') }}"
                                        alt="product" width="393" height="491">
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
                                        Feeva Cookies
                                    </a>
                                </h5>
                                <span class="product-price">
                                    <span class="price">Rp.22.000</span>
                                </span>
                            </div>
                            <div class="product-hide-details">
                                <div class="product-action">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="p-icon-heart-solid"></i></a>
                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="p-icon-cart-solid"></i><span>Beli Sekarang</span></a>
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
                                    <img src="{{ asset('assets/images/product/cireng-pempek-sambel/Cireng Stick Sambel Nanas/33.png') }}"
                                        alt="product" width="393" height="491">
                                    <img src="{{ asset('assets/images/product/cireng-pempek-sambel/Cireng Stick Sambel Nanas/34.png') }}"
                                        alt="product" width="393" height="491">
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
                                        Cireng Stick Sambel Nanas
                                    </a>
                                </h5>
                                <span class="product-price">
                                    <span class="price">Rp.40.000</span>
                                </span>
                            </div>
                            <div class="product-hide-details">
                                <div class="product-action">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="p-icon-heart-solid"></i></a>
                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="p-icon-cart-solid"></i><span>Beli Sekarang</span></a>
                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                            class="p-icon-search-solid"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End .product -->
                    </div>
                </div>
                <div class="text-center">
                    <a class="btn btn-secondary btn-load" href="assets/ajax/ajax-products-demo8.html"
                        data-load-to="#products-row">Lihat Selengkapnya</a>
                </div>
            </section>
            <section class="benefit-section container mt-10 pt-7 pb-10 appear-animate">
                <h4 class="subtitle text-uppercase text-center">Produk Kami
                </h4>
                <h2 class="title text-center pb-md-10 mb-6" style="justify-content: center">Keunggulan Produk Tastynas
                </h2>
                <figure class="img-back floating">
                    <img class="layer" src="assets/images/highlightProduct.png" width="649" height="492"
                        alt="banner" />
                </figure>
                <div class="row pt-10">
                    <div class="col-md-6 pos-left">
                        <div class="icon-box icon-box-side icon-box-num">
                            <span class="icon-box-icon">1</span>
                            <div class="icon-box-content">
                                <a href="#" class="icon-box-title">Low Glycemic Index</a>
                            </div>
                        </div>
                        <div class="icon-box icon-box-side icon-box-num">
                            <span class="icon-box-icon">2</span>
                            <div class="icon-box-content">
                                <a href="#" class="icon-box-title">Low Glutten</a>
                            </div>
                        </div>
                        <div class="icon-box icon-box-side icon-box-num">
                            <span class="icon-box-icon">3</span>
                            <div class="icon-box-content">
                                <a href="#" class="icon-box-title">Low Fat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pos-right">
                        <div class="icon-box icon-box-side right icon-box-num">
                            <span class="icon-box-icon" style="order: 2; margin-left:10px">4</span>
                            <div class="icon-box-content">
                                <a href="#" class="icon-box-title">Low Cholesterol</a>
                            </div>
                        </div>
                        <div class="icon-box icon-box-side right icon-box-num">
                            <span class="icon-box-icon" style="order: 2; margin-left:10px">5</span>
                            <div class="icon-box-content">
                                <a href="#" class="icon-box-title">Rich of Fiber</a>
                            </div>
                        </div>
                        <div class="icon-box icon-box-side right icon-box-num">
                            <span class="icon-box-icon" style="order: 2; margin-left:10px">6</span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Low Price, High Quality</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pine-section">
                <p><q>Let food be thy medicine,
                        thy medicine shall be thy food</q><br>
                    <cite>Hippocrates</cite>
                </p>
            </section>
            <section class="our-product-section">
                <div class="container-fluid pt-5">
                    <h2 class="title title-center pt-4 mb-5">Produk Kami</h2>
                    <hr class="underline-divider">
                    <div class="tab tab-nav-center product-tab-nav-type1 tab-nav-underline">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#cake">
                                    <div class="nav-title">Cake</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pie">
                                    <div class="nav-title">Pie</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pastry">
                                    <div class="nav-title">Pastry & Cheese Stick</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#nastar">
                                    <div class="nav-title">Nastar & Cookies</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#dessert">
                                    <div class="nav-title">Dessert</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#drinks">
                                    <div class="nav-title">Drinks</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#frozen">
                                    <div class="nav-title">Frozen Food</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#selai">
                                    <div class="nav-title">Selai</div>
                                </a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="cake">
                                <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2"
                                    data-owl-options="{
                                                            'items': 4,
                                                            'nav': false,
                                                            'dots': true,
                                                            'margin': 20,
                                                            'loop': false,
                                                            'responsive': {
                                                                '0': {
                                                                    'items': 2
                                                                },
                                                                '768': {
                                                                    'items': 3
                                                                },
                                                                '992': {
                                                                    'items': 4
                                                                }
                                                            }
                                                        }">
                                    {{-- Cake Nanas Topping Mix --}}
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/cake/Cake Nanas Topping Mix/45.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/cake/Cake Nanas Topping Mix/46.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">new</label>
                                                <label class="product-label label-sale">-38%</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Cake Nanas Topping Mix
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$54.00</del> --}}
                                                <ins class="new-price">Rp.42.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    {{-- End Product --}}

                                    {{-- Cake Nanas Topping Coklat --}}
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/cake/Cake Nanas Topping Coklat/11.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/cake/Cake Nanas Topping Coklat/12.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">new</label>
                                                <label class="product-label label-sale">-38%</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Cake Nanas Topping Coklat
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$54.00</del> --}}
                                                <ins class="new-price">Rp.42.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                    {{-- Cake Nanas Topping Cranberry --}}
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/cake/Cake Nanas Topping Cranberry/9.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/cake/Cake Nanas Topping Cranberry/10.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">new</label>
                                                <label class="product-label label-sale">-38%</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Cake Nanas Topping Cranberry
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$54.00</del> --}}
                                                <ins class="new-price">Rp.42.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    {{-- End Product --}}
                                    {{-- Cake Nanas Topping Almond --}}
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/cake/Cake Nanas Topping Almond/7.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/cake/Cake Nanas Topping Almond/8.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Cake Nanas Topping Almond
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                <span class="price">Rp.26.000</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                    {{-- Cake Nanas Topping Keju --}}
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/cake/Cake Nanas Topping Keju/43.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/cake/Cake Nanas Topping Keju/44.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">new</label>
                                                <label class="product-label label-sale">-38%</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Cake Nanas Topping Keju
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$54.00</del> --}}
                                                <ins class="new-price">Rp.42.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    {{-- End Product --}}
                                    {{-- Cake Kering Nanas --}}
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/cake/Cake Kering Nanas/1.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/cake/Cake Kering Nanas/2.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">New</label>
                                                <label class="product-label label-sale">-25%</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Cake Kering Nanas
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price"></del> --}}
                                                <ins class="new-price">Rp.22.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                    {{-- Cupcake Nanas --}}
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/cake/Cupcake Nanas/41.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/cake/Cupcake Nanas/42.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">new</label>
                                                <label class="product-label label-sale">-38%</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Cupcake Nanas
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$54.00</del> --}}
                                                <ins class="new-price">Rp.42.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    {{-- End Product --}}

                                    {{-- Diet Cake Nanas --}}
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/cake/Diet Cake Nanas/47.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/cake/Diet Cake Nanas/48.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">new</label>
                                                <label class="product-label label-sale">-38%</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Diet Cake Nanas
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$54.00</del> --}}
                                                <ins class="new-price">Rp.42.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    {{-- End Product --}}
                                    {{-- Ambassador Cake --}}
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/cake/Ambassador & Birthday Cake/4.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/cake/Ambassador & Birthday Cake/6.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            {{-- <div class="product-label-group">
                                            <label class="product-label label-sale">-40%</label>
                                        </div> --}}
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Ambassador Cake & Birthday Cake
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$20.00</del> --}}
                                                <ins class="new-price">Rp.90.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                </div>
                            </div>
                            <div class="tab-pane" id="frozen">
                                <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2"
                                    data-owl-options="{
                                                            'items': 4,
                                                            'nav': false,
                                                            'dots': true,
                                                            'margin': 20,
                                                            'loop': false,
                                                            'responsive': {
                                                                '0': {
                                                                    'items': 2
                                                                },
                                                                '768': {
                                                                    'items': 3
                                                                },
                                                                '992': {
                                                                    'items': 4
                                                                }
                                                            }
                                                        }">
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/cireng-pempek-sambel/Pempek Dos Kuah Nanas/56.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/cireng-pempek-sambel/Pempek Dos Kuah Nanas/57.png') }}"
                                                    alt="product" width="600" height="750" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">New</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Pempek Dos Kuah Nanas
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$42.00</del> --}}
                                                <ins class="new-price">Rp.36.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/cireng-pempek-sambel/Cireng Stick Sambel Nanas/33.png') }}"
                                                    alt="product" width="600" height="750" />
                                                <img src="{{ asset('assets/images/product/cireng-pempek-sambel/Cireng Stick Sambel Nanas/34.png') }}"
                                                    alt="product" width="600" height="750" />
                                            </a>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Cireng Stick Sambel Nanas
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$20.00</del> --}}
                                                <ins class="new-price">Rp.30.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->



                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/cireng-pempek-sambel/Sambel Nanas/35.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/cireng-pempek-sambel/Sambel Nanas/36.png') }}"
                                                    alt="product" width="600" height="750" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">-24%</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Sambel Nanas
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                <span class="price">Rp.16.000</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                </div>
                            </div>
                            <div class="tab-pane" id="dessert">
                                <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2"
                                    data-owl-options="{
                                                            'items': 4,
                                                            'nav': false,
                                                            'dots': true,
                                                            'margin': 20,
                                                            'loop': false,
                                                            'responsive': {
                                                                '0': {
                                                                    'items': 2
                                                                },
                                                                '768': {
                                                                    'items': 3
                                                                },
                                                                '992': {
                                                                    'items': 4
                                                                }
                                                            }
                                                        }">
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/dessert/Pineapple Dessert/29.png') }}"
                                                    alt="product" width="600" height="750" />
                                                <img src="{{ asset('assets/images/product/dessert/Pineapple Dessert/30.png') }}"
                                                    alt="product" width="600" height="750" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">-24%</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Pineapple Dessert
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                <span class="price">Rp.16.000</span>
                                            </span>
                                        </div>
                                    </div>


                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/dessert/Choco Pineapple Dessert/27.png') }}"
                                                    alt="product" width="600" height="750" />
                                                <img src="{{ asset('assets/images/product/dessert/Choco Pineapple Dessert/28.png') }}"
                                                    alt="product" width="600" height="750" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">-24%</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Choco Pineapple Dessert
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                <span class="price">Rp.16.000</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->

                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/dessert/Cheese Cake Nanas/31.png') }}"
                                                    alt="product" width="600" height="750" />
                                                <img src="{{ asset('assets/images/product/dessert/Cheese Cake Nanas/32.png') }}"
                                                    alt="product" width="600" height="750" />
                                            </a>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Cheese Cake Nanas
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$20.00</del> --}}
                                                <ins class="new-price">Ro.49.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                </div>
                            </div>
                            <div class="tab-pane" id="nastar">
                                <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2"
                                    data-owl-options="{
                                                            'items': 4,
                                                            'nav': false,
                                                            'dots': true,
                                                            'margin': 20,
                                                            'loop': false,
                                                            'responsive': {
                                                                '0': {
                                                                    'items': 2
                                                                },
                                                                '768': {
                                                                    'items': 3
                                                                },
                                                                '992': {
                                                                    'items': 4
                                                                }
                                                            }
                                                        }">
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/nastar-cookies/Feeva Cookies/13.png') }}"
                                                    alt="product" width="600" height="750" />
                                                <img src="{{ asset('assets/images/product/nastar-cookies/Feeva Cookies/14.png') }}"
                                                    alt="product" width="600" height="750" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">New</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Feeva Cookies
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$20.00</del> --}}
                                                <ins class="new-price">Rp.15.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/nastar-cookies/Nastar Tugu Nanas/19.png') }}"
                                                    alt="product" width="600" height="750" />
                                                <img src="{{ asset('assets/images/product/nastar-cookies/Nastar Tugu Nanas/20.png') }}"
                                                    alt="product" width="600" height="750" />
                                            </a>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart"
                                                    data-toggle="modal" data-target="#addCartModal"
                                                    title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Nastar Tugu Nanas
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$20.00</del> --}}
                                                <ins class="new-price">Rp.15.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/nastar-cookies/Nastar Klasik/17.png') }}"
                                                    alt="product" width="600" height="750" />
                                                <img src="{{ asset('assets/images/product/nastar-cookies/Nastar Klasik/18.png') }}"
                                                    alt="product" width="600" height="750" />
                                            </a>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart"
                                                    data-toggle="modal" data-target="#addCartModal"
                                                    title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Nastar Klasik
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$20.00</del> --}}
                                                <ins class="new-price">Rp.15.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/nastar-cookies/Nastar Black/15.png') }}"
                                                    alt="product" width="600" height="750" />
                                                <img src="{{ asset('assets/images/product/nastar-cookies/Nastar Black/16.png') }}"
                                                    alt="product" width="600" height="750" />
                                            </a>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart"
                                                    data-toggle="modal" data-target="#addCartModal"
                                                    title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Nastar Black
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$20.00</del> --}}
                                                <ins class="new-price">Rp.15.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="pastry">
                                <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2"
                                    data-owl-options="{
                                                            'items': 4,
                                                            'nav': false,
                                                            'dots': true,
                                                            'margin': 20,
                                                            'loop': false,
                                                            'responsive': {
                                                                '0': {
                                                                    'items': 2
                                                                },
                                                                '768': {
                                                                    'items': 3
                                                                },
                                                                '992': {
                                                                    'items': 4
                                                                }
                                                            }
                                                        }">
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/pastry-cheestik/Pastry Nanas/50.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/pastry-cheestik/Pastry Nanas/51.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">New</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart"
                                                    data-toggle="modal" data-target="#addCartModal"
                                                    title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Pastry Nanas
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$42.00</del> --}}
                                                <ins class="new-price">Rp.36.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/pastry-cheestik/Cheese Stick Nanas/52.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/pastry-cheestik/Cheese Stick Nanas/53.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart"
                                                    data-toggle="modal" data-target="#addCartModal"
                                                    title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Cheese Stick Nanas
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$20.00</del> --}}
                                                <ins class="new-price">Rp.12.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->


                                </div>
                            </div>
                            <div class="tab-pane" id="pie">
                                <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2"
                                    data-owl-options="{
                                                            'items': 4,
                                                            'nav': false,
                                                            'dots': true,
                                                            'margin': 20,
                                                            'loop': false,
                                                            'responsive': {
                                                                '0': {
                                                                    'items': 2
                                                                },
                                                                '768': {
                                                                    'items': 3
                                                                },
                                                                '992': {
                                                                    'items': 4
                                                                }
                                                            }
                                                        }">
                                    {{-- Pie Original --}}
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/pie/Pie Nanas Mini Original/23.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/pie/Pie Nanas Mini Original/24.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">-24%</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart"
                                                    data-toggle="modal" data-target="#addCartModal"
                                                    title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Pie Nanas Mini Original
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                <span class="price">Rp.46.000</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->

                                    {{-- Pie Mini Topping --}}
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/pie/Pie Nanas Mini Topping/25.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/pie/Pie Nanas Mini Topping/26.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">-24%</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart"
                                                    data-toggle="modal" data-target="#addCartModal"
                                                    title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Pie Nanas Mini Topping
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                <span class="price">Rp.46.000</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                    {{-- Pie Nanas Large --}}
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/pie/Pie Nanas Large/54.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/pie/Pie Nanas Large/55.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">New</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart"
                                                    data-toggle="modal" data-target="#addCartModal"
                                                    title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Pie Nanas Large
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$42.00</del> --}}
                                                <ins class="new-price">Rp.36.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                    {{-- Birthday Pie --}}
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/pie/Birthday Pie/21.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/pie/Birthday Pie/22.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart"
                                                    data-toggle="modal" data-target="#addCartModal"
                                                    title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Birthday Pie
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$20.00</del> --}}
                                                <ins class="new-price">Rp.32.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                </div>
                            </div>
                            <div class="tab-pane" id="selai">
                                <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2"
                                    data-owl-options="{
                                                            'items': 4,
                                                            'nav': false,
                                                            'dots': true,
                                                            'margin': 20,
                                                            'loop': false,
                                                            'responsive': {
                                                                '0': {
                                                                    'items': 2
                                                                },
                                                                '768': {
                                                                    'items': 3
                                                                },
                                                                '992': {
                                                                    'items': 4
                                                                }
                                                            }
                                                        }">
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/selai/Selai Nanas Olesan/FPK2022062320.jpg') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/selai/Selai Nanas Olesan/FPK2022062321.jpg') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">New</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart"
                                                    data-toggle="modal" data-target="#addCartModal"
                                                    title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Selai Nanas Olesan
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$42.00</del> --}}
                                                <ins class="new-price">Rp.36.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/selai/Selai Nanas Isian/58.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/selai/Selai Nanas Isian/FPK2022062394.jpg') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart"
                                                    data-toggle="modal" data-target="#addCartModal"
                                                    title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Selai Nanas Isian
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$20.00</del> --}}
                                                <ins class="new-price">Rp.12.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                </div>
                            </div>
                            <div class="tab-pane" id="drinks">
                                <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2"
                                    data-owl-options="{
                                                            'items': 4,
                                                            'nav': false,
                                                            'dots': true,
                                                            'margin': 20,
                                                            'loop': false,
                                                            'responsive': {
                                                                '0': {
                                                                    'items': 2
                                                                },
                                                                '768': {
                                                                    'items': 3
                                                                },
                                                                '992': {
                                                                    'items': 4
                                                                }
                                                            }
                                                        }">
                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/sirup-jus/Milky Juice Nanas/39.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/sirup-jus/Milky Juice Nanas/40.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart"
                                                    data-toggle="modal" data-target="#addCartModal"
                                                    title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Milky Juice Nanas
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$20.00</del> --}}
                                                <ins class="new-price">Rp.10.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->

                                    <div class="product shadow-media text-center">
                                        <figure class="product-media">
                                            <a href="product-simple.html">
                                                <img src="{{ asset('assets/images/product/sirup-jus/Sirup Nanas/37.png') }}"
                                                    alt="product" width="295" height="369" />
                                                <img src="{{ asset('assets/images/product/sirup-jus/Sirup Nanas/38.png') }}"
                                                    alt="product" width="295" height="369" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">New</label>
                                            </div>
                                            <div class="product-action-float">
                                                <a href="#" class="btn-product-icon btn-cart"
                                                    data-toggle="modal" data-target="#addCartModal"
                                                    title="Add to Cart">
                                                    <i class="p-icon-cart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to Wishlist">
                                                    <i class="p-icon-heart-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare"
                                                    title="Compare">
                                                    <i class="p-icon-compare-solid"></i>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview"
                                                    title="Quick View">
                                                    <i class="p-icon-search-solid"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-simple.html">
                                                    Sirup Nanas
                                                </a>
                                            </h4>
                                            <span class="product-price">
                                                {{-- <del class="old-price">$42.00</del> --}}
                                                <ins class="new-price">Rp.16.000</ins>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End .product -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container mt-10 mb-10 pb-7">
                <p class="title-testi">Tastymoni</p>
                <hr class="underline-divider" style="margin-bottom: 2rem">
                <div class="owl-carousel owl-theme owl-nav-box row cols-1 appear-animate"
                    data-owl-options="{
                            'items': 1,
                            'nav': false,
                            'dots': false,
                            'autoplay': true,
                            'loop': true,
                            'margin': 20,
                            'responsive': {
                                '1600': {
                                    'nav': true
                                }
                            }
                        }"
                    style="background: #b9cf3e">
                    <div class="testimonial testimonial-centered with-double-quote">
                        <blockquote>
                            <figure class="testimonial-author-thumbnail">
                                <img src="{{ asset('assets/images/testimoni/3cropped.png') }}" alt="user"
                                    width="120" height="120" />
                            </figure>
                            <p class="mb-3">“Bener loh ini enak, enak banget no comment. Harus coba enak asli.”</p>
                            <div class="testimonial-info">
                                <cite>
                                    Nela
                                    <span class="text-body">Customer</span>
                                </cite>
                            </div>
                        </blockquote>
                    </div>
                    <div class="testimonial testimonial-centered with-double-quote">
                        <blockquote class="text-body">
                            <figure class="testimonial-author-thumbnail">
                                <img src="{{ asset('assets/images/testimoni/2cropped.png') }}" alt="user"
                                    width="120" height="120" />
                            </figure>
                            <p class="mb-3">“Pas cobain Nastar Tugu Nanas, Baru ujungnya udah enak banget, apalagi
                                tengahnya. Teksturnya juga lembut, banyak banget isiannya. Enak bangettt”</p>
                            <div class="testimonial-info">
                                <cite>
                                    Agung Setyadi
                                    <span class="text-body">Customer</span>
                                </cite>
                            </div>
                        </blockquote>
                    </div>
                    <div class="testimonial testimonial-centered with-double-quote">
                        <blockquote class="text-body">
                            <figure class="testimonial-author-thumbnail">
                                <img src="{{ asset('assets/images/testimoni/5cropped.png') }}" alt="user"
                                    width="120" height="120" />
                            </figure>
                            <p class="mb-3">“Seger banget! Nanasnya pas, manisnya pas seger banget, gak akan gagal deh.
                                Ini salah satu produk minuman ter-enak. Masya Allah mantap!”</p>
                            <div class="testimonial-info">
                                <cite>
                                    Ibu Thianu
                                    <span class="text-body">Customer</span>
                                </cite>
                            </div>
                        </blockquote>
                    </div>
                    <div class="testimonial testimonial-centered with-double-quote">
                        <blockquote class="text-body">
                            <figure class="testimonial-author-thumbnail">
                                <img src="{{ asset('assets/images/testimoni/6cropped.png') }}" alt="user"
                                    width="120" height="120" />
                            </figure>
                            <p class="mb-3">“Wah, pie nya gede banget isinya juga banyak. Ada potongan nanasnya juga,
                                jadi ngga terlalu lembek. Enak !! Harus Cobain recommended banget.”</p>
                            <div class="testimonial-info">
                                <cite>
                                    Fitri Goes
                                    <span class="text-body">Customer</span>
                                </cite>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="container">
                <h2 class="text-center pb-10 mb-5">Tastynas Spotlight</h2>
                <hr class="underline-divider" style="margin-top:-3rem">

                <div style="margin-bottom:10rem" class="owl-carousel owl-theme row cols-lg-3 cols-md-2 cols-1"
                    data-owl-options="{
                            'items': 3,
                            'margin': 20,
                            'loop': false,
                            'nav': false,
                            'dots': true,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '768': {
                                    'items': 2
                                },
                                '992': {
                                    'items': 3,
                                    'dots': false
                                }
                            }
                        }">
                    <div class="post overlay-zoom overlay-dark">
                        <figure class="post-media">
                            <a href="blog-single.html">
                                <img src="{{ asset('assets/images/pemberdayaan/20200519_115531.jpg') }}" width="400"
                                    height="260" alt="post" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <p class="post-cats"><a href="blog.html">Tastynas</a>
                            </p>
                            <h3 class="post-title"><a href="blog-single.html">Pemberdayaan Petani Lokal</a>
                            </h3>
                            <div class="post-meta"><img src="assets/images/croppedPeople.jpg" class="post-agent"
                                    width="31" height="31" alt="agent">By
                                <a href="blog.html" class="post-author">Ahmad</a>
                                <a href="blog-single.html#post-comments" class="post-comments hash-scroll">
                                    <i class="p-icon-email"></i>12
                                </a>
                                <div class="post-share">
                                    <i class="p-icon-socials"></i>
                                    <div class="social-links social-default dirVertical">
                                        <a href="#" title="facebook"
                                            class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" title="twitter"
                                            class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" title="pinterest"
                                            class="social-link social-pinterest fab fa-pinterest"></a>
                                        <a href="#" title="linkedin"
                                            class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </div>
                            </div>
                            <p class="post-content">Sebagai Brand Lokal Pelopor Kuliner Olahan Buah Nanas yang bercitarasa
                                eksklusif & modern, kami berkomitmen untuk selalu memilih bahan baku utama yang terbaik bagi
                                aneka produk yang kami produksi, termasuk kualitas dari buah nanas itu sendiri. Sekitar 3
                                sampai 5 ton per bulannya jumlah buah Nanas yang di supply oleh petani nanas Subang untuk
                                memenuhi kebutuhan dapur produksi kami.</p><a href="blog-single.html"
                                class="text-secondary">(read more)</a>
                        </div>
                    </div>
                    <div class="post overlay-zoom overlay-dark">
                        <figure class="post-media">
                            <a href="blog-single.html">
                                <img src="{{ asset('assets/images/support-event/23.png') }}" width="400"
                                    height="260" alt="post" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <p class="post-cats"><a href="blog.html">Tastynas</a>,<a href="blog.html">Subang</a>
                            </p>
                            <h3 class="post-title"><a href="blog-single.html">Support Event</a>
                            </h3>
                            <div class="post-meta"><img src="assets/images/croppedPeople.jpg" class="post-agent"
                                    width="31" height="31" alt="agent">By
                                <a href="blog.html" class="post-author">Ahmad</a>
                                <a href="blog-single.html#post-comments" class="post-comments hash-scroll">
                                    <i class="p-icon-email"></i>12
                                </a>
                                <div class="post-share">
                                    <i class="p-icon-socials"></i>
                                    <div class="social-links social-default dirVertical">
                                        <a href="#" title="facebook"
                                            class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" title="twitter"
                                            class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" title="pinterest"
                                            class="social-link social-pinterest fab fa-pinterest"></a>
                                        <a href="#" title="linkedin"
                                            class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </div>
                            </div>
                            <p class="post-content">Delipel – Tastynas pun tidak jarang untuk diminta sebagai salah satu
                                support event dalam berbagai kesempatan acara di bidang Pendidikan baik itu berupa event
                                seminar, workshop, dan event lainnya yang diselenggarakan di Kabupaten Subang.</p><a
                                href="blog-single.html" class="text-secondary">(read more)</a>
                        </div>
                    </div>
                    <div class="post overlay-zoom overlay-dark">
                        <figure class="post-media">
                            <a href="blog-single.html">
                                <img src="{{ asset('assets/images/csr/IMG-20220210-WA0024.jpg') }}" width="400"
                                    height="260" alt="post" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <p class="post-cats"><a href="blog.html">Tastynas</a>,<a href="blog.html">Subang</a>
                            </p>
                            <h3 class="post-title"><a href="blog-single.html">Program CSR (Corporate Social
                                    Responsibility)</a>
                            </h3>
                            <div class="post-meta"><img src="assets/images/croppedPeople.jpg" class="post-agent"
                                    width="31" height="31" alt="agent">By
                                <a href="blog.html" class="post-author">Ahmad</a>
                                <a href="blog-single.html#post-comments" class="post-comments hash-scroll">
                                    <i class="p-icon-email"></i>12
                                </a>
                                <div class="post-share">
                                    <i class="p-icon-socials"></i>
                                    <div class="social-links social-default dirVertical">
                                        <a href="#" title="facebook"
                                            class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" title="twitter"
                                            class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" title="pinterest"
                                            class="social-link social-pinterest fab fa-pinterest"></a>
                                        <a href="#" title="linkedin"
                                            class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </div>
                            </div>
                            <p class="post-content">Kami sebagai UKM Pelopor Bakery Olahan Nanas Subang selalu mengadakan
                                program CSR dengan pembagian Milky Juice Nanas ataupun aneka produk lainnya kepada
                                masyarakat sekitar ataupun kepada institusi di bidang kesehatan serta keamanan. Milky Juice
                                Nanas yang terbuat dari sari buah Nanas asli dan diolah secara higienis ini menjadi asupan
                                vitamin C alami bagi tubuh. Sehingga kesegaran alamiah yang akan sahabat dapatkan dari
                                mengkonsumsi Milky Juice Nanas kami ini.
                                Semoga keberadaan kami sampai dengan saat ini & pada waktu-waktu mendatang, dapat terus
                                berkontribusi untuk Kota Subang tercinta. Walau mungkin partisipasi & peran kami ini masih
                                bergerak menapaki setahap demi setahap. Tetapi kami sangat menikmati setiap proses yang kami
                                lalui sampai dengan saat ini.</p><a href="blog-single.html" class="text-secondary">(read
                                more)</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="brand-section appear-animate" style="background: url(images/demos/demo8/brand-back.jpg);">
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
@endsection
