<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Estados;
use App\Models\CovidBrasil;
use App\Models\CovidMundo;
use App\Models\CovidEstados;
use App\Models\RelatorioBrasil;
use App\Models\RelatorioEstado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class DashboardController extends Controller
{
    public function welcome(){
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

    public function relatorioPost(Request $request){
        $casos_total = null;
        $casos_diario = null;
        $recuperados_total = null;
        $recuperados_diario = null;
        $mortes_total = null;
        $mortes_diario = null;
        foreach($request['campos'] as $campos){
            if($campos == 'casos_total'){
                $casos_total = true;
            }elseif($campos == 'casos_diario'){
                $casos_diario = true;
            }elseif($campos == 'recuperados_total'){
                $recuperados_total = true;
            }elseif($campos == 'recuperados_diario'){
                $recuperados_diario = true;
            }elseif($campos == 'mortes_total'){
                $mortes_total = true;
            }elseif($campos == 'mortes_diario'){
                $mortes_diario = true;
            }
        }

        if($request['fonte'] == 'estados'){
            RelatorioEstado::create(
                [
                    'data' => $request['daterange'],
                    'grafico' => $request['grafico'],
                    'estado' => $request['estados'],
                    'confirmado_total' => $casos_total,
                    'confirmado_hoje' => $casos_diario,
                    'recuperado_total' => $recuperados_total,
                    'recuperado_hoje' => $recuperados_diario,
                    'morte_total' => $mortes_total,
                    'morte_hoje' => $mortes_diario,
                ]
            );
        }else{
            RelatorioBrasil::create(
                [
                    'data' => $request['daterange'],
                    'grafico' => $request['grafico'],
                    'confirmado_total' => $casos_total,
                    'confirmado_hoje' => $casos_diario,
                    'recuperado_total' => $recuperados_total,
                    'recuperado_hoje' => $recuperados_diario,
                    'morte_total' => $mortes_total,
                    'morte_hoje' => $mortes_diario,
                ]
            );
        }

        return redirect(route('geradas'));;
    }

    public function relatorioGet(){

        return view('consulta');
    }

    public function relatorioGerados(){

        $relatorioBrasil = RelatorioBrasil::get();
        $relatorioEstado = RelatorioEstado::get();
        $dadosBrasil = CovidBrasil::orderBy('data', 'ASC')->get();
        $dadosEstados = CovidEstados::orderBy('data', 'ASC')->get();
        foreach($relatorioBrasil as $brasil){
            $date = explode(' - ',$brasil->data);
            $dataI = implode('-', array_reverse(explode('/', $date[0])));
            $dataF =  implode('-', array_reverse(explode('/', $date[1])));
            $casos_total = ''; $casos_diario = '';  $recuperados_total = '';  $recuperados_diario = ''; $mortes_total = ''; $mortes_diario = ''; $datas = [];
            $aux_datas = 0;
            foreach($dadosBrasil as $dados){
                if($dados->data >= $dataI && $dados->data <= $dataF){
                    $datas[$aux_datas] = $dados->data;
                    if($brasil->confirmado_total == 1){
                        $casos_total .= "$dados->confirmado_total, ";
                    }
                    if($brasil->confirmado_hoje == 1){
                        $casos_diario .= "$dados->confirmado_hoje, ";
                    }
                    if($brasil->recuperado_total == 1){
                        $recuperados_total .= "$dados->recuperado_total, ";
                    }
                    if($brasil->recuperado_hoje == 1){
                        $recuperados_diario .= "$dados->recuperado_hoje, ";
                    }
                    if($brasil->morte_total == 1){
                        $mortes_total .= "$dados->morte_total, ";
                    }
                    if($brasil->morte_hoje == 1){
                        $mortes_diario .= "$dados->morte_hoje, ";
                    }
                    $aux_datas++;
                }
            }
            $teste = $brasil;
            $brasil->dados = new \stdClass();
            $brasil->intervalo = $datas;
            if(!empty($casos_total)){
                $brasil->dados->casos_total = "[$casos_total]";
            }
            if(!empty($casos_diario)){
                $brasil->dados->casos_diario = "[$casos_diario]";
            }
            if(!empty($recuperados_total)){
                $brasil->dados->recuperados_total = "[$recuperados_total]";
            }
            if(!empty($recuperados_diario)){
                $brasil->dados->recuperados_diario = "[$recuperados_diario]";
            }
            if(!empty($mortes_total)){
                $brasil->dados->mortes_total = "[$mortes_total]";
            }
            if(!empty($mortes_diario)){
                $brasil->dados->mortes_diario = "[$mortes_diario]";
            }
        }

        foreach($relatorioEstado as $estado){
            $date = explode(' - ',$estado->data);
            $dataI = implode('-', array_reverse(explode('/', $date[0])));
            $dataF =  implode('-', array_reverse(explode('/', $date[1])));
            $casos_total = ''; $casos_diario = '';  $recuperados_total = '';  $recuperados_diario = ''; $mortes_total = ''; $mortes_diario = ''; $datas = [];
            $aux_datas = 0;
            foreach($dadosEstados as $dados){
                if($dados->estado_id == $estado->estado){
                    if($dados->data >= $dataI && $dados->data <= $dataF){
                        $datas[$aux_datas] = $dados->data;
                        if($estado->confirmado_total == 1){
                            $casos_total .= "$dados->confirmado_total, ";
                        }
                        if($estado->confirmado_hoje == 1){
                            $casos_diario .= "$dados->confirmado_hoje, ";
                        }
                        if($estado->recuperado_total == 1){
                            $recuperados_total .= "$dados->recuperado_total, ";
                        }
                        if($estado->recuperado_hoje == 1){
                            $recuperados_diario .= "$dados->recuperado_hoje, ";
                        }
                        if($estado->morte_total == 1){
                            $mortes_total .= "$dados->morte_total, ";
                        }
                        if($estado->morte_hoje == 1){
                            $mortes_diario .= "$dados->morte_hoje, ";
                        }
                        $aux_datas++;
                    }
                }
            }
            $teste = $estado;
            $estado->dados = new \stdClass();
            $estado->intervalo = $datas;
            if(!empty($casos_total)){
                $estado->dados->casos_total = "[$casos_total]";
            }
            if(!empty($casos_diario)){
                $estado->dados->casos_diario = "[$casos_diario]";
            }
            if(!empty($recuperados_total)){
                $estado->dados->recuperados_total = "[$recuperados_total]";
            }
            if(!empty($recuperados_diario)){
                $estado->dados->recuperados_diario = "[$recuperados_diario]";
            }
            if(!empty($mortes_total)){
                $estado->dados->mortes_total = "[$mortes_total]";
            }
            if(!empty($mortes_diario)){
                $estado->dados->mortes_diario = "[$mortes_diario]";
            }
        }

        // dd($relatorioEstado, $relatorioBrasil);
        return view('geradas', [
            'relatorioBrasil' => $relatorioBrasil,
            'relatorioEstado' => $relatorioEstado,
        ]);
    }

    public function dashboard(){
        $dadosBrasil = CovidBrasil::orderBy('data', 'ASC')->get();
        $dadosEstados = CovidEstados::orderBy('data', 'ASC')->get();

        // dd($dadosBrasil[90]);
        return view('dashboard', [
            'dadosBrasil' => $dadosBrasil,
            'dadosEstados' => $dadosEstados,
        ]);
    }

    public function relatorioUpdate(Request $request, $id, $tipo)
    {
        if($tipo == 'estado'){
            $casos_total = null;
            $casos_diario = null;
            $recuperados_total = null;
            $recuperados_diario = null;
            $mortes_total = null;
            $mortes_diario = null;
            foreach($request['campos'] as $campos){
                if($campos == 'casos_total'){
                    $casos_total = true;
                }elseif($campos == 'casos_diario'){
                    $casos_diario = true;
                }elseif($campos == 'recuperados_total'){
                    $recuperados_total = true;
                }elseif($campos == 'recuperados_diario'){
                    $recuperados_diario = true;
                }elseif($campos == 'mortes_total'){
                    $mortes_total = true;
                }elseif($campos == 'mortes_diario'){
                    $mortes_diario = true;
                }
            }
            $dadosEstados = RelatorioEstado::findOrFail($id);
            $dadosEstados->update(
                array(
                    'data' => $request['daterange'],
                    'grafico' => $request['grafico'],
                    'estado' => $request['estados'],
                    'confirmado_total' => $casos_total,
                    'confirmado_hoje' => $casos_diario,
                    'recuperado_total' => $recuperados_total,
                    'recuperado_hoje' => $recuperados_diario,
                    'morte_total' => $mortes_total,
                    'morte_hoje' => $mortes_diario,
                )
            );
        }elseif($tipo == 'brasil'){
            $casos_total = null;
            $casos_diario = null;
            $recuperados_total = null;
            $recuperados_diario = null;
            $mortes_total = null;
            $mortes_diario = null;
            foreach($request['campos'] as $campos){
                if($campos == 'casos_total'){
                    $casos_total = true;
                }elseif($campos == 'casos_diario'){
                    $casos_diario = true;
                }elseif($campos == 'recuperados_total'){
                    $recuperados_total = true;
                }elseif($campos == 'recuperados_diario'){
                    $recuperados_diario = true;
                }elseif($campos == 'mortes_total'){
                    $mortes_total = true;
                }elseif($campos == 'mortes_diario'){
                    $mortes_diario = true;
                }
            }
            $dadosBrasil = RelatorioBrasil::findOrFail($id);
            $dadosBrasil->update(
                array(
                    'data' => $request['daterange'],
                    'grafico' => $request['grafico'],
                    'confirmado_total' => $casos_total,
                    'confirmado_hoje' => $casos_diario,
                    'recuperado_total' => $recuperados_total,
                    'recuperado_hoje' => $recuperados_diario,
                    'morte_total' => $mortes_total,
                    'morte_hoje' => $mortes_diario,
                )
            );

        }
        return redirect(route('geradas'));;
    }
}
