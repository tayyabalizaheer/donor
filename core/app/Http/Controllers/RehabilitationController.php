<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Complaint;
use App\Models\Maintenance;
use App\Models\Rehabilitation;
use DB;
use App\Models\User;
class RehabilitationController extends Controller
{
    public function index($id)
    {
        $project = Project::find($id);
        $rehabilitations = Rehabilitation::orderBy('date','desc')->where('project_id',$id)->get();
        return view('project.rehabilitation.index',compact('project','rehabilitations'));
    }

    public function create($id)
    {
        $project = Project::find($id);
        $rehabilitation = new Rehabilitation();
        return view('project.rehabilitation.create',compact('project','rehabilitation'));
    }

    public function store(Request $request,$id)
    {
        $request->validate([
            'date' => 'required|max:10',
            'detail' => 'required|max:65000',
        ]);
        $inputs = $request->except(['_token']);
        $inputs['project_id'] = $id;
        Rehabilitation::create($inputs);

        $project['rehabilitation_date'] =  date('Y-m-d', strtotime("+3 years", strtotime($request->date)));;
        $project['maintenance_date'] =  date('Y-m-d', strtotime("+3 months", strtotime($request->date)));
        $project['condition'] = 'Rehabilitated';
        Project::where('id',$id)->update($project);
        return back()->with('success','Process completed successfully!');
    }

    public function edit($id)
    {
        $rehabilitation = Rehabilitation::findOrFail($id);
        $project = Project::findOrFail($rehabilitation->project_id);
        return view('project.rehabilitation.edit',compact('project','rehabilitation'));
    }
    public function update(Request $request,$id)
    {
        $inputs = $request->except(['_token']);
        Rehabilitation::where('id',$id)->update($inputs);
        return back()->with('success','Process completed successfully!');
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $rehabilitation = Rehabilitation::findOrFail($id);
            $project_id = $rehabilitation->project_id;
            $rehabilitation->delete();
            $rehabilitation_latest = Rehabilitation::where('project_id',$project_id)->latest()->first();
            if($rehabilitation_latest){
                $inputs['rehabilitation_date'] =  date('Y-m-d', strtotime("+3 years", strtotime($rehabilitation_latest->date)));;
                $inputs['maintenance_date'] =  date('Y-m-d', strtotime("+3 months", strtotime($rehabilitation_latest->date)));
                Project::where('id',$project_id)->update($inputs);
            }else{
                $project = Project::findOrFail($project_id);
                $inputs['rehabilitation_date'] =  date('Y-m-d', strtotime("+3 years", strtotime($project->installation_date)));;
                $inputs['maintenance_date'] =  date('Y-m-d', strtotime("+3 months", strtotime($project->installation_date)));
                Project::where('id',$project_id)->update($inputs);
            }
            DB::commit();

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error','Something went wrong!');
        }

        return back()->with('success','Process completed successfully!');

    }
}
