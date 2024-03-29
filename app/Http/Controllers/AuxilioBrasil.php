<?php

namespace App\Http\Controllers;

use DateTime;
use Date;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuxilioBrasil extends Controller
{   
    private $HTTP = "https://api.portaldatransparencia.gov.br/api-de-dados/auxilio-brasil-sacado-por-nis";

    public function index(Request $request){
       
        //$response = $this->request($request);
        //$this->getAuxilio($request);
        //dd($this->getAuxilio($request));
        
        $array = $this->getAuxilio($request);
        
        return response()->json($array);
    }


    private function getAuxilio($request){
        $output = new \Symfony\Component\Console\Output\ConsoleOutput();

        $today  = (new DateTime("2023-03"))->format("Ym");
        $day    = -24;
        $date   = (new DateTime("2023-03 ".$day." months"))->format("Ym");
        $data   = collect();

        do{
            $response = $this->request($request->input("cpf"),$date);
            $data = $data->merge($response->toArray());
            $day = $day + 1;
            $date = (new DateTime("2023-03 ".$day." months"))->format("Ym");
            $output->writeln("$date");
        }while($today != $date);

        return $data->toArray();
    }

    private function request($cpf,$date){

        $response = Http::withHeaders(
            [
                'chave-api-dados' => env('TOKEN_AUXILIO'),
            ]
        )->get($this->HTTP,
            [
                'nis' => $cpf,
                'anoMesCompetencia' => $date
            ]
        );

        return $response->collect();
    }
}
