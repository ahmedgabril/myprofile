<?php

use App\Livewire\Hompage;
use App\Livewire\Category;
use App\Http\Middleware\setlocale;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/lang/{locale}',function($locale){

    if(array_key_exists($locale,config('app.supportedLocales'))){
    
        session()->put('locale',$locale);
    }
    // session()->put('locale','');
    return redirect()->back();
    
    })->name('locale');

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::get('/homepage', Hompage::class)->name('homepage');
Route::get('/category', Category::class)->name('handelcategory');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



require __DIR__ . '/auth.php';

