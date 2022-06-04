@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">Add complaint Record</div>
                <div class="col-4 text-end">
                    <strong>Project: </strong>{{$project->name}}
                </div>
            </div>


        </div>
        <div class="card-body">
            <form action="{{ route('project.complaint.update',$complaint) }}" method="POST">
                @include('project.complaint.fields')
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
