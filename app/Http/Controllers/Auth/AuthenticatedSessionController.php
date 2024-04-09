<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\RolesModel;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $usuario = User::where('email', $request->email)->first();
        if ($usuario->estado == 2) {
            return redirect()->back()->withErrors(['email' => 'Su usuario esta inactivo, contactarse con el administrador.']);
        }
        $request->authenticate();
        $request->session()->regenerate();

        // dd(Auth::user());
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function index()
    {
        $users =  new User();
        $users = $users->getUsers();
        // dd($users);
        $data['title'] = 'Usuarios';
        $data['page'] = 'usuarios';
        $data['usuarios'] = $users;
        return view('auth.index', compact('data'));
    }
}
