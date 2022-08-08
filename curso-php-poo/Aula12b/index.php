<pre><?php
require_once 'mamifero.php';
require_once 'canguru.php';
require_once 'cachorro.php';
require_once 'reptil.php';
require_once 'cobra.php';
require_once 'tartaruga.php';
require_once 'peixe.php';
require_once 'goldfish.php';
require_once 'ave.php';
require_once 'arara.php';

$m = new Mamifero;
$a = new Ave;
$r = new Reptil;
$c = new Canguru;
$ca = new Cachorro;
$co = new Cobra;
$t = new tartaruga;
$p = new goldfish;
$av = new arara;

$m ->setPeso("50kg");
$m ->locomover();
$a ->locomover();
$r ->locomover(); 
$c ->locomover();
$c ->usarBolsa();
$ca ->enterrarOsso();
$ca ->abanarRabo();
$ca ->emitirSom();
$p ->locomover();

?>
</pre>