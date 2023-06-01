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
<section class="breadcrumb-header" id="page" style="background-image: url(../website/assets/images/page-heading-bg.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner">
                    <h1>Job Application</h1>
                    <ul>
                        <li>LEAP INTO A REWARDING CAREER WITH LEAP FROG: JOIN OUR TEAM TODAY!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="call-action-area call-action-one1 mt-5 py-100-70" style="background-color: #fff">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="section-title mt-45">
                    <h3 class="title">Apply Now</h3>
                </div>
                <div class="contact-form form-style-four mt-15">
                    <form action="{{ route('website.career.formsubmit', $job->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-input mt-15">
                                    <label>Full Name</label>
                                    <div class="input-items default">
                                        <i class="lni lni-user"></i>
                                        <input type="text" name="name" placeholder="Arun Kumar" required />
                                    </div>
                                </div>
                                <!-- form input -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-input mt-15">
                                    <label>Email Address</label>
                                    <div class="input-items default">
                                        <i class="lni lni-envelope"></i>
                                        <input type="email" name="email" placeholder="arun@leapfrog.in" required />
                                    </div>
                                </div>
                                <!-- form input -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-input mt-15">
                                    <label>Phone Number</label>
                                    <div class="input-items default">
                                        <i class="lni lni-phone"></i>
                                        <input type="number" name="phone" placeholder="01234567890" required />
                                    </div>
                                </div>
                                <!-- form input -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-input mt-15">
                                    <label>Years of Experience</label>
                                    <div class="input-items default">
                                        <i class="lni lni-grid-alt"></i>
                                        <input type="number" name="experience" placeholder="Experience" required />
                                    </div>
                                </div>
                                <!-- form input -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-input mt-15">
                                    <label>Upload Your Biodata/Resume</label>
                                    <div class="input-items default">
                                        <i class="lni lni-empty-file"></i>
                                        <input type="file" name="biodata" class="form-control" required />
                                    </div>
                                </div>
                                <!-- form input -->
                            </div>
                            <input type="hidden" name='career_name' value="{{ $job->name }}">

                            <!--    form input -->
                            <div class="col-md-12">
                                <div class="single-form mt-15">
                                    <div class="input-form rounded-buttons"> <br>
                                        <button class="btn btn-info rounded-full" type="submit">
                                            APPLY NOW
                                        </button>
                                    </div>
                                </div>

                                <!-- single form -->
                            </div>
                        </div>
                        <!-- row -->
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 offset-xl-1">
                <div class="section-title mt-5">
                    <h4 class="title">{{ $job->name }}</h4>
                </div>
                <div class="contact-info">
                    <ul class="info">
                        <li>
                            <div class="single-info">
                                <div class="info-icon">
                                    <b> Job Id: </b>
                                </div>
                                <div class="info-content">
                                    <p class="text">
                                        {{ $job->job_id }}
                                    </p>
                                </div>
                            </div>
                            <!-- single info -->
                        </li>
                        <li>
                            <div class="single-info">
                                <div class="info-icon">
                                    <b> Country:</b>
                                </div>
                                <div class="info-content">
                                    <p class="text">
                                        {{ $job->country }}
                                    </p>
                                </div>
                            </div>
                            <!-- single info -->
                        </li>
                        <li>
                            <div class="single-info">
                                <div class="info-icon">
                                    <b> State/Region/City:</b>
                                </div>
                                <div class="info-content">
                                    <p class="text">
                                        {{ $job->state }}
                                    </p>
                                </div>
                            </div>
                            <!-- single info -->
                        </li>
                        <li>
                            <div class="single-info">
                                <div class="info-icon">
                                    <b> Work Location:</b>
                                </div>
                                <div class="info-content">
                                    <p class="text">
                                        {{ $job->location }}
                                    </p>
                                </div>
                            </div>
                            <!-- single info -->
                        </li>
                        <li>
                            <div class="single-info">
                                <div class="info-icon">
                                    <b> Domain:</b>
                                </div>
                                <div class="info-content">
                                    <p class="text">
                                        {{ $job->domain }}
                                    </p>
                                </div>
                            </div>
                            <!-- single info -->
                        </li>
                        <li>
                            <div class="single-info">
                                <div class="info-icon">
                                    <b>Work Preference:</b>
                                </div>
                                <div class="info-content">
                                    <p class="text">
                                        {{ strtoupper($job->work_preference) }}
                                    </p>
                                </div>
                            </div>
                            <!-- single info -->
                        </li>
                        <li>
                            <div class="single-info">
                                <div class="info-icon">
                                    <b> Dealine:</b>
                                </div>
                                <div class="info-content">
                                    <p class="text">
                                        {{ $job->last_date }}
                                    </p>
                                </div>
                            </div>
                            <!-- single info -->
                        </li>


                    </ul>

                </div>
                <!-- contact-info -->
            </div>
        </div>
    </div>
</section>
<section class="call-action-area call-action-one1 mt-5" style="background-color: #fff">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class=" col-md-12 ">
                <div class="contact-info">
                    <ul class="info">
                        <li>
                            <div class="single-info">
                                <div class="info-icon">
                                    <b> Job Description:</b>
                                </div>
                                <div class="info-content">
                                    <p class="text">
                                        {!! $job->description !!}
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

{{--  @extends('website.layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Job Application</h1>
                    <span>Leap into a Rewarding Career with Leap Frog: Join Our Team Today!</span>
                </div>
            </div>
        </div>
    </div>

    <!--====== CONTACT ONE PART START ======-->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title mt-45">
                        <h3 class="title">Apply Now</h3>
                    </div>
                    <div class="contact-form form-style-four mt-15">
                        <form action="{{ route('website.career.formsubmit', $job->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input mt-15">
                                        <label>Full Name</label>
                                        <div class="input-items default">
                                            <i class="lni lni-user"></i>
                                            <input type="text" name="name" placeholder="Arun Kumar" required />
                                        </div>
                                    </div>
                                    <!-- form input -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-15">
                                        <label>Email Address</label>
                                        <div class="input-items default">
                                            <i class="lni lni-envelope"></i>
                                            <input type="email" name="email" placeholder="arun@leapfrog.in" required />
                                        </div>
                                    </div>
                                    <!-- form input -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-15">
                                        <label>Phone Number</label>
                                        <div class="input-items default">
                                            <i class="lni lni-phone"></i>
                                            <input type="number" name="phone" placeholder="01234567890" required />
                                        </div>
                                    </div>
                                    <!-- form input -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-15">
                                        <label>Years of Experience</label>
                                        <div class="input-items default">
                                            <i class="lni lni-grid-alt"></i>
                                            <input type="number" name="experience" placeholder="Experience" required />
                                        </div>
                                    </div>
                                    <!-- form input -->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input mt-15">
                                        <label>Upload Your Biodata/Resume</label>
                                        <div class="input-items default">
                                            <i class="lni lni-empty-file"></i>
                                            <input type="file" name="biodata" class="form-control" required />
                                        </div>
                                    </div>
                                    <!-- form input -->
                                </div>
                                <input type="hidden" name='career_name' value="{{ $job->name }}">

                                <!--    form input -->
                                <div class="col-md-12">
                                    <div class="single-form mt-15">
                                        <div class="input-form rounded-buttons"> <br>
                                            <button class="btn primary-btn rounded-full" type="submit">
                                                APPLY NOW
                                            </button>
                                        </div>
                                    </div>

                                    <!-- single form -->
                                </div>
                            </div>
                            <!-- row -->
                        </form>
                    </div>
                    <!-- contact form -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 offset-xl-1">
                    <div class="section-title mt-5">
                        <h4 class="title">{{ $job->name }}</h4>
                    </div>
                    <div class="contact-info">
                        <ul class="info">
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <b> Job Id: </b>
                                    </div>
                                    <div class="info-content">
                                        <p class="text">
                                            {{ $job->job_id }}
                                        </p>
                                    </div>
                                </div>
                                <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <b> Country:</b>
                                    </div>
                                    <div class="info-content">
                                        <p class="text">
                                            {{ $job->country }}
                                        </p>
                                    </div>
                                </div>
                                <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <b> State/Region/City:</b>
                                    </div>
                                    <div class="info-content">
                                        <p class="text">
                                            {{ $job->state }}
                                        </p>
                                    </div>
                                </div>
                                <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <b> Work Location:</b>
                                    </div>
                                    <div class="info-content">
                                        <p class="text">
                                            {{ $job->location }}
                                        </p>
                                    </div>
                                </div>
                                <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <b> Domain:</b>
                                    </div>
                                    <div class="info-content">
                                        <p class="text">
                                            {{ $job->domain }}
                                        </p>
                                    </div>
                                </div>
                                <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <b>Work Preference:</b>
                                    </div>
                                    <div class="info-content">
                                        <p class="text">
                                            {{ strtoupper($job->work_preference) }}
                                        </p>
                                    </div>
                                </div>
                                <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <b> Dealine:</b>
                                    </div>
                                    <div class="info-content">
                                        <p class="text">
                                            {{ $job->last_date }}
                                        </p>
                                    </div>
                                </div>
                                <!-- single info -->
                            </li>


                        </ul>

                    </div>
                    <!-- contact-info -->
                </div>
            </div>

            <!-- row -->
            <div class=" col-md-12 ">

                <div class="contact-info">
                    <ul class="info">

                        <li>
                            <div class="single-info">
                                <div class="info-icon">
                                    <b> Job Description:</b>
                                </div>
                                <div class="info-content">
                                    <p class="text">
                                        {!! $job->description !!}
                                    </p>
                                </div>
                            </div>
                            <!-- single info -->
                        </li>

                    </ul>

                </div>
                <!-- contact-info -->
            </div>
        </div>
        <!-- container -->
    </section>
    <!--====== CONTACT ONE PART ENDS ======-->
@endsection  --}}
