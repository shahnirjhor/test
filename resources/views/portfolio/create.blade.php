@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Create Portfolio </h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <a href="{{ route('portfolios.index') }}" class="btn btn-outline-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Go back
                    </a>
                </div>

                <div>
                    <div class="card-body">
                        <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Portfolio Name"  />
                                    </div>
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="categories" id="category" class="form-control">
                                            <option value="">-- Select Category --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('categories')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="subcategory">Subcategory</label>
                                        <select name="subcategory" id="subcategory" class="form-control"></select>
                                    </div>
                                    @error('subcategory')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12 ">
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label>Location</label>
                                            <input type="text" name="location" class="form-control"
                                                placeholder="Project Location" />
                                        </div>
                                        @error('location')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                        <div class="col-sm-6">
                                            <label>Year Completed</label>
                                            <input type="text" name="year" class="form-control"
                                                placeholder="Project Completed Year" />
                                        </div>
                                        @error('year')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12 ">
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label>Client</label>
                                            <input type="text" name="client" class="form-control"
                                                placeholder="Client/Company Name" />
                                        </div>
                                        @error('client')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                        <div class="col-sm-6">
                                            <label>Delivery Method</label>
                                            <input type="text" name="delivery_method" class="form-control"
                                                placeholder="Delivery Method" />
                                        </div>
                                        @error('delivery_method')
                                            <div class="alert alert-danger">{{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="description" class="form-control" name="description" rows="10"></textarea>
                                    </div>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12" id="event_venue">
                                    <div class="form-group">
                                        <label>Project Status</label>
                                        <select name="status" class="form-control">
                                            <option value="">--Select Status--</option>
                                            <option value="ongoing">On Going </option>
                                            <option value="completed">Completed</option>
                                        </select>
                                    </div>
                                    @error('status')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label>Project Image</label>&nbsp;(<span>Resolution: 800*800</span>)
                                            <input type="file" name="image" id="image" class="form-control"
                                                 />
                                        </div>

                                        <div class="col-sm-6">
                                            <img src="" alt="" id="preview" width="100px">
                                        </div>

                                    </div>
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Add Portfolio</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('select[name="categories"]').on('change', function() {
                    var categoryId = $(this).val();
                    if (categoryId) {
                        $.ajax({
                            url: '/subcategories/' + categoryId,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('select[name="subcategory"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="subcategory"]').append(
                                        '<option value="' + key + '">' + value +
                                        '</option>');
                                });
                            }
                        });
                    } else {
                        $('select[name="subcategory"]').empty();
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
