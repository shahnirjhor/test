@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Edit Job Applied </h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <a href="{{ route('jobs-applied.index') }}" class="btn btn-outline-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Go back
                    </a>
                </div>

                <div>
                    <div class="card-body">
                        <form action="{{ route('jobs-applied.update', $jobs_applied->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Applicant Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $jobs_applied->name }}" readonly />
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-md-12 ">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Career Name</label>
                                            <input type="text" name="job_id" class="form-control"
                                                value="{{ $jobs_applied->career_name }}" readonly>
                                        </div>
                                        @error('job_id')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror

                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="text" name="country" class="form-control"
                                                value="{{ $jobs_applied->email }}" readonly>
                                        </div>
                                        @error('country')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Phone</label>
                                            <input type="text" name="state" class="form-control"
                                                value="{{ $jobs_applied->phone }}" readonly>
                                        </div>
                                        @error('state')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror

                                        <div class="form-group col-md-6">
                                            <label>Experience</label>
                                            <input type="text" name="location" class="form-control"
                                                value="{{ $jobs_applied->experience }}" readonly>
                                        </div>
                                        @error('location')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Biodata</label><br>
                                            <a href="{{ asset('biodata/' . $jobs_applied->biodata) }}" target="_blank"
                                                class="btn btn-outline-info">Download</a>
                                        </div>
                                        @error('domain')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror

                                        <div class="form-group col-md-6">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="applied"
                                                    {{ $jobs_applied->status == 'applied' ? 'selected' : '' }}>
                                                    Applied</option>
                                                <option value="shortlisted"
                                                    {{ $jobs_applied->status == 'shortlisted' ? 'selected' : '' }}>Short
                                                    Listed
                                                </option>
                                                <option value="selected"
                                                    {{ $jobs_applied->status == 'selected' ? 'selected' : '' }}>Selected
                                                </option>
                                                <option value="rejected"
                                                    {{ $jobs_applied->status == 'rejected' ? 'selected' : '' }}>Rejected
                                                </option>
                                            </select>
                                        </div>
                                        @error('status')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                            </div>

                            <button class="btn btn-primary" type="submit">Update Status</button>
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
