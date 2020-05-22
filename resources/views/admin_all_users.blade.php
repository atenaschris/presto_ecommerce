@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5 pt-5">
    <div class="row">

        @include('includes.dashboard_admin_nav')

        <div class="col-10">
            <h1>Tutti gli utenti</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">N.</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ruolo </th>
                    <th scope="col">RR</th>
                    <th scope="col">Update del ruolo</th>
                    </tr>
                </thead>
                @php
                    $counter = 1;
                @endphp
                @foreach ($all_users as $user)
                @php
                    $uri = strtolower(str_replace(' ', '-', $user->name));
                @endphp
                <tbody>
                        <tr>
                            <th scope="row">{{ $counter }}</th>                     
                            <td>{{ $user->name }} <b>(#ID: {{ $user->id }})</b></td>
                            <td>{{ $user->email}}</td>
                        @if ($user->roles ==0)
                        <td>Utente</td>
                        @elseif($user->roles==1)
                        <td>Revisore</td>
                            
                        @endif
                        <td>{{$user->revisor_request}}</td>
                        <td>
                            @if ($user->roles ==1)
                            <form action="{{ route('permission.revoked',['id'=> $user->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    Revoca
                                </button>
                            </form>  
                            @endif
                            
                        </td>
                        </tr>
                </tbody>
                @php
                    $counter += 1;
                @endphp
                @endforeach
            </table>
            <div class="col-12">
                {{$all_users->links()}}
            </div>
        </div>
       
    </div>
    
</div>    

@endsection