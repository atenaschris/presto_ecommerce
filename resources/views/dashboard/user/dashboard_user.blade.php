@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        @include('includes.dashboard_user_nav')
        <div class="col-12 col-md-10"><h1>{{ __('ui.dashboardutente') }}</h1></div>
    </div>
</div>
@endsection
