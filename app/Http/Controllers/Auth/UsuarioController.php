<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\AuthController;
use App\Models\UserModel;
use App\Models\PersonaModel;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Validation\Rules;

class UsuarioController extends AuthController
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->title = 'Usuarios';
        $this->page = 'usuarios';
    }

    public function index(): View
    {
        $users =  new UserModel();
        $users = $users->getUsers();
        // dd($users);
        $this->data['usuarios'] = $users;
        return $this->render('index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas = PersonaModel::where('estado', '1')->get();
        $this->data['personas'] = $personas;
        return $this->render('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_persona' => ['required'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . UserModel::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'rol' => ['required'],
            'id_persona.required' => 'Debe seleccionar una persona.',
            'email.unique' => 'Usuario ya fue registrado anteriormente.',
        ]);
        $user = UserModel::create([
            'email' => $request->email,
            'id_persona' => $request->id_persona,
            'estado' => $request->estado ?? '1',
            'password' => Hash::make($request->password),
        ]);
        DB::table('persona_rol')->insert([
            'id_user' => $user->id,
            'id_rol' => $request->rol,
        ]);

        event(new Registered($user));

        Auth::login($user);
        return redirect()->route('usuarios.index')->with('success', 'Usuario registrado exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserModel $UserModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = new UserModel();
        $users = $users->getUsers($id);
        $personas = PersonaModel::where('estado', '1')->get();
        $persona = PersonaModel::find($users->id_persona);
        $users->email = $persona->email;
        $this->data['personas'] = $personas;
        $this->data['persona'] = $persona;
        $this->data['usuario'] = $users;
        return $this->render('edit-form');
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PublicacionModel  $publicacionModel
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, UserModel $usuario)
    {
        $request->validate(array_merge(
            [
                'id_persona' => ['required'],
                'email' => ['required'],
                'rol' => ['required'],
                'id_persona.required' => 'Debe seleccionar una persona.',
            ],
            $request->password ? ['password' => ['confirmed', Rules\Password::defaults()]] : [],
        ));
        $usuario->update([
            'estado' => $request->estado ?? '1',
        ]);
        DB::table('persona_rol')->where('id_user', $usuario->id)->update([
            'id_rol' => $request->rol,
        ]);
        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserModel $usuario)
    {
        $usuario->update(['estado' => '0']);
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente!');
    }
}
