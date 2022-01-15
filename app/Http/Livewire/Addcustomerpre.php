<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\services;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Http\mytraits\WithSorting;
use App\Models\feedback;
use Illuminate\Support\Facades\Storage;

class Addcustomerpre extends Component
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
    public $realimage;

    public $description;
    public $img;



    public $form = [
        'name' =>'',

         'status'=> 1,

       'gabs' =>'',
       'created_at'=> '',

    ];

public function removeimage()
{
  $this->img="";
}
    public function render()
    {

        $feedback = feedback::query()

        ->where("name","LIKE", "%" . $this->searsh . "%")
        ->orderBy($this->sortByany,$this->sortDirections)

        ->paginate($this->pagenate)->withQueryString();
        return view('livewire.addcustomerpre', ['data'=> $feedback,

        "counts" => feedback::count(),





    ])->layoutData(['title' => 'اداره ارء العملاء']);


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

        'form.name' => 'required|string|unique:feedback,name|max:55',
        'form.status' => 'sometimes|nullable|alpha_num',
        'form.url' => 'sometimes|nullable|url',
        'img' => 'sometimes|nullable|image|max:1024',
        'img.*' => 'image|max:1024',
        'form.gabs' => 'sometimes|nullable|string',


    ],[

  "form.name.required" => "اسم الخدمه مطلوب",
  "form.name.unique" => "اسم الخدمه مسجل من قبل",
  "form.name.string" => "اسم المهاره حروف  فقط",

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
        'form.name' => 'required|string|unique:feedback,name|max:55',
        'form.status' => 'sometimes|nullable|alpha_num',
        'form.url' => 'sometimes|nullable|url',
        'img' => 'sometimes|nullable|image|max:1024',
        'img.*' => 'image|max:1024',
        'form.gabs' => 'sometimes|nullable|string',


    ],[

  "form.name.required" => "اسم الخدمه مطلوب",
  "form.name.unique" => "اسم الخدمه مسجل من قبل",
  "form.name.string" => "اسم المهاره حروف  فقط",

    ]);
    if($this->img){
        $this->img = $this->img->storeAs('feedback/'.$this->form['name'],$this->img->getClientOriginalName(),'public');
      }

        feedback::create([
            'name' => $this->form['name'],
            'feedback' => $this->description,
            'gabs'=> $this->form['gabs'],
            'status' => $this->form['status'],
            'img'   => $this->img,

        ]);


   $this->reset();
    $this->dispatchBrowserEvent("add",['message'=> "تمت  اضافه البيانات بنجاح 🙂"]);

}
      public function edit($bid){
      $this->showmodelf= true;
    if($this->showmodelf){
        $this->dispatchBrowserEvent("show-model");
        $this->globalids = $bid;
        $feedback = feedback::findOrFail($bid);

         $this->form["name"] = $feedback->name;
         $this->realimage =   $feedback->img;
         $this->description=  $feedback->feedback;
         $this->form['gabs']=  $feedback->gabs;
         $this->form['status']=  $feedback->status;


    }
    //

}

public function showdes($bid)
{
    $feedback = feedback::findOrFail($bid);

    $this->form["name"] = $feedback->name;
    $this->realimage =   $feedback->img;
    $this->description=  $feedback->feedback;
    $this->form['gabs']=  $feedback->gabs;
    $this->form['status']=  $feedback->status;
    $this->form['created_at']=  $feedback->created_at->format('Y-m-d');

}

public function updateone(){

    $this->validate([


        'form.name' => 'required|string|max:55|unique:feedback,name,'.$this->globalids,
        'form.status' => 'sometimes|nullable|alpha_num',
        'form.url' => 'sometimes|nullable|url',
        'img' => 'sometimes|nullable|image|max:1024',
        'img.*' => 'image|max:1024',
        'form.gabs' => 'sometimes|nullable|string',


    ],[

  "form.name.required" => "اسم الخدمه مطلوب",
  "form.name.unique" => "اسم الخدمه مسجل من قبل",
  "form.name.string" => "اسم المهاره حروف  فقط",

    ]);


  $updatefeedback = feedback::findOrFail($this->globalids);


   $updatefeedback->name = $this->form['name'];
   $updatefeedback->gabs = $this->form['gabs'];
  if($this->img){
    Storage::deleteDirectory('public/feedback/'.$this->form['name']);

    $updatefeedback->img = $this->img->storeAs('feedback/'.$this->form['name'],$this->img->getClientOriginalName(),'public');
  }else{
    $updatefeedback->img = $this->realimage;
  }

  $updatefeedback->feedback = $this->description;

  $updatefeedback->status = $this->form['status'];
  $updatefeedback->save();

  $this->reset();

  $this->dispatchBrowserEvent("add",['message'=> "تمت  تحديث البيانات بنجاح 🙂"]);

}
public function getcurantid($getcurantid,$name){
$this->idfordelete = $getcurantid;
$this->form['name'] = $name;
$this->dispatchBrowserEvent("getconfirm",['title'=> 'هل انت متأكد ??','message'=> 'لن تتمكن من استرجاع البيانات مره اخرى !']);


}
public function delete(){

    Storage::deleteDirectory('public/feedback/'.$this->form['name']);

    feedback::destroy($this->idfordelete);

    $this->dispatchBrowserEvent("getdel",['message'=> "تمت  حذف  البيانات بنجاح 🙂"]);

}

public function getval()
{
    $this->reset();
    $this->resetErrorBag();
    $this->resetValidation();

}



}//end of class
