<!DOCTYPE html>
<html>
    <head>
        <title> Лаба 14.05.2020</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Введите доллары и получите рубли</h2>
        <input type="text">
        <h5></h5>
        <script>{ console.clear();
        document.querySelector('input')
        .addEventListener('input', e=>{
            fetch('/rates.php?dollars='+e.target.value)
            .then(x => x.text())
            .then(x => document.querySelector('h5').textContent = x)
            .catch(() => document.querySelector('h5').textContent = 'ERROR');
        });
        }</script>

        <hr />

        <div>
        <?php
        require 'vendor/autoload.php';
        use Carbon\Carbon;
    
        echo '<h1>Litovchenko Daniil</h1>';
        echo '<h3>Задание 1</h3>';
        $date = Carbon::now() -> format('j.m.Y h:i');
        echo '<h2>' . $date . '</h2>';
        ?>
        </div>    
        
    </body>
</html>