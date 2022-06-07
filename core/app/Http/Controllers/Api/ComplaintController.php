<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

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
        $complaints = complaint::with(['project'])->orderBy('date','desc')->where('project_id',$id)->paginate(10);
        return response()->json($complaints, 200);
    }


}
