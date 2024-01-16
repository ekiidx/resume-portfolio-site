<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::with('projects')->get();
        
        return view('tags/index', [
            'tags' => $tags
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $tag = Tag::withCount('projects')->where('slug', $slug)->firstOrFail();
        
        return view('tags/show', [
            'tag' => $tag
        ]);
    }

}
