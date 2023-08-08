<?php
class MCMCalculator
{
    public $numero1;
    public $numero2;

    public function __construct($numero1, $numero2)
    {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    public function calcularMCM()
    {
        $maximo = max($this->numero1, $this->numero2);
        $minimo = min($this->numero1, $this->numero2);
        $mcm = $maximo;

        while ($mcm % $minimo !== 0) {
            $mcm += $maximo;
        }

        return $mcm;
    }
}

$numero1 = 12;  
$numero2 = 18;

$calculadora = new MCMCalculator($numero1, $numero2);
$mcm = $calculadora->calcularMCM();

echo "El MCM de {$numero1} y {$numero2} es: {$mcm}";