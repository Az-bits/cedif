<?php

namespace App\Http\Controllers\Frontend;

setlocale(LC_TIME, 'es_ES.UTF-8');

use App\Helpers\Helpers;
use App\Http\Controllers\FrontendController;
use App\Models\GaleriaModel;
use App\Models\PublicacionModel;
use App\Models\User;
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
        $this->title = 'Publicaciones';
        $this->data['page'] = 'publicaciones';
        $this->publicaciones('PUBLICACION');
        return $this->render('publicacion');
    }
    public function convocatorias()
    {
        $this->title = 'Convocatorias';
        $this->data['page'] = 'convocatorias';
        $this->publicaciones('CONVOCATORIA');
        return $this->render("publicacion");
    }
    public function comunicados()
    {
        $this->title = 'Comunicados';
        $this->data['page'] = 'comunicados';
        $this->publicaciones('COMUNICADOS');
        return $this->render("publicacion");
    }
    public function avisos()
    {
        $this->title = 'Avisos';
        $this->data['page'] = 'avisos';
        $this->publicaciones('AVISOS');
        return $this->render("publicacion");
    }
    public function eventos()
    {
        $this->title = 'eventos';
        $this->data['page'] = 'eventos';
        $this->publicaciones('EVENTOS');
        return $this->render("publicacion");
    }
    public function publicaciones($name)
    {
        $data = new PublicacionModel();
        $publicaciones = $data->getAll(null, true);
        $user = new User();
        $publicaciones = $data->getAll(null, true, $name);
        foreach ($publicaciones as $p) {
            $p->image = Helpers::getImage($p->url);
            $p->usuario = $user->getUsers(intval($p->id_usuario));
        }
        $this->data['publicaciones'] = $publicaciones;
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

    public function detalleInformacion($id)
    {
        $this->title = 'Convocatorias';
        $data = new PublicacionModel();
        $user = new User();
        if ($publicacion = $data->getAll($id)) {
            $publicacion->image = Helpers::getImage($publicacion->url);
            $publicacion->usuario = $user->getUsers(intval($publicacion->id_usuario));
            $this->data['publicacion'] = $publicacion;
            $fotos = new GaleriaModel();
            $galeria = $fotos->getAll(null, true);

            foreach ($galeria as $s) {
                $s->image = Helpers::getImage($s->url);
            }

            $this->data['galeria'] = $galeria;
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
