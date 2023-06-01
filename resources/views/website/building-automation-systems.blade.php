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
<section class="breadcrumb-header" id="page" style="background-image: url(../website/assets/images/slide_04.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner">
                    <h1>Building Automation Systems</h1>
                    <ul>
                        <li><a href="{{ route('website.home') }}">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Domain</li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Building Automation Systems</li>
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
                    <h2>Integrated Controls for Enhanced Building Efficiency and Functionality</h2>
                    <p>Maximize productivity and efficiency with our cutting-edge building automation solutions.</p>

                    <p>Experience seamless integration of advanced control systems, process optimization, and real-time data analysis for improved decision-making, safety, and sustainable performance in your operations.
                    </p>
                    <h3>Our solutions include</h3>
                    <ul class="core-about-list">
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                Controls & Displays for HVAC Systems
                            </h4>
                        </li>
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                Sensors, Switches, Control Systems, and Instruments for Measuring Pressure, Airflow, Temperature, and Electrical Current
                            </h4>
                        </li>
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                Access Control & Biometric Systems, Video Analytics, Intruder Alarm Systems, IP and Analog Video Surveillance Solutions, Time & Attendance Management, Parking Access Control, Visitor Management Systems, and PA Systems
                            </h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
