<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
// use Illuminate\Support\Facades\DB;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('tags')->latest()->get();
        $all_projects = Project::all();
        //$projects = DB::select('select * from projects');
        //$projects = ['content' => 'b'];
        
        return view('projects/index', [
            'projects' => $projects,
            'all_projects' => $all_projects
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $all_projects = Project::all();
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('projects/show', [
            'project' => $project,
            'all_projects' => $all_projects
        ]);
    }

}
