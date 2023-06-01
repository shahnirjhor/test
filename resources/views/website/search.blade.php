@extends('website.layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Search Results for "{{ $query }}"</h1>
                </div>
            </div>
        </div>
    </div>



    <!--====== BLOG PART START ======-->
    <section class="blog-area pb-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($portfolios as $portfolio)
                    @php
                        $category = $portfolio->category->name;
                        $category = str_replace([' '], '-', $category);
                        
                        $subcategory = $portfolio->subcategory->name;
                        $subcategory = str_replace([' '], '-', $subcategory);
                        
                    @endphp
                    <div class="col-lg-4 col-md-8 col-sm-10">
                        <div class="single-blog blog-style-one">
                            <div class="blog-image">
                                <a
                                    href="{{ route('website.porfolioSingle', ['category' => $category, 'subcategory' => $subcategory, 'id' => $portfolio->id]) }}"><img
                                        src="{{ asset('images/portfolio/' . $portfolio->image) }}"
                                        alt="{{ $portfolio->title }}" /></a>
                                <a href="{{ route('website.porfolioSingle', ['category' => $category, 'subcategory' => $subcategory, 'id' => $portfolio->id]) }}"
                                    class="category">{{ $portfolio->status }}</a>
                            </div>

                            <div class="blog-content">
                                <h5 class="blog-title">
                                    <a
                                        href="{{ route('website.porfolioSingle', ['category' => $category, 'subcategory' => $subcategory, 'id' => $portfolio->id]) }}">
                                        {{ $portfolio->title }}
                                    </a>
                                </h5>
                                <span><i class="fa fa-list-alt"></i> {{ $portfolio->category->name }}</span>
                                @if (!empty($portfolio->location))
                                    <span><i class="fa fa-map-marker"></i> {{ $portfolio->location }}</span>
                                @endif
                                <p class="text">
                                    @php
                                        $description = explode('.', $portfolio->description);
                                        $description = implode('.', array_slice($description, 0, 2));
                                    @endphp
                                    {!! $description !!}
                                </p>
                                <a class="btn btn-success"
                                    href="{{ route('website.porfolioSingle', ['category' => $category, 'subcategory' => $subcategory, 'id' => $portfolio->id]) }}">READ
                                    MORE</a>
                            </div>
                        </div>
                        <!-- single blog -->
                    </div>
                @endforeach



            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== BLOG PART ENDS ======-->
@endsection
