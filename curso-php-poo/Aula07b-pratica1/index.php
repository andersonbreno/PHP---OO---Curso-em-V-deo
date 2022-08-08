<?php // último elemento da array ainda está para fazer

require_once 'classFlauta.php';
$f = array();
$f[0] = new Flute("Em Dó", "Yamaha", 281, "Níquel - banhada a prata", 3.500, "Disponível");
$f[1] = new Flute("Em Sol", "Armstrong", "XLX", "Prata", 7.500, "Indisponível");
$f[2] = new Flute("Piccolo", "Hamig", "XLY", "Grenadilha", 12.000, "Disponível");
$f[3] = new Flute("Em Dó", "Altus", 1307, "Prata - Britânia", 40.000, "Indisponível");

$f[0] ->apresentar();
$f[0] ->status();
?>