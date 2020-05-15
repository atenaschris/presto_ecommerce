@extends('layouts.app')

@section('content')

<header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
    </video>
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3">Video Header</h1>
          <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
        </div>
      </div>
    </div>
  </header>

  <div class="container my-5">
      <div class="row">
          <div class="col-12 text-center">
             @if (Auth::user())

            
             <a href="{{route('add.ads')}}"  class="btn btn-primary btn-lg shadow-none">Pubblica il tuo annuncio</a>
                 
             @else
                 
             <a href="{{route('home')}}"  class="btn btn-primary btn-lg shadow-none">Pubblica il tuo annuncio</a>
             
                 
             @endif

          </div>
      </div>
  </div>

@endsection
