<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Helpers;
use App\Models\GaleriaModel;
use App\Models\SalasModel;
use Illuminate\Support\Facades\DB;

class GaleriaController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->title = 'Galeria';
        $this->page = 'galeria';
    }
    public function index()
    {
        $data = new GaleriaModel();
        $galeria = $data->getAll();
        foreach ($galeria as $s) {
            $s->image = Helpers::getImage($s->url);
        }

        $this->data['galeria'] = $galeria;

        return $this->render("galeria.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->render("galeria.form");
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
            'titulo' => 'required|max:90|string',
            'imagen' => 'required|file|max:10000|mimes:png,jpg,jpeg',
        ]);
        if ($idImage = Helpers::__fileUpload($request, 'imagen', 'galeria')) {
            $idGaleria = GaleriaModel::insertGetId([
                'id_usuario' => Auth::id(),
                'titulo' => $request->titulo,
                'descripcion' => $request->descripcion,
                'estado' => $request->estado ?? '1',
                'fecha_creacion' => date('Y-m-d'),
            ]);
            DB::table('multimedia_galeria')->insert([
                'id_multimedia' => $idImage,
                'id_galeria' => $idGaleria,
            ]);
            return redirect()->route('admin-galerias.index')->with('success', 'Sala creada exitosamente!');
        }
        return redirect()->route('admin-galerias.index')->with('error', 'Error al subir la imagen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GaleriaModel  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show(GaleriaModel $galeria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GaleriaModel  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = new GaleriaModel();
        $galeria = $data->getAll($id);
        $galeria->image = Helpers::getImage($galeria->url);
        $this->data['galeria'] = $galeria;

        return $this->render('galeria.edit-form');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GaleriaModel  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GaleriaModel $galeria)
    {
        $request->validate(
            [
                'titulo' => 'required|max:90|string',
                'imagen' => 'file|max:10000|mimes:png,jpg,jpeg',
            ]
        );
        $data = new GaleriaModel();
        $galeria = $data->getAll($galeria->id_galeria);
        // dd($galeria);
        $idImagen = Helpers::__fileUpload($request, 'imagen', 'galeria', $galeria->id_multimedia);
        $galeria->update([
            'id_usuario' => Auth::id(),
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ]);

        // DB::table('multimedia_salas')->where('id_sala', $sala->id_sala)->update(array_merge([
        //     'id_sala' => $idSala,
        // ], $idImagen ? ['id_multimedia' => $idImagen] : []));

        // Redirigir con un mensaje de éxito
        return redirect()->route('admin-galerias.index')->with('success', 'Imagen actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GaleriaModel  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(GaleriaModel $galeria)
    {
        $galeria->update(['estado' => '0']);
        return redirect()->route('admin-galerias.index')->with('success', 'Imagen eliminada exitosamente!');
    }
}
