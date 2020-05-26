

<div class="col-2 d-none d-md-block">
    <div class="sticky-to-nav">
        <div class="nav flex-column nav-pills"  aria-orientation="vertical">
            
            <a class="nav-link nav-dashboard {{ Request::is('user-dashboard') ? ' active' : "" }}" href="{{ route('user.home') }}" role="tab">
                <span><svg class="bi bi-house" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 00.5.5h9a.5.5 0 00.5-.5V7h1v6.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5zm11-11V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z" clip-rule="evenodd"/>
                </svg>
                  
                  <h6 class="d-inline text-align-center">Home</h6></span> 
            </a>

            <a class="nav-link nav-dashboard {{ Request::is('*user-dashboard/ads') ? ' active' : "" }}" href="{{ route('user.all.ads') }}" role="tab">
                <svg class="bi bi-bag" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 001 1h10a1 1 0 001-1V5zM1 4v10a2 2 0 002 2h10a2 2 0 002-2V4H1z" clip-rule="evenodd"/>
                    <path d="M8 1.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                  </svg>
                  <h6 class="d-inline text-align-center">Annunci Pubblicati</h6>
            </a>

               
            
            
        </div>
    </div>
</div>