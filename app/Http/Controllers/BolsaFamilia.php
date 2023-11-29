<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DateTime;

class BolsaFamilia extends Controller
{   
    private $HTTP = "https://api.portaldatransparencia.gov.br/api-de-dados/bolsa-familia-disponivel-por-cpf-ou-nis";

    public function index(Request $request){
       
        //$response = $this->request($request);
        //$this->getAuxilio($request);
        //dd($this->getAuxilio($request));
        
        $array = $this->getAuxilio($request);
        
        return response()->json($array);
    }


    private function getAuxilio($request){
        $today  = (new DateTime("2021-05"))->format("Ym");
        $day    = -12;
        $date   = (new DateTime("2021-05 ".$day." months"))->format("Ym");
        $data   = collect();

        do{
            $response = $this->request($request->input("cpf"),$date);
            $data = $data->merge($response->toArray());
            $day = $day + 1;
            $date = (new DateTime("2021-05 ".$day." months"))->format("Ym");
        }while($day != 0);

        return $data->toArray();
    }

    private function request($cpf,$date){
        $response = Http::withHeaders(
            [
                'chave-api-dados' => env('TOKEN_AUXILIO'),
            ]
        )->get($this->HTTP,
            [
                'codigo' => $cpf,
                'anoMesCompetencia' => $date
            ]
        );

        return $response->collect();
    }

}
