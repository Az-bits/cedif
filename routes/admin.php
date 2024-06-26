<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\AutoridadesController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PublicacionController;
use App\Http\Controllers\Backend\InstitucionController;
use App\Http\Controllers\Backend\PersonaController;
use App\Http\Controllers\Backend\VideosController;
use App\Http\Controllers\Backend\SalasController;
use App\Http\Controllers\Backend\ContactoController;
use App\Http\Controllers\Backend\GaleriaController;

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::resource('admin/publicacion', PublicacionController::class)->middleware(['auth'])->names('admin-publicacion');

Route::get('admin/institucion/', [InstitucionController::class, 'index'])->middleware(['auth'])->name('admin-institucion.index');
Route::put('admin/institucion/{institucion}', [InstitucionController::class, 'update'])->middleware(['auth'])->name('admin-institucion.update');


Route::resource('admin/salas', SalasController::class)->middleware(['auth'])->names('admin-salas');
Route::resource('admin/galerias', GaleriaController::class)->middleware(['auth'])->names('admin-galerias');
Route::resource('admin/autoridad', AutoridadesController::class)->middleware(['auth'])->names('admin-autoridad');
Route::resource('admin/persona', PersonaController::class)->middleware(['auth'])->names('admin-persona');
Route::resource('admin/videos', VideosController::class)->middleware(['auth'])->names('admin-videos');
Route::resource('admin/contacto', ContactoController::class)->middleware(['auth'])->names('admin-contacto');
Route::get('admin/canalYT', [VideosController::class, 'canalYT'])->middleware(['auth'])->name('admin-videos.canalYT');
// Route::get('admin/videos', [VideosController::class, 'show'])->middleware(['auth'])->name('admin-videos.show');
// Route::resource('admin/videos', VideosController::class)->names('admin-videos');
