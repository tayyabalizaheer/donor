<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    //

    public function index(Request $request,$status)
    {
        $projects = Project::paginate(50);
        return view('project.new',compact('projects'));
    }

    public function create()
    {
        return view('project.create');
    }
}
