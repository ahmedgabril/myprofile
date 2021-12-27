<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\catogery;
use App\Models\portfolio;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Http\mytraits\WithSorting;

class Myprofile extends Component
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
        'pagenate' => ['except' => ''],


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
    public $rusaltforimage;
    public $getfinalrusaltforimage=[];
    public $icon;
    public $gettempimg;
    public $realimage;
    public $images =[];
    public $form = [

        'name' => '',
        'title' => '',
        'clint_name' => '',
        'date' => null,
       'dec' => '',

       'project_url' => '',
       'video_url' => '',
       'cat_id' => '',



    ];

    public function render()
    {

        $portfolio = portfolio::query()

        ->where("name","LIKE", "%" . $this->searsh . "%")
        ->orderBy($this->sortByany,$this->sortDirections)

        ->paginate($this->pagenate)->withQueryString();
        return view('livewire.myprofile', ['data'=> $portfolio,

        "counts" => portfolio::count(),
        "catogry" => catogery::paginate(),




    ]);


 }
 public function updatedsearsh(){
    $this->resetPage();
 }
 public function updatedpagenate(){
    $this->resetPage();

 }

public function removeimage()
{
   $this->icon = "";
}



 public function updated($propertyName)
 {
     $this->validateOnly($propertyName, [


        'form.name' => 'required|string|max:255|unique:portfolios,name',
        'form.title' => 'required|string|max:350',
        'form.project_url' => 'sometimes|url',
        'form.video_url' => 'sometimes|url',
        'form.clint_name' => 'sometimes|nullable|string',
        'form.dec' => 'sometimes|nullable',
        'form.cat_id' => 'required|alpha_num',
        'images' =>     'required|array',
        'images.*' =>       'image|max:2048',
        'icon' =>       'required|image|max:2048',

    ],[
        "form.name.unique" => "اسم المشروع مسجل من قبل",
        'form.cat_id.alpha_num'  => "هذا الحقل ارقام فقط",

    ]);



 }
 public function showmodel(){


 if($this->showmodelf==false){


    $this->dispatchBrowserEvent("show-model");
     $this->reset();
  }
}
public function removeimages($ides)
{

   array_splice($this->images,$ides,1);
}

 public function add(){

    $this->validate([

        'form.name' => 'required|string|max:255|unique:portfolios,name',
        'form.title' => 'required|string|max:350',
        'form.project_url' => 'sometimes|url',
        'form.video_url' => 'sometimes|url',
        'form.clint_name' => 'sometimes|nullable|string',
        'form.dec' => 'sometimes|nullable',
        'form.cat_id' => 'required|alpha_num',
        'images' =>     'required|array',
        'images.*' =>       'image|max:2048',
        'icon' =>       'required|image|max:2048',

    ],[
        "form.name.unique" => "اسم المشروع مسجل من قبل",
        'form.cat_id.alpha_num'  => "هذا الحقل ارقام فقط",

    ]);
    if($this->icon){
    $this->gettempimg = $this->icon->storeAs('images/'.$this->form['name'],$this->icon->getClientOriginalName(),'public');
      }

    if(!empty($this->images)){
        foreach($this->images as $key=>$img){
            $this->getfinalrusaltforimage[$key]= $img->storeAs('images/'.$this->form['name'],$img->getClientOriginalName(),'public');

           }

        portfolio::create([
        'name' => $this->form['name'],
        'title'   => $this->form['title'],
        'clint_name' => $this->form['clint_name'],
        'date'=> $this->form['date'],
        'dec' => nl2br($this->form['dec']),
        'project_url'=> $this->form['project_url'],
        'video_url'=> $this->form['video_url'],
        'cat_id' => $this->form['cat_id'],
         'icon'   => $this->gettempimg,
         'img'   => $this->getfinalrusaltforimage

    ]);

    $this->getfinalrusaltforimage = "";

      $this->dispatchBrowserEvent("add",['message'=> "تمت  اضافه البيانات بنجاح 🙂"]);
    }




}
///edit data//
public function edit($bid){

    $this->showmodelf= true;

    if($this->showmodelf){
        $this->dispatchBrowserEvent("show-model");
        $this->globalids = $bid;
     $getportfolio = portfolio::findOrFail( $this->globalids);

   $this->form['name']        = $getportfolio->name;
   $this->form['title']        = $getportfolio->title;
   $this->form['clint_name']   = $getportfolio->clint_name;
   $this->form['date']          = $getportfolio->date ;
   $this->form['dec']          =  $getportfolio->dec;
   $this->form['project_url']  = $getportfolio->project_url;
   $this->form['video_url']    = $getportfolio->video_url ;
   $this->form['cat_id']       = $getportfolio->cat_id;
   $this->realimage           = $getportfolio->icon;
   $this->rusaltforimage       = $getportfolio->img;

    }
    //

}
///show all data in the model//

public function showdes($bid){

    $getportfolio = portfolio::with('catogery')->whereId($bid)->first();

    $this->form['name']         = $getportfolio->name;
    $this->form['title']        = $getportfolio->title;
    $this->form['clint_name']   = $getportfolio->clint_name;
    $this->form['date']         = $getportfolio->date ;
    $this->form['dec']          =  $getportfolio->dec;
    $this->form['project_url']  = $getportfolio->project_url;
    $this->form['video_url']    = $getportfolio->video_url ;
    $this->form['cat_id']       = $getportfolio->catogery->name;
    $this->realimage            = $getportfolio->icon;
    $this->rusaltforimage       = $getportfolio->img;

}
///update data//

public function updateone(){

    $this->validate([


        'form.name' => 'required|string|max:255|unique:portfolios,name,'.$this->globalids,
        'form.title' => 'required|string|max:350',
        'form.project_url' => 'sometimes|url',
        'form.video_url' => 'sometimes|url',
        'form.clint_name' => 'sometimes|nullable|string',
        'form.dec' => 'sometimes|nullable',
        'form.cat_id' => 'required|alpha_num',
        'images' =>     'sometimes|nullable',
        'images.*' =>       'image|max:2048',
        'icon' =>       'required|image|max:2048',

    ],[
        "form.name.unique" => "اسم المشروع مسجل من قبل",
        'form.cat_id.alpha_num'  => "هذا الحقل ارقام فقط",

    ]);

       if(!empty($this->images)){
        foreach($this->images as $key=>$img){
        $this->getfinalrusaltforimage[$key]= $img->storeAs('images/'.$this->form['name'],$img->getClientOriginalName(),'public');

           }
        }else{
            $this->getfinalrusaltforimage = $this->rusaltforimage;
           }

    $updateportfolio = portfolio::findOrFail($this->globalids);
    if($this->icon){
        $updateportfolio->icon = $this->icon->storeAs('images/'.$this->form['name'],$this->icon->getClientOriginalName(),'public');
      }else{
        $updateportfolio->icon = $this->realimage;
      }
    $updateportfolio->name = $this->form['name'];
    $updateportfolio->title = $this->form['title'];
    $updateportfolio->clint_name = $this->form['clint_name'];
    $updateportfolio->date = $this->form['date'];
    $updateportfolio->dec =nl2br($this->form['dec']);
    $updateportfolio->project_url = $this->form['project_url'];
    $updateportfolio->video_url = $this->form['video_url'];
    $updateportfolio->cat_id = $this->form['cat_id'];
    $updateportfolio->img =    $this->getfinalrusaltforimage;
    $updateportfolio->save();
    $this->reset();
  $this->dispatchBrowserEvent("add",['message'=> "تمت  تحديث البيانات بنجاح 🙂"]);

}
public function getcurantid($getcurantid){
$this->idfordelete = $getcurantid;
$this->dispatchBrowserEvent("getconfirm",['title'=> 'هل انت متأكد ??','message'=> 'لن تتمكن من استرجاع البيانات مره اخرى !']);


}
public function delete(){


    portfolio::destroy($this->idfordelete);
    $this->dispatchBrowserEvent("getdel",['message'=> "تمت  حذف  البيانات بنجاح 🙂"]);

}

public function getval()
{
    $this->reset();
    $this->resetErrorBag();
    $this->resetValidation();

}



}//end of class
