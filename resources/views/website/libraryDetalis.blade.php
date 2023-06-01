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
    <section class="breadcrumb-header" id="page"  style="background-image: url({{asset('website/assets/images/page-heading-bg.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner">
                        <h1>{{str_replace('-', ' ', $data->categories)}}</h1>
                        <ul>
                            <li><a href="{{ route('website.home') }}">Home</a></li>
                            <li><i class="fas fa-angle-right"></i></li>
                            <li>{{$data->title}}</li>
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
                        <h2>{{$data->title}}</h2>
                        <img style="max-height: 400px; width:100%" src="{{asset('/images/library/' . $data->image) }}" alt="$case_studies->name">

                        <p>{!!$data->description!!}</p>
                        
                        @if ($data->brochure)
                        <div class="text-center">
                            <a href="{{ asset('images/library/' . $data->brochure) }}"
                                class="btn btn-info" target="_blank">
                                Download Brochure
                            </a>
                        </div>
                        @endif

                        @if ($data->event_date)
                        <div class="row"
                            style="background-color: #a4ca26; padding:20px; border-radius: 12px">
                            <div class="col-md-6" title="Event Location">
                                <i class="fa fa-map-marker" aria-hidden="true"
                                    style="font-size: 30px;color:white;"></i>
                                <p style="font-size: 20px; color:white;">
                                    {{ $data->event_venue }}</p>
                            </div>
                            <div class="col-md-6" title="Event Date">
                                <i class="fa fa-calendar" aria-hidden="true"
                                    style="font-size: 30px; color:white;"></i>
                                <p style="font-size: 20px; color:white;">{{ $data->event_date }}
                                </p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
