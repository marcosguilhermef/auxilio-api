<?php

namespace App\Http\Controllers;

use DateTime;
use Date;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NovoBolsaFamilia extends Controller
{   
    private $HTTP = "https://api.portaldatransparencia.gov.br/api-de-dados/novo-bolsa-familia-sacado-por-nis";

    public function index(Request $request){
       
        //$response = $this->request($request);
        //$this->getAuxilio($request);
        //dd($this->getAuxilio($request));
        
        $array = $this->getAuxilio($request);
        
        return response()->json($array);
    }


    private function getAuxilio($request){
        $today  = (new DateTime("now"))->format("Ym");
        $day    = -12;
        $date   = (new DateTime("now ".$day." months"))->format("Ym");
        $data   = collect();

        do{
            $response = $this->request($request->input("nis"),$date);
            $data = $data->merge($response->toArray());
            $day = $day + 1;
            $date = (new DateTime("now ".$day." months"))->format("Ym");

        }while($today != $date);

        return $data->toArray();
    }

    private function request($nis,$date){

        $response = Http::withHeaders(
            [
                'chave-api-dados' => env('TOKEN_AUXILIO'),
            ]
        )->get($this->HTTP,
            [
                'nis' => $nis,
                'anoMesCompetencia' => $date
            ]
        );

        return $response->collect();
    }
}
