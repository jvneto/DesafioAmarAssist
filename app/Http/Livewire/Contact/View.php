<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class View extends Component
{
    public $contact;

    public $confirmingState;
    public $confirmingDelete;

    public function mount(Contact $contact_id)
    {
        Gate::authorize('view', $contact_id);
        $this->contact = $contact_id;
    }

    public function state()
    {
        Gate::authorize('state', $this->contact);

        $this->contact->update([
            'state'=> !$this->contact->state
        ]);

        $this->confirmingState = false;
    }

    public function delete()
    {
        Gate::authorize('delete', $this->contact);

        $this->contact->delete();

        $this->redirectRoute('contact.index');
    }

    public function render()
    {
        return view('livewire.contact.view');
    }
}
