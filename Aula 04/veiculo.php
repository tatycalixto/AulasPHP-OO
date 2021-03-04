<?php
class Veiculo
{
  public $placa = null;
  public $cor = null;


  function acelerar()
  {
    echo 'Acelerar';
  }

  function freiar()
  {
    echo 'Freiar';
  }

  //polimorfismo

  function trocarMarcha()
  {
    echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
  }
}
