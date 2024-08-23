<?php
$passwordTitle = "Ciao, quanto lunga deve essere la password?";
$password = "La password random generata è:";
// RICHIAMO INPUT PER LA LUNGHEZZA DELLA PASSWORD
$passwordLength = $_GET["lunghezza"] ?? null;
//CREO ARRAY DI STRINGHE PER GENERARE PASSWORD RANDOM
$allowedCharacters = [
    //PER GENERARE LA PASSWORD NON BISOGNA METTERE MINORE PER ADESSO PERCHE' SENNO ROMPE LA PASSWORD SENNO' FARE CONTROLLO IF QUANDO STAMPIAMO
    'character' => "ABCDEFGHILMNOPQRSTUVZXYWJabcdefghilmnopqrstuvzxywj.:,;-_#[]{}!£>%&/()='^1234567890",
    // 'lower' => "abcdefghilmnopqrstuvzxywj",
    // 'simbol' => ".:,;-_#[]{}!£<>%&/()='^",
    // 'number' => "1234567890",
];
include_once __DIR__ . '/function.php';
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

    <h1 class="text-center py-2 bg-success m-0">
        <?= $passwordTitle ?>
    </h1>

    <form action="password.php" method="get" class="text-center p-2">
        <!-- L'UTENTE SCEGLIE DI QUANTI CARATTERI DEVE ESSERE LA PASSWORD -->
        <label for="scegli-numero">Lunghezza password da generare</label>
        <input type="number" name="lunghezza" id="scegli-numero" placeholder="Inserisci lunghezza password">
        <!-- INVIO I DATI -->
        <div class="py-2">
            <button type="submit">Genera</button>
        </div>
    </form>

    <h2 class="text-center m-0">
        <?= $password . " " . $passwordLength . " " . "Caratteri" ?>
    </h2>

    <!-- <pre>
        <?= var_dump($allowedCharacters['character']) ?>
    </pre> -->

    <h2 class="text-center m-0">
        La password è:
        <?php
        generatedPassword($passwordLength, $allowedCharacters)
        ?>
    </h2 class="text-center m-0">
</body>

</html>