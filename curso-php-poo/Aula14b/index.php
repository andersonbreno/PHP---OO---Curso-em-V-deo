<pre>
<?php
require_once 'acoesVideo.php';
require_once 'video.php';
require_once 'gafanhoto.php';
require_once 'visualizacao.php';

$v[0] = new Video("Aula 01 de POO");
$v[1] = new Video("Aula 12 de PHP");
$v[2] = new Video("Aula 15 de HTML5");

$g[0] = new Gafanhoto("Anderson", "36", "M", "Anderflute");
$g[1] = new Gafanhoto("Beatriz", "32", "F", "Biacode");

$vis[0] = new Visualizacao($g[0], $v[2]); // Anderson assiste HTML5
$vis[1] = new Visualizacao($g[0], $v[1]); // Anderson assiste aula de PHP

$vis[0]->avaliar();
$vis[1]->avaliarPorcen(85);
print_r($vis);

?>
</pre>