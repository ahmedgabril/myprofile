<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\services;
use App\Models\portfolio;

class Backend extends Component
{
    public function render()
    {
        $procount = portfolio::count();
        $serv = services::count();
        $user = User::count();

        return view('livewire.backend',[
            'port'=>$procount,
            'serv'=>$serv,
            'user'=>$user,

        ]);
    }
}
