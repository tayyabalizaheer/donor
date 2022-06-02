<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Complaint;
use App\Models\Maintenance;
use DB;
use App\Models\User;
class MaintenanceController extends Controller
{
    public function index($id)
    {
        $project = Project::find($id);
        $maintenances = Maintenance::orderBy('date','desc')->where('project_id',$id)->get();
        return view('project.maintenance.index',compact('project','maintenances'));
    }

    public function create($id)
    {
        $project = Project::find($id);
        $maintenance = new Maintenance();
        return view('project.maintenance.create',compact('project','maintenance'));
    }

    public function store(Request $request,$id)
    {
        $request->validate([
            'date' => 'required|max:10',
            'detail' => 'required|max:65000',
        ]);
        $inputs = $request->except(['_token']);
        $inputs['project_id'] = $id;
        Maintenance::create($inputs);

        $project['maintenance_date'] =  date('Y-m-d', strtotime("+3 years", strtotime($request->date)));;
        $project['maintenance_date'] =  date('Y-m-d', strtotime("+3 months", strtotime($request->date)));
        $project['condition'] = 'Rehabilitated';
        Project::where('id',$id)->update($project);
        return back()->with('success','Process completed successfully!');
    }

    public function edit($id)
    {
        $maintenance = Maintenance::findOrFail($id);
        $project = Project::findOrFail($maintenance->project_id);
        return view('project.maintenance.edit',compact('project','maintenance'));
    }
    public function update(Request $request,$id)
    {
        $inputs = $request->except(['_token']);
        maintenance::where('id',$id)->update($inputs);
        return back()->with('success','Process completed successfully!');
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $maintenance = Maintenance::findOrFail($id);
            $project_id = $maintenance->project_id;
            $maintenance->delete();
            $maintenance_latest = Maintenance::where('project_id',$project_id)->latest()->first();
            if($maintenance_latest){
                $inputs['maintenance_date'] =  date('Y-m-d', strtotime("+3 years", strtotime($maintenance_latest->date)));;
                $inputs['maintenance_date'] =  date('Y-m-d', strtotime("+3 months", strtotime($maintenance_latest->date)));
                Project::where('id',$project_id)->update($inputs);
            }else{
                $project = Project::findOrFail($project_id);
                $inputs['maintenance_date'] =  date('Y-m-d', strtotime("+3 years", strtotime($project->installation_date)));;
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
