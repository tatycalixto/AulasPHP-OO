<?php
require_once "veiculo.php";

class Moto extends Veiculo_abs
{
  public $tipo;

  function __construct($placa, $cor, $tipo = null)
  {
    $this->placa = $placa;
    $this->cor = $cor;
    $this->tipo = $tipo;
  }

  function empinar()
  {
    echo 'Empinar';
  }

  function acelerar()
  {
    echo 'Acelerar moto';
  }
  function freiar()
  {
    echo 'Freiar moto';
  }
  function trocarMarcha()
  {
    echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
  }
}

$moto = new Moto('DEF1122', 'Preto', 'pop100');

echo '<pre>';
print_r($moto);
echo '</pre>';
echo '<hr />';
echo '<br/>';
$moto->empinar();
echo '<br />';
$moto->acelerar();
echo '<br />';
$moto->freiar();
echo '<br />';
$moto->trocarMarcha();
