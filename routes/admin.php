<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermisoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ParametersController;

Route::get('', [HomeController::class, 'index'])->name('admin')->middleware('role:administrador');
Route::get('usuarios/consultar', [UserController::class, 'consultar'])->name('usuarios.consultar');
Route::post('usuarios/update/{id}', [UserController::class, 'update'])->name('usuarios.update');
Route::get('usuarios/ultimos_usuarios', [UserController::class, 'ultimosusuarios'])->name('usuarios.ultimosusuarios');
Route::post('usuarios/eliminar_mas', [UserController::class, 'eliminarmas'])->name('usuarios.eliminarmas');
Route::resource('usuarios', UserController::class)->names('usuarios')->middleware('can:usuarios')->except(['update']);
Route::get('roles/consultar', [RolController::class, 'consultar'])->name('roles.consultar')->middleware('can:roles');
Route::get('roles/consultadata', [RolController::class, 'consultadata'])->name('roles.consultadata')->middleware('can:roles');
Route::post('roles/update/{id}', [RolController::class, 'update'])->name('roles.update');
Route::post('roles/eliminar_mas', [RolController::class, 'eliminarmas'])->name('roles.eliminarmas');
Route::resource('roles', RolController::class)->names('roles')->middleware('can:roles')->except(['update']);
Route::post('permisos/update', [PermisoController::class, 'update'])->name('permisos.update')->middleware('can:permisos');
Route::resource('permisos', PermisoController::class)->names('permisos')->middleware('can:permisos')->except(['update']);
Route::get('parametros/consultadata', [ParametersController::class,'consultadata'])->name('parametros.consultadata')->middleware('can:parametros');


 