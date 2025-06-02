<?php
require_once 'animal.php';
class gat extends animal
{
    public function makeSound()
    {
        echo $this->nom . " diu, Meu!";
    }
}
?>