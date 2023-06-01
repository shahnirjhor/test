<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Since 2003, Leapfrog Engineering Services has strived to push the boundaries of what design, engineering, and construction can accomplish.">
    <meta name="author" content="PValue Solutions">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    @php
        $name = Route::currentRouteName();
        $routename = explode('.', $name);
        $name = $routename[1];
    @endphp
    <title>Leap Frog - {{ strtoupper($name) }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('website/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/owl.css') }}">

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    {{-- Toaster --}}

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

    <!-- FAVICON -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon" />
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->


    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('website.home') }}">
                    <img src="{{ asset('logo.png') }}" alt="Leap Frog" width="110px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('website.about') }}">About Us</a>
                        </li>
                        <li class="nav-item {{ request()->is('careers') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('website.career') }}">Career</a>
                        </li>
                        <li class="nav-item ">
                            <form action="{{ route('website.search') }}" class="form-inline my-2 my-lg-0"
                                method="GET">
                                <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('website.home') }}">Home
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('verticals') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('website.verticals') }}">Verticals</a>
                        </li>
                        <li class="nav-item {{ request()->is('domains') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('website.domains') }}">Our Domains</a>
                        </li>
                        <li class="nav-item {{ request()->is('library') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('website.library') }}">Library</a>
                        </li>
                        <li class="nav-item {{ request()->is('csr') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('website.csr') }}">CSR</a>
                        </li>
                        <li class="nav-item" {{ request()->is('contact-us') ? 'active' : '' }}>
                            <a class="nav-link" href="{{ route('website.contactus') }}">Contact Us</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
