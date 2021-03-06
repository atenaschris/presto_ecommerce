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
                            
                                <div class="card">
                                   
                                    
                                    <div class="card-body">
                                        <a class="custom-link" href="{{route('ad.details',['id'=>$ad->id,'title'=>$title])}}"><h5 class="card-title">{{$ad->title}}</h5></a>
                                        <small class="card-text">{{ $ad->category->name }}</small>
                                        <p class="card-text">{{$ad->description}}</p>
                                        <p>{{ __('ui.pubblicatoda') }} {{ $ad->user->name }}</p>
                                        <p class="card-text h5">{{ __('ui.prezzo') }}: <span
                                            class="h4 text-primary font-weight-bold">{{ $ad->price }}€</span></p>
                                            {{-- Accordion Images --}}
                                            
                                                @foreach ($ad->adsimage as $image)
                                                    
                                                <div class="accordion" id="accordionExample">
                                                <div class="card">
                                                  <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                      <button class="btn btn-round btn-block text-left text-primary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Immagine
                                                      </button>
                                                    </h2>
                                                  </div>
                                              
                                                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <figure>

                                                            <img src="{{$image->getUrl(150,150)}}">
        
                                                        </figure>
                                                      
                                                        <label>Adult</label>
                                                        <div class="progress m-2">
                                                            <div class="progress-bar" role="progressbar" style="width: {{ $image->adult }}%" aria-valuenow="{{ $image->adult }}" aria-valuemin="0" aria-valuemax="100">{{ $image->adult }}%</div>
                                                        </div>
                                                        <label>Spoof</label>
                                                        <div class="progress m-2">
                                                            <div class="progress-bar" role="progressbar" style="width: {{ $image->spoof }}%" aria-valuenow="{{ $image->spoof }}" aria-valuemin="0" aria-valuemax="100">{{ $image->spoof }}%</div>
                                                        </div>
                                                        <label>Medical</label>
                                                        <div class="progress m-2">
                                                            <div class="progress-bar" role="progressbar" style="width: {{ $image->medical }}%" aria-valuenow="{{ $image->medical }}" aria-valuemin="0" aria-valuemax="100">{{ $image->medical }}%</div>
                                                        </div>
                                                        <label>Violence</label>
                                                        <div class="progress m-2">
                                                            <div class="progress-bar" role="progressbar" style="width: {{ $image->violence }}%" aria-valuenow="{{ $image->violence }}" aria-valuemin="0" aria-valuemax="100">{{ $image->violence }}%</div>
                                                        </div>
                                                        <label>racy</label>
                                                        <div class="progress m-2">
                                                            <div class="progress-bar" role="progressbar" style="width: {{ $image->racy }}%" aria-valuenow="{{ $image->racy }}" aria-valuemin="0" aria-valuemax="100">{{ $image->racy }}%</div>
                                                        </div>
                                                        </div>    
                                                        @if ($image->labels)
                                                        <ul class="list-group list-group-horizontal-md">
                                                            @foreach($image->labels as $label)
                                                                <li class="list-group-item">{{ $label }}</li>
                                                                
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </div>
                                                  </div>
                                                </div>
                                                @endforeach
                                            </div>
                                             {{--End Accordion Images  --}}
                                            
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
                            
                        </div>
                    @endforeach
                @else
                    
                    <h2>{{ __('ui.nonhaiannunci') }}!</h2>
                            
                @endif
                

            
        </div>


    </div>
</div>



@endsection
