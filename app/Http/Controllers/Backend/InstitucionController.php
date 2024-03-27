<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\InstitucionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstitucionController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->title = 'Institución';
        $this->page = 'institucion';
    }
    public function index()
    {
        $institucion = InstitucionModel::find(1);
        $this->data['institucion'] = $institucion;
        return  $this->render("institucion.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstitucionModel  $institucionModel
     * @return \Illuminate\Http\Response
     */
    public function show(InstitucionModel $institucionModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstitucionModel  $institucionModel
     * @return \Illuminate\Http\Response
     */
    public function edit(InstitucionModel $institucionModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InstitucionModel  $institucionModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstitucionModel $institucion)
    {
        $request->validate([
            'mision' => 'required',
            'vision' => 'required',
            'correo' => 'required|email',
            'telefono1' => 'required|numeric|digits:8',
            'celular1' => 'numeric|digits:8',
            'celular2' => 'numeric|digits:8',
        ]);
        $institucion->update([
            'id_usuario' => Auth::id(),
            'mision' => $request->mision,
            'vision' => $request->vision,
            'objetivo' => $request->objetivo,
            'historia' => $request->historia,
            'sobre_institucion' => $request->sobre_institucion,
            'correo' => $request->correo,
            'correo2' => $request->correo2,
            'celular1' => $request->celular1,
            'celular2' => $request->celular2,
            'telefono1' => $request->telefono1,
            'telefono2' => $request->telefono2,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'ubicacion' => $request->ubicacion,
            'direccion' => $request->direccion,
        ]);
        return redirect()->route('admin-institucion.index')->with('success', 'Información editada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstitucionModel  $institucionModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstitucionModel $institucionModel)
    {
        //
    }
}
