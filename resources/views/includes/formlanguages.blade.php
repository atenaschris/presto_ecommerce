
 <form class="dropdown-item p-0"  action="{{route('locale',$lang)}}" method="post">
    @csrf
<button type="submit" class="btn btn-round text-uppercase"> <span class="flag-icon flag-icon-{{$nation}}"> </span >{{$lang}}</button>

</form>
