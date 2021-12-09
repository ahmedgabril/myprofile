<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Getdarkmode extends Component
{

    public $darkmodestatus;




    public function render()
    {
        return view('livewire.getdarkmode');
    }
    public function activedarkmode(){
       $sel= User::where('name',auth()->user()->name)->select("id","darkmode")->first();

      if($sel->darkmode ==1){
        $this->darkmodestatus = false;

      }else{
        $this->darkmodestatus = true;


      }
     if($this->darkmodestatus) {
      return  User::where('name',auth()->user()->name)->update(['darkmode'=>$this->darkmodestatus]);


    }else{

      return  User::where('name',auth()->user()->name)->update(['darkmode'=>0]);

    }
  }
}
