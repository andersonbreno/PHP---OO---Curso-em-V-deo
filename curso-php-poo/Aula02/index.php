<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03 - POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta1.php';
            $c1 = new Caneta;
            $c1 ->modelo = "Bic cristal";
            $c1 ->cor = "Azul";
            //$c1 ->ponta = 0.5;
            //$c1 ->carga = 80;
            //$c1 ->tampada = true;
            print_r($c1);
            
            
            
            
        ?>
        </pre>
    </body>
</html>
