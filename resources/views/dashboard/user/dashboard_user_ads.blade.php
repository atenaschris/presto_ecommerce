@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        @include('includes.dashboard_user_nav')
        <div class="col-12 col-md-10">
                
                    
            <h2 class="h3 text-primary ">
                {{ __('ui.haipubblicato') }}: <span class="text-danger">{{\App\Advertise::userPublishedAdsCount()}}</span>
                {{ __('ui.annunci') }}
                </h2 >
            
            
            @if ($ads)
                @foreach ($ads as $ad)
                    @php
                    $title = str_replace(' ', '-', $ad->title);
                    @endphp

                    <div class="col-12 py-3 px-3">
                        <a class="custom-link" href="{{route('ad.details',['id'=>$ad->id,'title'=>$title])}}">
                            <div class="card">
                                @if ($ad->adsimage)

                                @foreach ($ad->adsimage as $image)
                                <img class="img-fluid card-img-top" src="{{Storage::url($image->file)}}">
                                @endforeach
                                



                                @else

                                <img class="img-fluid corner-radius" src="https://via.placeholder.com/300x200"
                                    alt="{{$ad->title}}">


                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{$ad->title}}</h5>
                                    <small class="card-text">{{ $ad->category->name }}</small>
                                    <p class="card-text">{{$ad->description}}</p>
                                    <p>{{ __('ui.pubblicatoda') }} {{ $ad->user->name }}</p>
                                    <p class="card-text h5">{{ __('ui.prezzo') }}: <span
                                            class="h4 text-primary font-weight-bold">{{ $ad->price }}€</span></p>
                                </div>
                                {{-- <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <label for="customRange3">Violenza</label>
                                                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                </li>
                                                <li class="list-group-item">
                                                    <label for="customRange3">Razzismo</label>
                                                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                    
                                                </li>
                                                <li class="list-group-item">
                                                    <label for="customRange3">Nudità</label>
                                                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                </li>
                                                <li class="list-group-item">
                                                    <label for="customRange3">Droga</label>
                                                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                </li>
                                                <li class="list-group-item">
                                                    <label for="customRange3">Armi</label>
                                                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                </li>
                                            </ul> --}}
                            
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                
                <h2>{{ __('ui.nonhaiannunci')}}</h2>
                        
            @endif
            


        </div>
    </div>
</div>

@endsection
