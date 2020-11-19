<x-jet-form-section submit="updateProfileInformation">
    
    <x-slot name="title"></x-slot>

    <x-slot name="description"></x-slot>

    <x-slot name="form">
        <!-- Name -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h3>Deine Profilinformationen</h3>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" wire:model.defer="state.name" autocomplete="name" disabled/>
                        <input-error for="name" class="mt-2"/>
                    </div>
                    <!-- Email -->
                    <div class="">
                        <label for="email">E-Mail</label>
                        <input id="email" type="email" class="form-control" wire:model.defer="state.email" disabled/>
                        <input-error for="email" class="mt-2" />
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    
    <x-slot name="actions"></x-slot>

</x-jet-form-section>
