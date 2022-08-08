<?php
require_once 'classLutador.php';
class Luta {
    // Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;


    // Métodos Públicos
    public function marcarLuta($l1, $l2) {
     if ($l1 ->getCategoria() === $l2 ->getCategoria() && ($l1 != $l2)) {
         $this ->aprovada = true;
         $this ->desafiado = $l1;
         $this ->desafiante = $l2;
     } else {
         $this ->aprovada = false;
         $this ->desafiado = null;
         $this ->desafiante = null;
     }  
    }
    public function lutar() {
        if ($this ->aprovada) {
            $this ->desafiado ->apresentar();
            $this->desafiante ->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor) {
                case 0: // empate
                  echo "<p>Empate!</p>";
                  $this ->desafiado ->empatarLuta();
                  $this ->desafiante ->empatarLuta();  
                    break;
                
                case 1: //desafiado vence
                   echo "<p>".$this ->desafiado ->getNome()." Venceu"."</p>";
                   $this ->desafiado ->ganharLuta();
                   $this ->desafiante ->perderLuta();  
                    break;
                
                case 2: //desafiante vence
                    Echo "<p>".$this ->desafiante ->getNome()." Venceu"."</p>";
                    $this ->desafiado ->perderLuta();
                    $this ->desafiante ->ganharLuta();
                    break;
                    
            }
        } else{
            echo "<p>Luta não pode acontecer</p>";
        }
    }

    // Métodos Especiais 
    public function __construct() {
        // não tem construtor nessa classe
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }
 
    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;

        return $this;
    }

    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;

        return $this;
    }

    public function setRounds($rounds) {
        $this->rounds = $rounds;

        return $this;
    }

    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;

        return $this;
    }
}




?>