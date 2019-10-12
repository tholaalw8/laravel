@extends('master')
@section('title','Selected Movie')

@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="content">
            <h2 class="header"> {!! $movies->title !!}</h2>

            <p><strong>released_year</strong>: {!! $movies->released_year !!}</p>
            <p><strong>genre</strong>: {!! $movies->genre !!}</p>
            <p><strong>rating</strong>: {!! $movies->rating !!}</p>
            <p><strong>casts</strong>: {!! $movies->casts !!}</p>
            <p><strong>director</strong>: {!! $movies->director !!}</p>
            <p><strong>language</strong>: {!! $movies->language !!}</p>
            <p><strong>type</strong>: {!! $movies->type !!}</p>
        </div>
        <a href="{!! action('MoviesController@edit',$movies->slug) !!}" class="btn btn-info">Edit</a>
        
        <form method="post" action="{!! action('MoviesController@destroy',$movies->slug) !!}" class="pull-left">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-warning">Delete</button>
                    </div>
                </div>

        </form>
        <div class="clearfix"></div>


    </div>


    <div class="container col-md-8 col-md-offset-2">
    @foreach($comments as $comment)
    <div class="well well bs-component">
        <div class="well well bs-component">
            {!! $comment->content !!}
        </div>
    </div>

@endforeach
</div>



<div class="container col-md-8 col-md-offset-2">
<div class="well well bs-component">
<form class="form-horizontal" method="post" action="/comment">
@foreach($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach
@if(session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<input type="hidden" name="post_id" value="{!! $movies->id !!}">
<fieldset>
<legend>Reply</legend>
<div class="form-group">
<div class="col-lg-12">
<textarea class="form-control" rows="3" id="content" name="content"></textarea>
</div>
</div>
<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">
<button type="reset" class="btn btn-default">Cancel<button>
<button type="submit" class="btn btn-primary">Post</button>
</div>
</div>
</fieldset>
</form>

</div> 

</div>











@endsection