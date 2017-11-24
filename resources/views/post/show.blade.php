@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{ $post->title}}</h1></div>

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
  
    
    
</div>
@endsection
