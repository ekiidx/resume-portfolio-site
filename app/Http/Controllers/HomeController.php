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
        $projects = Project::with('tags')->latest()->limit(4)->get();
        $experiences = Experience::with('tags')->latest()->get();
        $schools = School::with('tags')->latest()->get();

        return view('home', [
            'tags' => $tags,
            'projects' => $projects,
            'experiences' => $experiences,
            'schools' => $schools
        ]);
    }

}