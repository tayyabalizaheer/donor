@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-4">Create On-going Project</div>
                <div class="col-8 text-end">
                    <strong>Project: </strong>{{$project->name}}
                </div>
            </div>


        </div>
        <div class="card-body">
            <form action="{{ route('project.store.ongoing',$project) }}" method="POST">
                @include('project.ongoing.fields')
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
