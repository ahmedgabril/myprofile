<?php

namespace Database\Seeders;

;
use Illuminate\Database\Seeder;
use Database\Seeders\Userseeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Userseeder::class,
            premation::class,
            setting::class,
            aboutme::class,
            sochal::class,
            facts::class,
            getskillseeder::class,

        ]);

    }
}
