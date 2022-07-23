<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //
    public function index(Request $request,$status='new')
    {
        $projects = Project::with(['requesterUser','supervisorUser','coordinatorUser'])->where('status',$status)->paginate(50);
        $projects->success = true;
        return response()->json($projects, 200);
    }
}

