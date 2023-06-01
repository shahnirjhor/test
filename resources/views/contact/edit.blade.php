@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Edit Contact Us Status </h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <a href="{{ route('contact.index') }}" class="btn btn-outline-primary  text-uppercase">
                        <i class=" mdi mdi-account"></i> Go back
                    </a>
                </div>

                <div>
                    <div class="card-body">
                        <form action="{{ route('contact.update', $contacts->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $contacts->name }}" readonly />
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control"
                                            value="{{ $contacts->email }}" readonly />
                                    </div>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control"
                                            value="{{ $contacts->phone }}" readonly />
                                    </div>
                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="subject" class="form-control"
                                            value="{{ $contacts->subject }}" readonly />
                                    </div>
                                    @error('subject')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <input type="text" name="your_message" class="form-control"
                                            value="{{ $contacts->your_message }}" readonly />
                                    </div>
                                    @error(' your_message')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="text" name="created_at" class="form-control"
                                            value="{{ $contacts->created_at }}" readonly />
                                    </div>
                                    @error('created_at')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="not contacted">Not Contacted</option>
                                            <option value="contacted">Contacted</option>
                                            <option value="not reachable">Not Reachable</option>
                                            <option value="rejected">Rejected</option>
                                        </select>
                                    </div>
                                    @error('status')
                                        <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update Contact Status</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
