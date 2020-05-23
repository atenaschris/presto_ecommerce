@extends('layouts.app')

@section('content')

<div class="container my-4">
    <div class="row">
        <div class="col-12 text-center">
            <h1>{{$categoryname}}</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">

        
           
        

        <div class="col-12 col-lg-8 offset-lg-2">
         
            @foreach ($ads as $ad)

            @php
                    $title = str_replace(' ', '-', $ad->title);
            @endphp

            <div class="horizzontal-card mt-5 mt-md-0 mb-5">
                <div class="row">
                    <div class="col-12 col-md-5">
                    <a class="custom-link" href="{{route('ad.details',['id'=>$ad->id,'title'=>$title])}}">
                            @if ($ad->img)

                            <img class="img-fluid corner-radius" src="{{Storage::url($ad->img)}}"
                            alt="{{$ad->title}}">

                           
                                
                            @else
                                
                            <img class="img-fluid corner-radius" src="https://via.placeholder.com/300x200"
                            alt="{{$ad->title}}">
                          
                                
                            @endif
                           
                        </a>
                    </div>
                    <div class="col-12 col-md-7 pl-md-0 d-flex flex-column justify-content-center">
                        <div class="mt-4">
                            <a class="custom-link" href="#">
                            <h3 class="d-inline">{{$ad->title}}</h3>
                            </a><i class="far fa-heart float-right loved-item"></i>
                        </div>
                        <a class="custom-link" href="#">
                            <p class="lead my-2">{{$ad->description}}
                            </p>
                        </a>
                        <div class="row mt-2">
                            <div class="col-12 col-md-6">
                                <div class="my-2 text-center"><i class="far fa-eye text-blue"></i><span
                                        class="ml-2 small text-danger">32 persone stanno guardando</span></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <button class="btn btn-reverse w-100"><i class="far fa-comment-dots "></i><span
                                        class="ml-2 "><a class="text-white a-hover text-decoration-none" href="mailto:{{ $ad->user->email}}">Contatta il venditore</a></span></button>
                                <button class="btn btn-blue-border w-100 my-2 d-md-none"><i
                                        class="far fa-grin-stars"></i><span class="ml-2">Visualizza
                                        prodotto</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            @endforeach

          

        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            {{$ads->links()}}
        </div>
    </div>
</div>


@endsection

