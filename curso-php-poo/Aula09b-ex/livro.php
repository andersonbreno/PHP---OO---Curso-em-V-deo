<?php
//require_once 'pessoa.php';
require_once 'publicacao.php';
class Livro implements Publicacao {
    // Atributos 
private $titulo;
private $autor;
private $totPaginas;
private $pagAtual;
private $aberto;
private $leitor;
private $ultPagina;
// Métodos
public function detalhes() {
    echo "Livro: " . $this ->titulo . "<hr>Autor: " . $this ->autor;
    echo "<br>Páginas: " . $this ->totPaginas . " - Página Atual: " . $this ->pagAtual;
    echo "<br>Sendo lido por: " . $this ->leitor ->getNome() . ", que tem " . $this ->leitor ->getIdade() . " anos de idade.";
    echo "<br>" . $this ->leitor ->fazerAniver([0]);
    
    
}
// Métodos Especiais 
public function __construct($titulo, $autor, $totPaginas,$leitor,$ultPagina) {
    $this ->titulo = $titulo;
    $this ->autor = $autor;
    $this ->totPaginas = $totPaginas;
    $this ->aberto = false;
    $this ->pagAtual = 0;
    $this ->leitor = $leitor;
    $this ->ultPagina = $ultPagina;
}
    
public function getTitulo()
{
return $this->titulo;
}

public function getAutor() {
return $this->autor;
}

public function getTotPaginas() {
return $this->totPaginas;
}

public function getPagAtual() {
return $this->pagAtual;
}
 
public function getAberto() {
return $this->aberto;
}
 
public function getLeitor() {
return $this->leitor;
}

public function getUltPagina() {
return $this->ultPagina;
}
public function setTitulo($titulo) {
$this->titulo = $titulo;

return $this;
}

public function setAutor($autor) {
$this->autor = $autor;

return $this;
}

public function setTotPaginas($totPaginas) {
$this->totPaginas = $totPaginas;

return $this;
}

public function setPagAtual($pagAtual) {
$this->pagAtual = $pagAtual;

return $this;
}

public function setAberto($aberto) {
$this->aberto = $aberto;

return $this;
}

public function setLeitor($leitor) {
$this->leitor = $leitor;

return $this;
}

public function setUltPagina($ultPagina) {
$this->ultPagina = $ultPagina;

return $this;
}

// Implementação Manual ...
public function abrir(){
    $this ->aberto = true;
}
public function fechar() {
    $this ->aberto = false;
    
}
public function folhear($p) {
    if ($p > $this ->totPaginas) {
        $this ->pagAtual = 0;
    } else {
        $this ->pagAtual = $p;
    }
}
public function avancarPag() {
    $this ->pagAtual++;
}
public function voltarPag() {
    $this ->pagAtual--;
}

}

?>