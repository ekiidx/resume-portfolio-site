<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Project;
use App\Models\Experience;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $tags = Tag::all();
        $projects = Project::all();
        $experiences = Experience::latest()->get();

        return view('home', [
            'tags' => $tags,
            'projects' => $projects,
            'experiences' => $experiences
        ]);
    }

}
