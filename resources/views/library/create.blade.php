@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Create Library </h1>
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
                        <form action="{{ route('libraries.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Title for the Library" value="{{old('title')}}" required />
                                    </div>
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="categories" id="categories" class="form-control" required>
                                            <option value="">Select Category</option>
                                            <option value="whats-new">What's new</option>
                                            <option value="news">News</option>
                                            <option value="articles">Articles</option>
                                            <option value="events">Events</option>
                                            <option value="case-study">Case Study</option>
                                        </select>
                                    </div>
                                    @error('categories')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="description" class="form-control" name="description" rows="10">{{old('description')}}</textarea>
                                    </div>
                                    @error('designation')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12" id="event_venue">
                                    <div class="form-group">
                                        <label>Event Venue</label>
                                        <input type="text" name="event_venue" value="{{old('event_venue')}}" class="form-control"
                                            placeholder="Event Venue" />
                                    </div>
                                    @error('event_venue')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12" id="event_date">
                                    <div class="form-group">
                                        <label>Event Date</label>
                                        <input type="date" name="event_date" class="form-control"
                                            placeholder="Event Venue" />
                                    </div>
                                    @error('event_date')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12" id="brochure">
                                    <div class="form-group">
                                        <label>Upload Brochure</label> &nbsp
                                        <span>(Pdf Only)</span>
                                        <input type="file" name="brochure" class="form-control" />
                                    </div>
                                    @error('brochure')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Cover Image</label> <span>(Resolution 800*800)</span>
                                        <input type="file" name="image" class="form-control" required />
                                    </div>
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>SEO Title</label>
                                        <input type="text" name="meta_title" value="{{old('meta_title')}}" class="form-control"
                                            placeholder="SEO Title" />
                                    </div>
                                    @error('meta_title')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>SEO Description</label> &nbsp <span>Upto 160 Characters</span>
                                        <input type="text" name="meta_description" value="{{old('meta_description')}}" class="form-control"
                                            placeholder="SEO Description" />
                                    </div>
                                    @error('meta_description')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>SEO Keywords</label> &nbsp <span>Comma Separated</span>
                                        <input type="text" name="keywords" value="{{old('keywords')}}" class="form-control"
                                            placeholder="SEO Keywords" />
                                    </div>
                                    @error('keywords')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                            </div>

                            <button class="btn btn-primary" type="submit">Add Library</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#event_venue').hide();
                $('#event_date').hide();
                $('#brochure').hide();
                $('#categories').change(function() {
                    if ($(this).val() == 'events') {
                        $('#event_venue').show();
                        $('#event_date').show();
                        $('#brochure').hide();

                    } else if ($(this).val() == 'case-study') {
                        $('#brochure').show();
                        $('#event_venue').hide();
                        $('#event_date').hide();
                    } else {
                        $('#event_venue').hide();
                        $('#event_date').hide();
                        $('#brochure').hide();

                    }
                });
            });
        </script>

        <script>
            // image preview
            $('#image').change(function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result).show();
                };
                reader.readAsDataURL(this.files[0]);
            });

            // slug generator

            $(document).ready(function() {
                $('#category-name').on('input', function() {
                    var categoryName = $(this).val();
                    var slug = categoryName.toLowerCase().replace(/\s+/g, '-');
                    $('#slug').val(slug);
                });
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
