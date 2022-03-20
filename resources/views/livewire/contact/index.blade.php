<div>
    <x-slot name="header">
        <div class="d-flex flex-row align-items-center justify-content-between">
            <h2 class="font-semibold text-xl text-zul-800 leading-tight">
                {{__('Contacts Directory')}}
            </h2>
            <a href="{{ route('contact.create') }}"
               class="btn btn-dark text-uppercase">
                {{__('Create Contact')}}
            </a>
        </div>
    </x-slot>

    <div class="mt-5">
        @if($contacts->isEmpty())
            <x-alert type="danger" has-icon class="rounded-md">
                {{__('Co Contact Found!')}}
            </x-alert>
        @else
            <x-table>
                <x-slot name="thead">
                    <x-table-header>{{__('Name')}}</x-table-header>
                    <x-table-header>{{__('Email')}}</x-table-header>
                    <x-table-header>{{__('Phone')}}</x-table-header>
                    <x-table-header/>
                </x-slot>
                <x-slot name="tbody">
                    @foreach($contacts as $contact)
                        @livewire('contact.index-row', ['contact' => $contact], key($contact->id))
                    @endforeach
                </x-slot>
            </x-table>
        @endif
    </div>
</div>
