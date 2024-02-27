<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Frontend\ClienteController;
use App\Http\Controllers\Frontend\ContactoController;
use App\Http\Controllers\Frontend\SobreNosotrosController;
use App\Http\Controllers\Frontend\GaleriaController;
use App\Http\Controllers\Frontend\HorarioController;
use App\Http\Controllers\Frontend\ServiciosController;
use App\Http\Controllers\Frontend\ClasesController;
use App\Http\Controllers\Frontend\PaginaController;

use App\Http\Controllers\TestController;

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
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::get('/sobre-nosotros', [SobreNosotrosController::class, 'index'])->name('sobre-nosotros');
Route::get('/galeria', [GaleriaController::class, 'index'])->name('galeria');
Route::get('/horario', [HorarioController::class, 'index'])->name('horario');
Route::get('/servicios/{id}', [ServiciosController::class, 'index'])->name('servicios');

Route::get('/publicaciones', [PaginaController::class, 'publicacion'])->name('publicaciones');
Route::get('/publicaciones/{id}', [PaginaController::class, 'detallePublicacion'])->name('detalle-publicacion');
Route::get('/organigrama', [PaginaController::class, 'organigrama'])->name('organigrama');



// Route::get('/clases', [ClasesController::class, 'index'])->name('clases');
// Route::get('/clases/horario', [HorarioController::class, 'index'])->name('horario');
Route::resource('home', ClienteController::class);

Route::get('/login', [LoginController::class, "login"])->name('login');
Route::get('/logout', [LoginController::class, "logout"])->name('logout');
Route::get('/register', function () {
    return view('auth.register');
});


// --test
Route::get('/test', [TestController::class, "index"])->name('test');
Route::post('/test', [TestController::class, "saveVideo"])->name('saveVideo');
