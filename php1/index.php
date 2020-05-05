<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome e cognome</title>
    <?php

        $name = $_GET["name"];
        $surname = $_GET["surname"];
    ?>
</head>
<body>
    <h1>Ciao 
        <?php 
            echo $name . " " . $surname . "!!"; 
        ?> 
    </h1>
</body>
</html>