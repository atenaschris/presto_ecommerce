@extends('layouts.app')
@section('content')
  
    
    @if (session('ads.created'))
      <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <h1 class="cover-heading">Grazie {{ Auth::user()->name }}</h1>
            <p class="lead">Il tuo annuncio sarà revisionato a breve...</p>
          </div>
        </div>
      </div>
        
      
    @else
      <script>window.location = "/";</script>
    @endif
    
  </div>
@endsection