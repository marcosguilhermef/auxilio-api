<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConsultarAuxilio extends Controller
{   
    private $HTTP = "https://api.portaldatransparencia.gov.br/api-de-dados/auxilio-emergencial-por-cpf-ou-nis";

    public function index(Request $request){
        $response = Http::withHeaders(
            [
                'chave-api-dados' => env('TOKEN_AUXILIO'),
            ]
        )->get($this->HTTP,
            [
                'pagina'             => $request->input("pagina"),
                'codigoBeneficiario' => $request->input("cpf"),
            ]
        );
        return $response->json();
    }
}
