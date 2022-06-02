<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Complaint;
use App\Models\Maintenance;
use App\Models\Rehabilitation;
use DB;
use App\Models\User;
class ProjectController extends Controller
{
    //

    public function index(Request $request,$status)
    {
        $projects = Project::where('status',$status)->paginate(50);
        $view = ($status=='on-going')?'ongoing':$status;
        return view("project.$view.index",compact('projects'));
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
        return back()->with('success','Process completed successfully!');
    }

    public function edit($id)
    {
        $requesters = User::whereHas(
            'roles', function($q){
                $q->where('name', 'requester');
            }
        )->get();
        $supervisors = User::whereHas(
            'roles', function($q){
                $q->where('name', 'supervisor');
            }
        )->get();
        $coordinators = User::whereHas(
            'roles', function($q){
                $q->where('name', 'coordinator');
            }
        )->get();
        $project = Project::find($id);
        return view('project.edit',compact('requesters','supervisors','coordinators','project'));
    }
    public function update(Request $request,$id)
    {
        $inputs = $request->except(['_token']);
        $inputs['rehabilitation_date'] = $request->installation_date;
        $inputs['maintenance_date'] = $request->installation_date;
        Project::where('id',$id)->update($inputs);
        return back()->with('success','Process completed successfully!');
    }
    public function createOngoing($id)
    {
        $supervisors = User::whereHas(
            'roles', function($q){
                $q->where('name', 'supervisor');
            }
        )->get();
        $coordinators = User::whereHas(
            'roles', function($q){
                $q->where('name', 'coordinator');
            }
        )->get();
        $project = Project::find($id);
        return view('project.ongoing.create',compact('supervisors','coordinators','project'));
    }

    public function storeOngoing(Request $request,$id)
    {
        $request->validate([
            'completion_date' => 'required|max:255',
            'supervisor' => 'required|max:255',
            'coordinator' => 'required|max:255',
        ]);

        $inputs = $request->except(['_token']);
        $inputs['status'] = 'on-going';
        Project::where('id',$id)->update($inputs);
        return back()->with('success','Process completed successfully!');
    }

    public function createCompleted($id)
    {

        $project = Project::find($id);
        return view('project.completed.create',compact('project'));
    }

    public function storeCompleted(Request $request,$id)
    {
        $request->validate([
            'installation_date' => 'required|max:255',
        ]);

        $inputs = $request->except(['_token']);
        $inputs['status'] = 'completed';
        $inputs['rehabilitation_date'] =  date('Y-m-d', strtotime("+3 years", strtotime($request->installation_date)));;
        $inputs['maintenance_date'] =  date('Y-m-d', strtotime("+3 months", strtotime($request->installation_date)));
        $inputs['condition'] = 'OK';
        Project::where('id',$id)->update($inputs);
        return back()->with('success','Process completed successfully!');
    }


}
