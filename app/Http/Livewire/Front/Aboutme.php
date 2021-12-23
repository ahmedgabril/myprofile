<?php

namespace App\Http\Livewire\Front;

use App\Models\about;
use Livewire\Component;

class Aboutme extends Component
{
    public function render()
    {
        $data = about::first();
        return view('livewire.front.aboutme',['data'=> $data])
        ->layout('layouts.front');
    }
}
