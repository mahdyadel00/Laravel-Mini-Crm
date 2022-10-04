@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Comapany</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.companies.index') }}">
                            <i class="fa fa-plus">Edit Comapany</i>
                        </a></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.companies.update', [$company->id]) }}"
                                    method="post" enctype="multipart/form-data"autocomplete="off">

                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label>Name </label>
                                        <input class="form-control fc-datepicker" type="text" name="name"
                                            value="{{ $company->name }}">
                                    </div>
                                    <div class="col">
                                        <label> Email</label>
                                        <input class="form-control fc-datepicker" name="email"
                                            value="{{ $company->email }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label> Logo</label>
                                        <input type="file" class="form-control modal-title" name='logo'
                                            accept="image/jpeg,image/jpg,image/png">
                                        <img src="{{ asset($company->logo) }}" height="100px" width="100px" />
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
