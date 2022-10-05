@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Users</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-plus">Edit User</i>
                        </a></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.users.update', [$user->id]) }}"
                                    method="post" enctype="multipart/form-data"autocomplete="off">

                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> First Name</label>
                                        <input class="form-control fc-datepicker" type="text" name="first_name" required
                                            value="{{ $user->first_name }}">
                                    </div>
                                    <div class="col">
                                        <label> Last Name</label>
                                        <input class="form-control fc-datepicker" type="text" name="last_name" required
                                            value="{{ $user->last_name }}">
                                    </div>
                                    <div class="col">
                                        <label> Email</label>
                                        <input class="form-control fc-datepicker" name="email" value="{{ $user->email }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control fc-datepicker" name="phone" value="{{ $user->phone }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label>Company</label>
                                        <select class="form-control fc-datepicker" name="company_id">
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}"
                                                    @if($user->company_id == $company->id)
                                                    selected
                                                    @endif
                                                    >{{ $company->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='pictur'
                                            accept="image/jpeg,image/jpg,image/png" >
                                            <img src="{{ asset($user->pictur) }}" height="100px" width="100px" />
                                    </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Edit</button>
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
