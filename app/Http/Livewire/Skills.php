<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\mytraits\WithSorting;
use App\Models\Skill;

class Skills extends Component
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




    public $form = [
        'name' =>'',
        'rate' =>'',


    ];


    public function render()
    {
       //app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $skill = Skill::query()

        ->where("name","LIKE", "%" . $this->searsh . "%")
        //->Orwhere("status","LIKE", "%" . $this->searsh . "%")
        ->orderBy($this->sortByany,$this->sortDirections)

        ->paginate($this->pagenate)->withQueryString();
        return view('livewire.skills', ['data'=> $skill,

        "counts" => Skill::count(),





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

        'form.name' => 'required|string|unique:skills,name|max:255',
        'form.rate' => 'required|alpha_num',



    ],[

  "form.name.required" => "اسم المهاره مطلوب",
  "form.name.required" => "اسم المهاره مسجل من قبل",
  "form.name.string" => "اسم المهاره حروف  فقط",
  "form.name.max" => "الحد المسموح به 255 حرف فقط",

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

        'form.name' => 'required|string|unique:skills,name|max:255',
        'form.rate' => 'required|alpha_num',


    ],[

  "form.name.required" => "اسم المهاره مطلوب",
  "form.name.required" => "اسم المهاره مسجل من قبل",
  "form.name.string" => "اسم المهاره حروف  فقط",
  "form.name.max" => "الحد المسموح به 255 حرف فقط",

    ]);





   $setuser =  Skill::create([

   'name'=> $this->form['name'],

   'rate'=> $this->form['rate'],
    ]);




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
        $skill = Skill::findOrFail($bid);

        $this->form["name"] = $skill->name;
        $this->form["rate"] = $skill->rate;





    }
    //

}


public function updateone(){

    $this->validate([


        'form.name' => 'required|string|max:255|unique:skills,name,'.$this->globalids,
        'form.rate' => 'required|alpha_num',


    ],[

  "form.name.required" => "اسم المهاره مطلوب",
  "form.name.required" => "اسم المهاره مسجل من قبل",
  "form.name.string" => "اسم المهاره حروف  فقط",
  "form.name.max" => "الحد المسموح به 255 حرف فقط",

    ]);


  $updateskill = Skill::findOrFail($this->globalids);
  $updateskill->name = $this->form['name'];
  $updateskill->rate =  $this->form['rate'];

  $updateskill->save();


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


    Skill::destroy($this->idfordelete);
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
