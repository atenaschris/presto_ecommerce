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
                        <div id="carouselCategoria" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($ad->adsimage as $image)
                                <div class="carousel-item active">
                                    <img class="d-inline w-100 rounded-left" src="{{$image->getUrl(300,200)}}" alt="{{ $ad->title }}">
                                </div>
                                @endforeach
                                <a class="carousel-control-prev" href="#carouselCategoria" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselCategoria" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
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
                                
                                <div class="col-12 offset-md-6 col-md-6">
                                    <button class="btn btn-reverse w-100"><i class="far fa-comment-dots "></i><span
                                        class="ml-2 "><a class="text-white a-hover text-decoration-none" href="mailto:{{ $ad->user->email}}">{{ __('ui.contattailvenditore') }}</a></span></button>
                                        <button class="btn btn-blue-border w-100 my-2 d-md-none"><i
                                            class="far fa-grin-stars"></i><span class="ml-2">{{ __('ui.visualizzaprodotto') }}</span></button>
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
            
            