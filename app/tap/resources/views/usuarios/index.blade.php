@extends('../layouts/app', ['titulo'=> 'Administración de usuarios' ])
@section('content')
<div>
    <form action="{{route('usuarios.index') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
        <input type="text" name="search" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Texto a Buscar">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
        <a href="{{route('usuarios.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo</a>
    </div>
    </form>
    @if($usuarios ?? [])
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-4">Correo</th>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach(($usuarios ?? []) as $a)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $a['correo'] }} </td>
                    <td class="px-6 py-3">{{ $a['nombre'] }} {{ $a['apellido'] }} </td>
                    <td class="px-6 py-2">
                        <a href="{{route('usuarios.show', ['']) }}/{{ $a['id'] }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            Editar
                        </a>
                        <a href="{{route('usuarios.promptdelete', ['']) }}/{{ $a['id'] }}" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                            Eliminar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
