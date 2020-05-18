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
      

            
             <a href="{{route('add.ads')}}"  class="btn btn-primary btn-lg shadow-none">Pubblica il tuo annuncio</a>
                 
            

          </div>

      </div>
      <div class="row mt-5">
        <div class="col-12">
          <div class="card-deck">
            @foreach ($ads as $ad)


              <div class="card">
                @if ($ad->img)

                <img src="{{Storage::url($ad->img)}}" class="card-img-top" alt="{{$ad->title}}">

                @else

                <img src="https://via.placeholder.com/150" class="card-img-top" alt="{{$ad->title}}">
                    
                @endif
                <div class="card-body">
                  <h5 class="card-title">{{$ad->title}}</h5>
                  <p class="card-text">{{$ad->description}}</p>
                  <p class="card-text">{{$ad->price}}€</p>
                  <p class="card-text">{{$ad->user->name}}</p>
                </div>
                <div class="card-footer">
                  <small>{{ $ad->category->name }}</small>
                  <small class="text-muted">{{ Carbon\Carbon::parse($ad->created_at)->format('d-m-Y')}}
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
