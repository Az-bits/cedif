<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendController;
use App\Models\GaleriaModel;
use Illuminate\Http\Request;

class GaleriaController extends FrontendController
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
        $data = new GaleriaModel();
        $galeria = $data->getAll(null, true);
        foreach ($galeria as $s) {
            $s->image = Helpers::getImage($s->url);
        }

        $this->data['galeria'] = $galeria;
        return $this->render('galeria');
    }
}
