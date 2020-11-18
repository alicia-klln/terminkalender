
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold  text-gray-800 leading-tight">
            {{ __('Deine Übersicht') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row justify-content-center mt-3">
                    <div class="col-6 bg-light py-3">
                        <h3>Hey {{ Auth::user()->name }}, </h3>
                        <h3><strong>Das ist dein persönlicher Bereich!</strong></h3>
                        Hier findest du eine Liste deiner Termine.
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-3">
                        <div class="card" style="height: 200px">
                            <h4 class="card-header">Terminübersicht</h4> 
                            <div class="card-body text-center">
                                <h5 class="card-text" style="height: 50px">Hier siehst du eine Übersicht aller Termine.</h5>
                                <a href="{{ route('events.index') }}" class="btn btn-secondary btn-lg">Zu deinen Terminen</a>
                            </div>
                            </div>
                        </div>
                    <div class="col-3">
                        <div class="card" style="height: 200px">
                        <h4 class="card-header">Neuer Termin</h4>    
                        <div class="card-body text-center">
                            <h5 class="card-text" style="height: 50px">Erstelle direkt einen neuen Termin.</h5>
                            <a href="{{ route('events.create') }}" class="btn btn-secondary btn-lg">Neuen Termin erstellen</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
