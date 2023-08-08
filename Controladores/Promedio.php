<?php

class Promedio
{
    public $numeros;

    public function __construct($numeros)
    {
        $this->numeros = $numeros;
    }

    public function calcularPromedio()
    {
        $total = array_sum($this->numeros);
        $cantidad = count($this->numeros);
        $promedio = $total / $cantidad;

        return $promedio;
    }
}

$numeros = array(10, 20, 30, 40, 50);  
$calculadora = new Promedio($numeros);
$promedio = $calculadora->calcularPromedio();

echo "El promedio de los números es: {$promedio}";
?>

