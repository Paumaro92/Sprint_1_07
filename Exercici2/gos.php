<?php
require_once 'animal.php';
class gos extends animal {
    public function makeSound() {
        echo $this->nom . " diu, Bup, bup!";
    }
  
}
?>