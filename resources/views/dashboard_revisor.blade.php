@extends('layouts.app')

@section('content')

{{-- <div class="container my-4">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Ciao {{ Auth::user()->name }}</h1>
<p>Hai da revisionare:</p>
</div>
</div>
</div>
<div class="container">
    <div class="row">

        <div class="col-12 col-lg-8 offset-lg-2">




            @if ($ad)
            @php
            $title = str_replace(' ', '-', $ad->title);
            @endphp
            <div class="horizzontal-card mt-5 mt-md-0 mb-5">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <a class="custom-link" href="{{route('ad.details',['id'=>$ad->id,'title'=>$title])}}">
                            @if ($ad->img)

                            <img class="img-fluid corner-radius" src="{{Storage::url($ad->img)}}" alt="{{$ad->title}}">



                            @else

                            <img class="img-fluid corner-radius" src="https://via.placeholder.com/300x200"
                                alt="{{$ad->title}}">


                            @endif

                        </a>
                    </div>
                    <div class="col-12 col-md-7 pl-md-0 d-flex flex-column justify-content-center">
                        <div class="mt-4">
                            <a class="custom-link" href="#">
                                <h3 class="d-inline">{{$ad->title}}</h3>
                            </a><span>Annuncio pubblicato da {{ $ad->user->name }}</span>
                        </div>
                        <a class="custom-link" href="#">
                            <p class="lead my-2">{{$ad->description}}
                            </p>
                        </a>
                        <div class="row mt-2">
                            <div class="col-12 col-md-6">
                                <form action="{{ route('revisor.accepted', ["id" => $ad->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success w-100 my-2 my-md-0"><i
                                            class="fas fa-check "></i><span class="ml-2">Accetta</span></button>
                                </form>
                            </div>
                            <div class="col-12 col-md-6">
                                <form action="{{ route('revisor.rejected', ["id" => $ad->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger w-100"><i
                                            class="fas fa-skull-crossbones "></i><span
                                            class="ml-2">Rifiuta</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Non hai annunci da revisionare!</h1>
                    </div>
                </div>
            </div>
            @endif





        </div>

    </div>
</div> --}}

<div class="container-fluid mt-5 pt-5">
    <div class="row">



        @include('includes.dashboard_revisor')
        <div class="col-10">
           
               
                <h2 class="h3 text-primary ">
                    Hai <span class="text-danger">{{\App\Advertise::toBeRevisionedCount()}}</span>
                    annunci da controllare!
                    </h2 >
                <small class="text-secondary">Let's do it!</small>
                
                @if ($ads)
                    @foreach ($ads as $ad)
                        @php
                        $title = str_replace(' ', '-', $ad->title);
                        @endphp

                        <div class="col-12 py-3 px-3">
                            <a class="custom-link" href="{{route('ad.details',['id'=>$ad->id,'title'=>$title])}}">
                                <div class="card">
                                    @if ($ad->img)

                                     <img class="img-fluid card-img-top" src="{{Storage::url($ad->img)}}" alt="{{$ad->title}}">



                                    @else

                                      <img class="img-fluid corner-radius" src="https://via.placeholder.com/300x200"
                                        alt="{{$ad->title}}">


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
                                    <div class="row mt-2">
                                        <div class="col-12 col-md-6">
                                            <form action="{{ route('revisor.accepted', ["id" => $ad->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success w-100 my-2 my-md-0"><i
                                                        class="fas fa-check "></i><span class="mr-2">Accetta</span>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <form action="{{ route('revisor.rejected', ["id" => $ad->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger w-100"><i
                                                        class="fas fa-skull-crossbones "></i><span
                                                        class="mr-2">Rifiuta</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    
                    <h2>Non hai annunci da revisionare!</h2>
                            
                @endif
                

            
        </div>


    </div>
</div>



@endsection
