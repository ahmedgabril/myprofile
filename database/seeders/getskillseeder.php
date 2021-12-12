<?php

namespace Database\Seeders;


use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;
class getskillseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $faker = faker::create();
        DB::table('skills')->delete();

        $count=100;

        for($i=1;$i<=$count;$i++){
            $data=[
                'name'=> $faker->unique()->name,
                'rate'=> $faker->numberBetween(1,100),


                ];
            DB::table('skills')->insert($data);
        }
    }
}
