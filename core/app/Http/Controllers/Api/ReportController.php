<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ReportController extends Controller
{
    //
    public function new()
    {
        $projects = Project::where('status','new')->get();
        $fileName = 'New-Project-Report-'.date('Y-m-d').'.csv';

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array(
                    'id',
                    'name',
                    'requester',
                    'assessment',
                    'district',
                    'tehsil',
                    'area',
                    'quality_report',
                    'proposal_date',
                    'budget_date',
                    'approval_date'
                );

        $callback = function() use($projects, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($projects as $project) {
                $row['id']  = $project->id;
                $row['name']= $project->name;
                $row['requester']= $project->requesterUser->name ??'';
                $row['assessment']= $project->assessment;
                $row['district']= $project->district;
                $row['tehsil']= $project->tehsil;
                $row['area']= $project->area;
                $row['quality_report']= $project->quality_report;
                $row['proposal_date']= $project->proposal_date;
                $row['budget_date']= $project->budget_date;
                $row['approval_date']= $project->approval_date;
                fputcsv($file, array(
                    $row['id'],
                    $row['name'],
                    $row['requester'],
                    $row['assessment'],
                    $row['district'],
                    $row['tehsil'],
                    $row['area'],
                    $row['quality_report'],
                    $row['proposal_date'],
                    $row['budget_date'],
                    $row['approval_date']
                ));
            }

            fclose($file);
        };
        // dd($projects,$callback );

        return response()->stream($callback, 200, $headers);
    }

    public function onGoing()
    {
        $projects = Project::where('status','on-going')->get();
        $fileName = 'ongoing-Project-Report-'.date('Y-m-d').'.csv';

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array(
                    'id',
                    'name',
                    'assessment',
                    'district',
                    'tehsil',
                    'area',
                    'completion_date',
                    'supervisor',
                    'coordinator'
                );

        $callback = function() use($projects, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($projects as $project) {
                $row['id']  = $project->id;
                $row['name']= $project->name;
                $row['assessment']= $project->assessment;
                $row['district']= $project->district;
                $row['tehsil']= $project->tehsil;
                $row['area']= $project->area;
                $row['completion_date']= $project->completion_date;
                $row['supervisor']= $project->supervisorUser->name ?? '';
                $row['coordinator']= $project->coordinatorUser->name ?? '';
                fputcsv($file, array(
                    $row['id'],
                    $row['name'],
                    $row['assessment'],
                    $row['district'],
                    $row['tehsil'],
                    $row['area'],
                    $row['completion_date'],
                    $row['supervisor'],
                    $row['coordinator']
                ));
            }

            fclose($file);
        };
        // dd($projects,$callback );

        return response()->stream($callback, 200, $headers);
    }

    public function completed()
    {
        $projects = Project::where('status','completed')->get();
        $fileName = 'completed-Project-Report-'.date('Y-m-d').'.csv';

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array(
                    'id',
                    'name',
                    'assessment',
                    'district',
                    'tehsil',
                    'area',
                    'installation_date',
                    'rehabilitation_date',
                    'maintenance_date',

                );

        $callback = function() use($projects, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($projects as $project) {
                $row['id']  = $project->id;
                $row['name']= $project->name;
                $row['assessment']= $project->assessment;
                $row['district']= $project->district;
                $row['tehsil']= $project->tehsil;
                $row['area']= $project->area;
                $row['installation_date']= $project->installation_date;
                $row['rehabilitation_date']= $project->rehabilitation_date;
                $row['maintenance_date']= $project->maintenance_date;

                fputcsv($file, array(
                    $row['id'],
                    $row['name'],
                    $row['assessment'],
                    $row['district'],
                    $row['tehsil'],
                    $row['area'],
                    $row['installation_date'],
                    $row['rehabilitation_date'],
                    $row['maintenance_date'],

                ));
            }

            fclose($file);
        };
        // dd($projects,$callback );

        return response()->stream($callback, 200, $headers);
    }
}
