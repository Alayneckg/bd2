
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" type="image/x-icon" href="/assets/images/coronavirus.png" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />        <title>Covid19</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css" integrity="sha512-mxrUXSjrxl8vm5GwafxcqTrEwO1/oBNU25l20GODsysHReZo4uhVISzAKzaABH6/tTfAxZrY2FprmeAP5UZY8A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/fontawesome.css">
        <link rel="stylesheet" href="./assets/css/templatemo-seo-dream.css">
        <link rel="stylesheet" href="./assets/css/animated.css">
        <link rel="stylesheet" href="./assets/css/owl.css">
        <style>
            .label{
                font-weight: bold;
                margin-top: 25px;
                margin-bottom: 5px;
            }
            .submit{
                display: inline-block;
                background-color: #054F77;
                font-size: 15px;
                font-weight: 400;
                color: #fff;
                text-transform: capitalize;
                padding: 12px 25px;
                border-radius: 23px;
                letter-spacing: 0.25px;
                transition: all .3s;
            }
            select{
                border-radius: 23px;
                padding: 10px;
                background-color: white;
            }
            select:focus{
                outline: 0 none;
            }
            input{
                border-radius: 23px;
                padding: 10px;
                border-color: gray;
                border-width: 1px;
            }
            input:focus{
                outline: 0 none;
            }
        </style>
    </head>

    <body>
        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.html" class="logo">
                        <h4>COVID19 <img src="/assets/images/coronavirus.png" alt=""></h4>
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" >Home</a></li>
                            <li class="scroll-to-section"><a href="/dashboard">Dashboard</a></li>
                            <li class="scroll-to-section"><a href="/banco">Banco de dados</a></li>
                            <li class="scroll-to-section"><a href="/relatorio" class="active">Relatórios</a></li>
                            <li class="scroll-to-section"><a href="" ></a></li>
                        </ul>
                    </nav>
                    </div>
                </div>
            </div>
        </header>
        <div id="services" class="our-services section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <h2>Relatórios gerados</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h5 style="font-weight:bold; color: #921a25; margin: 15px; text-align: center">Filtro: Brasil</h5>
                <br>
                <div class="col-lg-8" style="margin:auto; text-align: center;">
                    @foreach($relatorioBrasil as $brasil)
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">{{ $brasil->id }} <small style="color:grey">{{ $brasil->data }}</small></h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(empty($brasil->intervalo))
                                    Dados indisponíveis para data selecionada! Gere outro relatório ou popule o banco.
                                @else
                                    <figure class="highcharts-figure">
                                        <div id="brasil-{{ $brasil->id }}"></div>
                                        <p class="highcharts-description">
                                        </p>
                                    </figure>
                                    <div class="card collapsed-card">
                                        <div class="card-header">
                                            <h3 class="card-title">Editar relatório</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form role="form" method="post" action="{{ route('relatorioUpdate',['id' => $brasil->id, 'tipo' => 'brasil']) }}">
                                                {{ csrf_field() }}
                                                <div class="row" style="text-align:center">
                                                    <div class="col-lg-6">
                                                        <label class="label">Intervalo de datas</label>
                                                        <br>
                                                        <input type="text" required name="daterange" value="{{ isset($brasil) ? $brasil->data : ''}}" />
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="label">Fonte de dados</label>
                                                        <br>
                                                        <select disabled id="fonte" name="fonte">
                                                            <option value="brasil" selected >Brasil</option>
                                                            <option value="estados">Estados brasileiros</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="label">Tipo de gráfico</label>
                                                        <br>
                                                        <select required id="grafico" name="grafico">
                                                            @if($brasil->grafico == 'linha')
                                                                <option selected value="linha">Linha</option>
                                                                <option value="coluna">Coluna</option>
                                                            @elseif($brasil->grafico == 'coluna')
                                                                <option  value="linha">Linha</option>
                                                                <option selected value="coluna">Coluna</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="label">Campos disponíveis</label>
                                                        <br>
                                                        <select required name="campos[]" id="campos" multiple>
                                                            <option value="casos_total">Casos total</option>
                                                            <option value="casos_diario">Casos diario</option>
                                                            <option value="recuperados_total">Recuperados total</option>
                                                            <option value="recuperados_diario">Recuperados diario</option>
                                                            <option value="mortes_total">Mortes total</option>
                                                            <option value="mortes_diario">Mortes diario</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="label">Estados</label>
                                                        <br>
                                                        <select required disabled name="estados" id="estados">
                                                            <option  value="acre">Acre</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12" style="text-align:center">
                                                        <br>
                                                        <br>
                                                        <input class="submit" type="submit" value="Alterar" >
                                                        <br>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <br>
                    @endforeach
                </div>
                <br>
                <br>
                <h5 style="font-weight:bold; color: #921a25; margin: 15px; text-align: center">Filtro: Estados brasileiros</h5>
                <br>
                <div class="col-lg-8" style="margin:auto; text-align: center;">
                    @foreach($relatorioEstado as $estado)
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">{{ $estado->id }} - {{ ucfirst(str_replace("_"," ", $estado->estado)) }} <small style="color:grey">{{ $estado->data }}</small></h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(empty($estado->intervalo))
                                    Dados indisponíveis para data selecionada! Gere outro relatório ou popule o banco.
                                @else
                                    <figure class="highcharts-figure">
                                        <div id="estado-{{ $estado->id }}"></div>
                                    </figure>
                                    <div class="card collapsed-card">
                                        <div class="card-header">
                                            <h3 class="card-title">Editar relatório</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form role="form" method="post" action="{{ route('relatorioUpdate',['id' => $estado->id, 'tipo' => 'estado']) }}">
                                                {{ csrf_field() }}
                                                <div class="row" style="text-align:center">
                                                    <div class="col-lg-6">
                                                        <label class="label">Intervalo de datas</label>
                                                        <br>
                                                        <input type="text" required name="daterange" value="{{ isset($estado) ? $estado->data : ''}}" />
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="label">Fonte de dados</label>
                                                        <br>
                                                        <select disabled id="fonte" name="fonte">
                                                            <option value="brasil">Brasil</option>
                                                            <option value="estados" selected>Estados brasileiros</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="label">Tipo de gráfico</label>
                                                        <br>
                                                        <select required id="grafico" name="grafico">
                                                            @if($estado->grafico == 'linha')
                                                                <option selected value="linha">Linha</option>
                                                                <option value="coluna">Coluna</option>
                                                            @elseif($estado->grafico == 'coluna')
                                                                <option  value="linha">Linha</option>
                                                                <option selected value="coluna">Coluna</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="label">Campos disponíveis</label>
                                                        <br>
                                                        <select required name="campos[]" id="campos" multiple>
                                                            <option value="casos_total">Casos total</option>
                                                            <option value="casos_diario">Casos diario</option>
                                                            <option value="recuperados_total">Recuperados total</option>
                                                            <option value="recuperados_diario">Recuperados diario</option>
                                                            <option value="mortes_total">Mortes total</option>
                                                            <option value="mortes_diario">Mortes diario</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="label">Estados</label>
                                                        <br>
                                                        <select required name="estados" id="estados">
                                                            <option @if($estado->estado == 'acre') selected @endif  value="acre">Acre</option>
                                                            <option @if($estado->estado == 'alagoas') selected @endif  value="alagoas">Alagoas</option>
                                                            <option @if($estado->estado == 'amapa') selected @endif  value="amapa">Amapá</option>
                                                            <option @if($estado->estado == 'amazonas') selected @endif  value="amazonas">Amazonas</option>
                                                            <option @if($estado->estado == 'bahia') selected @endif  value="bahia">Bahia</option>
                                                            <option @if($estado->estado == 'ceara') selected @endif  value="ceara">Ceará</option>
                                                            <option @if($estado->estado == 'espirito_santo') selected @endif  value="espirito_santo">Espírito Santo</option>
                                                            <option @if($estado->estado == 'goias') selected @endif  value="goias">Goiás</option>
                                                            <option @if($estado->estado == 'maranhao') selected @endif  value="maranhao">Maranhão</option>
                                                            <option @if($estado->estado == 'mato_grosso') selected @endif  value="mato_grosso">Mato Grosso</option>
                                                            <option @if($estado->estado == 'mato_grosso_del_sur') selected @endif  value="mato_grosso_del_sur">Mato Grosso do sul</option>
                                                            <option @if($estado->estado == 'minas_gerais') selected @endif  value="minas_gerais">Minas Gerais</option>
                                                            <option @if($estado->estado == 'para') selected @endif  value="para">Pará</option>
                                                            <option @if($estado->estado == 'paraiba') selected @endif  value="paraiba">Paraíba</option>
                                                            <option @if($estado->estado == 'parana') selected @endif  value="parana">Paraná</option>
                                                            <option @if($estado->estado == 'pernambuco') selected @endif  value="pernambuco">Pernambuco</option>
                                                            <option @if($estado->estado == 'piaui') selected @endif  value="piaui">Piauí</option>
                                                            <option @if($estado->estado == 'rio_de_janeiro') selected @endif  value="rio_de_janeiro">Rio de Janeiro</option>
                                                            <option @if($estado->estado == 'rio_grande_del_norte') selected @endif  value="rio_grande_del_norte">Rio Grande do Norte</option>
                                                            <option @if($estado->estado == 'rio_grande_del_sur') selected @endif  value="rio_grande_del_sur">Rio Grande do Sul</option>
                                                            <option @if($estado->estado == 'rondonia') selected @endif  value="rondonia">Rondônia</option>
                                                            <option @if($estado->estado == 'roraima') selected @endif  value="roraima">Roraima</option>
                                                            <option @if($estado->estado == 'santa_catarina') selected @endif  value="santa_catarina">Santa Catarina</option>
                                                            <option @if($estado->estado == 'sao_paulo') selected @endif  value="sao_paulo">São Paulo</option>
                                                            <option @if($estado->estado == 'sergipe') selected @endif  value="sergipe">Sergipe</option>
                                                            <option @if($estado->estado == 'tocantins') selected @endif  value="tocantins">Tocantins</option>
                                                            <option @if($estado->estado == 'distrito_federal') selected @endif  value="distrito_federal">Distrito Federal</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12" style="text-align:center">
                                                        <br>
                                                        <br>
                                                        <input class="submit" type="submit" value="Alterar" >
                                                        <br>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <br>

                    @endforeach
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <p>Desenvolvido por

                    <br> <a rel="nofollow" href="" title="free CSS templates">Alayne, Rodrigo e Juliana</a></p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/js/owl-carousel.js"></script>
        <script src="./assets/js/animation.js"></script>
        <script src="./assets/js/imagesloaded.js"></script>
        <script src="./assets/js/custom.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js" integrity="sha512-AJUWwfMxFuQLv1iPZOTZX0N/jTCIrLxyZjTRKQostNU71MzZTEPHjajSK20Kj1TwJELpP7gl+ShXw5brpnKwEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/series-label.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <script>
            $('input[name="dates"]').daterangepicker();
            @foreach($relatorioBrasil as $brasil)
                @if(!empty($brasil->intervalo))

                    var aux = "{{ $brasil->grafico }}";
                    if(aux == 'linha'){
                        grafico = 'line';
                    }else{
                        grafico = 'column';
                    }
                    Highcharts.chart('brasil-{{ $brasil->id }}', {
                        chart: {
                            type: grafico,
                            zoomType: 'x',
                        },

                        title: {
                            text: 'Relatório #{{ $brasil->id }}'
                        },

                        subtitle: {
                            text: 'Zoom disponível',
                            align: 'center',
                        },

                        credits: {
                            enabled: false,
                        },

                        xAxis: {
                            type: "datetime",
                            categories: [
                                @foreach($brasil->intervalo as $intervalo)
                                    '{{ $intervalo }}',
                                @endforeach
                            ],
                        },

                        series: [
                            @foreach($brasil->dados as $key => $dados)
                                {
                                    name: '{{ ucfirst(str_replace("_"," ", $key)) }}',
                                    data: {{ $dados }}
                                },
                            @endforeach
                        ],

                        responsive: {
                            rules: [{
                                condition: {
                                    maxWidth: 500
                                },
                                chartOptions: {
                                    legend: {
                                        layout: 'horizontal',
                                        align: 'center',
                                        verticalAlign: 'bottom'
                                    }
                                }
                            }]
                        }

                    });
                @endif
            @endforeach

            @foreach($relatorioEstado as $estado)
                @if(!empty($estado->intervalo))

                    var aux = "{{ $estado->grafico }}";
                    if(aux == 'linha'){
                        grafico = 'line';
                    }else{
                        grafico = 'column';
                    }
                    Highcharts.chart('estado-{{ $estado->id }}', {
                        chart: {
                            type: grafico,
                            zoomType: 'x',
                        },

                        title: {
                            text: 'Relatório #{{ $estado->id }}'
                        },

                        subtitle: {
                            text: 'Zoom disponível',
                            align: 'center',
                        },

                        credits: {
                            enabled: false,
                        },

                        xAxis: {
                            type: "datetime",
                            categories: [
                                @foreach($estado->intervalo as $intervalo)
                                    '{{ $intervalo }}',
                                @endforeach
                            ],
                        },

                        series: [
                            @foreach($estado->dados as $key => $dados)
                                {
                                    name: '{{ ucfirst(str_replace("_"," ", $key)) }}',
                                    data: {{ $dados }}
                                },
                            @endforeach
                        ],

                        responsive: {
                            rules: [{
                                condition: {
                                    maxWidth: 500
                                },
                                chartOptions: {
                                    legend: {
                                        layout: 'horizontal',
                                        align: 'center',
                                        verticalAlign: 'bottom'
                                    }
                                }
                            }]
                        }

                    });
                @endif
            @endforeach

            // Update
            var date = new Date(-1);
            $('input[name="daterange"]').daterangepicker({
                maxDate: new Date(),
                minDate: date,
                locale: {
                    format: 'DD/MM/YYYY'
                }
            });
        </script>

    </body>
</html>
