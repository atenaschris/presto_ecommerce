<div class="col-2 d-none d-lg-block">
    <div class="row">
        <div class="col-12 text-dark my-2">
            <svg class="bi bi-person-lines-fill h5" width="1em" height="1em" viewBox="0 0 16 16"
                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7 1.5a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5zm-2-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm2 9a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5z"
                    clip-rule="evenodd" />
            </svg>
            <span class="font-weight-bold h5">Bentornato, {{Auth::user()->name}}</span>
            <hr>
        </div>

        <div class="col-12">
            <a href="{{ route('admin.all.ads') }}"><svg class="bi bi-tag-fill text-secondary" width="1em" height="1em" viewBox="0 0 16 16"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M2 1a1 1 0 00-1 1v4.586a1 1 0 00.293.707l7 7a1 1 0 001.414 0l4.586-4.586a1 1 0 000-1.414l-7-7A1 1 0 006.586 1H2zm4 3.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-secondary">Tutti gli annunci</span>
                <span class="badge badge-pill badge-primary">
                    {{\App\Advertise::toBeRevisionedCount()}}
                </span>
                <hr></a>
        </div>
        <div class="col-12">
            <a href="{{ route('admin.all.users') }}" class="no-shadow outline-none"><svg class="bi bi-collection-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <rect width="16" height="10" rx="1.5" transform="matrix(1 0 0 -1 0 14.5)"/>
                <path fill-rule="evenodd" d="M2 3a.5.5 0 00.5.5h11a.5.5 0 000-1h-11A.5.5 0 002 3zm2-2a.5.5 0 00.5.5h7a.5.5 0 000-1h-7A.5.5 0 004 1z" clip-rule="evenodd"/>
              </svg>
                <span class="text-secondary">Tutti gli utenti</span>
                <hr></a>
        </div>
        <div class="col-12">
            <a href="{{ route('admin.all.request') }}"><svg class="bi bi-tag-fill text-secondary" width="1em" height="1em" viewBox="0 0 16 16"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M2 1a1 1 0 00-1 1v4.586a1 1 0 00.293.707l7 7a1 1 0 001.414 0l4.586-4.586a1 1 0 000-1.414l-7-7A1 1 0 006.586 1H2zm4 3.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"
                        clip-rule="evenodd" />
                </svg><span class="text-secondary">Richieste</span>
                <span class="badge badge-pill badge-danger">
                    {{\App\User::requestCount()}}
                </span>
                <hr></a>
        </div>

    </div>
</div>