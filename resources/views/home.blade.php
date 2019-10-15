@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="panel-body">
                     @guest
                         You are not logged in ! please <a href="/login">login</a>
                            @else
                    You are logged in!
                                <br><br> <h4> {!! trans('main.welcome') !!} </h4>
                         @endguest
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
