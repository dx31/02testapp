@extends('../layouts/app', ['titulo'=> 'Editor de usuarios' ])
@section('content')
<div class="mb-4 max-w-xs">
    <form action="{{route('usuarios.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">
        {{csrf_field() }}
        <input type="hidden" name="id" value="{{$usuario['id']??''}}">
        <div class="mb-4">
            <label  class="block text-gray-700 text-sm font-bold mb-2" id="nombre" for="nombre">Nombre</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" name="nombre" value="{{ $usuario['nombre']??'' }}">
        </div>
        <div class="mb-4">
            <label  class="block text-gray-700 text-sm font-bold mb-2" id="nombre" for="apellido">Apellido</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" name="apellido" value="{{ $usuario['apellido']??'' }}">
        </div>
        <div class="mb-4">
            <label  class="block text-gray-700 text-sm font-bold mb-2" id="nombre" for="correo">Correo</label>
            <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="email" name="correo" value="{{ $usuario['correo']??'' }}">
        </div>
        <div class="mb-4">
            <label  class="block text-gray-700 text-sm font-bold mb-2" id="nombre" for="telefono">Teléfono</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="email" name="telefono" value="{{ $usuario['telefono']??'' }}">
        </div>
        <div class="mb-4">
            <label  class="block text-gray-700 text-sm font-bold mb-2" id="nombre" for="password">Contraseña</label>
            <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="password" name="password">
        </div>
        <div class="mb-4">
            <label  class="block text-gray-700 text-sm font-bold mb-2" id="nombre" for="repassword">Repetir contraseña</label>
            <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="password" name="repassword">
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
            <a href={{route('usuarios.index')}} class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cancelar</a>
        </div>
    </form>
</div>
@endsection
