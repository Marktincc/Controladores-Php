<?php
class Porcentaje
{
    private $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function calcularPorcentaje($porcentaje)
    {
        $resultado = ($this->numero * ($porcentaje / 100));
        return $resultado;
    }
}

$numero = 45;
$porcentaje = 30;

$calculadora = new Porcentaje($numero);
$resultado = $calculadora->calcularPorcentaje($porcentaje);

echo "{$porcentaje}% de {$numero} es: {$resultado}";
