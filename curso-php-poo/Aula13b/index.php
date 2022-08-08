<h1>
<?php
require_once 'animal.php';
require_once 'mamifero.php';
require_once 'lobo.php';
require_once 'cachorro.php';

/*$m = new Mamifero;
$m ->emitirSom();

$l = new Lobo;
$l -> emitirSom();*/

$c = new Cachorro;
//$c ->emitirSom();
$c ->reagirFrase("Olá Cachorrinho!");
$c ->reagirFrase("Vai apanhar!");
$c ->reagirHoraMin(11,45);
$c ->reagirHoraMin(21,00);
$c ->reagirDono(true);
$c ->reagirDono(false);
$c ->reagirIdadePeso(2,12.5);
$c ->reagirIdadePeso(17,4.5);

?>
</h1>