@extends('website.layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Library</h1>
                </div>
            </div>
        </div>
    </div>

    <!--====== gLightBox CSS ======-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox@3.1.0/dist/css/glightbox.min.css" />

    <!--====== portfolio ONE PART START ======-->
    <section class="portfolio-area portfolio-one">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8">

                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-md-4">
                    <div class="portfolio-menu">
                        <ul>
                            <li> <button data-filter="all" class="active">All Library<i class="fa fa-angle-right"></i></button></li>
                            <li> <button data-filter="whats-new-on-leap-frog">Whats New on Leap
                                    Frog <i class="fa fa-angle-right"></i></button></li>
                            <li> <button data-filter="news">News <i class="fa fa-angle-right"></i></button></li>
                            <li> <button data-filter="articles">Articles <i class="fa fa-angle-right"></i></button></li>
                            <li> <button data-filter="events">Events <i class="fa fa-angle-right"></i></button></li>
                            <li> <button data-filter="technical-publication-and-case-studies">Technical
                                    Publications <i class="fa fa-angle-right"></i></button></li>
                        </ul>

                    </div>
                    <!-- portfolio menu -->
                </div>

                <div class=" grid col-md-8">
                    <div class="row">
                        @foreach ($libraries as $library)
                            <div class="col-lg-4 col-sm-6" data-filter="{{ $library->categories }}">
                                <div class="single-blog blog-style-one">
                                    <div class="blog-image">
                                        <a href="{{ route('website.librarysingle', $library->id) }}"><img
                                                src="{{ asset('images/library/' . $library->image) }}"
                                                alt="{{ $library->title }}" /></a>
                                        <a href="javascript:void(0)"
                                            class="category">{{ strtoupper($library->categories) }}</a>
                                    </div>
                                    <div class="blog-content">
                                        <h5 class="blog-title">
                                            <a href="{{ route('website.librarysingle', $library->id) }}">
                                                {{ strtoupper($library->title) }}
                                            </a>
                                        </h5>
                                        <span><i class="lni lni-calendar"></i>
                                            {{ $library->created_at }}</span>
                                        @php
                                            $description = explode('.', $library->description);
                                            $description = implode('.', array_slice($description, 0, 2));
                                        @endphp
                                        <span>{!! $description !!}</span>

                                        <a class="badge badge-success" href="{{ route('website.librarysingle', $library->id) }}">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>


                    <!-- row -->
                </div>
                <!-- row -->

            </div>
            <!-- container -->
    </section>
    <!--====== portfolio ONE PART ENDS ======-->



    <!--====== gLightBox js ======-->
    <script src="https://cdn.jsdelivr.net/npm/glightbox@3.1.0/dist/js/glightbox.min.js"></script>

    <script>
        const filters = document.querySelectorAll(".portfolio-menu button");

        filters.forEach((filter) => {
            filter.addEventListener("click", function() {
                // ==== Filter btn toggle
                let filterBtn = filters[0];
                while (filterBtn) {
                    if (filterBtn.tagName === "BUTTON") {
                        filterBtn.classList.remove("active");
                    }
                    filterBtn = filterBtn.nextSibling;
                }
                this.classList.add("active");

                // === filter
                let selectedFilter = filter.getAttribute("data-filter");
                let itemsToHide = document.querySelectorAll(
                    `.grid .col-lg-4:not([data-filter='${selectedFilter}'])`
                );
                let itemsToShow = document.querySelectorAll(
                    `.grid [data-filter='${selectedFilter}']`
                );

                if (selectedFilter == "all") {
                    itemsToHide = [];
                    itemsToShow = document.querySelectorAll(".grid [data-filter]");
                }

                itemsToHide.forEach((el) => {
                    el.classList.add("hide");
                    el.classList.remove("show");
                });

                itemsToShow.forEach((el) => {
                    el.classList.remove("hide");
                    el.classList.add("show");
                });
            });
        });

        //========= glightbox
        const myGallery = GLightbox({
            selector: ".glightbox",
            type: "image",
            width: 900,
        });
    </script>
@endsection
