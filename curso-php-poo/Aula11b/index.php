<pre>
<?php
require_once 'visitante.php';
require_once 'aluno.php';
require_once 'bolsista.php';
require_once 'tecnico.php';

// $p1 = new pessoa; Classe abstrata. Por isso não imprime.

$v1 = new Visitante;
$v1 ->setNome("Anderson");
$v1 ->setIdade(36);
$v1 ->setSexo("Masculino");

print_r($v1);

$al1 = new Aluno;
$al1 ->setNome("José");
$al1 ->setIdade(21);
$al1 ->setSexo("M");
$al1 ->setCurso("Música");
$al1 ->setMatricula("2022/03");
$al1 ->pagarMensalidade();

$al2 = new Aluno;
$al2 ->setNome("Joselha");
$al2 ->setIdade(24);
$al2 ->setSexo("F");
$al2 ->setCurso("Análise e Desenvolvimento de Sistemas");
$al2 ->setMatricula("2022/02");

print_r($al1);
print_r($al2);

$b1 = new bolsista;
$b1 ->setNome("Breno");
$b1 ->setIdade(30);
$b1 ->setSexo("M");
$b1 ->setMatricula("2022/04");
$b1 ->setBolsa(12.5);
$b1 ->setCurso("Música");
$b1 ->pagarMensalidade();
 
print_r($b1);

$p1 = new Professor;
$p1 ->setNome("Antonio");
$p1 ->setIdade(58);
$p1 ->setSexo("M");
$p1 ->setEspecialidade("Prof. de Matemática");
$p1 ->setSalario(3500);
$p1 ->receberAumento();

print_r($p1);

$t1 = new Tecnico;
$t1 ->setNome("Joana");
$t1 ->setIdade(37);
$t1 ->setSexo("F");
$t1 ->setMatricula("2022/05");
$t1 ->setCurso("Infra-estrutura de Redes");
$t1 ->setRegistroProfissional("Matr. nº 12345");
$t1 ->praticar();
print_r($t1);

// echo "<p>Este aluno pratica em horário de aula</P>";

?>
</pre>