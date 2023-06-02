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

    <!-- :: Breadcrumb Header -->
        <section class="breadcrumb-header" id="page" style="background-image: url(website/assets/images/page-heading-bg.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner">
                            <h1>Domains</h1>
                            <ul>
                                <li><a href="{{ route('website.home') }}">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>Domain</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog py-100-70">
            <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="card text-center border-0">
                        <a href="{{ route('domains.electrical-solutions') }}">
                            <img src="{{ asset('website/assets/images/sustainable-energy-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                            <div class="card-body">
                                <h4 class="card-title" style="color:black">Electrical Solutions</h4>
                            </div>
                        </a>

                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="card text-center border-0">
                        <a href="{{ route('domains.instrumentation-control') }}">
                            <img src="{{ asset('website/assets/images/medical-laboratory-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                            <div class="card-body">
                            <h4 class="card-title" style="color:black">Instrumentation & Control</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="card text-center border-0">
                        <a href="{{ route('domains.fire-protection') }}">
                            <img src="{{ asset('website/assets/images/sprinklers-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                            <div class="card-body">
                            <h4 class="card-title" style="color:black">Fire Protection</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top: 25px !important">
                <div class="col-sm-4 col-md-4">
                    <div class="card text-center border-0">
                        <a href="{{ route('domains.building-automation-systems') }}">
                            <img src="{{ asset('website/assets/images/software-application-2.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                            <div class="card-body">
                            <h4 class="card-title" style="color:black"><i class="fa fa-institution" aria-hidden="true"></i>Building Automation Systems</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="card text-center border-0">
                        <a href="{{ route('domains.e-house') }}">
                            <img src="{{ asset('website/assets/images/e-house-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                            <div class="card-body">
                            <h4 class="card-title" style="color:black">Modular Substation Solutions</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="card text-center border-0">
                        <a href="{{ route('domains.manufacturing-facility') }}">
                        <img src="{{ asset('website/assets/images/home-automation-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                        <div class="card-body">
                          <h4 class="card-title" style="color:black">Manufacturing Facility</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="services" style="padding: 40px !important;">
            <div class="container">
                <div class="sec-title">
                    <div class="row">
                        <div class="col-lg-12 align-items-center">
                            <h3>Services</h3>
                            <p>Jump ahead of the competition with Leap Frog Services - Your trusted partner for engineering solutions.</p>
                            <p>Our extensive Electrical & Instrumentation services related to</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="card" style="padding: 20px;">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center">
                                    <i class="far fa-file fa-2x"></i><br><br>
                                    Documentation
                                </h4><br>
                                <p class="card-text" style="text-align: center">Leap Frog Services provides comprehensive documentation for all your business needs, ensuring smooth operations and seamless transitions. With our documentation, you can focus on growing your business while we take care of the technical details.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="card" style="padding: 20px;">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center">
                                    <i class="fas fa-code fa-2x"></i><br><br>
                                    Design and Engineering
                                </h4><br>
                                <p class="card-text" style="text-align: center">Expertly designed and engineered solutions to bring your vision to life. Our team combines creativity and technical expertise to deliver unparalleled results. Let us help you bring innovation to life with our expert team and cutting-edge technology.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="card" style="padding: 20px;">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center">
                                    <i class="fas fa-hammer fa-2x"></i><br><br>
                                    System Commissioning & Troubleshooting
                                </h4><br>
                                <p class="card-text" style="text-align: center">Ensure optimal performance and minimize downtime with our system commissioning and troubleshooting services. Our experienced technicians will ensure your systems are running smoothly and address any issues efficiently to keep your business running smoothly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="card" style="padding: 20px;">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center">
                                    <i class="fas fa-wrench fa-2x"></i><br><br>
                                    Direct communication and comprehensive support
                                </h4><br>
                                <p class="card-text" style="text-align: center">At our core, we prioritize customer satisfaction by offering direct communication channels and comprehensive support. We are always here to address your needs and provide the support necessary to help you succeed. Ensure that customers have access to direct communication & support

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    {{--  <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Domains</h1>
                </div>
            </div>
        </div>
    </div>




    <div class="fun-facts1">
        <div class="container">

            <div class="col-md-12">
                <div>
                    <h2 style="text-align: center;">DOMAINS </h2>


                    <!--====== CARD PART START ======-->
                    <section class="card-area pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single-card card-style-one border">
                                        <div class="card-image ">
                                            <a href="{{ route('domains.electrical-solutions') }}"> <img
                                                    src="{{ asset('website/assets/images/sustainable-energy.png') }}"
                                                    width="100px" alt="Image" />
                                        </div>
                                        <div class="card-content">
                                            <h6 class="card-title" style='text-align:center;'>
                                                ELECTRICAL
                                                SOLUTIONS</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <!-- single-card -->
                                    <!-- single-card -->
                                </div>
                                <!-- col -->
                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single-card card-style-one border">
                                        <div class="card-image ">
                                            <a href="{{ route('domains.instrumentation-control') }}">
                                                <img src="{{ asset('website/assets/images/medical-laboratory.png') }}"
                                                    width="100px" alt="Image" />
                                        </div>
                                        <div class="card-content">
                                            <h6 class="card-title" style='text-align:center;'>
                                                INSTRUMENTATION & CONTROL</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <!-- single-card -->
                                    <!-- single-card -->
                                </div>
                                <!-- col -->
                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single-card card-style-one border">
                                        <a href="{{ route('domains.fire-protection') }}">
                                            <div class="card-image ">
                                                <img src="{{ asset('website/assets/images/sprinklers.png') }}"
                                                    width="100px" alt="Image" />
                                            </div>
                                            <div class="card-content">
                                                <h6 class="card-title" style='text-align:center;'>
                                                    FIRE PROTECTION
                                        </a>
                                        </h6>
                                    </div>
                                </div>
                                <!-- single-card -->
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-4 col-md-7 col-sm-9">
                                <div class="single-card card-style-one border">
                                    <div class="card-image ">
                                        <a href="{{ route('domains.it-infrastructure') }}"> <img
                                                src="{{ asset('website/assets/images/software-application.png') }}"
                                                width="100px" alt="Image" />
                                    </div>
                                    <div class="card-content">
                                        <h6 class="card-title" style='text-align:center;'>
                                            IT INFRASTRUCTURE</a>
                                        </h6>
                                    </div>
                                </div>
                                <!-- single-card -->
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-4 col-md-7 col-sm-9">
                                <div class="single-card card-style-one border">
                                    <div class="card-image ">
                                        <a href="{{ route('domains.building-automation-systems') }}"> <img
                                                src="{{ asset('website/assets/images/home-automation.png') }}"
                                                width="100px" alt="Image" />
                                    </div>
                                    <div class="card-content">
                                        <h6 class="card-title" style='text-align:center;'>
                                            BUILDING AUTOMATION SYSTEMS</a>
                                        </h6>
                                    </div>
                                </div>
                                <!-- single-card -->
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-4 col-md-7 col-sm-9">
                                <div class="single-card card-style-one border">
                                    <div class="card-image ">
                                        <a href="{{ route('domains.e-house') }}"> <img
                                                src="{{ asset('website/assets/images/e-house.png') }}" width="100px"
                                                alt="Image" />
                                    </div>
                                    <div class="card-content">
                                        <h6 class="card-title" style='text-align:center;'>
                                            E-HOUSE</a>
                                        </h6>
                                    </div>
                                </div>
                                <!-- single-card -->
                            </div>
                            <!-- col -->
                        </div>
                        <!-- row -->
                </div>
                <!-- container -->
                </section>
                <!--====== CARD PART ENDS ======-->

            </div>
        </div>

    </div>

    </div>

    <!--====== FEATURE ONE PART START ======-->
    <section class="features-area features-one">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h3 class="title">SERVICES</h3>
                        <p style="color:black; text-align: center;">
                            Jump ahead of the competition with Leap Frog Services - Your trusted partner for Engineering
                            solutions.
                        </p><br>
                        <b>Our extensive Electrical & Instrumentation services related to:</b>
                    </div>
                    <!-- row -->
                </div>
            </div>
            <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-7 col-sm-9">
                    <div class="features-style-one text-center">
                        <div class="features-icon">
                            <i class="lni lni-files"></i>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title">Documentation</h4>
                            <p class="text">
                                Leap Frog Services provides comprehensive documentation for all your business needs,
                                ensuring
                                smooth operations and seamless transitions. With our documentation, you can focus on growing
                                your business while we take care of the technical details.
                            </p>

                        </div>
                    </div>
                    <!-- single features -->
                </div>
                <div class="col-lg-6 col-md-7 col-sm-9">
                    <div class="features-style-one text-center">
                        <div class="features-icon">
                            <i class="lni lni-construction"></i>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title">Design & Engineering </h4>
                            <p class="text">
                                Expertly designed and engineered solutions to bring your vision to life. Our team combines
                                creativity and technical expertise to deliver unparalleled results. Let us help you bring
                                innovation to life with our expert team and cutting-edge technology.
                            </p>

                        </div>
                    </div>
                    <!-- single features -->
                </div>
                <div class="col-lg-6 col-md-7 col-sm-9">
                    <div class="features-style-one text-center">
                        <div class="features-icon">
                            <i class="lni lni-hammer"></i>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title">System Commissioning & Troubleshooting </h4>
                            <p class="text">
                                Ensure optimal performance and minimize downtime with our system commissioning and
                                troubleshooting services. Our experienced technicians will ensure your systems are running
                                smoothly and address any issues efficiently to keep your business running smoothly.
                            </p>

                        </div>
                    </div>
                    <!-- single features -->
                </div>
                <div class="col-lg-6 col-md-7 col-sm-9">
                    <div class="features-style-one text-center">
                        <div class="features-icon">
                            <i class="lni lni-phone"></i>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title">Direct Communication and Comprehensive Support </h4>
                            <p class="text">
                                At our core, we prioritize customer satisfaction by offering direct communication channels
                                and comprehensive support. We are always here to address your needs and provide the support
                                necessary to help you succeed. Ensure that customers have access to direct communication &
                                support
                            </p>

                        </div>
                    </div>
                    <!-- single features -->
                </div>

            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== FEATURE ONE PART ENDS ======-->


    <!--====== CALL TO ACTION ONE PART START ======-->
    <section class="call-action-area call-action-one">
        <div class="container">
            <div class="row align-items-center call-action-content">
                <div class="col-xl-8 col-lg-8">
                    <div class="call-action-text">
                        <h2 class="action-title">
                            FACTORY
                        </h2>
                        <p class="text-lg">
                            Our factory is equipped with 6000 sq. ft space to execute Electrical & Instrumentation projects.
                            With our existing facility we can execute Electrical projects along with related MCC, LT
                            Switchgear, Drives, RCP, Annunciator, DB panels etc. engineering and manufacturing. <br>
                            We also work with DCS, PLC SCADA, E SCADA, PMS systems and can assemble / manufacture HMI
                            control, Servers / Network panels, and operator and auxiliary consoles. <br>
                            With these facilities we can complete Pre-FAT, FAT, 3rd Party system integration, packing, and
                            dispatching of projects. <br>
                            This assures a custom-tailored solution that not only integrates with existing process, also
                            augments and supports their expansion capacities for the future.

                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="call-action-btn rounded-buttons text-lg-end">
                        <a href="{{ route('website.contactus') }}" class="btn primary-btn rounded-full">
                            Contact Now
                        </a>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== CALL TO ACTION ONE PART ENDS ======-->  --}}
@endsection
