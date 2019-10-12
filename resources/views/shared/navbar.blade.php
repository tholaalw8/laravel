<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">PLEX</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            {{-- adding system menu--}}
                <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
{{--                <li><a href="#">Customer</a></li>--}}
{{--                <li><a href="#">Show</a></li>--}}
{{--                <li><a href="#">Booking</a></li>--}}




                {{--   Ticket operations --}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ticket <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @can('edit ticket')
                        <li><a href="/contact">Create</a></li>
                        @endcan
                        <li class="divider"></li>
                        <li><a href="/ticket">List</a></li>
                        <li class="divider"></li>
                    </ul>
                </li>

{{--   movielist operations --}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Movie <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @can('edit ticket')
                        <li><a href="/createMovie">Create</a></li>
                        @endcan
                        <li class="divider"></li>
                        <li><a href="/movie">Movie List</a></li>
                        <li class="divider"></li>
                    </ul>
                </li>

            </ul>




            <ul class="nav navbar-nav navbar-right">

{{-- If the a guest --}}
              @guest
                <li>
                    <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
              @else
                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>



                    </li>
                    @role('manager')
                    <li class="dropdown">
                    <a class="dropdown-item" href="/admin"> Admin Control Panel</a>
                    </li>
                    @endrole
                @endguest

            </ul>





            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div><!-- /.shared-collapse -->
    </div><!-- /.container-fluid -->
</nav>