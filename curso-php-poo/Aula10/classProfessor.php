<?php
require_once 'classPessoa.php';
Class Professor extends Pessoa {
    // Atributos 
    private $especialidade;
    private $salario;
    // Métodos
    public function receberAumento($aum) {
        $this ->salario += $aum;
    
    }
    // Métodos especiais 
    public function getEspecialidade()
    {
        return $this->espec;
    }

    public function setEspecialidade($especialidade)
    {
        $this->espec = $especialidade;

        return $this;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
}