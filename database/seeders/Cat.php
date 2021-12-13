<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('catogeries')->delete();
      DB::table('catogeries')->insert([

        'name'=>'webdesion',
        'created_at'=>'2022/10/12'
      ]);
      DB::table('catogeries')->insert([

        'name'=>'webdevoper',
        'created_at'=>'2022/10/12'
      ]);


    }
}
