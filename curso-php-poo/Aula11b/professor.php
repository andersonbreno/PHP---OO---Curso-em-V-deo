<?php
require_once 'pessoa.php';

class Professor extends Pessoa {
    private $especiaidade;
    private $salario;

public function receberAumento() {
    echo "<p>Professor recebeu aumento de 300</p>";
}    

public function getEspecialidade() {
        return $this->especiaidade;
    }

public function setEspecialidade($especiaidade) {
        $this->especiaidade = $especiaidade;

        return $this;
    }
 
public function getSalario() {
        return $this->salario;
    }

public function setSalario($salario){
        $this->salario = $salario + 300;

        return $this;
    }
}
