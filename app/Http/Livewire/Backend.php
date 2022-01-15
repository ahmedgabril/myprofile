<?php

namespace App\Http\Livewire;

use App\Models\catogery;
use App\Models\feedback;
use Carbon\Carbon;
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
        $getservicedata = services::whereDate('created_at',Carbon::yesterday()->toDateString())->get();
        $getcatogery = catogery::whereDate('created_at',Carbon::yesterday()->toDateString())->get();
        $getportfilo = portfolio::whereDate('created_at',Carbon::yesterday()->toDateString())->get();
        $getuser = User::whereDate('created_at',Carbon::yesterday()->toDateString())->get();
        $getfeedback = feedback::whereDate('created_at',Carbon::yesterday()->toDateString())->get();

        return view('livewire.backend',[
            'port'=>$procount,
            'serv'=>$serv,
            'user'=>$user,
            "getservices"=> $getservicedata,
            "getcatogery"=> $getcatogery,
            "getportfilo"=> $getportfilo,
            "getuser"=> $getuser,
            "getfeedback"=> $getfeedback,

        ])->layoutData(['title' => 'اداره التطبيق']);
    }
}
