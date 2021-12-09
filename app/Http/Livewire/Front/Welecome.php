<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class Welecome extends Component
{
    public function render()
    {
        return view('livewire.front.welecome')->layout('layouts.front');
    }
}
