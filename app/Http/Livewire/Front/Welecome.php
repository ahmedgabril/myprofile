<?php

namespace App\Http\Livewire\Front;

use App\Models\about;
use App\Models\feedback;
use App\Models\portfolio;
use App\Models\services;
use App\Models\skill;
use App\Models\sochail;
use Livewire\Component;




class Welecome extends Component
{


    public function render()
    {
        $getskills = skill::get();
        $feedback = feedback::where('status',1)->get();

        return view('livewire.front.welecome',[

          'data'=>about::first(),
          'sochal'=>sochail::first(),
          'getskills'=>   $getskills,
          'pro'=> portfolio::count(),
          'hores'=> portfolio::count() * 10,
          'serv'=> services::count(),
          'feedback'=>  $feedback,

        ]) ->layout('layouts.front',['title'=>'My Profile']);
    }

}
