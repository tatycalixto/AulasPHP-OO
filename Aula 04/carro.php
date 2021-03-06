<?php
require_once "veiculo.php";

class Carro extends Veiculo
{
	public $teto_solar = true;

	function __construct($placa, $cor)
	{
		$this->placa = $placa;
		$this->cor = $cor;
	}

	function abrirTetoSolar()
	{
		echo 'Abrir teto solar';
	}
}


$carro = new Carro('ABC1234', 'Branco');


echo '<pre>';
print_r($carro);
echo '</pre>';
echo '<hr />';

$carro->abrirTetoSolar();
echo '<br />';
$carro->acelerar();
echo '<br />';
$carro->freiar();
echo '<br />';
$carro->trocarMarcha();
