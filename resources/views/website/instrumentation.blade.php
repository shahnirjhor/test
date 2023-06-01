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
    <section class="breadcrumb-header" id="page" style="background-image: url(../website/assets/images/slide_02.JPG)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner">
                        <h1>Instrumentation & Control</h1>
                        <ul>
                            <li><a href="{{ route('website.home') }}">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>Domain</li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>Instrumentation & Control</li>
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
                        <h2>Customized Automation Solutions for Enhanced Industrial Performance
                        </h2>
                        <p>Industry automation is part of Leapfrog’s ongoing digital transformation and collaboration between people, systems and equipment for autonomous operations and sustainable performance, thereby ensuring the safety of people and the environment.</p>

                        <p>By capturing, processing, and analysing data from automated processes and machines, the employees can anticipate and avoid mechanical problems, improve productivity, and ensure linearity across the supply chain.
                        </p>
                        <h3>Our services include</h3>
                        <ul class="core-about-list">
                            <li><i class="fas fa-check"></i>
                                <h4>Infrastructure Systems Installation: Cabling, Instrument Air / Gas Tubing, and Impulse Piping Work
                                </h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Engineering for P&I Diagram, BID, PFD, instruments lists, hook up, cable schedule, interconnection diagram.
                                </h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>SITC of all instrumentation & automation equipments like SCADA, DCS/PLC Panels, IO Panels, Field Instruments, Drives, etc.

                                </h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Old DCS upgradation, PLC upgradation, DCS station license renewals/upgradations etc.
                                </h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Management systems like MIS, EMS systems, PMS, all third party OPC integration services etc.

                                </h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
