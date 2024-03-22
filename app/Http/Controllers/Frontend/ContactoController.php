<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;

class ContactoController extends FrontendController
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
        return $this->render('contacto');
    }
    public function saveSolicitud()
    {
        return redirect()->route('contacto')->with('success', 'Publicación actualizada exitosamente!');
    }
}
