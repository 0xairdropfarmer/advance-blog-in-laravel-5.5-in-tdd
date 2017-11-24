<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function index(Post $post){
        $posts = $post::latest()->get();
        return view('post.index')->with(['posts'=>$posts]);
    }
    public function show(Post $post){
        return view('post.show')->with(['post'=>$post]);
    }
    
  
}
