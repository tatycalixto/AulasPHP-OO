<?php
require "televisao.php";

class ControleRemoto
{
  //atributo
  public $tv;

  //método construtor
  public function __construct($tv)
  {
    $this->tv = $tv;
  }

  //set
  function setTv($tv)
  {
    $this->tv = $tv;
  }
  //get
  function getTv()
  {
    return $this->tv;
  }
}

$objTV = new Televisao(9, 30);
echo "Canal: " . $objTV->getCanal();
echo " - Volume: " . $objTV->getVolume();
echo "<hr/>";
$objControleRemoto = new ControleRemoto($objTV);
$objControleRemoto->setTv($objTV->adicionarCanal(1));
echo "<br/>";
echo "Canal Modificado usando + " . $objControleRemoto->getTv();
$objControleRemoto->setTv($objTV->adicionarVolume(1));
echo "<br/>";
echo "Volume Modificado usando + " . $objControleRemoto->getTv();

//indicando canal direto
echo "<hr/>";
$objTV->setCanal(13);
$objControleRemoto->setTv($objTV->getCanal());
echo "Trocar para um canal indicado: " . $objControleRemoto->getTv();
echo "<br/>";
$objTV->setVolume(60);
$objControleRemoto->setTv($objTV->getVolume());
echo "Trocar para um volume indicado: " . $objControleRemoto->getTv();
