@extends('layouts.app')
@section('content')
<div class="container-fluid mt-5 py-5">
    <div class="row rounded shadow-lg">
      
      
      <div class="col-10 col-lg-7 py-3 px-1 px-md-3 offset-0 offset-md-1 offset-lg-0 px-lg-5 justify-content-center text-center">
        <div class="slick-carousel text-center">
          <div class="slider-for p-0">
            <img src="https://via.placeholder.com/150x150" alt="" class="img-fluid img-slider">
            <img src="https://via.placeholder.com/150x150" alt="" class="img-fluid img-slider">
            <img src="https://via.placeholder.com/150x150" alt="" class="img-fluid img-slider">
            <img src="https://via.placeholder.com/150x150" alt="" class="img-fluid img-slider">
            <img src="https://via.placeholder.com/150x150" alt="" class="img-fluid img-slider">
            <img src="https://via.placeholder.com/150x150" alt="" class="img-fluid img-slider">
          </div>
        </div> 
        <div class="slick-carousel d-none d-md-block">
          <ul class="slider-nav p-0">
            <li>
              <img src="https://via.placeholder.com/150x150" alt="" class="img-fluid img-slider">
            </li>
            
            <li>
              <img src="https://via.placeholder.com/150x150" alt="" class="img-fluid img-slider">
            </li>

            <li>
              <img src="https://via.placeholder.com/150x150" alt="" class="img-fluid img-slider">
            </li>

            <li>
              <img src="https://via.placeholder.com/150x150" alt="" class="img-fluid img-slider">
            </li>

            <li>
              <img src="https://via.placeholder.com/150x150" alt="" class="img-fluid img-slider">
            </li>

            <li>
              <img src="https://via.placeholder.com/150x150" alt="" class="img-fluid img-slider">
            </li>
          </ul>
        </div> 
      </div>
      

      <div class="col-12 col-lg-5">
        <div class="row">
          
          <div class="col-12 my-3">
            <p class="font-weight-bold h2">{{ $ad->title }}</p>
          </div>
          
          <div class="col-12 col-lg-6 my-1">
            <svg class="bi bi-check-box text-success" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 003 14.5h10a1.5 1.5 0 001.5-1.5V8a.5.5 0 00-1 0v5a.5.5 0 01-.5.5H3a.5.5 0 01-.5-.5V3a.5.5 0 01.5-.5h8a.5.5 0 000-1H3A1.5 1.5 0 001.5 3v10z" clip-rule="evenodd"/>
            </svg>
            <span class="text-success">In Stock</span>
          </div>
          
          <div class="col-12 col-lg-6 my-1">
            <p class="text-muted">Product ID: {{ $ad->id }}</p>
          </div>
          
          <div class="col-12 ">
            <p class="">{{ $ad->description }}</p>
          </div>
          
          
          <div class="col-12 justify-content-start my-3"><hr class="w-25 m-0"></div>
          
          <div class="col-12 p-0 pl-4">
            <p class="h2 font-weight-bold text-primary">€{{ $ad->price }}</p>
          </div>
          
          
          
          <div class="col-12 my-4 p-0 pl-4">
            <button class="btn btn-primary">
              <svg class="bi bi-bag" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 001 1h10a1 1 0 001-1V5zM1 4v10a2 2 0 002 2h10a2 2 0 002-2V4H1z" clip-rule="evenodd"/>
                <path d="M8 1.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
              </svg>
              Contatta il venditore
            </button>

            <span class="mx-2">
              <a href="">
                <svg class="bi bi-heart-fill text-danger" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" clip-rule="evenodd"/>
                </svg>
              </a>
            </span>
          </div>
          
          
          <div class="row rounded shadow mx-4 my-4">
            <div class="col-4 my-2 align-self-center text-center">
              <svg class="bi bi-people-circle shadow text-primary" width="35px" height="35px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z"/>
                <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd"/>
              </svg>
            </div> 
            <div class="col-8 my-2">
              <p class="font-weight-bold">Annuncio pubblicato da:</p>
              <a href="">
                <p class="h6">{{ $ad->user->name }}</p>
              </a>
            </div>
          </div>
          
          
          
          
          
        </div>
      </div>
      
      
      <hr class="w-100">
      
      
      <div class="col-12 text-center">
        <p class="h3">Ti potrebbero piacere...</p>
      </div>
      
      
      
      <div class="col-12">
        <div class="slick-carousel px-0 px-md-2 px-lg-5">
          <ul class="center p-0">
            <li class="px-1">
              <div class="card text-white">
                <img src="https://via.placeholder.com/150x150" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  
                  <p class="card-text h2 text-primary shadow-lg">€350.00</p>
                </div>
              </div>
            </li>
            
            <li class="px-1">
              <div class="card text-white">
                <img src="https://via.placeholder.com/150x150" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  
                  <p class="card-text h2 text-primary shadow-lg">€350.00</p>
                </div>
              </div>
            </li>
            <li class="px-1">
              <div class="card text-white">
                <img src="https://via.placeholder.com/150x150" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  
                  <p class="card-text h2 text-primary shadow-lg">€350.00</p>
                </div>
              </div>
            </li>
            <li class="px-1">
              <div class="card text-white">
                <img src="https://via.placeholder.com/150x150" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  
                  <p class="card-text h2 text-primary shadow-lg">€350.00</p>
                </div>
              </div>
            </li>
            <li class="px-1">
              <div class="card text-white">
                <img src="https://via.placeholder.com/150x150" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  
                  <p class="card-text h2 text-primary shadow-lg">€350.00</p>
                </div>
              </div>
            </li>
            <li class="px-1">
              <div class="card text-white">
                <img src="https://via.placeholder.com/150x150" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  
                  <p class="card-text h2 text-primary shadow-lg">€350.00</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div> 
      
      
      
      
      
    </div>
    
  </div>
@endsection