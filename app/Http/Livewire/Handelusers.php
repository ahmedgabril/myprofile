<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Handelusers extends Component
{
    use WithFileUploads;
    public $name ,$email,$image,$password;
    public $realimage;


    public function render()
    {
        $this->getimage();

        return view('livewire.handelusers')->layoutData(['title' => 'اداره الحساب الشخصى']);
    }
public function mount()
{
 $this->getdata();
}


public function updated($propertyName)
{
    $this->validateOnly($propertyName, [

       'name' => 'required|string|max:255',
       'email' => 'required|email|unique:users',
       'password' => 'required|string',
       'image' => 'sometimes|nullable|image|max:1024',


   ],[

 "name.required" => "اسم المستخدم مطلوب",
 "name.string" => "اسم المستخدم حروف وارقام فقط",
 "name.max" => "الحد المسموح به 255 حرف فقط",
 "required" => "البريد الالكترونى مطلوب",
 "email.unique" => "البريد الالكترونى مسجل من قبل",

 "password.required" =>"كلمه السر مطلوبه",
   ]);




}
public function removeuserimage(){

    $this->image="";
}

protected function getimage(){
    $getuser = User::where('email',auth()->user()->email)->where('password',auth()->user()->password)->first();
if($getuser){
    $this->realimage= $getuser->image;

 }
}

protected function getdata(){
    $getuser = User::where('email',auth()->user()->email)->where('password',auth()->user()->password)->first();

    $this->name= $getuser->name;
    $this->email= $getuser->email;

}


 public function userinfo()
    {
        $this->validate([


        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,'.auth()->user()->id,



    ],[

  "name.required" => "اسم المستخدم مطلوب",
  "name.string" => "اسم المستخدم حروف وارقام فقط",
  "name.max" => "الحد المسموح به 255 حرف فقط",
  "required" => "البريد الالكترونى مطلوب",
  "email.unique" => "البريد الالكترونى مسجل من قبل",


    ]);

      $updateuserinfo = User::findOrFail(auth()->user()->id);
      $updateuserinfo->name = $this->name;
      $updateuserinfo->email = $this->email;
      $updateuserinfo->save();
      $this->dispatchBrowserEvent('upadetuser',['message'=>'تم تحديث البيانات بنجاح']);
    }


public function changepassword(){

    $this->validate([


        'password' => 'required|string',


    ],[


  "password.required" =>"كلمه السر مطلوبه",
    ]);


    $updateuserpassword = User::findOrFail(auth()->user()->id);
    $updateuserpassword->password = Hash::make($this->password);

    $updateuserpassword->save();
     $this->password = "";
    $this->dispatchBrowserEvent('upadetuser',['message'=>'تم تحديث كلمه السر  بنجاح']);
}


    public function userimage()
    {
        $this->validate([
            'image' => 'sometimes|nullable|image|max:1024',

        ]);
        if($this->image){
            $upimage =User::findOrFail(auth()->user()->id);
        Storage::deleteDirectory('public/image_user_profile');
            $upimage->image  = $this->image->store("image_user_profile",'public');



            $upimage->save();

            $this->dispatchBrowserEvent('upadetimage',['message'=>'تم تحميل الصوره الشخصيه بنجاح ','img'=> 'storage/'.$upimage->image ]);
            $this->image="";
        }

    }
}
