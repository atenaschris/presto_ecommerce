@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5 pt-5">
    <div class="row">

@include('includes.dashboard_admin_nav')

<div class="col-10">
    <h1>Tutte le richieste</h1>
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">N.</th>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">RR</th>
              <th scope="col">Update del ruolo</th>
            </tr>
          </thead>
          @php
              $counter = 1;
          @endphp
        @foreach ($all_users as $user)
        @php
             $uri = strtolower(str_replace(' ', '-', $user->name));
        @endphp
        <tbody>
                <tr>
                     <th scope="row">{{ $counter }}</th>                     
                     <td>{{ $user->name }} <b>(#ID: {{ $user->id }})</b></td>
                     <td>{{ $user->email}}</td>
                
                <td>{{$user->revisor_request}}</td>
                <td>
                    <form action="{{ route('request.accepted',['id'=>$user->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">
                            Accetta
                        </button>
                    </form>
                    <form action="{{ route('request.rejected',['id'=>$user->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">
                            Rifiuta
                        </button>
                    </form>
                </td>
                </tr>
          </tbody>
          @php
              $counter += 1;
          @endphp
        @endforeach
      </table>
</div>
    </div>
</div>    
@endsection