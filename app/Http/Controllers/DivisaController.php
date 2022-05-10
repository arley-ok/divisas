<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DivisaController extends Controller
{

    public function __construct()
    {
        $response = Http::get('https://www.dolarsi.com/api/api.php?type=valoresprincipales');
        $this->divisas = $response->json();
    }

    public function principal(){

        $divisas = $this->divisas;
        $vista = ['Dolar Oficial', 'Dolar Blue'];


        return view('divisas', ['divisas' => $divisas, 'vista' => $vista]);
    }

    public function secundaria($divisa){

        $divisas = $this->divisas;

        $vista = array(urldecode($divisa));

        return view('divisas', ['divisas' => $divisas, 'vista' => $vista]);
    }


}
