<header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                   <div class="container">
                       {{-- <div class="col-xl-12"> --}}
                            {{-- <div class="row d-flex justify-content-between align-items-center"> --}}
                                {{-- <div class="header-info-left">
                                    <ul>     
                                        <li><img src="assets/img/icon/header_icon1.png" alt="">34ºc, Sunny </li>
                                        <li><img src="assets/img/icon/header_icon1.png" alt="">Tuesday, 18th June, 2019</li>
                                    </ul>
                                </div> --}}
                                {{-- <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div> --}}
                            {{-- </div> --}}
                       {{-- </div> --}}
                   </div>
                </div>
                {{-- <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('front/assets/img/logo/logo.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="{{asset('front/assets/img/hero/header_card.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                   </div>
                </div> --}}
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                        <ul id="navigation">    
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="categori.html">Category</a></li>
                                            <li><a href="#">About</a></li>
                                            {{-- <li><a href="latest_news.html">Comment</a></li> --}}
                                            <li style="margin-bottom: -1%; margin-left: 45%;" >
                                                <div class="col-xl-1 col-lg-1 col-md-1">
                                                    <div class="header-right-btn f-right d-none d-lg-block">
                                                        <i class="fas fa-search special-tag"></i>
                                                        <div class="search-box">
                                                            <form action="#">
                                                                <input type="text" placeholder="Search">               
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="text-align: right">@if (Route::has('login'))
                                                @auth
                                                @else
                                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                                {{-- @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                                @endif --}}
                                                @endauth
                                                @endif
                                            </li>
                                        </ul>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>