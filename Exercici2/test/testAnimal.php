<?php
use PHPUnit\Framework\TestCase;

require_once 'animal.php';
require_once 'gos.php';
require_once 'gat.php';

class testAnimal extends TestCase
{
    public function testCrearGos()
    {
        $gos = new gos("Bobby");
        $this->assertInstanceOf(gos::class, $gos);
        $this->assertInstanceOf(animal::class, $gos);
    }
public function testCrearGat()
    {
        $gat = new gat("Misifu");
        $this->assertInstanceOf(gat::class, $gat);
        $this->assertInstanceOf(animal::class, $gat);
    }

     public function testSoGos()
    {
        $gos = new gos("Bobby");
        
        $this->expectOutputString("Bobby diu, Bup, bup!");
        $gos->makeSound();

    }
    public function testSoGat()
    {
        $gat = new gat("Misifu");
        
        $this->expectOutputString("Misifu diu, Meu!");
        $gat->makeSound();
    }
public function testSoGosAmbDiferentsNoms()
    {
        $nombres = ["Rex", "Max", "Toby"];
        
        foreach ($nombres as $nombre) {
            $gos = new gos($nombre);
            $this->expectOutputString($nombre . " diu, Bup, bup!");
            $gos->makeSound();
        }
    }
    public function testSoGatAmbDiferentsNoms()
    {
        $nombres = ["Whiskers", "Luna", "Felix"];
        
        foreach ($nombres as $nombre) {
            $gat = new gat($nombre);
            $this->expectOutputString($nombre . " diu, Meu!");
            $gat->makeSound();
        }
    }
}


?>
