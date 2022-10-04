@extends('layouts.admin.app')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Contacts</h6>

        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">First Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Last Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Published</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($contacts as $contact)
                <tr>

                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $contact->first_name }}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $contact->last_name }}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $contact->email }}</p>
                  </td>

                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $contact->phone }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $contact->message }}</span>
                  </td>
                
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $contact->published }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $contact->created_at }}</span>
                  </td>
                  <!-- <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $contact->updated_at }}</span>
                  </td> -->
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
