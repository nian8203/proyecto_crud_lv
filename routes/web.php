<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Usuario;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});


#Route::get('/cliente/index',[ClienteController::class,'index']);


Route::resource('cliente',ClienteController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente');
});

// Route::delete('/cliente/{id}', [\App\Http\Controllers\ClienteController::class, 'destroy'])
//   ->name('cliente.destroy');

Route::delete('/cliente/{id}', [\App\Http\Controllers\ClienteController::class, 'destroy'])
  ->name('cliente');




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
