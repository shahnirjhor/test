@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Team</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>All Team Members</h2>

                    <a href="{{ route('team.create') }}" class="btn btn-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Add Team Member
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
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Facebook</th>
                                    <th>Linkedin</th>
                                    <th>Instagram</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($teams as $team)
                                    <tr class="team-{{ $team->id }}">
                                        <td>{{ $team->id }}</td>
                                        <td>{{ $team->name }}</td>
                                        <td>{{ $team->designation }}</td>
                                        <td>{{ $team->description }}</td>
                                        <td><img src="{{ asset('/images/team/' . $team->image) }}" alt="{{ $team->name }}"
                                                width="80px"></td>
                                        <td>{{ $team->facebook }}</td>
                                        <td>{{ $team->linkedin }}</td>
                                        <td>{{ $team->instagram }}</td>
                                        <td>{{ $team->email }}</td>

                                        <td><a href="{{ route('team.edit', $team->id) }}"
                                                class="btn btn-info btn-block">Edit</a>
                                            <button class="btn btn-danger delete-team btn-block"
                                                data-id="{{ $team->id }}">Delete</button>
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
        // delete team
        $(document).on('click', '.delete-team', function() {
            var team = $(this).data('id');

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
                        url: '/team/' + team,
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "_method": "DELETE"
                        },
                        success: function(data) {
                            $('.team-' + team).remove();
                            Swal.fire(
                                'Deleted!',
                                'The team member has been deleted.',
                                'success'
                            )
                        }
                    });
                }
            });
        });
    </script>
@endsection
