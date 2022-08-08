<?php


class Xicara {
   var $forma;
   var $tamanho;
   var $cor;
   var $cheia;
   
   
   function beber(){
       if ($this->cheia == true) {
           echo "<p>Eu vou tomar café!<p>";
       } else {
           echo "<p>Tenho que esperar mais um pouco</p>";   
       }             
       
}
}
