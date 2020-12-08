<?php

include 'logic.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COVID-19 | IPVC</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/maps.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/geodata/worldLow.js"></script>
    <script src="https://covid.amCharts.com/data/js/world_timeline.js"></script>
    <script src="https://covid.amCharts.com/data/js/total_timeline.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <link rel="stylesheet" href="mundo.css" />
    <script src="chartID.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/my-covid19-page/index.html">COVID-19 🦠</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" aria-disabled="true">Mundo 🌎<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/my-covid19-page/pages/portugal/portugal.php">Portugal 🇵🇹</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/my-covid19-page/pages/noticias/noticias.html">
                        Noticias 📰
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-link" href="https://github.com/helderpgoncalves/my-covid19-page"
                        style="text-decoration:none;"><i class="fa fa-github" aria-hidden="true"></i> Github Project</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="home-section">
        <div class="container">
            <center>
                <h1>De onde foram retirados os dados?<h1>
                        <h3><a href="https://github.com/CSSEGISandData/COVID-19"
                                style="text-decoration:none; color:white">CSSEGISandData/COVID-19</a></h3>
            </center>
            <div class="row">
                <div class="col-sm">
                    <img src="/my-covid19-page/img/dados.png" alt="universidade" height="300px" width="80%">
                </div>
                <div class="col-sm">
                    <div class="measure-head">Johns Hopkins University Center for Systems Science and Engineering (JHU
                        CSSE)<br></div>
                    <p style="text-align: justify; color: white;">"This is the
                        data for the 2019 Novel Coronavirus Visual Dashboard operated by the Johns Hopkins University
                        Center for Systems Science and Engineering (JHU CSSE). Also,
                        Supported by ESRI Living Atlas
                        Team and the Johns Hopkins University
                        Applied Physics Lab (JHU APL)."<br></p>
                    <p>"Dong E, Du H, Gardner L. An interactive web-based
                        dashboard to track COVID-19 in real time.
                        Lancet Inf Dis. 20(5):533-534. doi:
                        10.1016/S1473-3099(20)30120-1"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MAPA DO COVID -->
    <div id="chartdiv"></div>

    <!-- https://www.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6 -->

    <!-- TABELA DO COVID -->
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmados</h5>
                <?php echo $total_confirmed; ?>
            </div>
            <div class="col-4 text-success">
                <h5>Recuperados</h5>
                <?php echo $total_recovered; ?>
            </div>
            <div class="col-4 text-danger">
                <h5>Mortes</h5>
                <?php echo $total_deaths; ?>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div id="scrollable" class="table-responsive">
            <table class="table table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Países</th>
                        <th scope="col">Confirmados</th>
                        <th scope="col">Recuperados</th>
                        <th scope="col">Mortes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
          foreach ($data as $key => $value) {
            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
          ?>
                    <tr>
                        <th scope="row"><?php echo $key ?></th>
                        <td>
                            <?php echo $value[$days_count]['confirmed']; ?>
                            <?php if ($increase != 0) { ?>
                            <small class="text-danger pl-3"><i
                                    class="fas fa-arrow-up"></i><?php echo $increase; ?></small>
                            <?php } ?>
                        </td>
                        <td><?php echo $value[$days_count]['recovered']; ?></td>
                        <td><?php echo $value[$days_count]['deaths']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer-basic-centered">

        <p class="footer-company-motto text-white">COVID-19</p>

        <p class="footer-links">
            <a href="/my-covid19-page/index.html">Home</a>
            ·
            <a href="https://github.com/helderpgoncalves/my-covid19-page">Github Project</a>
            ·
            <a href="https://www.linkedin.com/in/heldergoncalves16/">Linkedin</a>
            ·
            <a href="https://www.instagram.com/helder_goncalves16/">Instagram</a>
        </p>

        <p class="footer-company-name text-white">Hélder Gonçalves © 2020</p>

    </footer>
</body>

</html>