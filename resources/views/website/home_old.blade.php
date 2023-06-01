@extends('website.layouts.app')

@section('content')
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item item-1">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Managing and Executing Electrical Design</h6>
                        <h4>ELECTRICAL SOLUTIONS</h4>
                        <p>Our Electrical division is experienced at delivering complete electrical and automation projects
                            to major clients from various industries such as chemicals, oil & gas, and energy while ensuring
                            reduced operational costs, maximized uptime, and optimized maintenance efficiency. We follow the
                            latest standards in design and execution of the turnkey electrical projects such as IS, IEC, IE
                            rules, while also keeping in mind local statutory requirements, and CBIP guidelines. </p>
                        <a href="{{ route('domains.electrical-solutions') }}" target="_blank" class="filled-button">Know
                            more</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-2">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Instrumentation & Control solutions tailored to your needs</h6>
                        <h4>INSTRUMENTATION & CONTROL</h4>
                        <p>Leapfrog Engineering Service offers a wide range of Instrumentation & Control (Industrial
                            Automation) and processing technologies that can help bring in higher Productivity, Quality,
                            Project Management, Reliability and Efficiency to the process operation.
                            Industry automation is part of Leapfrog’s ongoing digital transformation and collaboration
                            between people, systems and equipment for autonomous operations and sustainable performance,
                            thereby ensuring the safety of people and the environment. By capturing, processing, and
                            analysing data from automated processes and machines, the employees can anticipate and avoid
                            mechanical problems, improve productivity and ensure linearity across the supply chain.
                        </p>
                        <a href="{{ route('domains.instrumentation-control') }}" target="_blank" class="filled-button">Know
                            more</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-3">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Protecting People, Property, and the Planet</h6>
                        <h4>FIRE SAFETY & SECURITY</h4>
                        <p>Our Total Fire Safety services are designed to keep your entire system always secure. From
                            designing and installation to troubleshooting and monitoring, we provide fire protection
                            solutions that are evolved to avert high-level threats and build resilience. Strict adherence to
                            national fire codes and regulations is the first and most basic prerequisite of our commitment
                            to protecting your people and property.</p>
                        <a href="{{ route('domains.fire-protection') }}" target="_blank" class="filled-button">Know
                            more</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->

            <!-- Item -->
            <div class="item item-4">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Combining electrical and HVAC systems in a comprehensive,<br> multi-discipline approach and
                            designing for reliability</h6>
                        <h4>BUILDING AUTOMATION SYSTEMS</h4>
                        <p>Leapfrog is a leading provider of products, software, and services for building automation
                            controls (BMS) for residential buildings as well as industrial complexes such as:
                            Controls and displays for heating, cooling, indoor air quality, ventilation, combustion,
                            humidification, lighting, and home automation. Sensors, switches, control systems, and
                            instruments for measuring pressure, air flow,
                            temperature, and electrical current.
                        </p>
                        <a href="{{ route('domains.building-automation-systems') }}" target="_blank"
                            class="filled-button">Know
                            more</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->

            <!-- Item -->
            <div class="item item-5">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Welcome home to modern living: where technology meets comfort at E-house.</h6>
                        <h4>E - HOUSE</h4>
                        <p>A recent addition in Leapfrog’s portfolio , the modular substation solution also popularly
                            known as e-house is a cost effective, risk reduced alternative to conventional concrete
                            block and brick construction. With modularized construction, each eHouse module is
                            custom engineered to meet application requirements with respect to equipment layout,
                            site footprint limitations and logistics considerations.
                        </p>
                        <a href="{{ route('domains.e-house') }}" class="filled-button">learn more</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>

    <!-- Banner Ends Here -->

    <div class="request-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Request a call back right now ?</h4>
                    <span>Looking for a prompt response? Lets chat now and get the answers you need!</span>
                </div>
                <div class="col-md-4">
                    <a href="#callback" class="border-button">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <div class="more-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left-image">
                                    <img src="{{ asset('/website/assets/images/about-us.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="right-content">
                                    <span>Welcome to Leap Frog</span>
                                    <h2>VISION and <em>MISSION</em></h2>
                                    <h4>VISION </h4>
                                    <p>We aim to become a market leader and centre of excellence offering services in the
                                        domains of Electrical and Instrumentation, Fire Protection, IT Infrastructure,
                                        Security Solutions, and Building Automation Systems, and to dedicate ourselves to
                                        the inspiring progress of our customers by focusing on best engineering practices,
                                        innovative solutions & fostering mutual trust and respect.</p>
                                    <h4>MISSION </h4>
                                    <p>We strive to become the best integrated engineering services provider by completing
                                        every project safely and on time, with high quality, within budget, and to meet and
                                        exceed customer expectations by implementing best industry practices in engineering
                                        and project management.
                                        We aim to provide stakeholders with a profitable, steady growth and a well-run
                                        investment and employees with an apolitical meritocracy in which they can thrive and
                                        continue to master new technologies as they develop in our industry and pursue new
                                        and emerging markets that are driven by technology.
                                    </p>
                                    <a href="{{ route('website.about') }}" class="filled-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Financial <em>Services</em></h2>
                        <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <img src="assets/images/service_01.jpg" alt="">
                        <div class="down-content">
                            <h4>Digital Currency</h4>
                            <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare
                                leo tortor.</p>
                            <a href="" class="filled-button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <img src="assets/images/service_02.jpg" alt="">
                        <div class="down-content">
                            <h4>Market Analysis</h4>
                            <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare
                                leo tortor.</p>
                            <a href="" class="filled-button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <img src="assets/images/service_03.jpg" alt="">
                        <div class="down-content">
                            <h4>Historical Data</h4>
                            <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare
                                leo tortor.</p>
                            <a href="" class="filled-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-content">
                        <span>ABOUT LEAPFROG</span>
                        <h2>STORY OF OUR <em>GROWTH</em></h2>
                        <p>Since 2003, Leapfrog Engineering Services has strived to push the boundaries of what design,
                            engineering, and construction can accomplish. Founded by Technocrats as an E&I company, it has
                            been our enduring conviction that a more collaborative and open-minded approach to engineering
                            would lead to work of a higher quality and greater relevance for decades to come. We credit this
                            philosophy for transforming us into a force to be reckoned with in the fields of Electrical
                            Solutions, Instrumentation, Fire Protection, and Industrial Automation Systems. <br>

                            Our team of professionals, engineers, and supply chain experts offers more than two decades of
                            experience in delivering time-bound solutions through the Design-Build delivery mechanism. The
                            idea is not only to benefit your bottom line with efficiency, but to be there when you need
                            us.<br>

                            We have successfully completed projects for various industry verticals such as Oil & Gas,
                            Pharmaceuticals, Food Processing, Manufacturing, and Telecom. With a growing network of clients
                            across the world, commitment to excellence remains the cornerstone of Leapfrog’s culture. We
                            look forward to your continued support.

                        </p>
                        <a href="" class="filled-button">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">20</div>
                                <div class="count-title">No. of Years</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">1280</div>
                                <div class="count-title">Project Executed</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">100</div>
                                <div class="count-title">Revenue</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">26</div>
                                <div class="count-title">Awards Won</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">578</div>
                                <div class="count-title">Current <br>Projects</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">256</div>
                                <div class="count-title">Present Workforce</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-facts1">
        <div class="container">

            <div class="col-md-12">
                <div>
                    <h2 style="text-align: center;">VALUE <em>PROPOSITION</em> </h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="service-item1">
                                <div class="down-content">
                                    <img src="{{ asset('/website/assets/images/team.png') }}" alt="HIGHLY QUALIFIED TEAM"
                                        width="100px">
                                    <h4>HIGHLY QUALIFIED TEAM</h4>
                                    <p style="color:black;">Our dedicated and technically sound engineers with decades of
                                        experience ensure
                                        consistent time - bound deliveries.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="service-item1">
                                <div class="down-content">
                                    <img src="{{ asset('/website/assets/images/sketch.png') }}"
                                        alt="HIGHLY QUALIFIED TEAM" width="100px">
                                    <h4>SINGLE-WINDOW CAPABILITY</h4>
                                    <p style="color:black;">Our Design-Build Solutions result in faster turnaround and
                                        greater cost-savings for our customers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="service-item1">
                                <div class="down-content">
                                    <img src="{{ asset('/website/assets/images/global-network.png') }}"
                                        alt="HIGHLY QUALIFIED TEAM" width="100px">
                                    <h4>MULTI-LOCATION FOOTPRINT</h4>
                                    <p style="color:black;">Our expanding operations worldwide enable us to execute
                                        projects with greater efficiency across geographies.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="service-item1">
                                <div class="down-content">
                                    <img src="{{ asset('/website/assets/images/vendor.png') }}"
                                        alt="HIGHLY QUALIFIED TEAM" width="100px">
                                    <h4>FINE-TUNED VENDORS</h4>
                                    <p style="color:black;">Our team of highly-skilled vendors deliver materials to your
                                        exact standards and schedules.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="text-align: center; margin-bottom:50px;">VERTICALS</h2>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="media widget-media p-4 bg-white border">
                                <div class="icon rounded-circle mr-4 bg-primary">
                                    <span style="color:aliceblue;"> <b>1</b> </span>
                                </div>

                                <div class="media-body align-self-center">
                                    <h5 class=" mb-2">OIL & GAS</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="media widget-media p-4 bg-white border">
                                <div class="icon rounded-circle bg-warning mr-4">
                                    <span style="color:aliceblue;"> <b>2</b> </span>

                                </div>

                                <div class="media-body align-self-center">
                                    <h5 class=" mb-2">METALS & MINERALS</h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="media widget-media p-4 bg-white border">
                                <div class="icon rounded-circle mr-4 bg-danger">
                                    <span style="color:aliceblue;"> <b>3</b> </span>

                                </div>

                                <div class="media-body align-self-center">
                                    <h5 class=" mb-2">MINING</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="media widget-media p-4 bg-white border">
                                <div class="icon bg-success rounded-circle mr-4">
                                    <span style="color:aliceblue;"> <b>4</b> </span>

                                </div>

                                <div class="media-body align-self-center">
                                    <h5 class=" mb-2">CEMENT</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="media widget-media p-4 bg-white border">
                                <div class="icon rounded-circle mr-4 bg-primary">
                                    <span style="color:aliceblue;"> <b>5</b> </span>
                                </div>

                                <div class="media-body align-self-center">
                                    <h5 class=" mb-2">PHARMACEUTICALS</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="media widget-media p-4 bg-white border">
                                <div class="icon rounded-circle bg-warning mr-4">
                                    <span style="color:aliceblue;"> <b>6</b> </span>

                                </div>

                                <div class="media-body align-self-center">
                                    <h5 class=" mb-2">FOOD PROCESSING</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="media widget-media p-4 bg-white border">
                                <div class="icon rounded-circle mr-4 bg-danger">
                                    <span style="color:aliceblue;"> <b>7</b> </span>

                                </div>

                                <div class="media-body align-self-center">
                                    <h5 class=" mb-2">INDUSTRIAL</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="media widget-media p-4 bg-white border">
                                <div class="icon bg-success rounded-circle mr-4">
                                    <span style="color:aliceblue;"> <b>8</b> </span>

                                </div>

                                <div class="media-body align-self-center">
                                    <h5 class=" mb-2">HOSPITALS</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="media widget-media p-4 bg-white border">
                                <div class="icon rounded-circle mr-4 bg-primary">
                                    <span style="color:aliceblue;"> <b>9</b> </span>
                                </div>

                                <div class="media-body align-self-center">
                                    <h5 class=" mb-2">POWER </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="media widget-media p-4 bg-white border">
                                <div class="icon rounded-circle mr-4 bg-warning">
                                    <span style="color:aliceblue;"> <b>10</b> </span>

                                </div>

                                <div class="media-body align-self-center">
                                    <h5 class=" mb-2">TELECOM</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="media widget-media p-4 bg-white border">
                                <div class="icon bg-danger rounded-circle mr-4">
                                    <span style="color:aliceblue;"> <b>11</b> </span>

                                </div>

                                <div class="media-body align-self-center">
                                    <h5 class=" mb-2">INFRASTRUCTURE</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="media widget-media p-4 bg-white border">
                                <div class="icon rounded-circle mr-4 bg-success">
                                    <span style="color:aliceblue;"> <b>12</b> </span>
                                </div>

                                <div class="media-body align-self-center">
                                    <h5 class=" mb-2">LARGE COMMERCIAL COMPLEXES </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>What they say <em>about us</em></h2>
                        <span>testimonials from our greatest clients</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-testimonials owl-carousel">
                        @foreach ($testimonials as $testimonial)
                            <div class="testimonial-item">
                                <div class="inner-content">
                                    <h4>{{ $testimonial->name }}</h4>
                                    <span>{{ $testimonial->designation }}</span>
                                    <p>"{{ $testimonial->description }}"</p>
                                </div>
                                <img src="{{ asset('/images/testimonials/' . $testimonial->image) }}"
                                    alt="{{ $testimonial->name }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('website.partials.request_callback')
@endsection
