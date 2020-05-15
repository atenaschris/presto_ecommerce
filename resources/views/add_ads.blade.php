@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-12">
      <form method="post">
        @csrf
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" name="title"  id="title" placeholder="inserisci il titolo dell'annuncio">
        </div>
        <div class="form-group">
          <label for="category">Scegli la categoria</label>
          <select class="form-control" name=""  id="category">
            @foreach ($categories as $category)

          <option value="{{$category->id}}" >{{$category->name}}</option>
                
            @endforeach
          </select>
        </div>
        
        <div class="form-group">
          <label for="description"> Scrivi il tuo messaggio</label>
          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <div class="text-center">

          <button type="submit" class="btn btn-dark btn-lg w-100">
            Pubblica
          </button>

        </div>
       
      </form>

    </div>
  </div>
</div>



@endsection
