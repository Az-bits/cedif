<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Helpers;
use App\Http\Controllers\FrontendController;
use App\Models\SalasModel;
use Illuminate\Http\Request;

class SalasController extends FrontendController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = new SalasModel();
        $salas = $data->getAll();
        foreach ($salas as $p) {
            $p->image = Helpers::getImage($p->url);
        }
        $this->data['title'] = 'Salas';
        $this->data['salas'] = $salas;
        // dd($this->data);
        return $this->render("salas");
    }
    public function detalleSala($id)
    {
        $this->title = 'Salas';
        $data = new SalasModel();

        if ($sala = $data->getAll($id)) {
            $sala->image = Helpers::getImage($sala->url);
            $this->data['title'] = 'Salas';
            $this->data['sala'] = $sala;
            // dd($this->data);
            return $this->render("detalle-sala");
        }
        return redirect()->route('/');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SalasModel $salasModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalasModel $salasModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SalasModel $salasModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SalasModel $salasModel)
    {
        //
    }
}
