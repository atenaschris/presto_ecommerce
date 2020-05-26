@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5">
    <div class="row">

@include('includes.dashboard_admin_nav')

<div class="col-12 col-md-10">
    <h1>{{ __('ui.tuttelerichieste') }}</h1>
    <table class="table table-hover table-responsive-md">
        <thead>
            <tr>
              <th scope="col">N.</th>
              <th scope="col">{{ __('ui.nome') }}</th>
              <th scope="col">Email</th>
              <th scope="col">RR</th>
              <th class="text-center" scope="col">{{ __('ui.diventarevisore') }}</th>
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
                    <div class="form-row">
                        <div class="col-12 col-md-6 mb-1 mb-md-0"><form action="{{ route('request.accepted',['id'=>$user->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success w-100 text-center">
                                {{ __('ui.accetta') }}
                            </button>
                        </form></div>
                        <div class="col-12 col-md-6"><form action="{{ route('request.rejected',['id'=>$user->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger w-100 text-center">
                                {{ __('ui.rifiuta') }}
                            </button>
                        </form></div>
                        
                    
                </div>
                
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