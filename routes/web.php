<?php

use App\Http\Controllers\NotaController;
use App\Http\Controllers\Unidad1Controller;
use App\Http\Controllers\Unidad2Controller;
use App\Http\Controllers\Unidad3Controller;
use App\Http\Controllers\Unidad4Controller;
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
    return view('home');
});

Auth::routes(["register" => false]);


Route::get('', function () {
    return redirect()->route('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('ejercicio1', function()
{
    return view('student.ejercicio1'); 
})->middleware('can:ejercicio1');

Route::get('ejercicio2', function()
{
    return view('student.ejercicio2'); 
})->middleware('can:ejercicio2');

Route::get('ejercicio3', function()
{
    return view('student.ejercicio3'); 
})->middleware('can:ejercicio3');

Route::get('ejercicio4', function()
{
    return view('student.ejercicio4'); 
})->middleware('can:ejercicio4');

Route::get('nota/{unidad}/{ejercicio}', [NotaController::class, 'nota'])->name('nota.index')->middleware(('auth'));
Route::get('nota/destroy/{unidad}/{ejercicio}', [NotaController::class, 'destroy'])->name('nota.destroy')->middleware(('auth'));
Route::get('nota/restaurar/{unidad}/{ejercicio}', [NotaController::class, 'restaurar_nota'])->name('nota.restaurar')->middleware(('auth'));

Route::get('u1ejercicio1', [Unidad1Controller::class, 'u1ejercicio1'])->name('u1ejercicio1.index')->middleware('can:unidad1');
Route::post('u1ejercicio1/guardar', [Unidad1Controller::class, 'u1ejercicio1_guardar'])->name('u1ejercicio1.save')->middleware('can:unidad1');
Route::get('u1ejercicio2', [Unidad1Controller::class, 'u1ejercicio2'])->name('u1ejercicio2.index')->middleware('can:unidad1');
Route::post('u1ejercicio2/guardar', [Unidad1Controller::class, 'u1ejercicio2_guardar'])->name('u1ejercicio2.save')->middleware('can:unidad1');
Route::get('u1ejercicio3', [Unidad1Controller::class, 'u1ejercicio3'])->name('u1ejercicio3.index')->middleware('can:unidad1');
Route::get('u1ejercicio4', [Unidad1Controller::class, 'u1ejercicio4'])->name('u1ejercicio4.index')->middleware('can:unidad1');
Route::post('u1ejercicio4/guardar', [Unidad1Controller::class, 'u1ejercicio4_guardar'])->name('u1ejercicio4.save')->middleware('can:unidad1');

Route::get('u1ejercicio5', [Unidad1Controller::class, 'u1ejercicio5'])->name('u1ejercicio5.index')->middleware('can:unidad1');
Route::post('u1ejercicio5/guardar', [Unidad1Controller::class, 'u1ejercicio5_guardar'])->name('u1ejercicio5.guardar')->middleware('can:unidad1');

Route::get('u1ejercicio6', [Unidad1Controller::class, 'u1ejercicio6'])->name('u1ejercicio6.index')->middleware('can:unidad1');
Route::post('u1ejercicio6/guardar', [Unidad1Controller::class, 'u1ejercicio6_guardar'])->name('u1ejercicio6.save')->middleware('can:unidad1');

Route::get('u1ejercicio7', [Unidad1Controller::class, 'u1ejercicio7'])->name('u1ejercicio7.index')->middleware('can:unidad1');
Route::get('u1ejercicio8', [Unidad1Controller::class, 'u1ejercicio8'])->name('u1ejercicio8.index')->middleware('can:unidad1');
Route::get('u1ejercicio9', [Unidad1Controller::class, 'u1ejercicio9'])->name('u1ejercicio9.index')->middleware('can:unidad1');
