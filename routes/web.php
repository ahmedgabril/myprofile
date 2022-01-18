<?php

//use App\Http\Livewire\Dashbord;

use App\Http\Livewire\Login;
use App\Http\Livewire\Getcat;
use App\Http\Livewire\Skills;
use App\Http\Livewire\Backend;
use App\Http\Livewire\Getrole;
use App\Http\Livewire\Getuser;
use App\Http\Livewire\Setting;
use App\Http\Livewire\Myprofile;
use App\Http\Livewire\Getservice;
use App\Http\Livewire\Getsetting;
use App\Http\Livewire\Handelusers;
use App\Http\Controllers\Getalldata;
use App\Http\Livewire\Front\Aboutme;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Addcustomerpre;
use App\Http\Livewire\Front\Portfdec;
use App\Http\Livewire\Front\Welecome;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Front\ContactMe;
use App\Http\Livewire\Front\Portfolio;
use App\Http\Livewire\Front\Getservicesdec;
use App\Http\Livewire\Front\Skills as FrontSkills;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', function () {
    return view('livewire.front.welecome');
});
Route::get('/',Welecome::class)->name('home');
Route::get('/aboutme',Aboutme::class)->name('aboutme');
Route::get('/portfolio',Portfolio::class)->name('portfolio');
Route::get('/skills',FrontSkills::class)->name('skills');
Route::get('/services',Getservicesdec::class)->name('services');
Route::get('/contactme',ContactMe::class)->name('contactme');
Route::get('/portfdec',Portfdec::class)->name('portfdec');


/**dashbord route from here */

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
//Route::get('/', [Getalldata::class, 'home'])->name('home');
//Route::get('/about', [Getalldata::class, 'about'])->name('about');
//Route::get('/',login::class)->name('login')->middleware('guest');
Route::get('/login',login::class)->name('login')->middleware('guest');

Route::get('/backend',Backend::class)->name('backend')->middleware(['auth','permission:الصفحه الرئيسه']);
Route::group(['middleware' =>['auth','permission:المستخدمين والصلاحيات']],function () {


        Route::get('/user',Getuser::class)->name('getuser');
        Route::get('/roles',Getrole::class)->name('role');

        });

        Route::group(['middleware' =>['auth','permission:الاعدادت']],function () {


        Route::get('/setting',Setting::class)->name('setting');


       });

       Route::group(['middleware' =>['auth','permission:من انا']],function () {


        Route::get('/getsetting',Getsetting::class)->name('getsetting');


         });
       Route::group(['middleware' =>['auth','permission:اراء العملاء']],function () {


        Route::get('/feedback',Addcustomerpre::class)->name('feedback');


         });

         Route::group(['middleware' =>['auth','permission:المهارات']],function () {


            Route::get('/getskills',Skills::class)->name('getskills');


             });
             Route::group(['middleware' =>['auth','permission:الخدمات']],function () {


                Route::get('/getservices',Getservice::class)->name('getservice');


                 });

                 Route::group(['middleware' =>['auth','permission:معرض الاعمال']],function () {


                    Route::get('/getcat',Getcat::class)->name('getcat');
                    Route::get('/myprofile',Myprofile::class)->name('myprofile');
                });

                Route::group(['middleware' =>['auth']],function () {


                    Route::get('/myaccount',Handelusers::class)->name('myaccount');

                });

//




