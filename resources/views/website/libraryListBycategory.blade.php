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
                    <h1>Our Library</h1>
                    <ul>
                        <li><a href="{{ route('website.home') }}">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li><a href="{{ route('website.library') }}">Library</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>{{ $libraryLists->isNotEmpty()?$libraryLists->first()->categories:"All Libray" }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog" style="padding: 30px !important">
    <div class="container">
        <div class="row">
            @if ($libraryLists->isNotEmpty())
                @foreach ($libraryLists as $libraryList)

                    <div class="col-md-4">
                        <div class="blog-item">
                            <div class="img-box" style="max-height: 220px;">
                                <a href="{{route('website.librarydetalis', ['id'=>$libraryList->id, 'category'=> $libraryList->categories])}}" class="open-post">
                                    <img class="img-fluid" src="{{ asset('images/library/' . $libraryList->image) }}" alt="{{ $libraryList->title }}">
                                </a>
                            </div>
                            <div class="text-box">
                                @php
                                    $title = explode('.', $libraryList->title);
                                    $title = implode('.', array_slice($title, 0, 2));
                                    $title = strip_tags($title);
                                @endphp
                                <h4><a style="color: black" href="{{route('website.librarydetalis', ['id'=>$libraryList->id, 'category'=> $libraryList->categories])}}">{{ \Illuminate\Support\Str::limit($title, 39, '...') }}</a></h4>
                                <span><i class="fa fa-list-alt"></i> {{ $libraryList->categories }}</span>
                                 <br>
                                <a href="{{route('website.librarydetalis', ['id'=>$libraryList->id, 'category'=> $libraryList->categories])}}" class="link">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="col-md-12">
                <section class="page-404-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2 text-center">
                                <h3>No Data</h3>
                                <a href="{{ route('website.library') }}" class="btn-1 btn-3">Go Back</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @endif

        </div>
    </div>
</section>
@endsection
