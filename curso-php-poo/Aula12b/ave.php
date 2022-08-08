<?php
require_once 'animal.php';

class Ave extends Animal {
    private $corPena;

    public function locomover() {
        echo "<p>Voando</p>";
    }
    public function alimentar() {
        echo "<p>Comendo frutas</p>";
    }
    public function emitirSom() {
        echo "<p>Som de ave</p>";
    }
    public function fazerNinho() {
        echo "<p>Constuiu um ninho</p>";
    }

    public function getCorPena() {
        return $this->corPena;
    }
 
    public function setCorPena($corPena) {
        $this->corPena = $corPena;

        return $this;
    }
}