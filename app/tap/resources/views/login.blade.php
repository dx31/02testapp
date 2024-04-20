<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html class="no-js" lang="es"><!--<![endif]--><!-- BEGIN HEAD -->
<head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div class="rounded-t-lg overflow-hidden border-t border-l border-r border-gray-400 px-3 py-10 bg-gray-200 flex justify-center">
    <form method="post" action="{{ route('login.post') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      {{ csrf_field() }}
      <div class="mb-4">
        <label  class="block text-gray-700 text-sm font-bold mb-2"  for="usuario">Correo</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          type="email" name="usuario"/>
      </div>
      <div class="mb-4">
        <label  class="block text-gray-700 text-sm font-bold mb-2"  for="password">Contraseña</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          type="password" name="password"/>
      </div>
      <div class="mb-4">
        <button type="submit" class="block full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Iniciar sesion</button>
      </div>
      </form>
  </div>

</body>
</html>
