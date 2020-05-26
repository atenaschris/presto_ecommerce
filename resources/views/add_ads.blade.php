@extends('layouts.app')

@section('content')

<div class="container my-5 pt-3">
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

      {{-- Title --}}
      <form method="post" action="{{route('submit')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Titolo <span class="small text-muted">(Massimo 30 caratteri)</span></label>
          <input type="text" class="form-control" name="title"  id="title" placeholder="inserisci il titolo dell'annuncio "maxlength="30">
        </div>

        {{-- Category --}}
        <div class="form-group">
          <label for="category">Scegli la categoria</label>
          <select class="form-control" name="category_id" id="category">
            @foreach ($categories as $category)
            
              <option value="{{$category->id}}">{{$category->name}}</option>
            
            @endforeach
          </select>
        </div>

        {{-- Price --}}
        <div class="form-group">
          <label for="price">Inserisci il prezzo</label>
          <input type="number" min="0"  class="form-control" name="price"  id="price" placeholder="Esempio 300">
        </div>

        {{-- Description --}}
        <div class="form-group">
          <label for="description"> Descrivi il tuo prodotto</label>
          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        {{-- Image --}}
        <div class="form-group">
          <label for="img">Imagine</label>
          <input type="file" class="form-control" name="img"  id="image">
        </div>
        {{-- BUTTON --}}
        <div class="text-center">
          
          <button id="addSuccess" type="submit" class="btn btn-dark btn-lg w-100" onmouseover="play_aud()">
            Pubblica
          </button>
          
          
          
          
          
        </div>
        
      </form>
      
      

        <audio id="player" controls>
      
          <source src="\media\pornhub-community-intro.mp3" type="audio/ogg">
            
        </audio>

     
    </div>
  </div>
</div>

<script>
          let player = document.getElementById("player");

             player.controls = false;
    
            function play_aud() {
      
              player.play();
        
      
            }

        </script>

 


@endsection
