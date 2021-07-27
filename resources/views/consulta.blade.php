
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
        <title>Covid19</title>
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
                            <h2>Gerar relatório</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="col-lg-7" style="margin:auto; margin-bottom: 40px;">
                    <div class="card">
                        <div class="card-header">
                            <h5 style="font-weight:bold; color: #921a25; margin: 15px; text-align: center;">Filtros</h5>
                        </div>
                        <div class="card-body">
                            <form action="/relatorio" method="POST">
                                {{ csrf_field() }}
                                <div class="row" style="text-align:center">
                                    <div class="col-lg-6">
                                        <label class="label">Intervalo de datas</label>
                                        <br>
                                        <input type="text" required name="daterange" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="label">Fonte de dados</label>
                                        <br>
                                        <select required id="fonte" name="fonte">
                                            <option value="brasil">Brasil</option>
                                            <option value="estados">Estados brasileiros</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="label">Tipo de gráfico</label>
                                        <br>
                                        <select required id="grafico" name="grafico">
                                            <option value="linha">Linha</option>
                                            <option value="coluna">Coluna</option>
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
                                            <option value="acre">Acre</option>
                                            <option value="alagoas">Alagoas</option>
                                            <option value="amapa">Amapá</option>
                                            <option value="amazonas">Amazonas</option>
                                            <option value="bahia">Bahia</option>
                                            <option value="ceara">Ceará</option>
                                            <option value="espirito_santo">Espírito Santo</option>
                                            <option value="goias">Goiás</option>
                                            <option value="maranhao">Maranhão</option>
                                            <option value="mato_grosso">Mato Grosso</option>
                                            <option value="mato_grosso_del_sur">Mato Grosso do sul</option>
                                            <option value="minas_gerais">Minas Gerais</option>
                                            <option value="para">Pará</option>
                                            <option value="paraiba">Paraíba</option>
                                            <option value="parana">Paraná</option>
                                            <option value="pernambuco">Pernambuco</option>
                                            <option value="piaui">Piauí</option>
                                            <option value="rio_de_janeiro">Rio de Janeiro</option>
                                            <option value="rio_grande_del_norte">Rio Grande do Norte</option>
                                            <option value="rio_grande_del_sur">Rio Grande do Sul</option>
                                            <option value="rondonia">Rondônia</option>
                                            <option value="roraima">Roraima</option>
                                            <option value="santa_catarina">Santa Catarina</option>
                                            <option value="sao_paulo">São Paulo</option>
                                            <option value="sergipe">Sergipe</option>
                                            <option value="tocantins">Tocantins</option>
                                            <option value="distrito_federal">Distrito Federal</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12" style="text-align:center">
                                        <br>
                                        <br>
                                        <input class="submit" type="submit" value="Gerar" >
                                        <br>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br>
                    </div>
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

        <script>
            var date = new Date(-1);
            $('input[name="daterange"]').daterangepicker({
                maxDate: new Date(),
                minDate: date,
                locale: {
                    format: 'DD/MM/YYYY'
                }
            });
            var select = document.querySelector('select');
            select.addEventListener('change', function () {
                var selecionada = this.options[this.selectedIndex].value;
                var estados = document.getElementById("estados");
                if(selecionada == 'estados'){
                    estados.disabled = false;
                }else{
                    estados.disabled = true;
                }
            });
        </script>

    </body>
</html>
