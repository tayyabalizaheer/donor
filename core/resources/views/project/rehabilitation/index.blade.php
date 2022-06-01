@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8 d-flex">Rehabilitation Project: <h5 class=" ps-2">{{$project->name}}</h5> </div>
                <div class="col-4 text-end">
                </div>
            </div>


        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Details</th>
                    <th>Action</th>
                </tr>
                @foreach ($rehabilitations as $rehabilitation)
                <tr>
                    <td>#</td>
                    <td>{{ $rehabilitation->date }}</td>
                    <td>{{ $rehabilitation->detail }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="{{ route('rehabilitation.delete',$rehabilitation) }}" class="dropdown-item">Delete</a>
                            </div>
                        </div>

                    </td>

                </tr>
                @endforeach

            </table>
        </div>

    </div>
</div>
@endsection
