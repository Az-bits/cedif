<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendController;
use App\Models\InstitucionModel;
use Illuminate\Http\Request;

class SobreNosotrosController extends FrontendController
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
        // // return view('home');
        // $this->data['contadores'] = [
        //     'videos' => VideosModel::where('estado', '1')->count(),
        //     'publicaciones' => PublicacionModel::where('estado', '1')->count(),
        //     'galeria' => GaleriaModel::where('estado', '1')->count()
        // ];
        $this->data['institucion'] = InstitucionModel::find(1);
        // // dd($this->data['salas']);
        return $this->render('sobre-nosotros');
    }
}
