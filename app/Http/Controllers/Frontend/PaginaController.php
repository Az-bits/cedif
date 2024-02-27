<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;

class PaginaController extends FrontendController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            "horario" => ["hora_ini" => "8:30", "hora_fin" => "18:00"],
            "telefonos" => [["numero" => "67031409"], ["numero" => "74277575"], ["numero" => "75800862"]],
            "direccion" => "Av. Juan Pablo II esquina Av. Sucre A Parada Z/ lado Teleférico Azul."
        ];
        // return view('home');
        return view('frontend.publicacion', compact('data'));
    }
    public function publicacion()
    {
        $data = [
            "horario" => ["hora_ini" => "8:30", "hora_fin" => "18:00"],
            "telefonos" => [["numero" => "67031409"], ["numero" => "74277575"], ["numero" => "75800862"]],
            "direccion" => "Av. Juan Pablo II esquina Av. Sucre A Parada Z/ lado Teleférico Azul."
        ];
        // return view('home');
        return view('frontend.publicacion', compact('data'));
    }
    public function detallePublicacion()
    {
        return view('frontend.detalle-publicacion', compact('data'));
    }
    public function organigrama()
    {
        $data = [
            "horario" => ["hora_ini" => "8:30", "hora_fin" => "18:00"],
            "telefonos" => [["numero" => "67031409"], ["numero" => "74277575"], ["numero" => "75800862"]],
            "direccion" => "Av. Juan Pablo II esquina Av. Sucre A Parada Z/ lado Teleférico Azul."
        ];
        return view('frontend.organigrama', compact('data'));
    }
}
