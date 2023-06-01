@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content">






            <!-- Top Statistics -->
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <a href="{{ route('portfolios.index') }}">
                        <div class="card card-mini mb-4">
                            <div class="card-body">
                                <h2 class="mb-1">{{ $portfolio }}</h2>
                                <p style="font-size: 18px;">Total Portfolio</p><br>
                                <div
                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                    <i class="mdi mdi-page-next font-size-20"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <a href="{{ route('libraries.index') }}">
                        <div class="card card-mini mb-4">
                            <div class="card-body">
                                <h2 class="mb-1">{{ $library }}</h2>
                                <p style="font-size: 18px;">Total Library</p><br>
                                <div
                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                    <i class="mdi mdi-book-multiple font-size-20"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <a href="{{ route('jobs-applied.index') }}">
                        <div class="card card-mini mb-4">
                            <div class="card-body">
                                <h2 class="mb-1">{{ $career }}</h2>
                                <p style="font-size: 18px;">Total Job Applied</p><br>
                                <div
                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                                    <i class="mdi mdi-briefcase-check font-size-20"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <a href="{{ route('contact.index') }}">
                        <div class="card card-mini mb-4">
                            <div class="card-body">
                                <h2 class="mb-1">{{ $contact }}</h2>
                                <p style="font-size: 18px;">Total Contact Request</p><br>
                                <div
                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                    <i class="mdi mdi-cellphone-arrow-down font-size-20"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>



            <div class="row">
                <div class="col-12">

                    <!-- Recent -->
                    <div class="card card-table-border-none ">
                        <div class="card-header justify-content-between">
                            <h2>Recent Job Applications</h2>

                        </div>
                        <div class="card-body pt-0 pb-5">
                            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Appicant Name</th>
                                        <th>Career Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Biodata</th>
                                        <th>Status</th>

                                    </tr>
                                </thead><hr>
                                <tbody>
                                    @foreach ($career_applied as $career)
                                        <tr>
                                            <td>{{ $career->id }}</td>
                                            <td>
                                                <a class="text-dark" href=""> {{ $career->name }}</a>
                                            </td>
                                            <td class="d-none d-lg-table-cell">{{ $career->career_name }}</td>
                                            <td class="d-none d-lg-table-cell">{{ $career->email }}</td>
                                            <td class="d-none d-lg-table-cell">{{ $career->phone }}</td>
                                            <td><a href="{{ asset('biodata/' . $career->biodata) }}"
                                                    class="btn btn-info btn-sm" target="_blank">Download</a></td>
                                            <td><span
                                                    class="badge badge-{{ $career->status == 'rejected' ? 'danger' : 'success' }}">{{ $career->status }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>





        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
@endsection
