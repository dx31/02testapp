<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', ['usuarios'=> $usuarios ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.editor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payload = $request->all();
        $payload['password'] = bcrypt($request['password']);

        $usuario = Usuario::updateOrCreate(['id' => $request['id'] ?? null ], $payload);

        return redirect()->route('usuarios.index')->with(['mensaje'=>'Usuario creado']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $usuario = Usuario::find($id);
        if(!$usuario)
            return redirect()->route('usuarios.index')->withErrors(['msg'=>'Usuario no encontrado']);

        return view('usuarios.editor', ['usuario'=> $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }

    public function promptDelete($id) {
        $usuario = Usuario::find($id);
        if(!$usuario)
            return redirect()->back()->withErrors(['msg'=>'Usuario no encontrado']);
        return view('usuarios.promptdelete', ['usuario'=> $usuario]);
    }

    public function borrarUsuario(Request $request) {
        $usuario = Usuario::where('id', $request['id'])->first();
        if(!$usuario) {
            return redirect()->route('usuarios.index')->withErrors(['msg'=>'Usuario no encontrado']);    
        }
        if($usuario['correo'] == \Auth::id()) {
            return redirect()->route('usuarios.index')->withErrors(['msg'=>'Un usuario no puede borrarse a sí mismo']);    
        }

        $usuario->delete();

        return redirect()->route('usuarios.index')->with(['mensaje' =>'Usuario eliminado']);
    }
}
