<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\setting as mysetting;
use Illuminate\Support\Facades\Cookie;

class Setting extends Component
{
    public $form =[
     'compnyname'=>'',
     'email'=>'',
     'phone'=>'',
     'phone2'=>'',
     'faks'=>'',
     'manger'=>'',
     'address'=>'',

    ];
    public $darkmode;
    public $darkmodedata;
    public function render()
    {
        return view('livewire.setting')->layoutData(['title' => 'اداره الاعدات']);
    }
    public function  mount(){

        $this->info();
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
              'form.compnyname' => 'required|max:20',

       ],[

     "form.compnyname.required" => "اسم الموقع مطلوب",
     "form.compnyname.max" => "20 الحد الاقصى للحروف هو",




       ]);

    }
    public function info(){

   $getsetting = mysetting::query()->get();


    $colect['mseting'] =  $getsetting->flatMap(function($query){

    return [ $query->key =>  $query->value];

    });


    foreach ($colect['mseting'] as $key=> $value){
        if($key == "compnyname"){
        $this->form['compnyname'] = $value;
        }
       if($key == "email"){
            $this->form['email'] = $value;
        }
        if($key == "phone"){
        $this->form['phone'] = $value;
        }
        if($key == "phone2"){
        $this->form['phone2'] = $value;
        }
        if($key == "address"){
        $this->form['address'] = $value;
        }
        if($key == "manger"){
        $this->form['manger'] = $value;
      }
      if($key == "faks"){
        $this->form['faks'] = $value;
      }
      if($key == "darkmode"){
       return $this->darkmodedata=$value;
      }
    }
  }


  public function updatesetting(){

    $this->validate([
        'form.compnyname' => 'required|max:20',

 ],[

    "form.compnyname.required" => "اسم الموقع مطلوب",
    "form.compnyname.max" => "20 الحد الاقصى للحروف هو",




        ]);
    foreach ($this->form as $key=> $value){
      $getstatus =  mysetting::where('key',$key)->update(['value'=> $value]);
      if($getstatus){
      $this->dispatchBrowserEvent("update-compny-info");

      }
    }

  }


}
