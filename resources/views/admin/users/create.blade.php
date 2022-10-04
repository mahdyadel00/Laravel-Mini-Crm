@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>users</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-plus">Show users</i>
                        </a></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.users.store') }}" method="post"
                                    enctype="multipart/form-data"autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> First Name </label>
                                        <input class="form-control fc-datepicker" name="first_name" type="text" required>
                                    </div>
                                    <div class="col">
                                        <label> Last Name </label>
                                        <input class="form-control fc-datepicker" name="last_name" type="text" required>
                                    </div>
                                    <div class="col">
                                        <label> Email </label>
                                        <input class="form-control fc-datepicker" name="email" type="email" required>
                                    </div>
                                    <div class="col">
                                        <label>Password</label>
                                        <input class="form-control fc-datepicker" name="password" type="password" required>
                                    </div>
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control fc-datepicker" name="phone" type="number" required>
                                    </div>
                                    <div class="col">
                                        <label>Company</label>
                                        <select class="form-control fc-datepicker" name="company_id" required>
                                            <option value="" selected disabled>Select Company</option>
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='pictur'
                                            accept="image/jpeg,image/jpg,image/png">
                                    </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
    </div>
    <!-- row closed -->
    </div>
    </div>
    </div>
    </div>
@endsection
