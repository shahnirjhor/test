@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Edit Library </h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <a href="{{ route('libraries.index') }}" class="btn btn-outline-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Go back
                    </a>
                </div>

                <div>
                    <div class="card-body">
                        <form action="{{ route('libraries.update', $libraries->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $libraries->title }}" required />
                                    </div>
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                                
                                @php
                                    //$arr = ['whats-new','news','articles','events','case-study'];
                                    function selectedfn(string $value, string $check)
                                    {
                                        if($value == $check){
                                            return "selected";
                                        }else{
                                            return "";
                                        }
                                    }
                                @endphp

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="categories" id="categories" class="form-control" required>
                                            <option value="">Select Category</option>
                                            <option {{ selectedfn('whats-new', $libraries->categories) }} value="whats-new">What's new</option>
                                            <option {{selectedfn('news', $libraries->categories) }} value="news">News</option>
                                            <option {{selectedfn('articles', $libraries->categories)}} value="articles">Articles</option>
                                            <option {{selectedfn('events', $libraries->categories)}} value="events">Events</option>
                                            <option {{selectedfn('case-study', $libraries->categories)}} value="case-study">Case Study</option>
                                        </select>
                                    </div>
                                    @error('categories')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="description" class="form-control" name="description" rows="10">{{ $libraries->description }}</textarea>
                                    </div>
                                    @error('designation')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                                @if (!empty($libraries->event_venue))
                                    <div class="col-sm-12" id="event_venue">
                                        <div class="form-group">
                                            <label>Event Venue</label>
                                            <input type="text" name="event_venue" class="form-control"
                                                value="{{ $libraries->event_venue }}" />
                                        </div>
                                        @error('event_venue')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                    </div>
                                @endif
                                @if (!empty($libraries->event_date))
                                    <div class="col-sm-12" id="event_date">
                                        <div class="form-group">
                                            <label>Event Date</label>
                                            <input type="date" name="event_date" class="form-control"
                                                value="{{ $libraries->event_date }}" />
                                        </div>
                                        @error('event_date')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                    </div>
                                @endif
                                @if (!empty($libraries->brochure))
                                    <div class="col-sm-12" id="brochure">
                                        <div class="form-group">
                                            <label>Upload Brochure</label> &nbsp
                                            <span>(Pdf Only)</span>
                                            <input type="file" name="brochure" class="form-control" />
                                        </div>
                                        @error('brochure')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror

                                        <div class="form-group">
                                            <label>View Brochure</label> &nbsp
                                            <a href="{{ asset('/images/library/' . $libraries->brochure) }}"
                                                class="btn btn-info" target="_blank">View</a>
                                        </div>
                                    </div>
                                @endif

                                <div class="col-sm-12">
                                    <div class="form-group ">
                                        <label>Cover Image</label><span>(Resolution 800*800)</span>
                                        <input type="file" name="image" class="form-control" id="image" />
                                    </div>
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                    <div class="form-group ">
                                        <img src="{{ asset('/images/library/' . $libraries->image) }}" id="preview"
                                            alt="{{ $libraries->title }}" width="200px">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>SEO Title</label>
                                        <input type="text" name="meta_title" class="form-control"
                                            value="{{ $meta_title }}" />
                                    </div>
                                    @error('meta_title')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>SEO Description</label> &nbsp <span>Upto 160 Characters</span>
                                        <input type="text" name="meta_description" class="form-control"
                                            value="{{ $meta_description }}" />
                                    </div>
                                    @error('meta_description')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>SEO Keywords</label> &nbsp <span>Comma Separated</span>
                                        <input type="text" name="keywords" class="form-control"
                                            value="{{ $keywords }}" />
                                    </div>
                                    @error('keywords')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                            </div>

                            <button class="btn btn-primary" type="submit">Update Library</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <script>
            // image preview
            $('#image').change(function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result).show();
                };
                reader.readAsDataURL(this.files[0]);
            });
        </script>
        <script src="https://cdn.tiny.cloud/1/apldqqe4w5o130syomw4ehljdtj1l74db0iojohjmv23hyng/tinymce/5/tinymce.min.js">
        </script>


        <!-- Initialize TinyMCE on the description input field -->
        <script>
            tinymce.init({
                selector: '#description',
                plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                toolbar_mode: 'floating',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
            });
        </script>
    @endsection
