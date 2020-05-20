@extends('layouts.app')

@section('content')

<div class="container my-4">
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
         
            {{-- @foreach ($ads as $ad) --}}


            @if ($ad)               
            @php
            $title = str_replace(' ', '-', $ad->title);
            @endphp
                        <div class="horizzontal-card mt-5 mt-md-0 mb-5">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                <a class="custom-link" href="{{route('ad.details',['id'=>$ad->id,'title'=>$title])}}">
                                        @if ($ad->img)
            
                                        <img class="img-fluid corner-radius" src="{{Storage::url($ad->img)}}"
                                        alt="{{$ad->title}}">
            
                                       
                                            
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
                                                <button type="submit" class="btn btn-success w-100 my-2 my-md-0"><i class="fas fa-check fa-pulse"></i><span
                                                    class="ml-2">Accetta</span></button> 
                                            </form>    
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <form action="{{ route('revisor.rejected', ["id" => $ad->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger w-100"><i class="fas fa-skull-crossbones fa-pulse"></i><span
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
                
            {{-- @endforeach --}}

          

        </div>

    </div>
</div>


@endsection

