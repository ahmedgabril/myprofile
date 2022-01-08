<?php

namespace App\Http\Livewire;

use App\Models\about;
use App\Models\sochail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;



class Getstting extends Component
{
    use WithFileUploads;
public $form=[
'name'=>'',
'title'=>'',
'status'=>'',


];
public $formsochail=[
    'facebook'=>'',
    'instgram'=>'',
    'linkedin'=>'',
    'youtube'=>'',
    'twitter'=>'',
    'gmail'=>'',
    'setstatus'=>'',
];

public $imageid=1;

public $img;
public $url;
public $realimage;
public $logo;
public $getlogo;
public $description;

public  function mount()
{

    $this->getdata();
}

    public function render()
    {

       $this->getrealimage();
        return view('livewire.getstting');
    }


    public function removelogo()
    {
    $this->logo = "";
    }

public function uploadelogo()
{
    $this->validate([
        'logo' => 'sometimes|image|max:1024', // 1MB Max
    ],[

        'logo.max' => 'حجم الصوره المسموح به 1ميجا',

    ]);

    if($this->logo){
        $getlogo = about::select('id','logo')->first();
        $getlogo->logo  = $this->logo->store("images",'public');



        $getlogo->save();
        $this->logo="";
        $this->dispatchBrowserEvent('update',['message'=>'تم تحميل لوجو الموقع الرئيسى بنجاح ']);

    }

}
    public function getrealimage()
    {
        $about = about::select('id','img','logo')->first();
        $this->realimage    =  $about->img;
        $this->getlogo    =  $about->logo;

    }

            public function updated($propertyName)
            {
                $this->validateOnly($propertyName, [
                    'form.name' => 'required|max:30',
                    'img' => 'sometimes|image|max:1024',
                    'logo' => 'sometimes|image|max:1024',


                    'url' => 'file|mimes:docx,pdf|max:5120',
                   'formsochail.facebook' => 'sometimes|nullable|url',
                    'formsochail.instgram' => 'sometimes|nullable|url',
                    'formsochail.linkedin' => 'sometimes|nullable|url',
                    'formsochail.youtube' => 'sometimes|nullable|url',
                    'formsochail.twitter' => 'sometimes|nullable|url',
                    'formsochail.gmail' => 'sometimes|email',
                ],[

                'form.name' => 'اسم المستخدم مطلوب',
                'img.max' => 'حجم الصوره المسموح به 1ميجا',
                'img.image' => 'غير مسموح برفع هذا النوع من الملفات',
                'url.mimes' => 'الملفات المسموح فقط pdf,doxc',
                'url.max' => 'الحد الاقصى للمفات المسموح فقط 5 ميجا',
                'url.file' => 'تاكد من انك رفعت ملف حقيقى',





                ]);

            }
            public function removeimage()
            {

                $this->img = "";
            }

            public function getdata(){

             $about = about::first();
             $soshal = sochail::first();
              $this->form['name']   =    $about->name;
              $this->form['status'] =   $about->status;
              $this->formsochail['setstatus'] =$soshal->setstatus;
              $this->form['title']  =   $about->title;
              $this->description =     $about->dec;
              $this->formsochail['facebook']  =$soshal->facebook;
              $this->formsochail['instgram']  =$soshal->instgram;
              $this->formsochail['linkedin']  =$soshal->linkedin;
              $this->formsochail['youtube']  =$soshal->youtube;
              $this->formsochail['twitter']  =$soshal->twitter;
              $this->formsochail['gmail']    =   $soshal->gmail;
              $this->url  =            $about->url;

            }
        public function uploadimg()
        {


            $this->validate([
                'img' => 'sometimes|image|max:1024', // 1MB Max
            ],[

                'img.max' => 'حجم الصوره المسموح به 1ميجا',
                'img.image' => 'غير مسموح برفع هذا النوع من الملفات',

            ]);

            if($this->img){
            $getimg = about::select('id','img')->first();
            $getimg->img  = $this->img->store("images",'public');



            $getimg->save();
            $this->img="";
            $this->dispatchBrowserEvent('update',['message'=>'تم تحميل الصوره الرئيسه بنجاح ']);

            //$this->restimagetemprorayurl();

            }

        }

        public function uploadurl()
        {



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
            $this->dispatchBrowserEvent('update',['message'=>'تم تحميل رابط السره الذاتيه بنجاح ']);



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
                $about->dec =  $this->description ;

                 $about->save();
                 $this->dispatchBrowserEvent('update',['message'=>'تم تحديث البيانات بنجاح ']);


            }
            public function updatesoshal()
            {


                $this->validate([

                   'formsochail.facebook' => 'sometimes|nullable|url',
                    'formsochail.instgram' => 'sometimes|nullable|url',
                    'formsochail.linkedin' => 'sometimes|nullable|url',
                    'formsochail.youtube' => 'sometimes|nullable|url',
                    'formsochail.twitter' => 'sometimes|nullable|url',
                    'formsochail.gmail' => 'sometimes|email',


                ]);

                    $soshal = sochail::first();
                    $soshal->facebook =  $this->formsochail['facebook']  ;
                    $soshal->instgram =  $this->formsochail['instgram']  ;
                    $soshal->linkedin =  $this->formsochail['linkedin']  ;
                    $soshal->youtube  =  $this->formsochail['youtube']  ;
                    $soshal->twitter =   $this->formsochail['twitter']  ;
                    $soshal->gmail   =   $this->formsochail['gmail']     ;
                    $soshal->setstatus   =   $this->formsochail['setstatus'] ;
                    $soshal->save();
                     $this->dispatchBrowserEvent('update',['message'=>'تم تحديث بيانات روابط السوشيال ميديا بنجاح']);


            }


}
