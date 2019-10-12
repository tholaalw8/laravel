@extends('master')
@section('title','create movie')

@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend> Create Movie </legend>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label"> Title </label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="released_year" class="col-lg-2 control-label"> Released Year </label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="released_year" placeholder="Released Year" name="released_year">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="genre" class="col-lg-2 control-label"> Genre </label>
                        <div class="col-lg-10">
                        <input type="text" class="form-control" id="genre" placeholder="Genre" name="genre">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="rating" class="col-lg-2 control-label"> Rating </label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="rating" placeholder="Rating" name="rating">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="rating" class="col-lg-2 control-label"> Casts </label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="casts" placeholder="Casts" name="casts">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="rating" class="col-lg-2 control-label"> Director </label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="director" placeholder="Director" name="director">
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="rating" class="col-lg-2 control-label"> Language </label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="language" placeholder="Language" name="language">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="rating" class="col-lg-2 control-label"> Viewing Type </label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="type" placeholder="2D or 3D" name="type">
                        </div>
                    </div>



{{--                    <div class="form-group">--}}
{{--                        <label for="content" class="col-lg-2 control-label"> Content </label>--}}
{{--                        <div class="col-lg-10">--}}
{{--                            <textarea class="form-control" rows="3" id="content" name="content"> </textarea>--}}
{{--                            <span class="help-block"> Feel free to ask us any question. </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>
                    </div>


                </fieldset>

            </form>

        </div>

    </div>



@endsection