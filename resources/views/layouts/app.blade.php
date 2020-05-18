<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light py-2 py-md-4 mt-2 mt-md-0 sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#"> <img id="logo" class="pr-2" width="80px" src="/media/logo.png"
                        alt="logo"><span class="h3 title-name">dino.it</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span> <i class="fas fa-bars"></i> </span>
                </button>
                <div class="collapse navbar-collapse text-center" id="mainNavbar">
                    <ul class="navbar-nav  mt-4 mt-md-0 mx-0 mx-md-auto">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Categoria 1<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Categoria 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Categoria 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Categoria 4</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if(Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu   dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}"
                                        method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        {{-- <li class="nav-item ">
                            <div class="container-custom">
                                <input class="input-custom" type="text" placeholder="Search...">
                                <div class="search"></div>
                            </div>
                        </li> --}}
                        <li>
                           <a href="{{ route('add.ads') }}"> <button class=" btn btn-orange my-2 my-sm-0"> <i class="fas fa-plus mr-1"></i> Inserisci
                                annuncio</button> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://kit.fontawesome.com/a6b5772942.js" crossorigin="anonymous"></script>
</body>

</html>
