@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Gallery</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>All Gallery Images</h2>

                    <a href="{{ route('gallery.create') }}" class="btn btn-primary  text-uppercase">
                        <i class=" mdi mdi-folder-multiple-image"></i> Add Gallery Image
                    </a>
                </div>

                <div class="card-body">
                    <div class="basic-data-table">
                        <table id="basic-data-table" class="table nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($gallery as $image)
                                    <tr class="gallery-{{ $image->id }}">
                                        <td>{{ $image->id }}</td>
                                        <td>{{ $image->title }}</td>
                                        <td>{{ $image->description }}</td>
                                        <td><img src="{{ asset('/images/gallery/' . $image->image) }}"
                                                alt="{{ $image->title }}" width="80px"></td>
                                        <td><a href="{{ route('gallery.edit', $image->id) }}"
                                                class="btn btn-info btn-block">Edit</a>
                                            <button class="btn btn-danger delete-gallery btn-block"
                                                data-id="{{ $image->id }}">Delete</button>
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
        // delete gallery
        $(document).on('click', '.delete-gallery', function() {
            var gallery = $(this).data('id');

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
                        url: '/gallery/' + gallery,
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "_method": "DELETE"
                        },
                        success: function(data) {
                            $('.gallery-' + gallery).remove();
                            Swal.fire(
                                'Deleted!',
                                'The gallery has been deleted.',
                                'success'
                            )
                        }
                    });
                }
            });
        });
    </script>
@endsection
