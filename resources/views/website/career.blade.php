@extends('website.layouts.app_new')

@section('content')
    <!-- Page Content -->
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
                            <h1>Career</h1>
                            <ul>
                                <li><a href="{{ route('website.home') }}">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>Career</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services py-100-70">
            <div class="container">
                <div class="sec-title">
                    <div class="row">
                        <div class="col-lg-12 align-items-center">
                            <h3>WHY WORK AT LEAPFROG</h3>
                            <p>At Leapfrog engineering services, we believe that happy employees create a thriving and enjoyable company culture. Being part of our team is more than just a job; it is a career that comes with opportunities, rewards, and a sense of fulfilment.</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">

                    <div class="col-sm-4 col-md-4">
                        <div class="card" style="padding: 5px;">
                            <div class="card-body">
                                <div class="card-title" style="text-align: center">
                                    <img src="{{ asset('/website/assets/images/coworking.png') }}"
                                        alt="HIGHLY QUALIFIED TEAM" width="100px" style="height: 111px;">
                                        <h4 style="text-align: center;">Positive Workplace Culture </h4>
                                </div><br>
                                <p class="card-text" style="text-align: justify">We foster an environment that encourages teamwork, collaboration, and open communication. Our employees value being part of a team that’s supportive and friendly, which boosts their morale and productivity.</p>
                                <br>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-4 col-md-4">
                        <div class="card" style="padding: 5px;">
                            <div class="card-body">
                                <div class="card-title" style="text-align: center">
                                    <img src="{{ asset('/website/assets/images/routine.png') }}" alt="HIGHLY QUALIFIED TEAM" width="100px">
                                    <h4 style="text-align: center;">Work-Life Balance </h4>
                                </div><br>
                                <p class="card-text" style="text-align: justify">We understand the importance of a healthy work-life balance, and this is why we provide our employees with flexible work schedules, telecommuting options, and ample paid time off. Our team members can focus on their personal lives while still contributing to the success of our company.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <br>
                <div class="row d-flex justify-content-center">

                    <div class="col-sm-4 col-md-4">
                        <div class="card" style="padding: 5px;">
                            <div class="card-body">
                                <div class="card-title" style="text-align: center">
                                    <img src="{{ asset('/website/assets/images/business.png') }}"  alt="HIGHLY QUALIFIED TEAM" width="100px">
                                    <h4 style="text-align: center;">Career Growth Opportunities </h4>
                                </div><br>
                                <p class="card-text" style="text-align: justify">We provide ample opportunities for career growth and advancement to our employees. Our team focuses on nurturing talent at every level, providing consistent training and development opportunities to help our team members achieve their professional goals.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="card" style="padding: 5px;">
                            <div class="card-body">
                                <div class="card-title" style="text-align: center">
                                    <img src="{{ asset('/website/assets/images/computer.png') }}" alt="HIGHLY QUALIFIED TEAM" width="100px">
                                    <h4 style="text-align: center;">Workplace Diversity and Inclusion </h4>
                                </div><br>
                                <p class="card-text" style="text-align: justify">We celebrate diversity and inclusivity in our workplace, where everyone is treated equally and with respect. Our diverse team provides fresh insights and unique perspectives on tackling different projects, strengthening our companies culture and promoting creativity.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="card" style="padding: 5px;">
                            <div class="card-body">
                                <div class="card-title" style="text-align: center">
                                    <img src="{{ asset('/website/assets/images/compensation.png') }}" alt="HIGHLY QUALIFIED TEAM" width="100px">
                                    <h4 style="text-align: center;">Competitive <br> Compensation </h4>
                                </div><br>
                                <p class="card-text" style="text-align: justify">We offer competitive wages and benefits that align with industry standards. Our employees are compensated for their hard work and dedication, and we believe in rewarding top talent with merit-based promotions and bonuses.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



    <!--====== CALL TO ACTION ONE PART START ======-->
    <section class="call-action-area call-action-one1 mt-5" style="background-color: #fff">
        <div class="container">
            <div class="row align-items-center call-action-content">
                <div class="col-xl-8 col-lg-8">
                    <div class="call-action-text">
                        <h3 class="action-title">
                            WORK CULTURE AT LEAPFROG
                        </h3>
                        <p class="text-lg">
                            Our company culture is centred around innovation, excellence, teamwork, and customer focus. We
                            believe that every employee has a unique contribution to make, and we encourage an open and
                            collaborative environment that values creativity, diversity, and mutual respect. Our team is
                            composed of individuals from diverse backgrounds, experiences, and perspectives, and we believe
                            that this diversity strengthens our ability to deliver exceptional solutions to our clients.<br>
                            We are passionate about staying ahead of the curve in the rapidly evolving fields of electrical
                            and instrumentation engineering, automation, fire safety, etc and we invest in various seminars,
                            workshops, ongoing training and development for our team members to ensure that we are equipped
                            with the latest knowledge and skills. <br>
                            At our company, we prioritize the satisfaction of our clients, and we work closely with them to
                            understand their needs, preferences, and constraints. We strive to exceed their expectations by
                            delivering solutions that are efficient, effective, and sustainable.

                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="call-action-btn rounded-buttons text-lg-end">
                        <img class="img-fluid" src="{{ asset('/website/assets/images/work-culture.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== CALL TO ACTION ONE PART ENDS ======-->
    <br><br>
    <section class="services py-100-70">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="more-info-content">
                    <div class="row">
                        <div class="col-md-12 align-self-center">
                            <div class="right-content text-center">
                                <h2>JOB <em>OPENINGS</em></h2>
                                <div class="row">
                                    @foreach ($jobs as $job)
                                        <div class="col-md-4">
                                            <div class="service-item">
                                                <img class="img-fluid" src="{{ asset('images/career/' . $job->image) }}" alt="">
                                                <div class="down-content">
                                                    <h4>{{ $job->name }}</h4>
                                                    <div> <b>ID:</b> {{ $job->job_id }} </div>
                                                    <div> <b>Deadline:</b> {{ $job->last_date }}
                                                    </div>
                                                    <hr>
                                                    <a href="{{ route('website.career.apply', $job->id) }}"
                                                        class="btn btn-info">Apply Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="more-info about-info my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>



@endsection
