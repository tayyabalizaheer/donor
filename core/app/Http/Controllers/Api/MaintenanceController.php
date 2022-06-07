<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Complaint;
use App\Models\Maintenance;
use DB;
use App\Http\Controllers\Controller;
use App\Models\User;
class MaintenanceController extends Controller
{
    public function index($id)
    {
        $project = Project::find($id);
        $maintenances = Maintenance::with(['project'])->orderBy('date','desc')->where('project_id',$id)->paginate(10);
        return response()->json($maintenances, 200);
    }


}
