<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendController;
use App\Models\AutoridadModel;
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
        $this->data['institucion'] = InstitucionModel::find(1);
        $data = new AutoridadModel();
        $autoridades = $data->getAll();
        foreach ($autoridades as $a) {
            $a->image = Helpers::getImage($a->url);
        }
        $this->data['autoridades'] = $autoridades;
        return $this->render('sobre-nosotros');
    }
}
