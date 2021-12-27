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

    public function render()
    {
        $cat=catogery::paginate();
        $get = $this->getdata ==0 ? ModelsPortfolio::with('catogery')->orderBy('id','desc')->paginate(9):
         ModelsPortfolio::with('catogery')->orderBy('id','desc')->where('cat_id',$this->getdata)->paginate(9);

        return view('livewire.front.portfolio',['cat'=>$cat,
         'getalldata'=>$get
        ])
        ->layout('layouts.front');
    }

    public function getportf($id)
    {
        $this->getdata= $id;


    }
    public function getserdec($getid)
    {

        $this->getserdata= ModelsPortfolio::whereId($getid)->get();


    }
}
