<?php
class Suma
{
    public $num1;
    public $num2;
    public $num3;

    public function __construct($num1, $num2, $num3)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;
    }

    public function getSuma()
    {
        $result = $this->num1 + $this->num2 + $this->num3;
        return $result;
    }
}

$num1 = 10;
$num2 = 20;
$num3 = 30;

$calculadora = new Suma($num1, $num2, $num3);
$suma = $calculadora->getSuma();

echo "La suma de {$num1}, {$num2} y {$num3} es: {$suma}";
