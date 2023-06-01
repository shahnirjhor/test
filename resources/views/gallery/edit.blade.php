@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Edit Gallery Image </h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <a href="{{ route('gallery.index') }}" class="btn btn-outline-primary  text-uppercase">
                        <i class=" mdi mdi-folder-multiple-image"></i> Go back
                    </a>
                </div>

                <div>
                    <div class="card-body">
                        <form action="{{ route('gallery.update',$gallery->id    ) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $gallery->title }}" />
                                    </div>
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" rows="3">{{ $gallery->description }}</textarea>
                                    </div>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label>Upload Image</label>
                                            <input type="file" name="image" id="image" class="form-control" />
                                        </div>

                                        <div class="col-sm-6">
                                            <img src="{{ asset('/images/gallery/' . $gallery->image) }}"
                                                alt="{{ $gallery->title }}" id="preview" width="300px">
                                        </div>

                                    </div>
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update Gallery</button>
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
    @endsection
