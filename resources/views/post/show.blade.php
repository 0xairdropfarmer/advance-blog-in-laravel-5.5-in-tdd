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
            </div>˛
        </div>
    </div>
</div>
@endsection
