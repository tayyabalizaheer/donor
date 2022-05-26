@extends('layouts.admin')

@section('content')
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Login Pages</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.users.store') }}" method="POST">
            @include('admin.users.fields')
        </form>
    </div>
</div>
@endsection
