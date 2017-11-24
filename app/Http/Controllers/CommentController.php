<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class CommentController extends Controller
{
         public function __construct()
        {
           $this->middleware('auth');
          
        }
      public function store(Post $post,Request $request){
            $post->storeComment([
                
                 'body'=>$request->get('body'),
                 'user_id'=> auth()->id()
            ]);
            return back();
      }
}
