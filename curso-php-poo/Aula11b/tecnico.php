<?php
require_once 'aluno.php';

class Tecnico extends Aluno {
    private $registroProfissional;

    public function praticar() {
        echo "<p>Este aluno pode praticar em horário de aula</p>";
    }

    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }
 
    public function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;

        return $this;
    }
}