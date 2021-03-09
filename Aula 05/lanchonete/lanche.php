
<?php
require "prato.php";
class Lanche extends Prato
{
  public $pao;
  public $recheio;
  public $molho;

  //fazer construtor
  public function toString()
  {
    return "Lanche{" + "pao=" + $this->pao + ", recheio=" + $this->recheio + ", molho=" + $this->molho + '}';
  }
}
