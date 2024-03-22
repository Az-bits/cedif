<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendController;
use App\Models\GaleriaModel;
use App\Models\PublicacionModel;
use App\Models\SalasModel;
use App\Models\VideosModel;
use Illuminate\Http\Request;

class HomeController extends FrontendController
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

        // return view('home');
        $this->data['contadores'] = [
            'videos' => VideosModel::where('estado', '1')->count(),
            'publicaciones' => PublicacionModel::where('estado', '1')->count(),
            'galeria' => GaleriaModel::where('estado', '1')->count()
        ];
        $this->data['salas'] = SalasModel::where('estado', '1')->get();
        // dd($this->data['salas']);
        return $this->render('home');
    }
}
