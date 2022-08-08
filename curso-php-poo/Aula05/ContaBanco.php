
<?php

Class ContaBanco {
    // Atributos 
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    // Métodos
    public function abrirConta($t) {
        $this ->setTipo($t);
        $this ->setStatus(true);
            if ($t == "CC") {
                 $this ->setSaldo(50);
            } elseif ($t == "CP") {
                $this ->saldo = 150;
            }
        }
    public function fecharConta() {
        if ($this ->getSaldo() > 0) {
            echo "<p>Conta ainda tem valor restante. Não pode ser encerrada.</p>";
        } elseif ($this -> getSaldo() < 0) {
            echo "<p>/Você está com sald o devedor. Conta não pode ser encerrada.</p>";
        } else {
            $this ->setStatus(false);
            echo "<p>Conta de " . $this->getDono() . " encerrada com sucesso.</p>";
        }
    }
    public function depositar($v) {
        if ($this ->getStatus()) {
            $this ->setSaldo($this ->getSaldo() + $v);
            // $this ->saldo = $this ->saldo + $v;
            echo "<p>Deposito de R$ $v na conta de " . $this->getDono()."</p>";
        } else {
            echo "<p>Conta encerrada. Não consigo depositar</p>";
        }
    }
    public function sacar($v) {
        if ($this ->getStatus()) {
            if ($this ->getSaldo() >= $v) {
                //$this->saldo = $this->saldo-$v;
                $this->setSaldo($this->getSaldo() - $v);
                echo "Saque de $v autorizado na conta de " . $this->getDono()."</p>";
            } else {
                echo "<p>Saldo Insuficiente para saque.</p>";
            }
        } else {
            echo "<p>Conta Encerrada. Saque Indisponível</p>";
        }
    }
    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } elseif ($this->getTipo() == "CP") {
            $v = 20;
        } if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada da conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>ERRO = Impossível fazer pagamento</p>";
        }
        
    }
    // Métodos Especiais
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso</P>";
    }
    /*public function getNumConta() {
        return $this ->numConta;
    }
    public function setNumConta($n) {
        $this ->numConta = $n;
    } */
    



    /**
     * Get the value of numConta
     */ 
    public function getNumConta()
    {
        return $this->numConta;
    }

    /**
     * Set the value of numConta
     *
     * @return  self
     */ 
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of dono
     */ 
    public function getDono()
    {
        return $this->dono;
    }

    /**
     * Set the value of dono
     *
     * @return  self
     */ 
    public function setDono($dono)
    {
        $this->dono = $dono;

        return $this;
    }

    /**
     * Get the value of saldo
     */ 
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     *
     * @return  self
     */ 
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
?>