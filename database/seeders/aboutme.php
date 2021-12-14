<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class aboutme extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->delete();
        $data =[
      'name'=> 'Ahmed Gabril',
      'title'=> 'Im a professional web develper',
      'img'=> '../img/hero-bg.jpg',
      'dec'=> 'Im a professional web develper in egypt from 6 manth ago',
      'url'=> 'images/iCwQIpLPrySpKoZIaWem67fqNv4WIKUPUrInR1MF.png',


        ];
        DB::table('abouts')->insert($data);

    }
}
