<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function __construct(){
           $this->middleware('auth')->only('store');
          
    }
    public function index(Post $post){
        $posts = $post::latest()->get();
        return view('post.index')->with(['posts'=>$posts]);
    }
    public function show(Post $post){
        return view('post.show')->with(['post'=>$post]);
    }
    
    public function store(Request $request){
       $post =  Post::create([
            'user_id'=>auth()->id(),
            'title'  =>$request->title,
            'body'   =>$request->body
            
        ]);
     return redirect('/blog/'.$post->id);
    }
}
