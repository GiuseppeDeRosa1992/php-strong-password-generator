<?php
$password = "Ciao, quanto lunga deve essere la password?"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>FORM GENERATOR PASSWORD</title>
</head>

<body>
    <h1 class="text-center py-2 bg-success m-0">
        <?= $password ?>
    </h1>

    <form action="password.php" method="get" class="text-center p-2">
        <!-- L'UTENTE SCEGLIE DI QUANTI CARATTERI DEVE ESSERE LA PASSWORD -->
        <label for="scegli-numerO">Lunghezza password da generare</label>
        <input type="number" name="lunghezza" id="scegli-numero" placeholder="Inserisci lunghezza password">
        <!-- INVIO I DATI -->
        <div class="py-2">
            <button type="submit">Genera</button>
        </div>
    </form>
</body>

</html>