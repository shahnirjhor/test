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
<section class="breadcrumb-header" id="page" style="background-image: url(../website/assets/images/slide_06.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner">
                    <h1>Manufacturing Facility</h1>
                    <ul>
                        <li><a href="{{ route('website.home') }}">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Domain</li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Manufacturing Facility</li>
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
                    <h2>Empowering Future-Ready Infrastructure: Comprehensive, Customizable, and Fully-Integrated Electrical & Instrumentation Solutions
                    </h2>
                    <p>Our state-of-the-art 6,000 sq. ft. facility is designed for executing Electrical & Instrumentation projects efficiently. We specialize in engineering and manufacturing components such as MCC, LT Switchgear, Drives, RCP, Annunciator, and DB panels.
                        In addition, we work with DCS, PLC SCADA, E SCADA, and PMS systems, enabling us to assemble and manufacture HMI control, server/network panels, as well as operator and auxiliary consoles.
                        </p>

                    <p>Our comprehensive services include Pre-FAT, FAT, 3rd Party system integration, packing, and dispatching of projects. By offering custom-tailored solutions that seamlessly integrate with existing processes, we support and enhance your expansion capacities for the future.

                    </p>

                    <h5>Services : Jump ahead of the competition with Leap Frog Services - Your trusted partner for engineering solutions.
                    </h5>

                    <h3>Our extensive Electrical & Instrumentation services related to</h3>
                    <ul class="core-about-list">
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                <b>Documentation : </b>  Leap Frog Services provides comprehensive documentation for all your business needs, ensuring smooth operations and seamless transitions. With our documentation, you can focus on growing your business while we take care of the technical details.
                            </h4>
                        </li>
                        <br>
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                <b>Design and Engineering : </b> Expertly designed and engineered solutions to bring your vision to life. Our team combines creativity and technical expertise to deliver unparalleled results. Let us help you bring innovation to life with our expert team and cutting-edge technology.
                            </h4>
                        </li>
                        <br>
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                <b>System commissioning & troubleshooting : </b> Ensure optimal performance and minimize downtime with our system commissioning and troubleshooting services. Our experienced technicians will ensure your systems are running smoothly and address any issues efficiently to keep your business running smoothly.
                            </h4>
                        </li>
                        <br>
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                <b>Direct communication and comprehensive support : </b> At our core, we prioritize customer satisfaction by offering direct communication channels and comprehensive support. We are always here to address your needs and provide the support necessary to help you succeed. Ensure that customers have access to direct communication & support
                            </h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
