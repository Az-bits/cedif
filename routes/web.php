<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\SobreNosotrosController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\ServiciosController;
// use App\Http\Controllers\ClasesController;
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

// Route::get('/', function () {
//     return view('base');
// });

// Auth::routes();

// Route::get('/inicio', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('home', ClienteController::class);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::get('/sobre-nosotros', [SobreNosotrosController::class, 'index'])->name('sobre-nosotros');
Route::get('/galeria', [GaleriaController::class, 'index'])->name('galeria');
Route::get('/horario', [HorarioController::class, 'index'])->name('horario');
Route::get('/servicios/{id}', [ServiciosController::class, 'index'])->name('servicios');

// Route::get('/clases', [ClasesController::class, 'index'])->name('clases');
// Route::get('/clases/horario', [HorarioController::class, 'index'])->name('horario');
Route::resource('home', ClienteController::class);
