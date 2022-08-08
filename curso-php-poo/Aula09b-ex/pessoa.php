<?php
// require_once 'livro.php';
class Pessoa {
// Atributos
private $nome;
private $idade;
private $sexo;
// Métodos 
public function fazerAniver() {
    // $this ->idade++;
    if ($this ->idade <= 35) {
        echo "<p>Leitor Jovem</p>";
    } else {
        echo " <p>Leitor experiente</p>";
    }
       
}
// Métodos Especiais 
public function __construct($nome, $idade, $sexo) {
    $this ->nome = $nome;
    $this ->idade = $idade;
    $this ->sexo = $sexo;
}
 
public function getNome() {
return $this->nome;
}
 
public function getIdade() {
return $this->idade;

}

public function getSexo() {
return $this->sexo;
}

public function setNome($nome) {
$this->nome = $nome;

return $this;
}

public function setIdade($idade) {
$this->idade = $idade;

return $this;
}

public function setSexo($sexo) {
$this->sexo = $sexo;

return $this;
}
}


























?>