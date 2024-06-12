<?php
$password = "La password random generata è:";
$passwordLength = $_GET["lunghezza"];
$array = ["x"]
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

    <h2 class="text-center m-0">
        La password è:
        <?php
        for ($i = 0; $i <= $passwordLength - 1; $i++) {
            echo $array[0];
        }
        ?>
    </h2 class="text-center m-0">
</body>

</html>