<?php
use PHPUnit\Framework\TestCase;
use App\Calculadora;
class CalculadoraTest extends TestCase {
    public function testSuma() {
        $calc = new Calculadora();
        $this-> assertEquals(5, $calc->suma(3,2));
    }

    public function testResta() {
        $res = new Calculadora();
        $this-> assertEquals(1, $res->resta(3,2));
    }

    public function testMulti() {
        $multi = new Calculadora();
        $this-> assertEquals(25, $multi->multi(5, 5));
    }

    public function testDivi() {
        $divi = new Calculadora();
        $this-> assertEquals(1, $divi->divi(5, 5));
    }

    public function testRaiz() {
        $raiz = new Calculadora();
        $this-> assertEquals(10, $raiz->raiz(100));
    }
}