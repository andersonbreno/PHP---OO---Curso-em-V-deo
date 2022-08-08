<?php
class Lutador {
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria;
    private $vitorias, $derrotas, $empates;
    // Métodos
    function apresentar() {
        echo "<p>------------------------</p>";
        echo "<p>Chegou a Hora ! O lutador ... </p> " . $this ->getNome();
        echo "<br>Diretamente do(a) " . $this ->getNacionalidade(); 
        echo "<br>Com " . $this ->getIdade() . " anos." . " Pesando " . $this ->getPeso() . " Kg";
        echo "<br>Com " . $this ->getVitorias() . " vitórias, " . $this ->getDerrotas() . " derrotas e " . $this ->getEmpates() . " empates.";
    }
    function status() {
        echo "<p>---------------------------<p>";
        echo "<p>" . $this ->getNome() . " é um peso " . $this -> getCategoria();
        echo "<br>Com " . $this ->getVitorias() . " vitórias <br>" . $this ->getDerrotas() . " derrotas" . " e" . "<br>" . $this ->getEmpates() . " empate";
    }
    function ganharLuta() {
        $this ->setVitorias($this ->getVitorias() + 1);
        // $this ->vitorias = $this ->getVitorias() + 1;
    }
    function perderLuta () {
        $this ->setDerrotas($this ->getDerrotas() + 1);
    }
    function empatarLuta() {
        $this ->setEmpates($this ->getEmpates() + 1);
    }
    // Métodos Especiais
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this ->nacionalidade = $na;
        $this ->idade = $id;
        $this ->altura = $al;
        $this ->setPeso($pe);
        $this ->vitorias = $vi;
        $this ->derrotas = $de;
        $this ->empates = $em;
    }
        public function getNome() {
                return $this->nome;
        }
        public function getNacionalidade() {
                return $this->nacionalidade;
        }
        public function getIdade() {
                return $this->idade;
        }
        public function getAltura() {
                return $this->al;
        }
        public function getPeso() {
                return $this->peso;
        }
        public function getCategoria() {
        return $this->categoria;
        }
        public function getVitorias() {
                return $this->vitorias;
        }

        public function getDerrotas() {
                return $this->derrotas;
        }
        public function getEmpates() {
                return $this->empates;
        }
        public function setNo($no) {
                $this->no = $no;

                return $this;
        } 
        public function setNa($na) {
        $this->na = $na;

        return $this;
    }
        public function setId($id) {
                $this->id = $id;

                return $this;
        }
        public function setAl($al) {
                $this->al = $al;

                return $this;
        }
        public function setPeso($peso) {
            $this ->peso = $peso;
            $this ->setCategoria(); 
        }
        private function setCategoria() {
        if ($this ->peso < 52.2) {
            $this ->categoria = "Inválido";
        } elseif ($this ->peso <= 70.3) {
            $this ->categoria = "Leve";
        } elseif ($this ->peso <= 83.9) {
            $this ->categoria = "Médio";
        } elseif ($this ->peso <= 120.2) {
            $this ->categoria = "Pesado";
        } else {
            $this ->categoria = "Inválido";
        }
        return $this;
        }
        
        public function setVitorias($vitorias) {
                $this->vitorias = $vitorias;

                return $this;
        }
        public function setDerrotas($derrotas) {
                $this->derrotas = $derrotas;

                return $this;
        }
        public function setEmpates($em) {
                $this->em = $em;

                return $this;
        }   
}
?>