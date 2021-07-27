
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" type="image/x-icon" href="/assets/images/coronavirus.png" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
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
                            <h6>Popular</h6>

                            <h2>Banco de <em>Dados</em></h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        O banco de dados da Covid é imenso e pode demorar muito para carregar os dados, portanto clique nos botões a seguir para adicionar os dados do mês desejado.
                        Se o dado já existir no banco, nada será adicionado.
                        <br>
                        <br>
                        <br>
                        <br>
                        <table class="hover" id="table1">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th style="width: 30%">Mês</th>
                                    <th style="width: 30%">Ano</th>
                                    <th style="width: 30%">Selecionar</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Fevereiro</td>
                                    <td>2020</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '02', $ano = '2020'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Março</td>
                                    <td>2020</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '03', $ano = '2020'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Abril</td>
                                    <td>2020</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '04', $ano = '2020'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Maio</td>
                                    <td>2020</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '05', $ano = '2020'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Junho</td>
                                    <td>2020</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '06', $ano = '2020'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Julho</td>
                                    <td>2020</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '07', $ano = '2020'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Agosto</td>
                                    <td>2020</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '08', $ano = '2020'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Setembro</td>
                                    <td>2020</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '09', $ano = '2020'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Outubro</td>
                                    <td>2020</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '10', $ano = '2020'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Novembro</td>
                                    <td>2020</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '11', $ano = '2020'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Dezembro</td>
                                    <td>2020</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '12', $ano = '2020'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Janeiro</td>
                                    <td>2021</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '01', $ano = '2021'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Fevereiro</td>
                                    <td>2021</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '02', $ano = '2021'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Março</td>
                                    <td>2021</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '03', $ano = '2021'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Abril</td>
                                    <td>2021</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '04', $ano = '2021'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Maio</td>
                                    <td>2021</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '05', $ano = '2021'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Junho</td>
                                    <td>2021</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '06', $ano = '2021'])}}">Popular banco</a></div></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Julho</td>
                                    <td>2021</td>
                                    <td><div class="main-blue-button"><a href="{{route('mes',[$mes = '07', $ano = '2021'])}}">Popular banco</a></div></td>
                                </tr>
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
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#table1').DataTable({
                    // "lengthMenu": [[30, 60, 90, -1], [30, 60, 90, "All"]]
                });
            } );
        </script>

    </body>
</html>
