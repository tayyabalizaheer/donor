@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8 d-flex">complaint Project: <h5 class=" ps-2">{{$project->name}}</h5> </div>
                <div class="col-4 text-end">
                    <a href="{{ route('project.complaint.create',$project) }}" class="dropdown-item">Add complaint Record</a>
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
                @foreach ($complaints as $complaint)
                <tr>
                    <td>#</td>
                    <td>{{ $complaint->date }}</td>
                    <td>{!! $complaint->detail !!}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="{{ route('project.complaint.edit',$complaint) }}" class="dropdown-item">Edit</a>
                                <a href="{{ route('project.complaint.delete',$complaint) }}" class="dropdown-item">Delete</a>
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
