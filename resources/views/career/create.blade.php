@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Create a Job Opening </h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <a href="{{ route('career.index') }}" class="btn btn-outline-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Go back
                    </a>
                </div>

                <div>
                    <div class="card-body">
                        <form action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Job Title</label>
                                        <input type="text" name="name" class="form-control" placeholder="Job Name"
                                            required />
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-md-12 ">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Job ID</label>
                                            <input type="text" name="job_id" class="form-control" placeholder="Job ID"
                                                required>
                                        </div>
                                        @error('job_id')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror

                                        <div class="form-group col-md-6">
                                            <label>Country</label>
                                            <input type="text" name="country" class="form-control" placeholder="Country"
                                                required>
                                        </div>
                                        @error('country')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>State / Region / City</label>
                                            <input type="text" name="state" class="form-control"
                                                placeholder="State / Region / City" required>
                                        </div>
                                        @error('state')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror

                                        <div class="form-group col-md-6">
                                            <label>Work Location</label>
                                            <input type="text" name="location" class="form-control"
                                                placeholder="Work Location" required>
                                        </div>
                                        @error('location')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Domain</label>
                                            <input type="text" name="domain" class="form-control" placeholder="Domain" required>
                                        </div>
                                        @error('domain')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror

                                        <div class="form-group col-md-6">
                                            <label>Work Preference</label>
                                            <select name="work_preference" class="form-control">
                                                <option value="onsite">Onsite</option>
                                                <option value="remote">Remote</option>
                                                <option value="hybrid">Hybrid</option>
                                            </select>
                                        </div>
                                        @error('work_preference')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Job Description</label>
                                        <textarea id="description" class="form-control" name="description" rows="10"></textarea>
                                    </div>
                                    @error('designation')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>


                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Cover Image</label> 
                                            <input type="file" name="image" class="form-control" id="image"  />
                                        </div>
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                        <div class="form-group col-sm-6">
                                            <img src="{{asset('images/career/hiring.jpg')}}" alt="" id="preview" width="200px;">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                        @error('status')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror

                                        <div class="form-group col-sm-6">
                                            <label>Last Date of Application</label>
                                            <input type="date" name="last_date" class="form-control" required>
                                        </div>
                                        @error('last_date')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>




                            <button class="btn btn-primary" type="submit">Add Career</button>
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
