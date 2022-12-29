<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index($id)
    {
        $posts = Post::where('id',$id)->get();
        return view('Pages.show', compact('posts'));
    }
}
