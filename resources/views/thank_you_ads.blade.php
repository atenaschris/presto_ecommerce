@extends('layouts.app')
@section('content')
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    
    @if (session('ads.created'))
      <main role="main" class="inner cover">
        <h1 class="cover-heading">Grazie {{ Auth::user()->name }}</h1>
        <p class="lead">Il tuo annuncio sarà revisionato a breve...</p>
      </main>
    @else
      <script>window.location = "/";</script>
    @endif
    
  </div>
@endsection