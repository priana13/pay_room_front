<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SingleProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', [HomeController::class, 'index'])->name('front.home_page');

Route::get('/hotel/{slug}', [SingleProductController::class, 'index'])->name('front.hotel');

Route::middleware(['api-guest'])->group(function(){
   Route::view('/login', 'front.login')->name('login');
   Route::view('/register', 'front.register')->name('register');
});


Route::middleware(['auth-api'])->group(function(){
   Route::view('member/profile', 'member.profile')->name('profile');
   Route::get('my-dashboard', [MyDashboardController::class , 'index'])->name('my-dashboard');

});

Route::get('/booking/{slug}/form', [BookingController::class, 'show'])->name('booking');
Route::get('/booking/payment/{temp_code}', [BookingController::class, 'payment'])->name('payment');
Route::get('/booking/invoice/{temp_code}', [BookingController::class, 'invoice'])->name('invoice');


Route::get('/page/{slug}',function($slug){

   return view('front.page.single-page', compact('slug'));

})->name('static-page');


Route::get('/cari-hotel',function(){

   return view('front.cari-hotel');

})->name('cari-hotel');


require __DIR__.'/auth.php';
