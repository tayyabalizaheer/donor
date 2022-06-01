<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //
    public function index(Request $request,$status)
    {
        $projects = Project::with('requesterUser')->where('status',$status)->paginate(50);
        return response()->json($projects, 200);
    }
}
