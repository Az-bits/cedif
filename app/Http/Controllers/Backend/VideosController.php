<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\InstitucionModel;
use App\Models\VideosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideosController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->title = 'Videos';
        $this->page = 'videos';
    }
    public function index()
    {
        $videos = VideosModel::where('estado', '1')->get();
        $this->data['videos'] = $videos;
        return $this->render("videos.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->render("videos.form");
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
            'enlace' => 'required|url|regex:/^(https:\/\/www\.youtube\.com\/watch\?v=)([a-zA-Z0-9_-]{11})$/',
        ]);
        VideosModel::create([
            'titulo' => $request->titulo,
            'id_usuario' => Auth::id(),
            'descripcion' => $request->descripcion,
            'enlace' => $request->enlace,
            'estado' => '1',
        ]);
        return redirect()->route('admin-videos.index')->with('success', 'Video registrado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideosModel  $videosModel
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideosModel  $videosModel
     * @return \Illuminate\Http\Response
     */
    public function edit(VideosModel $video)
    {
        $this->data['video'] = $video;
        return $this->render('videos.edit-form');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VideosModel  $videosModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideosModel $video)
    {
        $request->validate(
            [
                'titulo' => 'required|max:80',
                'enlace' => 'required|url|regex:/^(https:\/\/www.youtube.com\/watch\?v=)([a-zA-Z0-9]{11})$/',
            ]
        );
        $video->update($request->all());
        return redirect()->route('admin-videos.index')->with('success', 'Datos de video actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideosModel  $videosModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideosModel $video)
    {
        $video->update(['estado' => '0']);
        return redirect()->route('admin-videos.index')->with('success', 'Video eliminado exitosamente!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideosModel  $videosModel
     * @return \Illuminate\Http\Response
     */
    public function canalYT()
    {
        $institucion = InstitucionModel::find(1);
        $this->page = 'canal';
        $this->data['institucion'] = $institucion;
        return $this->render("videos.canal-info");
    }
}
