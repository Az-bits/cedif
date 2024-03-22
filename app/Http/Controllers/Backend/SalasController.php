<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\MultimediaModel;
use App\Models\PublicacionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Helpers\Helpers;
use App\Models\SalasModel;
use Illuminate\Support\Facades\DB;

class SalasController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->title = 'Salas';
        $this->page = 'salas';
    }
    public function index()
    {
        $data = new SalasModel();
        // dd($salas->getAll());
        $salas = $data->getAll();
        foreach ($salas as $s) {
            $s->image = Helpers::getImage($s->url);
        }

        $this->data['salas'] = $salas;

        return $this->render("salas.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->render("salas.form");
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
            'nombre' => 'required|max:90|string',
            'subtitulo' => 'required|max:255|string',
            'descripcion' => 'string',
            'imagen' => 'required|file|max:10000|mimes:png,jpg,jpeg',
            'cupo' => 'required|numeric'
        ]);
        if ($idImage = Helpers::__fileUpload($request, 'imagen', 'salas')) {
            $idSala = SalasModel::insertGetId([
                'id_usuario' => Auth::id(),
                'nombre' => $request->nombre,
                'subtitulo' => $request->subtitulo,
                'descripcion' => $request->descripcion,
                'cupo' => $request->cupo,
                'estado' => $request->estado ?? '1',
            ]);
            DB::table('multimedia_salas')->insert([
                'id_multimedia' => $idImage,
                'id_sala' => $idSala,
                'rango' => 1,
            ]);
            return redirect()->route('admin-salas.index')->with('success', 'Sala creada exitosamente!');
        }
        return redirect()->route('admin-salas.index')->with('error', 'Error al subir la imagen');
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
     * @param  \App\Models\SalasModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SalasModel $sala)
    {
        $data = new SalasModel();
        $sala = $data->getAll($sala->id_sala);
        $sala->image = Helpers::getImage($sala->url);
        $this->data['sala'] = $sala;

        return $this->render('salas.edit-form');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalasModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalasModel $sala)
    {
        $request->validate(
            [
                'nombre' => 'required|max:90|string',
                'subtitulo' => 'required|max:255|string',
                'descripcion' => 'string',
                'imagen' => 'file|max:10000|mimes:png,jpg,jpeg',
                'cupo' => 'required|numeric'
            ]
        );
        $data = new SalasModel();
        $sala = $data->getAll($sala->id_sala);
        $idImagen = Helpers::__fileUpload($request, 'imagen', 'salas', $sala->id_multimedia);
        $sala->update([
            'id_usuario' => Auth::id(),
            'nombre' => $request->nombre,
            'subtitulo' => $request->subtitulo,
            'descripcion' => $request->descripcion,
            'cupo' => $request->cupo,
            'estado' => $request->estado ?? '1',
        ]);

        // DB::table('multimedia_salas')->where('id_sala', $sala->id_sala)->update(array_merge([
        //     'id_sala' => $idSala,
        // ], $idImagen ? ['id_multimedia' => $idImagen] : []));

        // Redirigir con un mensaje de éxito
        return redirect()->route('admin-salas.index')->with('success', 'Sala actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalasModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalasModel $sala)
    {
        $sala->update(['estado' => '0']);
        return redirect()->route('admin-salas.index')->with('success', 'Salas eliminada exitosamente!');
    }
}
