@if (session('message'))
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 alert font-weight-light alert-success">
                <h4>{{ __('ui.alertpermessi') }}</h4>
            </div>
        </div>
    </div>
@endif
<div class="col-12 col-md-10">
       

    <div class="row justify-content-center ">
                     <div class="card-body">
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <form method="POST" action="{{route('user.update', $user)}}">
                        @csrf
                        {{ method_field('patch') }}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Modifica Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}"  autocomplete="name" autofocus>

                                {{-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Modifica email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}"  autocomplete="email">

                                {{-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">cambia password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ Auth::user()->password }}">

                                {{-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>


                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                   aggiorna profilo
                                </button>
                            </div>
                        </div>

                    </form>


                    <div class="container">
                        <div class="row">
                            @if ($message = Session::get('success'))
                
                                <div class="alert alert-success alert-block">
                
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                
                                    <strong>{{ $message }}</strong>
                
                                </div>
                
                            @endif
                
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        {{-- <div class="row justify-content-center">
                
                            <hr>
                            
                        </div>

                        <hr>

                        <div class="form-group row mt-4 mb-2">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Edit Avatar') }}</label>

                            <div class="col-md-6">
                                <form action="/profile" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Immagini di dimensioni massime: 2MB</small>

                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="text-center mt-3"><button type="submit" class="btn btn-custom btn-lg px-5">{{ __('Aggiorna Avatar') }}</button></div>
                            </div>
                        </div> --}}

                        
                    </div>


                </div>
            

       
    </div>

</div> 