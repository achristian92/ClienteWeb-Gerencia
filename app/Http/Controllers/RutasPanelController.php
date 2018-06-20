<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class RutasPanelController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function observa()
    {

        $client = new Client([

            'base_uri' => 'http://192.81.219.5/',

        ]);

        $response = $client->request('GET', 'api/agenciassuper');
        $age_su   = json_decode($response->getBody()->getContents());

        return view('webinterfaz.Agen_Supe', compact('age_su'));
    }

    public function observashow($id)
    {

        $client = new Client([
            'base_uri' => 'http://192.81.219.5/',
        ]);

        $response = $client->request('GET', "api/agenciassuper/{$id}");
        $age_su   = json_decode($response->getBody()->getContents());

        return view('webinterfaz.observaciones', compact('age_su'));

    }
}
