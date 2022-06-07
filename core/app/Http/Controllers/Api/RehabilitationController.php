<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $rehabilitations = Rehabilitation::with(['project'])->orderBy('date','desc')->where('project_id',$id)->paginate(10);
        return response()->json($rehabilitations, 200);
    }


}
