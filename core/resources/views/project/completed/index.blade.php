@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">Completed Projects</div>
                <div class="col-4 text-end">

                </div>
            </div>


        </div>
        <div class="card-body table-responsive">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Need Assessment</th>
                    <th>Requester</th>
                    <th>District</th>
                    <th>Tehsil</th>
                    <th>Area</th>
                    <th>Installation Date</th>
                    <th>Rehablitation Due Date</th>
                    <th>Maintainance Due Date</th>
                    <th>Rehablitation Log</th>
                    <th>Maintainance Log</th>
                    <th>Complaint Log</th>
                    <th>Benificiaries</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach ($projects as $project)
                    <tr>
                        <td>#</td>
                        <td>{{ $project->assessment }}</td>
                        <td>{{ $project->requesterUser->name ??'' }}</td>
                        <td>{{ $project->district }}</td>
                        <td>{{ $project->tehsil }}</td>
                        <td>{{ $project->area }}</td>
                        <td>{{ $project->installation_date }}</td>
                        <td>{{ $project->rehabilitation_date }}</td>
                        <td>{{ $project->maintenance_date }}</td>
                        <td><a href="{{ route('project.rehabilitation',$project) }}" >View</a></td>
                        <td><a href="{{ route('project.maintenance',$project) }}" >View</a></td>
                        <td><a href="{{ route('project.complaint',$project) }}" >View</a></td>
                        <td>{{ $project->beneficiary }}</td>
                        <td>{{ $project->condition ?? 'OK' }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ route('project.edit',$project) }}" class="dropdown-item">
                                        <i class="text-primary">Edit</i>
                                    </a>
                                    <a href="{{ route('project.rehabilitation.create',$project) }}" class="dropdown-item">Add Rehabilitation Record</a>
                                    <a href="{{ route('project.maintenance.create',$project) }}" class="dropdown-item">Add Maintenance Record</a>
                                    <a href="{{ route('project.complaint.create',$project) }}" class="dropdown-item">Add Complaints Record</a>
                                </div>
                            </div>
                        </td>

                    </tr>
                @endforeach

            </table>
        </div>
        <div class="card-footer text-muted">
            {!! $projects->render() !!}
        </div>
    </div>
</div>
@endsection
