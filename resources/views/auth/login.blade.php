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
            <div class="form-group text-start">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2">{{ __('Eingeloggt bleiben') }}</span>
                </label>
            </div>
            <div class="container mt-4">
                <div class="row justify-content-end">
                    <div class="col-5 align-self-center">
                    @if (Route::has('password.request'))
                        <a class="text-info hover:text-dark" href="{{ route('password.request') }}">
                            {{ __('Passwort vergessen?') }}
                        </a>
                    @endif
                    </div>
                    <div class="col-2 align-self-center">
                        <button class="btn btn-secondary">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="col-4 align-self-center">
                        <a class="btn btn-outline-secondary" href="{{ route('register') }}">
                            {{ __('Neu anmelden?') }}
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
