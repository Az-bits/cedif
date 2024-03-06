<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\PublicacionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PublicacionController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = new PublicacionModel();
        $this->data['publicaciones'] = $publicaciones->getAll();
        $this->title = "Publicación";
        $this->page = "publicacion";
        return $this->render("publicacion.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(Auth::id());
        //guardar publicacion
        // dd();
        $request->validate([
            'titulo' => 'required|max:80',
            'fecha_ini' => 'required',
            'imagen' => 'required|file|max:3000'
        ]);
        // dd($_FILES);

        PublicacionModel::create([
            'titulo' => $request->titulo,
            'id_usuario' => Auth::id(),
            'descripcion' => $request->descripcion,
            'tipo' => $request->tipo,
            'fecha_ini' => $request->fecha_ini,
            'fecha_fin' => $request->fecha_fin,
            'direccion' => $request->direccion,
            'estado' => $request->estado,
        ]);

        return redirect()->route('admin-publicacion.index')->with('success', 'Publicación creada exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PublicacionModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */
    public function show(PublicacionModel $publicacionModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PublicacionModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PublicacionModel $publicacion)
    {
        $this->data['publicacion'] = $publicacion;
        return $this->render('publicacion.edit-form');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PublicacionModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublicacionModel $publicacion)
    {
        $request->validate(
            [
                'nombre' => 'required|max:50',
                'email' => 'required|email',
                'celular' => 'required|numeric|digits:8',
                'ci' => 'required',
                'imagen' => 'required'
            ]
        );
        die($_FILES);
        $publicacion->update($request->all());
        return redirect()->route('admin-persona.index')->with('success', 'Persona actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PublicacionModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicacionModel $publicacionModel)
    {
        //
    }
}
