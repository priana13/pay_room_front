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
Route::view('/booking/thankyou', 'booking.thankyou')->name('thankyou');




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
