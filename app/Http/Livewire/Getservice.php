<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\mytraits\WithSorting;
use App\Models\services;

class Getservice extends Component
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
        'title' =>'',
        'icon' =>'',
        'dec' =>'',
       'img' =>'',
       'price' =>'',
       'url' =>'',
       'created_at'=> '',

    ];


    public function render()
    {

        $services = services::query()

        ->where("name","LIKE", "%" . $this->searsh . "%")
        ->orderBy($this->sortByany,$this->sortDirections)

        ->paginate($this->pagenate)->withQueryString();
        return view('livewire.getservice', ['data'=> $services,

        "counts" => services::count(),





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

        'form.name' => 'required|string|unique:services,name|max:255',
        'form.title' => 'required|string',



    ],[

  "form.name.required" => "اسم الخدمه مطلوب",
  "form.name.unique" => "اسم الخدمه مسجل من قبل",
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

        'form.name' => 'required|string|unique:services,name|max:255',
        'form.title' => 'required|string',



    ],[

  "form.name.required" => "اسم الخدمه مطلوب",
  "form.name.unique" => "اسم الخدمه مسجل من قبل",
  "form.name.string" => "اسم المهاره حروف  فقط",
  "form.name.max" => "الحد المسموح به 255 حرف فقط",

    ]);





   $setuser =  services::create([

   'name'=> $this->form['name'],
   'title'=> $this->form['title'],
   'icon'=> $this->form['icon'],
   'dec'=> $this->form['dec'],
   'img'=> $this->form['img'],
   'url'=> $this->form['url'],
   'price'=> $this->form['price'],



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
        $services = services::findOrFail($bid);

        $this->form["name"] = $services->name;
         $this->form['title'] =$services->title;
         $this->form['icon']= $services->icon;
         $this->form['dec']=  $services->dec;
         $this->form['img']=  $services->img;
         $this->form['url']=  $services->url;
         $this->form['price']=  $services->price;






    }
    //

}

public function showdes($bid)
{
    $services = services::findOrFail($bid);

    $this->form["name"] = $services->name;
     $this->form['title'] =$services->title;
     $this->form['icon']= $services->icon;
     $this->form['dec']=  $services->dec;
     $this->form['img']=  $services->img;
     $this->form['url']=  $services->url;
     $this->form['price']=  $services->price;
     $this->form['created_at']=  $services->created_at->format('Y-m-d');


}

public function updateone(){

    $this->validate([


        'form.name' => 'required|string|unique:services,name,'.$this->globalids,
        'form.title' => 'required|string',



    ],[

  "form.name.required" => "اسم الخدمه مطلوب",
  "form.name.unique" => "اسم الخدمه مسجل من قبل",
  "form.name.string" => "اسم المهاره حروف  فقط",
  "form.name.max" => "الحد المسموح به 255 حرف فقط",

    ]);



  $updateservices = services::findOrFail($this->globalids);


  $updateservices->name = $this->form['name'];
  $updateservices->title = $this->form['title'];
  $updateservices->icon = $this->form['icon'];
  $updateservices->dec = $this->form['dec'];
  $updateservices->img = $this->form['img'];
  $updateservices->url = $this->form['url'];
  $updateservices->price = $this->form['price'];
  $updateservices->save();


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


    services::destroy($this->idfordelete);
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
