<?php

namespace App\Livewire;

use Livewire\Component;

class CreateFeeCategoryForm extends Component
{
    public function mount()
    {
        $this->setErrorBag(session()->get('errors', new \Illuminate\Support\MessageBag())->getMessages());
    }

    public function render()
    {
        return view('livewire.create-fee-category-form');
    }
}
