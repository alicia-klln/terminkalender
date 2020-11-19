@props(['submit'])

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>

    <div>
        <form wire:submit.prevent="{{ $submit }}">
            <div class="shadow overflow-hidden sm:rounded-md">

                {{ $form }}
                    
                @if (isset($actions))
                    <div>
                        {{ $actions }}
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>
