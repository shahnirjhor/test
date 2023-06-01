@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Create Team Member </h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <a href="{{ route('team.index') }}" class="btn btn-outline-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Go back
                    </a>
                </div>

                <div>
                    <div class="card-body">
                        <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
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
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" placeholder="What they say about us" required></textarea>
                                    </div>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Image</label>
                                            <input type="file" name="image" id="image" class="form-control"
                                                required />
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <img src="" id="preview" alt="" width="200px">
                                        </div>
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <label>Social Media Links(optional)</label>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <span class="mdi mdi-facebook-box" title="Facebook Link"
                                                style="font-size: 24px;"></span>
                                            <input type="url" name="facebook"  class="form-control" placeholder="Facebook Link" />
                                            @error('facebook')
                                                <div class="alert alert-danger">{{ $message }} </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <span class="mdi mdi-linkedin-box" title="Linkedin Link"
                                                style="font-size: 24px;"></span>
                                            <input type="url" name="linkedin"  class="form-control"  placeholder="Linkedin Link"/>
                                            @error('linkedin')
                                                <div class="alert alert-danger">{{ $message }} </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <span class="mdi mdi-instagram" title="Instagram Link"
                                                style="font-size: 24px;"></span>
                                            <input type="url" name="instagram"  class="form-control"  placeholder="Instagram Link"/>
                                            @error('instagram')
                                                <div class="alert alert-danger">{{ $message }} </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <span class="mdi mdi-email" title="Email Address"
                                                style="font-size: 24px;"></span>
                                            <input type="email" name="email"  class="form-control"  placeholder="Email Address"/>
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }} </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <button class="btn btn-primary" type="submit">Add Team Member</button>
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
