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
    <section class="breadcrumb-header" id="page" style="background-image: url(../website/assets/images/slide_01.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner">
                        <h1>Electrical Solutions</h1>
                        <ul>
                            <li><a href="{{ route('website.home') }}">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>Domain</li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>Electrical Solutions</li>
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
                        <h2>Comprehensive Expertise in Electrical Design & Execution</h2>
                        <p>Our Electrical division is experienced at delivering complete electrical and automation projects to major clients from various industries such as chemicals, oil & gas, and energy while ensuring reduced operational costs, maximized uptime, and optimized maintenance efficiency. </p>

                        <p>We follow the latest standards in design and execution of the turnkey electrical projects such as IS, IEC, IE rules, while also keeping in mind local statutory requirements, and CBIP guidelines.
                        </p>
                        <h3>Our offerings include</h3>
                        <ul class="core-about-list">
                            <li><i class="fas fa-check"></i>
                                <h4>Electrical Panels</h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Consultancy: Scoping, Design, and Engineering
                                </h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Erection & Commissioning Activities
                                </h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Plant Handover and As-Built Drawings
                                </h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Energy Audits and Load Trials
                                </h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Operations & Maintenance</h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Power Distribution: HT (Up to 11KV) & LT</h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Uninterruptible Power Systems (UPS)</h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Earthing & Lightning Protection Systems</h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Energy Monitoring and Emergency Lighting</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Page Content -->
    {{--  <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Domain</h1>
                </div>
            </div>
        </div>
    </div>  --}}


    {{--  <div class="fun-facts1">
        <div class="container">

            <div class="col-md-12">
                <!--======  Start Section Title One ======-->
                <div class="section-title-one">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <div class="content">
                                        <h2 class="fw-bold">ELECTRICAL <em>SOLUTIONS</em> </h2>
                                        <p style="color: black; text-align: center; font-size: 16px;">
                                            Managing and Executing Electrical Design
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </div>
                <!--====== ABOUT TWO PART ENDS ======-->


                <div class="row">

                    <div class="col-md-6">
                        <p style="color:black; font-size: 16px;">Our Electrical division is experienced at delivering
                            complete electrical and
                            automation projects to
                            major clients from various industries such as chemicals, oil & gas, and energy while ensuring
                            reduced operational costs, maximized uptime, and optimized maintenance efficiency. We follow the
                            latest standards in design and execution of the turnkey electrical projects such as IS, IEC, IE
                            rules, while also keeping in mind local statutory requirements, and CBIP guidelines. We provide:
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('/website/assets/images/electrical-solutions.jpg') }}"
                            style="border-radius: 2%; width:350px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                            alt="Electrical Solutions">
                    </div>

                </div>


            </div>

        </div>

        <!--====== ABOUT ONE PART START ======-->
        <section class="about-area about-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-title text-center">
                            <h4 class="title fw-bold">Electrical Solutions We Provide</h4>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-8">
                        <div class="single-about-items">
                            <div class="items-icon">
                                <i class="lni lni-bullhorn"></i>
                            </div>
                            <div class="items-content">
                                <h6 class="items-title">Complete range of Electrical Panels</h6>

                            </div>
                        </div>
                        <!-- single about items -->
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <div class="single-about-items">
                            <div class="items-icon">
                                <i class="lni lni-investment"></i>
                            </div>
                            <div class="items-content">
                                <h6 class="items-title">Consultancy- Scoping, Design, Engineering</h6>

                            </div>
                        </div>
                        <!-- single about items -->
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <div class="single-about-items">
                            <div class="items-icon">
                                <i class="lni lni-handshake"></i>
                            </div>
                            <div class="items-content">

                                <p class="text">
                                    Erection & Commissioning activities- Erection Schedule, Verification of material,
                                    Mobilization of manpower, positioning of equipment ...
                                </p>
                            </div>
                        </div>
                        <!-- single about items -->
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <div class="single-about-items">
                            <div class="items-icon">
                                <i class="lni lni-handshake"></i>
                            </div>
                            <div class="items-content">

                                <p class="text">
                                    Cable tray erection, Cable laying,
                                    Cable termination, Testing & No load trials.
                                </p>
                            </div>
                        </div>
                        <!-- single about items -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </section>
        <!--====== ABOUT ONE PART ENDS ======-->
    </div>  --}}

    {{--  <div class="container my-5">

        <div class="entry-content mt-4">
            <h5 style="text-align: center;">Supporting documents required for statutory approvals</h5>

            <div class="row">
                <div class="col-md-6">
                    <div class="list-style">
                        <div class="list-style-five">
                            <ul>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> Load trials
                                </li>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> Preparation of as-built drawings
                                </li>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> Handing over of plant
                                </li>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> Energy Audits
                                </li>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> Operations and Maintenance
                                </li>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> Captive / Standby Generation
                                </li>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> HT Power Distribution (Up
                                    to 11KV)
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- list-style-four -->
                </div>
                <div class="col-md-6">
                    <div class="list-style">
                        <div class="list-style-five">
                            <ul>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> LT Power Distribution
                                </li>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> Uninterruptible Power Systems (UPS)
                                </li>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> Earthing and Lighting Protection Systems
                                </li>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> Energy Monitoring
                                    and Emergency Lighting
                                </li>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> External Low Voltage Distribution
                                </li>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> Voice and Wireless Data Systems
                                </li>
                                <li>
                                    <i class="lni lni-checkmark-circle"></i> Telephone Systems and Structured Cabling
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- list-style-four -->
                </div>
            </div>
        </div>
    </div>  --}}


@endsection
