@extends('website.layouts.app_new')

@section('content')
<style>
    .pricing-item {
    max-height: 80%;
}
</style>
<!-- :: Menu Box -->
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

        <!-- :: Header -->
        <section class="header" id="page">
            <div class="header-carousel owl-carousel owl-theme">

                <div class="sec-hero display-table" style="background-image: url('{{ asset('website/assets/images/slide_01.jpg')}}');">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner" style="text-align: center;">
                                        <h3 class="handline">Electrical Solutions</h3>
                                        {{--  <br>  --}}
                                        <div class="top-handline">Comprehensive Expertise in Electrical Design & Execution</div>
                                        {{--  <p class="about-website">Our Electrical division is experienced at delivering complete electrical and automation projects to major clients from various industries such as chemicals, oil & gas, and energy while ensuring reduced operational costs, maximized uptime, and optimized maintenance efficiency. We follow the latest standards in design and execution of the turnkey electrical projects such as IS, IEC, IE rules, while also keeping in mind local statutory requirements, and CBIP guidelines. </p>  --}}
                                        <br>
                                        <br>
                                        <a class="btn-1 btn-2" href="{{ route('domains.electrical-solutions') }}" target="_blank">Know more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec-hero display-table" style="background-image: linear-gradient(180deg,rgba(0,0,0,0.54) 0%,rgba(0,0,0,0.62) 100%),url('{{ asset('website/assets/images/slide_02.JPG')}}');">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner" style="text-align: center;">
                                        <h1 class="handline">Instrumentation & Control</h1>
                                        <div class="top-handline">Customized Automation Solutions for Enhanced Industrial Performance</div>
                                        {{--  <p class="about-website">Industry automation is part of Leapfrog’s ongoing digital transformation and collaboration between people, systems and equipment for autonomous operations and sustainable performance, thereby ensuring the safety of people and the environment. By capturing, processing, and analysing data from automated processes and machines, the employees can anticipate and avoid mechanical problems, improve productivity, and ensure linearity across the supply chain.</p>  --}}
                                        <br>
                                        <br>
                                        <a class="btn-1 btn-2" href="{{ route('domains.instrumentation-control') }}">Know more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec-hero display-table" style="background-image: linear-gradient(180deg,rgba(0,0,0,0.54) 0%,rgba(0,0,0,0.62) 100%),url('{{ asset('website/assets/images/slide_03.jpg')}}');">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner" style="text-align: center;">
                                        <h1 class="handline">Fire Protection</h1>
                                        <div class="top-handline">Comprehensive Safety Solutions for People, Property, and the Planet</div>
                                        {{--  <p class="about-website">Our Total Fire Safety services are designed to keep your entire system always secure. From designing and installation to troubleshooting and monitoring, we provide fire protection solutions that are evolved to avert high-level threats and build resilience. Strict adherence to national fire codes and regulations is the first and most basic prerequisite of our commitment to protecting your people and property.  --}}
                                        {{--  </p>  --}}
                                        <br>
                                        <br>
                                        <a class="btn-1 btn-2" href="{{ route('domains.fire-protection') }}">Know more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sec-hero display-table" style="background-image: linear-gradient(180deg,rgba(0,0,0,0.54) 0%,rgba(0,0,0,0.62) 100%),url('{{ asset('website/assets/images/slide_04.jpg')}}');">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner" style="text-align: center;">
                                        <h1 class="handline">Building Automation Systems</h1>
                                        <div class="top-handline">Integrated Controls for Enhanced Building Efficiency and Functionality</div>
                                        {{--  <p class="about-website">Maximize productivity and efficiency with our cutting-edge building automation solutions. Experience seamless integration of advanced control systems, process optimization, and real-time data analysis for improved decision-making, safety, and sustainable performance in your operations.</p>  --}}
                                        <br>
                                        <br>
                                        <a class="btn-1 btn-2" href="{{ route('domains.building-automation-systems') }}">Know more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sec-hero display-table" style="background-image: linear-gradient(180deg,rgba(0,0,0,0.54) 0%,rgba(0,0,0,0.62) 100%),url('{{ asset('website/assets/images/slide_05.jfif')}}');">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner" style="text-align: center;">
                                        <h1 class="handline">Modular Substation Solutions</h1>
                                        <div class="top-handline">Efficient and Customizable E-House Alternatives</div>
                                        {{--  <p class="about-website">Our e-House modular substation solution offers a cost-effective, risk-reduced alternative to traditional construction methods. With custom-engineered modules, we provide tailored solutions for equipment layout, site footprint, and logistics.</p>  --}}
                                        <br>
                                        <br>
                                        <a class="btn-1 btn-2" href="{{ route('domains.e-house') }}">Know more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sec-hero display-table" style="background-image: linear-gradient(180deg,rgba(0,0,0,0.54) 0%,rgba(0,0,0,0.62) 100%),url('{{ asset('website/assets/images/slide_06.jpg')}}');">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner" style="text-align: center;">

                                        <h1 class="handline">Manufacturing Facility</h1>
                                        <div class="top-handline">Empowering Future-Ready Infrastructure: Comprehensive, Customizable, and Fully-Integrated Electrical & Instrumentation Solutions</div>
                                        {{--  <p class="about-website">Our state-of-the-art 6,000 sq. ft. facility is designed for executing Electrical & Instrumentation projects efficiently. We specialize in engineering and manufacturing components such as MCC, LT Switchgear, Drives, RCP, Annunciator, and DB panels.
                                            In addition, we work with DCS, PLC SCADA, E SCADA, and PMS systems, enabling us to assemble and manufacture HMI control, server/network panels, as well as operator and auxiliary consoles.
                                            </p>  --}}
                                        <br>
                                        <br>
                                        <a class="btn-1 btn-2" href="{{ route('domains.manufacturing-facility') }}">Know more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="newsletter" style="padding: 20px 0 !important">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h1>Our Offerings</h1>
                            <p class="text-center">With more than 15 years of experience, Leapfrog specializes in delivering comprehensive turnkey solutions in the fields of electrical, instrumentation, industrial automation fire safety, and building automation systems, ensuring optimal performance, unparalleled safety, and customer satisfaction.</p>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>

        <!-- :: Features -->
        <section class="features" style="padding: 20px 0 !important">
            {{--  <div class="container">  --}}
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-2">
                        <div class="card text-center border-0">
                            <a href="{{ route('domains.electrical-solutions') }}">
                                <img src="{{ asset('website/assets/images/sustainable-energy-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                                <div class="card-body">
                                    <h4 class="card-title" style="color:black">Electrical Solutions</h4>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-2">
                        <div class="card text-center border-0">
                            <a href="{{ route('domains.instrumentation-control') }}">
                                <img src="{{ asset('website/assets/images/medical-laboratory-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                                <div class="card-body">
                                <h4 class="card-title" style="color:black">Instrumentation & Control</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-2">
                        <div class="card text-center border-0">
                            <a href="{{ route('domains.fire-protection') }}">
                                <img src="{{ asset('website/assets/images/sprinklers-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                                <div class="card-body">
                                <h4 class="card-title" style="color:black">Fire Protection</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-2">
                        <div class="card text-center border-0">
                            <a href="{{ route('domains.building-automation-systems') }}">
                                <img src="{{ asset('website/assets/images/software-application-2.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                                <div class="card-body">
                                <h4 class="card-title" style="color:black"><i class="fa fa-institution" aria-hidden="true"></i>Building Automation Systems</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-2">
                        <div class="card text-center border-0">
                            <a href="{{ route('domains.e-house') }}">
                                <img src="{{ asset('website/assets/images/e-house-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                                <div class="card-body">
                                <h4 class="card-title" style="color:black">Modular Substation Solutions</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-2">
                        <div class="card text-center border-0">
                            <a href="{{ route('domains.manufacturing-facility') }}">
                            <img src="{{ asset('website/assets/images/manufacturing.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                            <div class="card-body">
                              <h4 class="card-title" style="color:black">Manufacturing Facility</h4>
                            </div>
                            </a>
                        </div>
                    </div>

                </div>
            {{--  </div>  --}}
        </section>

        <!-- :: About Us -->
        <section class="about-us" id="start">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="about-img-box">
                            <div class="img-box">
                                <img class="img-fluid" src="{{ asset('website/assets/images/about-us.jpeg') }}" alt="01 About">
                            </div>
                            <div class="about-project">
                                <i class="icon-about-project icon-folder"></i>
                                <div class="counter project-counter">9999</div>
                                <h5>project done</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="about-text-box">
                            <div class="sec-title">
                                <h2>LeapFrog Engineering Services</h2>
                                <h3>About Us</h3>
                                <p class="sec-explain">Leapfrog Engineering Services is a leading engineering, procurement, construction, and commissioning (EPCC) company specializing in electrical, instrumentation, fire safety, and automation systems. Our mission is to deliver innovative and sustainable solutions, tailored to meet the unique needs of clients across various industries. </p>
                            </div>
                            <div class="about-core">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="about-core-item">
                                            <i class="icon-item icon-technical-support"></i>
                                            <div class="content-box">
                                                <h4>VISION</h4>
                                                <p>We aim to become a market leader and centre of excellence offering our services.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="about-core-item">
                                            <i class="icon-item icon-filter"></i>
                                            <div class="content-box">
                                                <h4>MISSION</h4>
                                                <p>We strive to become the best integrated engineering services provider by completing every project.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-btn">
                                <a href="{{ route('website.about') }}" class="btn-1 btn-3">More About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- :: Statistic -->
        <div class="statistic">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 d-flex justify-content-center">
                        <div class="statistic-item">
                            <i class="icon-user"></i>
                            <div class="content">
                                <div class="statistic-counter">
                                    <span class="counter ">100</span> +
                                </div>
                                <div class="counter-name">Happy Clients</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex justify-content-center">
                        <div class="statistic-item">
                            <i class="icon-network-1"></i>
                            <div class="content">
                                <div class="statistic-counter">
                                    <span class="counter ">07</span> +
                                </div>
                                <div class="counter-name">Countries worldwide</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex justify-content-center">
                        <div class="statistic-item">
                            <i class="icon-development"></i>
                            <div class="content">
                                <div class="statistic-counter">
                                    <span class="counter ">100</span> +
                                </div>
                                <div class="counter-name">Staff</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- :: Services -->
        <section class="services" style="padding: 40px !important;">
            <div class="container">
                <div class="sec-title">
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <h3>Our Industry Associations</h3>
                        </div>
                    </div>
                </div>
                <div class="services-carousel owl-carousel owl-theme">
                    <div class="services-item" style="padding: 2px !important;">
                        <img class="img-fluid work-item-img" src="{{ asset('website/assets/images/clients/111.png') }}" alt="03 work">
                    </div>
                    <div class="services-item" style="padding: 2px !important;">
                        <img class="img-fluid work-item-img" src="{{ asset('website/assets/images/clients/222.png') }}" alt="03 work">
                    </div>
                    <div class="services-item" style="padding: 2px !important;">
                        <img class="img-fluid work-item-img" src="{{ asset('website/assets/images/clients/333.png') }}" alt="03 work">
                    </div>
                    <div class="services-item" style="padding: 2px !important;">
                        <img class="img-fluid work-item-img" src="{{ asset('website/assets/images/clients/222.png') }}" alt="03 work">
                    </div>
                    <div class="services-item" style="padding: 2px !important;">
                        <img class="img-fluid work-item-img" src="{{ asset('website/assets/images/clients/111.png') }}" alt="03 work">
                    </div>
                    <div class="services-item" style="padding: 2px !important;">
                        <img class="img-fluid work-item-img" src="{{ asset('website/assets/images/clients/333.png') }}" alt="03 work">
                    </div>
                    <div class="services-item" style="padding: 2px !important;">
                        <img class="img-fluid work-item-img" src="{{ asset('website/assets/images/clients/222.png') }}" alt="03 work">
                    </div>
                    <div class="services-item" style="padding: 2px !important;">
                        <img class="img-fluid work-item-img" src="{{ asset('website/assets/images/clients/111.png') }}" alt="03 work">
                    </div>
                </div>
            </div>
        </section>



        <!-- :: Provide -->
        <section class="provide">
            <div class="bg-section">
                <div class="overlay overlay-2"></div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="provide-img-box">
                            <div class="img-box"></div>
                            <div class="provide-presentation">
                                <a href="https://youtu.be/TKnufs85hXk" class="pulse" data-lity>
                                    <i class="fab fa-google-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8 d-flex align-items-center">
                        <div class="provide-text-box">
                            <div class="sec-title">
                                <h3>Message From Our CEO</h3>
                                <p class="sec-explain"  style="text-align:justify">Founded by Technocrats in 2003 as an E&I services company, LeapFrog has now embarked on journey to become a fully integrated Engineering company. It has carved out a niche for itself as an integrated Engineering Services Provider. Today, our services span multiple engineering disciplines like Electrical, Instrumentation, Fire Protection, and Automation. We bring under our umbrella the collective strength of our dedicated and dynamic team of professionals who have won spurs working for various MNC’s. Our vendors have been fine tuned to respond to our needs and seamlessly supply materials to our exacting standards. We have successfully completed projects both in India and overseas for various industry verticals like Oil & Gas, Food Process, Utilities and Infrastructure, Manufacturing, and Telecom. Commitment to excellence is the cornerstone of LeapFrog culture along with our endeavour to generate long term relationship with our clients. The success of achievements in a short span of time is solely scripted by valued customers who have shown immense trust and faith in our ability to deliver, coupled with our strong technical capabilities, impeccable time bound deliveries through the Design-Build delivery mechanism. As we begin this new phase of our journey, we want to reaffirm our commitment to our customers. We look forward to your support.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <!-- :: Pricing -->
                <div class="pricing">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="pricing-item">
                                <div class="item-top">
                                    <h4>Highly Qualified Team</h4>
                                    <p>Our dedicated and technically sound engineers with decades of experience ensure consistent time- bound deliveries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="pricing-item">
                                <div class="item-top">
                                    <h4>Single-Window Capability</h4>
                                    <p>Our design-build solutions result in faster turnaround and greater cost-savings for our customers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="pricing-item">
                                <div class="item-top">
                                    <h4>Multi-Location Footprint</h4>
                                    <p>Our expanding operations worldwide enable us to execute projects with greater efficiency across geographies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="pricing-item">
                                <div class="item-top">
                                    <h4>Fine-Tuned Vendors</h4>
                                    <p>Our team of highly-skilled vendors deliver materials to your exact standards and schedules.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </section>
        @if ($blog->isNotEmpty())
        <!-- :: Works -->
        <section class="works">
            <div class="container">
                <div class="sec-title">
                    <div class="row">
                        <div class="col-lg-5">
                            <h3>Blogs / News</h3>
                        </div>
                    </div>
                </div>
                {{-- <div class="work-carousel owl-carousel owl-theme"> --}}
                    <div class="row">
                    @foreach ($blog as $blog)
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="img-box" style="max-height: 220px;">
                                <a href="{{route('website.librarydetalis', ['id'=>$blog->id, 'category'=> $blog->categories])}}" class="open-post">
                                    <img class="img-fluid" src="{{asset('/images/library/' . $blog->image) }}" alt="{{$blog->name}}">
                                </a>
                            </div>
                            <div class="text-box">
                                <p>{{$blog->title}}</p>
                                <a href="{{route('website.librarydetalis', ['id'=>$blog->id, 'category'=>$blog->categories])}}" class="link">Read More</a>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="work-carousel-item">
                        <div class="work-item">
                            <span></span>
                            <div class="img-box" style="max-height: 300px;">
                                <img class="img-fluid work-item-img" src="{{ asset('/images/library/' . $blog->image) }}" alt="01 work">
                            </div>
                            <div class="hover-box">
                                <div class="text-box">
                                    <div class="tags"><a href="{{route('website.librarydetalis', ['id'=>$blog->id, 'category'=> $blog->categories])}}">{{$blog->title}}</a></div>
                                </div>
                                <ul class="work-icon">
                                    <li><a class="popup" href="{{ asset('/images/library/' . $blog->image) }}"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    @endforeach

                </div>
            </div>
        </section>
        @endif
        <!-- :: Testimonial -->
        <section class="testimonial py-100">
            <div class="bg-section">
                <div class="overlay overlay-2"></div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 padding-0">
                        <div class="testimonial-img-box">
                            <div class="img-box">
                                <img class="img-fluid" src="{{ asset('website/assets/images/testimonial.png') }}" alt="01 Testimonial Say">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 padding-0">
                        <div class="testimonial-text-box">
                            <div class="testimonial-carousel owl-carousel owl-theme">
                                @if ($testimonials->isNotEmpty())
                                @foreach ($testimonials as $testimonials_item)
                                <div class="testimonial-carousel-item">
                                    <div class="sec-title">
                                        <h3 style="color: white">Hear from our Customers</h3>
                                    </div>
                                    <div class="content-text-box">{!! $testimonials_item->description !!}</div>
                                    <div class="testimonial-name">
                                        <h4>{{$testimonials_item->name}}</h4>
                                        <span>{{$testimonials_item->designation}}</span><br>
                                        <span>{{$testimonials_item->company}}</span>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- :: Blog -->
        @if ($case_studies->isNotEmpty())
        <section class="blog py-100-70">
            <div class="container">
                <div class="sec-title">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2>Read All Cases</h2>
                            <h3>Case Studies</h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach ($case_studies as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="img-box" style="max-height: 220px;">
                                <a href="{{route('website.librarydetalis', ['id'=>$item->id, 'category'=> $item->categories])}}" class="open-post">
                                    <img class="img-fluid" src="{{asset('/images/library/' . $item->image) }}" alt="{{$item->name}}">
                                </a>
                            </div>
                            <div class="text-box">
                                <p>{{$item->title}}</p>
                                <a href="{{route('website.librarydetalis', ['id'=>$item->id, 'category'=>$item->categories])}}" class="link">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
        <!-- :: Newsletter -->
        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="sec-title">
                            <h2>The Future Is Yours To Make.</h2>
                            <h3>People With Passion For Engineering Solutions? Find Your Future At LeapFrog.</h3>

                            <div class="about-btn">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-3 d-flex align-items-center justify-content-between">
                        <a href="{{ route('website.career') }}" class="btn-1 btn-3">Career</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
