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
    public function index($slug)
    {
        $post = Post::where('title',$slug)->first();
        if($post==null){
//            $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', '1')->paginate(3);
//            return view('Pages.index', compact('posts'));
            return view('welcome');
        }
        else{
            return view('Pages.portfolio', compact('post'));
        }
    }
}
