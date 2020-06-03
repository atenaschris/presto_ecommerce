<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light py-2 fixed-top">
    <div class="container">
        <a class="navbar-brand no-shadow" href="{{ route('homepage') }}"> <img id="logo" class="pr-2" width="80px" src="/media/logo.png"
            alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"
            aria-expanded="false" aria-label="Toggle navigation">
            <span> <i class="fas fa-bars"></i> </span>
        </button>
        <div class="collapse navbar-collapse text-center " id="mainNavbar">
            <ul class="navbar-nav  mt-4 mt-md-0 mx-0 mx-md-auto">
                <li class="nav-item">
                <a class="nav-link disabled text-dark" href="#">{{__('ui.chisiamo')}}<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled text-dark" href="#">{{ __('ui.chisiamo') }}</a>
                </li>
                    @guest 
                
                        <li class="nav-item ">
                            <a class="nav-link text-dark" href="{{route('revisor.request')}}">{{ __('ui.lavoraconnoi') }}</a>
                        </li>  
                
                    @else
                        @if(Auth::user()->roles == 0)
                            <li class="nav-item ">
                                <a class="nav-link text-dark" href="{{route('revisor.request')}}">{{ __('ui.lavoraconnoi') }}</a>
                            </li> 
                        @endif
                    @endguest
                
                
                <li class="nav-item dropdown no-shadow" >
                    <a class="nav-link dropdown-toggle no-shadow" href="#" id="categoryDropdown" role="button"  data-toggle="modal" data-target="#categoryModal">
                        {{ __('ui.categorie') }}
                    </a>
                </li>
                
                
                
                
                
            </ul>
            <ul class="navbar-nav ml-auto">
                
                <!-- Authentication Links -->
                @guest
                
                    <li class="nav-item">
                        <a class="nav-link no-shadow" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if(Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link no-shadow" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    @if (Auth::user()->roles == 1)
                
                        
                
                    @endif
                        <li class="nav-item dropdown text-main-color">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle no-shadow " href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    
                    
                    
                                   <span class="font-weight-bold text-main-color"> 
                                       @if (Auth::user()->roles == 1)
                                           
                                       <svg class="bi bi-person-fill mb-1" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                                    </svg>
                                       @elseif (Auth::user()->roles == 2)
                                       <svg class="bi bi-person-circle mb-1" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                                      </svg> 
                                      @elseif(Auth::user()->roles == 0) 

                                       @endif
                    
                                        {{ Auth::user()->name }}</span> <span class="caret"></span>
                                 </a>
                
                                <div class="dropdown-menu dropdown-menu2  dropdown-menu-right" aria-labelledby="navbarDropdown">
                    
                    
                    
                    
                                    @if (Auth::user()->roles == 1)
                                        <a href="{{ route('revisor.home') }}" target="_blank" rel="noopener noreferrer" class="dropdown-item">
                                            <button type="button" class="btn background-main-color text-white rounded-pill">
                                                Dashboard <span class="badge badge-light">{{ \App\Advertise::toBeRevisionedCount() }}</span>
                                                    <span class="sr-only">unread notifies</span>
                                            </button>
                                        </a>
                                        <a href="{{ route('revisor.to.be.revisioned.ads') }}" target="_blank" rel="noopener noreferrer" class="dropdown-item">
                                            
                                            {{ __('ui.annunci') }}{{ __('ui.darevisionare') }}
                                                    
                                            
                                        </a>
                                        <a href="{{ route('revisor.undo.ads') }}" target="_blank" rel="noopener noreferrer" class="dropdown-item">
                                            
                                            {{ __('ui.annunci') }} {{ __('ui.revisionati') }} 
                                                
                                        
                                        </a>
                                        
                    
                                    @elseif(Auth::user()->roles == 2)
                                            <a href="{{ route('admin.home') }}" target="_blank" rel="noopener noreferrer" class="dropdown-item text-decoration-none">
                                                <button type="button" class="btn background-main-color text-white">
                                                    Dashboard <span class="badge badge-light">{{\App\User::requestCount()}}</span>
                                                     <span class="sr-only">unread notifies</span>
                                                </button>
                                            </a>
                                            <a href="{{ route('admin.all.ads') }}" target="_blank" rel="noopener noreferrer" class="dropdown-item text-decoration-none">
                                               
                                                {{ __('ui.tuttigliannunci') }}
                                                     
                                                
                                            </a>
                                            <a href="{{ route('admin.all.users') }}" target="_blank" rel="noopener noreferrer" class="dropdown-item text-decoration-none">
                                                
                                                {{ __('ui.tuttigliutenti') }}
                                                     
                                                
                                            </a>
                                            <a href="{{ route('admin.to.be.revisioned.ads') }}" target="_blank" rel="noopener noreferrer" class="dropdown-item text-decoration-none">
                                                
                                                Annunci da revisionare
                                                     
                                                
                                            </a>
                                            
                                            <a href="{{ route('admin.all.users') }}" target="_blank" rel="noopener noreferrer"></a>
                                    @elseif(Auth::user()->roles == 0)
                                    <a href="{{ route('user.home') }}" target="_blank" rel="noopener noreferrer" class="dropdown-item">
                                        <button type="button" class="btn background-main-color text-white">
                                            Dashboard <span class="badge badge-light">{{\App\Advertise::userPublishedAdsCount()}}</span>
                                             <span class="sr-only">unread notifies</span>
                                        </button>
                                    </a>
                                    <a href="{{ route('user.all.ads') }}" target="_blank" rel="noopener noreferrer" class="dropdown-item">
                                        
                                        {{ __('ui.annuncipubblicati') }}
                                            
                                       
                                    </a>
                                    
                                    @endif
                    
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




                        
                <li>
                    <a href="{{ route('add.ads') }}"> 
                        <button class=" btn btn-announcement my-2 my-sm-0 ml-4"> <i class="fas fa-plus mr-1"></i> {{ __('ui.inserisciannuncio') }}</button> 
                    </a>
                </li>
               
                <li>
                      
                    <div class="dropdown show ml-3 mt-1">
                    
                        
                    @if (Config::get('app.locale') == 'it')
                    <div id="languages" class="btn btn-sm dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        IT <span class="flag-icon flag-icon-it"> </span>
                    </div>
                    @elseif(Config::get('app.locale') == 'en')
                    <div id="languages" class="btn btn-sm dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        EN <span class="flag-icon flag-icon-gb"> </span>
                    </div>
                    @elseif(Config::get('app.locale') == 'es')
                    <div id="languages" class="btn btn-sm dropdown-toggle " role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ES <span class="flag-icon flag-icon-es"></span>
                    </div>
                    @else
                        <div id="languages" class="btn btn-sm dropdown-toggle text-uppercase" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $dividedLang }} <span class="flag-icon flag-icon-{{ $flag }}"> </span>
                        </div>
                   @endif 
                        
                        
                        
                      
                        <div class="dropdown-menu dropdown-menu2 dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            
                             
                         @include('includes.formlanguages',['lang'=>'it','nation'=>'it'])
                         @include('includes.formlanguages',['lang'=>'es','nation'=>'es'])
                         @include('includes.formlanguages',['lang'=>'en','nation'=>'gb'])
                            
                         
                        </div>
                      </div>

                </li>
              
            </ul>
</div>
</div>
</nav>