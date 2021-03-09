<?php
require "prato.php";
class Salgadinho extends Prato
{
  public $recheio;
  public $massa;
  //fazer construtor

  public function toString()
  {
    return "Salgadinho{" + "recheio=" + $this->recheio + ", massa=" +  $this->massa + '}';
  }
}
