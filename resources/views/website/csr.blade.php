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
    <section class="breadcrumb-header" id="page" style="background-image: url(../website/assets/images/page-heading-bg.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner">
                        <h1>Sparch</h1>
                        <ul>
                            <li><a href="{{ route('website.home') }}">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>Sparch</li>
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
                        <h2>The Gentle Touch</h2>
                        <p>At Leapfrog, we believe in giving back to the society. We have created a positive and inspiring workplace culture and our employees care about working for a business that cares for the community.</p>

                        <p>We support various institutions that contribute to the society, taking initiatives to help the sick, and promote economic development and education.
                        </p>

                        <P>We have identified unique opportunities to drive long-term, systemic change for individuals, families, businesses and communities.
                        </P>
                        <h3>Giving Back to Society
                        </h3>
                        <p>A Company involved in touching the lives of others by not only excellent engineering but also taking care of other community needs such as: </p>
                        <ul class="core-about-list">
                            <li style="width: 100% !important"><i class="fas fa-check"></i>
                                <h4>Providing books and stationery to the school children.</h4>
                            </li>
                            <li style="width: 100% !important"><i class="fas fa-check"></i>
                                <h4>Helping cancer patients by cooking and serving food.
                                </h4>
                            </li>
                            <li style="width: 100% !important"><i class="fas fa-check"></i>
                                <h4>Blood donation drive for Kidwai memorial institute of oncology.

                                </h4>
                            </li>
                            <li style="width: 100% !important"><i class="fas fa-check"></i>
                                <h4>Tree plantation drive


                                </h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
