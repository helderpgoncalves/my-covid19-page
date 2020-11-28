<?php

    $api_url = "https://covid19-api.vost.pt/Requests/get_last_update";
    $json_data = file_get_contents($api_url);
    $covid19pt = json_decode($json_data);

    $data = $covid19pt->data;
    $confirmados = $covid19pt->confirmados;
    $norte = $covid19pt->confirmados_arsnorte;
    $centro = $covid19pt->confirmados_arscentro;
    $arslvt = $covid19pt->confirmados_arslvt;
    $arslentejo = $covid19pt->confirmados_arsalentejo;
    $acores = $covid19pt->confirmados_acores;
    $madeira = $covid19pt->confirmados_madeira;
    $recuperados = $covid19pt->recuperados;
    $mortes = $covid19pt->obitos;
?>
