<header class="header header-transparent">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <a href="https://api.whatsapp.com/send?phone=6281394064004&text=Hallo%20Tastynas%20Subang%20😊🙏" target="_blank" class="call">
                    <i class="p-icon-phone-solid"></i>
                    <span>+6281 3940 64004</span>
                </a>
                <span class="divider"></span>
                <a href="https://goo.gl/maps/8qgSprNAv6dAujke8" target="_blank" class="contact">
                    <i class="p-icon-map"></i>
                    <span>Subang, Jawa Barat</span>
                </a>
            </div>
            <div class="header-right">
                <span class="divider"></span>
                <!-- End DropDown Menu -->
                <div class="social-links">
                    <a href="https://www.facebook.com/delipel.cake" target="_blank" title="Facebook" class="social-link fab fa-facebook-f"></a>
                    <a href="https://www.instagram.com/delipeltastynas/?hl=en" target="_blank" title="Instagram" class="social-link fa-brands fa-instagram"></a>
                    <a href="https://www.tiktok.com/@delipel.subang?_t=8WOEy5Il6vK&_r=1" target="_blank" title="Tiktok" class="social-link fa-brands fa-tiktok"></a>
                    <a href="https://www.youtube.com/channel/UCHzME3juX7UfwLu3mnaKtRw" target="_blank" title="Youtube" class="social-link fa-brands fa-youtube"></a>
                </div>
                <!-- End of Social Links -->
            </div>
        </div>
    </div>
    <!-- End HeaderTop -->
    <div class="header-middle has-center sticky-header fix-top sticky-content">
        <div class="container">
            <div class="header-left">
                <a href="#" class="mobile-menu-toggle">
                    <i class="p-icon-bars-solid"></i>
                </a>
                <a href="demo8.html" class="logo">
                    <img src="{{ asset('assets/images/second-logo.jpg') }}" alt="logo" width="171" height="41">
                </a>
                <!-- End of Divider -->
            </div>
            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu menu-type2">
                        <li class="@if($active == 'home')active @endif">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="@if($active == 'story')active @endif">
                            <a href="{{ url('/story') }}">Our Story</a>
                        </li>
                        <li class="@if($active == 'where')active @endif">
                            <a href="{{ url('/where') }}">Where To Buy ?</a>
                        </li>
                        <li class="@if($active == 'faq')active @endif">
                            <a href="{{ url('/faq') }}">FAQ</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                            <ul>
                                <li><a href="{{ url('news/tastynas') }}">About Tastynas</a></li>
                                <li><a href="{{ url('news/subang') }}">About Subang</a></li>
                            </ul>
                        </li>
                        <li class="@if($active == 'contact')active @endif">
                            <a href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <div class="dropdown login-dropdown off-canvas @if (session('errors')) opened @endif">
                    @if (auth()->user())
                        <a href="{{ url('admin/dashboard') }}">{{ auth()->user()->username }}</a>
                    @else
                    <a class="login-toggle" href="ajax/login.html" data-toggle="login-modal">
                        <span class="sr-only">login</span>
                        <i class="p-icon-user-solid"></i><span style="margin-left: 1rem; text-transform: uppercase">Account</span>
                    </a>
                    @endif
                    <!-- End Login Toggle -->
                    <div class="canvas-overlay"></div>
                    <a href="#" class="btn-close"></a>
                    <div class="dropdown-box scrollable">
                        <div class="login-popup">
                            <div class="form-box">
                                <div class="tab tab-nav-underline tab-nav-boxed">
                                    @if (session('errors'))
                                    <div class="mb-4">
                                        <div class="alert alert-colored alert-danger alert-icon">
                                            <center><i class="p-icon-face-bad" style="font-size: 5rem"></i></center><br>
                                            <p class="alert-title" style="text-align: center !important; display: block !important; margin-top: -2rem">{{ session('errors') }}</p>
                                            <button type="button" class="btn btn-link btn-close">
                                                <i class="p-icon-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    @endif
                                    <ul
                                        class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-4">
                                        <li class="nav-item">
                                            <a class="nav-link active lh-1 ls-normal" href="#signin">Login</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="signin">
                                            <form action="{{ url('admin') }}" method="post">
                                                @method('post')
                                                @csrf
                                                <div class="form-group mb-4">
                                                    <input type="text" class="form-control" id="singin-email"
                                                        name="username"
                                                        placeholder="Username" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control"
                                                        id="password" name="password"
                                                        placeholder="Password" required="">
                                                </div>
                                                <div class="form-footer">
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" class="custom-checkbox"
                                                            id="signin-remember" name="signin-remember">
                                                        <label class="form-control-label"
                                                            for="signin-remember">Remember
                                                            me</label>
                                                    </div>
                                                    <a href="#" class="lost-link">Lost your password?</a>
                                                </div>
                                                <button class="btn btn-dark btn-block, []"
                                                    type="submit">Login</button>

                                                {{-- <a  href='{{ url('admin') }}'class="btn btn-dark btn-block, []" >Login</a> --}}

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button title="Close (Esc)" type="button" class="mfp-close"><span>×</span></button>
                        </div>
                    </div>
                    <!-- End Dropdown Box -->
                </div>
            </div>
        </div>
    </div>
</header>
