@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Career</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>All Career</h2>

                    <a href="{{ route('career.create') }}" class="btn btn-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Add Career
                    </a>
                </div>

                <div class="card-body">
                    <div class="basic-data-table">
                        <table id="basic-data-table" class="table nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Job Id</th>
                                    <th>Job Name</th>
                                    <th>Location</th>
                                    <th>Domain</th>
                                    <th>Work Preference</th>
                                    <th>Deadline</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($careers as $career)
                                    <tr class="career-{{ $career->id }}">
                                        <td>{{ $career->id }}</td>
                                        <td>{{ $career->job_id }}</td>
                                        <td>{{ $career->name }}</td>
                                        <td>{{ $career->location }}</td>
                                        <td>{{ $career->domain }}</td>
                                        <td>{{ $career->work_preference }}</td>
                                        <td>{{ $career->last_date }}</td>
                                        <td><span
                                                class="badge badge-{{ $career->status == 'active' ? 'success' : 'danger' }}">{{ $career->status }}
                                            </span>
                                        </td>

                                        <td><a href="{{ route('career.edit', $career->id) }}"
                                                class="btn btn-info btn-block">Edit</a>
                                        
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
        // delete career
        $(document).on('click', '.delete-career', function() {
            var career = $(this).data('id');

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
                        url: '/career-list/' + career,
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "_method": "DELETE"
                        },
                        success: function(data) {
                            $('.career-' + career).remove();
                            Swal.fire(
                                'Deleted!',
                                'The career has been deleted.',
                                'success'
                            )
                        }
                    });
                }
            });
        });
    </script>
@endsection
