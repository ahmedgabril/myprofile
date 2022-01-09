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
        'عنى',
        'بيانتى الشخصيه ',
        'صوره الموقع الرئيسه',
        'روابط التواصل الاجتماعى',
        'لوجو الموقع الرئيسى',
        'رفع ملف السره الذاتيه',

        'المهارات',
        'اضافه مهاره',
        'مهاره كنترول',
        'تعديل مهاره',
        'حذف مهاره',

        'الخدمات',
        'اضافه خدمه',
        'خدمه كنترول',
        'تعديل خدمه',
        'حذف خدمه',

        'اداره الاقسام',
        'قسم كنترول',
        'تعديل قسم',
        'حذف قسم',

        'اداره المشاريع',
        'مشروع كنترول',
        'تعديل مشروع',
        'حذف مشروع',


        'المستخدمين والصلاحيات',
        'اداره المستخدمين',
        'مستخدم كنترول',
        'تعديل مستخدم',
        'حذف مستخدم',

        'الوظائف',
        'وظيفه كنترول',
        'تعديل وظيفه',
        'حذف وظيفه',

        'الاعدادت',
        'بيانات الموقع',


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
        $role2->givePermissionTo("الخدمات");
        $role2->givePermissionTo("عنى");

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
