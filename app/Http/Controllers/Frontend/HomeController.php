<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendController;
use App\Models\AutoridadModel;
use App\Models\GaleriaModel;
use App\Models\InstitucionModel;
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

        $this->data['institucion'] = InstitucionModel::find(1);
        // dd($this->data['institucion']);
        $this->data['contadores'] = [
            'videos' => VideosModel::where('estado', '1')->count(),
            'publicaciones' => PublicacionModel::whereIn('estado', ['1', '2'])->count(),
            'galeria' => GaleriaModel::where('estado', '1')->count()
        ];
        $data = new AutoridadModel();
        $autoridades = $data->getAll();
        foreach ($autoridades as $a) {
            $a->image = Helpers::getImage($a->url);
        }
        $this->data['autoridades'] = $autoridades;

        $this->data['salas'] = SalasModel::where('estado', '1')->get();
        // dd($this->data['salas']);
        return $this->render('home');
    }
}
