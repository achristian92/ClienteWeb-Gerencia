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
            // 'base_uri' => 'http://localhost/wsminkayg/public/',

        ]);

        $response = $client->request('GET', 'api/usuarios');
        // $response->headers->set('Content-Type', 'application/json');

        $indexusu = json_decode($response->getBody()->getContents());
        // return $response;

        return view('users.users', compact('indexusu'));

    }
    public function we_edit($id)
    {

        $client = new Client([

            'base_uri' => 'http://192.81.219.5/',
            // 'base_uri' => 'http://localhost/wsminkayg/public/',

        ]);

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

        // $client = new GuzzleHttp\Client();
        $client = new Client([

            // 'base_uri' => 'http://192.81.219.5/',
            'base_uri' => 'http://localhost/wsminkayg/public/',

        ]);
        $response = $client->request('POST', 'api/usuarios/', [

            'field_name'  => 'abc',
            'other_field' => '123',

        ]);

    }
    public function we_destroy($id)
    {

        // return view('users.edit_user');

    }
}
