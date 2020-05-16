@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-12">
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
      <form method="post" action="{{route('submit')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" name="title"  id="title" placeholder="inserisci il titolo dell'annuncio">
        </div>
        
        <div class="form-group">
          <label for="category">Scegli la categoria</label>
          <select class="form-control" name="category_id" id="category">
            @foreach ($categories as $category)

          <option value="{{$category->id}}">{{$category->name}}</option>
                
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="price">Inserisci il prezzo</label>
          <input type="number" min="0"  class="form-control" name="price"  id="price" placeholder="Esempio 300">
        </div>
        <div class="form-group">
          <label for="description"> Descrivi il tuo prodotto</label>
          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="img">Imagine</label>
          <input type="file" class="form-control" name="img"  id="image">
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
