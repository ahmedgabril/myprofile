<?php

namespace App\Http\Livewire\Front;

use App\Models\about;
use App\Models\skill;
use App\Models\sochail;
use Livewire\Component;




class Welecome extends Component
{


    public function render()
    {
        $getskills = skill::get();

        return view('livewire.front.welecome',[

          'data'=>about::first(),
          'sochal'=>sochail::first(),
          'getskills'=>   $getskills,
        ])->layout('layouts.front');
    }

}
