<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
</head>
<body>
    <pre>
    <?php
        require_once 'caneta.php';

        $c1 = new Caneta("Bic", "Azul", 0.5,true);
        $c2 = new Caneta("Compact", "preta", 0.8);
        print_r($c1);
        print "<br>";
        print_r($c2);
    ?>
    </pre>
</body>
</html>