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
        
      <input type="hidden" name="uniquesecret" value="{{$uniquesecret}}">
        <div class="form-group">
          <label for="title">{{ __('ui.titolo') }} <span class="small text-muted">(Max 30)</span></label>
          <input type="text" class="form-control" name="title"  id="title" placeholder="{{ __('ui.titolo') }} "maxlength="30">
        </div>

        {{-- Category --}}
        <div class="form-group">
          <label for="category">{{ __('ui.categorie') }}</label>
          <select class="form-control" name="category_id" id="category">
            @foreach ($categories as $category)
            
              <option value="{{$category->id}}">{{$category->name}}</option>
            
            @endforeach
          </select>
        </div>

        {{-- Price --}}
        <div class="form-group">
          <label for="price">{{ __('ui.prezzo') }}</label>
          <input type="number" min="0"  class="form-control" name="price"  id="price" placeholder="300">
        </div>

        {{-- Description --}}
        <div class="form-group">
          <label for="description"> {{ __('ui.descrizione') }}</label>
          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        {{-- Image --}}
      <div class="form-group">
        <label for="drophere">images</label>

        <div id="drophere" class="dropzone"></div>

        @error ('images')
         <span role="alert" class="invalid-feedback">
         <strong>{{$message}}</strong>
         </span>
        @enderror

      </div>
    
        {{-- BUTTON --}}
        <div class="text-center">
          
          <button id="addSuccess" type="submit" class="btn btn-dark btn-lg w-100" onmouseover="play_aud()">
            {{ __('ui.pubblica') }}
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
