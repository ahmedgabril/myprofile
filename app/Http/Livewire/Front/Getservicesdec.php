<?php

namespace App\Http\Livewire\Front;

use App\Models\services;
use Livewire\Component;

class Getservicesdec extends Component
{

    public function render()
    {
        return view('livewire.front.getservicesdec')->layout('layouts.front');
    }
}
