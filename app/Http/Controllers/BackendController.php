<?php

namespace App\Http\Controllers;

use App\Models\ContactoModel;
use App\Models\UserModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class BackendController extends BaseController
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
        $users = new UserModel();
        $this->data['usuario'] = $users->getUsers(Auth::id());
        $this->data['notificaciones'] = ContactoModel::whereIn('estado', ['1'])->orderByDesc('fecha_creacion')->get();
        $this->data['cantidad'] = ContactoModel::whereIn('estado', ['1'])->get()->count();

        $user =  new UserModel();
        $user = $user->getUsers(Auth::user()->id);
        $this->data['rol'] = $user->rol;
        $this->data['title'] = $this->title;
        $this->data['page'] = $this->page;

        $data = $this->data;
        return view('backend.' . $view, compact('data'));
    }
}
