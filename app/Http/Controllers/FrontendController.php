<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Models\InstitucionModel;
use App\Models\PublicacionModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FrontendController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $name = null;
    public $data = [];
    public $title = null;
    public $page = null;

    public function index()
    {
        $this->name = 'Edwin';
    }
    public function render($view)
    {
        $this->data['title'] = $this->title;
        $this->data['page'] = $this->page;
        $this->data['contacto'] = [
            "horario" => ["hora_ini" => "8:30", "hora_fin" => "18:00"],
            "telefonos" => [["numero" => "67031409"], ["numero" => "74277575"], ["numero" => "75800862"]],
            "direccion" => "Av. Sucre A Parada Z/ lado Teleférico Azul."
        ];
        $this->data['institucion'] = InstitucionModel::find(1);
        $this->data['institucion'] = InstitucionModel::find(1);
        $publicaciones = new PublicacionModel();
        $publicaciones = $publicaciones->getAllFront();
        foreach ($publicaciones as $p) {
            $p->image = Helpers::getImage($p->url);
        }
        $this->data['publicaciones'] = $publicaciones;

        $data = $this->data;
        return view('frontend.' . $view, compact('data'));
    }
}
