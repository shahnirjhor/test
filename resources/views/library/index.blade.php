@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Library</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>All Library</h2>

                    <a href="{{ route('libraries.create') }}" class="btn btn-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Add Library
                    </a>
                </div>

                <div class="card-body">
                    <div class="basic-data-table">
                        <table id="basic-data-table" class="table nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($libraries as $library)
                                    <tr class="library-{{ $library->id }}">
                                        <td>{{ $library->id }}</td>
                                        <td>{{ $library->title }}</td>
                                        <td><span class="badge badge-info">
                                                @if ($library->categories == 'whats-new')
                                                    {{ 'Whats New on Leap Frog' }}
                                                @elseif($library->categories == 'news')
                                                    {{ 'News' }}
                                                @elseif($library->categories == 'articles')
                                                    {{ 'Articles' }}
                                                @elseif($library->categories == 'events')
                                                    {{ 'Events' }}
                                                @else
                                                    {{ 'Case Study' }}
                                                @endif
                                            </span>
                                        </td>
                                        <td>{!! $library->description !!}</td>
                                        <td><img src="{{ asset('/images/library/' . $library->image) }}"
                                                alt="{{ $library->name }}" width="80px"></td>
                                        <td><a href="{{ route('libraries.edit', $library->id) }}"
                                                class="btn btn-info btn-block">Edit</a>
                                            <button class="btn btn-danger delete-library btn-block"
                                                data-id="{{ $library->id }}">Delete</button>
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
        $(document).on('click', '.delete-library', function() {
            var library = $(this).data('id');

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
                        url: '/libraries/' + library,
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "_method": "DELETE"
                        },
                        success: function(data) {
                            $('.library-' + library).remove();
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
