<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$squadre = [
    [
        'squadraCasa' => 'Los Angeles Lakers',
        'squadraOspite' => 'Boston Celtic',
        'puntiCasa' => '87',
        'puntiOspite' => '90',
    ],
    [
        'squadraCasa' => 'Brooklyn Nets',
        'squadraOspite' => 'Chicago Bulls',
        'puntiCasa' => '77',
        'puntiOspite' => '78',
    ],
    [
        'squadraCasa' => 'Miami Heat',
        'squadraOspite' => 'Milwaukee Bucks',
        'puntiCasa' => '81',
        'puntiOspite' => '90',
    ],
    [
        'squadraCasa' => 'Cleveland Cavaliers',
        'squadraOspite' => 'New York Knicks',
        'puntiCasa' => '101',
        'puntiOspite' => '98',
    ],
    [
        'squadraCasa' => 'Los Angeles Clippers',
        'squadraOspite' => 'San Antonio Spurs',
        'puntiCasa' => '81',
        'puntiOspite' => '81',
    ],
];


$lunghezzaArray= count($squadre);



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- My-CSS Connection -->
    <link rel="stylesheet" href="style.css">

    <title>Document</title>

</head>
<body>

<h1>Risultati dell'ultima giornata NBA di Basket:</h1>

<ul>
    <?php for($i = 0; $i < $lunghezzaArray; $i++) { ?>

        <li>
            <?php 
               echo $squadre[$i]['squadraCasa'] . ' - ' . $squadre[$i]['squadraOspite'] . ' | ' . $squadre[$i]['puntiCasa'] . ' - ' . $squadre[$i]['puntiOspite']
            ?>
        </li>


    <?php } ?>

</ul>



    
</body>
</html>