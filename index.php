<?php

    session_start();

    $_SESSION["nom"] = "coquelet";
    $_SESSION["prenom"] = "Samuel";
    $_SESSION["age"] = 31;
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <a href="page2.php">Page2.php</a><br>
    <a href="connexion.php">Connexion</a><br>

</body>
</html>
