@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">New Interventions</div>
                <div class="col-4 text-end">
                    <a href="{{ route('project.create') }}" class="btn btn-primary">New</a>
                </div>
            </div>


        </div>
        <div class="card-body">
            <form action="{{ route('project.store') }}" method="POST">
                @include('project.new.fields')
            </form>
        </div>

    </div>
</div>
@endsection
