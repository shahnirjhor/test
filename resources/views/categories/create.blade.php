@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Create Category </h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <a href="{{ route('categories.index') }}" class="btn btn-outline-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Go back
                    </a>
                </div>

                <div>
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" name="name" id="category-name" class="form-control"
                                            placeholder="Category Name" required />
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Category Slug</label>
                                        <input type="text" name="slug" class="form-control"
                                            placeholder="Category Slug" id="slug" required />
                                    </div>
                                    @error('slug')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Category Icon</label>
                                        <input type="file" name="image" class="form-control" required />
                                    </div>
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Select Parent Category</label>
                                        <select type="text" name="parent_id" class="form-control">
                                            <option value="">None</option>
                                            @if ($categories)
                                                @foreach ($categories as $category)
                                                    <?php $dash = ''; ?>
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    {{-- @if (count($category->subcategory))
                                                        @include('categories/subCategoryList-option', [
                                                            'subcategories' => $category->subcategory,
                                                        ])
                                                    @endif --}}
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <button class="btn btn-primary" type="submit">Add Category</button>
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
