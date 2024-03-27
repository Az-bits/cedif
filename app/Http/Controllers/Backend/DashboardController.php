<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\InstitucionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $this->title = 'Inicio';
        $this->page = 'dashboard';
        // dd(Auth::id());
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $institucion = InstitucionModel::find(1);
        $this->data['institucion'] = $institucion;
        return  $this->render("institucion.index");
    }
}
