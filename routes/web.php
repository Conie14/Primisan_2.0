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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


//***************************     ADMIN   ************************************************** */
Route::view('users', 'livewire.users.index')->middleware('can:admin.home');
Route::view('update', 'livewire.users.update')->middleware('can:admin.home');
Route::view('create', 'livewire.users.create')->middleware('can:admin.home');
Route::view('areas', 'livewire.areas.index')->middleware('can:admin.home');


//******************************* ING. Y ADMIN  ********************************************* */

Route::view('serviciostotales', 'livewire.serviciostotales.index')->middleware('auth');


//**************************    PUBLICO GENERAL ******************************************** */

Route::get('/', function () {
    return view('welcome');
});
Route::view('ejemplos', 'livewire.ejemplo.index')->name('ejemplos');
Route::view('clientes', 'livewire.cliente.clientes')->name('clientes');
Route::view('construccion', 'livewire.construcciones.construccion')->name('construccion');
Route::view('cotizacion', 'livewire.cotizaciones.cotizacion')->name('cotizacion');
Route::view('electricidad', 'livewire.electricidades.electricidad')->name('electricidad');
Route::view('mecanico', 'livewire.mecanicos.mecanico')->name('mecanico');
Route::view('nosotros', 'livewire.ejemplo.nosotros')->name('nosotros');
Route::view('servicios', 'livewire.ejemplo.servicios')->name('servicios');

//*********** cruds  */

Route::view('construcciones', 'livewire.construcciones.index')->name('construccion');
Route::view('electricidades', 'livewire.electricidades.index')->name('electricidad');
Route::view('mecanicos', 'livewire.mecanicos.index')->name('mecanica');

Auth::routes();

