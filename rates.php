<?php
    $url = 'https://kodaktor.ru/j/rates';
    $data = file_get_contents($url);
    $response = json_decode($data, true);
    $dollars = $response[0]['sell'];
    echo $dollars
    ?>