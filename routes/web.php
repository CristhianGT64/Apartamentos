<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\propiedadController;
use App\Http\Controllers\AplicacionController;
use App\Http\Controllers\duenioController;
use App\Models\duenio;

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

Route::get('/{area}/{numApartamento?}', [AplicacionController::class,'index'])->name('Aplicacion.precio');

Route::get('/propiedades/propiedad/propiedad', [propiedadController::class, 'propiedades'])->name('propiedad.propiedades');

Route::get('/propiedades/duenio/duenio/{codigo?}', [duenioController::class, 'duenio'])->name('duenio.duenio');

Route::get('/propiedades/duenio/crear', [duenioController::class, 'create'])->name('duenio.create');

Route::post('/propiedades/duenio/guardar', [duenioController::class, 'guardar'])->name('duenio.guardar');

Route::get('/propiedades/duenio/propiedad/{id}', [propiedadController::class, 'duenioPropiedades'])->name('duenio.propiedad');
