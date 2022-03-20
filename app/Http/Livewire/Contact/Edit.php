<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Edit extends Component
{
    public $contact;

    public $name;
    public $email;
    public $phone;
    public $cep;

    public $callback;
    public $confirmedEdit;

    public function mount(Contact $contact_id)
    {
        $this->contact = $contact_id;
        $this->name = $contact_id->name;
        $this->email = $contact_id->email;
        $this->phone = $contact_id->phone;
        $this->cep = $contact_id->cep;
        $this->callback = Request::get('callback');
    }

    public function confirmedUpdate()
    {
        $this->confirmedEdit = true;
    }

    public function update()
    {
        Gate::authorize('update', $this->contact);

        $this->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string'],
            'cep' => ['nullable', 'string'],
        ]);

        $this->contact->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'cep' => $this->cep,
        ]);

        $this->confirmedEdit = false;

        $this->useCallBack();
    }

    public function useCallBack() : void
    {
        try {
            $callback = Crypt::decryptString($this->callback);
            redirect()->to($callback);
        } catch (\Throwable $th) {
           $this->redirectRoute('contact.index');
        }
    }

    public function render()
    {
        return view('livewire.contact.edit');
    }
}
