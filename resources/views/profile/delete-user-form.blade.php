<x-jet-action-section>
    
    <x-slot name="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 py-4">
                <h3>Account löschen</h3>
                <div class="">
                    {{ __('Wenn du deinen Account löschst sind alle deine Daten gelöscht.') }}
                </div>    
                <div class="mt-5">
                    <x-jet-danger-button class="btn btn-dark" wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                        {{ __('Jetzt Account löschen') }}
                    </x-jet-danger-button>
                </div>
                
                </div>
            </div>
        </div>

        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Account löschen') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Bist du sicher, dass du deinen Account löschen möchtest?') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4" placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Tschüss!') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Account löschen') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
