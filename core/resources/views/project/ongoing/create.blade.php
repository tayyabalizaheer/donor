@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">Create On-going Project</div>
                <div class="col-4 text-end">
                    <a href="{{ route('project.create') }}" class="btn btn-primary">New Interventions</a>
                </div>
            </div>


        </div>
        <div class="card-body">
            <form action="{{ route('project.store.ongoing',$project) }}" method="POST">
                @include('project.ongoing.fields')
            </form>
        </div>

    </div>
</div>
@endsection
