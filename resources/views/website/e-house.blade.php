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
<section class="breadcrumb-header" id="page" style="background-image: url(../website/assets/images/slide_05.jfif)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner">
                    <h1>Modular Substation Solutions</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li><a href="{{ route('website.domains') }}">Domain</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Modular Substation Solutions</li>
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
                    <h2>Efficient and Customizable E-House Alternatives</h2>
                    <p>Our e-House modular substation solution offers a cost-effective, risk-reduced alternative to traditional construction methods. With custom-engineered modules, we provide tailored solutions for equipment layout, site footprint, and logistics.</p>
                    <h3>Key features include</h3>
                    <ul class="core-about-list">
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                Variety of E-Houses: Single, Split, Multi-Storey, Self Interlock Type, Trailer Mounted, and for Battery Energy Storage Solutions (BESS)
                            </h4>
                        </li>
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                Specialized Applications: Containerized Substations, Bare Analyzer Shelters, Prefabricated Data Centre Shelters, and Offshore Applications
                            </h4>
                        </li>
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                Design Features: Structural Design using STAAD Pro Analysis & Ansys, Design Codes (IS 800, ASCE, Euro Code), Lifting & Transportation Analysis, In-Site Condition Analysis, Fire Rating, Blast Rated Constructions, Ingress Protection (IP Rating), and PE Stamping for the USA Region
                            </h4>
                        </li>
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                Associated E-House Subsystems: Lighting, Earthing & Electrification, Fire Detection & Suppression, HVAC, Lightning Protection, Access Control, and Surveillance Systems
                            </h4>
                        </li>
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                Integration & Testing: Mechanical Installation, Electrical Integration, and Testing of OEM's Equipment (Switch Gears, VFD, Statcom, Transformer, UPS, Battery Racks) as per OEM's procedure
                            </h4>
                        </li>
                    </ul>


                    <p>Our state-of-the-art facilities and design-build expertise ensure efficiency and competitiveness in cost and time, delivering functional, fully tested modules that reduce on-site installation and commissioning work while providing schedule predictability and a shortened energization period.
                    </p>
                    <h2>Services</h2>
                    <p>Experience excellence in industrial automation with our platform-independent services. Our end-to-end solutions cover the entire project lifecycle, including design, development, migration, and 24/7 support, for both greenfield and brownfield projects.</p>
                    <h3>Key Offerings</h3>
                    <ul class="core-about-list">
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                Design & Documentation: Audit, Feasibility Study, System & Network Architecture, Specifications, Project Documentation, and As-Built Documentation


                            </h4>
                        </li>
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                Programming & Development: PLC programming, SCADA/HMI development, DCS, Safety, Drives, Protection Relay, RTU, Batch, Historian, and MIS Reporting

                            </h4>
                        </li>
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                System commissioning troubleshooting, and AMC.
                            </h4>
                        </li>
                        <li style="width: 100% !important"><i class="fas fa-check"></i>
                            <h4>
                                Migration & Upgrade: Upgradation and migration of systems, Simulation, Integrated testing, and Reverse engineering

                            </h4>
                        </li>
                    </ul>
                    <p>Leverage our global team of 300+ skilled engineers, advanced project management practices, and a proven track record for delivering top-quality engineering services.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
