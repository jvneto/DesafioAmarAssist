<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;
    public $phone;
    public $cep;

    public function create()
    {
        Gate::authorize('create', Contact::class);

        $this->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:contacts'],
            'phone' => ['required', 'string'],
            'cep' => ['nullable', 'string'],
        ]);

        Contact::create([
            'user_id' => auth()->user()->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'cep' => $this->cep,
        ]);

        $this->redirectRoute('contact.index');
    }

    public function render()
    {
        return view('livewire.contact.create');
    }
}
