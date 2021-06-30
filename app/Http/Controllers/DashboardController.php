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
            if(isset($covid['total'])){
                $covidTotal = $covid['total'];
                $covidBrasil = $covid['dates'][$ontem]['countries']['Brazil'];
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
                    foreach($covid['dates'][$ontem]['countries']['Brazil']['regions'] as $estados){
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
            }
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


    public function popular(){
        return view('popular');
    }

    public static function mes($mes, $ano){

        function get_dates($month,$year){
            $numbers = array('1','2','3','4','5','6','7','8','9');
            $datesArray = array();
            $num_of_days = date('t',mktime (0,0,0,$month,1,$year));
            for( $i=1; $i<= $num_of_days; $i++) {
                if(in_array($i,$numbers)) $i = '0'.$i;
                $datesArray[]= $year . "-". $month. "-". $i;
            }
            return $datesArray;
        }
        $datesArray = get_dates($mes, $ano);
        foreach($datesArray as $date){
            $url = "https://api.covid19tracking.narrativa.com/api/".$date."/country/brazil";
            $covid = (Http::get($url))->json();
            if(isset($covid['total'])){
                $covidTotal = $covid['total'];
                $covidBrasil = $covid['dates'][$date]['countries']['Brazil'];

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
                    foreach($covid['dates'][$date]['countries']['Brazil']['regions'] as $estados){
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
            }
        }

        $dadosMundo = CovidMundo::all();
        $dadosBrasil = CovidBrasil::all();
        $dadosEstados = CovidEstados::all();
        // redirect view('banco',[
        //     'dadosMundo' => $dadosMundo,
        //     'dadosBrasil' => $dadosBrasil,
        //     'dadosEstados' => $dadosEstados,
        //     ]
        // );
        return redirect(route('banco'));
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
