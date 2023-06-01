@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Add Gallery Image </h1>
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
                        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Image Name" />
                                    </div>
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" rows="3"></textarea>
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
                                            <img src="" alt="" id="preview" width="300px">
                                        </div>

                                    </div>
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Add Image</button>
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
