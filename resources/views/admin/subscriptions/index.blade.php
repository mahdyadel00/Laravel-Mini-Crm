@extends('layouts.admin.app')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Subscriptions</h6>

        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
              
                </tr>
              </thead>
              <tbody>
                @foreach ($subscriptions as $subscription)
                <tr>

                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $subscription->id }}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $subscription->email }}</p>
                  </td>
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


@endsection
