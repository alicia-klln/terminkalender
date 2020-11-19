<x-jet-form-section submit="updatePassword">

    <x-slot name="title"></x-slot>
    <x-slot name="description"></x-slot>

    <x-slot name="form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 py-4">
                    <h3>Passwort ändern</h3>
                    <div class="form-group">
                        <label for="current_password" value="{{ __('Aktuelles Passwort') }}">Aktuelles Passwort</label>
                        <input id="current_password" type="password" class="form-control" wire:model.defer="state.current_password" autocomplete="current-password" />
                        <x-jet-input-error for="current_password" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <label for="password" value="{{ __('Neues Passwort') }}">Neues Passwort</label>
                        <input id="password" type="password" class="form-control" wire:model.defer="state.password" autocomplete="new-password" />
                        <x-jet-input-error for="password" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" value="{{ __('Passwort bestätigen') }}">Passwort bestätigen</label>
                        <input id="password_confirmation" type="password" class="form-control" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
                        <x-jet-input-error for="password_confirmation" class="mt-2" />
                    </div>
                    <button class="btn btn-dark">
                        {{ __('Speichern') }}
                    </button>
                </div>
            </div>
        </div>
    </x-slot>

</x-jet-form-section>
