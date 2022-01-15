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
            'img'=> 'images/No_Image.jpg',
            'dec'=> 'Im a professional web develper in egypt from 6 manth ago',
            'url'=> 'images/No_Image.jpg',
        ];
        DB::table('abouts')->insert($data);

    }
}
