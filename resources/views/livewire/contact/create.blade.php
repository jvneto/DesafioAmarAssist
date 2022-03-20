<div>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Create Contact') }}
        </h2>
    </x-slot>

    <x-jet-form-section submit="create">
        <x-slot name="title">
            {{ __('Create Contact') }}
        </x-slot>

        <x-slot name="description">
            {{ __('This is the only way to add a contact to your address book.') }}
        </x-slot>

        <x-slot name="form">
            <div class="col">
                <x-jet-label for="name" value="{{ __('Name') }} *"/>
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name"/>
                <x-jet-input-error for="name" class="mt-2"/>
            </div>
            <div class="col">
                <x-jet-label for="email" value="{{ __('Email') }} *"/>
                <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="email"/>
                <x-jet-input-error for="email" class="mt-2"/>
            </div>
            <div class="col">
                <x-jet-label for="phone" value="{{ __('Phone') }} *"/>
                <x-jet-input id="phone" type="phone" class="mt-1 block w-full" wire:model.defer="phone"/>
                <x-jet-input-error for="phone" class="mt-2"/>
            </div>
            <div class="col">
                <x-jet-label for="cep" value="{{ __('CEP') }}"/>
                <x-jet-input id="cep" type="text" class="mt-1 block w-full" wire:model.defer="cep"/>
                <x-jet-input-error for="cep" class="mt-2"/>
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="created">
                {{ __('Created') }}
            </x-jet-action-message>

            <x-jet-button wire:loading.attr="disabled">
                {{ __('Create') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>
</div>
