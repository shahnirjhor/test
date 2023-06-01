<!doctype html>
<html lang="en">
    <head>
        <!-- :: Required Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Since 2003, Leapfrog Engineering Services has strived to push the boundaries of what design, engineering, and construction can accomplish.">
        <meta name="author" content="PValue Solutions">
        <!-- :: Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('website/gatedata/assets/css/bootstrap.min.css') }}">

        <!-- :: Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
        @php
            $name = Route::currentRouteName();
            $routename = explode('.', $name);
            $name = $routename[1];
        @endphp
        <!-- :: Title -->
        <title>LEAPFROG - {{ strtoupper($name) }}</title>

        <!-- :: Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&family=Teko:wght@400;500;600;700&display=swap">

        <!-- :: Fontawesome -->
        <link rel="stylesheet" href="{{ asset('website/gatedata/assets/fonts/fontawesome/css/all.min.css') }}">

        <!-- :: Icomoon -->
        <link rel="stylesheet" href="{{ asset('website/gatedata/assets/fonts/icomoon/style.css') }}">

        <!-- :: Animate -->
        <link rel="stylesheet" href="{{ asset('website/gatedata/assets/css/animate.css') }}">

        <!-- :: Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('website/gatedata/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('website/gatedata/assets/css/owl.theme.default.min.css') }}">

        <!-- :: Lity -->
        <link rel="stylesheet" href="{{ asset('website/gatedata/assets/css/lity.min.css') }}">

        <!-- :: Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('website/gatedata/assets/css/nice-select.css') }}">

        <!-- :: Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('website/gatedata/assets/css/magnific-popup.css') }}">

        <!-- :: Style CSS -->
        <link rel="stylesheet" href="{{ asset('website/gatedata/assets/css/style.css') }}">

        <!-- :: Style Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('website/gatedata/assets/css/responsive.css') }}">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
            <![endif]-->
    </head>
    <body>
        <!-- :: Loading -->
        {{--  <div class="loading">
            <div class="loading-box">
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>  --}}
        <!-- :: All Navbar -->
        <header class="all-navbar fixed-top">
            <!-- :: Navbar -->
            <nav class="nav-bar">
                <div class="container">
                    <div class="content-box d-flex align-items-center justify-content-between">
                        <div class="logo">
                            <a href="{{ route('website.home') }}" class="logo-nav">
                                <img class="img-fluid one" src="{{ asset('website/gatedata/assets/images/logo/first-round-black.png') }}" alt="01 Logo">
                                <img class="img-fluid two" src="{{ asset('website/gatedata/assets/images/logo/first-round-white.png') }}" alt="02 Logo">
                            </a>
                            <a href="#open-nav-bar-menu" class="open-nav-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <div class="nav-bar-links" id="open-nav-bar-menu">
                            <ul class="level-1">
                                <li class="item-level-1">
                                    <a href="{{ route('website.home') }}" class="link-level-1 {{ request()->is('/') ? 'color-active' : '' }}">Home</a>
                                </li>
                                <li class="item-level-1">
                                    <a href="{{ route('website.verticals') }}" class="link-level-1 {{ request()->is('verticals') ? 'color-active' : '' }}">Verticals</a>
                                </li>
                                <li class="item-level-1">
                                    <a href="{{ route('website.domains') }}" class="link-level-1 {{ request()->is('domains') ? 'color-active' : '' }}">Domains</a>
                                </li>
                                <li class="item-level-1">
                                    <a href="{{ route('website.library') }}" class="link-level-1 {{ request()->is('library') ? 'color-active' : '' }}">Library</a>
                                </li>
                                <li class="item-level-1">
                                    <a href="{{ route('website.csr') }}" class="link-level-1 {{ request()->is('csr') ? 'color-active' : '' }}">CSR</a>
                                </li>
                                <li class="item-level-1">
                                    <a href="{{ route('website.about') }}" class="link-level-1 {{ request()->is('about') ? 'color-active' : '' }}">About Us</a>
                                </li>
                                {{--  <li class="item-level-1">
                                    <a href="{{ route('website.contactus') }}" class="link-level-1 {{ request()->is('contact-us') ? 'color-active' : '' }}">Contact Us</a>
                                </li>  --}}

                            </ul>
                        </div>
                        <ul class="nav-bar-tools d-flex align-items-center justify-content-between">
                            <li class="item">
                                <span class="search-icon open"><i class="fas fa-search"></i></span>
                            </li>
                            <li class="item phone">
                                <div class="nav-bar-contact">
                                    <i class="icon-call"></i>
                                    <div class="content-box">
                                        <span>Phone Number</span>
                                        <a href="tel:00201212843661">0804-0933-570</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <span class="menu-icon open"><i class="fas fa-list"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- :: Search Box -->
        <div class="search-box">
            <form>
                <input type="search" placeholder="Search Here.....">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
            <span class="search-box-icon exit"><i class="fas fa-times"></i></span>
        </div>
