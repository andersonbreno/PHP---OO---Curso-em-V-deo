<pre>
<?php
require_once 'classPessoa.php';
require_once 'classAluno.php';
require_once 'classProfessor.php';
require_once 'classFuncionario.php';

$p1 = new Pessoa();
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionario();

$p1 ->setNome("Pedro");
$p2 ->setNome("Maria");
$p3 ->setNome("Claudio");
$p4 ->setNome("Fabiana");

$p2 ->setCurso("Informática");
$p3 ->setSalario(2500.75);
$p4 ->setSetor("Estoque");

$p1 ->setSexo("Masculino");
$p4 ->setSexo("Feminino");

$p3 ->receberAumento(550.20);
$p4 ->mudarTrabalho();
$p2 ->cancelarMatr();

print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);

// Colocar print_r poor último no código
?>
</pre>