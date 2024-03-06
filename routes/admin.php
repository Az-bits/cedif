<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PublicacionController;
use App\Http\Controllers\Backend\InstitucionController;
use App\Http\Controllers\Backend\PersonaController;
use App\Http\Controllers\Backend\VideosController;

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::resource('admin/publicacion', PublicacionController::class)->names('admin-publicacion');
Route::resource('admin/institucion', InstitucionController::class)->names('admin-institucion');
Route::resource('admin/persona', PersonaController::class)->names('admin-persona');
Route::resource('admin/videos', VideosController::class)->names('admin-videos');
