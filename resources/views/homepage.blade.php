@extends('layouts.app')

@section('content')

<header>
    <div class="overlay"></div>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-3">Gino.it</h1>
                <p class="lead mb-0">Soldi sotto il cuscino con Gino</p>
            </div>
        </div>
    </div>
</header>

<div class="container my-5">
    <div class="row mt-4">
        <div class="col-12 col-md-6 col-lg-5">
            <h3 class="h5 text-blue"><i class="far fa-star"></i> Ecco gli ultimi annunci</h3>
            <hr class="mb-4">
        </div>
    </div>
    <div class="row m-0">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 justify-content-center">
            @foreach ($ads as $ad)
            <div class="col-8 mb-4">
               @php
                   $title = strtolower(str_replace(' ', '-', $ad->title));
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
                           
                                <p class="card-price mt-auto">{{ $ad->price }}€</p>
                            
                            
                        </div>
                        
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
