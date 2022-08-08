<?php
require_once 'aluno.php';
class bolsista extends Aluno {
    private $bolsa;
    
    public function renovarBolsa() {
      echo "<p>Bolsa renonada</p>";  
    }
    
    public function pagarMensalidade() {
        echo "<p>".$this ->nome . " é bolsista! Pagamento com desconto</p>";
    }

    public function getBolsa() {
        return $this->bolsa;
    }
 
    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;

        return $this;
    }
}
