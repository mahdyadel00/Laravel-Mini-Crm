@extends('layouts.admin.app')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Companies</h6>
          <button class="btn btn-primary">
            <a href="{{ route('admin.companies.index') }}">
                <i class="fa fa-plus">Show Companies</i>
            </a></button>
        </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.companies.store') }}" method="post" enctype="multipart/form-data"autocomplete="off">
                        {{ csrf_field() }}
                            <div class="col">
                                <label>Name </label>
                                <input class="form-control fc-datepicker" name="name"
                                    type="text"  required>
                            </div>
                            <div class="col">
                                <label> Email</label>
                                <input class="form-control fc-datepicker" name="email" required>

                            </div>
                            <div class="col">
                                <label> Logo</label>
                                    <input type="file" class="form-control modal-title" name='logo'
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
