<?php
require_once "veiculo.php";

class Moto extends Veiculo
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
    echo 'Empinar, moto do tipo: ' . $this->tipo;
  }


  function trocarMarcha()
  {
    echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
  }
}

$moto = new Moto('DEF1122', 'Preto', 'Kawasaki');

echo '<pre>';
print_r($moto);
echo '</pre>';

echo '<br/>';
$moto->empinar();
echo '<br />';
$moto->acelerar();
echo '<br />';
$moto->freiar();
echo '<br/>';
$moto->trocarMarcha();
echo '<br/>';
echo '<hr />';
$moto2 = new Moto('DEU1122', 'Vermelha', 'pop100');
echo '<pre>';
print_r($moto2);
echo '</pre>';

echo '<br/>';
$moto2->empinar();
echo '<br />';
$moto2->acelerar();
echo '<br />';
$moto2->freiar();
echo '<br/>';
$moto2->trocarMarcha();
