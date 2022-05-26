@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="text-capitalize float-start">Users {{ $role?'| '.$role :'' }}</h5>
        <div class="float-end">
            <a class="btn btn-primary" href="{{ route('users.create') }}">Add new user</a>
        </div>
    </div>

    <div class="text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>
                           @foreach ($user->getRoleNames() as $role)
                            {{$role}} {{$loop->last?'':', '}}
                            @endforeach
                        </td>
                        <td>
                            @if ($user->status==0)
                                <span class="badge bg-label-warning me-1">Pending</span>
                            @elseif($user->status==1)
                                <span class="badge bg-label-success me-1">Active</span>
                            @elseif($user->status==2)
                                <span class="badge bg-label-danger me-1">Block</span>
                            @endif
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
@endsection
