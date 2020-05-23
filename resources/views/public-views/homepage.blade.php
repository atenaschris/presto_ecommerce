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
    
<svg class="onde d-none d-xl-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L30,256C60,256,120,256,180,234.7C240,213,300,171,360,154.7C420,139,480,149,540,165.3C600,181,660,203,720,208C780,213,840,203,900,202.7C960,203,1020,213,1080,229.3C1140,245,1200,267,1260,261.3C1320,256,1380,224,1410,208L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
        {{-- <svg class="onde" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L34.3,90.7C68.6,85,137,75,206,90.7C274.3,107,343,149,411,160C480,171,549,149,617,138.7C685.7,128,754,128,823,128C891.4,128,960,128,1029,117.3C1097.1,107,1166,85,1234,80C1302.9,75,1371,85,1406,90.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg> --}}
    

{{-- FINE HEADER --}}



{{-- START CARD --}}
<div class="container mb-5">
    <div class="row mt-4 ">
        <div class="col-12 col-md-6 col-lg-5">
            <h3 class="h5 text-blue"><i class="far fa-star"></i> Ecco gli ultimi annunci</h3>
            <hr class="mb-4">
        </div>
    </div>
  

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 ">
            @foreach ($ads as $ad) 
            <div class="col mb-4 ">
                @php
                $title = str_replace(' ', '-', $ad->title);
                @endphp
                <a class="custom-link" href="{{route('ad.details',['id'=>$ad->id,'title'=>$title])}}">
                    <div class="card h-100 featured-card">
                        
                        @if ($ad->img)
                        <img src="{{ Storage::url($ad->img) }}" class="card-img-top featured-card-img "
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
   
    {{-- <div class="card" style="width: 18rem;">
        <div class="card-img-overlay">
            <a href="#" class="badge badge-primary">Auto e Moto</a>
          </div>
        <img src="https://via.placeholder.com/200x300" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div> --}}
</div>
{{-- END_CARD --}}

@endsection
