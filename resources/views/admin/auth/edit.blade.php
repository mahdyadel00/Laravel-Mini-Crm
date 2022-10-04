@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Auth</h6>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.auth.update') }}"
                                    method="post" enctype="multipart/form-data" autocomplete="off">

                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> Image Login</label>
                                        <input type="file" class="form-control modal-title" name='login_image'
                                            accept="image/jpeg,image/jpg,image/png" required>
                                        <img src="{{ asset( $auth->login_image) }}" height="100px" width="100px" />
                                    </div>
                                    <div class="col">
                                        <label> Image Register</label>
                                        <input type="file" class="form-control modal-title" name='register_image'
                                            accept="image/jpeg,image/jpg,image/png" required>
                                        <img src="{{ asset( $auth->register_image) }}" height="100px" width="100px" />
                                    </div>
                                    <div class="col">
                                        <label> Image Contact</label>
                                        <input type="file" class="form-control modal-title" name='contact_us_image'
                                            accept="image/jpeg,image/jpg,image/png" required>
                                        <img src="{{ asset( $auth->contact_us_image) }}" height="100px" width="100px" />
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
