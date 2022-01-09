<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\services;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Http\mytraits\WithSorting;

class Getservice extends Component
{
    use WithFileUploads;
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
    public $sortDirections = 'desc';
    public $sortByany = 'id';
    public $searsh;
    public $realimage,
    $rusaltforimage,
    $getfinalrusaltforimage=[];
    public $filename = 'services';
    public $icon;
    public $description;
    public $img = [];



    public $form = [
        'name' =>'',
        'title' =>'',
         'status'=> 1,

       'price' =>'',
       'url' =>'',
       'created_at'=> '',

    ];

public function removeimage()
{
  $this->icon="";
}
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


public function removeimages($imgid)
{
    array_splice($this->img,$imgid,1);

}


 public function updated($propertyName)
 {
     $this->validateOnly($propertyName, [

        'form.name' => 'required|string|unique:services,name|max:45|min:25',
        'form.title' => 'required|string|min:30|max:360',
        'icon' => 'sometimes|nullable|image|max:1024',
        'form.status' => 'sometimes|nullable|alpha_num',
        'form.url' => 'sometimes|nullable|url',
        'img' => 'sometimes|nullable',
        'img.*' => 'image|max:3072',
        'form.price' => 'required|string',


    ],[

  "form.name.required" => "اسم الخدمه مطلوب",
  "form.name.unique" => "اسم الخدمه مسجل من قبل",
  "form.name.string" => "اسم المهاره حروف  فقط",
  "form.title.max" => "الحد المسموح به 360 حرف فقط",

    ]);




 }
 public function showmodel(){
    $this->showmodelf=false;

 if($this->showmodelf==false){


    $this->dispatchBrowserEvent("show-model");




 }
}
 public function add(){
    $this->validate([
        'form.name' => 'required|string|unique:services,name|max:45|min:25',
        'form.title' => 'required|string|min:30|max:360',

        'icon' => 'sometimes|nullable|image|max:1024',
        'form.status' => 'sometimes|nullable|alpha_num',
        'form.url' => 'sometimes|nullable|url',
        'form.price' => 'required|string',
        'img' => 'sometimes|nullable',
        'img.*' => 'image|max:3072',

    ],[

  "form.name.required" => "اسم الخدمه مطلوب",
  "form.name.unique" => "اسم الخدمه مسجل من قبل",
  "form.name.string" => "اسم المهاره حروف  فقط",
  "form.title.max" => "الحد المسموح به 360 حرف فقط",

    ]);
    if($this->icon){
        $this->icon = $this->icon->storeAs('images/'.$this->filename,$this->icon->getClientOriginalName(),'public');
      }

    if(!empty($this->img)){
        foreach($this->img as $key=>$getimg){
        $this->getfinalrusaltforimage[$key]= $getimg->storeAs('service_image/'.$this->filename,$getimg->getClientOriginalName(),'public');

           }
        }
        services::create([
            'name' => $this->form['name'],
            'title'   => $this->form['title'],
            'dec' => nl2br($this->description),
            'url'=> $this->form['url'],
            'price'=> $this->form['price'],
            'status' => $this->form['status'],
            'icon'   => $this->icon,
             'img'   => $this->getfinalrusaltforimage

        ]);


   $this->reset();
    $this->dispatchBrowserEvent("add",['message'=> "تمت  اضافه البيانات بنجاح 🙂"]);

}
      public function edit($bid){
      $this->showmodelf= true;
    if($this->showmodelf){
        $this->dispatchBrowserEvent("show-model");
        $this->globalids = $bid;
        $services = services::findOrFail($bid);

        $this->form["name"] = $services->name;
         $this->form['title'] =$services->title;
         $this->realimage =   $services->icon;
         $this->description=  $services->dec;
         $this->rusaltforimage = $services->img;
         $this->form['url']=  $services->url;
         $this->form['price']=  $services->price;
         $this->form['status']=  $services->status;


    }
    //

}

public function showdes($bid)
{
    $services = services::findOrFail($bid);

    $this->form["name"] = $services->name;
     $this->form['title'] =$services->title;
     $this->realimage  =   $services->icon;
     $this->description=  $services->dec;
     $this->rusaltforimage =  $services->img;
     $this->form['url'] =  $services->url;
     $this->form['price']=  $services->price;
     $this->form['created_at']=  $services->created_at->format('Y-m-d');
     $this->form['status']=  $services->status;

}

public function updateone(){

    $this->validate([


        'form.name' => 'required|string|max:45|min:25|unique:services,name,'.$this->globalids,
        'form.title' => 'required|string|max:360|min:30',
        'icon' => 'sometimes|nullable|image|max:1024',
        'form.status' => 'sometimes|nullable|alpha_num',
        'form.url' => 'sometimes|nullable|url',
        'img' => 'sometimes|nullable',
        'img.*' => 'image|max:3072',
        'form.price' => 'required|string',

    ],[

  "form.name.required" => "اسم الخدمه مطلوب",
  "form.name.unique" => "اسم الخدمه مسجل من قبل",
  "form.name.string" => "اسم المهاره حروف  فقط",
  "form.title.max" => "الحد المسموح به 360 حرف فقط",

    ]);



  $updateservices = services::findOrFail($this->globalids);


  $updateservices->name = $this->form['name'];
  $updateservices->title = $this->form['title'];
  if($this->icon){
    $updateservices->icon = $this->icon->storeAs('images/'.$this->filename,$this->icon->getClientOriginalName(),'public');
  }else{
    $updateservices->icon = $this->realimage;
  }
  if(!empty($this->img)){
    foreach($this->img as $key=>$getimg){
    $this->getfinalrusaltforimage[$key]= $getimg->storeAs('images/'.$this->filename,$getimg->getClientOriginalName(),'public');

       }
    }else{
        $this->getfinalrusaltforimage = $this->rusaltforimage;
    }
  $updateservices->dec = nl2br($this->description);
  $updateservices->img = $this->getfinalrusaltforimage;
  $updateservices->url = $this->form['url'];
  $updateservices->price = $this->form['price'];
  $updateservices->status = $this->form['status'];
  $updateservices->save();

  $this->reset();

  $this->dispatchBrowserEvent("add",['message'=> "تمت  تحديث البيانات بنجاح 🙂"]);

}
public function getcurantid($getcurantid){
$this->idfordelete = $getcurantid;
$this->dispatchBrowserEvent("getconfirm",['title'=> 'هل انت متأكد ??','message'=> 'لن تتمكن من استرجاع البيانات مره اخرى !']);


}
public function delete(){


    services::destroy($this->idfordelete);
    $this->dispatchBrowserEvent("getdel",['message'=> "تمت  حذف  البيانات بنجاح 🙂"]);

}

public function getval()
{
    $this->reset();
    $this->resetErrorBag();
    $this->resetValidation();

}



}//end of class
