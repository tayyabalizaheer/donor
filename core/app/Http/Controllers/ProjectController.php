<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
class ProjectController extends Controller
{
    //

    public function index(Request $request,$status)
    {
        $projects = Project::paginate(50);
        return view('project.new.index',compact('projects'));
    }

    public function create()
    {
        $requesters = User::whereHas(
            'roles', function($q){
                $q->where('name', 'requester');
            }
        )->get();
        $project = new Project();
        return view('project.new.create',compact('requesters','project'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'assessment' => 'required',
            'quality_report' => 'required',
            'requester' => 'required',
        ]);

        $inputs = $request->except(['_token']);
        $inputs['status'] = 'new';
        Project::create($inputs);
        return back()->with('success','Project Created');
    }

    public function createOngoing($id)
    {
        $requesters = User::whereHas(
            'roles', function($q){
                $q->where('name', 'requester');
            }
        )->get();
        $project = Project::find($id);
        return view('project.ongoing.create',compact('requesters','project'));
    }
}
