<?php

namespace App\Http\Livewire\Front;


use App\Models\about;
use App\Models\skill;
use Livewire\Component;
use App\Models\services;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Welecome extends Component
{
use WithPagination;
public $getserdata;
    public function render()
    {
        $data = about::first();
        $getskills = skill::get();
        $getserives = services::where('status',1)->paginate(12);
        return view('livewire.front.welecome',[
           'data'=> $data,
           'getskills'=> $getskills,
           'getserives'=> $getserives,

        ])->layout('layouts.front');
    }
    public function getserdec($getid)
    {

        $this->getserdata= services::whereId($getid)->get();


    }
}
