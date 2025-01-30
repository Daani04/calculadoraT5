<?php
namespace App;
class Calculadora {
    public function suma($a, $b) {
        return $a + $b;
    }

    public function resta($a, $b){
        return $a - $b;
    }

    public function multi($a, $b) {
        return $a * $b;
    }

    public function divi($a, $b) {
        return $a / $b;
    }

    public function raiz($a) {
        return sqrt($a);
    }
}