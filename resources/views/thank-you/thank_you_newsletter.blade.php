@extends('layouts.app')
@section('content')
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    
    {{-- @if (session('ads.created')) --}}
      <main role="main" class="inner cover">
        @if (Auth::user())
        <h1 class="cover-heading">Grazie {{ Auth::user()->name }}</h1>
        <p class="lead">Grazie per esserti iscritto alla newsletter</p>
        @else
        <h1 class="cover-heading">Grazie Amico!</h1>
        <p class="lead">Grazie per esserti iscritto alla newsletter</p>
        @endif
      </main>
    {{-- @else
      <script>window.location = "/";</script>
    @endif --}}
    
  </div>
@endsection