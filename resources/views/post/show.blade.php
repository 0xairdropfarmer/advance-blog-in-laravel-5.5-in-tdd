@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{ $post->title}}</h1> 
                post by <a href="#"><h4>{{ $post->creator->name }}</h4></a></div>

                <div class="panel-body">
                   <article>
                       <div class="body">{{ $post->body }}</div>
                   </article>
                   </div>
            </div>
        </div>
    </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
           @foreach($post->comment as $comment)
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $comment->creator->name }} comment since
                    {{ $comment->created_at->diffForHumans() }}
                    </div>

                <div class="panel-body">
                   <article>
                       <div class="body">{{ $comment->body }}</div>
                   </article>
                   </div>
            </div>
            @endforeach
        </div>
    </div>
   @if (auth()->check())
             <div class="row">
                 <div class="col-md-8 col-md-offset-2">
                     <form method="POST" action="{{ route('addcomment',$post->id) }}">
                        {{ csrf_field() }}
 
                         <div class="form-group">
                             <textarea name="body" id="body" class="form-control" placeholder="Have something to say?" rows="5"></textarea>
                         </div>
                         
                         <button type="submit" class="btn btn-default">Post</button>
                    </form>
                 </div>
             </div>
         @else
             <p class="text-center">Please <a href="{{ route('login') }}">sign in</a> to comment in post.</p>
         @endif

    
    
</div>
@endsection
