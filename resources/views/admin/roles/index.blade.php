@extends('layouts.admin.app')



@section('content')

<!-- row -->
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
            <h6>Roles</h6>
                <div class="d-flex justify-content-between">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            @can('اضافة صلاحية')
                                <a class="btn btn-primary btn-sm" href="{{ route('roles.create') }}">اضافة</a>
                            @endcan
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mg-b-0 text-md-nowrap table-hover ">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @can('show_roles')
                                            <a class="btn btn-success btn-sm"
                                                href="{{ route('admin.roles.show', $role->id) }}">Show</a>
                                        @endcan
                                        
                                        @can('edit_roles')
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route('admin.roles.edit', $role->id) }}">Edit</a>
                                        @endcan

                                        @can('delete_roles')
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.roles.delete',
                                                $role->id], 'style' => 'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                {!! Form::close() !!}
                                        @endcan


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Notify js -->
<script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
@endsection