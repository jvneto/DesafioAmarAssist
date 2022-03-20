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
                <x-jet-input id="name" type="text" class="mt-1 block w-full" autocomplete="off" :value="$contact->name"
                             disabled/>
            </div>
            <div class="col">
                <x-jet-label for="email" value="{{ __('Email') }} *"/>
                <x-jet-input id="email" type="email" class="mt-1 block w-full" autocomplete="off"
                             :value="$contact->email" disabled/>
            </div>
            <div class="col">
                <x-jet-label for="phone" value="{{ __('Phone') }} *"/>
                <x-jet-input id="phone" type="phone" class="mt-1 block w-full" autocomplete="off"
                             :value="$contact->phone" disabled/>
            </div>
            @if($cep)
                <div class="col">
                    <x-jet-label for="cep" value="{{ __('CEP') }}"/>
                    <x-jet-input id="cep" type="text" class="mt-1 block w-full" autocomplete="off"
                                 :value="$cep['cep']"
                                 disabled/>
                </div>
                <div class="col">
                    <x-jet-label for="logradouro" value="Logradouro"/>
                    <x-jet-input id="logradouro" type="text" class="mt-1 block w-full" autocomplete="off"
                                 :value="$cep['logradouro']"
                                 disabled/>
                </div>
                <div class="col">
                    <x-jet-label for="complemento" value="Complemento"/>
                    <x-jet-input id="complemento" type="text" class="mt-1 block w-full" autocomplete="off"
                                 :value="$cep['complemento']"
                                 disabled/>
                </div>
                <div class="col">
                    <x-jet-label for="bairro" value="Bairro"/>
                    <x-jet-input id="bairro" type="text" class="mt-1 block w-full" autocomplete="off"
                                 :value="$cep['bairro']"
                                 disabled/>
                </div>
                <div class="col">
                    <x-jet-label for="localidade" value="Localidade"/>
                    <x-jet-input id="localidade" type="text" class="mt-1 block w-full" autocomplete="off"
                                 :value="$cep['localidade']"
                                 disabled/>
                </div>
                <div class="col">
                    <x-jet-label for="uf" value="Estado"/>
                    <x-jet-input id="uf" type="text" class="mt-1 block w-full" autocomplete="off"
                                 :value="$cep['uf']"
                                 disabled/>
                </div>
            @endif
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
