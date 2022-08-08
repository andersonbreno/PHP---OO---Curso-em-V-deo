<pre>
<?php
require_once 'pessoa.php';
require_once 'livro.php';
$p[0] = new Pessoa("Anderson", 36, "Masculino");
$p[1] = new Pessoa("Ana", 34, "Feminino");
$p[2] = new Pessoa("José", 35, "Masculino");

$p[0] ->getIdade();

$l[0] = new Livro("Flauta para Iniciantes", "Breno Azevedo", 150, $p[0], 150);
$l[1] = new Livro("Música e Programação", "Aguiar", 200, $p[1], 200);
$l[2] = new Livro("Música e Tecnologia", "Azevedo", 250, $p[2], 250);

$p[0] ->fazerAniver();
$l[0] ->abrir();
$l[0] ->folhear(150);
$l[1] ->folhear(200);
$l[2] ->folhear(38);
// $l[0] ->voltarPag();
$l[0] ->fechar(150);
$l[0] ->detalhes();
echo "<p>----------------</p>";

$l[1] ->detalhes();
echo "<p>----------------</p>";

$l[2] ->detalhes();



?>
</pre>