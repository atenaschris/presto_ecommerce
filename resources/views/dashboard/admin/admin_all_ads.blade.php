@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5">
    <div class="row">

@include('includes.dashboard_admin_nav')

        <div class="col-12 col-md-10">
            <h1>{{ __('ui.tuttigliannunci') }}</h1>
            <table class="table table-hover table-responsive-md">
                <thead>
                    <tr>
                      <th scope="col">N.</th>
                      <th scope="col">{{ __('ui.titolo') }}</th>
                      <th scope="col">Status</th>
                      <th scope="col">{{ __('ui.autore') }}</th>
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
                             <td>{{ __('ui.reveacc') }}</td>
                             @elseif ( $ad->is_accepted == false && $ad->is_accepted != null)
                             <td>{{ __('ui.reverif') }}</td>                          
                             @else
                        <td>{{ __('ui.nonrev') }}<br> <a href="{{route('admin.to.be.revisioned.ads')}}">{{ __('ui.vaiarevisiona') }}..</a> </td> 
                             @endif
                             <td>{{ $ad->user->name }}</td>
                             <td><a href="{{route('ad.details',['id'=>$ad->id,'title'=>$uri])}}">{{ __('ui.dettaglio') }}</a></td>
                        </tr>
                  </tbody>
                  @php
                      $counter += 1;
                  @endphp
                @endforeach
              </table>
              <div class="col-12">
                {{$all_ads->links()}}
            </div>
        </div>
    </div>
</div> 

@endsection