<?php

namespace App\Http\Livewire\Front;

use App\Models\about;
use App\Models\skill;
use Livewire\Component;

class Aboutme extends Component
{
    public function render()
    {
        $data = about::first();
        $getskills = skill::get();
        return view('livewire.front.aboutme',['data'=> $data,
        'getskills'=>$getskills,
        ])
        ->layout('layouts.front');
    }
}
