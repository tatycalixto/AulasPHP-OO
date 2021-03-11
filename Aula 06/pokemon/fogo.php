<?php
require "pokemon.php";
class Fogo extends Pokemon
{
  public $fraquezas;

  public function mostrarFraquezas()
  {
    return $this->fraquezas = "Fraquezas: Water, Ground,Rock";
  }
}
