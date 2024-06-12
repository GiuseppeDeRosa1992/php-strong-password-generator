<?php
$password = "La password random generata è:";
// RICHIAMO INPUT PER LA LUNGHEZZA DELLA PASSWORD
$passwordLength = $_GET["lunghezza"];
//CREO ARRAY DI STRINGHE PER GENERARE PASSWORD RANDOM
$allowedCharacters = [
    'character' => "ABCDEFGHILMNOPQRSTUVZXYWJabcdefghilmnopqrstuvzxywj.:,;-_#[]{}!£<>%&/()='^1234567890",
    // 'lower' => "abcdefghilmnopqrstuvzxywj",
    // 'simbol' => ".:,;-_#[]{}!£<>%&/()='^",
    // 'number' => "1234567890",
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>PASSWORD PHP</title>
</head>

<body>

    <h1 class="text-center m-0">
        <?= $password . " " . $passwordLength . " " . "Caratteri" ?>
    </h1>

    <pre>
        <?= var_dump($allowedCharacters['character']) ?>
    </pre>

    <h2 class="text-center m-0">
        La password è:
        <?php
        //CICLO DOVE DICHIARO CHE FINCHE LA I NON E' UGUALE ALLA LUNGHEZZA DEI CARATTERI SCELTI DALL'UTENTE CONITNUARE A CICLARE E GENERARE CARATTERI
        for ($i = 0; $i <= $passwordLength - 1; $i++) {
            //STAMPO IN PAGINA LA SCELTA DEI CARATTERI SCELTI DALL'UTENTE E CON LA FUNZIONE RANDOM GLI DICO DI SCEGLIARE QUALE LETTERA STAMPARE
            echo $allowedCharacters['character'][rand(0, strlen($allowedCharacters['character']) - 1)];
        }
        ?>
    </h2 class="text-center m-0">
</body>

</html>