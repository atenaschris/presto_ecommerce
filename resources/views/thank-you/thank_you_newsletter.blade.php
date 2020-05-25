@extends('layouts.app')
@section('content')


{{-- @if (session('ads.created')) --}}
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-12">
      @if (Auth::user())
      <h1 class="cover-heading">Grazie {{ Auth::user()->name }},</h1>
      <p class="lead"> per esserti iscritto alla newsletter</p>
      @else
      <h1 class="cover-heading">Grazie Amico!</h1>
      <p class="lead">Grazie per esserti iscritto alla newsletter</p>
      @endif
    </div>
  </div>
</div>





@endsection