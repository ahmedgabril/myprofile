<?php

namespace App\Http\Livewire\Front;

use App\Http\Livewire\Myprofile;
use App\Models\catogery;
use App\Models\portfolio as ModelsPortfolio;
use Livewire\Component;
use Livewire\WithPagination;

class Portfolio extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $getdata;
    public $getserdata;
    public $isactive;
    public $paginate=9;
    public $page=1;
    protected $queryString = [

        'page' => ['except' => 1],
        'paginate' => ['except' => 2],
    ];
    public function render()
    {
        $cat=catogery::paginate();
        $get = $this->getdata ==0 ? ModelsPortfolio::with('catogery')->orderBy('id','desc')->paginate($this->paginate):
         ModelsPortfolio::with('catogery')->orderBy('id','desc')->where('cat_id',$this->getdata)->paginate($this->paginate);

        return view('livewire.front.portfolio',['cat'=>$cat,
         'getalldata'=>$get
        ])
        ->layout('layouts.front');
    }

    public function getportf($id)
    {
        $this->getdata= $id;


    }
    public function getall()
    {

        $this->getdata = 0;

    }
    public function getserdec($getid)
    {

        $this->getserdata= ModelsPortfolio::whereId($getid)->get();


    }
    public function updatedpaginate(){
        $this->resetPage();
     }

}
