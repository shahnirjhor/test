@extends('website.layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1> LIBRARY </h1>
                </div>
            </div>
        </div>
    </div>

    <!--====== Start Profile One ======-->
    {{-- <div class="profile">
        <div class="">
            <div class="">
                <div class="container">
                    <div class="profile-content ">
                        <div class="profile-card ">
                            <div class="profile-card-wrapper">
                                <div class="card-header bg_cover"
                                    style="
                         background-image: ;
                         ">
                                </div>
                                <!-- card-header -->
                                <div class="card-profile">
                                    <img src="{{ asset('/images/library/' . $libraries->image) }}" alt="Profile" />
                                </div>
                                <!-- card-profile -->
                                <div class="card-content text-center rounded-buttons">
                                    <h3 class="card-title">{{ strtoupper($libraries->title) }}</h3>
                                    @php
                                        $category = str_replace('-', ' ', $libraries->categories);
                                        
                                    @endphp
                                    <span class="badge badge-success">{{ strtoupper($category) }}</span>
                                    <p class="text">
                                        {!! $libraries->description !!}
                                    </p>
                                    @if ($libraries->brochure)
                                        <a href="{{ asset('images/library/' . $libraries->brochure) }}"
                                            class="btn btn-outline-success" target="_blank">
                                            Download Brochure
                                        </a>
                                    @endif
                                    
                                    @if ($libraries->event_date)
                                        <div class="row"
                                            style="background-color: #a4ca26; padding:20px; border-radius: 12px">
                                            <div class="col-md-6" title="Event Location">
                                                <i class="fa fa-map-marker" aria-hidden="true"
                                                    style="font-size: 30px;color:white;"></i>
                                                <p style="font-size: 20px; text-align: center; color:white;">
                                                    {{ $libraries->event_venue }}</p>
                                            </div>
                                            <div class="col-md-6" title="Event Date">
                                                <i class="fa fa-calendar" aria-hidden="true"
                                                    style="font-size: 30px; color:white;"></i>
                                                <p style="font-size: 20px; text-align: center; color:white;">{{ $libraries->event_date }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                                <!-- card-content -->

                            </div>
                            <!-- profile-card -->
                        </div>
                        <!-- profile-card -->
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--====== End Profile One ======-->
@endsection
