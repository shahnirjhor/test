@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Case Studies</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>All Case Studies</h2>

                    <a href="{{ route('case-studies.create') }}" class="btn btn-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Add Case Studies
                    </a>
                </div>

                <div class="card-body">
                    <div class="basic-data-table">
                        <table id="basic-data-table" class="table nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($case_studies as $item)
                                    <tr class="case_studies-{{ $item->id }}">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{!! $item->description !!}</td>
                                        <td><img src="{{ asset('/images/caseStudies/' . $item->image) }}"
                                                alt="{{ $item->name }}" width="80px"></td>
                                        <td><a href="{{ route('case-studies.edit', $item->id) }}"
                                                class="btn btn-info btn-block">Edit</a>
                                            <button class="btn btn-danger delete-item btn-block"
                                                data-id="{{ $item->id }}">Delete</button>
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
        // delete library
        $(document).on('click', '.delete-item', function() {
            var id = $(this).data('id');

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
                        url: '/case-studies/' + id,
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "_method": "DELETE"
                        },
                        success: function(data) {
                            $('.case_studies-' + id).remove();
                            Swal.fire(
                                'Deleted!',
                                'The library has been deleted.',
                                'success'
                            )
                        }
                    });
                }
            });
        });
    </script>
@endsection
