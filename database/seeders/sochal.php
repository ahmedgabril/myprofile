<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sochal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sochails')->delete();
        $data =[
      'facebook'=> 'https://www.facebook.com/adel.gebril.5/about',
      'instgram'=> 'Im a professional web develper',
      'linkedin'=> 'https://www.linkedin.com/in/ahmed-gabril-5648901a4/',
      'youtube'=> 'https://www.youtube.com/channel/UCFYaKZmc1BBEdA1Xrwe5PJg',
      'twitter'=> 'not yet',
      'gmail'=> 'ajbryl110@gmail.com',
      'setstatus'=> '1',
        ];
        DB::table('sochails')->insert($data);

    }
}
