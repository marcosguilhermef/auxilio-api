<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConsultarAuxilio extends Controller
{   
    private $HTTP = "https://api.portaldatransparencia.gov.br/api-de-dados/auxilio-emergencial-por-cpf-ou-nis";

    public function index(Request $request){
        
        $page = intval($request->input("pagina"));
        $data = collect();
        $response = $this->request($request,$page);
        do{
            $response = $this->request($request,$page);
            $data = $data->merge($response->toArray());
            $page++;
        }
        while(!$response->isEmpty());

        return response()->json($data);
    }

    private function request(Request $request, $pagina = 1){
        $response = Http::withHeaders(
            [
                'chave-api-dados' => env('TOKEN_AUXILIO'),
            ]
        )->get($this->HTTP,
            [
                'pagina'             => $pagina,
                'codigoBeneficiario' => $request->input("cpf"),
            ]
        );

        return $response->collect();
    }
}
