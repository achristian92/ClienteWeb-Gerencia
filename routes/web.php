<?php

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
use App\User;

Route::get('/', function () {
	// $usu = new User();
	// $usu->name="alan";
	// $usu->apellidos="ruiz";
	// $usu->telefono="123456";
	// $usu->email="jose@minkay.com.pe";
	// $usu->password=bcrypt('jose123');
	// $usu->accesoWeb="1";
	// $usu->accesoApp="1";
	// $usu->save();
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/agencias-supervisadas', 'RutasPanelController@observa')->name('agencias.super');

Route::get('agencia-observaciones/{cod}', 'RutasPanelController@observashow')->name('agencias.obser');

//-------------USER-----------------------------------------------------
Route::get('usuarios/index', ['as' => 'usuario.index', 'uses' => 'UsuarioController@we_index']);
Route::get('Listausuarios/create/newuser', ['as' => 'usuario.create', 'uses' => 'UsuarioController@we_create']);
Route::post('usuario', ['as' => 'usuario.store', 'uses' => 'UsuarioController@we_store']);
Route::get('Usuario/{id}', ['as' => 'usuario.edit', 'uses' => 'UsuarioController@we_edit']);
Route::post('usuario', ['as' => 'usuario.update', 'uses' => 'UsuarioController@we_update']);
Route::delete('usuario/{id}', ['as' => 'usuario.destroy', 'uses' => 'UsuarioController@we_destroy']);
//-------------------------------------------------------------------------------------------------------------