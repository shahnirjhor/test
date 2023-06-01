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
<section class="breadcrumb-header" id="page" style="background-image: url(../website/assets/images/slide_03.JPG)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner">
                    <h1>Fire Protection</h1>
                    <ul>
                        <li><a href="{{ route('website.home') }}">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Domain</li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Fire Protection</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog py-100-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-services-content-box">
                    <h2>Comprehensive Safety Solutions for People, Property, and the Planet
                    </h2>
                    <p>Our Total Fire Safety services are designed to keep your entire system always secure. From designing and installation to troubleshooting and monitoring, we provide fire protection solutions that are evolved to avert high-level threats and build resilience.</p>

                    <p>Strict adherence to national fire codes and regulations is the first and most basic prerequisite of our commitment to protecting your people and property. </p>
                    <h3>Our expertise includes</h3>
                        <ul class="core-about-list">
                            <li><i class="fas fa-check"></i>
                                <h4>Fire Detection & Alarm Systems: Addressable-Intelligent, Conventional, and Hybrid

                                </h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Consultancy: Scoping, Design, and Engineering

                                </h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Contracting & Commissioning


                                </h4>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Troubleshooting and Design Verification
                                </h4>
                            </li>

                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Operations & Maintenance</h4>
                            </li>

                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Fire Suppression Systems: Water, Gas, Portable
                                </h4>
                            </li>

                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Structural Steel Fire Protection and Fire Stopping</h4>
                            </li>

                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Fire Rated Doors and Glass</h4>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
