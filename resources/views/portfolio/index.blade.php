@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Portfolio</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>All Portfolio</h2>

                    <a href="{{ route('portfolios.create') }}" class="btn btn-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Add Portfolio
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
                                    <th>Sub Category</th>
                                    <th>Status</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($portfolios as $portfolio)
                                    <tr class="portfolio-{{ $portfolio->id }}">
                                        <td>{{ $portfolio->id }}</td>
                                        <td>{{ $portfolio->title }}</td>
                                        <td>{{ $portfolio->category ->name }}</td>
                                        <td>{{ $portfolio->subcategory->name }}</td>
                                        <td><span
                                                class="badge badge-{{ $portfolio->status == 'ongoing' ? 'info' : 'success' }}">
                                                {{ $portfolio->status }}
                                            </span>
                                        </td>
                                        <td>{!! $portfolio->description !!}</td>
                                        <td><img src="{{ asset('/images/portfolio/' . $portfolio->image) }}"
                                                alt="{{ $portfolio->name }}" width="80px"></td>
                                        <td><a href="{{ route('portfolios.edit', $portfolio->id) }}"
                                                class="btn btn-info btn-block">Edit</a>
                                            <button class="btn btn-danger delete-portfolio btn-block"
                                                data-id="{{ $portfolio->id }}">Delete</button>
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
        // delete portfolio
        $(document).on('click', '.delete-portfolio', function() {
            var portfolio = $(this).data('id');

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
                        url: '/portfolios/' + portfolio,
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "_method": "DELETE"
                        },
                        success: function(data) {
                            $('.portfolio-' + portfolio).remove();
                            Swal.fire(
                                'Deleted!',
                                'The portfolio has been deleted.',
                                'success'
                            )
                        }
                    });
                }
            });
        });
    </script>
@endsection
