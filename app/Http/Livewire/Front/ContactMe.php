<?php

namespace App\Http\Livewire\Front;


use Livewire\Component;
use App\Mail\contactmeemail;
use App\Models\setting ;
use Illuminate\Support\Facades\Mail;

class ContactMe extends Component
{
    public $email,$name,$message;

    public function render()
    {
        $getsetting = setting::query()->get();


       $colect['mseting'] =  $getsetting->flatMap(function($query){

        return [ $query->key =>  $query->value];

        });
        //$setting = setting::
        return view('livewire.front.contact-me',['data'=>$colect])->layout('layouts.front');
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [

           'name' => 'required|string|max:50',
           'email' => 'required|email',
           'message' => 'required|string|max:1000',


       ],[

     "name.required" => "اسم المستخدم مطلوب",
     "name.string" => "اسم المستخدم حروف وارقام فقط",
     "name.max" => "الحد المسموح به 50 حرف فقط",
     "email.required" => "البريد الالكترونى مطلوب",
     "email.unique" => "البريد الالكترونى مسجل من قبل",
       ]);


    }
    public function senddata()
    {
        $this->validate([

            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',


        ],[

      "name.required" => "اسم المستخدم مطلوب",
      "name.string" => "اسم المستخدم حروف وارقام فقط",
      "name.max" => "الحد المسموح به 50 حرف فقط",
      "email.required" => "البريد الالكترونى مطلوب",
      "email.unique" => "البريد الالكترونى مسجل من قبل",
        ]);
        if( $this->isonline()){
            Mail::to('ahmedfathygabril@gmail.com')->send(new contactmeemail($this->email,$this->message,$this->name));
            $this->reset();
            $this->dispatchBrowserEvent('done',['message'=>'تم ارسال الرساله بنجاح شكرا لك']);

        }else{
            $this->dispatchBrowserEvent('error',['message'=>'عفوا لايوجد اتصال بالانترنت لديك']);


        }


    }
public function isonline($site = "https://www.youtube.com/"){
if(@fopen($site,'r')){
    return true;

}else{
    return false;

}

}

}
