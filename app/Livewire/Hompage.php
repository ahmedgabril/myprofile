<?php

namespace App\Livewire;

use Livewire\Component;

class Hompage extends Component
{
    public $number = 1;


    public  function addnum(){
        $this->number++;
    }
    public function render()
    {
        return view('livewire.hompage');
    }
}
