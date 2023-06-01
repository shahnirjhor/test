@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Categories</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>All Categories</h2>

                    <a href="{{ route('categories.create') }}" class="btn btn-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Add Category
                    </a>
                </div>

                <div class="card-body">
                    <div class="basic-data-table">
                        <table id="basic-data-table" class="table nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($all_categories as $category)
                                    <tr class="category-{{ $category->id }}">
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td><img src="{{ asset('/images/category_icons/' . $category->image) }}"
                                                alt="{{ $category->name }}" width="50px"></td>
                                        <td><a href="{{ route('categories.edit', $category->id) }}"
                                                class="btn btn-info">Edit</a>
                                            <button class="btn btn-danger delete-category"
                                                data-id="{{ $category->id }}">Delete</button>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        // delete category
        $(document).on('click', '.delete-category', function() {
            var category = $(this).data('id');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '/categories/' + category,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            $('.category-' + category).remove();
                            Swal.fire(
                                'Deleted!',
                                'The category has been deleted.',
                                'success'
                            )
                        }
                    });
                }
            });
        });
    </script>
@endsection
