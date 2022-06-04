<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Complaint;
use DB;
use App\Models\User;
class ComplaintController extends Controller
{
    public function index($id)
    {
        $project = Project::find($id);
        $complaints = complaint::orderBy('date','desc')->where('project_id',$id)->get();
        return view('project.complaint.index',compact('project','complaints'));
    }

    public function create($id)
    {
        $project = Project::find($id);
        $complaint = new complaint();
        return view('project.complaint.create',compact('project','complaint'));
    }

    public function store(Request $request,$id)
    {
        $request->validate([
            'date' => 'required|max:10',
            'status' => 'required|max:10',
            'detail' => 'required|max:65000',
        ]);
        $inputs = $request->except(['_token']);
        $inputs['project_id'] = $id;
        complaint::create($inputs);
        return back()->with('success','Process completed successfully!');
    }

    public function edit($id)
    {
        $complaint = complaint::findOrFail($id);
        $project = Project::findOrFail($complaint->project_id);
        return view('project.complaint.edit',compact('project','complaint'));
    }
    public function update(Request $request,$id)
    {
        $inputs = $request->except(['_token']);
        complaint::where('id',$id)->update($inputs);
        return back()->with('success','Process completed successfully!');
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $complaint = Complaint::findOrFail($id);
            $project_id = $complaint->project_id;
            $complaint->delete();
            DB::commit();

        } catch (\Exception $th) {
            DB::rollback();
            return back()->with('error','Something went wrong!');
        }

        return back()->with('success','Process completed successfully!');

    }
}
