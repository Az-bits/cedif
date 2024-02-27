<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index()
    {

        return view('test');
    }
    public function saveVideo(Request $request)
    {
        // dd($_FILES);
        // Validar el formulario si es necesario

        $archivo = $request->file('archivo');

        // Guardar el archivo en el sistema de archivos
        $ruta = $archivo->store('uploads');


        // Puedes almacenar la ruta en la base de datos si es necesario

        return "Archivo subido exitosamente!";
    }
}
