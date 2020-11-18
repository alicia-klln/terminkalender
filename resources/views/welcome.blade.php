<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="container-fluid" style="margin-top: 100px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="row justify-content-center text-center mt-3">
                    <div class="col-6  pt-2">
                        <h1>MeinTerminplaner</h1>
                    </div>
                </div>
                <div class="row justify-content-center text-center my-3">
                    <div class="col-4">
                      
                        <p>Mithilfe dieser Anwendung kannst du problemlos deine Termine organisieren und im Überblick behalten.</p>
                        
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-3 border bg-dark border-dark rounded m-1 p-3 text-white">
                        <p class="pt-3" style="height: 100px">
                            <strong>Du hast bereits ein Profil?</strong> </br>
                            Dann melde dich gleich an.
                        </p>
                        <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg mb-2">Anmelden</a>
                    </div>
                    <div class="col-3 border bg-dark border-dark rounded m-1 p-3 text-white">
                        <p class="pt-3" style="height: 100px">
                            <strong>Du bist neu und willst dich registrieren?</strong> </br>
                            Erstelle dir einfach und kostenlos ein Profil.
                        </p>
                        <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg mb-2">Registrieren</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</x-app-layout>
