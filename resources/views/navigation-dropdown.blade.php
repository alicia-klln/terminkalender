<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('dashboard') }}" style="font-size: 1.8em;">MeineTerminübersicht</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="font-size: 1.2em;">

        @if (Route::has('login'))
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Übersicht</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('events.index') }}">Deine Termine</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('events.create') }}">Neuer Termin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.show') }}">Profil</a>
            </li>   
            @else
            <li class="nav-item"></li>    
            @endif
        @endif
        </ul>
        @if (Route::has('login'))
            @auth   
                <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-outline-light my-2 my-sm-0" style="font-size: 1.2em;"
                        href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            {{ __('Logout') }}
                    </button>
                </form>
            @else
                <a class="btn btn-outline-light my-2 my-sm-0" style="font-size: 1.2em;" href="{{ route('login') }}">Anmelden</a>
            @endif
        @endif
    </div>
</nav>
    

   
