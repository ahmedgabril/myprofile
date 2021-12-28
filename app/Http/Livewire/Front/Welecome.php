<?php

namespace App\Http\Livewire\Front;

use App\Models\about;
use App\Models\sochail;
use Livewire\Component;




class Welecome extends Component
{


    public function render()
    {


        return view('livewire.front.welecome',[

          'data'=>about::first(),
          'sochal'=>sochail::first(),

        ])->layout('layouts.front');
    }

}
