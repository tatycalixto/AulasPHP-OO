<?php
require "prato.php";
class Pizza extends Prato
{
  public $molho;
  public $recheio;
  public $borda;


  // vou deixar os set e gets com vocês
  //fazer construtor



  public function toString()
  {
    return "Pizza{" + "molho=" + $this->molho + ", recheio=" + $this->recheio + ", borda=" + $this->borda + '}';
  }
}
