@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Update Blog </h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <a href="{{ route('blog.index') }}" class="btn btn-outline-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Go back
                    </a>
                </div>

                <div>
                    <div class="card-body">
                        <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" id="title" class="form-control"
                                            value="{{ $blog->title }}" required />
                                    </div>
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12 d-none">
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" value="{{ $blog->slug }}" name="slug" id="slug" class="form-control" required />
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>


                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Image</label>
                                            <input type="file" name="image" id="image" class="form-control"
                                                 />
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <img src="{{ asset('/images/blog/' . $blog->image) }}" id="preview"
                                                alt="" width="200px">
                                        </div>
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="description" class="form-control" name="description" rows="10">{{$blog->description}}</textarea>
                                    </div>
                                    @error('designation')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                            </div>

                            <button class="btn btn-primary" type="submit">Update Blog</button>
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

             // slug generator

             $(document).ready(function() {
                $('#title').on('input', function() {
                    var title = $(this).val();
                    var slug = title.toLowerCase().replace(/[^\w ]+/g, '').replace(/ +/g, '-').replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, '-');
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
