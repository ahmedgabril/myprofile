<?php

namespace App\Http\Livewire\Front;

use App\Models\about;
use Livewire\Component;




class Welecome extends Component
{


    public function render()
    {


        return view('livewire.front.welecome',[

          'data'=>about::first(),

        ])->layout('layouts.front');
    }

}
