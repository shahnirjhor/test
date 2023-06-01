@extends('website.layouts.app_new')
<style>
    .tales {
  width: 100%;
}
.carousel-inner{
  width:100%;
  max-height: 200px !important;
}
</style>
@section('content')
<!-- :: Menu Box -->
        <div class="menu-box">
            <div class="inner-menu">
                <div class="website-info">
                    <a href="{{ route('website.home') }}" class="logo"><img class="img-fluid" src="{{ asset('website/gatedata/assets/images/logo/01_logo.png') }}" alt="01 Logo"></a>
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

                <div class="sec-hero display-table" style="background-image: url('{{ asset('website/assets/images/slide_01.webp')}}');">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="banner">
                                        <h1 class="handline">Electrical Solutions</h1>
                                        <div class="top-handline">Managing and Executing Electrical Design</div>
                                        <p class="about-website">Our Electrical division is experienced at delivering complete electrical and automation projects
                                            to major clients from various industries such as chemicals, oil & gas, and energy while ensuring
                                            reduced operational costs, maximized uptime, and optimized maintenance efficiency. We follow the
                                            latest standards in design and execution of the turnkey electrical projects such as IS, IEC, IE
                                            rules, while also keeping in mind local statutory requirements, and CBIP guidelines. </p>
                                        <a class="btn-1 btn-2" href="{{ route('domains.electrical-solutions') }}" target="_blank">Know more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec-hero display-table" style="background-image: linear-gradient(180deg,rgba(0,0,0,0.54) 0%,rgba(0,0,0,0.62) 100%),url('{{ asset('website/assets/images/slide_02.jpg')}}');">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="banner">
                                        <h1 class="handline">Instrumentation & Control</h1>
                                        <div class="top-handline">Instrumentation & Control solutions tailored to your needs</div>
                                        <p class="about-website">Leapfrog Engineering Service offers a wide range of Instrumentation & Control (Industrial
                                            Automation) and processing technologies that can help bring in higher Productivity, Quality,
                                            Project Management, Reliability and Efficiency to the process operation.
                                            Industry automation is part of Leapfrog’s ongoing digital transformation and collaboration
                                            between people, systems and equipment for autonomous operations and sustainable performance,
                                            thereby ensuring the safety of people and the environment. By capturing, processing, and
                                            analysing data from automated processes and machines, the employees can anticipate and avoid
                                            mechanical problems, improve productivity and ensure linearity across the supply chain.</p>
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
                                <div class="col-lg-10">
                                    <div class="banner">
                                        <h1 class="handline">Fire Safety & Security</h1>
                                        <div class="top-handline">Protecting People, Property, and the Planet</div>
                                        <p class="about-website">Our Total Fire Safety services are designed to keep your entire system always secure. From
                                            designing and installation to troubleshooting and monitoring, we provide fire protection
                                            solutions that are evolved to avert high-level threats and build resilience. Strict adherence to
                                            national fire codes and regulations is the first and most basic prerequisite of our commitment
                                            to protecting your people and property.</p>
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
                                <div class="col-lg-10">
                                    <div class="banner">
                                        <h1 class="handline">Building Automation Systems</h1>
                                        <div class="top-handline">Combining electrical and HVAC systems in a comprehensive,<br> multi-discipline approach and
                                            designing for reliability</div>
                                        <p class="about-website">Leapfrog is a leading provider of products, software, and services for building automation
                                            controls (BMS) for residential buildings as well as industrial complexes such as:
                                            Controls and displays for heating, cooling, indoor air quality, ventilation, combustion,
                                            humidification, lighting, and home automation. Sensors, switches, control systems, and
                                            instruments for measuring pressure, air flow,
                                            temperature, and electrical current.</p>
                                        <a class="btn-1 btn-2" href="{{ route('domains.building-automation-systems') }}">Know more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sec-hero display-table" style="background-image: linear-gradient(180deg,rgba(0,0,0,0.54) 0%,rgba(0,0,0,0.62) 100%),url('{{ asset('website/assets/images/slide_05.jpg')}}');">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="banner">
                                        
                                        <h1 class="handline">E - House</h1>
                                        <div class="top-handline">Welcome home to modern living: where technology meets comfort at E-house.</div>
                                        <p class="about-website">A recent addition in Leapfrog’s portfolio , the modular substation solution also popularly
                                            known as e-house is a cost effective, risk reduced alternative to conventional concrete
                                            block and brick construction. With modularized construction, each eHouse module is
                                            custom engineered to meet application requirements with respect to equipment layout,
                                            site footprint limitations and logistics considerations.</p>
                                        <a class="btn-1 btn-2" href="{{ route('domains.e-house') }}">Know more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h1>Our Offerings</h1>
                            <p class="text-center">With our comprehensive, end-to-end automation portfolio we are focused to deliver enterprise-wide solutions, services and products to keep pace with digital transformation. To know more about our offerings</p>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>

        <!-- :: Features -->
        <section class="features py-100-70">
            {{--  <div class="container">  --}}
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-2">
                        <div class="card text-center border-0">
                            <img src="{{ asset('website/assets/images/sustainable-energy-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                            <div class="card-body">
                              <h4 class="card-title">Electrical
                                Solutuions</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-2">
                        <div class="card text-center border-0">
                            <img src="{{ asset('website/assets/images/medical-laboratory-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                            <div class="card-body">
                              <h4 class="card-title">Instrumentation & Control</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-2">
                        <div class="card text-center border-0">
                            <img src="{{ asset('website/assets/images/sprinklers-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                            <div class="card-body">
                              <h4 class="card-title">Fire Protection</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-2">
                        <div class="card text-center border-0">
                            <img src="{{ asset('website/assets/images/software-application-2.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                            <div class="card-body">
                              <h4 class="card-title"><i class="fa fa-institution" aria-hidden="true"></i> Infrastructure</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-2">
                        <div class="card text-center border-0">
                            <img src="{{ asset('website/assets/images/home-automation-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                            <div class="card-body">
                              <h4 class="card-title">Building Automation Systems</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-2">
                        <div class="card text-center border-0">
                            <img src="{{ asset('website/assets/images/e-house-1.png') }}" style="width: 50px;" class="card-img-top mx-auto" alt="Image">
                            <div class="card-body">
                              <h4 class="card-title">E-House</h4>
                            </div>
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
                                <div class="counter project-counter">2300</div>
                                <h5>project done</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="about-text-box">
                            <div class="sec-title">
                                <h2>LeapFrog Engineering Services</h2>
                                <h3>About Us</h3>
                                <p class="sec-explain">Leapfrog Engineering Services has strived to push the boundaries of what design, engineering, and construction can accomplish. Founded by Technocrats as an E&I company, it has been our enduring conviction that a more collaborative and open-minded approach to engineering would lead to work of a higher quality and greater relevance for decades to come. We credit this philosophy for transforming us into a force to be reckoned with in the fields of Electrical Solutions, Instrumentation, Fire Protection, and Industrial Automation Systems.</p>
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
                                                <p>We strive to become the best integrated engineering services provider by completing
                                                    every project.</p>
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
                    <div class="col-sm-6 col-lg-4">
                        <div class="statistic-item">
                            <i class="icon-user"></i>
                            <div class="content">
                                <div class="counter statistic-counter">1892</div>
                                <div class="counter-name">Happy Clients</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="statistic-item">
                            <i class="icon-development"></i>
                            <div class="content">
                                <div class="counter statistic-counter">1200</div>
                                <div class="counter-name">companies</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="statistic-item">
                            <i class="icon-network-1"></i>
                            <div class="content">
                                <div class="counter statistic-counter">10</div>
                                <div class="counter-name">Countries worldwide</div>
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
                                <h3>A message from our CEO</h3>
                                <p class="sec-explain">Our team of experts brings years of experience and deep industry knowledge to every project we undertake. We understand the unique challenges faced by manufacturers and have developed customized solutions that help our clients streamline their operations, increase productivity, and reduce downtime.

                                    At Utthunga, we are passionate about understanding our clients’ unique challenges and providing tailored solutions that meet their specific needs. As we continue to grow and expand our offerings, we remain committed to our core values of innovation, collaboration, and customer satisfaction. We believe that these values are the key to our success and the success of our clients. </p>
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
                                    <h4>HIGHLY QUALIFIED TEAM MEMBER</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="pricing-item">
                                <div class="item-top">
                                    <h4>SINGLE-WINDOW CAPABILITY</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="pricing-item">
                                <div class="item-top">
                                    <h4>MULTI-LOCATION FOOTPRINT</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="pricing-item">
                                <div class="item-top">
                                    <h4>FINE-TUNED VENDORS & Suppliers</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </section>

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
                <div class="work-carousel owl-carousel owl-theme">
                    <div class="work-carousel-item">
                        <div class="work-item">
                            <span></span>
                            <div class="img-box">
                                <img class="img-fluid work-item-img" src="https://utthunga.com/wp-content/uploads/2023/05/overcoming-the-security-challenges-of-iiot-1.webp" alt="01 work">
                            </div>
                            <div class="hover-box">
                                <div class="text-box">
                                    <div class="tags"><a href="#">Integrated Smart Sensors and IO-link in Industry 4.0</a></div>
                                </div>
                                <ul class="work-icon">
                                    <li><a class="popup" href="https://utthunga.com/wp-content/uploads/2023/05/overcoming-the-security-challenges-of-iiot-1.webp"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work-carousel-item">
                        <div class="work-item">
                            <span></span>
                            <div class="img-box">
                                <img class="img-fluid work-item-img" src="https://utthunga.com/wp-content/uploads/2023/05/tools-and-technologies-for-efficient-asset-management-in-industries-1.webp" alt="02 work">
                            </div>
                            <div class="hover-box">
                                <div class="text-box">
                                    <div class="tags"><a href="#">Tools and Technologies for Efficient Asset Management in Industries</a></div>
                                </div>
                                <ul class="work-icon">
                                    <li><a class="popup" href="https://utthunga.com/wp-content/uploads/2023/05/tools-and-technologies-for-efficient-asset-management-in-industries-1.webp"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work-carousel-item">
                        <div class="work-item">
                            <span></span>
                            <div class="img-box">
                                <img class="img-fluid work-item-img" src="https://utthunga.com/wp-content/uploads/2023/05/top-4-tools-to-diagnose-and-troubleshoot-1.webp" alt="03 work">
                            </div>
                            <div class="hover-box">
                                <div class="text-box">
                                    <div class="tags"><a href="#">Top 4 Tools to Diagnose and Troubleshoot Your PROFIBUS Network</a></div>
                                </div>
                                <ul class="work-icon">
                                    <li><a class="popup" href="https://utthunga.com/wp-content/uploads/2023/05/top-4-tools-to-diagnose-and-troubleshoot-1.webp"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work-carousel-item">
                        <div class="work-item">
                            <span></span>
                            <div class="img-box">
                                <img class="img-fluid work-item-img" src="https://utthunga.com/wp-content/uploads/2023/05/overcoming-the-security-challenges-of-iiot-1.webp" alt="01 work">
                            </div>
                            <div class="hover-box">
                                <div class="text-box">
                                    <div class="tags"><a href="#">Integrated Smart Sensors and IO-link in Industry 4.0</a></div>
                                </div>
                                <ul class="work-icon">
                                    <li><a class="popup" href="https://utthunga.com/wp-content/uploads/2023/05/overcoming-the-security-challenges-of-iiot-1.webp"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work-carousel-item">
                        <div class="work-item">
                            <span></span>
                            <div class="img-box">
                                <img class="img-fluid work-item-img" src="https://utthunga.com/wp-content/uploads/2023/05/tools-and-technologies-for-efficient-asset-management-in-industries-1.webp" alt="02 work">
                            </div>
                            <div class="hover-box">
                                <div class="text-box">
                                    <div class="tags"><a href="#">Tools and Technologies for Efficient Asset Management in Industries</a></div>
                                </div>
                                <ul class="work-icon">
                                    <li><a class="popup" href="https://utthunga.com/wp-content/uploads/2023/05/tools-and-technologies-for-efficient-asset-management-in-industries-1.webp"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work-carousel-item">
                        <div class="work-item">
                            <span></span>
                            <div class="img-box">
                                <img class="img-fluid work-item-img" src="https://utthunga.com/wp-content/uploads/2023/05/top-4-tools-to-diagnose-and-troubleshoot-1.webp" alt="03 work">
                            </div>
                            <div class="hover-box">
                                <div class="text-box">
                                    <div class="tags"><a href="#">Top 4 Tools to Diagnose and Troubleshoot Your PROFIBUS Network</a></div>
                                </div>
                                <ul class="work-icon">
                                    <li><a class="popup" href="https://utthunga.com/wp-content/uploads/2023/05/top-4-tools-to-diagnose-and-troubleshoot-1.webp"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                <div class="testimonial-carousel-item">
                                    <div class="sec-title">
                                        <h3 style="color: white">Hear from our Customers</h3>
                                    </div>
                                    <div class="content-text-box">" The LeapFrog team needs special appreciation since they
                                        have demonstrated excellent teamwork coupled with
                                        sound technical knowledge and project management skills
                                        in understanding our project requirements. A project of
                                        this size and complexity cannot be completed without a
                                        good team. My appreciation and congratulations to all
                                        your members on the excellent job!"</div>
                                    <div class="testimonial-name">
                                        <h4>Ramesh Passi</h4>
                                        <span>Project Leader – Infant Formula EGRON</span><br>
                                        <span>Nestle India Limited</span>
                                    </div>
                                </div>
                                <div class="testimonial-carousel-item">
                                    <div class="sec-title">
                                        <h3 style="color: white">Hear from our Customers</h3>
                                    </div>
                                    <div class="content-text-box">" Your teams cooperative attitude and the
                                        outstanding quality of work are indicative of your
                                        companys strong managerial and technical abilities.
                                        Their efforts in executing this contract have been vital
                                        in helping us meet the tight deadlines and stringent
                                        quality standards, which is highly commendable."</div>
                                    <div class="testimonial-name">
                                        <h4>C. Paul</h4>
                                        <span>Chief Operating Officer</span><br>
                                        <span>Safwan Petroleum Technologies Co</span>
                                    </div>
                                </div>
                                <div class="testimonial-carousel-item">
                                    <div class="sec-title">
                                        <h3 style="color: white">Hear from our Customers</h3>
                                    </div>
                                    <div class="content-text-box">" LeapFrog has been associated with us for the last five
                                        years, and we do not have any hesitation in recommending
                                        them for other big assignments with MNCs. They have
                                        been excellent enough to give us quality service, especially
                                        in our laboratories"</div>
                                    <div class="testimonial-name">
                                        <h4>Jayaram S. Govindaiah</h4>
                                        <span>Head – Administration and Facilities</span><br>
                                        <span>Schneider Electric</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- :: Blog -->
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
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="img-box">
                                <a href="#" class="open-post">
                                    <img class="img-fluid" src="{{ asset('website/assets/images/besize.webp') }}" alt="01 Blog">
                                </a>
                            </div>
                            <div class="text-box">
                                <p>VAVE and Re-engineering of Electric Actuator to Enable Cost-Effective Production</p>
                                <a href="#" class="link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="img-box">
                                <a href="02_blog.html" class="open-post">
                                    <img class="img-fluid" src="https://utthunga.com/wp-content/uploads/2023/05/various-database-2.webp" alt="02 Blog">
                                </a>
                            </div>
                            <div class="text-box">
                                <p>Secure Remote Monitoring and Diagnosis of CNC Machines.</p>
                                <a href="#" class="link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="img-box">
                                <a href="02_blog.html" class="open-post">
                                    <img class="img-fluid" src="https://utthunga.com/wp-content/uploads/2023/05/protocol-maintenance-support-2.webp" alt="03 Blog">
                                </a>
                            </div>
                            <div class="text-box">
           
                                <p>Configuration and Service Tool Development for Flow and Density Meters</p>
                                <a href="#" class="link">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- :: Newsletter -->
        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="sec-title">
                            <h2>The future is yours to make.</h2>
                            <h3>People with passion for engineering solutions. Find your future at LeapFrog.</h3>

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
