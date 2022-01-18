<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;


class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       //User::factory(1)->create();
        // create roles and assign existing permissions
        DB::table('roles')->delete();
        $role1 = Role::create(['name' => 'owner']);




        $user = \App\Models\User::factory()->create([
            'name' => 'Ahmed Gabril',
            'email' => 'owner@test.com',
            'password' => bcrypt('owner'),
        ]);
        $user->assignRole($role1);
    }
}

