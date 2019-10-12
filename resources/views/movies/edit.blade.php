@extends('master')
@section('title','Edit a Movie')


@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>



                    <legend>Edit Movie</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="title" value="{!! $movie->title !!}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Released Year</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="released_year" name="released_year" value="{!! $movie->released_year !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Genre</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="genre" name="genre" value="{!! $movie->genre !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Rating</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="rating" name="rating" value="{!! $movie->rating !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Casts</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="casts" name="casts" value="{!! $movie->casts !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Director</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="director" name="director" value="{!! $movie->director !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Language</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="language" name="language" value="{!! $movie->language !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Type</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="type" name="type" value="{!! $movie->type !!}">
                        </div>
                    </div>




                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection