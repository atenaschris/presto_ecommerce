@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5">
    <div class="row">



        @include('includes.dashboard_revisor_nav')
        <div class="col-12 col-md-10">
           
               
                <h2 class="h3 text-primary ">
                    {{ __('ui.hai') }} <span class="text-danger">{{\App\Advertise::toBeRevisionedCount()}}</span>
                    {{ __('ui.annuncidacontrollare') }}!
                    </h2 >
                <p class="text-primary h5 text-weight-bold">Let's do it!</p>
                
                @if ($ads)
                    @foreach ($ads as $ad)
                        @php
                        $title = str_replace(' ', '-', $ad->title);
                        @endphp

                        <div class="col-12 py-3 px-3">
                            <a class="custom-link" href="{{route('ad.details',['id'=>$ad->id,'title'=>$title])}}">
                                <div class="card">
                                    <div class="col-12">
                                        @foreach ($ad->adsimage as $image)
                                            <div class="row">
                                            <img src="{{$image->getUrl(300,150)}}" class="img-fluid card-img-top">
                                            </div>
                                            <div class="col-12">
                                                {{$image->id}} <br>
                                                {{$image->file}} <br>
                                                {{Storage::url($image->file)}}
                                            </div>
                                        @endforeach
                                    </div>
                                   {{--  @if ($ad->img)
                                   
                                     <img class="img-fluid card-img-top" src="{{Storage::url($ad->img)}}" alt="{{$ad->title}}">



                                    @else

                                      <img class="img-fluid corner-radius" src="https://via.placeholder.com/300x200"
                                        alt="{{$ad->title}}">


                                    @endif --}}
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
                                    <div class="row mt-2">
                                        <div class="col-12 col-md-6">
                                            <form action="{{ route('revisor.accepted', ["id" => $ad->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success w-100 my-2 my-md-0"><i
                                                        class="fas fa-check "></i><span class="mr-2">{{ __('ui.accetta') }}</span>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <form action="{{ route('revisor.rejected', ["id" => $ad->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger w-100"><i
                                                        class="fas fa-skull-crossbones "></i><span
                                                        class="mr-2">{{ __('ui.rifiuta') }}</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    
                    <h2>{{ __('ui.nonhaiannunci') }}!</h2>
                            
                @endif
                

            
        </div>


    </div>
</div>



@endsection
