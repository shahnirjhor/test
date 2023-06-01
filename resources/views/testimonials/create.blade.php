@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Create Testimonial </h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <a href="{{ route('testimonials.index') }}" class="btn btn-outline-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Go back
                    </a>
                </div>

                <div>
                    <div class="card-body">
                        <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder=" Name"
                                            required />
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" name="designation" class="form-control"
                                            placeholder="Designation" required />
                                    </div>
                                    @error('designation')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" name="company" class="form-control"
                                            placeholder="Company Name" required />
                                    </div>
                                    @error('company')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>&nbsp;(<span>Maximum 70 words</span>)
                                        <textarea name="description" class="form-control" placeholder="What they say about us" required></textarea>
                                    </div>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                {{-- <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Image</label>&nbsp;(<span>Resolutions: 400*400</span>)
                                        <input type="file" name="image" class="form-control" required />
                                    </div>
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div> --}}



                            </div>

                            <button class="btn btn-primary" type="submit">Add Testimonial</button>
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
                $('#category-name').on('input', function() {
                    var categoryName = $(this).val();
                    var slug = categoryName.toLowerCase().replace(/\s+/g, '-');
                    $('#slug').val(slug);
                });
            });
        </script>
    @endsection
