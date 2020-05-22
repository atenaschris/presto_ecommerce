@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5 pt-5">
    <div class="row">

@include('includes.dashboard_admin_nav')

        <div class="col-10">
            <h1>dashboard dell'admin tutti gli annunci</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                      <th scope="col">N.</th>
                      <th scope="col">Titolo</th>
                      <th scope="col">Status</th>
                      <th scope="col">Autore</th>
                      <th scope="col">Link</th>
                    </tr>
                  </thead>
                  @php
                      $counter = 1;
                  @endphp
                @foreach ($all_ads as $ad)
                @php
                     $uri = strtolower(str_replace(' ', '-', $ad->title));
                @endphp
                <tbody>
                        <tr>
                             <th scope="row">{{ $counter }}</th>                     
                             <td>{{ $ad->title }} <b>(#ID: {{ $ad->id }})</b></td>
                             @if ($ad->is_accepted)
                             <td>Revisionato e Accettato</td>
                             @elseif (! $ad->is_accepted)
                             <td>Revisionato e Rifiutato</td>                          
                             @else
                             <td>Non ancora revisionato</td> 
                             @endif
                             <td>{{ $ad->user->name }}</td>
                             <td><a href="{{route('ad.details',['id'=>$ad->id,'title'=>$uri])}}">Dettaglio</a></td>
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