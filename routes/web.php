<?php

use App\Http\Controllers\HomeController;
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

Route::view('/login', 'front.login')->name('login');
Route::view('/register', 'front.register')->name('register');

Route::view('profile', 'livewire.member.profile_page')->name('profile');
Route::view('my-dashboard', 'livewire.member.my-dashboard')->name('my-dashboard');


Route::get('produk', function(){

    if( session()->get('app_token') ){

        return 'halaman produk';

     }else{

        return redirect()->route('login');
     }

})->name('produk');



// Route::get('/hotel', function (Request $request) {
//     $token = uniqid(); 
//     session()->put('token', $token);
//     return session()->get('token');

// });


// Route::get('/about', function (Request $request) {  
//     $value = $request->session()->get('token');
//     dd($value);
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
