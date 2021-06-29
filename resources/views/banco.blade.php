
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" type="image/x-icon" href="https://img-premium.flaticon.com/png/512/3958/premium/3958282.png?token=exp=1624933263~hmac=93dd326334be6829e88ff5ed0f2b3f08" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">

    <title>Covid19</title>

    <!-- Bootstrap core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="./assets/css/fontawesome.css">
    <link rel="stylesheet" href="./assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="./assets/css/animated.css">
    <link rel="stylesheet" href="./assets/css/owl.css">
<!--

    TemplateMo 563 SEO Dream

    https://templatemo.com/tm-563-seo-dream

    -->

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
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
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                    <h4>COVID19 <img src="https://img-premium.flaticon.com/png/512/3958/premium/3958282.png?token=exp=1624933263~hmac=93dd326334be6829e88ff5ed0f2b3f08" alt=""></h4>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="/banco">Banco de dados</a></li>
                        <li class="scroll-to-section"><a href="/consulta">Consulta</a></li>
                        <li class="scroll-to-section"></li>
                    </ul>
                </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <div class="info-stat">
                                <h6>Agency Status:</h6>
                                <h4>Ready Work</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="info-stat">
                                <h6>Price:</h6>
                                <h4>$720/Month</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="info-stat">
                                <h6>Schedules</h6>
                                <h4>$450/Meeting</h4>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h2>SEO &amp; Digital Marketing Agency</h2>
                            </div>
                            <div class="col-lg-12">
                                <div class="main-green-button scroll-to-section">
                                <a href="#contact">Get Your Quote</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="./assets/images/banner-right-image.png" alt="">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div id="services" class="our-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>Banco de <em>Dados</em></h2>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h5 style="font-weight:bold; color: #921a25">Mundo</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <table class="hover" id="table1">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Confirmados <small style="font-weight: 400">total</small></th>
                                <th>Confirmados <small style="font-weight: 400">hoje</small></th>
                                <th>Recuperados <small style="font-weight: 400">total</small></th>
                                <th>Recuperados <small style="font-weight: 400">hoje</small></th>
                                <th>Mortes <small style="font-weight: 400">total</small></th>
                                <th>Mortes <small style="font-weight: 400">hoje</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dadosMundo as $dado)
                                <tr>
                                    <td>{{ $dado['data'] }}</td>
                                    <td>{{ $dado['confirmado_total'] }}</td>
                                    <td>{{ $dado['confirmado_hoje'] }}</td>
                                    <td>{{ $dado['recuperado_total'] }}</td>
                                    <td>{{ $dado['recuperado_hoje'] }}</td>
                                    <td>{{ $dado['morte_total'] }}</td>
                                    <td>{{ $dado['morte_hoje'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <br>
            <hr>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow" data-wow-duration="1s" data-wow-delay="0.2s">
                        <br>
                        <h5 style="font-weight:bold; color: #921a25">Brasil</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <table class="hover" id="table2">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Confirmados <small style="font-weight: 400">total</small></th>
                                <th>Confirmados <small style="font-weight: 400">hoje</small></th>
                                <th>Recuperados <small style="font-weight: 400">total</small></th>
                                <th>Recuperados <small style="font-weight: 400">hoje</small></th>
                                <th>Mortes <small style="font-weight: 400">total</small></th>
                                <th>Mortes <small style="font-weight: 400">hoje</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dadosBrasil as $dado)
                                <tr>
                                    <td>{{ $dado['data'] }}</td>
                                    <td>{{ $dado['confirmado_total'] }}</td>
                                    <td>{{ $dado['confirmado_hoje'] }}</td>
                                    <td>{{ $dado['recuperado_total'] }}</td>
                                    <td>{{ $dado['recuperado_hoje'] }}</td>
                                    <td>{{ $dado['morte_total'] }}</td>
                                    <td>{{ $dado['morte_hoje'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <br>
            <hr>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow" data-wow-duration="1s" data-wow-delay="0.2s">
                        <br>
                        <h5 style="font-weight:bold; color: #921a25">Por estado</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <table class="hover" id="table3">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Estado</th>
                                <th>Confirmados <small style="font-weight: 400">total</small></th>
                                <th>Confirmados <small style="font-weight: 400">hoje</small></th>
                                <th>Recuperados <small style="font-weight: 400">total</small></th>
                                <th>Recuperados <small style="font-weight: 400">hoje</small></th>
                                <th>Mortes <small style="font-weight: 400">total</small></th>
                                <th>Mortes <small style="font-weight: 400">hoje</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dadosEstados as $dado)
                                <tr>
                                    <td>{{ $dado['data'] }}</td>
                                    <td>{{ $dado['estado_nome'] }}</td>
                                    <td>{{ $dado['confirmado_total'] }}</td>
                                    <td>{{ $dado['confirmado_hoje'] }}</td>
                                    <td>{{ $dado['recuperado_total'] }}</td>
                                    <td>{{ $dado['recuperado_hoje'] }}</td>
                                    <td>{{ $dado['morte_total'] }}</td>
                                    <td>{{ $dado['morte_hoje'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Desenvolvido por

                    <br> <a rel="nofollow" href="" title="free CSS templates">Alayne e Rodrigo</a></p>
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
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#table1').DataTable();
            $('#table2').DataTable();
            $('#table3').DataTable({
                "lengthMenu": [[30, 60, 90, -1], [30, 60, 90, "All"]]
            });
        } );
    </script>

    </body>
</html>
