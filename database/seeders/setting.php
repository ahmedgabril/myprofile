<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class setting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('settings')->delete();
      $data =[
     ['key'=> 'compnyname','value'=>'myprofile'],
     ['key'=> 'whatsup','value'=>'01092586526'],
     ['key'=> 'whatsupmsg','value'=>'hello there how ican help you'],
     ['key'=> 'manger','value'=>'ahmed gabril'],
     ['key'=> 'phone','value'=>'01092586526'],
     ['key'=> 'address','value'=>'كفر الشيخ '],
     ['key'=> 'phone2','value'=>'01000000140'],
     ['key'=> 'email','value'=>'ahmed@gmail.com'],
     ['key'=> 'sidebar','value'=>'open'],
     ['key'=> 'sitename','value'=>'one click'],
     ['key'=> 'logo','value'=>'/dist/img/AdminLTELogo.png'],

      ];
      DB::table('settings')->insert($data);
    }
}
