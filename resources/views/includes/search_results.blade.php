<form class="form-inline mt-2" action="{{ route('search') }}" method="GET">
    
    <div class="form-group  bg-white rounded px-2">
        
      <input type="text" name="q"  class="form-control-plaintext"  placeholder="Cerca...">
    </div>
    <button type="submit" class="btn background-main-color"><svg class="bi bi-search text-white" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
      </svg></button>
  </form>