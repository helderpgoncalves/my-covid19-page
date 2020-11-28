<?php
$api_url = "https://covid19-api.vost.pt/Requests/get_last_update";
$json_data = file_get_contents($api_url);
$covid19pt = json_decode($json_data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 IPVC</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="portugal.css" />

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                <li class="nav-item">
                    <a class="nav-link" href="/my-covid19-page/pages/mundo/mundo.php">Mundo 🌎</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Portugal 🇵🇹<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <h1 class="text-white">COVID-19 Portugal 🇵🇹<h1>
                        <h2><a href="https://covid19-api.vost.pt" style="text-decoration:none; color:white">COVID-19
                                REST API Portugal</a></h2>
                        <div>
                            <img src="/my-covid19-page/img/dgs1.png" alt="universidade" height="500px" width="80%">
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
        <h1 class="text-white text-center">Portugal desde o dia 0</h1>
        <div class="row text-center pt-4">
            <div class="col-4 text-primary">
                <h5>Ativos</h5>
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
        </div>
    </div>
</body>

</html>