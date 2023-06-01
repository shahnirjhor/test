@extends('website.layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>OUR PORTFOLIO - {{ strtoupper($portfolio->title) }}</h1>
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
                        <h2 class="title">{{ strtoupper($portfolio->title) }}</h2>
                    </div>
                    <div class="contact-form form-style-four mt-15">
                        <div class="row my-3">

                            @if (!empty($portfolio->location))
                                <div class="col-sm-1">
                                    <i class="fa fa-map-marker" style="font-size:25px;"></i>
                                </div>
                                <div class="col-sm-4">
                                    <h5>
                                        {{ $portfolio->location }}
                                    </h5>
                                </div>
                            @endif
                        </div>
                        {!! $portfolio->description !!}
                    </div>
                    <!-- contact form -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 offset-xl-1">
                    <img src="{{ asset('images/portfolio/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                        class="img-fluid" width="400px" style="border-radius: 2%;">
                    <div class="section-title ">
                        @if (!empty($portfolio->year))
                            <h6 class="mt-5">YEAR COMPLETED:</h6>
                            <span>{{ $portfolio->year }}</span>
                        @endif
                    </div>
                    <div class="section-title ">
                        @if (!empty($portfolio->client))
                            <h6 class="mt-4">CLIENT:</h6>
                            <span>{{ $portfolio->client }}</span>
                        @endif
                    </div>
                    <div class="section-title ">
                        @if (!empty($portfolio->delivery_method))
                            <h6 class="mt-4">DELIVERY METHOD:</h6>
                            <span>{{ $portfolio->delivery_method }}</span>
                        @endif
                    </div>
                    <div class="section-title ">
                        @if (!empty($portfolio->category_id))
                            <h6 class="mt-4">MARKET:</h6>
                            <span>{{ $portfolio->category->name }}</span>
                        @endif
                    </div>
                    <div class="section-title ">
                        @if (!empty($portfolio->subcategory_id))
                            <h6 class="mt-4">SUB MARKET:</h6>
                            <span>{{ $portfolio->subcategory->name }}</span>
                        @endif
                    </div>
                    <div class="section-title ">
                        @if (!empty($portfolio->status))
                            <h6 class="mt-4">STATUS:</h6>
                            <span
                                class="badge badge-{{ $portfolio->status == 'completed' ? 'success' : 'info' }}">{{ $portfolio->status }}</span>
                        @endif
                    </div>

                    <!-- contact-info -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== CONTACT ONE PART ENDS ======-->
@endsection
