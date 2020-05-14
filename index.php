<?php
        require 'vendor/autoload.php';
        use Carbon\Carbon;
    
        echo '<h1>Litovchenko Daniil</h1>';
        echo '<h3>Задание 1</h3>';
        $date = Carbon::now() -> format('j.m.Y h:i');
        echo '<h2>' . $date . '</h2>';
    
        echo '<h3>Задание 2</h3>';
        echo '<h1>Введите количество рублей</h1>';
        echo '<input name="data" type="text">';
        $roubles = 'data';
        echo $roubles;
        ?>