<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light py-2 fixed-top">
    <div class="container">
        <a class="navbar-brand no-shadow" href="{{ route('homepage') }}"> <img id="logo" class="pr-2" width="80px" src="/media/logo.png"
            alt="logo"><span class="h3 title-name">presto.it</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"
            aria-expanded="false" aria-label="Toggle navigation">
            <span> <i class="fas fa-bars"></i> </span>
        </button>
        <div class="collapse navbar-collapse text-center " id="mainNavbar">
            <ul class="navbar-nav  mt-4 mt-md-0 mx-0 mx-md-auto">
                <li class="nav-item">
                    <a class="nav-link disabled text-dark" href="#">Chi siamo<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled text-dark" href="#">Cosa facciamo</a>
                </li>
               @guest 
             
                <li class="nav-item ">
                <a class="nav-link text-dark" href="{{route('revisor.request')}}">Lavora con noi</a>
                </li>  
                
                @else
                @if(Auth::user()->is_revisor==false)
                     <li class="nav-item ">
                        <a class="nav-link text-dark" href="{{route('revisor.request')}}">Lavora con noi</a>
                    </li> 
                @elseif ( Auth::user()->is_revisor==true)
               
                @endif
                @endguest
                
                
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
                        <a class="nav-link no-shadow"
                        href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if(Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link no-shadow"
                        href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                @else
                    @if (Auth::user()->is_revisor)
                    
                        <li class="nav-item ">
                            <a class="no-shadow nav-link" href="{{route('revisor.home')}}">
                                <span class="badge badge-pill badge-primary">
                                    {{\App\Advertise::toBeRevisionedCount()}}
                                </span> 
                            </a>
                        </li>
                        
                    @endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle no-shadow" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        
                        
                        
                            <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                            </svg>
                        
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