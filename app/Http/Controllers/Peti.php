<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DateTime;

class Peti extends Controller
{   
    private $HTTP = "https://api.portaldatransparencia.gov.br/api-de-dados/peti-por-cpf-ou-nis";

    public function index(Request $request){
       
        //$response = $this->request($request);
        //$this->getAuxilio($request);
        //dd($this->getAuxilio($request));
        
        $array = $this->getAuxilio($request);
        
        return response()->json($array);
    }


    private function getAuxilio($request){

        $pagina = 1;
        $data   = collect();

        do{
            $response = $this->request($request->input("codigo"),$pagina);
            $data = $data->merge($response->toArray());
            $pagina++;
        }while($pagina <= 10);

        return $data->toArray();
    }

    private function request($cpf,$pagina){
        $response = Http::withHeaders(
            [
                'chave-api-dados' => env('TOKEN_AUXILIO'),
            ]
        )->get($this->HTTP,
            [
                'codigo' => $cpf,
                'pagina' => $pagina
            ]
        );

        return $response->collect();
    }

}
