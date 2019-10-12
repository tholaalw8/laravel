<?php



namespace App\Http\Controllers;

use App\Http\Requests\MovieFormRequest;
use App\Movie;

class MoviesController extends Controller
{




    public function show($slug){
        $movies = Movie::whereSlug($slug)->firstOrFail();
        $comments = $movies->comments()->get();
        return view('movies.show',compact('movies','comments'));

    }





    public function index(){
        $movies = Movie::all();
        return view('movies.list',compact('movies'));

    }




    public function create(){

        return view('movies.create');
    }

    public function store(MovieFormRequest $request){
        $slug = uniqid();
        $movie = new Movie(array(
            'title' => $request->get('title'),
            'released_year' => $request->get('released_year'),
            'genre' => $request->get('genre'),
            'rating' => $request->get('rating'),
            'casts' => $request->get('casts'),
            'director' => $request->get('director'),
            'language' => $request->get('language'),
            'type' => $request->get('type'),
            'slug' => $slug,
        ));

    $movie->save();

    return redirect('/createMovie')->with('status',"The movei has been created!");

}

    public function edit($slug){

        $movie = Movie::whereSlug($slug)->firstOrFail();
        return view('movies.edit',compact('movie'));

    }

    public function update($slug, MovieFormRequest $request){

        $movie = Movie::whereSlug($slug)->firstOrFail();
            $movie->title = $request->get('title');
            $movie->released_year = $request->get('released_year');
            $movie->genre = $request->get('genre');
            $movie->rating = $request->get('rating');
            $movie->casts = $request->get('casts');
            $movie->director = $request->get('director');
            $movie->language = $request->get('language');
            $movie->type = $request->get('type');

            $movie->save();

        return redirect(action('MoviesController@edit',$movie->slug))->with('status','The movie '.$slug.' has been updated!');


    }


    public function destroy($slug){
        $movie = Movie::whereSlug($slug)->firstOrFail();
        $movie->delete();

        return redirect('/movie')->with('status','The movie '.$slug.'has been deleted!');

    }



}
