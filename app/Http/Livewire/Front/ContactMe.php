<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class ContactMe extends Component
{
    public function render()
    {
        return view('livewire.front.contact-me')->layout('layouts.front');
    }
}
