<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $tags = Tag::all();

        return view('home', [
            'tags' => $tags 
        ]);
    }

}
