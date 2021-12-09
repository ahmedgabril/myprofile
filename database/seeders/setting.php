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
     ['key'=> 'compnyname','value'=>'go dady'],
     ['key'=> 'faks','value'=>'25021356'],
     ['key'=> 'manger','value'=>'ahmed gabril'],
     ['key'=> 'phone','value'=>'01092586526'],
     ['key'=> 'address','value'=>'كفر الشيخ '],
     ['key'=> 'phone2','value'=>'01000000140'],
     ['key'=> 'email','value'=>'ahmed@gmail.com'],
     ['key'=> 'darkmode','value'=>'0'],

     ['key'=> 'sidebar','value'=>'open'],
     ['key'=> 'sitename','value'=>'one click'],
     ['key'=> 'logo','value'=>'/dist/img/AdminLTELogo.png'],

      ];
      DB::table('settings')->insert($data);
    }
}
