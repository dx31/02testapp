<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = [
            'correo' => $request['usuario'],
            'password' => $request['password'],
        ];
        //$usuario = Usuario::where('correo', $request['usuario'])->first();
        //dd($usuario);
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withError([
            'correo' => 'Credenciales inválidas'
        ]);

    }
    //
}
