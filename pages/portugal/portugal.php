<?php
$api_url = "https://covid19-api.vost.pt/Requests/get_last_update";
$json_data = file_get_contents($api_url);
$covid19pt = json_decode($json_data);

$api_url_fullDataset = "https://covid19-api.vost.pt/Requests/get_full_dataset";
$f = file_get_contents($api_url_fullDataset);
$fullDataSet = json_decode($f);

$dataPoints = array();
$dataPoints2 = array();
$dataPoints3 = array();

$hoje = new DateTime();

$format = 'd-m-Y';
$interval = new DateInterval('P1D');

$realEnd = new DateTime($hoje->format('d-m-Y'));
$realEnd->add($interval);

$period = new DatePeriod(new DateTime('26-02-2020'), $interval, $realEnd);

foreach ($period as $date) {
    //Converter PHP data para Javascript TimeStamp
    $phpDate = $date->format("d-m-Y h:i:sa");
    $phpTimestamp = strtotime($phpDate);
    $javaScriptTimestamp = $phpTimestamp * 1000;
    array_push($dataPoints, array("x" => $date));
    array_push($dataPoints2, array("x" => $date));
    array_push($dataPoints3, array("x" => $date));
}

foreach ($fullDataSet->internados_enfermaria as $item) {
    array_push($dataPoints3, array("y" => $item));
}

foreach ($fullDataSet->confirmados_novos as $item) {
    array_push($dataPoints, array("y" => $item));
}

foreach ($fullDataSet->ativos as $item) {
    array_push($dataPoints2, array("y" => $item));
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 | Portugal</title>
    <link rel="icon" type="image/png" href="/my-covid19-page/img/virus.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="portugal.css" />

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://covid19-api.vost.pt/Requests/get_last_update"></script>

    <script src="https://unpkg.com/scrollreveal@4"></script>

</head>

<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "dark2", // "light1", "light2", "dark1", "dark2"
            animationEnabled: true,
            zoomEnabled: true,
            title: {
                text: "Evolução em Portugal"
            },
            legend: {
                cursor: "pointer",
                itemclick: toggleDataSeries
            },
            axisY: {
                title: "Novos Confirmados",
                titleFontSize: 24,
                includeZero: true
            },
            axisX: {
                title: "Data",
            },
            toolTip: {
                shared: true
            },
            data: [{
                    type: "spline",
                    showInLegend: true,
                    xValueType: "dateTime",
                    name: "Novos Confirmados",
                    dataPoints: <?php echo json_encode($dataPoints); ?>,
                },
                {
                    type: "spline",
                    name: "Ativos",
                    xValueType: "dateTime",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints2); ?>,
                },
                {
                    type: "spline",
                    name: "Internados",
                    xValueType: "dateTime",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints3); ?>,
                },
            ]
        });

        chart.render();

        function toggleDataSeries(e) {
            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            } else {
                e.dataSeries.visible = true;
            }
            chart.render();
        }


    }
</script>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/my-covid19-page/index.html">COVID-19 🦠</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/my-covid19-page/pages/mundo/mundo.php">Mundo 🌎</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Portugal 🇵🇹<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/my-covid19-page/pages/noticias/noticias.html">
                        Noticias 📰
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-link" href="https://github.com/helderpgoncalves/my-covid19-page" style="text-decoration:none;"><i class="fa fa-github" aria-hidden="true"></i> Github Project</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="home-section">
        <div class="container">
            <center>
                <h1 class="text-white pt-4"><a href="https://covid19-api.vost.pt" style="text-decoration:none; color:white">COVID-19 Portugal 🇵🇹</a>
                    <h1>
                        <div class="pt-4 image-container">
                            <img id="f1" src="/my-covid19-page/img/dgs1.png" alt="dgs1" height="500px" width="80%"> <br>
                            <img class="pt-5" id="f2" src="/my-covid19-page/img/dgs2.jpg" alt="dgs2" height="500px" width="80%">
                        </div>
            </center>

            <div class="col-sm text-white">
                <div class="measure-head pt-5">
                    <h2 class="text-center">Direção-Geral da Saúde</h2><br>
                </div>
                <p style="text-align: justify; color: white;">A DGS é um
                    serviço central do Ministério da Saúde, integrado na administração direta do Estado, dotado de
                    autonomia administrativa.
                    Assumindo-se como um organismo de referência para todos
                    aqueles que pensam e atuam no campo da saúde, as suas
                    principais áreas de intervenção centram-se em: <br>
                    • Coordenar e desenvolver Planos e Programas de Saúde; <br>
                    • Coordenar e assegurar a vigilância epidemiológica; <br>
                    • Analisar e divulgar informação em saúde;<br>
                    • Regular e garantir a qualidade em saúde;<br>
                    • Gerir as emergências em Saúde Pública;<br>
                    • Apoiar o exercício das competências da Autoridade de Saúde Nacional;<br>
                    • Coordenar a atividade do Ministério da Saúde no domínio das relações europeias e
                    internacionais;<br>
                    • Acompanhar o Centro de Atendimento do Serviço Nacional de Saúde;<br>
                    • Coordenar e acompanhar o Subsistema de Avaliação de Desempenho dos Serviços da Administração
                    Pública (SIADAP 1) do Ministério da Saúde.</p>
            </div>
        </div>
        </div>
    </section>

    <div class="container my-5">
        <h1 class="text-white text-center">🇵🇹 Desde o dia 0 até
            <script>
                document.write(new Date().toLocaleDateString());
            </script>
        </h1>

        <div class="alert alert-danger" role="alert">
            <div class="row text-center">
                <div class="col-sm">
                    <h5>Novos Casos Hoje</h5>
                    <?php echo end($fullDataSet->confirmados_novos); ?>
                </div>
            </div>
        </div>

        <div class="row text-center pt-4">
            <div class="col-4 text-primary">
                <h5>Casos Ativos</h5>
                <?php echo $covid19pt->ativos; ?>
            </div>
            <div class="col-4 text-warning">
                <h5>Total Confirmados</h5>
                <?php echo $covid19pt->confirmados; ?>
            </div>
            <div class="col-4 text-success">
                <h5>Total Recuperados</h5>
                <?php echo $covid19pt->recuperados; ?>
            </div>
        </div>
        <div class="row text-center pt-5">
            <div class="col-4 text-danger">
                <h5>Total de Mortes</h5>
                <?php echo $covid19pt->obitos; ?>
            </div>
            <div class="col-4 text-info">
                <h5>Total de Internados</h5>
                <?php echo $covid19pt->internados; ?>
            </div>
            <div class="col-4 text-light">
                <h5>Internados UCI</h5>
                <?php echo $covid19pt->internados_uci; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <center>
            <h1 class="text-white text-center">
                Informações por Regiões de Saúde
            </h1>
            <label class="text-white" for="regiao">Escolha uma região:</label> <br>
            <select name="select" id="select" class="select-css">
                <option value="arsnorte">Norte</option>
                <option value="arscentro">Centro</option>
                <option value="arsalentejo">Lisboa e Vale do Tejo</option>
                <option value="arsalgarve">Algarve</option>
                <option value="acores">Açores</option>
                <option value="madeira">Madeira</option>
            </select>
            <script>
                var xmlhttp = new XMLHttpRequest();
                var url = 'https://covid19-api.vost.pt/Requests/get_last_update'
                var myArr;

                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        myArr = JSON.parse(this.responseText);
                    }
                };
                xmlhttp.open("GET", url, true);
                xmlhttp.send();

                $("#select").change(function() {
                    document.getElementById("regioes").innerHTML = ""
                    var divContent = document.getElementById("regioes");

                    var regiao = $("#select").val().toString();
                    var confirmados = "confirmados_"
                    var obitos = "obitos_";

                    var confirmadosRegiao = confirmados.concat(regiao);
                    var obitosRegiao = obitos.concat(regiao);

                    var infoRegioes = `<div class="col text-warning">
                <h5>Total Confirmados</h5>
                <span>${myArr[confirmadosRegiao]}<span>
            </div>
            <div class="col text-danger">
                <h5>Total de Mortes</h5>
                <span>${myArr[obitosRegiao]}<span>
            </div>`;

                    $(divContent).append(infoRegioes);
                });
            </script>
        </center>
        <div id="regioes" class="row text-center pt-4">
        </div>

        <script src="https://unpkg.com/scrollreveal"></script>
        <script>
            ScrollReveal().reveal(".container", {
                delay: 800
            });
        </script>
        </section>

        <div id="grafico" class="container pt-4">
            <h1 class="text-white text-center">
                Gráfico
            </h1>
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </div>
    </div>

    <div class="pt-5 mx-3 mx-md-5 article-text margin-top-30">
        <script>
            if (document.documentElement.clientWidth > "992") {
                $(".article-text").append(
                    "<div class='embed-responsive embed-responsive-16by9'><iframe width='100%' src='https://esriportugal.maps.arcgis.com/apps/opsdashboard/index.html#/acf023da9a0b4f9dbb2332c13f635829'></iframe></div>"
                );
            } else {
                $(".article-text").append(
                    "<div class='embed-responsive embed-responsive-16by9'><iframe width='100%' src='https://esriportugal.maps.arcgis.com/apps/opsdashboard/index.html#/e9dd1dea8d1444b985d38e58076d197a'></iframe></div>"
                );
            }
        </script>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="100%" src="https://esriportugal.maps.arcgis.com/apps/opsdashboard/index.html#/acf023da9a0b4f9dbb2332c13f635829"></iframe>
        </div>
        <i><small class="text-white">Créditos: Dados fornecidos por DGS / Infografia fornecida por Esri
                Portugal</small></i>
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