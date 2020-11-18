<x-guest-layout>
    <x-jet-authentication-card>
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group text-start">
                <label for="name" value="{{ __('Name') }}">Name</label>
                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"/>
            </div>

            <div class="form-group text-start">
                <label for="email" value="{{ __('Email') }}">E-Mail</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="form-group text-start">
                <label for="password" value="{{ __('Password') }}">Passwort</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="form-group text-start">
                <label for="password_confirmation" value="{{ __('Confirm Password') }}">Passwort bestätigen</label>
                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="container mt-4">
                <div class="row justify-content-end">
                    <div class="col-5 align-self-center">
                        <a class="text-info hover:text-dark" href="{{ route('password.request') }}">
                            {{ __('Bereits registriert?') }}
                        </a>
                    </div>
                    <div class="col-4 align-self-center">
                        <button class="btn btn-secondary">
                            {{ __('Registrieren') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
