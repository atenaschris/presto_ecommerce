@extends('layouts.app')

@section('content')

@if (session('revisor.request.submit'))

<div class="container-fluid">
    <div class="row">
        <div class="col-12 alert font-weight-light alert-success">
            <h4>La tua richiesta è stata sottomessa con successo.</h4>
        </div>
    </div>
</div>

@endif

@if (session('access.denied.revisor.only'))

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Errore.</h2>
        </div>
    </div>
</div>

@endif
{{-- HEADER --}}
<header>
    <div class="overlay"></div>
    <div class="container">
            <div class="row align-items-sm-bottom align-items-center">
                <div class="col-12 col-md-6">
                    <div class="text-white">
                        <h1 class="main-title">Presto.it</h1>
                    <p class="lead mb-0 mt-4">{{__('ui.welcome')}}</p>
                    </div>
                    @include('includes.search_results')
                </div>
                <div class="col-12 col-md-6">
                    <div class="homepage-above-img">
                        <svg id="a80234ba-f3f6-42a2-9225-8d803f7486aa" data-name="Layer 1"
                        xmlns="http://www.w3.org/2000/svg" width="877" height="639.47418" viewBox="0 0 877 639.47418">
                        <rect x="0.27529" y="0.3655" width="644.72471" height="412.91039" fill="#e6e6e6" />
                        <rect x="18.71104" y="52.15476" width="607.8532" height="336.69331" fill="#fff" />
                        <rect width="644.72471" height="27.39027" fill="#6c63ff" />
                        <circle cx="20.35424" cy="14.00335" r="5.07657" fill="#fff" />
                        <circle cx="39.62365" cy="14.00335" r="5.07657" fill="#fff" />
                        <circle cx="58.89306" cy="14.00335" r="5.07657" fill="#fff" />
                        <rect x="93.50058" y="79.84765" width="118.8871" height="128.98179" fill="#e6e6e6" />
                        <rect x="263.19271" y="79.84765" width="118.8871" height="128.98179" fill="#e6e6e6" />
                        <rect x="432.88484" y="79.84765" width="118.8871" height="128.98179" fill="#e6e6e6" />
                        <rect x="93.50058" y="232.17593" width="118.8871" height="128.98179" fill="#e6e6e6" />
                        <rect x="263.19271" y="232.17593" width="118.8871" height="128.98179" fill="#e6e6e6" />
                        <rect x="432.88484" y="232.17593" width="118.8871" height="128.98179" fill="#e6e6e6" />
                        <path
                        d="M453.42766,395.588l21.722-8.58776,2.52581,42.93879s4.54646,13.13422,3.031,18.18584c0,0,1.01032,8.58776-1.51549,9.09292s-9.59808,1.51549-10.10324,1.01033-.50516-2.02065-.50516-2.02065-5.05163,3.53613-5.55679,7.57743c0,0-21.21681,6.56711-21.722.50516s10.60841-11.11357,10.60841-11.11357l8.58776-13.13421Z"
                        transform="translate(-161.5 -130.26291)" fill="#fff" />
                        <path
                        d="M499.39742,395.588l21.722-8.58776,2.52581,42.93879s4.54646,13.13422,3.031,18.18584c0,0,1.01033,8.58776-1.51548,9.09292s-9.59809,1.51549-10.10325,1.01033-.50516-2.02065-.50516-2.02065-5.05162,3.53613-5.55678,7.57743c0,0-21.21682,6.56711-21.722.50516s10.60841-11.11357,10.60841-11.11357l8.58775-13.13421Z"
                        transform="translate(-161.5 -130.26291)" fill="#fff" />
                        <path
                        d="M501.5224,229.77274s-4.62548,12.9237.73367,18.75187l-4.46755,15.35251s15.87391,47.62171,11.33851,54.27363c0,0-16.93217,8.46608-50.79649-3.0236l13.75738-53.36655-1.96534-22.52583,2.72124-10.5826,6.0472-.60472s-3.62832,13.6062,3.0236,15.72272S495.056,228.38708,495.056,228.38708Z"
                        transform="translate(-161.5 -130.26291)" fill="#3f3d56" />
                        <path
                        d="M287.92147,313.204l5.83682,2.38779,27.85752-36.61275,8.75522,42.98018,5.83681-1.06124c3.74423-37.05461,6.79736-74.85,3.05106-92.72575l-21.62274-.92858-9.81646,31.30655L303.04413,279.775Z"
                        transform="translate(-161.5 -130.26291)" fill="#fff" />
                        <path
                        d="M642.178,227.87525s-7.9658,11.0744-7.57722,15.543,5.44005,77.32652,5.44005,77.32652l11.85155.58287L648.39522,268.87l2.91431-14.183,7.18865,66.05782,14.57158.38858-13.01728-85.68089-2.52574-7.57722Z"
                        transform="translate(-161.5 -130.26291)" fill="#fff" />
                        <path
                        d="M687.20008,406.28065c-2.11507-2.53807-5.75069-3.91031-9.24242-4.65192.10483-.31739-10.6183-2.53217-10.79762-2.07574l-4.04135-3.21913-12.415,6.44716-6.97721-4.74954-3.241,1.1502c.132-.5715-10.06112,1.19353-10.06112,1.19353-1.94708.07-4.43415.19186-7.21795.406-9.74907.74991-10.499,25.99744-10.499,25.99744a39.85194,39.85194,0,0,1,14.11324-2.95483l2.635,30.20213c13.55282-1.16245,27.76681.1903,42.49579,3.49968L678.86,433.78536l16.08936-6.25682S692.19956,412.28007,687.20008,406.28065Z"
                        transform="translate(-161.5 -130.26291)" fill="#3f3d56" />
                        <path
                        d="M341.94111,391.90135c-1.74273-2.09127-4.73835-3.22194-7.6154-3.833.08638-.26152-8.74907-2.08641-8.89682-1.71033l-3.32991-2.65244-10.2295,5.31222-5.749-3.91344-2.67043.94772c.1088-.47089-8.29.98342-8.29.98342-1.60431.05766-3.65356.15809-5.9473.33452-8.03286.61789-8.65075,21.42088-8.65075,21.42088a32.83641,32.83641,0,0,1,11.62876-2.43466L294.362,467.2703c11.167-.95782,22.87877.15679,35.01487,2.88359l5.6923-55.58972,13.257-5.15538S346.06049,396.84464,341.94111,391.90135Z"
                        transform="translate(-161.5 -130.26291)" fill="#fff" />
                        <polygon
                        points="613 612.618 532.578 629.079 530.745 628.892 460.071 621.759 460.071 532.196 546.587 517.569 609.346 524.888 609.369 525.285 609.369 525.472 613 612.618"
                        fill="#e6e6e6" />
                        <polygon
                        points="613 612.618 532.578 629.079 530.745 628.892 530.745 537.076 609.369 525.285 613 612.618"
                        opacity="0.1" style="isolation:isolate" />
                        <polygon
                        points="609.369 525.472 609.346 525.495 530.745 537.076 460.071 532.196 546.587 517.569 609.346 524.888 609.369 525.285 609.369 525.472"
                        opacity="0.05" style="isolation:isolate" />
                        <rect x="630.5" y="695.28749" width="49" height="23"
                        transform="translate(-114.0789 -171.42023) rotate(3.73411)" fill="#fff" />
                        <rect x="642" y="702.78749" width="26" height="8"
                        transform="translate(-114.0789 -171.42023) rotate(3.73411)" fill="#6c63ff" />
                        <polygon
                        points="722 612.618 641.578 629.079 639.745 628.892 569.071 621.759 569.071 532.196 655.587 517.569 718.346 524.888 718.369 525.285 718.369 525.472 722 612.618"
                        fill="#6c63ff" />
                        <polygon
                        points="722 612.618 641.578 629.079 639.745 628.892 639.745 537.076 718.369 525.285 722 612.618"
                        opacity="0.1" style="isolation:isolate" />
                        <polygon
                        points="718.369 525.472 718.346 525.495 639.745 537.076 569.071 532.196 655.587 517.569 718.346 524.888 718.369 525.285 718.369 525.472"
                        opacity="0.05" style="isolation:isolate" />
                        <rect x="739.5" y="695.28749" width="49" height="23"
                        transform="translate(-113.84749 -178.51901) rotate(3.73411)" fill="#fff" />
                        <rect x="751" y="702.78749" width="26" height="8"
                        transform="translate(-113.84749 -178.51901) rotate(3.73411)" fill="#6c63ff" />
                        <path
                        d="M941.69482,295.88394s14.18951,36.6564-11.82471,36.6564,40.20379,36.65637,66.218,15.372,10.64215-22.4668,10.64215-22.4668-34.29145,3.5474-33.109-27.19665Z"
                        transform="translate(-161.5 -130.26291)" fill="#ffb8b8" />
                        <circle cx="798.67939" cy="134.83508" r="41.81955" fill="#2f2e41" />
                        <path
                        d="M934.6,448.42178,889.66637,564.30319S867.19958,599.77713,875.4768,635.251,906.5,735.28749,906.5,735.28749s17.1825,4.37207,16-11,.73694-89.89814-17-110l71.66869-81.91076,2.36493,93.41462s-4.72986,42.56872-3.54736,61.48809,3.54736,50.846,3.54736,50.846l14.18958-2.36493s19.14173-87.09388,16.7768-115.473c0,0,43.93359-137.89106-1-171Z"
                        transform="translate(-161.5 -130.26291)" fill="#2f2e41" />
                        <path
                        d="M911.43955,735.095s-5.7854-1.4731-6.452,3.83317-12.83544,28.90331-.13076,30.08469,17.10021-10.7049,19.228-19.06161,2.93429-8.83586,4.711-10.437,6.00581-10.37283.69954-11.03945-8.02663-5.8852-8.02663-5.8852S919.79625,737.22278,911.43955,735.095Z"
                        transform="translate(-161.5 -130.26291)" fill="#2f2e41" />
                        <path
                        d="M988.79666,730.99147s-10.7297-1.53281-9.96327,2.2992-1.53281,19.92658,0,21.45939,4.59844,4.59844,4.59844,6.89764.76643,9.96327,13.79532,7.66407,9.96327-13.79532,9.19688-15.32814-9.96327-9.19688-9.19688-13.79532S993.3951,727.92585,988.79666,730.99147Z"
                        transform="translate(-161.5 -130.26291)" fill="#2f2e41" />
                        <circle cx="799.19549" cy="152.27606" r="28.96604" fill="#ffb8b8" />
                        <path
                        d="M988.40215,322.48938s10.10308,19.98893-20.34962,20.55564c-9.36164.17421-20.49533-6.64831-25.09128-14.806-2.70765-4.806-3.39177,1.83161-7.76991,1.34515-8.29153-.92128-17.14963,2.51837-25.07583,6.73336a5.00119,5.00119,0,0,0-2.44226,5.86587C913.68417,362.12731,930.85009,458.064,933.5,463.28749c6.76691,13.33883,80-9,80-9,1.00366-36.2938-12.17-87.07108,11-124A44.13455,44.13455,0,0,0,988.40215,322.48938Z"
                        transform="translate(-161.5 -130.26291)" fill="#575a89" />
                        <polygon
                        points="826.283 130.002 805.06 118.886 775.753 123.433 769.69 150.214 784.784 149.633 789 139.794 789 149.471 795.965 149.203 800.007 133.539 802.534 150.214 827.292 149.708 826.283 130.002"
                        fill="#2f2e41" />
                        <circle cx="800.8804" cy="87.14612" r="16.87455" fill="#2f2e41" />
                        <path
                        d="M941.10377,212.2733a16.87857,16.87857,0,0,1,14.30671-16.68039,16.87457,16.87457,0,1,0,0,33.36078A16.87857,16.87857,0,0,1,941.10377,212.2733Z"
                        transform="translate(-161.5 -130.26291)" fill="#2f2e41" />
                        <polygon
                        points="877 483.618 796.578 500.079 794.745 499.892 724.071 492.759 724.071 403.196 810.587 388.569 873.346 395.888 873.369 396.285 873.369 396.472 877 483.618"
                        fill="#e6e6e6" />
                        <polygon
                        points="877 483.618 796.578 500.079 794.745 499.892 794.745 408.076 873.369 396.285 877 483.618"
                        opacity="0.1" style="isolation:isolate" />
                        <polygon
                        points="873.369 396.472 873.346 396.495 794.745 408.076 724.071 403.196 810.587 388.569 873.346 395.888 873.369 396.285 873.369 396.472"
                        opacity="0.05" style="isolation:isolate" />
                        <rect x="894.5" y="566.28749" width="49" height="23"
                        transform="translate(-121.91974 -188.88747) rotate(3.73411)" fill="#fff" />
                        <rect x="906" y="573.78749" width="26" height="8"
                        transform="translate(-121.91974 -188.88747) rotate(3.73411)" fill="#6c63ff" />
                        <path
                        d="M913.22088,510.45724s-29.56159,23.64929-16.55451,31.92651,28.37915-31.92651,28.37915-31.92651Z"
                        transform="translate(-161.5 -130.26291)" fill="#ffb8b8" />
                        <path
                        d="M914.5,335.28749c-1.53125-1.72574-20.86725,8.13565-18,21l1.34893,89.13426s-7.09479,73.31271,10.64215,73.31271,15.64393,2.46532,18.00892-3.447,3-56,3-56Z"
                        transform="translate(-161.5 -130.26291)" fill="#575a89" />
                        <path
                        d="M1005.95448,502.45724s15.37207,40.20374,28.37915,31.92651-16.55451-31.92651-16.55451-31.92651Z"
                        transform="translate(-161.5 -130.26291)" fill="#ffb8b8" />
                        <path
                        d="M1009.5,452.28749s-7.365,49.0877-5,55,.272,3.447,18.00892,3.447,10.64215-73.31271,10.64215-73.31271L1034.5,348.28749c2.86725-12.86435-16.46875-22.72574-18-21l-17,58Z"
                        transform="translate(-161.5 -130.26291)" fill="#575a89" />
                        </svg>
                    </div>
                </div>
        </div>
    </div>
</header>

{{-- FINE HEADER --}}


<div class="container">
    <div class="slider mt-n5">
        @foreach ($categories as $category)
        
        <div class="col-md-12">
            <a href="{{route('category.ads',['id'=>$category->id,'name'=>$category->name])}}" class="itm seguro custom-link text-white"
                data-tilt>
                <div class="caption">
                    <p class="m-0">{{ ucfirst($category->name) }}</p>
                </div>
            </a>
        </div>
        @endforeach
        
    </div>
</div>

{{-- START CARD --}}
<div class="container mb-5">
    <div class="row mt-4 ">
        <div class="col-12 col-md-6 col-lg-5">
            <h3 class="h5 text-blue"><i class="far fa-star"></i> Ecco gli ultimi annunci</h3>
            <hr class="mb-4">
        </div>
    </div>
    
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 ">
        @foreach ($ads as $ad)
        <div class="col mb-4 card-home">
            @php
            $title = str_replace(' ', '-', $ad->title);
            @endphp
            <a class="custom-link" href="{{route('ad.details',['id'=>$ad->id,'title'=>$title])}}">
                <div class="card h-100 featured-card">
                    
                    @if ($ad->img)
                    <img src="{{ Storage::url($ad->img) }}" class="card-img-top featured-card-img "
                    alt="{{ $ad->title }}">
                    @else
                    <img src="https://via.placeholder.com/200x300" class="card-img-top featured-card-img card-img-home"
                    alt="{{ $ad->title }}">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $ad->title }}</h5>
                        <p class="card-text">{{substr($ad->description, 0, 30)}}...</p>
                        <p class="card-price mt-auto h6 font-weight-bold text-primary">{{ $ad->price }}€</p>
                    </div>
                    
                </div>
            </a>
        </div>
        @endforeach
    </div>
    
    {{-- <div class="card" style="width: 18rem;">
        <div class="card-img-overlay">
            <a href="#" class="badge badge-primary">Auto e Moto</a>
        </div>
        <img src="https://via.placeholder.com/200x300" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div> --}}
    
</div>
{{-- END_CARD --}}

<a href="{{ route('add.ads') }}" target="_blank" rel="noopener noreferrer"><button id="start-sell"
    class="da-btn-secondary btn-mobile btn-success">Inizia a vendere</button></a>

        @push('homepage-scripts')
       <script>
           
        let bottonevendita = document.querySelector("#start-sell");
        document.addEventListener("scroll", () => {
            if (window.scrollY > 250) {
                bottonevendita.classList.add("d-none");
            } else {
                bottonevendita.classList.remove("d-none");
            }
        });
        
        $('#categoryModal').on('shown.bs.modal', function () {
            $('#categoryDropdown').trigger('focus')
        })
       
       </script> 
    
        @endpush
        
        @endsection
        