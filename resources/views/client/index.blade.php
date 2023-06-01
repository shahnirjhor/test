@extends('layouts.app')

@section('content')
<div class="breadcrumb-wrapper">
    <h1>Client</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2>All Client</h2>

                <a href="{{ route('client.create') }}" class="btn btn-primary  text-uppercase">
                    <i class=" mdi mdi-account"></i> Add Client
                </a>
            </div>
            <div class="card-body">
                <div class="basic-data-table">
                    <table id="basic-data-table" class="table nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($client as $key => $blog)
                                <tr class="client_{{ $blog->id }}">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $blog->name }}</td>

                                    <td><img src="{{ asset('/images/client/' . $blog->image) }}" alt="{{ $blog->name }}" width="80px"></td>


                                    <td><a href="{{ route('client.edit', $blog->id) }}"
                                            class="btn btn-info btn-block">Edit</a>
                                        <button class="btn btn-danger delete-team btn-block"
                                            data-id="{{ $blog->id }}">Delete</button>
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
        var client = $(this).data('id');

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
                    url: '/client/' + client,
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "_method": "DELETE"
                    },
                    success: function(data) {
                        $('.client_' + client).remove();
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
