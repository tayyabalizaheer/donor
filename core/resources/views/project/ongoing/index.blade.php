@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">On Going Project</div>
                <div class="col-4 text-end">
                    <a href="{{ route('project.create') }}" class="btn btn-primary">Create</a>
                </div>
            </div>


        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Need Assessment</th>
                    <th>Requester</th>
                    <th>District</th>
                    <th>Tehsil</th>
                    <th>Area</th>
                    <th>Water Quality Testing Report</th>
                    <th>Proposal Date</th>
                    <th>Budget Date</th>
                    <th>Approval Date</th>
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
                        <td>{{ $project->quality_report }}</td>
                        <td>{{ $project->proposal_date }}</td>
                        <td>{{ $project->budget_date }}</td>
                        <td>{{ $project->approval_date }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ route('project.edit',$project) }}" class="dropdown-item">
                                        <i class="text-primary">Edit</i>
                                    </a>
                                    <a href="{{ route('project.move.completed',$project) }}" class="dropdown-item">Move to Completed</a>
                                </div>
                            </div>

                        </td>

                    </tr>
                @endforeach

            </table>
        </div>
        <div class="card-footer text-muted">
            {!! $projects->render()  !!}
        </div>
    </div>
</div>
@endsection
