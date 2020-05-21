@extends('layouts.app')

@section('content')

@if (session('revisor.request.submit'))

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 alert font-weight-light alert-success">
                <h4>La tua richiesta è stata sottomessa con successo.</h4>
            </div>
        </div>
    </div>

@endif

@if (session('access.denied.revisor.only'))

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Errore.</h2>
            </div>
        </div>
    </div>

@endif
{{-- HEADER --}}
<header>
    <div class="overlay"></div>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-3">Presto.it</h1>
                <p class="lead mb-0">Soldi sotto il cuscino con Gino</p>
            </div>
        </div>
    </div>
</header>
{{-- FINE HEADER --}}



{{-- START CARD --}}
<div class="container my-5">
    <div class="row mt-4 ">
        <div class="col-12 col-md-6 col-lg-5">
            <h3 class="h5 text-blue"><i class="far fa-star"></i> Ecco gli ultimi annunci</h3>
            <hr class="mb-4">
        </div>
    </div>
  

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center ">
            @foreach ($ads as $ad) 
            <div class="col mb-4 ">
                @php
                $title = str_replace(' ', '-', $ad->title);
                @endphp
                <a class="custom-link" href="{{route('ad.details',['id'=>$ad->id,'title'=>$title])}}">
                    <div class="card h-100 featured-card">
                        
                        @if ($ad->img)
                        <img src="{{ Storage::url($ad->img) }}" class="card-img-top featured-card-img"
                        alt="{{ $ad->title }}">                
                        @else
                        <img src="https://via.placeholder.com/200x300" class="card-img-top featured-card-img"
                        alt="{{ $ad->title }}">
                        @endif            
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $ad->title }}</h5>
                            <p class="card-text">{{substr($ad->description, 0, 30)}}...</p>
                            <p class="card-price mt-auto h6 font-weight-bold text-primary">{{ $ad->price }}€</p>  
                        </div>
                        
                    </div>
                </a>
            </div>
        @endforeach
    </div>
   
</div>
{{-- END_CARD --}}

@endsection
