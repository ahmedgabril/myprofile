<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\services;
use Livewire\WithPagination;

class Getservicesdec extends Component
{
    use WithPagination;
    public $getserdata;
    public function render()
    {
        $getserives = services::where('status',1)->paginate(12);

        return view('livewire.front.getservicesdec',['getserives'=>$getserives])->layout('layouts.front');
    }
    public function getserdec($getid)
    {

        $this->getserdata= services::whereId($getid)->get();


    }
}
