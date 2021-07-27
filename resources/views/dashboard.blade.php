
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
                            <li class="scroll-to-section"><a href="/dashboard" class="active">Dashboard</a></li>
                            <li class="scroll-to-section"><a href="/relatorio">Relatórios</a></li>
                            <li class="scroll-to-section"><a href="/banco">Banco de dados</a></li>
                            <li class="scroll-to-section"><div class="main-blue-button"><a href="/relatorio-gerados">Relatórios já gerados</a></div></li>
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
                            <h2>Dashboard</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h5 style="font-weight:bold; color: #921a25; margin: 15px; text-align: center">Brasil</h5>
            <br>
            <div class="col-lg-12" style="margin:auto; text-align: center;">
                <div class="col-lg-12" >
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dados gerais <small style="color:grey"></small></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6" >
                                    <figure class="highcharts-figure">
                                        <div id="todos_acumulados"></div>
                                    </figure>
                                </div>
                                <div class="col-lg-6" >
                                    <figure class="highcharts-figure">
                                        <div id="todos_novos"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-12" >
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Casos <small style="color:grey"></small></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6" >
                                    <figure class="highcharts-figure">
                                        <div id="total_casos"></div>
                                    </figure>
                                </div>
                                <div class="col-lg-6" >
                                    <figure class="highcharts-figure">
                                        <div id="novos_casos"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-12" >
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Recuperados <small style="color:grey"></small></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6" >
                                    <figure class="highcharts-figure">
                                        <div id="total_recuperados"></div>
                                    </figure>
                                </div>
                                <div class="col-lg-6" >
                                    <figure class="highcharts-figure">
                                        <div id="novos_recuperados"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-12" >
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Mortes <small style="color:grey"></small></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6" >
                                    <figure class="highcharts-figure">
                                        <div id="total_mortes"></div>
                                    </figure>
                                </div>
                                <div class="col-lg-6" >
                                    <figure class="highcharts-figure">
                                        <div id="novos_mortes"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
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

        <!-- Scripts -->
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

            Highcharts.chart('todos_acumulados', {
                chart: {
                    zoomType: 'x',
                },

                title: {
                    text: 'Total acumulado'
                },

                subtitle: {
                    text: 'Zoom disponível',
                    align: 'center',
                },
                tooltip: {
                    headerFormat: '<strong>Dia: </strong>' + '<small>{point.key}</small><br>' ,
                    shared: true,
                    crosshairs: true
                },
                credits: {
                    enabled: false,
                },

                xAxis: {
                    type: "datetime",
                    categories: [
                        @foreach($dadosBrasil as $intervalo)
                            '{{ $intervalo->data }}',
                        @endforeach
                    ],
                },

                series: [{
                    name: 'Total de Casos',
                    data: [
                        @foreach($dadosBrasil as $dados)
                            {{ $dados->confirmado_total }},
                        @endforeach
                    ]
                },{
                    name: 'Total de Recuperados',
                    color: 'green',
                    data: [
                        @foreach($dadosBrasil as $dados)
                            {{ $dados->recuperado_total }},
                        @endforeach
                    ]
                },{
                    name: 'Total de Mortes',
                    color: 'grey',
                    data: [
                        @foreach($dadosBrasil as $dados)
                            {{ $dados->morte_total }},
                        @endforeach
                    ]
                }
                ],
            });

            Highcharts.chart('todos_novos', {
                chart: {
                    zoomType: 'x',
                },

                title: {
                    text: 'Novos registros diários'
                },

                subtitle: {
                    text: 'Zoom disponível',
                    align: 'center',
                },
                tooltip: {
                    headerFormat: '<strong>Dia: </strong>' + '<small>{point.key}</small><br>' ,
                    shared: true,
                    crosshairs: true
                },
                credits: {
                    enabled: false,
                },

                xAxis: {
                    type: "datetime",
                    categories: [
                        @foreach($dadosBrasil as $intervalo)
                            '{{ $intervalo->data }}',
                        @endforeach
                    ],
                },

                series: [{
                    name: 'Novos Casos',
                    data: [
                        @foreach($dadosBrasil as $dados)
                            {{ $dados->confirmado_hoje }},
                        @endforeach
                    ]
                },{
                    name: 'Novos Recuperados',
                    color: 'green',
                    data: [
                        @foreach($dadosBrasil as $dados)
                            {{ $dados->recuperado_hoje }},
                        @endforeach
                    ]
                },{
                    name: 'Novas Mortes',
                    color: 'grey',
                    data: [
                        @foreach($dadosBrasil as $dados)
                            {{ $dados->morte_hoje }},
                        @endforeach
                    ]
                }
                ],
            });

            Highcharts.chart('total_casos', {
                chart: {
                    zoomType: 'x',
                },

                title: {
                    text: 'Total de casos acumulados'
                },

                subtitle: {
                    text: 'Zoom disponível',
                    align: 'center',
                },
                tooltip: {
                    headerFormat: '<strong>Dia: </strong>' + '<small>{point.key}</small><br>' ,
                    shared: true,
                    crosshairs: true
                },
                credits: {
                    enabled: false,
                },

                xAxis: {
                    type: "datetime",
                    categories: [
                        @foreach($dadosBrasil as $intervalo)
                            '{{ $intervalo->data }}',
                        @endforeach
                    ],
                },

                series: [{
                    name: 'Total de Casos',
                    data: [
                        @foreach($dadosBrasil as $dados)
                            {{ $dados->confirmado_total }},
                        @endforeach
                    ]
                }],
            });

            Highcharts.chart('novos_casos', {
                chart: {
                    zoomType: 'x',
                },

                title: {
                    text: 'Novos casos diários'
                },

                subtitle: {
                    text: 'Zoom disponível',
                    align: 'center',
                },
                tooltip: {
                    headerFormat: '<strong>Dia: </strong>' + '<small>{point.key}</small><br>' ,
                    shared: true,
                    crosshairs: true
                },
                credits: {
                    enabled: false,
                },

                xAxis: {
                    type: "datetime",
                    categories: [
                        @foreach($dadosBrasil as $intervalo)
                            '{{ $intervalo->data }}',
                        @endforeach
                    ],
                },

                series: [{
                    name: 'Novos Casos',
                    data: [
                        @foreach($dadosBrasil as $dados)
                            {{ $dados->confirmado_hoje }},
                        @endforeach
                    ]
                }],
            });

            Highcharts.chart('total_recuperados', {
                chart: {
                    zoomType: 'x',
                },

                title: {
                    text: 'Total de recuperados acumulados'
                },

                subtitle: {
                    text: 'Zoom disponível',
                    align: 'center',
                },
                tooltip: {
                    headerFormat: '<strong>Dia: </strong>' + '<small>{point.key}</small><br>' ,
                    shared: true,
                    crosshairs: true
                },
                credits: {
                    enabled: false,
                },

                xAxis: {
                    type: "datetime",
                    categories: [
                        @foreach($dadosBrasil as $intervalo)
                            '{{ $intervalo->data }}',
                        @endforeach
                    ],
                },

                series: [{
                    name: 'Total de Recuperados',
                    color: 'green',
                    data: [
                        @foreach($dadosBrasil as $dados)
                            {{ $dados->recuperado_total }},
                        @endforeach
                    ]
                }],
            });

            Highcharts.chart('novos_recuperados', {
                chart: {
                    zoomType: 'x',
                },

                title: {
                    text: 'Novos recuperados diários'
                },

                subtitle: {
                    text: 'Zoom disponível',
                    align: 'center',
                },
                tooltip: {
                    headerFormat: '<strong>Dia: </strong>' + '<small>{point.key}</small><br>' ,
                    shared: true,
                    crosshairs: true
                },
                credits: {
                    enabled: false,
                },

                xAxis: {
                    type: "datetime",
                    categories: [
                        @foreach($dadosBrasil as $intervalo)
                            '{{ $intervalo->data }}',
                        @endforeach
                    ],
                },

                series: [{
                    name: 'Novos Recuperados',
                    color: 'green',
                    data: [
                        @foreach($dadosBrasil as $dados)
                            {{ $dados->recuperado_hoje }},
                        @endforeach
                    ]
                }],
            });

            Highcharts.chart('total_mortes', {
                chart: {
                    zoomType: 'x',
                },

                title: {
                    text: 'Total de mortes acumuladas'
                },

                subtitle: {
                    text: 'Zoom disponível',
                    align: 'center',
                },
                tooltip: {
                    headerFormat: '<strong>Dia: </strong>' + '<small>{point.key}</small><br>' ,
                    shared: true,
                    crosshairs: true
                },
                credits: {
                    enabled: false,
                },

                xAxis: {
                    type: "datetime",
                    categories: [
                        @foreach($dadosBrasil as $intervalo)
                            '{{ $intervalo->data }}',
                        @endforeach
                    ],
                },

                series: [{
                    name: 'Total de Mortes',
                    color: 'grey',
                    data: [
                        @foreach($dadosBrasil as $dados)
                            {{ $dados->morte_total }},
                        @endforeach
                    ]
                }],
            });

            Highcharts.chart('novos_mortes', {
                chart: {
                    zoomType: 'x',
                },

                title: {
                    text: 'Novas mortes diárias'
                },

                subtitle: {
                    text: 'Zoom disponível',
                    align: 'center',
                },
                tooltip: {
                    headerFormat: '<strong>Dia: </strong>' + '<small>{point.key}</small><br>' ,
                    shared: true,
                    crosshairs: true
                },
                credits: {
                    enabled: false,
                },

                xAxis: {
                    type: "datetime",
                    categories: [
                        @foreach($dadosBrasil as $intervalo)
                            '{{ $intervalo->data }}',
                        @endforeach
                    ],
                },

                series: [{
                    name: 'Novas Mortes',
                    color: 'grey',
                    data: [
                        @foreach($dadosBrasil as $dados)
                            {{ $dados->morte_hoje }},
                        @endforeach
                    ]
                }],
            });


        </script>

    </body>
</html>
