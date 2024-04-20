<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('usuarios.index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    //
    return redirect()->route('usuarios.index');
});

Route::post('/login', '\App\Http\Controllers\AuthController@authenticate')->name('login.post');


Route::resource('/usuarios', '\App\Http\Controllers\UsuarioController');
Route::get('/usuarios/delete/{id}', '\App\Http\Controllers\UsuarioController@promptDelete')->name('usuarios.promptdelete');
Route::post('/usuarios/delete', '\App\Http\Controllers\UsuarioController@borrarUsuario')->name('usuarios.borrarUsuario');
