<?php
require_once 'numberChecker.php';

use PHPUnit\Framework\TestCase;

class testNumberChecker extends TestCase
{

    public function testPositiveEvenNumber(): void
    {
        $checker = new NumberChecker(4);
        $this->assertTrue($checker->isEven());
        $this->assertTrue($checker->isPositive());
        
    }
    public function testNegativeEvenNumber()
    {
        $checker = new NumberChecker(-4);
        $this->assertTrue($checker->isEven());
        $this->assertFalse($checker->isPositive());
    }
    public function testPositiveOddNumber()
    {
        $checker = new NumberChecker (5);
        $this->assertFalse($checker->isEven());
        $this->assertTrue($checker->isPositive());
    }
        public function testIsEvenWithZero()
    {
        $checker = new NumberChecker(0);
        $this->assertTrue($checker->isEven());
        $this->assertFalse($checker->isPositive());
    }
}
