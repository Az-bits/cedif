<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendController;
use App\Models\ContactoModel;
use App\Models\InstitucionModel;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ContactoController extends FrontendController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->data['institucion'] = InstitucionModel::find(1);
        return $this->render('contacto');
    }
    public function saveSolicitud(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'email' => 'required|email',
            'celular' => 'required|numeric|digits:8',
            'descripcion' => 'required|max:250',
            'ci' => 'required',
        ], [
            'ci.required' => 'La Cedula de Identidad es requerida.',
            'descripcion.required' => 'El asunto es requerido.',
        ]);
        $lastHour = Carbon::now()->subHour();
        $ip = $request->getClientIp();
        // dd($lastHour->toDateTimeString());

        $duplicateCount = ContactoModel::where('ip_cliente', $ip)
            ->where('fecha_creacion', '>', $lastHour->toDateTimeString())
            ->count();

        // dd($duplicateCount);

        if ($duplicateCount >= 2) {
            return redirect()->route('contacto')->with('error', 'Ya ha enviado más de dos solicitudes. Por favor, espere antes de enviar otra solicitud.');
        }
        ContactoModel::create([
            'ci' => $request->ci,
            'nombre' => $request->nombre,
            'email' => $request->email,
            'celular' => $request->celular,
            'descripcion' => $request->descripcion,
            'ip_cliente' => $ip,
            'estado' =>  $request->estado ?? '1'
        ]);
        return redirect()->route('contacto')->with('success', 'Solicitud enviada correctamente. Nos contactaremos con usted a su correo o whatsapp.');
    }
}
