<?php
require_once 'classPessoa.php';
class Aluno extends Pessoa {
    //Atributos 
    private $matricula;
    private $curso;
    //Métodos 
    public function cancelarMatr() {
        echo "<p>Matrícula do aluno será cancelada</p>";
    }
    //Métodos Especiais 
    // Sem o métodoconstrutor 
    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}