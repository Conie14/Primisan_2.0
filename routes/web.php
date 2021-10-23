<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


//***************************     ADMIN   ************************************************** */
Route::view('users', 'livewire.users.index')->middleware('can:admin.home');
Route::view('update', 'livewire.users.update')->middleware('can:admin.home');
Route::view('create', 'livewire.users.create')->middleware('can:admin.home');







Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Hooks - Do not delete//
	Route::view('areas', 'livewire.areas.index')->middleware('auth');
//Route::view('users', 'livewire.users.index')->middleware('auth');
Route::view('ejemplos', 'livewire.ejemplo.index')->name('x');
Route::view('clientes', 'livewire.cliente.clientes')->name('a');
Route::view('construccion', 'livewire.construcciones.construccion')->name('b');
Route::view('cotizacion', 'livewire.cotizaciones.cotizacion')->name('c');
Route::view('electricidad', 'livewire.electricidades.electricidad')->name('d');
Route::view('mecanico', 'livewire.mecanicos.mecanico')->name('e');
Route::view('nosotros', 'livewire.ejemplo.nosotros')->name('f');
Route::view('servicios', 'livewire.ejemplo.servicios')->name('g');
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
