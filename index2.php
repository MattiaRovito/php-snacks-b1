<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php



// $name = $_GET['name'];

// $lenghtName = strlen($name);

// echo $lenghtName;

$mail = $_GET['mail'];

$age = $_GET['age'];



if(strlen($_GET['name']) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)){
    
    $stringa = 'Accesso riuscito';
        
} else {
    $stringa = 'Accesso negato';
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<p>
    <?php

    echo $stringa;

    ?>
</p>




</body>
</html>