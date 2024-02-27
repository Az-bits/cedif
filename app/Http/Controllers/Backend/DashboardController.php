<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;

class DashboardController extends BackendController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        parent::index();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd('dashboard', 'casa', $this->name);
        // $data = [
        //     "horario" => ["hora_ini" => "8:30", "hora_fin" => "18:00"],
        //     "telefonos" => [["numero" => "67031409"], ["numero" => "74277575"], ["numero" => "75800862"]],
        //     "direccion" => "Av. Juan Pablo II esquina Av. Sucre A Parada Z/ lado Teleférico Azul."
        // ];
        // // return view('home');
        return view('backend.dashboard');
    }
}
