<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class UsuarioController extends Controller
{
    public function we_index()
    {
        $client = new Client([

            'base_uri' => 'http://192.81.219.5/',

        ]);

        $response = $client->request('GET', 'api/usuarios');
        // $response->headers->set('Content-Type', 'application/json');

        $getall = json_decode($response->getBody()->getContents());
        // return $response;
        $indexusu = $getall->data;
        return view('users.users', compact('indexusu'));

    }
     public function we_create()
    {
        return view('users.create_user');

    }
     public function we_store(Request $request)
    {
        $valoraccweb  = ($request->accweb == 1) ? "SI" : "NO";
        $valoraccapp = ($request->accapp == 1) ? "SI" : "NO";
        
        $client = new Client(['base_uri' => 'http://192.81.219.5/',]);
        
        $response = $client->request('POST', 'api/usuarios', [  
        'form_params' => [
        'name' => $request->name,
        'apellidos' => $request->apellidos,
        'telefono' => $request->telefono,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'accesoWeb' => $valoraccweb,
        'accesoApp' => $valoraccapp,
        ]
        ]);
     
         $age_su   = json_decode($response->getBody()->getContents());
       
        
         return  redirect()->route('usuario.index')->with('mensajeuser','Se Registro correctamente un nuevo Usuario');

    }
    public function we_edit($id)
    {

        $client = new Client(['base_uri' => 'http://192.81.219.5/',]);

        $response = $client->request('GET', 'api/usuarios/' . $id);
        //Necesitas desempaquetar el objecto
        //El resultado de la funcion json_decode() devuelve un array de una posición;
        //Posteriormente puedes crear un arreglo vacío y asignarle en el indice 'user' el objeto $user
        // $data = [];
        // $data['user'] = $user

        $user = json_decode($response->getBody()->getContents())[0];
        return view('users.edit_user', compact('user'));

        // $data = [];
        // $data['user'] = $user;

    }
    public function we_update()
    {

       
    }
    public function we_destroy($id)
    {


    }
}
