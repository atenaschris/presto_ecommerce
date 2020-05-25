@extends('layouts.app')
@section('content')
    <div class="container-fluid mt-5 pt-5">
        <div class="row">
            @include('includes.dashboard_revisor_nav')

           

            
            <div class="col-12 col-md-10">
                @if ($ads)
                
                    {{-- Navpills --}}
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-accepted-tab" data-toggle="pill" href="#pills-accepted" role="tab"
                                aria-controls="pills-accepted" aria-selected="true">Accettati</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-rejected-tab" data-toggle="pill" href="#pills-rejected" role="tab"
                                aria-controls="pills-rejected" aria-selected="false">Rifiutati</a>
                        </li>
                
                    </ul>
                
                    {{-- Tab Content --}}
                    <div class="tab-content" id="pills-tabContent">


                        {{-- Tab Accettati --}}
                        <div class="tab-pane fade show active" id="pills-accepted" role="tabpanel" aria-labelledby="pills-accepted-tab">
                            @foreach ($ads as $ad)
                                @if ($ad->is_accepted)
                                    @php
                                    $title = str_replace(' ', '-', $ad->title);
                                    @endphp

                                    <div class="col-12 py-3 px-3">
                                        <a class="custom-link" href="{{route('ad.details',['id'=>$ad->id,'title'=>$title])}}">
                                            <div class="card">
                                                @if ($ad->img)

                                                    <img class="img-fluid card-img-top" src="{{Storage::url($ad->img)}}" alt="{{$ad->title}}">



                                                @else

                                                    <img class="img-fluid corner-radius" src="https://via.placeholder.com/600x400" alt="{{$ad->title}}">


                                                @endif
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$ad->title}}</h5>
                                                    <small class="card-text">{{ $ad->category->name }}</small>
                                                    <p class="card-text">{{$ad->description}}</p>
                                                    <p>Annuncio pubblicato da {{ $ad->user->name }}</p>
                                                    <p class="card-text h5">Prezzo: <span
                                                            class="h4 text-primary font-weight-bold">{{ $ad->price }}€</span></p>
                                                </div>
                                                {{-- <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">
                                                                        <label for="customRange3">Violenza</label>
                                                                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <label for="customRange3">Razzismo</label>
                                                                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                                        
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <label for="customRange3">Nudità</label>
                                                                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <label for="customRange3">Droga</label>
                                                                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <label for="customRange3">Armi</label>
                                                                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                                    </li>
                                                                </ul> --}}
                                                <div class="row mt-2 justify-content-center">
                                                    
                                                    <div class="col-12 col-md-6 ">
                                                        <form action="{{ route('ads.rejected', ["id" => $ad->id]) }}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger w-100"><i
                                                                    class="fas fa-skull-crossbones "></i><span class="mr-2">Rifiuta
                                                                    ora</span></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            
                        </div>


                        {{-- tab rifiutati --}}
                        <div class="tab-pane fade" id="pills-rejected" role="tabpanel" aria-labelledby="pills-rejected-tab">
                            @foreach ($ads as $ad)
                                @if (! $ad->is_accepted)
                                    @php
                                    $title = str_replace(' ', '-', $ad->title);
                                    @endphp

                                    <div class="col-12 py-3 px-3">
                                        <a class="custom-link" href="{{route('ad.details',['id'=>$ad->id,'title'=>$title])}}">
                                            <div class="card">
                                                @if ($ad->img)

                                                    <img class="img-fluid card-img-top" src="{{Storage::url($ad->img)}}" alt="{{$ad->title}}">



                                                @else

                                                <img class="img-fluid corner-radius" src="https://via.placeholder.com/600x400" alt="{{$ad->title}}">


                                                @endif
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$ad->title}}</h5>
                                                    <small class="card-text">{{ $ad->category->name }}</small>
                                                    <p class="card-text">{{$ad->description}}</p>
                                                    <p>Annuncio pubblicato da {{ $ad->user->name }}</p>
                                                    <p class="card-text h5">Prezzo: <span
                                                            class="h4 text-primary font-weight-bold">{{ $ad->price }}€</span></p>
                                                </div>
                                                {{-- <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">
                                                                        <label for="customRange3">Violenza</label>
                                                                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <label for="customRange3">Razzismo</label>
                                                                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                                        
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <label for="customRange3">Nudità</label>
                                                                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <label for="customRange3">Droga</label>
                                                                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <label for="customRange3">Armi</label>
                                                                        <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                                    </li>
                                                                </ul> --}}
                                                <div class="row mt-2 justify-content-center">
                                                    
                                                    <div class="col-12 col-md-6">
                                                        <form action="{{ route('ads.accepted', ["id" => $ad->id]) }}" method="post">
                                                            @csrf
                                                            <label for="gotoaccepted">Cambia da Rifiutato ad Accettato</label>
                                                            <button type="submit" class="btn btn-success w-100 my-2 my-md-0"><i
                                                                    class="fas fa-check gotoaccepted"></i><span class="mr-2"></span>Accetta Ora</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            
                        </div>
                    </div>
          
                @else
              
                        
                    <h2>Non ci sono annunci da modificare!</h2>
                        
                 
            
                 @endif
            </div>
          
        </div>
    </div>
@endsection
