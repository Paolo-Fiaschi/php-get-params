<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mail</title>
    <?php

        $mail = $_GET["mail"];
    ?>

</head>
<body>

    <?php

        if(strpos($mail, "@") && strpos($mail, ".")) {

            echo "<div><h1>OK</h1></div>";
        }else{

            echo "<div><h1>KO</h1></div>";
        }
    ?>

</body>
</html>