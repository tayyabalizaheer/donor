@extends('layouts.admin')

@section('content')
    <div class="row dasboard justify-content-center align-items-center">
        <div class="col-md-4 col-12">
            <a class="row" href="{{ route('project.index','new') }}">
                <div class="col-4">
                    <img class="icons" src="{{ assets('images/new.png') }}" alt="">
                </div>
                <div class="col-8">
                    <h2>New Interventions</h2>
                    <div class="description">
                        Details of site, assessments, requesters, locations, testing reports, budget of upcoming projects.
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-12">
            <a class="row" href="{{ route('project.index','on-going') }}">
                <div class="col-4">
                    <img class="icons" src="{{ assets('images/on-going.png') }}" alt="">
                </div>
                <div class="col-8">
                    <h2>on going projects</h2>
                    <div class="description">
                        Details of locations, date, supervisors and coordinators of on going projects.
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-12">
            <a class="row" href="{{ route('project.index','completed') }}">
                <div class="col-4">
                    <img class="icons" src="{{ assets('images/completed.png') }}" alt="">
                </div>
                <div class="col-8">
                    <h2>Completed projects</h2>
                    <div class="description">
                        Details of locations, installation date, installed duration, re-habilation date, maintenance of completed projects.
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
