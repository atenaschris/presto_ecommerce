<div class="main-input mt-2 ml-0">
    <span class="icon-search">
      <svg class="baseline bi bi-search text-dark" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
      </svg>
    </span>
    <span class="w-80">
      <form  action="{{ route('search') }}" method="GET">
        <input type="text" name="q"  class="form-control-plaintext no-shadow no-focus"  placeholder="Cerca..."">
        <input type="submit" style="position: absolute; left: -9999px"/>
      </form>
    </span>
</div>