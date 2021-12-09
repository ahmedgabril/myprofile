<?php

namespace App\Http\Livewire;

use App\Models\about;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

use function PHPSTORM_META\type;

class Getstting extends Component
{
    use WithFileUploads;
public $form=[
'name'=>'',
'title'=>'',
'status'=>'',

'dec'=>'',

];
public $imageid=1;
public $tapid=0;
public $img;
public $url;
public $realimage;

public function mount(){
    $this->getdata();

}
    public function render()
    {

        return view('livewire.getstting');
    }




            public function updated($propertyName)
            {
                $this->validateOnly($propertyName, [
                    'form.name' => 'required|max:30',
                    'img' => 'image|max:1024',

                    'url' => 'file|mimes:docx,pdf|max:5120',
                ],[

                'form.name' => 'اسم المستخدم مطلوب',
                'img.max' => 'حجم الصوره المسموح به 1ميجا',
                'img.image' => 'غير مسموح برفع هذا النوع من الملفات',
                'url.mimes' => 'الملفات المسموح فقط pdf,doxc',
                'url.max' => 'الحد الاقصى للمفات المسموح فقط 5 ميجا',
                'url.file' => 'تاكد من انك رفعت ملف حقيقى',





                ]);

            }


            public function getdata(){



             $about = about::first();
              $this->form['name']   =    $about->name;
              $this->form['status'] =   $about->status;
              $this->form['title']  =   $about->title;
              $this->form['dec']  =     $about->dec;
              $this->realimage    =    $about->img;
              $this->url  =            $about->url;



            }
        public function uploadimg()
        {

            $this->tabid = 1;
            $this->validate([
                'img' => 'image|max:1024', // 1MB Max
            ],[

                'img.max' => 'حجم الصوره المسموح به 1ميجا',
                'img.image' => 'غير مسموح برفع هذا النوع من الملفات',

            ]);

            if($this->img){
            $getimg = about::select('id','img')->first();
            $url = $this->img->store("images",'public');

            $getimg->img =  $url;

            $getimg->save();
            $this->dispatchBrowserEvent('updateimg');

            }

        }
        public function uploadurl()
        {
            $this->tabid = 2;


            $this->validate([
                'url' => 'file|mimes:docx,pdf|max:5120',
            ],[

                'url.mimes' => 'الملفات المسموح فقط pdf,doxc',
                'url.max' => 'الحد الاقصى للمفات المسموح فقط 5 ميجا',
                'url.file' => 'تاكد من انك رفعت ملف حقيقى',
            ]);

            if($this->url){
            $geturl = about::select('id','url')->first();
            $url = $this->url->store("files",'public');

            $geturl->url =  $url;

            $geturl->save();
            $this->dispatchBrowserEvent('updateurl');


        }
    }
            public function updateabout(){

                  $this->validate([
                'form.name' => 'required|max:30',

            ],[

            'form.name' => 'اسم المستخدم مطلوب',





            ]);


                $about = about::first();
                $about->name  = $this->form['name']   ;
                $about->status =$this->form['status']  ;
                $about->title= $this->form['title'];
                $about->dec =  $this->form['dec'] ;

                 $about->save();
                 $this->dispatchBrowserEvent('aboutupdated');



            }


}
