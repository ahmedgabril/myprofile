<?php

namespace App\Http\Livewire\Front;

use App\Models\skill;
use Livewire\Component;

class Skills extends Component
{
    public function render()
    {
        $getskills = skill::get();
        return view('livewire.front.skills',['getskills'=> $getskills])
        ->layout('layouts.front',['title'=>'المهارات']);
    }
}
