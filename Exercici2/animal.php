<?php
abstract class animal
{
    protected $nom;

    public function __construct ($nom)
    {
        $this->nom = $nom;
    }
     abstract public function makeSound();
    

}
?>