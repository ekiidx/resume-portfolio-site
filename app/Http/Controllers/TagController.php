<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Project;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::with('projects')->get();
        $all_projects = Project::all();
        
        return view('tags/index', [
            'tags' => $tags,
            'all_projects' => $all_projects
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $tag = Tag::withCount('projects')->where('slug', $slug)->firstOrFail();
        $all_projects = Project::all();
        
        return view('tags/show', [
            'tag' => $tag,
            'all_projects' => $all_projects
        ]);
    }

}
