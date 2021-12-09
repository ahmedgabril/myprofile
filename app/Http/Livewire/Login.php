<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $data = [

        'email' => '',
        'password' => '',
        'remember_token' => ''

    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'data.email' => 'required|email',
            'data.password' => 'required',
        ],[


            'data.email.required' => 'البريد الالكترونى مطلوب',
            'data.email.email' =>'ادخل بريد الكترونى صحيح',
            'data.password.required' =>'كلمه المرور مطلوبه',


        ]);
    }
    public function render()
    {
        return view('livewire.login')->layout('layouts.custom');

    }
    public  function login()
    {
        $this->validate([
            'data.email' => 'required|email',
            'data.password' => 'required',
        ],[


            'data.email.required' => 'البريد الالكترونى مطلوب',
            'data.email.email' =>'ادخل بريد الكترونى صحيح',
            'data.password.required' =>'كلمه المرور مطلوبه',


        ]);
      Auth::attempt();
     /* if (Auth::attempt(['email' => $this->data['email'], 'password' => $this->data['password'],'status'=>0])) {
        $this->dispatchBrowserEvent("statuserror",['status' =>'تم ايقاف حسابك من قبل الاداره']);

    }*/


    if (Auth::attempt(['email' => $this->data['email'], 'password' => $this->data['password'],'status'=>1], $this->data['remember_token'])) {
        $log = auth()->user()->name;
        session()->regenerate();

        return redirect()->route('backend')->with("message",$log);

    }else{
        $this->emit("errorhand");

    }






  }
}
