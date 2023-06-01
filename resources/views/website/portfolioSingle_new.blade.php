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
                    <h1>OUR PORTFOLIO</h1>
                    <ul>
                        <li><a href="{{ route('website.home') }}">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Our Portfolio</li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>{{ strtoupper($portfolio->title) }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog" style="padding: 30px !important">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <div class="section-title mt-45">
                    <h2 class="title">{{ strtoupper($portfolio->title) }}</h2>
                </div>
                <div class="contact-form form-style-four mt-15">
                    <div class="row my-3">

                        @if (!empty($portfolio->location))
                            <div class="col-sm-1">
                                <i class="fa fa-map-marker" style="font-size:25px;"></i>
                            </div>
                            <div class="col-sm-4">
                                <h5>
                                    {{ $portfolio->location }}
                                </h5>
                            </div>
                        @endif
                    </div>
                    {!! $portfolio->description !!}
                </div>
                <!-- contact form -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 offset-xl-1">
                <img src="{{ asset('images/portfolio/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                    class="img-fluid" width="400px" style="border-radius: 2%;">
                <div class="section-title ">
                    @if (!empty($portfolio->year))
                        <h6 class="mt-5">YEAR COMPLETED:</h6>
                        <span>{{ $portfolio->year }}</span>
                    @endif
                </div>
                <div class="section-title ">
                    @if (!empty($portfolio->client))
                        <h6 class="mt-4">CLIENT:</h6>
                        <span>{{ $portfolio->client }}</span>
                    @endif
                </div>
                <div class="section-title ">
                    @if (!empty($portfolio->delivery_method))
                        <h6 class="mt-4">DELIVERY METHOD:</h6>
                        <span>{{ $portfolio->delivery_method }}</span>
                    @endif
                </div>
                <div class="section-title ">
                    @if (!empty($portfolio->category_id))
                        <h6 class="mt-4">MARKET:</h6>
                        <span>{{ $portfolio->category->name }}</span>
                    @endif
                </div>
                <div class="section-title ">
                    @if (!empty($portfolio->subcategory_id))
                        <h6 class="mt-4">SUB MARKET:</h6>
                        <span>{{ $portfolio->subcategory->name }}</span>
                    @endif
                </div>
                <div class="section-title ">
                    @if (!empty($portfolio->status))
                        <h6 class="mt-4">STATUS:</h6>
                        <span
                            class="btn btn-{{ $portfolio->status == 'completed' ? 'success' : 'info' }}">{{ $portfolio->status }}</span>
                    @endif
                </div>

                <!-- contact-info -->
            </div>
        </div>
    </div>
</section>
@endsection
