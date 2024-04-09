<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Frontend\ClienteController;
use App\Http\Controllers\Frontend\ContactoController as ContactoFrontend;
use App\Http\Controllers\Frontend\SobreNosotrosController;
use App\Http\Controllers\Frontend\GaleriaController;
use App\Http\Controllers\Frontend\HorarioController;
use App\Http\Controllers\Frontend\ServiciosController;
use App\Http\Controllers\Frontend\ClasesController;
use App\Http\Controllers\Frontend\PaginaController;
use App\Http\Controllers\Frontend\SalasController;

use App\Http\Controllers\TestController;

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

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('/');
Route::get('/contacto', [ContactoFrontend::class, 'index'])->name('contacto');
Route::get('/sobre-nosotros', [SobreNosotrosController::class, 'index'])->name('sobre-nosotros');
Route::get('/galeria', [GaleriaController::class, 'index'])->name('galeria');
Route::get('/horario', [HorarioController::class, 'index'])->name('horario');
Route::get('/servicios/{id}', [ServiciosController::class, 'index'])->name('servicios');
Route::post('/contacto', [ContactoFrontend::class, 'saveSolicitud'])->name('contacto.save');

// Begin::Salas

// Route::get('/salas/{id}', [SalasController::class, 'index'])->name('sala-lactante');
// Route::get('/salas/{id}', [SalasController::class, 'index'])->name('sala-lactante');
// Route::get('/salas/{id}', [SalasController::class, 'index'])->name('sala-lactante');

// End::Salas

Route::get('/salas-parvulo', [SalasController::class, 'index'])->name('salas-parvulo');

Route::get('/publicaciones', [PaginaController::class, 'publicacion'])->name('publicaciones');
Route::get('/convocatorias', [PaginaController::class, 'convocatorias'])->name('convocatorias');
Route::get('/avisos', [PaginaController::class, 'avisos'])->name('avisos');
Route::get('/comunicados', [PaginaController::class, 'comunicados'])->name('comunicados');
Route::get('/eventos', [PaginaController::class, 'eventos'])->name('eventos');

Route::get('/videos', [PaginaController::class, 'videos'])->name('videos');
// Route::get('/publicaciones/{id}', [PaginaController::class, 'detallePublicacion'])->name('detalle-publicacion');
Route::get('/organigrama', [PaginaController::class, 'organigrama'])->name('organigrama');

Route::get('/detalle-informacion/{id}', [PaginaController::class, 'detalleInformacion'])->name('detalle-informacion');
Route::get('/detalle-sala/{id}', [SalasController::class, 'detalleSala'])->name('detalle-sala');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
