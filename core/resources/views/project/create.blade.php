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
                @csrf
                <div class="form-group">
                  <label for="name">Project Name</label>
                  <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="assessment">Need Assessment</label>
                    <input type="text" name="assessment" id="assessment" class="form-control">
                </div>
                <div class="form-group">
                    <label for="requester">Requester</label>
                    <input type="text" name="requester" id="requester" class="form-control">
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
