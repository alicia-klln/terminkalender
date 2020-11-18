<x-guest-layout>
    <x-jet-authentication-card>
    
        <x-jet-validation-errors class="mb-4" />
        
        @if (session('status'))
            <div class="">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group text-start">
                <label class="" for="email" value="{{ __('E-Mail') }}">E-Mail</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="example@mail.de" required autofocus></input>
            </div>

            <div class="form-group text-start">
                <label for="password" value="{{ __('Password') }}">Passwort</label>
                <input id="password" class="form-control" type="password" name="password" placeholder="passwort" required autocomplete="current-password" />
            </div>

            <div class="form-group text-center">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Eingeloggt bleiben') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Passwort vergessen?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
