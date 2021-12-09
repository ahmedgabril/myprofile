<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class facts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('facts')->delete();


     $data= [
        'hours_Of_Support'=> '300',
        'projects'=> '30',
        'clients'=> '55',
        'hard Workers'=> '60',
        'status'=> '1',
       ];
       DB::table('facts')->insert($data);
    }
}
