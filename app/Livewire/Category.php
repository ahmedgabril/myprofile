<?php

namespace App\Livewire;

use App\Models\part;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
   use WithPagination;
   public $page = 1;
   public $orderby='desc';
   // #[Url()]
   public $rownumber=2;
   #[Url(except: '',history: true)]
   public $search='';

   #[Rule('required|string')]
   public $name_ar;
   #[Rule('required|string')]
   public $name_en;

//    protected $queryString = [

//     'search' => ['except' => ''],
//     'page' => ['except' => 1],
// ];
   public function updatingSearch()
   {
       $this->resetPage();
    //    $this->rownumber=2;
   }
//    public function updatingrownumber()
//    {
//        $this->resetPage();
//    }
   public function handelcat() {
  
    $this->validate();



    part::create([
        'name' => [
           'en' => $this->name_en,
           'ar' => $this->name_ar,
        ],
     ]);
     $this->reset();
}
    public function render()
    {
     
        $cat = part::where('name->en','like',"%{$this->search}%")
        ->orWhere('name->ar','like',"%{$this->search}%")->orderBy('id',$this->orderby)
   
        ->paginate($this->rownumber);
        return view('livewire.category',[
      'categorys' => $cat,

        ]);
    }


}
