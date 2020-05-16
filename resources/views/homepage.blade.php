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
      <div class="row mt-5">
        <div class="col-12">
          <div class="card-deck">
          @foreach ($last_ads as $ads)


            <div class="card">
            @if ($ads->img)

            <img src="{{Storage::url($ads->img)}}" class="card-img-top" alt="{{$ads->title}}">

            @else

            <img src="https://via.placeholder.com/150" class="card-img-top" alt="{{$ads->title}}">
                
            @endif
              <div class="card-body">
              <h5 class="card-title">{{$ads->title}}</h5>
              <p class="card-text">{{$ads->description}}</p>
              <p class="card-text">{{$ads->price}}€</p>
              </div>
              <div class="card-footer">
              <small class="text-muted">{{ Carbon\Carbon::parse($ads->created_at)->format('d-m-Y')}}
              </small>
              </div>
            </div>

            
            @endforeach
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
         
        </div>
      </div>
  </div>


@endsection
