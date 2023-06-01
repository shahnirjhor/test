@extends('website.layouts.app_new')

@section('content')
    <style>
.callback-form {
    background-color: #f7f7f7;
    padding-top: 80px;
    padding-bottom: 80px;
}
    </style>
    <!-- Page Content -->
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

    <!-- :: Breadcrumb Header -->
        <section class="breadcrumb-header" id="page" style="background-image: url(website/assets/images/page-heading-bg.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner">
                            <h1>Contact Us</h1>
                            <ul>
                                <li><a href="{{ route('website.home') }}">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <div class="contact-information py-100-70">
        <div class="container">
            <div class="row">

                <div class="col-md-4 mb-2">
                    <div class="card text-center">
                       <div class="card-body py-5" style="height: 315px !important;" >
                        <span style="font-size: 48px; color:#a4c639;"><i class="fa fa-phone"></i></span>
                        <h4 style="margin-top: 40px;">Phone</h4>
                        <p class="mt-2">Reach out and touch us - contact us today!</p><br>
                        <div class="contact" >
                            <a style="color:#a4c639;" href="tel:08040933570">08040933570</a>&nbsp;|&nbsp;<a style="color:#a4c639;" href="tel:08040954188">08040954188</a>
                        </div>
                       </div>
                    </div>
                </div>

                <div class="col-md-4 mb-2">
                    <div class="card text-center">
                       <div class="card-body py-5" style="height: 315px !important;">
                        <span style="font-size: 48px; color:#a4c639;"><i class="fa fa-envelope"></i></span>
                        <h4 style="margin-top: 40px;">Email</h4>
                        <p class="mt-2">Drop us a line - we're just an email away!</p><br>
                        <a style="color:#a4c639;" href="mailto:info@lesgroup.in">info@lesgroup.in</a>
                       </div>
                    </div>
                </div>

                <div class="col-md-4 mb-2">
                    <div class="card text-center">
                        <div class="card-body py-5" style="height: 315px !important;">
                            <div class="contact-item">
                                <span style="font-size: 48px; color:#a4c639;"><i class="fa fa-map-marker"></i></span>
                                <h4 style="margin-top: 40px;">Location</h4>
                                <p>Chaitanya Dhriti Rudresh No 496, 6th Main, 8th Cross St, Vijaya Bank Layout, Bengaluru, Karnataka
                                    560076</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    @include('website.partials.request_callback')

    <div id="map">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.2339826390316!2d77.60520101482118!3d12.89267059090767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1505d1a00f59%3A0xbf35a536109bebf8!2sLeapFrog%20Engineering%20Services%20Pvt.%20Ltd!5e0!3m2!1sen!2sin!4v1682326233580!5m2!1sen!2sin"
            width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
@endsection
