<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\VideosModel;
use Illuminate\Http\Request;

class VideosController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->title = 'Videos';
        $this->page = 'videos';
        return $this->render("videos.index");
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideosModel  $videosModel
     * @return \Illuminate\Http\Response
     */
    public function show(VideosModel $videosModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideosModel  $videosModel
     * @return \Illuminate\Http\Response
     */
    public function edit(VideosModel $videosModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VideosModel  $videosModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideosModel $videosModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideosModel  $videosModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideosModel $videosModel)
    {
        //
    }
}
