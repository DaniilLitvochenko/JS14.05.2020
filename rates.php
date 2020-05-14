<?php
    $url = 'https://kodaktor.ru/j/rates';
    $data = file_get_contents($url);
    $response = json_decode($data, true);
    $dollars = $response[0]['sell'];
    $k = $_GET["dollars"];
    echo $k * $dollars;
    ?>