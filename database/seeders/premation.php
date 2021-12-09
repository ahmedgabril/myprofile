<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class premation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();


        // create permissions
      $getpremation = [
        'الصفحه الرئيسه',
        'المستخدمين والصلاحيات',
        'اداره المستخدمين',
        'الوظائف',
        'الاعدادت',
        'لوحه التحكم',
        'اعدادت الموقع',
        'عنى',
        'الاحصائات',
        'المساعده',

       ];
       foreach( $getpremation as $getpre){

        Permission::create(['name'=> $getpre]);
       }


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'owner']);

        $role1->givePermissionTo($getpremation);

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo("الاعدادت");
        $role2->givePermissionTo("الصفحه الرئيسه");


        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@test.com',
            'password' => bcrypt('admin'),
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Ahmed Gabril',
            'email' => 'owner@test.com',
            'password' => bcrypt('owner'),
        ]);
        $user->assignRole($role1);
    }
}
