<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;
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
            'phone' => ['required', 'string', 'phone:BR'],
            'cep' => ['nullable', 'string'],
        ]);

        if ($this->cep) {
            $response = Http::withoutVerifying()->withOptions(["verify" => false])->get('https://viacep.com.br/ws/' . $this->cep . '/json/');
            if ($response->failed()) {
                return $this->addError('cep', 'CEP Inválido');
            }
        }

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
