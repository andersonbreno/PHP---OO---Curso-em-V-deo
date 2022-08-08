<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ex. Aula 02 - POO</title>
    </head>
    <body>
        <?php
            require_once 'Xicara.php';
            $x1 = new Xicara;
            $x1 ->forma = "Redonda";
            $x1->tamanho = 1.5;
            $x1->cor = "marrom";
            $x1 ->cheia = false;
            $x1->beber();
            print_r($x1);
            
            
            
            
        ?>
    </body>
</html>
