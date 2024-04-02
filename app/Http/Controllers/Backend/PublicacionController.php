<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\PublicacionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Helpers;

class PublicacionController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->title = 'Publicaciones';
        $this->page = 'publicacion';
    }
    public function index()
    {

        $data = new PublicacionModel();
        $publicaciones = $data->getAll();
        foreach ($publicaciones as $p) {
            $p->image = Helpers::getImage($p->url);
        }
        $this->data['publicaciones'] = $publicaciones;
        return $this->render("publicacion.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->title = "Publicaciones";
        return $this->render("publicacion.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:80',
            'fecha_ini' => 'required|date|after_or_equal:today',
            'fecha_fin' => 'date|after_or_equal:today',
            'imagen' => 'required|file|max:10000|mimes:png,jpg,jpeg',
        ], [
            'fecha_ini.after_or_equal' => 'El campo fecha de inicio debe ser una fecha posterior a hoy.',
            'fecha_fin.after_or_equal' => 'El campo fecha de finalización debe ser una fecha posterior a hoy.',

        ]);
        // dd(Helpers::__fileUpload($request, 'imagen', 'publicaciones'));

        if ($idImage = Helpers::__fileUpload($request, 'imagen', 'publicaciones')) {
            PublicacionModel::create([
                'titulo' => $request->titulo,
                'id_usuario' => Auth::id(),
                'descripcion' => $request->descripcion,
                'tipo' => $request->tipo,
                'fecha_ini' => $request->fecha_ini,
                'fecha_fin' => $request->fecha_fin,
                'direccion' => $request->direccion,
                'estado' => $request->estado ?? '1',
                'id_multimedia' => $idImage,
            ]);
            return redirect()->route('admin-publicacion.index')->with('success', 'Publicación creada exitosamente!');
        }
        return redirect()->route('admin-publicacion.index')->with('error', 'Error al subir la imagen');
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
        $data = new PublicacionModel();
        $publicacion = $data->getAll($publicacion->id_publicacion);
        $publicacion->image = Helpers::getImage($publicacion->url);

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
                'titulo' => 'required|max:80',
                'fecha_ini' => 'required|date',
                'fecha_fin' => 'date|after_or_equal:today',
                'imagen' => 'file|max:10000|mimes:png,jpg,jpeg',
                // 'imagen' => '',
                'tipo' => 'required',

            ],
            [
                'fecha_fin.after_or_equal' => 'El campo fecha de finalización debe ser una fecha posterior a hoy.',
            ]
        );

        $idImagen = Helpers::__fileUpload($request, 'imagen', 'publicaciones', $request->id_multimedia);
        $publicacion->update(array_merge([
            'titulo' => $request->titulo,
            'id_usuario' => Auth::id(),
            'descripcion' => $request->descripcion,
            'tipo' => $request->tipo,
            'fecha_ini' => $request->fecha_ini,
            'fecha_fin' => $request->fecha_fin,
            'direccion' => $request->direccion,
            'estado' => $request->estado ?? '1',
        ], $idImagen ? ['id_multimedia' => $idImagen] : []));

        // Redirigir con un mensaje de éxito
        return redirect()->route('admin-publicacion.index')->with('success', 'Publicación actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PublicacionModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicacionModel $publicacion)
    {
        $publicacion->update(['estado' => '0']);
        return redirect()->route('admin-publicacion.index')->with('success', 'Publicación eliminada exitosamente!');
    }
}
