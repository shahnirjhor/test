@extends('website.layouts.app_new')

@section('content')
<style>
    .features-provide-list .item-features-provide-list {
        margin-bottom: 50px;
        height: 80%;
    }
    .provide {
        padding-top: 50px;
    }
    .provide.home-2 .sec-title h3 {
        font-size: 45px;
    }
</style>
    <!-- menu box start -->
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
    <!-- menu box end -->

    <!-- :: Breadcrumb Header -->
    <section class="breadcrumb-header" id="page" style="background-image: url(website/assets/images/page-heading-bg.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner">
                        <h1>About Us</h1>
                        <ul>
                            <li><a href="{{route('website.home')}}">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- :: Breadcrumb Header end -->

     {{-- VISION and MISSION start --}}
     <section class="about-us py-100-70" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">VISION & MISSION</h2>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="img-fluid" src="{{asset('images/about/Vision.png')}}" alt="">
                        </div>
                        <div class="col-sm-9 align-self-center">
                            <p class="text-justify">We aim to become a market leader and centre of excellence offering services in the domains of Electrical and Instrumentation, Fire Protection, IT Infrastructure, Security Solutions, and Building Automation Systems, and to dedicate ourselves to the inspiring progress of our customers by focusing on best engineering practices, innovative solutions & fostering mutual trust and respect.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-3">
                    <div class="row">
                        <div class="col-sm-9 align-self-center">
                            <p class="text-justify">We strive to become the best integrated engineering services provider by completing every project safely and on time, with high quality, within budget, and to meet and exceed customer expectations by implementing best industry practices in engineering and project management. We aim to provide stakeholders with a profitable, steady growth and a well-run investment and employees with an apolitical meritocracy in which they can thrive and continue to master new technologies as they develop in our industry and pursue new and emerging markets that are driven by technology.</p>
                        </div>
                        <div class="col-sm-3">
                            <img class="img-fluid" src="{{asset('images/about/mission.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     {{-- VISION and MISSION end --}}

    <!-- ::  ABOUT LEAPFROG start -->
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
                            <h1>ABOUT LEAPFROG</h1>
                            <p>Since 2003, Leapfrog Engineering Services has strived to push the boundaries of what design, engineering, and construction can accomplish. Founded by Technocrats as an E&I company, it has been our enduring conviction that a more collaborative and open-minded approach to engineering would lead to work of a higher quality and greater relevance for decades to come. We credit this philosophy for transforming us into a force to be reckoned with in the fields of Electrical Solutions, Instrumentation, Fire Protection, and Industrial Automation Systems.</p>

                            <p>Our team of professionals, engineers, and supply chain experts offers more than two decades of experience in delivering time-bound solutions through the Design-Build delivery mechanism. The idea is not only to benefit your bottom line with efficiency, but to be there when you need us.</p>	
                                
                            <p>We have successfully completed projects for various industry verticals such as Oil & Gas, Pharmaceuticals, Food Processing, Manufacturing, and Telecom. With a growing network of clients across the world, commitment to excellence remains the cornerstone of Leapfrog’s culture. We look forward to your continued support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- :: ABOUT LEAPFROG start end -->

     {{-- VALUE PROPOSITION start --}}
     <div class="py-100-70">
        <section class="provide home-2 ">
            <div class="bg-section" style="background-image: none; height:100%">
                <div class="overlay overlay-3"></div>
            </div>
            <div class="container">
                <div class="provide-text-box">
                    <div class="sec-title">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>VALUE PROPOSITION</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="row features-provide-list">
                                <div class="col-sm-3">
                                    <div class="item-features-provide-list">
                                        <span style="top: 86.4375px; left: 199.5px;"></span>
                                        <i class="icon-features-provide-list-item icon-analytics"></i>
                                        <div class="content-box">
                                            <h4>Highly Qualified Team</h4>
                                            <p>Our dedicated and technically sound engineers with decades of experience ensure consistent time-bound deliveries</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="item-features-provide-list">
                                        <span style="top: 94.4375px; left: -11.5px;"></span>
                                        <i class="icon-features-provide-list-item icon-pie-chart"></i>
                                        <div class="content-box">
                                            <h4>Single-Window Capability</h4>
                                            <p>Our Design-Build Solutions result in faster turnaround and greater cost-savings for our customers.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="item-features-provide-list">
                                        <span style="top: 95.25px; left: -33.5px;"></span>
                                        <i class="icon-features-provide-list-item icon-lock"></i>
                                        <div class="content-box">
                                            <h4>Multi-Location Footprint</h4>
                                            <p>Our expanding operations worldwide enable us to execute projects with greater efficiency across geographies.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="item-features-provide-list">
                                        <span style="top: 53.25px; left: -12.5px;"></span>
                                        <i class="icon-features-provide-list-item icon-database-2"></i>
                                        <div class="content-box">
                                            <h4>Fine-tuned Vendors</h4>
                                            <p>Our team of highly-skilled vendors deliver materials to your exact standards and schedules.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     </div>
     
     {{-- VALUE PROPOSITION end --}}

     {{-- OUR TEAM start --}}
     @if ($teams->isNotEmpty())
     <section class="team home-2">
        <div class="container">
            <div class="sec-title home-2">
                <div class="row">
                    <div class="col-lg-5">
                        <h1>Meet Our Team</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($teams as $team)
                <div class="col-md-6 col-lg-4">
                    <div class="team-box">
                        <div class="img-box">
                            <img class="img-fluid" src="{{ asset('/images/team/' . $team->image) }}" alt="{{$team->name}}">
                        </div>
                        <div class="text-box">
                            <h5>{{$team->name}}</h5>
                            <span>{{$team->designation}}</span>
                            <p style="text-align: justify;">{{$team->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
     {{-- OUR TEAM end --}}
@endsection
