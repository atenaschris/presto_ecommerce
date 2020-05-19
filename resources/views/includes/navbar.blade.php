<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light py-2 py-md-4 mt-2 mt-md-0 sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}"> <img id="logo" class="pr-2" width="80px" src="/media/logo.png"
                alt="logo"><span class="h3 title-name">dino.it</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"
            aria-expanded="false" aria-label="Toggle navigation">
            <span> <i class="fas fa-bars"></i> </span>
        </button>
        <div class="collapse navbar-collapse text-center" id="mainNavbar">
            <ul class="navbar-nav  mt-4 mt-md-0 mx-0 mx-md-auto">
                <li class="nav-item">
                    <a class="nav-link disabled text-dark" href="#">Chi siamo<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled text-dark" href="#">Cosa facciamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled text-dark" href="#">Team</a>
                </li>
                

                            <li class="nav-item dropdown no-shadow">
                                <a class="nav-link dropdown-toggle no-shadow" href="#" id="categoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Categorie
                                </a>
                                <div class="dropdown-menu"     aria-labelledby="categoryDropdown">
                                    @foreach ($categories as $category)
                                
                                        <a href="{{route('category.ads',['id'=>$category->id,'name'=>$category->name])}}" class="dropdown-item" >{{$category->name}}</a>
            
                                    @endforeach
                                </div>
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