<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $post = Post::where('id',$id)->first();
        return view('Pages.portfolio', compact('post'));
    }
}
