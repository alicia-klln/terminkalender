<x-guest-layout>
    <x-jet-authentication-card>
        <!-- <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot> -->
        <div class="flex items-center justify-center mt-4">    
            <a href="{{ url('/') }}" class="text-md text-blue-700 underline">MeineTerminübersicht</a>
        </div>
        
        
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
                <x-jet-label for="email" value="{{ __('E-Mail') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            
            <div class="flex items-center justify-start mt-4">    
                <button><a href="{{ url('/') }}" class="text-sm text-gray-700 ">Zurück zur Startseite</a></button>
            </div>
            <div class="flex items-center justify-end mt-4">    
                <x-jet-button>
                    {{ __('Link anfordern') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
