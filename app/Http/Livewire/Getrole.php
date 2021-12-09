<?php

namespace App\Http\Livewire;

use App\Http\mytraits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class Getrole extends Component
{
    use WithPagination;
    use WithSorting;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['getval','delete'];
    protected $queryString = ['searsh'=> ['except' => '']];
    protected $queryStringWithSorting = [
        'sortByany' => ['except' => 'id'],
        'sortDirections' => ['except' => 'asc'],
        'pagenate' => ['except' => ''],


    ];
    public $idfordelete ;
    public $dispatechupdate = "add" ;
    public $getpaginateindex;
     public $globalids;
    public $showmodelf = false;
    public $sortDirections = 'asc';
    public $sortByany = 'id';

    public $pagenate = 10;
    public $searsh;

    public $name,$prename = [];

    public function render()
    {
       app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $role = Role::query()

        ->where("name","LIKE", "%" . $this->searsh . "%")

        ->orderBy($this->sortByany,$this->sortDirections)
        ->latest()
        ->paginate($this->pagenate);
        return view('livewire.getrole', ['data'=> $role ,

        "counts" => Role::count(),
        "getpre" => Permission::paginate(),


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
           'name' => 'required|unique:roles',

    ],[

  "name.required" => "اسم الوظيفه مطلوب",
  "name.unique" => "اسم الوظيفه مسجل من قبل",




    ]);

 }
 public function showmodel(){


 if($this->showmodelf==false){


    $this->dispatchBrowserEvent("show-model");
 //$this->modeltitle = true;
 $this->reset();


 }
}
 public function add(){

    $this->validate([
        'name' => 'required|unique:roles',

    ],[

  "name.required" => "اسم الوظيفه مطلوب",
  "name.unique" => "اسم الوظيفه مسجل من قبل",




    ]);


    if($this->prename==null){
        $addrole = new Role();
        $addrole->name = $this->name;
        $addrole->save();
       //$this->handelprem = $addrole->latest();
    }
         $addrole = new Role();
        $addrole->name = $this->name;
        $addrole->save();
        $addrole->givePermissionTo($this->prename);

       $this->reset();

    $this->dispatchBrowserEvent("add",['message'=> "تمت  اضافه البيانات بنجاح 🙂"]);
    //$this->dispatchBrowserEvent("resid");

   // session()->flash("message", "تم اضافه بيانات الفرع  بنجاح ");
/*
    $getlog = new loge();
    $getlog->loges_action_id =  $addrole->id;
    $getlog->loges_action_type =  "اضافه وظيفه";
    $getlog->loges_action_by = auth()->user()->name;
    $getlog->loges_action_des = "تم اضافه وظيفه من قبل ".auth()->user()->name;
    $getlog->save();

*/
return  redirect()->back();
}

public function edit($bid){
    $this->showmodelf= true;
    if($this->showmodelf){
        $this->dispatchBrowserEvent("show-model");
        $this->globalids = $bid;
        $getrole = Role::findOrFail($bid);
        $this->name = $getrole->name;
        $this->prename = $getrole->permissions->pluck('name','id');

    }
    //

}

public function showdes($bid){


    $getrole = Role::findOrFail($bid);
    $this->name = $getrole->name;
    $this->prename = $getrole->permissions->pluck('name','id');

}
public function updateone(){

    $this->validate([
        'name' => 'required|unique:roles,name,'.$this->globalids,

    ],[

  "name.required" => "اسم الوظيفه مطلوب",
  "name.unique" => "اسم الوظيفه مسجل من قبل",




    ]);



  $updaterole = Role::findOrFail($this->globalids);
  $updaterole->name = $this->name;
  $updaterole->save();
  $updaterole->syncPermissions($this->prename);

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


    Role::destroy($this->idfordelete);
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
    $this->resetval();
    $this->resetErrorBag();
    $this->resetValidation();

}
public function resetval(){

    $this->name = "";



}


}//end of class
