<?php
// Atributos
class Flute {
private $tipo;    
private $marca;
private $modelo;
private $material;
private $preco;
private $disponibilidade;

// Métodos
function apresentar(){
    echo "<p>-------------------------</p>";
    echo "<p>Esta flauta é uma " . $this ->getTipo() . "</p>" . "<br>Marca -  " . $this ->getMarca() . "<br>Modelo - " . $this ->getModelo() . "<br>De - " . $this ->getMaterial();
    echo "<p>-------------------------</p>";
}
function status(){
    echo "Produto " . $this ->getDisponibilidade(); // -- Fazer ainda ...
}
// Métodos Especiais
public function __construct($ti, $ma, $mo, $mat, $pre, $dis) {
    $this ->tipo = $ti;
    $this ->marca = $ma;
    $this ->modelo = $mo;
    $this ->material = $mat;
    $this ->preco = $pre;
    $this ->disponibilidade = $dis;

} 

public function getTipo() {
return $this->tipo;
}

public function getMarca() {
return $this->marca;
}

public function getModelo() {
return $this->modelo;
}

public function getMaterial() {
return $this->material;
}

public function getPreco() {
return $this->preco;
}

public function getDisponibilidade()
{
return $this->disponibilidade;
}

public function setTipo($tipo) {
$this->tipo = $tipo;

return $this;
}

public function setMarca($marca) {
$this->marca = $marca;

return $this;
}
 
public function setModelo($modelo) {
$this->modelo = $modelo;

return $this;
}

public function setMaterial($material) {
$this->material = $material;

return $this;
}

public function setPreco($preco) {
$this->preco = $preco;

return $this;
}

public function setDisponibilidade($disponibilidade)
{
$this->disponibilidade = $disponibilidade;

return $this;
}
}









?>
