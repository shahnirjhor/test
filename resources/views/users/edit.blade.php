@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Update User </h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <a href="{{ route('users.index') }}" class="btn btn-outline-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Go back
                    </a>
                </div>

                <div>
                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer01">Full Name</label>
                                    <input type="text" class="form-control" value="{{ $user->name }}" name="name">

                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationServer02">Email</label>

                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}"
                                        required>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationServerUsername">Password</label>

                                    <input type="password" class="form-control" name="password" placeholder="Password"
                                        aria-describedby="inputGroupPrepend3">

                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationServerUsername">Confirm Password</label>

                                    <input type="password" class="form-control" placeholder="Password"
                                        name="password_confirmation" aria-describedby="inputGroupPrepend3">

                                    @error('password_confirmation')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationServerUsername">Assign Role</label>

                                    <select name="role" class="form-control">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}"
                                                {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                                {{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationServerUsername">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" {{ $user->status === '1' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="0" {{ $user->status == '0' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    @error('status')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationServerUsername">Image</label>
                                    <input type="file" class="form-control" name="image" id="image"
                                        aria-describedby="inputGroupPrepend3">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <img src="{{ asset('images/user/' . $user->image) }}" id="preview" alt="Image"
                                        width="100px">
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">Update User</button>
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
        </script>
    @endsection
