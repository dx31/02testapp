@extends('../layouts/app', ['titulo'=> 'Editor de usuarios' ])
@section('content')
<div class="w-full max-w-xs">
    <form action="{{route('usuarios.borrarUsuario') }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        
        <div class="mb-4">
            <label  class="block text-gray-700 text-sm font-bold mb-2" id="nombre" for="nombre">Nombre</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" value="{{ $usuario['nombre']??'' }}" disabled>
        </div>
        <div class="mb-4">
            <label  class="block text-gray-700 text-sm font-bold mb-2" id="nombre" for="apellido">Apellido</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" value="{{ $usuario['apellido']??'' }}" disabled>
        </div>
        <div class="mb-4">
            <label  class="block text-gray-700 text-sm font-bold mb-2" id="nombre" for="correo">Correo</label>
            <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="email" value="{{ $usuario['correo']??'' }}" disabled>
        </div>
        <div class="mb-4">
            <label  class="block text-gray-700 text-sm font-bold mb-2" id="nombre" for="telefono">Teléfono</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="email" value="{{ $usuario['telefono']??'' }}" disabled>
        </div>
        <div class="mb-4">
            <span>Eliminar este usuario?</span>
        </div>
        <input type="hidden" name="id" value="{{$usuario['id']??''}}">
        {{csrf_field() }}
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
            <a href={{route('usuarios.index')}} class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cancelar</a>
        </div>
    </form>
</div>
@endsection
