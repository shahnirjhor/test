@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Users</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>All users</h2>

                    <a href="{{ route('users.create') }}" class="btn btn-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Add User
                    </a>
                </div>

                <div class="card-body">
                    <div class="basic-data-table">
                        <table id="basic-data-table" class="table nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th width="30%">Email</th>
                                    <th>Role</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="user-{{ $user->id }}">
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @foreach ($user->roles as $role)
                                                <span class="badge bg-info badge-pill ">{{ $role->name }}</span>
                                            @endforeach
                                        </td>
                                        <td> <img src="{{ asset('/images/user/' . $user->image) }}" alt="User"
                                                width="50px"> </td>
                                        <td><span
                                                class="badge badge-{{ $user->status == 1 ? 'success' : 'danger' }}">{{ $user->status == 1 ? 'Active' : 'Inactive' }}</span>
                                        </td>
                                        <td>
                                            @if ($user->roles[0]['name'] == 'SuperAdmin')
                                                <button href="" class="btn btn-primary" disabled>Edit</button>
                                                <button href="" class="btn btn-danger" disabled>Delete</button>
                                            @else
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-primary">Edit</a> <button
                                                    class="btn btn-danger delete-user"
                                                    data-id="{{ $user->id }}">Delete</button>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // user Status
            $(document).on('click', '.change-status', function(e) {
                e.preventDefault();
                var button = $(this);
                var id = button.data('id');
                var status = button.data('status');
                $.ajax({
                    url: '/users/' + id + '/status',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        toastr.success('User status updated successfully');
                        setTimeout(() => {
                            location.reload();
                        }, 500);
                    }
                });
            });


            // delete user
            $(document).on('click', '.delete-user', function() {
                var user_id = $(this).data('id');

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
                            url: '/users/delete/' + user_id,
                            type: 'GET',
                            success: function(data) {
                                $('.user-' + user_id).remove();
                                Swal.fire(
                                    'Deleted!',
                                    'The user has been deleted.',
                                    'success'
                                )
                            }
                        });
                    }
                });
            });
        </script>
    @endsection
