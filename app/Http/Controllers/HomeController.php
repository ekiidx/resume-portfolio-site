<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Project;
use App\Models\Experience;
use App\Models\School;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $tags = Tag::all();
        $projects = Project::with('tags')
            ->orderBy('year', 'desc')
            ->orderBy('id', 'desc')
            ->where('is_active', '1')
            ->limit(5)
            ->get();

         $all_projects = Project::where('is_active', '1')
            ->get();

        $experiences = Experience::with('tags')->latest()->get();
        $schools = School::with('tags')->latest()->get();

        return view('home', [
            'tags' => $tags,
            'projects' => $projects,
            'all_projects' => $all_projects,
            'experiences' => $experiences,
            'schools' => $schools
        ]);
    }

}