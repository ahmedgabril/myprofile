<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\mytraits\WithSorting;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class Getuser extends Component
{
    use WithSorting;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['getval','delete'];
    protected $queryString = ['searsh'=> ['except' => '']];
    protected $queryStringWithSorting = [
        'sortByany' => ['except' => 'id'],
        'sortDirections' => ['except' => 'asc'],
        'pagenate' => ['except' => '5'],


    ];
    public $idfordelete ;
    public $pagenate = 5;
    public $dispatechupdate = "add" ;
    public $getpaginateindex;
     public $globalids;
    public $showmodelf = false;
    public $sortDirections = 'asc';
    public $sortByany = 'id';
    public $searsh;
    public $email;

    public $rolename = [],$getprem=[];

    public $form = [

        'name' => '',
        'status' => '',
        'password' => '',
    ];

    public function render()
    {
       app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $user = User::query()

        ->where("name","LIKE", "%" . $this->searsh . "%")
        ->Orwhere("email","LIKE", "%" . $this->searsh . "%")
        //->Orwhere("status","LIKE", "%" . $this->searsh . "%")
        ->orderBy($this->sortByany,$this->sortDirections)

        ->paginate($this->pagenate)->withQueryString();
        return view('livewire.getuser', ['data'=> $user,

        "counts" => User::count(),
        //"getpre" => Permission::paginate(),
        "getrole" => Role::paginate(),



    ]);


 }
 public function updatedsearsh(){
    $this->resetPage();
 }
 public function updatedpagenate(){
    $this->resetPage();
 }





 public function updated($propertyName)
 {
     $this->validateOnly($propertyName, [

        'form.name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'form.password' => 'required',
         'form.status'  => 'alpha_num'

    ],[

  "form.name.required" => "اسم المستخدم مطلوب",
  "form.name.string" => "اسم المستخدم حروف وارقام فقط",
  "form.name.max" => "الحد المسموح به 255 حرف فقط",
  "email.required" => "البريد الالكترونى مطلوب",
  "email.unique" => "البريد الالكترونى مسجل من قبل",

  "form.password.required" =>"كلمه السر مطلوبه",
  'form.status.alpha_num'  => "حاله المستخدم ارقام فقط"
    ]);




 }
 public function showmodel(){
    $this->showmodelf=false;

 if($this->showmodelf==false){


    $this->dispatchBrowserEvent("show-model");
 //$this->modeltitle = true;



 }
}
 public function add(){

    $this->validate([

        'form.name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'form.password' => 'required',
         'form.status'  => 'alpha_num'

    ],[

  "form.name.required" => "اسم المستخدم مطلوب",
  "form.name.string" => "اسم المستخدم حروف وارقام فقط",
  "form.name.max" => "الحد المسموح به 255 حرف فقط",
  "email.required" => "البريد الالكترونى مطلوب",
  "email.unique" => "البريد الالكترونى مسجل من قبل",

  "form.password.required" =>"كلمه السر مطلوبه",
  'form.status.alpha_num'  => "حاله المستخدم ارقام فقط"
    ]);



   $setuser =  User::create([
        'name' => $this->form['name'],
        'email' => $this->email,
        'password' => Hash::make($this->form['password']),
        'status'   => $this->form['status']
    ]);

        if($this->rolename !== null){
          $setuser->assignRole($this->rolename);

        }

        $this->reset();
    $this->dispatchBrowserEvent("add",['message'=> "تمت  اضافه البيانات بنجاح 🙂"]);


/*
    $getlog = new loge();
    $getlog->loges_action_id =  $addrole->id;
    $getlog->loges_action_type =  "اضافه وظيفه";
    $getlog->loges_action_by = auth()->user()->name;
    $getlog->loges_action_des = "تم اضافه وظيفه من قبل ".auth()->user()->name;
    $getlog->save();

*/
}
public function edit($bid){
    $this->showmodelf= true;
    if($this->showmodelf){
        $this->dispatchBrowserEvent("show-model");
        $this->globalids = $bid;
        $getuser = User::with("roles")->findOrFail($bid);

        $this->form["name"] = $getuser->name;

        $this->email = $getuser->email;
        $this->form["status"] = $getuser->status;

        $this->rolename = $getuser->roles->pluck('name','id');

    }
    //

}

public function showdes($bid){

    $getuser = User::with("roles")->findOrFail($bid);

    $this->form["name"] = $getuser->name;

    $this->email = $getuser->email;
    $this->form["status"] = $getuser->status;

    $this->rolename = $getuser->roles->pluck("name");

      $this->getprem =$getuser->getPermissionsViaRoles();

}
public function updateone(){

    $this->validate([
        'form.name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,'.$this->globalids,
         'form.status'  => 'alpha_num'

    ],[

  "form.name.required" => "اسم المستخدم مطلوب",
  "form.name.string" => "اسم المستخدم حروف وارقام فقط",
  "form.name.max" => "الحد المسموح به 255 حرف فقط",
  "email.required" => "البريد الالكترونى مطلوب",
  "email.unique" => "البريد الالكترونى مسجل من قبل",

  'form.status.alpha_num'  => "حاله المستخدم ارقام فقط"
    ]);

  $updateuser = User::findOrFail($this->globalids);
  $updateuser->name = $this->form['name'];
  $updateuser->email = $this->email;
  $updateuser->status = $this->form['status'];
  $updateuser->save();
  $updateuser->syncRoles($this->rolename);

  $this->dispatchBrowserEvent("add",['message'=> "تمت  تحديث البيانات بنجاح 🙂"]);
  // session()->flash("message", "تم اضافه بيانات الفرع  بنجاح ");
  $this->reset();
  /*
   $getlog = new loge();
   $getlog->loges_action_id =  $updatedata->id;
   $getlog->loges_action_type =  "تعديل بيانات  رحله";
   $getlog->loges_action_by = auth()->user();
   $getlog->loges_action_des = "تم اضافه التعديل  من قبل ".auth()->user();
   $getlog->save();
*/
}
public function getcurantid($getcurantid){
$this->idfordelete = $getcurantid;
$this->dispatchBrowserEvent("getconfirm",['title'=> 'هل انت متأكد ??','message'=> 'لن تتمكن من استرجاع البيانات مره اخرى !']);


}
public function delete(){


    User::destroy($this->idfordelete);
    $this->dispatchBrowserEvent("getdel",['message'=> "تمت  حذف  البيانات بنجاح 🙂"]);
    /*
    $getlog = new loge();
    $getlog->loges_action_id =  $this->realidfordelete;
    $getlog->loges_action_type =  "حذف  بيانات رحله";
    $getlog->loges_action_by = auth()->user();
    $getlog->loges_action_des = "تمت عمليه الحذف من قبل ".auth()->user();
    $getlog->save();
    */
}

public function getval()
{
    $this->reset();
    $this->resetErrorBag();
    $this->resetValidation();

}



}//end of class
