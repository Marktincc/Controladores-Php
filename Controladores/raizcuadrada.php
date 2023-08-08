<?php
class RaizCuadrada
{
    public $numeros;

    public function __construct(...$numeros)
    {
        $this->numeros = $numeros;
    }

    public function calcularRaicesCuadradas()
    {
        $raices = array_map(function($numero) {
            return sqrt($numero);
        }, $this->numeros);

        return $raices;
    }
}

$numero1 = 16;

$calculadora = new RaizCuadrada($numero1);
$raices = $calculadora->calcularRaicesCuadradas();

echo "Las raíces cuadradas de los números son: ";
echo implode(', ', $raices);
