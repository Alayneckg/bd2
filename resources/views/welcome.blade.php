
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

        <title>Covid19</title>

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
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="/dashboard">Dashboard</a></li>
                            <li class="scroll-to-section"><a href="/banco">Banco de dados</a></li>
                            <li class="scroll-to-section"><a href="/relatorio">Relatórios</a></li>
                            <li class="scroll-to-section"></li>
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
                        <span><small>Atualizado em: {{ $covidTotal['date'] }}</small></span>
                        <h2>Dados <em>Mundiais</em></h2>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                            <img src="./assets/images/confirmedToday.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                            <h4>Confirmado <small style="font-size:14px; color: #921a25;">total</small></h4>
                            <p style="font-size:18px;">{{ number_format($covidTotal['today_confirmed'],2,",","."); }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                            <img src="./assets/images/recoveredToday.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                            <h4>Recuperado <small style="font-size:14px; color: #921a25;">total</small></h4>
                            <p style="font-size:18px;">{{ number_format($covidTotal['today_recovered'],2,",","."); }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                            <img src="./assets/images/deathsToday.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                            <h4>Morte <small style="font-size:14px; color: #921a25;">total</small></h4>
                            <p style="font-size:18px;">{{ number_format($covidTotal['today_deaths'],2,",","."); }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                            <img src="./assets/images/confirmedTotal.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                            <h4>Confirmado <small style="font-size:14px; color: #921a25;">hoje</small></h4>
                            <p style="font-size:18px;">{{ number_format($covidTotal['today_new_confirmed'],2,",","."); }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                            <img src="./assets/images/recoveredTotal.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                            <h4>Recuperado <small style="font-size:14px; color: #921a25;">hoje</small></h4>
                            <p style="font-size:18px;">{{ number_format($covidTotal['today_new_recovered'],2,",","."); }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                            <img src="./assets/images/deathsTotal.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                            <h4>Morte <small style="font-size:14px; color: #921a25;">hoje</small></h4>
                            <p style="font-size:18px;">{{ number_format($covidTotal['today_new_deaths'],2,",","."); }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
            <hr>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <br>
                        <h2>Dados <em style="color: #198754">Brasil</em></h2>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                            <img src="./assets/images/confirmedToday.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                            <h4>Confirmado <small style="font-size:14px; color: #921a25;">total</small></h4>
                            <p style="font-size:18px;">{{ number_format($covidBrasil['today_confirmed'],2,",","."); }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                            <img src="./assets/images/recoveredToday.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                            <h4>Recuperado <small style="font-size:14px; color: #921a25;">total</small></h4>
                            <p style="font-size:18px;">{{ number_format($covidBrasil['today_recovered'],2,",","."); }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                            <img src="./assets/images/deathsToday.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                            <h4>Morte <small style="font-size:14px; color: #921a25;">total</small></h4>
                            <p style="font-size:18px;">{{ number_format($covidBrasil['today_deaths'],2,",","."); }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                            <img src="./assets/images/confirmedTotal.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                            <h4>Confirmado <small style="font-size:14px; color: #921a25;">hoje</small></h4>
                            <p style="font-size:18px;">{{ number_format($covidBrasil['today_new_confirmed'],2,",","."); }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                            <img src="./assets/images/recoveredTotal.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                            <h4>Recuperado <small style="font-size:14px; color: #921a25;">hoje</small></h4>
                            <p style="font-size:18px;">{{ number_format($covidBrasil['today_new_recovered'],2,",","."); }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="icon">
                            <img src="./assets/images/deathsTotal.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-content">
                            <h4>Morte <small style="font-size:14px; color: #921a25;">hoje</small></h4>
                            <p style="font-size:18px;">{{ number_format($covidBrasil['today_new_deaths'],2,",","."); }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
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

    </body>
</html>
