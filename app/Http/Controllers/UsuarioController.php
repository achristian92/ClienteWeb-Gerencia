<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

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

        $response = $client->request('GET', 'api/usuarios/'.$id);       
        $user2 = json_decode($response->getBody()->getContents());
        //      $user  = $user2->data;
        $statuscode = $response->getStatusCode();
  
       try{
          if($user2->status === "ok"){              
            $user  = $user2->data;
            return view('users.edit_user', compact('user'));
            }
       }catch (ClientException $e){
        echo Psr7\str($e->getRequest());
        echo Psr7\str($e->getResponse());
       }
         return redirect()->route('usuario.index')->with('mensajeuser',"No se Encontro el Usuario");  
    }
    public function we_update(Request $request , $id)
    {  
        $valoraccweb  = ($request->accweb == 1) ? "SI" : "NO";
        $valoraccapp = ($request->accapp == 1) ? "SI" : "NO";
        
       
        $client = new Client(['base_uri' => 'http://192.81.219.5/',]);
        $response = $client->request('put', 'api/usuarios/'.$id, [  
        'form_params' => [
        'name'      => $request->name,
        'apellidos' => $request->apellidos,
        'telefono'  => $request->telefono,
        'email'     => $request->email,
        'password'  => $request->password,
        'accesoWeb' => $valoraccweb,
        'accesoApp' => $valoraccapp,
        ]
        ]);

         $age_su   = json_decode($response->getBody()->getContents());
         return  redirect()->route('usuario.index')->with('mensajeuser','Se Actualizo correctamente el usuario');
    }
    public function we_destroy($id)
    {


    }
}
