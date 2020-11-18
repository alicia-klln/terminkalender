<x-guest-layout>
    <x-jet-authentication-card>     
        
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Du hast dein Passwort vergessen? Gib deine E-Mail ein und wir senden dir einen Link zum Zurücksetzen.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                
                <label class="" for="email" value="{{ __('E-Mail') }}">E-Mail</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="example@mail.de" required autofocus></input>
            </div>
            
            <div class="container mt-4">
                <div class="row justify-content-end">
                    <div class="col-4 align-self-center">  
                        <button class="btn btn-secondary">{{ __('Link anfordern') }}</button>
                    </div>
                    <div class="col-5 align-self-center">   
                        <a  href="{{ url('/') }}" class="btn btn-outline-secondary">
                            Zurück zur Startseite
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
