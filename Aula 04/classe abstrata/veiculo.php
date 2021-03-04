<?php
abstract class Veiculo_abs
{
  public $placa;
  public $cor;

  // Força a classe que estende ClasseAbstrata a definir esse método
  abstract public function acelerar();
  abstract public function freiar();
  //abstract public function trocarMarcha();

  function trocarMarcha()
  {
    echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
  }
}
