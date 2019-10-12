@extends('master')
@section('title', 'View all Movies')
@section('content')
    <div class="container col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> Movies </h2>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')}}
                </div>
            @endif

            @if ($movies->isEmpty())
                <p> There is no movie.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Released Year</th>
                            <th>Genre</th>
                            <th>Rating</th>
                            <th>Casts</th>
                            <th>Director</th>
                            <th>Language</th>
                            <th>Type</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach($movies as $movie)
                            <tr>

                                <td><a href="{!! action('MoviesController@show',$movie->slug) !!}">{!! $movie->title !!}</a></td>
                                <td>{!! $movie->released_year !!}</td>
                                <td>{!! $movie->genre !!}</td>
                                <td>{!! $movie->rating !!}</td>
                                <td>{!! $movie->casts !!}</td>
                                <td>{!! $movie->director !!}</td>
                                <td>{!! $movie->language !!}</td>
                                <td>{!! $movie->type !!}</td>


                            </tr>

                        @endforeach




                    </tbody>

                </table>

            @endif
        </div>
    </div>
@endsection