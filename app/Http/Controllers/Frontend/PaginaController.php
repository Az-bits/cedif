<?php

namespace App\Http\Controllers\Frontend;

setlocale(LC_TIME, 'es_ES.UTF-8');

use App\Helpers\Helpers;
use App\Http\Controllers\FrontendController;
use App\Models\PublicacionModel;
use App\Models\VideosModel;
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
        return $this->render('publicacion');
    }
    public function publicacion()
    {
        $data['title'] = 'Publicaciones';
        $data = new PublicacionModel();
        $publicaciones = $data->getAll();
        foreach ($publicaciones as $p) {
            $p->image = Helpers::getImage($p->url);
        }
        $this->data['publicaciones'] = $publicaciones;
        return $this->render('publicacion');
    }
    public function convocatorias()
    {
        $data = new PublicacionModel();
        $publicaciones = $data->getAll();
        foreach ($publicaciones as $p) {
            $p->image = Helpers::getImage($p->url);
        }
        $this->data['title'] = 'Convocatorias';
        $this->data['publicaciones'] = $publicaciones;
        // dd($this->data);

        return $this->render("publicacion");
    }
    // public function detallePublicacion()
    // {
    //     $this->data['title'] = 'Convocatorias';
    //     // return $this->render('detalle-publicacion');
    // }
    public function organigrama()
    {
        $data = [
            "horario" => ["hora_ini" => "8:30", "hora_fin" => "18:00"],
            "telefonos" => [["numero" => "67031409"], ["numero" => "74277575"], ["numero" => "75800862"]],
            "direccion" => "Av. Juan Pablo II esquina Av. Sucre A Parada Z/ lado Teleférico Azul."
        ];
        return view('frontend.organigrama', compact('data'));
    }

    public function detalleInformacion($id)
    {
        $this->title = 'Convocatorias';
        $data = new PublicacionModel();
        if ($publicacion = $data->getAll($id)) {
            $publicacion->image = Helpers::getImage($publicacion->url);
            $this->data['publicacion'] = $publicacion;
            return $this->render("detalle-publicacion");
        }
        return redirect()->route('/');
    }
    public function videos()
    {
        $videos = VideosModel::where('estado', '1')->get();;

        $this->data['title'] = 'Convocatorias';
        $this->data['videos'] = $videos;
        // dd($this->data);

        return $this->render("videos");
    }
}
