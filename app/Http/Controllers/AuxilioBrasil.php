<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuxilioBrasil extends Controller
{   
    private $HTTP = "https://api.portaldatransparencia.gov.br/api-de-dados/auxilio-brasil-sacado-por-nis";

    public function index(Request $request){
       
        $response = $this->request($request);

        return response()->json($response->toArray());
    }

    private function request(Request $request){
        $response = Http::withHeaders(
            [
                'chave-api-dados' => env('TOKEN_AUXILIO'),
            ]
        )->get($this->HTTP,
            [
                'nis' => $request->input("cpf"),
                'anoMesCompetencia' => $request->input("anoMesCompetencia")
            ]
        );

        return $response->collect();
    }
}
