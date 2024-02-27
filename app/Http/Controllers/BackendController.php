<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class BackendController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $name = null;
    public $data = [];
    public $title = null;
    public $page = null;

    public function index()
    {
        $this->name = 'Edwin';
    }
    public function render($view)
    {
        $this->data['title'] = $this->title;
        $this->data['page'] = $this->page;
        $data = $this->data;
        return view('backend.' . $view, compact('data'));
    }
}
