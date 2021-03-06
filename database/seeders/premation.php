<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        app()[PermissionRegistrar::class]->forgetCachedPermissions();


        // create permissions


        // Reset cached roles and permissions
       DB::table('Permissions')->delete();
       $getpremation = [
        'من انا',
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
         'معرض الاعمال',
        'اداره الاقسام',
        'قسم كنترول',
        'تعديل قسم',
        'حذف قسم',

        'اداره المشاريع',
        'مشروع كنترول',
        'تعديل مشروع',
        'حذف مشروع',

        'اداره اراء العملاء',
        'راى كنترول',
        'تعديل راى',
        'حذف راى',

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


    DB::table('roles')->delete();
    $role1 = Role::create(['name' => 'owner']);
    $role1->givePermissionTo($getpremation);


    DB::table('users')->delete();

    $user = User::create([
        'name' => 'Ahmed Gabril',
        'email' => 'owner@test.com',
        'password' => bcrypt('owner'),
    ]);
    $user->assignRole($role1);
 }
}
