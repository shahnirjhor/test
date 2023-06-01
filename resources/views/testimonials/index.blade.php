@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Testimonials</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>All Testimonials</h2>

                    <a href="{{ route('testimonials.create') }}" class="btn btn-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Add Testimonial
                    </a>
                </div>

                <div class="card-body">
                    <div class="basic-data-table">
                        <table id="basic-data-table" class="table nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Company</th>
                                    <th>Description</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr class="testimonial-{{ $testimonial->id }}">
                                        <td>{{ $testimonial->id }}</td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>{{ $testimonial->designation }}</td>
                                        <td>{{ $testimonial->company }}</td>
                                        <td width="30%">{{ $testimonial->description }}</td>
                                        <td><a href="{{ route('testimonials.edit', $testimonial->id) }}"
                                                class="btn btn-info btn-block">Edit</a>
                                            <button class="btn btn-danger delete-testimonial btn-block"
                                                data-id="{{ $testimonial->id }}">Delete</button>
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
        // delete testimonial
        $(document).on('click', '.delete-testimonial', function() {
            var testimonial = $(this).data('id');

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
                        url: '/testimonials/' + testimonial,
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "_method": "DELETE"
                        },
                        success: function(data) {
                            $('.testimonial-' + testimonial).remove();
                            Swal.fire(
                                'Deleted!',
                                'The testimonial has been deleted.',
                                'success'
                            )
                        }
                    });
                }
            });
        });
    </script>
@endsection
