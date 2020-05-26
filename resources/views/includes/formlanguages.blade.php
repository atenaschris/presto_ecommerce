<form class="dropdown-item" action="{{route('locale',$lang)}}" method="post">
    @csrf

<button type="submit" class="text-uppercase"> <span class="flag-icon flag-icon-{{$nation}}"> </span >{{$lang}}</button>

</form>