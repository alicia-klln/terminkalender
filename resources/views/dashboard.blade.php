

<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Deine Übersicht') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="row justify-content-center text-center mt-5">
            <div class="col-8 bg-dark text-light py-3 rounded">
                <h3>Willkommen {{ Auth::user()->name }}! </h3>
                <h5>Das ist die Übersichtsseite deines persönlichen Bereiches.</h5>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-3">
                <div class="card bg-dark text-white" style="height: 200px">
                        <div class="card-body text-center">
                            <h4 class="card-title">Terminübersicht</h4> 
                            <p class="card-text" style="height: 50px">Hier siehst du eine Übersicht aller Termine.</p>
                            <a href="{{ route('events.index') }}" class="btn btn-outline-light">Zu deinen Terminen</a>
                        </div>
                    </div>
                </div>
            <div class="col-3">
                <div class="card bg-dark text-white" style="height: 200px">
                    <div class="card-body text-center">
                    <h4 class="card-title">Neuer Termin</h4> 
                        <p class="card-text" style="height: 50px">Erstelle direkt einen neuen Termin.</p>
                        <a href="{{ route('events.create') }}" class="btn btn-outline-light">Neuen Termin erstellen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
