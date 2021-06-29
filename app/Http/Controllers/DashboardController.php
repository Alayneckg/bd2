<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Estados;
use App\Models\CovidBrasil;
use App\Models\CovidMundo;
use App\Models\CovidEstados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class DashboardController extends Controller
{
    public function dashboard(){
        $covid_data = 'y';
        $response = (Http::get('https://api.covid19tracking.narrativa.com/api/countries/brazil/regions'))->json();
        $hoje = (new DateTime())->format('Y-m-d');
        $ontem = (new DateTime())->modify('-1 day')->format('Y-m-d');
        $url = "https://api.covid19tracking.narrativa.com/api/".$hoje."/country/brazil";
        $covid = (Http::get($url))->json();
        if(isset($covid['total'])){
            $covidTotal = $covid['total'];
            $covidBrasil = $covid['dates'][$hoje]['countries']['Brazil'];
            // Banco com dados do Mundo
            if(CovidMundo::where(['data'=>$covidTotal['date']])->exists()){
                // banco atualizado
            }else{
                // adicionar dado no banco
                CovidMundo::create(
                    [
                        'data' => $covidTotal['date'],
                        'confirmado_total' => $covidTotal['today_confirmed'],
                        'confirmado_hoje' => $covidTotal['today_new_confirmed'],
                        'recuperado_total' => $covidTotal['today_recovered'],
                        'recuperado_hoje' => $covidTotal['today_new_recovered'],
                        'morte_total' => $covidTotal['today_deaths'],
                        'morte_hoje' => $covidTotal['today_new_deaths'],
                    ]
                );
            }

            // Banco com dados do Brasil
            if(CovidBrasil::where(['data'=>$covidTotal['date']])->exists()){
                // banco atualizado
            }else{
                // adicionar dado no banco
                CovidBrasil::create(
                    [
                        'data' => $covidTotal['date'],
                        'confirmado_total' => $covidBrasil['today_confirmed'],
                        'confirmado_hoje' => $covidBrasil['today_new_confirmed'],
                        'recuperado_total' => $covidBrasil['today_recovered'],
                        'recuperado_hoje' => $covidBrasil['today_new_recovered'],
                        'morte_total' => $covidBrasil['today_deaths'],
                        'morte_hoje' => $covidBrasil['today_new_deaths'],
                    ]
                );
            }

            // Banco com dados dos Estados Brasileiros
            if(CovidEstados::where(['data'=>$covidTotal['date']])->exists()){
                // banco atualizado
            }else{
                // adicionar dado no banco
                foreach($covid['dates'][$hoje]['countries']['Brazil']['regions'] as $estados){
                    CovidEstados::create(
                        [
                            'data' => $covidTotal['date'],
                            'estado_id' => $estados['id'],
                            'estado_nome' => $estados['name'],
                            'confirmado_total' => $estados['today_confirmed'],
                            'confirmado_hoje' => $estados['today_new_confirmed'],
                            'recuperado_total' => $estados['today_recovered'],
                            'recuperado_hoje' => $estados['today_new_recovered'],
                            'morte_total' => $estados['today_deaths'],
                            'morte_hoje' => $estados['today_new_deaths'],
                        ]
                    );
                }
            }
        }else{
            $url2 = "https://api.covid19tracking.narrativa.com/api/".$ontem."/country/brazil";
            $covid = (Http::get($url2))->json();
            $covidTotal = $covid['total'];
            $covidBrasil = $covid['dates'][$ontem]['countries']['Brazil'];
        }

        // dd($hoje,$covidTotal);
        return view('welcome',[
            'covidTotal' => $covidTotal,
            'covidBrasil' => $covidBrasil,
            ]
        );

    }

    public function banco(){

        $dadosMundo = CovidMundo::all();
        $dadosBrasil = CovidBrasil::all();
        $dadosEstados = CovidEstados::all();
        return view('banco',[
            'dadosMundo' => $dadosMundo,
            'dadosBrasil' => $dadosBrasil,
            'dadosEstados' => $dadosEstados,
            ]
        );

    }


    public function saveRegion(){
        $regiao = Http::get('https://api.covid19tracking.narrativa.com/api/countries/brazil/regions');
        $regioes = $regiao["countries"][0]["brazil"];
        foreach($regioes as $regiao){
            Regiao::create(
                [
                    'id' => $regiao['id'],
                    'name' => $regiao['name'],
                ]
            );
        }
    }

    public function saveCovid(){
        $regiao = Http::get('https://api.covid19tracking.narrativa.com/api/countries/brazil/regions');
        $regioes = $regiao["countries"][0]["brazil"];
        foreach($regioes as $regiao){
            Regiao::create(
                [
                    'id' => $regiao['id'],
                    'name' => $regiao['name'],
                ]
            );
        }
    }

    public function reports(Request $request){

    }
}
