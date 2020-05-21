@extends('layouts.app')

@section('content')

<div class="container h-100 mb-5">
  <div class="row">
    
    <div class="col-12">
      
      
      {{-- Alert --}}
      <div>
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
      </div>
      
      {{-- User Name --}}
      @if (Auth::user()->revisor_request < 2)
          
      <form method="post" action="{{ route('revisor.submit') }}" >
        @csrf
        <div class="form-group" >
          <label for="username">Il tuo nome</label>
          <input type="text" class="form-control" name="username"  id="username" value="{{ Auth::user()->name }}" disabled>
        </div>
        {{-- E-mail --}}
        <div class="form-group" >
          <label for="email">La tua email</label>
          <input type="text" class="form-control" name="email"  id="email" value="{{ Auth::user()->email }}" disabled>
        </div>
        
        {{-- Presentazione --}}
        <div class="form-group">
          <label for="presentation">Presentati!</label>
          <textarea class="form-control" name="presentation" id="presentation" rows="3"></textarea>
        </div>
        
        
        {{-- Description --}}
        <div class="form-group">
          <label for="description">Motiva perchè vuoi diventare un revisore</label>
          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        
        {{-- BUTTON --}}
        <div class="text-center">
          
          <button type="submit" class="btn btn-dark btn-lg w-100">
            Pubblica
          </button>
          
          
          
          
          
        </div>
        
      </form>
      
      @else

      <h1>Le tue richieste sono già state prese in carico, verranno revisionate al più presto. </h1>
      <p>Richieste effettuate: {{ Auth::user()->revisor_request }}</p>
      @endif
      
      
      
    </div>
  </div>
</div>





@endsection
