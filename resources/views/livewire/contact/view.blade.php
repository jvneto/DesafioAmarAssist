<div class="mt-5">
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('View Contact') }}
        </h2>
    </x-slot>

    <x-jet-form-section>
        <x-slot name="title">
            {{ __('View Contact') }}
        </x-slot>

        <x-slot name="description">
            {{__('Here you can see contact information')}}
        </x-slot>

        <x-slot name="form">
            <div class="col">
                <x-jet-label for="name" value="{{ __('Name') }} *"/>
                <x-jet-input id="name" type="text" class="mt-1 block w-full bg-gray-300" autocomplete="off" :value="$contact->name" disabled/>
                <x-jet-input-error for="name" class="mt-2"/>
            </div>
            <div class="col">
                <x-jet-label for="email" value="{{ __('Email') }} *"/>
                <x-jet-input id="email" type="email" class="mt-1 block w-full bg-gray-300" autocomplete="off" :value="$contact->email" disabled/>
                <x-jet-input-error for="email" class="mt-2"/>
            </div>
            <div class="col">
                <x-jet-label for="phone" value="{{ __('Phone') }} *"/>
                <x-jet-input id="phone" type="phone" class="mt-1 block w-full bg-gray-300" autocomplete="off" :value="$contact->phone" disabled/>
                <x-jet-input-error for="phone" class="mt-2"/>
            </div>
            <div class="col col-sm-1">
                <x-jet-label for="name" value="{{__('State')}}"/>
                @if($contact->state)
                    <x-badge-text class="bg-success text-white">{{__('Activated')}}</x-badge-text>
                @else
                    <x-badge-text class="bg-danger text-white">{{__('Disabled')}}</x-badge-text>
                @endif
            </div>
        </x-slot>
    </x-jet-form-section>

    <div class="w-100 bg-white px-2 py-2 d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-start mt-5 rounded-1 shadow-lg">
        <a href="{{route('contact.edit', $contact->id) . "?callback=" . \Crypt::encryptString(route('contact.view', $contact->id))}}"
           class="btn btn-dark text-uppercase">
            Alterar
        </a>
        @if($contact->state)
            <x-jet-danger-button class="mx-2" wire:click="state" wire:loading.attr="disabled">
                Desativar
            </x-jet-danger-button>
        @else
            <x-jet-danger-button class="mx-2" wire:click="state" wire:loading.attr="disabled">
                Ativar
            </x-jet-danger-button>
        @endif
        <x-jet-danger-button wire:click="delete" wire:loading.attr="disabled">
            Deletar
        </x-jet-danger-button>
    </div>
</div>
