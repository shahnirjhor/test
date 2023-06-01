@extends('website.layouts.app_new')

@section('content')
<div class="menu-box">
    <div class="inner-menu">
        <div class="website-info">
            <a href="{{ route('website.home') }}" class="logo"><img class="img-fluid" src="{{ asset('website/gatedata/assets/images/logo/first-round-black.png') }}" alt="01 Logo" style="max-width: 111px;"></a>
            <p>Since 2003, LeapFrog Engineering Services has strived to push the boundaries of what design, engineering, and construction can accomplish.</p>
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <div class="contact-box">
                <i class="icon-call"></i>
                <div class="box">
                    <a class="phone" href="tel:08040933570">08040933570 </a>
                    <a class="phone" href="tel:08040954188">08040954188</a>
                </div>
            </div>
            <div class="contact-box">
                <i class="icon-email"></i>
                <div class="box">
                    <a class="mail" href="mailto:info@lesgroup.in">Info@Lesgroup.in</a>
                </div>
            </div>
            <div class="contact-box">
                <i class="icon-location"></i>
                <div class="box">
                    <p>Chaitanya Dhriti Rudresh No 496, 6th Main, 8th Cross St, Vijaya Bank Layout,</p>
                    <p>Bengaluru, Karnataka 560076</p>
                </div>
            </div>
        </div>
        <div class="follow-us">
            <h4>Follow Us</h4>
            <ul class="icon-follow">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
        <span class="menu-box-icon exit"><i class="fas fa-times"></i></span>
    </div>
</div>
<section class="breadcrumb-header" id="page" style="background-image: url(../website/assets/images/page-heading-bg.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner">
                    <h1>Verticals</h1>
                    <ul>
                        <li><a href="{{ route('website.home') }}">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Vertical</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services" style="padding: 40px !important; background-color:rgb(164 198 57 / 200%); background-image:none !important;">
    <div class="container">
        <div class="sec-title">
            <div class="row">
                <div class="col-lg-6 align-items-center">
                    <h3>Verticals Of LeapFrog</h3>
                </div>
            </div>
        </div>
        <div class="align-items-center justify-content-between">
            <div class="row features-provide-list">
                @foreach ($categories as $category)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <a href="{{ route('website.porfolioListCategory', ['id' => $category->id]) }}">
                            <div class="item-features-provide-list">
                                <span></span>
                                <img width="30px" class="icon-features-provide-list-item" src="{{ asset('/images/category_icons/' . $category->image) }}" alt="image" />
                                <div class="content-box">
                                    <h4>{{ $category->name }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="blog py-100-70">
    <div class="container">
        <div class="sec-title">
            <div class="row">
                <div class="col-lg-5">
                    <h2>Satisfied customers in India & overseas
                    </h2>
                    <h3>OUR AWESOME CLIENTS</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                @foreach ($clients as $client)
                    <div class="col-md-3 col-6">
                        <div class="single-client text-center">
                            <img src="{{ asset('/images/client/' . $client->image) }}" width="170px"
                                alt="{{ $client->name }}" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
