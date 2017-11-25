@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Create blog post</h1></div>

                <div class="panel-body">
                   <form method="post" action="/post">
                      {{ csrf_field() }}
                      <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" name="title" class="form-control"/>
                      </div>
                      <div class="form-group">
                          <label for="body">Body</label>
                          <textarea name="body" rows="8"  class="form-control"></textarea>
                      </div>
                      <input type="submit" class="btn btn-block btn-primary">
                   </form> 
                   </div>
            </div>
        </div>
    </div>
</div>
@endsection
