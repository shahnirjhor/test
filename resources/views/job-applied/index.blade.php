@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Application Form</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>All Jobs Applied</h2>


                </div>

                <div class="card-body">
                    <div class="basic-data-table">
                        <table id="basic-data-table" class="table nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Applicant Name</th>
                                    <th>Career Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Experience</th>
                                    <th>Biodata</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($jobs_applied as $jobs)
                                    <tr class="jobs-{{ $jobs->id }}">
                                        <td>{{ $jobs->id }}</td>
                                        <td>{{ $jobs->name }}</td>
                                        <td>{{ $jobs->career_name }}</td>
                                        <td>{{ $jobs->email }}</td>
                                        <td>{{ $jobs->phone }}</td>
                                        <td>{{ $jobs->experience }} years</td>
                                        <td><a href="{{ asset('biodata/' . $jobs->biodata) }}" class="btn btn-info btn-sm"
                                                target="_blank">Download</a></td>
                                        <td><span
                                                class="badge badge-{{ $jobs->status == 'rejected' ? 'danger' : 'success' }}">{{ $jobs->status }}
                                            </span>
                                        </td>

                                        <td><a href="{{ route('jobs-applied.edit', $jobs->id) }}"
                                                class="btn btn-info ">Edit</a>
                                            <button class="btn btn-danger delete-jobs "
                                                data-id="{{ $jobs->id }}">Delete</button>
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
        // delete jobs
        $(document).on('click', '.delete-jobs', function() {
            var jobs = $(this).data('id');

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
                        url: '/jobs-applied/' + jobs,
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "_method": "DELETE"
                        },
                        success: function(data) {
                            $('.jobs-' + jobs).remove();
                            Swal.fire(
                                'Deleted!',
                                'The jobs applied has been deleted.',
                                'success'
                            )
                        }
                    });
                }
            });
        });
    </script>
@endsection
